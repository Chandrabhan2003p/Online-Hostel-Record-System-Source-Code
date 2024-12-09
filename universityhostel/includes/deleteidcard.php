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
if(isset($_GET['enrollno']))
{ 
    $enroll = $_GET['enrollno'];

    $query1="DELETE  FROM  idcard  WHERE enroll_no='$enroll'";
    $result1=mysqli_query($conn,$query1);

    if($result1 !=1)
    {
        echo "<script>alert('Record Not Deleted');</script>"; 
    }
    else
    {
        echo "<script>alert('Recored Deleted Successfully');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/manageidcard.php" />
        <?php
    }
}
        
?>
</div>
<?php include('./adminfooter.php');?>