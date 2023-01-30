<?php 

include 'condb.php';
session_start();

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$randomizer = rand(10000000,99999999);


function itexmo($number,$message,$apicode,$passwd)
{
	$ch = curl_init();
	$itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
	curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($itexmo));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	return curl_exec ($ch);
	curl_close ($ch); 

}
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

	}
	else
	{
		$_SESSION['status'] = "Error";
		$_SESSION['status_text'] = "Information does not match.";
		$_SESSION['status_code'] = "error";
		header('Location: index.php');

		}
	// }