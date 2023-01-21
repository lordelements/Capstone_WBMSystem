<?php 

include ('../condb.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$resid = $_POST['resid'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$firstname = $_POST['firstname'];
$birthdate = $_POST['birthdate'];
$civilstatus = $_POST['civilstatus'];
$address = $_POST['address'];
$contact = $_POST['contact'];

//echo $resid . " " . $lastname . " " . $middlename . " " . $firstname . " " . $birthdate . " " . $civilstatus . " " . $address . " " . $contact;

$query = "UPDATE residents SET lastname='$lastname', middlename='$middlename', firstname='$firstname', birthdate='$birthdate', civilstatus='$civilstatus', address='$address', contact='$contact' WHERE residentid='$resid'";
$result = mysqli_query($cn,$query);


$min_length = 100; // minimum length of word to be stored in database
if ($result === true) {
	$_SESSION['status'] = "Success";
	$_SESSION['status_text'] = "Barangay resident is updated successfully.";
	$_SESSION['status_code'] = "success";
	header('Location: residents.php');	

}
else {
	$_SESSION['status'] = "Error";
	$_SESSION['status_text'] = "Barangay resident is added.";
	$_SESSION['status_code'] = "error";
	header('Location: residents.php');
}


?>