<?php
include "header.php";
?>
<div id="centered">
	<form method="POST" action="login_control.php" id="register_form">
		<p>
			<label>İstifadəçi adı</label>
			<input type="text" name="username" required="">
		</p>
		<p>
			<label>Şifrə</label>
			<input type="password" name="password" required="">
		</p>
		<p>
			<input type="submit" name="submit" value="Daxil ol" id="btn">
		</p>
		<p style="text-align: center;">
			hesabin yoxdur?
		</p>
		<p>
			<a style=" text-align: center; padding: 5px 12px;background: tomato;color: white;text-decoration: none;display: inherit;border-radius: 4px;" href="register.php">Qeydiyyat</a>
		</p>
	</form>	
</div>

<?php
include "footer.php";
?>
