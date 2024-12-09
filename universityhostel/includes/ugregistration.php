<?php include('./header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ug Registration</title>
    <link rel="stylesheet" href="../css/formstyle.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
     <script>
        function run()
        {
            var dob=document.getElementById("dob").value;
            dob = dob.split("-").reverse().join("-");
        }
     </script>
</head>
<body>
    
    <div class="container1">
        <div class="title">
            UG Student Registration Form
        </div>
        <form action="../includes/registration_process.php" method="post" enctype="multipart/form-data" autocomplete="off" onsubmit="return validation()">
        <div class="form">
           
            <div class="input-field">
                <label>Cuet Form No</label>
                <input type="number" id="cuetno" name="cuetno" required>
                <span id="CUETNO"></span>
            </div>

            <div class="input-field">
                <label>Upload Image</label>
                <input type="file" name="uploadfile" class="upload">
                
            </div>

            <div class="input-field">
            <label>Student Name</label>
            <input type="text"   name="sname" id="sname" required>
            <span id="userr"></span>   
            </div>

            <div class="input-field">
            <label>Father Name</label>
            <input type="text"  name="fname"   required>
            </div>

            <div class="input-field">
            <label>Mother Name</label>
            <input type="text"  name="mname"  required>   
            </div>

            <div class="input-field">
            <label>Date Of Birth</label>
            <input type="date" name="dob"  required>   
            </div>

            
            <div class="input-field">
            <label>Gender</label>
             <select class="selectbox" name="gender"  required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
         
            </select>   
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
            <label>Religion</label>
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
            <label>Select Course</label>
            <select class="selectbox" name="course"  required>
                <option value="">select course</option>       
                <option value="Ancient Indian History, Culture and Archaeology-Disciplinary Major Subjects (UG)">Ancient Indian History, Culture and Archaeology-Disciplinary Major Subjects (UG)</option>
                <option value="B. Pharm.">B. Pharm.</option>
                <option value="B.A (Hons) -   Ancient Indian History, Culture and Archaeology">B.A (Hons) -   Ancient Indian History, Culture and Archaeology</option>
                <option value="B.A (Hons) -   Economics">B.A (Hons) -   Economics</option>
                <option value="B.A (Hons) -   English">B.A (Hons) -   English</option>
                <option value="B.A (Hons) -   Geography and Regional Development">B.A (Hons) -   Geography and Regional Development</option>
                <option value="B.A (Hons) -   Hindi">B.A (Hons) -   Hindi</option>
                <option value="B.A (Hons) -   History">B.A (Hons) -   History</option>
                <option value="B.A (Hons) -   Political Science and Human Rights">B.A (Hons) -   Political Science and Human Rights</option>
                <option value="B.A (Hons) -   Psychology">B.A (Hons) -   Psychology</option>
                <option value="B.A (Hons) -   Sociology and Social Anthropology">B.A (Hons) -   Sociology and Social Anthropology</option>
                <option value="B.A (Hons) -   Tourism">B.A (Hons) -   Tourism</option>
                <option value="B.A (Hons) -   Tribal Studies">B.A (Hons) -   Tribal Studies</option>
                <option value="B.A. (Bachelor of Arts)">B.A. (Bachelor of Arts)</option>
                <option value="B.A. (Hons) in Journalism &amp; Mass Communication ">B.A. (Hons) in Journalism &amp; Mass Communication </option>
                <option value="B.A._Bed">B.A._Bed</option>
                <option value="B.Ed.">B.Ed.</option>
                <option value="B.Sc. (Bachelor of Science)-Biology Group">B.Sc. (Bachelor of Science)-Biology Group</option>
                <option value="B.Sc. (Bachelor of Science)-Mathematics Group">B.Sc. (Bachelor of Science)-Mathematics Group</option>
                <option value="B.Sc. (Hons) -Biotechnology">B.Sc. (Hons) -Biotechnology</option>
                <option value="B.Sc. (Hons) -Botany">B.Sc. (Hons) -Botany</option>
                <option value="B.Sc. (Hons) -Chemistry">B.Sc. (Hons) -Chemistry</option>
                <option value="B.Sc. (Hons) -Environmental Sciences">B.Sc. (Hons) -Environmental Sciences</option>
                <option value="B.Sc. (Hons) -Zoology">B.Sc. (Hons) -Zoology</option>
                <option value="B.Sc. (Hons)-Biotechnology">B.Sc. (Hons)-Biotechnology</option>
                <option value="B.Sc. _BEd">B.Sc. _BEd</option>
                <option value="B.Sc. Home Science">B.Sc. Home Science</option>
                <option value="B.Sc. in Yoga">B.Sc. in Yoga</option>
                <option value="B.Voc in Agricultural Sciences">B.Voc in Agricultural Sciences</option>
                <option value="B.VOC IN AGRICULTURE SCIENCE">B.VOC IN AGRICULTURE SCIENCE</option>
                <option value="B.Voc in Software Development">B.Voc in Software Development</option>
                <option value="B.Voc in Theatre, Stagecraft, Film Production and Media Technology">B.Voc in Theatre, Stagecraft, Film Production and Media Technology</option>
                <option value="B.Voc in Theatre, Stagecraft, Film Production and Media Technology.">B.Voc in Theatre, Stagecraft, Film Production and Media Technology.</option>
                <option value="B.VOC IN TOURISM AND HOSPITALITY MANAGEMENT">B.VOC IN TOURISM AND HOSPITALITY MANAGEMENT</option>
                <option value="Bachelor in Business Administration (BBA)">Bachelor in Business Administration (BBA)</option>
                <option value="Bachelor in Computer Applications (BCA)">Bachelor in Computer Applications (BCA)</option>
                <option value="Bachelor in Pharmacy (B. Phram)">Bachelor in Pharmacy (B. Phram)</option>
                <option value="BACHELOR IN PHARMACY (B. PHRAM)-LATERAL ENTRY">BACHELOR IN PHARMACY (B. PHRAM)-LATERAL ENTRY</option>
                <option value="Bachelor of Arts (B.A.)">Bachelor of Arts (B.A.)</option>
                <option value="Bachelor of Commerce (B.Com.)">Bachelor of Commerce (B.Com.)</option>
                <option value="Bachelor of Physical Education (BPSE)">Bachelor of Physical Education (BPSE)</option>
                <option value="Bachelor of Science (B.Sc.)">Bachelor of Science (B.Sc.)</option>
                <option value="BBA in Tourism Management (BBA TM)">BBA in Tourism Management (BBA TM)</option>
                <option value="Biotechnology-Disciplinary Major Subjects (UG)">Biotechnology-Disciplinary Major Subjects (UG)</option>
                <option value="Botany-Disciplinary Major Subjects (UG)">Botany-Disciplinary Major Subjects (UG)</option>
                <option value="BPA">BPA</option>
                <option value="BPES">BPES</option>
                <option value="Business Administration-Disciplinary Major Subjects (UG)">Business Administration-Disciplinary Major Subjects (UG)</option>
                <option value="Chemistry-Disciplinary Major Subjects (UG)">Chemistry-Disciplinary Major Subjects (UG)</option>
                <option value="Commerce-Disciplinary Major Subjects (UG)">Commerce-Disciplinary Major Subjects (UG)</option>
                <option value="Computer Science-Disciplinary Major Subjects (UG)">Computer Science-Disciplinary Major Subjects (UG)</option>
                <option value="D.  Pharm.">D.  Pharm.</option>
                <option value="Diploma in Pharmacy (D.Pharm)">Diploma in Pharmacy (D.Pharm)</option>
                <option value="Economics-Disciplinary Major Subjects (UG)">Economics-Disciplinary Major Subjects (UG)</option>
                <option value="English-Disciplinary Major Subjects (UG)">English-Disciplinary Major Subjects (UG)</option>
                <option value="Environmental Science-Disciplinary Major Subjects (UG)">Environmental Science-Disciplinary Major Subjects (UG)</option>
                <option value="Geography-Disciplinary Major Subjects (UG)">Geography-Disciplinary Major Subjects (UG)</option>
                <option value="Hindi-Disciplinary Major Subjects (UG)">Hindi-Disciplinary Major Subjects (UG)</option>
                <option value="History-Disciplinary Major Subjects (UG)">History-Disciplinary Major Subjects (UG)</option>
                <option value="Journalism and Mass Communication-Disciplinary Major Subjects (UG)">Journalism and Mass Communication-Disciplinary Major Subjects (UG)</option>
                <option value="Linguistics and Contrastive Study of Tribal Languages-Disciplinary Major Subjects (UG)">Linguistics and Contrastive Study of Tribal Languages-Disciplinary Major Subjects (UG)</option>
                <option value="Mathematics-Disciplinary Major Subjects (UG)">Mathematics-Disciplinary Major Subjects (UG)</option>
                <option value="Museology-Disciplinary Major Subjects (UG)">Museology-Disciplinary Major Subjects (UG)</option>
                <option value="Philosophy-Disciplinary Major Subjects (UG)">Philosophy-Disciplinary Major Subjects (UG)</option>
                <option value="Physics-Disciplinary Major Subjects (UG)">Physics-Disciplinary Major Subjects (UG)</option>
                <option value="Political Science-Disciplinary Major Subjects (UG)">Political Science-Disciplinary Major Subjects (UG)</option>
                <option value="Psychology-Disciplinary Major Subjects (UG)">Psychology-Disciplinary Major Subjects (UG)</option>
                <option value="Sanskrit-Disciplinary Major Subjects (UG)">Sanskrit-Disciplinary Major Subjects (UG)</option>
                <option value="Sociology-Disciplinary Major Subjects (UG)">Sociology-Disciplinary Major Subjects (UG)</option>
                <option value="STATISTICS-DISCIPLINARY MAJOR SUBJECTS (UG)">STATISTICS-DISCIPLINARY MAJOR SUBJECTS (UG)</option>
                <option value="Tourism Management-Disciplinary Major Subjects (UG)">Tourism Management-Disciplinary Major Subjects (UG)</option>
                <option value="Tribal Studies-Art-Culture and Folk Literature-Disciplinary Major Subjects (UG)">Tribal Studies-Art-Culture and Folk Literature-Disciplinary Major Subjects (UG)</option>
                <option value="Yogic Science-Disciplinary Major Subjects (UG)">Yogic Science-Disciplinary Major Subjects (UG)</option>
                <option value="Zoology-Disciplinary Major Subjects (UG)">Zoology-Disciplinary Major Subjects (UG)</option>
            </select>
            </div>




            <div class="input-field">
            <label>Mobile No.</label>
            <input type="number" name="phone" id="mobile"  required>  
            <span id="Mob"></span>
            </div>

            <div class="input-field">
            <label>Email Id</label>
            <input type="email"  name="email" id="email"  required>
            <span id="Email"></span>   
            </div>


            <div class="input-field">
            <label>Address according to the ID Proof</label>
            <textarea class ="textarea" name="address"  required></textarea>   
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
            <label>Distance from Home Town to University Campus in KM</label>
            <input type="number"   name="distance"required >
            </div>

            <div class="input-field">
                <label>Upload Aadhar in pdf format</label>
                <input type="file" name="uploadpdf" class="pdfupload">
            </div>

            <div class="input-field">
            <label class="check">
            <input type="checkbox" required >
            </label>
            <p>Please check  the details before submission</p>  
            </div>

            <div class="input-field">
           
            <button type="submit" class ="btn" id="btn" name="submit">Submit</button>
            </div>
        </div>
    </form>         
    </div>
        
   
</body>
</html>

<script type="text/javascript">
        function validation()
        {
            var cuetno = document.getElementById('cuetno').value;
            var user = document.getElementById('sname').value;
            var email = document.getElementById('email').value;
            var mobile = document.getElementById('mobile').value;

//   cuet no validation
         if(cuetno == "")
            {
                document.getElementById('CUETNO').innerHTML="** please write cuet number in the box **";
                return false;
            }
            if(isNaN(cuetno))
            {
                document.getElementById('CUETNO').innerHTML="** please write digit only**"; 
                return false;
            }
            if(cuetno.length<12 || cuetno.length>12 )
            {
                document.getElementById('CUETNO').innerHTML="**please write 12 digit cuet number**";
                return false;
            }
            else
            {
                document.getElementById('CUETNO').innerHTML=""; 
            }
        }

            
//    username validation
            if(user == "")
            {
                document.getElementById('userr').innerHTML="** please write student name in the box **";
                return false;
            }
            if(user.length<2)
            {
                document.getElementById('userr').innerHTML="** please write more than one character in the box **";
                return false;
            }

            if(!isNaN(user))
            {
                document.getElementById('userr').innerHTML="** please write alphabet only **";
                return false;

            }
            else
            {
                document.getElementById('userr').innerHTML="";
            }
            
// email validation
            if(email == "")
            {
                document.getElementById('Email').innerHTML="** please write email in the box **";
                return false;
            }
            if(email.indexOf('@') <=0)
            {
                document.getElementById('Email').innerHTML="** Invalid position of @ **";
                return false;
            }
            if(email.charAt(email.length-4)!='.' && email.charAt(email.length-3)!='.')
            {
                document.getElementById('Email').innerHTML="** Invalid position of . **";
                return false;
            }
            else
            {
                document.getElementById('Email').innerHTML="";
        
            }
// mobile validation
            if(mobile == "")
            {
                document.getElementById('Mob').innerHTML="** please write mobile number in the box **";
                return false;
            }
            if(isNaN(mobile))
            {
                document.getElementById('Mob').innerHTML="** please write digit only**"; 
                return false;
            }
            if(mobile.length<10 || mobile.length>10 )
            {
                document.getElementById('Mob').innerHTML="**please write 10 digit mobile number**";
                return false;
            }
            else
            {
                document.getElementById('Mob').innerHTML=""; 
            }
        
//     </script>

<?php include('./footer.php');?>
    