<?php

class ekskul {

	function tampil() {

	require_once "database.php";
	$db = new database();
	$kon = $db->connect();

  $query = $kon->query("SELECT * FROM pm_ekskul, user where pm_ekskul.id_user=user.id_user");

	echo'
	<table class="table table-bordered" width="100%" cellspacing="0">
	<thead class="bg-info text-white">
		<tr align="center">
			<th width="5%">No</th>
			<th width="20%">Nama Siswa</th>
			<th width="15%">futsal</th>
			<th width="15%">PRM</th>
			<th width="15%">basket</th>
			<th width="15%">paskibra</th>
		</tr>
	</thead>

	<tbody>';
		$no = 1;
		while ($row = $query->fetch_array()) {

		echo '
				<tr>
					<td style="text-align: center">'.$no.'</td>
					<td>'.$row["nama_lengkap"].'</td>
					<td style="text-align: center">'.$row["nilai_futsal"].'</td>
					<td style="text-align: center">'.$row["nilai_pramuka"].'</td>
					<td style="text-align: center">'.$row["nilai_basket"].'</td>
					<td style="text-align: center">'.$row["nilai_paskibra"].'</td>
					
				</tr>';
		$no++;
		$nilai_futsal  = $row["nilai_futsal"];
		$nilai_pramuka = $row["nilai_pramuka"];
		$nilai_basket  = $row["nilai_basket"];
		$nilai_paskibra  = $row["nilai_paskibra"];
	}
			echo '
			</tbody>
			<tfoot>
				<tr align="center">
					<th colspan="2">Nilai Target</th>
					<th>'.$nilai_futsal.'</th>
					<th>'.$nilai_pramuka.'</th>
					<th>'.$nilai_basket.'</th>
					<th>'.$nilai_paskibra.'</th>

				</tr>
			</tfoot>
		</table>
				';
	}

	function input($angkatan, $id_user, 
	$nilai_prm, $target_prm, $selisih_prm, $nilai_bobot_prm, 
    $nilai_fsl, $target_fsl, $selisih_fsl, $nilai_bobot_fsl,
    $nilai_paskib, $target_paskib, $selisih_paskib, $nilai_bobot_paskib,
    $nilai_bst, $target_bst, $selisih_bst, $nilai_bobot_bst,
	$nilai_cf_A4, $nilai_sf_A4, $nilai_tot_A4)
	{
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$query = "INSERT INTO pm_ekskul (angkatan, id_user, 
		nilai_pramuka, target_pramuka, selisih_pramuka, nilai_bobot_pramuka, 
		nilai_futsal, target_futsal, selisih_futsal, nilai_bobot_futsal,
		nilai_paskibra, target_paskibra, selisih_paskibra, nilai_bobot_paskibra,
		nilai_basket, target_basket, selisih_basket, nilai_bobot_basket,  
		nilai_cf_A4, nilai_sf_A4, nilai_tot_A4)
						 VALUES ('$angkatan', '$id_user', '$nilai_prm', '$target_prm', '$selisih_prm','$nilai_bobot_prm',
							 			 '$nilai_fsl', '$target_fsl', '$selisih_fsl', '$nilai_bobot_fsl',
							 		 	 '$nilai_paskib', '$target_paskib', '$selisih_paskib', '$nilai_bobot_paskib',
										 '$nilai_bst', '$target_bst', '$selisih_bst', '$nilai_bobot_bst',
									 	 '$nilai_cf_A4', '$nilai_sf_A4', '$nilai_tot_A4')";
			$simpan = $kon->query("$query");
			if (!$simpan) {
				printf("Errormessage: %s\n", $kon->error);
			 }
			if($simpan) {
				echo"<script>alert('Data Berhasil Ditambahkan'); window.location='?m=hasil';</script>";
				echo "berhasil";
			}
			else {
				echo"<script>alert('Gagal Menambahkan Data'); window.location='?m=inputnilai_eks';</script>";
				echo "berhasil";
				}
		
	}

	function selisih() {

	require_once "database.php";
	$db = new database();
	$kon = $db->connect();

  $query = $kon->query("SELECT * FROM pm_ekskul, user where pm_ekskul.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-info text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th width="20%">Nama Siswa</th>
					<th width="15%">futsal</th>
			<th width="15%">PRM</th>
			<th width="15%">basket</th>
			<th width="15%">paskibra</th>
				</tr>
			</thead>

			<tbody>';
				$no = 1;
				while ($row = $query->fetch_array()) {

				echo '
						<tr>
							<td style="text-align: center">'.$no.'</td>
							<td>'.$row["nama_lengkap"].'</td>
							<td style="text-align: center">'.$row["selisih_futsal"].'</td>
							<td style="text-align: center">'.$row["selisih_pramuka"].'</td>
							<td style="text-align: center">'.$row["selisih_basket"].'</td>
							<td style="text-align: center">'.$row["selisih_paskibra"].'</td>

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

  $query = $kon->query("SELECT * FROM pm_ekskul, user where pm_ekskul.id_user=user.id_user");

	echo'
		<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-info text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th width="18%">Nama Siswa</th>
					<th width="15%">futsal</th>
			<th width="15%">PRM</th>
			<th width="15%">basket</th>
			<th width="15%">paskibra</th>
					<th width="7%">Nilai CF (70%)</th>
					<th width="7%">Nilai SF (30%)</th>
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
							<td style="text-align: center">'.$row["nilai_bobot_futsal"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_pramuka"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_basket"].'</td>
							<td style="text-align: center">'.$row["nilai_bobot_paskibra"].'</td>
							<td style="text-align: center">'.round($row["nilai_cf_A4"],2).'</td>
							<td style="text-align: center">'.round($row["nilai_sf_A4"],2).'</td>
							<td style="text-align: center">'.round($row["nilai_tot_A4"],2).'</td>
						</tr>';
					$no++;
				}
				$qkriteria_core = $kon->query("select distinct jenis from pm_kriteria where kdkriteria = 'pram' or kdkriteria = 'PASK'");
				$dtcore = $qkriteria_core->fetch_array();
				$jenis_core = $dtcore['jenis'];

				$qkriteria_sec = $kon->query("select distinct jenis from pm_kriteria where kdkriteria = 'FTS' or kdkriteria = 'BKT'");
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
									$nilai_fsl, $target_fsl, $selisih_fsl,$nilai_bobot_fsl, 
									$nilai_paskib, $target_paskib, $selisih_paskib,$nilai_bobot_paskib,
									$nilai_cf_A4, $nilai_sf_A4, $nilai_tot_A4)
	{
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$query = "UPDATE pm_ekskul SET id_user='$id_user', nilai_tg='$nilai_tg',
							target_tg='$target_tg', selisih_tg='$selisih_tg', nilai_bobot_tg='$nilai_bobot_tg',
							nilai_fsl='$nilai_fsl', target_fsl='$target_fsl', selisih_fsl='$selisih_fsl', nilai_bobot_fsl='$nilai_bobot_fsl',
							nilai_paskib='$nilai_paskib', target_paskib='$target_paskib', selisih_paskib='$selisih_paskib', nilai_bobot_paskib='$nilai_bobot_paskib',
							nilai_cf_A4='$nilai_cf_A4', nilai_sf_A4='$nilai_sf_A4', nilai_tot_A4='$nilai_tot_A4'
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
