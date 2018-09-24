<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model extends CI_Model{
	
	public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function Insert($table,$data){
	    $this->db->insert($table, $data);
	}

	public function cek_pass($data){
		$this->db->select('password');
	    $this->db->from('user');
	    $this->db->where('namaAkun','$data');
	    return $this->db->get()->result();
	}

	public function edit($where,$table){		
		return $this->db->get_where($table,$where);
	}
	 
	public function update_data($where,$data,$table){
			$this->db->where('namaAkun', $where);
			$this->db->update($table, $data);
	}	
	
	public function cekuser($username){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('namaAkun',$username);
        $query = $this->db->get();
        return $query->row();
    }

    public function ambilDataUser(){
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result();
    }

    public function cekproyek($username){
        $this->db->select('*');
        $this->db->from('proyek');
        $this->db->where('idKoperasi',$username);
        $query = $this->db->get();
        return $query->result();
    }

    public function getproyekbyId($id){
        $this->db->select('*');
        $this->db->from('proyek');
        $this->db->where('idProyek',$id);
        $query = $this->db->get();
        return $query->result();
    }

    public function ambilProyek(){
        $SQL="SELECT A.idProyek, A.namaProyek, B.namaKoperasi, A.lokasi, A.startProjek, A.endProjek, A.danaTerkumpul FROM proyek A, koperasi B WHERE A.idKoperasi = B.idKoperasi";
       return $this->db->query($SQL);
    }


    public function deleteproyek($id){
		$this->db->where('idProyek', $id);
		$this->db->delete('proyek');
	}
    
    public function deleteUser($namaAkun){
        $this->db->where('namaAkun', $namaAkun);
        $this->db->delete('user');
    }

    public function select() {
        $this->db->select('*');
        $this->db->from('komplain');
        $query = $this->db->get();
        return $query->result();
    }    
	
    public function deleteKomplain($idKomplain){
        $this->db->where('idKomplain', $idKomplain);
        $this->db->delete('komplain');
    }

    public function transaksi($idTransaksi) {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('idTransaksi', $idTransaksi);
        $query = $this->db->get();
        return $query->result();
    }   

}
?>