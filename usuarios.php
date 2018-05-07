<?php

session_start();


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/estilos_usuarios.css">
		<link rel="stylesheet" type="text/css" href="assets/css/estilos_pie.css">
		
		
		<script src="assets/js/jquery.min.js" type="text/javascript" ></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		
</head>
<body>

	<?php

	require 'navegacion_usuarios.php';


	?>



	<div class="seccion_principal ">
			<div class="container">
				
				<h1>Registrar clientes</h1>
				
				
				<form action="registrar_clientes.php" method="POST" accept-charset="utf-8">
					<div class="row">
						
					
					<div class="espaciou form-group col-xs-3 col-sm-3 col-md-12 col-lg-12">						
						
						<label>Nombre:</label>
						<input type="text" name="nombre"  >
						
					</div>
				</div>

				<div class="row">

					<div class="espaciou form-group col-xs-3 col-sm-3 col-md-12 col-lg-12">
						<label>Apellido:</label>
						<input type="text" name="apellido" >						
						
					</select>
				</div>
			</div>

				<div class="row">

					<div class="espaciou form-group col-xs-3 col-sm-3 col-md-12 col-lg-12">
						<label>Ciudad:</label>
						<input type="text" name="ciudad" >							
						
					</select>
				</div>
			</div>


                     <div class="row">

						<div class="espaciou form-group col-xs-3 col-sm-3 col-md-12 col-lg-12">				
						
						<label>Telefono:</label>
						<input type="text" name="telefono" >
						
					</div>
				</div>

				<div class="row">

					<div class="espaciou form-group col-xs-3 col-sm-3 col-md-12 col-lg-12">
						<label>Profesion:</label>
						<input type="text" name="profesion"  >					
						
						
					</select>
				</div>
			</div>				
					
				
				<div class="row">

				<div class="espaciod form-group col-xs-3 col-sm-3 col-md-12 col-lg-12">
					<button type="submit" class="buno btn-success btn-md glyphicon glyphicon-ok " name="enviar" >Enviar</button>
					<button type="reset" class="bdos btn-danger btn-md glyphicon glyphicon-remove" name="cancelar" >Cancelar</button>
				</div>
			</div>

			</form>
		</div>
	</div>


	<div class="container">


	


		<h1>Clientes registrados para la fecha:
			<?php

				echo date("d")."/".date("M")."/".date("Y");

			?>
		</h1>
       
       <button  class="btn-danger btn-md glyphicon glyphicon-file">
       		<a href="reporte.php" >Reporte</a>
       </button>
		

	<?php

		require 'buscar_clientes.php';
	?>



	</div>

	<?php

	require 'pie.php';


	?>
	
</body>
</html>