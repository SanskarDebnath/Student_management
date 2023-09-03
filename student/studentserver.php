<?php
include '../connection.php';
$mn= $_GET['mn'];
if ( $mn == 1) 
{
	if(isset($_POST['btnsignup'])) {
		$sname =  mysqli_real_escape_string($connection,strip_tags($_POST['studentname']));
		$sid =  mysqli_real_escape_string($connection,strip_tags($_POST['studentid']));
		$sun =  mysqli_real_escape_string($connection,strip_tags($_POST['university']));
		$sregistration =  mysqli_real_escape_string($connection,strip_tags($_POST['rn']));
		$semail =  mysqli_real_escape_string($connection,strip_tags($_POST['email']));
        $sbranch =  mysqli_real_escape_string($connection,strip_tags($_POST['branch']));
		$sdob= mysqli_real_escape_string($connection,strip_tags($_POST['dob']));
		$sgen= mysqli_real_escape_string($connection,strip_tags($_POST['gender']));
		$sadd= mysqli_real_escape_string($connection,strip_tags($_POST['address']));
		$snum= mysqli_real_escape_string($connection,strip_tags($_POST['number']));
		$scourse= mysqli_real_escape_string($connection,strip_tags($_POST['course']));
		$axc= mysqli_real_escape_string($connection,strip_tags($_POST['as']));
		$sql="INSERT INTO student(name, sid, urn, registration, email, branch, dob, gender, address, number, course, acc_session) VALUES('$sname','$sid','$sun','$sregistration','$semail','$sbranch','$sdob','$sgen','$sadd','$snum','$scourse','$axc')";
		$result=$connection->query($sql);
		if ($result == TRUE) {
            header("Location:stlogin.php");			
		} else {
           echo"error";
		}
		exit;
	}
}elseif( $mn == 2) {
	if(isset($_POST['submit'])) {
		$studentemail =  mysqli_real_escape_string($connection,$_POST['email']);
		$studentid =  mysqli_real_escape_string($connection,$_POST['password']);
		$sql="select * from student where email='$studentemail' and sid='$studentid'";		
		$result=$connection->query($sql);
		$studentname = '';
		$studentid = 0;
		if ($result->num_rows == 1) {
			while ($row = $result->fetch_assoc()) { 
				$studentname = $row['name'];
				$studentid = $row['sid'];
				$studentemail = $row['email'];
			}
			$result -> free_result();
			$connection->close();
			session_start();
			$_SESSION["login_user"] = $studentname;
			$_SESSION["login_usrid"] = $studentid;
			$_SESSION["login_email"] = $studentemail;			
            header("location:main.php");
			exit;
		} else {
			header("location:stlogin.php");	
		}
	}
}