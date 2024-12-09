<?php include('./adminheader.php');?>
<style>
         .main .content
         {
            height: 200vh;
            width: 100%;
            margin-right: 30px;
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
<div class="content">
    <h1>MANAGE STUDENTS</h1>
    <a href="../report-generate/printallstudentlist.php"class="btn btn-primary me-3 px-5 ">Print</a>
    <hr>
    <form action="" method="post">
    <select name="searchfield" class="select1" required>
        <option value="">Serach By</option>
        <option value="registration_no">Registration No.</option>
        <option value="name">Name </option>
        <option value="fname">Father Name</option>
        <option value="room_no">Room No</option>
        <option value="category">Category</option>
        <option value="program_type">Programme Type</option>
        <option value="course">Course</option>
        <option value="state">State</option>
    </select>
    <input type="text" name="search" class="searchbar" placeholder="Enter value for search">

    <button id='button1' class="btn btn-outline-success" type="submit">Search</button>

</form>

<?php
    include('./connect.php');
    $query="select * from studentregistration ".$search;
    $result=mysqli_query($conn,$query);
    
    $total=mysqli_num_rows($result);

    if(!$total)
    {
        echo"<h3 style='color:red'>Record NOT FOUND</h3>";
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
            echo '<div class="col-md-15 mt-5">';

                echo '<div class="table-responsive ">'; 
                echo '<table class="table table-bordered  table-striped table-hover ">';
                
                    echo '<thead class="bg-success text-white"> 
                        <tr >
                            <th>Sr No.</th> 
                            <th>Reg No.</th>   
                            <th>Student Name</th>
                            <th>Father Name</th>
                            <th>Room No.</th>
                            <th>Category</th>
                            <th>Programme Type </th>
                            <th>Course </th> 
                            <th>State</th>
                            
                            <th style="text-align: center;"class="col-3">Action</th>     
                        </tr>
                    </thead>';
                    echo'<tbody>'; 
            $sr=1;
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
            <tr>
                <td ><?php echo $sr?></td>  
                <td><?php echo $row['registration_no']?></td> 
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['fname']?></td>
                <td><?php echo $row['room_no']?></td>
                <td><?php echo $row['category']?></td>
                <td><?php echo $row['program_type']?></td>
                <td><?php echo $row['course']?></td>
                <td><?php echo $row['state']?></td>
                <td style="margin-left:50px;"><a href="myprofile.php?id=<?php echo $row['registration_no']?>" class="btn btn-primary me-3 px-4 ">VIEW</a>

                <a href="updatedetails.php?regno=<?php echo $row['registration_no']?> &roomno=<?php echo $row['room_no']?>" class="btn btn-success me-3 px-4 ">UPDATE</a>

                <a href="deletestudent.php?id=<?php echo $row['registration_no']?> &roomno=<?php echo $row['room_no']?>" onclick='return checkdelete()' class="btn btn-danger me-3 px-4 ">DELETE</a></td>
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
<script src="search.js"></script>

<script>

     function checkdelete()
     {
        return confirm('Are you sure you want to delete this record ?');
     }

</script>


<?php include('./adminfooter.php');?>