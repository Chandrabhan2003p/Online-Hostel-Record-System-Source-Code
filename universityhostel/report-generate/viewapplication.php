<?php include('./header.php');?>

<?php include('../includes/connect.php');?>

<?php session_start();?>
<style>
    .box
    {
        padding: 120px;
    }
</style>
<?php
if(isset($_POST['submit']))

{
    error_reporting(0);
     $regno = $_POST['regno'];
     $program = $_POST['program_type'];

     if($program=='UG')
     {
        $sql = "select * from ugregistration where Registration_no='$regno' && program_type='$program'";
        $data = mysqli_query($conn,$sql);
        $total = mysqli_num_rows($data);
        if($total)
        {
           $query = "select * from ugregistration where Registration_no='$regno' && program_type='$program'";
           $result = mysqli_query($conn, $query);
           if (!$result) 
           {
               die("connection failed" . mysqli_error($conn));
           } 
           else 
           {
               while ($row = mysqli_fetch_assoc($result)) 
               {
                 ?>
                 <div class="box">
   
                   <div class="panel panel-default">
                       
                       <div class="panel-body">
                          
                           <table id="zctb" class="table table-bordered  dataTable" cellspacing="0" width="100%" border="1">
   
   
                               <tbody>
   
                                   <tr>
                                       <td colspan="6" style="text-align:center; color:blue">
                                           <h3>Registraion Details Of Applicant</h3>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td colspan="6">
                                       <?php echo "<img  style='border:3px solid black;text-align:center;height:150px;width:150px;margin-left:1880px' src='" . $row['std_img'] . "' height='100px' width='100px'>" ?>
                                       </td>
                                   </tr>
                                   
                                   <tr>
                                       <th>Registration Number :</th>
                                       <td ><?php echo $row['Registration_no'] ?></td>
   
                                       <td><b>Cuet Number:</b></td>
                                       <td><?php echo $row['cuet_no']; ?></td>
   
                                       <th>Apply Date :</th>
                                       <td><?php $wop = $row['apply_date']; print date("d-m-Y",strtotime($wop))?></td>
                                   </tr>
   
                                   <tr>                                  
                                       <td><b>Programme Type :</b></td>
                                       <td><?php echo $row['program_type'] ?></td>
   
                                       <td><b>Course :</b></td>
                                       <td colspan="3"><?php echo $row['course'] ?></td>
                       
                                   </tr>
   
                                   <tr>
                                       <td colspan="6" style="color:red">
                                           <h4>Personal Info</h4>
                                       </td>
                                   </tr>
   
                                   <tr>
                                       <td><b>Application Number :</b></td>
                                       <td><?php echo $row['Registration_no'] ?></td>
   
                                       <td><b>Full Name :</b></td>
                                       <td><?php echo $row['sname'] ?></td>
   
                                       <td><b>Email :</b></td>
                                       <td><?php echo $row['email_id'] ?></td>
                                   </tr>
   
   
                                   <tr>
                                       <td><b>Father Name. :</b></td>
                                       <td><?php echo $row['father_name'] ?></td>
   
                                       <td><b>Mother Name :</b></td>
                                       <td><?php echo $row['mother_name'] ?></td>
   
                                       <td><b>Date Of Birth :</b></td>
                                       <td><?php echo $row['date_of_birth'] ?></td>
                                   </tr>
   
   
                                   <tr>
                                       <td><b>Gender:</b></td>
                                       <td><?php echo $row['gender'] ?></td>
   
                                       <td><b>Category :</b></td>
                                       <td><?php echo $row['category'] ?></td>
   
                                       <td><b>Religion :</b></td>
                                       <td><?php echo $row['religion'] ?></td>
                                   </tr>
   
                                   <tr>
                                       <td><b>Contact No. :</b></td>
                                       <td colspan="2"><?php echo $row['phone_no'] ?></td>
   
                                       <td><b>Docoment :</b></td>
                                       <td colspan="4"><?php echo "<a style='text-decoration:none;color:red'; href='" . $row['aadhar_pdf'] . "' target=''>view</a>" ?></td>
                                   </tr>
   
                                   <tr>
                                       <td colspan="6" style="color:blue">
                                           <h4>Addresses</h4>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td><b>Address according to the ID Proof :</b></td>
                                       <td colspan="5"><?php echo $row['address']?></td>
                                   </tr>
   
                                   <tr>
                                       <td><b>State :</b></td>
                                       <td colspan="5"><?php echo $row['state']?></td>
                                   </tr>
   
                                   <tr>
                                       <td><b>Distance from Home Town to University Campus in KM :</b></td>
                                       <td colspan="5"><?php echo $row['distance']?> km</td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
                   <a href="printapplication.php?cuetno=<?php echo $row['cuet_no']?> & program_type=<?php echo $row['program_type']?>" class="btn btn-primary me-3 px-5 ">Download Application</a>
                   </div>
                   <?php
   
               }
           }
        }
        else
        {
           echo "<hr>";
           echo "<h3 style='color:red;margin-left:850px'>Application Receipt Not Found</h3>";
        } 
     }
     if($program =='PG')
     {
        $sql = "select * from pgregistration where Registration_no='$regno' && program_type='$program'";
        $data = mysqli_query($conn,$sql);
        $total = mysqli_num_rows($data);
        if($total)
        {
           $query = "select * from pgregistration where Registration_no='$regno' && program_type='$program'";
           $result = mysqli_query($conn, $query);
           if (!$result) 
           {
               die("connection failed" . mysqli_error($conn));
           } 
           else 
           {
               while ($row = mysqli_fetch_assoc($result)) 
               {
                 ?>
                 <div class="box">
   
                   <div class="panel panel-default">
                       
                       <div class="panel-body">
                          
                           <table id="zctb" class="table table-bordered  dataTable" cellspacing="0" width="100%" border="1">
   
   
                               <tbody>
   
                                   <tr>
                                       <td colspan="6" style="text-align:center; color:blue">
                                           <h3>Registraion Details Of Applicant</h3>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td colspan="6">
                                       <?php echo "<img  style='border:3px solid black;text-align:center;height:150px;width:150px;margin-left:1880px' src='" . $row['std_img'] . "' height='100px' width='100px'>" ?>
                                       </td>
                                   </tr>
                                   
                                   <tr>
                                       <th>Registration Number :</th>
                                       <td ><?php echo $row['registration_no'] ?></td>
   
                                       <td><b>Cuet Number:</b></td>
                                       <td><?php echo $row['cuet_no']; ?></td>
   
                                       <th>Apply Date :</th>
                                       <td><?php $wop = $row['apply_date']; print date("d-m-Y",strtotime($wop))?></td>
                                   </tr>
   
                                   <tr>                                  
                                       <td><b>Programme Type :</b></td>
                                       <td><?php echo $row['program_type'] ?></td>
   
                                       <td><b>Course :</b></td>
                                       <td colspan="3"><?php echo $row['course'] ?></td>
                       
                                   </tr>
   
                                   <tr>
                                       <td colspan="6" style="color:red">
                                           <h4>Personal Info</h4>
                                       </td>
                                   </tr>
   
                                   <tr>
                                       <td><b>Application Number :</b></td>
                                       <td><?php echo $row['registration_no'] ?></td>
   
                                       <td><b>Full Name :</b></td>
                                       <td><?php echo $row['sname'] ?></td>
   
                                       <td><b>Email :</b></td>
                                       <td><?php echo $row['email_id'] ?></td>
                                   </tr>
   
   
                                   <tr>
                                       <td><b>Father Name. :</b></td>
                                       <td><?php echo $row['father_name'] ?></td>
   
                                       <td><b>Mother Name :</b></td>
                                       <td><?php echo $row['mother_name'] ?></td>
   
                                       <td><b>Date Of Birth :</b></td>
                                       <td><?php echo $row['date_of_birth'] ?></td>
                                   </tr>
   
   
                                   <tr>
                                       <td><b>Gender:</b></td>
                                       <td><?php echo $row['gender'] ?></td>
   
                                       <td><b>Category :</b></td>
                                       <td><?php echo $row['category'] ?></td>
   
                                       <td><b>Religion :</b></td>
                                       <td><?php echo $row['religion'] ?></td>
                                   </tr>
   
                                   <tr>
                                       <td><b>Contact No. :</b></td>
                                       <td colspan="2"><?php echo $row['phone_no'] ?></td>
   
                                       <td><b>Docoment :</b></td>
                                       <td colspan="4"><?php echo "<a style='text-decoration:none;color:red'; href='" . $row['aadhar_pdf'] . "' target=''>view</a>" ?></td>
                                   </tr>
   
                                   <tr>
                                       <td colspan="6" style="color:blue">
                                           <h4>Addresses</h4>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td><b>Address according to the ID Proof :</b></td>
                                       <td colspan="5"><?php echo $row['address']?></td>
                                   </tr>
   
                                   <tr>
                                       <td><b>State :</b></td>
                                       <td colspan="5"><?php echo $row['state']?></td>
                                   </tr>
   
                                   <tr>
                                       <td><b>Distance from Home Town to University Campus in KM :</b></td>
                                       <td colspan="5"><?php echo $row['distance']?> km</td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
                   <a href="printapplication.php?cuetno=<?php echo $row['cuet_no']?> & program_type=<?php echo $row['program_type']?>" class="btn btn-success me-3 px-5 ">Print</a>
                   </div>
                   <?php
   
               }
           }
        } 
        else
        {
           echo "<hr>";
           echo "<h3 style='color:red;margin-left:850px'>Application Receipt Not Found</h3>";
        } 
     }
     if($program =='Diploma')
     {
        $sql = "select * from pgregistration where Registration_no='$regno' && program_type='$program'";
        $data = mysqli_query($conn,$sql);
        $total = mysqli_num_rows($data);
        if($total)
        {
           $query = "select * from pgregistration where Registration_no='$regno' && program_type='$program'";
           $result = mysqli_query($conn, $query);
           if (!$result) 
           {
               die("connection failed" . mysqli_error($conn));
           } 
           else 
           {
               while ($row = mysqli_fetch_assoc($result)) 
               {
                 ?>
                 <div class="box">
   
                   <div class="panel panel-default">
                       
                       <div class="panel-body">
                          
                           <table id="zctb" class="table table-bordered  dataTable" cellspacing="0" width="100%" border="1">
   
   
                               <tbody>
   
                                   <tr>
                                       <td colspan="6" style="text-align:center; color:blue">
                                           <h3>Registraion Details Of Applicant</h3>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td colspan="6">
                                       <?php echo "<img  style='border:3px solid black;text-align:center;height:150px;width:150px;margin-left:1880px' src='" . $row['std_img'] . "' height='100px' width='100px'>" ?>
                                       </td>
                                   </tr>
                                   
                                   <tr>
                                       <th>Registration Number :</th>
                                       <td ><?php echo $row['registration_no'] ?></td>
   
                                       <td><b>Cuet Number:</b></td>
                                       <td><?php echo $row['cuet_no']; ?></td>
   
                                       <th>Apply Date :</th>
                                       <td><?php $wop = $row['apply_date']; print date("d-m-Y",strtotime($wop))?></td>
                                   </tr>
   
                                   <tr>                                  
                                       <td><b>Programme Type :</b></td>
                                       <td><?php echo $row['program_type'] ?></td>
   
                                       <td><b>Course :</b></td>
                                       <td colspan="3"><?php echo $row['course'] ?></td>
                       
                                   </tr>
   
                                   <tr>
                                       <td colspan="6" style="color:red">
                                           <h4>Personal Info</h4>
                                       </td>
                                   </tr>
   
                                   <tr>
                                       <td><b>Application Number :</b></td>
                                       <td><?php echo $row['registration_no'] ?></td>
   
                                       <td><b>Full Name :</b></td>
                                       <td><?php echo $row['sname'] ?></td>
   
                                       <td><b>Email :</b></td>
                                       <td><?php echo $row['email_id'] ?></td>
                                   </tr>
   
   
                                   <tr>
                                       <td><b>Father Name. :</b></td>
                                       <td><?php echo $row['father_name'] ?></td>
   
                                       <td><b>Mother Name :</b></td>
                                       <td><?php echo $row['mother_name'] ?></td>
   
                                       <td><b>Date Of Birth :</b></td>
                                       <td><?php echo $row['date_of_birth'] ?></td>
                                   </tr>
   
   
                                   <tr>
                                       <td><b>Gender:</b></td>
                                       <td><?php echo $row['gender'] ?></td>
   
                                       <td><b>Category :</b></td>
                                       <td><?php echo $row['category'] ?></td>
   
                                       <td><b>Religion :</b></td>
                                       <td><?php echo $row['religion'] ?></td>
                                   </tr>
   
                                   <tr>
                                       <td><b>Contact No. :</b></td>
                                       <td colspan="2"><?php echo $row['phone_no'] ?></td>
   
                                       <td><b>Docoment :</b></td>
                                       <td colspan="4"><?php echo "<a style='text-decoration:none;color:red'; href='" . $row['aadhar_pdf'] . "' target=''>view</a>" ?></td>
                                   </tr>
   
                                   <tr>
                                       <td colspan="6" style="color:blue">
                                           <h4>Addresses</h4>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td><b>Address according to the ID Proof :</b></td>
                                       <td colspan="5"><?php echo $row['address']?></td>
                                   </tr>
   
                                   <tr>
                                       <td><b>State :</b></td>
                                       <td colspan="5"><?php echo $row['state']?></td>
                                   </tr>
   
                                   <tr>
                                       <td><b>Distance from Home Town to University Campus in KM :</b></td>
                                       <td colspan="5"><?php echo $row['distance']?> km</td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
                   <a href="printapplication.php?cuetno=<?php echo $row['cuet_no']?> & program_type=<?php echo $row['program_type']?>" class="btn btn-success me-3 px-5 ">Download Application</a>
                   </div>
                   <?php
   
               }
           }
        } 
        else
        {
           echo "<hr>";
           echo "<h3 style='color:red;margin-left:850px'>Application Receipt Not Found</h3>";
        } 
     }


}
?>
<?php include('./includes/footer.php');?>
