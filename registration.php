<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Customer Registration</title>
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
function val(){
    var p1=document.f.pass1.value;
    var p2=document.f.pass2.value;

    if(p1!=p2){
        alert('Password does not match');
        return false;
    }
    
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

<body><center>
	<!-- wraper -->
	<div id="wrapper">
		<!-- shell -->
		<div class="shell">
			<!-- container -->
			<div class="container">
				<!-- header -->
				<header id="header">
					<h1 id="logo"><a href="#">Curve</a></h1>
					<!-- search -->

				</header>
						
				<!-- end of slider -->
				<!-- main -->
				<div class="main">
					<a href="#" class="m-btn-grey grey-btn">request a demo</a>
					<section class="cols">
                                            <form name="f" method="post" action="regcust.php" onsubmit="javascript:return val();">
                                            <table cellspacing="12px;">
                                                <tr><td>Username:</td><td><input name="user" type="text" size="40" maxlength="20" required/></td></tr>
                                                <tr><td>Password:</td><td><input name="pass1" type="password"size="40" maxlength="20" required/></td></tr>
                                                <tr><td>Re-Enter Password:</td><td><input name="pass2" type="password"size="40" maxlength="20" required/></td></tr>
                                                <tr><td>Address:</td><td><textarea name="addr" cols="37" rows="4" required></textarea></td></tr>
                                                <tr><td>Mobile No. </td><td><input name="mob" type="text" onkeypress="return isNumberKey(event)" size="40" maxlength="10" required/></td></tr>
                                                <tr><td>E-mail</td><td><input name="email" type="text" size="40" maxlength="50" required/></td></tr>
                                                <tr><td></td><td><input type="submit" value=" Register " /></td></tr>
                                            </table>
                                            </form>
                                            <?php 
                                            if(isset($_GET['msg'])){
                                                if($_GET['msg']==1){
                                                    echo 'Username already exists please try with another one';
                                                }else if($_GET['msg']==2){
                                                    echo 'Cannot create your account please try later';
                                                }else if($_GET['msg']==12){
                                                    echo 'Registration Successful';
                                                }
                                            }
                                            ?>
						<div class="cl">&nbsp;
                                                </div><center>
                                               
					</center>
                              </section>
                                        
					
	</div><div id="footer">
					<div class="footer-cols">
						<div class="col">
							<h2>Services</h2>
							<ul>
								<li><a href="#">Web Design</a></li>
								<li><a href="#">Branding</a></li>
								<li><a href="#">Seo Optimization</a></li>
								<li><a href="#">Mobile App Development</a></li>
							</ul>
						</div>
						<div class="col">
							<h2>Projects</h2>
							<ul>
								<li><a href="#">Lorem ipsum dolor </a></li>
								<li><a href="#">Consectetuer adipiscing</a></li>
								<li><a href="#">Proin sed odio et ante </a></li>
								<li><a href="#">Mazim sensibus et usu</a></li>
							</ul>
						</div>
						<div class="col">
							<h2>Solutions</h2>
							<ul>
								<li><a href="#">Lorem ipsum dolor</a></li>
								<li><a href="#">Consectetuer adipiscing</a></li>
								<li><a href="#">Proin sed odio et ante </a></li>
								<li><a href="#">Mazim sensibus et usu</a></li>
							</ul>
						</div>
						<div class="col">
							<h2>Partners</h2>
							<ul>
								<li><a href="#">Zeel Code Labs 1</a></li>
								<li><a href="#">Zeel Code Labs 2</a></li>
								<li><a href="#">Zeel Code Labs 3</a></li>
								<li><a href="#">Zeel Code Labs 4</a></li>
							</ul>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
					<!-- end of footer-cols -->
					<div class="footer-bottom">
						
						<p class="copy">&copy; Copyright 2015 Zeel Code Labs <span>|</span> <strong>Design by <a href="http://zeelnet.com" target="_blank">zeelnet.com</a></strong></p>
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