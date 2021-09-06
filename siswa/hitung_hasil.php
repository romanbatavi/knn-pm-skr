<?php
$dataset = get_dataset();

//echo '<pre>';
$knn = new KNN($dataset, $TARGET, $_POST['nilai'], $nilai_k);
//echo '</pre>';
?>
    
							
							
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
            <a href="#dataset" data-toggle="collapse">Dataset</a>
        </h3>
    </div>
    <div class="table-responsive collapse" id="dataset">
        <table id="datatable-1" class="table table-bordered table-striped table-hover nowrap">
            <thead>
                <tr class="nw">
                    <th>Nomor</th>
                    <?php foreach ($ATRIBUT as $key => $val) : ?>
                        <th><?= $val->nama_atribut ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>
            <?php
            foreach ($knn->dataset as $key => $val) : ?>
                <tr>
                    <td><?= $key ?></td>
                    <?php foreach ($val as $k => $v) : ?>
                        <td><?= $ATRIBUT_NILAI[$k] ? $NILAI[$v]->nama_nilai : $v ?></td>
                    <?php endforeach ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>


<div class="panel panel-primary" id="hasil">
    <div class="panel-heading">
        <h3 class="panel-title"><?= count($knn->nearest) ?> Nearest</h3>
    </div>
    <div class="table-responsive">
        <table id="datatable-1" class="table table-bordered table-striped table-hover nowrap">
            <thead>
                <tr class="nw">
                    <th>Nomor</th>
                    <?php foreach ($ATRIBUT as $key => $val) : ?>
                        <th><?= $val->nama_atribut ?></th>
                    <?php endforeach ?>
                    <th>Jarak</th>
                </tr>
            </thead>
            <?php foreach ($knn->nearest as $key) : ?>
                <tr>
                    <td><?= $key ?></td>
                    <?php foreach ($knn->kuadrat[$key] as $k => $v) : ?>
                        <td><?= round($v, 3) ?></td>
                    <?php endforeach ?>
                    <td><?= $NILAI[$knn->dataset[$key][$TARGET]]->nama_nilai  ?></td>
                    <td><?= round($knn->jarak[$key], 3) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Total</h3>
    </div>
    <div class="table-responsive">
        <table id="datatable-1" class="table table-bordered table-striped table-hover nowrap">
            <thead class="nw">
                <tr>
                    <th><?= $ATRIBUT[$TARGET]->nama_atribut ?></th>
                    <th>Total</th>
                </tr>
            </thead>
            <?php foreach ($knn->total as $key => $val) : ?>
                <tr>
                    <td><?= $NILAI[$key]->nama_nilai ?></td>
                    <td><?= $val ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>
<?php
$str = array();
foreach ($_POST['nilai'] as $key => $val) {
    $nama = ($ATRIBUT_NILAI[$key]) ? $NILAI[$val]->nama_nilai : $val;
    $str[] = '' . $ATRIBUT[$key]->nama_atribut . ': <strong>' . $nama . '</strong>';
}
?>


<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="portlet">
							<div class="portlet-header portlet-header-bordered">
								<h3 class="portlet-title">Data Lowongan</h3>
								
							</div>
							<div class="portlet-body">
                            <p>Berdasarkan perhitungan, dengan <?= implode(', ', $str) ?>, maka hasilnya Rekomendai Kerjaan Untuk Anda <button class="btn btn-indo"> (<?php echo $nama_lengkap2; ?>) Adalah </button>:  <button class="btn btn-primary"><?= $NILAI[$knn->hasil]->nama_nilai ?>.</button></p>

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
                                 $H=$NILAI[$knn->hasil]->nama_nilai;

                                $rows = $db->get_results("SELECT * FROM tbl_lowongan n INNER JOIN user a ON 
                                a.id_user=n.id_user   where n.nama_lowongan = '$H'");
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
						