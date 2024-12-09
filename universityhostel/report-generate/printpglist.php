<?php include('../includes/connect.php')?>

<?php require('../fpdf/fpdf.php');


$sql ="select * from pgregistration where hostel_status='Yes'";
$data=mysqli_query($conn,$sql);


$pdf = new FPDF();
$pdf->AddPage('L','A4');
$pdf->SetFont('times','B',10);
$pdf->Cell(0,5,'GGBH Hostel PG Student Allotment List',0,1,'C');
$pdf->Cell(0,5,'',0,1,'C');

$pdf->SetFont('times','B',10);
$pdf->Cell(12,5,'Sr. no.',1,0,'');
$pdf->Cell(22,5,'Cuet No.',1,0,'',);
$pdf->Cell(40,5,'Student Name',1,0,'');
$pdf->Cell(35,5,'Father Name',1,0,'');
$pdf->Cell(17,5,'Category',1,0,'',);
$pdf->Cell(115,5,'Course',1,0,'');
$pdf->Cell(0,5,'State',1,1,'');

$sr=1;
while($row=mysqli_fetch_assoc($data))
{
$pdf->SetFont('times','',8);
$pdf->Cell(12,5,$sr,1,0,'');
$pdf->Cell(22,5,$row['cuet_no'],1,0,'',);
$pdf->Cell(40,5,$row['sname'],1,0,'');
$pdf->Cell(35,5,$row['father_name'],1,0,'');
$pdf->Cell(17,5,$row['category'],1,0,'',);
$pdf->Cell(115,5,$row['course'],1,0,'');
$pdf->Cell(0,5,$row['state'],1,1,'');

$sr++;
}

// $pdf->Image('../student_img/download.jpg',165,3,40,30);
$pdf->Output('I','php.pdf');
?>