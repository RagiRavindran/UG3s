<?php
include("connect.php");
$id=$_GET['lid'];
mysql_query("update teacherreg set status='approved' where tid='$id'");
header("location:viewteacher.php");
?>