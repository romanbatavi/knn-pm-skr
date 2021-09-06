<?php
require_once 'functions.php';



/** DATASET */
if ($mod == 'dataset_tambah') {
    $nomor = $_POST['nomor'];
    $ket_dataset = $_POST['ket_dataset'];

    $error = false;
    foreach ($_POST['nilai'] as $key => $val) {
        if (!$val)
            $error = true;
    }

    if ($error) {
        print_msg("Field yang bertanda * tidak boleh kosong!");
    } elseif ($db->get_row("SELECT * FROM tb_dataset WHERE nomor='$nomor'")) {
        print_msg("Nomor sudah ada");
    } else {
        foreach ($_POST['nilai'] as $key => $val) {
            $db->query("INSERT INTO tb_dataset (nomor, ket_dataset, id_atribut, id_nilai) VALUES ('$nomor', '$ket_dataset', '$key', '$val')");
        }
        redirect_js("index.php?m=dataset");
    }
} else if ($mod == 'dataset_ubah') {
    $ket_dataset = $_POST['ket_dataset'];
    $error = false;
    foreach ($_POST['nilai'] as $key => $val) {
        if (!$val)
            $error = true;
    }

    if ($error) {
        print_msg("Field yang bertanda * tidak boleh kosong!");
    } else {
        foreach ($_POST['nilai'] as $key => $val) {
            $db->query("UPDATE tb_dataset SET ket_dataset='$ket_dataset', id_nilai='$val' WHERE id_dataset='$key'");
        }
        redirect_js("index.php?m=dataset");
    }
} else if ($act == 'dataset_hapus') {
    $db->query("DELETE FROM tb_dataset WHERE nomor='$_GET[ID]'");
    header("location:index.php?m=dataset");
}

/** NILAI ATRIBUT */
elseif ($mod == 'nilai_tambah') {
    $id_atribut = $_POST['id_atribut'];
    $nama_nilai = $_POST['nama_nilai'];

    if (!$id_atribut || !$nama_nilai)
        print_msg("Field yang bertanda * tidak boleh kosong!");
    else {
        $db->query("INSERT INTO tb_nilai (id_atribut, nama_nilai) VALUES ('$id_atribut', '$nama_nilai')");
        redirect_js("index.php?m=nilai");
    }
} else if ($mod == 'nilai_ubah') {
    $id_atribut = $_POST['id_atribut'];
    $nama_nilai = $_POST['nama_nilai'];

    if (!$id_atribut || !$nama_nilai)
        print_msg("Field yang bertanda * tidak boleh kosong!");
    else {
        $db->query("UPDATE tb_nilai SET id_atribut='$id_atribut', nama_nilai='$nama_nilai' WHERE id_nilai='$_GET[ID]'");
        redirect_js("index.php?m=nilai");
    }
} else if ($act == 'nilai_hapus') {
    $db->query("DELETE FROM tb_nilai WHERE id_nilai='$_GET[ID]'");
    header("location:index.php?m=nilai");
}



/** ATRIBUT */
if ($mod == 'atribut_tambah') {
    $id_atribut = $_POST['id_atribut'];
    $nama_atribut = $_POST['nama_atribut'];
    $keterangan = $_POST['keterangan'];

    if (!$id_atribut || !$nama_atribut)
        print_msg("Field bertanda * tidak boleh kosong!");
    elseif ($db->get_results("SELECT * FROM tb_atribut WHERE id_atribut='$id_atribut'"))
        print_msg("Kode sudah ada!");
    else {
        $db->query("INSERT INTO tb_atribut (id_atribut, nama_atribut, keterangan) 
            VALUES ('$id_atribut', '$nama_atribut', '$keterangan')");
        $db->query("INSERT INTO tb_dataset (nomor, id_atribut) SELECT nomor, '$id_atribut' FROM tb_dataset GROUP BY nomor");
        redirect_js("index.php?m=atribut");
    }
} else if ($mod == 'atribut_ubah') {
    $id_atribut = $_POST['id_atribut'];
    $nama_atribut = $_POST['nama_atribut'];
    $keterangan = $_POST['keterangan'];

    if (!$id_atribut || !$nama_atribut)
        print_msg("Field bertanda * tidak boleh kosong!");
    else {
        $db->query("UPDATE tb_atribut SET nama_atribut='$nama_atribut', keterangan='$keterangan' WHERE id_atribut='$_GET[ID]'");
        redirect_js("index.php?m=atribut");
    }
} else if ($act == 'atribut_hapus') {
    $db->query("DELETE FROM tb_atribut WHERE id_atribut='$_GET[ID]'");
    $db->query("DELETE FROM tb_nilai WHERE id_atribut='$_GET[ID]'");
    $db->query("DELETE FROM tb_dataset WHERE id_atribut='$_GET[ID]'");
    header("location:index.php?m=atribut");
}

/** Lowongan */
if ($mod == 'lowongan_tambah') {
    $id_user = $_POST['id_user'];
    $nama_lowongan = $_POST['nama_lowongan'];
    $alamat_lowongan = $_POST['alamat_lowongan'];
    $email_lowongan = $_POST['email_lowongan'];
    $no_lowongan = $_POST['no_lowongan'];
    $ket_lowongan = $_POST['ket_lowongan'];
    $tanggal_buat = $_POST['tanggal_buat'];
    $expired = $_POST['expired'];

    if (!$nama_lowongan || !$email_lowongan)
        print_msg("Field bertanda * tidak boleh kosong!");
    else {
        $db->query("INSERT INTO tbl_lowongan (id_user, nama_lowongan, alamat_lowongan, email_lowongan, no_lowongan, ket_lowongan, tanggal_buat, expired) 
            VALUES ('$id_user', '$nama_lowongan', '$alamat_lowongan', '$email_lowongan', '$no_lowongan', '$ket_lowongan', '$tanggal_buat', '$expired')");
        redirect_js("index.php?m=lowongan");
    }

} else if ($act == 'lowongan_hapus') {
    $db->query("DELETE FROM tbl_lowongan WHERE id_lowongan='$_GET[ID]'");
    header("location:index.php?m=lowongan");
}
