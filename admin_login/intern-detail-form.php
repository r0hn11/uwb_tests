<?php
    session_start();
    if(!isset($_SESSION['aname'])){
        header('location: admin-login.html');
    }
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Intern Data Upload Form</title>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="../common_images/favicon.png">
<link rel="stylesheet" href="intern-detail-form.css">

<body>
    <!-- logo -->
    <div id="top" class="flex">
        <div><img src="images/logo.png" class="img" alt="Site Logo" /></div>
        <div id="dscr">United Well-Being Fo.</div>
    </div>
    <!-- logout button -->
    <div class="navigation">
        <a class="button" href="admin-logout.php">
            <img src="images/logout.png">
            <div class="logout">LOGOUT</div>
        </a>
    </div>
    <form id="regForm" action="intern-details.php" method="post">
        <h1>Intern Data Upload Form :</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">Name :
            <p><input placeholder="First name..." oninput="this.className = ''" id='fname' name="fname"></p>
            <p><input placeholder="Last name..." oninput="this.className = ''" id='lname' name="lname"></p>
        </div>
        <div class="tab">Contact Info :
            <p><input placeholder="E-mail..." oninput="this.className = ''" id='email' name="email"></p>
            <p><input placeholder="Phone..." oninput="this.className = ''" id='pnumber' name="phone" maxlength="10"></p>
            <p><input placeholder="Whats App Number..." oninput="this.className = ''" id='wnumber' name="wnumber"></p>
        </div>
        <div class="tab">Date Of Birth :
            <p><input placeholder="dd" oninput="this.className = ''" id='dob_d' name="dobdd"></p>
            <p><input placeholder="mm" oninput="this.className = ''" id='dob_m' name="dobnn"></p>
            <p><input placeholder="yyyy" oninput="this.className = ''" id='dob_y' name="dobyyyy"></p>
        </div>
        <div class="tab">Qualification & Identification Number :
            <p><input placeholder="Highest Qualification" oninput="this.className = ''" id='qual' name="qualification"></p>
            <p><input placeholder="Identification Number" oninput="this.className = ''" id='id_num' name="id_number"></p>
        </div>
        <div class="tab">Id Proof :
            <select id='dropdown' name="idtype" required>
        <option selected value="0">Select ID Type</option>
        <option value='Aadhar_Card'>Aadhar Card</option>
        <option value='Driving_License'>Driving License</option>
        <option value='Pan_Card'>Pan Card</option>
        <option value='Voter_Card'>Voter Card</option>
        <option value='Passport'>Passport</option>
      </select>
            <!-- <p><input placeholder="Enter ID Type (Aadhar,Pan,DL,etc)" oninput="this.className = ''" id='id_type' name="idproof"></p> -->
            <p><input placeholder="Enter ID Number" oninput="this.className = ''" id='id_proof' name="idproof"></p>
        </div>
        <div class="tab">Department & Position :
            <!-- <p><input placeholder="Enter Department" oninput="this.className = ''" id='dep' name="dep"></p> -->
            <select id='dropdown_dep' name="dept" required>
        <option selected value="0">Select Department</option>
        <option value='Psychologist'>Psychologist</option>
        <option value='Counsellors'>Counsellors</option>
        <option value='Content_Writer'>Content Writer</option>
        <option value='Graphic_Designer'>Graphic Designer</option>
        <option value='Video_Editor'>Video Editor</option>
        <option value='Social_Media_Marketing'>Social Media Marketing</option>
        <option value='Digital_Marketing'>Digital Marketing</option>
        <option value='Market_Research'>Market Research</option>
        <option value='Front-End'>Front-End</option>
        <option value='Back-End'>Back-End</option>
        <option value='UI/UX_Design'>UI/UX Design</option>
        <option value='Event_Management'>Event Management</option>
        <option value='Campus_Ambassador'>Campus Ambassador</option>
        <option value='Business_Development'>Business Development</option>
        <option value='HR'>HR</option>
      </select>
            <p><input placeholder="Enter Position" oninput="this.className = ''" id='pos' name="position"></p>
        </div>
        <div class="tab">City Of Residence :
            <p><input placeholder="Enter City" oninput="this.className = ''" id='city' name="residence"></p>
        </div>
        <div class="tab">Date Of Joining :
            <p><input placeholder="dd" oninput="this.className = ''" name="dojdd" id='dob_jd'></p>
            <p><input placeholder="mm" oninput="this.className = ''" name="dojnn" id='dob_jm'></p>
            <p><input placeholder="yyyy" oninput="this.className = ''" name="dojyyyy" id='dob_jy'></p>
        </div>
        <div class="tab">Tenure Of Internship:
            <p><input placeholder="Enter Tenure (in Months)" oninput="this.className = ''" id='tenure' name="tenure"></p>
        </div>
        <div class="tab">End Date Of Internship :
            <p><input placeholder="dd" oninput="this.className = ''" name="enddd" id='dob_ed'></p>
            <p><input placeholder="mm" oninput="this.className = ''" name="endnn" id='dob_em'></p>
            <p><input placeholder="yyyy" oninput="this.className = ''" name="endyyyy" id='dob_ey'></p>
        </div>
        <!-- <div class="tab">Documents Uploaded To Drive? :
      <p><input type='radio' oninput="this.className = ''" name="answer">Yes</p>
      <p><input type='radio' oninput="this.className = ''" name="answer">No</p>
    </div> -->
        <div class="tab">Certificate ID :
            <p><input placeholder="Enter Certificate Id..." oninput="this.className = ''" id='cid' name="cid"></p>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <!-- <span class="step"></span> -->
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>
</body>
<script src="intern-detail-form.js"></script>

</html>