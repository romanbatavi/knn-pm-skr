<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="portlet">
				<div class="portlet-header portlet-header-bordered">
					<h3 class="portlet-title">Tambah Data Kemampuan </h3>
					</div>
					<div class="portlet-body">
						<!-- <p>
                            In this example you can see Datatable doing both horizontal and vertical scrolling at the same time. To enable y-scrolling or x-scrolling simply set the <code>scrollY|scrollX</code> parameter to be whatever you want the container wrapper's height or width.
						</p>
						<hr> -->
	<form method="POST" action="?m=prosesnilai_ke">
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
                    require_once "database.php";
                    $db  = new database();
                    $kon = $db->connect(); $qcek = $kon->query("select * from user where status='ya' AND hak_akses = 'siswa' AND hak_akses = 'siswa' AND id_user NOT IN (SELECT id_user FROM pm_kemampuan)"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['id_user']."'>".$row['nis']." |".$row['nama_lengkap']." | ".$row['angkatan']."</option>";} 
                    ?>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Tanggungan Orang Tua</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="nilai_tg" id="nilai_tg" required>
								<option value="">--Pilih Nilai--</option>
								<option value="1">1 - ANAK</option>
								<option value="2">2 - ANAK</option>
								<option value="3">3 - ANAK</option>
							</select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="target_tg" oninput="setGapEp()" id="target_tg" required>
								<option value="">--Pilih Nilai--</option>
								<?php
                    require_once "database.php";
                    $db  = new database();
                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='TG'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                    ?>
							</select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="selisih_tg" id="selisih_tg" readonly />
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_bobot_tg" id="nilai_bobot_tg" readonly />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Status (Apakah Ikut Bantuan Spt: KJP, KIP,Lainnya)</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="nilai_st" id="nilai_st" required>
                                <option value="">--Pilih Nilai--</option>
								<option value="1">1 - Tidak</option>
                                <option value="2">2 - Ya</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="target_st" oninput="setGapKtj()" id="target_st" required>
                                <option value="">--Pilih Nilai--</option>
								<?php
                                    require_once "database.php";
                                    $db  = new database();
                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='ST'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                    ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="selisih_st" id="selisih_st" readonly />
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_bobot_st" id="nilai_bobot_st" readonly />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Penghasilan Orang Tua</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="nilai_phs" id="nilai_phs" required>
                                <option value="">--Pilih Nilai--</option>
								<option value="1">1 - Lebih Dari 3 Jt</option>
                                <option value="2">2 - Kurang Dari 2 Jt</option>
                                <option value="3">3 - Kurang Dari 1 Jt</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="target_phs" oninput="setGapKh()" id="target_phs" required>
                                <option value="">--Pilih Nilai--</option>
								
                                <?php
                                    require_once "database.php";
                                    $db  = new database();
                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='PHS'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                    ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="selisih_phs" id="selisih_phs" readonly />
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_bobot_phs" id="nilai_bobot_phs" readonly />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Core Factor</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_cf_A2" id="nilai_cf_A2" readonly />
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Secondary Factor</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_sf_A2" id="nilai_sf_A2" readonly />
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Total</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_tot_A2" id="nilai_tot_A2" readonly />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="card-footer text-left">
        <h6 class="m-0 font-weight-bold text-danger">1.Nilai Target Meliputi Nilai Yang sudah di Tentukan Pihak PT RAS</h6>
        <h6 class="m-0 font-weight-bold text-info">- Nilai 1 Yaitu Sangat Kurang</h6>
        <h6 class="m-0 font-weight-bold text-info">- Nilai 2 Yaitu Kurang</h6>
        <h6 class="m-0 font-weight-bold text-info">- Nilai 3 Yaitu Cukup</h6>
        <h6 class="m-0 font-weight-bold text-info">- Nilai 4 Baik</h6>
        <h6 class="m-0 font-weight-bold text-info">- Nilai 5 Sangat Baik</h6>
        </div> -->
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
    function setGapEp(){
        var n = document.getElementById("nilai_tg").value;
        var t = document.getElementById("target_tg").value;
        var s = n-t;
        if(s == 0){
            nb = 5
        }else if(s == 1){
            nb = 4.5
        }else if(s == -1){
            nb = 4
        }else if(s == 2){
            nb = 3.5
        }else if(s == -2){
            nb = 3
        }else if(s == 3){
            nb = 2.5
        }else if(s == -3){
            nb = 2
        }else if(s == 4){
            nb = 1.5
        }else if(s == -4){
            nb = 1
        }
        document.getElementById("selisih_tg").value = s;
        document.getElementById("nilai_bobot_tg").value = nb;
    }

    function setGapKtj(){
        var n = document.getElementById("nilai_st").value;
        var t = document.getElementById("target_st").value;
        var s = n-t;
        if(s == 0){
            nb = 5
        }else if(s == 1){
            nb = 4.5
        }else if(s == -1){
            nb = 4
        }else if(s == 2){
            nb = 3.5
        }else if(s == -2){
            nb = 3
        }else if(s == 3){
            nb = 2.5
        }else if(s == -3){
            nb = 2
        }else if(s == 4){
            nb = 1.5
        }else if(s == -4){
            nb = 1
        }
        document.getElementById("selisih_st").value = s;
        document.getElementById("nilai_bobot_st").value = nb;
    }

    function setGapKh(){
        var n = document.getElementById("nilai_phs").value;
        var t = document.getElementById("target_phs").value;
        var s = n-t;
        if(s == 0){
            nb = 5
        }else if(s == 1){
            nb = 4.5
        }else if(s == -1){
            nb = 4
        }else if(s == 2){
            nb = 3.5
        }else if(s == -2){
            nb = 3
        }else if(s == 3){
            nb = 2.5
        }else if(s == -3){
            nb = 2
        }else if(s == 4){
            nb = 1.5
        }else if(s == -4){
            nb = 1
        }
        document.getElementById("selisih_phs").value = s;
        document.getElementById("nilai_bobot_phs").value = nb;
        
        var tg  = document.getElementById("nilai_bobot_tg").value;
        var st = document.getElementById("nilai_bobot_st").value;
        var phs  = document.getElementById("nilai_bobot_phs").value;
        var cf  = (parseFloat(phs) + parseFloat(st)) / 2;
        var sf  = (parseFloat(tg)) / 1;
        var nt  = (cf * 0.7) + (sf * 0.3);

        document.getElementById("nilai_cf_A2").value  = cf;
        document.getElementById("nilai_sf_A2").value  = sf;
        document.getElementById("nilai_tot_A2").value = nt;
    }
</script>     