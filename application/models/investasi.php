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
	function update($table,$id,$data) {
			$this->db->where('idProyek', $id);
			$this->db->update($table, $data);
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
        $this->db->select('danaTerkumpul');
        $this->db->from('proyek');
        $this->db->where('idProyek',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
	function lihatNominal($id,$where) {
        $this->db->select('nominalInvest');
        $this->db->from('investor');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result_array();
    }

	function lihatTarget($id) {
        $this->db->select('minimalDana');
        $this->db->from('proyek');
        $this->db->where('idProyek',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);	
	}
	function update_progress($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);	
	}
	function detail ($id){
		$SQL="select A.idProyek, A.namaProyek, A.lokasi, B.nominalInvest FROM proyek A, investor B WHERE A.idProyek = B.idProyek AND B.namaAkun LIKE '$id'";
		return $this->db->query($SQL);
	}
	function update_investor ($data,$table){
		$this->db->insert($table,$data);	
	}
	function update_investasinya ($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);	
	}
	function cekInvest($idProyek,$username,$table){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('idProyek',$idProyek);
        $this->db->where('namaAkun',$username);
        $query = $this->db->get();
        return $query->result_array();
    }	
	public function getReport($id){
        $SQL = "select a.idProyek, a.namaProyek, a.lokasi, b.nominalInvest from proyek a, investor b where a.idProyek = b.idProyek";
        return $this->db->query($SQL);
    }

    public function getTransaksi($id, $namaAkun){
        $SQL = "select a.idProyek, a.namaProyek, a.lokasi, b.nominalInvest from proyek a, investor b where a.idProyek = b.idProyek AND b.namaAkun = 'apriaja' and b.idProyek = '$id'";
        return $this->db->query($SQL);
    }

}
?>