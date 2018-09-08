<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
    <title>Star Car Point | Add New Customer</title>
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
<script lang="javascript">
    function val() {
        var p1 = document.f.pass1.value;
        var p2 = document.f.pass2.value;

        if (p1 != p2) {
            alert('Password does not match');
            return false;
        }

        if (isNaN(document.f.mob.value)) {
            alert("Please enter valid phone no");
            return false;
        }

        if (document.f.mob.value.length < 10) {
            alert("Please enter valid phone no")
            return false;
        }

        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var address = document.f.email.value;

        if (reg.test(address) == false) {
            alert("Invalid Email Address");
            return false;
        }

        return true;
    }

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31
            && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }

    function val1() {
        var p1 = document.f1.pass1.value;
        var p2 = document.f1.pass2.value;

        if (p1 != p2) {
            alert('Password does not match');
            return false;
        }

        if (isNaN(document.f1.mob.value)) {
            alert("Please enter valid phone no");
            return false;
        }

        if (document.f1.mob.value.length < 10) {
            alert("Please enter valid phone no")
            return false;
        }

        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var address = document.f1.email.value;

        if (reg.test(address) == false) {
            alert("Invalid Email Address");
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
                    <h1 id="">
                        <a href="#"></a>
                    </h1>
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
                <div class="main">
                    <a href="viewcust.php"><input type="button" name="button" value="View Customer" /></a>
                    <section class="cols">
                        <?php 
                                                if(isset ($_GET['msg'])){
                                                    if($_GET['msg']==1){
                                                            ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                                                        echo "<font color='maroon'>Customer created successfully</font>";
                                                    }else if($_GET['msg']==2){
                                                    echo "<font color='maroon'>Cannot create your account please try later</font>";
                                                    }else if($_GET['msg']==3){
                                                    echo "<font color='maroon'>Something went wrong, please try again later</font>";
                                                    }
                                                }
                                                ?>

                        <form name="f" method="POST" action="regcust.php">
                            <table cellspacing="12px;" class="table-responsive">
                                <h3>
                                    <font color="maroon">Customer Registration</font>
                                </h3>
                                <tr>
                                    <td>Name:</td>
                                    <td>
                                        <input name="user" type="text" size="40" maxlength="20" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td>
                                        <textarea name="addr" cols="42" rows="4" required></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mobile Number </td>
                                    <td>
                                        <input name="mob" type="text" size="40" maxlength="10" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>E-mail</td>
                                    <td>
                                        <input name="email" type="text" size="40" maxlength="50" required/>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Date of Birth</td>
                                    <td>
                                        <input type="text" name="dob" size="40" maxlength="50" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Occupation</td>
                                    <td>
                                        <input type="text" name="occupation" size="40" maxlength="50" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vehicle Name</td>
                                    <td>
                                        <input type="text" name="vehicle_name" size="40" maxlength="50" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vehicle Number</td>
                                    <td>
                                        <input type="text" name="vehicle_no" size="40" maxlength="50" required />
                                    </td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>
                                        <input type="submit" value=" Register " />
                                    </td>
                                </tr>
                            </table>
                        </form>

                        <!-- end of main -->

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