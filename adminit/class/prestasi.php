<?php

class prestasi {

	function tampil() {

	require_once "database.php";
	$db = new database();
	$kon = $db->connect();

  $query = $kon->query("SELECT * FROM pm_prestasi, user where pm_prestasi.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-info text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th width="20%">Nama Siswa</th>
					<th width="15%">akademik</th>
					<th width="15%">non akademik</th>
				</tr>
			</thead>

			<tbody>';
				$no = 1;
				while ($row = $query->fetch_array()) {

				echo '
						<tr>
							<td style="text-align: center">'.$no.'</td>
							<td>'.$row["nama_lengkap"].'</td>
							<td style="text-align: center">'.$row["nilai_akademik"].'</td>
							<td style="text-align: center">'.$row["nilai_nonakademik"].'</td>
							
						</tr>';
				$no++;
				$target_akademik  = $row["target_akademik"];
				$target_nonakademik = $row["target_nonakademik"];
			}
					echo '
					</tbody>
					<tfoot>
						<tr align="center">
							<th colspan="2">Nilai Target</th>
							<th>'.$target_akademik.'</th>
							<th>'.$target_nonakademik.'</th>
						</tr>
					</tfoot>
				</table>
				';
	}

	function input($angkatan, $id_user, 
	$nilai_akademik, $target_akademik, $selisih_akademik, $nilai_bobot_akademik, 
    $nilai_nonakademik, $target_nonakademik, $selisih_nonakademik, $nilai_bobot_nonakademik,
	$nilai_cf_A6, $nilai_sf_A6, $nilai_tot_A6)
	{
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$query = "INSERT INTO pm_prestasi (angkatan, id_user, 
		nilai_akademik, target_akademik, selisih_akademik, nilai_bobot_akademik, 
		nilai_nonakademik, target_nonakademik, selisih_nonakademik, nilai_bobot_nonakademik,
		nilai_cf_A6, nilai_sf_A6, nilai_tot_A6)
						 VALUES ('$angkatan', '$id_user', '$nilai_akademik',
                                         '$target_akademik', '$selisih_akademik','$nilai_bobot_akademik',
							 			 '$nilai_nonakademik', '$target_nonakademik', '$selisih_nonakademik', '$nilai_bobot_nonakademik',
									 	 '$nilai_cf_A6', '$nilai_sf_A6', '$nilai_tot_A6')";
			$simpan = $kon->query("$query");
			if (!$simpan) {
				printf("Errormessage: %s\n", $kon->error);
			 }
			if($simpan) {
				echo"<script>alert('Data Berhasil Ditambahkan'); window.location='?m=hasil';</script>";
				echo "berhasil";
			}
			else {
				echo"<script>alert('Gagal Menambahkan Data'); window.location='?m=inputnilai_keg';</script>";
				echo "gagal";
				}
		
	}

	function selisih() {

	require_once "database.php";
	$db = new database();
	$kon = $db->connect();

  $query = $kon->query("SELECT * FROM pm_prestasi, user where pm_prestasi.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-info text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th width="20%">Nama Siswa</th>
					<th width="15%">Akademik</th>
					<th width="20%">Non Akademik</th>
				</tr>
			</thead>

			<tbody>';
				$no = 1;
				while ($row = $query->fetch_array()) {

				echo '
						<tr>
							<td style="text-align: center">'.$no.'</td>
							<td>'.$row["nama_lengkap"].'</td>
							<td style="text-align: center">'.$row["selisih_akademik"].'</td>
							<td style="text-align: center">'.$row["selisih_nonakademik"].'</td>
						</tr>';
								$no++;
					}
					echo '
					</tbody>
				</table>
				';
	}

	function factor() {

	require_once "database.php";
	$db = new database();
	$kon = $db->connect();

  $query = $kon->query("SELECT * FROM pm_prestasi, user where pm_prestasi.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-info text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th width="18%">Nama Siswa</th>
					<th width="8%">Akademik</th>
					<th width="12%">Non Akademik</th>
					<th width="7%">Nilai CF (60%)</th>
					<th width="7%">Nilai SF (40%)</th>
					<th width="7%">Nilai Total</th>
				</tr>
			</thead>

			<tbody>';
				$no = 1;
				while ($row = $query->fetch_array()) {

				echo '
						<tr>
							<td style="text-align: center">'.$no.'</td>
							<td>'.$row["nama_lengkap"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_akademik"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_nonakademik"].'</td>
							<td style="text-align: center">'.round($row["nilai_cf_A6"],2).'</td>
							<td style="text-align: center">'.round($row["nilai_sf_A6"],2).'</td>
							<td style="text-align: center">'.round($row["nilai_tot_A6"],2).'</td>
						</tr>';
					$no++;
				}
				$qkriteria_core = $kon->query("select distinct jenis from pm_kriteria where kdkriteria = 'AKDM'");
				$dtcore = $qkriteria_core->fetch_array();
				$jenis_core = $dtcore['jenis'];

				$qkriteria_sec = $kon->query("select distinct jenis from pm_kriteria where kdkriteria = 'NAKD'");
				$dtsec = $qkriteria_sec->fetch_array();
				$jenis_sec = $dtsec['jenis'];

					echo '
					</tbody>
					<tfoot>
						<tr align="center">
							<th colspan="2">Jenis Factor</th>
							<th>'.$jenis_sec.'</th>
							<th>'.$jenis_core.'</th>
							<th>'.$jenis_core.'</th>
						</tr>
					</tfoot>
				</table>
				';
	}

	function update($kdnilai2, $id_user, 
									$nilai_tg, $target_tg, $selisih_tg,$nilai_bobot_tg, 
									$nilai_nonakademik, $target_nonakademik, $selisih_nonakademik,$nilai_bobot_nonakademik, 
									$nilai_orgpmi, $target_orgpmi, $selisih_orgpmi,$nilai_bobot_orgpmi,
									$nilai_cf_A6, $nilai_sf_A6, $nilai_tot_A6)
	{
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$query = "UPDATE pm_prestasi SET id_user='$id_user', nilai_tg='$nilai_tg',
							target_tg='$target_tg', selisih_tg='$selisih_tg', nilai_bobot_tg='$nilai_bobot_tg',
							nilai_nonakademik='$nilai_nonakademik', target_nonakademik='$target_nonakademik', selisih_nonakademik='$selisih_nonakademik', nilai_bobot_nonakademik='$nilai_bobot_nonakademik',
							nilai_orgpmi='$nilai_orgpmi', target_orgpmi='$target_orgpmi', selisih_orgpmi='$selisih_orgpmi', nilai_bobot_orgpmi='$nilai_bobot_orgpmi',
							nilai_cf_A6='$nilai_cf_A6', nilai_sf_A6='$nilai_sf_A6', nilai_tot_A6='$nilai_tot_A6'
							WHERE kdnilai2 = '$kdnilai2'";
		$update = $kon->query("$query");

		if($update) {
			echo"<script>alert('Data Berhasil Diperbarui'); window.location='?m=hasil';</script>";
		}
			else {
				echo"<script>alert('Gagal Memperbarui Data'); window.location='?m=hasil';</script>";
			}
		}
}
?>
