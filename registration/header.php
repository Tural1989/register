<?php
include("db.php");
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration and Login system</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<ul>
			<li><a href="index.php">Ana səhifə</a></li>
			<li><a href="#">Məhsullar</a></li>
			<li><a href="#">Haqqımızda</a></li>
			<li><a href="#">Əlaqə</a></li>
		</ul>
		<div id="regs">
			<?php
			if (isset($_SESSION["username"])) {
				 echo "<span class='span_username'>Xoş gəldin </&nbsp>".$_SESSION["username"]."</span>";
				 echo "<a href='logout.php'>Çıxış</a>";
			}else{
              echo "<a href='login.php'>Daxil ol</a>";
              echo "<a href='register.php'>Qeydiyyat</a>";
			}

			?>
		</div>
	</header>