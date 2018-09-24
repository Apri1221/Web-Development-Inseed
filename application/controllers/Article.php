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
	public function detail()
	{
		$this->load->helper('url');
		$this->load->model('artikel');
		$id = $this->uri->segment(3);
		$data['result'] = $this->artikel->cekartikelById($id);
		$data['resultKomentar'] = $this->artikel->getKomentarById($id);
		$this->load->view('detailArticle', $data);
	}

	public function tambahKomentar()
	{
		$this->load->helper('url');
		$this->load->model('artikel');
		$data = array(
            'namaAkun' => $this->input->post('namaAkun'),
            'isiKomentar' => $this->input->post('isiKomentar'),
            'tglKomentar' => $this->input->post('tglKomentar'),
         );
        // ngecek apakah udah ada username yang sama
        $this->artikel->Insert('komentar', $data);
        if($this->agent->referrer()){
           header("location:".$this->agent->referrer());
        }
	}
}
?>