<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart extends CI_Controller{
	
	function __construct(){
		parent::__construct();
        //load library form validasi
        $this->load->library('form_validation');
        $this->load->library('session');
		$this->load->model('cart_model');
	}

	function index(){
		$data['data']=$this->cart_model->get_all_produk();
		$this->load->view('seaweedMart',$data);
	}
	
	function add_to_cart(){ //fungsi Add To Cart
		$data = array(
			'id' => $this->input->post('idProduk'),
			'name' => $this->input->post('namaProduk'), 
			'price' => $this->input->post('hargaProduk'), 
			'qty' => $this->input->post('quantity'), 
		);
		$this->cart->insert($data);
		echo $this->show_cart(); //tampilkan cart setelah added
	}

	function show_cart(){ //Fungsi untuk menampilkan Cart
		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
			$no++;
			$output .='
				<tr>
					<td>'.$items['name'].'</td>
					<td>'.number_format($items['price']).'</td>
					<td>'.$items['qty'].'</td>
					<td>'.number_format($items['subtotal']).'</td>
					<td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
				</tr>
			';
		}
		$output .= '
			<tr>
				<th colspan="3">Total</th>
				<th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
			</tr>
		';
		return $output;
	}

	function load_cart(){ //load data cart
		echo $this->show_cart();
	}

	function hapus_cart(){ //fungsi untuk menghapus item cart
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => 0, 
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
		$this->load->view('cariMart',$data);
	}
}
?>