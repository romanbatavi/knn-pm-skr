<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="portlet">
							<div class="portlet-header portlet-header-bordered">
								<h3 class="portlet-title">DataSet</h3>
								<div class="form-group">
                <a class="btn btn-primary" href="?m=dataset_tambah"><span class="glyphicon glyphicon-plus"></span> Tambah Dataset</a>
            </div>
                <br>
                <br>
                <br>
                <div class="form-group">
                  <a class="btn btn-info" href="?m=dataset_import"><span class="glyphicon glyphicon-import"></span> Import</a>
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
                                    <th>Nomor</th>
                                    <th>Keterangan</th>
                                    <?php foreach ($ATRIBUT as $key => $val) : ?>
                                    <th><?= $val->nama_atribut ?></th>
                                    <?php endforeach ?>
              <th>Aksi</th>
								</tr>
								</thead>
								<?php
                                $q = esc_field($_GET['q']);
                                $rows = $db->get_results("SELECT * FROM tb_dataset WHERE ket_dataset LIKE '%$q%' GROUP BY nomor");
                                $dataset = get_dataset();
                                foreach ($rows as $row) : ?>
								<tbody>
								<tr>
                                    <td><?= $row->nomor ?></td>
                                    <td><?= $row->ket_dataset ?></td>
                                    <?php foreach ($dataset[$row->nomor] as $k => $v) : ?>
                                    <td><?= $ATRIBUT_NILAI[$k] ? $NILAI[$v]->nama_nilai : $v ?></td>
                                    <?php endforeach ?>
              <td>
              <a class="btn btn-xs btn-warning" href="?m=dataset_ubah&ID=<?= $row->nomor ?>"><i class="fa fa-edit"></i></a>
              <a class="btn btn-xs btn-danger" href="aksi.php?act=dataset_hapus&ID=<?= $row->nomor ?>" onclick="return confirm('Hapus Data?')"><i class="fa fa-trash"></i></a>
              </td>
								</tr>
								<?php endforeach ?>
								
								</tbody>
								<tfoot>
								<tr>
                <th>Nomor</th>
                <th>Keterangan</th>
                <?php foreach ($ATRIBUT as $key => $val) : ?>
                <th><?= $val->nama_atribut ?></th>
                <?php endforeach ?>
                <th>Aksi</th>
								</tr>
								</tfoot>
						</table>
				</div>
			</div>
		</div>
	</div>
</div>