<?php include('./adminheader.php');?>
<?php
include('./connect.php');
$roomno=$_GET['room_no'];
error_reporting(0);//avoid warnning

$query="select * from rooms where room_no='$roomno'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Rooms Details</title>
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
</head>
<body>
<div class="content">
    <h1>UPDATE ROOM</h1>
    <hr>
    <!-- bootstrap form -->
    <div class="container-fluid bg-dark text-light py-3">
      <header class="text-center">
        <h2 class="display-6">Update Room Details</h2>
      </header>
    </div>
    <section class="container my-2 bg-dark w-50 text-light p-2">
    <form class="row g-3" action="#" method="post" autocomplete="off">

  <div class="col-12">
    <label for="inputAddress" class="form-label">Rooms  No.</label>
    <input type="number" class="form-control" id="inputAddress" value="<?php echo $result['room_no'];?>" placeholder="Enter Room No." name="roomno" required readonly="true">
  </div>

  <div class="col-12">
    <label for="inputState" class="form-label">Floor</label>
    <select id="inputState" class="form-select" name="floor" required="required" disabled >
      <option value="">Choose Floor</option>
      <option value="1"
      <?php
      if($result['floor']=='1')
      {
      echo "selected";
      }
      ?>
      >
      1</option>

      <option value="2"
      <?php
      if($result['floor']=='2')
      {
        echo"selected";
      }
      
      ?>
      >
      2</option>
      <option value="3"
      <?php
      if($result['floor']=='3')
      {
      echo"selected";
      }
      ?>
      >
      3</option>

      <option value="4"
      <?php
      if($result['floor']=='4')
      {
      echo"selected";
      }
      ?>
      >
      4</option>

      <option value="5"
      <?php
      if($result['floor']=='5')
      {
      echo"selected";
      }
      
      ?>
      >
      5</option>

    </select>

  </div>

  <div class="col-12">
  <label  class="form-label">Seater</label>
    <select  class="form-select" name="seater" required>
      <option value="">Select Seater</option>
      <option value="1"
      <?php
      if($result['seater']=="1")
      {
      echo"selected";
      }
      ?>
      >
      1</option>

      <option value="2"
      <?php
      if($result['seater']=="2")
      {
      echo"selected";
      }
      
      ?>
      >
      2</option>
      <option value="3"
      <?php
      if($result['seater']=="3")
      {
      echo"selected";
      }
      ?>
      >
      3</option>

      <option value="4"
      <?php
      if($result['seater']=="4")
      {
      echo"selected";
      }
      ?>
      >
      4</option>

      <option value="5"
      <?php
      if($result['seater']=="5")
      {
      echo"selected";
      }
      ?>
      >
      5</option>

    </select>
  </div>

  <div class="col-12">
  <label class="form-label">Allot Seat</label>
    <select class="form-select" name="allot"  required>
      <option value="">Select</option>
      <option value="0"
      <?php
      if($result['allot_seat']=='0')
      {
      echo"selected";
      }
      ?>
      >
      0</option>
      <option value="1"
      <?php
      if($result['allot_seat']=='1')
      {
      echo"selected";
      }
      ?>
      >
      1</option>

      <option value="2"
      <?php
      if($result['allot_seat']=='2')
      {
      echo"selected";
      }
      
      ?>
      >
      2</option>
      <option value="3"
      <?php
      if($result['allot_seat']=='3')
      {
      echo"selected";
      }
      ?>
      >
      3</option>

      <option value="4"
      <?php
      if($result['allot_seat']=='4')
      {
      echo"selected";
      }
      ?>
      >
      4</option>

      <option value="5"
      <?php
      if($result['allot_seat']=='5')
      {
      echo"selected";
      }
      ?>
      >
      5</option>

    </select>
  </div>

  
  <div class="col-12">
  <label class="form-label">Empty Seat</label>
    <select class="form-select" name="empty"  required>
      <option value="">Select</option>
      <option value="0"
      <?php
      if($result['empty_seat']=='0')
      {
      echo"selected";
      }
      ?>
      >
      0</option>
      <option value="1"
      <?php
      if($result['empty_seat']=='1')
      {
      echo"selected";
      }
      ?>
      >
      1</option>

      <option value="2"
      <?php
      if($result['empty_seat']=='2')
      {
      echo"selected";
      }
      
      ?>
      >
      2</option>
      <option value="3"
      <?php
      if($result['empty_seat']=='3')
      {
      echo"selected";
      }
      ?>
      >
      3</option>

      <option value="4"
      <?php
      if($result['empty_seat']=='4')
      {
      echo"selected";
      }
      ?>
      >
      4</option>

      <option value="5"
      <?php
      if($result['empty_seat']=='5')
      {
      echo"selected";
      }
      ?>
      >
      5</option>

    </select>
  </div>

  
  <div class="col-12">
  <label class="form-label">Status</label>
    <select class="form-select" name="status"  required>
      <option value="">Select</option>
      <option value="Yes"
      <?php
      if($result['allot_status']=='Yes')
      {
      echo"selected";
      }
      ?>
      >
      Yes</option>

      <option value="No"
      <?php
      if($result['allot_status']=='No')
      {
      echo"selected";
      }
      
      ?>
      >
      No</option>
    </select>
  </div>
  

  <div class="col-12 d-grid gap-2">
    <button type="submit" class="btn btn-warning" name="update">UPDATE</button>
  </div>
  
</form>
</section>
<a href="manageroom.php" class="btn btn-danger">BACK</a>
</body>
</html>
<?php
include('./connect.php');
if(isset($_POST['update']))
{
 $room_no=$_POST['roomno'];

 $seater=$_POST['seater'];
 $allot=$_POST['allot'];
 $empty=$_POST['empty'];
 $status=$_POST['status'];


        $query="UPDATE  rooms set seater='$seater',allot_seat='$allot',empty_seat='$empty',allot_status='$status' where room_no=' $room_no'";
      

       $result=mysqli_query($conn,$query);
        if($result==1)
        { 
          echo "<script>alert('Room Details Update Successfully');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/manageroom.php" />
     
      <?php
        }
        else
        {
        echo "<script>alert('Room Details Not Updated');</script>";
        }

        }

        ?>
<?php include('./adminfooter.php');?>
