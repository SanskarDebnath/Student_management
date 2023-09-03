<?php
include '../connection.php';
require '../globalindex.php';
session_start();
$usrid = 0;
if (isset($_GET['id'])) {
    $usrid = (int)$_GET['id'];
}
$sql = "select * from student where sid=" . $usrid;
$result = $connection->query($sql);
$sname = '';
$smail = '';
$sbranch = '';
$scourse = '';
$surn = '';
$s_session = 0;
if ($result->num_rows == 1) { 
    while ($row = $result->fetch_object()) {
        $sname = $row->name;   
        $semail = $row->email; 
        $sbranch = $row->branch; 
        $scourse = $row->course; 
        $surn = $row->urn;
        $s_session = $row->acc_session;
    }
    $result->close();
} else {
    echo "<script>alert('user does not exist. Please try again')</script>";
    header("location:insertor.php");
    die();
}

$connection->close();
?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="iit.css">
    <style>
        table,
        th,
        td {
            border: 1px solid #96D4D4;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <style>
        
    </style>
    </head>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="insertor.php">Home</a>
        <a href="option.php">Marks Entry</a>
        <a href="logout.php">Log out</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU</span>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <!-- navbar -->
    <br>
    <br><br>
    <center>
        <form action="adminserver.php?admin=3" method="POST" style="width:90%" ;>
            <div class="input-group">
                <span class="input-group-text">Name</span>
                <input type="text"name="updname" class="form-control" value="<?php echo "$sname"; ?>">
            </div><br>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon3">Email</span>
                <input type="email" class="form-control" id="basic-url" name="updemail" value="<?php echo "$semail"; ?>" aria-describedby="basic-addon3 basic-addon4" >
            </div><br>
            <div class="input-group">
                <span class="input-group-text">University Roll Number</span>
                <input type="text" value="<?php echo "$surn"; ?>" name="updurn" class="form-control">
            </div><br>
            <div class="input-group mb-3">
                <select class="form-select" id="inputGroupSelect02" name="updbranch">
                    <option selected><?php echo $sbranch; ?></option>
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
                <label class="input-group-text" for="inputGroupSelect02">Select Branch</label>
            </div><br>
            <div class="input-group mb-3">
                <select class="form-select" id="inputGroupSelect02" name="updcourse">
                    <option selected><?php echo $scourse; ?></option>
                    <option value="BACHELOR IN TECHNOLOGY">B.TECH</option>
                    <option value="DIPLOMA ENGINEERING">DIPLOMA</option>
                    <option value="MASTER IN ENGINEERING">M.TECH</option>
                </select>
                <label class="input-group-text" for="inputGroupSelect02">Select Course</label>
            </div><br>
            <div class="input-group mb-3">
                <select class="form-select" id="inputGroupSelect02" name="updsession">
                    <option selected><?php echo $s_session; ?></option>
                    <option value="20-24">2020-2024</option>
                    <option value="21-25">2021-2025</option>
                    <option value="22-26">2022-2026</option>
                    <option value="23-27">2023-2027</option>
                    <option value="24-28">2024-2028</option>
                    <option value="25-29">2025-2029</option>
                    <option value="26-30">2026-2030</option>
                    <option value="27-31">2027-2031</option>
                </select>
                <label class="input-group-text" for="inputGroupSelect02">Select Academic Session</label>
            </div><br>
            <input type="submit" name="btnedit" id="btnedit" value="Update User" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 2px; cursor: pointer;">
            <input type="hidden" name="hdnuid" id="hdnuid" value="<?php echo $usrid; ?>" />
        </form>
    </center>
</body>
</html>