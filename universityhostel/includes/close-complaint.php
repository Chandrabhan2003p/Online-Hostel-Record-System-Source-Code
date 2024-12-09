<?php include('./adminheader.php');?>
<?php session_start();?>

<style>
    .main .content
    {
        height: 200vh;     
    }

</style>
<div class="content">

<h1>Close Complaints</h1>
<hr>
<div class="row">
        <div class="col-md-10 col-xs-8">
            <div class="table table-responsive">
            <table class="table table-bordered  table-striped table-hover " >
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Sr No.</th>
                        <th>Complaint Number</th>
                        <th >Complaint Type</th>
                        <th >Room Number</th>
                        <th>Complaint Status</th>
                        <th >Complaint Reg. Date</th>
                        <th >Action</th> 
                    </tr>
                </thead>
                <tbody>
            <?php
            include('./connect.php');
            $query="select * from complaint";
            $data=mysqli_query($conn,$query);
            $result = mysqli_fetch_assoc($data);
            $status= $result['complaint_status'];

            if($status!='New'&& $status!='Closed')
            { 
                $query1="select * from complaint where complaint_status='Closed'";
                $data1=mysqli_query($conn,$query1);
                $sr=1;
                while($row=mysqli_fetch_assoc($data1))
                {
                 ?>
                <tr>
                    <td><?php echo $sr?></td>   
                    <td><?php echo $row['complaint_no']?></td>
                    <td><?php echo $row['complaint_type']?></td>
                    <td><?php echo $row['roomno']?></td>
                    <td><?php echo $row['complaint_status']?></td>
                    <td><?php $wop = $row['registration_date']; print date("d-m-Y",strtotime($wop))?></td>
                    <td style="margin-left:100px;"><a href="complaint_details.php?id=<?php echo $row['complaint_no']?>" class="btn btn-primary me- px-4 ">VIEW</a>
                </tr> 
                <?php $sr++;
                }
            }
            
            else
            {
                echo "<h3 style='color:red';>New Complaints Not Found</h3>";
            }                  
            ?>
                </tbody>
            </table>
            </div>
        </div>

</div>
</div>
<?php include('./adminfooter.php');?> 