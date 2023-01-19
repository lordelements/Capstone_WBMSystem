<?php

// Connect to the MySQL database
include '../condb.php';
$output = ' ';

// Execute a SELECT statement to retrieve the data
$query = "SELECT * FROM reports ORDER BY reportid ASC";
$result = mysqli_query($cn, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= ' 
        <table class="table" bordered="1">
                       
        <table class="table table-striped">
        <thead>
            <tr style = "height: 30px;">
            <th style = "width: 180px;">Report ID</th>
            <th style = "width: 250px;">Incident</th>
            <th style = "width: 250px;">Place</th>
            <th style = "width: 150px;">Complainant</th>
            <th style = "width: 150px;">Complainee</th>
            <th style = "width: 150px;">Witness 1</th>
            <th style = "width: 150px;">Witness 2</th>
            <th style = "width: 450px;">Narrative</th>
            <th style = "width: 300px;">Date and Time</th>
        </tr>
    ';
    while ( $row = mysqli_fetch_assoc($result)) {
        $output .= '
                        <tr>
                            <td >'. $row['reportid']. '</td>
                            <td>'.  $row['incident'].'</td>
                            <td >'. $row['incidentplace']. '</td>
                            <td >'. $row['complainant']. '</td>
                            <td>'.  $row['complainee']. '</td>
                            <td >'. $row['witness1']. '</td>
                            <td >'. $row['witness2']. '</td>
                            <td >'. $row['narrative']. '</td>
                            <td >'. $row['dateandtime']. '</td>
                        </tr>
                    ';
}
    $output.= '
                       
                        </table>
    ';
    // Output the spreadsheet as a download
    header("Content-Type: application/Microsoft 365/xls");
    header("Content-Disposition:attachment; filename=barangay_reports_data.xls");
    echo $output;

}

?>