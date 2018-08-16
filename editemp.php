<?php 
include 'dbconnection.php';
if(isset($_POST['name'])){
    $query="update tblemployee set name='{$_POST['name']}', address='{$_POST['addr']}', email='{$_POST['email']}', mobile='{$_POST['mob']}' where eid='{$_POST['empid']}'";
    $result=mysql_query($query);
    if($result){
        header('location:listengg.php?msg=22');
    }else{
        header('location:listengg.php?msg=23');
    }
}
?>