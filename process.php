<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Assign</title>
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
function val(){
    if(document.f.to.value=="Select Engineer"){
        alert("Please select the Engineer");
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
					
					<!-- search -->
					
					<!-- end of search -->
				</header>
				<!-- end of header -->
				<!-- navigation -->
				<nav id="navigation">
					<ul>
						<li><a href="emphome.php">HOME</a></li>
                                                <li class="active"><a href="viewassign.php">View Assigned Complaints</a></li>
						<li><a href="signoff.php">Sign Off Complaint</a></li>
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
                                            
                                                <table cellspacing="20">
                                                       
                                              <?php 
                                                    error_reporting(E_ERROR | E_PARSE);
                                              include 'dbconnection.php';
                                              
                                              if(isset($_GET['id'])){
                                              echo "<form name='f' action='process.php' method='post'>
                                                    <input type='hidden' name='id' value='{$_GET['id']}'/>";
                                              
                                              $query="SELECT * FROM tblcomplaints where cid={$_GET['id']}";
                                              $result=  mysql_query($query);
                                              if(mysql_num_rows($result)>0){
                                                  $row=mysql_fetch_assoc($result);
                                                  echo "<tr><input type='hidden' name='pid' value='{$_GET['id']}'/>
                                                          <tr><td>Customer:</td><td>{$row['custname']}</td></tr>
                                                          <tr><td>Title/Subject:</td><td>{$row['comptitle']}</td></tr>
                                                          <tr><td>Description:</td><td>{$row['description']}</td></tr>
                                                          <tr><td>Complaint Date:</td><td>{$row['comp_date']}</td></tr>
                                                          <tr><td>Process/Description</td><td><textarea name='desc' cols='50' rows='4'>{$row['comment']}</textarea></td></tr>
                                                          <tr><td></td><td><input type='submit' value='Update Process'/></td></tr>";
                                                          
                                                    }
                                              }
                                              ?>
                                                    </form></table>
						
                                            <?php 
                                                if(isset($_POST['desc'])){
                                                    $query="update tblcomplaints set status='In Process', comment='{$_POST['desc']}' where cid={$_POST['pid']}";
                                                    $result=mysql_query($query);
                                                    if($result){
                                                        header('location:viewassign.php');
                                                    }else{
                                                        echo mysql_error();
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
					
						<div class="cl">&nbsp;</div>
					</div>
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