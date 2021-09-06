
<div class="container-fluid">
<div class="row">
					<div class="col-12">
						<div class="portlet">
							<div class="portlet-header portlet-header-bordered">
								<h3 class="portlet-title">Data Lowongan</h3>
								
							</div>
							<div class="portlet-body">
                            <p><marquee>Lowongan Kerja Tersedia :</marquee></p>

								<hr>
								<table id="datatable-1" class="table table-bordered table-striped table-hover nowrap">
								<thead>
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
								</tr>
								</thead>
                              

								<tbody>
                                <?php
                                $rows = $db->get_results("SELECT * FROM tbl_lowongan n INNER JOIN user a ON 
                                a.id_user=n.id_user   ");
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
                                    
                					
								</tr>
                                <?php endforeach ?>	
								</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>