<?php


class Laporan extends CI_Controller {
	
	function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('pdf');
        $this->load->model('investasi');
    }

	public function index() {
		$username = $this->session->userdata('username');
		$bank = $this->session->userdata('bank');
		$nominal = $this->session->userdata('nominal');
		$tglTarik = $this->session->userdata('tglTarik');
		$noRek = $this->session->userdata('noRek');
		$saldo = $this->session->userdata('saldo');

		$pdf = new FPDF('p','mm','A4');

		$pdf->AddPage();

		$pdf->SetFont('Arial','B','14');

		$pdf->Cell(130, 5, 'INSEED.ID',0,0);
		$pdf->Cell(59, 5, 'INVOICE',0,1);

		$pdf->SetFont('Arial','',12);

		$pdf->Cell(130, 5, 'Jl. MT. Haryono',0,0);
		$pdf->Cell(59, 5, '',0,1);

		$pdf->Cell(130, 5, 'Malang, Indonesia, 65145',0,0);
		$pdf->Cell(34, 5, "$tglTarik",0,1);

		$pdf->Cell(130, 5, 'No. HP +62852614978xx',0,0);
		$pdf->Cell(34, 5, "Mr. $username",0,1);

		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(189, 10, '',0,1);
        $pdf->Cell(189,5,'Transaksi Penarikan',0,1);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'BANK',1,0);
        $pdf->Cell(55,6,'Nomor Rekening',1,0);
        $pdf->Cell(37,6,'Jumlah Penarikan',1,0);
        $pdf->Cell(35,6,'Sisa Saldo',1,1);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(20,6,"$bank",1,0);
        $pdf->Cell(55,6,"$noRek",1,0);
        $pdf->Cell(37,6,"$nominal",1,0);
        $pdf->Cell(35,6,"$saldo",1,1);
        // $mahasiswa = $this->db->get('mahasiswa')->result();
        // foreach ($mahasiswa as $row){
        //     $pdf->Cell(20,6,$row->nim,1,0);
        //     $pdf->Cell(85,6,$row->nama_lengkap,1,0);
        //     $pdf->Cell(27,6,$row->no_hp,1,0);
        //     $pdf->Cell(25,6,$row->tanggal_lahir,1,1); 
        // }
		$pdf->Output();
	}

	public function investasi($id) {
		$username = $this->session->userdata('username');
		$this->load->model('investasi');
		$data = $this->investasi->getTransaksi($username)->result();
		date_default_timezone_set('Asia/Jakarta');
        $tglTarik = date("d-m-Y");  
		
		//data nya ga ngerti coy

		$pdf = new FPDF('p','mm','A4');

		$width_cell = 40;  
		$height_cell = 6;  
		
		$pdf->AddPage();

		$pdf->SetFont('Arial','B','14');

		$pdf->Cell(130, 5, 'INSEED.ID',0,0);
		$pdf->Cell(59, 5, 'INVOICE',0,1);

		$pdf->SetFont('Arial','',12);

		$pdf->Cell(130, 5, 'Jl. MT. Haryono',0,0);
		$pdf->Cell(59, 5, '',0,1);

		$pdf->Cell(130, 5, 'Malang, Indonesia, 65145',0,0);
		$pdf->Cell(34, 5, "$tglTarik",0,1);

		$pdf->Cell(130, 5, 'No. HP +62852614978xx',0,0);
		$pdf->Cell(34, 5, "Mr. $username",0,1);

		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(189, 10, '',0,1);
        $pdf->Cell(189,5,'Transaksi Investasi Proyek',0,1);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(20,6,'Id Proyek',1,0);
        $pdf->Cell(55,6,'Nama Proyek',1,0);
        $pdf->Cell(37,6,'Lokasi',1,0);
        $pdf->Cell(25,6,'Total Investasi',1,0);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(189, 10, '',0,1);
        $start_awal=$pdf->GetX(); 
		$get_xxx = $pdf->GetX();
		$get_yyy = $pdf->GetY();
        foreach ($data as $row){
        	$get_xxx=$start_awal;  

	        $pdf->MultiCell(20,$height_cell,"$row->idProyek",'LR');
	        $get_xxx+=20;
	        $pdf->SetXY($get_xxx, $get_yyy);

	        $pdf->MultiCell(55,$height_cell,"$row->namaProyek",'LR');
	        $get_xxx+=55;                           
			$pdf->SetXY($get_xxx, $get_yyy);

	        $pdf->MultiCell(37,$height_cell,"$row->lokasi",'LR');
	        $get_xxx+=37;                           
			$pdf->SetXY($get_xxx, $get_yyy);

	        $pdf->MultiCell(25,$height_cell,"$row->nominalInvest",'LR');
	        $get_xxx+=25;
	        $pdf->Ln();
	        $pdf->Cell(189,1,'',0,1);
	    }
	    
        // $mahasiswa = $this->db->get('mahasiswa')->result();
        // foreach ($mahasiswa as $row){
        //     $pdf->Cell(20,6,$row->nim,1,0);
        //     $pdf->Cell(85,6,$row->nama_lengkap,1,0);
        //     $pdf->Cell(27,6,$row->no_hp,1,0);
        //     $pdf->Cell(25,6,$row->tanggal_lahir,1,1); 
        // }
		$pdf->Output();
	}

	public function produk($idTransaksi) {
		$this->load->model('model');
		$id = $this->uri->segment(3);
		date_default_timezone_set('Asia/Jakarta');
        $tglTarik = date("d-m-Y");  
		$username = $this->session->userdata('username');
		$data = $this->model->transaksi($idTransaksi)->result();
		
		$pdf = new FPDF('p','mm','A4');
		
		$width_cell = 40;  
		$height_cell = 6;  
		
		$pdf->AddPage();

		$pdf->SetFont('Arial','B','14');

		$pdf->Cell(130, 5, 'INSEED.ID',0,0);
		$pdf->Cell(59, 5, 'INVOICE',0,1);

		$pdf->SetFont('Arial','',12);

		$pdf->Cell(130, 5, 'Jl. MT. Haryono',0,0);
		$pdf->Cell(59, 5, '',0,1);

		$pdf->Cell(130, 5, 'Malang, Indonesia, 65145',0,0);
		$pdf->Cell(34, 5, "$tglTarik",0,1);

		$pdf->Cell(130, 5, 'No. HP +62852614978xx',0,0);
		$pdf->Cell(34, 5, "Yth. $username",0,1);

		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(189, 10, '',0,1);
        $pdf->Cell(189,5,'Transaksi Pembelian Produk',0,1);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35,6,'idTransaksi',1,0);
		$pdf->Cell(40,6,'Nama Produk',1,0);
        $pdf->Cell(40,6,'Nama Penjual',1,0);
        $pdf->Cell(40,6,'Alamat Tujuan',1,0);
        $pdf->Cell(25,6,'Tgl Trsksi',1,0);
        $pdf->Cell(30,6,'Total',1,0);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(189, 10, '',0,1);
        $start_awal=$pdf->GetX(); 
		$get_xxx = $pdf->GetX();
		$get_yyy = $pdf->GetY();
        foreach ($data as $row){
        	$get_xxx=$start_awal;  

	        $pdf->MultiCell(35,$height_cell,"$id",'R');
	        $get_xxx+=35;
	        $pdf->SetXY($get_xxx, $get_yyy);

	        $pdf->MultiCell($width_cell,$height_cell,"$row->namaProduk",'R');
	        $get_xxx+=$width_cell;                           
			$pdf->SetXY($get_xxx, $get_yyy);
			
			$pdf->MultiCell($width_cell,$height_cell,"$row->namaPenjual",'R');
	        $get_xxx+=$width_cell;                           
			$pdf->SetXY($get_xxx, $get_yyy);

	        $pdf->MultiCell($width_cell,$height_cell,"$row->alamatTujuan",'R');
	        $get_xxx+=$width_cell;                           
			$pdf->SetXY($get_xxx, $get_yyy);

	        $pdf->MultiCell(25,$height_cell,"$row->tglTrans",'LR');
	        $get_xxx+=25;                           
			$pdf->SetXY($get_xxx, $get_yyy);
			
	        $pdf->MultiCell(30,$height_cell,"$row->total",'LR');
	        $get_xxx+=30;
	        $pdf->Ln();
	        $pdf->Cell(189,1,'',0,1);
	    }
        // $mahasiswa = $this->db->get('mahasiswa')->result();
        // foreach ($mahasiswa as $row){
        //     $pdf->Cell(20,6,$row->nim,1,0);
        //     $pdf->Cell(85,6,$row->nama_lengkap,1,0);
        //     $pdf->Cell(27,6,$row->no_hp,1,0);
        //     $pdf->Cell(25,6,$row->tanggal_lahir,1,1); 
        // }
		$pdf->Output();
	}
}
?>