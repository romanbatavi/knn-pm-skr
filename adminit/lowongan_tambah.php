<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="portlet">
				<div class="portlet-header portlet-header-bordered">
					<h3 class="portlet-title">Tambah Lowongan</h3>
				</div>
				
                <div class="portlet-body">
                    <?php if ($_POST) include 'aksi.php' ?>
                    <form method="post" action="?m=lowongan_tambah">
                        <div class="form-group">
                            <label>Nama PT <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="id_user" value="<?= $id_user2 ?>" />
                        </div>
                        <div class="form-group">
                            <label>Nama Lowongan <span class="text-danger">*</span></label>
                            <select class="form-control" name="nama_lowongan">
                                <option>Pilih Nama Lowongan</option>
                                <?php
                                    require_once "database.php";
                                    $db  = new database();
                                    $kon = $db->connect(); $qcek = $kon->query("select * from tb_nilai where id_atribut='A12'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['nama_nilai']."'>".$row['nama_nilai']."</option>";} 
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat Lowongan <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="alamat_lowongan" value="<?= $_POST['alamat_lowongan'] ?>" />
                        </div>
                        <div class="form-group">
                            <label>Email Lowongan <span class="text-danger">*</span></label>
                            <input class="form-control" type="email" name="email_lowongan" value="<?= $_POST['email_lowongan'] ?>" />
                        </div>
                        <div class="form-group">
                            <label>No Lowongan <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="no_lowongan" value="<?= $_POST['no_lowongan'] ?>" />
                        </div>
                        <div class="form-group">
                            <label>Keterangan Lowongan <span class="text-danger">*</span></label>
                            <textarea class="form-control" type="text" name="ket_lowongan" value="<?= $_POST['ket_lowongan'] ?>" /> </textarea>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Buat <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" readonly name="tanggal_buat" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(' Y-m-d : H:i:s');?>" />
                        </div>
                        <div class="form-group">
                            <label>Expired Lowongan <span class="text-danger">*</span></label>
                            <input class="form-control" type="date" name="expired" value="<?= $_POST['expired'] ?>" />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                            <a class="btn btn-danger" href="?m=nilai"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>