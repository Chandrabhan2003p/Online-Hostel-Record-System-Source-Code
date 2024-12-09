<?php include('./adminheader.php');?>
<style>
      *
    {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    .main .content
    {
        height: 200vh;     
    }

</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Rooms</title>
</head>
<body>
<div class="content">
    <h1>Generate New Id Card</h1>
    <hr>
    <!-- bootstrap form -->
    <div class="container-fluid bg-dark text-light py-3">
      <header class="text-center">
        <h2 class="display-6">Register Student Details</h2>
      </header>
    </div>
    <section class="container my-2 bg-dark w-50 text-light p-2">
    <form class="row g-3" action="#" method="post" autocomplete="off" enctype="multipart/form-data">

  <div class="col-12">
    <label for="inputAddress" class="form-label">Enrollment  No.</label>
    <input type="number" class="form-control" id="inputAddress" placeholder="Enter enrollment no." name="enrollno" required>
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Student Name</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter student name." name="name" required>
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Father Name</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter father name" name="fname" required>
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Room No.</label>
    <input type="number" class="form-control" id="inputAddress" placeholder="Enter Room number" name="roomno" required>
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Course</label> 
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter Course" name="course" required>
  </div>

  <div class="col-12">
      <label>Upload Student Image</label>
      <input type="file" name="uploadfile1" class="form-control" required="required">
   </div>

   
  <div class="col-12">
      <label>Upload Warden Sign</label>
      <input type="file" name="uploadfile2" class="form-control" required="required">
   </div>


  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">Generate</button>
  </div>
  
</form>
</section>
<a href="manageidcard.php" class="btn btn-danger">BACK</a>
</body>
</html>
<?php
include('./connect.php');
if(isset($_POST['submit']))
{
    $filename=$_FILES["uploadfile1"]["name"];
    $tempname=$_FILES["uploadfile1"]["tmp_name"];
    $folder1="../student_img/".$filename;
    move_uploaded_file($tempname,$folder1);

    $filename=$_FILES["uploadfile2"]["name"];
    $tempname=$_FILES["uploadfile2"]["tmp_name"];
    $folder2="../student_img/".$filename;
    move_uploaded_file($tempname,$folder2);

    $enroll=$_POST['enrollno'];
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $roomno=$_POST['roomno'];
    $course=$_POST['course'];

  if($folder1 !="" && $folder2 !="" && $enroll !="" && $name !="" && $fname !="" && $roomno !="" && $course !="")
  {
    $query1 = "Select * from idcard where enroll_no='$enroll'";
    $data1 = mysqli_query($conn, $query1); 
    $total1 = mysqli_num_rows($data1);
    if($total1==1)
    {
      echo "<script>alert('This enrollment number has already been issued an Id Card');</script>";
    }
    else
    {
      $query="Insert into idcard (enroll_no,name,father_name,room_no,course,std_img,warden_sign) values
      ('$enroll','$name','$fname','$roomno','$course','$folder1','$folder2')";
    
      $result=mysqli_query($conn,$query);
     

      $sql="UPDATE studentregistration SET enrollment='$enroll' where name='$name'";
      echo $sql;
      $res = mysqli_query($conn,$sql);
      
      if($result==1 && $res==1)
      {
        echo "<script>alert('Generate Id Card Successfully');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/manageidcard.php" />
        <?php
      }
      else
      {
        echo "<script>alert('Id Card Not Generate');</script>";
      }

    }
  }
  else
  {
      echo "<script>alert('Please fill the form first');</script>";
  }
  
}
?>
<?php include('./adminfooter.php');?>
