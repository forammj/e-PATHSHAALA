<?php



$server		= 'localhost';
$username	= 'root';
$password	= '';
$database	= 'final';
$con=mysql_connect($server, $username,  $password);
if(!$con)
{
 	exit('Error: could not establish database connection');
}
//else
//echo "asdfghjkldfghjsdfghjkdfgyhujkl";

if(!mysql_select_db($database,$con))
{
 	exit('Error: could not select the database');
}




?>