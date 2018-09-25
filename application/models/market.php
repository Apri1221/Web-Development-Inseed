<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Market extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
	public function Insert($table,$data){
	    $this->db->insert($table, $data);
	}
	public function tampil_data($limit=NULL,$offset=NULL) {
		if($limit != NULL){
        $this->db->limit($limit,$offset);
    	}
    	return $this->db->get('produk');
	}

	public function data($number,$offset){
			return $query = $this->db->get('produk',$number,$offset)->result();		
		}
	function lihatDetail($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function jumlah_data(){
		return $this->db->get('produk')->num_rows();
	} 
	
	function lihatCart($where,$table){		
		return $this->db->get_where($table,$where);
	}

	public function getJualan($username){
        $SQL = "SELECT a.namaPembeli, a.status, a.jumlah, a.alamatTujuan, b.namaProduk FROM transaksi a, produk b WHERE a.idProduk = b.idProduk AND a.namaPenjual = '$username'";
        $query = $this->db->query($SQL);
        return $query->result();
    }

    public function getJualanUser($username){
        $SQL = "SELECT a.namaPembeli, a.status, a.jumlah, a.alamatTujuan, a.total, a.tglTrans, a.idTransaksi, b.namaProduk FROM transaksi a, produk b WHERE a.idProduk = b.idProduk AND a.namaPembeli = '$username'";
        $query = $this->db->query($SQL);
        return $query->result();
    }

	public function getBeli($username){
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('idPenjual',$username);
        $query = $this->db->get();
        return $query->result();
    }

    public function hapusTransaksi($id){
    	$this->db->where('idTransaksi', $id);
        $this->db->delete('transaksi');
    }

    public function ubahStatusTransaksi($id, $data){
    	$this->db->where('idTransaksi', $id);
        $this->db->update('transaksi', $data);
    }
}
?>