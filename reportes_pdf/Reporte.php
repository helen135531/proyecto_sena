
 <?php
	require '../assets/fpdf/fpdf.php';
	require '../modelo/db.php';

	// Consulta SQL para obtener los datos de los pedidos

$sql = "SELECT * FROM pedido";
$stmt = $db->prepare($sql);
$stmt->execute();

// Crear una instancia de FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Título del informe
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 10, 'Reporte de Pedidos', 0, 1, 'C');

// Encabezados de la tabla
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(20, 10, 'ID Pedido', 1);
$pdf->Cell(30, 10, 'Fecha Pedido', 1);
$pdf->Cell(30, 10, 'Hora Pedido', 1);
$pdf->Cell(30, 10, 'Total Pedido', 1);
$pdf->Cell(40, 10, 'Estado Pedido', 1);
$pdf->Cell(40, 10, 'Pedido a Domicilio', 1);
$pdf->Ln();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $pdf->Cell(20, 10, $row['idPedido'], 1);
    $pdf->Cell(30, 10, $row['fechaPedido'], 1);
    $pdf->Cell(30, 10, $row['horaPedido'], 1);
    $pdf->Cell(30, 10, $row['totalPedido'], 1);
    $pdf->Cell(40, 10, $row['estadoPedido'], 1);
    $pdf->Cell(40, 10, $row['pedidoaDomicilio'], 1);
    $pdf->Ln();
}

// Nombre del archivo PDF de salida
//$filename = 'reporte_pedidos.pdf';

// Generar el PDF
$pdf->Output();

// Cierra la conexión a la base de datos
$conexion->close();
?>
?>
