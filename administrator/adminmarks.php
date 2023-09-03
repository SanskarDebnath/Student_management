<?php
include '../connection.php';

if(isset($_POST['student_id']) && isset($_POST['submit'])) {
    $student_id = $_POST['student_id'];
    $student_sem=$_POST['semester'];
    $subjects = array();
    $marks = array();
    echo $student_id;

    // Extract the subjects and marks from the submitted form data
    foreach ($_POST as $key => $value) {
        if (strpos($key, '_marks') !== false) {
            $subject_name = str_replace('_marks', '', $key);
            $subjects[] = $subject_name;
            $marks[] = $value;
        }
    }

    // Prepare the query to insert marks into the database
    $sql = "INSERT INTO marks (student_id, subject_name, marks_obtained,semester) VALUES ";
    $values = array();
    for ($i = 0; $i < count($subjects); $i++) {
        $values[] = "('$student_id', '" . $subjects[$i] . "', '" . $marks[$i] . "', '$student_sem')";

    }
    $sql .= implode(',', $values);

    // Execute the query
    if ($connection->query($sql) === TRUE) {
        header("Location:option.php");
    } else {
       // echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
?>
