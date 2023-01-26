<?php
    include_once("condb.php");
    session_start();
    unset($_SESSION["logid"]);
    unset($_SESSION["email"]);
    $_SESSION['status'] = "Good job";
    $_SESSION['status_text'] = "You Logout Successfully";
    $_SESSION['status_code'] = "success";
    header("Location: index.php");
?>