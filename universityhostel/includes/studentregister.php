<?php include('./adminheader.php');?>
<style>
    .main .content
    {
 
        height:150vh;     
    
    }
</style>
<div class="content">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ug Registration</title>

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
                bottom:350px;

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
                color:green;
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
                bottom: 340px;
            }

    </style>
     
</head>
<body>
    <div class="head">
    <h1>Registration</h1>
    <hr>
    </div>

    <div class="container1">
        
        <div class="title">
            fill all information
        </div>
        <div class="para">
        Room Related info
        </div>
        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="form">
           
            <div class="input-field">
                <label>Rooms No</label>
                <input type="number"  name="room_no" required>
            </div>


            <div class="input-field">
            <label>Stay from</label>
            <input type="date"   name="stay_from"  required>   
            </div>

            <div class="input-field">
            <label>Duration In Year's</label>
            <select class="selectbox" name="duration">
            <option value="">select duration in year's</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
     
            </select>    
            </div>

            <div class="para">
                 Personal info
            </div>

            <div class="input-field">
            <label>Registration no.</label>
            <input type="text"  name="regno"  required>
            </div>

            <div class="input-field">
            <label>Student Name</label>
            <input type="text"  name="sname"  required>   
            </div>
            <div class="input-field">
            <label>Father Name</label>
            <input type="text"  name="fname"  required>   
            </div>
            <div class="input-field">
                <label for="">Select Course Type</label>
                <select class="selectbox" name="select1" id="select1"   onchange="populate(this.id,'select2')" required> 
                <option value="">Select Program</option>
                <option value="DIPLOMA">Diploma</option>
                <option value="UG">UG</option>
                <option value="PG">PG</option>
                </select>
            </div>
            
            <div class="input-field">
            <label for="">Select Course</label>
            <select class="selectbox" name="select2" id="select2" required> 
            </select>
            </div>

            <div class="input-field">
            <label>Semester</label>
             <select class="selectbox" name="semester"  required>
            <option value="">Select Semester</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>

            </select>   
            </div>

            <div class="input-field">
            <label>Date Of Birth</label>
            <input type="date"  name="dob"  required>   
            </div>



            <div class="input-field">
            <label>Category</label>
             <select class="selectbox" name="category"  required>
            <option value="">Select Category</option>
            <option value="General">General</option>
            <option value="OBC">OBC</option>
            <option value="SC">SC</option>
            <option value="ST">ST</option>
            <option value="EWS">EWS</option>
            <option value="TRANSGENDER">TRANSGENDER</option>
            </select>   
            </div>

            
            <div class="input-field">
            <label>Religion :</label>
             <select class="selectbox" name="religion"  required>
            <option value="">Select religion</option>
            <option value="Hindu">Hindu</option>
            <option value="Muslim">Muslim</option>
            <option value="Buddhism">Buddhism</option>
            <option value="Jain">Jain</option>
            <option value="Sikkh">Sikkh</option>
            <option value="Christian">Christian</option>
            <option value="Other">Other</option>
            </select>   
            </div>

            <div class="input-field">
            <label>Blood Group :</label>
             <select class="selectbox" name="blood"  required>
            <option value="">Select Blood Group</option>
            <option value="O+">O+</option>
            <option value="B+">B+</option>
            <option value="A+">A+</option>
            <option value="AB+">AB+</option>
            <option value="O-">O-</option>
            <option value="B-">B-</option>
            <option value="A-">A-</option>
            <option value="AB-">AB-</option>
            </select>   
            </div>
           

            <div class="input-field">
            <label>Physical Disable Person?:</label>
            <select class="selectbox" name="physical_dis"  required> 
            <option value="">Select </option>
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            </select>
            </div>


            <div class="input-field">
            <label>Email ID</label>
            <input type="email"  name="email"  required>   
            </div>

            <div class="input-field">
            <label>Create login Password</label>
            <input type="text"  name="pass"  required>   
            </div>

            <div class="input-field">
            <label>Mobile No.</label>
            <input type="number" name="phone"  required>  
            </div>

            
            <div class="input-field">
            <label>Aadhar no. :</label>
            <input type="number" name="aadhar"  required>  
            </div>

            <div class="input-field">
            <label>Emergency Contact No. :</label>
            <input type="number" name="emgno"  required>  
            </div>



            <div class="input-field">
            <label>Guardian Name :</label>
            <input type="text" name="guardian_name"  required>  
            </div>

            <div class="input-field">
            <label>Guardian Relation:</label>
            <select class="selectbox" name="guardian_rel"  required> 
            <option value="">Select Relation</option> 
                <option value="Father">Father</option> 
                <option value="Mother">Mother</option> 
                <option value="Brother">Brother</option> 
                <option value="Sister">Sister</option> 
                <option value="Stepmother">Stepmother</option> 
                <option value="Stepfather">Stepfather</option> 
                <option value="Grandfather">Grandfather</option> 
                <option value="Aunt">Aunt</option> 
                <option value="Uncle">Uncle</option> 
                <option value="Sibling">Sibling</option> 
                <option value="Legal Guardian">Legal Guardian</option> 
                <option value="Other">Other</option> 
            </select>
            </div>

            <div class="input-field">
            <label>Guardian Contact No. :</label>
            <input type="number" name="guardian_no"  required>  
            </div>

            <div class="input-field">
            <label>Upload Image :</label>
                <div class="col-3">
                <input  type="file" name="uploadfile">  
                </div>
            </div>

            <div class="input-field">
            <label>Upload Semster Fee Reciept :</label>
                <div class="col-3">
                <input  type="file" name="uploadsemfee">  
                </div>
            </div>

            <div class="input-field">
            <label>Upload Cast Certificate :</label>
                <div class="col-3">
                <input  type="file" name="uploadcast">  
                </div>
            </div>

            <div class="input-field">
            <label>Upload Domicile Certificate</label>
                <div class="col-3">
                <input  type="file" name="uploaddomicile">  
                </div>
            </div>

            <div class="input-field">
            <label>Upload Hostel Fee Reciept</label>
                <div class="col-3">
                <input  type="file" name="uploadhostelfee">  
                </div>
            </div>

            <div class="input-field">
            <label>Upload Aadhar</label>
                <div class="col-3">
                <input  type="file" name="uploadaadhar">  
                </div>
            </div>



            <div class="para">
            Permanent Address
            </div>
            <div class="input-field">
            <label>Address according to the ID Proof</label>
            <textarea class ="textarea" name="address"  required></textarea>   
            </div>

            
            <div class="input-field">
            <label>City :</label>
            <input type="text" name="city"  required>  
            </div>

            <div class="input-field">
            <label>State</label>
           <select class="selectbox" name="state"  required>
            <option value="">Select State</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Goa">Goa</option>
            <option value="Gujrat">Gujrat</option>
            <option value="Hariyana">Hariyana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">Wesh Bengal</option>
            </select>   
            </div>

            <div class="input-field">
            <label>Pincode :</label>
            <input type="number" name="pincode"  required>  
            </div>

            <div class="input-field">
            <label>distance :</label>
            <input type="number" name="distance"  required>  
            </div>

            <div class="input-field">
            <label class="check">
            <input type="checkbox" required >
            </label>
            <p>Please check  the details before submission</p>  
            </div>

            <div class="input-field">
           
            <button type="submit" class ="btn" name="submit">Register</button>
            </div>
        
        </div>
    </form>         
    </div>

    <script>
        function populate(s1,s2)
        {
            var s1=document.getElementById(s1);
            var s2=document.getElementById(s2);

            s2.innerHTML = "";

            if(s1.value == "UG")
        {
            var optionArray =[
                '|select program name',
                'Ancient Indian History, Culture and Archaeology-Disciplinary Major Subjects (UG)|Ancient Indian History, Culture and Archaeology-Disciplinary Major Subjects (UG)',
                'B. Pharm.|B. Pharm.',
                'B.A (Hons) - Ancient Indian History, Culture and Archaeology|B.A (Hons) -   Ancient Indian History, Culture and Archaeology',
                'B.A (Hons) - Economics|B.A (Hons) - Economics',
                'B.A (Hons) - English|B.A (Hons) - English',
                'B.A (Hons) - Geography and Regional Development|B.A (Hons) - Geography and Regional Development',
                'B.A (Hons) -   Hindi|B.A (Hons) -   Hindi',
                'B.A (Hons) -   History|B.A (Hons) -   History',
                'B.A (Hons) -   Political Science and Human Rights|B.A (Hons) -   Political Science and Human Rights',
                'B.A (Hons) -   Psychology|B.A (Hons) -   Psychology',
                'B.A (Hons) -   Sociology and Social Anthropology|B.A (Hons) -   Sociology and Social Anthropology',
                'B.A (Hons) -   Tourism|B.A (Hons) -   Tourism',
                'B.A (Hons) -   Tribal Studies|B.A (Hons) -   Tribal Studies',
                'B.A. (Bachelor of Arts)|B.A. (Bachelor of Arts)',
                'B.A. (Hons) in Journalism & Mass Communication |B.A. (Hons) in Journalism & Mass Communication ',
                'B.A. B.Ed.|B.A. B.Ed.',
                'B.Ed.|B.Ed.',
                'B.Sc. (Bachelor of Science)-Biology Group|B.Sc. (Bachelor of Science)-Biology Group',
                'B.Sc. (Bachelor of Science)-Mathematics Group|B.Sc. (Bachelor of Science)-Mathematics Group',
                'B.Sc. (Hons) -Biotechnology|B.Sc. (Hons) -Biotechnology',
                'B.Sc. (Hons) -Botany|B.Sc. (Hons) -Botany',
                'B.Sc. (Hons) -Chemistry|B.Sc. (Hons) -Chemistry',
                'B.Sc. (Hons) -Environmental Sciences|B.Sc. (Hons) -Environmental Sciences',
                'B.Sc. (Hons) -Zoology|B.Sc. (Hons) -Zoology',
                'B.Sc. (Hons)-Biotechnology|B.Sc. (Hons)-Biotechnology',
                'B.Sc. _BEd|B.Sc. _BEd',
                'B.Sc. Home Science|B.Sc. Home Science',
                'B.Sc. in Yoga|B.Sc. in Yoga',
                'B.Voc in Agricultural Sciences|B.Voc in Agricultural Sciences',
                'B.VOC IN AGRICULTURE SCIENCE|B.VOC IN AGRICULTURE SCIENCE',
                'B.Voc in Software Development|B.Voc in Software Development',
                'B.Voc in Theatre, Stagecraft, Film Production and Media Technology|B.Voc in Theatre, Stagecraft, Film Production and Media Technology',
                'B.VOC IN TOURISM AND HOSPITALITY MANAGEMENT|B.VOC IN TOURISM AND HOSPITALITY MANAGEMENT',
                'Bachelor in Business Administration (BBA)|Bachelor in Business Administration (BBA)',
                'Bachelor in Computer Applications (BCA)|Bachelor in Computer Applications (BCA)',
                'Bachelor in Pharmacy (B. Phram)|Bachelor in Pharmacy (B. Phram)',
                'BACHELOR IN PHARMACY (B. PHRAM)-LATERAL ENTRY|BACHELOR IN PHARMACY (B. PHRAM)-LATERAL ENTRY',
                'Bachelor of Arts (B.A.)|Bachelor of Arts (B.A.)',
                'Bachelor of Commerce (B.Com.)|Bachelor of Commerce (B.Com.)',
                'Bachelor of Physical Education (BPSE)|Bachelor of Physical Education (BPSE)',
                'Bachelor of Science (B.Sc.)|Bachelor of Science (B.Sc.)',
                'BBA in Tourism Management (BBA TM)|BBA in Tourism Management (BBA TM)',
                'Biotechnology-Disciplinary Major Subjects (UG)|Biotechnology-Disciplinary Major Subjects (UG)',

                ];  
            
        }
        else if(s1.value=="PG")
        {
            var optionArray =[
                '|select program name',
                 'MASTER OF PHARMACY(PHARMACEUTICAL CHEMISTRY)|MASTER OF PHARMACY(PHARMACEUTICAL CHEMISTRY)',
                 'MASTER OF PHARMACY(PHARMACEUTICS)|MASTER OF PHARMACY(PHARMACEUTICS)',
                 'M. Voc Media Technology|M. Voc Media Technology',
                 'M. Voc Software Development|M. Voc Software Development',
                 'M.A. Ancient Indian History, Culture & Archaeology|M.A. Ancient Indian History, Culture & Archaeology',
                 'M.A. Economics|M.A. Economics',
                 'M.A. Education|M.A. Education',
                 'M.A. English|M.A. English',
                 'M.A. Hindi|M.A. Hindi',
                 'M.A. History|M.A. History',
                 'M.A. Journalism & Mass Communication|M.A. Journalism & Mass Communication',
                 'M.A. Linguistics|M.A. Linguistics',
                 'M.A. Museology|M.A. Museology',
                 'M.A. Philosophy|M.A. Philosophy',
                 'M.A. Sanskrit|M.A. Sanskrit',
                 'M.A. Sociology|M.A. Sociology',
                 'M.A. Tribal Studies, Arts, Culture and Folk Literatures|M.A. Tribal Studies, Arts, Culture and Folk Literatures',
                 'M.A./M.Sc. Geography|M.A./M.Sc. Geography',
                 'M.A./M.Sc. Mathematics|M.A./M.Sc. Mathematics',
                 'M.A./M.Sc. Psychology|M.A./M.Sc. Psychology',
                 'M.Com. Commerce|M.Com. Commerce',
                 'M.Sc. Biotechnology|M.Sc. Biotechnology',
                 'M.Sc. Botany|M.Sc. Botany',
                 'M.Sc. Chemistry|M.Sc. Chemistry',
                 'M.Sc. Environmental Science|M.Sc. Environmental Science',
                 'M.Sc. Geology|M.Sc. Geology',
                 'M.Sc. Physics|M.Sc. Physics',
                 'M.Sc. Statistics|M.Sc. Statistics',
                 'M.Sc. Zoology|M.Sc. Zoology',
                 'MA/M.Sc. Yogic Science|MA/M.Sc. Yogic Science',
                 'MBA (Business Administration)|MBA (Business Administration)',
                 'MBA (Tourism and Travel Management)|MBA (Tourism and Travel Management)',
                 'MCA Computer Science|MCA Computer Science',
                 'M.A. Political Science|M.A. Political Science',
                 'Master of Social Work (MSW)|Master of Social Work (MSW)',
                 'M.A.Political Science-RCM)|M.A.Political Science-RCM)',
                 'M.A.Sociology-RCM|M.A.Sociology-RCM',
                 'M.A.Tribal  Studies-RCM|M.A.Tribal  Studies-RCM',
                 'M.C.A.-RCM|M.C.A.-RCM',
                 'Master of Social Work (MSW)-RCM|Master of Social Work (MSW)-RCM'];
        }
        else if(s1.value=="DIPLOMA")
        {
            var optionArray =[
                '|select program name',
               'Certificate Course in Yoga|Certificate Course in Yoga',
               'Diploma in Pharmacy (D.Pharm)|Diploma in Pharmacy (D.Pharm)',
               'PG DiploM.A in English Proficiency and Basic of Skills|PG DiploM.A in English Proficiency and Basic of Skills',
               'PG Diploma in Agricultural and Forest Biotechnology|PG Diploma in Agricultural and Forest Biotechnology',
               'PG Diploma in Contrastive  Linguistics and Tribal Languages|PG Diploma in Contrastive  Linguistics and Tribal Languages',
               'PG Diploma in Museology|PG Diploma in Museology',
               'PG Diploma in Translation Studies : Theory and Function|PG Diploma in Translation Studies : Theory and Function',
               'PG Diploma in Yoga|PG Diploma in Yoga',

            ];

        }

        for(var option in optionArray)
        {
            var pair=optionArray[option].split("|");
            var newoption = document.createElement("option");

            newoption.value =pair[0];
            newoption.innerHTML=pair[1];
            s2.options.add(newoption);
        }
    }
    </script>
        
   
</body>
</html>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include('./vendor/autoload.php');

include('./connect.php');

if(isset($_POST['submit']))
{
    //  uploade image

    $filename=$_FILES["uploadfile"]["name"];
    $tempname=$_FILES["uploadfile"]["tmp_name"];
    $folder="../student_img/".$filename;
    move_uploaded_file($tempname,$folder);

    
    // upload sem_fee_receipt
    $filename2=$_FILES["uploadsemfee"]["name"];
    $tempname2=$_FILES["uploadsemfee"]["tmp_name"];
    $folder2="../document_pdf/".$filename2;
    move_uploaded_file($tempname2,$folder2);

    // upload cast certificate
    $filename3=$_FILES["uploadcast"]["name"];
    $tempname3=$_FILES["uploadcast"]["tmp_name"];
    $folder3="../document_pdf/".$filename3;
    move_uploaded_file($tempname3,$folder3);

    // upload Domicile certificate
    $filename4=$_FILES["uploaddomicile"]["name"];
    $tempname4=$_FILES["uploaddomicile"]["tmp_name"];
    $folder4="../document_pdf/".$filename4;
    move_uploaded_file($tempname4,$folder4);

    // upload Hostel fee receipt
   
    $filename5=$_FILES["uploadhostelfee"]["name"];
    $tempname5=$_FILES["uploadhostelfee"]["tmp_name"];
    $folder5="../document_pdf/".$filename5;
    move_uploaded_file($tempname5,$folder5);

    // upload  student aadhar
    $filename1=$_FILES["uploadaadhar"]["name"];
    $tempname1=$_FILES["uploadaadhar"]["tmp_name"];
    $folder1="../document_pdf/".$filename1;
    move_uploaded_file($tempname1,$folder1);


    $room_no =$_POST['room_no'];
    $stayfrom =$_POST['stay_from'];
    $duration =$_POST['duration'];
    $regno =$_POST['regno'];
    $sname =$_POST['sname'];
    $fname =$_POST['fname'];
    $programtype =$_POST['select1'];
    $course=$_POST['select2'];
    $semester=$_POST['semester'];
    $dob =$_POST['dob'];
    $category =$_POST['category'];
    $religion =$_POST['religion'];
    $blood =$_POST['blood'];
    $physical_dis =$_POST['physical_dis'];
    $email =$_POST['email'];
    $password =$_POST['pass'];
    $mob =$_POST['phone'];
    $aadhar =$_POST['aadhar'];
    $emergency_no =$_POST['emgno'];
    $guardian_name =$_POST['guardian_name'];
    $guardian_rel =$_POST['guardian_rel'];
    $guardian_no =$_POST['guardian_no'];
    $address =$_POST['address'];
    $city =$_POST['city'];
    $state =$_POST['state'];
    $pincode =$_POST['pincode'];
    $distance =$_POST['distance'];

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
        $mail->addAddress($email);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Hostel Notification'; 
        

        $mail->Body  = "Dear $sname,<br> 
                        Your hostel room allotement form has been submitted Successfully.<br>
                        Your username  and password  Details are given below.<br>
                        Username  - $email <br> 
                        Password - $password <br>
                        <br>
                        Thank you <br>
                        <br>
                        With Regards<br>
                        Hostel Warden<br>
                        <br>
                        <br>
                        This is an auto generated mail.Please do not reply to this message or on this email address.For any 
                        query,please visit the hostel warden office.
                         
                        ";

    
        $mail->send();
    
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent');</script>";
    
    }

    if($room_no != "" && $regno != "")
    {
        // student registration
        $query1="UPDATE studentregistration set room_no='$room_no',stay_from='$stayfrom',duration='$duration',std_img='$folder',program_type='$programtype',course='$course',semester='$semester',name='$sname',fname='$fname',dob='$dob',category='$category',religion='$religion',blood_group='$blood',physical_disable='$physical_dis',contact_no='$mob',email_id='$email',aadhar_no='$aadhar',emergency_no='$emergency_no',guardian_name='$guardian_name',guardian_relation='$guardian_rel',guardian_contact_no='$guardian_no',address='$address',city='$city',state='$state',pincode='$pincode',distance='$distance' where registration_no='$regno'";

        $result1=mysqli_query($conn,$query1);
 
        //user details
        $query2="INSERT INTO userdetails(id,sname,email,password)  VALUES('$regno','$sname','$email','$password')";
        $result2=mysqli_query($conn,$query2);
  
        // documents
        $query3="INSERT INTO documents(regno,sname,cast_certificate,domicile_certificate,hostel_fee_receipt,semester_fee_receipt,aadhar)
        VALUES('$regno','$sname','$folder3',' $folder4','$folder5','$folder2','$folder1')";
        $result3=mysqli_query($conn,$query3);
        echo $squry3;

        // update rooms 
        $query4="select * from rooms where room_no='$room_no'";

        $result4=mysqli_query($conn,$query4);
        $total4=mysqli_num_rows($result4);
        if($total4)
        {
            while($row=mysqli_fetch_assoc($result4))
            {
                $allot=$row['allot_seat'];
                $empty=$row['empty_seat'];
              if($empty>=1)
              {
                $query="UPDATE rooms set allot_seat=$allot+1,empty_seat=$empty-1,allot_status='Yes' where room_no='$room_no'";
                mysqli_query($conn,$query);
              }
              else
              {
                echo "<script>alert('This Room Is  Not Empty');</script>";
              }
            }
        }
        else
        {
            echo "<script>alert('Room Number Not Exists');</script>";
        }

if($result1 && $result2 && $result3)
{
    echo "<script>alert('Data Insert Successfully');</script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/admindashboard.php" />
    <?php
}
else
{
    echo "<script>alert('Data Not Inserted');</script>";
}
    }
    else
    {
        echo "<script>alert('Please fill the form first');</script>";
    }
    
}
?>
</div>
<?php include('./adminfooter.php');?>



    