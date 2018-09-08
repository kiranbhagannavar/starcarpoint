<?php

include 'dbconnection.php';
if(isset ($_POST['user3'])){
        if($_POST['user3'] == 'abhi' && $_POST['pass3'] == 'abhi'){
		$_SESSION['user_id'] = 0;
		$_SESSION['user_name'] = 'abhi';
		header('Location:analytics.php');
}else{
            header('Location:index.php?msg=0');
        }
}
?>
