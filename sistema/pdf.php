<?php
require('fpdf.php');
include ("conexion.php");
session_start();

class PDF extends FPDF
{
// Cabecera de página
function Header()
{

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Datos del Usuario',0,0,'C');
    // Salto de línea
    $this->Ln(20);
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


        $consecutivo = $_POST['consecutivo'];
        $sqlr = "SELECT fechaent,horaent,empresa,autorizar,motivo,equipo FROM registro WHERE id_consecutivo = '$consecutivo'";
    	$sql = "SELECT * FROM persona WHERE id_consecutivo = '$consecutivo'";
        $sql2 = "SELECT * FROM salida WHERE id_consecutivo = '$consecutivo'";
        $resultr = $conex->query($sqlr);
    	$result = $conex->query($sql);
        $result2 = $conex->query($sql2);


    	

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

while($mostrar=mysqli_fetch_array($result)){
$pdf->Cell(90, 10, 'ID: ', 0, 0, 'C', 0);
$pdf->Cell(90, 10, $mostrar['id_consecutivo'], 1, 1, 'C', 0);
$pdf->Cell(90, 10, 'Nombre: ', 0, 0, 'C', 0);
$pdf->Cell(90, 10, $mostrar['nombre'], 1, 1, 'C', 0);
$pdf->Cell(90, 10, 'Tpo de id: ', 0, 0, 'C', 0);
$pdf->Cell(90, 10, $mostrar['tipo'], 1, 1, 'C', 0);
$pdf->Cell(90, 10, 'Persona a visitar: ', 0, 0, 'C', 0);
$pdf->Cell(90, 10, $mostrar['pervis'], 1, 1, 'C', 0);
$pdf->Cell(90, 10, 'departamento: ', 0, 0, 'C', 0);
$pdf->Cell(90, 10, $mostrar['departamento'], 1, 1, 'C', 0);
$pdf->Cell(90, 10, 'Fecha de entrada: ', 0, 0, 'C', 0);
$pdf->Cell(90, 10, $mostrar['fechaent'], 1, 1, 'C', 0);
$pdf->Cell(90, 10, 'Hora de entrada: ', 0, 0, 'C', 0);
$pdf->Cell(90, 10, $mostrar['horaent'], 1, 1, 'C', 0);
}
while($mostrar1=mysqli_fetch_array($resultr)){
$pdf->Cell(90, 10, 'Empresa de donde proviene: ', 0, 0, 'C', 0);
$pdf->Cell(90, 10, $mostrar1['empresa'], 1, 1, 'C', 0);
$pdf->Cell(90, 10, 'Quien autoriza?: ', 0, 0, 'C', 0);
$pdf->Cell(90, 10, $mostrar1['autorizar'], 1, 1, 'C', 0);
$pdf->Cell(90, 10, 'Motivo de la visita: ', 0, 0, 'C', 0);
$pdf->Cell(90, 10, $mostrar1['motivo'], 1, 1, 'C', 0);
$pdf->Cell(90, 10, 'Equipo: ', 0, 0, 'C', 0);
$pdf->Cell(90, 10, $mostrar1['equipo'], 1, 1, 'C', 0);
}
while($mostrar2=mysqli_fetch_array($result2)){
$pdf->Cell(90, 10, 'Fecha de salida: ', 0, 0, 'C', 0);
$pdf->Cell(90, 10, $mostrar2['fechasal'], 1, 1, 'C', 0);
$pdf->Cell(90, 10, 'Hora de salida: ', 0, 0, 'C', 0);
$pdf->Cell(90, 10, $mostrar2['horasal'], 1, 1, 'C', 0);
}

$pdf->Output();
?>