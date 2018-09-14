<?php
class Page extends CI_Controller{
    function __construct(){
      parent::__construct();
    }

    public function index($page){
        //Allowing akses to admin only
        if($this->session->userdata('level')==='1'){
            $this->load->view("$page");
        }else{
            echo "Access Denied";
            $this->load->view('Ditolak');
        }
    }
}
?>