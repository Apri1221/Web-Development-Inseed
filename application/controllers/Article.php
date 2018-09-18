<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('src/SimpleImage.php');
$img = new claviska\SimpleImage();
class Article extends CI_Controller {
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