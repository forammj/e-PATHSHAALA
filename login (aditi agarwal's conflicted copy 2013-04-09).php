<?php

$server		= 'localhost';
$username	= 'root';
$password	= '';
$database	= 'e-paathshala';
$con=mysql_connect($server, $username,  $password);
if(!$con)
{
 	exit('Error: could not establish database connection');
}

if(!mysql_select_db($database,$con))
{
 	exit('Error: could not select the database');
}

$count=0;
$error="";
$pre=false;
$username = $_POST['username'];
$password = $_POST['password'];
if(!$pre)
{
	$sql = "SELECT * FROM student WHERE User_Name = '$username' and Password='$password'";
	$result = mysql_query($sql) or die(mysql_error());
	$numrows = mysql_num_rows($result);

	if($numrows == 1)
   {
	
	session_start();
	$_SESSION['logged-in']=true;
	$_SESSION['name']=$username;
	$_SESSION['previlege']=0;  ////student privilege=0; teacher privilege=1; Admin privilege=2;
	$pre=true;
	//echo "sucessful";
	
	
	//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=profile_page_student.html">';    
    //exit; 
	//echo "SIGNED IN SUCCESSFULLY";
   }
	else
   {
	$count++;
   }
}  

if(!$pre)
{
	$sql = "SELECT * FROM faculty WHERE Username = '$username' and Password='$password'";
	$result = mysql_query($sql) or die(mysql_error());
	$numrows = mysql_num_rows($result);

	if($numrows == 1)
   {
	session_start();
	$_SESSION['logged-in']=true;
	$_SESSION['name']=$username;
	$_SESSION['previlege']=1;  ////student privilege=0; teacher privilege=1; Admin privilege=2;
	$pre=true;
	
	//echo "SIGNED IN SUCCESSFULLY";
   }
	else
   {
   $count++;
   }
 }
if(!$pre)
{
	$sql = "SELECT * FROM admin WHERE Adminname = '$username' and Password='$password'";
	$result = mysql_query($sql) or die(mysql_error());
	$numrows = mysql_num_rows($result);

	if($numrows == 1)
   {
	session_start();
	$_SESSION['logged-in']=true;
	$_SESSION['name']=$username;
	$_SESSION['previlege']=2;  ////student privilege=0; teacher privilege=1; Admin privilege=2;
	$pre=true;
	
	//echo "SIGNED IN SUCCESSFULLY";
   }
	else
   {
   $count++;
   }
 }  
	
   if($count==3)
  {
   $error='Incorrect username or Password';
 
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=Home_page.html">';    
    exit; 
   }
   else
   {
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=profile_page_student.html">';    
    exit; 
   }
?>