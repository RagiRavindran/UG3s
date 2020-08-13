<?php
include("connect.php");
$id=$_GET['id'];
mysql_query("update teacherreg set status='blocked' where tid='$id'");
header("location:viewcomplaints.php");
?>