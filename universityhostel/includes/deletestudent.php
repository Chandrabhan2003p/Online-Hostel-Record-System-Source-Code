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
if(isset($_GET['id']) && isset($_GET['roomno']))
{
    $regno=$_GET['id'];
    $roomno=$_GET['roomno'];

    $query1="delete from studentregistration where registration_no='$regno'";
    $result1=mysqli_query($conn,$query1);

    $query2="delete from userdetails where id='$regno'";
    $result2=mysqli_query($conn,$query2);

    $query3="select * from  rooms where room_no='$roomno'";
    $result3=mysqli_query($conn,$query3);
    while($row=mysqli_fetch_assoc($result3))
    {
        $allot=$row['allot_seat'];
        $empty=$row['empty_seat'];
        $seater=$row['seater'];

        if($allot==1)
        {
            $query="UPDATE rooms set allot_seat='0',empty_seat='$seater',allot_status='No' where room_no='$roomno'";
            mysqli_query($conn,$query);
        }
        else
        {
            $query1="UPDATE rooms set allot_seat=$allot-1,empty_seat=$empty+1 where room_no='$roomno'";
            mysqli_query($conn,$query1);  
        }



    }
    }
    
    if($result1 !=1 && $result2 !=1 && $result4 !=1)
    {
        echo "<script>alert('Record Not Deleted');</script>"; 
    }
    else
    {
        echo "<script>alert('Recored Deleted Successfully');</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/managestudent.php" />
        <?php
    }
        
?>
</div>
<?php include('./adminfooter.php');?>