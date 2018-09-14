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

	//fungsi check login
	function validate($email,$password){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('namaAkun',$email);
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