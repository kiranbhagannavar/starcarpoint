<?php

include 'dbconnection.php';

if(isset ($_POST['user1'])){
      
        $query = "SELECT  cid, name FROM tblcustomer WHERE name = '{$_POST['user1']}' AND password = '{$_POST['pass1']}'";
        $result=mysql_query($query);
        if(mysql_num_rows($result) > 0){
            $row =mysql_fetch_assoc($result);
            session_start();
            $_SESSION['user_id'] = $row['cid'];
            $_SESSION['user_name'] = $row['name'];
            header('Location:custhome.php');
        }else{
            header('Location:index.php?msg=0');
        }
}


if(isset ($_POST['user2'])){
      
        $query = "SELECT  eid, name FROM tblemployee WHERE name = '{$_POST['user2']}' AND password = '{$_POST['pass2']}'";
        $result=mysql_query($query);
        if(mysql_num_rows($result) > 0){
            $row =mysql_fetch_assoc($result);
            session_start();
            $_SESSION['user_id'] = $row['eid'];
            $_SESSION['user_name'] = $row['name'];
            header('Location:emphome.php');
        }else{
            header('Location:index.php?msg=0');
        }
}

if(isset ($_POST['user3'])){
        if($_POST['user3'] == 'admin' && $_POST['pass3'] == 'admin'){
		$_SESSION['user_id'] = 0;
		$_SESSION['user_name'] = 'admin';
		header('Location:adminhome.php');
}else{
            header('Location:index.php?msg=0');
        }
}
?>
