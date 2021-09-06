<?php
require_once "class/kriteria.php";
$kriteria = new kriteria();
?>
<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="portlet">
							<div class="portlet-header portlet-header-bordered">
								<h3 class="portlet-title">Data Kriteria Profile Matching</h3>
								<div class="form-group">
                <a class="btn btn-primary" href="?m=inputkriteria"><span class="glyphicon glyphicon-plus"></span> Tambah Data Kriteria PM</a>
            </div>
						</div>
						<div class="portlet-body">
								<!-- <p>
									In this example you can see Datatable doing both horizontal and vertical scrolling at the same time. To enable y-scrolling or x-scrolling simply set the <code>scrollY|scrollX</code> parameter to be whatever you want the container wrapper's height or width.
								</p>
								<hr> -->
								<?php
                                $kriteria->tampil(); 
                                ?>
							</div>
						</div>
					</div>
				</div>
			</div>