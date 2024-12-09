<?php
include('./connect.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
include('./vendor/autoload.php');


function  send_password_reset($get_name,$get_email,$token)
{
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP(); 
        $mail->SMTPAuth   = true;     
        
        //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send throug                         //Enable SMTP authentication
        $mail->Username   ='shivamthakur13092003@gmail.com';                     //SMTP username
        $mail->Password   = 'hpbn unzk ldtm vzit';
        
        //SMTP password
        $mail->SMTPSecure ='tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('shivamthakur13092003@gmail.com',$get_name);
        $mail->addAddress($get_email);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Reset Password Notification'; 
        
        $email_template="
        <h2>Hello</h2>
        <h3> You are receiving this email  because we received a password reset request for your account .</h3>
        <br/><br/>

        <a href='http://localhost:8080/universityhostel/includes/password-change.php?token=$token&email=$get_email'>Click Me </a>";

        $mail->Body    = $email_template;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}

if(isset($_POST['submit']))
{
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $token = md5(rand());
    
    $check_email = "SELECT * FROM  userdetails WHERE email='$email' LIMIT 1";

    $check_email_run = mysqli_query($conn,$check_email);


    if(mysqli_num_rows($check_email_run) > 0)
    {
      $row = mysqli_fetch_assoc($check_email_run);

      $get_name = $row['sname'];
      $get_email = $row['email'];
   
      

      $update_token = "UPDATE  userdetails SET verify_token ='$token' WHERE email='$get_email' LIMIT 1";
      $update_token_run = mysqli_query($conn,$update_token);

      if($update_token_run)
      {
         send_password_reset($get_name,$get_email,$token);

         echo "<script>alert('We e-mailed you a password reset link');</script>";
         ?>  
        <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/universityhostel/includes/forgetpass1.php" />
        <?php
      }
      else
      {
        echo "<script>alert('Given Email id does not exists');</script>";
        ?>  
       <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/universityhostel/includes/forgetpass1.php" />
       <?php
      }

    }
    else
    {
        echo "<script>alert('Given Email id does not exists');</script>";
         ?>  
        <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/universityhostel/includes/forgetpass1.php" />
        <?php
    }

}

if(isset($_POST['update']))
{
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = mysqli_real_escape_string($conn,$_POST['password']);
    $cpass = mysqli_real_escape_string($conn,$_POST['cpass']);
    $token = mysqli_real_escape_string($conn,$_POST['password_token']);

    if(!empty($token))
    {
        if(!empty($email) && !empty($pass) && !empty($cpass))
        {
          //checking token valid or not 
          $check_token = "SELECT * From userdetails WHERE verify_token='$token' LIMIT 1 ";
          $check_token_run = mysqli_query($conn,$check_token);

          if(mysqli_num_rows($check_token_run)>0)
          {
             if($pass == $cpass)
             {
               $update_pass = "UPDATE userdetails SET password='$pass' WHERE verify_token='$token' LIMIT 1  ";
               $update_pass_run = mysqli_query($conn,$update_pass);

               if($update_pass_run)
               {
                echo "<script>alert('New Password Successfully Updated ');</script>"; 
                ?>
                 <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/universityhostel/includes/uglogin.php" />
                 <?php
               }
               else
               {
                echo "<script>alert('Did Not Update Password something went is wrong .!');</script>"; 
                ?>
                <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/universityhostel/includes/password-change.php?token=<?php echo $token?> &email=<?php echo$email?>" />
                
                <?php
                
               }
             }
             else
             {
           
                echo "<script>alert('Password and Confirm Password does not match');</script>"; 
                ?>
                <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/universityhostel/includes/password-change.php?token=<?php echo $token?> &email=<?php echo$email?>" />
                <?php

           
             }
          }
          else
          {
            echo "<script>alert('Invalid Token');</script>"; 
            ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/universityhostel/includes/password-change.php?token=<?php echo $token?> &email=<?php echo$email?>" />
            <?php
            
          }
        }
        else
        {
            echo "<script>alert('All Filed are Mandetory');</script>"; 
            ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/universityhostel/includes/password-change.php?token=<?php echo $token?> &email=<?php echo$email?>" />
            <?php

        }
    }
    else
    {
        echo "<script>alert('No Token Available');</script>"; 
        
        
        ?>  
        <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/universityhostel/includes/forgetpass1.php" />
        <?php 
    }

}
 
 
?>