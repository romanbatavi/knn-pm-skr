<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="portlet">
                <div class="portlet-header portlet-header-bordered">
                    <h3 class="portlet-title">Master Penilaian</h3>
                    <div class="form-group">
                        <form method="post" enctype="multipart/form-data" action="import_data_latih.php">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="file_data_latih" type="file" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <input name="submit" type="submit" value="Upload Data" class="btn btn-success">
                            </div>
                        </form>  
                    </div>
                </div>

                <div class="portlet-body">
                    <table id="datatable-1" class="table table-bordered table-striped table-hover nowrap">
                        <thead>
                            <tr>
                                <th>ID user</th>
                                <th>IPS</th>
                                <th>IPA</th>
                                <th>PKN</th>
                                <th>BIND</th>
                                <th>MTK</th>
                                <th>BING</th>
                                <th>agama</th>
                            </tr>
                        </thead>
                            <?php
                                include_once("function/koneksi.php");
                                $rows = $db->get_results("SELECT * FROM master_nilai ");
                                foreach ($rows as $row) : 
                            ?>
                        <tbody>
                            <tr>
                                <td><?= $row->id_user ?></td>
                                <td><?= $row->ips ?></td>
                                <td><?= $row->ipa ?></td>
                                <td><?= $row->pkn ?></td>
                                <td><?= $row->bindo ?></td>
                                <td><?= $row->mtk ?></td>
                                <td><?= $row->bing ?></td>
                                <td><?= $row->agama ?></td>
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
        text: "Data Yang Di Input Tidak Lengkap",
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
    VALUES(
    '$nama_lengkap', 
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

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-user-plus"></i>Tambah PT Akses</h5>
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