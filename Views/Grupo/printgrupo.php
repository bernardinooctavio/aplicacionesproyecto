<?php
ob_start();
require_once("Public/fpdf/fpdf.php");

// $pdf=new FPDF();
class PDF extends FPDF
{
function Header()
{
    global $title;

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Calculamos ancho y posición del título.
    $w = $this->GetStringWidth($title)+6;
    $this->SetX((210-$w)/2);
    // Colores de los bordes, fondo y texto
    $this->SetDrawColor(0,80,180);
    $this->SetFillColor(230,230,0);
    $this->SetTextColor(220,50,50);
    // Ancho del borde (1 mm)
    $this->SetLineWidth(1);
    // Título
  //  $this->Cell($w,9,$title,1,1,'C',true);
    // Salto de línea
    $this->Ln(10);
}

function Footer()
{
    // Posición a 1,5 cm del final
    $this->SetY(-15);
    // Arial itálica 8
    $this->SetFont('Arial','I',8);
    // Color del texto en gris
    $this->SetTextColor(128);
    // Número de página
    $this->Cell(0,10,'Página '.$this->PageNo(),0,0,'C');


}

}
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AddPage();
//$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'Boleta Grupo',0,0,'C');
$pdf->Ln();
$pdf->Ln();
// $pdf->SetX(15);
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(26,122,113);
$pdf->Cell(30, 10,'id_grupo',0,0,'C',1);
$pdf->Cell(30, 10,'desc_grupo',0,0,'C',1);
//$pdf->Cell(30, 10,'Alumno',0,0,'C',1);
//$pdf->Cell(30, 10, 'Unidad I', 0, 0, 'C', 1);
//$pdf->Cell(30, 10, 'Unidad II', 0, 0, 'C', 1);
//$pdf->Cell(30, 10, 'Unidad III', 0, 0, 'C', 1);
//$pdf->Cell(30, 10, 'Unidad IV', 0, 0, 'C', 1);
$pdf->Ln();
$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','',10);
while($fila= mysqli_fetch_assoc($datos)){
	$pdf->Cell(30,10,$fila['id_grupo']);
  	$pdf->Cell(30,10,$fila['desc_grupo']);
//	$pdf->Cell(80,20,$fila['calificacion']);
	$pdf->Ln();
}
$pdf->Output("F","reporteu.pdf");
ob_end_flush();
?>
