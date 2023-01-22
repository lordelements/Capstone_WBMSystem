<?php

    include ('../condb.php');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();

 // delete
 if (isset($_GET['delRes_id']) && !empty($_GET['delRes_id'])){
    $residentid=$_GET['delRes_id'];
    $sql = "DELETE FROM residents WHERE residentid= $residentid";
    $result = $cn->query($sql);
    $_SESSION['status'] = "Success";
    $_SESSION['status_text'] = "Residents record is successfully deleted!";
    $_SESSION['status_code'] = "success";
    header('Location: residents.php');

   }
   else {
    $_SESSION['status'] = "Error";
    $_SESSION['status_text'] = "Data is not deleted.";
    $_SESSION['status_code'] = "error";
    header('Location: residents.php');
   }
      
?>