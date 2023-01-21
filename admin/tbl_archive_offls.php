<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <!-- Content here -->
    <?php
                
        // Get the data to be deleted from the original table
        include_once '../condb.php';
        $sql = "SELECT * FROM officials  WHERE officialid= $officialid";
        $result = mysqli_query($cn, $sql);

       
        // Insert the deleted data into the archive table
        while ($row = mysqli_fetch_assoc($result)) {
            $officialid=$_GET['delOff_id'];
            $position = $row['position'];
            $name = $row['lastname'].' '.$row['middlename'].' '.$row['lastname'];
            $gender = $row['gender'];
            $birthdate = $row['birthdate'];
            $civilstatus = $row['civilstatus'];
            $address = $row['address'];
            $contact = $row['contact'];
            $termyears = $row['termyears'];
            $yearstarted = $row['yearstarted'];

            $sql = "INSERT INTO `trash`(`delOff_id`, `position`, `firstname`, `middlename`, `lastname`, `gender`, `birthdate`, `civilstatus`, `address`, `contact`, `termyears`, `yearstarted`, `status`)
             VALUES ('$position','$name','$gender','$birthdate','$civilstatus','$address','$contact','$termyears','$yearstarted')";
            mysqli_query($cn, $sql);
        }

                
        // Delete the data from the original table
        $sql = "DELETE FROM officials WHERE  officialid= $officialid";
        mysqli_query($cn, $sql);

        // Get the data from the archive table
        $sql = "SELECT * FROM `trash`";
        $result = mysqli_query($cn, $sql);

    ?>
<table class="table table-striped table-hover">
    <thead>
       <tr>
            <th>Official ID</th>
            <th>Position</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Birthdate</th>
            <th>CivilStatus</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Years of Term</th>
            <th>Year Started</th>
            <th>Profile</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php
     while($row = mysqli_fetch_assoc($result))
     {       
         $query = mysqli_query($cn, "SELECT * FROM trash");
         $disp = mysqli_fetch_assoc($query);

         echo"<tbody id='myTable'>";
         echo "<tr>";
         
         echo "<td>" . $row['officialid'] . " </td> ";
         echo "<td>" . $row['position'] . " </td> ";
         echo '<td>'. $row['lastname'].' ' . $row['middlename'] . ' ' . $row['firstname'] . '</td>';
         echo "<td>" . $row['gender'] . " </td> ";
         echo "<td>" . $row['birthdate'] . "  </td> ";
         echo "<td>" . $row['civilstatus'] . "</td> ";
         echo "<td>" . $row['address'] . "</td> ";
         echo "<td>" . $row['contact'] . "</td> ";
         echo "<td>" . $row['termyears'] . "</td> ";
         echo "<td>" . $row['yearstarted'] . "</td> ";
         echo  "<td>".
          '<img src="../images/'.$row['idcard'].' "width=50px; height=50px; margin: 15px 10px 15px 10px; border-radius:100%;" alt="Image">';
         "</td>";
        echo "</tr>";
       
    } 
    echo "</tbody>";
    echo "</table>";?>
    
    </div>
    
</body>
</html>