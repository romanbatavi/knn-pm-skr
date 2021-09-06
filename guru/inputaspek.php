<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="portlet">
				<div class="portlet-header portlet-header-bordered">
					<h3 class="portlet-title">Tambah Data Aspek PM</h3>
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
                        <input type="text" name="id_aspek" class="form-control" autocomplete="off" required />
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label for="" class="font-weight-bold">Aspek</label>
                    <div class="form-group">
                        <input type="text" name="namaaspek" class="form-control" autocomplete="off" required />
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label for="" class="font-weight-bold">Persentase (%)</label>
                    <div class="form-group">
                        <input type="text" name="persentase" class="form-control" autocomplete="off" required />
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label for="" class="font-weight-bold">Bobot Core (%)</label>
                    <div class="form-group">
                        <input type="text" name="bobot_core" class="form-control" autocomplete="off" required />
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label for="" class="font-weight-bold">Bobot Secondary (%)</label>
                    <div class="form-group">
                        <input type="text" name="bobot_secondary" class="form-control" autocomplete="off" required />
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