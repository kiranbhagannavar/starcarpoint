<?php 
include 'dbconnection.php';
    $query="update tblcustomer set name='{$_POST['name']}', address='{$_POST['addr']}', email='{$_POST['email']}', mobile='{$_POST['mob']}' where cid='{$_POST['custid']}'";
    $result=mysql_query($query);
    if($result){
        header('location:listcust.php?msg=22');
    }else{
        header('location:listcust.php?msg=23');
    }
?>