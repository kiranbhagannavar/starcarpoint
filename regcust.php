<?php 
include 'dbconnection.php';
    $nam = $_POST['name'];
    $vehiclenumber = $_POST['vehicle_no'];
    $query="SELECT * FROM tblcustomer WHERE vehicle_no='$vehiclenumber'";

			$result=mysql_query($query);
			if(mysql_num_rows($result)>0) {
				header('location:newuser.php?msg=3');
			}else {
				$query="INSERT INTO tblcustomer(name,address,email,mobile,dob,occupation,vehicle_name,vehicle_no) VALUES('{$_POST['user']}','{$_POST['addr']}','{$_POST['email']}','{$_POST['mob']}','{$_POST['dob']}','{$_POST['occupation']}','{$_POST['vehicle_name']}','{$_POST['vehicle_no']}')";
                                $result = mysql_query($query);
                                if($result){
                                    header('Location:newuser.php?msg=1');	
                                }else{
                                    header('location:newuser.php?msg=2');
                                }

}
?>
