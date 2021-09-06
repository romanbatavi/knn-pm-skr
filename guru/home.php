<?php 
include './../views/config.php';

include_once('function/helper.php');

if(isset($_POST['b_edit'])) {
    user_peserta_status($koneksi, $_POST['status'], $_GET['id_user']);
}

error_reporting(0);
if($_GET['hal'] == 'edit'){
    $_SESSION['edit'] =  $_GET['id_user'];
    $id_user = $_SESSION['edit'];
    $obj_edit = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id_user' ");
    $arr_edit = mysqli_fetch_array($obj_edit);
    ?>
    <script> var edit = 1;</script>
    <?php
}
?>

<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="portlet">
							<div class="widget10 widget10-vertical-md">
								<div class="widget10-item">
									<div class="widget10-content">
										<h2 class="widget10-title">$27,639</h2>
										<span class="widget10-subtitle">Total revenue</span>
									</div>
									<div class="widget10-addon">
										<div class="avatar avatar-label-info avatar-circle widget8-avatar m-0">
											<div class="avatar-display">
												<i class="fa fa-dollar-sign"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="widget10-item">
									<div class="widget10-content">
										<h2 class="widget10-title">87,123</h2>
										<span class="widget10-subtitle">Order received</span>
									</div>
									<div class="widget10-addon">
										<div class="avatar avatar-label-primary avatar-circle widget8-avatar m-0">
											<div class="avatar-display">
												<i class="fa fa-dolly-flatbed"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="widget10-item">
									<div class="widget10-content">
										<h2 class="widget10-title">237</h2>
										<span class="widget10-subtitle">New users</span>
									</div>
									<div class="widget10-addon">
										<div class="avatar avatar-label-success avatar-circle widget8-avatar m-0">
											<div class="avatar-display">
												<i class="fa fa-users"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="widget10-item">
									<div class="widget10-content">
										<h2 class="widget10-title">5,726</h2>
										<span class="widget10-subtitle">Unique visits</span>
									</div>
									<div class="widget10-addon">
										<div class="avatar avatar-label-danger avatar-circle widget8-avatar m-0">
											<div class="avatar-display">
												<i class="fa fa-link"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row portlet-row-fill-xl">
					<div class="col-xl-8">
						<div class="row portlet-row-fill-md">
							<div class="col-md-6">
								<div class="portlet">
									<div class="portlet-header">
										<div class="portlet-icon">
											<i class="fa fa-bell"></i>
										</div>
										<h3 class="portlet-title">Notification</h3>
										<div class="portlet-addon">
											<div class="dropdown">
												<!-- <button class="btn btn-label-primary dropdown-toggle" data-toggle="dropdown">All</button> -->
												<!-- <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
													<a class="dropdown-item" href="#"><span class="badge badge-label-primary">Personal</span></a><a class="dropdown-item" href="#"><span class="badge badge-label-info">Work</span></a><a class="dropdown-item" href="#"><span class="badge badge-label-success">Important</span></a><a class="dropdown-item" href="#"><span class="badge badge-label-danger">Company</span></a>
												</div> -->
											</div>
										</div>
									</div>
									<div class="portlet-body">
										<div class="rich-list rich-list-bordered rich-list-action">
										<?php
											include './../views/config.php';
											//fetching data in descending order (lastest entry first)
											$result = mysqli_query($mysqli, "SELECT * FROM user WHERE hak_akses='siswa' AND status='no' ");
											$no=1;
											?>
										<?php
											while($res = mysqli_fetch_array($result)) {	
									
									if ($res['status'] == 'no') {
										$label = "Inactive";
									} 
									
									?>
											<div class="rich-list-item">
												<div class="rich-list-prepend">
													<div class="avatar avatar-label-info">
														<div class="avatar-display">
														<img src="https://i.ibb.co/1rgsP47/download.png" alt="Avatar image">
														</div>
													</div>
												</div>
												<div class="rich-list-content">
													<h4 class="rich-list-title"><?php echo $res['nama_lengkap']?></h4>
													<span class="rich-list-subtitle">Status = <?= $label ?> </span>
												</div>
												<div class="rich-list-append">
													<div class="dropdown">
														<button class="btn btn-text-secondary btn-icon" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></button>
														<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
															<a class="dropdown-item" href="index.php?hal=edit&id_user=<?php echo $res['id_user']?>">
															<div class="dropdown-icon">
																<i class="fa fa-check"></i>
															</div>
															<span class="dropdown-content">Aktifasi AKUN</span></a>
														</div>
													</div>
												</div>
											</div>
									<?php } ?>
										</div>
									</div>
								</div>
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
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-user-plus"></i> Aktifasi Akun Untuk Pendaftaran Beasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="widget widget-table-two">
                
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        
                        <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Pilih Status (<?=@$arr_edit['nama_lengkap']?>) Apakah DiTerima/Tidak</label>
                            <div class="col-sm-8">
                                <select class="custom-select" name="status">
                                    <option value="<?=@$arr_edit['status']?>">Pilih Aktifasi</option>
                                    <option value="ya">Terima</option>
                                    <option value="no">Tolak</option>
                                </select>
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