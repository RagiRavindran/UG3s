<?php
include("connect.php");
$id=$_GET['id'];
mysql_query("delete from studentreg where lid='$id'");
header("location:ViewStudent.php");
?>