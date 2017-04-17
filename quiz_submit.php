<?php
include "connect.php";
session_start();

$id = $_SESSION['uid']; //1
$subname=$_GET['link']; 
$qid=$_GET['link1']; //2
//$sql1=mysql_query("SELECT Subject_ID FROM subject WHERE Subject_Name ='$subname'");
//$subid=mysql_fetch_assoc($sql1);
//$subjectid=$subid['Subject_ID'];//3
$sql2=mysql_query("SELECT Board_ID FROM subject_of_board WHERE Subject_ID ='$subname'");
$board=mysql_fetch_assoc($sql2);
$boardid=$board['Board_ID'];//4
echo $qid." ".$subname." ".$boardid;
$sql3="select count(Question_ID) as no_of_ques from quiz_questions where Quiz_ID='$qid' and Subject_ID='$subname' and Board_ID='$boardid'";
$result=mysql_query($sql3);
$fetch=mysql_fetch_assoc($result);
$fetch1=$fetch['no_of_ques'];

$i=1;
for (; $i<=$fetch1; $i++)
{

$ans=$_POST[$i];
echo $ans."ANS";

$sql="INSERT INTO student_answer_question (Student_ID,Quiz_ID,Answer_given,Subject_ID,Board_ID,Question_ID)
VALUES ('$id', '$qid', '$ans','$subname','$boardid','$i')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
echo "1 record added";

mysql_close($con);
//$result=mysql_query($sql);
}
?>