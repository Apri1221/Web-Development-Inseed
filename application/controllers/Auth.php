<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //load library form validasi
        $this->load->library('form_validation');
        //load model admin
        $this->load->model('Autentikasi_model');
        $this->load->library('session');
		$this->load->library('cart');
        
    }

    public function daftar() {
        $this->load->helper('url');
        $this->load->view('login_as');
    }
    
    public function asUser() {
        $this->load->helper('url');
        $data['user_level'] = '0';
        $this->load->view('daftar',$data);
    }
    public function asSeller() {
        $this->load->helper('url');
        $data['user_level'] = '3';
        $this->load->view('daftar',$data);
    }

    public function asKoperasi() {
        $this->load->helper('url');
        $data['user_level'] = '2';
        $this->load->view('daftar',$data);
    }
    
    public function register() {
        $options = ['cost' => 5];
        $this->load->model('model');
        $username = $this->input->post('account');    
        $password = $this->input->post('pw1');
        $enc_password = md5($password);
        $data = array(
        'namaDepan' => $this->input->post('firstname'),
        'namaBelakang' => $this->input->post('lastname'),
        'namaAkun' => $this->input->post('account'),
        'tanggalLahir' => $this->input->post('birthday'),
        'noHP' => $this->input->post('phone'),
        'email' => $this->input->post('email'),
        'user_level' => $this->input->post('user_level'),
        'password' => $enc_password,
        'jk' => $this->input->post('JenisKelamin')
         );
        
        // ngecek apakah udah ada username yang sama
        $validate = $this->Autentikasi_model->validates($username);
        if(count($validate) === 0){
            $this->model->Insert('user', $data);
            $val = $this->Autentikasi_model->validates($username);
            $fullname = $val[0]['namaDepan']+" "+$val[0]['namaBelakang'];
            $name  = $val[0]['namaAkun'];
            $email = $val[0]['email'];
            $noHp = $val[0]['noHP'];
            $level = $val[0]['user_level'];
            $sesdata = array(
                'fullname'  => $fullname,
                'username'  => $name,
                'noHP'      => $noHP,
                'email'     => $email,
                'level'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            redirect('/auth/thanks_daftar');
            // access login for admin
        }
        else{
            redirect('/auth/thanks_daftar');
        }
        // }
    }

    public function update() {
        $this->load->model('model');

        $username = $this->input->post('account');    
        $username1 = $this->input->post('username1');    
        $password = $this->input->post('pw1');
        $enc_password = md5($password);
        
        // ngecek apakah udah ada username yang sama
        $validate = $this->Autentikasi_model->validates($username);
        if(count($validate) === 0){

            $data = array(
                'namaAkun' => $this->input->post('account'),
                'noHP' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'password' => $enc_password,
                'foto' => '0'
            );

            $this->model->update_data($username1, $data, 'user');
            
            // manajemen file
            $config['upload_path']='./assets/image/member';
            $config['allowed_types']='jpg|png|jpeg';
            $config['max_size'] = '1024';
            $config['file_name'] = $username.'.jpg';
            $this->load->library('upload',$config);
            $this->upload->do_upload('file_name');
            $up_file_name=$this->upload->data();

            // disini auto set session
            $val = $this->Autentikasi_model->validates($username);
            $name  = $val[0]['namaAkun'];
            $email = $val[0]['email'];
            $level = $val[0]['user_level'];
            $sesdata = array(
                'username'  => $name,
                'email'     => $email,
                'level'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            redirect('/dashboard');
            // access login for admin
        }
        else{
            redirect('/dashboard');
        }
        // }
    }
    function thanks_daftar(){
        $this->load->view('thanks_daftar');
    }

    public function cairkan(){
        $this->load->model('model');
        $username = $this->session->userdata('username');
        $nominalAwal = $this->input->post('nominalAwal');
        $nominal = $this->input->post('nominal');
        $saldo = $nominalAwal - $nominal; 
        $password = $this->input->post('pw1');
        $enc_password = md5($password);
        $date = $this->input->post('tglTarik');
        $validate = $this->Autentikasi_model->validate($username, $enc_password,'user');
        if(count($validate) >= 0){
            $data = array(
                'noRek' => $this->input->post('norek'),
                'tglTarik' => $date,
                'saldo' => $saldo,
            );

            $this->model->update_data($username, $data, 'user');
            $sesdata = array(
                'noRek'  => $this->input->post('norek'),
                'tglTarik' => $date,
                'bank'     => $this->input->post('bank'),
                'nominal' => $nominal,
                'saldo' => $saldo,
            );
            $this->session->set_userdata($sesdata);
            redirect('/dashboard/cairkan');
        } else{
            redirect('/dashboard');
        }
    }

    public function login(){
        $this->load->view('masuk');
    }

    public function cek_login(){
        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));
		if ($username == "adminsuper10r") {
			$validate = $this->Autentikasi_model->validate($username,$password,'administrator');
			if(count($validate) > 0){
            $name  = $validate[0]['namaAkun'];
            $level = $validate[0]['user_level'];
            $sesdata = array(
                'username'  => $name,
                'level'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            redirect('/dashboard');
			}
			else {
				echo $username;
				echo $password;
		}
		}
        else {   
        $validate = $this->Autentikasi_model->validate($username,$password,'user');
        if(count($validate) > 0){
            $name  = $validate[0]['namaAkun'];
            $email = $validate[0]['email'];
            $level = $validate[0]['user_level'];
            $sesdata = array(
                'username'  => $name,
                'email'     => $email,
                'level'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            redirect('/cart/add_to_cart');
            // access login for admin
        } else {
			
            $this->load->view('masuk');
        }
		}
		}
		
	
	 public function cek_loginCart(){
        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));
		if ($username == "adminsuper10r") {
			$validate = $this->Autentikasi_model->validate($username,$password,'administrator');
			if(count($validate) > 0){
            $name  = $validate[0]['namaAkun'];
            $level = $validate[0]['user_level'];
            $sesdata = array(
                'username'  => $name,
                'level'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            redirect('/dashboard');
			}
			else {
				echo $username;
				echo $password;
		}
		}
        else {   
        $validate = $this->Autentikasi_model->validate($username,$password,'user');
        if(count($validate) > 0){
            $name  = $validate[0]['namaAkun'];
            $email = $validate[0]['email'];
            $level = $validate[0]['user_level'];
            $sesdata = array(
                'username'  => $name,
                'email'     => $email,
                'level'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            redirect('/cart/add_to_cart');
            // access login for admin
        } else {
			
            $this->load->view('masuk');
        }
		}
    }
	

    public function logout()
    {
        session_unset();
        $this->session->sess_destroy();
		$this->cart->destroy();
        redirect('auth/login');
    }
}
?>