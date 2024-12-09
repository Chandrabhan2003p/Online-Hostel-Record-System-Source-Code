<?php include('./adminheader.php');?>

<div class="content">
    <h1>Dashboard</h1>
    <hr>
<?php

include('./connect.php');
error_reporting(0);//avoid warnning

$query="select * from studentregistration  where room_no!=0";
$data=mysqli_query($conn,$query);
$total1=mysqli_num_rows($data);

$query="select * from studentregistration where program_type ='UG' &&  room_no!=0 ";
$data=mysqli_query($conn,$query);
$total2=mysqli_num_rows($data);

$query="select * from studentregistration  where program_type ='PG' &&  room_no!=0";
$data=mysqli_query($conn,$query);
$total3=mysqli_num_rows($data);

$query1="select * from studentregistration  where program_type ='DIPLOMA' &&  room_no!=0";
$data=mysqli_query($conn,$query1);
$total4=mysqli_num_rows($data);





$query="select * from rooms";
$data=mysqli_query($conn,$query);
$total5=mysqli_num_rows($data);

$query="select * from rooms where allot_status  like 'Yes'";
$data=mysqli_query($conn,$query);
$total6=mysqli_num_rows($data);

$query="select * from rooms where allot_status not  like 'Yes'";
$data=mysqli_query($conn,$query);
$total7=mysqli_num_rows($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .box1
    {
        height: 150px;
        width: 300px;
        border: 2px solid black;
        background:silver ; 
    }

    .box1 .total1
    {
        color:white ;
        font-size: 50px;
        text-align: center;
        background:green;
        font-family:inherit;
    }
    .box2
    {
        height: 150px;
        width: 300px;
        border: 2px solid black;
        background:silver ;
        margin-left: 400px;
        position:relative;
        bottom: 150px;
        padding: 0px;
    
  
    }

    .box2 .total2
    {
        color:white;
        font-size: 50px;
        text-align: center;
        background:red;
        font-family:inherit;
    }
    .box3
    {
        height: 150px;
        width: 300px;
        border: 2px solid black;
        background:silver ;
        margin-left: 800px;
        position:relative;
        bottom: 300px;
      
    

 
    }

    .box3 .total3
    {
        color:white;
        font-size: 50px;
        text-align: center;
        background:purple;
        font-family:inherit;
    }

   .box5
    {
        height: 150px;
        width: 300px;
        border: 2px solid black;
        background:silver ;
        position:absolute;  
 
 
    }

    .box5 .total5
    {
        color:white;
        font-size: 50px;
        text-align: center;
        background:orange;
        font-family:inherit;
    }

    .box6
    {
        height: 150px;
        width: 300px;
        border: 2px solid black;
        background:silver ;
        margin-left: 400px;
        position:absolute;
 
    }

    .box6 .total6
    {
        color:white;
        font-size: 50px;
        text-align: center;
        background:maroon;
        font-family:inherit;
    }
    .box7
    {
        height: 150px;
        width: 300px;
        border: 2px solid black;
        background:silver ;
        margin-left: 800px;
        position:absolute;
 
    }

    .box7 .total7
    {
        color:white;
        font-size: 50px;
        text-align: center;
        background:darkgoldenrod;
        font-family:inherit;
    }

    
    .box1 .total1 h3
    {
        color:white;
        padding: 5px;
    }

    .box2 .total2 h3
    {
        color:white;
      
    }
    .box3 .total3 h3
    {
        color:white;
       
    }
    .box4 .total4 h3
    {
        color:white;
      
    }

    .box5 .total5 h3
    {
        color:white;
        padding: 5px;
    }

    .box6 .total5 h3
    {
        color:white;
        padding: 5px;
    }
    .box2 a
    {
        margin-left: 120px;
        text-decoration: none;
        
    }
    .box3 a
    {
        margin-left: 120px;
        text-decoration: none;
        
    }
    .box6 a
    {
        margin-left: 120px;
        text-decoration: none;
        
    }
    .box7 a
    {
        margin-left: 120px;
        text-decoration: none;
    }
    .box2 a:hover
    {
        color:red;
    }
    .box3 a:hover
    {
        color:purple;
    }
    .box6 a:hover
    {
        color:maroon;
    }
    .box7 a:hover
    {
        color:darkgoldenrod;
    }
    .main .content
    {
 
        height: 200vh;     
    
    }
</style>
</head>
<body>
    <h3 style="color:brown">STUDENTS DETAILS</h3>
    <br>
  
    <div class="box1">
        <div class="total1">
        <?php echo $total1; ?>
        <h3>TOTAL STUDENTS</h3>
        </div>
    </div>

    <div class="box2">
        <div class="total2">
        <?php echo $total2; ?>
        <h3>UG STUDENTS</h3>
        </div>
        <a href="ugstudents.php">SEE ALL</a>
    </div>

    <div class="box3">
        <div class="total3">
        <?php echo $total3+$total4; ?>
        <h3>PG STUDENTS</h3>
        </div>
        <a href="pgstudents.php">SEE ALL</a>
    </div>
    <br>
<hr style="position: relative;bottom:300px">
    <h3 style="color:brown;position: relative;bottom:300px">ROOMS DETAILS</h3>
    <br>
    <div class="box5"  style="position: relative;bottom:300px">
        <div class="total5">
        <?php echo $total5; ?>
        <h3>TOTAL ROOMS</h3>
        </div>
    </div>
    
    <div class="box6"  style="position: relative;bottom:450px">
        <div class="total6">
        <?php echo $total6; ?>
        <h3>ALLOTED ROOMS</h3>
        </div>
        <a href="allotroom.php">SEE ALL</a>
    </div>

    <div class="box7"  style="position: relative;bottom:600px">
        <div class="total7">
        <?php echo $total7; ?>
        <h3>EMPTY ROOMS</h3>
        </div>
        <a href="emptyroom.php">SEE ALL</a>
    </div>
    
</div>


<?php include('./adminfooter.php');?>