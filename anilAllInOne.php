<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
    <title>Welcome To Star Car Point | Admin Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
    <!-- <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> -->
    <!-- <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" /> -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
    <script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
    <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
    <script src="js/functions.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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

            <?php 
                if(isset ($_GET['msg'])){
                    if($_GET['msg']==1){
                            ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php
                        echo "<font color='maroon'>expenses added successfully</font>";
                    }else if($_GET['msg']==2){
                    echo "<font color='maroon'>Cannot add please try later</font>";
                    }else if($_GET['msg']==3){
                    echo "<font color='maroon'>Something went wrong, please try again later</font>";
                    }
                }
                ?>
                <?php 
                if(isset ($_GET['msg'])){
                    if($_GET['msg']==5){
                            ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                        echo "<font color='maroon'>Bill added successfully</font>";
                    }else if($_GET['msg']==6){
                    echo "<font color='maroon'>Cannot add please try later</font>";
                    }else if($_GET['msg']==7){
                    echo "<font color='maroon'>Something went wrong, please try again later</font>";
                    }
                }
                ?>

            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Expenses
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <form name="f" method="POST" action="submitexpenses.php">
                                <div class="form-group">
                                    <label for="cause">Cause of Expenses</label>
                                    <input type="text" name="cause" class="form-control" placeholder="Cause of Expense" />
                                </div>
                                <hr />
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="text" name="amount" class="form-control" placeholder="Amount" />
                                </div>
                                <hr />
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="text" name="date" class="form-control" placeholder="Date (Example: 1/1/18)" />
                                </div>
                                <hr />
                                <div class="form-group">
                                    <label for="doc">Document</label>
                                    <input type="text" name="doc" class="form-control" placeholder="Document Link" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Bill
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <form name="submitbill" method="POST" action="submitbill.php">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" />
                                </div>
                                <hr />
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" rows="3" name="address" placeholder="Address"></textarea>
                                </div>
                                <hr />
                                <div class="form-group">
                                    <label for="name">Mobile Number</label>
                                    <input type="text" name="mob_no" class="form-control" placeholder="Mobile Number" />
                                </div>
                                <hr />
                                <div class="form-group">
                                    <label for="email">E-mail ID</label>
                                    <input type="text" name="text" class="form-control" placeholder="E-mail ID" />
                                </div>
                                <hr />
                                <div class="form-group">
                                    <label for="dos">Date of Service</label>
                                    <input type="text" name="date_of_service" class="form-control" placeholder="Date of Service" />
                                </div>
                                <hr />
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="text" name="amount" class="form-control" placeholder="Amount" />
                                </div>
                                <hr />
                                <div class="form-group">
                                    <label for="vname">Vehicle Name</label>
                                    <input type="text" name="vehicle_name" class="form-control" placeholder="Vehicle Name" />
                                </div>
                                <hr />
                                <div class="form-group">
                                    <label for="vno">Vehicle Number</label>
                                    <input type="text" name="vehicle_no" class="form-control" placeholder="Vehicle Number" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Generate Bill" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Tally
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                            you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
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