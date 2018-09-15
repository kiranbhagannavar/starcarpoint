<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Welcome To Star Car Point | View Customer</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/common.css" type="text/css" media="all" />
</head>

<body>
	<!-- header starts -->
	<section class="bg-primary">
		<div class="container">
			<?php
				include ("nav.html");
			?>
		</div>
	</section>
	<!-- header ends -->

	<!-- main body starts -->
	<section class="bg-form">
		<div class="container">
			<center>
				<h1 style="padding:10px;">👦 Customer Details 👩</h1>
			</center>
			<table border="2" width="100%" class="table table-responsive">
				<tr align="center">
					<th>Customer ID</th>
					<th>Name</th>
					<th>Addresss</th>
					<th>Email</th>
					<th>Mobile Number</th>
					<th>Date of Birth</th>
					<th>Occupation</th>
					<th>Vehicle Name</th>
					<th>Vehicle Number</th>
				</tr>
				<?php
        			include 'dbconnection.php';
        			$query="SELECT * FROM tblcustomer";
        			$result=mysql_query($query);
        			while($row=  mysql_fetch_assoc($result)) {
            			echo "<tr>
						<td align='center'>{$row['cid']}</td>
						<td>{$row['name']}</td>
						<td>{$row['address']}</td>
						<td>{$row['email']}</td>
						<td>{$row['mobile']}</td>
						<td>{$row['dob']}</td>
						<td>{$row['occupation']}</td>
						<td>{$row['vehicle_name']}</td>
						<td>{$row['vehicle_no']}</td>            
						</tr>";
        			}
    			?>
			</table>
		</div>
	</section>
	<!-- main body ends -->

	<!-- footer starts -->
	<section class="bg-gray text-center">
		<div class="container">
			<?php
				include ("footer.html");
			?>
		</div>
	</section>
	<!-- footer ends -->
</body>

</html>