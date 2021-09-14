<?php
include 'functions.php';
require('./../pdf/fpdf.php');
date_default_timezone_set('Asia/Jakarta');
$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('https://i.ibb.co/tQf9kq4/Whats-App-Image-2021-07-03-at-02-47-39.jpg',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'SMK DINAMIKA PEMBANGUNAN 1 JAKARTA',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 021-4605-887',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Jl. Raya Penggilingan No. 99 Cakung-Jakarta Timur',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : https://smkdp1jkt.sch.id email : smkdp1jkt@gmail.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data lowongan",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("d/m/Y | H:i"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(10, 0.8, 'Nama PT', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Bidang', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Email', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'No Telp', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Tanggal Buat', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Expired', 1, 1, 'C');
$pdf->SetFont('Arial','',10);

$q = esc_field($_GET['q']);
$rows = $db->get_results("SELECT * FROM tbl_lowongan n INNER JOIN user a ON a.id_user=n.id_user ");
$no = 0;

foreach ($rows as $row) : 

	$pdf->Cell(1, 0.8, ++$no , 1, 0, 'C');
	$pdf->Cell(10, 0.8, $row->nama_lengkap,1, 0, 'C');
    $pdf->Cell(4, 0.8, $row->nama_lowongan,1, 0, 'C');
	$pdf->Cell(4, 0.8, $row->email_lowongan,1, 0, 'C');
	$pdf->Cell(3, 0.8, $row->no_lowongan, 1, 0,'C');
    $pdf->Cell(2, 0.8, $row->tanggal_buat,1, 0, 'C');
	$pdf->Cell(2, 0.8, $row->expired, 1, 1,'C');
	
endforeach;

    $pdf->ln(1);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(40.5,0.7,"Tanggal: ".date("d/m/Y"),0,0,'C');

    $pdf->ln(1);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(40.5,0.7,"Mengetahui",0,10,'C');

    $pdf->ln(1);
    $pdf->ln(1);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(40.5,0.7,"SMK DINAMIKA PEMBANGUNAN 1 JAKARTA",0,10,'C');

    $pdf->Output("LAPORAN_LOWONGAN.pdf","I");
?>

