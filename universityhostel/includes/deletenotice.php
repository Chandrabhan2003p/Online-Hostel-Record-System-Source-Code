<?php include('./adminheader.php');?>
<style>
        .main .content
    {
        height: 200vh;     
    }
</style>
<div class="content">
      
<?php
include('./connect.php');
if(isset($_GET['id']) )
{
    $id=$_GET['id'];
    
    $query1="delete from notice where notice_id='$id'";
    $result1=mysqli_query($conn,$query1);

    }
    if($result1 !=1 )
    {
        echo "<script>alert('Notice Not Deleted');</script>"; 
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/noticeboard.php" />
        <?php
    }
    
    else
    {
        echo "<script>alert('Notice Deleted Successfully');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/noticeboard.php" />
        <?php
    }
        
?>
</div>
<?php include('./adminfooter.php');?>