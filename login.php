<?php


include "connect.php";



$count=0;
$error="";
$pre=false;

$username = $_POST['username'];
$password = md5($_POST['password']);

$select_word = "SELECT * FROM dictionary ORDER BY RAND() LIMIT 0,1";
			$result = mysql_query($select_word);
			$row = mysql_fetch_assoc($result);
			$_SESSION['word'] = $row['word'];
	
	//echo $row["word"];
//$word=$_SESSION['word'];


//echo $_SESSION['date'];
/*
if(isset($_SESSION['logged_in']) &amp;&amp; $_SESSION['logged_in'] == true)
{
	echo 'You are already signed in, you can <a href="logout.php">sign out</a> if you want.';
}*/




if(!$pre)
{
	$sql = "SELECT * FROM student WHERE User_Name = '$username' and Password='$password'";
	$result = mysql_query($sql) or die(mysql_error());
	$numrows = mysql_num_rows($result);
	
	

	if($numrows == 1)
   {
	
	session_start();
	$row = mysql_fetch_assoc($result);
	$uid = $row['Student_ID'];
	$sql=mysql_query("select distinct Board_ID from student natural join package_having_subject where Student_ID='$uid'");
	$result=mysql_fetch_assoc($sql);
	$_SESSION['logged-in']=true;
	$_SESSION['name']=$username;
	$_SESSION['uid']=$uid;
	$_SESSION['previlege']=0;
	$_SESSION['board']=$result['Board_ID'];
	$_SESSION['date']=date("Y-m-d");
	////student privilege=0; teacher privilege=1; Admin privilege=2;
	$pre=true;
	$select_word = "SELECT * FROM dictionary ORDER BY RAND() LIMIT 0,1";
			$result = mysql_query($select_word);
			$row = mysql_fetch_assoc($result);
			$_SESSION['word'] = $row['word'];
	
	
	
	
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
	$row = mysql_fetch_assoc($result);
	$fid = $row['Faculty_ID'];

	$_SESSION['logged-in']=true;
	$_SESSION['name']=$username;
	$_SESSION['fid']=$fid;
	
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
	
   if($count==3) //icorrect login
  {
   $error='Incorrect username or Password';
 
    //echo '<META HTTP-EQUIV="Refresh" Content="0; URL=Home_page.html">';    
    //exit(); 
	 header("Location: sign_in_popup.html");
       exit();
   }
   else //correct login
   {
	if($_SESSION['previlege']==0)
		{
		header("Location: student_home.php"); 
       exit();
	   }
	elseif($_SESSION['previlege']==1)
	{
		header("Location: expert_home.php");
		exit();
	}
	elseif($_SESSION['previlege']==2)
	{
			header("Location: Admin_home.php");
			exit();
	}
    }
	

?>