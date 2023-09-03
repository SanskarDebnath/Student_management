<?php
require "../connection.php";
include "../globalindex.php"
?>
<html>
<head>
  <?php
  session_start();
  if (!isset($_SESSION['login_user'])) {
    header("location:stlogin.php");
    die();
  }
  $logged_user = $_SESSION['login_user'];
  $usrid = $_SESSION["login_usrid"];
  ?>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="ssc.css">
  <script src="myscript.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<div id="preloader">
  <div id="loader"></div>
</div>
<body>
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="main.php">TCEA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">TCEA</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="main.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log Out</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="feedbackpage.php">Feedback Page</a>
            </li>
        </div>
      </div>
    </div>
  </nav>
  <br><br><br>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Log In</strong> successful.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <div id="page-content">
    <p class="default">
      <center>
        <div class="alert alert-success">
          <strong>Welcome</strong>
          <?php echo $logged_user; ?> !
        </div>
      </center>
    </p>
    <br><br>
    <?php
    $sql = "select * from student where sid=" . $usrid;
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) == 1) {
      while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="container1 bg-gray-100 p-4 rounded-md">
          <table class="ola w-3/4 mx-auto">
            <tr>
              <td>Name</td>
              <td><?php echo $row['name']; ?></td>
            </tr>
            <tr>
              <td>Student ID</td>
              <td><?php echo $row['sid']; ?></td>
            </tr>
            <tr>
              <td>University Number</td>
              <td><?php echo $row['urn']; ?></td>
            </tr>
            <tr>
              <td>Registration Number</td>
              <td><?php echo $row['registration']; ?></td>
            </tr>
            <tr>
              <td>Course Selected</td>
              <td><?php echo $row['course']; ?></td>
            </tr>
            <tr>
              <td>Selected Branch</td>
              <td><?php echo $row['branch']; ?></td>
            </tr>
            <tr>
              <td>Entered Email</td>
              <td><?php echo $row['email']; ?></td>
            </tr>
          </table>
        </div>
        <br>
      <?php
      }
      mysqli_free_result($result);
    } else {
    }
    $sql = "SELECT subject_name, marks_obtained, semester FROM marks WHERE student_id = '$usrid'";
    $sem = '';
    $result = $connection->query($sql);?>
    <?php
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      if ($row !== null) {
        $sem = '';
      ?>
        <div style="display: flex; justify-content: center;">
          <?php
          $sem = $row["semester"];

          if ($sem == '1') {
          ?><div class="alert alert-info" role="alert">
              Showing results for Semester 1
            </div><?php
                } elseif ($sem == 2) {
                  ?> <div class="alert alert-info" role="alert">
              Showing results for Semester 2
            </div><?php
                } elseif ($sem == 3) {
                  ?> <div class="alert alert-info" role="alert">
              Showing results for Semester 3
            </div><?php
                } elseif ($sem == 4) {
                  ?> <div class="alert alert-info" role="alert">
              Showing results for Semester 4
            </div><?php
                } elseif ($sem == 5) {
                  ?> <div class="alert alert-info" role="alert">
              Showing results for Semester 5
            </div><?php
                } elseif ($sem == 6) {
                  ?> <div class="alert alert-info" role="alert">
              Showing results for Semester 6
            </div><?php
                } elseif ($sem == 7) {
                  ?> <div class="alert alert-info" role="alert">
              Showing results for Semester 7
            </div><?php
                } elseif ($sem == 8) {
                  ?> <div class="alert alert-info" role="alert">
              Showing results for Semester 8
            </div><?php
                } else {
                }
              } ?>
        </div>
        <div class="container2">
          <?php if ($result->num_rows > 0) : ?>
            <table class="marks-table">
              <thead>
                <tr>
                  <th>Subject Name</th>
                  <th>Marks Obtained</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = $result->fetch_assoc()) : ?>
                  <tr>
                    <td><?php echo $row['subject_name']; ?></td>
                    <td><?php echo $row['marks_obtained']; ?></td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          <?php else : ?>
            <div>
              <h5>Midterm Marks Are Not Updated</h5>
            </div>
          <?php endif; ?>
          <?php
          $sql = "SELECT student_id, SUM(marks_obtained) AS total_marks FROM marks WHERE student_id = '$usrid' GROUP BY student_id;";
          $result = $connection->query($sql);
          if ($result->num_rows > 0) :
            while ($row = $result->fetch_assoc()) : ?>
              <br><br>
              <div class="my-6 text-center text-xl font-bold">
                <div class="alert alert-info" role="alert">
                  <span class="text-green-500">Grand Total Marks : <?php echo $row['total_marks']; ?></span>
                </div>
              </div>
            <?php endwhile; ?>
        <?php endif;
        $result->free_result();
        } ?>
        </div>
</body>
</body>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Log OUT</strong> before Leaving the browser.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</html>