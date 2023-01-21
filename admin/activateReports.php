<?php
session_start();
include ('../condb.php');

$id = $_GET['id'];

	$sql2 = "UPDATE reports SET status='0' WHERE reportid='$id'";
	$result = mysqli_query($cn,$sql2);

	if ($result === true) {
			
		$_SESSION['status'] = "Success";
		$_SESSION['status_text'] = "Reports is restore successfully";
		$_SESSION['status_code'] = "success";
		header('Location: reports.php');	
		
	}else {
		$_SESSION['status'] = "Error";
		$_SESSION['status_text'] = "Account Status Not Changed.";
		$_SESSION['status_code'] = "error";
		header('Location: reports.php');
	}

	// function myAlert1($msg, $url){
	// echo '<script language="javascript">alert("'.$msg.'");</script>';
	// echo "<script>document.location = '$url'</script>";
	// }
	// myAlert1("Account Status Changed!", "officials.php");

?>