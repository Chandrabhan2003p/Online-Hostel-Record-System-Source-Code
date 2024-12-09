<?php include('./studentheader.php');?>
<?php session_start(); ?>
<style>
    .main .content
    {
 
        height:200vh;
        
    }
</style>
<div class="content">
<?php
include('./connect.php');
if(isset($_GET['id']))
{
    $email =$_GET['id'];
    
    $query="select * from studentregistration where email_id='$email'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    $result=mysqli_fetch_assoc($data);

    $query2="select * from userdetails where email='$email'";
    $data2=mysqli_query($conn,$query2);
    $total2=mysqli_num_rows($data2);
    $result2=mysqli_fetch_assoc($data2);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile Information</title>
     <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
         }
        body{
            background-color:white;
                } 
        .container1
        {
            max-width: 1500px;
            width: 100%;
            background-color:white;
        
            margin: 40px;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.5);
            position: relative;
            bottom: 100px;
        

                }
        .container1 .title
        {
            font-size: 25px;
            font-weight: 600;
            margin-bottom: 25px;
            color: blue;
            text-transform: uppercase;
            text-align: center;



        
        }
        .container1 .form
        {
        width: 100%;


        }
        .container1 .form .input-field
        {
            margin-bottom: 30px;
            display: flex;
            align-items: center;
        }
        .container1 .form .input-field label
        {
        
            width: 300px;
            margin-right: 10px;
            font-size: 20px;
        }
        .container1 .form .input-field input
        {
        width: 100%;
        outline:none;
        border:1px solid green;
        font-size: 15px;
        padding: 8px 10px;
        border-radius: 3px;
        transition: all 0.5s ease;

        }
        .container1 .form .input-field textarea
        {
            width: 100%;
            outline:none;
            border:1px solid green;
            font-size: 15px;
            padding: 8px 10px;
            border-radius: 3px;
            transition: all 0.5s ease;
            resize: none;
            height: 100px;
        }
        .container1 .form .input-field .selectbox
        {
        width: 100%;
        outline:none;
        border:1px solid green;
        font-size: 15px;
        padding: 8px 10px;
        border-radius: 3px;
        transition: all 0.5s ease;
        }
        .container1 .form .input-field .selectbox:focus
        {
            border:1px solid orange;
        }
        .container1 .form .input-field textarea:focus
        {
            border:1px solid orange;
        }
        .container1 .form .input-field input:focus
        {
            border:1px solid orange;
        }
        .container1 .form .input-field p
        {
            font-size: 20px;
            color:#757575;
            margin-top: 5px;
        }
        .container1 .form .input-field .check
        {
            width: 20px;
            height: 20px;
            position: relative;
            display: block;
            cursor: pointer;
        }
        .container1 .form .input-field .btn
        {
            width: 100%;
            padding:8px 10px;
            font-size: 18px;
            border:0;
            background-color:#0a63d8;
            color:white;
            cursor:pointer;
            border-radius: 3px;
            outline:none;
        }
        .container1 .form .input-field:last-child
        {
            margin-bottom: 0;;
        }
        .container1 .form .input-field .btn:hover
        {
            background-color:black;
        }
        @media(max-width:420px)
        {
            .container1 .form .input-field
        {
        flex-direction: column;
        align-items: flex-start;
        }
        .container1 .form .input-field label
        {
        margin-bottom: 5px;
        }
        .container1 .form .input-field.terms
        {
            flex-direction: row;
        }
        }

        .container1 .form .input-field .upload
        {
        
            border:none
        }
        .para
        {
            color:red;
            font-size: 25px;
            padding-bottom:50px;
        }
        .upload
        {
            height: 100px;
        }
        .head
        {
            position: relative;
            bottom: 90px;
        
        }

    </style>     
</head>
<body>
    <div class="head">
    <h1>UPDATE PROFILE DETAILS</h1>
    <hr>
    </div>

    <div class="container1">
        
        <div class="title">
            UPDATE STUDENT PROFILE
        </div>
        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="form">
           
            
            <div class="para">
                 Personal info
            </div>

            <div class="input-field">
            <label>Registration no.</label>
            <input type="text"  name="regno" value="<?php echo $result['registration_no'];?>" readonly="true" required>
            </div>

            <div class="input-field">
            <label>Student Name</label>
            <input type="text"  name="sname" value="<?php echo $result['name'];?>"  required>   
            </div>
            <div class="input-field">
            <label>Father Name</label>
            <input type="text"  name="fname" value="<?php echo $result['fname'];?>"  required>   
            </div>

            <div class="input-field">
            <label>Date Of Birth</label>
            <input type="date"  name="dob" value="<?php echo $result['dob'];?>" required>   
            </div>
           
            <div class="input-field">
            <label>Email ID</label>
            <input type="email"  name="email" value="<?php echo $result['email_id'];?>" required>   
            </div>

            <div class="input-field">
            <label>Mobile No.</label>
            <input type="number" name="phone" value="<?php echo $result['contact_no'];?>" required>  
            </div>

            <div class="para">
            Address
            </div>
            <div class="input-field">
            <label>Address according to the ID Proof</label>
            <textarea class ="textarea" name="address" required> <?php echo $result['address'];?></textarea>   
            </div>
            
            <div class="input-field">
            <label>City :</label>
            <input type="text" name="city" value="<?php echo $result['city'];?> "  required>  
            </div>

            <div class="input-field">
            <label>State</label>
           <select class="selectbox" name="state" value="<?php echo $result['state'];?> "  required>
            <option value="">Select State</option>
            <option value="Andhra Pradesh"
            <?php
                 if($result['state']=='Andhra Pradesh')
                 {
                    echo "selected";
                 }
            ?>
            >Andhra Pradesh</option>
            <option value="Arunachal Pradesh"
            <?php
                 if($result['state']=='Arunachal Pradesh')
                 {
                    echo "selected";
                 }
            ?>
            >Arunachal Pradesh</option>
            <option value="Assam"
            <?php
                 if($result['state']=='Assam')
                 {
                    echo "selected";
                 }
            ?>
            >Assam</option>
            <option value="Bihar"
            <?php
                 if($result['state']=='Bihar')
                 {
                    echo "selected";
                 }
            ?>
            >Bihar</option>
            <option value="Chhattisgarh"
            <?php
                 if($result['state']=='Chhattisgarh')
                 {
                    echo "selected";
                 }
            ?>
            >Chhattisgarh</option>
            <option value="Goa"
            <?php
                 if($result['state']=='Goa')
                 {
                    echo "selected";
                 }
            ?>
            >Goa</option>
            <option value="Gujrat"
            <?php
                 if($result['state']=='Gujrat')
                 {
                    echo "selected";
                 }
            ?>
            >Gujrat</option>
            <option value="Hariyana"
            <?php
                 if($result['state']=='Hariyana')
                 {
                    echo "selected";
                 }
            ?>
            >Hariyana</option>
            <option value="Himachal Pradesh
            <?php
                 if($result['state']=='Himachal Pradesh')
                 {
                    echo "selected";
                 }
            ?>
            ">Himachal Pradesh</option>
            <option value="Jharkhand"
            <?php
                 if($result['state']=='Jharkhand')
                 {
                    echo "selected";
                 }
            ?>
            >Jharkhand</option>
            <option value="Karnataka"
            <?php
                 if($result['state']=='Karnataka')
                 {
                    echo "selected";
                 }
            ?>
            >Karnataka</option>
            <option value="Kerala"
            <?php
                 if($result['state']=='Kerala')
                 {
                    echo "selected";
                 }
            ?>
            >Kerala</option>
            <option value="Madhya Pradesh"
            <?php
                 if($result['state']=='Madhya Pradesh')
                 {
                    echo "selected";
                 }
            ?>
            >Madhya pradesh</option>
            <option value="Maharashtra"
            <?php
                 if($result['state']=='Maharashtra')
                 {
                    echo "selected";
                 }
            ?>
            >Maharashtra</option>
            <option value="Manipur"
            <?php
                 if($result['state']=='Manipur')
                 {
                    echo "selected";
                 }
            ?>
            >Manipur</option>
            <option value="Meghalaya"
            <?php
                 if($result['state']=='Megalaya')
                 {
                    echo "selected";
                 }
            ?>
            >Meghalaya</option>
            <option value="Mizoram"
            <?php
                 if($result['state']=='Mizoram')
                 {
                    echo "selected";
                 }
            ?>
            >Mizoram</option>
            <option value="Nagaland"
            <?php
                 if($result['state']=='Nagaland')
                 {
                    echo "selected";
                 }
            ?>
            >Nagaland</option>
            <option value="Odisha"
            <?php
                 if($result['state']=='Odisha')
                 {
                    echo "selected";
                 }
            ?>
            >Odisha</option>
            <option value="Punjab"
            <?php
                 if($result['state']=='Punjab')
                 {
                    echo "selected";
                 }
            ?>
            >Punjab</option>
            <option value="Rajasthan"
            <?php
                 if($result['state']=='Rajasthan')
                 {
                    echo "selected";
                 }
            ?>
            >Rajasthan</option>
            <option value="Sikkim"
            <?php
                 if($result['state']=='Sikkim')
                 {
                    echo "selected";
                 }
            ?>
            >Sikkim</option>
            <option value="Tamil Nadu"
            <?php
                 if($result['state']=='Tamil Nadu')
                 {
                    echo "selected";
                 }
            ?>
            >Tamil Nadu</option>
            <option value="Telangana"
            <?php
                 if($result['state']=='Telangana')
                 {
                    echo "selected";
                 }
            ?>
            >Telangana</option>
            <option value="Uttar Pradesh"
            <?php
                 if($result['state']=='Uttar Pradesh')
                 {
                    echo "selected";
                 }
            ?>
            >Uttar Pradesh</option>
            <option value="Uttarakhand"
            <?php
                 if($result['state']=='Uttarankhand')
                 {
                    echo "selected";
                 }
            ?>
            >Uttarakhand</option>
            <option value="West Bengal"
            <?php
                 if($result['state']=='West Bengal')
                 {
                    echo "selected";
                 }
            ?>
            >Wesh Bengal</option>

           </select>   
            </div>

            <div class="input-field">
            <label>Pincode :</label>
            <input type="number" name="pincode" value="<?php echo $result['pincode'];?>" required>  
            </div>

            <div class="input-field">
            <label>distance :</label>
            <input type="number" name="distance" value="<?php echo $result['distance'];?>"  required>  
            </div>

            <div class="input-field">
            <label class="check">
            <input type="checkbox" required >
            </label>
            <p>Please check  the details before Updation</p>  
            </div>

            <div class="input-field">
           
            <button type="submit" class ="btn" name="submit">Update</button>
            </div>
        </div>
    </form>         
</div>
</body>
</html>
<?php
include('./connect.php');
if(isset($_POST['submit']))
{
    $regno =$_POST['regno'];
    $sname =$_POST['sname'];
    $fname =$_POST['fname'];
    $dob =$_POST['dob'];
    $email =$_POST['email'];
    $mob =$_POST['phone'];  
    $address =$_POST['address'];
    $city =$_POST['city'];
    $state =$_POST['state'];
    $pincode =$_POST['pincode'];
    $distance =$_POST['distance'];

    if($regno != "" && $sname != "" && $fname != "" && $dob != "" && $email != "" && $mob != "" && $address != "" && $city != "" && $state != "" && $pincode != "" && $distance != "")
    {
        // student registration
        $query1="UPDATE studentregistration set name='$sname',fname='$fname',dob='$dob',contact_no='$mob',email_id='$email',address='$address',city='$city',state='$state',pincode='$pincode',distance='$distance' where registration_no='$regno'";
    
        $result=mysqli_query($conn,$query1);

        // update user details
        $query2="UPDATE userdetails  set sname='$sname',email='$email' where id='$regno'";

        $result1=mysqli_query($conn,$query2);   
    
        if($result)
        {
            echo "<script>alert('Profile Updated Successfully');</script>";

            ?>
           
            <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/universityhostel/includes/studentdashboard.php" />
      <?php
        }
        else
        {
            echo "<script>alert('Profile Not Update');</script>";
        }
    }
    else
    {
        echo "<script>alert('Please fill the form first');</script>";
    } 
}
?>
</div>
<?php include('./studentfooter.php');?>



    