<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Invest extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$this->load->model('investasi');
		$this->load->view('seaweedInvest');
	}
	public function detail()
	{
		$this->load->helper('url');
		$this->load->model('investasi');
		$this->load->view('detailProduk');
	}
}
?>