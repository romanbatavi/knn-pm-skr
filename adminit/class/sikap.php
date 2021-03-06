<?php

class sikap {

	function tampil() {

	require_once "database.php";
	$db = new database();
	$kon = $db->connect();

  $query = $kon->query("SELECT * FROM pm_sikap, user where pm_sikap.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-info text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th width="20%">Nama Siswa</th>
					<th width="15%">kedisiplinan</th>
					<th width="15%">perilaku</th>
					<th width="15%">kerajinan</th>

				</tr>
			</thead>

			<tbody>';
				$no = 1;
				while ($row = $query->fetch_array()) {

				echo '
						<tr>
							<td style="text-align: center">'.$no.'</td>
							<td>'.$row["nama_lengkap"].'</td>
							<td style="text-align: center">'.$row["nilai_disiplin"].'</td>
							<td style="text-align: center">'.$row["nilai_prilaku"].'</td>
							<td style="text-align: center">'.$row["nilai_kerajinan"].'</td>
							
						</tr>';
				$no++;
				$target_disiplin  = $row["target_disiplin"];
				$target_prilaku = $row["target_prilaku"];
				$target_kerajinan  = $row["target_kerajinan"];
			}
					echo '
					</tbody>
					<tfoot>
						<tr align="center">
							<th colspan="2">Nilai Target</th>
							<th>'.$target_disiplin.'</th>
							<th>'.$target_prilaku.'</th>
							<th>'.$target_kerajinan.'</th>
						</tr>
					</tfoot>
				</table>
				';
	}

	function input($angkatan, $id_user, 
	$nilai_disiplin, $target_disiplin, $selisih_disiplin, $nilai_bobot_disiplin, 
    $nilai_prilaku, $target_prilaku, $selisih_prilaku, $nilai_bobot_prilaku,
    $nilai_kerajinan, $target_kerajinan, $selisih_kerajinan, $nilai_bobot_kerajinan,
	$nilai_cf_A5, $nilai_sf_A5, $nilai_tot_A5)
	{
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$query = "INSERT INTO pm_sikap (angkatan, id_user, 
		nilai_disiplin, target_disiplin, selisih_disiplin, nilai_bobot_disiplin, 
		nilai_prilaku, target_prilaku, selisih_prilaku, nilai_bobot_prilaku,
		nilai_kerajinan, target_kerajinan, selisih_kerajinan, nilai_bobot_kerajinan, 
		nilai_cf_A5, nilai_sf_A5, nilai_tot_A5)
						 VALUES ('$angkatan', '$id_user', '$nilai_disiplin',
                                         '$target_disiplin', '$selisih_disiplin','$nilai_bobot_disiplin',
							 			 '$nilai_prilaku', '$target_prilaku', '$selisih_prilaku', '$nilai_bobot_prilaku',
							 		 	 '$nilai_kerajinan', '$target_kerajinan', '$selisih_kerajinan', '$nilai_bobot_kerajinan',
									 	 '$nilai_cf_A5', '$nilai_sf_A5', '$nilai_tot_A5')";
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

  $query = $kon->query("SELECT * FROM pm_sikap, user where pm_sikap.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-info text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th width="20%">Nama Siswa</th>
					<th width="15%">kedisiplinan</th>
					<th width="15%">perilaku</th>
					<th width="15%">kerajinan</th>
				</tr>
			</thead>

			<tbody>';
				$no = 1;
				while ($row = $query->fetch_array()) {

				echo '
						<tr>
							<td style="text-align: center">'.$no.'</td>
							<td>'.$row["nama_lengkap"].'</td>
							<td style="text-align: center">'.$row["selisih_disiplin"].'</td>
							<td style="text-align: center">'.$row["selisih_prilaku"].'</td>
							<td style="text-align: center">'.$row["selisih_kerajinan"].'</td>
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

  $query = $kon->query("SELECT * FROM pm_sikap, user where pm_sikap.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-info text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th width="18%">Nama Siswa</th>
					<th width="15%">kedisiplinan</th>
					<th width="15%">perilaku</th>
					<th width="15%">kerajinan</th>
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
							<td style="text-align: center">'.$row["nilai_bobot_disiplin"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_prilaku"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_kerajinan"].'</td>
							<td style="text-align: center">'.round($row["nilai_cf_A5"],2).'</td>
							<td style="text-align: center">'.round($row["nilai_sf_A5"],2).'</td>
							<td style="text-align: center">'.round($row["nilai_tot_A5"],2).'</td>
						</tr>';
					$no++;
				}
				$qkriteria_core = $kon->query("select distinct jenis from pm_kriteria where kdkriteria = 'KRJ' ");
				$dtcore = $qkriteria_core->fetch_array();
				$jenis_core = $dtcore['jenis'];

				$qkriteria_sec = $kon->query("select distinct jenis from pm_kriteria where kdkriteria = 'KD' or kdkriteria = 'PRL'");
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
									$nilai_prilaku, $target_prilaku, $selisih_prilaku,$nilai_bobot_prilaku, 
									$nilai_kerajinan, $target_kerajinan, $selisih_kerajinan,$nilai_bobot_kerajinan,
									$nilai_cf_A5, $nilai_sf_A5, $nilai_tot_A5)
	{
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$query = "UPDATE pm_sikap SET id_user='$id_user', nilai_tg='$nilai_tg',
							target_tg='$target_tg', selisih_tg='$selisih_tg', nilai_bobot_tg='$nilai_bobot_tg',
							nilai_prilaku='$nilai_prilaku', target_prilaku='$target_prilaku', selisih_prilaku='$selisih_prilaku', nilai_bobot_prilaku='$nilai_bobot_prilaku',
							nilai_kerajinan='$nilai_kerajinan', target_kerajinan='$target_kerajinan', selisih_kerajinan='$selisih_kerajinan', nilai_bobot_kerajinan='$nilai_bobot_kerajinan',
							nilai_cf_A5='$nilai_cf_A5', nilai_sf_A5='$nilai_sf_A5', nilai_tot_A5='$nilai_tot_A5'
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
