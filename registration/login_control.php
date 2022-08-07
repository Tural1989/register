<?php
include "db.php";

if (isset($_POST["submit"])) {
	$user = $_POST["username"];
	$password = $_POST["password"];

	$istifadeci_tablosu=mysqli_query($connect,"select * from users where username='".$user."' and password='".$password."'");
	$user_sayi=mysqli_num_rows($istifadeci_tablosu);
	if ($user_sayi>0) {
		session_start();
		$_SESSION["username"]=$user;
		header("location:index.php");
	}else{
		header("location:login.php?durum=no");
	}




	echo $user;
	echo $password;

}

?>