<?php

class aspek {

	function tampil() {
	require_once "database.php";
	$db = new database();
	$kon = $db->connect();

  $query = $kon->query("SELECT * FROM pm_aspek");

	echo'
		<table id="datatable-1" class="table table-bordered table-striped table-hover nowrap" border="2px" width="100%" cellspacing="0">
            <thead class="bg-warning text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th>ID Aspek</th>
					<th>Aspek</th>
					<th>Persentase (%)</th>
					<th>Bobot CF (%)</th>
					<th>Bobot SF (%)</th>
					<th width="15%">Aksi</th>
				</tr>
			</thead>

			<tbody>';
			$jmbaris = $query->num_rows;
			if($jmbaris==0)
			{
				echo"
					<tr><td colspan=7 style='text-align: center'>Tidak Ada Data !</td></tr>
				";
			}
			else
			{
				$no = 1;
				while ($row = $query->fetch_array()) {

				echo '
						<tr>
							<td style="text-align: center">'.$no.'</td>
							<td style="text-align: center">'.$row["id_aspek"].'</td>
							<td>'.$row["namaaspek"].'</td>
							<td style="text-align: center">'.$row["persentase"].'</td>
							<td style="text-align: center">'.$row["bobot_core"].'</td>
							<td style="text-align: center">'.$row["bobot_secondary"].'</td>
							<td class="text-center">
								<div class="btn-group" role="group">
									<a href="?m=editaspek&id_aspek='.$row['id_aspek'].'" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
									<a href="?m=hapusaspek&id_aspek='.$row['id_aspek'].'" class="btn btn-danger btn-sm" onclick="return confirm ("Apakah anda yakin untuk meghapus data ini ?")" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
								</div>
							</td>
						</tr>';
								$no++;
					}
					echo '
					</tbody>
				</table>
				';
			}
	}

	function input($idaspek, $namaaspek, $persentase, $bobotcore, $bobotsecondary)
	{
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$query = "INSERT INTO pm_aspek (id_aspek,namaaspek,persentase,bobot_core,bobot_secondary) VALUES ('$idaspek','$namaaspek','$persentase','$bobotcore','$bobotsecondary')";
		$qcek = $kon->query("select * from pm_aspek where id_aspek='$idaspek'");
		$jmbaris = $qcek->num_rows;
		if($jmbaris==1)
		{
			echo"<script>alert('Data sudah ada'); window.location='?m=inputaspek';</script>";
		}
		else {
			$simpan = $kon->query("$query");

			if($simpan) {
				echo"<script>alert('Data Berhasil Ditambahkan'); window.location='?m=dataaspek';</script>";
			}
			else {
				echo"<script>alert('Gagal Menambahkan Data'); window.location='?m=inputaspek';</script>";
				}
		}
	}

	function update($idaspek, $namaaspek, $persentase, $bobotcore, $bobotsecondary) {

			require_once "database.php";
			$db  = new database();
			$kon = $db->connect();

			$query = "UPDATE pm_aspek set id_aspek='$idaspek', namaaspek='$namaaspek', persentase='$persentase',
								bobot_core='$bobotcore', bobot_secondary='$bobotsecondary' where id_aspek='$idaspek'";

			$update = $kon->query("$query");

			if($update) {
					echo"<script>alert('Data Berhasil Diperbarui'); window.location='?m=dataaspek';</script>";
				}
				else {
					echo"<script>alert('Gagal Memperbarui Data'); window.location='';</script>";
				}
    }

	function hapus($idaspek) {
			require_once "database.php";
			$db  = new database();
			$kon = $db->connect();

			$hapus = $kon->query("DELETE FROM pm_aspek WHERE id_aspek = '$idaspek'");

			if($hapus) {
					echo"<script>alert('Data berhasil Dihapus'); window.location='?m=dataaspek';</script>";
			} else {
					echo"<script>alert('Data Gagal Dihapus'); window.location='?m=dataaspek';</script>";
			}
    }
}
?>
