<?php


$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$ciudad=$_POST["ciudad"];
$telefono=$_POST["telefono"];
$profesion=$_POST["profesion"];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemaphp";


$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO clientes (nombre, apellido , ciudad , telefono , profesion)
VALUES ('$nombre', '$apellido', '$ciudad' , '$telefono', '$profesion')";

if (mysqli_query($conn, $sql)) {
    header('Location:usuarios.php');
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>