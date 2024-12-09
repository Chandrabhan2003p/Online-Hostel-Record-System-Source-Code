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
    <h1>Manage Rooms</h1>
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
        <option value="room_no">Room Number</option>
        <option value="floor">Floor </option>
        <option value="seater">Seater</option>
        <option value="allot_status">Allotment Status</option>

    </select>
    <input type="text" name="search" class="searchbar" placeholder="Enter value for search">

    <button id='button1' class="btn btn-outline-success" type="submit">Search</button>

</form>

    <div class="box1 ">
    
    <a class="btn btn-dark" href="./addroom.php" id="addroom" role="button">Add Rooms</a>


    </div>
    <?php
    include('./connect.php');
    $query="select * from rooms".$search;
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
                                <th>Room No.</th>
                                <th>Floor</th>
                                <th>Seater</th>
                                <th>Alloted Seats</th>
                                <th>Empty Seats</th>
                                <th>Attot Status</th>
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
                            <td><?php echo $row['room_no']?></td>
                            <td><?php echo $row['floor']?></td>
                            <td><?php echo $row['seater']?></td>
                            <td><?php echo $row['allot_seat']?></td>
                            <td><?php echo $row['empty_seat']?></td>
                            <td><?php echo $row['allot_status']?></td>
                            <td style="margin-left:50px;"><a href="viewroom.php?id=<?php echo $row['room_no']?>" class="btn btn-primary me-3 px-5  ">View</a>
                            
                            <a href="updateroom.php?room_no=<?php echo $row['room_no']?>" class="btn btn-success me-3 px-5 ">Update</a>
                            <a href="deleteroom.php?room_no=<?php echo $row['room_no']?>" onclick='return checkdelete()' class="btn btn-danger me-3 px-5 ">Delete</a></td>
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
        return confirm('Are you sure you want to reject this application request ?');
     }

</script>



<?php include('./adminfooter.php');?>