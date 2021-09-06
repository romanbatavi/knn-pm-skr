<?php

class kemampuan {

	function tampil() {

	require_once "database.php";
	$db = new database();
	$kon = $db->connect();

  $query = $kon->query("SELECT * FROM pm_kemampuan, user where pm_kemampuan.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-warning text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th width="20%">Nama Pegawai</th>
					<th width="15%">Tanggungan Orang Tua</th>
					<th width="15%">Status (Apakah Ikut Bantuan Spt: KJP, KIP,Lainnya)</th>
					<th width="15%">Penghasilan Orang Tua</th>
				</tr>
			</thead>

			<tbody>';
				$no = 1;
				while ($row = $query->fetch_array()) {

				echo '
						<tr>
							<td style="text-align: center">'.$no.'</td>
							<td>'.$row["nama_lengkap"].'</td>
							<td style="text-align: center">'.$row["nilai_tg"].'</td>
							<td style="text-align: center">'.$row["nilai_st"].'</td>
							<td style="text-align: center">'.$row["nilai_phs"].'</td>
							
						</tr>';
				$no++;
				$target_tg  = $row["target_tg"];
				$target_st = $row["target_st"];
				$target_phs  = $row["target_phs"];
			}
					echo '
					</tbody>
					<tfoot>
						<tr align="center">
							<th colspan="2">Nilai Target</th>
							<th>'.$target_tg.'</th>
							<th>'.$target_st.'</th>
							<th>'.$target_phs.'</th>
						</tr>
					</tfoot>
				</table>
				';
	}

	function input($id_user, $nilai_tg, $target_tg, $selisih_tg, $nilai_bobot_tg,
								 $nilai_st, $target_st, $selisih_st, $nilai_bobot_st,
								 $nilai_phs, $target_phs, $selisih_phs, $nilai_bobot_phs,
								 $nilai_cf_A2, $nilai_sf_A2, $nilai_tot_A2)
	{
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$query = "INSERT INTO pm_kemampuan (id_user, nilai_tg, target_tg, selisih_tg, nilai_bobot_tg,
																		nilai_st, target_st, selisih_st, nilai_bobot_st,
						 												nilai_phs, target_phs, selisih_phs, nilai_bobot_phs,
																		nilai_cf_A2, nilai_sf_A2, nilai_tot_A2)
						 VALUES ('$id_user', '$nilai_tg', '$target_tg', '$selisih_tg','$nilai_bobot_tg',
							 			 '$nilai_st', '$target_st', '$selisih_st', '$nilai_bobot_st',
							 		 	 '$nilai_phs', '$target_phs', '$selisih_phs', '$nilai_bobot_phs',
									 	 '$nilai_cf_A2', '$nilai_sf_A2', '$nilai_tot_A2')";
			$simpan = $kon->query("$query");
			if($simpan) {
				echo"<script>alert('Data Berhasil Ditambahkan'); window.location='?m=hasil';</script>";
			}
			else {
				echo"<script>alert('Gagal Menambahkan Data'); window.location='?m=inputnilai_ke';</script>";
				}
		
	}

	function selisih() {

	require_once "database.php";
	$db = new database();
	$kon = $db->connect();

  $query = $kon->query("SELECT * FROM pm_kemampuan, user where pm_kemampuan.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-warning text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th width="20%">Nama Pegawai</th>
					<th width="15%">Tanggungan Orang Tua</th>
					<th width="20%">Status (Apakah Ikut Bantuan Spt: KJP, KIP,Lainnya)</th>
					<th width="15%">Penghasilan Orang Tua</th>
				</tr>
			</thead>

			<tbody>';
				$no = 1;
				while ($row = $query->fetch_array()) {

				echo '
						<tr>
							<td style="text-align: center">'.$no.'</td>
							<td>'.$row["nama_lengkap"].'</td>
							<td style="text-align: center">'.$row["selisih_tg"].'</td>
							<td style="text-align: center">'.$row["selisih_st"].'</td>
							<td style="text-align: center">'.$row["selisih_phs"].'</td>
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

  $query = $kon->query("SELECT * FROM pm_kemampuan, user where pm_kemampuan.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-warning text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th width="18%">Nama Pegawai</th>
					<th width="8%">Tanggungan Orang Tua</th>
					<th width="12%">Status (Apakah Ikut Bantuan Spt: KJP, KIP,Lainnya)</th>
					<th width="5%">Penghasilan Orang Tua</th>
					<th width="7%">Nilai CF</th>
					<th width="7%">Nilai SF</th>
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
							<td style="text-align: center">'.$row["nilai_bobot_tg"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_st"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_phs"].'</td>
							<td style="text-align: center">'.round($row["nilai_cf_A2"],2).'</td>
							<td style="text-align: center">'.round($row["nilai_sf_A2"],2).'</td>
							<td style="text-align: center">'.round($row["nilai_tot_A2"],2).'</td>
						</tr>';
					$no++;
				}
				$qkriteria_core = $kon->query("select distinct jenis from pm_kriteria where kdkriteria = 'ST' or kdkriteria = 'PHS'");
				$dtcore = $qkriteria_core->fetch_array();
				$jenis_core = $dtcore['jenis'];

				$qkriteria_sec = $kon->query("select distinct jenis from pm_kriteria where kdkriteria = 'TG'");
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
									$nilai_st, $target_st, $selisih_st,$nilai_bobot_st, 
									$nilai_phs, $target_phs, $selisih_phs,$nilai_bobot_phs,
									$nilai_cf_A2, $nilai_sf_A2, $nilai_tot_A2)
	{
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$query = "UPDATE pm_kemampuan SET id_user='$id_user', nilai_tg='$nilai_tg',
							target_tg='$target_tg', selisih_tg='$selisih_tg', nilai_bobot_tg='$nilai_bobot_tg',
							nilai_st='$nilai_st', target_st='$target_st', selisih_st='$selisih_st', nilai_bobot_st='$nilai_bobot_st',
							nilai_phs='$nilai_phs', target_phs='$target_phs', selisih_phs='$selisih_phs', nilai_bobot_phs='$nilai_bobot_phs',
							nilai_cf_A2='$nilai_cf_A2', nilai_sf_A2='$nilai_sf_A2', nilai_tot_A2='$nilai_tot_A2'
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
