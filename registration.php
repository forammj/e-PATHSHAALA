<?php

include "connect.php";
$allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG", "JPG");
$filename=$_FILES["file"]["name"];

$array=explode('.', $filename);
$extension = end($array);

$path= 'C:/xampp/htdocs/e-paathshala/assets/img/File/'.$_FILES['file']['name'];
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000)
|| in_array($extension, $allowedExts))
  {
      move_uploaded_file($_FILES['file']['tmp_name'],
      'C:/xampp/htdocs/e-paathshala/assets/img/File/'.$_FILES['file']['name']);
 	}
	else
	{
	echo " Please input a valid image format: .gif/.jpg/.png";
	}
 

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$date=$_POST['Date'];
$month=$_POST['Month'];
$year=$_POST['Year'];
$gender=$_POST['optionsRadios']; //// change name attribute in signup file
$city=$_POST['city'];
$school=$_POST['school'];
$board=$_POST['board'];
$class=$_POST['class'];
$username=mysql_real_escape_string($_POST['username']);
$password=md5($_POST['password']);
$conpassword=($_POST['conpassword']);
$email=mysql_real_escape_string($_POST['email']);
$id='S'.rand(1,10000000000);

$birthdate=$year."-".$month."-".$date;
$HASH = md5(rand(0,1000) );
$insert_query="insert into student(Timestamp,Student_ID,User_name,Password,Email,Package_ID,City,School_name,Profile_Pic,class,gender,fname,lname,bday,hash)
				values(NOW(),'$id','$username','$password',' $email','P2','$city','$school','$path','$class','$gender[0]','$firstname','$lastname','$birthdate','$HASH')";
				
if($insert_query)
{
$to = $email; // send email to new user for verification
$subject = 'Signup | Verification'; // subject of email
$message = 'Thanks for registration!'.'<br>'.
'Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.'.'<br>'.
			"----------------------".'<br>'."Username: $username".'<br>'."password  : $password".'<br>'.
			 "---------------------- ".'<br>'.'Please click this link to activate your account:'.'<br>'."http://localhost:81/e-paathshala/sign_in.html?email=$email&hash=$HASH"
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

$mail->AddAddress($to,$firstname.$lastname);

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
				
if (!mysql_query($insert_query,$con))
  {
  echo 'Something went wrong while registering. Please try again later.';
	
  die('Error: ' . mysql_error());
  }
else
{
  echo "Successfully registered.Check mail for verification link ";
$sql2=mysql_query("UPDATE student
SET active = 1
WHERE User_Name='$username'");
}	

mysql_close($con);
?>