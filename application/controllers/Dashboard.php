<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('autentikasi_model');
    }

	
	public function index() {
        if (null !== $this->session->userdata('level')){
            if ($this->session->userdata('level') === '1'){
                $this->load->view("dashboard_kelolaUser");
            }
            else
                $username = $this->session->userdata('username');
                $this->load->view("dashboard_profil");   
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
            $this->load->view("dashboard");
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

	

}
