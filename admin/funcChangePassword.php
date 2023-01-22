<?php

include ('../condb.php');
session_start();

$email = $_POST['email'];
$currpass = $_POST['currpass'];
$newpass = $_POST['newpass'];
$confpass = $_POST['confpass'];

$result = mysqli_query ($cn, "SELECT * FROM accounts WHERE email = '$email'");
$row = mysqli_fetch_assoc($result);


	if($currpass == $row['password']){
				
		if (strlen($newpass == $confpass) < 8) {
			$_SESSION['status'] = "Error";
			$_SESSION['status_text'] = "Error: Password must be at least 8 characters long.";
			$_SESSION['status_code'] = "error";
			header('Location: index.php');
		} 
		if($newpass == $confpass){
			$sql2 = "UPDATE accounts SET password='$newpass' WHERE email='$email'";
			$result = mysqli_query($cn,$sql2);
			$_SESSION['status'] = "Success";
			$_SESSION['status_text'] = "Password Changed!";
			$_SESSION['status_code'] = "success";
			header('Location: reports.php');	
		}
		else {
			$_SESSION['status'] = "Error";
			$_SESSION['status_text'] = "New password and confirm password does not match!";
			$_SESSION['status_code'] = "error";
			header('Location: viewAccount.php');
		}
	}
	else {
		$_SESSION['status'] = "Error";
		$_SESSION['status_text'] = "Incorrect Password!";
		$_SESSION['status_code'] = "error";
		header('Location: viewAccount.php');
	}

?>