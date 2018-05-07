<?php

	session_start();

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Iniciar Sessión</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/estilos_iniciar_session.css">
		<link rel="stylesheet" type="text/css" href="assets/css/estilos_pie.css">
		
		
		<script src="assets/js/jquery.min.js" type="text/javascript" ></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		
	</head>
	<body>
		<?php
			require 'navegacion.php';
		?>
		
		<?php
		

			// remove all session variables
			session_unset(); 

			// destroy the session 
			session_destroy(); 


	?>
		<div class="row seccion_principal">
			<div class="container">
				
				<h1>Inicio de sessión</h1>
				
				
				<form action="ingresar_usuarios.php" method="POST" accept-charset="utf-8">
					
					
					<div class="espaciou ">
						<label>Usuario:</label>
						<input type="text" name="usuario" >
					</div>
					
					<div class="espaciod " >
						<label>Contraseña:</label>
						<input type="password" name="contrasena">
					</div>
					
					<div class="espaciot form-group">
						<button type="submit" class="buno btn-success btn-md glyphicon glyphicon-ok " name="enviar" >Enviar</button>
						<button type="reset" class="bdos btn-danger btn-md glyphicon glyphicon-remove" name="cancelar" >Cancelar</button>
					</div>
				</form>
			</div>
		</div>
		
		<?php
				require 'pie.php';
		?>
	</body>
</html>