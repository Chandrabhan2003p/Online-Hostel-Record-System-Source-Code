<?php include('../includes/connect.php')?>

<?php require('../fpdf/fpdf.php');
if(isset($_GET['cuetno']))
{
    $cuetno = $_GET['cuetno'];
    $program = $_GET['program_type'];
    
    if($program=='DIPLOMA')
    {
        $sql ="select * from pgregistration where cuet_no='$cuetno'";
        $data=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($data);

        $pdf = new FPDF();
        $pdf->AddPage('L','A4');
        $pdf->SetFont('times','B',15,);

        //$pdf->Rect(5,5,200,287);
        $pdf->SetTextColor(0,0,225);
        $pdf->Cell(0,10,'Registraion Details Of Applicant',1,1,'C');
        $pdf->Rect(254.5,22.5,26,25);
        $pdf->Image($row['std_img'],255,23,25,24);

        $pdf->Cell(0,30,'',1,1,'');
        $pdf->SetFont('times','B',10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(70,10,'Registration Number :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['registration_no'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Cuet Number :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['cuet_no'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Apply Date :',1,0,'');
        $pdf->SetFont('times','',10);

        $pdf->Cell(0,10,$row['apply_date'],1,1,);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(70,10,'Program Type :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['program_type'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Course :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['course'],1,1,'',);

        $pdf->SetFont('times','B',15);
        $pdf->SetTextColor(225,0,0);
        $pdf->Cell(0,10,'Personal Info',1,1,'L');

        $pdf->SetFont('times','B',10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(70,10,'Application Number :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['registration_no'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Full Name :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['sname'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Email :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['email_id'],1,1,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(70,10,'Father Name',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['father_name'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Mother Name :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['mother_name'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Date Of Birth :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['date_of_birth'],1,1,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(70,10,'Gender',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['gender'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Category :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['category'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Religion :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['religion'],1,1,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(70,10,'Contact No. :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['phone_no'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Document :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,'File',1,1,'',);


        $pdf->SetFont('times','B',15);
        $pdf->SetTextColor(0,0,225);
        $pdf->Cell(0,10,'Addresses',1,1,'L');

        $pdf->SetFont('times','B',10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(103,10,'Address according to the ID Proof  :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['address'],1,1,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(103,10,'State :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['state'],1,1,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(103,10,'Distance from Home Town to University Campus in KM  :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['distance'].' km',1,1,'',);

        $pdf->Output('I','php.pdf');

        }
        if($program=='PG')
    {
        $sql ="select * from pgregistration where cuet_no='$cuetno'";
        $data=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($data);
        $pdf = new FPDF();
        $pdf->AddPage('L','A4');
        $pdf->SetFont('times','B',15,);

        //$pdf->Rect(5,5,200,287);
        $pdf->SetTextColor(0,0,225);
        $pdf->Cell(0,10,'Registraion Details Of Applicant',1,1,'C');
        $pdf->Rect(254.5,22.5,26,25);
        $pdf->Image($row['std_img'],255,23,25,24);

        $pdf->Cell(0,30,'',1,1,'');
        $pdf->SetFont('times','B',10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(70,10,'Registration Number :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['registration_no'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Cuet Number :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['cuet_no'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Apply Date :',1,0,'');
        $pdf->SetFont('times','',10);

        $pdf->Cell(0,10,$row['apply_date'],1,1,);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(70,10,'Program Type :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['program_type'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Course :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['course'],1,1,'',);

        $pdf->SetFont('times','B',15);
        $pdf->SetTextColor(225,0,0);
        $pdf->Cell(0,10,'Personal Info',1,1,'L');

        $pdf->SetFont('times','B',10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(70,10,'Application Number :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['registration_no'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Full Name :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['sname'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Email :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['email_id'],1,1,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(70,10,'Father Name',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['father_name'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Mother Name :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['mother_name'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Date Of Birth :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['date_of_birth'],1,1,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(70,10,'Gender',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['gender'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Category :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['category'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Religion :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['religion'],1,1,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(70,10,'Contact No. :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['phone_no'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Document :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,'File',1,1,'',);


        $pdf->SetFont('times','B',15);
        $pdf->SetTextColor(0,0,225);
        $pdf->Cell(0,10,'Addresses',1,1,'L');

        $pdf->SetFont('times','B',10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(103,10,'Address according to the ID Proof  :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['address'],1,1,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(103,10,'State :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['state'],1,1,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(103,10,'Distance from Home Town to University Campus in KM  :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['distance'].' km',1,1,'',);

        $pdf->Output('I','php.pdf');

        }
        if($program=='UG')
    {
        $sql ="select * from ugregistration where cuet_no='$cuetno'";
        $data=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($data);
        $pdf = new FPDF();
        $pdf->AddPage('L','A4');
        $pdf->SetFont('times','B',15,);

        //$pdf->Rect(5,5,200,287);
        $pdf->SetTextColor(0,0,225);
        $pdf->Cell(0,10,'Registraion Details Of Applicant',1,1,'C');
        $pdf->Rect(254.5,22.5,26,25);
        $pdf->Image($row['std_img'],255,23,25,24);

        $pdf->Cell(0,30,'',1,1,'');
        $pdf->SetFont('times','B',10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(70,10,'Registration Number :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['Registration_no'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Cuet Number :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['cuet_no'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Apply Date :',1,0,'');
        $pdf->SetFont('times','',10);

        $pdf->Cell(0,10,$row['apply_date'],1,1,);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(70,10,'Program Type :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['program_type'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Course :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['course'],1,1,'',);

        $pdf->SetFont('times','B',15);
        $pdf->SetTextColor(225,0,0);
        $pdf->Cell(0,10,'Personal Info',1,1,'L');

        $pdf->SetFont('times','B',10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(70   ,10,'Application Number :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['Registration_no'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Full Name :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['sname'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Email :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['email_id'],1,1,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(70,10,'Father Name',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['father_name'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Mother Name :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['mother_name'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Date Of Birth :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['date_of_birth'],1,1,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(70,10,'Gender',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['gender'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Category :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['category'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Religion :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['religion'],1,1,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(70,10,'Contact No. :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['phone_no'],1,0,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(25,10,'Document :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,'File',1,1,'',);


        $pdf->SetFont('times','B',15);
        $pdf->SetTextColor(0,0,225);
        $pdf->Cell(0,10,'Addresses',1,1,'L');

        $pdf->SetFont('times','B',10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(103,10,'Address according to the ID Proof  :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['address'],1,1,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(103,10,'State :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['state'],1,1,'',);

        $pdf->SetFont('times','B',10);
        $pdf->Cell(103,10,'Distance from Home Town to University Campus in KM  :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['distance'].' km',1,1,'',);


        $sr=1;
        while($row=mysqli_fetch_assoc($data))
        {
        $pdf->SetFont('times','B',8);
        $pdf->Cell(12,5,$sr,1,0,'C');
        $pdf->Cell(30,5,$row['cuet_no'],1,0,'C',);
        $pdf->Image($row['std_img'],11,25,28,24);
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

        }
}


?>