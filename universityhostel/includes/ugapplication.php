<?php include('./adminheader.php');?>
<style>
         .main .content
         {
            height: 200vh;
            width: 100%;
            margin-right: 30px;
         }
</style>
<div class="content">
    <h1>UG STUDENT NEW APPLICATION</h1>
    <hr>
            <?php
            include('./connect.php');
            $query="select * from ugregistration where hostel_status='No'";
            $result=mysqli_query($conn,$query);
            $total=mysqli_num_rows($result);
            if(!$total)
            {
                echo"<h3 style='color:red'>NEW APPLICATION NOT FOUND</h3>";
            }
            else
            {
                if(!$result)
                { 
                    die("connection failed".mysqli_error($conn));
                }
                else
                {
                    echo'<div class="row">';
                    echo '<div class="col-md-15 col-xs-11">';

                       echo '<div class="table-responsive">'; 
                       echo '<table class="table table-bordered  table-striped table-hover">';
                        
                           echo '<thead class="bg-success text-white"> 
                                <tr >
                                    <th>Sr No.</th>
                                    <th>Cuet No.</th>
                                    <th>Student Name</th>
                                    <th>Father Name</th>
                                    <th>Category</th>
                                    <th>Course </th> 
                                    <th>State</th>
                                    <th>Distance in km</th>
                                    <th style="text-align: center;"class="col-3">View Details</th>     
                                </tr>
                            </thead>';
                           echo'<tbody>'; 
                    $sr=1;
                    while($row=mysqli_fetch_assoc($result))
                    {
                     ?>
                    <tr>
                        <td><?php echo $sr?></td>   
                       
                        <td><?php echo $row['cuet_no']?></td>
                        <td><?php echo $row['sname']?></td>
                        <td><?php echo $row['father_name']?></td>
                        <td><?php echo $row['category']?></td>
                        <td><?php echo $row['course']?></td>
                        <td><?php echo $row['state']?></td>
                        <td><?php echo $row['distance']?></td>
                        <td style="margin-left:50px;"><a href="ugapplicationdata.php?id=<?php echo $row['cuet_no']?>" class="btn btn-primary me-3 px-3  ">View</a>
    
                        <a href="ugapproved.php?regno=<?php echo $row['Registration_no']?> &image=<?php echo $row['std_img']?>  &sname=<?php echo $row['sname']?>  &fname=<?php echo $row['father_name']?> &mname=<?php echo $row['mother_name']?>  &dob=<?php echo $row['date_of_birth']?> &category=<?php echo $row['category']?> &religion=<?php echo $row['religion']?> &programtype=<?php echo $row['program_type']?> &course=<?php echo $row['course']?> &mobile=<?php echo $row['phone_no']?> &email=<?php echo $row['email_id']?> &address=<?php echo $row['address']?> &state=<?php echo $row['state']?> &distance=<?php echo $row['distance']?> &document=<?php echo $row['aadhar_pdf']?>" class="btn btn-success me-3 px-3 ">Approve</a>
    
                        <a href="rejectapplication.php?id=<?php echo $row['email_id']?> &program=<?php echo $row['program_type']?>" onclick='return checkdelete()' class="btn btn-danger me-3 px-3 ">Reject</a></td>
                    </tr> 
                    <?php $sr++;
                    }
                }  
            }         
          
                echo'</tbody>';
            echo'</table>';
          echo'</div>'; 
       echo'</div>'; 
echo '</div>';
 ?>
</div>

<script>
     function checkdelete()
     {
        return confirm('Are you sure you want to reject this application request ?');
     }

</script>


<?php include('./adminfooter.php');?>