<?php
include '../connection.php';
$admin= $_GET['admin'];
if ( $admin == 1) 
{
    //echo "3";
	if(isset($_POST['adminsign'])) {
		$aname = mysqli_real_escape_string($connection,$_POST['fname']);
		$aid =  mysqli_real_escape_string($connection,$_POST['id']);;
		$pas =  mysqli_real_escape_string($connection,$_POST['psw']);
		$sql="INSERT INTO administrator(name, id, password) VALUES('$aname','$aid','$pas')";
		$result=$connection->query($sql);
		if ($result == TRUE) {
            header("Location:adminlogin.php");
		} else {
           echo"error";
		}
		exit;
	}
}elseif( $admin == 2) {

	if(isset($_POST['adminlogin'])) {
		$adminid =  mysqli_real_escape_string($connection,$_POST['aid']);
		$adminpass =  mysqli_real_escape_string($connection,$_POST['pasw']);
		$sql="select * from administrator where id='$adminid' and password='$adminpass'";
		//echo $sql;
		
		$result=$connection->query($sql);
		//$studentname = '';
		$adminid = '';
        $adminpass = '';
		if ($result->num_rows == 1) {
			while ($row = $result->fetch_assoc()) {
				$aid = $row['id'];
				$adminp = $row['password'];
			}
			$result -> free_result();
			$connection->close();
			session_start();
			$_SESSION["login_usrid"] = $adminid;			
            header("location:insertor.php");
			exit;
		} else {
            //echo $sql;
			header("location:adminlogin.php?err=1");	
		}
	}

}elseif ( $admin == 3) {
	if(isset($_POST['btnedit'])) {
		$stdnt_name = $_POST['updname'];
		$stdnt_email = $_POST['updemail'];
		$stdnt_urn = $_POST['updurn'];
		$stdnt_branch = $_POST['updbranch'];
		$stdnt_course = $_POST['updcourse'];
		$stdnt_session = $_POST['updsession'];
		$uid = $_POST['hdnuid'];
		
		$sql="UPDATE student set name='$stdnt_name', email='$stdnt_email', urn='$stdnt_urn', branch='$stdnt_branch', course='$stdnt_course', acc_session='$stdnt_session' where sid=".$uid;
		$result=$connection->query($sql);
		$status = 0;
		if ($result == TRUE) {
			echo '<script>alert("Record updated successfully!");</script>';
		} 
		$connection->close();
		header("Location: insertor.php?status=".$status);
		exit;
	}

}
elseif ( $admin == 4) 
{
	$uid = $_POST['userid'];
	$sql="DELETE from student where sid=".$uid;
	$result=$connection->query($sql);
	if ($result == TRUE) {
		echo "deleted successfully";
	}
}
elseif ( $admin == 5) {
	if(isset($_POST['btnupload'])) {
		$stdnt_name = $_POST['stname'];
		$stdnt_id = $_POST['stdid'];
		$stdnt_university = $_POST['university'];
		$sem1 = $_POST['semester1'];
		$sem2 = $_POST['semester2'];
		$sem3 = $_POST['semester3'];
		$sem4 = $_POST['semester4'];
		$sem5 = $_POST['semester5'];
		$sem6 = $_POST['semester6'];
		$sem7 = $_POST['semester7'];
		$sem8 = $_POST['semester8'];
		$trai1=$_POST['training1'];
		$trai1det=$_POST['training1details'];
		$trai2=$_POST['training2'];
		$trai2det=$_POST['training2details'];
		$minprojname=$_POST['minprojectname'];
		$minprojdetails=$_POST['minprojectdetails'];
		$megaprojname=$_POST['megaprojectname'];
		$megaprojdetails=$_POST['megaprojectdetails'];
		$sql="INSERT INTO details(uname, sid, university, sem1, sem2, sem3, sem4, sem5, sem6, sem7, sem8, trai_1_name, trai_1_det, trai_2_name, trai_2_det, min_project_name, min_project_det, mega_project_name, mega_project_det) VALUES('$stdnt_name','$stdnt_id','$stdnt_university','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$sem8','$trai1','$trai1det','$trai2','$trai2det','$minprojname','$minprojdetails','$megaprojname','$megaprojdetails')";
		$result=$connection->query($sql);
		$status = 0;
		if ($result == TRUE) {
			//echo '<script>alert("Record updated successfully!");</script>';
			header("Location:insertor.php");
		} 
		else{
			echo "error";
		}
		//$connection->close();
		//header("Location: insertor.php?status=".$status);
		#exit;
	}
}