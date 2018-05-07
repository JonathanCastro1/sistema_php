<?php

session_start();

/* @var $_POST type */
$usuario= $_POST['usuario'];
$contrasena= $_POST['contrasena'];
/*La busqueda en la base de datos se realiza de este modo para evitar las inyecciones sql*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemaphp";








// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT usuario, contrasena FROM usuarios where usuario='$usuario' and contrasena='$contrasena' ";
$result = mysqli_query($conn, $sql);




$_SESSION["user"] = $usuario;






if (mysqli_num_rows($result) > 0) {
    // output data of each row
   		
      
   		header('location:usuarios.php');
   		
   
} else {
    echo "Datos invalidos";
}





?>