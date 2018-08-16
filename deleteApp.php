<?php 
    include 'dbconnection.php';
    if(isset($_GET['app_no'])){
        echo "<table>";
        $query = "DELETE FROM appointment WHERE app_no = '{$_GET['app_no']}'";
        $result=mysql_query($query);
        if($result){
            echo "Deleted";	
        }else{
            echo "Not Deleted";
        }
    }
?> 
