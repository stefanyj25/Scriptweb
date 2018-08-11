<?php include('templates/head.php')?>

<div class="registrofondo">
	<h2 class="titulor">Formulario de Registro</h2>
	
	<form name="register" class="formregistro" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<p>
			<select name="tipo_user" class="selectipo">
				<option value="tipo_user">Tipo de usuario</option>
				<option value="aprendiz">Aprendiz</option>
				<option value="docente">Docente</option>
				<option value="docente">Coordinador</option>
			</select>
		</p>
		<p>
			<select name="Sexo" class="Sex">
				<option value="opcion">Genero</option>
				<option value="femenino">Femenino</option>
				<option value="masculino">Masculino</option>
			</select>
		</p>

		<p align="center">
			<input class="formreg" type="text" name="nombre" placeholder="Nombre completo" required>
		</p>
			<div class="divfecha">
				<p class="text_fecha">Fecha de nacimiento</p>
					<select name="Dia" class="fecha" required>
				      	<option value="Dia" selected>Dìa</option>
				            <script>
				                    var i;
				                        for (i=31; i>=01; i--){
				                           	document.write("<option>" + i + "</option>");}
				            </script>
					</select>
				<select name="Mes" class="fecha" required>
		      	<option value="Mes" selected>Mes</option>
		            <script>
		                   	var i;
		                        var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
		                              for (i = 0; i<12; i++){
		                                    document.write("<option>" + meses[i] + "</option>");}
		            </script>
				</select>
				
				<select name="anio" class="fecha">
				<option value="anio" selected>Año</option>
					<script>
							var i;
					for (i = 2000; i>=1980; i--){
						document.write("<option>" + i + "</option>");
					}

					</script>
				</select>
			</div>
		<p>
			<select name="pais" class="pais">
				<option value="opcion">Pais</option>
				<option value="opcion">Colombia</option>
			</select>
		</p>
		<p>
			<select name="departamento" class="pais">
				<option value="opcion">Departamento</option>
				<option value="opcion">Cundinamarca</option>
			</select>
		</p>
		<p>
			<select name="ciudad" class="pais">
				<option value="opcion">Ciudad</option>
				<option value="opcion">Bogotá</option>
			</select>
		</p>
		<p>
			<select name="corregimiento" class="pais">
				<option value="opcion">Corregimiento</option>
				<option value="opcion">Suma paz</option>
			</select>
		</p>
		<p>
			<select name="comuna" class="pais">
				<option value="opcion">Comuna</option>
				<option value="opcion">Engativa</option>
			</select>
		</p>
		<p>
			<select name="barrio" class="pais">
				<option value="opcion">Barrio</option>
				<option value="opcion">Fontanar</option>
			</select>
		</p>
		<p align="center">
			<select name="tipo_documento" class="tipodoc">
				<option value="tipo_documento">Tipo de documento</option>
				<option value="cedula">C.C</option>
				<option value="tarjeta identidad">T.I</option>
		<p align="center">
			<input class="numerodoc" type="text" name="identidad" placeholder="Número" required>
		</p>
			</select>
		<p align="center">
			<input class="formreg" type="text" name="telefono" placeholder="Telefono" required>
			<input class="formreg" type="email" name="correo" placeholder="Correo electronico" required>
			<input class="formreg" type="password" name="password" placeholder="Contraseña" required>
			<input class="formreg" type="password" name="conf_pass" placeholder="Confirmar contraseña" required>
			
			<div class="botones">
			<input class="botonreg" type="submit" name="btn-register" value="Aceptar">
			<input class="botonreg" type="reset" value="Limpiar datos">
			</div>
		</p>
	</form>
</div>

<?php include('templates/foot.php')?>