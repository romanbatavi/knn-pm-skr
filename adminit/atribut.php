<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="portlet">
				<div class="portlet-header portlet-header-bordered">
						<h3 class="portlet-title">Data Atribut/Kriteria KNN</h3>
						<div class="form-group">
							<a class="btn btn-primary" href="?m=atribut_tambah"><span class="glyphicon glyphicon-plus"></span> Tambah Atribut</a>
						</div>
					</div>
					<div class="portlet-body">
						<!-- <p>
							In this example you can see Datatable doing both horizontal and vertical scrolling at the same time. To enable y-scrolling or x-scrolling simply set the <code>scrollY|scrollX</code> parameter to be whatever you want the container wrapper's height or width.
						</p>
						<hr> -->
						<table id="datatable-1" class="table table-bordered table-striped table-hover nowrap">
							<thead>
								<tr>
									<th>Kode</th>
									<th>Nama Atribut</th>
									<th>Keterangan</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<?php
					$q = esc_field($_GET['q']);
					$rows = $db->get_results("SELECT * FROM tb_atribut WHERE nama_atribut LIKE '%$q%' ORDER BY id_atribut");
					$no = 0;
					foreach ($rows as $row) : ?>
					<tbody>
						<tr>
							<td><?= $row->id_atribut 
				?>
				</td>
                <td><?= $row->nama_atribut ?></td>
                <td><?= $row->keterangan ?></td>
                <td>
					<a class="btn btn-xs btn-warning" href="?m=atribut_ubah&ID=<?= $row->id_atribut ?>"><i class="fa fa-edit"></i></a>
					<a class="btn btn-xs btn-danger" href="aksi.php?act=atribut_hapus&ID=<?= $row->id_atribut ?>" onclick="return confirm('Hapus Data?')"><i class="fa fa-trash"></i></a>
                </td>
			</tr>
			<?php endforeach ?>	
		</tbody>
		<tfoot>
			<tr>
				<th>Kode</th>
				<th>Nama Atribut</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</tfoot>
	</table>	
</div>
</div>
</div>
</div>
</div>