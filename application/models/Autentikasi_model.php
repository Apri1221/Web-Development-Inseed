<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autentikasi_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
	//fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('user_in');
    }

    function validates($username){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('namaAkun',$username);
        $query = $this->db->get();
        return $query->result_array();
    }

	//fungsi check login
	function validate($username,$password,$table){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('namaAkun',$username);
        $this->db->where('password',$password);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function countPublicUsersWithEmail($email, $id = 0)
    {
        if ($id > 0) {
            $this->db->where('id !=', $id);
        }
        $this->db->where('email', $email);
        return $this->db->count_all_results('users_public');
    }
}
?>