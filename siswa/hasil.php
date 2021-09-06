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
								<h3 class="portlet-title">Data Hasil Akhir</h3>
							</div>
							<div class="portlet-body">
								<!-- <p>
									In this example you can see Datatable doing both horizontal and vertical scrolling at the same time. To enable y-scrolling or x-scrolling simply set the <code>scrollY|scrollX</code> parameter to be whatever you want the container wrapper's height or width.
								</p>
								<hr> -->
<div class="card shadow mb-4">
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

            

          ?>
		  
      <table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-info text-white">
                <tr align="center">
  					<th width="5%">No</th>
            <th width="5%">Nis</th>
  					<th width="20%">Nama Pegawai</th>
  					<th width="22%">Nilai Penilaian<br/> <?php echo $persen; ?> %</th>
  					<th width="18%">Nilai Kemampuan <br/> <?php echo $persen2; ?> %</th>
					<th width="10%">Total</th>
  					<th width="15%">Ranking</th>
  				</tr>
          
        </thead>

        <tbody>
          <?php
            $query = "SELECT user.id_user, user.nama_lengkap, user.hak_akses,user.nis,
						pm_penilaian.nilai_tot_A1 as PE, pm_kemampuan.nilai_tot_A2 as KE,
						(((pm_penilaian.nilai_tot_A1*$persen)/100)+((pm_kemampuan.nilai_tot_A2*$persen2)/100)) as Total
						FROM user
						LEFT JOIN pm_penilaian ON user.id_user = pm_penilaian.id_user
						LEFT JOIN pm_kemampuan ON user.id_user = pm_kemampuan.id_user
						where user.hak_akses = 'siswa' ORDER BY Total DESC";
            $hasil = $kon->query("$query");

            $no = 1;
            while ($row = $hasil->fetch_array()) {
            $id_user    = $row['id_user'];
            $nama_lengkap  = $row['nama_lengkap'];
            $nis  = $row['nis'];

            echo '
            <tr>
              <td style="text-align: center">'.$no.'</td>
              <td>'.$nis.'</td>
              <td>'.$nama_lengkap.'</td>
            ';

              echo '<td style="text-align: center">'.$row['PE'].'</div></td>';
      			  echo '<td style="text-align: center">'.$row['KE'].'</td>';
      			  echo '<td style="text-align: center">'.number_format((float)$row['Total'], 2, '.', '').'</td>';
      			  echo '<td style="text-align: center">'.$no.'</td>';

            $no++;
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