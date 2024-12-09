<?php include('./adminheader.php');?>
<div class="content">     
<?php
include('./connect.php');
if(isset($_GET['room_no']))
{
    $roomno=$_GET['room_no'];

        $query1="delete from rooms where room_no='$roomno'";

        $result1=mysqli_query($conn,$query1); 
        if(!$result1)
        {
            echo "<script>alert('ROOM NOT REMOVE');</script>"; 
        }
        else
        {
            echo "<script>alert('Room Delete Successfully');</script>";
            ?>
            <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/manageroom.php" />
            <?php
        }   
}
?>
</div>


<?php include('./adminfooter.php');?>