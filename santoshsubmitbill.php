<?php 
include 'dbconnection.php';
    $query="INSERT INTO bills(name, address, mob_no, email, date_of_service, amount, vehicle_name, vehicle_no, service_type) VALUES('{$_POST['name']}', '{$_POST['address']}', '{$_POST['mob_no']}','{$_POST['email']}','{$_POST['date_of_service']}','{$_POST['amount']}','{$_POST['vehicle_name']}','{$_POST['vehicle_no']}','{$_POST['service_type']}')";
                    $result = mysql_query($query);
                    if($result){
                        header('Location:bill.php?msg=1');	
                    }else{
                        header('location:bill.php?msg=2');
                    }
?>
