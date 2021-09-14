<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="portlet">
				<div class="portlet-header portlet-header-bordered">
					<h3 class="portlet-title">Data Lowongan</h3>
				</div>
				<div class="portlet-body">
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
					</table>
				</div>
			</div>
		</div>
	</div>
</div>