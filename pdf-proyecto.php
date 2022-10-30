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
    $this->Cell(30,10,'Reportes',0,0,'C');
    // Salto de línea
    $this->Ln(20);


    // $this->Cell(30,10, 'Codigo', 1, 0, 'C', 0);
    $this->Cell(50,10, 'Nombre', 1, 0, 'C', 0);
    $this->Cell(50,10, 'ubicacion', 1, 0, 'C', 0);
    $this->Cell(45,10, 'Inicio', 1, 0, 'C', 0);
    $this->Cell(45,10, 'Fin', 1, 1, 'C', 0);
    // $this->Cell(50,10, 'Descripcion', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}


require 'cn.php';
$query="SELECT cod_proyecto, nom_proyecto, ubicacion_proyecto, fecha_inicio, fecha_fin, descripcion FROM proyecto";
$resultado = $mysqli->query($query);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);


while($row = $resultado->fetch_assoc()){
    // $pdf->Cell(10,10, $row['cod_proyecto'], 1, 0, 'C', 0);
    $pdf->Cell(50,10, $row['nom_proyecto'], 1, 0, 'C', 0);
    $pdf->Cell(50,10, $row['ubicacion_proyecto'], 1, 0, 'C', 0);
    $pdf->Cell(45,10, $row['fecha_inicio'], 1, 0, 'C', 0);
    $pdf->Cell(45,10, $row['fecha_fin'], 1, 1, 'C', 0);
    // $pdf->Cell(40,10, $row['descripcion'], 1, 1, 'C', 0);


}


$pdf->Output();
?>