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
if(isset($_GET['id']) && isset($_GET['program']))
{
    $email=$_GET['id'];
    $program_type=$_GET['program'];

    if($program_type=='UG')
    {
        $query1="delete from ugregistration where email_id='$email'";
        $result1=mysqli_query($conn,$query1);
    
        $query2="delete from userdetails where email='$email'";
        $result2=mysqli_query($conn,$query2);
    
        if($result1 !=1 && $result2 !=1)
        {
            echo "<script>alert('Application Not Rejected');</script>"; 
        }
        else
        {
            echo "<script>alert('Application Reject Successfully');</script>";
            ?>
            <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/ugapplication.php" />
            <?php
    
        }
    }
    else
    {
        $query1="delete from pgregistration where email_id='$email'";
        $result1=mysqli_query($conn,$query1);
    
        $query2="delete from userdetails where email='$email'";
        $result2=mysqli_query($conn,$query2);
    
        if($result1 !=1 && $result2 !=1)
        {
            echo "<script>alert('Application Not Rejected');</script>"; 
        }
        else
        {
            echo "<script>alert('Application Reject Successfully');</script>";
            ?>
            <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/pgapplication.php" />
            <?php
    
        }
    }
       
}
?>
</div>


<?php include('./adminfooter.php');?>