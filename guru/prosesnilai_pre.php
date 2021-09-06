<?php
    require "database.php";
    $db = new database();
    require_once "class/prestasi.php";

    $penilaian = new prestasi($db);

    var_dump($_POST);

    if (isset($_POST['simpan'])) {
      $angkatan      = $_POST["angkatan"];
      $id_user      = $_POST["id_user"];

      $nilai_akdm       = $_POST["nilai_akdm"];
      $target_akdm      = $_POST["target_akdm"];
      $selisih_akdm     = $_POST["selisih_akdm"];
      $nilai_bobot_akdm = $_POST["nilai_bobot_akdm"];
      
      $nilai_nakdm       = $_POST["nilai_nakdm"];
      $target_nakdm      = $_POST["target_nakdm"];
      $selisih_nakdm     = $_POST["selisih_nakdm"];
      $nilai_bobot_nakdm = $_POST["nilai_bobot_nakdm"];

      $nilai_cf_A6    = $_POST["nilai_cf_A6"];
      $nilai_sf_A6    = $_POST["nilai_sf_A6"];
      $nilai_tot_A6   = $_POST["nilai_tot_A6"];

      $penilaian->input($angkatan, $id_user, 
      $nilai_akdm, $target_akdm, $selisih_akdm, $nilai_bobot_akdm, 
      $nilai_nakdm, $target_nakdm, $selisih_nakdm, $nilai_bobot_nakdm,
      $nilai_cf_A6, $nilai_sf_A6, $nilai_tot_A6);
  }

    if (isset($_POST['update'])) {
      $kdnilai1       = $_POST["kdnilai1"];
      $id_user      = $_POST["id_user"];

      $nilai_akdm       = $_POST["nilai_akdm"];
      $target_akdm      = $_POST["target_akdm"];
      $selisih_akdm     = $_POST["selisih_akdm"];
      $nilai_bobot_akdm = $_POST["nilai_bobot_akdm"];
      $nilai_nakdm       = $_POST["nilai_nakdm"];
      $target_nakdm      = $_POST["target_nakdm"];
      $selisih_nakdm     = $_POST["selisih_nakdm"];
      $nilai_bobot_nakdm = $_POST["nilai_bobot_nakdm"];
      $nilai_pkn       = $_POST["nilai_pkn"];
      $target_pkn      = $_POST["target_pkn"];
      $selisih_pkn     = $_POST["selisih_pkn"];
      $nilai_bobot_pkn = $_POST["nilai_bobot_pkn"];
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

      $nilai_cf_A6    = $_POST["nilai_cf_A6"];
      $nilai_sf_A6    = $_POST["nilai_sf_A6"];
      $nilai_tot_A6   = $_POST["nilai_tot_A6"];

      $penilaian->update($kdnilai1,$id_user, 
      $nilai_akdm, $target_akdm, $selisih_akdm, $nilai_bobot_akdm, 
      $nilai_nakdm, $target_nakdm, $selisih_nakdm, $nilai_bobot_nakdm, 
      $nilai_pkn, $target_pkn, $selisih_pkn, $nilai_bobot_pkn, 
      $nilai_bind, $target_bind, $selisih_bind, $nilai_bobot_bind, 
      $nilai_mtk, $target_mtk, $selisih_mtk, $nilai_bobot_mtk, 
      $nilai_bing, $target_bing, $selisih_bing, $nilai_bobot_bing,
      $nilai_rrt, $target_rrt, $selisih_rrt, $nilai_bobot_rrt, 
      $nilai_cf_A6, $nilai_sf_A6, $nilai_tot_A6);
  }
?>
