<?php

include 'dbconnection.php';
session_start();

$query = "INSERT INTO tblcomplaints (custid, custname, comptype, comptitle, description, status, enggname, comment, comp_date, close_date) VALUES ('{$_SESSION['user_id']}', '{$_SESSION['user_name']}', '{$_POST['type']}', '{$_POST['title']}', '{$_POST['desciption']}', 'Open', '' , '', NOW(), '' )";
$result=  mysql_query($query);		
if($result){
    header('location:newcomp.php?msg=1');
}else{
    header('location:newcomp.php?msg=2');
}
?>
