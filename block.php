<?php
include("connect.php");
$id=$_GET['id'];
mysql_query("update studentreg set status='blocked' where lid='$id'");
header("location:complaint.php");
?>