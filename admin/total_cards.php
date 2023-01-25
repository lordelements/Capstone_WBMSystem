
<?php  include_once("../condb.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:80,80i,200,200i,300,300i,400,400i,800,800i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@10.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>

    <div class=".container-fluid row ml-10 mt-10 flex pos-relative">

        <div class="col-sm p-3 well-sm mb-10">
            <div class="card mb-2 text-white" style="background-color: #00425A; width: 30rem; height: 10rem; border-radius:5px;">
            <!-- <img src="assets/icons/res.png" class="card-img-top w-210 p-3 mt-10" style="width: 50px; height: 50px;" alt="..."> -->
            <br><br>
            <h2 class="font-22 mb-0 mt-15-sm text-white">Residents</h2>
                <div class="card-body mt-10">
                        <?php 
                        $totalResidents = "SELECT * FROM residents";
                        $totalResidents_count = mysqli_query($cn,$totalResidents);
                        if ($total_Residents =mysqli_num_rows($totalResidents_count) ) {
                            echo '<h5 class="card-title text-white font-20">
                            <a class="card-title text-white text-center" href="residents.php"> Total Residents </a>
                            '.$total_Residents.'</h5>';
                        }
                        else{
                            echo ' <p class="card-text text-white text--center font-20">No data found</p>';
                        }
                        
                        ?>
                        <!-- <a class="card-title text-white text-lg-start font-20" href="residents.php">Residents</a> -->
                
                </div>
            </div>
        </div>


        <div class="col-sm p-3 well-sm mb-10">
            <div class="card mb-2 text-white" style="background-color: #626233; width: 30rem; height: 10rem; border-radius:5px;">
            <!-- <img src="assets/icons/offs.png" class="card-img-top w-210 p-3 mt-10" style="width: 50px; height: 50px;"  alt="..."> -->
            <br><br>
            <h2 class="font-22 text--capitalize color-white mb-0 mt-15">Brgy Officials</h2>
            <div class="card-body mt-10">
            
                <?php 
                $totalOfficials = "SELECT * FROM officials";
                $totalOfficial_count = mysqli_query($cn,$totalOfficials);
                if ($total_Officials =mysqli_num_rows($totalOfficial_count) ) {
                    echo '<h5 class="card-title text-white  mt-10 font-20">  
                    <a class="card-title text-white text-lg-start font-20" href="officials.php"> Total Officials </a> '.$total_Officials.'</h5>';
                }
                else{
                    echo ' <p class="card-text text-white text--center font-20">No data found</p>';
                }
                
                ?>
                <!-- <a class="card-title text-white text-lg-start font-20" href="officials.php">Officials</a> -->
            </div>
            </div>
        </div>

        <div class="col-sm well-sm p-3 mb-10">
            <div class="card mb-2 text-white bg-primary" style=" width: 30rem; height: 10rem; border-radius:5px;">
            <!-- <img src="assets/icons/reps.png" class="card-img-top w-210 p-3 mt-10" style="width: 60px; height: 60px;"  alt="..."> -->
            <br><br>
            <h2 class="font-22 text--capitalize color-white mb-0 mt-15">Reports</h2>
            <div class="card-body mt-10">
            
                <?php 
                    $totalreports = "SELECT * FROM reports";
                    $totalreports_count = mysqli_query($cn,$totalreports);
                    if ($total_reports =mysqli_num_rows($totalreports_count) ) {
                        echo '<h5 class="card-title text-white font-20"> Total Reports '.$total_reports.'</h5>';
                    }
                    else{
                        echo ' <p class="card-text text-white text--center font-20">No data found</p>';
                    }
                    
                ?>
             <!-- <a class="card-title text-white text-lg-start font-20" href="reports.php">Reports</a> -->
            </div>
            </div>
        </div>
    </div>

    <div class="row ml-10 mt-10 flex pos-relative  clearfix">

        <div class="col-sm well-sm p-3 mb-10">
            <div class="card mb-2 bg-secondary text-white" style="width: 30rem; height: 10rem; border-radius:5px;">
            <!-- <img src="assets/icons/users.png" class="card-img-top w-210 p-3 mt-10" style="width: 50px; height: 50px;"  alt="..."> -->
            <br><br>
            <h2 class="font-22 text--capitalize color-white mb-0 mt-15">Users</h2>
            <div class="card-body mt-10">
            
                <?php
                    $totalUsers = "SELECT * FROM accounts";
                    $totalUsers_count = mysqli_query($cn,$totalUsers);
                    if ($total_Users =mysqli_num_rows($totalUsers_count) ) {
                        echo '<h5 class="card-title text-white font-20"> 
                        <a class="card-title text-white text-lg-start font-20" href="users_account.php">Users</a>Total '.$total_Users.'</h5>';
                    }
                    else{
                        echo ' <p class="card-text text-white mt-4 text--center font-20">No data found</p>';
                    }
                    
                ?>
            <!-- <a class="card-title text-white text-lg-start font-20" href="users_account.php">Users</a> -->
            </div>
            </div>
        </div>

        <div class="col-sm well-sm p-3 mb-10">
            <div class="card mb-2 text-white" style="background-color: #20c997;width: 30rem; height: 10rem; border-radius:5px;">
            <!-- <img src="assets/icons/male.png" class="card-img-top w-210 p-3 mt-10" style="width: 50px; height: 50px;"  alt="..."> -->
            <br><br>
            <h2 class="font-22 text--capitalize color-white mb-0 mt-15">Male</h2>
            <div class="card-body mt-10">
            
                <?php 
                   
                    $totalMale = "SELECT gender FROM residents WHERE gender = 'male'";
                    $totalMale_count = mysqli_query($cn,$totalMale);
                    if ($total_Male =mysqli_num_rows($totalMale_count) ) {
                        echo '<h5 class="card-title text-white font-20"> Total Male '.$total_Male.'</h5>';
                    }
                    else{
                        echo ' <p class="card-text text-white text--center font-20">No data found</p>';
                    }
                    
                ?>
                <!-- <a class="card-title text-white text-lg-start font-20" href="#">Male</a> -->
            <div></div>
            </div>
            </div>
        </div>

        <div class="col-sm well-sm p-3 mb-10 height-800">
            <div class="card hover mb-0" style="background-color: #FF7B54; width: 30rem; height: 10rem; border-radius:5px;">
            <!-- <img src="assets/icons/she_users.png" class="card-img-top w-210 p-3 mt-10" style="width: 50px; height: 50px;"  alt="..."> -->
            <br><br>
            <h2 class="font-22 text--capitalize color-white mb-0 mt-15">Female</h2>
            <div class="card-body mt-10">
            
                <?php 
                   
                    $totalFemale = "SELECT gender FROM residents WHERE gender = 'female'";
                    $totalFemale_count = mysqli_query($cn,$totalFemale);
                    if ($total_Female =mysqli_num_rows($totalFemale_count) ) {
                        echo '<h5 class="card-title text-dark font-20"> Total  '.$total_Female.'</h5>';
                    }
                    else{
                        echo ' <p class="card-text text-dark text--center font-20">No data found</p>';
                    }
                    
                ?>
                <!-- <a class="card-title text-white text-lg-start font-20" href="#">Female</a> -->
            <div></div>
            </div>
            </div>
        </div>
    </div>

    <style>
        /* @mixin clearfix() {
            &::after {
                display: block;
                clear: both;
                content: "";
            }
            } */
                    
            @media only screen and (max-width: 600px)  { 
                .row{
                    position: relative;
                    width: 500px;
                    display: grid;
                }
                /* .row, .col-sm{
                    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                    grid-auto-rows: minmax(200px, 1fr);
                    gap: 10px;
                    
                } */
                .card {
                    width: 50px;
                    /* margin-top: 10px; */
                    height: 50px;
                    gap: 10px;
                    
                }
                .card:hover {
                    transform: translateX(10px);
                    transition: ease-in .2s;
                    background-color: grey;
                }
                .card img {
                    height: 50;
                    width: 50;

                }
             }
    </style>

</body>
</html>