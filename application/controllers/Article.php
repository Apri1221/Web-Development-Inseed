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
		$data['result'] = $this->artikel->select();
		$this->load->view('article', $data);
	}
	public function detail($id)
	{
		$this->load->helper('url');
		$this->load->model('artikel');
		$this->load->model('model');
		$id = $this->uri->segment(3);
		$data['result'] = $this->artikel->cekartikelById($id);
		$data['result2'] = $this->artikel->getKomentarById($id)->result();
		$this->load->view('detailArticle', $data);
	}

	public function tambahKomentar($id)
	{
		if ($this->session->userdata('username')!== NULL){
			$this->load->helper('url');
			$this->load->model('artikel');
			$this->load->model('artikel');
			$id = $this->uri->segment(3);
			$this->load->library('user_agent');
			$data = array(
	            'idUser' => $this->input->post('namaAkun'),
	            'idArtikel' => $id,
	            'isiKomentar' => $this->input->post('isiKomentar'),
	            'tglKomentar' => $this->input->post('tglKomentar'),
	         );
	        // ngecek apakah udah ada username yang sama
	        $this->artikel->Insert('komentar', $data);
			$this->detail($id);
    	}
        else {
			redirect('/auth/login');
        }
	}
}
?>