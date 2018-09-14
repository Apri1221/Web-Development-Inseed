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
    }

	public function daftar() {
		$this->load->helper('url');
		$this->load->view('daftar');
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
		'password' => $enc_password,
		'jk' => $this->input->post('JenisKelamin')
         );
        // Ini untuk ngecek email yang dikirim udah ada atau belum
        // $count_emails = $this->Autentikasi_model->countPublicUsersWithEmail($this->input->post('email'));
        // if ($count_emails > 0) {
        //     this->load->view('daftar');
        // }else {
            $data = $this->model->Insert('user', $data);
            redirect('dashboard'); 
        // }
	}

	public function login(){
		$this->load->view('masuk');
	}

	public function cek_login(){
		$username = $this->input->post("username");
        $password = md5($this->input->post("password"));
		        
        $validate = $this->Autentikasi_model->validate($username,$password);
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
            // access login for admin
        } else {
            $this->load->view('masuk');
        }
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('masuk');
    }
}
?>
	