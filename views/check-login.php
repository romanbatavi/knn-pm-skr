<?php
session_start();

# check apakah ada akse post dari halaman login?, jika tidak kembali kehalaman depan
if( !isset($_POST['username']) ) { header('location:/'); exit(); }

# set nilai default dari error,
$error = '';

require ( 'config.php' );

$username = trim( $_POST['username'] );
$password = trim( $_POST['password'] );

if( strlen($username) < 2 )
{
	# jika ada error dari kolom username yang kosong
	$error = '   
	<div class="alert alert-warning alert-dismissable" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h3 class="alert-heading font-size-h5 font-w700 mb-5">Warning</h3>
                                        <p class="mb-0">
                                            Username Tidak Boleh Kosong <a class="alert-link" href="javascript:void(0)">link</a>!
                                        </p>
                                    </div>                                      
  
	';
}else if( strlen($password) < 2 )
{
	# jika ada error dari kolom password yang kosong
	$error =  '   
	<div class="alert alert-warning alert-dismissable" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h3 class="alert-heading font-size-h5 font-w700 mb-5">Warning</h3>
                                        <p class="mb-0">
                                            Password Tidak Boleh Kosong <a class="alert-link" href="javascript:void(0)">link</a>!
                                        </p>
                                    </div>                                       
  
	';
}else{
	// if (md5($_POST['pin']) <> $_SESSION['image_random_value'])
	// {
	// echo'<script>alert(\'Kode Captcha Salah ! !\')
	// setTimeout(\'location.href="./"\' ,0);</script>';
	// exit;
	// }
	# Escape String, ubah semua karakter ke bentuk string
	$username = $koneksi->escape_string($username);
	$password = $koneksi->escape_string($password);

	# hash dengan SHA1
	$password = ($password);

	# SQL command untuk memilih data berdasarkan parameter $username dan $password yang 
	# di inputkan
	$sql = "SELECT id_user, username, hak_akses, nama_lengkap, foto_user, alamat, email, no FROM user 
			WHERE username='$username' 
			AND password='$password' LIMIT 1";

	# melakukan perintah
	$query = $koneksi->query($sql);

	# check query
	if( !$query )
	{
		die( 'Oops!! Database gagal '. $koneksi->error );
	}

	# check hasil perintah
	if( $query->num_rows == 1 )
	{	
		# jika data yang dimaksud ada
		# maka ditampilkan
		$row =$query->fetch_assoc();
		
		# data nama disimpan di session browser
		$_SESSION['id_user'] = $row['id_user']; 
		$_SESSION['akses']	   = $row['hak_akses'];
		$_SESSION['username']	   = $row['username'];
		$_SESSION['hak_akses']	   = $row['hak_akses'];
		$_SESSION['nama_lengkap']	   = $row['nama_lengkap'];
		$_SESSION['foto_user']	   = $row['foto_user'];
		$_SESSION['email']	   = $row['email'];
		$_SESSION['alamat']	   = $row['alamat'];
		$_SESSION['no']	   = $row['no'];



		if( $row['hak_akses'] == 'adminit')
		{
			# data hak Admin di set
			$_SESSION['saya_adminit']= 'TRUE';
		}

		if( $row['hak_akses'] == 'pt')
		{
			# data hak Admin di set
			$_SESSION['saya_pt']= 'TRUE';
		}

		if( $row['hak_akses'] == 'siswa')
		{
			# data hak Admin di set
			$_SESSION['saya_siswa']= 'TRUE';
		}

		if( $row['hak_akses'] == 'guru')
		{
			# data hak Admin di set
			$_SESSION['saya_guru']= 'TRUE';
		}


		# menuju halaman sesuai hak akses
		header('location:'.$url.'/'.$_SESSION['akses'].'/');
		exit();

	}else{
		
		# jika data yang dimaksud tidak ada
		$error = '   
		<div class="alert alert-danger alert-dismissable" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h3 class="alert-heading font-size-h5 font-w700 mb-5">Login Gagal!!</h3>
		<p class="mb-0">
			Username/Password Yang Anda Masukan Salah!!</a>!
		</p>
	</div>                                        
      
        ';
	}

}

if( !empty($error) )
{
	# simpan error pada session
	$_SESSION['error'] = $error;
	header('location:'.$url.'/');
	exit();
}