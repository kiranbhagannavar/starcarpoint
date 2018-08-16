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
						<li class="active"><a href="adminhome.php">HOME</a></li>
						<li><a href="newuser.php">New User</a></li>
                                                <li><a href="compview.php">View Comp's</a></li>
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
						<div class="video-holder">
                                            
                                                <table cellspacing="20">
                                                       
                                              <?php 
                                              include 'dbconnection.php';
                                              
                                              echo "<form name='f' action='assignengg.php' method='post' onsubmit='javascript:return val();'>
                                                    <input type='hidden' name='id' value='{$_GET['id']}'/>";
                                              
                                              $query="SELECT * FROM tblcomplaints where cid={$_GET['id']}";
                                              $result=  mysql_query($query);
                                              if(mysql_num_rows($result)>0){
                                                  $row=  mysql_fetch_assoc($result);
                                                  echo "<tr>
                                                          <tr><td>Customer:</td><td>{$row['custname']}</td></tr>
                                                          <tr><td>Title/Subject:</td><td>{$row['comptitle']}</td></tr>
                                                          <tr><td>Description:</td><td>{$row['description']}</td></tr>
                                                          <tr><td>Complaint Date:</td><td>{$row['comp_date']}</td></tr>
                                                          <tr><td>Status:</td><td>{$row['status']}</td><td>To: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['enggname']}</td>  </tr>";
                                                          $query="select name from tblemployee";
                                                          $res=mysql_query($query);
                                                          echo "<tr><td>Assign To:</td><td><select id='to' name='to'>
                                                                                   <option>Select Engineer</option>";
                                                          while($r=  mysql_fetch_assoc($res)){
                                                              echo "<option>{$r['name']}</option>";
                                                          }
                                                          echo "</select></td><td><input type='submit' value='Assign'/></td></tr>";
                                                    }
                                              ?>
                                                    </form></table>
                                            <?php 
                                                if(isset ($_GET['msg'])){
                                                    if($_GET['msg']==1){
                                                        echo "<font color='maroon'>Complaint forwared successfully</font>";
                                                    }else if($_GET['msg']==2){
                                                    echo "<font color='maroon'>Cannot forward your request, please try later</font>";
                                                    }
                                                }
                                                ?>  
                                                    
                                                    
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