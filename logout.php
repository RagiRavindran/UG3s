
<?php
include("connect.php");
session_start();
$_SESSION['lid']="";
header("location:login.php");
?>