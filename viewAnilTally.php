<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Welcome To Star Car Point | Admin Home</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	<style>
        input[type=button] {
            background-color: red;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            font-size: 20px;
        }
    </style>
</head>
<body>
	<!-- wraper -->
	<div id="wrapper">
		<!-- shell -->
		<div class="shell">
			<!-- container -->
			<div class="container">
				<!-- header -->
				<header id="header">
					<h1 id=""><a href="#"></a></h1>
					<!-- search -->
					
					<!-- end of search -->
				</header>
				<!-- end of header -->
				<!-- navigation -->
				<?php
					include ("nav.html");
				?>
				
				<!-- end of slider -->
				<!-- main -->
				<div class="main" style="padding-bottom: 10px;">
                    <center><h1 style="padding:10px;">💵 Anil's Tally Details 💵</h1></center>
                <table border="2" width="100%" style="padding:10px;" class="table table-responsive">
    <tr align="center">
        <th>Tally ID</th>
        <th>Date (from)</th>
        <th>Date (To)</th>
        <th>Bill</th>
        <th>Expense</th>
        <th>Profit</th>
    </tr>
    <?php
        include 'dbconnection.php';
        $query="SELECT * FROM aniltally";
        $result=mysql_query($query);
        while($row=  mysql_fetch_assoc($result)) {
            echo "<tr>
            <td align='center'>{$row['t_no']}</td>
            <td>{$row['datef']}</td>
            <td>{$row['datet']}</td>
            <td>{$row['bill']}</td>
            <td>{$row['expense']}</td>
            <td>{$row['profit']}</td>
            </tr>";
		}
    ?> 
</table>
		<?php
			$q = "SELECT SUM(profit) AS amount FROM aniltally";
			$result = mysql_query($q);
			$row = mysql_fetch_assoc($result);
			$sum = $row['amount'];
			echo "<center><h2>Total Anil's Profit Amount: <font color='blue'>&#8377; $sum/-</font> </h2> </center>";
		?>

				</div>
				<?php
					include ("footer.html");
				?>
			</div>
			<!-- end of container -->	
		</div>
		<!-- end of shell -->	
	</div>
	<!-- end of wrapper -->
</body>
</html>