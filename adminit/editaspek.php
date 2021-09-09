<?php
$id = $_GET['id_aspek'];
require_once "database.php";
$db = new database();
$kon = $db->connect();
$query = $kon->query("SELECT * FROM pm_aspek where id_aspek='$id'");
while ($row = $query->fetch_array()) {
    $idaspek    = $row['id_aspek'];
    $namaaspek  = $row['namaaspek'];
    $persentase = $row['persentase'];
    $bobotcore  = $row['bobot_core'];
    $bobotsecondary = $row['bobot_secondary'];
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="portlet">
                <div class="portlet-header portlet-header-bordered">
                    <h3 class="portlet-title">Edit Data Aspek (<?=$namaaspek;?>)</h3>
                </div>
                <div class="portlet-body">
                    <!-- <p>
                        In this example you can see Datatable doing both horizontal and vertical scrolling at the same time. To enable y-scrolling or x-scrolling simply set the <code>scrollY|scrollX</code> parameter to be whatever you want the container wrapper's height or width.
                    </p>
                    <hr> -->
                    <form method="POST" action="?m=prosesaspek">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="" class="font-weight-bold">ID Aspek</label>
                                    <div class="form-group">
                                        <input type="text" name="id_aspek" readonly value="<?=$idaspek;?>" class="form-control" autocomplete="off" required />
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="" class="font-weight-bold">Aspek</label>
                                    <div class="form-group">
                                        <input type="text" name="namaaspek" value="<?=$namaaspek;?>" class="form-control" autocomplete="off" required />
                                    </div>
                                </div>
                                
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="" class="font-weight-bold">Persentase (%)</label>
                                    <div class="form-group">
                                        <input type="text" name="persentase" value="<?=$persentase;?>" class="form-control" autocomplete="off" required />
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="" class="font-weight-bold">Bobot Core (%)</label>
                                    <div class="form-group">
                                        <input type="text" name="bobotcore" value="<?=$bobotcore;?>" class="form-control" autocomplete="off" required />
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="" class="font-weight-bold">Bobot Secondary (%)</label>
                                    <div class="form-group">
                                        <input type="text" name="bobotsecondary" value="<?=$bobotsecondary;?>" class="form-control" autocomplete="off" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-footer text-right">
                            <button name="update" type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
                            <button type="reset" class="btn btn-info"><i class="fa fa-sync-alt"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
