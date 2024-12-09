<?php include('./header.php');?>
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body
        {

            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        } 
           .image
           {
            width: 80px;
            position: relative;
            left: 200px;
           }
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
        @media (max-width:470px) 
        {
            .center 
            {
                width: 88%;
            }
        }
    </style>
</head>
<body>
    <div class="center">

        <h1 class="hading">Download Hostel Fee Receipt</h1>
        <form action="../report-generate/viewreceipt.php" method="post" autocomplete="off">

            <div class ="form">
            <input type="number" name="enroll" class="textfield" placeholder="Enter Registratioin Number">


            <select name="year" class="textfield"  required="required">
                <option value="">Select Year</option>
                <option value="1st Year">1st Year</option>
                <option value="2nd Year">2nd Year</option>
                <option value="3rd Year">3rd Year</option>
                <option value="4th Year">4th Year</option>
                <option value="5th Year">5th Year</option>
            </select>
            <input type="submit" value="Download" name="submit" class="bttn">
            </div>
        </form>
    </div> 
</body>
</html>

<?php include('./footer.php');?>