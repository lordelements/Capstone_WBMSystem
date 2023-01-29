<?php
    include_once ('../condb.php');
    session_start();

    if (isset($_POST['submit'])) {
        $payment = $_POST['payment'];
        $recipient_name = $_POST['recipient_name'];
        $punong_barangay = $_POST['punong_barangay'];
        $brgy_sectretary = $_POST['brgy_sectretary'];
        $brgy_treasurer = $_POST['brgy_treasurer'];
        $issued_on = $_POST['issued_on'];

        if (!empty($recipient_name)) {
             $_SESSION['status'] = "Required";
            $_SESSION['status_text'] = "Recipient Nameis required.";
            $_SESSION['status_code'] = "error";
            header('Location: generate_brgycert.php');
        }
        if (!empty($payment)) {
             $_SESSION['status'] = "Required";
            $_SESSION['status_text'] = "Payment is required.";
            $_SESSION['status_code'] = "error";
            header('Location: generate_brgycert.php');
        }
        if (!empty($punong_barangay)) {
            $_SESSION['status'] = "Required";
            $_SESSION['status_text'] = "Punong Baranagay is required.";
            $_SESSION['status_code'] = "error";
            header('Location: generate_brgycert.php');
        }
        if (!empty($brgy_sectretary)) {
            $_SESSION['status'] = "Required";
            $_SESSION['status_text'] = "Baranagay sectretary is required.";
            $_SESSION['status_code'] = "error";
            header('Location: generate_brgycert.php');
        }
        if (!empty($brgy_treasurer)) {
            $_SESSION['status'] = "Required";
            $_SESSION['status_text'] = "Baranagay treasurer is required.";
            $_SESSION['status_code'] = "error";
            header('Location: generate_brgycert.php');
        }
       
        $query = "INSERT INTO  `tble_brgy_clearance`( `payment`, `recipient_name`, `punong_barangay`, `brgy_sectretary`, `brgy_treasurer`, `issued_on`)
        VALUES ('$payment','$recipient_name','$punong_barangay','$brgy_sectretary','$brgy_treasurer','$issued_on')";
        $result = mysqli_query($cn, $query);

        if ($result === true) {
            $_SESSION['status'] = "Your data is addeed.";
            $_SESSION['status_text'] = "Your data is ready for printing.";
            $_SESSION['status_code'] = "success";
            header('Location: generate_brgycert.php');
        }
        else {
            $_SESSION['status'] = "Required";
            $_SESSION['status_text'] = "Baranagay .";
            $_SESSION['status_code'] = "error";
            header('Location: generate_brgycert.php');
        }
    }

?>