<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="portlet">
				<div class="portlet-header portlet-header-bordered">
					<h3 class="portlet-title">Tambah Data Penilaian</h3>
				</div>
				<div class="portlet-body">
                    <form method="POST" action="?m=prosesnilai_skp">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label font-weight-bold">Angkatan</label>
                                <div class="col-sm-10">
                                        <?php $years = range(2020, strftime("%Y", time())); ?>
                                    <select class="form-control" name="angkatan" required>
                                        <option value="">--Pilih Angkatan--</option>
                                        <?php foreach($years as $year) : ?>
                                        <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label font-weight-bold">Nama Siswa</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="id_user" required>
                                        <option value="">--Pilih Siswa--</option>
                                        <?php
                                            require_once "./../views/config.php";
                                            require_once "database.php";
                                            $db  = new database();
                                            $kon = $db->connect(); $qcek = $kon->query("select * from user WHERE status = 'ya' AND hak_akses = 'siswa' AND id_user NOT IN (SELECT id_user FROM pm_sikap)"); 
                                            while ($row = $qcek->fetch_array()) {echo"<option value='".$row['id_user']."'>".$row['nis']." |".$row['nama_lengkap']." | ".$row['angkatan']."</option>";} 
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Kedisiplinan -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Kedisiplinan</label>
                                        <div class="col-sm-6">
                                            <!-- <input type="number" class="form-control" name="nilai_kd" id="nilai_kd" required> -->
                                                <select class="form-control" name="nilai_kd" id="nilai_kd" required>
                                                    <option value="">--Pilih Nilai--</option>
                                                    <option value="3">Sangat Baik</option>
                                                    <option value="2">Baik</option>
                                                    <option value="1">Cukup</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="target_kd" oninput="setGapips()" id="target_kd" required>
                                                <option value="">--Pilih Nilai--</option>
                                                <?php
                                                    require_once "database.php";
                                                    $db  = new database();
                                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='KD'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="selisih_kd" id="selisih_kd" readonly />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nilai_bobot_kd" id="nilai_bobot_kd" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kedisiplinan -->

                            <!-- Perilaku	 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Perilaku</label>
                                        <div class="col-sm-6">
                                            <!-- <input type="number" class="form-control" name="nilai_pe" id="nilai_pe" required> -->
                                                <select class="form-control" name="nilai_pe" id="nilai_pe" required>
                                                    <option value="">--Pilih Nilai--</option>
                                                    <option value="3">Sangat Baik</option>
                                                    <option value="2">Baik</option>
                                                    <option value="1">Cukup</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="target_pe" oninput="setGapipa()" id="target_pe" required>
                                                <option value="">--Pilih Nilai--</option>
                                                <?php
                                                    require_once "database.php";
                                                    $db  = new database();
                                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='PRL'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="selisih_pe" id="selisih_pe" readonly />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nilai_bobot_pe" id="nilai_bobot_pe" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Perilaku	 -->

                            <!-- Kerajinan -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Kerajinan</label>
                                        <div class="col-sm-6">
                                            <!-- <input type="number" class="form-control" name="nilai_krj" id="nilai_krj" required> -->
                                            <select class="form-control" name="nilai_krj" id="nilai_krj" required>
                                                <option value="">--Pilih Nilai--</option>
                                                    <option value="3">Sangat Baik</option>
                                                    <option value="2">Baik</option>
                                                    <option value="1">Cukup</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="target_krj" oninput="setGappkn()" id="target_krj" required>
                                                <option value="">--Pilih Nilai--</option>
                                                <?php
                                                    require_once "database.php";
                                                    $db  = new database();
                                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='KRJ'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="selisih_krj" id="selisih_krj" readonly />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nilai_bobot_krj" id="nilai_bobot_krj" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kerajin -->

                            <!-- Perhitungan Core -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Core Factor</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nilai_cf_A5" id="nilai_cf_A5" readonly />
                                        </div>
                                    </div>
                                </div>
                                <!-- Perhitungan Core -->

                                <!-- Perhitungan Secondary -->
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Secondary Factor</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nilai_sf_A5" id="nilai_sf_A5" readonly />
                                        </div>
                                    </div>
                                </div>
                                <!-- Perhitungan Secondary -->

                                <!-- Perhitungan Total -->
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Total</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nilai_tot_A5" id="nilai_tot_A5" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Perhitungan Total -->
                        
                        <div class="card-footer text-right">
                            <button name="simpan" type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                            <button type="reset" class="btn btn-info"><i class="fa fa-sync-alt"></i> Reset</button>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
    function setGapips(){
        var n = document.getElementById("nilai_kd").value;
        var t = document.getElementById("target_kd").value;
        var s = n-t;
        if(s == 0){
            nb = 3
        }else if(s == -1){
            nb = 2
        }
        else if(s == -2){
            nb = 1
        }
        document.getElementById("selisih_kd").value = s;
        document.getElementById("nilai_bobot_kd").value = nb;
    }

    function setGapipa(){
        var n = document.getElementById("nilai_pe").value;
        var t = document.getElementById("target_pe").value;
        var s = n-t;
        if(s == 0){
            nb = 3
        }else if(s == -1){
            nb = 2
        }
        else if(s == -2){
            nb = 1
        }
        document.getElementById("selisih_pe").value = s;
        document.getElementById("nilai_bobot_pe").value = nb;
    }

    function setGappkn(){
        var n = document.getElementById("nilai_krj").value;
        var t = document.getElementById("target_krj").value;
        var s = n-t;
        if(s == 0){
            nb = 3
        }else if(s == -1){
            nb = 2
        }
        else if(s == -2){
            nb = 1
        }
        document.getElementById("selisih_krj").value = s;
        document.getElementById("nilai_bobot_krj").value = nb;
        var kedisiplinan = document.getElementById("nilai_bobot_kd").value;
        var perilaku = document.getElementById("nilai_bobot_pe").value;
        var kerajinan = document.getElementById("nilai_bobot_krj").value;


        var cf = (parseFloat(kerajinan)) / 1;
        var sf = (parseFloat(perilaku) + parseFloat(kedisiplinan)) / 2;
        var nt = (cf * 0.6) + (sf * 0.4);

        document.getElementById("nilai_cf_A5").value  = cf;
        document.getElementById("nilai_sf_A5").value  = sf;
        document.getElementById("nilai_tot_A5").value = nt;
    }

</script>