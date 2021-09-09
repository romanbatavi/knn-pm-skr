<?php
$row = $db->get_row("SELECT * FROM tb_atribut WHERE id_atribut='$_GET[ID]'");
?>
<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="portlet">
							<div class="portlet-header portlet-header-bordered">
								<h3 class="portlet-title">Ubah Atribut (<?= $row->nama_atribut ?>)</h3>
							</div>
							<div class="portlet-body">
								<!-- <p>
									In this example you can see Datatable doing both horizontal and vertical scrolling at the same time. To enable y-scrolling or x-scrolling simply set the <code>scrollY|scrollX</code> parameter to be whatever you want the container wrapper's height or width.
								</p>
								<hr> -->
								<?php if ($_POST) include 'aksi.php' ?>
                                <form method="post" action="?m=atribut_ubah&ID=<?= $row->id_atribut ?>">
            <div class="form-group">
                <label>Id Atribut <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="id_atribut" readonly="readonly" value="<?= $row->id_atribut ?>" />
            </div>
            <div class="form-group">
                <label>Nama Atribut <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_atribut" value="<?= $row->nama_atribut ?>" />
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input class="form-control" type="text" name="keterangan" value="<?= set_value('keterangan', $row->keterangan) ?>" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <a class="btn btn-danger" href="?m=atribut"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
        </form>
		</div>
		</div>
		</div>
		</div>
</div>
