<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="portlet">
				<div class="portlet-header portlet-header-bordered">
					<h3 class="portlet-title">Tambah Data kegiatan</h3>
					</div>
					<div class="portlet-body">
                        <!-- <p>
                            In this example you can see Datatable doing both horizontal and vertical scrolling at the same time. To enable y-scrolling or x-scrolling simply set the <code>scrollY|scrollX</code> parameter to be whatever you want the container wrapper's height or width.
                        </p>
                        <hr> -->
	<form method="POST" action="?m=prosesnilai_keg">
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
                            $kon = $db->connect(); $qcek = $kon->query("select * from user WHERE status = 'ya' AND hak_akses = 'siswa' AND id_user NOT IN (SELECT id_user FROM pm_kegiatan)"); 
							while ($row = $qcek->fetch_array()) {echo"<option value='".$row['id_user']."'>".$row['nis']." |".$row['nama_lengkap']." | ".$row['angkatan']."</option>";} 
                            ?>
                    </select>
                </div>
            </div>

            <!-- Organisasi Sosial-->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Organisasi Sosial</label>
                        <div class="col-sm-6">
                            <!-- <input type="number" class="form-control" name="nilai_orgs" id="nilai_orgs" required> -->
                                <select class="form-control" name="nilai_orgs" id="nilai_orgs" required>
                                    <option value="">--Pilih Nilai--</option>
                                    <option value="2">Ya</option>
                                    <option value="1">Tidak</option>
                                </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="target_orgs" oninput="setGaporgs()" id="target_orgs" required>
                                <option value="">--Pilih Nilai--</option>
								<?php
                                    require_once "database.php";
                                    $db  = new database();
                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='ORGS'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                    ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="selisih_orgs" id="selisih_orgs" readonly />
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_bobot_orgs" id="nilai_bobot_orgs" readonly />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Organisasi Sosial-->

            <!-- Organisasi Keagamaan -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Organisasi Keagamaan</label>
                        <div class="col-sm-6">
                            <!-- <input type="number" class="form-control" name="nilai_orgkg" id="nilai_orgkg" required> -->
								<select class="form-control" name="nilai_orgkg" id="nilai_orgkg" required>
									<option value="">--Pilih Nilai--</option>
									<option value="2">Ya</option>
                                    <option value="1">Tidak</option>
								</select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="target_orgkg" oninput="setGapipa()" id="target_orgkg" required>
                                <option value="">--Pilih Nilai--</option>
								<?php
                                    require_once "database.php";
                                    $db  = new database();
                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='ORGK'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                    ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="selisih_orgkg" id="selisih_orgkg" readonly />
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_bobot_orgkg" id="nilai_bobot_orgkg" readonly />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ilmu Pengetahuan Alam	 -->

            <!-- Organisasi PMI -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Organisasi PMI</label>
                        <div class="col-sm-6">
                            <!-- <input type="number" class="form-control" name="nilai_orgpmi" id="nilai_orgpmi" required> -->
							<select class="form-control" name="nilai_orgpmi" id="nilai_orgpmi" required>
								<option value="">--Pilih Nilai--</option>
                                    <option value="2">Ya</option>
                                    <option value="1">Tidak</option>
							</select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="target_orgpmi" oninput="setGappkn()" id="target_orgpmi" required>
                                <option value="">--Pilih Nilai--</option>
								<?php
                                    require_once "database.php";
                                    $db  = new database();
                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='PKN'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                    ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="selisih_orgpmi" id="selisih_orgpmi" readonly />
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_bobot_orgpmi" id="nilai_bobot_orgpmi" readonly />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Organisasi PMI -->

            <!-- Organisasi Osis -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">OSIS</label>
                        <div class="col-sm-6">
                            <!-- <input type="number" class="form-control" name="nilai_osis" id="nilai_osis" required> -->
							<select class="form-control" name="nilai_osis" id="nilai_osis" required>
								<option value="">--Pilih Nilai--</option>
                                    <option value="2">Ya</option>
                                    <option value="1">Tidak</option>
							</select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="target_osis" class="form-control" oninput="setGapbind()" id="target_osis" required>
                                <option value="">--Pilih Nilai--</option>
								<?php
                                    require_once "database.php";
                                    $db  = new database();
                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='OSIS'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                    ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="selisih_osis" id="selisih_osis" readonly />
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_bobot_osis" id="nilai_bobot_osis" readonly />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Organisasi Osis -->

        <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Core Factor</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_cf_A3" id="nilai_cf_A3" readonly />
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Secondary Factor</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_sf_A3" id="nilai_sf_A3" readonly />
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Total</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_tot_A3" id="nilai_tot_A3" readonly />
                        </div>
                    </div>
                </div>
        </div>
<!--         
        <div class="card-footer text-left">
            <h6 class="m-0 font-weight-bold text-danger">Keterangan Rasio Nilai :</h6>
            <h6 class="m-0 font-weight-bold text-info">- Nilai A = 90 - 100</h6>
            <h6 class="m-0 font-weight-bold text-info">- Nilai A- = 80 - 89</h6>
            <h6 class="m-0 font-weight-bold text-info">- Nilai B+ = 73 - 75</h6>
            <h6 class="m-0 font-weight-bold text-info">- Nilai B = 70 - 72</h6>
            <h6 class="m-0 font-weight-bold text-info">- Nilai B- = 68 - 69</h6>
            <h6 class="m-0 font-weight-bold text-info">- Nilai C+ = 64 - 67</h6>
            <h6 class="m-0 font-weight-bold text-info">- Nilai C = 60 - 63</h6>
            <h6 class="m-0 font-weight-bold text-info">- Nilai C- = 55 - 59</h6>
            <h6 class="m-0 font-weight-bold text-info">- Nilai D = 50 - 54</h6>
            <h6 class="m-0 font-weight-bold text-info">- Nilai E = Nilai < 50</h6>
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
    function setGaporgs(){
        var n = document.getElementById("nilai_orgs").value;
        var t = document.getElementById("target_orgs").value;
        var s = n-t;
		if(s == 0){
            nb = 3
        }else if(s == -1){
            nb = 1
        }
        document.getElementById("selisih_orgs").value = s;
        document.getElementById("nilai_bobot_orgs").value = nb;
    }

    function setGapipa(){
        var n = document.getElementById("nilai_orgkg").value;
        var t = document.getElementById("target_orgkg").value;
        var s = n-t;
        if(s == 0){
            nb = 3
        }else if(s == -1){
            nb = 1
        }
        document.getElementById("selisih_orgkg").value = s;
        document.getElementById("nilai_bobot_orgkg").value = nb;
    }

    function setGappkn(){
        var n = document.getElementById("nilai_orgpmi").value;
        var t = document.getElementById("target_orgpmi").value;
        var s = n-t;
        if(s == 0){
            nb = 3
        }else if(s == -1){
            nb = 1
        }
        document.getElementById("selisih_orgpmi").value = s;
        document.getElementById("nilai_bobot_orgpmi").value = nb;
    }

    function setGapbind(){
        var n = document.getElementById("nilai_osis").value;
        var t = document.getElementById("target_osis").value;
        var s = n-t;
        if(s == 0){
            nb = 3
        }else if(s == -1){
            nb = 1
        }
        document.getElementById("selisih_osis").value = s;
        document.getElementById("nilai_bobot_osis").value = nb;

        var ips = document.getElementById("nilai_bobot_orgs").value;
        var ipa = document.getElementById("nilai_bobot_orgkg").value;
        var pkn = document.getElementById("nilai_bobot_orgpmi").value;
        var bind = document.getElementById("nilai_bobot_osis").value;

        var cf = (parseFloat(ips) + parseFloat(ipa)) / 2;
        var sf = (parseFloat(pkn) + parseFloat(bind)) / 2;
        var nt = (cf * 0.5) + (sf * 0.5);

        document.getElementById("nilai_cf_A3").value  = cf;
        document.getElementById("nilai_sf_A3").value  = sf;
        document.getElementById("nilai_tot_A3").value = nt;
    }
</script>