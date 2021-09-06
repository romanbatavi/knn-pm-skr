<?php
    require "database.php";
    $db = new database();
    require_once "class/kegiatan.php";

    $kemampuan = new kegiatan($db);
    var_dump($_POST);

    if (isset($_POST['simpan'])) {
      $angkatan      = $_POST["angkatan"];
      $id_user      = $_POST["id_user"];

      $nilai_orgs       = $_POST["nilai_orgs"];
      $target_orgs      = $_POST["target_orgs"];
      $selisih_orgs     = $_POST["selisih_orgs"];
      $nilai_bobot_orgs = $_POST["nilai_bobot_orgs"];
      
      $nilai_orgkg       = $_POST["nilai_orgkg"];
      $target_orgkg      = $_POST["target_orgkg"];
      $selisih_orgkg     = $_POST["selisih_orgkg"];
      $nilai_bobot_orgkg = $_POST["nilai_bobot_orgkg"];

      $nilai_orgpmi       = $_POST["nilai_orgpmi"];
      $target_orgpmi      = $_POST["target_orgpmi"];
      $selisih_orgpmi     = $_POST["selisih_orgpmi"];
      $nilai_bobot_orgpmi = $_POST["nilai_bobot_orgpmi"];
      
      $nilai_osis       = $_POST["nilai_osis"];
      $target_osis      = $_POST["target_osis"];
      $selisih_osis     = $_POST["selisih_osis"];
      $nilai_bobot_osis = $_POST["nilai_bobot_osis"];

      $nilai_cf_A3    = $_POST["nilai_cf_A3"];
      $nilai_sf_A3    = $_POST["nilai_sf_A3"];
      $nilai_tot_A3   = $_POST["nilai_tot_A3"];

      $kemampuan->input($angkatan, $id_user,  
      $nilai_orgs, $target_orgs, $selisih_orgs, $nilai_bobot_orgs, 
      $nilai_orgkg, $target_orgkg, $selisih_orgkg, $nilai_bobot_orgkg, 
      $nilai_orgpmi, $target_orgpmi, $selisih_orgpmi, $nilai_bobot_orgpmi,
      $nilai_osis, $target_osis, $selisih_osis, $nilai_bobot_osis, 
      $nilai_cf_A3, $nilai_sf_A3, $nilai_tot_A3);
  }

    if (isset($_POST['update'])) {
    $kdnilai2       = $_POST["kdnilai2"];
      $id_user       = $_POST["id_user"];
      $nilai_orgs        = $_POST["nilai_orgs"];
      $target_orgs       = $_POST["target_orgs"];
      $selisih_orgs      = $_POST["selisih_orgs"];
      $nilai_bobot_orgs  = $_POST["nilai_bobot_orgs"];
      $nilai_orgkg       = $_POST["nilai_orgkg"];
      $target_orgkg      = $_POST["target_orgkg"];
      $selisih_orgkg     = $_POST["selisih_orgkg"];
      $nilai_bobot_orgkg = $_POST["nilai_bobot_orgkg"];
      $nilai_osis        = $_POST["nilai_osis"];
      $target_osis       = $_POST["target_osis"];
      $selisih_osis      = $_POST["selisih_osis"];
      $nilai_bobot_osis  = $_POST["nilai_bobot_osis"];

      $nilai_cf_A2     = $_POST["nilai_cf_A2"];
      $nilai_sf_A2     = $_POST["nilai_sf_A2"];
      $nilai_tot_A2    = $_POST["nilai_tot_A2"];

      $kemampuan->update($kdnilai2, $id_user, 
      $nilai_orgs, $target_orgs, $selisih_orgs, $nilai_bobot_orgs, 
      $nilai_orgkg, $target_orgkg, $selisih_orgkg, $nilai_bobot_orgkg, 
      $nilai_osis, $target_osis, $selisih_osis, $nilai_bobot_osis, 
      $nilai_cf_A2, $nilai_sf_A2, $nilai_tot_A2);
  }
?>
