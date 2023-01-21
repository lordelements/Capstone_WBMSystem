<?php
session_start();
include ('../condb.php');

$id = $_GET['id'];

		$sql2 = "UPDATE officials SET status='0' WHERE officialid='$id'";
		$result = mysqli_query($cn,$sql2);

		if ($result === true) {
			
			$_SESSION['status'] = "Success";
			$_SESSION['status_text'] = "Record restore successfully";
			$_SESSION['status_code'] = "success";
			header('Location: officials.php');	
			
		}else {
			$_SESSION['status'] = "Error";
			$_SESSION['status_text'] = "Error records not restore";
			$_SESSION['status_code'] = "error";
			header('Location: officials.php');
		}

?>