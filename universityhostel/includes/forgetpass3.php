<?php include('./header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/crud/admin/css/login-style.css"> -->
    <title>Forget Password</title>
    <style>
        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
            padding: 20px;
        }

        .center .hading {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid silver;
            background: white;
            color: #0a63d8;
            

        }

        .form {
            padding-bottom: 15px;
            margin: 20px 20px;
            text-align: center;

        }

        .textfield {
            width: 100%;
            height: 50px;
            font-size: 18px;
            border: 2px solid green;
            outline: none;
            border-radius: 5px;
            box-sizing: border-box;
            padding-left: 10px;
            margin: 7px 0;
        }

        .bttn {
            width: 100%;
            height: 50px;
            background-color: #0a63d8;
            border-radius: 5px;
            outline: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
            margin: 10px 0;
            border: 0;
        }

        .bttn:hover {
            background-color: black;
            color: white;
        }

        .forgetpass {
            font-size: 16px;
            padding: 4px 0;
            margin: 3px;
        }

        .link {
            text-decoration: none;
            color: #0a63d8;
        }

        @media (max-width:470px) {
            .center {
                width: 88%;
            }
        }
    </style>
</head>
<body>
    <div class="center">
        <h1 class="hading">Forget  Password</h1>
        <form action="#" method="post" autocomplete="off">

            <div class ="form">
            <input type="text" name="username" class="textfield" placeholder="Enter Username ">

            <input type="password" name="password" class="textfield" placeholder="Create New Password ">

            <input type="submit" value="Change Password" name="submit" class="bttn">

            <div class="forgetpass"><a href="adminlogin.php" class="link" >Go To Login Page ?</a></div>
           
        </form>
    </div> 


</body>
</html>
<?php
include('./connect.php');
if(isset($_POST['submit']))
{
 $user=$_POST['username']; 
 $pass=$_POST['password'];

 if($user != "" && $pass !="")
 {
    $query="Select * from adminaccess where username='$user'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data); 
   if($total==1)
   {
       $change="update  adminaccess set password='$pass' where username='$user'";
       $result=mysqli_query($conn,$change);

       if($result)
       {
         echo "<script>alert('Your Login Password changed successfully ');</script>";
         ?>
           
              <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/universityhostel/includes/adminlogin.php" />
        <?php
       }   
   }
   else
   {
       echo "<script>alert('Given Email id does not exists');</script>";
   }
 }
 else
 {
    echo "<script>alert('Please first fill your  Email and new Password');</script>";
 }
}
?>
<?php include('./footer.php'); ?>