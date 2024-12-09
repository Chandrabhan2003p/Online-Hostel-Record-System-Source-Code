<?php include('../includes/connect.php')?>

<?php require('../fpdf/fpdf.php');
if(isset($_GET['cuetno']))
{
    $cuetno =$_GET['cuetno'];
    $sql ="select * from ugregistration";
    $data=mysqli_query($conn,$sql);
}

$pdf = new FPDF();
$pdf->AddPage('L','A4');
$pdf->SetFont('times','B',10);
$pdf->Cell(12,5,'Sr. no.',1,0,'C');
$pdf->Cell(30,5,'Cuet No.',1,0,'C',);
$pdf->Cell(50,5,'Student Name',1,0,'C');
$pdf->Cell(40,5,'Father Name',1,0,'C');
$pdf->Cell(20,5,'Category',1,0,'C',);
$pdf->Cell(70,5,'Course',1,0,'C');
$pdf->Cell(40,5,'State',1,0,'C');
$pdf->Cell(20,5,'Distance',1,1,'C',);
$sr=1;
while($row=mysqli_fetch_assoc($data))
{
$pdf->SetFont('times','B',8);
$pdf->Cell(12,5,$sr,1,0,'C');
$pdf->Cell(30,5,$row['cuet_no'],1,0,'C',);
$pdf->Cell(50,5,$row['sname'],1,0,'C');
$pdf->Cell(40,5,$row['father_name'],1,0,'C');
$pdf->Cell(20,5,$row['category'],1,0,'C',);
$pdf->Cell(70,5,$row['course'],1,0,'C');
$pdf->Cell(40,5,$row['state'],1,0,'C');
$pdf->Cell(20,5,$row['distance'],1,1,'C',);
$sr++;
}

// $pdf->Image('../student_img/download.jpg',165,3,40,30);
$pdf->Output('I','php.pdf');
?>