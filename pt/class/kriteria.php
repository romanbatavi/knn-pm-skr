<?php

class kriteria {

	function tampil() {

	require_once "database.php";
	$db = new database();
	$kon = $db->connect();

  $query = $kon->query("SELECT * FROM pm_kriteria, pm_aspek where pm_kriteria.id_aspek=pm_aspek.id_aspek");

	echo'
		<table id="datatable-1" class="table table-bordered table-striped table-hover nowrap" border="2px" width="100%" cellspacing="0">
            <thead class="bg-warning text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th>Kode Sub Aspek</th>
					<th>Aspek</th>
					<th>Sub Aspek</th>
					<th>Jenis <br>Factor</th>
					<th>Nilai Target</th>
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
							<td class="text-center">'.$no.'</td>
							<td class="text-center">'.$row["kdkriteria"].'</td>
							<td>'.$row["namaaspek"].'</td>
							<td>'.$row["nmkriteria"].'</td>
							<td class="text-center">'.$row["jenis"].'</td>
							<td class="text-center">'.$row["target"].'</td>
							<td class="text-center">
								<div class="btn-group" role="group">
									<a href="?m=editkriteria&kdkriteria='.$row['kdkriteria'].'" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
									<a href="?m=hapuskriteria&kdkriteria='.$row['kdkriteria'].'" class="btn btn-danger btn-sm" onclick="return confirm ("Apakah anda yakin untuk meghapus data ini ?")" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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

	function input($idaspek, $kdkriteria, $nmkriteria, $jenis, $target)
	{
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$query = "INSERT INTO pm_kriteria (id_aspek,kdkriteria,nmkriteria,jenis,target) VALUES ('$idaspek','$kdkriteria','$nmkriteria','$jenis','$target')";
		$qcek = $kon->query("select * from pm_kriteria where kdkriteria='$kdkriteria'");
		$jmbaris = $qcek->num_rows;
		if($jmbaris==1)
		{
			echo"<script>alert('Data Sudah Ada'); window.location='?m=inputkriteria';</script>";
		}
		else {
			$simpan = $kon->query("$query");

			if($simpan) {
				echo"<script>alert('Data Berhasil Ditambahkan'); window.location='?m=datakriteria';</script>";
			}
			else {
				echo"<script>alert('Gagal Menambahkan Data'); window.location='?m=datakriteria';</script>";
				}
		}
	}

	function update($idaspek, $kdkriteria, $nmkriteria, $jenis, $target) {

			require_once "database.php";
			$db  = new database();
			$kon = $db->connect();

			$query = "UPDATE pm_kriteria set id_aspek='$idaspek', kdkriteria='$kdkriteria', nmkriteria='$nmkriteria', jenis='$jenis', target='$target' WHERE kdkriteria='$kdkriteria'";
			$update = $kon->query("$query");

			if($update) {
					echo"<script>alert('Data Berhasil Diperbarui'); window.location='?m=datakriteria';</script>";
				}
				else {
					echo"<script>alert('Gagal Memperbarui Data'); window.location='?m=datakriteria';</script>";
				}
    }

	function hapus($kdkriteria) {

				require_once "database.php";
				$db  = new database();
				$kon = $db->connect();

				$hapus = $kon->query("DELETE FROM pm_kriteria WHERE kdkriteria = '$kdkriteria'");

				if($hapus) {
						echo"<script>alert('Data Berhasil Dihapus'); window.location='?m=datakriteria';</script>";
				}
				else {
						echo"<script>alert('GAGAL Menghapus Data'); window.location='?m=datakriteria';</script>";
				}
    }
}
?>
