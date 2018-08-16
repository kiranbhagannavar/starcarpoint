<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Customer Home</title>
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
</head>
<script lang="javascript">
function validate(){
    if(document.f.type.value=="Select Type"){
        alert("Please select type of complaint");
        return false;
    }
    return true;
}
</script>
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
				<nav id="navigation">
					<ul>
						<li><a href="adminhome.php">HOME</a></li>
						<li><a href="newuser.php">New User</a></li>
                                                <li class="active"><a href="compview.php">View Comp's</a></li>
						<li><a href="assign.php">Assign Comp's</a></li>
						<li><a href="listengg.php">Engineers</a></li>
						<li><a href="listcust.php">Customers</a></li>
						<li><a href="logout.php">signout</a></li>
					</ul>
				</nav>
				
				<!-- end of slider -->
				<!-- main -->
				<div class="main">
					<a href="#" class="m-btn-grey grey-btn">request a demo</a>
					<section class="cols">
						
							<div class="cl">&nbsp;</div>
					</section>
					<section class="post">
						
                                             <table border="2px;" width="100%">
                                                        <tr align="center">
                                                          <td>Title/Subject</td>
                                                          <td>Complaint Type</td>
                                                          <td>Status</td>
                                                          <td>Comp Date</td>
                                                          <td>Close Date</td>
                                                          <td>Assigned To</td></tr>
                                             <?php 
                                              include 'dbconnection.php';
                                              
                                              $query="SELECT * FROM tblcomplaints";
                                              $result=  mysql_query($query);
                                              while($row=  mysql_fetch_assoc($result)){
                                                  echo "<tr>
                                                          <td>{$row['comptitle']}</td>
                                                          <td>{$row['comptype']}</td>
                                                          <td align='center'><a href='viewstatus.php?id={$row['cid']}'>{$row['status']}</a></td>
                                                          <td align='center'>{$row['comp_date']}</td>
                                                          <td align='center'>{$row['close_date']}</td>
                                                          <td align='center'>{$row['enggname']}</td></tr>";
                                              }
                                              ?> 
                                             </table>    
						<div class="cl">&nbsp;</div>
					</section>

					<section class="testimonial">
                                           
					</section>
				</div>
				<!-- end of main -->
				
				<div id="footer">
					
					<!-- end of footer-cols -->
					<div class="footer-bottom">
						
						<p class="copy">&copy; Copyright 2017 Complaint Tracking System <span>|</span> <strong>Design by <a href="" target="_blank">Kiran Bhagannavar & Sunil Mirashi </a></strong></p>
						<div class="cl">&nbsp;</div>
					</div>
				</div>
			</div>
			<!-- end of container -->	
		</div>
		<!-- end of shell -->	
	</div>
	<!-- end of wrapper -->
</body>
</html>