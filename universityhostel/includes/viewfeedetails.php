<?php include('./adminheader.php');?>
<style>
        .main .content
    {
 
        height: 200vh;     
    
    }
</style>
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
    #addroom
    {
      float: right;
    }
    .select1
    {
    width: 10%;
    padding: 7px;
    position: relative;
    border-radius: 8px;
    }
    .searchbar
    {
    width: 20%;
    padding: 7px;
    position: relative;
    left: 20px;
    border-radius: 8px;
    text-decoration: none;
    outline: none;
    }
    #button1
    {
    position:relative;
    left: 50px;
    }

</style>
    
<div class="content">

    <h1>Student Fee Payment Details</h1>
    <hr>
        
<?php
if(@$_REQUEST['search']==null && @$_REQUEST['searchfield']==null )
{
    $search =null;
}
else
{
    $searchData = $_REQUEST['search'];
    $searchField = $_REQUEST['searchfield'];

     $search = " WHERE $searchField like '%$searchData%'";
}
?>
    <form action="" method="post">
    <select name="searchfield" class="select1" required>
        <option value="">Serach By</option>
        <option value="enrollment">Enrollment No.</option>
        <option value="name">Name </option>
        <option value="category">Category</option>
        <option value="course_type">Course Type</option>
        <option value="pay_year">Year</option>
        <option value="payment_status">Payment Status</option>

    </select>
    <input type="text" name="search" class="searchbar" placeholder="Enter value for search">

    <button id='button1' class="btn btn-outline-success" type="submit">Search</button>

</form>


    <?php
    include('./connect.php');
    $query="select * from paymentdetails".$search;
    $result=mysqli_query($conn,$query);
    $total=mysqli_num_rows($result);
    if(!$total)
    {
        echo"<h3 style='color:red'>RECORD NOT  FOUND</h3>";
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
                        echo '<thead class="bg-danger text-white">
                            <tr>
                                <th>Sr. No.</th>
                                <th>Enrollment No.</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Course Type</th>
                                <th>Year</th>
                                <th>Payment Status</th>
                                <th>View Details</th>
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
                            <td><?php echo $row['enrollment']?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['category']?></td>
                            <td><?php echo $row['course_type']?></td>
                            <td><?php echo $row['pay_year']?></td>
                            <td><?php echo $row['payment_status']?></td>
                            <td><a href="viewpaymentdetails.php?enroll=<?php echo $row['enrollment']?>&year=<?php echo $row['pay_year']?>" class="btn btn-primary me-3 px-5  ">View</a>
                            </td>
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
        return confirm('Are you sure you want to delete id card ?');
     }

</script>



    </div>

<?php include('./adminfooter.php');?>