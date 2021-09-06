<?php

class pengguna {
	
	function tampil() {

	require_once "database.php";
	$db = new database();
	$kon = $db->connect();

  $query = $kon->query("SELECT * FROM pm_pengguna");

	echo'
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="bg-warning text-white">
                <tr align="center">
					<th width="5%">No</th>
					<th>Nama Pengguna</th>
					<th>Username</th>
					<th width="15%">Aksi</th>
				</tr>
			</thead>

			<tbody>';
			$jmbaris = $query->num_rows;
			if($jmbaris==0)
			{
				echo"
					<tr><td colspan=4 style='text-align: center'>Tidak Ada Data !</td></tr>
				";
			}
			else
			{
				$no = 1;
				while ($row = $query->fetch_array()) {

				echo '
						<tr>
							<td class="text-center">'.$no.'</td>
							<td class="text-center">'.$row["nama_pengguna"].'</td>
							<td class="text-center">'.$row["username"].'</td>
							<td class="text-center">
								<div class="btn-group" role="group">
									<a href="edituser.php?id='.$row['id_pengguna'].'" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
									<a href="hapususer.php?id='.$row['id_pengguna'].'" class="btn btn-danger btn-sm" onclick="return confirm ("Apakah anda yakin untuk meghapus data ini ?")" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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

	function input($nama, $username, $password)
	{
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$query = "INSERT INTO pm_pengguna (nama_pengguna,username,password) VALUES ('$nama','$username','$password')";
		$qcek	 = $kon->query("SELECT * FROM pm_pengguna where id_pengguna='$id'");
		$jmbaris = $qcek->num_rows;
		if($jmbaris==1)
		{
			echo"<script>alert('Data sudah ada'); window.location='inputuser.php';</script>";
		}
		else {
			$simpan = $kon->query("$query");

			if($simpan) {
				echo"<script>alert('Data berhasil Ditambahkan'); window.location='datauser.php';</script>";
			}
			else {
				echo"<script>alert('Gagal Menambahkan Data'); window.location='datauser.php';</script>";
				}
		}
	}

	function update($id, $nama, $username, $password) {

			require_once "database.php";
			$db  = new database();
			$kon = $db->connect();

			$query = "UPDATE pm_pengguna set nama_pengguna='$nama', username='$username', password='$password' WHERE id_pengguna='$id'";

			$update = $kon->query("$query");

			if($update) {
					echo"<script>alert('Data berhasil Diperbarui'); window.location='datauser.php';</script>";
				}
				else {
					echo"<script>alert('Gagal Memperbarui Data'); window.location='datauser.php';</script>";
				}
    }
	
	function hapus($id) {
		require_once "database.php";
		$db  = new database();
		$kon = $db->connect();

		$hapus = $kon->query("DELETE FROM pm_pengguna WHERE id_pengguna = '$id'");

		if($hapus) {
			echo"<script>alert('Data berhasil Dihapus'); window.location='datauser.php';</script>";
		} else {
			echo"<script>alert('Data gagal dihapus'); window.location='datauser.php';</script>";
		}
	}
}
?>
