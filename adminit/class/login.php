<?php


class login {
	public $username;
	public $password;

	public function __construct($username,$password)
	{
		$this->username = $username;
		$this->password = $password;
	}

	public function validasi() {

		include "database.php";
  	$db = new database();
  	$kon = $db->connect();
  session_start();
		$_SESSION['username']    = $this->username;
		$_SESSION['password'] = $this->password;

		$lihat = $kon->query("select * from pm_pengguna where username ='".$this->username."' and password ='".$this->password."'");

		$datalogin = $lihat->fetch_array();
		$dtemail = $datalogin['username'];
		$dtpass = $datalogin['password'];
		$dtnama = $datalogin['nama_pengguna'];

		$_SESSION['nama'] = $dtnama;

		if(($dtemail == $this->username) and ($dtpass == $this->password))
			{
				header("location:index.php");

			}
		else
			{
				//penanganan error
				$error ="Username atau Password Salah !";
				?>
					<script type="text/javascript">
							function timedMsg()
							{
								alert ("<?php echo $error; ?>");
								window.location = "login.php";
							}
							setTimeout("timedMsg()", 000);
					</script>
				<?php
			}
	}

	public function doLogout() {
		session_start();
		session_destroy();
		session_unset();
		header('Location:login.php');
		exit();
	}
}
?>
