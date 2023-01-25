<?php   
session_start();
// error_reporting(0);
include '../condb.php';


if($_SESSION['email'] == ""){
    // $_SESSION['status'] = "Error";
    // $_SESSION['status_text'] = "Please login to use the system!";
    // $_SESSION['status_code'] = "error";
    // header('Location: ../index.php');

    function myAlert1($msg, $url){
    echo '<script language="javascript">alert("'.$msg.'");</script>';
    echo "<script>document.location = '$url'</script>";
    }
    myAlert1("Please login to use the system!", "../index.php");
}


?> 
<title>Barangay Zone 1 Bulan Sorsogon | Admin</title>
<header id="navbar-spy" class="header header-1 header-transparent header-fixed">
                <nav id="primary-menu" class="navbar navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                            <ul class="nav navbar-nav nav-pos-center navbar-left">
                                
                                <li><a href="index.php"><strong>Dashboard</strong></a></li>
                                <li><a href="aboutus.php"><strong>About Us</strong></a></li>
                                <li><a href="residents.php"><strong>Residents</strong></a></li>
                                <li><a href="officials.php"><strong>Officials</strong></a></li>
                                <li><a href="reports.php"><strong>Reports</strong></a></li>
                                <li><a href="certificates.php"><strong>Certificates</strong></a></li>

                              <!--   <li class="has-dropdown active">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">My Account</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">View Account</a></li>
                                        <li><a href="home-map.html">Logout</a></li>
                                    </ul>
                                </li> -->

                            </ul>

                            <div class="module module-property pull-left">
                                <ul class="nav navbar-nav">
                                <!--<a data-toggle="modal" data-target="#signupModule" class="btn">Login | Sign up</a>-->

                                 <li class="has-dropdown active">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">My Account</a>&nbsp;
                                    <ul class="dropdown-menu">
                                        <li><a href="viewAccount.php">View Account</a></li>
                                        <li><a href="../index.php">Logout</a></li>
                                        <li>
                                            <a href="../dbdownload.php">Backup</a>
                                        </li>
                                    </ul>
                                </li> 

                            </ul>
                            </div>
                            <div class="module module-login pull-left">
                                <!-- <a class="btn-popup" data-toggle="modal" data-target="#signupModule">Login/Signup</a> -->
                                

                                <div class="modal register-login-modal fade" tabindex="-1" role="dialog" id="signupModule">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="#login" data-toggle="tab">login</a>
                                                    </li>
                                                    <li><a href="#signup" data-toggle="tab">signup</a>
                                                </li>
                                            </ul>
                                            <!--Login Module-->
                                            <div class="tab-content" style="width:1000px;margin-left: -330px;">
                                                <div class="tab-pane fade in active" id="login">
                                                    <div class="signup-form-container text-center">
                                                        <form class="mb-0" method="post" action="login.php">

                                                            <div class="form-group">
                                                                <input type="email" class="form-control" name="email" id="login-email" placeholder="Email Address">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" name="password" id="login-password" placeholder="Password">
                                                            </div>
                                                            <input type="submit" class="btn btn--primary btn--block" value="Sign In">
                                                            <a href="#" class="forget-password">Forget your password?</a>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!--Registration Module-->
                                                <div class="tab-pane" id="signup" >
                                                    <form class="mb-0" method="post" action="signup.php" enctype="multipart/form-data">
                                                  
                                                        <div class="form-group">
                                                            <select class="form-control" name="account" id="register-password" placeholder="Account">
                                                                <option readonly value="Account Type">Account Type</option>
                                                                <option value="Tenant">Tenant</option>
                                                                <option value="Landlord">Landlord</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="fname" id="full-name" style="text-transform:capitalize;width: 33%;display: inline;" placeholder="First Name" required="required">
                                                            <input type="text" class="form-control" name="mname" id="full-name" style="text-transform:capitalize;width: 32.6%;display: inline" placeholder="Middle Name"  >
                                                            <input type="text" class="form-control" name="lname" id="full-name" style="text-transform:capitalize;width: 33.5%;display: inline" placeholder="Last Name" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email" id="register-email" placeholder="Email Address">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" name="pw" style="width: 49.5%;display: inline;" id="register-password" placeholder="Password">
                                                            <input type="password" class="form-control" name="cpw" style="width: 50%;display: inline;" id="register-password" placeholder="Confirm Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="address" id="full-address" style="text-transform:capitalize;" placeholder="Full Address" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="tel" pattern="[0-9]{11}" class="form-control" name="contact" id="full-address" style="text-transform:capitalize;" placeholder="Contact Number" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Identification Card<span style="color:red;">*</span></label>
                                                        <input type="file" name="myfile" id="img" style="width: 100%;display: inline;" class="form-control" required="required" style="display:none;">
                                                        </div>
                                                        <div class="input-checkbox">
                                                            <label class="label-checkbox">
                                                                <span>I agree with all <a target="_blank" href="https://www.privacy.gov.ph/wp-content/uploads/DPA-of-2012.pdf">Terms & Conditions</a></span>
                                                                <input type="checkbox">
                                                                <span class="check-indicator"></span>
                                                            </label>
                                                        </div>
                                                        <input type="submit" class="btn btn--primary btn--block" value="Register">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
            
<!-- Add this if logined as Agent
                    <div class="module module-property pull-left">
                        <a href="add-property.html" target="_blank" class="btn"><i class="fa fa-plus"></i> add property</a>
                    </div>
-->

                </div>
                <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
                <script src="assets/js/sweetalert.min.js"></script>
                <!-- <script>
                    swal({
                    title: "Good job!",
                    text: "You clicked the button!",
                    icon: "success",
                    button: "Aww yiss!",
                    });
                </script> -->

                
                <?php
                    if(isset($_SESSION['status']) && $_SESSION['status'])
                    ?>
                        <script>
                            swal({
                            	title: "<?php echo $_SESSION['status']?>",
                            	text: "<?php echo $_SESSION['status_text']?>",
                            	icon: "<?php echo $_SESSION['status_code'];?>",
                            	button: "OK",
                            });
                            // swal({
                            // title: "Good job!",
                            // text: "You clicked the button!",
                            // icon: "success",
                            // button: "Aww yiss!",
                            // });
                    
                        </script>
                    <?php
                    unset($_SESSION['status']);
                ?>
                
