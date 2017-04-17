<?php


session_start();
include "connect.php";

$id=$_SESSION['fid'];
$sql=mysql_query("select * from faculty where Faculty_ID='$id'");
$result=mysql_fetch_assoc($sql);
$subid=$result['Subject_ID'];

$sql2=mysql_query("select * from subject where Subject_ID='$subid'");
$result=mysql_fetch_assoc($sql2);
$subname=$result['Subject_Name'];

$class=$_POST['class'];
$page=$_POST['page'];
$board=$_POST['board'];

if ($page=='quiz')
{
echo "<a href =\"subject_quiz.php?link=".$subname." \"></a> ";
 header("Location: subject_quiz.php?link='$subname'");
       exit();
}
elseif ($page=='qna')
{
echo "<a href =\"allquestions.php?link=".$subname." \"></a> ";
header("Location: allquestions.php?link='$subname'");
       exit();

}
elseif ($page=='study')

{
echo "<a href =\"Subject_Textbook.php?link=".$subname." \"></a> ";

header("Location: Subject_Textbook.php?link='$subname'");
       exit();
}



?>
