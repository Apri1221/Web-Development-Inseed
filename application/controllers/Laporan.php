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

		$pdf->Cell(113, 5, 'Malang, Indonesia, 65145',0,0);
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
		//data nya ga ngerti coy

		$pdf = new FPDF('p','mm','A4');

		$pdf->AddPage();

		$pdf->SetFont('Arial','B','14');

		$pdf->Cell(130, 5, 'INSEED.ID',0,0);
		$pdf->Cell(59, 5, 'INVOICE',0,1);

		$pdf->SetFont('Arial','',12);

		$pdf->Cell(130, 5, 'Jl. MT. Haryono',0,0);
		$pdf->Cell(59, 5, '',0,1);

		$pdf->Cell(113, 5, 'Malang, Indonesia, 65145',0,0);
		

		$pdf->Cell(130, 5, 'No. HP +62852614978xx',0,0);
		$pdf->Cell(34, 5, "Mr. $username",0,1);

		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(189, 10, '',0,1);
        $pdf->Cell(189,5,'Transaksi Investasi Proyek',0,1);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'idProyek',1,0);
        $pdf->Cell(55,6,'Nama Proyek',1,0);
        $pdf->Cell(37,6,'Lokasi',1,0);
        $pdf->Cell(35,6,'Nominal Investasi',1,1);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(20,6,"$idProyek",1,0);
        $pdf->Cell(55,6,"$namaProyek",1,0);
        $pdf->Cell(37,6,"$lokasi",1,0);
        $pdf->Cell(35,6,"$nominal",1,1);
        // $mahasiswa = $this->db->get('mahasiswa')->result();
        // foreach ($mahasiswa as $row){
        //     $pdf->Cell(20,6,$row->nim,1,0);
        //     $pdf->Cell(85,6,$row->nama_lengkap,1,0);
        //     $pdf->Cell(27,6,$row->no_hp,1,0);
        //     $pdf->Cell(25,6,$row->tanggal_lahir,1,1); 
        // }
		$pdf->Output();
	}

	public function produk() {
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

		$pdf->Cell(113, 5, 'Malang, Indonesia, 65145',0,0);
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
}
?>