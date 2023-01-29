
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap5.css"> -->
    <link rel="stylesheet" href="../assets/css/bootstrap5.min.css">
    <link href="assets/css/external.css" rel="stylesheet">
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper" class="wrapper clearfix">
		
				<?php include 'navbar.php'; ?>	
		
		</div>
		</nav>
	</header>
    
<section id="heroSearch" class="hero-search mtop-0 pt-0 pb-0">
			
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="slider--content">
<section class="container-fluid">
        <button type="button" class="btn btn-primary p-30 ms-5 mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Details</button>
   
        <table class="table table-fluid table-bordered table-hover">
            <thead class='table-active'>
                <tr>
                    <th scope='col'>Brgy Certificate ID</th>
                    <th scope='col'>Payment</th>
                    <th scope='col'>Inquiry Name</th>
                    <th scope='col'>Punong Barangay Name</th>
                    <th scope='col'>Barangay Secretary</th>
                    <th scope='col'>Barangay Treasurer</th>
                    <th scope='col'>Date Time</th>
                    <th scope='col'>Actions</th>
                </tr>
            </thead>
        <tbody>
        <?php
                  include_once '../condb.php';
                  $sql = "SELECT * FROM tble_brgy_clearance";
                  $result = mysqli_query($cn,$sql);
                  $brgycert_id = 1;
                  while($row = mysqli_fetch_assoc($result))
                  {       
                      $query = mysqli_query($cn, "SELECT * FROM tble_brgy_clearance");
                      $disp = mysqli_fetch_assoc($query);
                
            ?>

                <tr>
               
                    <td><?php echo $brgycert_id++ ?></td>
                    <td><?php echo  $row['payment'] ?></td>
                    <td><?php echo  $row['recipient_name'] ?></td>
                    <td><?php echo  $row['punong_barangay'] ?></td>
                    <td><?php echo  $row['brgy_sectretary'] ?></td>
                    <td><?php echo  $row['brgy_treasurer'] ?></td>
                    <td><?php echo  $row['issued_on'] ?></td>
                    <td>
                        <a href="printCert.php? viewuserid= <?php echo  $row['brgycert_id'] ?>"  class="btn btn-primary text-decoration-none fs-6 text-light"><i class='fa fa-eye'></i></a>
                        <a href="delBrgy_clear.php? delid= <?php echo  $row['brgycert_id'] ?>" class="btn btn-danger text-decoration-none fs-6 text-light" onclick="return confirm('Are you sure you want to delete this entry?')" ><i class='fa fa-trash'></i></a>
                        <a href="#" class="btn btn-success text-decoration-none fs-6 text-light"
                         data-bs-toggle="modal" data-bs-target="#updateModal<?php echo  $row['brgycert_id'] ?>"><i class='fa fa-edit'></i></a>
                    </td>
                </tr>

            <?php 
                
                    // include 'update_printbrgycle.php';
                }
            ?>
        </tbody>
        </table>
        </section>
               
        </div>
    </div>
</div>
</div>
<div class="carousel slider-navs" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="800">
    <div class="slide--item bg-overlay bg-overlay-dark3">
        <div class="bg-section">
            <img src="../bg1.jpg" alt="background">
        </div>
    </div>
    <div class="slide--item bg-overlay bg-overlay-dark3">
        <div class="bg-section">
            <img src="../bg2.jpg" alt="background">
        </div>
    </div>
    <div class="slide--item bg-overlay bg-overlay-dark3">
        <div class="bg-section">
            <img src="../bg3.jpg" alt="background">
        </div>
    </div>
</div>
</section>
<!-- <button type="button" class="btn btn-outline-primary p-30 ms-5 mt-4"><a href="certificates.php" class="text-decoration-none text-dark fw-bold">Back</a></button> -->
<div class="cotainer-fluid mt-2">
  
    <!-- <button type="button" class="btn btn-primary p-30 ms-5 mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Details</button> -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Brgy Certificate Payment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="fuct_brgycert.php" method="post">
                <div class="mb-3">
                    <label for="payment_cost" class="col-form-label">Payment:</label>
                    <input type="number" class="form-control form-control-md" name="payment"  id="payment_cost">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Recipient Name:</label>
                    <input type="text" class="form-control form-control-md" name="recipient_name" id="recipient-name">
                </div>
               
                <div class="mb-3">
                    <label for="punongbrgy-name" class="col-form-label">Punong Barangay Name:</label>
                    <input type="text" class="form-control form-control-md" name="punong_barangay"  id="punongbrgy-name">
                </div>
                <div class="mb-3">
                    <label for="brgysecretary-name" class="col-form-label">Barangay Secretary Name:</label>
                    <input type="text" class="form-control form-control-md" name="brgy_sectretary" id="brgysecretary-name">
                </div>
                <div class="mb-3">
                    <label for="brgytreasurer-name" class="col-form-label">Barangay Treasurer Name:</label>
                    <input type="text" class="form-control form-control-md" name="brgy_treasurer"  id="brgytreasurer-name">
                </div>
                <div class="mb-3">
                    <label for="issued_date" class="col-form-label">Barangay Treasurer Name:</label>
                    <input type="date" class="form-control form-control-md" name="issued_on"  id="issued_date">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div> -->
        </div>
    </div>
    </div>

</div>

<!-- edit -->



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>