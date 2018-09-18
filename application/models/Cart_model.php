<?php
class Cart_model extends CI_Model{

	function get_all_produk(){
		$hasil=$this->db->get('produk');
		return $hasil->result();
	}
	function search($keyword) {
	$this->db->like('namaProduk',$keyword);
	$query  =   $this->db->get('produk');
	return $query->result();
	}
}