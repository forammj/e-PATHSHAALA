<?php
$std=$_POST['std'];
$board=$_POST['board'];
$sub=$_POST['sub'];
$page=$_POST['page'];


if($page=="Quiz")
{
header("Location: quiz_admin.php");
}
else if($page=="Discussion Forum")
{
<!-- header("Location: experts_page.php");
faculty discussion page -->
}
else
{
header("Location: resources_admin.php");
}