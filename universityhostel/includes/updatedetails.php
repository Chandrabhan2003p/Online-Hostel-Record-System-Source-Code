<?php include('./adminheader.php');?>
<style>
    .main .content
    {
 
        height:200vh;
        
    }
</style>
<div class="content">
    <?php
    $regno =$_GET['regno'];
    $roomno =$_GET['roomno'];

    $query="select * from studentregistration where registration_no='$regno'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    $result=mysqli_fetch_assoc($data);


    $query1="select * from rooms where room_no='$roomno'";
    $data1=mysqli_query($conn,$query1);
    $total1=mysqli_num_rows($data1);
    $result1=mysqli_fetch_assoc($data1);

    $query2="select * from userdetails where id='$regno'";
    $data2=mysqli_query($conn,$query2);
    $total2=mysqli_num_rows($data2);
    $result2=mysqli_fetch_assoc($data2);

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile Information</title>
    <!-- <link rel="stylesheet" href="../css/formstyle.css"> -->
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
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
        <div class="para">
        Room Related info
        </div>
        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="form">
           
            <div class="input-field">
                <label>Rooms No</label>
                <input type="number" value="<?php echo $result1['room_no'];?>" name="room_no" required>
            </div>


            <div class="input-field">
            <label>Stay from</label>
            <input type="date" value="<?php echo $result['stay_from'];?>"  name="stay_from"  required>   
            </div>

            <div class="input-field">
            <label>Duration In Year's</label>

            <select class="selectbox" name="duration" value="<?php echo $result['duration'];?>">
                <option value="">select duration in year's</option>
                <option value="1"
                <?php
                    if($result['duration']=='1')
                    {
                        echo "selected";
                    }
                ?>
                >1
                </option>

                <option value="2"
                <?php
                    if($result['duration']=='2')
                    {
                        echo "selected";
                    }
                ?>
                >2</option>

                <option value="3"
                <?php
                    if($result['duration']=='3')
                    {
                        echo "selected";
                    }
                ?>
                >3</option>

                <option value="4"
                <?php
                    if($result['duration']=='4')
                    {
                        echo "selected";
                    }
                ?>
                >4</option>

                <option value="5"
                <?php
                    if($result['duration']=='5')
                    {
                        echo "selected";
                    }
                ?>
                >5</option>
            </select> 
   
            </div>

            
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
            <label>Category</label>
             <select class="selectbox" name="category" value="<?php echo $result['category'];?>" required>
                <option value="">Select Category</option>
                <option value="General"
                <?php
                if($result['category']=='General')
                {
                    echo "selected";
                }
                ?>
                >General</option>
                <option value="OBC"
                <?php
                if($result['category']=='OBC')
                {
                    echo "selected";
                }
                ?>
                >OBC</option>
                <option value="SC"
                <?php
                if($result['category']=='SC')
                {
                    echo "selected";
                }
                ?>
                >SC</option>
                <option value="ST"
                <?php
                if($result['category']=='ST')
                {
                    echo "selected";
                }
                ?>
                >ST</option>
                <option value="EWS"
                <?php
                if($result['category']=='EWS')
                {
                    echo "selected";
                }
                ?>
                >EWS</option>
                <option value="TRANSGENDER"
                <?php
                if($result['category']=='TRANSGENDER')
                {
                    echo "selected";
                }
                ?>
                >TRANSGENDER</option>
            </select>   
            </div>

            
            <div class="input-field">
            <label>Religion :</label>
             <select class="selectbox" name="religion" value="<?php echo $result['religion'];?>" required>
                <option value="">Select religion</option>
                <option value="Hindu"
                <?php
                if($result['religion']=='Hindu')
                {
                    echo 'selected';
                }
                ?>
                
                >Hindu</option>
                <option value="Muslim"
                <?php
                if($result['religion']=='Muslim')
                {
                    echo 'selected';
                }
                ?>
                
                >Muslim</option>
                <option value="Buddhism"
                <?php
                if($result['religion']=='Buddhism')
                {
                    echo 'selected';
                }
                ?>
                >Buddhism</option>
                <option value="Jain"
                <?php
                if($result['religion']=='Jain')
                {
                    echo 'selected';
                }
                ?>
                >Jain</option>
                <option value="Sikkh"
                <?php
                if($result['religion']=='Sikkh')
                {
                    echo 'selected';
                }
                ?>
                >Sikkh</option>
                <option value="Christian"
                <?php
                if($result['religion']=='Christian')
                {
                    echo 'selected';
                }
                ?>
                >Christian</option>
                <option value="Other"
                <?php
                if($result['religion']=='Other')
                {
                    echo 'selected';
                }
                ?>
                >Other</option>
            </select>   
            </div>

            <div class="input-field">
            <label>Blood Group :</label>
             <select class="selectbox" name="blood" value="<?php echo $result['blood_group'];?>" required>
                <option value="">Select Blood Group</option>
                <option value="O+"
                <?php
                if($result['blood_group']=='O+')
                {
                    echo 'selected';
                }
                ?>
                >O+</option>
                <option value="B+"
                <?php
                if($result['blood_group']=='B+')
                {
                    echo 'selected';
                }
                ?>
                >B+</option>
                <option value="A+"
                <?php
                if($result['blood_group']=='A+')
                {
                    echo 'selected';
                }
                ?>
                >A+</option>
                <option value="AB+"
                <?php
                if($result['blood_group']=='AB+')
                {
                    echo 'selected';
                }
                ?>
                >AB+</option>
                <option value="O-"
                <?php
                if($result['blood_group']=='O-')
                {
                    echo 'selected';
                }
                ?>
                >O-</option>
                <option value="B-"
                <?php
                if($result['blood_group']=='B-')
                {
                    echo 'selected';
                }
                ?>
                >B-</option>
                <option value="A-"
                <?php
                if($result['blood_group']=='A-')
                {
                    echo 'selected';
                }
                ?>
                >A-</option>
                <option value="AB-"
                <?php
                if($result['blood_group']=='AB-')
                {
                    echo 'selected';
                }
                ?>
                >AB-</option>
            </select>   
            </div>
           
            <div class="input-field">
            <label>Email ID</label>
            <input type="email"  name="email" value="<?php echo $result['email_id'];?>" required>   
            </div>

            <div class="input-field">
            <label>Change Password :</label>
            <input type="text"  name="password" value="<?php echo $result2['password'];?>" required>   
            </div>

            <div class="input-field">
            <label>Mobile No.</label>
            <input type="number" name="phone" value="<?php echo $result['contact_no'];?>" required>  
            </div>

            <div class="input-field">
            <label>Emergency Contact No. :</label>
            <input type="number" name="emgno" value="<?php echo $result['emergency_no'];?>" required>  
            </div>

            <div class="input-field">
            <label>Guardian Name :</label>
            <input type="text" name="guardian_name" value="<?php echo $result['guardian_name'];?>" required>  
            </div>

            <div class="input-field">
            <label>Guardian Relation:</label>
            <select class="selectbox" name="guardian_rel" value="<?php echo $result['guardian_relation'];?>" required> 
                <option value="">Select Relation</option> 
                <option value="Father"
                <?php
                if($result['guardian_relation']=='Father')
                {
                    echo 'selected';
                }
                ?>
                >Father</option> 
                <option value="Mother"
                <?php
                if($result['guardian_relation']=='Mother')
                {
                    echo 'selected';
                }
                ?>
                >Mother</option> 
                <option value="Brother"
                <?php
                if($result['guardian_relation']=='Brother')
                {
                    echo 'selected';
                }
                ?>
                >Brother</option> 
                <option value="Sister"
                <?php
                if($result['guardian_relation']=='Sister')
                {
                    echo 'selected';
                }
                ?>
                >Sister</option> 
                <option value="Stepmother"
                <?php
                if($result['guardian_relation']=='Stepmother')
                {
                    echo 'selected';
                }
                ?>
                >Stepmother</option> 
                <option value="Stepfather"
                <?php
                if($result['guardian_relation']=='Stepfather')
                {
                    echo 'selected';
                }
                ?>
                >Stepfather</option> 
                <option value="Grandfather"
                <?php
                if($result['guardian_relation']=='Grandfather')
                {
                    echo 'selected';
                }
                ?>
                >Grandfather</option> 
                <option value="Aunt"
                <?php
                if($result['guardian_relation']=='Aunt')
                {
                    echo 'selected';
                }
                ?>
                >Aunt</option> 
                <option value="Uncle"
                <?php
                if($result['guardian_relation']=='Uncle')
                {
                    echo 'selected';
                }
                ?>
                >Uncle</option> 
                <option value="Sibling"
                <?php
                if($result['guardian_relation']=='Sibling')
                {
                    echo 'selected';
                }
                ?>
                >Sibling</option> 
                <option value="Legal Guardian"
                
                >                <?php
                if($result['guardian_relation']=='Legal Guardian')
                {
                    echo 'selected';
                }
                ?>Legal Guardian</option> 
                <option value="Other"
                <?php
                if($result['guardian_relation']=='Other')
                {
                    echo 'selected';
                }
                ?>
                >Other</option> 
            </select>
            </div>

            <div class="input-field">
            <label>Guardian Contact No. :</label>
            <input type="number" name="guardian_no" value="<?php echo $result['guardian_contact_no'];?>" required>  
            </div>

            <div class="para">
            Academic Details
            </div>

            <div class="input-field">
            <label>Enrollment No. :</label>
            <input type="text" name="enroll" value="<?php echo $result['enrollment'];?>" required>  
            </div>

            <div class="input-field">
            <label>Admission No. :</label>
            <input type="text" name="admission_no" value="<?php echo $result['admission_no'];?>" required>  
            </div>

            <div class="input-field">
            <label>ABC ID :</label>
            <input type="text" name="abc_id" value="<?php echo $result['abc_id'];?>" required>  
            </div>

            <div class="input-field">
                <label for="">Select Course Type</label>
                <select class="selectbox" name="select1"  value="<?php echo $result['program_type'];?>" id="select1"   onchange="populate(this.id,'select2')" required> 
                        <option value="">Select Program</option>
                        <option value="DIPLOMA"
                        <?php
                            if($result['program_type']=='DIPLOMA')
                            {
                                echo "selected";
                            }
                        ?>
                        >Diploma
                    </option>

                        <option value="UG"
                        
                        <?php
                            if($result['program_type']=='UG')
                            {
                                echo "selected";
                            }
                        ?>
                        >UG</option>

                        <option value="PG"
                        <?php
                            if($result['program_type']=='PG')
                            {
                                echo "selected";
                            }
                        ?>
                        >PG</option>
                </select>
            </div>
            
            <div class="input-field">
            <label for="">Select Course</label>
            <select class="selectbox" name="select2" value="<?php echo $result['course'];?>" id="select2" required> 
            
            <?php
            if($result['program_type']=='UG')
            {
                ?>
                <option value="Ancient Indian History, Culture and Archaeology-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='"Ancient Indian History, Culture and Archaeology-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Ancient Indian History, Culture and Archaeology-Disciplinary Major Subjects (UG)</option>

                <option value="B. Pharm."
                <?php
                    if($result['course']=='B. Pharm.')
                    {
                        echo "selected";
                    }
                ?>
                >B. Pharm.</option>
                <option value="B.A (Hons) -   Ancient Indian History, Culture and Archaeology"
                <?php
                    if($result['course']=='B.A (Hons) -   Ancient Indian History, Culture and Archaeology')
                    {
                        echo "selected";
                    }
                ?>
                >B.A (Hons) -   Ancient Indian History, Culture and Archaeology</option>
                <option value="B.A (Hons) -   Economics"
                <?php
                    if($result['course']=='B.A (Hons) -   Economics')
                    {
                        echo "selected";
                    }
                ?>
                >B.A (Hons) -   Economics</option>
                <option value="B.A (Hons) -   English"
                <?php
                    if($result['course']=='B.A (Hons) -   English')
                    {
                        echo "selected";
                    }
                ?>
                >B.A (Hons) -   English</option>
                <option value="B.A (Hons) -   Geography and Regional Development"
                <?php
                    if($result['course']=='B.A (Hons) -   Geography and Regional Development')
                    {
                        echo "selected";
                    }
                ?>
                >B.A (Hons) -   Geography and Regional Development</option>
                <option value="B.A (Hons) -   Hindi"
                <?php
                    if($result['course']=='B.A (Hons) -   Hindi')
                    {
                        echo "selected";
                    }
                ?>
                >B.A (Hons) -   Hindi</option>
                <option value="B.A (Hons) -   History"
                <?php
                    if($result['course']=='B.A (Hons) -   History')
                    {
                        echo "selected";
                    }
                ?>
                >B.A (Hons) -   History</option>
                <option value="B.A (Hons) -   Political Science and Human Rights"
                <?php
                    if($result['course']=='B.A (Hons) -   Political Science and Human Rights')
                    {
                        echo "selected";
                    }
                ?>
                >B.A (Hons) -   Political Science and Human Rights</option>
                <option value="B.A (Hons) -   Psychology"
                <?php
                    if($result['course']=='B.A (Hons) -   Psychology')
                    {
                        echo "selected";
                    }
                ?>
                >B.A (Hons) -   Psychology</option>
                <option value="B.A (Hons) -   Sociology and Social Anthropology"
                <?php
                    if($result['course']=='B.A (Hons) -   Sociology and Social Anthropology')
                    {
                        echo "selected";
                    }
                ?>
                >B.A (Hons) -   Sociology and Social Anthropology</option>
                <option value="B.A (Hons) -   Tourism"
                <?php
                    if($result['course']=='B.A (Hons) -   Tourism')
                    {
                        echo "selected";
                    }
                ?>
                >B.A (Hons) -   Tourism</option>
                <option value="B.A (Hons) -   Tribal Studies"
                <?php
                    if($result['course']=='B.A (Hons) -   Tribal Studies')
                    {
                        echo "selected";
                    }
                ?>
                >B.A (Hons) -   Tribal Studies</option>
                <option value="B.A. (Bachelor of Arts)"
                <?php
                    if($result['course']=='B.A. (Bachelor of Arts)')
                    {
                        echo "selected";
                    }
                ?>
                >B.A. (Bachelor of Arts)</option>
                <option value="B.A. (Hons) in Journalism &amp; Mass Communication "
                <?php
                    if($result['course']=='B.A. (Hons) in Journalism & Mass Communication ')
                    {
                        echo "selected";
                    }
                ?>
                >B.A. (Hons) in Journalism &amp; Mass Communication </option>
                <option value="B.A._Bed"
                <?php
                    if($result['course']=='B.A._Bed')
                    {
                        echo "selected";
                    }
                ?>
                >B.A._Bed</option>
                <option value="B.Ed."
                <?php
                    if($result['course']=='B.Ed.')
                    {
                        echo "selected";
                    }
                ?>
                >B.Ed.</option>
                <option value="B.Sc. (Bachelor of Science)-Biology Group"
                <?php
                    if($result['course']=='B.Sc. (Bachelor of Science)-Biology Group')
                    {
                        echo "selected";
                    }
                ?>
                >B.Sc. (Bachelor of Science)-Biology Group</option>
                <option value="B.Sc. (Bachelor of Science)-Mathematics Group"
                <?php
                    if($result['course']=='B.Sc. (Bachelor of Science)-Mathematics Group')
                    {
                        echo "selected";
                    }
                ?>
                >B.Sc. (Bachelor of Science)-Mathematics Group</option>
                <option value="B.Sc. (Hons) -Biotechnology"
                <?php
                    if($result['course']=='B.Sc. (Hons) -Biotechnology')
                    {
                        echo "selected";
                    }
                ?>
                >B.Sc. (Hons) -Biotechnology</option>
                <option value="B.Sc. (Hons) -Botany"
                <?php
                    if($result['course']=='B.Sc. (Hons) -Botany')
                    {
                        echo "selected";
                    }
                ?>>B.Sc. (Hons) -Botany</option>
                <option value="B.Sc. (Hons) -Chemistry"
                <?php
                    if($result['course']=='B.Sc. (Hons) -Chemistry')
                    {
                        echo "selected";
                    }
                ?>
                >B.Sc. (Hons) -Chemistry</option>
                <option value="B.Sc. (Hons) -Environmental Sciences"
                <?php
                    if($result['course']=='B.Sc. (Hons) -Environmental Sciences')
                    {
                        echo "selected";
                    }
                ?>
                >B.Sc. (Hons) -Environmental Sciences</option>
                <option value="B.Sc. (Hons) -Zoology"
                <?php
                    if($result['course']=='B.Sc. (Hons) -Zoology')
                    {
                        echo "selected";
                    }
                ?>
                >B.Sc. (Hons) -Zoology</option>
                <option value="B.Sc. (Hons)-Biotechnology"
                <?php
                    if($result['course']=='B.Sc. (Hons)-Biotechnology')
                    {
                        echo "selected";
                    }
                ?>
                >B.Sc. (Hons)-Biotechnology</option>
                <option value="B.Sc. _BEd"
                <?php
                    if($result['course']=='B.Sc. _BEd')
                    {
                        echo "selected";
                    }
                ?>
                >B.Sc. _BEd</option>
                <option value="B.Sc. Home Science"
                
                <?php
                    if($result['course']=='B.Sc. Home Science')
                    {
                        echo "selected";
                    }
                ?>>B.Sc. Home Science</option>
                <option value="B.Sc. in Yoga"
                <?php
                    if($result['course']=='B.Sc. in Yoga')
                    {
                        echo "selected";
                    }
                ?>
                >B.Sc. in Yoga</option>
                <option value="B.Voc in Agricultural Sciences"
                <?php
                    if($result['course']=='B.Voc in Agricultural Sciences')
                    {
                        echo "selected";
                    }
                ?>
                >B.Voc in Agricultural Sciences</option>
                <option value="B.VOC IN AGRICULTURE SCIENCE"
                <?php
                    if($result['course']=='B.VOC IN AGRICULTURE SCIENCE')
                    {
                        echo "selected";
                    }
                ?>
                >B.VOC IN AGRICULTURE SCIENCE</option>
                <option value="B.Voc in Software Development"
                <?php
                    if($result['course']=='B.Voc in Software Development')
                    {
                        echo "selected";
                    }
                ?>
                >B.Voc in Software Development</option>
                <option value="B.Voc in Theatre, Stagecraft, Film Production and Media Technology"
                <?php
                    if($result['course']=='B.Voc in Theatre, Stagecraft, Film Production and Media Technology')
                    {
                        echo "selected";
                    }
                ?>
                >B.Voc in Theatre, Stagecraft, Film Production and Media Technology</option>
                <option value="B.Voc in Theatre, Stagecraft, Film Production and Media Technology."
                <?php
                    if($result['course']=='B.Voc in Theatre, Stagecraft, Film Production and Media Technology.')
                    {
                        echo "selected";
                    }
                ?>
                >B.Voc in Theatre, Stagecraft, Film Production and Media Technology.</option>
                <option value="B.VOC IN TOURISM AND HOSPITALITY MANAGEMENT"
                <?php
                    if($result['course']=='B.VOC IN TOURISM AND HOSPITALITY MANAGEMENT')
                    {
                        echo "selected";
                    }
                ?>
                >B.VOC IN TOURISM AND HOSPITALITY MANAGEMENT</option>
                <option value="Bachelor in Business Administration (BBA)"
                <?php
                    if($result['course']=='Bachelor in Business Administration (BBA)')
                    {
                        echo "selected";
                    }
                ?>
                >Bachelor in Business Administration (BBA)</option>
                <option value="Bachelor in Computer Applications (BCA)"
                <?php
                    if($result['course']=='Bachelor in Computer Applications (BCA)')
                    {
                        echo "selected";
                    }
                ?>
                >Bachelor in Computer Applications (BCA)</option>
                <option value="Bachelor in Pharmacy (B. Phram)"
                <?php
                    if($result['course']=='Bachelor in Pharmacy (B. Phram)')
                    {
                        echo "selected";
                    }
                ?>
                >Bachelor in Pharmacy (B. Phram)</option>
                <option value="BACHELOR IN PHARMACY (B. PHRAM)-LATERAL ENTRY"
                <?php
                    if($result['course']=='BACHELOR IN PHARMACY (B. PHRAM)-LATERAL ENTRY')
                    {
                        echo "selected";
                    }
                ?>
                >BACHELOR IN PHARMACY (B. PHRAM)-LATERAL ENTRY</option>
                <option value="Bachelor of Arts (B.A.)"
                <?php
                    if($result['course']=='Bachelor of Arts (B.A.)')
                    {
                        echo "selected";
                    }
                ?>
                >Bachelor of Arts (B.A.)</option>
                <option value="Bachelor of Commerce (B.Com.)"
                <?php
                    if($result['course']=='Bachelor of Commerce (B.Com.)')
                    {
                        echo "selected";
                    }
                ?>
                >Bachelor of Commerce (B.Com.)</option>
                <option value="Bachelor of Physical Education (BPSE)"
                <?php
                    if($result['course']=='Bachelor of Physical Education (BPSE)')
                    {
                        echo "selected";
                    }
                ?>
                >Bachelor of Physical Education (BPSE)</option>
                <option value="Bachelor of Science (B.Sc.)"
                <?php
                    if($result['course']=='Bachelor of Science (B.Sc.)')
                    {
                        echo "selected";
                    }
                ?>
                >Bachelor of Science (B.Sc.)</option>
                <option value="BBA in Tourism Management (BBA TM)"
                <?php
                    if($result['course']=='BBA in Tourism Management (BBA TM)')
                    {
                        echo "selected";
                    }
                ?>
                >BBA in Tourism Management (BBA TM)</option>
                <option value="Biotechnology-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Biotechnology-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Biotechnology-Disciplinary Major Subjects (UG)</option>
                <option value="Botany-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Botany-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Botany-Disciplinary Major Subjects (UG)</option>
                <option value="BPA"
                <?php
                    if($result['course']=='BPA')
                    {
                        echo "selected";
                    }
                ?>
                >BPA</option>
                <option value="BPES"
                <?php
                    if($result['course']=='BPES')
                    {
                        echo "selected";
                    }
                ?>
                >BPES</option>
                <option value="Business Administration-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Business Administration-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Business Administration-Disciplinary Major Subjects (UG)</option>
                <option value="Chemistry-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Chemistry-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Chemistry-Disciplinary Major Subjects (UG)</option>
                <option value="Commerce-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Commerce-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Commerce-Disciplinary Major Subjects (UG)</option>
                <option value="Computer Science-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Computer Science-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>>Computer Science-Disciplinary Major Subjects (UG)</option>
                <option value="D.  Pharm."
                <?php
                    if($result['course']=='D.  Pharm.')
                    {
                        echo "selected";
                    }
                ?>
                >D.  Pharm.</option>
                <option value="Diploma in Pharmacy (D.Pharm)"
                <?php
                    if($result['course']=='Diploma in Pharmacy (D.Pharm)')
                    {
                        echo "selected";
                    }
                ?>
                >Diploma in Pharmacy (D.Pharm)</option>
                <option value="Economics-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Economics-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Economics-Disciplinary Major Subjects (UG)</option>
                <option value="English-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='English-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >English-Disciplinary Major Subjects (UG)</option>
                <option value="Environmental Science-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Environmental Science-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Environmental Science-Disciplinary Major Subjects (UG)</option>
                <option value="Geography-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Geography-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Geography-Disciplinary Major Subjects (UG)</option>
                <option value="Hindi-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Hindi-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Hindi-Disciplinary Major Subjects (UG)</option>
                <option value="History-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='History-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >History-Disciplinary Major Subjects (UG)</option>
                <option value="Journalism and Mass Communication-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Journalism and Mass Communication-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Journalism and Mass Communication-Disciplinary Major Subjects (UG)</option>
                <option value="Linguistics and Contrastive Study of Tribal Languages-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Linguistics and Contrastive Study of Tribal Languages-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Linguistics and Contrastive Study of Tribal Languages-Disciplinary Major Subjects (UG)</option>
                <option value="Mathematics-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Mathematics-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Mathematics-Disciplinary Major Subjects (UG)</option>
                <option value="Museology-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Museology-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Museology-Disciplinary Major Subjects (UG)</option>
                <option value="Philosophy-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Philosophy-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Philosophy-Disciplinary Major Subjects (UG)</option>
                <option value="Physics-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Physics-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Physics-Disciplinary Major Subjects (UG)</option>
                <option value="Political Science-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Political Science-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Political Science-Disciplinary Major Subjects (UG)</option>
                <option value="Psychology-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Psychology-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Psychology-Disciplinary Major Subjects (UG)</option>
                <option value="Sanskrit-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Sanskrit-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Sanskrit-Disciplinary Major Subjects (UG)</option>
                <option value="Sociology-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Sociology-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Sociology-Disciplinary Major Subjects (UG)</option>
                <option value="STATISTICS-DISCIPLINARY MAJOR SUBJECTS (UG)"
                <?php
                    if($result['course']=='STATISTICS-DISCIPLINARY MAJOR SUBJECTS (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >STATISTICS-DISCIPLINARY MAJOR SUBJECTS (UG)</option>
                <option value="Tourism Management-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Tourism Management-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Tourism Management-Disciplinary Major Subjects (UG)</option>
                <option value="Tribal Studies-Art-Culture and Folk Literature-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Tribal Studies-Art-Culture and Folk Literature-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Tribal Studies-Art-Culture and Folk Literature-Disciplinary Major Subjects (UG)</option>
                <option value="Yogic Science-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Yogic Science-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Yogic Science-Disciplinary Major Subjects (UG)</option>
                <option value="Zoology-Disciplinary Major Subjects (UG)"
                <?php
                    if($result['course']=='Zoology-Disciplinary Major Subjects (UG)')
                    {
                        echo "selected";
                    }
                ?>
                >Zoology-Disciplinary Major Subjects (UG)</option>
                <?php
            }

            if($result['program_type']=='PG')
            {
                ?>

                   <option value=""></option>
	               <option value="MASTER OF PHARMACY(PHARMACEUTICAL CHEMISTRY)"
                   <?php
                    if($result['course']=='MASTER OF PHARMACY(PHARMACEUTICAL CHEMISTRY)')
                    {
                        echo "selected";
                    }
                    ?>
                >MASTER OF PHARMACY(PHARMACEUTICAL CHEMISTRY)</option>
                <option value="MASTER OF PHARMACY(PHARMACEUTICS)"
                <?php
                if($result['course']=='MASTER OF PHARMACY(PHARMACEUTICS)')
                {
                    echo "selected";
                }
                ?>
                >MASTER OF PHARMACY(PHARMACEUTICS)</option>
                <option value="M. Voc Media Technology"
                <?php
                if($result['course']=='M. Voc Media Technology')
                {
                    echo "selected";
                }
                ?>
                >M. Voc Media Technology</option>
                <option value="M. Voc Software Development"
                <?php
                if($result['course']=='M. Voc Software Development')
                {
                    echo "selected";
                }
                ?>
                >M. Voc Software Development</option>
                <option value="M.A. Ancient Indian History, Culture &amp; Archaeology"
                <?php
                if($result['course']=='M.A. Ancient Indian History, Culture & Archaeology')
                {
                    echo "selected";
                }
                ?>
                >M.A. Ancient Indian History, Culture &amp; Archaeology</option>
                <option value="M.A. Economics"
                <?php
                if($result['course']=='M.A. Economics')
                {
                    echo "selected";
                }
                ?>
                >M.A. Economics</option>
                <option value="M.A. Education"
                <?php
                if($result['course']=='M.A. Education')
                {
                    echo "selected";
                }
                ?>
                >M.A. Education</option>
                <option value="M.A. English"
                <?php
                if($result['course']=='M.A. English')
                {
                    echo "selected";
                }
                ?>
                >M.A. English</option>
                <option value="M.A. Hindi "
                <?php
                if($result['course']=='M.A. Hindi ')
                {
                    echo "selected";
                }
                ?>
                >M.A. Hindi </option>
                <option value="M.A. History"
                <?php
                if($result['course']=='M.A. History')
                {
                    echo "selected";
                }
                ?>
                >M.A. History</option>
                <option value="M.A. Journalism &amp; Mass Communication"
                <?php
                if($result['course']=='M.A. Journalism & Mass Communication')
                {
                    echo "selected";
                }
                ?>
                >M.A. Journalism &amp; Mass Communication</option>
                <option value="M.A. Linguistics"
                <?php
                if($result['course']=='M.A. Linguistics')
                {
                    echo "selected";
                }
                ?>
                >M.A. Linguistics</option>
                <option value="M.A. Museology"
                <?php
                if($result['course']=='M.A. Museology')
                {
                    echo "selected";
                }
                ?>
                >M.A. Museology</option>
                <option value="M.A. Philosophy"
                <?php
                if($result['course']=='M.A. Philosophy')
                {
                    echo "selected";
                }
                ?>
                >M.A. Philosophy</option>
                <option value="M.A. Sanskrit"
                <?php
                if($result['course']=='M.A. Sanskrit')
                {
                    echo "selected";
                }
                ?>
                >M.A. Sanskrit</option>
                <option value="M.A. Sociology"
                <?php
                if($result['course']=='M.A. Sociology')
                {
                    echo "selected";
                }
                ?>
                >M.A. Sociology</option>
                <option value="M.A. Tribal Studies, Arts, Culture and Folk Literatures"
                <?php
                if($result['course']=='M.A. Tribal Studies, Arts, Culture and Folk Literatures')
                {
                    echo "selected";
                }
                ?>
                >M.A. Tribal Studies, Arts, Culture and Folk Literatures</option>
                <option value="M.A./M.Sc. Geography"
                <?php
                if($result['course']=='M.A./M.Sc. Geography')
                {
                    echo "selected";
                }
                ?>
                >M.A./M.Sc. Geography</option>
                <option value="M.A./M.Sc. Mathematics"
                <?php
                if($result['course']=='"M.A./M.Sc. Mathematics')
                {
                    echo "selected";
                }
                ?>
                >M.A./M.Sc. Mathematics</option>
                <option value="M.A./M.Sc. Psychology"
                <?php
                if($result['course']=='M.A./M.Sc. Psychology')
                {
                    echo "selected";
                }
                ?>
                >M.A./M.Sc. Psychology</option>
                <option value="M.Com. Commerce"
                <?php
                if($result['course']=='M.Com. Commerce')
                {
                    echo "selected";
                }
                ?>
                >M.Com. Commerce</option>
                <option value="M.Sc. Biotechnology"
                <?php
                if($result['course']=='M.Sc. Biotechnology')
                {
                    echo "selected";
                }
                ?>
                >M.Sc. Biotechnology</option>
                <option value="M.Sc. Botany"
                <?php
                if($result['course']=='M.Sc. Botany')
                {
                    echo "selected";
                }
                ?>
                >M.Sc. Botany</option>
                <option value="M.Sc. Chemistry"
                <?php
                if($result['course']=='M.Sc. Chemistry')
                {
                    echo "selected";
                }
                ?>
                >M.Sc. Chemistry</option>
                <option value="M.Sc. Environmental Science"
                <?php
                if($result['course']=='M.Sc. Environmental Science')
                {
                    echo "selected";
                }
                ?>
                >M.Sc. Environmental Science</option>
                <option value="M.Sc. Geology"
                <?php
                if($result['course']=='M.Sc. Geology')
                {
                    echo "selected";
                }
                ?>
                >M.Sc. Geology</option>
                <option value="M.Sc. Physics"
                <?php
                if($result['course']=='M.Sc. Physics')
                {
                    echo "selected";
                }
                ?>
                >M.Sc. Physics</option>
                <option value="M.Sc. Statistics"
                <?php
                if($result['course']=='M.Sc. Statistics')
                {
                    echo "selected";
                }
                ?>
                >M.Sc. Statistics</option>
                <option value="M.Sc. Zoology"
                <?php
                if($result['course']=='M.Sc. Zoology')
                {
                    echo "selected";
                }
                ?>
                >M.Sc. Zoology</option>
                <option value="MA/M.Sc. Yogic Science"
                <?php
                if($result['course']=='MA/M.Sc. Yogic Science')
                {
                    echo "selected";
                }
                ?>
                >MA/M.Sc. Yogic Science</option>
                <option value="MBA (Business Administration)"
                <?php
                if($result['course']=='MBA (Business Administration)')
                {
                    echo "selected";
                }
                ?>
                >MBA (Business Administration)</option>
                <option value="MBA (Tourism and Travel Management)"
                <?php
                if($result['course']=='MBA (Tourism and Travel Management)')
                {
                    echo "selected";
                }
                ?>
                >MBA (Tourism and Travel Management)</option>
                <option value="MCA Computer Science"
                <?php
                if($result['course']=='MCA Computer Science')
                {
                    echo "selected";
                }
                ?>
                >MCA Computer Science</option>
                <option value="M.A. Political Science"
                <?php
                if($result['course']=='M.A. Political Science')
                {
                    echo "selected";
                }
                ?>
                >M.A. Political Science</option>
                <option value="Master of Social Work (MSW)"
                <?php
                if($result['course']=='Master of Social Work (MSW)')
                {
                    echo "selected";
                }
                ?>
                >Master of Social Work (MSW)</option>
                <option value="M.A.Political Science-RCM)"
                <?php
                if($result['course']=='M.A.Political Science-RCM)')
                {
                    echo "selected";
                }
                ?>
                >(M.A.Political Science-RCM)</option>
                <option value="M.A.Sociology-RCM"
                <?php
                if($result['course']=='M.A.Sociology-RCM')
                {
                    echo "selected";
                }
                ?>
                >M.A.Sociology-RCM</option>
                <option value="M.A.Tribal  Studies-RCM"
                <?php
                if($result['course']=='M.A.Tribal  Studies-RCM')
                {
                    echo "selected";
                }
                ?>
                >M.A.Tribal  Studies-RCM</option>
                <option value="M.C.A.-RCM"
                <?php
                if($result['course']=='M.C.A.-RCM')
                {
                    echo "selected";
                }
                ?>
                >M.C.A.-RCM</option>
                <option value="Master of Social Work (MSW)-RCM"
                <?php
                if($result['course']=='Master of Social Work (MSW)-RCM')
                {
                    echo "selected";
                }
                ?>
                >Master of Social Work (MSW)-RCM</option>

                        
                <?php
            }

            if($result['program_type']=='DIPLOMA')
            {
                ?>
                	<option value="Certificate Course in Yoga"
                    <?php
                    if($result['course']=='Certificate Course in Yoga')
                    {
                        echo "selected";
                    }
                    ?>
                    >Certificate Course in Yoga</option>
                    <option value="Diploma in Pharmacy (D.Pharm)"
                    <?php
                    if($result['course']=='Diploma in Pharmacy (D.Pharm)')
                    {
                        echo "selected";
                    }
                ?>
                    >Diploma in Pharmacy (D.Pharm)</option>
                    <option value="PG DiploM.A in English Proficiency and Basic of Skills"
                    <?php
                    if($result['course']=='PG DiploM.A in English Proficiency and Basic of Skills')
                    {
                        echo "selected";
                    }
                ?>
                    >PG DiploM.A in English Proficiency and Basic of Skills</option>
                    <option value="PG Diploma in Agricultural and Forest Biotechnology"
                    <?php
                    if($result['course']=='PG Diploma in Agricultural and Forest Biotechnology')
                    {
                        echo "selected";
                    }
                ?>
                    >PG Diploma in Agricultural and Forest Biotechnology</option>
                    <option value="PG Diploma in Contrastive  Linguistics and Tribal Languages"
                    <?php
                    if($result['course']=='PG Diploma in Contrastive  Linguistics and Tribal Languages')
                    {
                        echo "selected";
                    }
                ?>
                    >PG Diploma in Contrastive  Linguistics and Tribal Languages</option>
                    <option value="PG Diploma in Museology"
                    <?php
                    if($result['course']=='PG Diploma in Museology')
                    {
                        echo "selected";
                    }
                ?>
                    >PG Diploma in Museology</option>
                    <option value="PG Diploma in Translation Studies : Theory and Function"
                    <?php
                    if($result['course']=='PG Diploma in Translation Studies : Theory and Function')
                    {
                        echo "selected";
                    }
                ?>
                    >PG Diploma in Translation Studies : Theory and Function</option>
                    <option value="PG Diploma in Yoga"
                    <?php
                    if($result['course']=='PG Diploma in Yoga')
                    {
                        echo "selected";
                    }
                    ?>
                    >PG Diploma in Yoga</option>

                <?php
            }
            
            ?>   
            </select>
            </div>

            <div class="input-field">
            <label>Semester</label>
             <select class="selectbox" name="semester" value="<?php echo $result['semester'];?>" required>
                <option value="">Select Semester</option>
                <option value="1"
                <?php
                if($result['semester']=='1')
                {
                    echo "selected";
                }
                ?>
                >1</option>
                <option value="2"
                <?php
                if($result['semester']=='2')
                {
                    echo "selected";
                }
                ?>
                >2</option>
                <option value="3"
                <?php
                if($result['semester']=='3')
                {
                    echo "selected";
                }
                ?>
                >3</option>
                <option value="4"
                <?php
                if($result['semester']=='4')
                {
                    echo "selected";
                }
                ?>
                >4</option>
                <option value="5"
                <?php
                if($result['semester']=='5')
                {
                    echo "selected";
                }
                ?>
                >5</option>
                <option value="6"
                <?php
                if($result['semester']=='6')
                {
                    echo "selected";
                }
                ?>
                >6</option>
                <option value="7"
                <?php
                if($result['semester']=='7')
                {
                    echo "selected";
                }
                ?>
                >7</option>
                <option value="8"
                <?php
                if($result['semester']=='8')
                {
                    echo "selected";
                }
                ?>
                >8</option>
                <option value="9"
                <?php
                if($result['semester']=='9')
                {
                    echo "selected";
                }
                ?>
                >9</option>
                <option value="10"
                <?php
                if($result['semester']=='10')
                {
                    echo "selected";
                }
                ?>
                >10</option>

            </select>   
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
include('./connect.php');
if(isset($_POST['submit']))
{
   
    $newroom =$_POST['room_no'];

    // echo "New room No.".$newroom;
    // echo "<br>";
    // echo "old room No.".$roomno;
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
    $email =$_POST['email'];
    $password =$_POST['password'];
    $mob =$_POST['phone'];

    $emergency_no =$_POST['emgno'];
    $guardian_name =$_POST['guardian_name'];
    $guardian_rel =$_POST['guardian_rel'];
    $guardian_no =$_POST['guardian_no'];
    
    $address =$_POST['address'];
    $city =$_POST['city'];
    $state =$_POST['state'];
    $pincode =$_POST['pincode'];
    $distance =$_POST['distance'];

    if($newroom != "" && $regno != "")
    {
        // student registration
        $query1="UPDATE studentregistration set program_type='$programtype',course='$course',semester='$semester',name='$sname',fname='$fname',dob='$dob',category='$category',religion='$religion',blood_group='$blood',contact_no='$mob',email_id='$email',emergency_no='$emergency_no',guardian_name='$guardian_name',guardian_relation='$guardian_rel',guardian_contact_no='$guardian_no',address='$address',city='$city',state='$state',pincode='$pincode',distance='$distance' where registration_no='$regno'";
        
        $result1=mysqli_query($conn,$query1);

        
        // update user details
        $query2="UPDATE userdetails  set sname='$sname',email='$email',password='$password' where id='$regno'";

        $result2=mysqli_query($conn,$query2);

        // update rooms details

        $query="select * from rooms where room_no='$newroom'";
        $result=mysqli_query($conn,$query);
        $total=mysqli_num_rows($result);

        $sql="select * from rooms where room_no='$roomno'";
        $res=mysqli_query($conn,$sql);

        if($total==1)
        {
            if($newroom!=$roomno)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    $allot=$row['allot_seat'];
                    $empty=$row['empty_seat'];
                    $seater=$row['seater'];
                    if($empty>=1 && $allot<=$seater)
                    {
                        $sql="UPDATE studentregistration set room_no='$newroom',stay_from='$stayfrom',duration='$duration' where registration_no='$regno'";
                        mysqli_query($conn,$sql);  

                        //update new room details
                        $query="UPDATE rooms set allot_seat=$allot+1,empty_seat=$empty-1,allot_status='Yes' where room_no='$newroom'";
                        mysqli_query($conn,$query);

                        // update old room details
                        while($row1=mysqli_fetch_assoc($res))
                        {
                            $allot1=$row1['allot_seat'];
                            $empty1=$row1['empty_seat'];
                            $seater1=$row1['seater'];

                            if($allot1==1)
                            {
                                $query="UPDATE rooms set allot_seat='0',empty_seat='$seater1',allot_status='No' where room_no='$roomno'";
                                mysqli_query($conn,$query);
                            }
                            else
                            {
                                $query1="UPDATE rooms set allot_seat=$allot1-1,empty_seat=$empty1+1 where room_no='$roomno'";
                                mysqli_query($conn,$query1); 
                            }
 
                        }
                    }
                    else
                    {
                    echo "<script>alert('This Room Is  Not Empty');</script>";
                    }
                }
            }  
        }
        else
        {
            echo "<script>alert('Room Number Not Exists');</script>";
        }
        while($row=mysqli_fetch_assoc($result))
        {
            $empty=$row['empty_seat'];
        }
  
        if($result1==1 && $result2==1 && $empty>=1)
        {
            echo "<script>alert('Profile Updated Successfully');</script>";
             ?>
             <meta http-equiv = "refresh" content = "0; url =http://localhost:8080/universityhostel/includes/managestudent.php" />
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
<?php include('./adminfooter.php');?>



    