
<?php
        $kdnilai1 = $_GET['kdnilai1'];
        require_once "database.php";
        $db = new database();
        $kon = $db->connect();
        $query = $kon->query("SELECT * FROM pm_penilaian where kdnilai1='$kdnilai1'");
        while ($row = $query->fetch_array()) {
            $kdnilai1       = $row['kdnilai1'];
            $angkatan      = $row['angkatan'];
            $id_user      = $row['id_user'];
            
            $nilai_ips       = $row['nilai_ips'];
            $target_ips      = $row['target_ips'];
            $selisih_ips     = $row['selisih_ips'];
            $nilai_bobot_ips = $row['nilai_bobot_ips'];
            
            $nilai_ipa       = $row['nilai_ipa'];
            $target_ipa      = $row['target_ipa'];
            $selisih_ipa     = $row['selisih_ipa'];
            $nilai_bobot_ipa = $row['nilai_bobot_ipa'];
            
            $nilai_pkn       = $row['nilai_pkn'];
            $target_pkn      = $row['target_pkn'];
            $selisih_pkn     = $row['selisih_pkn'];
            $nilai_bobot_pkn = $row['nilai_bobot_pkn'];
            
            $nilai_bind       = $row['nilai_bind'];
            $target_bind      = $row['target_bind'];
            $selisih_bind     = $row['selisih_bind'];
            $nilai_bobot_bind = $row['nilai_bobot_bind'];
            
            $nilai_mtk       = $row['nilai_mtk'];
            $target_mtk      = $row['target_mtk'];
            $selisih_mtk     = $row['selisih_mtk'];
            $nilai_bobot_mtk = $row['nilai_bobot_mtk'];
            
            $nilai_bing       = $row['nilai_bing'];
            $target_bing      = $row['target_bing'];
            $selisih_bing     = $row['selisih_bing'];
            $nilai_bobot_bing = $row['nilai_bobot_bing'];
            
            $nilai_rrt       = $row['nilai_rrt'];
            $target_rrt      = $row['target_rrt'];
            $selisih_rrt     = $row['selisih_rrt'];
            $nilai_bobot_rrt = $row['nilai_bobot_rrt'];
            
            $nilai_cf_A1    = $row['nilai_cf_A1'];
            $nilai_sf_A1    = $row['nilai_sf_A1'];
            $nilai_tot_A1   = $row['nilai_tot_A1'];
        }
        ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="portlet">
                <div class="portlet-header portlet-header-bordered">
                    <h3 class="portlet-title">Detail Penilain</h3>
                </div>
                <div class="portlet-body">
                    <!-- <p>
                        In this example you can see Datatable doing both horizontal and vertical scrolling at the same time. To enable y-scrolling or x-scrolling simply set the <code>scrollY|scrollX</code> parameter to be whatever you want the container wrapper's height or width.
                    </p>
                    <hr> -->
                    <form method="POST" action="?m=prosesnilai_pe">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label font-weight-bold">Angkatan </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" readonly value="<?php echo $angkatan; ?>" name="kdnilai1" id="kdnilai1" />
                                    
                                    <!-- <?php $years = range(2020, strftime("%Y", time())); ?>
                                    <select class="form-control" name="angkatan" readonly required>
                                        <option value="">--Pilih Angkatan--</option>
                                        <?php foreach($years as $year) : ?>
                                            <option value="<?php echo $year; ?>"><?php echo $angkatan; ?></option>
                                            <?php endforeach; ?>
                                        </select> -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label font-weight-bold">Nama Siswa </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="id_user" readonly required>
                                            <!-- <option value="">--Pilih Siswa--</option> -->
                                            <?php
                            require_once "database.php";
                            $db  = new database();
                            $kon = $db->connect(); $qcek = $kon->query("select * from user WHERE id_user = '$id_user'"); 
							while ($row = $qcek->fetch_array()) {echo"<option value='".$row['id_user']."'>".$row['nis']." |".$row['nama_lengkap']." | ".$row['angkatan']."</option>";} 
                            ?>
                    </select>
                </div>
            </div>
            
            <!-- Ilmu Pengetahuan Sosial -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Ilmu Pengetahuan Sosial</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" readonly value="<?php echo $nilai_ips; ?>" name="kdnilai1" id="kdnilai1" />
                            
                            <!-- <input type="number" class="form-control" name="nilai_ips" id="nilai_ips" required> -->
                            <!-- <select class="form-control" name="nilai_ips" id="nilai_ips" required>
                                <option value="">--Pilih Nilai--</option>
                                <option value="10">A</option>
                                <option value="9">A-</option>
                                <option value="8">B+</option>
                                <option value="7">B</option>
                                    <option value="6">B-</option>
                                    <option value="5">C+</option>
                                    <option value="4">C</option>
                                    <option value="3">C-</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" readonly value="<?php echo $target_ips; ?>" name="kdnilai1" id="kdnilai1" />
                                
                                <!-- <select class="form-control" name="target_ips" oninput="setGapips()" id="target_ips" required>
                                    <option value="">--Pilih Nilai--</option>
                                    <?php
                                    require_once "database.php";
                                    $db  = new database();
                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='IPS'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                    ?>
                            </select> -->
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                        <div class="col-sm-6">
                            <!-- <input type="text" class="form-control" name="selisih_ips" id="selisih_ips" readonly /> -->
                            <input type="text" class="form-control" readonly value="<?php echo $selisih_ips; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" readonly value="<?php echo $nilai_bobot_ips; ?>" name="kdnilai1" id="kdnilai1" />
                            
                            <!-- <input type="text" class="form-control" name="nilai_bobot_ips" id="nilai_bobot_ips" readonly /> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ilmu Pengetahuan Sosial -->
            <!-- Ilmu Pengetahuan Alam	 -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Ilmu Pengetahuan Alam</label>
                        <div class="col-sm-6">
                            <!-- <input type="number" class="form-control" name="nilai_ipa" id="nilai_ipa" required> -->
                            <!-- <select class="form-control" name="nilai_ipa" id="nilai_ipa" required>
                                <option value="">--Pilih Nilai--</option>
                                <option value="10">A</option>
                                <option value="9">A-</option>
                                <option value="8">B+</option>
                                <option value="7">B</option>
                                <option value="6">B-</option>
                                <option value="5">C+</option>
                                <option value="4">C</option>
                                <option value="3">C-</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
								</select> -->
                                <input type="text" class="form-control" readonly value="<?php echo $nilai_ipa; ?>" name="kdnilai1" id="kdnilai1" />
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" readonly value="<?php echo $target_ipa; ?>" name="kdnilai1" id="kdnilai1" />
                                
                                <!-- <select class="form-control" name="target_ipa" oninput="setGapipa()" id="target_ipa" required>
                                    <option value="">--Pilih Nilai--</option>
                                    <?php
                                    require_once "database.php";
                                    $db  = new database();
                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='IPA'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                    ?>
                            </select> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                        <div class="col-sm-6">
                            <!-- <input type="text" class="form-control" name="selisih_ipa" id="selisih_ipa" readonly /> -->
                            <input type="text" class="form-control" readonly value="<?php echo $selisih_ipa; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" readonly value="<?php echo $nilai_bobot_ipa; ?>" name="kdnilai1" id="kdnilai1" />
                            
                            <!-- <input type="text" class="form-control" name="nilai_bobot_ipa" id="nilai_bobot_ipa" readonly /> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ilmu Pengetahuan Alam	 -->
            <!-- Pendidikan Kewarganegaraan -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Pendidikan Kewarganegaraan</label>
                        <div class="col-sm-6">
                            <!-- <input type="number" class="form-control" name="nilai_pkn" id="nilai_pkn" required> -->
							<!-- <select class="form-control" name="nilai_pkn" id="nilai_pkn" required>
                                <option value="">--Pilih Nilai--</option>
								<option value="10">A</option>
                                <option value="9">A-</option>
                                <option value="8">B+</option>
                                <option value="7">B</option>
                                <option value="6">B-</option>
                                <option value="5">C+</option>
                                <option value="4">C</option>
                                <option value="3">C-</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select> -->
                                <input type="text" class="form-control" readonly value="<?php echo $nilai_pkn; ?>" name="kdnilai1" id="kdnilai1" />
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                            <div class="col-sm-6">
                                <!-- <select class="form-control" name="target_pkn" oninput="setGappkn()" id="target_pkn" required>
                                    <option value="">--Pilih Nilai--</option>
                                    <?php
                                    require_once "database.php";
                                    $db  = new database();
                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='PKN'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                    ?>
                            </select> -->
                            <input type="text" class="form-control" readonly value="<?php echo $target_ipa; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                        <div class="col-sm-6">
                            <!-- <input type="text" class="form-control" name="selisih_pkn" id="selisih_pkn" readonly /> -->
                            <input type="text" class="form-control" readonly value="<?php echo $selisih_pkn; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                        <div class="col-sm-6">
                            <!-- <input type="text" class="form-control" name="nilai_bobot_pkn" id="nilai_bobot_pkn" readonly /> -->
                            <input type="text" class="form-control" readonly value="<?php echo $nilai_bobot_pkn; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pendidikan Kewarganegaraan -->
            <!-- Bahasa Indonesia -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bahasa Indonesia</label>
                        <div class="col-sm-6">
                            <!-- <input type="number" class="form-control" name="nilai_bind" id="nilai_bind" required> -->
							<!-- <select class="form-control" name="nilai_bind" id="nilai_bind" required>
                                <option value="">--Pilih Nilai--</option>
								<option value="10">A</option>
                                <option value="9">A-</option>
                                <option value="8">B+</option>
                                <option value="7">B</option>
                                <option value="6">B-</option>
                                <option value="5">C+</option>
                                <option value="4">C</option>
                                <option value="3">C-</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
							</select> -->
                            <input type="text" class="form-control" readonly value="<?php echo $nilai_bind; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                        <div class="col-sm-6">
                            <!-- <select class="form-control" name="target_bind" class="form-control" oninput="setGapbind()" id="target_bind" required>
                                <option value="">--Pilih Nilai--</option>
								<?php
                                    require_once "database.php";
                                    $db  = new database();
                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='BIND'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                    ?>
                            </select> -->
                            <input type="text" class="form-control" readonly value="<?php echo $target_bind; ?>" name="kdnilai1" id="kdnilai1" />

                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                        <div class="col-sm-6">
                            <!-- <input type="text" class="form-control" name="selisih_bind" id="selisih_bind" readonly /> -->
                            <input type="text" class="form-control" readonly value="<?php echo $selisih_bind; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                        <div class="col-sm-6">
                            <!-- <input type="text" class="form-control" name="nilai_bobot_bind" id="nilai_bobot_bind" readonly /> -->
                            <input type="text" class="form-control" readonly value="<?php echo $nilai_bobot_bind; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bahasa Indonesia -->
            <!-- Matematika -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Matematika</label>
                        <div class="col-sm-6">
                            <!-- <input type="number" class="form-control" name="nilai_mtk" id="nilai_mtk" required> -->
							<!-- <select class="form-control" name="nilai_mtk" id="nilai_mtk" required>
                                <option value="">--Pilih Nilai--</option>
								<option value="10">A</option>
                                <option value="9">A-</option>
                                <option value="8">B+</option>
                                <option value="7">B</option>
                                <option value="6">B-</option>
                                <option value="5">C+</option>
                                <option value="4">C</option>
                                <option value="3">C-</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
							</select> -->
                            <input type="text" class="form-control" readonly value="<?php echo $nilai_mtk; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                        <div class="col-sm-6">
                            <!-- <select class="form-control" name="target_mtk" oninput="setGapmtk()" id="target_mtk" required>
                                <option value="">--Pilih Nilai--</option>
								<?php
                                    require_once "database.php";
                                    $db  = new database();
                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='MTK'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                    ?>
                            </select> -->
                            <input type="text" class="form-control" readonly value="<?php echo $target_mtk; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                        <div class="col-sm-6">
                            <!-- <input type="text" class="form-control" name="selisih_mtk" id="selisih_mtk" readonly /> -->
                            <input type="text" class="form-control" readonly value="<?php echo $selisih_mtk; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                        <div class="col-sm-6">
                            <!-- <input type="text" class="form-control" name="nilai_bobot_mtk" id="nilai_bobot_mtk" readonly /> -->
                            <input type="text" class="form-control" readonly value="<?php echo $nilai_bobot_mtk; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Matematika -->
            <!-- Bahasa Inggris	 -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bahasa Inggris</label>
                        <div class="col-sm-6">
                            
                            <!-- <input type="number" class="form-control" name="nilai_bing" id="nilai_bing" required> -->
							<!-- <select class="form-control" name="nilai_bing" id="nilai_bing" required>
                                <option value="">--Pilih Nilai--</option>
								<option value="10">A</option>
                                <option value="9">A-</option>
                                <option value="8">B+</option>
                                <option value="7">B</option>
                                <option value="6">B-</option>
                                <option value="5">C+</option>
                                <option value="4">C</option>
                                <option value="3">C-</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
							</select> -->
                            <input type="text" class="form-control" readonly value="<?php echo $nilai_bing; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                        <div class="col-sm-6">
                            <!-- <select class="form-control" name="target_bing" oninput="setGapbing()" id="target_bing" required>
                                <option value="">--Pilih Nilai--</option>
                                <?php
                                    require_once "database.php";
                                    $db  = new database();
                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='BING'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                    ?>
                            </select> -->
                            <input type="text" class="form-control" readonly value="<?php echo $target_bing; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                        <div class="col-sm-6">
                            <!-- <input type="text" class="form-control" name="selisih_bing" id="selisih_bing" readonly /> -->
                            <input type="text" class="form-control" readonly value="<?php echo $selisih_bing; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                        <div class="col-sm-6">
                            <!-- <input type="text" class="form-control" name="nilai_bobot_bing" id="nilai_bobot_bing" readonly /> -->
                            <input type="text" class="form-control" readonly value="<?php echo $nilai_bobot_bing; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bahasa Inggris	 -->
            <!-- Pend Agama Islam -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Pend Agama Islam</label>
                        <div class="col-sm-6">
                            <!-- <input type="number" class="form-control" name="nilai_rrt" id="nilai_rrt" required> -->
							<!-- <select class="form-control" name="nilai_rrt" id="nilai_rrt" required>
                                <option value="">--Pilih Nilai--</option>
								<option value="10">A</option>
                                <option value="9">A-</option>
                                <option value="8">B+</option>
                                <option value="7">B</option>
                                <option value="6">B-</option>
                                <option value="5">C+</option>
                                <option value="4">C</option>
                                    <option value="3">C-</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select> -->
                                <input type="text" class="form-control" readonly value="<?php echo $nilai_rrt; ?>" name="kdnilai1" id="kdnilai1" />
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label font-weight-bold">Nilai Target</label>
                            <div class="col-sm-6">
                                <!-- <select class="form-control" name="target_rrt" oninput="setGaprrt()" id="target_rrt" required>
                                    <option value="">--Pilih Nilai--</option>
                                    <?php
                                    require_once "database.php";
                                    $db  = new database();
                                    $kon = $db->connect(); $qcek = $kon->query("select * from pm_kriteria where kdkriteria='RRT'"); while ($row = $qcek->fetch_array()) {echo"<option value='".$row['target']."'>".$row['target']."</option>";} 
                                    ?>
                            </select> -->
                            <input type="text" class="form-control" readonly value="<?php echo $target_rrt; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">GAP</label>
                        <div class="col-sm-6">
                            <!-- <input type="text" class="form-control" name="selisih_rrt" id="selisih_rrt" readonly /> -->
                            <input type="text" class="form-control" readonly value="<?php echo $selisih_rrt; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Bobot</label>
                        <div class="col-sm-6">
                            <!-- <input type="text" class="form-control" name="nilai_bobot_rrt" id="nilai_bobot_rrt" readonly /> -->
                            <input type="text" class="form-control" readonly value="<?php echo $nilai_bobot_rrt; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pend Agama Islam -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Core Factor</label>
                        <div class="col-sm-6">
                            <!-- <input type="text" class="form-control" name="nilai_cf_A1" id="nilai_cf_A1" readonly /> -->
                            <input type="text" class="form-control" readonly value="<?php echo $nilai_cf_A1; ?>" name="kdnilai1" id="kdnilai1" />

                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Secondary Factor</label>
                        <div class="col-sm-6">
                            <!-- <input type="text" class="form-control" name="nilai_sf_A1" id="nilai_sf_A1" readonly /> -->
                            <input type="text" class="form-control" readonly value="<?php echo $nilai_sf_A1; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label font-weight-bold">Nilai Total</label>
                        <div class="col-sm-6">
                            <!-- <input type="text" class="form-control" name="nilai_tot_A1" id="nilai_tot_A1" readonly /> -->
                            <input type="text" class="form-control" readonly value="<?php echo $nilai_tot_A1; ?>" name="kdnilai1" id="kdnilai1" />
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        </div>
        <!-- <div class="card-footer text-right">
            <button name="simpan" type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            <button type="reset" class="btn btn-info"><i class="fa fa-sync-alt"></i> Reset</button>
        </div> -->
    </form>
</div>
</div>
</div>
</div>
</div>
<!-- <script>
    function setGapips(){
        var n = document.getElementById("nilai_ips").value;
        var t = document.getElementById("target_ips").value;
        var s = n-t;
		if(s == 0){
            nb = 5
        }else if(s == 1){
            nb = 4.5
        }else if(s == -1){
            nb = 4.5
        }else if(s == 2){
            nb = 4
        }else if(s == -2){
            nb = 4
        }else if(s == 3){
            nb = 3.5
        }else if(s == -3){
            nb = 3.5
        }else if(s == 4){
            nb = 3
        }else if(s == -4){
            nb = 3
        }else if(s == 5){
            nb = 2.5
        }else if(s == -5){
            nb = 2.5
        }else if(s == 6){
            nb = 2
        }else if(s == -6){
            nb = 2
        }else if(s == 7){
            nb = 1.5
        }else if(s == -7){
            nb = 1.5
        }else if(s == 8){
            nb = 1
        }else if(s == -8){
            nb = 1
        }else if(s == 9){
            nb = 0.5
        }else if(s == -9){
            nb = 0.5
        }else if(s == 10){
            nb = 0.5
        }else if(s == -10){
            nb = 0.5
        }
        document.getElementById("selisih_ips").value = s;
        document.getElementById("nilai_bobot_ips").value = nb;
    }
    
    function setGapipa(){
        var n = document.getElementById("nilai_ipa").value;
        var t = document.getElementById("target_ipa").value;
        var s = n-t;
        if(s == 0){
            nb = 5
        }else if(s == 1){
            nb = 4.5
        }else if(s == -1){
            nb = 4.5
        }else if(s == 2){
            nb = 4
        }else if(s == -2){
            nb = 4
        }else if(s == 3){
            nb = 3.5
        }else if(s == -3){
            nb = 3.5
        }else if(s == 4){
            nb = 3
        }else if(s == -4){
            nb = 3
        }else if(s == 5){
            nb = 2.5
        }else if(s == -5){
            nb = 2.5
        }else if(s == 6){
            nb = 2
        }else if(s == -6){
            nb = 2
        }else if(s == 7){
            nb = 1.5
        }else if(s == -7){
            nb = 1.5
        }else if(s == 8){
            nb = 1
        }else if(s == -8){
            nb = 1
        }else if(s == 9){
            nb = 0.5
        }else if(s == -9){
            nb = 0.5
        }else if(s == 10){
            nb = 0.5
        }else if(s == -10){
            nb = 0.5
        }
        document.getElementById("selisih_ipa").value = s;
        document.getElementById("nilai_bobot_ipa").value = nb;
    }
    
    function setGappkn(){
        var n = document.getElementById("nilai_pkn").value;
        var t = document.getElementById("target_pkn").value;
        var s = n-t;
        if(s == 0){
            nb = 5
        }else if(s == 1){
            nb = 4.5
        }else if(s == -1){
            nb = 4.5
        }else if(s == 2){
            nb = 4
        }else if(s == -2){
            nb = 4
        }else if(s == 3){
            nb = 3.5
        }else if(s == -3){
            nb = 3.5
        }else if(s == 4){
            nb = 3
        }else if(s == -4){
            nb = 3
        }else if(s == 5){
            nb = 2.5
        }else if(s == -5){
            nb = 2.5
        }else if(s == 6){
            nb = 2
        }else if(s == -6){
            nb = 2
        }else if(s == 7){
            nb = 1.5
        }else if(s == -7){
            nb = 1.5
        }else if(s == 8){
            nb = 1
        }else if(s == -8){
            nb = 1
        }else if(s == 9){
            nb = 0.5
        }else if(s == -9){
            nb = 0.5
        }else if(s == 10){
            nb = 0.5
        }else if(s == -10){
            nb = 0.5
        }
        document.getElementById("selisih_pkn").value = s;
        document.getElementById("nilai_bobot_pkn").value = nb;
    }
    
    function setGapbind(){
        var n = document.getElementById("nilai_bind").value;
        var t = document.getElementById("target_bind").value;
        var s = n-t;
        if(s == 0){
            nb = 5
        }else if(s == 1){
            nb = 4.5
        }else if(s == -1){
            nb = 4.5
        }else if(s == 2){
            nb = 4
        }else if(s == -2){
            nb = 4
        }else if(s == 3){
            nb = 3.5
        }else if(s == -3){
            nb = 3.5
        }else if(s == 4){
            nb = 3
        }else if(s == -4){
            nb = 3
        }else if(s == 5){
            nb = 2.5
        }else if(s == -5){
            nb = 2.5
        }else if(s == 6){
            nb = 2
        }else if(s == -6){
            nb = 2
        }else if(s == 7){
            nb = 1.5
        }else if(s == -7){
            nb = 1.5
        }else if(s == 8){
            nb = 1
        }else if(s == -8){
            nb = 1
        }else if(s == 9){
            nb = 0.5
        }else if(s == -9){
            nb = 0.5
        }else if(s == 10){
            nb = 0.5
        }else if(s == -10){
            nb = 0.5
        }
        document.getElementById("selisih_bind").value = s;
        document.getElementById("nilai_bobot_bind").value = nb;
    }
    
    function setGapmtk(){
        var n = document.getElementById("nilai_mtk").value;
        var t = document.getElementById("target_mtk").value;
        var s = n-t;
        if(s == 0){
            nb = 5
        }else if(s == 1){
            nb = 4.5
        }else if(s == -1){
            nb = 4.5
        }else if(s == 2){
            nb = 4
        }else if(s == -2){
            nb = 4
        }else if(s == 3){
            nb = 3.5
        }else if(s == -3){
            nb = 3.5
        }else if(s == 4){
            nb = 3
        }else if(s == -4){
            nb = 3
        }else if(s == 5){
            nb = 2.5
        }else if(s == -5){
            nb = 2.5
        }else if(s == 6){
            nb = 2
        }else if(s == -6){
            nb = 2
        }else if(s == 7){
            nb = 1.5
        }else if(s == -7){
            nb = 1.5
        }else if(s == 8){
            nb = 1
        }else if(s == -8){
            nb = 1
        }else if(s == 9){
            nb = 0.5
        }else if(s == -9){
            nb = 0.5
        }else if(s == 10){
            nb = 0.5
        }else if(s == -10){
            nb = 0.5
        }
        document.getElementById("selisih_mtk").value = s;
        document.getElementById("nilai_bobot_mtk").value = nb;
    }
    
    function setGapbing(){
        var n = document.getElementById("nilai_bing").value;
        var t = document.getElementById("target_bing").value;
        var s = n-t;
        if(s == 0){
            nb = 5
        }else if(s == 1){
            nb = 4.5
        }else if(s == -1){
            nb = 4.5
        }else if(s == 2){
            nb = 4
        }else if(s == -2){
            nb = 4
        }else if(s == 3){
            nb = 3.5
        }else if(s == -3){
            nb = 3.5
        }else if(s == 4){
            nb = 3
        }else if(s == -4){
            nb = 3
        }else if(s == 5){
            nb = 2.5
        }else if(s == -5){
            nb = 2.5
        }else if(s == 6){
            nb = 2
        }else if(s == -6){
            nb = 2
        }else if(s == 7){
            nb = 1.5
        }else if(s == -7){
            nb = 1.5
        }else if(s == 8){
            nb = 1
        }else if(s == -8){
            nb = 1
        }else if(s == 9){
            nb = 0.5
        }else if(s == -9){
            nb = 0.5
        }else if(s == 10){
            nb = 0.5
        }else if(s == -10){
            nb = 0.5
        }
        document.getElementById("selisih_bing").value = s;
        document.getElementById("nilai_bobot_bing").value = nb;
    }
    
    function setGaprrt(){
        var n = document.getElementById("nilai_rrt").value;
        var t = document.getElementById("target_rrt").value;
        var s = n-t;
        if(s == 0){
            nb = 5
        }else if(s == 1){
            nb = 4.5
        }else if(s == -1){
            nb = 4.5
        }else if(s == 2){
            nb = 4
        }else if(s == -2){
            nb = 4
        }else if(s == 3){
            nb = 3.5
        }else if(s == -3){
            nb = 3.5
        }else if(s == 4){
            nb = 3
        }else if(s == -4){
            nb = 3
        }else if(s == 5){
            nb = 2.5
        }else if(s == -5){
            nb = 2.5
        }else if(s == 6){
            nb = 2
        }else if(s == -6){
            nb = 2
        }else if(s == 7){
            nb = 1.5
        }else if(s == -7){
            nb = 1.5
        }else if(s == 8){
            nb = 1
        }else if(s == -8){
            nb = 1
        }else if(s == 9){
            nb = 0.5
        }else if(s == -9){
            nb = 0.5
        }else if(s == 10){
            nb = 0.5
        }else if(s == -10){
            nb = 0.5
        }
        document.getElementById("selisih_rrt").value = s;
        document.getElementById("nilai_bobot_rrt").value = nb;
        
        var ips = document.getElementById("nilai_bobot_ips").value;
        var ipa = document.getElementById("nilai_bobot_ipa").value;
        var pkn = document.getElementById("nilai_bobot_pkn").value;
        var bind = document.getElementById("nilai_bobot_bind").value;
        var mtk = document.getElementById("nilai_bobot_mtk").value;
        var bing = document.getElementById("nilai_bobot_bing").value;
        var rrt = document.getElementById("nilai_bobot_rrt").value;
        
        var cf = (parseFloat(bind) + parseFloat(mtk) + parseFloat(bing)) / 3;
        var sf = (parseFloat(ips) + parseFloat(ipa) + parseFloat(pkn) + parseFloat(rrt)) / 4;
        var nt = (cf * 0.6) + (sf * 0.4);
        
        document.getElementById("nilai_cf_A1").value  = cf;
        document.getElementById("nilai_sf_A1").value  = sf;
        document.getElementById("nilai_tot_A1").value = nt;
    }
</script> -->