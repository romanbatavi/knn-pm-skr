<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="portlet">
				<div class="portlet-header portlet-header-bordered">
					<h3 class="portlet-title">Tambah Nilai Atribut/Kriteria</h3>
				</div>
				<div class="portlet-body">
					<!-- <p>
						In this example you can see Datatable doing both horizontal and vertical scrolling at the same time. To enable y-scrolling or x-scrolling simply set the <code>scrollY|scrollX</code> parameter to be whatever you want the container wrapper's height or width.
					</p>
					<hr> -->
				<?php if ($_POST) include 'aksi.php' ?>
                    <form method="post" action="?m=nilai_tambah">
                        <div class="form-group">
                            <label>Atribut <span class="text-danger">*</span></label>
                            <select class="form-control" name="id_atribut">
                                <option>Pilih Nama Atribut</option>
                                <?= get_atribut_option($_POST['id_atribut']) ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Nilai <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="nama_nilai" value="<?= $_POST['nama_nilai'] ?>" />
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