<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

	public function select() {
        $this->db->select('*');
        $this->db->from('artikel');
        $query = $this->db->get();
        return $query->result();
    }

    public function cekartikel($judulArtikel){
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->where('idArtikel',$judulArtikel);
        $query = $this->db->get();
        return $query->result();
    }

    public function cekartikelById($idArtikel){
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->where('idArtikel',$idArtikel);
        $query = $this->db->get();
        return $query->row();
    }

    public function Insert($table,$data){
        $this->db->insert($table, $data);
    }

    public function Update($where,$data,$table){
        $this->db->where('idArtikel', $where);
        $this->db->update($table, $data);
    }

    public function deleteArtikel($id){
        $this->db->where('idArtikel', $id);
        $this->db->delete('artikel');
    }

    public function getKomentarById($idArtikel){
        $SQL = "SELECT a.idKomentar, a.idArtikel, a.idUser, a.isiKomentar, a.tglKomentar, b.foto, b.jk FROM komentar a, user b WHERE a.idUser = b.namaAkun and a.idArtikel = '$idArtikel'";
        return $this->db->query($SQL);
    }
}
?>