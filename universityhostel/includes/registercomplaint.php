
<?php include('./studentheader.php');?>
<?php session_start();?>
<style>
    .main .content
    {
 
        height: 200vh;     
    }    
           
</style>


<div class="content">
<?php
include('./connect.php');
error_reporting(0);
if(isset($_GET['id']))
{
    $email =$_GET['id'];

    $query="select * from studentregistration where email_id='$email'";
    $data=mysqli_query($conn,$query);
    $result=mysqli_fetch_assoc($data);
}

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register complaint</title>
</head>
<body>
<div class="content">
    <h1>Register New Complaint</h1>
    <hr>
    <!-- bootstrap form -->
    <div class="container-fluid bg-dark text-light py-3">
      <header class="text-center">
        <h2 class="display-6">Fill Complaint Details</h2>
      </header>
    </div>
  <section class="container my-2 bg-dark w-50 text-light p-2">
    <form class="row g-3" action="#" method="post" autocomplete="off" enctype="multipart/form-data">
      <div class="col-12">
          <label for="inputState" class="form-label">Compliant Type</label>
          <select  class="form-control" required="required" name="ctype">
              <option value="">Select Complaint Type</option>
              <option value="Food Related">Food Related</option>
              <option value="Room Related">Room Related</option>
              <option value="Fee Related">Fee Related</option>
              <option value="Electrical">Electrical</option>
              <option value="Plumbing">Plumbing</option>
              <option value="Discipline">Discipline</option>
              <option value="Other">Other</option>
          </select>
      </div>

      <div class="col-12">
      <label for="inputState" class="form-label">Explain The Complaint</label>
      <textarea class="form-control" name="cdetails" rows="3" required="required"></textarea>
      </div>

      <div class="mb-3">
      <label  >File (if any)</label>
      <input type="file" name="uploadfile" class="form-control">
      </div>

      <div class="col-12">
        <input type="submit" class="btn btn-primary"  name="submit" value="SUBMIT">
      </div>
    </form>
</section>

</body>
</html>
<?php
include('./connect.php');
if(isset($_POST['submit']))
{
  $filename=$_FILES["uploadfile"]["name"];
  $tempname=$_FILES["uploadfile"]["tmp_name"];
  $folder="../complaint_img/".$filename;
  move_uploaded_file($tempname,$folder);
    
    $ctype=$_POST['ctype'];
    $cdetails=$_POST['cdetails'];
    $userid= $result['registration_no'];
    $name= $result['name'];
    $mob =$result['contact_no'];
    $roomno= $result['room_no'];
    $cnumber=mt_rand(100000000,999999999);

    if($folder!="" && $ctype !="" && $cdetails !="" && $userid !="" && $name !="" && $mob !="" && $roomno !="")
   {
    $query = "INSERT INTO complaint (complaint_no,userid,name,mobile,roomno,complaint_type,complaint_details,complaint_doc) 
    values($cnumber,'$userid','$name','$mob','$roomno','$ctype','$cdetails','$folder')";
  
    $data = mysqli_query($conn, $query); 
    if($data)
    {
      echo "<script>alert('Complaint Register Successfully');</script>";
      ?>
      <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/studentdashboard.php" />
      <?php
    }
    else
    {
        echo "<script>alert('Complaint Not Register ');</script>";
         ?>
       <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/registercomplaint.php" />
      <?php
    }
  }
  else
  {
      echo "<script>alert('Please fill the form first');</script>";
  }
  
}
?>


</div>

<?php include('./studentfooter.php');?>