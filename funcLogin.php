<?php
	include("condb.php");
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql= mysqli_query($cn,"SELECT * FROM accounts WHERE email= '$email' AND password= '$password'");
	$row= mysqli_num_rows($sql);
	$rows=mysqli_fetch_assoc($sql);

	session_start();

	$log = $rows['acctype'];
	
		if($row<>0)
		{
			$_SESSION['email'] = $email;
			$_SESSION['logid'] = $logid;
			// $_SESSION['success'] = "Welcome to Barangay Mangement System";
			$_SESSION['status'] = "Good job";
			$_SESSION['status_text'] = "Welcome to Barangay Mangement System";
			$_SESSION['status_code'] = "success";
			header("location:admin/index.php");
		}
		else
		{
		// 	function myAlert1($msg, $url){
		// echo '<script language="javascript">alert("'.$msg.'");</script>';
		// echo "<script>document.location = '$url'</script>";
		// }
		// myAlert1("Incorrect login credentials!", "index.php");

		// $_SESSION['success'] = "Password or Email is incorrect!";
		$_SESSION['status'] = "Error!";
		$_SESSION['status_text'] = "Password or Email is incorrect!";
		$_SESSION['status_code'] = "error";
		header("location:index.php");
		}


?>