<?php include('./header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PG Registration</title>
    <link rel="stylesheet" href="../css/formstyle.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
</head>
<body>
    <div class="container1">
        <div class="title">
            PG Student Registration Form
        </div>
        <form action="../includes/pgregistration_process.php" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="form">
           
            <div class="input-field">
                <label>Cuet Form No</label>
                <input type="number"  name="cuetno" required>
            </div>

            <div class="input-field">
                <label>Upload Image</label>
                <input type="file" name="uploadfile" class="upload">
            </div>

            <div class="input-field">
            <label>Student Name</label>
            <input type="text"   name="sname"  required>   
            </div>

            <div class="input-field">
            <label>Father Name</label>
            <input type="text"  name="fname"  required>
            </div>

            <div class="input-field">
            <label>Mother Name</label>
            <input type="text"  name="mname"  required>   
            </div>

            <div class="input-field">
            <label>Date Of Birth</label>
            <input type="date"   name="dob"  required>   
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
                <label for="">Select Course Type</label>
                <select class="selectbox" name="select1" id="select1" onchange="populate(this.id,'select2')" required> 
                <option value="">Course Type</option>
                <option value="DIPLOMA">Diploma</option>
                <option value="PG">PG</option>
                </select>
            </div>

            <div class="input-field">
            <label for="">Select Course</label>
            <select class="selectbox" name="select2" id="select2" required> 
            </select>
            </div>


            <div class="input-field">
            <label>Mobile No.</label>
            <input type="number" name="phone"  required>  
            </div>

            <div class="input-field">
            <label>Email Id</label>
            <input type="email"  name="email"  required>   
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
           
            <button type="submit" class ="btn" name="submit">Submit</button>
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

        if(s1.value=="PG")
        {
            var optionArray =[
                '|select  course',
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
include('./connect.php');

if(isset($_POST['submit']))
{
    // upload image

    $filename=$_FILES["uploadfile"]["name"];
    $tempname=$_FILES["uploadfile"]["tmp_name"];
    $folder="../student_img/".$filename;
    move_uploaded_file($tempname,$folder);

    // upload pdf

    $filename1=$_FILES["uploadpdf"]["name"];
    $tempname1=$_FILES["uploadpdf"]["tmp_name"];
    $folder1="../document_pdf/".$filename1;
    move_uploaded_file($tempname1,$folder1);


    $cuetno =$_POST['cuetno'];
    $sname =$_POST['sname'];
    $fname =$_POST['fname'];
    $mname =$_POST['mname'];
    $dob =$_POST['dob'];
    $gender =$_POST['gender'];
    $category =$_POST['category'];
    $religion =$_POST['religion'];
    $program =$_POST['select1'];
    $course=$_POST['select2'];
    $mobile =$_POST['phone'];
    $email =$_POST['email'];

    $address =$_POST['address'];
    $state =$_POST['state'];
    $distance =$_POST['distance'];
 

    if($cuetno != "" &&  $sname != "" && $fname != "" && $mname != "" && $dob != "" && $gender != "" && 
    $category != "" && $religion != "" && $program != "" && $mobile != "" && $email != ""  && 
    $address != "" && $state != "" && $distance != "")
    {
        
        $query1 = "Select * from pgregistration where cuet_no='$cuetno'";
        $data1 = mysqli_query($conn, $query1);
        $total1 = mysqli_num_rows($data1);

        $query2 = "Select * from userdetails where email='$email'";
        $data2 = mysqli_query($conn, $query2);
        $total2 = mysqli_num_rows($data2);

        if($total1 == 1 && $total2 == 1)
        {
            echo "<script>alert('Cuet no. and email id already registered');</script>";
        }
        else
        {
            $query="INSERT INTO pgregistration (cuet_no,std_img,sname,father_name,mother_name,date_of_birth,
            gender,category,religion,program_type,course,phone_no,email_id,address,state,distance,aadhar_pdf,apply_date)
                
            VALUES('$cuetno','$folder','$sname','$fname','$mname','$dob','$gender','$category',
            '$religion','$program','$course ','$mobile','$email','$address','$state','$distance','$folder1',NOW())";
            
            $result=mysqli_query($conn,$query);
    
            if($result)
            {
                echo "<script>alert('Data Insert Successfully');</script>";
                ?>
                <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/home.php" />
                <?php
            }
            else
            {
                echo "<script>alert('Data Not Inserted');</script>";
            }
        }
    }
    else
    {
        echo "<script>alert('Please fill the form first');</script>";
    }
    
}
?>
<?php include('./footer.php');?>
    