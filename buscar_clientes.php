<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemaphp";


$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT nombre,apellido,ciudad,telefono,profesion from clientes";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    
    
    echo '<table  class="table table-bordered table-hover table-responsive">';
    echo '<thead>';
    echo '<td class="active">';
    echo 'Nombre';
    echo '</td>';
    echo '<td class="active">';
    echo 'Apellido';
    echo '</td>';
    echo '<td class="active">';
    echo 'Ciudad';
    echo '</td>';
    echo '<td class="active">';
    echo 'Telefono';
    echo '</td>';
    echo '<td class="active">';
    echo 'Profesion';
    echo '</td>';

        while ($row = mysqli_fetch_assoc($result)) {

     echo '<tr>';
     echo '<td class="info">';
     echo $row['nombre'];
     echo '</td>';     
     echo '<td class="info">';
     echo $row['apellido'];
     echo '</td>';
     echo '<td class="info">';
     echo $row['ciudad'];
     echo '</td>';
     echo '<td class="info">';
     echo $row['telefono'];
     echo '</td>';
     echo '<td class="info">';
     echo $row['profesion'];
     echo '</td>';
     echo '</tr>';
}
     echo '</table>';   

   

} else {
    echo "0 results";
}


mysqli_close($conn);
?>