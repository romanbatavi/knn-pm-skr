<?php
require_once "class/penilaian.php";
$penilaian = new penilaian();
require_once "class/kemampuan.php";
$kemampuan = new kemampuan();
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="portlet">
                <div class="portlet-header portlet-header-bordered">
                    <h3 class="portlet-title">Cetak Laporan Profile matching Per Periode</h3>
                </div>
                <div class="portlet-body">
                    <div class="card shadow mb-4">
                        <h1> Pilih Periode Untuk Menampilkan Hasil Laporan Profile Matching </h1>
                        <form method="post"> 
                            <div class="col-lg-4  col-6">
                                <div class="form-group">
                                    <div class="form-line">
                                            <?php $years = range(2019, strftime("%Y", time())); ?>
                                        <select class="form-control" name="angkatan">
                                            <option>Select Year</option>
                                            <?php foreach($years as $year) : ?>
                                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <input class='btn btn-round btn-info waves-effect' type='submit' name=submit value='Cari' />
                            </div>
                        </form>

                        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Hasil Akhir Perankingan</h6>
                            <button type="button" class="btn btn-success" value="Import as Excel" onclick="saveAsExcel('laporan', 'laporanpm<?php echo $angkatan;?>.xls')">
                                <i class="fa fa-print"></i> Export Excel
                            </button>  
                        </div>
                        
                        <div class="card-body">
                            <?php
                                include_once "database.php";
                                $db = new database();
                                $kon = $db->connect();
                            ?>
                            <!-- Ambil Data Persentase -->
                            <?php
                                $qpersen    = $kon->query("select distinct persentase from pm_aspek where id_aspek = 'A001'");
                                $dtpersen   = $qpersen->fetch_array();
                                $persen     = $dtpersen['persentase'];
                                    
                                $qpersen2   = $kon->query("select distinct persentase from pm_aspek where id_aspek = 'A002'");
                                $dtpersen2  = $qpersen2->fetch_array();
                                $persen2    = $dtpersen2['persentase'];
                            ?>

                            <table class="table table-bordered" width="100%" id="laporan" border="2px" cellspacing="0">
                                <thead class="bg-info text-white">
                                    <tr align="center">
                                        <th width="5%">No</th>
                                        <th width="20%">Nama Siswa</th>
                                        <th width="22%">Nilai Penilaian<br/> <?php echo $persen; ?> %</th>
                                        <th width="18%">Nilai Kemampuan <br/> <?php echo $persen2; ?> %</th>
                                        <th width="10%">Total</th>
                                        <th width="15%">Ranking</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        if(isset($_POST['angkatan'])){
                                        $angkatan=$_POST['angkatan'];
                                        if ($angkatan==null) {
                                        $angkatan=0;
                                        }
                                        $query = "SELECT user.id_user, user.nama_lengkap, user.hak_akses, user.angkatan,
                                        pm_penilaian.nilai_tot_A1 as PE, pm_kemampuan.nilai_tot_A2 as KE,
                                        (((pm_penilaian.nilai_tot_A1*$persen)/100)+((pm_kemampuan.nilai_tot_A2*$persen2)/100)) as Total
                                        FROM user 
                                        LEFT JOIN pm_penilaian ON user.id_user = pm_penilaian.id_user
                                        LEFT JOIN pm_kemampuan ON user.id_user = pm_kemampuan.id_user
                                        where  user.angkatan LIKE '%$angkatan%' AND user.hak_akses = 'siswa' ORDER BY Total DESC";
                                        $hasil = $kon->query("$query");
                                        $no = 1;
                                        while ($row = $hasil->fetch_array()) {
                                        $id_user    = $row['id_user'];
                                        $nama_lengkap  = $row['nama_lengkap'];

                                        echo '
                                        <tr>
                                        <td style="text-align: center">'.$no.'</td>
                                        <td>'.$nama_lengkap.'</td>
                                        ';
                                        echo '<td style="text-align: center">'.$row['PE'].'</div></td>';
                                        echo '<td style="text-align: center">'.$row['KE'].'</td>';
                                        echo '<td style="text-align: center">'.number_format((float)$row['Total'], 2, '.', '').'</td>';
                                        echo '<td style="text-align: center">'.$no.'</td>';
                                        $no++;
                                                }
                                            }
                                        ?>
                                </tbody>
                            </table>		
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>