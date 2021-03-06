<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="portlet">
                <div class="portlet-header portlet-header-bordered">
                    <h3 class="portlet-title">Tambah Data kegiatan</h3>
                </div>
                <div class="portlet-body">
                    <form method="POST" action="?m=prosesnilai_eks">
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
                                            $kon = $db->connect(); $qcek = $kon->query("select * from user WHERE status = 'ya' AND hak_akses = 'siswa' AND id_user NOT IN (SELECT id_user FROM pm_ekskul)"); 
                                            while ($row = $qcek->fetch_array()) {echo"<option value='".$row['id_user']."'>".$row['nis']." |".$row['nama_lengkap']." | ".$row['angkatan']."</option>";} 
                                        ?>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Pramuka -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Pramuka</label>
                                        <div class="col-sm-6">
                                            <!-- <input type="number" class="form-control" name="nilai_prm" id="nilai_prm" required> -->
                                            <select class="form-control" name="nilai_prm" id="nilai_prm" required>
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
                                            <select class="form-control" name="target_prm" oninput="setGapprm()" id="target_prm" required>
                                                <option value="">--Pilih Nilai--</option>
                                                <?php
                                                    require_once "database.php";
                                                    $db  = new database();
                                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='pram'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="selisih_prm" id="selisih_prm" readonly />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nilai_bobot_prm" id="nilai_bobot_prm" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pramuka -->
                            
                            <!-- Futsal-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Futsal</label>
                                        <div class="col-sm-6">
                                            <!-- <input type="number" class="form-control" name="nilai_fsl" id="nilai_fsl" required> -->
                                            <select class="form-control" name="nilai_fsl" id="nilai_fsl" required>
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
                                            <select class="form-control" name="target_fsl" oninput="setGapfsl()" id="target_fsl" required>
                                                <option value="">--Pilih Nilai--</option>
                                                <?php
                                                    require_once "database.php";
                                                    $db  = new database();
                                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='FTS'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="selisih_fsl" id="selisih_fsl" readonly />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nilai_bobot_fsl" id="nilai_bobot_fsl" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Futsal -->
                            
                            <!-- Basket -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Basket</label>
                                        <div class="col-sm-6">
                                            <!-- <input type="number" class="form-control" name="nilai_bst" id="nilai_bst" required> -->
                                            <select class="form-control" name="nilai_bst" id="nilai_bst" required>
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
                                            <select class="form-control" name="target_bst" oninput="setGapbst()" id="target_bst" required>
                                                <option value="">--Pilih Nilai--</option>
                                                <?php
                                                    require_once "database.php";
                                                    $db  = new database();
                                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='BKT'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="selisih_bst" id="selisih_bst" readonly />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nilai_bobot_bst" id="nilai_bobot_bst" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Basket-->
                            
                            <!-- Paskibra-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Paskibra</label>
                                        <div class="col-sm-6">
                                            <!-- <input type="number" class="form-control" name="nilai_paskib" id="nilai_paskib" required> -->
                                            <select class="form-control" name="nilai_paskib" id="nilai_paskib" required>
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
                                            <select class="form-control" name="target_paskib" oninput="setGappaskib()" id="target_paskib" required>
                                                <option value="">--Pilih Nilai--</option>
                                                <?php
                                                require_once "database.php";
                                                $db  = new database();
                                                $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='PASK'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="selisih_paskib" id="selisih_paskib" readonly />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nilai_bobot_paskib" id="nilai_bobot_paskib" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Paskibra -->
                        
                        <!-- Perhitungan Core -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label font-weight-bold">Nilai Core Factor</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="nilai_cf_A4" id="nilai_cf_A4" readonly />
                                    </div>
                                </div>
                            </div>
                            <!-- Perhitungan Core -->
                            
                            <!-- Perhitungan Secondary -->
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label font-weight-bold">Nilai Secondary Factor</label>
                                    <div class="col-sm-6">
                                        input type="text" class="form-control" name="nilai_sf_A4" id="nilai_sf_A4" readonly />
                                    </div>
                                </div>
                            </div>
                            <!-- Perhitungan Secondary -->
                            
                            <!-- Perhitungan Total -->
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label font-weight-bold">Nilai Total</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="nilai_tot_A4" id="nilai_tot_A4" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Perhitungan Total -->

                        <div class="card-footer text-right">
                            <button name="simpan" type="submit" class="btn btn-success"><i class="fa fa-save"></i>Simpan</button>
                            <button type="reset" class="btn btn-info"><i class="fa fa-sync-alt"></i>Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function setGapprm(){
        var n = document.getElementById("nilai_prm").value;
        var t = document.getElementById("target_prm").value;
        var s = n-t;
        if(s == 0){
            nb = 3
        }else if(s == -1){
            nb = 1
        }
        document.getElementById("selisih_prm").value = s;
        document.getElementById("nilai_bobot_prm").value = nb;
    }
    
    function setGapfsl(){
        var n = document.getElementById("nilai_fsl").value;
        var t = document.getElementById("target_fsl").value;
        var s = n-t;
        if(s == 0){
            nb = 3
        }else if(s == -1){
            nb = 1
        }
        document.getElementById("selisih_fsl").value = s;
        document.getElementById("nilai_bobot_fsl").value = nb;
    }
    
    function setGapbst(){
        var n = document.getElementById("nilai_bst").value;
        var t = document.getElementById("target_bst").value;
        var s = n-t;
        if(s == 0){
            nb = 3
        }else if(s == -1){
            nb = 1
        }
        document.getElementById("selisih_bst").value = s;
        document.getElementById("nilai_bobot_bst").value = nb;
    }
    
    function setGappaskib(){
        var n = document.getElementById("nilai_paskib").value;
        var t = document.getElementById("target_paskib").value;
        var s = n-t;
        if(s == 0){
            nb = 3
        }else if(s == -1){
            nb = 1
        }
        document.getElementById("selisih_paskib").value = s;
        document.getElementById("nilai_bobot_paskib").value = nb;
        
        var pramuka = document.getElementById("nilai_bobot_prm").value;
        var futsal = document.getElementById("nilai_bobot_fsl").value;
        var basket = document.getElementById("nilai_bobot_bst").value;
        var paskib = document.getElementById("nilai_bobot_paskib").value;
        
        var cf = (parseFloat(paskib) + parseFloat(pramuka)) / 2;
        var sf = (parseFloat(futsal) + parseFloat(basket)) / 2;
        var nt = (cf * 0.6) + (sf * 0.4);
        
        document.getElementById("nilai_cf_A4").value  = cf;
        document.getElementById("nilai_sf_A4").value  = sf;
        document.getElementById("nilai_tot_A4").value = nt;
    }
</script>