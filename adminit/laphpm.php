<?php
require_once "database.php";
$db = new database();
$kon = $db->connect();
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
$pdf->Cell(25.5,0.7,"Laporan Hasil Profile Matching",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("d/m/Y | H:i"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nis', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Nama Siswa', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Nilai Penilaian', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nilai Kemampuan ', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Total ', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Ranking', 1, 1, 'C');

$pdf->SetFont('Arial','',10);


$query = "SELECT user.id_user, user.nama_lengkap, user.hak_akses, user.angkatan,user.nis,
	pm_penilaian.nilai_tot_A1 as PE, pm_kemampuan.nilai_tot_A2 as KE,
	(((pm_penilaian.nilai_tot_A1*60)/100)+((pm_kemampuan.nilai_tot_A2*40)/100)) as Total
	FROM user 
	LEFT JOIN pm_penilaian ON user.id_user = pm_penilaian.id_user
	LEFT JOIN pm_kemampuan ON user.id_user = pm_kemampuan.id_user
	where user.hak_akses = 'siswa' ORDER BY Total DESC";
    $hasil = $kon->query("$query");

    $no = 1;
    while ($row = $hasil->fetch_array()) {
    $id_user    = $row['id_user'];
    $nama_lengkap  = $row['nama_lengkap'];
    $nis  = $row['nis'];

    $pdf->Cell(1, 0.8, $no , 1, 0, 'C');
    $pdf->Cell(4, 0.8, $nis,1, 0, 'C');
    $pdf->Cell(3, 0.8, $nama_lengkap,1, 0, 'C');
    $pdf->Cell(3, 0.8, $row['PE'],1, 0, 'C');
    $pdf->Cell(4, 0.8, $row['KE'],1, 0, 'C');
    $pdf->Cell(3, 0.8, number_format((float)$row['Total'], 2, '.', ''),1, 0, 'C');
    $pdf->Cell(2, 0.8, $no,1, 1, 'C');
    $no++;

        }
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
    $pdf->Output("LAPORAN_HASIL_PM.pdf","I");
        ?>

