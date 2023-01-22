<?php 

include 'condb.php';
session_start();

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pw'];
$conpass = $_POST['cpw'];
$address = $_POST['address'];
$contact = $_POST['contact'];
// $position = $_POST['position'];

$full = $fname . ' ' . $mname . ' ' . $lname;

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