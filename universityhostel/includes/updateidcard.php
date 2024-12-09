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
    <?php
    include('./connect.php');
    if(isset($_GET['enrollno']))
    {
        $enroll = $_GET['enrollno'];

    
        $query = "Select * from idcard where enroll_no ='$enroll'";
        $data=mysqli_query($conn,$query);
        $total=mysqli_num_rows($data);
        $result = mysqli_fetch_assoc($data);
    
    }
    
    ?>

    <!-- bootstrap form -->
    <div class="container-fluid bg-dark text-light py-3">
      <header class="text-center">
        <h2 class="display-6">Update Student Id Card Details</h2>
      </header>
    </div>
    <section class="container my-2 bg-dark w-50 text-light p-2">
    <form class="row g-3" action="#" method="post" autocomplete="off" enctype="multipart/form-data">

  <div class="col-12">
    <label for="inputAddress" class="form-label">Enrollment  No.</label>
    <input type="number" class="form-control" placeholder="Enter enrollment no." value="<?php echo $result['enroll_no']?>" name="enrollno" required readonly="true">
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Student Name</label>
    <input type="text" class="form-control"  placeholder="Enter student name." name="name" value="<?php echo $result['name']?>" required>
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Father Name</label>
    <input type="text" class="form-control"  placeholder="Enter father name" name="fname" value="<?php echo $result['father_name']?>" required>
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Room No.</label>
    <input type="number" class="form-control"  placeholder="Enter Room number" name="roomno" value="<?php echo $result['room_no']?>"required>
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Course</label> 
    <input type="text" class="form-control"  placeholder="Enter Course" name="course" value="<?php echo $result['course']?>"required>
  </div>


  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">UPDATE</button>
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

    $enroll=$_POST['enrollno'];
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $roomno=$_POST['roomno'];
    $course=$_POST['course'];

  if($enroll !="" && $name !="" && $fname !="" && $roomno !="" && $course !="")
  {
    $query1 = "Select * from idcard where enroll_no='$enroll'";
    $query="UPDATE idcard SET name='$name',father_name='$fname',room_no='$roomno',course='$course' where enroll_no='$enroll'";

      $result=mysqli_query($conn,$query);
      
      if($result==1)
      {
        echo "<script>alert('Id Card Update Successfully');</script>";
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

  
?>
<?php include('./adminfooter.php');?>
