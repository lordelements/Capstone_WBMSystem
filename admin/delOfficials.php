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
    echo "<script>alert('Officials is successfully deleted.')</script>";
    header('Location: officials.php');
   //  return $result;

   }
   else {
    echo "<script>alert('Data is not deleted.')</script>";
   }


?>