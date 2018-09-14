<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
	function select() {
        $this->db->select('*');
        $this->db->from('project');
        $this->db->where('namaAkun',$email);
        $this->db->where('password',$password);
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>