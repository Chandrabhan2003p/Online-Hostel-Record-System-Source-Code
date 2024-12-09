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
        <h1 class="hading">Reset  Password</h1>
        <form action="password-reset.php" method="post" autocomplete="off">

            <div class ="form">
            <input type="text" name="email" class="textfield" placeholder="Enter Email Address ">

            <!-- <input type="password" name="password" class="textfield" placeholder="Create New Password "> -->

            <input type="submit" value="Send Password Reset Link" name="submit" class="bttn">

            <div class="forgetpass"><a href="uglogin.php" class="link" >Go To Login Page ?</a></div>

           
        </form>
    </div> 

</body>
</html>

<?php include('./footer.php'); ?>
