<?php 
include_once("function/koneksi.php");
include_once('function/helper.php');

if(isset($_POST['b_edit'])) {
    user_pt($koneksi, $_POST['nama_lengkap'],
	$_POST['email'],
	$_POST['alamat'],
	$_POST['no'],
	$_POST['username'],
	$_POST['password'], $_GET['id_user']);
}

error_reporting(0);
if(isset($_GET['hal'])) {
    if($_GET['hal'] == 'hapus'){
        hapus_pt($koneksi, $_GET['id_user']);
    }
if($_GET['hal'] == 'edit'){
    $_SESSION['edit'] =  $_GET['id_user'];
    $id_user = $_SESSION['edit'];
    $obj_edit = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id_user' ");
    $arr_edit = mysqli_fetch_array($obj_edit);
    ?>
    <script> var edit = 1;</script>
    <?php
}
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="portlet">
                <div class="portlet-header portlet-header-bordered">
                    <h3 class="portlet-title">Data Perusahaan</h3>
                    <div class="form-group">
                        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">Tambah Perusahaan</button>
                    </div>
                </div>
                <div class="portlet-body">
                    <table id="datatable-1" class="table table-bordered table-striped table-hover nowrap">
                        <thead>
                            <tr>
                                <th>Nama PT</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>No Telpon</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php
        					$rows = $db->get_results("SELECT * FROM user WHERE hak_akses='pt'");
                            $no = 0;
                            foreach ($rows as $row) : 
                        ?>
						<tbody>
                            <tr>
                                <td><?= $row->nama_lengkap ?></td>
                                <td><?= $row->email ?></td>
                                <td><?= $row->username ?></td>
                                <td><?= $row->password ?></td>
                                <td><?= $row->no ?></td>
                                <td><?= $row->alamat ?></td>
                                <td>
                                    <a class="btn btn-xs btn-warning" href="?m=userpt&hal=edit&id_user=<?= $row->id_user ?>"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-xs btn-danger" href="?m=userpt&hal=hapus&id_user=<?= $row->id_user ?>" onclick="return confirm('Hapus Data?')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
// connect to database
include_once("./../views/config.php");
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
    $email    =  e($_POST['email']);
	$username    =  e($_POST['username']);
    $password    =  e($_POST['password']);
    $no    =  e($_POST['no']);
    $alamat    =  e($_POST['alamat']);
	$hak_akses    =  e($_POST['hak_akses']);

if(empty($nama_lengkap) ||
    empty($email) ||
    empty($username) ||
    empty($password) ||
    empty($no) ||
    empty($alamat) ||
    empty($hak_akses)) {
				
    echo '<script>
        swal({
        title: "Maaf!",
        text: "Data Yang Di Input  Tidak Lengkap",
        icon: "error",
        button: "oke!",
        }).then(function() {
        window.location = "";
        });
        </script>';
    } else {	

    // register user if there are no errors in the form
    if (count($errors) == 0) {
    if (isset($_POST['nama_lengkap'])) {
        $loans = e($_POST['nama_lengkap']);
        $query = "INSERT INTO user (nama_lengkap, 
        email,
		username,
		password,
		no,
		alamat,
		hak_akses) 
        VALUES('$nama_lengkap', 
        '$email', 
        '$username', 
        '$password', 
        '$no', 
        '$alamat',
		'$hak_akses')";
    mysqli_query($conn, $query);
    echo '<script>
        swal({
        title: "Good Job!",
        text: " ",
        icon: "success",
        button: "Done!",
        }).then(function() {
        window.location = "index.php?m=userpt";
        });
        </script>';
            }
        }
    }
}

function getUserById($id){
    global $conn;
    }
// LOGIN USER
function e($val){
    global $conn;
    return mysqli_real_escape_string($conn, trim($val));
    }
?>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-user-plus"></i> Tambah PT Akses</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
				<div class="widget widget-table-two">
                
                </div>
                <div class="modal-body">
                    <form method="post" action="">
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama_lengkap">
							<input type="hidden" class="form-control" name="hak_akses" value="pt">

                            </div>
                        </div>	
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                            <input type="email" class="form-control" name="email">
                            </div>
                        </div>	
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="alamat">
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">No Telpon</label>
                            <div class="col-sm-8">
                            <input type="number" class="form-control" name="no">
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Username</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="username">
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                            <input type="password" class="form-control" name="password">
                            </div>
                        </div>
						<div class="modal-footer">
                      		<button type="submit" name="Submit" value="add" class="btn bg-info text-white"> <i class="fas fa-save"></i> Simpan</button>
						</div>
				</form>
                </div>
               
                
            </div>
        </div>
    </div>
<!-- Modal Input Kriteria -->


			<!-- Modal Edit Data Kriteria -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-user-plus"></i> Edit Akun (<?=@$arr_edit['nama_lengkap']?>)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="widget widget-table-two">
                
                </div>
                <div class="modal-body">
                    <form method="post" action="">
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama_lengkap"  value='<?=@$arr_edit['nama_lengkap']?>'>
                            </div>
                        </div>	
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                            <input type="email" class="form-control" name="email"  value='<?=@$arr_edit['email']?>'>
                            </div>
                        </div>	
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="alamat"  value='<?=@$arr_edit['alamat']?>'>
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">No Telpon</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="no"  value='<?=@$arr_edit['no']?>'>
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Username</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="username"  value='<?=@$arr_edit['username']?>'>
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                            <input type="password" class="form-control" name="password"  value='<?=@$arr_edit['password']?>'>
                            </div>
                        </div>
                        
                </div>
                <div class="modal-footer">
                    <button type="submit" name="b_edit" class="btn bg-warning text-white"> <i class="fas fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Modal Edit Kriteria -->  
<script>
if (edit) {
    $(document).ready(function(){
        $('#exampleModal2').modal();
    });
}
</script>