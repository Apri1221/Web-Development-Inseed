<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Produk extends CI_Model{
	function getId() {
		return $this->db->get('proyek')->num_rows();
	}
	function insertProduk($table,$data) {
		$res = $this->db->insert($table, $data);
		}
	function show($where,$table){		
	return $this->db->get_where($table,$where);
	}
}
?>