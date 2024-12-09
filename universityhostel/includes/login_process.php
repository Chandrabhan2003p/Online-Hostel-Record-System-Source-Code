<?php include('./connect.php');?>
<?php
session_start();
?>
<?php
if(isset($_POST['submit']))
{
 $email=$_POST['username']; 
 $pass=$_POST['password'];

 if($email != "" && $pass != "")
 {
    $query="Select * from userdetails where email='$email' && password='$pass'";
    $data=mysqli_query($conn,$query);

    $query1="Select * from studentregistration where email_id='$email'";
    $data1=mysqli_query($conn,$query1);
    
    $total=mysqli_num_rows($data);
    $total1=mysqli_num_rows($data1);
    
    if($total==1 && $total1==1)
    {
        $_SESSION['username'] = $email;
        // header('location:../Login_System/home1.php');
        header('location:studentdashboard.php');
    }
    else
    {
        echo "<script>alert('Incorrect Email and Password');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/uglogin.php"/>
     <?php
    }   
 }
}
?>