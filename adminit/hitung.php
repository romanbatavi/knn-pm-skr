<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="portlet">
                <div class="portlet-header portlet-header-bordered">
                    <h3 class="portlet-title">Perhitungan Klasifikasi Rekomendasi Lowongan Pekerjaan Untuk Kamu (<?php echo $nama_lengkap2; ?>) </h3>
                </div>
                <?php
$error = false;

if ($_POST) {
    $nilai_k = $_POST['nilai_k'];
    foreach ($_POST['nilai'] as $key => $val) {
        if ($val == '')
        $error = true;
    }
    if ($error) {
        print_msg('Isikan semua atribut');
    } else  if ($nilai_k <= 2) {
        print_msg('Masukkan nilai K minimal 3');
        $error = true;
    }
}

$atribut = $ATRIBUT;
unset($atribut[$TARGET]);
?>
	<div class="portlet-body">
        <p>
            Lengkapi Data Berikut Ini Untuk Mengetahui Rekomendasi Loker Untuk Anda.
        </p>
        <hr>
        <?php if ($_POST) include 'aksi.php' ?>
        <form class="form-horizontal" method="post" action="?m=hitung#hasil">
            <div class="form-group"><label class="col-sm-3 control-label">Nilai k <span class="text-danger">*</span></label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="nilai_k" readonly value="<?= set_value('nilai_k', 15) ?>" />
                <p class="help-block">Masukkan nilai k.</p>
            </div>
        </div>
        <div class="form-group"><label class="col-sm-3 control-label">Masukan kode unik anda <span class="text-danger">*</span></label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="id_user" id="id_user"  onclick="cari_knn()" readonly value="<?php echo $id_user2; ?>">
            <p class="help-block">Masukkan Kode unik anda</p>
        </div>
    </div>
    <div class="form-group"><label class="col-sm-3 control-label">Nama MU <span class="text-danger">*</span></label>
    <div class="col-sm-9">
        <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" readonly>
    </div>
</div>
<?php
            foreach ($atribut as $key => $val) : ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?= $val->nama_atribut ?> <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <?php if ($ATRIBUT_NILAI[$key]) : ?>
                            <select class="form-control" name="nilai[<?= $key ?>]">
                                <option value="">&nbsp;</option>
                                <?= get_nilai_option($key, $_POST['nilai'][$key]) ?>
                            </select>
                            <?php else : ?>
                                <input class="form-control" type="number" id="<?= $val->id_atribut ?>" min="<?= $val->min ?>" max="<?= $val->max ?>" name="nilai[<?= $key ?>]" value="<?= $_POST['nilai'][$key] ?>" />
                                <?php endif ?>
                                <?php if ($val->keterangan) : ?>
                                    <p class="help-block"><?= $val->keterangan ?></p>
                                    <?php endif ?>
                                </div>
                            </div>
                            <?php endforeach ?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-9">
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-signal"></span> Hitung</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="knn.js"></script>
        <?php
if ($_POST && !$error) include 'hitung_hasil.php';
?>
</div>
