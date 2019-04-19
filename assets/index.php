<?php
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;

require_once('fpdf181/fpdf.php');
require_once('fpdi2/src/autoload.php');

$pdf = new Fpdi();

// $pageCount = $pdf->setSourceFile('SF- 9-Form 138 Junior.pdf');
// $pageId = $pdf->importPage(1, PdfReader\PageBoundaries::MEDIA_BOX);
$pdf -> setSourceFile('SF- 9-Form 138 Junior.pdf');
$tplIdx = $pdf -> importPage(1);
$size = $pdf->getTemplateSize($tplIdx);
$pdf -> AddPage('L','Letter');
// $pdf->useImportedPage($pageId, 0, 0, 90);
$pdf ->useTemplate($tplIdx, null, null,  280, 215, FALSE);
$pdf -> SetFont('Arial');
$pdf -> SetTextColor(0, 0, 0);
$pdf -> SetXY(18, 174);
$pdf->Cell(20,-280,'DepEd FORM 138',0,1,'C');
// $pdf -> Output('myOwn.pdf', 'F');
// $pdf ->useTemplate($tplIdx, null, null, 215.6, 350.9,FALSE);
$pdf->Output();