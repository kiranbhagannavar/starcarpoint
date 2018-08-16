<?php 
include 'dbconnection.php';
    $query="delete from tblcustomer where cid='{$_GET['id']}'";
    $result=mysql_query($query);
    if($result){
        header('location:listcust.php?msg=24');
    }else{
        header('location:listcust.php?msg=25');
    }
?>