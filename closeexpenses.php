<?php
    include 'dbconnection.php';
    //move from expenses to archive
    $q = "INSERT INTO archiveexpenses (ex_no, cause, amount, date, doc) (SELECT ex_no, cause, amount, date, doc FROM expenses)";
    $result = mysql_query($q);
    if(!$result) {
        echo "error in moving";
    }

    //Delete from expenses
    $q1 = "DELETE FROM expenses";
    $r = mysql_query($q1);

    if($r) {
        header('Location: analytics.php');
    } else {
        echo "Error in deleting";
    }

?>