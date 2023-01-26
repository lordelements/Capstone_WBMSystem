<?php 
   include_once("condb.php");
   // error_reporting(0);
   session_start();
   
   if(!isset($_SESSION['email']) && $_SESSION['password']) {
   //  $_SESSION['success']  = "You must login first";
      $_SESSION['status'] = "Warning";
		$_SESSION['status_text'] = "You must login first";
		$_SESSION['status_code'] = "warning";
       header("Location: ../index.php");
       exit(0);
   }

?>