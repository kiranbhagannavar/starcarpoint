<?php 
include 'dbconnection.php';
    $query="INSERT INTO expenses(cause, amount, date, doc) VALUES('{$_POST['cause']}', '{$_POST['amount']}', '{$_POST['date']}','{$_POST['doc']}')";
                    $result = mysql_query($query);
                    if($result){
                        header('Location:anilAllInOne.php?msg=1');	
                    }else{
                        header('location:anilAllInOne.php?msg=2');
                    }
?>