


<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="portlet">
							<div class="portlet-header portlet-header-bordered">
								<h3 class="portlet-title">Master Nilai KNN</h3>
								<div class="form-group">
									<button class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">Tambah Nilai KNN</button>
                                    <!-- <form method="post" enctype="multipart/form-data" action="import_data_latih.php">
                    <div class="form-group">
                        <div class="input-group">
                            <input name="file_data_latih" type="file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="submit" type="submit" value="Upload Data" class="btn btn-success">
                        </div>
            </form>   -->
            					</div>
							</div>
							<div class="portlet-body">
								<table id="datatable-1" class="table table-bordered table-striped table-hover nowrap">
								<thead>
								<tr>
                					<th>ID user</th>
									<th>Berkomunikasi Dengan Baik</th>
									<th>Mampu Bekerja Dengan Target</th>
									<th>Dapat Bekerja Sama Dengan Team</th>
                					<th>Teratur, Teliti, & Terorganisi</th>
                                    <th>Action</th>

                					<!-- <th>MTK</th>
                                    <th>BING</th>
                                    <th>agama</th> -->
								</tr>
								</thead>
								<?php
                                include_once("function/koneksi.php");
        						$rows = $db->get_results("SELECT * FROM master_knn ");
        						foreach ($rows as $row) : ?>
								<tbody>
								<tr>
                					<td><?= $row->id_user ?></td>
									<td><?= $row->A01 ?></td>
									<td><?= $row->A03 ?></td>
                					<td><?= $row->A06 ?></td>
                					<td><?= $row->A08 ?></td>
                					
                					<td>
										<!-- <a class="btn btn-xs btn-warning" href="?m=nilaiknn&hal=edit&id_user=<?= $row->id_master_knn ?>"><i class="fa fa-edit"></i></a> -->
                    					<a class="btn btn-xs btn-danger" href="?m=nilaiknn&hal=hapus&id_user=<?= $row->id_master_knn ?>" onclick="return confirm('Hapus Data?')"><i class="fa fa-trash"></i></a>
                					</td>
								</tr>
								<?php endforeach ?>
								
								</tbody>
								<?php 
                                include_once("./../views/config.php");

                                $pinjaman = mysqli_query($koneksi, "SELECT sum(A01) as total,sum(A03) as total1,sum(A06) as total2,sum(A08) as total3 FROM master_knn WHERE id_user='130' ");
                                $p2 = mysqli_fetch_assoc($pinjaman); 
                                
                                ?>
                                
                               <?php echo addslashes($p2['total']);?>
                               <?php echo addslashes($p2['total1']);?>
                               <?php echo addslashes($p2['total2']);?>
                               <?php echo addslashes($p2['total3']);?>
                               <?php
//including the database koneksi file
//fetching data in descending order (lastest entry first)
$jmlcicilan = mysqli_query($mysqli, "select * from master_knn where id_user='130' ");
$jmlcicilan = mysqli_num_rows($jmlcicilan);

$jmlcicilan1 = $p2['total']/$jmlcicilan;
$jmlcicilan2 = $p2['total1']/$jmlcicilan;
$jmlcicilan3 = $p2['total2']/$jmlcicilan;
$jmlcicilan4 = $p2['total3']/$jmlcicilan;

?>
<br>
                               <?php echo addslashes($jmlcicilan1);?>
                               <?php echo addslashes($jmlcicilan2);?>
                               <?php echo addslashes($jmlcicilan3);?>
                               <?php echo addslashes($jmlcicilan4);?>
                               
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
    $id_user    =  e($_POST['id_user']);
    $A01    =  e($_POST['A01']);
	$A03    =  e($_POST['A03']);
    $A06    =  e($_POST['A06']);
    $A08    =  e($_POST['A08']);
   


    if(empty($id_user) ||
     empty($A01) ||
     empty($A03) ||
     empty($A06) ||
     empty($A08)) {
				
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

        if (isset($_POST['id_user'])) {
            $id_user = e($_POST['id_user']);
            $query = "INSERT INTO master_knn (id_user, 
            A01,
			A03,
			A06,
			A08) 
                      VALUES('$id_user', 
                      '$A01', 
                      '$A03', 
                      '$A06', 
                      '$A08')";
            mysqli_query($conn, $query);
            echo '<script>
  swal({
   title: "Good Job!",
   text: " Berhasil di input",
   icon: "success",
   button: "Done!",
 }).then(function() {
   window.location = "index.php?m=nilaiknn";
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
<!-- Modal Input Data Kriteria -->
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
                            <select class="form-control" name="id_user" id="id_user"  onchange="cari_absen()" required>
                        <option value="">--Pilih Siswa--</option>
                        <?php
                            require_once "./../views/config.php";
                            require_once "database.php";
                            $db  = new database();
                            $kon = $db->connect(); $qcek = $kon->query("select * from user WHERE status = 'ya' AND hak_akses = 'siswa'"); 
							while ($row = $qcek->fetch_array()) {echo"<option value='".$row['id_user']."'>".$row['nis']." |".$row['nama_lengkap']." | ".$row['id_user']."</option>";} 
                            ?>
                    </select>

                            </div>
                        </div>	
                      
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Berkomunikasi Dengan Baik</label>
                            <div class="col-sm-8">
                            <input type="number" class="form-control" min="1" max="3" name="A01" required>
                            <label> 1 = Tidak, 2 = Cukup Baik, 3 = Sangat Baik</label>
                            </div>
                        </div>	
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Mampu Bekerja Dengan Target</label>
                            <div class="col-sm-8">
                            <input type="number" class="form-control" name="A03" min="1" max="2" required>
                            <label> 1 = Tidak, 2 = Ya</label>

                            </div>
                        </div>
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Dapat Bekerja Sama Dengan Team</label>
                            <div class="col-sm-8">
                            <input type="number" class="form-control" name="A06" min="1" max="3" required>
                            <label> 1 = Tidak, 2 = Cukup Baik, 3 = Sangat Baik</label>

                            </div>
                        </div>
						<div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Teratur, Teliti, & Terorganisi</label>
                            <div class="col-sm-8">
                            <input type="number" class="form-control" name="A08" min="1" max="3" required>
                            <label> 1 = Tidak, 2 = Cukup Baik, 3 = Sangat Baik</label>
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
