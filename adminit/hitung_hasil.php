<?php
$dataset = get_dataset();
//echo '<pre>';
$knn = new KNN($dataset, $TARGET, $_POST['nilai'], $nilai_k);
//echo '</pre>';
?>

<!-- Dataset -->
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

<!-- Dataset Nilai -->
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
            <a href="#dataset_nilai" data-toggle="collapse">Dataset Nilai</a>
        </h3>
    </div>
    <div class="table-responsive collapse" id="dataset_nilai">
        <table id="datatable-1-2" class="table table-bordered table-striped table-hover nowrap">
            <thead>
                <tr class="nw">
                    <th>Nomor</th>
                    <?php foreach ($ATRIBUT as $key => $val) : ?>
                    <th><?= $val->nama_atribut ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>
                    <?php
                    foreach ($knn->dataset_nilai as $key => $val) : ?>
                    <tr>
                    <td><?= $key ?></td>
                    <?php foreach ($val as $k => $v) : ?>
                    <td><?= $k == $TARGET ? $NILAI[$v]->nama_nilai : $v ?></td>
                    <?php endforeach ?>
                    </tr>
                    <?php endforeach; ?>
        </table>
    </div>
</div>

<!-- Nearest -->
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
<p>Berdasarkan perhitungan, dengan <?= implode(', ', $str) ?>, maka hasilnya: <strong><?= $NILAI[$knn->hasil]->nama_nilai ?></strong>.</p>