<?php
include "connect.php";
session_start();

	approval : action=1
     disapproval: action=2
	 quiz: t=1
	 study material: t=2 -->
$action=$_GET['action'];
$t=$_GET['t'];
$id=$_GET['id'];
$sub=$_GET['subid'];
$b=$_GET['bid'];
$type=$_GET['type'];


$fq="select Faculty_ID from quiz where Quiz_ID='$id' AND Board_ID='$b' AND Subject_ID='$sub'";
$fqid=mysql_fetch_assoc(mysql_query($fq));
$fm="select Faculty_ID from study_material where Material_ID='$id AND Board_ID='$b' AND Subject_ID='$sub'";
$fmid=mysql_fetch_assoc(mysql_query($fm));



$e="select Email from faculty where Faculty_ID='$facid'";
$email=mysql_fetch_assoc(mysql_query($e));
$to = $email; // send email notification of approval/disapproval
$subject = 'Status of your upload!!';

if($t==1)
{	
		if($type=='MCQ')
		$path= "assets/img/mcq_quiz/".$_FILES['file']['name'];
		else if($type=='sub')
		$path= "assets/img/subj_quiz/".$_FILES['file']['name'];
	
	$n="select Quiz_ID from Quiz where Quiz_ID='$id' AND Board_Id='$b' AND Subject_ID='$sub'";
	$name=mysql_fetch_assoc(mysql_query($n));
	$facid=$fqid;
		
	if($action==1)
	{
	$d=mysql_query("UPDATE quiz SET isApproved=1 where Quiz_ID='$id' AND Board_Id='$b' AND Subject_ID='$sub'");
	$message = 'This mail is to inform about the status of your upload'.'<br>'.
			" Your quiz upload of ". $name . "has been approved and will now be accessible to the students.";
	
	}
	else if(action==2)
	{
	$d=mysql_query("DELETE from quiz where Quiz_ID='$id AND Board_Id='$b' AND Subject_ID='$sub'");
	@unlink($path);
	
	$message = 'This mail is to inform about the status of your upload'.'<br>'.
			" Your quiz upload of ". $name . "has been disapproved and removed by the administrator.";
	
	
	}
	
}
else if($t==2)
{
		if($type=='text')
		$path= "assets/img/tb_sol/".$_FILES['file']['name']);
		else if($type=='rev')
		$path= "assets/img/rev_notes/".$_FILES['file']['name'];
		
		$n="select Material_ID from study_material where Material_ID='$id' AND Board_Id='$b' AND Subject_ID='$sub'";
		$name=mysql_fetch_assoc(mysql_query($n));
		$facid=$fmid;
		
		
		
	if($action==1)
	{
	$d=mysql_query("UPDATE study_material SET isApproved=1 where Material_ID='$id' AND Board_ID='$b' AND Subject_ID='$sub'");
	
	
			 
	$message = 'This mail is to inform about the status of your upload'.'<br>'.
			" Your upload of study material named ". $name . "has been approved and will now be accessible to the students.";
	}
	else if(action==2)
	{
	
	$d=mysql_query("DELETE from study_material where Material_ID='$id' AND Board_ID='$b' AND Subject_ID='$sub'");
	@unlink($path);
	
	$message = 'This mail is to inform about the status of your upload'.'<br>'.
			" Your upload of study material named ". $name . "has been disapproved and removed by the administrator.";
	}
}



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
