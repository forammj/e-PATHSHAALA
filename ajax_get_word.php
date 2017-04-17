<?php
include "connect.php";
session_start();


function WORD()
{
		$date=$_SESSION['date'];
		$current=date("Y-m-d");
	
		
	if(($_SESSION['date']==$current))
	
		return ( $_SESSION['word']);
		
		
	else
	{
			$select_word = "SELECT * FROM dictionary  where date='$date' ORDER BY RAND() LIMIT 0,1 ";
			$result = mysql_query($select_word);
			$row = mysql_fetch_assoc($result);
			return ($row["word"]);
	}
		
}
	
	
	
	

?>