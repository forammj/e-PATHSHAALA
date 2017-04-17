<?php
include "connect.php";
session_start();
?>

		
		<?php
//		include "connect.php";
		
		$fname=$_POST['firstname'];
		$lname=$_POST['lastname'];
		$uname=$_POST['username'];
		$pass=$_POST['password'];
		$sub=$_POST['sub'];
		$email=$_POST['email'];
		
		
		
		//$g=mysql_query("select Subject_ID from subject where Subject_Name='$sub'");
		//$sid=mysql_fetch_assoc($g);
		
		$flag=0; //indicating no faculty for that subject 
		while($faculty=mysql_fetch_assoc($c))
		{
		if($sub==$faculty['Subject_ID'])
		{
			$flag=1;
		}
		}
		
		if($flag==1)
		{
		echo "<script> alert('Faculty for this subject already exists!!'); </script>";
		}
		else
		{
		echo "dfghj";
		//$c="Select * from faculty";
		//$count=mysql_num_rows($c);
		$fid= "F". rand(1,1000);
				
		$q="INSERT INTO faculty (Faculty_ID, Faculty_Name, Username, Password, Email, Subject_ID) values('$fid', '$name', '$uname,' '$pass', '$email', '$sub')";
		$res=mysql_query($q);
		}
		
		
	/*	if(!mysql_num_rows($c))
		echo "No experts yet.";
		
		else
		{
		while($expert=mysql_fetch_assoc(mysql_query($c))
		{
		
		$sb=$expert['Subject_ID'];
		
		$s=mysql_query("Select Subject_name from subject where Subject_ID='$sb'");
		$facsub=mysql_fetch_assoc($s);
		
		echo "<table class=\"table table-hover table-condensed\">
			<tr>
		      <td> <a href=\"#\">&nbsp;".$expert['Faculty_Name']."</a>&nbsp;&nbsp; " .$facsub." </td>
             <td>
				<a href=\"#myModal\" role=\"button\" data-toggle=\"modal\"><i class=\"icon-remove\" onClick='removeExpert(".$expert['Faculty_ID'].");' ></i></a>
			 </td>
             </tr></table>";
		}
		}*/
		?>
		
    