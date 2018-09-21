<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        //load library form validasi
        $this->load->library('form_validation');
        $this->load->library('session');
        //load model admin
        $this->load->model('Model');
    }

	
	public function index() {
        if (null !== $this->session->userdata('level')){
            if ($this->session->userdata('level') === '1'){
                $this->load->view("dashboard_admin_kelolaUser");
            }
            else
                $username = $this->session->userdata('username');
                $data['result'] = $this->Model->cekuser($username);
                $this->load->view("dashboard_profil",$data); 
        } else {
            $this->load->view('masuk');
        }
	}

	public function artikel() {
		
	}

	public function mart() {
		if ($this->session->userdata('level') ==='1' || $this->session->userdata('level') === '2'){
            $this->load->view("dashboard");
        } else {
            $this->load->view('masuk');
        }
	}

	public function proyek() {
		if ($this->session->userdata('level')!==0){
            $this->load->view("dashboard");
        } else {
            $this->load->view('masuk');
        }
	}

	public function cairkan() {
		if ($this->session->userdata('level')!==0){
            $username = $this->session->userdata('username');
            $data['result'] = $this->Model->cekuser($username);
            $this->load->view("dashboard_user_cairkan", $data);
        } else {
            $this->load->view('masuk');
        }
	}

    public function pesanan() {
		if ($this->session->userdata('level')!==0){
            $this->load->model('market');
            $username = $this->session->userdata('username');
            $data['detail'] = $this->market->getJualan($username);
            $this->load->view("dashboard_user_pesanan", $data);
        } else {
            $this->load->view('masuk');
        }
    }
    
    public function investasi() {
		if ($this->session->userdata('level')!==0){
<<<<<<< HEAD
			/*$this->load->model->('investasi'); */
=======
			$this->load->model('investasi');
>>>>>>> f88c8ba185afea692a60ed6fe370b48c46537584
			$username = $this->session->userdata('username');
			$this->load->model('investasi');
			$data['proyek'] = $this->investasi->detail($username)->result();
            $this->load->view('dashboard_user_investasi',$data);
        } else {
            $this->load->view('masuk');
        }
    }
    
	public function detail()
	{
		$this->load->helper('url');
		$this->load->model('investasi');
		$this->load->view('detailProduk');
	}

    public function kelolaUser() {
        $this->load->helper('url');
        $this->load->view('dashboard_admin_kelolaUser');   
    }

    public function kelolaProyek() {
        $this->load->helper('url');
        $this->load->view('dashboard_koperasi');   
    }
	
    public function produk() {
        if ($this->session->userdata('level')!==0){
            $this->load->view("dashboard_UMKM");
        } else {
            $this->load->view('masuk');
        }
    }

    public function tambahProduk() {
        if ($this->session->userdata('level')!==0){
            $this->load->view("dashboard_UMKM_tambahProduk");
        } else {
            $this->load->view('masuk');
        }
    }

    public function editProduk() {
        if ($this->session->userdata('level')!==0){
            $this->load->view("dashboard_UMKM_editProduk");
        } else {
            $this->load->view('masuk');
        }
    }

    public function hapusProduk() {
        if ($this->session->userdata('level')!==0){
            $this->load->view("dashboard_UMKM");
        } else {
            $this->load->view('masuk');
        }
    }

}
