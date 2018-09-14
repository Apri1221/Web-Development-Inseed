<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$var = $this->session->all_userdata();
		$this->load->view('index');
	}
	public function invest()
	{
		$this->load->helper('url');
		$this->load->view('seaweedInvest');
	}
	public function mart()
	{
		$this->load->helper('url');
		$this->load->view('seaweedMart');
	}
	public function article()
	{
		$this->load->helper('url');
		$this->load->view('article');
	}
	public function about_us()
	{
		$this->load->helper('url');
		$this->load->view('about_us');
	}
	public function login()
	{
		$this->load->helper('url');
		$this->load->view('masuk');
	}
	public function daftar()
	{
		$this->load->helper('url');
		$this->load->view('daftar');
	}
	public function masuk()
	{
		redirect(base_url('login'));
	}
	
	public function verification($key)
	{
		$this->load->helper('url');
		$this->load->model('model');
		$this->model->changeActiveState($key);
		echo "Selamat kamu telah memverifikasi akun kamu";
		echo "<br><br><a href='".site_url("login")."'>Kembali ke Menu Login</a>";
	}
}