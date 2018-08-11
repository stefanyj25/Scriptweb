<?php include('templates/head.php')?>

<div class="contactofondo">

<h2 class="tituloc">CONTACTANOS</h2>

<form name="contacto" class="formcontacto" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">>

<p align="center">
			<input class="formcon" type="text" name="nombre" placeholder="Nombre completo" required>
</p>

<p align="center">
			<input class="formcon" type="email" name="correo" placeholder="Correo electronico" required>
</p>

<p align="center">
			<textarea class="comentario">Comentario</textarea>
</p>

<div class="botones_c">
	<p align="center">
			<input class="botoncontac" type="submit" name="btn-register" value="Aceptar">
			<input class="botoncontac" type="reset" value="Limpiar datos">
	</p>
</div>

</form>

<?php include('templates/foot.php')?>