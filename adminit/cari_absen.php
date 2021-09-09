<?php
include "../views/proses.php";
$query = $db->get("user.id_user,user.nama_lengkap,master_nilai.id_user,master_nilai.ips,master_nilai.ipa,master_nilai.pkn
,master_nilai.bindo,
master_nilai.mtk,
master_nilai.bing,
master_nilai.agama","master_nilai","INNER JOIN user ON master_nilai.id_user=user.id_user WHERE master_nilai.id_user='$_POST[id_user]'");
$tampil = $query->fetch();
$hasilnya = array('id_user'=>$tampil['id_user'],
				'nama_lengkap'=>$tampil['nama_lengkap'],
				'ips'=>$tampil['ips'],
				'ipa'=>$tampil['ipa'],
				'pkn'=>$tampil['pkn'],
				'bindo'=>$tampil['bindo'],
				'mtk'=>$tampil['mtk'],
				'bing'=>$tampil['bing'],
				'agama'=>$tampil['agama'],
				);
echo json_encode($hasilnya);
?>