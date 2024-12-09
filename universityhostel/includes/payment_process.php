<?php 
session_start();
include('./connect.php');

if(isset($_POST['amt'])&& isset($_POST['name']) && isset($_POST['enroll']) && isset($_POST['course_type'])&& isset($_POST['course_name'])&& isset($_POST['semester'])&& isset($_POST['category'])&& isset($_POST['student_type'])&& isset($_POST['mobile'])&& isset($_POST['address'])&& isset($_POST['fname'])&& isset($_POST['dob'])&& isset($_POST['gender'])&& isset($_POST['physical'])&& isset($_POST['email'])&& isset($_POST['city'])&& isset($_POST['state'])&& isset($_POST['zip'])&& isset($_POST['year']))
{

  
    $amt = $_POST['amt'];
    $enroll = $_POST['enroll'];
    $course_type =$_POST['course_type'];
    $course = $_POST['course_name'];
    $payment_id = $_POST['payment_id'];
    $semester = $_POST['semester'];
    $category = $_POST['category'];
    $student = $_POST['student_type'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $fname = $_POST['fname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $physical = $_POST['physical'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $name = $_POST['name'];
    $year = $_POST['year'];
    $payment_status ="pending";
    $paydate = date('Y-m-d h:i:s');

    mysqli_query($conn, "insert into paymentdetails (name,amount,payment_status,pay_date,enrollment,course_type,course_name,semester,category,student_type,mobile,address,fname,dob,gender,physical_disable,email,city,state,zipcode,pay_year) values('$name','$amt','$payment_status','$paydate','$enroll','$course_type','$course','$semester','$category','$student','$mobile','$address','$fname','$dob','$gender','$physical','$email','$city','$state','$zip','$year')");

    $_SESSION['OID'] = mysqli_insert_id($conn);
    
}

if(isset($_POST['payment_id']) && isset($_SESSION['OID']) )
{
    $payment_id = $_POST['payment_id'];

    mysqli_query($conn,"update paymentdetails set payment_status='complete',transaction_id='$payment_id' where id = '".$_SESSION['OID']."'");
    
}

?>
