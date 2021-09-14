<?php
    require "database.php";
    $db = new database();
    require_once "class/ekskul.php";
    $penilaian = new ekskul($db);
    var_dump($_POST);

    if (isset($_POST['simpan'])) {
      $angkatan      = $_POST["angkatan"];
      $id_user      = $_POST["id_user"];

      $nilai_prm       = $_POST["nilai_prm"];
      $target_prm      = $_POST["target_prm"];
      $selisih_prm     = $_POST["selisih_prm"];
      $nilai_bobot_prm = $_POST["nilai_bobot_prm"];
      
      $nilai_fsl       = $_POST["nilai_fsl"];
      $target_fsl      = $_POST["target_fsl"];
      $selisih_fsl     = $_POST["selisih_fsl"];
      $nilai_bobot_fsl = $_POST["nilai_bobot_fsl"];
      
      $nilai_paskib       = $_POST["nilai_paskib"];
      $target_paskib      = $_POST["target_paskib"];
      $selisih_paskib     = $_POST["selisih_paskib"];
      $nilai_bobot_paskib = $_POST["nilai_bobot_paskib"];

      $nilai_bst       = $_POST["nilai_bst"];
      $target_bst      = $_POST["target_bst"];
      $selisih_bst     = $_POST["selisih_bst"];
      $nilai_bobot_bst = $_POST["nilai_bobot_bst"];

      $nilai_cf_A4    = $_POST["nilai_cf_A4"];
      $nilai_sf_A4    = $_POST["nilai_sf_A4"];
      $nilai_tot_A4   = $_POST["nilai_tot_A4"];

      $penilaian->input($angkatan, $id_user, 
      $nilai_prm, $target_prm, $selisih_prm, $nilai_bobot_prm, 
      $nilai_fsl, $target_fsl, $selisih_fsl, $nilai_bobot_fsl,
      $nilai_paskib, $target_paskib, $selisih_paskib, $nilai_bobot_paskib,
      $nilai_bst, $target_bst, $selisih_bst, $nilai_bobot_bst,  
      $nilai_cf_A4, $nilai_sf_A4, $nilai_tot_A4);
  }

    if (isset($_POST['update'])) {
      $kdnilai1       = $_POST["kdnilai1"];
      $id_user      = $_POST["id_user"];

      $nilai_prm       = $_POST["nilai_prm"];
      $target_prm      = $_POST["target_prm"];
      $selisih_prm     = $_POST["selisih_prm"];
      $nilai_bobot_prm = $_POST["nilai_bobot_prm"];
      $nilai_fsl       = $_POST["nilai_fsl"];
      $target_fsl      = $_POST["target_fsl"];
      $selisih_fsl     = $_POST["selisih_fsl"];
      $nilai_bobot_fsl = $_POST["nilai_bobot_fsl"];
      $nilai_orgpmi       = $_POST["nilai_orgpmi"];
      $target_orgpmi      = $_POST["target_orgpmi"];
      $selisih_orgpmi     = $_POST["selisih_orgpmi"];
      $nilai_bobot_orgpmi = $_POST["nilai_bobot_orgpmi"];
      $nilai_paskib       = $_POST["nilai_paskib"];
      $target_paskib      = $_POST["target_paskib"];
      $selisih_paskib     = $_POST["selisih_paskib"];
      $nilai_bobot_paskib = $_POST["nilai_bobot_paskib"];
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

      $nilai_cf_A1    = $_POST["nilai_cf_A1"];
      $nilai_sf_A1    = $_POST["nilai_sf_A1"];
      $nilai_tot_A1   = $_POST["nilai_tot_A1"];

      $penilaian->update($kdnilai1,$id_user, 
      $nilai_prm, $target_prm, $selisih_prm, $nilai_bobot_prm, 
      $nilai_fsl, $target_fsl, $selisih_fsl, $nilai_bobot_fsl, 
      $nilai_orgpmi, $target_orgpmi, $selisih_orgpmi, $nilai_bobot_orgpmi, 
      $nilai_paskib, $target_paskib, $selisih_paskib, $nilai_bobot_paskib, 
      $nilai_mtk, $target_mtk, $selisih_mtk, $nilai_bobot_mtk, 
      $nilai_bing, $target_bing, $selisih_bing, $nilai_bobot_bing,
      $nilai_rrt, $target_rrt, $selisih_rrt, $nilai_bobot_rrt, 
      $nilai_cf_A1, $nilai_sf_A1, $nilai_tot_A1);
  }
?>
