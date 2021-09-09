<?php
include "../views/proses.php";
$query = $db->get("user.id_user,user.nama_lengkap,master_knn.id_user,master_knn.A01,master_knn.A03,master_knn.A06
,master_knn.A08","master_knn","INNER JOIN user ON master_knn.id_user=user.id_user WHERE master_knn.id_user='$_POST[id_user]'");
$tampil = $query->fetch();
$hasilnya = array('id_user'=>$tampil['id_user'],
				'nama_lengkap'=>$tampil['nama_lengkap'],
				'A01'=>$tampil['A01'],
				'A03'=>$tampil['A03'],
				'A06'=>$tampil['A06'],
				'A08'=>$tampil['A08'],
				// 'mtk'=>$tampil['mtk'],
				// 'bing'=>$tampil['bing'],
				// 'agama'=>$tampil['agama'],
				);
echo json_encode($hasilnya);
?>