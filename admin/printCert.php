<?php 
        include_once '../condb.php';
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap5.css">
    <link rel="stylesheet" href="../assets/css/bootstrap5.min.css">
</head>
<body>

<div class="container b-10">
    <button type="button" class="btn btn-outline-primary"><a href="generate_brgycert.php" class="text-decoration-none text-dark fw-bold">Back</a></button>
    <div class="wrapper">
            
            <div class="main-panel">
                <div class="content">
                    <div class="panel-header bg-primary-gradient">
                        <div class="page-inner">
                            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                                <div>
                                    <h2 class="text-white fw-bold">Generate Certificate</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-inner">
                        <div class="row mt--2">
                            <div class="col-md-12">

                                <!-- <?php if(isset($_SESSION['message'])): ?>
                                    <div class="alert alert-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert">
                                        <?php echo $_SESSION['message']; ?>
                                    </div>
                                <?php unset($_SESSION['message']); ?>
                                <?php endif ?> -->

                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-head-row">
                                            <div class="card-title">Barangay Certificate</div>
                                            <div class="card-tools">
                                                <button class="btn btn-primary btn-border btn-round btn-sm" onclick="printDiv('printThis')">
                                                    <i class="fa fa-print"></i>
                                                    Print Certificate
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <?php 
                                        $brgycert_id=$_GET['viewuserid'];
                                        $query ="SELECT  `payment`, `recipient_name`, `punong_barangay`, `brgy_sectretary`, `brgy_treasurer`, `issued_on`  FROM tble_brgy_clearance WHERE brgycert_id=$brgycert_id";
                                        $result = mysqli_query($cn, $query);
                                                                                
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                
                                            
                                    ?>

                                    <div class="card-body m-5 mt-5" id="printThis">
                                        <div class="d-flex flex-wrap justify-content-center" style="border-bottom:1px solid red">
                                            <div class="text-center">
                                                <h3 class="mb-0">Republic of the Philippines</h3>
                                                <h3 class="mb-0">Province of Sorsogon</h3>
                                                <h3 class="mb-0">Municipality of Bulan</h3>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-2">
                                                <div class="text-center p-2" style="border:2px dotted red">
                                                    <img src="../assets/images/logo/logo.png" class="img-fluid" width="200" />
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="text-center">
                                                    <h2 class="mt-4 fw-bold">OFFICE OF THE PUNONG BARANGAY </h2>
                                                </div>
                                                <div class="text-center">
                                                    <h1 class="mt-4 fw-bold mb-5">BARANGAY CLEARANCE</h1>
                                                </div>
    
                                                <h2 class="mt-5">TO WHOM IT MAY CONCERN:</h2>
                                                <h2 class="mt-3" style="text-indent: 40px;">This is to certify that <span class="fw-bold" style="font-size:25px"> <strong> Mrs/Ms. <?=  $row['recipient_name'];?> </strong></span>, of legal age, Filipino,<span class="fw-bold" style="font-size:25px"> SINGLE,</span> with residence and postal address at  
                                                <span class="fw-bold" style="font-size:25px">Barangay Zone 1, Bulan, Sorsogon.</span> According to records of this Barangay he/she is of good moral character and law-abiding citizen.</h2>
                                                <h2 class="mt-3" style="text-indent: 40px;">Certifies further that the above individual has 	her monthly income of  <?=  $row['payment'];?> thousand pesos. </h2>
                                                <h2 class="mt-5">Issued this  <span class="fw-bold" style="font-size:25px"><?= $row['issued_on'];?>.</span></h2>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="p-3 text-right mr-3">
                                                    <p class="ml-2" style="font-size:20px">Certified by:</p> 
                                                    <h2 class="fw-bold mb-0 text-uppercase"><?= $row['punong_barangay'];?></h2>
                                                    <p class="mr-3">PUNONG BARANGAY</p>
                                                </div>
                                                <div class="p-3 text-left mr-3">
                                                    <p class="ml-2" style="font-size:20px">Attested by:</p> 
                                                    <h2 class="fw-bold mb-0 text-uppercase"><?= $row['brgy_sectretary'];?></h2>
                                                    <p class="ml-2">BARANGAY SECRETARY</p>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="p-3 text-right mr-3">
                                                    <p class="ml-2" style="font-size:20px">Issued on: <span class="fw-bold" style="font-size:25px">_<?= $row['issued_on'];?>_</span></p> 
                                                    <p class="ml-2" style="font-size:20px">Issued at Zone 1, Bulan, Sorsogon</p> 
                                                    <p class="ml-2" style="font-size:20px">Note:<span class="fw-bold" style="font-size:25px">__”Actual”__</span>resident</p> 
                                                </div>
                                            </div>
                                            <div class="col-md-12 d-flex flex-wrap justify-content-end">
                                                <div class="p-3 text-center">
                                                    <div class="border mb-3" style="height:150px;width:290px">
                                                        <p class="mt-5 mb-0 pt-5">Right Thumb Mark</p>
                                                    </div>
                                                    <h2 class="fw-bold mb-0"><?= $row['punong_barangay'];?></h2>
                                                    <p>Tax Payer's Signature</p>
                                                </div>
                                            </div>

                                        
                                        </div>
                                    </div>

                                    <?php 
                                    
                                }
                                    } else {
                                        echo "0 results";
                                    }
                                            
                                    mysqli_close($cn);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            
            </div>
            
        </div>
	</div>
    <style>
        @page {
            size: auto;   /* auto is the initial value */
            margin: 0;  /* this affects the margin in the printer settings */
        }
        body {
            margin: 2em;
            }

            /* override styles when printing */
            @media print {

            body {
                margin: 0;
            }
            a[href]:after {
                content: none !important;
            }

            }
            /* print.css */
                header, footer, aside, nav, form, iframe, .menu, .hero, .adslot {
                display: none;
                }
    </style>
    <script>
            function openModal(){
                $('#pment').modal('show');
            }

            function printDiv(divName) {
                var printContents = document.getElementById(divName).innerHTML;
                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;
            }
    </script>
</div>
</div>
</body>
</html>