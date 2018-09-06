<?php 
include 'dbconnection.php';
    $query="INSERT INTO expenses(cause, amount, date, doc) VALUES('{$_POST['cause']}', '{$_POST['amount']}', '{$_POST['date']}','{$_POST['doc']}')";
                    $result = mysql_query($query);
                    if($result){
                        header('Location:expenses.php?msg=1');	
                    }else{
                        header('location:expenses.php?msg=2');
                    }
?>
