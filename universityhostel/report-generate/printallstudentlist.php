<?php include('../includes/connect.php')?>

<?php require('../fpdf/fpdf.php');


$sql ="select * from studentregistration where room_no!=0";
$data=mysqli_query($conn,$sql);


$pdf = new FPDF();
$pdf->AddPage('L','A4');
$pdf->SetFont('times','B',10);
$pdf->Cell(0,5,' All Student List',0,1,'C');
$pdf->Cell(0,5,'',0,1,'C');

$pdf->SetFont('times','B',10);
$pdf->Cell(12,5,'Sr. no.',1,0,'');
$pdf->Cell(20,5,'Reg No.',1,0,'',);
$pdf->Cell(40,5,'Student Name',1,0,'');
$pdf->Cell(35,5,'Father Name',1,0,'');
$pdf->Cell(17,5,'Room No.',1,0,'');
$pdf->Cell(17,5,'Category',1,0,'',);
$pdf->Cell(112,5,'Course',1,0,'');
$pdf->Cell(0,5,'State',1,1,'');

$sr=1;
while($row=mysqli_fetch_assoc($data))
{
$pdf->SetFont('times','',8);
$pdf->Cell(12,5,$sr,1,0,'');
$pdf->Cell(20,5,$row['registration_no'],1,0,'',);
$pdf->Cell(40,5,$row['name'],1,0,'');
$pdf->Cell(35,5,$row['fname'],1,0,'');
$pdf->Cell(17,5,$row['room_no'],1,0,'');
$pdf->Cell(17,5,$row['category'],1,0,'',);
$pdf->Cell(112,5,$row['course'],1,0,'');
$pdf->Cell(0,5,$row['state'],1,1,'');

$sr++;
}

// $pdf->Image('../student_img/download.jpg',165,3,40,30);
$pdf->Output('I','php.pdf');
?>