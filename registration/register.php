<?php
include "header.php";
?>

<div id="centered">
	<form method="POST" action="register_control.php" id="register_form">
		<p>
			<label>İstifadəçi adı</label>
			<input type="text" name="username" required="">
		</p>
		<p>
			<label>Şifrə</label>
			<input type="password" name="password" required="">
		</p>
		<p>
			<label>Şifrə təkrarı</label>
			<input type="password" name="cnfpassword" required="">
		</p>
		<?php
		$gelen_durum=@$_GET["durum"];
		if ($gelen_durum=="NoParol") {?>
			<h5 style="color: red;font-size: 14px"><i>Parollar eyni deyil *</i></h5>
			<?php
		}
		if ($gelen_durum=="NoUser") {?>
			<h5 style="color: red;font-size: 14px"><i>Bu adda istifadəçi artıq mövcuddur *</i></h5>
			<?php
		}
		?>
		<p>
			<input type="submit" name="submit" value="Qeydiyyat" id="btn">
		</p>



	</form>
</div>

<?php
include "footer.php";
?>