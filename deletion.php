
<?php
include "connect.php";
$sid=$_GET['id'];
$query="DELETE FROM student where Student_ID='$sid'";
$del=mysql_query($query);
if(!$del)
{
   
    echo 'Error'. mysql_error();
    }
    else
    {
	echo "<script>alert(\"Entry deleted successfully\")</script>";
    }


?>
