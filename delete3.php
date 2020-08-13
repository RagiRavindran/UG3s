<?php
include("connect.php");
$id=$_GET['id'];
mysql_query("delete from course where courseid='$id'");
header("location:viewcourse.php");
?>