<?php
    require "database.php";
    $db = new database();
    require_once "class/kemampuan.php";
    $kemampuan = new kemampuan($db);

    if (isset($_POST['simpan'])) {
      $angkatan      = $_POST["angkatan"];
      $id_user      = $_POST["id_user"];

      $nilai_tg        = $_POST["nilai_tg"];
      $target_tg       = $_POST["target_tg"];
      $selisih_tg      = $_POST["selisih_tg"];
      $nilai_bobot_tg  = $_POST["nilai_bobot_tg"];
      $nilai_st       = $_POST["nilai_st"];
      $target_st      = $_POST["target_st"];
      $selisih_st     = $_POST["selisih_st"];
      $nilai_bobot_st = $_POST["nilai_bobot_st"];
      $nilai_phs        = $_POST["nilai_phs"];
      $target_phs       = $_POST["target_phs"];
      $selisih_phs      = $_POST["selisih_phs"];
      $nilai_bobot_phs  = $_POST["nilai_bobot_phs"];

      $nilai_cf_A2    = $_POST["nilai_cf_A2"];
      $nilai_sf_A2    = $_POST["nilai_sf_A2"];
      $nilai_tot_A2   = $_POST["nilai_tot_A2"];

      $kemampuan->input($angkatan, $id_user,  
      $nilai_tg, $target_tg, $selisih_tg, $nilai_bobot_tg, 
      $nilai_st, $target_st, $selisih_st, $nilai_bobot_st, 
      $nilai_phs, $target_phs, $selisih_phs, $nilai_bobot_phs, 
      $nilai_cf_A2, $nilai_sf_A2, $nilai_tot_A2);
  }

    if (isset($_POST['update'])) {
    $kdnilai2       = $_POST["kdnilai2"];
      $id_user       = $_POST["id_user"];
      $nilai_tg        = $_POST["nilai_tg"];
      $target_tg       = $_POST["target_tg"];
      $selisih_tg      = $_POST["selisih_tg"];
      $nilai_bobot_tg  = $_POST["nilai_bobot_tg"];
      $nilai_st       = $_POST["nilai_st"];
      $target_st      = $_POST["target_st"];
      $selisih_st     = $_POST["selisih_st"];
      $nilai_bobot_st = $_POST["nilai_bobot_st"];
      $nilai_phs        = $_POST["nilai_phs"];
      $target_phs       = $_POST["target_phs"];
      $selisih_phs      = $_POST["selisih_phs"];
      $nilai_bobot_phs  = $_POST["nilai_bobot_phs"];

      $nilai_cf_A2     = $_POST["nilai_cf_A2"];
      $nilai_sf_A2     = $_POST["nilai_sf_A2"];
      $nilai_tot_A2    = $_POST["nilai_tot_A2"];

      $kemampuan->update($kdnilai2, $id_user, 
      $nilai_tg, $target_tg, $selisih_tg, $nilai_bobot_tg, 
      $nilai_st, $target_st, $selisih_st, $nilai_bobot_st, 
      $nilai_phs, $target_phs, $selisih_phs, $nilai_bobot_phs, 
      $nilai_cf_A2, $nilai_sf_A2, $nilai_tot_A2);
  }
?>
