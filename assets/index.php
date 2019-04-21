<?php
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;

require_once('FPDI-2.2.0/fpdf.php');
require_once('FPDI-2.2.0/autoload.php');


function get_weekdays($m,$y) {
$lastday = date("t",mktime(0,0,0,$m,1,$y));
$weekdays=0;
for($d=29;$d<=$lastday;$d++) {
    $wd = date("w",mktime(0,0,0,$m,$d,$y));
    if($wd > 0 && $wd < 6) $weekdays++;
    }
return $weekdays+20;
}

$pdf = new FPDI();
// get the page count
$pageCount = $pdf->setSourceFile('pdf/form138.pdf');
// iterate through all pages
for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
    // import a page
    $templateId = $pdf->importPage($pageNo);
    // get the size of the imported page
    $size = $pdf->getTemplateSize($templateId);

    // create a page (landscape or portrait depending on the imported page size)
    if ($size[0] > $size[1]) {
        $pdf->AddPage('L', array($size[0], $size[1]));
    } else {
        $pdf->AddPage('P', array($size[0], $size[1]));
    }

    // use the imported page
    $pdf->useTemplate($templateId);

    $pdf->SetFont('Arial','B',9);
	if ($pageNo == 1) {
	 	$start    = new DateTime('2010-06-02');
		$start->modify('first day of this month');
		$end      = new DateTime('2011-03-06');
		$end->modify('first day of next month');
		$interval = DateInterval::createFromDateString('1 month');
		$period   = new DatePeriod($start, $interval, $end);
	 	$pdf->Cell(10);
	 	$days = array();
		$total_coaay = 0;

		foreach ($period as $dt) {
		   
		    $pdf->Cell(9.5,65,$dt->format("M"),0,0,'C');
		    $m = $dt->format("m");
		    $y = $dt->format("y");
		    $week_days = get_weekdays( intval($m), intval($y)); 
		    $days[] = $week_days;
		    $total_coaay += $week_days;
		}
		$days[] = $total_coaay;

		$pdf->Cell(10,10,'',0,1,'C');
		$pdf->Cell(10);
		foreach ($days as $count_days) {
		   
		    $pdf->Cell(9.5,65,$count_days,0,0,'C');
		}
		$pdf->Cell(10,15,'',0,1,'C');
		$pdf->Cell(10);
		foreach ($days as $count_days) {
		   
		    $pdf->Cell(9.5,65,$count_days,0,0,'C');
		}$pdf->Cell(10,15,'',0,1,'C');
		$pdf->Cell(10);
		foreach ($days as $count_days) {
		   
		    $pdf->Cell(9.5,65,'0',0,0,'C');
		}
		 $pdf->SetFont('Times','I',9);
		 $pdf->Cell(65);
		 $pdf->Cell(0,-15,'SAMPLE DISTRICT TITLE',0,1);
		 $pdf->Cell(165);
		 $pdf->SetFont('Times','',9);
		 $pdf->Cell(0,85,'FIRST NAME MIDDLE LAST',0,1);
		  $pdf->Cell(170);
		   $pdf->Cell(0,-73,'22',0,1);
 			$pdf->Cell(230);
		   $pdf->Cell(0,73,'Male',0,1);

		     $pdf->Cell(170);
		   $pdf->Cell(0,-58,'8',0,1);
 			$pdf->Cell(230);
		   $pdf->Cell(0,58,'Section 1',0,1);

		     $pdf->Cell(195);
		   $pdf->Cell(0,-43,'2019 - 2020',0,1);
	 }
	 else{
	 	$pdf->Cell(15);
	 	$pdf->Cell(10,11,'',0,1,'C');
	 	$finalGrade  = array();
	 	$finalGrade[] = 100;
	 	$finalGrade[] = 60;
	 	$finalGrade[] = 100;
	 	$finalGrade[] = 80;
	 	$finalGrade[] = 100;
	 	$finalGrade[] = 80;

	 	$c = 0;
	 	$average_grade = 0;
	 	for ($i=0; $i < 4; $i++) { 

	 	$pdf->Cell(12);
	 	$pdf->Cell(23.7,5,'Math',1,0,'C');
	 	$pdf->Cell(11.180,5,'100',1,0,'C');
	 	$pdf->Cell(10.970,5,'100',1,0,'C');
	 	$pdf->Cell(10.950,5,'100',1,0,'C');
	 	$pdf->Cell(12.480,5,'100',1,0,'C');
	 	$pdf->Cell(10.450,5,'',1,0,'C');
	 	$pdf->Cell(14.580,5,$finalGrade[$c],1,0,'C');
	 	$pdf->Cell(17,5,'Passed',1,1,'C');
	 	$average_grade+=$finalGrade[$c];
	 	$c++;
	 	}

	 	$pdf->Cell(12);
	 	$pdf->Cell(79.73,5,'General Average',1,0,'C');
	 	$pdf->Cell(31.580,5,($average_grade/$c),1,1,'C');
	 	$rlov  = array();
	 	$poss  = array();
	 	$rlov[] = 'SO';
	 	$rlov[] = 'SO';
	 	$rlov[] = 'SO';
	 	$rlov[] = 'SO';

	 	$rlov[] = 'RO';
	 	$rlov[] = 'RO';
	 	$rlov[] = 'RO';
	 	$rlov[] = 'RO';

	 	$rlov[] = 'AO';
	 	$rlov[] = 'AO';
	 	$rlov[] = 'AO';
	 	$rlov[] = 'AO';


	 	$rlov[] = 'NO';
	 	$rlov[] = 'NO';
	 	$rlov[] = 'NO';
	 	$rlov[] = 'NO';

	 	$rlov[] = 'SO';
	 	$rlov[] = 'SO';
	 	$rlov[] = 'SO';
	 	$rlov[] = 'SO';

	 	$rlov[] = 'RO';
	 	$rlov[] = 'RO';
	 	$rlov[] = 'RO';
	 	$rlov[] = 'RO';

	 	$rlov[] = 'AO';
	 	$rlov[] = 'AO';
	 	$rlov[] = 'AO';
	 	$rlov[] = 'AO';


	 	$rlov_chunk = array_chunk($rlov, 4);

	 	if ($c == 2) {
	 		$poss[] = -15;
		 	$poss[] = -15;
		 	$poss[] = -15;
		 	$poss[] = -15;

		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;

		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;


		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;

		 	$poss[] = -10;
		 	$poss[] = -10;
		 	$poss[] = -10;
		 	$poss[] = -10;

		 	$poss[] = 50;
		 	$poss[] = 50;
		 	$poss[] = 50;
		 	$poss[] = 50;

		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;
	 	}
	 	else if ($c == 3){
	 		$poss[] = -25;
		 	$poss[] = -25;
		 	$poss[] = -25;
		 	$poss[] = -25;

		 	$poss[] = 50;
		 	$poss[] = 50;
		 	$poss[] = 50;
		 	$poss[] = 50;

		 	$poss[] = -25;
		 	$poss[] = -25;
		 	$poss[] = -25;
		 	$poss[] = -25;


		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;

		 	$poss[] = -10;
		 	$poss[] = -10;
		 	$poss[] = -10;
		 	$poss[] = -10;

		 	$poss[] = 50;
		 	$poss[] = 50;
		 	$poss[] = 50;
		 	$poss[] = 50;

		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;
	 	}
	 	else if ($c == 3){
	 		$poss[] = -15;
		 	$poss[] = -15;
		 	$poss[] = -15;
		 	$poss[] = -15;

		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;

		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;


		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;

		 	$poss[] = -10;
		 	$poss[] = -10;
		 	$poss[] = -10;
		 	$poss[] = -10;

		 	$poss[] = 50;
		 	$poss[] = 50;
		 	$poss[] = 50;
		 	$poss[] = 50;

		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;

	 	}
	 	else if ($c == 4){
	 		$poss[] = -15  + -10;
		 	$poss[] = -15  + -10;
		 	$poss[] = -15  + -10;
		 	$poss[] = -15  + -10;

		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;

		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;


		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;

		 	$poss[] = -10;
		 	$poss[] = -10;
		 	$poss[] = -10;
		 	$poss[] = -10;

		 	$poss[] = 50;
		 	$poss[] = 50;
		 	$poss[] = 50;
		 	$poss[] = 50;

		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;
	 		
	 	}
	 	else if ($c == 5){
	 		
	 	}
	 	else if ($c == 6){
	 		
	 	}
	 	else if ($c == 7){
	 		
	 	}
	 	else if ($c == 8){
	 		
	 	}
	 	else{
	 		$poss[] = -15;
		 	$poss[] = -15;
		 	$poss[] = -15;
		 	$poss[] = -15;

		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;

		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;


		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;
		 	$poss[] = 40;

		 	$poss[] = -10;
		 	$poss[] = -10;
		 	$poss[] = -10;
		 	$poss[] = -10;

		 	$poss[] = 50;
		 	$poss[] = 50;
		 	$poss[] = 50;
		 	$poss[] = 50;

		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;
		 	$poss[] = -20;
	 	}
	 	$poss = array_chunk($poss, 4);

	 	$pdf->Cell(215);
	 	$pdf->Cell(11.180,$poss[0][0],$rlov_chunk[0][0],0,0,'C');
	 	$pdf->Cell(10.970,$poss[0][1],$rlov_chunk[0][1],0,0,'C');
	 	$pdf->Cell(10.950,$poss[0][2],$rlov_chunk[0][2],0,0,'C');
	 	$pdf->Cell(12.480,$poss[0][3],$rlov_chunk[0][3],0,1,'C');


	 	$pdf->Cell(215);
	 	$pdf->Cell(11.180,$poss[1][0],$rlov_chunk[1][0],0,0,'C');
	 	$pdf->Cell(10.970,$poss[1][1],$rlov_chunk[1][1],0,0,'C');
	 	$pdf->Cell(10.950,$poss[1][2],$rlov_chunk[1][2],0,0,'C');
	 	$pdf->Cell(12.480,$poss[1][3],$rlov_chunk[1][3],0,1,'C');


	 	$pdf->Cell(215);
	 	$pdf->Cell(11.180,$poss[2][0],$rlov_chunk[2][0],0,0,'C');
	 	$pdf->Cell(10.970,$poss[2][1],$rlov_chunk[2][1],0,0,'C');
	 	$pdf->Cell(10.950,$poss[2][2],$rlov_chunk[2][2],0,0,'C');
	 	$pdf->Cell(12.480,$poss[2][3],$rlov_chunk[2][3],0,1,'C');


	 	$pdf->Cell(215);
	 	$pdf->Cell(11.180,$poss[3][0],$rlov_chunk[3][0],0,0,'C');
	 	$pdf->Cell(10.970,$poss[3][1],$rlov_chunk[3][1],0,0,'C');
	 	$pdf->Cell(10.950,$poss[3][2],$rlov_chunk[3][2],0,0,'C');
	 	$pdf->Cell(12.480,$poss[3][3],$rlov_chunk[3][3],0,1,'C');


	 	$pdf->Cell(215);
	 	$pdf->Cell(11.180,$poss[4][0],$rlov_chunk[4][0],0,0,'C');
	 	$pdf->Cell(10.970,$poss[4][1],$rlov_chunk[4][1],0,0,'C');
	 	$pdf->Cell(10.950,$poss[4][2],$rlov_chunk[4][2],0,0,'C');
	 	$pdf->Cell(12.480,$poss[4][3],$rlov_chunk[4][3],0,1,'C');


	 	$pdf->Cell(215);
	 	$pdf->Cell(11.180,$poss[5][0],$rlov_chunk[5][0],0,0,'C');
	 	$pdf->Cell(10.970,$poss[5][1],$rlov_chunk[5][1],0,0,'C');
	 	$pdf->Cell(10.950,$poss[5][2],$rlov_chunk[5][2],0,0,'C');
	 	$pdf->Cell(12.480,$poss[5][3],$rlov_chunk[5][3],0,1,'C');


	 	$pdf->Cell(215);
	 	$pdf->Cell(11.180,$poss[6][0],$rlov_chunk[6][0],0,0,'C');
	 	$pdf->Cell(10.970,$poss[6][1],$rlov_chunk[6][1],0,0,'C');
	 	$pdf->Cell(10.950,$poss[6][2],$rlov_chunk[6][2],0,0,'C');
	 	$pdf->Cell(12.480,$poss[6][3],$rlov_chunk[6][3],0,1,'C');


	 }

   

    

}


$pdf->Output();