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
            $this->load->view("dashboard_user_cairkan");
        } else {
            $this->load->view('masuk');
        }
	}

    public function pesanan() {
		if ($this->session->userdata('level')!==0){
            $this->load->view("dashboard_user_pesanan");
        } else {
            $this->load->view('masuk');
        }
    }
    
    public function investasi() {
		if ($this->session->userdata('level')!==0){
            $this->load->view("dashboard_user_investasi");
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
        $this->load->view('dashboard_koperasi_proyek');   
    }
	


}
