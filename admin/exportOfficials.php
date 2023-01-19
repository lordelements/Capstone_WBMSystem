<?php

// Connect to the MySQL database
include '../condb.php';
$output = ' ';

// Execute a SELECT statement to retrieve the data
$query = "SELECT * FROM officials ORDER BY officialid ASC";
$result = mysqli_query($cn, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= ' 
        <table class="table" bordered="1">
                       
                            <tr style = "height: 30px;">
                                <th >Official ID</th>
                                <th >Position</th>
                                <th >Name</th>
                                <th >Gender</th>
                                <th >Birthdate</th>
                                <th >Civil Status</th>
                                <th >Address</th>
                                <th >Contact</th>
                                <th >Years of Term</th>
                                <th >Year Started</th>
                            </tr>
    ';
    while ( $row = mysqli_fetch_assoc($result)) {
        $output .= '
                        <tr>
                            <td >'. $row['officialid']. '</td>
                            <td >'. $row['position']. '</td>
                            <td>'.  $row['lastname'].' ' . $row['middlename'] . ' ' . $row['firstname'] . '</td>
                            <td >'. $row['gender']. '</td>
                            <td >'. $row['birthdate']. '</td>
                            <td>'.  $row['civilstatus']. '</td>
                            <td >'. $row['address']. '</td>
                            <td >'. $row['contact']. '</td>
                            <td >'. $row['termyears']. '</td>
                            <td >'. $row['yearstarted']. '</td>
                        </tr>
                    ';
}
    $output.= '
                       
                        </table>
    ';
    // Output the spreadsheet as a download
    header("Content-Type: application/Microsoft 365/xls");
    header("Content-Disposition:attachment; filename=Brgy_Officials_data.xls");
    echo $output;

}

?>