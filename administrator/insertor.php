<?php
require "../connection.php";
require "../globalindex.php";
?>
<html>

<head>

  <style>

    .animator {
      display: inline-block;
      overflow: hidden;
      animation: typing 2s steps(20, end), deleting 1s steps(10, end) 2.5s forwards;
    }
    @keyframes typing {
      from {
        width: 0;
      }
      to {
        width: 100%;
      }
    }

    @keyframes deleting {
      from {
        width: 100%;
      }

      to {
        width: 0;
      }
    }

    table.mf {
      border-collapse: collapse;
      max-width: 100%;
    }

    table.mf th,
    table.mf td {
      text-align: center;
      padding: 8px;
      border: 1px solid #ddd;
    }

    table.mf th {
      background-color: #f2f2f2;
      color: #333;
    }

    table.mf tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    table.mf tr:hover {
      background-color: #ddd;
    }

    table.mf th:first-child,
    table.mf td:first-child {
      text-align: left;
    }

    .uisearch {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 50px;
    }

    .uisearch input[type="text"],
    .uisearch input[type="submit"] {
      font-size: 18px;
      padding: 8px 16px;
    }

    .uisearch input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    .uisearch input[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>

</head>

<body>


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href=""><img src="../img/home.svg"> Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="option.php"><img src="../img/activity.svg"> Marks Entry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><img src="../img/log-out.svg"> Log Out</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled"><img src="../img/user.svg"> Admin Page</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <form action="" method="GET" class="uisearch">
    <input type="text" name="txtsearch" id="txtsearch" />
    <input type="submit" name="btnsearch" id="btnsearch" value="search" />
  </form>
  <br><br>
  <?php
  if (isset($_REQUEST["txtsearch"])) {
    $txt_find = $_REQUEST["txtsearch"];
    $sql = "SELECT * FROM student WHERE name LIKE '%$txt_find%' OR sid LIKE '%$txt_find%' OR urn LIKE '%$txt_find%'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
      ?>
      <center>
      <?php
      echo '<table class="mf">';
      echo '<thead><tr><th>Name</th><th>Email</th><th>Branch</th><th>Student ID</th><th>University roll number</th><th>Edit</th><th>Delete</th><th>Sem_marks</th></tr></thead>';
      echo '<tbody>';
      while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . preg_replace('/(' . preg_quote($txt_find, '/') . ')/i', '<mark>$1</mark>', $row['name']) . '</td>';
        echo '<td>' . preg_replace('/(' . preg_quote($txt_find, '/') . ')/i', '<mark>$1</mark>', $row['email']) . '</td>';
        echo '<td>' . preg_replace('/(' . preg_quote($txt_find, '/') . ')/i', '<mark>$1</mark>', $row['branch']) . '</td>';
        echo '<td>' . preg_replace('/(' . preg_quote($txt_find, '/') . ')/i', '<mark>$1</mark>', $row['sid']) . '</td>';
        echo '<td>' . preg_replace('/(' . preg_quote($txt_find, '/') . ')/i', '<mark>$1</mark>', $row['urn']) . '</td>';
        echo '<td>
        <a href="edit.php?id=' . $row['sid'] . '&name=' . $row['name'] . '"><img src="../img/settings.svg"></a>
      </td>';
      echo '<td>
      <a href="delete.php?id='. $row['sid'].'&name='.$row['name'].'"><img src="../img/trash-2.svg"></a></td>';
      echo '<td>
      <a href="semmarks.php?id='.$row['sid'].'&name='.$row['name'].'"><img src="../img/user-plus.svg"></a></td>';


echo '</tr>';
      }
      echo '</tbody>';
      echo '</table>';
    } else {
      echo "No data found";
    }
  }
  ?>
  </center>
  <br>

  <?php
  $sql = "select * from student ORDER BY sid,branch,urn,name";
  $result = $connection->query($sql);
  if ($result->num_rows > 0) {
  ?>
  <center>
    <h3>TCEA student record</h3>
    <br>
    <table class="mf">
      <thead>
        <th>Sl no.</th>
        <th>Name</th>
        <th>student id</th>
        <th>University Roll number</th>
        <th>Registraion Number</th>
        <th>Branch</th>       
        <th>Email</th>
        <th>Accademic Session</th>
        <th>Selected Course</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Details</th>
        <th>View</th>
      </thead>
      <?php
      $sl = 0;
      while ($row = $result->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo ++$sl; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['sid']; ?></td>
          <td><?php echo $row['urn']; ?></td>
          <td><?php echo $row['registration']; ?></td>
          <td><?php echo $row['branch']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['acc_session']; ?></td>
          <td><?php echo $row['course']; ?></td>
          <td><a href="edit.php?id=<?php echo $row['sid']; ?>&name=<?php echo $row['name']; ?>"><img src="../img/settings.svg"></a></td>
          <td><a href="delete.php?id=<?php echo $row['sid']; ?>&name=<?php echo $row['name']; ?>"><img src="../img/trash-2.svg"></a></td>
          <td><a href="semmarks.php?id=<?php echo $row['sid']; ?>&name=<?php echo $row['name']; ?>"><img src="../img/user-plus.svg"></a></td>
          <td><a href="view.php?id=<?php echo $row['sid']; ?>&name=<?php echo $row['name']; ?>"><img src="../img/info.svg"></a></td>
        </tr>
      <?php
      }
      ?>
    </table>
    </center>
  <?php
    $result->free_result();
  } else {
    echo 'No records found';
  }
  $connection->close();
  ?>
</body>

</html>