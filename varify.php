<?php
include("connect.php");
$id=$_GET['id'];
mysql_query("update studentreg set status='approved' where lid='$id'");
header("location:ViewStudent.php");
?>