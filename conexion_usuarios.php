<?php

$cedula=$_POST["cedula"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$estado=$_POST["estado"];
$ciudad=$_POST["ciudad"];
$municipio=$_POST["municipio"];
$parroquia=$_POST["parroquia"];
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemaphp";


$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO usuarios (cedula,nombre, apellido , estado ,ciudad ,municipio ,parroquia,
usuario,contrasena)
VALUES ('$cedula','$nombre', '$apellido', '$estado', '$ciudad', '$municipio','$parroquia',
'$usuario','$contrasena')";

if (mysqli_query($conn, $sql)) {
    header('Location:pie.php');
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>