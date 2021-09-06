<?php
    
    include './../views/config.php';
    
    function simpan_pt ($koneksi, $username, $password, $nama_lengkap, $alamat, $no, $email) {

        mysqli_query($koneksi, "INSERT INTO user (username, password, nama_lengkap, alamat, no, email) 
        VALUES ('$username', '$password', '$nama_lengkap', '$alamat', '$no', '$email') ");
         echo "<script>window.alert('Sukses Tambah Akun')
         window.location='index.php?m=userpt'</script>";
    }

    function user_peserta_status ($koneksi, $status, $id_user) {
        mysqli_query($koneksi, "UPDATE user SET 
        status = '$status'
        WHERE id_user = '$id_user'
        ");
         echo "<script>window.alert('Sukses Aktifasi Akun')
         window.location='./'</script>";
    }

    function user_siswa ($koneksi, $angkatan,
    $nama_lengkap,
    $email,
    $alamat,
    $tanggal_lahir,
    $tempat_lahir,
    $no,
    $username,
    $password, $id_user) {
        mysqli_query($koneksi, "UPDATE user SET 
        angkatan = '$angkatan',
        nama_lengkap = '$nama_lengkap',
        email = '$email',
        alamat = '$alamat',
        tanggal_lahir = '$tanggal_lahir',
        tempat_lahir = '$tempat_lahir',
        no = '$no',
        username = '$username',
        password = '$password'
        WHERE id_user = '$id_user'
        ");
         echo "<script>window.alert('Sukses Edit Akun')
         window.location='index.php?m=usersiswa'</script>";
    }
    function hapus_siswa ($koneksi, $id_user) {

        mysqli_query($koneksi, "DELETE FROM user WHERE id_user = '$id_user' " );
        echo "<script>window.alert('Sukses Hapus Akun')
         window.location='index.php?m=usersiswa'</script>";
    }

    function user_pt ($koneksi, $nama_lengkap,
    $email,
    $alamat,
    $no,
    $username,
    $password, $id_user) {
        mysqli_query($koneksi, "UPDATE user SET 
        nama_lengkap = '$nama_lengkap',
        email = '$email',
        alamat = '$alamat',
        no = '$no',
        username = '$username',
        password = '$password'
        WHERE id_user = '$id_user'
        ");
         echo "<script>window.alert('Sukses Edit Akun')
         window.location='index.php?m=userpt'</script>";
    }
    function hapus_pt ($koneksi, $id_user) {

        mysqli_query($koneksi, "DELETE FROM user WHERE id_user = '$id_user' " );
        echo "<script>window.alert('Sukses Hapus Akun')
         window.location='index.php?m=userpt'</script>";
    }
?>