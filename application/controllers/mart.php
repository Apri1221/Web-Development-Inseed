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
		$this->load->view('pembayaran_produk');
	}
	public function thanks ($id){
		$this->load->model('cart_model');
		$product = $this->cart_model->find($id); 
		$username = $this->session->userdata('username');
		$jum = 
		$data = array(
					   'namaPembeli'     => $username,
					   'namaPenjual'   => $product->idPenjual,
					   'idProduk'    => $product->idProduk,
					   'jumlah' => $this->cart->total_items(),
					   'total' => $this->cart->total(),
					   'alamatTujuan' => $this->input->post("alamat"),
					   'tglTrans' => '2018-10-09',
					   'catatan' => "hello"
					);
		$this->market->insert('transaksi',$data);
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		
		/* $this->load->view('thanks_purchase'); */
	}

	public function addCart($id){
		$this->load->view('cart');
	}

}
?>