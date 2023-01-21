<?php 

include ('../condb.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$incident = $_POST['incident'];
$incidentplace = $_POST['incidentplace'];
$complainant = $_POST['complainant'];
$complainee = $_POST['complainee'];
$witness1 = $_POST['witness1'];
$witness2 = $_POST['witness2'];
$narrative = $_POST['narrative'];
$dateandtime = $_POST['dateandtime'];

$min_length = 40; // minimum length of word to be stored in database
if (strlen($narrative) >= $min_length) {
		
	$query = "INSERT INTO reports (incident, incidentplace, complainant, complainee, witness1, witness2, narrative, dateandtime, status) VALUES ('$incident','$incidentplace','$complainant','$complainee','$witness1','$witness2','$narrative','$dateandtime','0')";
	$result = mysqli_query($cn,$query);
	$_SESSION['status'] = "Success";
	$_SESSION['status_text'] = "Record added successfully!";
	$_SESSION['status_code'] = "success";
	header('Location: reports.php');

}
else {
	$_SESSION['status'] = "Error";
	$_SESSION['status_text'] = "Word must be at least $min_length characters long.";
	$_SESSION['status_code'] = "error";
	header('Location: reports.php');
}

// if ($result === true) {
// 	$_SESSION['status'] = "Success";
// 	$_SESSION['status_text'] = "Record added successfully!";
// 	$_SESSION['status_code'] = "success";
// 	header('Location: reports.php');
// }
//  else {
// $_SESSION['status'] = "Error";
// $_SESSION['status_text'] = "Word must be at least $min_length characters long.";
// $_SESSION['status_code'] = "error";
// header('Location: reports.php');
// }


?>