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
error_reporting(0);
if(isset($_POST['submit']))
{

    
    $enroll =$_POST['enroll'];
    $year = $_POST['year'];

    

    $sql ="select * from paymentdetails where enrollment='$enroll' && pay_year='$year'";
    $data = mysqli_query($conn,$sql);
    $total = mysqli_num_rows($data);

    if($total)
    {
        $query ="select * from paymentdetails where enrollment='$enroll' && pay_year='$year'";
        $result = mysqli_query($conn,$query);
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
                                            <h3>Online Hostel Fee Receipt</h3>
                                        </td>
                                    </tr>
                                    <tr>

                                    </tr>
                                    
                                   
                                    <tr>
                                        <td colspan="6" style="color:red">
                                            <h4>Personal Information Of Applicant</h4>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><b>Enrollment Number :</b></td>
                                        <td><?php echo $row['enrollment'] ?></td>

                                        <td><b>Full Name :</b></td>
                                        <td><?php echo $row['name'] ?></td>

                                        <td><b>Email :</b></td>
                                        <td><?php echo $row['email'] ?></td>
                                    </tr>


                                    <tr>
                                        <td><b>Father Name. :</b></td>
                                        <td><?php echo $row['fname'] ?></td>

                                        <td><b>Category :</b></td>
                                        <td><?php echo $row['category'] ?></td>


                                        <td><b>Date Of Birth :</b></td>
                                        <td><?php $wop = $row['dob']; print date("d-m-Y",strtotime($wop))?></td>
                                    </tr>


                                    <tr>
                                        <td><b>Gender:</b></td>
                                        <td><?php echo $row['gender'] ?></td>

                                        <td><b>Course Type:</b></td>
                                        <td><?php echo $row['course_type'] ?></td>


                                        <td><b>Course  :</b></td>
                                        <td><?php echo $row['course_name'] ?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Semester :</b></td>
                                        <td ><?php echo $row['semester'] ?></td>

                                        <td><b>Student Type :</b></td>
                                        <td><?php echo $row['student_type'] ?></td>


                                        <td><b>Physically Disabled Person ::</b></td>
                                        <td><?php echo $row['physical_disable'] ?></td>

                                    </tr>

                                    <tr>
                                    <td><b>Mobile Number  :</b></td>
                                    <td  colspan="6"><?php echo $row['mobile'] ?></td>

                                    </tr>

                                    <tr>
                                        <td colspan="6" style="color:blue">
                                            <h4>Addresses</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Address :</b></td>
                                        <td colspan="5"><?php echo $row['address']?></td>
                                    </tr>
                                    <tr>
                                        <td><b>City :</b></td>
                                        <td colspan="5"><?php echo $row['city']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>State :</b></td>
                                        <td colspan="5"><?php echo $row['state']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Zip-Code :</b></td>
                                        <td colspan="5"><?php echo $row['zipcode']?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" style="color:green">
                                            <h4>Fee Acknowlegement Receipt</h4>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><b>Enrollment :</b></td>
                                        <td colspan="5"><?php echo $row['enrollment']?></td>
                                    </tr>


                                    <tr>
                                        <td><b>Pay Year's  :</b></td>
                                        <td colspan="5"><?php echo $row['pay_year']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Fee Paid Status :</b></td>
                                        <td colspan="5"><?php echo $row['payment_status']?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Transaction Id :</b></td>
                                        <td colspan="5"><?php echo $row['transaction_id']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Fee Amount :</b></td>
                                        <td colspan="5"><?php echo $row['amount']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Date of Fee Paid :</b></td>
                                        <td colspan="5"><?php $wop = $row['pay_date']; print date("d-m-Y",strtotime($wop))?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="printfeereceipt.php?enroll=<?php echo $row['enrollment']?> & year=<?php echo $row['pay_year']?>" class="btn btn-primary me-3 px-5 ">Generate Fee Receipt</a>
                    </div>
                    <?php

                }
            }
        }
        else
        {
           echo "<hr>";
           echo "<h3 style='color:red;margin-left:850px'>Payment Fee Receipt Not Found</h3>";
        } 
    }
    else
    {
       echo "<hr>";
       echo "<h3 style='color:red;margin-left:850px'>Payment Fee Receipt Not Found</h3>";
    } 
        
    


?>


<?php include('./footer.php');?>

