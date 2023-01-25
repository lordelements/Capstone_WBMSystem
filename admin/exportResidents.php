<?php

// Connect to the MySQL database
include '../condb.php';
// $output = ' ';

// require 'vendor/autoload.php';
// require 'excelReader/Writer/Xlsx.php';
// require 'excelReader/Writer/Xlscls.php';
// require 'excelReader/Writer/Csv.php';

// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
// use PhpOffice\PhpSpreadsheet\Writer\Xls;
// use PhpOffice\PhpSpreadsheet\Writer\Csv;

// if (isset($_POST['export_excel_btn'])) {
//     $file_ext_name = $_POST['export_file_type'];
//     $filename = "brgy-residents-records";

//     $query = "SELECT * FROM residents ORDER BY residentid ASC";
//     $result = mysqli_query($cn, $query);

//     if (mysqli_num_rows($result) > 0) {
//         $spreadsheet = new Spreadsheet();
//         $sheet = $spreadsheet->getActiveSheet();

//         $sheet->setCellValue('A1', 'Resident ID');
//         $sheet->setCellValue('B1', 'full Name');
//         $sheet->setCellValue('C1', 'Gender');
//         $sheet->setCellValue('D1', 'Birthdate');
//         $sheet->setCellValue('E1', 'Civil Status');
//         $sheet->setCellValue('F1', 'Address');
//         $sheet->setCellValue('G1', 'Contact');

//         $row_count = 2;
//         foreach ($result as $data) {
//             $sheet->setCellValue('A'.$row_count, $data['residentid']);
//             $sheet->setCellValue('B'.$row_count, $data['firstname'].' '.$data['lastname'].' '.$data['middlename']);
//             $sheet->setCellValue('C'.$row_count, $data['gender']);
//             $sheet->setCellValue('D'.$row_count, $data['birthdate']);
//             $sheet->setCellValue('E'.$row_count, $data['civilstatus']);
//             $sheet->setCellValue('F'.$row_count, $data['address']);
//             $sheet->setCellValue('G'.$row_count, $data['contact']);
//             $row_count++;
//         }

//         if ($file_ext_name == 'xlsx') {
//             $writer = new Xlsx($spreadsheet);
//             $final_filename = $filename.'xlsx';
//         }
//         elseif ($file_ext_name == 'xls') {
//             $writer = new Xls($spreadsheet);
//             $final_filename = $filename.'xls';
//         }
//         elseif ($file_ext_name == 'csv') {
//             $writer = new Csv($spreadsheet);
//             $final_filename = $filename.'csv';
//         }

//         $writer->save($final_filename);
//     }
    
// }
// else {
//     $_SESSION['status'] = "Error";
//     $_SESSION['status_text'] = "Record not exported";
//     $_SESSION['status_code'] = "error";
//     header('Location: residents.php');
//     exit(0);
// }



// Execute a SELECT statement to retrieve the data
// $query = "SELECT 'residentid','lastname','middlename','firstname','gender','birthdate','civilstatus','address','contact' FROM residents ORDER BY residentid ASC";
// $result = mysqli_query($cn, $query);

// if (!$result = $cn->query($query)) {
//     exit($cn->error);
// }

// $users = array();
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $users[] = $row;
//     }
// }

// header('Content-Type: text/csv; charset=utf-8');
// header('Content-Disposition: attachment; filename=Residents.csv');
// $output = fopen('php://output', 'w');
// fputcsv($output, array('residentid', 'lastname','middlename', 'firstname', 'gender', 'birthdate', 'civilstatus', 'address', 'contact'));

// if (count($users) > 0) {
//     foreach ($users as $row) {
//         fputcsv($output, $row);
//     }
// }


// $query = "SELECT * FROM residents ORDER BY residentid ASC";
// $result = mysqli_query($cn, $query);

// if (mysqli_num_rows($result) > 0) {
//     $output .= ' 
//         <table class="table" bordered="1">
                       
//                             <tr style = "height: 30px;">
//                                 <th >Resident ID</th>
//                                 <th >Name</th>
//                                 <th >Gender</th>
//                                 <th >Birthdate</th>
//                                 <th >Civil Status</th>
//                                 <th >Address</th>
//                                 <th >Contact</th>
//                             </tr>
//     ';
//     while ( $row = mysqli_fetch_assoc($result)) {
//         $output .= '
//                         <tr>
//                             <td >'. $row['residentid']. '</td>
//                             <td>'.  $row['lastname'].' ' . $row['middlename'] . ' ' . $row['firstname'] . '</td>
//                             <td >'. $row['gender']. '</td>
//                             <td >'. $row['birthdate']. '</td>
//                             <td>'.  $row['civilstatus']. '</td>
//                             <td >'. $row['address']. '</td>
//                             <td >'. $row['contact']. '</td>
//                         </tr>
//                     ';
// }
//     $output.= '
                       
//                         </table>
//     ';
//     // Output the spreadsheet as a download
//     // header('Content-Type: text/xls; charset=utf-8');
//     // header("Content-Type: application/vnd.ms-excel");
//     // header("Content-Disposition:attachment; filename=barangay_Residents.xls");
//     // prepare headers information
    
//     header("Content-Type: application/force-download");
//     header("Content-Type: application/vnd.ms-excel 97-2003");
//     header("Content-Type: application/download");
//     header("Content-Disposition: attachment; filename=\"Residentsdata_".date("Y-m-d").".xls\"");
//     header("Content-Transfer-Encoding: binary");
//     header("Pragma: no-cache");
//     header("Expires: 0");
//     echo $output;
//     exit(0);
// }

include('SimpleXLSXGen.php');

$residents = [
    ['Resident ID', 'Full Name' , 'Gender' , 'Birthdate' , 'Civil Status' , 'Address' , 'Contact']
];

$residentid = 0;
$sql = "SELECT * FROM residents ORDER BY residentid ASC";
$res = mysqli_query($cn, $sql);
if (mysqli_num_rows($res) > 0) {
    foreach ($res as $row) {
        $residentid++;
        $residents = array_merge($residents, array(array($residentid, $row['lastname'].' ' . $row['middlename'] . ' ' . $row['firstname'],
        $row['gender'], $row['birthdate'], $row['civilstatus'], $row['address'], $row['contact'])));
    }
}

$xlsx = Shuchkin\SimpleXLSXGen::fromArray( $residents );
$xlsx->downloadAs('residents.xlsx');


// echo "<pre>";
// print_r($residents);

?>