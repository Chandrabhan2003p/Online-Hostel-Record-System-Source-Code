
	
<?php include('./adminheader.php');?>
<?php session_start();?>
<style>
    .main .content
    {
 
        height: 200vh;     
    }   
    textarea
    {
        resize: none;
    } 
           
</style>


<div class="content">
<?php
include('./connect.php');
error_reporting(0);
if(isset($_GET['id']))
{
    $id =$_GET['id'];

    $query="select * from notice where notice_id='$id'";
    $data=mysqli_query($conn,$query);
    
    $result=mysqli_fetch_assoc($data);
    
    
}

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Notice</title>
</head>
<body>
<div class="content">
    <h1>Update Notice</h1>
    <hr>

    <div class="container-fluid bg-dark text-light py-3">
      <header class="text-center">
        <h2 class="display-6">Update Notice Details</h2>
      </header>
    </div>
  <section class="container my-2 bg-dark w-50 text-light p-2">
    <form class="row g-3" action="#" method="post" autocomplete="off" enctype="multipart/form-data">
      <div class="col-12">
          <label for="inputState" class="form-label">Notice Title</label>
          <input type="text" name="title" value="<?php echo $result['title']?>" class="form-control" required="required">

      </div>

      <div class="col-12">
      <label for="inputState" class="form-label">Notice Description</label>
      <textarea class="form-control" name="description"  rows="5" required="required"> <?php echo $result['description']?></textarea>
      </div>

      <div class="col-12">
          <label for="inputState" class="form-label">Link Title</label>
          <input type="text" name="linkname" class="form-control" value="<?php echo $result['link_title']?>"  required="required">

      </div>

      <div class="mb-3">
      <label> Upload File</label>
      <input type="file" name="uploadfile" class="form-control" <?php echo $result['file']?>>
      </div>

      <div class="col-12">
        <input type="submit" class="btn btn-primary"  name="post" value="UPDATE">
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

  $title=$_POST['title'];
  $des=$_POST['description'];
  $linktitle= $_POST['linkname'];

  if($tempname!='')
  {
    $query="select * from notice where notice_id='$id'";
    $data=mysqli_query($conn,$query);
    $result=mysqli_fetch_assoc($data);
    $file =$result['file'];
    unlink('../document_pdf/'.$file);
    move_uploaded_file($tempname,$folder);

    $sql ="UPDATE notice set file='$folder',title='$title',description='$des',link_title='$linktitle' where notice_id='$id'";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Notice Update Successfully');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/noticeboard.php" />
        <?php
    }
    else
    {
        echo "<script>alert('Notice Not Update ');</script>";
        ?>
      <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/noticeboard.php" />
     <?php 
    }

  }
  else
  {
    if($title !="" && $des !="" && $linktitle !="")
    {
 
     $query = "UPDATE notice set title='$title',description='$des', link_title='$linktitle' where notice_id='$id'";
     echo $query;
 
     $data = mysqli_query($conn, $query); 
     if($data)
     {
       echo "<script>alert('Notice Update Successfully');</script>";
       ?>
       <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/noticeboard.php" />
       <?php
     }
     else
     {
         echo "<script>alert('Notice Not Update ');</script>";
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






    
  
}
?>


</div>

<?php include('./adminfooter.php');?>
