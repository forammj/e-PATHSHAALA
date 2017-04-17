<?php

define('IN_SCRIPT', true);
// Start a session
session_start();

//Connect to the MySQL Database
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

//this function will display error messages in alert boxes, 
function error($msg) {
    ?>
    <html>
    <head>
    <script language="JavaScript">
    <!--
        alert("<?=$msg?>");
        history.back();
    //-->
    </script>
    </head>
    <body>
    </body>
    </html>
    <?
    exit;
}

//Checking email in format. 
function check_email_address($email) {
  // First, we check that there's one @ symbol, and that the lengths are right
  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email))
  {
        return false;
  }
  
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) 
  {
     if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i]))
	 {
      return false;
    }
  }  
  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
    $domain_array = explode(".", $email_array[1]);
    if (sizeof($domain_array) < 2)
	{
        return false; // Not enough parts to domain
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) 
	  {
        return false;
      }
    }
  }
  return true;
}


if (isset($_POST['submit'])) {
	
	if ($_POST['forgotpassword']=='') {
		error('Please Fill in Email');
	}
	if(get_magic_quotes_gpc()) {
		$forgotpassword = htmlspecialchars(stripslashes($_POST['forgotpassword']));
	} 
	else {
		$forgotpassword = htmlspecialchars($_POST['forgotpassword']);
	}
	//Make sure  valid email address
	if (!check_email_address($_POST['forgotpassword'])) {
  		error('Email Not Valid - Must be in format of name@domain.tld');
	}
    // To check registered Email
	$sql1 = "SELECT COUNT(*) FROM student WHERE Email = '$forgotpassword'";
	$sql2= "SELECT COUNT(*) FROM faculty WHERE Email = '$forgotpassword'";
	$sql3 = "SELECT COUNT(*) FROM admin WHERE Email = '$forgotpassword'";
    $sql = $sql1 + $sql2 + $sql3;
    $result = mysql_query($sql)or die('Could not find member: ' . mysql_error());
    if (!mysql_result($result,0,0)>0) {
        error('Email Not Found!');
    }

	//Generate a RANDOM MD5 Hash for a password
	$random_password=md5(uniqid(rand()));
	$emailpassword=substr($random_password, 0, 8);
	
	$newpassword = md5($emailpassword);
	
       	if($sql1>0)
		{
       	$query = sprintf("UPDATE `student` SET `password` = '%s' 
						  WHERE `Email` = '$forgotpassword'",
                    mysql_real_escape_string($newpassword));
					
					mysql_query($query)or die('Could not update members: ' . mysql_error());
		}
		else if($sql2>0)
		{
       	$query = sprintf("UPDATE `faculty` SET `password` = '%s' 
						  WHERE `Email` = '$forgotpassword'",
                    mysql_real_escape_string($newpassword));
					
					mysql_query($query)or die('Could not update members: ' . mysql_error());
		}
		else if($sql3>0)
		{
       	$query = sprintf("UPDATE `admin` SET `password` = '%s' 
						  WHERE `Email` = '$forgotpassword'",
                    mysql_real_escape_string($newpassword));
					
					mysql_query($query)or die('Could not update members: ' . mysql_error());
		}
//Email out the infromation
$subject = "Your New Password"; 
$message = "Your new password is as follows:
---------------------------- 
Password: $emailpassword
---------------------------- 
Use this password to login the next time."; 
                       
          if(!mail($forgotpassword, $subject, $message,  "FROM: $site_name <$site_email>")){ 
             die ("Sending Email Failed, Please Contact Site Admin! ($site_email)"); 
          }else{ 
                error('New Password Sent!.');
         } 
		
	}
	
else {
?>
      <form name="forgotpasswordform" action="" method="post">
        <table border="0" cellspacing="0" cellpadding="3" width="100%">
          <caption>
          <div>Forgot Password</div>
          </caption>
          <tr>
            <td>Email Address:</td>
            <td><input name="forgotpassword" type="text" value="" id="forgotpassword" /></td>
          </tr>
          <tr>
            <td colspan="2" class="footer"><input type="submit" name="submit" value="Submit" class="mainoption" /></td>
          </tr>
        </table>
      </form>
      <?
}
?>