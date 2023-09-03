<?php
require "../connection.php";
require "../globalindex.php";
$usrid = 0;
    if(isset($_GET['id'])){
        $usrid = (int)$_GET['id'];
    }
    $stname = '';
    if(isset($_GET['name'])){
         $stname = $_GET['name'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Details</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
body {
  background-color: #F0F0F0;
}

#red {
  background-color: #51C2CC;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
}
#blue {
  background-color: lavender;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
}

h2 {
  margin-top: 20px;
  margin-bottom: 10px;
}

form {
  background-color: #FFF;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
input[type="text"],
select {
  background-color: #FFFFFF;
  border: 1px solid #CCCCCC;
  border-radius: 10px;
  padding: 8px;
  margin-bottom: 10px;
  font-size: 16px;
  width: 100%;
}
input[type="text"]:focus,
select:focus {
  outline: none;
  border: 1px solid #51C2CC;
  box-shadow: 0 0 5px #51C2CC;
}
#university {
  margin-bottom: 20px;
  width: 70%;
}
#upload {
background-color: #51C2CC;
color: #FFFFFF;
border: none;
padding: 10px 20px;
border-radius: 5px;
cursor: pointer;
}

#upload:hover {
background-color: #3A9BAF;
}

        </style>
    </head>
    <body>
<div id="red">
<form action="adminserver.php?admin=5" method="post" id="red-details">
<h2>student Name is : </h2>
<input type="text" class="form-control" id="floatingInputDisabled" name="stname" value="<?php echo $stname;?>" readonly>

<br>
<h2>Student id is : </h2>
<input type="text" class="form-control" id="floatingInputDisabled" name="stdid" value="<?php echo $usrid;?>" readonly>

</div><br>
<h2>Select University</h2>
<select id="university" name="university">
    <option value="">--Select the University--</option>
    <option value="TECHNO INDIA UNIVERSITY">TECHNO INDIA UNIVERSITY</option>
    <option value="TRIPURA UNIVERSITY">TRIPURA UNIVERSITY</option>
</select>
<br>
<div id="blue">
    <h5>Enter the semester Marks</h5><br>
<input type="text" name="semseter1" id="semmarks" placeholder="Enter SGPA for semester 1">
<br>
<input type="text" name="semseter2" id="semmarks" placeholder="Enter SGPA for semester 2">
<br>
<input type="text" name="semseter3" id="semmarks" placeholder="Enter SGPA for semester 3">
<br>
<input type="text" name="semseter4" id="semmarks" placeholder="Enter SGPA for semester 4">
<br>
<input type="text" name="semseter5" id="semmarks" placeholder="Enter SGPA for semester 5">
<br>
<input type="text" name="semseter6" id="semmarks" placeholder="Enter SGPA for semester 6">
<br>
<input type="text" name="semseter7" id="semmarks" placeholder="Enter SGPA for semester 7">
<br>
<input type="text" name="semseter8" id="semmarks" placeholder="Enter SGPA for semester 8">


<br>
<h5>Training 1 Name and details</h5>
<input type="text" name="training1" id="achievments" placeholder="Web development">
<input type="text" name="training1details" id="achievments" placeholder="training details like place, semester, year etc">
<br>
<h5>Training 2 Name and details</h5>
<input type="text" name="trainning2" id="achievments" placeholder="App development">
<input type="text" name="training2details" id="achievments" placeholder="training details like place, semester, year etc">
<br><br>
<h5>Minor-Project Name</h5>
<input type="text" name="minprojectname" id="achievments" placeholder="eg. Notes & Password manager"><br>
<h5>Minor Project Details</h5>
<input type="text" name="minprojectdetails" id="achievments" placeholder="Submit Project Details eg. date, time, place"><br><br>

<h5>Mega Project Name</h5>
<input type="text" name="megprojectname" id="achievments" placeholder="Domains. OpenCV. Arduino+Python">
<h5>Mega Project details</h5>
<input type="text" name="megprojectdetails" id="achievments" placeholder="Submit Project Details eg. date, time, place">
<br>






<center>
<input type="submit" value="Submit" name="btnupload" id="upload">
</center>
</div>
</form>
</div>
</body>
</html>