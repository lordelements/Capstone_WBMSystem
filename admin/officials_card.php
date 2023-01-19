<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="assets/css/external.css" rel="stylesheet">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php	
		// $officialid = $_POST['officialid'];
		$sql = "SELECT * FROM officials";
		$result = $cn->query($sql);

		
			while($row = mysqli_fetch_assoc($result))
				{       
					$query = mysqli_query($cn, "SELECT * FROM officials");
					$disp = mysqli_fetch_assoc($query);

	?>

    <div class="row">
        <div class="column">
            <div class="card">
            <?php echo "<img src='../images/".$row['idcard']." 'width=300px; height=300px;  border-radius=5px; alt=''>";?>
            </div>
        </div>
    </div>
        
<?php }?>
    
    <style>
        :root {
            --primary-box-color: #27273980;
            --primary-box-text: #333574;
            --primary-box-lighter: #357b70;
            --primary-box-darker: #357b70;
            
            --secondary-box-color: #eeefff;
            --secondary-box-text: #000;
            
            --padding : .4rem;
            --border-rad: 5px;
            --shadow: 10px 8px 30px rgb(0 0 0 / 30%);
            }
        /* .card {
                background-color: var(--primary-box-color);
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 20px;
                font-family: sans-serif;
        }         
        .card {
            display: flex;
            color: var(--primary-box-text);
            border: var(--border-rad);
            gap: 20px;
            height: 300px;
            width: 300px;
            margin: 10px 20px 10px 20px;
            flex-direction: row;
        }
        .card:hover {
            background: var(--secondary-box-color);
            transition: 1s all;
            transform: translateY(-4px);
            box-shadow: var(--shadow);
            overflow: hidden;
        }
        img {
           border-radius: var(--border-rad);
           padding: var(--padding);
        } */

        
    </style>
</body>
</html>