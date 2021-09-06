<?php
//including the database koneksi file
include_once("views/config.php");
if(addslashes(isset($_GET['username']))){
    $username = addslashes($_GET['username']);
	$result=mysqli_query($mysqli, "SELECT * FROM user where username LIKE '%$username%'");
}
    while($res=mysqli_fetch_array($result))
    {
        $nama_lengkap = $res['nama_lengkap'];
        $hak_akses = $res['hak_akses'];

        
    }
?>
<div class="modal-dialog">
    <div class="modal-content">

		<div class="modal-header">
        <h5 class="modal-title">Form Lupa PSW(<?php echo $hak_akses;?>) / <?php echo $nama_lengkap; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="modal-body">
        	<form  action="plupapsw.php" name="modal_popup"  enctype="multipart/form-data" method="POST" onsubmit="return true;">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Modal Name">Modal Name</label>
                    <input type="hidden" name="username" id="edit-id"  class="form-control" value="<?php echo $username; ?>" />
     				<input type="text" name="modal_name" id="edit-name" class="form-control" Readonly value="<?php echo $nama_lengkap; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Modal Name">Masukan Password Baru Anda</label>
     				<input type="password" name="password" id="edit-name" class="form-control">
                </div>
	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit" name="update" value="update">
	                    Update
	                </button>

	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>

             

            </div>

           
        </div>
    </div>