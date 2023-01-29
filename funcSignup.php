<?php 

include 'condb.php';
session_start();


// Receiving the values entered and storing
// in the variables
// Data sanitization is done to prevent
// SQL injections
$fname = $cn->real_escape_string($_POST['fname']);
$mname = $cn->real_escape_string($_POST['mname']);
$lname = $cn->real_escape_string($_POST['lname']);
$email = $cn->real_escape_string($_POST['email']);
// $pass = $_POST['pw'];
$pass = $cn->real_escape_string($_POST['pw']);
$conpass = $cn->real_escape_string($_POST['cpw']);
$address = $cn->real_escape_string($_POST['address']);
$contact = $cn->real_escape_string($_POST['contact']);
// $position = $_POST['position'];

$full = $fname . ' ' . $mname . ' ' . $lname;


// Ensuring that the user has not left any input field blank
// error messages will be displayed for every blank input

// if (!empty($email)) {
// 	 $_SESSION['status'] = "Required";
// 	$_SESSION['status_text'] = "Email is required";
// 	$_SESSION['status_code'] = "error";
// 	header('Location: index.php');
// }
// if (!empty($pass)) {
// 	 $_SESSION['status'] = "Required";
// 	 $_SESSION['status_text'] = "Password is required";
// 	 $_SESSION['status_code'] = "error";
// 	 header('Location: index.php');
// }


$res = mysqli_query($cn, "SELECT * FROM accounts where email = '$email'");

if($pass == $conpass){
	if (strlen($pass) < 8) {
		$_SESSION['status'] = "Error";
		$_SESSION['status_text'] = "Error: Password must be at least 8 characters long.";
		$_SESSION['status_code'] = "error";
		header('Location: index.php');
	} else {
		if($res && mysqli_num_rows($res)>0)
		{
		
			$_SESSION['status'] = "Error";
			$_SESSION['status_text'] = "Email already taken!";
			$_SESSION['status_code'] = "error";
			header('Location: index.php');
		}
		else {
	
			$fileName = $_FILES['myfile']['name'];
			$filetype = $_FILES["myfile"]["type"];
			$filesize = $_FILES["myfile"]["size"];
			$tempName = $_FILES['myfile']['tmp_name'];
	
			if(isset($fileName))
			{
				if(!empty($fileName))
				{
	
					if (!file_exists("images/".$email)) 
					{
						mkdir("images/".$email);
					}
	
					$finaldir = "images/".$email."/";
	
					$location = $finaldir;
	
					if(move_uploaded_file($tempName, $location.$fileName))
					{
						//echo 'File Uploaded';
					}
					else {
						//echo 'File Not Uploaded';
					}
	
					$idcard = $location.$fileName;
				}
			}
	
			$sql2 = "INSERT INTO accounts(fname,mname,lname,email,password,idcard,contactnumber,address,status) VALUES ('$fname','$mname','$lname','$email','$pass','$idcard','$contact','$address','1')";
			// $sql2 = "INSERT INTO accounts(fname,mname,lname,email,password,idcard,contactnumber,address,position,status) VALUES ('$fname','$mname','$lname','$email','$pass','$idcard','$bspermit','$contact','$address','$position','1')";
			$result = mysqli_query($cn,$sql2);
	
			$_SESSION['status'] = "Good job";
			$_SESSION['status_text'] = "Registered Successfully Completed!" ."<br>". " You can now login.";
			$_SESSION['status_code'] = "success";
			header('Location: index.php');
		}
	  }
	
	}
	else {
		
			$_SESSION['status'] = "Error";
			$_SESSION['status_text'] = "Password and confirm password does not match!";
			$_SESSION['status_code'] = "error";
			header('Location: index.php');
	}
	
	


?>