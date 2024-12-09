<?php include('../includes/connect.php')?>

<?php require('../fpdf/fpdf.php');
if(isset($_GET['enroll']) && isset($_GET['year']))
{
    $enroll = $_GET['enroll'];
    $year = $_GET['year'];
    
    
        $sql ="select * from paymentdetails where enrollment='$enroll' && pay_year='$year'";
        $data=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($data);

        $pdf = new FPDF();
        $pdf->AddPage('L','A4');
        $pdf->SetFont('times','B',15,);

        //$pdf->Rect(5,5,200,287);
        $pdf->SetTextColor(0,0,225);
        $pdf->Cell(0,8,'Online Hostel Fee Receipt',0,1,'C');

        $pdf->SetFont('times','B',15);
        $pdf->SetTextColor(225,0,0);
        $pdf->Cell(0,8,'Personal Information Of Applicant',1,1,'L');

   
        $pdf->SetFont('times','B',8);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(35,8,'Enrollment Number :',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(33,8,$row['enrollment'],1,0,'',);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(25,8,'Full Name :',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(33,8,$row['name'],1,0,'',);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(35,8,'Email Id:',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(0,8,$row['email'],1,1,);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(35,8,'Father Name :',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(33,8,$row['fname'],1,0,'',);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(25,8,'Category :',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(33,8,$row['category'],1,0,'',);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(35,8,'Date Of Birth :',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(0,8,$row['dob'],1,1,'',);

        $pdf->SetFont('times','B',8);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(35,8,'Gender :',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(33,8,$row['gender'],1,0,'',);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(25,8,'Course Type :',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(33,8,$row['course_type'],1,0,'',);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(35,8,'Course',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(0,8,$row['course_name'],1,1,'',);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(35,8,'Semester :',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(33,8,$row['semester'],1,0,'',);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(25,8,'Student Type :',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(33,8,$row['student_type'],1,0,'',);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(35,8,'Physically Disabled Person',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(0,8,$row['physical_disable'],1,1,'',);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(35,8,'Mobile Number :',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(0,8,$row['mobile'],1,1,'',);



        $pdf->SetFont('times','B',15);
        $pdf->SetTextColor(0,0,225);
        $pdf->Cell(0,8,'Addresses',1,1,'L');

        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('times','B',8);
        $pdf->Cell(35,8,'Address:',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(0,8,$row['address'],1,1,'',);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(35,8,'City :',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(0,8,$row['city'],1,1,'',);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(35,8,'State:',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(0,8,'state',1,1,'',);

        
        $pdf->SetFont('times','B',8);
        $pdf->Cell(35,8,'Zip-Code:',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(0,8,'zipcode',1,1,'',);


        $pdf->SetFont('times','B',15);
        $pdf->SetTextColor(0,128,0);
        $pdf->Cell(0,8,'Fee Acknowlegement Receipt',1,1,'L');

        $pdf->SetFont('times','B',8);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(35,8,'Enrollment :',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(0,8,$row['enrollment'],1,1,'',);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(35,8,"Pay Year's :",1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(0,8,$row['pay_year'],1,1,'',);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(35,8,'Fee Paid Status :',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(0,8,$row['payment_status'],1,1,'',);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(35,8,'Transaction Id :',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(0,8,$row['transaction_id'],1,1,'',);

        $pdf->SetFont('times','B',8);
        $pdf->Cell(35,8,'Fee Amount :',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(0,8,$row['amount'],1,1,'',);

        
        $pdf->SetFont('times','B',8);
        $pdf->Cell(35,8,'Date of Fee Paid :',1,0,'');
        $pdf->SetFont('times','',8);
        $pdf->Cell(0,8,$row['pay_date'],1,1,'',);


        $pdf->Output('I','php.pdf');


        // $pdf->Image('../student_img/download.jpg',165,3,35,35);
        

        
}


?>