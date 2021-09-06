<?php

class penilaian {

	function tampil() {

	require_once "database.php";
	$db = new database();
	$kon = $db->connect();

  $query = $kon->query("SELECT * FROM pm_penilaian, user where pm_penilaian.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-info text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th width="20%">Nama Siswa</th>
					<th width="14%">Ilmu Pengetahuan Sosial</th>
					<th>Ilmu Pengetahuan Alam</th>
					<th width="12%">Pendidikan Kewarganegaraan</th>
					<th width="10%">Bahasa Indonesia</th>
					<th width="12%">Matematika</th>
					<th width="12%">Bahasa Inggris</th>
					<th width="12%">Pend Agama Islam</th>
					<th width="12%">Aksi</th>

				</tr>
			</thead>

			<tbody>';
				$no = 1;
				while ($row = $query->fetch_array()) {

				echo '
						<tr>
							<td style="text-align: center">'.$no.'</td>
							<td>'.$row["nama_lengkap"].'</td>
							<td style="text-align: center">'.$row["nilai_ips"].'</td>
							<td style="text-align: center">'.$row["nilai_ipa"].'</td>
							<td style="text-align: center">'.$row["nilai_pkn"].'</td>
							<td style="text-align: center">'.$row["nilai_bind"].'</td>
							<td style="text-align: center">'.$row["nilai_mtk"].'</td>
							<td style="text-align: center">'.$row["nilai_bing"].'</td>
							<td style="text-align: center">'.$row["nilai_rrt"].'</td>
							<td style="text-align: center">
								<a href="?m=editnilai_pe&kdnilai1='.$row['kdnilai1'].'" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
							</td>

						</tr>';
								$no++;
								$target_ips = $row["target_ips"];
								$target_ipa = $row["target_ipa"];
								$target_pkn = $row["target_pkn"];
								$target_bind = $row["target_bind"];
								$target_mtk = $row["target_mtk"];
								$target_bing = $row["target_bing"];
								$target_rrt = $row["target_rrt"];
					}
					echo '
					</tbody>
					<tfoot>
						<tr align="center">
							<th colspan="2">Nilai Target</th>
							<th>'.$target_ips.'</th>
							<th>'.$target_ipa.'</th>
							<th>'.$target_pkn.'</th>
							<th>'.$target_bind.'</th>
							<th>'.$target_mtk.'</th>
							<th>'.$target_bing.'</th>
							<th>'.$target_rrt.'</th>
						</tr>
					</tfoot>
				</table>
				';
	}

	function input($angkatan, $id_user, $nilai_ips, $target_ips, $selisih_ips, $nilai_bobot_ips,
								 $nilai_ipa, $target_ipa, $selisih_ipa, $nilai_bobot_ipa,
								 $nilai_pkn, $target_pkn, $selisih_pkn, $nilai_bobot_pkn,
								 $nilai_bind, $target_bind, $selisih_bind, $nilai_bobot_bind,
								 $nilai_mtk, $target_mtk, $selisih_mtk, $nilai_bobot_mtk,
								 $nilai_bing, $target_bing, $selisih_bing, $nilai_bobot_bing,
								 $nilai_rrt, $target_rrt, $selisih_rrt, $nilai_bobot_rrt,
								 $nilai_cf_A1, $nilai_sf_A1, $nilai_tot_A1)
	{
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$query = "INSERT INTO pm_penilaian (angkatan, id_user, nilai_ips, target_ips, selisih_ips, nilai_bobot_ips,
																										 nilai_ipa, target_ipa, selisih_ipa, nilai_bobot_ipa,
																										 nilai_pkn, target_pkn, selisih_pkn, nilai_bobot_pkn,
																										 nilai_bind, target_bind, selisih_bind, nilai_bobot_bind,
																										 nilai_mtk, target_mtk, selisih_mtk, nilai_bobot_mtk,
																										 nilai_bing, target_bing, selisih_bing, nilai_bobot_bing,
																										 nilai_rrt, target_rrt, selisih_rrt, nilai_bobot_rrt,
																									 	 nilai_cf_A1, nilai_sf_A1, nilai_tot_A1)
						 VALUES ('$angkatan','$id_user','$nilai_ips','$target_ips','$selisih_ips','$nilai_bobot_ips',
																  '$nilai_ipa','$target_ipa','$selisih_ipa','$nilai_bobot_ipa',
																  '$nilai_pkn','$target_pkn','$selisih_pkn','$nilai_bobot_pkn',
															 	  '$nilai_bind','$target_bind','$selisih_bind','$nilai_bobot_bind',
																	'$nilai_mtk','$target_mtk','$selisih_mtk','$nilai_bobot_mtk',
																	'$nilai_bing','$target_bing','$selisih_bing','$nilai_bobot_bing',
																	'$nilai_rrt','$target_rrt','$selisih_rrt','$nilai_bobot_rrt',
																	'$nilai_cf_A1','$nilai_sf_A1','$nilai_tot_A1')";
			$simpan = $kon->query("$query");

			if($simpan) {
				echo"<script>alert('Data Berhasil Ditambahkan'); window.location='?m=hasil';</script>";
			}
			else {
				echo"<script>alert('Gagal Menambahkan Data'); window.location='?m=inputnilai_pe';</script>";
				}
		
	}

	function update($kdnilai1, $id_user, $nilai_ips, $target_ips, $selisih_ips, $nilai_bobot_ips,
								 $nilai_ipa, $target_ipa, $selisih_ipa, $nilai_bobot_ipa,
								 $nilai_pkn, $target_pkn, $selisih_pkn, $nilai_bobot_pkn,
								 $nilai_bind, $target_bind, $selisih_bind, $nilai_bobot_bind,
								 $nilai_mtk, $target_mtk, $selisih_mtk, $nilai_bobot_mtk,
								 $nilai_bing, $target_bing, $selisih_bing, $nilai_bobot_bing,
								 $nilai_rrt, $target_rrt, $selisih_rrt, $nilai_bobot_rrt,
								 $nilai_cf_A1, $nilai_sf_A1, $nilai_tot_A1)
	{
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$query = "UPDATE pm_penilaian SET id_user='$id_user',
							nilai_ips='$nilai_ips', target_ips='$target_ips', selisih_ips='$selisih_ips', nilai_bobot_ips='$nilai_bobot_ips',
							nilai_ipa='$nilai_ipa', target_ipa='$target_ipa', selisih_ipa='$selisih_ipa', nilai_bobot_ipa='$nilai_bobot_ipa',
							nilai_pkn='$nilai_pkn', target_pkn='$target_pkn', selisih_pkn='$selisih_pkn', nilai_bobot_pkn='$nilai_bobot_pkn',
							nilai_bind='$nilai_bind', target_bind='$target_bind', selisih_bind='$selisih_bind', nilai_bobot_bind='$nilai_bobot_bind',
							nilai_mtk='$nilai_mtk', target_mtk='$target_mtk', selisih_mtk='$selisih_mtk', nilai_bobot_mtk='$nilai_bobot_mtk',
							nilai_bing='$nilai_bing', target_bing='$target_bing', selisih_bing='$selisih_bing', nilai_bobot_bing='$nilai_bobot_bing',
							nilai_rrt='$nilai_rrt', target_rrt='$target_rrt', selisih_rrt='$selisih_rrt', nilai_bobot_rrt='$nilai_bobot_rrt',
							nilai_cf_A1='$nilai_cf_A1', nilai_sf_A1='$nilai_sf_A1', nilai_tot_A1='$nilai_tot_A1'
							WHERE kdnilai1 = '$kdnilai1'";
		$update = $kon->query("$query");

		if($update) {
				echo"<script>alert('Data Berhasil Diperbarui'); window.location='?m=hasil';</script>";
			}
			else {
				echo"<script>alert('Gagal Memperbarui Data'); window.location='?m=hasil';</script>";
			}
	}

	function selisih() {

	require_once "database.php";
	$db = new database();
	$kon = $db->connect();

  $query = $kon->query("SELECT * FROM pm_penilaian, user where pm_penilaian.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-info text-white">
                <tr align="center">
				<th width="5%">No</th>
				<th width="20%">Nama Siswa</th>
				<th width="14%">Ilmu Pengetahuan Sosial</th>
				<th>Ilmu Pengetahuan Alam</th>
				<th>Pendidikan Kewarganegaraan</th>
				<th width="10%">Bahasa Indonesia</th>
				<th width="15%">Matematika</th>
				<th width="15%">Bahasa Inggris</th>
				<th width="15%">Pend Agama Islam</th>
				</tr>
			</thead>

			<tbody>';
				$no = 1;
				while ($row = $query->fetch_array()) {

				echo '
						<tr>
							<td style="text-align: center">'.$no.'</td>
							<td>'.$row["nama_lengkap"].'</td>
							<td style="text-align: center">'.$row["selisih_ips"].'</td>
							<td style="text-align: center">'.$row["selisih_ipa"].'</td>
							<td style="text-align: center">'.$row["selisih_pkn"].'</td>
							<td style="text-align: center">'.$row["selisih_bind"].'</td>
							<td style="text-align: center">'.$row["selisih_mtk"].'</td>
							<td style="text-align: center">'.$row["selisih_bing"].'</td>
							<td style="text-align: center">'.$row["selisih_rrt"].'</td>
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

  $query = $kon->query("SELECT * FROM pm_penilaian, user WHERE pm_penilaian.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-info text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th width="17%">Nama Siswa</th>
					<th>Ilmu Pengetahuan Sosial</th>
					<th>Ilmu Pengetahuan Alam</th>
					<th>Pendidikan Kewarganegaraan</th>
					<th>Bahasa Indonesia</th>
					<th>Matematika</th>
					<th>Bahasa Inggris</th>
					<th>Pend Agama Islam</th>
					<th width="8%">Nilai CF (60%)</th>
					<th width="8%">Nilai SF (40%)</th>
					<th width="8%">Nilai Total</th>
				</tr>
			</thead>

			<tbody>';
				$no = 1;
				while ($row = $query->fetch_array()) {

				echo '
						<tr>
							<td style="text-align: center">'.$no.'</td>
							<td>'.$row["nama_lengkap"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_ips"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_ipa"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_pkn"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_bind"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_mtk"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_bing"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_rrt"].'</td>
							<td style="text-align: center">'.round($row["nilai_cf_A1"],2).'</td>
							<td style="text-align: center">'.round($row["nilai_sf_A1"],2).'</td>
							<td style="text-align: center">'.round($row["nilai_tot_A1"],2).'</td>
						</tr>';
				$no++;
				}
				$qkriteria_core = $kon->query("select distinct jenis from pm_kriteria where kdkriteria = 'BIND' or kdkriteria = 'MTK' or kdkriteria = 'BING'");
				$dtcore = $qkriteria_core->fetch_array();
				$jenis_core = $dtcore['jenis'];

				$qkriteria_sec = $kon->query("select distinct jenis from pm_kriteria where kdkriteria = 'IPS' or kdkriteria = 'IPA' or kdkriteria = 'PKN' or kdkriteria = 'RRT'");
				$dtsec = $qkriteria_sec->fetch_array();
				$jenis_sec = $dtsec['jenis'];

					echo '
					</tbody>
					<tfoot>
						<tr align="center">
							<th colspan="2">Jenis Factor</th>
							<th>'.$jenis_sec.'</th>
							<th>'.$jenis_sec.'</th>
							<th>'.$jenis_sec.'</th>
							<th>'.$jenis_core.'</th>
							<th>'.$jenis_core.'</th>
							<th>'.$jenis_core.'</th>
							<th>'.$jenis_sec.'</th>
						</tr>
					</tfoot>
				</table>
				';

	}
}
?>
