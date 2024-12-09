<?php 
if(isset($_POST['submit']))
{
    $filename=$_FILES["uploadfile"]["name"];
    $tempname=$_FILES["uploadfile"]["tmp_name"];
    $folder="../student_img/".$filename;
    move_uploaded_file($tempname,$folder);

    // upload pdf

    $filename1=$_FILES["uploadpdf"]["name"];
    $tempname1=$_FILES["uploadpdf"]["tmp_name"];
    $folder1="../document_pdf/".$filename1;
    move_uploaded_file($tempname1,$folder1);

    $cuetno =$_POST['cuetno'];
    $sname =$_POST['sname'];
    $fname =$_POST['fname'];
    $mname =$_POST['mname'];
    $dob = date('Y-m-d',strtotime($_POST['dob']));
    $gender =$_POST['gender'];
    $category =$_POST['category'];
    $religion =$_POST['religion'];
    $course =$_POST['course'];
    $mobile =$_POST['phone'];
    $email =$_POST['email'];
    $address =$_POST['address'];
    $state =$_POST['state'];
    $distance =$_POST['distance'];

    require("../fpdf/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial","",8);
    $pdf->Cell(0,20,"Registration Details Of Applicant",0,1,'C');

    $pdf->Cell(40,5,"Registration Number :",1,0);
    $pdf->Cell(40,5,$cuetno,1,0);
    $pdf->Cell(60,5,"Cuet No. :",1,0);

    $pdf->Cell(0,5,"Apply Date :",1,1);
 
    $pdf->Cell(80,5,"Program Type :",1,0);
 
    $pdf->Cell(0,5,"Course :",1,0);
  




    $pdf->output();
}
?>