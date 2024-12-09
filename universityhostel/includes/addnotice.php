
	
<?php include('./adminheader.php');?>
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
    <h1>Post New Notice</h1>
    <hr>

    <div class="container-fluid bg-dark text-light py-3">
      <header class="text-center">
        <h2 class="display-6">Fill Notice Details</h2>
      </header>
    </div>
  <section class="container my-2 bg-dark w-50 text-light p-2">
    <form class="row g-3" action="#" method="post" autocomplete="off" enctype="multipart/form-data">
      <div class="col-12">
          <label for="inputState" class="form-label">Notice Title</label>
          <input type="text" name="title" class="form-control"  required="required">

      </div>

      <div class="col-12">
      <label for="inputState" class="form-label">Notice Description</label>
      <textarea class="form-control" name="description" rows="3" required="required"></textarea>
      </div>

      <div class="col-12">
          <label for="inputState" class="form-label">Link Title</label>
          <input type="text" name="linkname" class="form-control"  required="required">

      </div>

      <div class="mb-3">
      <label> Upload File</label>
      <input type="file" name="uploadfile" class="form-control"  required="required">
      </div>

      <div class="col-12">
        <input type="submit" class="btn btn-primary"  name="post" value="POST">
      </div>
    </form>
</section>

</body>
</html>
<?php
include('./connect.php');
if(isset($_POST['post']))
{
  $filename=$_FILES["uploadfile"]["name"];
  $tempname=$_FILES["uploadfile"]["tmp_name"];
  $folder="../document_pdf/".$filename;
  move_uploaded_file($tempname,$folder);
    
    $title=$_POST['title'];
    $des=$_POST['description'];
    $linktitle= $_POST['linkname'];


    if($folder!="" && $title !="" && $des !="" && $linktitle !="")
   {
    $query = "INSERT INTO notice (title,description,link_title,file) 
    values('$title','$des','$linktitle','$folder')";

    $data = mysqli_query($conn, $query); 
    if($data)
    {
      echo "<script>alert('Notice Post Successfully');</script>";
      ?>
      <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/noticeboard.php" />
      <?php
    }
    else
    {
        echo "<script>alert('Notice Not Post ');</script>";
         ?>
       <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/noticeboard.php" />
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

<?php include('./adminfooter.php');?>
