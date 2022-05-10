<?php
include '../vendor/fpdf/fpdf/src/Fpdf/Fpdf.php';
include '../Controller/reclamationC.php';
      
	$reclam=new reclamC();
	$listeReclamation=$reclam->afficherRecDetail($_GET['numrec']);
use Fpdf\Fpdf;


foreach($listeReclamation as $rec)
{
$pdf = new FPDF();
$pdf->AddPage();
   $pdf->Image('logo.png',10,6,30);
$pdf->SetFont('Arial','B',16);
$pdf->setX(80);
$pdf->Cell(40,10,'Reclamation : '.$_GET['numrec']);
$pdf->setY(30);
$pdf->Cell(40,10,'Type : '.$rec['typerec']);
$pdf->setY(50);
$pdf->Cell(40,10,'Date : '.$rec['daterec']);
$pdf->setY(70);
$pdf->Cell(40,10,'Texte : '.$rec['texte']);

}
$pdf->Output();
?>