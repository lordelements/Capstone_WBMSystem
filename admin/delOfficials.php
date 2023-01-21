<?php

    include ('../condb.php');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();

    
	// if(ISSET($_REQUEST['delOff_id'])){
	// 	$delOff_id = $_REQUEST['delOff_id'];
	// 	$query=mysqli_query($cn, "SELECT * FROM `officials` WHERE `delOff_id` = '$delOff_id'");
	// 	$fetch=mysqli_fetch_array($query);
		
	// 	mysqli_query($cn, "INSERT INTO `trash` VALUES('', '$fetch[delOff_id]', '$fetch[position]', '$fetch[firstname]', '$fetch[middlename]',
   //   '$fetch[lastname]', '$fetch[gender]', '$fetch[birthdate]', '$fetch[civilstatus]', 
   //   '$fetch[address]', '$fetch[contact]', '$fetch[termyears]', '$fetch[yearstarted]', '$fetch[status]',)");
	// 	mysqli_query($cn, "DELETE FROM `officials` WHERE `delOff_id` = '$delOff_id'");
	// 	$_SESSION['status'] = "Success";
   //    $_SESSION['status_text'] = "Officials is successfully deleted!";
   //    $_SESSION['status_code'] = "success";
   //    header('Location: officials.php');
	// }
   // else {
   //    $_SESSION['status'] = "Success";
   //    $_SESSION['status_text'] = "Data is not deleted.";
   //    $_SESSION['status_code'] = "success";
   //    header('Location: officials.php');
   //   }
	

 // delete
 if (isset($_GET['delOff_id']) && !empty($_GET['delOff_id'])){
    $officialid=$_GET['delOff_id'];

    $sql = "DELETE FROM officials WHERE officialid= $officialid";
    $result = $cn->query($sql);
    $_SESSION['status'] = "Success";
    $_SESSION['status_text'] = "Officials is successfully deleted!";
    $_SESSION['status_code'] = "success";
    header('Location: officials.php');

   }
   else {
    $_SESSION['status'] = "Error";
    $_SESSION['status_text'] = "Data is not deleted.";
    $_SESSION['status_code'] = "error";
    header('Location: officials.php');
   }
      
?>