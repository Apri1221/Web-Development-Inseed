<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invest extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('investasi');
        $this->load->helper('url');
		$this->load->library('pagination');
	}
	public function index()
	{
    $this->load->database();
		$jumlah_data = $this->investasi->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/invest/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 6;
		$from = $this->uri->segment(3);
		$config['full_tag_open'] = "<ul class='pagination'>";
	    $config['full_tag_close'] = '</ul>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';

	    $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';


	    $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);		
		$data['proyek'] = $this->investasi->data($config['per_page'],$from);
		$this->load->view('seaweedInvest',$data);
	}
	public function detail($id)
	{
		$where = array('idProyek' => $id);
		$data['detail'] = $this->investasi->lihatDetail($where,'proyek')->result();
		$this->load->view('detailInvestasi',$data);
	}
	public function sortir($based)
	{
		
		$data['proyek'] = $this->investasi->sortby($based,'proyek');
		$this->load->view('seaweedInvest',$data);
	}
	public function bayar($id)
	{
		if ($this->session->userdata('username')!== NULL){
		$where = array('idProyek' => $id);
		$data['bayar'] = $this->investasi->lihatDetail($where,'proyek')->result();
		$this->load->view('pembayaran',$data);
		} else {
            $this->load->view('masuk');
        }
	}
	public function tambah($id){
		$cek = $this->investasi->lihatDana($id);
		$danaSkrg  = $cek[0]['danaTerkumpul'];
		$nominal = $this->input->post('nominal');
		$danaSkrg += $nominal;
		$where = array(
		'idProyek' => $id
		);
		$data = array (
		'danaTerkumpul' => $danaSkrg
		);
		$this->investasi->update_data($where,$data,'proyek');
		$cek2 = $this->investasi->lihatDana($id);
		$danaSkrg2  = $cek2[0]['danaTerkumpul'];
		$cekTarget = $this->investasi->lihatTarget($id);
		$danaTarget  = $cekTarget[0]['minimalDana'];
		$progress = $danaSkrg * 100 / $danaTarget;
		$dataProgress = array (
		'progress' => $progress
		);
		$this->investasi->update_progress($where,$dataProgress,'proyek');
		
		$username = $this->session->userdata('username');
		$danaSkrg  = $cek[0]['danaTerkumpul'];
		
		$dataInvestor = array(
        'idProyek' => $id,
        'namaAkun' => $username,
		'nominalInvest' => $this->input->post('nominal')
		);
		$this->investasi->update_investor($dataInvestor,'investor');
		$this->load->view('thanks');
	}
}
?>