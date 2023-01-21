<?php

    include ('../condb.php');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();

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
    $_SESSION['status'] = "Success";
    $_SESSION['status_text'] = "Data is not deleted.";
    $_SESSION['status_code'] = "success";
    header('Location: officials.php');
   }


?>