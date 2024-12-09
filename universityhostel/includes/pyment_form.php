<?php include('./header.php');?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/payment_style.css">
    <title>Payment Form</title>
</head>

<body>


    <div class="box">
        <form action="#" method="post">

            <div class="row">
                <div class="col">
                    <h3 class="title">Online Hostel Fee Payment</h3>

                    <h4 style="color:blue">Personal Details </h4>
                    <div class="inputbox">
                        <span>Enrollment Number :</span>
                        <input type="text"  name="enrollment" id="enrollment" placeholder="Enter Enrollment No." required>
                    </div>

                    <div class="inputbox">
                        <span>Course Type</span>

                        <select class="input1" name="select1"  id="select1" onchange="populate(this.id,'select2')" required>
                            <option value="">Select Program</option>
                            <option value="DIPLOMA">Diploma</option>
                            <option value="UG">UG</option>
                            <option value="PG">PG</option>
                        </select>
                    </div>

                    <div class="inputbox">

                        <span>Course Name :</span>
                        <select class="input1" name="select2" id="select2" required>
                        </select>

                    </div>

                    <div class="inputbox">
                        <span>Semester :</span>
                        <select class="input1" name="semester" id="semester"  required>
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

                    <div class="inputbox">
                        <span>Category:</span>
                        <select class="input1"  name="category" id="category" required>
                            <option value="">Select Category</option>
                            <option value="General">General</option>
                            <option value="OBC">OBC</option>
                            <option value="SC">SC</option>
                            <option value="ST">ST</option>
                            <option value="EWS">EWS</option>
                            <option value="TRANSGENDER">TRANSGENDER</option>
                        </select>
                    </div>

                    <div class="inputbox">
                        <span>Student Type :</span>
                        <select class="input1" name="student_type" id="student_type" onchange="Studenttype(this.id,'category','amt')" required>
                            <option value="">Select </option>
                            <option value="NEW">NEW</option>
                            <option value="OLD">OLD</option>
                        </select>
                    </div>


                    <div class="inputbox">
                        <span>Mobile No. :</span>
                        <input type="text" name="mobile" id="mobile" placeholder="Enter mobile Number :" required>
                    </div>

                    <div class="inputbox">
                        <span>Address:</span>
                        <input type="text" name="address" id="address" placeholder="Enter Address" required>

                    </div>

                    <div class="inputbox">
                        <span>State :</span>
                        <select class="input1" name="state" id="state" required>
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

                    
                    <div style="margin-bottom:20px" class="inputbox">
                        <span>Zip Code:</span>
                        <input type="text" name="zip" id="zip" placeholder="Enter Zip Code" required>

                    </div>

                </div>
                <div class="col">

                    <div style="margin-top:90px" class="inputbox">
                        <span>Name OF Student :</span>
                        <input type="text" name="name" id="name" placeholder="Enter Name" required>
                    </div>

                    <div style="margin-top:1px" class="inputbox">
                        <span>Father Name :</span>
                        <input type="text" name="fname" id="fname" placeholder="Enter Father Name" required>
                    </div>

                    
                    <div class="inputbox">
                        <span>Year's :</span>
                        <select class="input1" name="year" id="year"  required>
                            <option value="">Select Year</option>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                            <option value="5th Year">5th Year</option>


                        </select>



                    <div class="inputbox">
                        <span>Date Of Birth :</span>
                        <input type="date" name="dob" id="dob" required>
                    </div>

                    <div class="inputbox">
                        <span>Gender :</span>
                        <select class="input1" name="gender" id="gender" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="inputbox">
                        <span>Physicallly Disabled Person :</span>
                        <select class="input1" name="physical_dis" id="physical_dis" required>
                            <option value="">Select </option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>

                    <div class="inputbox">
                        <span>Total payable Fee Amount Rs. :</span>
                        <select class="input1" id="amt" name="amt" readonly="true"> </select>

                    </div>

                    <div style="margin-top:1px" class="inputbox">
                        <span>Email Id :</span>
                        <input type="email" id="email" name="email" placeholder="Enter Email ID :" required>
                    </div>

                    <div class="inputbox">
                        <span>City:</span>
                        <input type="text" id="city" name="city" placeholder="Enter City Name :" required>

                    </div>



                </div>
            </div>

            <input type="button" id="btn" name="btn" class="next_btn" value="Pay Now" onclick="pay_now()">

        </form>
    </div>
    <script>
        function Studenttype(s3, s4, s5) {
            var s3 = document.getElementById(s3);
            var s4 = document.getElementById(s4);
            var s5 = document.getElementById(s5);

            s5.innerHTML = "";

            if (s3.value == "NEW" && s4.value == "General") {
                var optionArray = ['3250|3250'];
            } else if (s3.value == "NEW" && s4.value == "EWS") {
                var optionArray = ['3250|3250'];
            } else if (s3.value == "NEW" && s4.value == "OBC") {
                var optionArray = ['3250|3250'];
            } else if (s3.value == "NEW" && s4.value == "TRANSGENDER") {
                var optionArray = ['3250|3250'];
            } else if (s3.value == "OLD" && s4.value == "General") {
                var optionArray = ['2750|2750'];
            } else if (s3.value == "OLD" && s4.value == "EWS") {
                var optionArray = ['2750|2750'];
            } else if (s3.value == "OLD" && s4.value == "OBC") {
                var optionArray = ['2750|2750'];
            } else if (s3.value == "OLD" && s4.value == "TRANSGENDER") {
                var optionArray = ['2750|2750'];
            } else if (s3.value == "NEW" || s3.value == "OLD" && s4.value == "ST" || s4.value == "SC") {
                var optionArray = ['500|500'];
            }
            for (var option in optionArray) {
                var pair = optionArray[option].split("|");
                var newoption = document.createElement("option");

                newoption.value = pair[0];
                newoption.innerHTML = pair[1];
                s5.options.add(newoption);
            }
        }
    </script>

    <script>
        function populate(s1, s2) {
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);

            s2.innerHTML = "";

            if (s1.value == "UG") {
                var optionArray = [
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

            } else if (s1.value == "PG") {
                var optionArray = [
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
                    'Master of Social Work (MSW)-RCM|Master of Social Work (MSW)-RCM'
                ];
            } else if (s1.value == "DIPLOMA") {
                var optionArray = [
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

            for (var option in optionArray) {
                var pair = optionArray[option].split("|");
                var newoption = document.createElement("option");

                newoption.value = pair[0];
                newoption.innerHTML = pair[1];
                s2.options.add(newoption);
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
        function pay_now() {
            var amt = jQuery('#amt').val();
            var name = jQuery('#name').val();
            var enroll = jQuery('#enrollment').val();
            var course_type = jQuery('#select1').val();
            var course_name = jQuery('#select2').val();
            var semester = jQuery('#semester').val();
            var category = jQuery('#category').val();
            var student_type = jQuery('#student_type').val();
            var mobile = jQuery('#mobile').val();
            var address = jQuery('#address').val();
            var fname = jQuery('#fname').val();
            var dob = jQuery('#dob').val();
            var gender = jQuery('#gender').val();
            var physical = jQuery('#physical_dis').val();
            var email = jQuery('#email').val();
            var city = jQuery('#city').val();
            var state = jQuery('#state').val();
            var zip = jQuery('#zip').val();
            var year = jQuery('#year').val();

            jQuery.ajax({
                type: 'post',
                url: 'payment_process.php',
                data: "amt=" + amt + "&name=" + name +"&enroll=" + enroll+"&course_type="+course_type+"&course_name="+course_name+"&semester="+semester+"&category="+category+"&student_type="+student_type+"&mobile="+mobile+"&address="+address+"&fname="+fname+"&dob="+dob+"&gender="+gender+"&physical="+physical+"&email="+email+"&city="+city+"&state="+state+"&zip="+zip+"&year="+year,

                success: function(result) {
                
                    var options = {
                        "key": "rzp_test_eTpcUPwLzCbf2q", // test =  rzp_test_eTpcUPwLzCbf2q
                                                          // live =  rzp_live_AXzVf7LkGxfDLp
                        "amount": amt * 100,
                        "currency": "INR",
                        "name": "Guru Govind  Boy's Hostel",
                        "description ": "Test Transaction",
                        "image": "https://www.ecommerce-nation.com/wp-content/uploads/2019/02/razorpay.webp",

                        "handler": function(response) {
                        
                            jQuery.ajax({
                                type: 'post',
                                url: 'payment_process.php',
                                
                                data: 'payment_id='+response.razorpay_payment_id,

                                success: function(result) {
                                    window.location.href = "../report-generate/viewfeereceipt.php?payment_id="+response.razorpay_payment_id;
                                    
                                }
                            });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
                }
            });
        }
    </script>
</body>

</html>
<?php include('./footer.php'); ?>