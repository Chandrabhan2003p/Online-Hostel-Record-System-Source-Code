<?php include('./header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/contact_style.css">



</head>
<body>
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>For any problem send mail with proper details.If your payment has been deducted but no acknowledgement has been shown then again login and from report section check if there is any acknowledgement shown.If still you are unable to see any acknowledgement send us email with syntax: in the subject "ACCOUNT DEBITED BUT NO FEE ACKNOWLEDGEMENT RECEIPT" then in the mail mention following:transaction date: ,total amount: ,applicants' names: ,GGBH hostel you wanted to book: ,accomodation Type: ,no. of total accomodation: .booking From Date: ,Booking To Date: .</p>

        </div>
        <div class="container">
            <div class="contactInfo">

            <div class="box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.92983076685!2d81.75546487357704!3d22.805063805591246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3987bdecafcc1481%3A0x533307a060967692!2sGovind%20Guru%20Boys%20Hostel%2C%20Igntu%20Amarkantak!5e0!3m2!1sen!2sin!4v1733406027027!5m2!1sen!2sin" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            
                            <h3> Address</h3>
                            <p>Indira Gandhi National Tribal University,<br> Bijauri, Madhya Pradesh <br>484887</p>
                        </div>
                   
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                
                        <div class="text">
                            <h3>Phone</h3>
                            <p>+91 8305746836</p>
                        </div>
                    
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p><a style="text-decoration: none; font-weight:500;font-size:15px" href="mailto:ggbhostel@igntu.ac.in">ggbhostel@igntu.ac.in</a> </p>
                        
                    </div>
                </div>
                
            </div>
                <div class="contactForm">
                        <form action="#" method="POST">
                            <h2>Send Message</h2>

                            <div class="inputbox">

                                <input type="text" name="name" required="required">
                                <span>Full Name </span>
                            </div>

                            <div class="inputbox">

                                <input type="text   " name="email" required="required">
                                <span>Email </span>
                            </div>

                            <div class="inputbox">

                                <textarea name="message" required="required" ></textarea>
                                <span>Type your Message.. </span>
                            </div>

                            <div class="inputbox">
                                <input type="submit" name="submit" value="Send">
                        
                            </div>
                        </form>
                   </div>
        </div>
    </section>
    
</body>
</html>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include('./vendor/autoload.php');

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

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
        $mail->setFrom('shivamthakur13092003@gmail.com','Notification');
        $mail->addAddress('cparachhi@gmail.com');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New Form Submission From Your Website'; 
        

        $mail->Body    = "Hello,<br> A new form has been submitted on your website. Details below.<br>Sender  Name  - $name <br> Sender Email - $email <br> Message - $message";

    
        $mail->send();
        echo "<script>alert('Message has been sent');</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent');</script>";
    
    }

}






//Load Composer's autoloader


?>


<?php include('./footer.php');?>