<?php
session_start();
include ('../condb.php');

$id = $_GET['id'];

$sql2 = "UPDATE reports SET status='1' WHERE reportid='$id'";
		$result = mysqli_query($cn,$sql2);

		$_SESSION['status'] = "Success";
		$_SESSION['status_text'] = "Reports is archived successfully";
		$_SESSION['status_code'] = "success";
		header('Location: reports.php');	
		
		
		// function myAlert1($msg, $url){
		// echo '<script language="javascript">alert("'.$msg.'");</script>';
		// echo "<script>document.location = '$url'</script>";
		// }
		// myAlert1("Account Status Changed!", "officials.php");

?>