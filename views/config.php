<?php
/**
 * Nama File : Config.php
 * File Ini berisi beberapa data penting seperti
 * Data koneksi ke database
 * Secret Kode
 * dan data lain yang nantinya akan digunakan secara terus-menerus
 */
 
 # rubahlah sesuai alamat website kamu
 $url    = 'http://localhost:27/revisi_roman/';

 # host untuk database, biasanya 'localhost'
 $dbhost = 'localhost';
 
 # username untuk mengakses database, jika dilokal biasanya 'root'
 $dbuser = 'root';

 # password untuk mengakses databae, jika dilokal biasanya kosong
 $dbpass = '';

 # nama database yang akan digunakan
 $dbname = 'revisi_roman';
 

 
 # koneksi Database
 $koneksi = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
 $mysqli = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); 
 $conn   = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);
 $connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 

 if (mysqli_connect_errno()) {
    printf("Database connection failed: %s\n", mysqli_connect_error());
    exit();
}

mysqli_set_charset($connect, "utf8");
 # Check koneksi, berhasil atau tidak
 if( $koneksi->connect_error )
 {
 	die( 'Oops!! Koneksi Gagal : '. $koneksi->connect_error );
 }

 $url = rtrim($url,'/');
 ?>

