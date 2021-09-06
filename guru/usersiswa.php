<?php 
include './../views/config.php';

include_once('function/helper.php');



if(isset($_POST['b_edit'])) {
    user_siswa($koneksi, $_POST['angkatan'],
	$_POST['nama_lengkap'],
	$_POST['email'],
	$_POST['alamat'],
	$_POST['tanggal_lahir'],
	$_POST['tempat_lahir'],
	$_POST['no'],
	$_POST['username'],
	$_POST['password'], $_GET['id_user']);
	
}

error_reporting(0);
if(isset($_GET['hal'])) {
    if($_GET['hal'] == 'hapus'){
        hapus_siswa($koneksi, $_GET['id_user']);
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
								<h3 class="portlet-title">Data Siswa</h3>
								<!-- <div class="form-group">
                                <a class="btn btn-primary" href="?m=user_tambah"><span class="glyphicon glyphicon-plus"></span> Tambah user</a>
                                </div> -->
							</div>
							<div class="portlet-body">
								<!-- <p>
									In this example you can see Datatable doing both horizontal and vertical scrolling at the same time. To enable y-scrolling or x-scrolling simply set the <code>scrollY|scrollX</code> parameter to be whatever you want the container wrapper's height or width.
								</p>
								<hr> -->
								<table id="datatable-1" class="table table-bordered table-striped table-hover nowrap">
								<thead>
								<tr>
                                    <th>Angkatan</th>
                                    <th>NIS</th>
									<th>Nama Lenkap</th> 
									<th>Email</th>
									<th>Alamat</th>
									<th>Tanggal Lahir</th>
									<th>Tempat Lahir</th>
									<th>No Telpon</th>
									<th>Username</th>
									<th>Password</th>
									<th>Status</th>
                                    <th>Aksi</th>
								</tr>
								</thead>
								<?php
        						$rows = $db->get_results("SELECT * FROM user WHERE hak_akses='siswa'");
                                $no = 0;
                                foreach ($rows as $row) : ?>
								<tbody>
								<tr>
                                    <td><?= $row->nis ?></td>
                                    <td><?= $row->angkatan ?></td>
                                    <td><?= $row->nama_lengkap ?></td>
                                    <td><?= $row->email ?></td>
                                    <td><?= $row->alamat ?></td>
                                    <td><?= $row->tanggal_lahir ?></td>
                                    <td><?= $row->tempat_lahir ?></td>
                                    <td><?= $row->no ?></td>
                                    <td><?= $row->username ?></td>
                                    <td><?= $row->password ?></td>
                                    <td><?= $row->status ?></td>
                                    <td>
                                        <a class="btn btn-xs btn-warning" href="?m=usersiswa&hal=edit&id_user=<?= $row->id_user ?>"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-xs btn-danger" href="?m=usersiswa&hal=hapus&id_user=<?= $row->id_user ?>" onclick="return confirm('Hapus Data?')"><i class="fa fa-trash"></i></a>
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
                            <label for="" class="col-sm-4 col-form-label">NIS</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="" readonly value='<?=@$arr_edit['nis']?>'>
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Angkatan</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="angkatan"  value='<?=@$arr_edit['angkatan']?>'>
                            </div>
                        </div>	
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
                            <label for="" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                            <input type="date" class="form-control" name="tanggal_lahir"  value='<?=@$arr_edit['tanggal_lahir']?>'>
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="tempat_lahir"  value='<?=@$arr_edit['tempat_lahir']?>'>
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
