<?php
class Cart_model extends CI_Model{

	function get_all_produk(){
		$hasil=$this->db->get('produk');
		return $hasil->result();
	}
	function search($keyword) {
	$SQL = "SELECT * FROM `produk` WHERE `namaProduk` like '%$keyword%'";
	return $this->db->query($SQL);
	}
}