<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Recover Pass</title>
    </head>
    <script>
        function check(){
            var user=document.frm.user.value;
            var email=document.frm.email.value;
            
            if((user=="") && (email=="")){
                alert("Please enter either UserName or Email Field");
                return false;
            }
            return true;
        }
    </script>    
    
    <body bgcolor="#DDDDDD"><center>
        <form name="frm" action="" method="post" onsubmit="javascript:return check();"><br/><br/>
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="user"/></td>
                </tr>
                <tr><td></td><td>OR</td></tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"/></td>
                </tr>
            </table><br/>
         <input type="Submit" value="Get Password"/>
        </form>

<?php 
include 'dbconnection.php';

try{
    if ((isset($_POST['user'])) || isset($_POST['email'])) {
    $query="Select email,password from tblcustomer where name='{$_POST['user']}' or email='{$_POST['email']}'";
    $result=mysql_query($query);
    if(mysql_num_rows($result)>0){
        $row=mysql_fetch_assoc($result);
        $to=$row['email'];
        $pass=$row['password'];

function authgMail($from, $namefrom, $to, $nameto, $subject, $message) {
$smtpServer = "plus.smtp.mail.yahoo.com";   
$port = "587";					 
$timeout = "45";				 
$username = "collegemanagementsystem@yahoo.com"; 
$password = "Hellocms1";			
$localhost = "127.0.0.1";	   
$newLine = "\r\n";			 
$secure = 0;				  

//connect to the host and port
$smtpConnect = fsockopen($smtpServer, $port, $errno, $errstr, $timeout);
$smtpResponse = fgets($smtpConnect, 4096);
if(empty($smtpConnect)) {
   $output = "Failed to connect: $smtpResponse";
   echo $output;
   return $output;
}
else {
     echo "<br/>Password sent";
   
}

//you have to say HELO again after TLS is started
   fputs($smtpConnect, "HELO $localhost". $newLine);
   $smtpResponse = fgets($smtpConnect, 4096);
   $logArray['heloresponse2'] = "$smtpResponse";
//request for auth login
fputs($smtpConnect,"AUTH LOGIN" . $newLine);
$smtpResponse = fgets($smtpConnect, 4096);
$logArray['authrequest'] = "$smtpResponse";

//send the username
fputs($smtpConnect, base64_encode($username) . $newLine);
$smtpResponse = fgets($smtpConnect, 4096);
$logArray['authusername'] = "$smtpResponse";

//send the password
fputs($smtpConnect, base64_encode($password) . $newLine);
$smtpResponse = fgets($smtpConnect, 4096);
$logArray['authpassword'] = "$smtpResponse";

//email from
fputs($smtpConnect, "MAIL FROM: <$from>" . $newLine);
$smtpResponse = fgets($smtpConnect, 4096);
$logArray['mailfromresponse'] = "$smtpResponse";

//email to
fputs($smtpConnect, "RCPT TO: <$to>" . $newLine);
$smtpResponse = fgets($smtpConnect, 4096);
$logArray['mailtoresponse'] = "$smtpResponse";

//the email
fputs($smtpConnect, "DATA" . $newLine);
$smtpResponse = fgets($smtpConnect, 4096);
$logArray['data1response'] = "$smtpResponse";

//construct headers
$headers = "MIME-Version: 1.0" . $newLine;
$headers .= "Content-type: text/html; charset=iso-8859-1" . $newLine;
$headers .= "To: $nameto <$to>" . $newLine;
$headers .= "From: $namefrom <$from>" . $newLine;

//observe the . after the newline, it signals the end of message
fputs($smtpConnect, "To: $to\r\nFrom: $from\r\nSubject: $subject\r\n$headers\r\n\r\n$message\r\n.\r\n");
$smtpResponse = fgets($smtpConnect, 4096);
$logArray['data2response'] = "$smtpResponse";

// say goodbye
fputs($smtpConnect,"QUIT" . $newLine);
$smtpResponse = fgets($smtpConnect, 4096);
$logArray['quitresponse'] = "$smtpResponse";
$logArray['quitcode'] = substr($smtpResponse,0,3);
fclose($smtpConnect);
//a return value of 221 in $retVal["quitcode"] is a success
return($logArray);
}

$err=0;  // so far, so good
$err_msg="";
if($err<=0) {
  $from="collegemanagementsystem@yahoo.com";
  $namefrom="In-Complaint Processing";
  $nameto = "In Complaint";
  $subject = "Recover Password";
  $message = "Dear User, <br/><br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Your password for In Complaint Processing Application is: ".$pass;
  // this is it, lets send that email!
  authgMail($from, $namefrom, $to, $nameto, $subject, $message); 
}
    }else{
        echo "No matching record found";
    }
}else{
    echo '<br/>Please fill either of the field';
}
}catch(Exception $ex){
    echo 'Error in internet connect. Please check';
}
?>       
    </center></body>
</html>