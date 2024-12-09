<?php include('./studentheader.php');?>
<?php session_start();?>
<style>
        .main .content
    {
        height: 200vh;     
    }
</style>
<div class="content">
<h1>MY ROOM</h1>
<hr>
<?php
   
include('./connect.php');
if (isset($_GET['id'])) 
{
	$email = $_GET['id'];

	$query = "select * from studentregistration where email_id='$email'";
	$result = mysqli_query($conn, $query);
	$total = mysqli_num_rows($result);
    if (!$result) 
	{
		die("connection failed" . mysqli_error($conn));
	} 
    else 
    {
	     while ($row = mysqli_fetch_assoc($result)) 
	     {

			$roomno =$row['room_no'];

			$regno =$row['registration_no'];

			$sql="select * from rooms where room_no=$roomno";
			$data=mysqli_query($conn,$sql);

			$sql1="select * from documents where regno=$regno";
			$data1=mysqli_query($conn,$sql1);
		
		    ?>
		   <div class="col-md-12">

		     <h2 class="page-title" style="margin-top:3%">Room Details</h2>

			    <div class="panel panel-default">

				   

				     <div class="panel-body">

				     <table id="zctb" class="table table-bordered  dataTable" cellspacing="0" width="100%" border="1">
																		
		            <tbody>

						<tr>
						<td colspan="6" style="text-align:center; color:blue"><h3>Room Related Info</h3></td>
						<tr>

							<th>Registration Number :</th>
							<td><?php echo $row['registration_no'] ?></td>
							<th>Stay From :</th>
							<td colspan="3"><?php echo $row['stay_from'] ?></td>
						</tr>

						<tr>
							<td><b>Room no :</b></td>
							<td><?php echo $row['room_no'] ?></td>

					      <?php 	
						  while ($r=mysqli_fetch_assoc($data))
							{
								
							?>
							

							<td><b>Seater :</b></td>
							<td><?php echo $r['seater'] ?></td>
							<?php
							}
							?>
			
							
							<td><b>Duration In Year :</b></td>
							<td colspan="3"><?php echo $row['duration'] ?> </td>
						</tr>


						<tr>
							<td colspan="6" style="color:red"><h4>Personal Info</h4></td>
							</tr>
							</tr>


						<tr>
							<td><b>Reg No. :</b></td>
							<td><?php echo $row['registration_no'] ?></td>
							<td><b>Full Name :</b></td>
							<td><?php echo $row['name'] ?></td>
							<td><b>Adhaar Number :</b></td>
							<td><?php echo $row['aadhar_no'] ?></td>
						</tr>

						<tr>
							<td><b>Father Name  :</b></td>
							<td><?php echo $row['fname'] ?></td>

							<td><b>Mother Name :</b></td>
							<td><?php echo $row['mname'] ?></td>

							<td><b>Category :</b></td>
							<td><?php echo $row['category'] ?></td>
						</tr>
						<tr>
							<td><b>Date Of Birth :</b></td>
							<td><?php echo $row['dob'] ?></td>

							<td><b>Religion :</b></td>
							<td><?php echo $row['religion'] ?></td>

							<td><b>Blood Group :</b></td>
							<td><?php echo $row['blood_group'] ?></td>
						</tr>

						<tr>
							<td><b>Mobile Number :</b></td>
							<td><?php echo $row['contact_no'] ?></td>

							<td><b>Email Id :</b></td>
							<td><?php echo $row['email_id'] ?></td>

							<td><b> Physical Disable Personal :</b></td>
							<td><?php echo $row['physical_disable'] ?></td>
						</tr>


						<tr>
							<td><b>Emergency Contact No. :</b></td>
							<td><?php echo $row['emergency_no'] ?></td>

							<td><b>Guardian Name :</b></td>
							<td><?php echo $row['guardian_name'] ?></td>

							<td><b>Guardian Relation :</b></td>
							<td><?php echo $row['guardian_relation'] ?></td>
						</tr>

						<tr>
							<td><b>Guardian Contact No. :</b></td>
							<td colspan="6"><?php echo $row['guardian_contact_no'] ?></td>
							</tr>

							

							<tr>
							<td colspan="6" style="color:blue"><h4>Addresses</h4></td>
						</tr>


						<tr>
							<td><b>Address according to the ID Proof :</b></td>
							<td colspan="2"><?php echo $row['address'] ?></td>

							<td><b>Distance from Home Town to University Campus in KM :</b></td>
							<td colspan="2"><?php echo $row['distance']?> km</td>
						</tr>

						<tr>
							<td><b>City :</b></td>
							<td ><?php echo $row['city'] ?></td>

							<td><b>State :</b></td>
							<td><?php echo $row['state'] ?></td>

							<td><b>Pin Code :</b></td>
							<td><?php echo $row['pincode'] ?></td>
						</tr>

						
						
						<?php
							}
						?>

	                </tbody>
                </table>
            </div>
          </div>
          <a href="studentdashboard.php" class="btn btn-danger">BACK</a>
            <?php		
}
}

else 
{
echo "<h3 style='color:red';>Record Not Found</h3>";
}
?> 
</div>

</div>
<?php include('./studentfooter.php');?>

