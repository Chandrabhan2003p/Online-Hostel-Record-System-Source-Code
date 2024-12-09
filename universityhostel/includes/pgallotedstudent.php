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
    <h1>PG ALLOTED  NEW  STUDENT LIST</h1>
    <a href="../report-generate/printpglist.php"class="btn btn-primary me-3 px-5 ">Print</a>
    <hr>
            <?php
            include('./connect.php');
            $query="select * from pgregistration where hostel_status='Yes'";
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
                                    <th>Registratioin No.</th>
                                    <th>Student Name</th>
                                    <th>Father Name</th>
                                    <th>Category</th>
                                    <th>Course </th> 
                                    <th>State</th>
                                    <th>Action</th>
   
                                </tr>
                            </thead>';
                           echo'<tbody>'; 
                    $sr=1;
                    while($row=mysqli_fetch_assoc($result))
                    {
                     ?>
                    <tr>
                        <td><?php echo $sr?></td>   
                       
                        <td><?php echo $row['registration_no']?></td>
                        <td><?php echo $row['sname']?></td>
                        <td><?php echo $row['father_name']?></td>
                        <td><?php echo $row['category']?></td>
                        <td><?php echo $row['course']?></td>
                        <td><?php echo $row['state']?></td>
                        <td style="margin-left:50px;"><a href="pgapplicationdata.php?id=<?php echo $row['cuet_no']?>" class="btn btn-primary me-3 px-3  ">View</a>

                        
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