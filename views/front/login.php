<?php include('templates/head.php')?>

	<div class="loginfondo">
		<h2 class="titulolog">Login</h2>
			<form name="login" class="login">
			<p align="center">
				<input type="email" name="correo" class="forminput" placeholder="Correo"></input>
				<input type="password" name="password" class="forminput" placeholder="Contraseña"></input>
			</p>
			<p class="p_recordar">
				<input type="checkbox" name="recordar" class="recordar">Recordar contraseña</input>
			</p>
				<div class="botoneslog">
				<input type="submit" value="Ingresar" name="ingresar" class="botonlog">
				<input type="reset" value="Cancelar" name="cancelar" class="botonlog">
				</div>
			</form>
	</div>

<?php include('templates/foot.php')?>