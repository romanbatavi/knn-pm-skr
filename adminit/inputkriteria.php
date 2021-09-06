<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="portlet">
				<div class="portlet-header portlet-header-bordered">
					<h3 class="portlet-title">Tambah Data SubKriteria PM</h3>
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
                            <option value="">--Pilih Aspek--</option>
							<?php
							require_once "database.php";
							$db  = new database();
							$kon = $db->connect();
							$qcek = $kon->query("select * from pm_aspek");
							while ($row = $qcek->fetch_array()) {
								echo"<option value='".$row['id_aspek']."'>".$row['namaaspek']."</option>";
							}
							?>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label for="" class="font-weight-bold">Kode Kriteria</label>
                    <div class="form-group">
                        <input type="text" name="kdkriteria" class="form-control" autocomplete="off" required />
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label for="" class="font-weight-bold">Kriteria</label>
                    <div class="form-group">
                        <input type="text" name="nmkriteria" class="form-control" autocomplete="off" required />
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label for="" class="font-weight-bold">Jenis Factor</label>
                    <div class="form-group">
                        <select class="form-control" name="jenis" required>
                            <option value="">--Pilih Jenis Factor--</option>
                            <option value="Core">Core</option>
                            <option value="Secondary">Secondary</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label for="" class="font-weight-bold">Nilai Target</label>
                    <div class="form-group">
                        <input type="text" name="target" class="form-control" autocomplete="off" required />
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer text-right">
            <button name="simpan" type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            <button type="reset" class="btn btn-info"><i class="fa fa-sync-alt"></i> Reset</button>
        </div>
    </form>
	</div>
	</div>
	</div>
</div>
</div>