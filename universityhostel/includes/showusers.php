<?php include('./adminheader.php');?>
<style>
        .main .content
    {
 
        height: 200vh;     
    
    }
</style>
<div class="content">

    <h1>Show Users</h1>
    <hr>

<div class="row">
        <div class="col-md-5 col-xs-8">
            <div class="table table-responsive">
            <table class="table table-bordered  table-striped table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Sr No.</th>
                        <th>Student Name</th>
                        <th>Email ID</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            include('./connect.php');
            $query="select * from userdetails";
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
                    <td><?php echo $row['sname']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['password']?></td>
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

<?php include('./adminfooter.php');?>