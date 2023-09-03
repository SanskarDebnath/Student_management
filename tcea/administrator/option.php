<?php
include "../mobile.php";
?>

<!DOCTYPE html>
<html>
<head>
  



    
<title>Select Subjects</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function get_subjects() {
            var branch = $('#branch').val();
            var semester = $('#semester').val();
            if (branch != '' && semester != '') {
                $.ajax({
                    url: 'get_subjects.php',
                    type: 'post',
                    data: {branch: branch, semester: semester},
                    success: function(response) {
                        var subjects = JSON.parse(response);
                        var html = '';
                        if (subjects.length > 0) {
                            html += '<form method="post" action="adminmarks.php" id="dj">';
                            html += '<input type="hidden" name="student_id" value="' + $('#student-id').val() + '">';
                            html += '<input type="hidden" name="semester" value="' + semester + '">';
                            for (var i = 0; i < subjects.length; i++) {
                                html += '<div class="subject">';
                                html += '<label for="' + subjects[i] + '">' + subjects[i] + ':</label>';
                                //html += '<input type="text" id="' + subjects[i] + '" name="' + subjects[i] + '">';
                                html += '<br><label for="' + subjects[i] + '-marks">Marks:</label>';
                                html += '<input type="text" id="' + subjects[i] + '-marks" name="' + subjects[i] + '_marks">';
                                html += '</div>';
                            }
                            html += '<center><input type="submit" value="Submit" name="submit"></center>';
                            html += '</form>';
                        } else {
                            html = '<p>No subjects found for selected branch and semester.</p>';
                        }
                        $('#subject-list').html(html);
                    }
                });
            } else {
                $('#subject-list').html('');
            }
        }
    </script>
</head>
<body>

<label for="loop">Eneter the Student ID</label><br>
 <input type="text" id="student-id" name="student-id">
<br>

<h3>Select Branch and Semester:</h3>
<label for="branch">Branch:</label>
<select id="branch" name="branch" required onchange="get_subjects()">
    <option value="">--Select a Branch--</option>
    <option value="Computer Science">Computer Science</option>
    <option value="Electronics and Communication">Electronics and Communication</option>
    <option value="Civil Engineering">Civil Engineering</option>
    <option value="Mechanical Engineering">Mechanical Engineering</option>
    <option value="Electrical Engineering">Electrical Engineering</option>
</select>
<br>
<label for="semester">Semester:</label>
<select id="semester" name="semester" required onchange="get_subjects()">
    <option value="">--Select a Semester--</option>
    <option value="1">1st Semester</option>
    <option value="2">2nd Semester</option>
    <option value="3">3rd Semester</option>
    <option value="4">4th Semester</option>
    <option value="5">5th Semester</option>
    <option value="6">6th Semester</option>
    <option value="7">7th Semester</option>
    <option value="8">8th Semester</option>
</select>
<br>
<div id="subject-list"></div>


<style>
body {
    width: 90%;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

#container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h3 {
    font-size: 1.2rem;
    margin-top: 1.5rem;
}

label {
    font-size: 1rem;
    font-weight: bold;
    margin-right: 1rem;
}

select, input[type="text"] {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border-radius: 0.5rem;
    border: 1px solid #ccc;
}
input[type="submit"] {
  background-color: green;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: darkgreen;
}


.subject {
    margin-bottom: 1rem;
}

.subject label {
    display: inline-block;
    width: 30%;
    margin-right: 1rem;
    text-align: right;
}

.subject input[type="text"] {
    width: 60%;
}

#subject-list p {
    font-size: 1rem;
    color: red;
    margin-bottom: 1rem;
}

</style>


</body>
</html>
