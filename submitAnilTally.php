<?php 
include 'dbconnection.php';
    $query="INSERT INTO aniltally(datef, datet, bill, expense, profit) VALUES('{$_POST['datef']}', '{$_POST['datet']}', '{$_POST['bill']}','{$_POST['expense']}','{$_POST['profit']}')";
                    $result = mysql_query($query);
                    if($result){
                        header('Location:aniltally.php?msg=1');	
                    }else{
                        header('location:aniltally.php?msg=2');
                    }
?>
