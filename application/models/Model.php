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
			$this->db->where($where);
			$this->db->update($table,$data);
	}	
	public function cekuser($username){
		$data = array();
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('namaAkun',$username);
        $query = $this->db->get();
        return $query->row();
    }
}
?>