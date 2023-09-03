<?php
    $usrid = 0;
    if(isset($_GET['id'])){
        $usrid = (int)$_GET['id'];
    }
    //echo $usrid;
    $stname = '';
    if(isset($_GET['name'])){
        $stname = $_GET['name'];
    }
    //echo $stname
?>
<html>
    <head>
        <style>
            body {
  font-family: Arial, sans-serif;
  font-size: 14px;
  background-color: #f2f2f2;
  padding: 20px;
}

p {
  margin-top: 0;
}

#message {
  background-color: #f8d7da;
  color: #721c24;
  padding: 8px;
  margin-top: 10px;
  border-radius: 4px;
}

#message.success {
  background-color: #d4edda;
  color: #155724;
}

#message.error {
  background-color: #f8d7da;
  color: #721c24;
}

        </style>
    <script src="../jquery-3.6.3.js"></script>
    </head>
    <body>
        <button type="button" id='btnDel'><img src="../img/trash-2.svg"></button>
        <p>
        <div id="message"></div>
    </body>
    <br><br>
    <button onclick="window.location.href='insertor.php'"><img src="../img/icons8-prev-16.png"></button>

    <script>
        $(document).ready(function() {        
            $('#btnDel').click(function() {                
                if (confirm("Are you sure you want to delete?") == true) {
                    $.ajax({
                        url : "adminserver.php?admin=4",
                        type: "POST",
                        data : {
                            userid : <?php echo $usrid; ?>
                        },
		                success : function(response, status, xhr) {
                            $('#message').html(response);
                        },
                        error: function(xhr, status, error){
                            $('#message').html(error);
                        }
                    });
                } 
                
	        });
        
        });
    </script>
</html>
