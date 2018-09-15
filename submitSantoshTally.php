<?php 
include 'dbconnection.php';
    $query="INSERT INTO santoshtally(datef, datet, bill, expense, profit) VALUES('{$_POST['datef']}', '{$_POST['datet']}', '{$_POST['bill']}','{$_POST['expense']}','{$_POST['profit']}')";
                    $result = mysql_query($query);
                    if($result){
                        header('Location:santoshAllinOne.php?msg=8');	
                    }else{
                        header('location:santoshAllinOne.php?msg=9');
                    }
?>