<?php include('./studentheader.php');?>
<?php session_start();?>
<?php
include ('./connect.php');
error_reporting(0);

if(isset($_SESSION['username']))
{
    $email=$_SESSION['username'];
    
    $query="select * from studentregistration where email_id='$email'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
}
else
{
    header('location:uglogin.php');
}
?>
<style>
    .main .content
    {
        height: 200vh;     
    }    
    .box1
        {
            height: 150px;
            width: 700px;
            border: 2px solid black;
            background:silver; 
        }

        .box1 .total1
        {
            color:white ;
            font-size: 50px;
            text-align: center;
            background:green;
            font-family:inherit;
        }    
        .box1 .total1 h3
        {
            color:white;
            padding: 45px;
        }
        .box1 a
        {
            margin-left: 300px;
            position:relative;
            bottom: 9px;
            text-decoration: none;
            
        }
        .box1 a:hover
        {
            color:green;
        }
        
        .box2
        {
            height: 150px;
            width: 700px;
            border: 2px solid black;
            background:silver; 
            position: relative;
            left: 750px;
            bottom: 150px;
        }

        .box2 .total2
        {
            color:white ;
            font-size: 50px;
            text-align: center;
            background:tomato;
            font-family:inherit;
        }    
        .box2 .total2 h3
        {
            color:white;
            padding: 45px;
        }
        .box2 a
        {
            margin-left: 300px;
            position:relative;
            bottom: 9px;
            text-decoration: none;
            
        }
        .box2 a:hover
        {
            color:tomato;
        }
  
</style>

<div class="content">
    <h1>Dashboard</h1>
    <hr>

    <div class="box1">
            <div class="total1">
            <?php echo $total1; ?>
            <h3>My Profile</h3>
            </div>
            <?php
            while($row=mysqli_fetch_assoc($data))
            {
                
            ?>
            <a href="ugprofile.php?id=<?php echo $row['email_id']?>">View Profie</a>

    </div>

    <div class="box2">
            <div class="total2">
            <?php echo $total2; ?>
            <h3>My Room </h3>
            </div>
            <a href="ugviewroom.php?id=<?php echo $row['email_id']?>">View Details</a>
            <?php
            }
           ?>
           
    </div>
</div>
    

<?php include('./studentfooter.php');?>