<?php
include("koneksi.php");
class m_iklanq {
  public $hasil = array();
  public $db;
  function __construct()
  {
    $this->db = new mysqli('localhost', 'root', 'apriyanto12', 'iklanq');
  }
  public function getSemuaIklan() {
    $rs = $this->db->query("SELECT * FROM iklan");
    return $rs;
  }
  public function getIklan($keyword) {
  //   // $id = "'".$id."'";
    $rs = $this->db->query("SELECT * FROM iklan where `judul` LIKE '%$keyword%' OR `kategori` LIKE '%$keyword%'");
    return $rs;
  }

  public function getIklanBy($id) {
  //   // $id = "'".$id."'";
    $rs = $this->db->query("SELECT * FROM iklan where `id_u` = '$id'");
    return $rs;
  }

  public function lihatIklan($id_i) {
  //   // $id = "'".$id."'";
    $rs = $this->db->query("SELECT * FROM iklan where `id_i` = '$id_i'");
    return $rs;
  }

  public function getProfil($id) {
  //   // $id = "'".$id."'";
    $rs = $this->db->query("SELECT * FROM user where `id_user` = '$id'");
    return $rs;
  }

  public function getMember($email) {
  //   // $id = "'".$id."'";
    $rs = $this->db->query("SELECT * FROM user where `email` = '%$email%'");
    return $rs;
  }

  public function login($email, $password) {
  //   // $id = "'".$id."'";
    $rs = $this->db->query("SELECT `id_user` FROM user where `email` = '$email' and `password` = '$password'");
    return $rs;
  }

  public function getIklanByIklan($id) {
  //   // $id = "'".$id."'";
    $rs = $this->db->query("SELECT * FROM iklan where `id_i` = '$id'");
    return $rs;
  }

  public function updateRating($id_i, $rating) {
  //   // $id = "'".$id."'";
    $rs = $this->db->query("UPDATE iklan SET `rating` = '$rating' where `id_i` = '$id_i'");
    return $rs;
  }

  public function setIklan($id_u, $judul, $harga, $deskripsi, $kategori) {
    $rs = $this->db->query("INSERT INTO iklan SET 
      `id_u` = (SELECT id_user FROM user WHERE user.id_user = $id_u), 
      `judul` = '$judul', 
      `harga` = $harga, 
      `deskripsi` = '$deskripsi', 
      `kategori` = (SELECT id_k FROM kategori WHERE kategori.nama_kategori = '$kategori' )");
  }

  public function updateIklan($id_i, $judul, $harga, $deskripsi, $kategori) {
    $rs = $this->db->query("UPDATE iklan SET  
      `judul` = '$judul', 
      `harga` = '$harga', 
      `deskripsi` = '$deskripsi', 
      `kategori` = (SELECT id_k FROM kategori WHERE kategori.nama_kategori = '$kategori' ),
      where `id_i` = '$id_i'");
  }

  public function setMember($email, $password, $nama, $gender, $year, $alamat) {
    $rs = $this->db->query("INSERT user SET 
      `email` ='$email', 
      `password` = '$password', 
      `nama` = '$nama', 
      `gender` = '$gender', 
      `umur` = '$year',
      `alamat` = '$alamat'");
  }

  public function updateMember($id_u, $nama, $email, $alamat, $password) {
    $rs = $this->db->query("UPDATE iklan SET  
      `nama` = '$nama', 
      `email` = '$email', 
      `alamat` = '$alamat', 
      `password` = '$password',
      where `id_u` = '$id_u'");
  }

  // public function updateProker($nomor,$nama,$surat) {
  //   $rs = $this->db->query("update `proker` set  `namaProgram`=$nama,`suratKeterangan`=$surat where `nomorProgram`=$nomor");
  // }
    public function deleteIklan($id_i) {
      $rs = $this->db->query("DELETE FROM iklan WHERE `id_i` = '$id_i'");
    } 
}