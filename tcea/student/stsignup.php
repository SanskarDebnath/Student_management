<?php
include "../connection.php";
require "../mobile.php";
?>
<html>
<head>
<style>
body {
  background-color: azure;
}
#important {
  background-color: #cfcfcf;
  border-radius: 10px;
  padding: 20px;
}

#important label {
  font-weight: bold;
}

#important input,
#important select {
  width: 100%;
  padding: 10px;
  margin: 5px 0;
  border: none;
  border-radius: 5px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}
#null {
  opacity: 10;
  transition: opacity 0.0s ease;
  background-color: #ececec;
  border-radius: 10px;
  padding: 20px;
}

#null label {
  font-weight: bold;
}

#null input,
#null select {
  width: 100%;
  padding: 10px;
  margin: 5px 0;
  border: none;
  border-radius: 5px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}
option {
    text-transform: uppercase;
  }

.submit {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.submit:hover {
  background-color: #3e8e41;
}

.form:hover #null {
  opacity: 1;
}

.form input,
.form select {
  transition: box-shadow 0.3s ease;
}

.form input:focus,
.form select:focus {
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.3);
}


</style>
</head>
<body>
  <form action="studentserver.php?mn=1" method="POSt" class="form">
    <div class="important" id="important">
    <center><label for="name">Student<b> Academic Details</b></label><br><br></center>
      <label for="name">Enter Your Full Name<b>Name</b></label>
      <br>
      <input type="text" name="studentname" id="studentname" class="name" required>
      <br><br>
      <label for="studentid">Enter your <b>Student ID</b></label>
      <br>
      <input type="text" name="studentid" id="studentid" class="name" required>
      <br><br>
      <label for="university">Enter Your <b>University roll number</b></label>
      <br>
      <input type="text" name="university" id="university" class="name" required>
      <br><br>
      <label for="registration number">Enter your <b>Registration number</b></label>
      <br>
      <input type="text" name="rn" id="rn" class="name" placeholder="eg. 020777 of 2021-2022" required>
      <br><br>
      <label for="email">Enter your <b>Email</b></label>
      <br>
      <input type="email" name="email" id="email" class="name" required>
      <br><br>
      <label for="branch">Choose your branch</label>
      <br>
      <select name="branch" id="branch" class="branch" required>
        <option value="">--Please Select Your Branch--</option>
        <option value="COMPUTER SCIENCE AND ENGINEERING">COMPUTER SCIENCE AND ENGINEERING</option>
        <option value="ELECTRICAL AND COMPUTER ENGINEERING">ELECTRICAL AND COMPUTER ENGINEERING</option>
        <option value="MECHANICAL ENGINEERING">MECHANICAL ENGINEERING</option>
        <option value="CIVIL ENGINEERING">CIVIL ENGINEERING</option>
        <option value="ELECTRICAL ENGINEERING">ELECTRICAL ENGINEERING</option>
        <option value="ARTIFICIAL INTELLIGENCE AND DATA SCIENCE">ARTIFICIAL INTELLIGENCE AND DATA SCIENCE</option>
        <option value="ADVANCED MECHATRONICS AND INDUSTRIAL AUTOMATION">ADVANCED MECHATRONICS AND INDUSTRIAL AUTOMATION</option>
        <option value="CIVILE ENGINEERING WITH COMPUTER APPLICATION">CIVILE ENGINEERING WITH COMPUTER APPLICATION</option>
        <option value="ELECTRONICS AND COMMUNICATION ENGINEERING">ELECTRONICS AND COMMUNICATION ENGINEERING</option>
        <option value="Diploma in Civil Engineering (Construction Technology)">Diploma in Civil Engineering (Construction Technology)</option>
        <option value="Diploma in Computer Science & Engineering">Diploma in Computer Science & Engineering</option>
        <option value="Diploma in Computer Science & Engineering (Artificial Intelligence)">Diploma in Computer Science & Engineering (Artificial Intelligence)</option>
        <option value="Diploma in Cloud Computing and Big Data">Diploma in Cloud Computing and Big Data</option>
        <option value="Diploma in Electronics and Communication Engineering">Diploma in Electronics and Communication Engineering</option>
        <option value="Diploma in Electrical Engineering">Diploma in Electrical Engineering</option>
        <option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option>
      </select>
      <br>
      
    </div>
    <br><br>
    <div class="null" id="null">
    <center><label for="name">Student<b> Personal Details</b></label><br><br></center>
      <label for="dob">Enter Your <b>Date OF birth</b></label>
      <br>
      <input type="date" name="dob" id="dob" class="dob">
      <br>
      <label for="gender">Choose Your <b>Gender</b></label>
      <br>
      <select name="gender" id="gender" class="gender">
        <option value="">--Please select--</option>
        <option value="Male">MALE</option>
        <option value="Female">FEMALE</option>
      </select>
      <br>
      <label for="address">Enter Your <b>Permanent Address</b></label>
      <br>
      <input type="text" name="address" id="address" class="address">
      <br><br>
      <label for="mobile">Enter Your <b>Contact number</b></label>
      <br>
      <input type="number" name="number" id="number" class="number">
      <br><br>
      <label for="course">Choose Your <b>Current Course</b></label>
      <br>
      <select name="course" id="course" class="course">
        <option value="">--Please select--</option>
        <option value="BACHELOR IN TECHNOLOGY">B.TECH</option>
        <option value="DIPLOMA ENGINEERING">DIPLOMA</option>
      </select>
      <br><br>
      <label for="course">Choose Your <b> Academic Session</b></label>
      <select name="as" id="course" class="course" required>
        <option value="">--Please select Your Accademic Sessions--</option>
        <option value="20-24">2020-2024</option>
        <option value="21-25">2021-2025</option>
        <option value="22-26">2022-2026</option>
        <option value="23-27">2023-2027</option>
        <option value="24-28">2024-2028</option>
        <option value="25-29">2025-2029</option>
        <option value="26-30">2026-2030</option>
        <option value="27-31">2027-2031</option>
      </select>
    </div>
    <br><br>
    <center>
      <input type="submit" id="btnsignup" name="btnsignup" value="Submit" class="submit">
    </center>
  </form>
</body>


</html>