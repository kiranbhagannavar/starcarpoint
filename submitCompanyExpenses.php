<?php 
include 'dbconnection.php';
    $query="INSERT INTO companyExpenses(product_name, date, quantity, price) VALUES('{$_POST['product_name']}', '{$_POST['date']}', '{$_POST['quantity']}','{$_POST['price']}')";
                    $result = mysql_query($query);
                    if($result){
                        header('Location:companyexpenses.php?msg=1');	
                    }else{
                        header('location:companyexpenses.php?msg=2');
                    }
?>
