<?php 
include 'dbconnection.php';
    $query="delete from tblemployee where eid='{$_GET['id']}'";
    $result=mysql_query($query);
    if($result){
        header('location:listengg.php?msg=24');
    }else{
        header('location:listengg.php?msg=25');
    }
?>