<?php
	session_start();
if( isset($_SESSION['akses']) )
{
	header('location:'.$_SESSION['akses']);
	exit();
}
$error = '';
	if( isset($_SESSION['error']) ) {
$error = $_SESSION['error']; 
	unset($_SESSION['error']);
} 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	<!-- /Added by HTTrack -->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&amp;family=Roboto+Mono&amp;display=swap" rel="stylesheet">
		<link href="assets/build/styles/ltr-core.css" rel="stylesheet">
		<link href="assets/build/styles/ltr-vendor.css" rel="stylesheet">
		<link href="assets/build/styles/ltr-dashboard1.css" rel="stylesheet">
		<link href="https://panely-html.blueupcodes.com/assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
		<script src="assets/jquery-3.3.1.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<title>Login</title>
	</head>
	<body class="theme-light preload-active" id="fullscreen">
		<div class="preload">
			<div class="preload-dialog">
				<div class="spinner-border text-primary preload-spinner"></div>
			</div>
		</div>
		<div class="holder">
			<div class="wrapper">
				<div class="content">
					<div class="container-fluid">
						<div class="row no-gutters align-items-center justify-content-center h-100">
							<div class="col-lg-8 col-xl-6">
								<div class="portlet overflow-hidden">
									<div class="row no-gutters">
										<div class="col-md-6">
											<div class="portlet-body d-flex flex-column justify-content-center align-items-start h-100 bg-primary text-white">
												<h2>SELAMAT DATANG FORM Lupa PSW</h2>
												<p>
													DI SISTEM REKOMENDASI PEKERJAAN & BANTUAN BEASISWA SMK DINAMIKA PEMBANGUNAN 1 JAKARTA<BR>
													SILAHKAN LOGIN ATAU<BR>
													BELUM PUNYA AKUN SILAHKAH <b><U>REGISTER</U></b>
												</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="portlet-body h-100">
											<form  method="get" id="login-form">
												<div class="form-group">
													<div class="float-label float-label-lg">
														<input class="form-control form-control-lg" type="text" id="email" name="username" placeholder="Cari Username Anda"><label for="email">Username</label>
													</div>
												</div>
												<div class="d-flex align-items-center justify-content-between mb-4">
													<div class="form-group mb-0">
														<div class="custom-control custom-control-lg custom-switch">
															</div>
														</div>
														<a href="./">LOGIN</a>
													</div>
													<?php 
													if(isset($_GET['username'])){
														include_once("views/config.php");
														echo'
														<a type="button" class="btn btn-circle btn-alt-danger mr-5 mb-5, open_modal" id='.$_GET['username'].' data-toggle="tooltip" title="Klik Di sini Untuk Ubah PSW">
														<b>Klik DI Sini</b> <i class="fa fa-refresh "></i>
														</a>';
													}
													?>
											<button type="submit" class="btn btn-label-primary btn-lg btn-block btn-pill">Cari Username</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div  id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<script type="text/javascript">
	$(document).ready(function () {
	$(".open_modal").click(function(e) {
	var m = $(this).attr("id");
	$.ajax({
		url: "edituser.php",
		type: "GET",
		data : {username: m,},
		success: function (ajaxData){
		$("#ModalEdit").html(ajaxData);
		$("#ModalEdit").modal('show',{backdrop: 'true'});
	}
});
});
});
</script>
<script type="text/javascript" src="assets/build/scripts/mandatory.js"></script>
<script type="text/javascript" src="assets/build/scripts/dashboard1.js"></script>
<script type="text/javascript" src="assets/build/scripts/core.js"></script>
<script type="text/javascript" src="assets/build/scripts/vendor.js"></script>
<script type="text/javascript" src="assets/app/dashboard1/pages/login.js"></script>
</body>
</html>