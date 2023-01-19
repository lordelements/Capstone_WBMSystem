<?php 

include ('../condb.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$brgyid = $_POST['brgyid'];
$filename = $_FILES['brgy_logo']['name'];
$img_size = $_FILES['brgy_logo']['size'];
$province = $_POST['province'];
$municipality = $_POST['municipality'];
$brg_name = $_POST['brg_name'];

$contactnum = $_POST['contactnum'];
$brgy_contactname = $_POST['brgy_contactname'];

	// $fileName = $_FILES['brgy_logo']['name'];
	// $filetype = $_FILES["brgy_logo"]["type"];
	// $filesize = $_FILES["brgy_logo"]["size"];
    // $tempName = $_FILES['brgy_logo']['tmp_name'];

    if (isset($_POST['submit'])) {
        if ($img_size > 10000) {
            $sql = "SELECT brgy_logo FROM tbl_brgyinfo WHERE brgyid = $brgyid";
            $result = $cn->query($sql);
            echo "<script>alert('Opps! Your picture is too large');</script>";

            // Validate if file already exists
            if (file_exists($fileName)) {
                echo "<span>File already exists.</span>";
                $isValidFile = false;
            }

    
                // $result = $cn->query($sql);
                if (!$result->num_rows > 0) {
                    $res = "INSERT INTO tbl_brgyinfo (`province`, `municipality`, `brg_name`, `contactnum`, `brgy_contactname`, `brgy_logo`)
                    VALUES ('$province','$municipality','$brg_name','$contactnum','$brgy_contactname','$filename')";

                    $result = $cn->query($res);
                    if ($result) {
                        move_uploaded_file($_FILES['brgy_logo']['tmp_name'], "uploaded_brgy/$filename");
                        $_SESSION['status'] = "Good job";
                        $_SESSION['status_text'] = "Wow! User Registration Completed.";
                        $_SESSION['status_code'] = "success";
                        header('Location: brgyinfo.php');
                        $username = "";
                        $email = "";
                        $_POST['password'] = "";
                        $_POST['cpassword'] = "";
    
                    } else {
                        $_SESSION['status'] = "Warning";
                        $_SESSION['status_text'] = "Woops! Something Went Wrong";
                        $_SESSION['status_code'] = "warning";
                         header('Location: brgyinfo.php');
                    }
    
                } else {
                    $_SESSION['status'] = "Warning";
                    $_SESSION['status_text'] = "Woops! Email Already Exists";
                    $_SESSION['status_code'] = "warning";
                     header('Location: brgyinfo.php');
                }	
                
            } else {
                $_SESSION['status'] = "Error";
                $_SESSION['status_text'] = "Password Dbrgybrgyid Not Matched.";
                $_SESSION['status_code'] = "error";
                 header('Location: brgyinfo.php');
            }
        } 
    

//    extract($_POST);

//    if (isset($_POST['province']) && isset($_POST['municipality']) 
//     && isset($_POST['contactnum']) && isset($_POST['brg_name']) && isset($_POST['brgy_contactname'])
//      && isset($_POST['brgy_logo'])) {
            
//         $res = "INSERT INTO tbl_brgyinfo (`province`, `municipality`, `brg_name`, `contactnum`, `brgy_contactname`, `brgy_logo`)
//         VALUES ('$province','$municipality','$brg_name','$contactnum','$brgy_contactname','$brgy_logo')";

//         $result = mysqli_query($cn, $res);
        
//    }

	// function myAlert($msg, $url)
	// {
    // echo '<script language="javascript">alert("'.$msg.'");</script>';
    // echo "<script>document.location = '$url'</script>";
	// }
	// myAlert("Record  successfully!", "../admin/officials.php");

?>