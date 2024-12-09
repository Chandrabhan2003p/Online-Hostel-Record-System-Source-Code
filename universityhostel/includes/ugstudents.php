<?php include('./adminheader.php');?>

<style>
        .main .content
    {
 
        height: 200vh;     
    
    }
</style>


<div class="content">
    <hr>
    <h1>ALL UG STUDENT LIST</h1>
    <hr>

    <div class="row">
        <div class="col-md-15 col-xs-11">
            <div class="table-responsive">
            <table class="table table-bordered  table-striped table-hover">
                <thead class="bg-success text-white">
                    <tr>
                        <th>Sr No.</th>
                        <th>Student Name</th>
                        <th>Father Name</th>
                        <th>Category</th>
                        <th>Programme </th>
                        <th>Category</th>
                        <th>State</th>
                        <th>View Full Details</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            include('./connect.php');
            $query="select * from studentregistration where program_type='UG' && room_no!=0";
            $result=mysqli_query($conn,$query);
            $total=mysqli_num_rows($result);
            if(!$result)
            { 
                die("connection failed".mysqli_error($conn));
            }
            else
            {
                $sr=1;
                while($row=mysqli_fetch_assoc($result))
                {
                 ?>
                <tr>
                    <td><?php echo $sr?></td>   
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['fname']?></td>
                    <td><?php echo $row['category']?></td>
                    <td><?php echo $row['course']?></td>
                    <td><?php echo $row['category']?></td>
                    <td><?php echo $row['state']?></td>
                    <td style="margin-left:50px;"><a href="myprofile.php?id=<?php echo $row['registration_no']?>" class="btn btn-primary me-3 px-3 ms-4 ">VIEW</a>
                </tr> 
                <?php $sr++;
                }
            }                  
            ?>
                </tbody>
            </table>
            </div>
        </div>

    </div>
    <a href="admindashboard.php" class="btn btn-danger">BACK</a>
</div>


<?php include('./adminfooter.php');?>