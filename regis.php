<!DOCTYPE html><html lang="en" dir="ltr">
<!-- Mirrored from panely-html.blueupcodes.com/dashboard1/ltr/pages/register/register-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jun 2021 20:14:21 GMT -->
<!-- Added by HTTrack -->
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
<title>Register</title>
</head>
<body class="theme-light preload-active" id="fullscreen">
<div class="preload">
	<div class="preload-dialog">
		<div class="spinner-border text-primary preload-spinner"></div>
	</div>
</div>
<?php 

// connect to database
include_once("views/config.php");

$errors   = array();
$success   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['Submit'])) {
    Submit();
}

// REGISTER USER
function Submit(){
    global $conn, $errors;
    global $conn, $success;
    
    // receive all input values from the form
    $nama_lengkap    =  e($_POST['nama_lengkap']);
    $username    =  e($_POST['username']);
	$angkatan    =  e($_POST['angkatan']);
	$nis    =  e($_POST['nis']);
    $password    =  e($_POST['password']);
    $hak_akses    =  e($_POST['hak_akses']);
    $status    =  e($_POST['status']);


if(empty($nama_lengkap) ||
	empty($username) || 
    empty($angkatan) || 
    empty($password)|| 
    empty($nis) || 
    empty($hak_akses) || 
    empty($status)) {
echo "<script>window.alert('Data Yang Di Input  Tidak Lengkap')
		window.location=''</script>";
	} else {	
    $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user WHERE username  = '$username'"));
if ($cek > 0){
echo "<script>window.alert('username Sudah Terdaftar')
		window.location=''</script>";
    }else{	
	$cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user WHERE nis  = '$nis'"));
if ($cek > 0){
echo "<script>window.alert('nis Anda Sudah Terdaftar')
	window.location=''</script>";
	}else{
// register user if there are no errors in the form
if (count($errors) == 0) {
if (isset($_POST['nama_lengkap'])) {
    $nama_lengkap = e($_POST['nama_lengkap']);
    $query = "INSERT INTO user (nama_lengkap, 
    username, 
    password,
	angkatan,
	nis,
    hak_akses,
    status) 
    VALUES('$nama_lengkap', 
            '$username', 
            '$password',
			'$angkatan',
			'$nis', 
            '$hak_akses',
            '$status')";
mysqli_query($conn, $query);
echo "<script>window.alert('Sukses Daftar Akun')
    window.location='./'</script>";
					}        
				}
			}
		}
	}
}

// return user array from their id
function getUserById($id){
    global $conn;

}
// LOGIN USER

// escape string
function e($val){
    global $conn;
    return mysqli_real_escape_string($conn, trim($val));
}

?>
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
										<h2>HALAMAN REGISTRASI</h2>
										<p>
											HAI SELAMAT DATANG, JIKA BELUM PUNYA AKUN SILAHKAN MENDAFTAR DENGAN BENAR.<BR>
											JIKA SUDAH PUNYA AKUN SILAHKAN LANGSUNG <B><U>LOGIN</U></B> DENGAN KLIK MENU DIBAWAH INI.
										</p>
										<a href="./" class="btn btn-outline-light btn-lg btn-widest btn-pill">Login</a>
									</div>
								</div>
								<div class="col-md-6">
									<div class="portlet-body h-100">
										<!-- <div class="d-flex justify-content-center mb-4">
											<button class="btn btn-label-primary btn-pill"><i class="fab fa-facebook mr-2"></i> Facebook</button><button class="btn btn-label-info btn-pill mx-2"><i class="fab fa-google mr-2"></i> Google</button><button class="btn btn-label-danger btn-pill"><i class="fab fa-pinterest mr-2"></i> Pinterest</button>
										</div> -->
										<form method="POST" id="register-form">
											<div class="form-group">
												<div class="float-label float-label-lg">
												<?php $years = range(2020, strftime("%Y", time())); ?>
                    <select class="form-control form-control-lg" name="angkatan" required>
                        <option value="">--Pilih Angkatan--</option>
                        <?php foreach($years as $year) : ?>
                    <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php endforeach; ?>
                    </select>                                                </div>
											</div>
											<div class="form-group">
												<div class="float-label float-label-lg">
													<input class="form-control form-control-lg" type="number" id="email" name="nis" placeholder="NIS"><label for="email">NIS</label>
                                                </div>
											</div>
                                        	<div class="form-group">
												<div class="float-label float-label-lg">
													<input class="form-control form-control-lg" type="text" id="email" name="username" placeholder="Username"><label for="email">Username</label>
                                                </div>
											</div>
											<div class="form-group">
												<div class="float-label float-label-lg">
													<input class="form-control form-control-lg" type="text" id="email" name="nama_lengkap" placeholder="Please insert yor Nama Lengkap anda"><label for="email">Nama Lengkap</label>
                                                    <input type="hidden" class="form-control" name='hak_akses' value="siswa">
                                                    <input type="hidden" class="form-control" name='status' value="no">                               
                               
                                                </div>
											</div>
											<div class="form-group">
												<div class="float-label float-label-lg">
													<input class="form-control form-control-lg" type="password" id="password" name="password" placeholder="Please provide your password"><label for="password">Password</label>
												</div>
											</div>
											
											<!-- <div class="d-flex align-items-center justify-content-between mb-4">
												<div class="form-group mb-0">
													<div class="custom-control custom-control-lg custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="agreement" name="agreement"><label class="custom-control-label" for="agreement">Accept agreement</label>
													</div>
												</div>
												<a href="#">Forgot password?</a>
											</div> -->
											<button type="submit" name="Submit" class="btn btn-label-primary btn-lg btn-block btn-pill">Register</button>
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

<div class="float-btn float-btn-right">
	<button class="btn btn-flat-primary btn-icon mb-2" id="theme-toggle" data-toggle="tooltip" data-placement="right" title="Change theme"><i class="fa fa-moon"></i></button><button class="btn btn-flat-primary btn-icon" data-toggle="sidemenu" data-target="#sidemenu-dashboard"><i class="fa fa-paper-plane"></i></button>
</div>
<script type="text/javascript" src="assets/build/scripts/mandatory.js"></script>
<script type="text/javascript" src="assets/build/scripts/dashboard1.js"></script>
<script type="text/javascript" src="assets/build/scripts/core.js"></script>
<script type="text/javascript" src="assets/build/scripts/vendor.js"></script>
<script type="text/javascript" src="assets/app/dashboard1/pages/register.js"></script>
</body>
<!-- Mirrored from panely-html.blueupcodes.com/dashboard1/ltr/pages/register/register-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jun 2021 20:14:21 GMT -->
</html>