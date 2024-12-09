<?php include('./studentheader.php');?>
<?php session_start();?>

<style>
    .main .content
    {
 
        height: 200vh;     
    
    }

</style>
<div class="content">
<?php
include('./connect.php');
if(isset($_GET['id']))
{
    $regno =$_GET['id'];

    $query="select * from complaint where userid='$regno'";
    $data=mysqli_query($conn,$query);
 
}

?>
<h1>My Complaints</h1>
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
                        <th>Complaint Status</th>
                        <th >Complaint Reg. Date</th>
                        <th >Action</th> 
                    </tr>
                </thead>
                <tbody>
            <?php

            if(!$data)
            { 
                die("connection failed".mysqli_error($conn));
            }
            else
            {
                $sr=1;
                while($row=mysqli_fetch_assoc($data))
                {
                 ?>
                <tr>
                    <td><?php echo $sr?></td>   
                    <td><?php echo $row['complaint_no']?></td>
                    <td><?php echo $row['complaint_type']?></td>
                    <td><?php echo $row['complaint_status']?></td>
                    <td><?php $wop = $row['registration_date']; print date("d-m-Y",strtotime($wop))?></td>
                
                    <td style="margin-left:100px;"><a href="student-view-complaint-details.php?id=<?php echo $row['complaint_no']?>" class="btn btn-primary me- px-4 ">VIEW</a>
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
</div>

<?php include('./studentfooter.php');?>