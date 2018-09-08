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
            background-color: #4CAF50;
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
                <a href="viewSantoshTally.php"><input type="button" name="button" value="View Santosh Tally" /></a>

                <?php 
                                                if(isset ($_GET['msg'])){
                                                    if($_GET['msg']==1){
                                                            ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                                                        echo "<font color='maroon'>Tally added successfully</font>";
                                                    }else if($_GET['msg']==2){
                                                    echo "<font color='maroon'>Cannot add please try later</font>";
                                                    }else if($_GET['msg']==3){
                                                    echo "<font color='maroon'>Something went wrong, please try again later</font>";
                                                    }
                                                }
                                                ?>


                <form name="f" method="POST" action="submitSantoshTally.php">
                            <table cellspacing="12px;">
                                <h3>
                                    <font color="maroon">Santosh's Tally</font>
                                </h3>
                                <tr>
                                    <td>Date (from)</td>
                                    <td>
                                        <input name="datef" type="text" size="40" maxlength="20" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date (To)</td>
                                    <td>
                                        <input name="datet" type="text" size="40" maxlength="10" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bill</td>
                                    <td>
                                        <input name="bill" type="text" size="40" maxlength="50" required/>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Expense</td>
                                    <td>
                                        <input type="text" name="expense" size="40" maxlength="50" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Profit</td>
                                    <td>
                                        <input type="text" name="profit" size="40" maxlength="50" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <input type="submit" value=" Submit " />
                                    </td>
                                </tr>
                            </table>
                        </form>
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