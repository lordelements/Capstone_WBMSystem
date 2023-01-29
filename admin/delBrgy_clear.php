<?php

    include ('../condb.php');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();

 // delete
 if (isset($_GET['delid']) && !empty($_GET['delid'])){
    $brgycert_id=$_GET['delid'];
    $sql = "DELETE FROM tble_brgy_clearance WHERE brgycert_id= $brgycert_id";
    $result = $cn->query($sql);
    $_SESSION['status'] = "Deleted";
    $_SESSION['status_text'] = "Record is successfully deleted!";
    $_SESSION['status_code'] = "success";
    header('Location: generate_brgycert.php');

   }
   else {
    $_SESSION['status'] = "Error";
    $_SESSION['status_text'] = "Data is not deleted.";
    $_SESSION['status_code'] = "error";
    header('Location: generate_brgycert.php');
   }
      
?>