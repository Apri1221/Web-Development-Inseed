<?php
session_start();
include_once('m_iklanq.php');
class c_iklanq {
  public $model;
  public function __construct(){
     $this->model = new m_iklanq();
  }
  public function invoke(){
     $iklan = $this->model->getSemuaIklan();
     include 'view/home.php';
  }

  public function searchIklan($key){
     $iklan = $this->model->getIklan($key);
     if ($iklan == null){
        echo "Tidak ada";
     } 
     include 'view/search.php';
  }

  public function lihatIklan($id_i){
     $iklan = $this->model->lihatIklan($id_i);
     $key = $iklan->fetch_object();
     include 'view/lihatIklan.php';
  }

  public function cekLogin($email, $password){
      $iklan = $this->model->login($email, $password);
      $key = $iklan->fetch_object();
      if (!isset($_SESSION['id_user'])){
        if ($key == null) {
          header('location:index.php?halaman=login');
        } else {
          $_SESSION['id_user'] = $key->id_user;
          header('location:index.php?halaman=iklan');
        }
      }
  }

  public function view($index, $id){
     
     if ($index == 'iklan') {
       $iklan = $this->model->getIklanBy($id);
     include "view/$index.php";
     }
     else if ($index == 'profile') {
      $user = $this->model->getProfil($id);
      $key = $user->fetch_object();
      include "view/profile.php";
     }
      else {
       include "view/$index.php";
     }
  }

  public function getIklanBy($id_u){
     $iklan = $this->model->getIklanBy($id_u);
     include 'view/iklan.php';
  }

  public function getMember($email){
     $iklan = $this->model->getMember($email);
     return $iklan;
  }

  public function updateMember($id_u, $nama, $email, $alamat, $password){
    $iklan = $this->model->updateMember($id_u, $nama, $email, $alamat, $password);
    header ("location:index.php");
  }

  public function addIklan($id_u, $judul, $harga, $deskripsi, $kategori){
    $iklan = $this->model->setIklan($id_u, $judul, $harga, $deskripsi, $kategori);
    header("location:index.php?halaman=iklan");
  }

  public function updateRating($id_i, $rating){
    $iklan = $this->model->getIklanBy($id_i);
    $key = $iklan->fetch_object();
    $ratingBaru = (($key->rating) + $rating)/2; 
     $iklan = $this->model->updateRating($id_i, $ratingBaru);
     header ("location:index.php");
  }

  public function updateIklan($id_i, $judul, $harga, $deskripsi, $kategori){
    $iklan = $this->model->updateIklan($id_i, $judul, $harga, $deskripsi, $kategori);
    header("location:index.php");
  }

  public function addMember($email, $password, $nama, $gender, $year, $alamat){
    if ($gender == 'Male'){
      $gender = 1;
    } else if ($gender == 'Female'){
      $gender = 0;
    }
    $iklan = $this->model->setMember($email, $password, $nama, $gender, $year, $alamat);
    header("location:index.php?halaman=login");
  }

//   public function editProker(){
//    $nomor = "'".$_POST["nomorProker"]."'";
//    $nama = "'".$_POST["namaProker"]."'";
//    $surat = "'".$_POST["suratKeteranganProker"]."'";
//    $run = $this->model->updateProker($nomor,$nama,$surat);
//    header("location:index.php");
//  }
   public function deleteIklan ($id){
      $iklan = $this->model->deleteIklan($id);
      sleep(1);
      header("location:index.php?halaman=iklan");
   }
function viewEdit($id){
  $iklan = $this->model->getIklanByIklan($id);
  $key = $iklan->fetch_object();
  include ('view/edit.php'); 
}
// function viewDelete($id){
//   $proker = $this->model->getSemuaPogramKerja();
//   $key = $proker->fetch_object();
//   include ('v_delete.php'); 
// }
function viewAddIklan($id){
    include 'view/dftr.php';

}

function viewLogin(){
  include 'view/login.php'; 
}
function viewRegister(){
  include 'view/signup.php'; 
}
}
