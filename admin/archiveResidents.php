<?php
session_start();
include ('../condb.php');

	$id = $_GET['id'];

	$sql2 = "UPDATE residents SET status='1' WHERE residentid='$id'";
	$result = mysqli_query($cn,$sql2);
	
	if ($result === true) {
			
		$_SESSION['status'] = "Success";
		$_SESSION['status_text'] = "Residents archive successfully";
		$_SESSION['status_code'] = "success";
		header('Location: residents.php');	
		
	}else {
		$_SESSION['status'] = "Error";
		$_SESSION['status_text'] = "Residents is not added to archive";
		$_SESSION['status_code'] = "error";
		header('Location: residents.php');
	}

	// function myAlert1($msg, $url){
	// echo '<script language="javascript">alert("'.$msg.'");</script>';
	// echo "<script>document.location = '$url'</script>";
	// }
	// myAlert1("Account Status Changed!", "residents.php");

?>