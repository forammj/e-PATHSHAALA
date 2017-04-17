<?php
$host="127.0.0.1"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="e-PAATHSHALA"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select database.
mysql_connect($host,$username,$password) or die("cannot connect server "); 
mysql_select_db($db_name) or die("cannot select DB");

$fname= $_POST["firstname"];
$lname= $_POST["lastname"];
$Gender = $_POST["optionsRadios"] ;
$City = $_POST["city"] ;
$School = $_POST["school"] ;
//$Class = $_POST["class"];
$Username = $_POST["username"];
$Password = $_POST["password"];
$Email = $_POST["email"];
//$BYear = $_POST["Year"];
//$BMonth = $_POST["Month"];
//$BDate = $_POST["Date"];

//$DOB = $BYear.'-'.$BMonth.'-'.$BDate;
$HASH = md5(rand(0,1000) );

$result=mysql_query("INSERT INTO $tbl_name(User_Name,Password,Email,DOB,City,School_Name,class,gender,fname,lname,hash)
VALUES('".mysql_real_escape_string($Username)."','".mysql_real_escape_string(md5($Password))."','".mysql_real_escape_string($Email)."',
'1991-2-2','".mysql_real_escape_string($City)."','".mysql_real_escape_string($School)."','7th',
'".mysql_real_escape_string($Gender)."','".mysql_real_escape_string($fname)."','".mysql_real_escape_string($lname)."','".mysql_real_escape_string($HASH)."') ");

//check if query successful 
if($result)
{
$to = $Email; // send email to new user for verification
$subject = 'Signup | Verification'; // subject of email
$message = 'Thanks for registration!'.'<br>'.
'Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.'.'<br>'.
			"----------------------".'<br>'."Username: $Username".'<br>'."Password  : $Password".'<br>'.
			 "---------------------- ".'<br>'.'Please click this link to activate your account:'.'<br>'."http://localhost/web/verification.php?email=$Email&hash=$HASH"
; // our verification link



require('./PHPMailer/class.phpmailer.php');
require('./PHPMailer/class.smtp.php'); // note, this is optional - gets called from main class if not already loaded

$mail             = new PHPMailer();

$body             = $message;

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = 'ssl';                 // sets the prefix to the server
$mail->Host       = 'smtp.gmail.com';      // sets GMAIL as the SMTP server
$mail->SMTPDebug = 1; // 2 to enable SMTP debug information 
$mail->Port       = 465;                   // set the SMTP port

$mail->Username   = 'ePAATHSHALA.grp4@gmail.com';  // GMAIL username
$mail->Password   = 'aditi123';            // GMAIL password

$mail->From       = "ePAATHSHALA.grp4@gmail.com";
$mail->FromName   = "Webmaster";
$mail->Subject    = $subject;
$mail->AltBody    = "This is the body when user views in plain text format"; //Text Body
$mail->WordWrap   = 50; // set word wrap

$mail->MsgHTML($body);

$mail->AddReplyTo("ePAATHSHALA.grp4@gmail.com","Webmaster");

//$mail->AddAttachment("/path/to/file.zip");             // attachment
//$mail->AddAttachment("/path/to/image.jpg", "new.jpg"); // attachment

$mail->AddAddress($to,$fname.$lname);

$mail->IsHTML(true); // send as HTML

if(!$mail->Send())
	{
		header('Location:Mail_Error.php');
	}  
else 
	{
        header('Location: Mail_Success.php');
	}
}	
else 
{
echo header('Location: Database_Error.php');
}
mysql_close();
?>


