<?php
session_start();
include "connect.php";
$filename=$_FILES['file']['name']; 
	   $fid=$_SESSION['fid'];
	  $board=$_POST['board'];
	  $sql2=mysql_query("select * from board where Board_Name='$board'");
	  $brd=mysql_fetch_assoc($sql2);
	  $brd1=$brd['Board_ID'];
	  
	  $sql=mysql_query("select * from faculty where Faculty_ID='$fid'");
	  $sub=mysql_fetch_assoc($sql);
	  $subid=$sub['Subject_ID'];

	  $class=$_POST['class'];
	  $type=$_POST['type'];
	 
	  if( $type=='rev')
	  {
	  $id='M'.rand(1,10000000000);
	  $path= 'assets/img/rev_notes/'.$_FILES['file']['name'];
 
      move_uploaded_file($_FILES['file']['tmp_name'],
      "assets/img/rev_notes/".$_FILES['file']['name']);

	  $insert_query="insert into study_material(Material_ID,Subject_ID,Board_ID,Material_name,Class,Timestamp,Type,Material_link,Faculty_ID,Paid,Adminname,isApproved)
				values('$id','$subid','$brd1',' $filename','$class',NOW(),'$type','$path','$fid','Y','Shikha','y')";
				$result1=mysql_query($insert_query);
	  }
	  elseif($type=='text' )
	  
	  {
			echo "IN TEXT";
	  $id='M'.rand(1,10000000000);
	   $path= 'assets/img/tb_sol/'.$_FILES['file']['name'];
 
      move_uploaded_file($_FILES['file']['tmp_name'],
      "assets/img/tb_sol/".$_FILES['file']['name']);

	  $insert_query="insert into study_material(Material_ID,Subject_ID,Board_ID,Material_name,Class,Timestamp,Type,Material_link,Faculty_ID,Paid,Adminname,isApproved)
				values('$id','$subid','$brd1',' $filename','$class',NOW(),'$type','$path','$fid','Y','Shikha','y')";
	
	  $result1=mysql_query($insert_query);
	  }
	  
	  
	  
	  elseif($type=='MCQ' )
	  {
	  //echo "IN mcq";
	   
	   $id='Q'.rand(1,10000000000);
	    $path= 'assets/img/mcq_quiz/'.$_FILES['file']['name'];
 
      move_uploaded_file($_FILES['file']['tmp_name'],
      "assets/img/mcq_quiz/".$_FILES['file']['name']);
	  
	  $excel_readers = array(
    'Excel5' , 
    'Excel2003XML' , 
    'Excel2007'
);
 
include('Classes/PHPExcel.php');
include("Classes/PHPExcel/Writer/CSV.php");
include("Classes/PHPExcel/Writer/Excel5.php");

set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
include 'PHPExcel/IOFactory.php';
$reader = PHPExcel_IOFactory::createReader('Excel5');
$reader->setReadDataOnly(true);
$excel = $reader->load($path);
 
$writer = PHPExcel_IOFactory::createWriter($excel, 'CSV');
$writer->setDelimiter('|');
$writer->save('data1.csv');

echo " ".$id." ".$subid." ".$brd1." ".$fid;
$insert_query1="insert into quiz (Quiz_ID,Subject_ID,Board_ID,Type,Quiz_name,Class,Timestamp,Faculty_ID,Paid,Adminname,isApproved)
				values('$id','$subid','$brd1','$type','$filename','$class',NOW(),'$fid','Y','Shikha','y')";
$result1=mysql_query($insert_query1);	//include "connect.php";
	
$insert_query="LOAD DATA LOCAL INFILE 'data1.csv' INTO TABLE quiz_questions FIELDS TERMINATED BY '|' ENCLOSED BY '\"' LINES TERMINATED BY '\r\n' 
(Question_ID,Statement,Option1,Option2,Option3,Option4,Correct_Answer,@var,@var1,@var2,@var3 ) 
Set Quiz_ID='$id', Subject_ID='$subid',Board_ID='$brd1',Type='$type'";
$result=mysql_query($insert_query);
	  }
	  
	  
	  
	  elseif($type=='Sub')
	  {
	 $id='Q'.rand(1,10000000000);
	    $path= 'assets/img/subj_quiz/'.$_FILES['file']['name'];
 
      move_uploaded_file($_FILES['file']['tmp_name'],
      "assets/img/subj_quiz/".$_FILES['file']['name']);
	  
	  $excel_readers = array(
    'Excel5' , 
    'Excel2003XML' , 
    'Excel2007'
);
 
include('Classes/PHPExcel.php');
include("Classes/PHPExcel/Writer/CSV.php");
include("Classes/PHPExcel/Writer/Excel5.php");

set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
include 'PHPExcel/IOFactory.php';
$reader = PHPExcel_IOFactory::createReader('Excel5');
$reader->setReadDataOnly(true);
$excel = $reader->load($path);
 
$writer = PHPExcel_IOFactory::createWriter($excel, 'CSV');
$writer->setDelimiter('|');
$writer->save('data2.csv');

//echo " ".$id." ".$subid." ".$brd1." ".$fid;
$insert_query1="insert into quiz (Quiz_ID,Subject_ID,Board_ID,Type,Quiz_name,Class,Timestamp,Faculty_ID,Paid,Adminname,isApproved)
				values('$id','$subid','$brd1','$type','$filename','$class',NOW(),'$fid','Y','Shikha','y')";
$result1=mysql_query($insert_query1);	//include "connect.php";
	
$insert_query="LOAD DATA LOCAL INFILE 'data2.csv' INTO TABLE quiz_questions FIELDS TERMINATED BY '|' ENCLOSED BY '\"' LINES TERMINATED BY '\r\n' 
(Question_ID,Statement,Correct_Answer,@var,@var1,@var2,@var3 ) 
Set Quiz_ID='$id', Subject_ID='$subid',Board_ID='$brd1',Type='$type'";
$result=mysql_query($insert_query);
	
	  }
	  
	  
				if (!mysql_query($insert_query,$con))
				{
					
					die('Error: ' . mysql_error());
				}					
				else
				echo "chk database";


     
?>