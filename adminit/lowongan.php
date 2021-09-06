<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="portlet">
				<div class="portlet-header portlet-header-bordered">
					<h3 class="portlet-title">Data Lowongan</h3>
					<!-- <div class="form-group">
						<a class="btn btn-primary" href="?m=lowongan_tambah"><span class="glyphicon glyphicon-plus"></span> Tambah Lowongan</a>
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
                  <th>No</th>
                  <th>Nama PT</th>
                  <th>Nama Lowongan</th>
                  <th>Alamat Lowongan</th>
                  <th>Email Lowongan</th>
                  <th>No Telp Lowongan</th>
                  <th>Ket Lowongan</th>
                  <th>Tanggal Buat</th>
                  <th>Expired</th>
                  <th>Aksi</th>
								</tr>
								</thead>

								<tbody>
                  <?php
                  $q = esc_field($_GET['q']);
                  $rows = $db->get_results("SELECT * FROM tbl_lowongan n INNER JOIN user a ON a.id_user=n.id_user ");
                  $no = 0;

                  foreach ($rows as $row) : 
                  ?>
								<tr>
                  <td><?= ++$no ?></td>
                  <td><?= $row->nama_lengkap ?></td>
										<td><?= $row->nama_lowongan ?></td>
										<td><?= $row->alamat_lowongan ?></td>
                    <td><?= $row->email_lowongan ?></td>
										<td><?= $row->no_lowongan ?></td>
										<td><?= $row->ket_lowongan ?></td>
										<td><?= $row->tanggal_buat ?></td>
										<td><?= $row->expired ?></td>
                  <td>
										<a class="btn btn-xs btn-danger" href="aksi.php?act=lowongan_hapus&ID=<?= $row->id_lowongan ?>" onclick="return confirm('Hapus Data?')"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
                <?php endforeach ?>
								
								</tbody>
								<!-- <tfoot>
								<tr>
                <th>NO</th>
									<th>Nama PT</th>
									<th>Nama Lowongan</th>
									<th>Alamat Lowongan</th>
									<th>Email Lowongan</th>
									<th>No Telp Lowongan</th>
									<th>Ket Lowongan</th>
									<th>Tanggal Buat</th>
									<th>Expired</th>
									<th>Aksi</th>
								</tr>
								</tfoot> -->
					</table>
				</div>
			</div>
		</div>
	</div>
</div>