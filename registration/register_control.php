<?php
include "db.php";

if (isset($_POST["submit"])) {
	$register_name             = $_POST["username"];
	$register_password         = $_POST["password"];
	$register_password_confirm = $_POST["cnfpassword"];

	if ($register_password==$register_password_confirm) {
		$sql    = "SELECT * FROM users WHERE username='$register_name'";
		$result = mysqli_query($connect,$sql);
		$num    = mysqli_num_rows($result);
		echo $num;

		if ($num>0) {
			header("location:register.php?durum=NoUser");
		}


		else{
			$sql = "INSERT INTO users(username,password) VALUES('$register_name','$register_password')";		
			$result =mysqli_query($connect,$sql);
			if ($result) {
				echo "<script>alert('Qeydiyyat ugurla tamamlandi!')</script>";
				session_start();
				$_SESSION["username"]=$register_name;
				header("location:index.php");
				
				
			}else{
				echo "<script>alert('Xəta!')</script>";
			}

		}
	}else{
		header("location:register.php?durum=NoParol");
	}

	echo $register_name;
	echo $register_password;
	echo $register_password_confirm;

}

?>