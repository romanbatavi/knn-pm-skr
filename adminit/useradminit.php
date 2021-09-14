<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="portlet">
				<div class="portlet-header portlet-header-bordered">
					<h3 class="portlet-title">Data AdminIT</h3>
					<div class="form-group">
						<a class="btn btn-primary" href="?m=user_tambah"><span class="glyphicon glyphicon-plus"></span> Tambah user</a>
					</div>
				</div>
				<div class="portlet-body">
					<table id="datatable-1" class="table table-bordered table-striped table-hover nowrap">
						<thead>
							<tr>
								<th>Nama Lengkap</th>
								<th>Username</th>
								<th>Password</th>
							</tr>
						</thead>
						<?php
							$rows = $db->get_results("SELECT * FROM user WHERE hak_akses='adminit'");
							$no = 0;
							foreach ($rows as $row) : 
						?>
						<tbody>
							<tr>
								<td><?= $row->nama_lengkap ?></td>
								<td><?= $row->username ?></td>
								<td><?= $row->password ?></td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>