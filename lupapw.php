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
} ?>
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
										<!-- <a href="registrasi" class="btn btn-outline-light btn-lg btn-widest btn-pill">Register</a> -->
									</div>
								</div>
								<div class="col-md-6">
									<div class="portlet-body h-100">
										<!-- <div class="d-flex justify-content-center mb-4">
											<button class="btn btn-label-primary btn-pill"><i class="fab fa-facebook mr-2"></i> Facebook</button><button class="btn btn-label-info btn-pill mx-2"><i class="fab fa-google mr-2"></i> Google</button><button class="btn btn-label-danger btn-pill"><i class="fab fa-pinterest mr-2"></i> Pinterest</button>
										</div> -->
										<form  method="get" id="login-form">
											<div class="form-group">
												<div class="float-label float-label-lg">
													<input class="form-control form-control-lg" type="text" id="email" name="username" placeholder="Cari Username Anda"><label for="email">Username</label>
												</div>
											</div>
											
											<div class="d-flex align-items-center justify-content-between mb-4">
												<div class="form-group mb-0">
													<div class="custom-control custom-control-lg custom-switch">
														<!-- <input type="checkbox" class="custom-control-input" id="remember" name="remember"><label class="custom-control-label" for="remember">Remember me</label> -->
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
<!-- <div class="sidemenu sidemenu-right sidemenu-wider" id="sidemenu-todo">
	<div class="sidemenu-header">
		<h3 class="sidemenu-title">May 14, 2020</h3>
		<div class="sidemenu-addon">
			<button class="btn btn-label-danger btn-icon" data-dismiss="sidemenu"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="sidemenu-body" data-simplebar="data-simplebar">
		<div class="portlet portlet-bordered mb-3">
			<div class="portlet-header portlet-header-bordered">
				<div class="portlet-icon">
					<i class="fa fa-tasks"></i>
				</div>
				<h3 class="portlet-title">Upcoming events</h3>
			</div>
			<div class="portlet-body">
				<div class="timeline rich-list-bordered">
					<div class="timeline-item">
						<div class="timeline-pin">
							<i class="marker marker-circle text-primary"></i>
						</div>
						<div class="timeline-content">
							<div class="rich-list-item">
								<div class="rich-list-content">
									<h5 class="rich-list-title">12:00</h5>
									<p class="rich-list-paragraph">Donec laoreet fringilla justo a pellentesque</p>
								</div>
							</div>
						</div>
					</div>
					<div class="timeline-item">
						<div class="timeline-pin">
							<i class="marker marker-circle text-success"></i>
						</div>
						<div class="timeline-content">
							<div class="rich-list-item">
								<div class="rich-list-content">
									<h5 class="rich-list-title">13:20</h5>
									<p class="rich-list-paragraph">Nunc quis massa nec enim</p>
								</div>
							</div>
						</div>
					</div>
					<div class="timeline-item">
						<div class="timeline-pin">
							<i class="marker marker-circle text-danger"></i>
						</div>
						<div class="timeline-content">
							<div class="rich-list-item">
								<div class="rich-list-content">
									<h5 class="rich-list-title">14:00</h5>
									<p class="rich-list-paragraph">Praesent sit amet</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="portlet portlet-bordered mb-0">
			<div class="portlet-header portlet-header-bordered">
				<div class="portlet-icon">
					<i class="fa fa-users"></i>
				</div>
				<h3 class="portlet-title">Contacts</h3>
				<div class="portlet-addon">
					<button class="btn btn-label-primary btn-icon"><i class="fa fa-plus"></i></button>
				</div>
			</div>
			<div class="portlet-body p-0">
				<div class="rich-list rich-list-flush rich-list-action">
					<a href="#" class="rich-list-item">
					<div class="rich-list-prepend">
						<div class="avatar avatar-circle">
							<div class="avatar-addon avatar-addon-top">
								<div class="avatar-icon avatar-icon-info">
									<i class="fa fa-thumbtack"></i>
								</div>
							</div>
							<div class="avatar-display">
								<img src="https://panely-html.blueupcodes.com/assets/images/avatar/avatar-3.webp" alt="Avatar image">
							</div>
							<div class="avatar-addon avatar-addon-bottom">
								<i class="marker marker-dot text-secondary"></i>
							</div>
						</div>
					</div>
					<div class="rich-list-content">
						<h4 class="rich-list-title">Charlie Stone</h4>
						<span class="rich-list-subtitle">Art Director</span>
					</div>
					<div class="rich-list-append flex-column align-items-end">
						<span class="text-muted text-nowrap">1 min</span><span class="badge badge-success badge-pill">1</span>
					</div>
					</a><a href="#" class="rich-list-item">
					<div class="rich-list-prepend">
						<div class="avatar avatar-circle">
							<div class="avatar-display">
								<img src="https://panely-html.blueupcodes.com/assets/images/avatar/avatar-5.webp" alt="Avatar image">
							</div>
							<div class="avatar-addon avatar-addon-bottom">
								<i class="marker marker-dot text-success"></i>
							</div>
						</div>
					</div>
					<div class="rich-list-content">
						<h4 class="rich-list-title">Freddie Stevens</h4>
						<span class="rich-list-subtitle">Journalist</span>
					</div>
					<div class="rich-list-append flex-column align-items-end">
						<span class="text-muted text-nowrap">2 hour</span><span class="badge badge-success badge-pill">12</span>
					</div>
					</a><a href="#" class="rich-list-item">
					<div class="rich-list-prepend">
						<div class="avatar avatar-circle">
							<div class="avatar-display">
								<img src="https://panely-html.blueupcodes.com/assets/images/avatar/avatar-2.webp" alt="Avatar image">
							</div>
							<div class="avatar-addon avatar-addon-bottom">
								<i class="marker marker-dot text-success"></i>
							</div>
						</div>
					</div>
					<div class="rich-list-content">
						<h4 class="rich-list-title">Tyler Clark</h4>
						<span class="rich-list-subtitle">Programmer</span>
					</div>
					<div class="rich-list-append flex-column align-items-end">
						<span class="text-muted text-nowrap">5 hour</span>
					</div>
					</a><a href="#" class="rich-list-item">
					<div class="rich-list-prepend">
						<div class="avatar avatar-circle">
							<div class="avatar-addon avatar-addon-top">
								<div class="avatar-icon avatar-icon-success">
									<i class="fa fa-check"></i>
								</div>
							</div>
							<div class="avatar-display">
								<img src="https://panely-html.blueupcodes.com/assets/images/avatar/avatar-4.webp" alt="Avatar image">
							</div>
							<div class="avatar-addon avatar-addon-bottom">
								<i class="marker marker-dot text-secondary"></i>
							</div>
						</div>
					</div>
					<div class="rich-list-content">
						<h4 class="rich-list-title">Darcy Harrison</h4>
						<span class="rich-list-subtitle">Internet Marketer</span>
					</div>
					<div class="rich-list-append flex-column align-items-end">
						<span class="text-muted text-nowrap">1 day</span><span class="badge badge-success badge-pill">2</span>
					</div>
					</a><a href="#" class="rich-list-item">
					<div class="rich-list-prepend">
						<div class="avatar avatar-circle">
							<div class="avatar-display">
								<img src="https://panely-html.blueupcodes.com/assets/images/avatar/avatar-7.webp" alt="Avatar image">
							</div>
							<div class="avatar-addon avatar-addon-bottom">
								<i class="marker marker-dot text-success"></i>
							</div>
						</div>
					</div>
					<div class="rich-list-content">
						<h4 class="rich-list-title">Victor Payne</h4>
						<span class="rich-list-subtitle">Accountant</span>
					</div>
					<div class="rich-list-append flex-column align-items-end">
						<span class="text-muted text-nowrap">1 day</span><span class="badge badge-success badge-pill">5</span>
					</div>
					</a><a href="#" class="rich-list-item">
					<div class="rich-list-prepend">
						<div class="avatar avatar-circle">
							<div class="avatar-display">
								<img src="https://panely-html.blueupcodes.com/assets/images/avatar/avatar-9.webp" alt="Avatar image">
							</div>
							<div class="avatar-addon avatar-addon-bottom">
								<i class="marker marker-dot text-secondary"></i>
							</div>
						</div>
					</div>
					<div class="rich-list-content">
						<h4 class="rich-list-title">Alberta Harris</h4>
						<span class="rich-list-subtitle">UI Designer</span>
					</div>
					<div class="rich-list-append flex-column align-items-end">
						<span class="text-muted text-nowrap">2 day</span><span class="badge badge-success badge-pill">4</span>
					</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="sidemenu sidemenu-right sidemenu-wider" id="sidemenu-settings">
	<div class="sidemenu-header">
		<h3 class="sidemenu-title">Settings</h3>
		<div class="sidemenu-addon">
			<button class="btn btn-label-danger btn-icon" data-dismiss="sidemenu"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="sidemenu-body" data-simplebar="data-simplebar">
		<div class="portlet portlet-bordered mb-3">
			<div class="portlet-header portlet-header-bordered">
				<div class="portlet-icon">
					<i class="fa fa-bolt"></i>
				</div>
				<h3 class="portlet-title">Performance</h3>
			</div>
			<div class="portlet-body">
				<div class="widget4 mb-3">
					<div class="widget4-group">
						<div class="widget4-display">
							<h6 class="widget4-subtitle">CPU Load</h6>
						</div>
						<div class="widget4-addon">
							<h6 class="widget4-subtitle text-info">60%</h6>
						</div>
					</div>
					<div class="progress progress-sm">
						<div class="progress-bar bg-info" style="width: 60%"></div>
					</div>
				</div>
				<div class="widget4 mb-3">
					<div class="widget4-group">
						<div class="widget4-display">
							<h6 class="widget4-subtitle">CPU Temparature</h6>
						</div>
						<div class="widget4-addon">
							<h6 class="widget4-subtitle text-success">42°</h6>
						</div>
					</div>
					<div class="progress progress-sm">
						<div class="progress-bar bg-success" style="width: 30%"></div>
					</div>
				</div>
				<div class="widget4">
					<div class="widget4-group">
						<div class="widget4-display">
							<h6 class="widget4-subtitle">RAM Usage</h6>
						</div>
						<div class="widget4-addon">
							<h6 class="widget4-subtitle text-danger">6,532 MB</h6>
						</div>
					</div>
					<div class="progress progress-sm">
						<div class="progress-bar bg-danger" style="width: 80%"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="portlet portlet-bordered mb-3">
			<div class="portlet-header">
				<h3 class="portlet-title">Customer care</h3>
			</div>
			<div class="portlet-body">
				<div class="form-group">
					<div class="custom-control custom-control-lg custom-switch">
						<input type="checkbox" class="custom-control-input" id="generalSetting1"><label class="custom-control-label" for="generalSetting1">Enable notifications</label>
					</div>
				</div>
				<div class="form-group">
					<div class="custom-control custom-control-lg custom-switch">
						<input type="checkbox" class="custom-control-input" id="generalSetting2" checked="checked"><label class="custom-control-label" for="generalSetting2">Enable case tracking</label>
					</div>
				</div>
				<div class="form-group mb-0">
					<div class="custom-control custom-control-lg custom-switch">
						<input type="checkbox" class="custom-control-input" id="generalSetting3"><label class="custom-control-label" for="generalSetting3">Support portal</label>
					</div>
				</div>
			</div>
		</div>
		<div class="portlet portlet-bordered mb-3">
			<div class="portlet-header">
				<h3 class="portlet-title">Reports</h3>
			</div>
			<div class="portlet-body">
				<div class="form-group">
					<div class="custom-control custom-control-lg custom-switch">
						<input type="checkbox" class="custom-control-input" id="generalSetting4"><label class="custom-control-label" for="generalSetting4">Generate reports</label>
					</div>
				</div>
				<div class="form-group">
					<div class="custom-control custom-control-lg custom-switch">
						<input type="checkbox" class="custom-control-input" id="generalSetting5" checked="checked"><label class="custom-control-label" for="generalSetting5">Enable report export</label>
					</div>
				</div>
				<div class="form-group mb-0">
					<div class="custom-control custom-control-lg custom-switch">
						<input type="checkbox" class="custom-control-input" id="generalSetting6"><label class="custom-control-label" for="generalSetting6">Allow data</label>
					</div>
				</div>
			</div>
		</div>
		<div class="portlet portlet-bordered mb-0">
			<div class="portlet-header">
				<h3 class="portlet-title">Projects</h3>
			</div>
			<div class="portlet-body">
				<div class="form-group">
					<div class="custom-control custom-control-lg custom-switch">
						<input type="checkbox" class="custom-control-input" id="generalSetting7"><label class="custom-control-label" for="generalSetting7">Enable create projects</label>
					</div>
				</div>
				<div class="form-group">
					<div class="custom-control custom-control-lg custom-switch">
						<input type="checkbox" class="custom-control-input" id="generalSetting8" checked="checked"><label class="custom-control-label" for="generalSetting8">Enable custom projects</label>
					</div>
				</div>
				<div class="form-group mb-0">
					<div class="custom-control custom-control-lg custom-switch">
						<input type="checkbox" class="custom-control-input" id="generalSetting9"><label class="custom-control-label" for="generalSetting9">Enable project review</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="sidemenu sidemenu-right sidemenu-widest" id="sidemenu-dashboard">
	<div class="sidemenu-header">
		<h3 class="sidemenu-title">Dashboard</h3>
		<div class="sidemenu-addon">
			<button class="btn btn-label-danger btn-icon" data-dismiss="sidemenu"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="sidemenu-body" data-simplebar="data-simplebar">
		<div class="portlet widget19 overflow-hidden mb-3">
			<div class="portlet-header">
				<h4 class="portlet-title">Dashboard</h4>
			</div>
			<div class="portlet-body p-0">
				<div class="widget19-preview">
					<img class="img-fluid" src="https://panely-html.blueupcodes.com/assets/images/preview/dashboard1.webp">
					<div class="widget19-action">
						<a href="../../index.html" class="btn btn-pill btn-primary btn-widest mr-3">LTR (Default)</a><a href="https://panely-html.blueupcodes.com/dashboard1/rtl/index.html" class="btn btn-pill btn-flat-primary btn-widest">RTL</a>
					</div>
				</div>
			</div>
		</div>
		<div class="portlet widget19 overflow-hidden mb-3">
			<div class="portlet-header">
				<h4 class="portlet-title">Dashboard 2</h4>
			</div>
			<div class="portlet-body p-0">
				<div class="widget19-preview">
					<img class="img-fluid" src="https://panely-html.blueupcodes.com/assets/images/preview/dashboard2.webp">
					<div class="widget19-action">
						<a href="https://panely-html.blueupcodes.com/dashboard2/ltr/index.html" class="btn btn-pill btn-primary btn-widest mr-3">LTR (Default)</a><a href="https://panely-html.blueupcodes.com/dashboard2/rtl/index.html" class="btn btn-pill btn-flat-primary btn-widest">RTL</a>
					</div>
				</div>
			</div>
		</div>
		<div class="portlet widget19 overflow-hidden mb-3">
			<div class="portlet-header">
				<h4 class="portlet-title">Dashboard 3</h4>
			</div>
			<div class="portlet-body p-0">
				<div class="widget19-preview">
					<img class="img-fluid" src="https://panely-html.blueupcodes.com/assets/images/preview/dashboard3.webp">
					<div class="widget19-action">
						<a href="https://panely-html.blueupcodes.com/dashboard3/ltr/index.html" class="btn btn-pill btn-primary btn-widest mr-3">LTR (Default)</a><a href="https://panely-html.blueupcodes.com/dashboard3/rtl/index.html" class="btn btn-pill btn-flat-primary btn-widest">RTL</a>
					</div>
				</div>
			</div>
		</div>
		<div class="portlet widget19 overflow-hidden mb-3">
			<div class="portlet-header">
				<h4 class="portlet-title">Dashboard 4</h4>
			</div>
			<div class="portlet-body p-0">
				<div class="widget19-preview">
					<img class="img-fluid" src="https://panely-html.blueupcodes.com/assets/images/preview/dashboard4.webp">
					<div class="widget19-action">
						<a href="https://panely-html.blueupcodes.com/dashboard4/ltr/index.html" class="btn btn-pill btn-primary btn-widest mr-3">LTR (Default)</a><a href="https://panely-html.blueupcodes.com/dashboard4/rtl/index.html" class="btn btn-pill btn-flat-primary btn-widest">RTL</a>
					</div>
				</div>
			</div>
		</div>
		<div class="portlet widget19 overflow-hidden mb-3">
			<div class="portlet-header">
				<h4 class="portlet-title">Dashboard 5</h4>
			</div>
			<div class="portlet-body p-0">
				<div class="widget19-preview">
					<img class="img-fluid" src="https://panely-html.blueupcodes.com/assets/images/preview/dashboard5.webp">
					<div class="widget19-action">
						<a href="https://panely-html.blueupcodes.com/dashboard5/ltr/index.html" class="btn btn-pill btn-primary btn-widest mr-3">LTR (Default)</a><a href="https://panely-html.blueupcodes.com/dashboard5/rtl/index.html" class="btn btn-pill btn-flat-primary btn-widest">RTL</a>
					</div>
				</div>
			</div>
		</div>
		<div class="portlet widget19 overflow-hidden mb-3">
			<div class="portlet-header">
				<h4 class="portlet-title">Dashboard 6</h4>
			</div>
			<div class="portlet-body p-0">
				<div class="widget19-preview">
					<img class="img-fluid" src="https://panely-html.blueupcodes.com/assets/images/preview/dashboard6.webp">
					<div class="widget19-action">
						<a href="https://panely-html.blueupcodes.com/dashboard6/ltr/index.html" class="btn btn-pill btn-primary btn-widest mr-3">LTR (Default)</a><a href="https://panely-html.blueupcodes.com/dashboard6/rtl/index.html" class="btn btn-pill btn-flat-primary btn-widest">RTL</a>
					</div>
				</div>
			</div>
		</div>
		<div class="portlet widget19 overflow-hidden mb-3">
			<div class="portlet-header">
				<h4 class="portlet-title">Dashboard 7</h4>
			</div>
			<div class="portlet-body p-0">
				<div class="widget19-preview">
					<img class="img-fluid" src="https://panely-html.blueupcodes.com/assets/images/preview/dashboard7.webp">
					<div class="widget19-action">
						<a href="https://panely-html.blueupcodes.com/dashboard7/ltr/index.html" class="btn btn-pill btn-primary btn-widest mr-3">LTR (Default)</a><a href="https://panely-html.blueupcodes.com/dashboard7/rtl/index.html" class="btn btn-pill btn-flat-primary btn-widest">RTL</a>
					</div>
				</div>
			</div>
		</div>
		<div class="portlet widget19 overflow-hidden mb-3">
			<div class="portlet-header">
				<h4 class="portlet-title">Dashboard 8</h4>
			</div>
			<div class="portlet-body p-0">
				<div class="widget19-preview">
					<img class="img-fluid" src="https://panely-html.blueupcodes.com/assets/images/preview/dashboard8.webp">
					<div class="widget19-action">
						<a href="https://panely-html.blueupcodes.com/dashboard8/ltr/index.html" class="btn btn-pill btn-primary btn-widest mr-3">LTR (Default)</a><a href="https://panely-html.blueupcodes.com/dashboard8/rtl/index.html" class="btn btn-pill btn-flat-primary btn-widest">RTL</a>
					</div>
				</div>
			</div>
		</div>
		<div class="portlet widget19 overflow-hidden mb-3">
			<div class="portlet-header">
				<h4 class="portlet-title">Email</h4>
			</div>
			<div class="portlet-body p-0">
				<div class="widget19-preview">
					<img class="img-fluid" src="https://panely-html.blueupcodes.com/assets/images/preview/email.webp">
					<div class="widget19-action">
						<a href="https://panely-html.blueupcodes.com/email/ltr/index.html" class="btn btn-pill btn-primary btn-widest mr-3">LTR (Default)</a><a href="https://panely-html.blueupcodes.com/email/rtl/index.html" class="btn btn-pill btn-flat-primary btn-widest">RTL</a>
					</div>
				</div>
			</div>
		</div>
		<div class="portlet widget19 overflow-hidden mb-3">
			<div class="portlet-header">
				<h4 class="portlet-title">Criptocurrency</h4>
			</div>
			<div class="portlet-body p-0">
				<div class="widget19-preview">
					<img class="img-fluid" src="https://panely-html.blueupcodes.com/assets/images/preview/criptocurrency.webp">
					<div class="widget19-action">
						<a href="https://panely-html.blueupcodes.com/criptocurrency/ltr/index.html" class="btn btn-pill btn-primary btn-widest mr-3">LTR (Default)</a><a href="https://panely-html.blueupcodes.com/criptocurrency/rtl/index.html" class="btn btn-pill btn-flat-primary btn-widest">RTL</a>
					</div>
				</div>
			</div>
		</div>
		<div class="portlet widget19 overflow-hidden mb-0">
			<div class="portlet-header">
				<h4 class="portlet-title">Chatting</h4>
			</div>
			<div class="portlet-body p-0">
				<div class="widget19-preview">
					<img class="img-fluid" src="https://panely-html.blueupcodes.com/assets/images/preview/chatting.webp">
					<div class="widget19-action">
						<a href="https://panely-html.blueupcodes.com/chatting/ltr/index.html" class="btn btn-pill btn-primary btn-widest mr-3">LTR (Default)</a><a href="https://panely-html.blueupcodes.com/chatting/rtl/index.html" class="btn btn-pill btn-flat-primary btn-widest">RTL</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="sidemenu sidemenu-left" id="sidemenu-navigation">
	<div class="sidemenu-header">
		<h3 class="sidemenu-title">Navigation</h3>
		<div class="sidemenu-addon">
			<button class="btn btn-label-danger btn-icon" data-dismiss="sidemenu"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="sidemenu-body px-0" data-simplebar="data-simplebar">
		<div class="menu">
			<div class="menu-item">
				<a href="../../index.html" data-menu-path="/dashboard1/ltr/index.html" class="menu-item-link">
				<div class="menu-item-icon">
					<i class="fa fa-desktop"></i>
				</div>
				<span class="menu-item-text">Dashboard</span></a>
			</div>
			<div class="menu-section">
				<h2 class="menu-section-text">Application</h2>
			</div>
			<div class="menu-item">
				<a href="https://panely-html.blueupcodes.com/email/ltr/index.html" data-menu-path="/email/ltr/index.html" class="menu-item-link">
				<div class="menu-item-icon">
					<i class="fa fa-envelope"></i>
				</div>
				<span class="menu-item-text">Email</span>
				<div class="menu-item-addon">
					<span class="badge badge-label-success">new</span>
				</div>
				</a>
			</div>
			<div class="menu-item">
				<a href="https://panely-html.blueupcodes.com/chatting/ltr/index.html" data-menu-path="/chatting/ltr/index.html" class="menu-item-link">
				<div class="menu-item-icon">
					<i class="fa fa-comments"></i>
				</div>
				<span class="menu-item-text">Chatting</span></a>
			</div>
			<div class="menu-item">
				<a href="https://panely-html.blueupcodes.com/criptocurrency/ltr/index.html" data-menu-path="/criptocurrency/ltr/index.html" class="menu-item-link">
				<div class="menu-item-icon">
					<i class="fa fa-dollar-sign"></i>
				</div>
				<span class="menu-item-text">Criptocurrency</span></a>
			</div>
			<div class="menu-section">
				<h2 class="menu-section-text">Elements</h2>
			</div>
			<div class="menu-item">
				<button class="menu-item-link menu-item-toggle">
				<div class="menu-item-icon">
					<i class="fa fa-palette"></i>
				</div>
				<span class="menu-item-text">Base</span>
				<div class="menu-item-addon">
					<i class="menu-item-caret caret"></i>
				</div>
				</button>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="../../elements/base/accordion.html" data-menu-path="/dashboard1/ltr/elements/base/accordion.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Accordion</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/alert.html" data-menu-path="/dashboard1/ltr/elements/base/alert.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Alert</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/badge.html" data-menu-path="/dashboard1/ltr/elements/base/badge.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Badge</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/button.html" data-menu-path="/dashboard1/ltr/elements/base/button.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Button</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/button-group.html" data-menu-path="/dashboard1/ltr/elements/base/button-group.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Button group</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/card.html" data-menu-path="/dashboard1/ltr/elements/base/card.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Card</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/color.html" data-menu-path="/dashboard1/ltr/elements/base/color.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Color</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/dropdown.html" data-menu-path="/dashboard1/ltr/elements/base/dropdown.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Dropdown</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/grid-nav.html" data-menu-path="/dashboard1/ltr/elements/base/grid-nav.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Grid navigation</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/list-group.html" data-menu-path="/dashboard1/ltr/elements/base/list-group.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">List group</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/marker.html" data-menu-path="/dashboard1/ltr/elements/base/marker.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Marker</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/modal.html" data-menu-path="/dashboard1/ltr/elements/base/modal.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Modal</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/nav.html" data-menu-path="/dashboard1/ltr/elements/base/nav.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Navigation</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/pagination.html" data-menu-path="/dashboard1/ltr/elements/base/pagination.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Pagination</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/popover.html" data-menu-path="/dashboard1/ltr/elements/base/popover.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Popover</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/progress.html" data-menu-path="/dashboard1/ltr/elements/base/progress.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Progress</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/spinner.html" data-menu-path="/dashboard1/ltr/elements/base/spinner.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Spinner</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/tab.html" data-menu-path="/dashboard1/ltr/elements/base/tab.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Tab</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/table.html" data-menu-path="/dashboard1/ltr/elements/base/table.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Table</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/tooltip.html" data-menu-path="/dashboard1/ltr/elements/base/tooltip.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Tooltip</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/base/type.html" data-menu-path="/dashboard1/ltr/elements/base/type.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Typography</span></a>
					</div>
				</div>
			</div>
			<div class="menu-item">
				<button class="menu-item-link menu-item-toggle">
				<div class="menu-item-icon">
					<i class="fa fa-adjust"></i>
				</div>
				<span class="menu-item-text">Advanced</span>
				<div class="menu-item-addon">
					<i class="menu-item-caret caret"></i>
				</div>
				</button>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="../../elements/advanced/avatar.html" data-menu-path="/dashboard1/ltr/elements/advanced/avatar.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Avatar</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/advanced/block-ui.html" data-menu-path="/dashboard1/ltr/elements/advanced/block-ui.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Block UI</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/advanced/carousel.html" data-menu-path="/dashboard1/ltr/elements/advanced/carousel.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Carousel</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/advanced/chat.html" data-menu-path="/dashboard1/ltr/elements/advanced/chat.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Chat</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/advanced/context-menu.html" data-menu-path="/dashboard1/ltr/elements/advanced/context-menu.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Context menu</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/advanced/rich-list.html" data-menu-path="/dashboard1/ltr/elements/advanced/rich-list.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Rich list</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/advanced/sortable.html" data-menu-path="/dashboard1/ltr/elements/advanced/sortable.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Sortable</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/advanced/sweet-alert.html" data-menu-path="/dashboard1/ltr/elements/advanced/sweet-alert.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Sweet alert</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/advanced/timeline.html" data-menu-path="/dashboard1/ltr/elements/advanced/timeline.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Timeline</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/advanced/toastr.html" data-menu-path="/dashboard1/ltr/elements/advanced/toastr.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Toastr</span></a>
					</div>
					<div class="menu-item">
						<a href="../../elements/advanced/treeview.html" data-menu-path="/dashboard1/ltr/elements/advanced/treeview.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Treeview</span></a>
					</div>
				</div>
			</div>
			<div class="menu-item">
				<button class="menu-item-link menu-item-toggle">
				<div class="menu-item-icon">
					<i class="fa fa-icons"></i>
				</div>
				<span class="menu-item-text">Icons</span>
				<div class="menu-item-addon">
					<i class="menu-item-caret caret"></i>
				</div>
				</button>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="../../icons/fontawesome.html" data-menu-path="/dashboard1/ltr/icons/fontawesome.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Font Awesome</span></a>
					</div>
					<div class="menu-item">
						<a href="../../icons/feather.html" data-menu-path="/dashboard1/ltr/icons/feather.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Feather</span></a>
					</div>
				</div>
			</div>
			<div class="menu-item">
				<button class="menu-item-link menu-item-toggle">
				<div class="menu-item-icon">
					<i class="fa fa-window-restore"></i>
				</div>
				<span class="menu-item-text">Portlet</span>
				<div class="menu-item-addon">
					<i class="menu-item-caret caret"></i>
				</div>
				</button>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="../../portlet/base.html" data-menu-path="/dashboard1/ltr/portlet/base.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Base</span></a>
					</div>
					<div class="menu-item">
						<a href="../../portlet/drag.html" data-menu-path="/dashboard1/ltr/portlet/drag.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Draggable</span></a>
					</div>
					<div class="menu-item">
						<a href="../../portlet/tab.html" data-menu-path="/dashboard1/ltr/portlet/tab.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Tab</span></a>
					</div>
					<div class="menu-item">
						<a href="../../portlet/tool.html" data-menu-path="/dashboard1/ltr/portlet/tool.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Tool</span></a>
					</div>
				</div>
			</div>
			<div class="menu-item">
				<button class="menu-item-link menu-item-toggle">
				<div class="menu-item-icon">
					<i class="fa fa-shapes"></i>
				</div>
				<span class="menu-item-text">Widget</span>
				<div class="menu-item-addon">
					<i class="menu-item-caret caret"></i>
				</div>
				</button>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="../../widgets/general.html" data-menu-path="/dashboard1/ltr/widgets/general.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">General</span></a>
					</div>
					<div class="menu-item">
						<a href="../../widgets/chart.html" data-menu-path="/dashboard1/ltr/widgets/chart.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Chart</span></a>
					</div>
				</div>
			</div>
			<div class="menu-section">
				<h2 class="menu-section-text">Data</h2>
			</div>
			<div class="menu-item">
				<a href="../../chart/apex-chart.html" data-menu-path="/dashboard1/ltr/chart/apex-chart.html" class="menu-item-link">
				<div class="menu-item-icon">
					<i class="fa fa-chart-pie"></i>
				</div>
				<span class="menu-item-text">Charts</span></a>
			</div>
			<div class="menu-item">
				<button class="menu-item-link menu-item-toggle">
				<div class="menu-item-icon">
					<i class="fa fa-table"></i>
				</div>
				<span class="menu-item-text">Datatable</span>
				<div class="menu-item-addon">
					<i class="menu-item-caret caret"></i>
				</div>
				</button>
				<div class="menu-submenu">
					<div class="menu-item">
						<button class="menu-item-link menu-item-toggle"><i class="menu-item-bullet"></i><span class="menu-item-text">Basic</span>
						<div class="menu-item-addon">
							<i class="menu-item-caret caret"></i>
						</div>
						</button>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="../../datatable/basic/base.html" data-menu-path="/dashboard1/ltr/datatable/basic/base.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Base</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/basic/footer.html" data-menu-path="/dashboard1/ltr/datatable/basic/footer.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Footer</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/basic/scrollable.html" data-menu-path="/dashboard1/ltr/datatable/basic/scrollable.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Scrollable</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/basic/pagination.html" data-menu-path="/dashboard1/ltr/datatable/basic/pagination.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Pagination</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/basic/menu.html" data-menu-path="/dashboard1/ltr/datatable/basic/menu.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Length menu</span></a>
							</div>
						</div>
					</div>
					<div class="menu-item">
						<button class="menu-item-link menu-item-toggle"><i class="menu-item-bullet"></i><span class="menu-item-text">Advanced</span>
						<div class="menu-item-addon">
							<i class="menu-item-caret caret"></i>
						</div>
						</button>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="../../datatable/advanced/column-rendering.html" data-menu-path="/dashboard1/ltr/datatable/advanced/column-rendering.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Column rendering</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/advanced/column-visibility.html" data-menu-path="/dashboard1/ltr/datatable/advanced/column-visibility.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Column visibility</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/advanced/footer-callback.html" data-menu-path="/dashboard1/ltr/datatable/advanced/footer-callback.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Footer callback</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/advanced/multiple-controls.html" data-menu-path="/dashboard1/ltr/datatable/advanced/multiple-controls.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Multiple controls</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/advanced/row-callback.html" data-menu-path="/dashboard1/ltr/datatable/advanced/row-callback.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Row callback</span></a>
							</div>
						</div>
					</div>
					<div class="menu-item">
						<button class="menu-item-link menu-item-toggle"><i class="menu-item-bullet"></i><span class="menu-item-text">Source</span>
						<div class="menu-item-addon">
							<i class="menu-item-caret caret"></i>
						</div>
						</button>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="../../datatable/source/html.html" data-menu-path="/dashboard1/ltr/datatable/source/html.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">HTML</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/source/javascript.html" data-menu-path="/dashboard1/ltr/datatable/source/javascript.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Javascript</span></a>
							</div>
						</div>
					</div>
					<div class="menu-item">
						<button class="menu-item-link menu-item-toggle"><i class="menu-item-bullet"></i><span class="menu-item-text">Extension</span>
						<div class="menu-item-addon">
							<i class="menu-item-caret caret"></i>
						</div>
						</button>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="../../datatable/extension/autofill.html" data-menu-path="/dashboard1/ltr/datatable/extension/autofill.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Auto fill</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/extension/buttons.html" data-menu-path="/dashboard1/ltr/datatable/extension/buttons.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Buttons</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/extension/column-reorder.html" data-menu-path="/dashboard1/ltr/datatable/extension/column-reorder.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Column reorder</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/extension/fixed-header.html" data-menu-path="/dashboard1/ltr/datatable/extension/fixed-header.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Fixed header</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/extension/fixed-column.html" data-menu-path="/dashboard1/ltr/datatable/extension/fixed-column.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Fixed column</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/extension/key-table.html" data-menu-path="/dashboard1/ltr/datatable/extension/key-table.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Key table</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/extension/row-group.html" data-menu-path="/dashboard1/ltr/datatable/extension/row-group.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Row group</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/extension/row-reorder.html" data-menu-path="/dashboard1/ltr/datatable/extension/row-reorder.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Row reorder</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/extension/scroller.html" data-menu-path="/dashboard1/ltr/datatable/extension/scroller.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Scroller</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/extension/search-panes.html" data-menu-path="/dashboard1/ltr/datatable/extension/search-panes.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Search panes</span></a>
							</div>
							<div class="menu-item">
								<a href="../../datatable/extension/select.html" data-menu-path="/dashboard1/ltr/datatable/extension/select.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Select</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="menu-section">
				<h2 class="menu-section-text">Form</h2>
			</div>
			<div class="menu-item">
				<button class="menu-item-link menu-item-toggle">
				<div class="menu-item-icon">
					<i class="fa fa-dice"></i>
				</div>
				<span class="menu-item-text">Basic</span>
				<div class="menu-item-addon">
					<i class="menu-item-caret caret"></i>
				</div>
				</button>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="../../form/basic/base.html" data-menu-path="/dashboard1/ltr/form/basic/base.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Base</span></a>
					</div>
					<div class="menu-item">
						<a href="../../form/basic/custom.html" data-menu-path="/dashboard1/ltr/form/basic/custom.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Custom</span></a>
					</div>
				</div>
			</div>
			<div class="menu-item">
				<button class="menu-item-link menu-item-toggle">
				<div class="menu-item-icon">
					<i class="fa fa-fill-drip"></i>
				</div>
				<span class="menu-item-text">Advanced</span>
				<div class="menu-item-addon">
					<i class="menu-item-caret caret"></i>
				</div>
				</button>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="../../form/advanced/autosize.html" data-menu-path="/dashboard1/ltr/form/advanced/autosize.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Autosize</span></a>
					</div>
					<div class="menu-item">
						<a href="../../form/advanced/bs-select.html" data-menu-path="/dashboard1/ltr/form/advanced/bs-select.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Bootstrap select</span></a>
					</div>
					<div class="menu-item">
						<a href="../../form/advanced/bs-maxlength.html" data-menu-path="/dashboard1/ltr/form/advanced/bs-maxlength.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Bootstrap maxlength</span></a>
					</div>
					<div class="menu-item">
						<a href="../../form/advanced/clipboard.html" data-menu-path="/dashboard1/ltr/form/advanced/clipboard.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Clipboard</span></a>
					</div>
					<div class="menu-item">
						<a href="../../form/advanced/datepicker.html" data-menu-path="/dashboard1/ltr/form/advanced/datepicker.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Date picker</span></a>
					</div>
					<div class="menu-item">
						<a href="../../form/advanced/datetimepicker.html" data-menu-path="/dashboard1/ltr/form/advanced/datetimepicker.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Date time picker</span></a>
					</div>
					<div class="menu-item">
						<a href="../../form/advanced/daterangepicker.html" data-menu-path="/dashboard1/ltr/form/advanced/daterangepicker.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Date range picker</span></a>
					</div>
					<div class="menu-item">
						<a href="../../form/advanced/inputmask.html" data-menu-path="/dashboard1/ltr/form/advanced/inputmask.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Input mask</span></a>
					</div>
					<div class="menu-item">
						<a href="../../form/advanced/select2.html" data-menu-path="/dashboard1/ltr/form/advanced/select2.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Select2</span></a>
					</div>
					<div class="menu-item">
						<a href="../../form/advanced/slider.html" data-menu-path="/dashboard1/ltr/form/advanced/slider.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Slider</span></a>
					</div>
					<div class="menu-item">
						<a href="../../form/advanced/touchspin.html" data-menu-path="/dashboard1/ltr/form/advanced/touchspin.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Touchspin</span></a>
					</div>
					<div class="menu-item">
						<a href="../../form/advanced/typeahead.html" data-menu-path="/dashboard1/ltr/form/advanced/typeahead.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Typeahead</span></a>
					</div>
				</div>
			</div>
			<div class="menu-item">
				<button class="menu-item-link menu-item-toggle">
				<div class="menu-item-icon">
					<i class="fa fa-pencil-ruler"></i>
				</div>
				<span class="menu-item-text">Editor</span>
				<div class="menu-item-addon">
					<i class="menu-item-caret caret"></i>
				</div>
				</button>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="../../editor/basic.html" data-menu-path="/dashboard1/ltr/editor/basic.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Basic</span></a>
					</div>
					<div class="menu-item">
						<a href="../../editor/bubble.html" data-menu-path="/dashboard1/ltr/editor/bubble.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Bubble</span></a>
					</div>
					<div class="menu-item">
						<a href="../../editor/complex.html" data-menu-path="/dashboard1/ltr/editor/complex.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Complex</span></a>
					</div>
				</div>
			</div>
			<div class="menu-item">
				<a href="../../form/layout.html" data-menu-path="/dashboard1/ltr/form/layout.html" class="menu-item-link">
				<div class="menu-item-icon">
					<i class="fa fa-ruler-combined"></i>
				</div>
				<span class="menu-item-text">Layout</span></a>
			</div>
			<div class="menu-item">
				<a href="../../form/validation.html" data-menu-path="/dashboard1/ltr/form/validation.html" class="menu-item-link">
				<div class="menu-item-icon">
					<i class="fa fa-check"></i>
				</div>
				<span class="menu-item-text">Validation</span></a>
			</div>
			<div class="menu-section">
				<h2 class="menu-section-text">Pages</h2>
			</div>
			<div class="menu-item">
				<button class="menu-item-link menu-item-toggle">
				<div class="menu-item-icon">
					<i class="fa fa-unlock-alt"></i>
				</div>
				<span class="menu-item-text">Login</span>
				<div class="menu-item-addon">
					<i class="menu-item-caret caret"></i>
				</div>
				</button>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="login-1.html" data-menu-path="/dashboard1/ltr/pages/login/login-1.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Login 1</span></a>
					</div>
					<div class="menu-item">
						<a href="login-2.html" data-menu-path="/dashboard1/ltr/pages/login/login-2.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Login 2</span></a>
					</div>
				</div>
			</div>
			<div class="menu-item">
				<button class="menu-item-link menu-item-toggle">
				<div class="menu-item-icon">
					<i class="fa fa-user-plus"></i>
				</div>
				<span class="menu-item-text">Register</span>
				<div class="menu-item-addon">
					<i class="menu-item-caret caret"></i>
				</div>
				</button>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="../register/register-1.html" data-menu-path="/dashboard1/ltr/pages/register/register-1.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Register 1</span></a>
					</div>
					<div class="menu-item">
						<a href="../register/register-2.html" data-menu-path="/dashboard1/ltr/pages/register/register-2.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Register 2</span></a>
					</div>
				</div>
			</div>
			<div class="menu-item">
				<button class="menu-item-link menu-item-toggle">
				<div class="menu-item-icon">
					<i class="fa fa-unlink"></i>
				</div>
				<span class="menu-item-text">Error</span>
				<div class="menu-item-addon">
					<i class="menu-item-caret caret"></i>
				</div>
				</button>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="../error/error-1.html" data-menu-path="/dashboard1/ltr/pages/error/error-1.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Error 1</span></a>
					</div>
					<div class="menu-item">
						<a href="../error/error-2.html" data-menu-path="/dashboard1/ltr/pages/error/error-2.html" class="menu-item-link"><i class="menu-item-bullet"></i><span class="menu-item-text">Error 2</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="float-btn float-btn-right">
	<button class="btn btn-flat-primary btn-icon mb-2" id="theme-toggle" data-toggle="tooltip" data-placement="right" title="Change theme"><i class="fa fa-moon"></i></button><button class="btn btn-flat-primary btn-icon" data-toggle="sidemenu" data-target="#sidemenu-dashboard"><i class="fa fa-paper-plane"></i></button>
</div> -->
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