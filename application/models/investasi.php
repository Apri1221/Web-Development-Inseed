<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Investasi extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
	function data($number,$offset){
		return $query = $this->db->get('proyek',$number,$offset)->result();		
	}
	function tampil_data($limit=NULL,$offset=NULL) {
		if($limit != NULL){
        $this->db->limit($limit,$offset);
    }
    return $this->db->get('proyek');
}
	function lihatDetail($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function jumlah_data(){
		return $this->db->get('proyek')->num_rows();
	}
	function totalDana($danaTerkumpul, $nominal){
		$danaTerkumpul += $nominal;
		return $danaTerkumpul;
	}
	function lihatDana($id) {
	$SQL = "SELECT danaTerkumpul from proyek where 'idProyek' = $id";
	return $this->db->query($SQL);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);	
	}
}
?>