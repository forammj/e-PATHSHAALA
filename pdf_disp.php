<html>
<body>

<!--<embed src="http://yoursite.com/the.pdf" width="500" height="375">-->
<!--<iframe src="http://docs.google.com/gview?url="C:\xampp\htdocs\e-paathshala\test.pdf&embedded=true"" style="width:718px; height:700px;" frameborder="0"></iframe>-->
<?php
include "connect.php";

session_start();

/*$pdf = pdf_new();

pdf_open_file($pdf, "C:\Users\SHIRIN\Desktop\test.pdf");
pdf_begin_page($pdf, 3, 6);
pdf_set_font($pdf, "Times-Roman", 30, "localhost");
pdf_set_value($pdf, "textrendering", 1);
pdf_show_xy($pdf, "A PDF document is created!", 3, 6);
pdf_end_page($pdf);
pdf_close($pdf);

?>*/ 

//echo " < embed src=\"C:/Users/SHIRIN/Desktop/test.pdf\" width=\"500\" height=\"375\"> ";

//<?php
//header('Content-type: application/doc');
header('Content-type: application/pdf');
$name=$_GET['link'];
$subid=$_GET['link1'];
$sql=mysql_query("select * from study_material where Material_name='$name' and Subject_ID='$subid'");
$result=mysql_fetch_assoc($sql);

$path=$result['Material_link'];
$path1=substr($path,29);
//echo "gbh".$path1;
readfile($path);

?>
</body>
</html>