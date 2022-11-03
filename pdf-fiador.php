<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(50,10,'Reportes Formularios de Fiador',0,0,'C');
    // Salto de línea
    $this->Ln(20);


    // $this->Cell(30,10, 'Codigo', 1, 0, 'C', 0);
    $this->Cell(15,10, 'Cod', 1, 0, 'C', 0);
    $this->Cell(50,10, 'Precio', 1, 0, 'C', 0);
    $this->Cell(45,10, 'Ubicacion', 1, 0, 'C', 0);
    $this->Cell(45,10, 'Tamano', 1, 1, 'C', 0);
    // $this->Cell(50,10, 'Descripcion', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    $this->Image('BizPage\assets\img\CEMPRODECA.png', 5, 5, 30); 
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}


require 'cn.php';
$query="SELECT cod_formF, monto_solicitar, nombre_cliente, fecha_nac, edad FROM formularios_fiador";
$resultado = $mysqli->query($query);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);


while($row = $resultado->fetch_assoc()){
    $pdf->Cell(15,10, $row['cod_formF'], 1, 0, 'C', 0);
    $pdf->Cell(50,10, $row['monto_solicitar'], 1, 0, 'C', 0);
    $pdf->Cell(50,10, $row['nombre_cliente'], 1, 0, 'C', 0);
    $pdf->Cell(45,10, $row['fecha_nac'], 1, 0, 'C', 0);
    $pdf->Cell(45,10, $row['edad'], 1, 1, 'C', 0);
    // $pdf->Cell(40,10, $row['descripcion'], 1, 1, 'C', 0);


}


$pdf->Output();
?>