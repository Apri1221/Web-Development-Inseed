<?php
class Cart_model extends CI_Model{

	function get_all_produk(){
		$hasil=$this->db->get('produk');
		return $hasil->result();
	}
	function search($search) {
	$SQL = "select * from produk where 'namaProduk' like '%$search%'";
return $this->db->query($SQL);
	}
}