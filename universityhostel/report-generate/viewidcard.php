<?php include('../includes/connect.php')?>

<?php require('../fpdf/fpdf.php');
if(isset($_GET['enrollno']))
{
    $enroll_no =$_GET['enrollno'];
    $sql ="select * from idcard where enroll_no='$enroll_no'";
    $data=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($data);



$pdf = new FPDF();
$pdf->SetTopMargin(15.5);
$pdf->AddPage('P','A5');
$pdf->SetLeftMargin(13);


$pdf->Rect(12.5,15,121,79);
$pdf->SetFillColor(225,225,0);
$pdf->SetFont('Arial',"B",14);
$pdf->Cell(120,15,"Indira Gandhi National Tribal University",0,1,'R',true);
$pdf->SetFont('Arial','',12);
$pdf->Cell(120,5,"Gobind Guru Boys Hostel",0,1,'C',true);
$pdf->SetFont('Arial','UB',7);
$pdf->Cell(120,3,"                                                                                                                                                                             ",0,1,'L',true);



$pdf->Image('../image/igntuidlogo.png',15,16,17,14,);

$pdf->Cell(120,0,"",0,1,'C');

$pdf->SetFillColor(225,225,0);
$pdf->SetFont('times',"",10);
$pdf->Cell(35,10   ,"Name                : ",0,0,'',true);
$pdf->SetFont('Arial','UB',10);
$pdf->Cell(85,10,"   ".$row['name']."                                ",0,1,'',true);

$pdf->SetFont('times',"",10);
$pdf->Cell(35,10   ,"Father's  Name  : ",0,0,'',true);
$pdf->SetFont('Arial','UB',10);
$pdf->Cell(85,10,"   ".$row['father_name']."             ",0,1,'',true);

$pdf->SetFont('times',"",10);
$pdf->Cell(35,10   ,"Enrollment No. : ",0,0,'',true);
$pdf->SetFont('Arial','UB',10);
$pdf->Cell(85,10,"   ".$row['enroll_no']."                      ",0,1,'',true);

$pdf->SetFont('times',"",10);
$pdf->Cell(35,10   ,"Room No.         : ",0,0,'',true);
$pdf->SetFont('Arial','UB',10);
$pdf->Cell(85,10,"   ".$row['room_no']."                                        ",0,1,'',true);

$pdf->SetFont('times',"",10);
$pdf->Cell(35,10   ,"Course               : ",0,0,'',true);
$pdf->SetFont('Arial','UB',10);
$pdf->Cell(85,10,"   ".$row['course']."                                   ",0,1,'',true);


$pdf->SetFont('times',"",10);
$pdf->Cell(120,5  ,"(Admin Warden)",0,1,'R',true);

$pdf->Rect(99.5,39.5,26,25);
$pdf->Image($row['std_img'],100,40,25,24);
$pdf->Image($row['warden_sign'],110,75,15,15);

// $pdf->Image('../student_img/download.jpg',165,3,40,30);
$pdf->Output('I','php.pdf');

}
else
{
    
}
       



?>