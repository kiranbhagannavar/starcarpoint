<?php 
include 'dbconnection.php';
    $query="INSERT INTO appointment(name, mob_no, service_type, vehicle_type, date, time) VALUES('{$_POST['name']}','{$_POST['mob_no']}','{$_POST['service_type']}','{$_POST['vehicle_type']}','{$_POST['date']}','{$_POST['time']}')";
                    $result = mysql_query($query);
                    if($result){
                        header('Location:appointment.php?msg=1');	
                    }else{
                        header('location:appointment.php?msg=2');
                    }
?>
