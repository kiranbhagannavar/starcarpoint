<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Customer</title>
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
<script lang="javascript>">
function validate(){

        if(isNaN(document.f.mob.value)){
            alert("Please enter valid phone no");
            return false;
        }
       
         if(document.f.mob.value.length<10){
            alert("Please enter valid phone no")
            return false;
        }
    
       var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
       var address = document.f.email.value;
       
       if(reg.test(address) == false) 
       {
          alert("Invalid Email Address");
          return false;
       }
       
    return true;
}

 function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

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
                                                <li><a href="compview.php">View Comp's</a></li>
						<li><a href="assign.php">Assign Comp's</a></li>
						<li><a href="listengg.php">Engineers</a></li>
						<li class="active"><a href="listcust.php">Customers</a></li>
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
						<?php 
                                                 if(isset ($_GET['msg'])){
                                                    if($_GET['msg']==22){
                                                    echo "<font color='maroon'>Customer record edited successfully</font>";
                                                    }else if($_GET['msg']==23){
                                                    echo "<font color='maroon'>Cannot edit the record, please try later</font>";
                                                    }else if($_GET['msg']==24){
                                                    echo "<font color='maroon'>Customer record deleted successfully</font>";
                                                    }else if($_GET['msg']==25){
                                                    echo "<font color='maroon'>Cannot delete the record, please try later</font>";
                                                    }
                                                }
                                                ?>
                                            <table border="2px;" width="100%">
                                                        <tr align="center">
                                                          <td>Name</td>
                                                          <td>Address</td>
                                                          <td>Email</td>
                                                          <td>Mobile</td>
                                                          <td>Edit</td>
                                                          <td>Delete</td></tr>
                                                        <?php 
                                              include 'dbconnection.php';
                                             
                                              $query="SELECT * FROM tblcustomer";
                                              $result=  mysql_query($query);
                                              while($row=  mysql_fetch_assoc($result)){
                                                  echo "<tr>
                                                          <td>{$row['name']}</td>
                                                          <td>{$row['address']}</td>
                                                          <td>{$row['email']}</td>
                                                          <td>{$row['mobile']}</td>
                                                          <td align='center'><a href='listcust.php?id={$row['cid']}'><img src='images/edit.png'/></a></td>
                                                          <td align='center'><a href='deletecust.php?id={$row['cid']}'><img src='images/delete.png'/></a></td></tr>";
                                              }
                                              ?> 
                                             </table>
                                                    
                                            <?php 
                                                                                             
                                            if(isset($_GET['id'])){
                                              echo "<form name='f' action='editcust.php' method='post' onsubmit='javascript:return validate();'>
                                                    <center><br/><table>";
                                              $query="SELECT * FROM tblcustomer where cid='{$_GET['id']}'";
                                              $result=mysql_query($query);
                                              $row= mysql_fetch_assoc($result);
                                                  echo "<tr><td>Name:</td><td><input type='text' name='name' value='{$row['name']}' size='40'/></td></tr>
                                                          <tr><td>Address:</td><td><textarea name='addr' cols='37' rows='4'>{$row['address']}</textarea></td></tr>
                                                          <tr><td>Email:</td><td><input type='text'name='email' value='{$row['email']}' size='40'/></td></tr>
                                                          <tr><td>Mobile:</td><td><input type='text'name='mob' maxlength='10' value='{$row['mobile']}' size='40' onkeypress='return isNumberKey(event)'/></td></tr>
                                                          <tr><td></td><td><input type='submit' value='Edit Details'/></td></tr>
                                                          <input type='hidden' name='custid' value='{$_GET['id']}'/></table>";
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