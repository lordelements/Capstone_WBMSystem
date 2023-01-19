<?php

// Connect to the MySQL database
include '../condb.php';
$output = ' ';

// Execute a SELECT statement to retrieve the data
$query = "SELECT * FROM residents ORDER BY residentid ASC";
$result = mysqli_query($cn, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= ' 
        <table class="table" bordered="1">
                       
                            <tr style = "height: 30px;">
                                <th >Resident ID</th>
                                <th >Name</th>
                                <th >Gender</th>
                                <th >Birthdate</th>
                                <th >Civil Status</th>
                                <th >Address</th>
                                <th >Contact</th>
                            </tr>
    ';
    while ( $row = mysqli_fetch_assoc($result)) {
        $output .= '
                        <tr>
                            <td >'. $row['residentid']. '</td>
                            <td>'.  $row['lastname'].' ' . $row['middlename'] . ' ' . $row['firstname'] . '</td>
                            <td >'. $row['gender']. '</td>
                            <td >'. $row['birthdate']. '</td>
                            <td>'.  $row['civilstatus']. '</td>
                            <td >'. $row['address']. '</td>
                            <td >'. $row['contact']. '</td>
                        </tr>
                    ';
}
    $output.= '
                       
                        </table>
    ';
    // Output the spreadsheet as a download
    header("Content-Type: application/Microsoft 365/xls");
    header("Content-Disposition:attachment; filename=barangay_residents_data.xls");
    echo $output;

}

?>