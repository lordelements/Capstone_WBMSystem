<?php
	include("condb.php");
	session_start();

	$email = mysqli_real_escape_string($cn, $_POST['email']);
	$password = mysqli_real_escape_string($cn, $_POST['password']);
	// $password = $_POST['password'];
	$sql= mysqli_query($cn,"SELECT * FROM accounts WHERE email= '$email' AND password= '$password'");
	$row= mysqli_num_rows($sql);
	$rows=mysqli_fetch_assoc($sql);

	
	$log = $rows['acctype'];
	
		if($row<>0)
		{
			$_SESSION['email'] = $email;
			$_SESSION['logid'] = $logid;
			// $_SESSION['success'] = "Welcome to Barangay Mangement System";
			$_SESSION['status'] = "	Welcome";
			$_SESSION['status_text'] = "Welcome to Barangay Mangement System";
			$_SESSION['status_code'] = "success";
			header("location:admin/index.php");
		}
		else
		{
		
		// $_SESSION['success'] = "Password or Email is incorrect!";
		$_SESSION['status'] = "Error!";
		$_SESSION['status_text'] = "Password or Email is incorrect!";
		$_SESSION['status_code'] = "error";
		header("location:index.php");
		}


?>