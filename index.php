<?php
include "mobile.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="type.css">
    </head>
    <body>
        <script src="" async defer></script>

<div class="background" id="background">
<div class="text" id="text">
    <center><h3><b>TECHNO COLLEGE OF ENGINEERING AGARTALA</b></h3></center>
</div>

<div class="twobuttons">
    <a href="student/stlogin.php"><button>Student</button></a>
    <a href="administrator/adminlogin.php"><button>Administrator</button></a>
</div>
</div>

    </body>


    <script>
        const text = "TECHNO COLLEGE OF ENGINEERING AGARTALA";
let index = 0;

function type() {
  document.getElementById("text").textContent += text[index++];
  if (index < text.length) {
    setTimeout(type, Math.random() * 200 + 100);
  }
}

type();

    </script>
</html>