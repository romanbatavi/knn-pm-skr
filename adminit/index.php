<?php
session_start();

if( !isset($_SESSION['saya_adminit']) )
{
	header('location:./../'.$_SESSION['akses']);
	exit();
}

$id_user2 = ( isset($_SESSION['id_user']) ) ? $_SESSION['id_user'] : '';
$hak_akses2 = ( isset($_SESSION['hak_akses']) ) ? $_SESSION['hak_akses'] : '';
$nama2 = ( isset($_SESSION['username']) ) ? $_SESSION['username'] : '';
$foto2 = ( isset($_SESSION['foto_user']) ) ? $_SESSION['foto_user'] : '';
$nama_lengkap2 = ( isset($_SESSION['nama_lengkap']) ) ? $_SESSION['nama_lengkap'] : '';


?>
<?php
include 'functions.php';
?>
<!DOCTYPE html><html lang="en" dir="ltr">
<!-- Mirrored from panely-html.blueupcodes.com/dashboard1/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jun 2021 20:12:49 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- cssatas -->

		<?php
			include "tampilan/cssatas.php"
		?>
<!-- cssatas -->
<title>Halo AdminIT</title>
</head>
<body class="theme-light preload-active aside-active aside-mobile-minimized aside-desktop-maximized" id="fullscreen">
<!-- <div class="preload">
	<div class="preload-dialog">
		<div class="spinner-border text-primary preload-spinner"></div>
	</div>
</div> -->
<!-- holder -->
<div class="holder">
	<div class="aside">
		<div class="aside-header">
			<h3 class="aside-title">Roman</h3>
			<div class="aside-addon">
				<button class="btn btn-label-primary btn-icon btn-lg" data-toggle="aside"><i class="fa fa-times aside-icon-minimize"></i><i class="fa fa-thumbtack aside-icon-maximize"></i></button>
			</div>
		</div>
        <!-- menu samping -->
		<?php
			include "tampilan/menusamping.php"
		?>
        <!-- end menu samping -->
	</div>
    <!-- wrapper -->
	<div class="wrapper">
		
        <!-- menu atas  -->
		<?php
			include "tampilan/menuatas.php"
		?>
        <!-- end menu atas  -->
        <!-- konten page  -->
		<div class="content">
		<?php
    if (file_exists($mod . '.php'))
      include $mod . '.php';
    else
      include 'home.php';
    ?>
		</div>
        <!-- end konten page  -->
        
        <!-- footer -->
		<?php
			include "tampilan/footer.php"
		?>
        <!-- end footer -->
	</div>
    <!-- end wrapper -->
</div>
<!-- end holder -->
<div class="scrolltop">
	<button class="btn btn-info btn-icon btn-lg"><i class="fa fa-angle-up"></i></button>
</div>

<div class="float-btn float-btn-right">
	<button class="btn btn-flat-primary btn-icon mb-2" id="theme-toggle" data-toggle="tooltip" data-placement="right" title="Change theme"><i class="fa fa-moon"></i></button><button class="btn btn-flat-primary btn-icon" data-toggle="sidemenu" data-target="#sidemenu-dashboard"><i class="fa fa-paper-plane"></i></button>
</div>
<!-- cssbawah -->
		<?php
			include "tampilan/cssbawah.php"
		?>
<!-- cssbawah -->
</body>
</html>