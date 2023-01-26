<?php 

include 'condb.php';
session_start();

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$randomizer = rand(10000000,99999999);

//echo $fname . " " . $mname . " " . $lname . " " . $email . " " . $contact . " " . $randomizer;

$res = mysqli_query($cn, "SELECT * FROM accounts WHERE fname = '$fname' AND mname = '$mname' AND lname = '$lname' AND email = '$email' AND contactnumber = '$contact'");
$row= mysqli_num_rows($res);

if($row<>0)
	{
		$sql2 = "UPDATE accounts SET password='$randomizer' WHERE email='$email'";
		$result = mysqli_query($cn,$sql2);
		$_SESSION['status'] = "Success";
		$_SESSION['status_text'] = "Your new password is ". $randomizer ."";
		$_SESSION['status_code'] = "success";
		header('Location: index.php');

		// function myAlert1($msg, $url){
		// echo '<script language="javascript">alert("'.$msg.'");</script>';
		// echo "<script>document.location = '$url'</script>";
		// }
		// myAlert1("Your new password is ". $randomizer ."", "index.php");
	}
	else
	{
		$_SESSION['status'] = "Error";
		$_SESSION['status_text'] = "Information does not match.";
		$_SESSION['status_code'] = "error";
		header('Location: index.php');

		// function myAlert1($msg, $url){
		// 	echo '<script language="javascript">alert("'.$msg.'");</script>';
		// 	echo "<script>document.location = '$url'</script>";
		// 	}
		// 	myAlert1("Information does not match.", "index.php");
		}
	// }