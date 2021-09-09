<?php 
// menghubungkan dengan koneksi
require_once '../views/config.php';
// menghubungkan dengan library excel reader
include_once "import/excel_reader2.php";
if (isset($_POST['submit'])) {
    
    // mengambil isi file xls
    $data = new Spreadsheet_Excel_Reader($_FILES['file_data_latih']['tmp_name']);
    
    // menghitung jumlah baris data yang ada
    $jumlah_baris = $data->rowcount($sheet_index=0);
    $column = $data->colcount($sheet_index = 0);
    
    // jumlah default data yang berhasil di import
    
    for ($i=2; $i<=$jumlah_baris; $i++){
        
        // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
        $id_user 		    = $data->val($i, 1);
        $ips  		    = $data->val($i, 2); 
        $ipa 		= $data->val($i, 3); 
        $pkn 	 	= $data->val($i, 4); 
        $bindo  		= $data->val($i, 5); 
        $mtk 	= $data->val($i, 6); 
        $bing 		= $data->val($i, 7); 
        $agama 	= $data->val($i, 8); 
        // $rekomendasi    = $data->val($i, 9); 
        // input data ke database (table mproduk)
        $sql = "INSERT `master_nilai` SET`id_user`='$id_user',
    `ips`='$ips',
    `ipa`='$ipa',
    `pkn`='$pkn',
    `bindo`='$bindo',
    `mtk`='$mtk',
    `bing`='$bing',
    `agama`='$agama'
    ";
    
    
    if ($koneksi->query($sql) === TRUE) {
        echo "berasil";
        echo "<script>alert('Input berhasil');window.location = 'index.php?m=masternilai';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
}

// $sql = "INSERT `siswa` SET`nama`='$nama',`jenis_kelamin`='$jenis_kelamin',`nilai_un`='$nilai_un',
//     `sekolah`='$sekolah',`jarak`='$jarak',`akreditasi`='$akreditasi',
//     `kelulusan`='$kelulusan',`rata_rata_nem`='$rata_rata_nem'";
//     $res = mysqli_query($koneksi, $sql);

?>