<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemaphp";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id,ciudad FROM hubicacion where ciudad='caracas' order by ciudad asc";
$result = mysqli_query($conn, $sql);
echo '<option value="0">[SELECCIONE]</option>';

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
          
		echo '<option value="'.$row["id"].'" >'.$row["ciudad"].'</option>';     

    }
    
} else {
    echo "0 results";
}


mysqli_close($conn);
?>

