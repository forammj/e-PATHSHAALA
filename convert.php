<?php 
include "connect.php";

$excel_readers = array(
    'Excel5' , 
    'Excel2003XML' , 
    'Excel2007'
);
 
include('Classes/PHPExcel.php');
include("Classes/PHPExcel/Writer/CSV.php");
include("Classes/PHPExcel/Writer/Excel5.php");

set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');

/** PHPExcel_IOFactory */
include 'PHPExcel/IOFactory.php';
 
//PHPExcel_Cell::setValueBinder( new PHPExcel_Cell_AdvancedValueBinder() );
$reader = PHPExcel_IOFactory::createReader('Excel5');
$reader->setReadDataOnly(true);
// $reader->setInputEncoding('UTF-16LE');
$path = 'CoCubes.xls';											//########################################################pathhh
$excel = $reader->load($path);
 
$writer = PHPExcel_IOFactory::createWriter($excel, 'CSV');
$writer->setDelimiter('|');
$writer->save('data1.csv');
//////################# subid,qid,boardid ####################//
$qid='Q3';
$subid='M6';
$boardid='B1';
$type='MCQ';
echo " ".$qid." ".$subid." ".$boardid." ".$type;


$sql="LOAD DATA LOCAL INFILE 'data1.csv' INTO TABLE quiz_questions FIELDS TERMINATED BY '|' ENCLOSED BY '\"' LINES TERMINATED BY '\r\n' 
(Question_ID,Statement,Option1,Option2,Option3,Option4,Correct_Answer,@var,@var1,@var2,@var3 ) 
Set Quiz_ID='$qid', Subject_ID='$subid',Board_ID='$boardid',Type='$type'";
$result=mysql_query($sql);
echo "WEDRFTG"." ".$result;
if($result)
{
echo "data saved";

}
else
{
echo "ERROR";
}
 ?>