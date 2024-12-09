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
<h2>Take Action</h2>
<hr>
<?php
include('./connect.php');
if(isset($_GET['id']))
{
  $complaint_no=$_GET['id'];
  
  
}

?>
    <!-- bootstrap form -->

    <section class="container my-2 bg-light w-50 text-light p-2">
    <form class="row g-3" action="#" method="post" autocomplete="off">


  <div class="col-12">
    <label for="inputState" class="form-label "></label>
    <select id="inputState" class="form-select" name="status" required>
      <option selected>Select Status</option>
      <option value="In Progress">In Progress</option>
      <option value="Closed">Closed</option>

    </select>
  </div>
  <div class="col-12">
  <label for="inputState" class="form-label">Explain The Complaint</label>
  <textarea class="form-control" name="remark" rows="3" placeholder="Remark or Message" required="required"></textarea>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-success" name="submit" style="margin-left :350px ;">SUBMIT</button>
  </div>
  
</form>
</section>

</body>
</html>
<?php
include('./connect.php');
if(isset($_POST['submit']))
{
  $status=$_POST['status'];
  $remark=$_POST['remark'];

  if($status !="" && $remark !="" )
  {
      $sql="insert into complainthistory (complaint_no,complaint_status,complaint_remark) values('$complaint_no','$status','$remark')";
  
      $data=mysqli_query($conn,$sql);

      $query="UPDATE complaint set complaint_status='$status' where complaint_no='$complaint_no'";
      $data1=mysqli_query($conn,$query);

      if($data && $data1)
      {
        echo "<script>alert('Complaint Update ');</script>";
        ?>
         <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/progress-complaint.php" />
         <?php
      }
      else
      {
        echo "<script>alert('Complaint Not Update');</script>";
      }

  }
    else
    {
      echo "<script>alert('Please fill the form first');</script>";
    }


  }

?>
<?php include('./adminfooter.php');?>
