<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
    <title>Welcome To Star Car Point | Admin Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />

    <script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
    <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
    <script src="js/functions.js" type="text/javascript"></script>
    <!-- <style>
        input[type=button] {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            font-size: 30px;
        }
    </style> -->
    <link rel="stylesheet" href="css/common.css" type="text/css" media="all" />
</head>

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
            <center>
                <h3>Anil's Data</h3>
                <a href="expenses.php">
                    <input type="button" class="btn btn-danger btn-lg" name="button" value="Expenses" />
                </a>
                <a href="bill.php">
                    <input type="button" class="btn btn-danger btn-lg" name="button" value="Bill" />
                </a>
                <a href="aniltally.php">
                    <input type="button" class="btn btn-danger btn-lg" name="button" value="Tally" />
                </a>
                <hr />
                <h3>Santosh's Data</h3>
                <a href="santoshexpenses.php">
                    <input type="button" class="btn btn-danger btn-lg" name="button" value="Expenses" />
                </a>
                <a href="santoshbill.php">
                    <input type="button" class="btn btn-danger btn-lg" name="button" value="Bill" />
                </a>
                <a href="santoshtally.php">
                    <input type="button" class="btn btn-danger btn-lg" name="button" value="Tally" />
                </a>
            </center>
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