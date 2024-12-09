<?php include('./adminheader.php');?>
<style>
         .main .content
         {
            height: 200vh;
         }
</style>
<div class="content">
    
    <h1>ALL ALLOTED ROOMS LIST</h1>
    <hr>
    <div class="row">
        <div class="col-md-15 col-xs-11">
            <div class="table-responsive">
            <table class="table table-bordered  table-striped table-hover text-align-center">
                <thead class="bg-danger text-white">
                    <tr>
                        <th>Sr No.</th>
                        <th>Room No.</th>
                        <th>Floor</th>
                        <th>Seater</th>
                        <th>Alloted Seats</th>
                        <th>Empty Seats</th>
                        <th>Attot Status</th>
                        <th>view Details</th>

                    </tr>
                </thead>
                <tbody>
            <?php
            include('./connect.php');
            $query="select * from rooms where  allot_status  like 'Yes'";
            $result=mysqli_query($conn,$query);
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

                <tr> <td><?php echo $sr?></td>    
                    <td><?php echo $row['room_no']?></td>
                    <td><?php echo $row['floor']?></td>
                    <td><?php echo $row['seater']?></td>
                    <td><?php echo $row['allot_seat']?></td>
                    <td><?php echo $row['empty_seat']?></td>
                    <td><?php echo $row['allot_status']?></td>
                    <td class="col-1" style="margin-left:50px;"><a href="viewroom.php?id=<?php echo $row['room_no']?>" class="btn btn-primary me-3 px-5  ">View</a>

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