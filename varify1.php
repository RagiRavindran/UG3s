<?php
include("connect.php");
$id=$_GET['lid'];
mysql_query("update collegereg set status='approved' where lid='$id'");
header("location:viewcollege.php");
?>