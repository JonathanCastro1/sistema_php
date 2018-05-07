<?php
require('librerias/fpdf.php');


class PDF extends FPDF
{




function MiTabla(){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemaphp";


$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT nombre,apellido,ciudad,telefono,profesion from clientes";

$result = mysqli_query($conn, $sql);




foreach($result as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        	$this->Ln();
    }




}

}



$pdf = new PDF();


$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->MiTabla();


$pdf->Output();
?>