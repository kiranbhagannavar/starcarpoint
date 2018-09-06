<?php 
include 'dbconnection.php';
    $query="INSERT INTO santoshexpenses(cause, amount, date, doc) VALUES('{$_POST['cause']}', '{$_POST['amount']}', '{$_POST['date']}','{$_POST['doc']}')";
                    $result = mysql_query($query);
                    if($result){
                        header('Location:santoshexpenses.php?msg=1');	
                    }else{
                        header('location:santoshexpenses.php?msg=2');
                    }
?>
