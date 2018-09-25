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

    public function komplain() {
        $this->load->view("dashboard_user_komplain");
    }

    public function tambahkomplainDB() {
        $this->load->helper('url');
        $this->load->model('artikel');
        $username = $this->session->userdata('username');
        $data = array(
            'judulKomplain' => $this->input->post('judulKomplain'),
            'isiKomplain' => $this->input->post('isiKomplain'),
            'namaAkun' => $username,
            'tglKomplain' => $this->input->post('tglKomplain'),
         );
        // ngecek apakah udah ada username yang sama
        $this->artikel->Insert('komplain', $data);
        redirect('/dashboard/komplain');
    }

    public function adminKomplain() {
        $this->load->helper('url');
        $data['result'] = $this->Model->select();
        $this->load->view("dashboard_admin_kelolaKomplain", $data);
    }

    public function adminSelesaiKomplain() {
        $this->load->model('model');
        $idKomplain = $this->uri->segment(3);
        $this->model->deleteKomplain($idKomplain);
        redirect('/dashboard/adminKomplain');
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

    public function editArtikel() {
        $this->load->model('artikel');
        $id = $this->uri->segment(3);
        $data['result'] = $this->artikel->cekartikelById($id);
        $this->load->view("dashboard_admin_editArtikel", $data);
    }

    public function tambahArticleDB() {
        $this->load->helper('url');
        $this->load->model('artikel');
        $username = $this->session->userdata('username');
        $data = array(
            'judulArtikel' => $this->input->post('judulArtikel'),
            'isiArtikel' => $this->input->post('isiArtikel'),
            'penulisArtikel' => $username,
            'tglArtikel' => $this->input->post('tglArtikel'),
            'fotoArtikel' => '', //ini untuk upload foto artikel
         );
        
        // ngecek apakah udah ada username yang sama
        $validate = $this->artikel->cekartikel($this->input->post('judulArtikel'));
        if(count($validate) === 0){
            $this->artikel->Insert('artikel', $data);
            redirect('/dashboard/kelolaArticle');
            // access login for admin
        }
        else{
            redirect('/dashboard/tambahArticle');
        }
    }

    public function updateArticleDB() {
        $this->load->helper('url');
        $this->load->model('artikel');
        $idArtikel = $this->uri->segment(3);
        $username = $this->session->userdata('username');
        $data = array(
            'judulArtikel' => $this->input->post('judulArtikel'),
            'isiArtikel' => $this->input->post('isiArtikel'),
            'penulisArtikel' => $username,
            'tglArtikel' => $this->input->post('tglArtikel'),
            'fotoArtikel' => '', //ini untuk upload foto artikel
         );
        
        // ngecek apakah udah ada username yang sama
        $validate = $this->artikel->cekartikel($this->input->post('idArtikel'));
        if(count($validate) === 0){
            $this->artikel->Update($idArtikel, $data, 'artikel');
            redirect('/dashboard/kelolaArticle');
            // access login for admin
        }
        else{
            redirect('/dashboard/editArtikel');
        }
    }

    public function hapusArtikel() {
        $this->load->model('artikel');
        $id = $this->uri->segment(3);
        $this->artikel->deleteArtikel($id);
        $this->kelolaArticle();
    }

    public function kelolaArticle(){
        $this->load->model('artikel');
        $data['result'] = $this->artikel->select();
        $this->load->view("dashboard_admin_article", $data);
    }


    public function adminkelolaProyek(){
        $data['result'] = $this->Model->ambilProyek()->result();
        $this->load->view("dashboard_admin_invest",$data);

    }

    public function deleteProyekAdmin($id) {
        $this->load->model('model');
        $this->model->deleteproyek($id);
        $this->adminKelolaProyek();
    }

    public function kelolaProduk(){
		$this->load->model('produk');
        $data['result'] = $this->produk->ambilProduk();
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
            
            if($this->session->userdata('level') == 3){
    		    $data['detail'] = $this->market->getJualan($username);
            	$items = $this->cart->contents();
                $this->load->view("dashboard_UMKM_pesanan", $data, $items);
            } else if($this->session->userdata('level') != 3){
                $data['detail'] = $this->market->getJualanUser($username);
                $this->load->view("dashboard_user_pesanan", $data);
            }
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
        $this->load->library('upload');
        $this->load->helper('url');
        $this->load->model('model');
        $username = $this->session->userdata('username');
        $namaProyek = $this->input->post('namaProyek');    
        $kebutuhanDana = $this->input->post('kebutuhanDana');
        $ekspektasiKeuntungan = $this->input->post('ekspektasi');
		
        $config['upload_path'] = './asset/assets/image/petani/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
 
        $this->upload->initialize($config);
        if(!empty($_FILES['profilePicture']['name'])){
 
            if ($this->upload->do_upload('profilePicture')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./asset/assets/image/petani/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './asset/assets/image/petani/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar=$gbr['file_name'];
		}}
        $data = array(
            'namaProyek' => $this->input->post('namaProyek'),
            'lokasi' => $this->input->post('lokasiProyek'),
            'ekspUntung' => $ekspektasiKeuntungan,
            'minimalDana' => $kebutuhanDana,
            'idKoperasi' => $username,
			'foto' => $gambar,
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
			$this->load->model('produk');
			$username = $this->session->userdata('username');
			$where = array('idPenjual' => $username);
			$data['produk'] = $this->produk->show($where,'produk')->result();
            $this->load->view("dashboard_UMKM",$data);
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

    public function editProduk($id) {
        $this->load->helper('url');
		$this->load->model('produk');
        $data['result'] = $this->produk->getprodukbyId($id)->result();
        $this->load->view('dashboard_UMKM_editProduk',$data);
    }

    public function hapusProduk($id) {
        $this->load->model('produk');
        $this->produk->deleteproduk($id);
        $this->produk();
    }

	public function uploadProduk(){
		$this->load->model('produk');
		$this->load->library('upload');
        $this->load->helper('url');
		$config['upload_path'] = './asset/assets/image/produk/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
 
        $this->upload->initialize($config);
        if(!empty($_FILES['profilePicture']['name'])){
 
            if ($this->upload->do_upload('profilePicture')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./asset/assets/image/produk/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './asset/assets/image/produk/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar=$gbr['file_name'];
		}}
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
        'berat' => 1,
		'foto' => $gambar
         );
		 $this->produk->insertProduk('produk', $data);
		 $this->produk();
		 
	}

	function updateproduk ($id) {
		$this->load->library('upload');
        $this->load->helper('url');
		$config['upload_path'] = './asset/assets/image/produk/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
 
        $this->upload->initialize($config);
        if(!empty($_FILES['profilePicture']['name'])){
            if ($this->upload->do_upload('profilePicture')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./asset/assets/image/produk/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './asset/assets/image/produk/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar=$gbr['file_name'];
		}}
		$data = array (
		'idProduk' => $id,
		'namaProduk' => $this->input->post('namaProduk'),
		'hargaProduk' => $this->input->post('hargaProduk'),
		'stok' => $this->input->post('stokProduk'), 
		'detail' => $this->input->post('detailProduk'),
		'foto' => $gambar
		);
		$this->load->model('produk');
		$this->produk->update('produk',$id,$data);
		$this->produk();
		
		
	}
	function updateProyek ($id) {
		$this->load->library('upload');
        $this->load->helper('url');
		$config['upload_path'] = './asset/assets/image/petani/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
 
        $this->upload->initialize($config);
        if(!empty($_FILES['profilePicture']['name'])){
 
            if ($this->upload->do_upload('profilePicture')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./asset/assets/image/petani/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './asset/assets/image/petani/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar=$gbr['file_name'];
		}}
		$data = array (
		'idProyek' => $id,
		'namaProyek' => $this->input->post('namaProyek'),
		'minimalDana' => $this->input->post('kebutuhanDana'),
		'lokasi' => $this->input->post('lokasiProyek'),
		'penanggungJawab' => $this->input->post('penanggungJawab'),
		'startProjek' => $this->input->post('awalProyek'),
		'endProjek' => $this->input->post('akhirProyek'),
		'foto' => $gambar
		);
		$this->load->model('investasi');
		$this->investasi->update('proyek',$id,$data);
		$this->kelolaProyek();
		
		
	}	

}
