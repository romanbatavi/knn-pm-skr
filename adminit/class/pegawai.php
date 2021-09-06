<?php

class pegawai {

	function tampil() {

	require_once "database.php";
	$db = new database();
	$kon = $db->connect();

  $query = $kon->query("SELECT * FROM pm_pegawai");

	echo'
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead class="bg-warning text-white">
          <tr align="center">
					<th width="5%">No</th>
					<th>Kode Pegawai</th>
					<th>Nama Pegawai</th>
					<th>Tahun Masuk</th>
					<th width="15%">Aksi</th>
				</tr>
			</thead>

			<tbody>';
			$jmbaris = $query->num_rows;
			if($jmbaris==0)
			{
				echo"
					<tr><td colspan=5 style='text-align: center'>Tidak Ada Data !</td></tr>
				";
			}
			else
			{
				$no = 1;
				while ($row = $query->fetch_array()) {

				echo '
						<tr>
							<td class="text-center">'.$no.'</td>
							<td class="text-center">'.$row["kdpegawai"].'</td>
							<td>'.$row["namapegawai"].'</td>
							<td class="text-center">'.$row["thn_masuk"].'</td>
							<td class="text-center">
								<div class="btn-group" role="group">
									<a href="editpegawai.php?kdpegawai='.$row['kdpegawai'].'" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
									<a href="hapuspegawai.php?kdpegawai='.$row['kdpegawai'].'" class="btn btn-danger btn-sm" onclick="return confirm ("Apakah anda yakin untuk meghapus data ini ?")" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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

	function input($kdpegawai, $namapegawai, $thn_masuk)
	{
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$query = "INSERT INTO pm_pegawai (kdpegawai,namapegawai,thn_masuk) VALUES ('$kdpegawai','$namapegawai','$thn_masuk')";
		$qcek = $kon->query("select * from pm_pegawai where kdpegawai='$kdpegawai'");
		$jmbaris = $qcek->num_rows;
		if($jmbaris==1)
		{
			echo"<script>alert('Data sudah ada'); window.location='inputpegawai.php';</script>";
		}
		else {
			$simpan = $kon->query("$query");

			if($simpan) {
				echo"<script>alert('Data Berhasil Ditambahkan'); window.location='datapegawai.php';</script>";
			}
			else {
				echo"<script>alert('Gagal Menambahkan Data'); window.location='datapegawai.php';</script>";
				}
		}
	}

	function update($kdpegawai, $namapegawai, $thn_masuk) {

			require_once "database.php";
			$db  = new database();
			$kon = $db->connect();

			$query = "UPDATE pm_pegawai set kdpegawai='$kdpegawai', namapegawai='$namapegawai', thn_masuk='$thn_masuk' where kdpegawai='$kdpegawai'";

			$update = $kon->query("$query");

			if($update) {
					echo"<script>alert('Data Berhasil Diperbarui'); window.location='datapegawai.php';</script>";
				}
				else {
					echo"<script>alert('Gagal Memperbarui Data'); window.location='datapegawai.php';</script>";
				}
    }

	function hapus($kdpegawai) {
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$hapus = $kon->query("DELETE FROM pm_pegawai WHERE kdpegawai = '$kdpegawai'");

		if($hapus) {
			echo"<script>alert('Data berhasil Dihapus'); window.location='datapegawai.php';</script>";
		} else {
			echo"<script>alert('Data gagal dihapus'); window.location='datapegawai.php';</script>";
		}
	}
}
?>
