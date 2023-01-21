<?php
session_start();
include ('../condb.php');

		$id = $_GET['id'];

		$sql2 = "UPDATE officials SET status='1' WHERE officialid='$id'";
		$result = mysqli_query($cn,$sql2);

		if ($result === true) {
			
			$_SESSION['status'] = "Success";
			$_SESSION['status_text'] = "Record is added to archive.";
			$_SESSION['status_code'] = "success";
			header('Location: officials.php');	
			
		}else {
			$_SESSION['status'] = "Error";
			$_SESSION['status_text'] = "Record is not to added to archive.";
			$_SESSION['status_code'] = "error";
			header('Location: officials.php');
		}
	
		// function myAlert1($msg, $url){
		// echo '<script language="javascript">alert("'.$msg.'");</script>';
		// echo "<script>document.location = '$url'</script>";
		// }
		// myAlert1("Account Status Changed!", "officials.php");

?>