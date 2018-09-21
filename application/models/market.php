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
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('idPenjual',$username);
        $query = $this->db->get();
        return $query->result();
    }
	public function getBeli($username){
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('idPenjual',$username);
        $query = $this->db->get();
        return $query->result();
    }
}
?>