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
    <h1>Add Hostel Rooms</h1>
    <hr>
    <!-- bootstrap form -->
    <div class="container-fluid bg-dark text-light py-3">
      <header class="text-center">
        <h2 class="display-6">Register Room Details</h2>
      </header>
    </div>
    <section class="container my-2 bg-dark w-50 text-light p-2">
    <form class="row g-3" action="#" method="post" autocomplete="off">

  <div class="col-12">
    <label for="inputAddress" class="form-label">Rooms  No.</label>
    <input type="number" class="form-control" id="inputAddress" placeholder="Enter Room No." name="room_no" required>
  </div>

  <div class="col-12">
    <label for="inputState" class="form-label">Floor</label>
    <select id="inputState" class="form-select" name="floor" required>
      <option selected>Choose Floor</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div class="col-12">
  <label for="inputState" class="form-label">Seater</label>
    <select id="inputState" class="form-select" name="seater" required>
      <option selected>Select Seater</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">ADD</button>
  </div>
  
</form>
</section>
<a href="manageroom.php" class="btn btn-danger">BACK</a>
</body>
</html>
<?php
include('./connect.php');
if(isset($_POST['submit']))
{
  $roomno=$_POST['room_no'];
  $floor=$_POST['floor'];
  $seater=$_POST['seater'];

  if($roomno !="" && $floor !="" && $seater !="")
  {
    $query1 = "Select * from rooms where room_no='$roomno'";
    $data1 = mysqli_query($conn, $query1); 
    $total1 = mysqli_num_rows($data1);
    if($total1==1)
    {
      echo "<script>alert('Room No. already exists');</script>";
    }
    else
    {
      $query="Insert into rooms (room_no,floor,seater,allot_seat,empty_seat) values
      ($roomno,$floor,$seater,0,$seater )";
      $result=mysqli_query($conn,$query);
      if($result==1)
      {
        echo "<script>alert('Add Room Successfully');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/manageroom.php" />
        <?php
      }
      else
      {
        echo "<script>alert('The room has not been added');</script>";
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
