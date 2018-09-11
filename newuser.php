<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
    <title>Star Car Point | Add New Customer</title>
    <link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
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
            float: right;
        }
		section {
			padding: 2em;
		}
		.bg-gray {
			background-color:#cccccc;
		}
        .bg-form {
            background-color: #74C2E1;
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
            <a href="viewcust.php"><input type="button" name="button" value="View Customer" /></a>
            <h3>Customer Registration</h3>

            <section class="cols">
                <?php 
                    if(isset ($_GET['msg'])){
                        if($_GET['msg']==1){
                                ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                    echo "<font color='maroon'>Customer created successfully</font>";
                    }else if($_GET['msg']==2){
                        echo "<font color='maroon'>Cannot create your account please try later</font>";
                    }else if($_GET['msg']==3){
                        echo "<font color='maroon'>Something went wrong, please try again later</font>";
                    }
                }
                ?>
            </section>

            <!-- form start -->
            <form name="f" method="POST" action="regcust.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="user" class="form-control" placeholder="Enter Name" required />
                </div>
                <hr />
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" rows="3" name="addr" Placeholder="Enter address" required></textarea>
                </div>
                <hr />
                <div class="form-group">
                    <label for="mobno">Mobile Number</label>
                    <input type="text" name="mob" class="form-control" placeholder="Enter Mobile Number" required />
                </div>
                <hr />
                <div class="form-group">
                    <label for="email">Email-ID</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email-id" />
                </div>
                <hr />
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="text" name="dob" class="form-control" placeholder="Enter Date of Birth" />
                </div>
                <hr />
                <div class="form-group">
                    <label for="occ">Occupation</label>
                    <input type="text" name="occupation" class="form-control" placeholder="Enter Occupation" required />
                </div>
                <hr />
                <div class="form-group">
                    <label for="vname">Vehicle Name</label>
                    <input type="text" name="vehicle_name" class="form-control" placeholder="Enter Vehicle Name"
                        required />
                </div>
                <hr />
                <div class="form-group">
                    <label for="vno">Vehicle Number</label>
                    <input type="text" name="vehicle_no" class="form-control" placeholder="Enter Vehicle Number"
                        required />
                </div>
                <hr />
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Register" />
            </form>
            <!-- form ends -->
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