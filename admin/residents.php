
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

		<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
		<section id="heroSearch" class="hero-search mtop-100 pt-0 pb-0">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="slider--content">
						<form class="mb-0" method="post" action="funcResidents.php" enctype="multipart/form-data">
							<div class="form-box search-properties">
								<div class="row"><br>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
												<input type="text" name="lastname" class="form-control" autocomplete="off" id="select-location" placeholder="Last Name" required>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
												<input type="text" name="middlename" class="form-control" autocomplete="off" id="select-location" placeholder="Middle Name" required>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
												<input type="text" name="firstname" class="form-control" autocomplete="off" id="select-location" placeholder="First Name" required>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
												<i class="fa fa-angle-down"></i>
												<select name="gender" id="select-gender" required>
													<option required>Gender</option>
													
													<option>Male</option>
													<option>Female</option>
													
												</select>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
												<input type="date" name="birthdate" class="form-control" id="select-birthdate" placeholder="Birthdate" required>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
												<i class="fa fa-angle-down"></i>
												<select name="civilstatus" autocomplete="off" id="select-type">
													<option>Civil Status</option>
													<option>Single</option>
													<option>Married</option>
													<option>Divorced</option>
													<option>Cohabiting</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-12">
										<div class="form-group">
											<div class="select--box">
												<input type="text" name="address" class="form-control" autocomplete="off" id="select-address" placeholder="Purok" required>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<div class="select--box">
												<input type="text" name="contact" class="form-control" autocomplete="off" id="select-contact" placeholder="Contact Number" required>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<div class="select--box">
												<i>Identification Card</i>
												<input type="file" class="form-control" name="myfile" autocomplete="off" required="required"/>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-12">
										<input type="submit" value="Add to Records" name="submit" class="btn btn--primary btn--block">
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
	<section id="properties-carousel" class="properties-carousel pt-90 pb-90">
		<div class="container"">
			<div class="row">
				<center><h5>Residents List</h5>
			Search: <input id="myInput" class="form-control" style="display:inline;width: 50%;" type="text" placeholder="Search by ID, Name, Address, Contact Number, and etc."></center><br>
			<?php 

			$email = $_SESSION['email'];
			$logid = $_SESSION['logid'];

			$sql = "SELECT * FROM residents";

                        echo 
                        "
                        <div class='container' style='width:1500px;margin-left:-130px'>
							<form method='POST' action='exportResidents.php'>
								<input type='submit' value='Export-excel' name='export_excel_btn' class='btn btn-success'>
							</form>
                        <table class='table table-striped table-hover'>
                        <thead>
                        <tr style = 'height: 30px;'>
                        <th style = 'width: 180px;'>Resident ID</th>
                        <th style = 'width: 350px;'>Name</th>
                        <th style = 'width: 150px;'>Gender</th>
                        <th style = 'width: 150px;'>Birthdate</th>
                        <th style = 'width: 150px;'>Civil Status</th>
                        <th style = 'width: 350px;'>Address</th>
                        <th style = 'width: 150px;'>Contact</th>
						<th style = 'width: 200px;'>Profile</th>
                        <th style = 'width: 100px;'>Status</th>
                       
                        <th style = 'width: 450px;'>Action</th>
                        </tr>";

                        $result = mysqli_query($cn,$sql);
                        
                        while($row = mysqli_fetch_assoc($result))
                        {       
                        	$query = mysqli_query($cn, "SELECT * FROM residents");
                        	$disp = mysqli_fetch_assoc($query);

                                echo"<tbody id='myTable'>";
                                echo "<tr>";
                                
                                echo "<td>" . $row['residentid'] . " </td> ";
                                echo '<td>'. $row['lastname'].' ' . $row['middlename'] . ' ' . $row['firstname'] . '</td>';
                                echo "<td>" . $row['gender'] . " </td> ";
                                echo "<td>" . $row['birthdate'] . "  </td> ";
                                echo "<td>" . $row['civilstatus'] . "</td> ";
                                echo "<td>" . $row['address'] . "</td> ";
                                echo "<td>" . $row['contact'] . "</td> ";
								echo  "<td>".
								 '<img src="../images/'.$row['idcard'].' "width=50px; height=50px; margin: 15px 10px 15px 10px; border-radius:100%;" alt="Image">';
								"</td>";


                                if ($row['status'] == "0")
                                {
                                	$stat = "Active residents";
                                }
                                else {
                                	$stat = "Not Active residents";
                                }

                                echo "<td>" . $stat . "</td> ";
                                // echo "<td><a target='_blank' class='btn btn-light' style='width:100%;border:1px solid black;color:black' href='".$row['idcard']."'>View Image</a></td> ";

                                echo "<td><a class='btn btn-success' style='width:20%;border:1px solid black;color:black' href='viewResident.php?id=" . $row['residentid'] . "'><i class='fa fa-edit'></i></a>
								<a class='btn btn-danger' style='width:20%;border:1px solid black;color:black'href='delresidents.php?delRes_id=" . $row['residentid'] . "'><i class='fa fa-trash'></i></a>";

                                if ($row['status'] == "0")
                                {
                                	echo "<a class='btn btn-warning' style='width:49%;border:1px solid black;color:black' href='archiveResidents.php?id=" . $row['residentid'] . "'>Active</a></td> ";
                                }
                                else {
                                	echo "<a class='btn btn-warning' style='width:49%;border:1px solid black;color:black' href='activateResidents.php?id=" . $row['residentid'] . "'>Unactive</a></td> ";
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
	var myArray = []
	

	$.ajax({
		method:'GET',
		url:'homerentalsystem/user/assets/geo_api.json',
		// url:'https://reqres.in/api/users',
		success:function(response){
			myArray = response.data
			// buildTable(myArray)
			console.log(myArray)
		}
	})



	function buildTable(data){
		var dropdown = document.getElementById('select-location')

		for (var i = 0; i < data.length; i++){
			var row = `	<option>${data[i].province_list}</option> `
			table.innerHTML += row


		}
	}

</script>


<script>
    AOS.init();
</script>
</body>
<!-- index Sun, 18 Jul 2021 09:33:18 GMT -->
</html>