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
                        <li><a href="custhome.php">Home</a></li>
						<li class="active"><a href="newcomp.php">New complaint</a></li>
                        <li><a href="viewcomp.php">View complaints</a></li>
                        <li><a href="logout.php">Signout</a></li>
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
						<div class="video-holder">
                                            <form name="f" method="post" action="createcomplaint.php" onsubmit="javascript:return validate();">
                                                <table cellspacing="15">
                                                    <tr><td>Type of Complaint:</td><td><select name="type" id="type">
                                                                <option>Select Type</option>
                                                                <option>Software</option>
                                                                <option>Hardware</option>
                                                                <option>Network</option>
                                                                <option>Security System</option>
                                                            </select></td></tr>
                                                    <tr><td>Title:</td><td><input type="text" name="title" size="50" required/></td></tr>
                                                    <tr><td>Description:</td><td><textarea name="desciption" cols="47" rows="8" required></textarea></td></tr>
                                                    <tr><td></td><td><input type="submit" value="Submit"/></td></tr>
                                                </table>
                                            </form>
						</div>
                                            <?php 
                                                if(isset ($_GET['msg'])){
                                                    if($_GET['msg']==1){
                                                        echo "<font color='maroon'>Complaint forwared successfully</font>";
                                                    }else if($_GET['msg']==2){
                                                    echo "<font color='maroon'>Cannot forward your request, please try later</font>";
                                                    }
                                                }
                                                ?>
						<div class="cl">&nbsp;</div>
					</section>

					<section class="testimonial">
                                           
					</section>
				</div>
				<!-- end of main -->
				<div class="socials">
					
				</div>
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