<?php
    $dbconn = mysql_connect('localhost','root','');
    mysql_select_db('starcarpoint_admin',$dbconn);
    if(mysql_error()){
        die ("Connection to database failed:  ".mysql_error());
    }
?>