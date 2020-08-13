<?php
include("connect.php");
$id=$_GET['id'];
mysql_query("delete from collegereg where lid='$id'");
header("location:viewcollege.php");
?>