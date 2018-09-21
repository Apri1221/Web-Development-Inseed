<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart extends CI_Controller{
	
	function __construct(){
		parent::__construct();
        //load library form validasi
       $this->load->library(array('cart','form_validation','pagination','session')); 
        $this->load->helper(array('form','url','text'));
		$this->load->model('cart_model');
	}

	function index(){
		$data['data']=$this->cart_model->get_all_produk();
		$this->load->view('seaweedMart',$data);
	}
	
	public function add_to_cart($id)
	{
		$this->load->library('cart');
		$jum = $this->input->get("jum");
		$product = $this->cart_model->find($id); 
		$data = array(
					   'id'      => $product->idProduk,
					   'qty'     => $jum,
					   'price'   => $product->hargaProduk,
					   'name'    => $product->namaProduk
					);
		$this->cart->insert($data);
		redirect('/cart/show_cart');
	}

	public function show_cart(){
		$items = $this->cart->contents();
		$this->load->view('cart',$items);
	}
	
	public function update_cart($id){
		$data = array(
		'rowid' => $id,
		'qty' => 0
		);
		$this->cart->update($data);
		$this->show_cart();

	}
	public function clear_cart()
	{
		$this->cart->destroy();
		redirect('/mart');
	}
 /* //// */
	
	function load_cart(){ //load data cart
		echo $this->show_cart();
	}

	function hapus_cart($id){ //fungsi untuk menghapus item cart
		$data = array(
			'rowid' => $id,
			'qty' => 0
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}
	function bayar () {
		$this->load->view('pembayaran_produk');
	}
	function cari() {
		$keyword    =   $this->input->post('search');
		$data['cari'] = $this->cart_model->search($keyword)->result();
		$this->load->view('seaweedMart',$data);
	}
	public function detail($id)
	{
		$where = array('idProduk' => $id);
		$data['detail'] = $this->cart_model->lihatDetail($where,'produk')->result();
		$this->load->view('detailProduk',$data);
	} 
}
?>