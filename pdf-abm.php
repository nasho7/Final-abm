<?php

require('conexión.php');
require('fpdf.php');


$sql = "SELECT d.id_docentes, d.DNI, d.nombre_docente, d.apellido_docente, d.dirección, d.Situación, m.materia_curricular 
        FROM docentes d
        LEFT JOIN materia m ON d.id_docentes = m.id_docentes";
        
$resultado = $conexion->query($sql);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(190, 10, 'Lista de Docentes', 1, 1, 'C');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(35, 10, 'Nombre', 1);
$pdf->Cell(40, 10, 'Apellido', 1);
$pdf->Cell(40, 10, 'DNI', 1);
$pdf->Cell(40, 10, 'Materia', 1);
$pdf->Cell(35, 10, 'Situacion ', 1);
$pdf->Ln();

$pdf->SetFont('Arial', '', 10);
while ($fila = $resultado->fetch_assoc()) {
    $pdf->Cell(35, 10, $fila['nombre_docente'], 1);
    $pdf->Cell(40, 10, $fila['apellido_docente'], 1);
    $pdf->Cell(40, 10, $fila['DNI'], 1);
    $pdf->Cell(40, 10, $fila['materia_curricular'], 1);
    $pdf->Cell(35, 10, $fila['Situación'], 1);
    $pdf->Ln();
}

// Salida del archivo PDF
$pdf->Output();
?>
