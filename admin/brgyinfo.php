
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="zytheme" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Real Estate html5 template">
		<link href="assets/images/favicon/favicon.png" rel="icon">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="assets/css/external.css" rel="stylesheet">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
						<form class="mb-0" method="post" action="funcbrgyinfo.php" enctype="multipart/form-data" style="margin-top: -100px;">
							<div class="form-box search-properties">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-12">
                                        <div class="form-group">
											<div class="select--box">
												<i class="fa fa-angle-down"></i>
												<select name="province" autocomplete="off">
												<!-- <select name="province" id="province" autocomplete="off"> -->
													<option>Select Provinces</option>
													<option value="sorsogon">Sorsogon</option>
													<option value="">Masbate</option>
													<option value="">Legazpi</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-12">
                                        <div class="form-group">
											<div class="select--box">
												<i class="fa fa-angle-down"></i>
												<select name="municipality" autocomplete="off">
												<!-- <select name="municipality" id="municipality" autocomplete="off"> -->
													<option>Select Municipality</option>
													<option value="bulan">Bulan</option>
													<option value="">Irosin</option>
													<option value="">Gubat</option>
													<option value="">Donsol</option>
													<option value="">Pilar</option>
													<option value="">Castilla</option>
													<option value="">Magallanes</option>
													<option value="">Bulusan</option>
													<option value="">Santa Magdalena</option>
													<option value="">Puerto Diaz</option>
													<option value="">Matnog</option>
												</select>
											</div>
										</div>
									</div>
									
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<div class="select--box">
												<input type="text" name="brg_name" autocomplete="off" class="form-control" id="brg_name" placeholder="Barangay Name" required>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<div class="select--box">
												<input type="text" name="contactnum"  pattern="[0-9]{11}"" autocomplete="off" class="form-control" id="contactnum" placeholder="Barangay Contact Number">
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<div class="select--box">
												<input type="text" name="brgy_contactname" autocomplete="off" class="form-control" id="brgy_contactname" placeholder="Barangay Person to be Contact " required>
											</div>
										</div>
									</div>
									
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<div class="select--box">
												<i>Barangay Picture</i>
												<input type="file" class="form-control" name="brgy_logo" accept=".jpg,.jpeg,.png" autocomplete="off" id="brgy_logo" required="required"/>
											</div>
										</div>
									</div>
									
									<div class="col-xs-12 col-sm-6 col-md-12">
										<input type="submit" value="Add to Records" name="submit" class="btn btn--primary btn--block">
										<!-- <input type="submit" value="Add to Records" onclick="addBrgyInfo()" class="btn btn--primary btn--block"> -->
									</div>
								</div>
							</div>
						</form>
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
	<section id="properties-carousel" class="properties-carousel pt-45 pb-90">
		<div class="container">
			<div class="row">
				<center><h5>Officials List</h5>
			Search: <input id="myInput" class="form-control" style="display:inline;width: 50%;" type="text" placeholder="Search by ID, Name, Address, Contact Number, and etc."></center><br>
			<?php 

			$email = $_SESSION['email'];
			$logid = $_SESSION['logid'];

			$sql = "SELECT * FROM officials";

                        echo 
                        "
                        <div class='container' style='width:1550px;margin-left:-200px'>
							<form method='POST' action='exportOfficials.php'>
								<input type='submit' value='Export-excel' class='btn btn-success'>
							</form>
                        <table class='table table-striped'>
                        <thead>
                        <tr style = 'height: 30px;'>
                        <th style = 'width: 180px;'>Official ID</th>
                        <th style = 'width: 150px;'>Position</th>
                        <th style = 'width: 350px;'>Name</th>
                        <th style = 'width: 150px;'>Gender</th>
                        <th style = 'width: 150px;'>Birthdate</th>
                        <th style = 'width: 150px;'>CivilStatus</th>
                        <th style = 'width: 450px;'>Address</th>
                        <th style = 'width: 300px;'>Contact</th>
                        <th style = 'width: 350px;'>Years of Term</th>
                        <th style = 'width: 350px;'>Year Started</th>
                        <th style = 'width: 150px;'>Status</th>
                        <th style = 'width: 250px;'>ID Card</th>
                        <th style = 'width: 550px;'>Action</th>
                        </tr>";

                        $result = mysqli_query($cn,$sql);
                        
                        while($row = mysqli_fetch_assoc($result))
                        {       
                        	$query = mysqli_query($cn, "SELECT * FROM residents");
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

                                if ($row['status'] == "0")
                                {
                                	$stat = "Active";
                                }
                                else {
                                	$stat = "Archived";
                                }

                                echo "<td>" . $stat . "</td> ";
                                echo "<td><a target='_blank' class='btn btn-light' style='width:100%;border:1px solid black;color:black' href='".$row['idcard']."'>View Image</a></td> ";

                                echo "<td><a class='btn btn-success' style='width:49%;border:1px solid black;color:black' href='viewOfficial.php?id=" . $row['officialid'] . "'>Edit</a> ";

                                if ($row['status'] == "0")
                                {
                                	echo "<a class='btn btn-warning' style='width:49%;border:1px solid black;color:black' href='archiveOfficials.php?id=" . $row['officialid'] . "'>Archive</a></td> ";
                                }
                                else {
                                	echo "<a class='btn btn-warning' style='width:49%;border:1px solid black;color:black' href='activateOfficials.php?id=" . $row['officialid'] . "'>Restore</a></td> ";
                                }

                	}
                	echo '</table><br>';
                	?>
			</div>
		</div>
	</section>
	<script>
		$(document).ready(function(){
		  $("#myInput").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $("#myTable tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
	</script>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/loadGeo.js"></script>



<script>
	// var myArray = []
	

	// $.ajax({
	// 	method:'GET',
	// 	url:'homerentalsystem/user/assets/geo_api.json',
	// 	// url:'https://reqres.in/api/users',
	// 	success:function(response){
	// 		myArray = response.data
	// 		// buildTable(myArray)
	// 		console.log(myArray)
	// 	}
	// })



	// function buildTable(data){
	// 	var dropdown = document.getElementById('select-location')

	// 	for (var i = 0; i < data.length; i++){
	// 		var row = `	<option>${data[i].province_list}</option> `
	// 		table.innerHTML += row


	// 	}
	// }

    // function addBrgyInfo(){
    //     var provinceAdd = $['#province'].val();
    //     var municipalityAdd = $['#municipality'].val();
    //     var brg_nameAdd = $['#brg_name'].val();
    //     var brgy_contactnameAdd = $['#contactnum'].val();
    //     var brgy_contactnameAdd = $['#brgy_contactname'].val();
    //     var brgy_logoAdd = $['#brgy_logo'].val();

    //     $.ajax({
    //         url:'funcbrgyinfo.php',
    //         type:'POST',
    //         data:{
    //             provinceAdded:provinceAdd,
    //             municipalityAdded:municipalityAdd,
    //             brg_nameAdded:brg_nameAdd,
    //             contactnumAdded:contactnumAdd,
    //             brgy_contactnameAdded:brgy_contactnameAdd,
    //             brgy_logoAdded:brgy_logoAdd
    //         },
    //         success:function(data,status) {
    //             e.preventDefault();
    //             // fuction to display information
    //             console.log(status);
    //         }
    //     });
    // }


</script>


</body>
<!-- index Sun, 18 Jul 2021 09:33:18 GMT -->
</html>