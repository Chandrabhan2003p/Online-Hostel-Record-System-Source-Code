<?php
include('./connect.php');?>
<?php session_start();?>
<?php

if(isset($_POST['submit']))
{
    // upload image

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
 

    if($cuetno != "" &&  $sname != "" && $fname != "" && $mname != "" && $dob != "" && $gender != "" && 
    $category != "" && $religion != "" && $course != "" && $mobile != "" && $email != ""  && 
    $address != "" && $state != "" && $distance != "")
    {
        
        $query1 = "Select * from ugregistration where cuet_no='$cuetno'";
        $data1 = mysqli_query($conn, $query1);
        $total1 = mysqli_num_rows($data1);

        $query2 = "Select * from userdetails where email='$email'";
        $data2 = mysqli_query($conn, $query2);
        $total2 = mysqli_num_rows($data2);

        if($total1 == 1 && $total2 == 1)
        {
            echo "<script>alert('Cuet no. and email id already registered');</script>";
        }
        else
        {
            $query="INSERT INTO ugregistration (cuet_no,std_img,sname,father_name,mother_name,date_of_birth,
            gender,category,religion,course,phone_no,email_id,address,state,distance,aadhar_pdf,apply_date)
                
            VALUES('$cuetno','$folder','$sname','$fname','$mname','$dob','$gender','$category',
            '$religion','$course','$mobile','$email','$address','$state','$distance','$folder1',NOW())";
            
            $result=mysqli_query($conn,$query);
    
            if($result)
            {
                $_SESSION['cuetnumber'] = $cuetno;

                echo "<script>alert('Hostel Registration Successfull');</script>";
 
            ?>
              <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/report-generate/downloadapplication.php" />
              <?php
            }
            else
            {
                echo "<script>alert('Data Not Inserted');</script>";
            }
        }
    }
    else
    {
        echo "<script>alert('Please fill the form first');</script>";
    }
    
}
?>