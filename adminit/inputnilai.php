<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="portlet">
				<div class="portlet-header portlet-header-bordered">
					<h3 class="portlet-title">Data Penilaian Beasiswa PM</h3>
				</div>
				<div class="portlet-body">
					<div class="input-group">
						<div class="input-group-prepend">
							<label class="input-group-text" for="inputGroupSelect01">Pilih Aspek Penilaian</label>
						</div>
						<select class="custom-select" id="inputGroupSelect01" onchange="javascript:location.href = this.value;">
							<option selected>Daftar Aspek</option>
							<option value="?m=inputnilai_pe">Penilaian</option>
							<option value="?m=inputnilai_ke">Kemampuan</option>
							<option value="?m=inputnilai_keg">Kegiatan</option>
							<option value="?m=inputnilai_eks">Ekstrakulikuler</option>
							<option value="?m=inputnilai_skp">Sikap</option>
							<option value="?m=inputnilai_pre">Prestasi</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>