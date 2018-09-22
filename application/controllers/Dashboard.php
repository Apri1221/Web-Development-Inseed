<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        //load library form validasi
        $this->load->library('form_validation');
        $this->load->library('session');
        //load model admin
        $this->load->model('Model');
    }

	public function index(){
        if($this->session->userdata('level') !== null){
            if($this->session->userdata('level') === '1'){
                 $this->load->helper('url');
        $data['result'] = $this->Model->ambilDataUser();
        $this->load->view('dashboard_admin_kelolaUser', $data);  
            }
            else{
                $username = $this->session->userdata('username');
                $data['result'] = $this->Model->cekuser($username);
                $this->load->view("dashboard_profil",$data);
             }
        }
        else{
            $this->load->view('masuk');
        }
    }

    public function adminDeleteUser() {
        $this->load->model('model');
        $namaAkun = $this->uri->segment(3);
        $this->model->deleteUser($namaAkun);
        $this->index();
    }

    public function tambahArticle() {
        $this->load->view("dashboard_admin_tambahArtikel");
    }

    public function kelolaArticle(){
        $this->load->view("dashboard_admin_article");
    }

    public function adminkelolaProyek(){
       $data['result'] = $this->Model->ambilProyek();
        $this->load->view("dashboard_admin_invest",$data);

    }

    public function deleteProyekAdmin() {
        $this->load->model('model');
        $id = $this->uri->segment(3);
        $this->model->deleteproyek($id);
        $this->adminKelolaProyek();
    }
    public function kelolaProduk(){
        $data['result'] = $this->Model->ambilProduk();
        $this->load->view("dashboard_admin_mart",$data);
    }
	
    public function adminDeleteProduk() {
        $this->load->model('model');
        $id = $this->uri->segment(3);
        $this->model->deleteproduk($id);
        $this->kelolaProduk();
    }
	public function mart() {
		if ($this->session->userdata('level') ==='1' || $this->session->userdata('level') === '2'){
            $this->load->view("dashboard");
        } else {
            $this->load->view('masuk');
        }
	}

	public function cairkan() {
		if ($this->session->userdata('level')!==0){
            $username = $this->session->userdata('username');
            $data['result'] = $this->Model->cekuser($username);
            $this->load->view("dashboard_user_cairkan", $data);
        } else {
            $this->load->view('masuk');
        }
	}

    public function pesanan() {
		if ($this->session->userdata('level')!==0){
            $this->load->model('market');
            $username = $this->session->userdata('username');
            $data['detail'] = $this->market->getJualan($username);
			
			$items = $this->cart->contents();
            $this->load->view("dashboard_user_pesanan", $data,$items);
        } else {
            $this->load->view('masuk');
        }
    }
    
    public function investasi() {
		if ($this->session->userdata('level')!==0){
			$this->load->model('investasi');
			$username = $this->session->userdata('username');
			$data['proyek'] = $this->investasi->detail($username)->result();
            $this->load->view('dashboard_user_investasi',$data);
        } else {
            $this->load->view('masuk');
        }
    }
    
    public function lihatUser() {
        
    }





	public function detail()
	{
		$this->load->helper('url');
		$this->load->model('investasi');
		$this->load->view('detailProduk');
	}

    public function kelolaUser() {
        $this->load->helper('url');
        $this->load->view('dashboard_admin_kelolaUser');   
    }

    public function kelolaProyek() {
        $this->load->helper('url');
        $username = $this->session->userdata('username');
        $data['result'] = $this->Model->cekproyek($username);
        $this->load->view('dashboard_koperasi', $data);   
    }

    public function tambahProyekKoperasi() {
        $this->load->helper('url');
        $this->load->view('dashboard_koperasi_proyek');   
    }

    public function editProyekKoperasi() {
        $this->load->helper('url');
        $id = $this->uri->segment(3);
        $data['result'] = $this->Model->getproyekbyId($id);
        $this->load->view('dashboard_koperasi_editProyek', $data);   
    }

    public function tambahProyek() {
        $this->load->helper('url');
        $this->load->model('model');
        $username = $this->session->userdata('username');
        $namaProyek = $this->input->post('namaProyek');    
        $kebutuhanDana = $this->input->post('kebutuhanDana');
        $data = array(
        'namaProyek' => $this->input->post('namaProyek'),
        'lokasi' => $this->input->post('lokasiProyek'),
        'namaAkun' => $username,
        'startProjek' => $this->input->post('awalProyek'),
        'endProjek' => $this->input->post('akhirProyek'),
        'penanggungJawab' => $this->input->post('penanggungJawab'),
         );
        
        // ngecek apakah udah ada username yang sama
        $validate = $this->Model->cekproyek($namaProyek);
        if(count($validate) === 0){
            $this->model->Insert('proyek', $data);
            redirect('/dashboard/kelolaProyek');
            // access login for admin
        }
        else{
            redirect('/dashboard/tambahProyekKoperasi');
        }
    }

    public function editProyek() {
        $this->load->helper('url');
        $this->load->model('model');
        $username = $this->session->userdata('username');
        $namaProyek = $this->input->post('namaProyek');
        $data = array(
        'namaProyek' => $this->input->post('namaProyek'),
        'lokasi' => $this->input->post('lokasiProyek'),
        'namaAkun' => $username,
        'startProjek' => $this->input->post('awalProyek'),
        'penanggungJawab' => $this->input->post('penanggungJawab'),
         );
        // ngecek apakah udah ada username yang sama
        $validate = $this->Model->cekproyek($namaProyek);
        if(count($validate) === 0){
            $this->model->Insert('proyek', $data);
            redirect('/dashboard/kelolaProyek');
            // access login for admin
        }
        else{
            redirect('/dashboard/editProyekKoperasi');
        }
    }

    public function deleteProyek() {
        $this->load->model('model');
        $id = $this->uri->segment(3);
        $this->model->deleteproyek($id);
        $this->kelolaProyek();
    }

	
    public function produk() {
        if ($this->session->userdata('level')!==0){
            $username = $this->session->userdata('username');
            $data['result'] = $this->Model->getproduk($username);
            $this->load->view("dashboard_UMKM", $data);
        } else {
            $this->load->view('masuk');
        }
    }

    public function tambahProduk() {
        if ($this->session->userdata('level')!==0){
            $this->load->view("dashboard_UMKM_tambahProduk");
        } else {
            $this->load->view('masuk');
        }
    }

    public function editProduk() {
        $this->load->helper('url');
        $id = $this->uri->segment(3);
        $data['result'] = $this->Model->getprodukbyId($id);
        $this->load->view('dashboard_UMKM_editProduk', $data);
    }

    public function hapusProduk() {
        $this->load->model('model');
        $id = $this->uri->segment(3);
        $this->model->deleteproduk($id);
        $this->kelolaProyek();
    }
	public function uploadProduk(){
		$this->load->model('produk');
		 $val = $this->produk->getId();
		 $val++;
        $data = array(
		'idProduk' => $val,
		'idPenjual' => $this->session->userdata('username'),
        'namaProduk' => $this->input->post('namaProduk'),
        'hargaProduk' => $this->input->post('hargaProduk'),
        'stok' => $this->input->post('stokProduk'),
        'rating' => 0,
        'detail' => $this->input->post('detailProduk'),
        'berat' => 1
         );
		 $this->produk->insertProduk('produk', $data);
		 
	}

}
