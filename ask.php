<?php
//create_cat.php
include 'connect.php';
 
$cont=($_POST['content']);
	$sql = "INSERT INTO forum(Content,Timestamp,Subject_ID,Faculty_ID)
           VALUES( '$cont',NOW(),'1','F1') ";
    $result = mysql_query($sql);
    if(!$result)
    {
        //something went wrong, display the error
        echo 'Error' . mysql_error();
    }
    else
    {
        echo 'Question posted successfully .';
    }


	?>
	
	