<?php

class kegiatan {

	function tampil() {

	require_once "database.php";
	$db = new database();
	$kon = $db->connect();

  $query = $kon->query("SELECT * FROM pm_kegiatan, user where pm_kegiatan.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-info text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th width="20%">Nama Siswa</th>
					<th width="15%">Organisasi Sosial</th>
					<th width="15%">Organisasi Keagamaan</th>
					<th width="15%">Organisasi PMI</th>
					<th width="15%">Organisasi OSIS</th>

				</tr>
			</thead>

			<tbody>';
				$no = 1;
				while ($row = $query->fetch_array()) {

				echo '
						<tr>
							<td style="text-align: center">'.$no.'</td>
							<td>'.$row["nama_lengkap"].'</td>
							<td style="text-align: center">'.$row["nilai_orgsos"].'</td>
							<td style="text-align: center">'.$row["nilai_orgagama"].'</td>
							<td style="text-align: center">'.$row["nilai_orgpmi"].'</td>
							<td style="text-align: center">'.$row["nilai_orgosisi"].'</td>

							
						</tr>';
				$no++;
				$target_orgsos  = $row["target_orgsos"];
				$target_orgagama = $row["target_orgagama"];
				$target_orgpmi  = $row["target_orgpmi"];
				$target_orgosisi  = $row["target_orgosisi"];

			}
					echo '
					</tbody>
					<tfoot>
						<tr align="center">
							<th colspan="2">Nilai Target</th>
							<th>'.$target_orgsos.'</th>
							<th>'.$target_orgagama.'</th>
							<th>'.$target_orgpmi.'</th>
							<th>'.$target_orgosisi.'</th>

						</tr>
					</tfoot>
				</table>
				';
	}

	function input($angkatan, $id_user, 
	$nilai_orgsos, $target_orgsos, $selisih_orgsos, $nilai_bobot_orgsos, 
    $nilai_orgagama, $target_orgagama, $selisih_orgagama, $nilai_bobot_orgagama,
    $nilai_orgpmi, $target_orgpmi, $selisih_orgpmi, $nilai_bobot_orgpmi,
    $nilai_orgosisi, $target_orgosisi, $selisih_orgosisi, $nilai_bobot_orgosisi,
	$nilai_cf_A3, $nilai_sf_A3, $nilai_tot_A3)
	{
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$query = "INSERT INTO pm_kegiatan (angkatan, id_user, 
		nilai_orgsos, target_orgsos, selisih_orgsos, nilai_bobot_orgsos, 
		nilai_orgagama, target_orgagama, selisih_orgagama, nilai_bobot_orgagama,
		nilai_orgpmi, target_orgpmi, selisih_orgpmi, nilai_bobot_orgpmi,
		nilai_orgosisi, target_orgosisi, selisih_orgosisi, nilai_bobot_orgosisi,  
		nilai_cf_A3, nilai_sf_A3, nilai_tot_A3)
						 VALUES ('$angkatan', '$id_user', '$nilai_orgsos',
                                         '$target_orgsos', '$selisih_orgsos','$nilai_bobot_orgsos',
							 			 '$nilai_orgagama', '$target_orgagama', '$selisih_orgagama', '$nilai_bobot_orgagama',
							 		 	 '$nilai_orgpmi', '$target_orgpmi', '$selisih_orgpmi', '$nilai_bobot_orgpmi',
										 '$nilai_orgosisi', '$target_orgosisi', '$selisih_orgosisi', '$nilai_bobot_orgosisi',
									 	 '$nilai_cf_A3', '$nilai_sf_A3', '$nilai_tot_A3')";
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

  $query = $kon->query("SELECT * FROM pm_kegiatan, user where pm_kegiatan.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-info text-white">
			<tr align="center">
			<th width="5%">No</th>
			<th width="20%">Nama Siswa</th>
			<th width="15%">Organisasi Sosial</th>
			<th width="15%">Organisasi Keagamaan</th>
			<th width="15%">Organisasi PMI</th>
			<th width="15%">Organisasi OSIS</th>

		</tr>
			</thead>

			<tbody>';
				$no = 1;
				while ($row = $query->fetch_array()) {

				echo '
				<tr>
				<td style="text-align: center">'.$no.'</td>
				<td>'.$row["nama_lengkap"].'</td>
				<td style="text-align: center">'.$row["selisih_orgsos"].'</td>
				<td style="text-align: center">'.$row["selisih_orgagama"].'</td>
				<td style="text-align: center">'.$row["selisih_orgpmi"].'</td>
				<td style="text-align: center">'.$row["selisih_orgosisi"].'</td>

				
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

  $query = $kon->query("SELECT * FROM pm_kegiatan, user where pm_kegiatan.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-info text-white">
                <tr align="center">
				<th width="5%">No</th>
				<th width="18%">Nama Siswa</th>
				<th width="15%">Organisasi Sosial</th>
				<th width="15%">Organisasi Keagamaan</th>
				<th width="15%">Organisasi PMI</th>
				<th width="15%">Organisasi OSIS</th>
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
							<td style="text-align: center">'.$row["nilai_bobot_orgsos"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_orgagama"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_orgpmi"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_orgosisi"].'</td>
							<td style="text-align: center">'.round($row["nilai_cf_A3"],2).'</td>
							<td style="text-align: center">'.round($row["nilai_sf_A3"],2).'</td>
							<td style="text-align: center">'.round($row["nilai_tot_A3"],2).'</td>
						</tr>';
					$no++;
				}
				$qkriteria_core = $kon->query("select distinct jenis from pm_kriteria where kdkriteria = 'OSIS' or kdkriteria = 'ORGP'");
				$dtcore = $qkriteria_core->fetch_array();
				$jenis_core = $dtcore['jenis'];

				$qkriteria_sec = $kon->query("select distinct jenis from pm_kriteria where kdkriteria = 'ORGK' or kdkriteria = 'ORGS'");
				$dtsec = $qkriteria_sec->fetch_array();
				$jenis_sec = $dtsec['jenis'];

					echo '
					</tbody>
					<tfoot>
						<tr align="center">
							<th colspan="2">Jenis Factor</th>
							<th>'.$jenis_sec.'</th>
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
									$nilai_orgagama, $target_orgagama, $selisih_orgagama,$nilai_bobot_orgagama, 
									$nilai_orgpmi, $target_orgpmi, $selisih_orgpmi,$nilai_bobot_orgpmi,
									$nilai_cf_A3, $nilai_sf_A3, $nilai_tot_A3)
	{
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$query = "UPDATE pm_kegiatan SET id_user='$id_user', nilai_tg='$nilai_tg',
							target_tg='$target_tg', selisih_tg='$selisih_tg', nilai_bobot_tg='$nilai_bobot_tg',
							nilai_orgagama='$nilai_orgagama', target_orgagama='$target_orgagama', selisih_orgagama='$selisih_orgagama', nilai_bobot_orgagama='$nilai_bobot_orgagama',
							nilai_orgpmi='$nilai_orgpmi', target_orgpmi='$target_orgpmi', selisih_orgpmi='$selisih_orgpmi', nilai_bobot_orgpmi='$nilai_bobot_orgpmi',
							nilai_cf_A3='$nilai_cf_A3', nilai_sf_A3='$nilai_sf_A3', nilai_tot_A3='$nilai_tot_A3'
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
