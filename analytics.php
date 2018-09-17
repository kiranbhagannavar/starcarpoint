<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Welcome To Star Car Point | Admin Home</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<!-- <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> -->
	<!-- <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" /> -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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
				<h1>Analytical Data for Star Car Point🚗
					<br />
				</h1>
			</center>

			<div class="card mb-4">
				<div class="card-header">Showroom Weekly Data</div>
				<div class="card-body">
				<?php
								include 'dbconnection.php';
								$q = "SELECT SUM(amount) AS amount FROM bills";
								$result = mysql_query($q);
								$row = mysql_fetch_assoc($result);
								$anilbills = $row['amount'];
								echo "<center><h4>Total Bills Amount: <font color='blue'>&#8377; $anilbills /-</font> </h4> </center>";
							?>
							<hr />
					<?php
								include 'dbconnection.php';
								$q = "SELECT SUM(amount) AS amount FROM expenses";
								$result = mysql_query($q);
								$row = mysql_fetch_assoc($result);
								$anilexpenses = $row['amount'];
								echo "<center><h4>Total Expenses Amount: <font color='blue'>&#8377; $anilexpenses /-</font> </h4> </center>";
							?>
							<hr />
					
					<?php
								$anilprofit = $anilbills - $anilexpenses;
								echo "<center><h4>Total Profit Amount: <font color='blue'>&#8377; $anilprofit  /-</font> </h4> </center>";
							?>
							<hr />
					<a href="closeexpenses.php"><input type="button" class="btn btn-lg btn-danger" name="button" value="Close Weekly Expenses" /></a>
					<a href="closebills.php"><input type="button" class="btn btn-lg btn-danger" name="button" value="Close Weekly Bills" /></a>

				</div>
			</div>
			<div class="card mb-4">
				<div class="card-header">Home Service Weekly Data</div>
				<div class="card-body">
				<?php
								include 'dbconnection.php';
								$q = "SELECT SUM(amount) AS amount FROM santoshbills";
								$result = mysql_query($q);
								$row = mysql_fetch_assoc($result);
								$santoshbills = $row['amount'];
								echo "<center><h4>Total Bills Amount: <font color='blue'>&#8377; $santoshbills /-</font> </h4> </center>";
							?>
							<hr />
					<?php
								include 'dbconnection.php';
								$q = "SELECT SUM(amount) AS amount FROM santoshexpenses";
								$result = mysql_query($q);
								$row = mysql_fetch_assoc($result);
								$santoshexpenses = $row['amount'];
								echo "<center><h4>Total Expenses Amount: <font color='blue'>&#8377; $santoshexpenses /-</font> </h4> </center>";
							?>
							<hr />
					
					<?php
								$santoshprofit = $santoshbills - $santoshexpenses;
								echo "<center><h4>Total Profit Amount: <font color='blue'>&#8377; $santoshprofit /-</font> </h4> </center>";
							?>
							<hr />
					<a href="santoshcloseexpenses.php"><input type="button" class="btn btn-lg btn-danger" name="button" value="Close Weekly Expenses" /></a>
					<a href="santoshclosebills.php"><input type="button" class="btn btn-lg btn-danger" name="button" value="Close Weekly Bills" /></a>

				</div>
			</div>
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