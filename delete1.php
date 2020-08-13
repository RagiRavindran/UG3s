<?php
include("connect.php");
$id=$_GET['id'];
mysql_query("delete from teacherreg where tid='$id'");
header("location:viewteacher.php");
?>