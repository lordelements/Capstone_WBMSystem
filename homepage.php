<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Zone 1 Bulan Sorsogon</title>
    <link rel="stylesheet" href="assets/css/bootstrap5.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;width: 100%;">
        <div class="logo ms-4">
            <img src="assets/images/logo/logo.png" alt="" class="img-fluid p-30 ratio-1x1 float-start" style="height: 100px">
            <h4 class="text-sm-start fs-3 float-start text-dark" style="margin-top: 20px;margin-left:10px;">Barangay Management System for Zone 1 Bulan Sorsogon</h4>
        </div>
    </nav>
    <main>
    <div class="d-flex justify-content-center align-items-center mt-5">


        <div class="card">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center">
                <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
                </li>
                <li class="nav-item text-center">
                <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a>
                </li>
            
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                
                <div class="form px-4 pt-5">

                    <input type="text" name="" class="form-control" placeholder="Email or Phone">

                    <input type="text" name="" class="form-control" placeholder="Password">
                    <button class="btn btn-dark btn-block">Login</button>

                </div>



                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                

                <div class="form px-4">

                    <input type="text" name="" class="form-control" placeholder="Name">

                    <input type="text" name="" class="form-control" placeholder="Email">

                    <input type="text" name="" class="form-control" placeholder="Phone">

                    <input type="text" name="" class="form-control" placeholder="Password">

                    <button class="btn btn-dark btn-block">Signup</button>
                    

                </div>



                </div>
                
            </div>
            
        
        

        </div>


        </div>
    </main>
</body>
</html>

<style>
    body {
        background: url('assets/brgyinfobg.jpg') no-repeat;
        height: 100vh;
        width: 100%;
        background-size: cover;
        opacity: .9;
    }
    .card{
        width: 500px;
        border:none;
        padding: 10px;
     }
      .btr{

        border-top-right-radius: 5px !important;
        }

        .btl{

        border-top-left-radius: 5px !important;
        }

        .btn-dark {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }


        .btn-dark:hover {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }


        .nav-pills{

            display:table !important;
            width:100%;
        }

        .nav-pills .nav-link {
            border-radius: 0px;
            border-bottom: 1px solid #0d6efd40;

        }

        .nav-item{
            display: table-cell;
            background: #0d6efd2e;
        }


        .form{

            padding: 10px;
            height: 300px;
        }

        .form input{
            margin-bottom: 12px;
            border-radius: 3px;
            height: 3rem;
        }


        .form input:focus{

            box-shadow: none;
        }


        .form button{

        margin-top: 20px;
        }
</style>