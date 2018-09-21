<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Produk extends CI_Model{
	function getId() {
		$SQL = "SELECT COUNT(idProduk) FROM `produk`";
		return $this->db->query($SQL);
}
?>