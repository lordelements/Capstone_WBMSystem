<?php
session_start();
include ('../condb.php');

	$id = $_GET['id'];

	$sql2 = "UPDATE residents SET status='1' WHERE residentid='$id'";
	$result = mysqli_query($cn,$sql2);
	
	if ($result === true) {
			
		$_SESSION['status'] = "Not Active Residents";
		$_SESSION['status_text'] = "This is not Residents Active of Zone 1.";
		$_SESSION['status_code'] = "success";
		header('Location: residents.php');	
		
	}else {
		$_SESSION['status'] = "Error";
		$_SESSION['status_text'] = "Residents is not added to restore status";
		$_SESSION['status_code'] = "error";
		header('Location: residents.php');
	}

?>