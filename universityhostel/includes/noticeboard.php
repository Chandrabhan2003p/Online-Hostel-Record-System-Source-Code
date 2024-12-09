<?php include('./adminheader.php');?>
<style>
      .main .content
    {
 
        height: 200vh;     
    
    }
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

</style>

<div class="content">
<h1>Notice Board</h1>
<hr>
    
<div class="box1 ">
    <a class="btn btn-dark" href="./addnotice.php"  role="button">Post New Noitce</a>

</div>
<?php
include('./connect.php');
$query="select * from notice";
$result=mysqli_query($conn,$query);
$total=mysqli_num_rows($result);
if(!$total)
{
echo"<h3 style='color:red'>NOTIFICATION NOT  FOUND</h3>";
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
        echo'<table class="table table-bordered  table-striped table-hover ">';
            echo '<thead class="bg-danger text-white ">
                <tr>
                    <th style="width:70px">Sr no.</th>
                    <th>Notice Title Name</th>
                    <th>Notice Description</th>
                    <th>Link Title Name</th>
                    <th style="width:100px">Post Date</th>
                    <th style="text-align: center;" class="col-4">Operations</th>
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
                <td><?php echo $row['title']?></td>
                <td><?php echo $row['description']?></td>
                <td><?php echo $row['link_title']?></td>
               
                <td><?php $sow = $row['post_date']; print date("d-m-Y",strtotime($sow))?></td>

                <td ><?php echo"<a href='".$row['file']."' class='btn btn-primary me-3 px-5' target='blank' >VIEW</a>" ?>
               
                <a href="updatenotice.php?id=<?php echo $row['notice_id']?>" class="btn btn-success me-3 px-5 ">Edit</a>
                <a href="deletenotice.php?id=<?php echo $row['notice_id']?>" onclick='return checkdelete()' class="btn btn-danger me-3 px-5 ">Delete</a></td>  
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
<script>
     function checkdelete()
     {
        return confirm('Are you sure you want to delete notice?');
     }

</script>

<?php include('./adminfooter.php');?>