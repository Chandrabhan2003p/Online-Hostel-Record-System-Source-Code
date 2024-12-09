<?php include('../includes/connect.php')?>

<?php require('../fpdf/fpdf.php');

if(isset($_GET['regno']))
{
    $regno = $_GET['regno'];
    $program = $_GET['program_type'];


        $sql ="select * from studentregistration where registration_no='$regno'";

        $data=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($data);

        $pdf = new FPDF();
        $pdf->AddPage('L','A4');
        $pdf->SetFont('times','B',15,);

        //$pdf->Rect(5,5,200,287);
        $pdf->SetTextColor(0,0,225);
        $pdf->Cell(0,10,'Pseronal Information',1,1,'C');
        $pdf->Rect(254.5,22.5,26,25);
        $pdf->Image($row['std_img'],255,23,25,24);

        
    //  PERSONAL INFORMATION

        $pdf->Cell(0,30,'',1,1,'');
        $pdf->SetFont('arial','',15);
        $pdf->SetTextColor(255,0,0);
        $pdf->Cell(0,10,'Personal Info :',1,1,'');


        $pdf->SetFont('arial','B',10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(50,10,'Reg No. :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['registration_no'],1,0,'',);

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(33,10,'Full Name :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(70,10,$row['name'],1,0,'',);

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(50,10,'Adhaar No. :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['aadhar_no'],1,1,'',);

        
        $pdf->SetFont('arial','B',10);
        $pdf->Cell(50,10,'Father Name :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['fname'],1,0,'',);

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(33,10,'Mother Name :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(70,10,$row['mname'],1,0,'');

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(50,10,'Category :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['category'],1,1,'',);

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(50,10,'Data Of Birth :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['dob'],1,0,'',);

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(33,10,'Religion :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(70,10,$row['religion'],1,0,'');

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(50,10,'Blood Group :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['blood_group'],1,1,'',);

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(50,10,'Mobile No. :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['contact_no'],1,0,'',);

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(33,10,'Email Id  :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(70,10,$row['email_id'],1,0,'');

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(50,10,'Physical Disable Personal :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['physical_disable'],1,1,'',);

        
        $pdf->SetFont('arial','B',10);
        $pdf->Cell(50,10,'Emergency Contact No.  :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['contact_no'],1,0,'',);

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(33,10,'Guardian Name  :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(70,10,$row['guardian_name'],1,0,'');

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(50,10,'Guardian Relation  :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['guardian_relation'],1,1,'',);

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(50,10,'Guardian Contact No.  :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['guardian_contact_no'],1,1,'',);

//    ACADEMIC INFORMATION

        $pdf->SetFont('arial','',15);
        $pdf->SetTextColor(0,128,0);
        $pdf->Cell(0,10,'Academic Information :',1,1,'');

        $pdf->SetFont('arial','B',10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(50,10,'Enrollment Number :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['enrollment'],1,0,'');

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(33,10,'ABC ID :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['abc_id'],1,0,'',);

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(35,10,'Admission No.  :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['admission_no'],1,1,'',);


        $pdf->SetFont('arial','B',10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(50,10,'Semester :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['semester'],1,0,'');

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(33,10,'Course Type :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['program_type'],1,0,'',);

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(35,10,'Course  :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['course'],1,1,'',);

// ADDRESSES
        
        $pdf->SetFont('arial','',15);
        $pdf->SetTextColor(0,0,255);
        $pdf->Cell(0,10,'Addresses :',1,1,'');

        $pdf->SetFont('arial','B',10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(65,10,'Address according to the ID Proof :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(100,10,$row['address'],1,0,'');

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(95,10,'Distance from Home Town to University Campus in KM:',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['distance'].'km',1,1,'',);



        $pdf->SetFont('arial','B',10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(65,10,'City :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(33,10,$row['city'],1,0,'');

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(25,10,'State  :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(42,10,$row['state'],1,0,'',);

        $pdf->SetFont('arial','B',10);
        $pdf->Cell(60,10,'Pin Code :',1,0,'');
        $pdf->SetFont('times','',10);
        $pdf->Cell(0,10,$row['pincode'],1,1,'',);




    
        


        $pdf->Output('I','php.pdf');


    }


?>