<?php
    include 'dbconnection.php';
    //move from expenses to archive
    $q = "INSERT INTO santosharchivebills (bill_id, name, address, mob_no, email, date_of_service, amount, vehicle_name, vehicle_no, service_type) (SELECT bill_id, name, address, mob_no, email, date_of_service, amount, vehicle_name, vehicle_no, service_type FROM santoshbills)";
    $result = mysql_query($q);
    if(!$result) {
        echo "error in moving";
    }

    //Delete from expenses
    $q1 = "DELETE FROM santoshbills";
    $r = mysql_query($q1);

    if($r) {
        header('Location: analytics.php');
    } else {
        echo "Error in deleting";
    }

?>