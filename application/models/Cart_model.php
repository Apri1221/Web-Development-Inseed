<?php
class Cart_model extends CI_Model{
	
	function get_all_produk(){
		$hasil=$this->db->get('produk');
		return $hasil->result();
	}
	function search($keyword) {
	$SQL = "SELECT * FROM produk WHERE namaProduk like '%$keyword%'";
	return $this->db->query($SQL);
	}
	public function find($id){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('idProduk', $id)
						->limit(1)
						->get('produk');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}
	public function cariBayar($id){
		$SQL= "select idProduk, idPenjual from 'produk' where 'idProduk' like '$id'";
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('idProduk', $id)
						->limit(1)
						->get('produk');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}
	function cekTrans($where,$table){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result_array();
    }
	function lihatJml($where) {
        $this->db->select('jumlah');
        $this->db->from('transaksi');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result_array();
    }	
	function lihatTotal($where) {
        $this->db->select('total');
        $this->db->from('transaksi');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result_array();
    }
	function updateTrans ($where,$data){
		$this->db->where($where);
		$this->db->update('transaksi',$data);	
	}
function curdate() {
	$SQL="SELECT CURRENT_TIMESTAMP";
	return $this->db->query($SQL);

}
}