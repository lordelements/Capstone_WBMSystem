<?php 
    include_once '../condb.php';
?>
<div class="cotainer-fluid mt-2">
  
    <!-- <button type="button" class="btn btn-primary p-30 ms-5 mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Details</button> -->

    <div class="modal fade" id="updateModal<?php echo  $row['brgycert_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Brgy Certificate Payment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <!-- <input type="hidden" name="brgycert_id" value="<?php echo $brgycert_id ?>"> -->
            <form action="fuctUpdate_brgyclear.php" method="post">
           
                <?php 

                        // $brgycert_id = $_GET['brgycert_id'];

						$result = mysqli_query ($cn, "SELECT * FROM tble_brgy_clearance WHERE brgycert_id='$brgycert_id'");
						$row = mysqli_fetch_assoc($result);

                ?>

                <div class="mb-3">
                    <label for="payment_cost" class="col-form-label">Payment:</label>
                    <input type="hidden" name="brgycert_id" value="<?php echo $row['brgycert_id']?>"/>
                    <input type="number" class="form-control form-control-md" name="payment" value="<?php echo  $row['payment'] ?>"  id="payment_cost">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Recipient Name:</label>
                    <input type="text" class="form-control form-control-md" name="recipient_name"value="<?php echo  $row['recipient_name'] ?>"  id="recipient-name">
                </div>
               
                <div class="mb-3">
                    <label for="punongbrgy-name" class="col-form-label">Punong Barangay Name:</label>
                    <input type="text" class="form-control form-control-md" name="punong_barangay"value="<?php echo  $row['punong_barangay'] ?>"   id="punongbrgy-name">
                </div>
                <div class="mb-3">
                    <label for="brgysecretary-name" class="col-form-label">Barangay Secretary Name:</label>
                    <input type="text" class="form-control form-control-md" name="brgy_sectretary"value="<?php echo  $row['brgy_sectretary'] ?>"  id="brgysecretary-name">
                </div>
                <div class="mb-3">
                    <label for="brgytreasurer-name" class="col-form-label">Barangay Treasurer Name:</label>
                    <input type="text" class="form-control form-control-md" name="brgy_treasurer" value="<?php echo  $row['brgy_treasurer'] ?>"   id="brgytreasurer-name">
                </div>
                <div class="mb-3">
                    <label for="issued_date" class="col-form-label">Barangay Treasurer Name:</label>
                    <input type="date" class="form-control form-control-md" name="issued_on" value="<?php echo  $row['payment'] ?>"   id="issued_date">
                </div>

                <button type="submit" name="update" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div> -->
        </div>
    </div>
    </div>

</div>