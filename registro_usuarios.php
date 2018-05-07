<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Registro</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/estilos_registro_usuarios.css">
		<link rel="stylesheet" type="text/css" href="assets/css/estilos_pie.css">
		
		<script src="assets/js/jquery.min.js" type="text/javascript" ></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		
		<script src="assets/js/cargar.js" type="text/javascript"></script>
		
	</head>
	<body>
		<?php
		require 'navegacion.php';
		?>
		
		<div class="seccion_principal ">
			<div class="container">
				
				<h1>Registro en el sistema</h1>
				
				
				<form action="conexion_usuarios.php" method="POST" accept-charset="utf-8">
					<div class="row">
						
					
					<div class="form-group col-xs-3 col-sm-3 col-md-12 col-lg-12">
						<label>Cedula:</label>
						<input type="text" name="cedula"  >
						
						<label>Nombre:</label>
						<input type="text" name="nombre"  >
						
					</div>
				</div>

				<div class="row">

					<div class="form-group col-xs-3 col-sm-3 col-md-12 col-lg-12">
						<label>Apellido:</label>
						<input type="text" name="apellido"  >
						
						
						
						<label>Usuario:</label>
						<input type="text" name="usuario" >
						
						
					</select>
				</div>
			</div>

			<div class="row">

				<div class="form-group col-xs-3 col-sm-3 col-md-12 col-lg-12">
					<label>Contraseña:</label>
					<input type="password" name="contrasena">
					
					
					<label>Repetir Contraseña:</label>
					<input type="password" name="contrasenaa" >
				</div>
			</div>

			<div class="row">
				
				<div class="form-group col-xs-3 col-sm-3 col-md-12 col-lg-12">
					<label>Estado:</label>
					<select name="estado" id="estado" onchange="irCiudad();" >
					</select>

					<label>Ciudad:</label>
					<select name="ciudad" id="ciudad" onchange="irMunicipio();" disabled >				
						
					</select>
					
					
					<label>Municipio:</label>
					<select name="municipio" id="municipio" disabled>						
						
					</select>
				</div>

			</div>

				
					
					
					
				
				<div class="row">

				<div class="form-group col-xs-3 col-sm-3 col-md-12 col-lg-12">
					<button type="submit" class="buno btn-success btn-md glyphicon glyphicon-ok " name="enviar" >Enviar</button>
					<button type="reset" class="bdos btn-danger btn-md glyphicon glyphicon-remove" name="cancelar" >Cancelar</button>
				</div>
			</div>

			</form>
		</div>
	</div>
	<?php
		require 'pie.php';
	?>
	
	
	
	
	
	
</body>
</html>