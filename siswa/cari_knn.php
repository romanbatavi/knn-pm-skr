<?php
                                include_once("./../views/config.php");
$pinjaman = mysqli_query($koneksi, "SELECT sum(A01) as total,sum(A03) as total1,sum(A06) as total2,sum(A08) as total3 FROM master_knn WHERE id_user='$_POST[id_user]' ");
                                $p2 = mysqli_fetch_assoc($pinjaman); 
								$jmlcicilan = mysqli_query($mysqli, "select * from master_knn where id_user='$_POST[id_user]' ");
$jmlcicilan = mysqli_num_rows($jmlcicilan);

$jmlcicilan1 = $p2['total']/$jmlcicilan;
$jmlcicilan2 = $p2['total1']/$jmlcicilan;
$jmlcicilan3 = $p2['total2']/$jmlcicilan;
$jmlcicilan4 = $p2['total3']/$jmlcicilan;
?>
<?php 
include "../views/proses.php";
$query = $db->get("user.id_user,user.nama_lengkap,master_knn.id_user,master_knn.A01,master_knn.A03,master_knn.A06
,master_knn.A08","master_knn","INNER JOIN user ON master_knn.id_user=user.id_user WHERE master_knn.id_user='$_POST[id_user]'");
$tampil = $query->fetch();


$hasilnya = array('id_user'=>$tampil['id_user'],
				'nama_lengkap'=>$tampil['nama_lengkap'],
				'A01'=>$jmlcicilan1,
				'A03'=>$jmlcicilan2,
				'A06'=>$jmlcicilan3,
				'A08'=>$jmlcicilan4,
				// 'mtk'=>$tampil['mtk'],
				// 'bing'=>$tampil['bing'],
				// 'agama'=>$tampil['agama'],

				

			);
			
echo json_encode($hasilnya);
?>