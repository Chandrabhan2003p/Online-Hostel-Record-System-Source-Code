<?php include('./adminheader.php');?>
<?php
$roomno=$_GET['id'];
?>
<style>
      .main .content
    {
 
        height: 200vh;     
    
    }
</style>
<div class="content">
    <h1>Room No.<?php echo"$roomno";?></h1>
    <hr>
    

<style>
    .box1 h2
    {
       float: left;
    }
    .box1 button
    {
       float: right;
    }
    .row
    {
        margin-top: 50px;
    }
    #addroom
    {
      float: right;
    }

</style>

    <div class="box1 ">
    <h3 style="color:green">Student List</h3>
   
</button>
    </div>
    <?php
    include('./connect.php');
    $query="select * from studentregistration where room_no='$roomno'";
    $result=mysqli_query($conn,$query);
    $total=mysqli_num_rows($result);
    if(!$total)
    {
        echo"<h3 style='color:red'>ROOM RECORD NOT FOUND</h3>";
        
    }
    else{
        
        if(!$result)
            { 
                die("connection failed".mysqli_error($conn));
            }
            else
            {
                echo '<div class="row">';
                echo'<div class="table-responsive">';
                  echo'<table class="table table-bordered  table-striped table-hover">';
                        echo '<thead class="bg-danger text-white ">
                            <tr>
                                <th>Sr. No.</th>
                                <th> Student Image</th>
                                <th>Registration No.</th>
                                <th>Student Name</th>
                                <th>Father Name</th>
                                <th>Program Type</th>
                                <th>Category</th>
                                <th>Course</th>
                                <th>Semester</th>
                                <th>Stay From</th>
                                <th>State</th>   
                            </tr>
                        </thead>';
                        echo '<tbody>';
        
                    {
                        $sr=1;
                        while($row=mysqli_fetch_assoc($result))
                        {
                         ?>
        
                        <tr> 
                            <td><?php echo $sr?></td>
                            <td><?php echo "<img src='".$row['std_img']."' height='70px' width='70px'>"?></td>      
                            <td><?php echo $row['registration_no']?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['fname']?></td>
                            <td><?php echo $row['program_type']?></td>
                            <td><?php echo $row['category']?></td>
                            <td><?php echo $row['course']?></td>
                            <td><?php echo $row['semester']?></td>
                            <td><?php echo $row['stay_from']?></td>
                            <td><?php echo $row['state']?></td>
                        </tr>
                        <?php
                        $sr++;
                        }
                    } 
            }   
    }
  
echo '</tbody>';
echo '</table>';
echo '</div>';      
echo '</div>';
?>

</div>

<?php 
?>


<?php include('./adminfooter.php');?>