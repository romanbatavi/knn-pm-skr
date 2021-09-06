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
	<form method="POST" action="?m=prosesnilai_pre">
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
                            $kon = $db->connect(); $qcek = $kon->query("select * from user WHERE status = 'ya' AND hak_akses = 'siswa' AND id_user NOT IN (SELECT id_user FROM pm_prestasi)"); 
							while ($row = $qcek->fetch_array()) {echo"<option value='".$row['id_user']."'>".$row['nis']." |".$row['nama_lengkap']." | ".$row['angkatan']."</option>";} 
                            ?>
                    </select>
                </div>
            </div>

            <!-- Akademik -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Akademik</label>
                        <div class="col-sm-6">
                            <!-- <input type="number" class="form-control" name="nilai_akdm" id="nilai_akdm" required> -->
                                <select class="form-control" name="nilai_akdm" id="nilai_akdm" required>
                                    <option value="">--Pilih Nilai--</option>
                                    <option value="4">Tingkat Internasional</option>
                                    <option value="3">Tingkat Nasional</option>
                                    <option value="2">Tingkat Provinsi</option>
                                    <option value="1">Tidak Ada</option>
                                </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="target_akdm" oninput="setGapips()" id="target_akdm" required>
                                <option value="">--Pilih Nilai--</option>
								<?php
                                    require_once "database.php";
                                    $db  = new database();
                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='AKDM'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                    ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="selisih_akdm" id="selisih_akdm" readonly />
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_bobot_akdm" id="nilai_bobot_akdm" readonly />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akademik -->

            <!-- Non Akademik	 -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Non Akademik</label>
                        <div class="col-sm-6">
                            <!-- <input type="number" class="form-control" name="nilai_nakdm" id="nilai_nakdm" required> -->
								<select class="form-control" name="nilai_nakdm" id="nilai_nakdm" required>
									<option value="">--Pilih Nilai--</option>
									<option value="4">Tingkat Internasional</option>
                                    <option value="3">Tingkat Nasional</option>
                                    <option value="2">Tingkat Provinsi</option>
                                    <option value="1">Tidak Ada</option>
								</select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="target_nakdm" oninput="setGaprrt()" id="target_nakdm" required>
                                <option value="">--Pilih Nilai--</option>
								<?php
                                    require_once "database.php";
                                    $db  = new database();
                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='NAKD'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                    ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="selisih_nakdm" id="selisih_nakdm" readonly />
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_bobot_nakdm" id="nilai_bobot_nakdm" readonly />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akademik -->

        <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Core Factor</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_cf_A6" id="nilai_cf_A6" readonly />
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Secondary Factor</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_sf_A6" id="nilai_sf_A6" readonly />
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Total</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai_tot_A6" id="nilai_tot_A6" readonly />
                        </div>
                    </div>
                </div>
        </div>
        
        <!-- <div class="card-footer text-left">
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
    function setGapips(){
        var n = document.getElementById("nilai_akdm").value;
        var t = document.getElementById("target_akdm").value;
        var s = n-t;
        if(s == 0){
            nb = 3
        }else if(s == -1){
            nb = 2
        }
        else if(s == -2){
            nb = 1
        }
        else if(s == -3){
            nb = 0.5
        }
        document.getElementById("selisih_akdm").value = s;
        document.getElementById("nilai_bobot_akdm").value = nb;
    }
    function setGaprrt(){
        var n = document.getElementById("nilai_nakdm").value;
        var t = document.getElementById("target_nakdm").value;
        var s = n-t;
        if(s == 0){
            nb = 3
        }else if(s == -1){
            nb = 2
        }
        else if(s == -2){
            nb = 1
        }
        else if(s == -3){
            nb = 0.5
        }
        document.getElementById("selisih_nakdm").value = s;
        document.getElementById("nilai_bobot_nakdm").value = nb;

    var akademik = document.getElementById("nilai_bobot_akdm").value;
    var nonakademik = document.getElementById("nilai_bobot_nakdm").value;
    

    var cf = (parseFloat(akademik)) / 1;
    var sf = (parseFloat(nonakademik)) / 1;
    var nt = (cf * 0.6) + (sf * 0.4);

    document.getElementById("nilai_cf_A6").value  = cf;
    document.getElementById("nilai_sf_A6").value  = sf;
    document.getElementById("nilai_tot_A6").value = nt;
    }
</script>