<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpdf extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->model('m_ujian');		
		$this->load->helper(array('form', 'url'));
		
		if ($this->session->userdata('id_admin')=="") 
		{
			redirect('login');
		}
		
		$this->load->helper('text');
		date_default_timezone_set("Asia/jakarta");
	}


	public function pdf($nama_ujian)
	{
		
	
		$hasil_ujian	=	$this->m_ujian->h_ujian_name($nama_ujian);
		$get			=	$hasil_ujian->row();
		$pdf = new FPDF();
        $pdf->AddPage("L","A4");
        $pdf->SetFont('Arial','B',25);
		
		// Framed title
		$pdf->Image(base_url('uploads/ms.jpg'),50,10,25,0,'JPG');
		
		$pdf->Cell(272,10,'Hasil TryOut MentoringSTAN',0,0,'C');
		$pdf->Image(base_url('uploads/ms.jpg'),215,10,25,0,'JPG');
		$pdf->Ln(30);
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(272,10,'Nama Ujian	:	'.ucfirst($get->nama_ujian),0,0,'L');
		$pdf->Ln();
		$pdf->Cell(272,10,'Waktu Ujian	:	'.ucfirst($get->waktu).' Menit',0,0,'L');
		//$pdf->Cell(272,10,'Title',0,0,'C');
		// Line break
		$pdf->Ln(20);
		$pdf->SetAutoPageBreak("on");
        
		
		$pdf->SetFillColor(100,0,0);
		$pdf->SetTextColor(255,255,255);
		$pdf->Cell(72,15,'','LT',0,'R',true);
		$pdf->Cell(80,15,'Tes Potensi Akademik','LT',0,'C',true);		
		$pdf->Cell(80,15,'Tes Bahasa Inggris','RTL',0,'C',true);		
		$pdf->Cell(40,15,'','RTL',1,'C',true);		
		$pdf->Cell(10,15,'No',1,0,'C',true);
		$pdf->Cell(62,15,'Nama Siswa',1,0,'C',true);
		
		//$pdf->Ln();
		$pdf->Cell(20,15,'Benar',1,0,'C',true);
		$pdf->Cell(20,15,'Salah',1,0,'C',true);
		$pdf->Cell(20,15,'Kosong',1,0,'C',true);
		$pdf->Cell(20,15,'Nilai',1,0,'C',true);
		$pdf->Cell(20,15,'Benar',1,0,'C',true);
		$pdf->Cell(20,15,'Salah',1,0,'C',true);
		$pdf->Cell(20,15,'Kosong',1,0,'C',true);
		$pdf->Cell(20,15,'Nilai',1,0,'C',true);
		$pdf->Cell(20,15,'T.Nilai',1,0,'C',true);
		$pdf->Cell(20,15,'Status',1,0,'C',true);
		$pdf->Ln();
		$no=1;
		$pdf->SetTextColor(0,0,0);
		foreach($hasil_ujian->result() as $ujian){
			
			$pdf->Cell(10,10,$no++,1,0,'C');
			$pdf->Cell(62,10,ucfirst($ujian->h_namasiswa),1,0,'C');			
			$pdf->Cell(20,10,$ujian->h_benar_tpa,1,0,'C');
			$pdf->Cell(20,10,$ujian->h_sal_tpa,1,0,'C');
			$pdf->Cell(20,10,$ujian->h_kos_tpa,1,0,'C');
			$pdf->Cell(20,10,$ujian->h_nil_tpa,1,0,'C');
			$pdf->Cell(20,10,$ujian->h_benar_tbi,1,0,'C');
			$pdf->Cell(20,10,$ujian->h_sal_tbi,1,0,'C');
			$pdf->Cell(20,10,$ujian->h_kos_tbi,1,0,'C');
			$pdf->Cell(20,10,$ujian->h_nil_tbi,1,0,'C');
			$pdf->Cell(20,10,$ujian->h_tot_nilai,1,0,'C');
			$pdf->Cell(20,10,ucfirst($ujian->status),1,0,'C');
			$pdf->Ln();
		}
		
		
        $pdf->Output();
  
	}
	
	
	
}
?>