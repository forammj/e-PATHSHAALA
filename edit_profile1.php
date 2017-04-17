
<?php
session_start();

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


if (!isset($_SESSION['logged_in']) 
 header("Location: sign_in.html");

//use the already set session variables

$id=$_SESSION['id'];
$pri=$_SESSION['previlege'];
$query = "";




$db->query("SELECT * FROM student WHERE Student ID = '$id'");
$result = $db->getRows();

$old_fname = $result[0]['fname'];
$old_lname = $result[0]['lname'];
$old_profile_pic = $result[0]['Profile_Pic'];
$old_bday = $result[0]['bday'];
$old_gender = $result[0]['gender'];
$old_city = $result[0]['City'];
$old_school = $result[0]['School_Name'];
$old_class = $result[0]['class'];
$old_pswd = $result[0]['Password'];



$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$profile_pic = $_POST['pic'];
$date=$_POST['Date'];
$month=$_POST['Month'];
$year=$_POST['Year'];
$gender=$_POST['optionsRadios']; //// change name attribute in signup file
$city=$_POST['city'];
$school=$_POST['school'];
$class=$_POST['class'];
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];
$conpassword=$_POST['conpassword'];
$birthdate=$year."-".$month."-".$date;

if ($firstname != "" && $firstname != $old_fname)
{
    $query = $query . "fname = '$firstname', ";
}

if ($lastname != "" && $lastname != $old_lname)
{
    $query = $query . "lname = '$lastname', ";
}

if ($profile_pic != "" && $profile_pic != $old_profile_pic)
{
    $query = $query . "fname = '$firstname', ";
}

if ($birthdate != "" && $birthdate != $old_bday)
{
    $query = $query . "fname = '$firstname', ";
} 

if ($gender != "" && $gender != $old_gender)
{
    $query = $query . "fname = '$firstname', ";
}
  
if ($city != "" && $city != $old_city)
{
    $query = $query . "fname = '$firstname', ";
}
 
if ($school != "" && $school != $old_school)
{
    $query = $query . "fname = '$firstname', ";
}

if ($class != "" && $class != $old_class)
{
    $query = $query . "fname = '$firstname', ";
}  

if ($firstname != "" && $firstname != $old_fname)
{
    $query = $query . "fname = '$firstname', ";
}       
					
$db->query("UPDATE student SET $query WHERE Student ID = $id ");



?>
                