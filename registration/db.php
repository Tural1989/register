<?php

$host     = "localhost";
$username = "root";
$password = "";
$database = "login";

$connect  = mysqli_connect($host,$username,$password,$database);
if (!$connect) {
	echo "<script>alert('Əlaqə qurulmadı')</script>";
}



?>