<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model
{
	//fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('user_id');
    }
public function login($username, $password)
{
   $query = $this->db->query("SELECT * from user where namaAkun = '$username'");
   echo json_encode($query);
    if (password_verify($password,$query->password)) {
        return $row->result();
    } else {
        return false;
    }
}

	//fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('namaAkun, password,namaDepan');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
}