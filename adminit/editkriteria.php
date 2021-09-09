<?php
$id = $_GET['kdkriteria'];

require_once "database.php";
$db = new database();
$kon = $db->connect();
$query = $kon->query("SELECT * FROM pm_kriteria where kdkriteria='$id'");
while ($row = $query->fetch_array()) {
    $idaspek    = $row['id_aspek'];
    $kdkriteria = $row['kdkriteria'];
    $nmkriteria = $row['nmkriteria'];
    $jenis      = $row['jenis'];
    $target     = $row['target'];
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
                    <form method="POST" action="?m=proseskriteria">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="" class="font-weight-bold">Aspek</label>
                                    <div class="form-group">
                                        <select class="form-control" name="id_aspek" required>
                                            <?php
                                                require_once "database.php";
                                                $db  = new database();
                                                $kon = $db->connect();
                                                $qcek = $kon->query("select * from pm_aspek");
                                                while ($row = $qcek->fetch_array()) {
                                            ?>
                                        <option value="<?php echo $row["id_aspek"]; ?>" <?php if ($idaspek == $row["id_aspek"]) {echo "selected";} ?>><?php echo $row["namaaspek"]; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="" class="font-weight-bold">Kode Kriteria</label>
                                    <div class="form-group">
                                        <input type="text" name="kdkriteria" readonly value="<?=$kdkriteria;?>" class="form-control" autocomplete="off" required />
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="" class="font-weight-bold">Kriteria</label>
                                    <div class="form-group">
                                        <input type="text" name="nmkriteria" required value="<?=$nmkriteria;?>" class="form-control" autocomplete="off" required />
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="" class="font-weight-bold">Jenis Factor</label>
                                    <div class="form-group">
                                        <select class="form-control" name="jenis" required>
                                            <option value="Core" <?php if ($jenis == 'Core') {echo "selected";} ?>>Core</option>
                                            <option value="Secondary" <?php if ($jenis == 'Secondary') {echo "selected";} ?>>Secondary</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="" class="font-weight-bold">Nilai Target</label>
                                    <div class="form-group">
                                        <input type="text" name="target" value="<?=$target;?>" class="form-control" autocomplete="off" required />
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