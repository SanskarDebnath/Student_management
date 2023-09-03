
<?php
include "../connection.php";

if(isset($_POST["branch"]) && isset($_POST["semester"])){
  $branch = mysqli_real_escape_string($connection, $_POST["branch"]);
  $semester = mysqli_real_escape_string($connection, $_POST["semester"]);

  $sql = "SELECT subject_name FROM subjects WHERE branch='$branch' AND semester='$semester'";
  $result = mysqli_query($connection, $sql);
  if (!$result) {
    die('Error executing query: ' . mysqli_error($connection));
  }
  if (mysqli_num_rows($result) > 0) {
    $subjects = array();
    while ($rows = mysqli_fetch_assoc($result)) {
      $subjects[] = $rows["subject_name"];"<br>";
    }
    echo json_encode($subjects);
  } else {
    echo json_encode(array());
  }
}
mysqli_close($connection);
?>