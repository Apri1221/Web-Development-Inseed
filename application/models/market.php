<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Market extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
	function tampil_data($limit=NULL,$offset=NULL) {
		if($limit != NULL){
        $this->db->limit($limit,$offset);
    }
    return $this->db->get('produk');
}
function data($number,$offset){
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
}
?>