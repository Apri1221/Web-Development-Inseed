<?php


class Laporan extends CI_Controller {
	
	function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('pdf');
    }

	public function index() {
		$pdf = new FPDF('p','mm','A4');

		$pdf->AddPage();

		$pdf->SetFont('Arial','B','14');

		$pdf->Cell(130, 5, 'INSEED.ID',0,0);
		$pdf->Cell(59, 5, 'INVOICE',0,1);

		$pdf->SetFont('Arial','',12);

		$pdf->Cell(130, 5, 'Jl. MT. Haryono',0,0);
		$pdf->Cell(59, 5, '',0,1);

		$pdf->Cell(130, 5, '[Malang, Indonesia, KodePos]',0,0);
		$pdf->Cell(25, 5, 'Date',0,0);
		$pdf->Cell(130, 5, '[dd/mm/yyyy]',0,1);

		$pdf->Cell(130, 5, 'Phone [+62852614978xx]',0,0);
		$pdf->Cell(25, 5, 'Customer Username',0,0);
		$pdf->Cell(34, 5, '[namaAkun]',0,1);

		$pdf->Cell(189, 10, '',0,1);

		$pdf->Cell(189, 5, 'Tagihan kepada',0,0);

		$pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'NIM',1,0);
        $pdf->Cell(85,6,'NAMA MAHASISWA',1,0);
        $pdf->Cell(27,6,'NO HP',1,0);
        $pdf->Cell(25,6,'TANGGAL LHR',1,1);
        $pdf->SetFont('Arial','',10);
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