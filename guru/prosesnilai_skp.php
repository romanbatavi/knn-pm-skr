<?php
    require "database.php";
    $db = new database();
    require_once "class/sikap.php";

    $penilaian = new sikap($db);

    var_dump($_POST);

    if (isset($_POST['simpan'])) {
      $angkatan      = $_POST["angkatan"];
      $id_user      = $_POST["id_user"];

      $nilai_kd       = $_POST["target_kd"];
      $target_kd      = $_POST["target_kd"];
      $selisih_kd     = $_POST["selisih_kd"];
      $nilai_bobot_kd = $_POST["nilai_bobot_kd"];
      
      $nilai_pe       = $_POST["nilai_pe"];
      $target_pe      = $_POST["target_pe"];
      $selisih_pe     = $_POST["selisih_pe"];
      $nilai_bobot_pe = $_POST["nilai_bobot_pe"];

      $nilai_krj       = $_POST["nilai_krj"];
      $target_krj      = $_POST["target_krj"];
      $selisih_krj     = $_POST["selisih_krj"];
      $nilai_bobot_krj = $_POST["nilai_bobot_krj"];

      $nilai_cf_A5    = $_POST["nilai_cf_A5"];
      $nilai_sf_A5    = $_POST["nilai_sf_A5"];
      $nilai_tot_A5   = $_POST["nilai_tot_A5"];

      $penilaian->input($angkatan, $id_user, 
      $nilai_kd, $target_kd, $selisih_kd, $nilai_bobot_kd, 
      $nilai_pe, $target_pe, $selisih_pe, $nilai_bobot_pe,
      $nilai_krj, $target_krj, $selisih_krj, $nilai_bobot_krj, 
      $nilai_cf_A5, $nilai_sf_A5, $nilai_tot_A5);
  }

    if (isset($_POST['update'])) {
      $kdnilai1       = $_POST["kdnilai1"];
      $id_user      = $_POST["id_user"];

      $nilai_kd       = $_POST["nilai_kd"];
      $target_kd      = $_POST["target_kd"];
      $selisih_kd     = $_POST["selisih_kd"];
      $nilai_bobot_kd = $_POST["nilai_bobot_kd"];
      $nilai_pe       = $_POST["nilai_pe"];
      $target_pe      = $_POST["target_pe"];
      $selisih_pe     = $_POST["selisih_pe"];
      $nilai_bobot_pe = $_POST["nilai_bobot_pe"];
      $nilai_krj       = $_POST["nilai_krj"];
      $target_krj      = $_POST["target_krj"];
      $selisih_krj     = $_POST["selisih_krj"];
      $nilai_bobot_krj = $_POST["nilai_bobot_krj"];
      $nilai_bind       = $_POST["nilai_bind"];
      $target_bind      = $_POST["target_bind"];
      $selisih_bind     = $_POST["selisih_bind"];
      $nilai_bobot_bind = $_POST["nilai_bobot_bind"];
      $nilai_mtk       = $_POST["nilai_mtk"];
      $target_mtk      = $_POST["target_mtk"];
      $selisih_mtk     = $_POST["selisih_mtk"];
      $nilai_bobot_mtk = $_POST["nilai_bobot_mtk"];

      $nilai_bing       = $_POST["nilai_bing"];
      $target_bing      = $_POST["target_bing"];
      $selisih_bing     = $_POST["selisih_bing"];
      $nilai_bobot_bing = $_POST["nilai_bobot_bing"];

      $nilai_rrt       = $_POST["nilai_rrt"];
      $target_rrt      = $_POST["target_rrt"];
      $selisih_rrt     = $_POST["selisih_rrt"];
      $nilai_bobot_rrt = $_POST["nilai_bobot_rrt"];

      $nilai_cf_A5    = $_POST["nilai_cf_A5"];
      $nilai_sf_A5    = $_POST["nilai_sf_A5"];
      $nilai_tot_A5   = $_POST["nilai_tot_A5"];

      $penilaian->update($kdnilai1,$id_user, 
      $nilai_kd, $target_kd, $selisih_kd, $nilai_bobot_kd, 
      $nilai_pe, $target_pe, $selisih_pe, $nilai_bobot_pe, 
      $nilai_krj, $target_krj, $selisih_krj, $nilai_bobot_krj, 
      $nilai_bind, $target_bind, $selisih_bind, $nilai_bobot_bind, 
      $nilai_mtk, $target_mtk, $selisih_mtk, $nilai_bobot_mtk, 
      $nilai_bing, $target_bing, $selisih_bing, $nilai_bobot_bing,
      $nilai_rrt, $target_rrt, $selisih_rrt, $nilai_bobot_rrt, 
      $nilai_cf_A5, $nilai_sf_A5, $nilai_tot_A5);
  }
?>
