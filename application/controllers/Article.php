<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        //load library form validasi
        $this->load->library('form_validation');
        $this->load->library('session');
    }
	public function index()
	{
		$this->load->helper('url');
		$this->load->model('artikel');
		$this->load->view('article');
	}
	public function detail()
	{
		$this->load->helper('url');
		$this->load->model('artikel');
		$this->load->view('detailArticle');
	}
}
?>