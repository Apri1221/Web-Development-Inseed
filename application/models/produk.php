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
	function getproduk($id) {
		$SQL = "SELECT * FROM produk WHERE idProduk = $id";
		return $this->db->query($SQL);
	}
	function update ($table,$where,$data) {
			$this->db->where('idProduk', $where);
			$this->db->update($table, $data);
	}
	public function getprodukbyName($username){
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('idPenjual',$username);
        $query = $this->db->get();
        return $query->result();
    }

    public function getprodukbyId($id){
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('idProduk',$id);
        $query = $this->db->get();
        return $query;
    }
 public function deleteProduk($id){
        $this->db->where('idProduk', $id);
        $this->db->delete('produk');
    }
     public function ambilProduk(){
        $this->db->select('*');
        $this->db->from('produk');
         $query = $this->db->get();
        return $query->result();
    }
	
}
?>