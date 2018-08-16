<?php
include 'dbconnection.php';
$query="update tblcomplaints set enggname='{$_POST['to']}', status='Assigned' where cid='{$_POST['id']}'";
$result=mysql_query($query);
if($result){
    header('location:assign.php?msg=10');
}else{
    header('location:assign.php?msg=11');
}
?>
