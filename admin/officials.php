
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
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
						<form class="mb-0" method="post" action="funcOfficials.php" enctype="multipart/form-data" style="margin-top: -100px;">
							<div class="form-box search-properties">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-12">
										<div class="form-group">
											<div class="select--box">
												<!-- <input type="text" name="position" class="form-control" id="select-position" placeholder="Position" required> -->
												<i class="fa fa-angle-down"></i>
												<select name="position" id="select-positon" required>
													<option>Select Position</option>
													<option value="Punong Barangay">Punong Barangay</option>
													<option value="Barangay Kagawad">Barangay Kagawad</option>
													<option value="Barangay Secretary">Barangay Secretary</option>
													<option value="Barangay Treasurer">Barangay Treasurer</option>
													<option value="SK Chairman">SK Chairman</option>
												</select>
											</div>
										</div>
									</div>
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
									<div class="col-xs-12 col-sm-6 col-md-3">
										<div class="form-group">
											<div class="select--box">
												<i class="fa fa-angle-down"></i>
												<select name="gender" id="select-gender" required>
													<option>Gender</option>
													
													<option>Male</option>
													<option>Female</option>
													
												</select>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<div class="select--box">
											<input type="date" name="birthdate" class="form-control" autocomplete="off" id="select-birthdate" placeholder="Birthdate" required>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3">
										<div class="form-group">
											<div class="select--box">
												<i class="fa fa-angle-down"></i>
												<select name="civilstatus" id="select-type" autocomplete="off" required>
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
												<input type="text" name="address" class="form-control" autocomplete="off" value="Barangay Zone 1" id="select-address" placeholder="Address" required>
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
												<input type="file" class="form-control" name="myfile" accept="jpg, png, jepeg" required="required"/>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<div class="select--box">
												<p style="display:inline;">Years of Term</p><input type="number" name="termyears" class="form-control" id="select-termyears" placeholder="0" required>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<div class="select--box">
												<p style="display:inline;">Year Started</p><input type="text" autocomplete="off" maxlength="4" pattern="\d{4}" name="yearstarted" class="form-control" id="select-yearstarted" placeholder="2022" required>
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
	<section id="properties-carousel" class="properties-carousel pt-45 pb-90">
		<div class="container mt-20">
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
							<input type='submit' value='Export to Excel' class='btn btn-success'>
						</form>
						
                        <table class='table table-striped table-hover'>
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
                        <th style = 'width: 350px;'>Profile</th>
                        <th style = 'width: 150px;'>Status</th>
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
								echo  "<td>".
								 '<img src="../images/'.$row['idcard'].' "width=50px; height=50px; margin: 15px 10px 15px 10px; border-radius:100%;" alt="Image">';
								"</td>";

                                if ($row['status'] == "0")
                                {
                                	$stat = "Active Official";
                                }
                                else {
                                	$stat = "Not Active";
                                }

                                echo "<td>" . $stat . "</td> ";
                                // echo "<td><a target='_blank' class='btn btn-light' style='width:100%;border:1px solid black;color:black' href='".$row['idcard']."'>View</a></td> ";

                                echo "<td><a class='btn btn-success' style='margin:4px;width:20%;border:1px solid black;color:black' href='viewOfficial.php?id=" . $row['officialid'] ."'><i class='fa fa-edit'></i></a> 
								<a class='btn btn-danger' style='width:20%;border:1px solid black;color:black'href='delOfficials.php?delOff_id=" . $row['officialid'] . "'><i class='fa fa-trash'></i></a>";
								
                                if ($row['status'] == "0")
                                {
                                	echo "<a class='btn btn-warning' style='width:47%;border:1px solid black;color:black' href='archiveOfficials.php?id=" . $row['officialid'] . "'>Active</a></td> ";
                                }
                                else {
                                	echo "<a class='btn btn-warning' style='width:47%;border:1px solid black;color:black' href='activateOfficials.php?id=" . $row['officialid'] . "'>Unactive</a></td> ";
                                }

                	}
                	echo '</table><br>';
                	?>
					
			</div>
		</div>

		<style>
			table::-webkit-scrollbar {
				width: 10px;
				overflow: scroll; /* Show scrollbars */
				overflow-x: scroll; /* Show horizontal scrollbar */
			}
			table::-webkit-scrollbar-thumb  {
				background: #888;
			}
			table::-webkit-scrollbar-thumb:hover {
				background: #555;
				}
		</style>
		<!-- <div class="modal fade" id="trashModule">
		<div class="container-fluid">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">New message</h5>
				</div>
				    <div class="modal-body">
						<form>
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Recipient:</label>
							<input type="text" class="form-control" id="recipient-name">
						</div>
						<div class="mb-3">
							<label for="message-text" class="col-form-label">Message:</label>
							<textarea class="form-control" id="message-text"></textarea>
						</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div> -->
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
	<script src="assets/sweetalert.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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

	
	AOS.init();
</script>

<!-- 
<script>
    AOS.init();
  </script> -->

</body>
<!-- index Sun, 18 Jul 2021 09:33:18 GMT -->
</html>