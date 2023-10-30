<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{

    $this->SetDrawColor(0,0,0);
    $this->SetTextColor(0,0,0);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(80,10,'Reporte de productos',1,0,'C');
    // Salto de línea
    $this->Image('zyro-image-removebg-preview.png',10,8,33);
    $this->Ln(10);

    $this->Image('zyro-image-removebg-preview.png',10,8,33);
    $this->Ln(20);

$this->Cell(30, 10, utf8_decode('IdProducto'), 1, 0, 'C');
    $this->Cell(80, 10, utf8_decode('Producto'), 1, 0, 'C');
    $this->Cell(40, 10, utf8_decode('Precio'), 1, 0, 'C',0);
    $this->Cell(40, 10, utf8_decode('Estado'), 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'nuevo carro/project/components/connect.php';
$conexion = conectar();
$consulta = "SELECT * FROM Producto";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
    $pdf->Cell(30, 10, $row["Producto"], 1, 0, 'C',0);
    $pdf->Cell(80, 10, utf8_decode($row["DescripcionProducto"]), 1, 0, 'C');
    $pdf->Cell(40, 10, $row["valorunitarioProducto"], 1, 0, 'C',0);
    $pdf->Cell(40, 10, $row["estadoProducto"], 1, 0, 'C', 0);
    $pdf->Ln();
}



$pdf->Output();
?>
