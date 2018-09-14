<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
    }

	public function index()
	{
		if($this->admin->logged_id())
		{

			$this->load->view("dashboard");			

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("masuk");

		}
	}

	

}
