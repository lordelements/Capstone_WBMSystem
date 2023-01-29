<?php
include_once ('../condb.php');
session_start();

	$brgycert_id = $_GET['brgycert_id'];
	$selSql = "SELECT * FROM `tble_brgy_clearance` WHERE brgycert_id=$brgycert_id";
	$res = mysqli_query($cn, $selSql);
	$r = mysqli_fetch_assoc($res);

	if (isset($_POST['update'])) {
        $brgycert_id = $_POST['brgycert_id'];
        $payment = $_POST['payment'];
        $recipient_name = $_POST['recipient_name'];
        $punong_barangay = $_POST['punong_barangay'];
        $brgy_sectretary = $_POST['brgy_sectretary'];
        $brgy_treasurer = $_POST['brgy_treasurer'];
        $issued_on = $_POST['issued_on'];

		$UpdateSql = "UPDATE `tble_brgy_clearance` SET payment='$payment',	recipient_name='$recipient_name', 
        punong_barangay='$punong_barangay', brgy_sectretary='$brgy_sectretary', brgy_treasurer='$brgy_treasurer', issued_on='$issued_on'  WHERE brgycert_id=$brgycert_id";

		$res = mysqli_query($cn, $UpdateSql);
		if ($res) {
			$_SESSION['status'] = "Updated";
            $_SESSION['status_text'] = "Baranagay clearance detail is updated.";
            $_SESSION['status_code'] = "success";
            header('Location: generate_brgycert.php');
		}else{
			$_SESSION['status'] = "Required";
            $_SESSION['status_text'] = "Not Updated.";
            $_SESSION['status_code'] = "error";
            header('Location: generate_brgycert.php');
		}
	}

 ?>

