<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mart extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('market');
        $this->load->helper('url');
		$this->load->library('pagination');
	}
	
	function lihatDetail($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	public function index()
	{
    	$this->load->database();
		$jumlah_data = $this->market->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/mart/index';
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
		$data['produk'] = $this->market->data($config['per_page'],$from);
		$this->load->view('seaweedMart',$data);
	}

	public function detail($id)
	{
		$where = array('idProduk' => $id);
		$data['detail'] = $this->market->lihatDetail($where,'produk')->result();
		$this->load->view('detailProduk',$data);
	}	

	public function bayar (){
		if ($this->session->userdata('username')!== NULL){
		$this->load->view('pembayaran_produk');
		}
		else {
			$this->load->library('user_agent');
			$this->agent->referrer();
            redirect('/auth/login');
        }		
	}
	public function thanks ($id,$rowid){
		$this->load->model('cart_model');
		$username = $this->session->userdata('username');
		$where = array (
			'idTransaksi' => $rowid,
			'namaPembeli' => $username,
			);
		$validate = $this->cart_model->cekTrans($where,'transaksi');
        if(count($validate) === 0){
			$product = $this->cart_model->cariBayar($id); 
			$username = $this->session->userdata('username');
			$data = array(
			'idTransaksi' => $rowid,
			   'namaPembeli'     => $username,
			   'namaPenjual'   => $product->idPenjual,
			   'idProduk'    => $product->idProduk,
			   'jumlah' => $this->cart->total_items(),
			   'total' => $this->cart->total(),
			   'alamatTujuan' => $this->input->post('alamat'),
			   'status' => 0,
			   'catatan' => "hello"
			);
		$this->market->insert('transaksi',$data);
		}
		else {
			$where = array (
			'idTransaksi' => $rowid,
			'namaPembeli' => $username,
			);
			$cek = $this->cart_model->lihatJml($where);
			$jumBeli  = $cek[0]['jumlah'];
			$harga = $this->cart->total();
			$jum = $this->cart->total_items();
			$jumBeli += $jum;
			$cek2 = $this->cart_model->lihatTotal($where);
			$totalBeli  = $cek2[0]['total'];
			$totalBeli += $harga;
			$data = array (
			'jumlah' => $jumBeli,
			'total' => $totalBeli,
			);
			$this->cart_model->updateTrans($where,$data);
		}		
		$this->cart->destroy();
		$this->load->view('thanks_purchase');
	}

	public function addCart($id){
		$this->load->view('cart');
	}

}
?>