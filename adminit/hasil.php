
<?php
require_once "class/penilaian.php";
$penilaian = new penilaian();

require_once "class/kemampuan.php";
$kemampuan = new kemampuan();

require_once "class/kegiatan.php";
$kegiatan = new kegiatan();

require_once "class/ekskul.php";
$ekskul = new ekskul();

require_once "class/sikap.php";
$sikap = new sikap();

require_once "class/prestasi.php";
$prestasi = new prestasi();
?>
<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="portlet">
							<div class="portlet-header portlet-header-bordered">
								<h3 class="portlet-title">Data Hasil Akhir</h3>
							</div>
							<div class="portlet-body">
								<!-- <p>
									In this example you can see Datatable doing both horizontal and vertical scrolling at the same time. To enable y-scrolling or x-scrolling simply set the <code>scrollY|scrollX</code> parameter to be whatever you want the container wrapper's height or width.
								</p>
								<hr> -->
<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Hasil Aspek Penilaian</h6>
    </div>

    <div class="card-body">
		<h5 class="card-title">Tabel Nilai Kriteria Penilaian</h5>
        <?php
        $penilaian->tampil();
		?>
		
		<h5 class="card-title mt-4">Tabel Pemetaan GAP</h5>
		<?php
        $penilaian->selisih();
		?>
		
		<h5 class="card-title mt-4">Tabel Pembobotan Nilai GAP dan Perhitungan Factor</h5>
		<?php
        $penilaian->factor();
		?>
    </div>
</div>
<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Hasil Aspek Kemampuan</h6>
    </div>

    <div class="card-body">
		<h5 class="card-title">Tabel Nilai Kriteria Penilaian</h5>
        <?php
        $kemampuan->tampil();
		?>
		
		<h5 class="card-title mt-4">Tabel Pemetaan GAP</h5>
		<?php
        $kemampuan->selisih();
		?>
		
		<h5 class="card-title mt-4">Tabel Pembobotan Nilai GAP dan Perhitungan Factor</h5>
		<?php
        $kemampuan->factor();
		?>
    </div>
</div>
<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Hasil Aspek Kegiatan</h6>
    </div>

    <div class="card-body">
		<h5 class="card-title">Tabel Nilai Kriteria Penilaian</h5>
        <?php
        $kegiatan->tampil();
		?>
		
		<h5 class="card-title mt-4">Tabel Pemetaan GAP</h5>
		<?php
        $kegiatan->selisih();
		?>
		
		<h5 class="card-title mt-4">Tabel Pembobotan Nilai GAP dan Perhitungan Factor</h5>
		<?php
        $kegiatan->factor();
		?>
    </div>
</div>
<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Hasil Aspek Ekskul</h6>
    </div>

    <div class="card-body">
		<h5 class="card-title">Tabel Nilai Kriteria Penilaian</h5>
        <?php
        $ekskul->tampil();
		?>
		
		<h5 class="card-title mt-4">Tabel Pemetaan GAP</h5>
		<?php
        $ekskul->selisih();
		?>
		
		<h5 class="card-title mt-4">Tabel Pembobotan Nilai GAP dan Perhitungan Factor</h5>
		<?php
        $ekskul->factor();
		?>
    </div>
</div>
<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Hasil Aspek Sikap</h6>
    </div>

    <div class="card-body">
		<h5 class="card-title">Tabel Nilai Kriteria Penilaian</h5>
        <?php
        $sikap->tampil();
		?>
		
		<h5 class="card-title mt-4">Tabel Pemetaan GAP</h5>
		<?php
        $sikap->selisih();
		?>
		
		<h5 class="card-title mt-4">Tabel Pembobotan Nilai GAP dan Perhitungan Factor</h5>
		<?php
        $sikap->factor();
		?>
    </div>
</div>
<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Hasil Aspek Prestasi</h6>
    </div>

    <div class="card-body">
		<h5 class="card-title">Tabel Nilai Kriteria Penilaian</h5>
        <?php
        $prestasi->tampil();
		?>
		
		<h5 class="card-title mt-4">Tabel Pemetaan GAP</h5>
		<?php
        $prestasi->selisih();
		?>
		
		<h5 class="card-title mt-4">Tabel Pembobotan Nilai GAP dan Perhitungan Factor</h5>
		<?php
        $prestasi->factor();
		?>
    </div>
</div>
<div class="card shadow mb-4">
  <h1> Pilih Angkatan Siswa </h1>
    <form method="post"> 
      <div class="col-lg-4  col-6">
        <div class="form-group">
          <div class="form-line">
                    <!-- <select class="form-control" name="barang">
                    <option value="">Pilih Nama Barang </option>

                              
									<option value="sendal">sendal</option>
                                    <option value="sepatu">sepatu</option>

							</select> -->
        <?php $years = range(2020, strftime("%Y", time())); ?>
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
    <!-- /.card-header -->
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Hasil Akhir Perankingan</h6>
		
		<!-- <a href="cetak.php" target="_blank" class="btn btn-success"> <i class="fa fa-print"></i> Cetak Hasil </a> -->
    </div>

    <div class="card-body">
		<?php
        include_once "database.php";
        $db = new database();
        $kon = $db->connect();
      ?>
		<!-- ambil data persentase -->
          <?php
            $qpersen    = $kon->query("select distinct persentase from pm_aspek where id_aspek = 'A001'");
            $dtpersen   = $qpersen->fetch_array();
            $persen     = $dtpersen['persentase'];

            $qpersen2   = $kon->query("select distinct persentase from pm_aspek where id_aspek = 'A002'");
            $dtpersen2  = $qpersen2->fetch_array();
            $persen2    = $dtpersen2['persentase'];

            $qpersen3   = $kon->query("select distinct persentase from pm_aspek where id_aspek = 'A003'");
            $dtpersen3  = $qpersen3->fetch_array();
            $persen3    = $dtpersen3['persentase'];

            $qpersen4   = $kon->query("select distinct persentase from pm_aspek where id_aspek = 'A004'");
            $dtpersen4  = $qpersen4->fetch_array();
            $persen4    = $dtpersen4['persentase'];

            $qpersen5  = $kon->query("select distinct persentase from pm_aspek where id_aspek = 'A005'");
            $dtpersen5  = $qpersen5->fetch_array();
            $persen5    = $dtpersen5['persentase'];

            $qpersen6   = $kon->query("select distinct persentase from pm_aspek where id_aspek = 'A006'");
            $dtpersen6  = $qpersen6->fetch_array();
            $persen6    = $dtpersen6['persentase'];
          ?>

    <table class="table table-bordered" width="100%" cellspacing="0">
    <thead class="bg-info text-white">
    <tr align="center">
      <th width="5%">No</th>
      <th width="20%">Nis</th>
      <th width="20%">Nama Siswa</th>
      <th width="22%">Nilai Penilaian<br/> <?php echo $persen; ?> %</th>
      <th width="18%">Nilai Kemampuan <br/> <?php echo $persen2; ?> %</th>
      <th width="18%">Nilai Kegiatan <br/> <?php echo $persen3; ?> %</th>
      <th width="18%">Nilai Kegiatan <br/> <?php echo $persen4; ?> %</th>
      <th width="18%">Nilai Kegiatan <br/> <?php echo $persen5; ?> %</th>
      <th width="18%">Nilai Kegiatan <br/> <?php echo $persen6; ?> %</th>
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

            $query = "SELECT user.id_user, user.nama_lengkap, user.hak_akses, user.angkatan,user.nis,
						pm_penilaian.nilai_tot_A1 as PE, 
            pm_kemampuan.nilai_tot_A2 as KE,
            pm_kegiatan.nilai_tot_A3 as KEG,
            pm_ekskul.nilai_tot_A4 as EKS,
            pm_sikap.nilai_tot_A5 as SIK,
            pm_prestasi.nilai_tot_A6 as PRE,

						(((pm_penilaian.nilai_tot_A1*$persen)/100)
            +((pm_kemampuan.nilai_tot_A2*$persen2)/100)
            +((pm_ekskul.nilai_tot_A4*$persen4)/100)
            +((pm_sikap.nilai_tot_A5*$persen5)/100)
            +((pm_prestasi.nilai_tot_A6*$persen6)/100)
            +((pm_kegiatan.nilai_tot_A3*$persen3)/100)) as Total
						FROM user 
						LEFT JOIN pm_penilaian ON user.id_user = pm_penilaian.id_user
						LEFT JOIN pm_kemampuan ON user.id_user = pm_kemampuan.id_user
            LEFT JOIN pm_kegiatan ON user.id_user = pm_kegiatan.id_user
            LEFT JOIN pm_ekskul ON user.id_user = pm_ekskul.id_user
            LEFT JOIN pm_sikap ON user.id_user = pm_sikap.id_user
            LEFT JOIN pm_prestasi ON user.id_user = pm_prestasi.id_user

						where  user.angkatan LIKE '%$angkatan%' AND user.hak_akses = 'siswa' ORDER BY Total DESC";
            $hasil = $kon->query("$query");

            $no = 1;
            while ($row = $hasil->fetch_array()) {
            $id_user    = $row['id_user'];
            $nama_lengkap  = $row['nama_lengkap'];
            $nis  = $row['nis'];

            echo '
            <tr>
              <td style="text-align: center">'.$no.'</td>
              <td style="text-align: center">'.$nis.'</td>
              
              <td>'.$nama_lengkap.'</td>
            ';

            echo '<td style="text-align: center">'.$row['PE'].'</td>';
            echo '<td style="text-align: center">'.$row['KE'].'</td>';
            echo '<td style="text-align: center">'.$row['KEG'].'</td>';
            echo '<td style="text-align: center">'.$row['EKS'].'</td>';
            echo '<td style="text-align: center">'.$row['SIK'].'</td>';
            echo '<td style="text-align: center">'.$row['PRE'].'</td>';
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

