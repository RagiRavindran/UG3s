<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>NewWave Business Inc.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>
  <div id="main_block">
    <!--Top Block Starts -->
    <div id="top_block">
      <div class="navi"> <a href="http://all-free-download.com/free-website-templates/" class="navi_hm">Home</a> <a href="http://all-free-download.com/free-website-templates/" class="navi_tx">Clients </a> <a href="http://all-free-download.com/free-website-templates/" class="navi_tx">Services</a> <a href="http://all-free-download.com/free-website-templates/" class="navi_tx">About Us</a> <a href="http://all-free-download.com/free-website-templates/" class="navi_tx">Contact</a> </div>
      <div class="tp_img1">
        <div class="tp_img2"> <a href="http://all-free-download.com/free-website-templates/"><img src="images/logo.gif" alt="" width="211" height="131" class="logo" /></a> <img src="images/tp_tx.gif" alt="" width="450" height="49" class="tp_tx" /> </div>
      </div>
    </div>
    <!--Top Block Ends -->
  </div>
  <div id="sub_block1">
    <!--Content Block Starts -->
    <div id="content_block">
      <!--Left Block Starts -->
      <div id="left_block"> <span class="blk1_lp"> <span class="our">Member Login</span> <span class="usr" style="margin-top:12px;">User Login</span>
        <input name="textfield" type="text" class="txbx" />
        <span class="usr">Password</span>
        <input name="textfield2" type="text" class="txbx" />
        <span class="chk">
        <input name="" type="checkbox" value="" />
        <span>Remember me</span> </span> <span class="usr">No Account Yet? <a href="http://all-free-download.com/free-website-templates/">Register</a></span>
        <input name="button" type="submit" class="smt" value="" />
        
        <?php 


include("footer.php");
?>
<?php
include('connect.php');
if(isset($_POST['button']))
{
$un=$_POST['textfield'];
$pn=$_POST['textfield2'];

$str="select * from login where username='$un' and password='$pn'";
$res=mysql_query($str);
$type="";
if($res1=mysql_fetch_array($res))
{
	$type=$res1[1];
	session_start();
	$_SESSION['lid']=$res1[0];
}
if($type=="admin")
{
	header("location:AdHome.php");
}
else if($type=="student")
{
	header("location:StHome.php");
}
else if($type=="teacher")
{
	header("location:TeaHome.php");
}
else if($type=="college")
{
	header("location:clhome.php");
}
else
{
	?>
    <script>
	alert("INCORRECT USERNAME AND PASSWORD");
	</script>
    <?php
}
}
?>
        
        
        
        </span> <span class="blk2_lp"> <span class="nws">News Updates</span> <span class="dat" style="margin-top:22px;"><span>12-10-2007</span><br />
        Let us turn your stressful environment into a tranquil setting with plants.</span> <span class="dat"><span>04-11-2007</span><br />
        Trees and blooming plants will create and and more.Trees and blooming plants will create and and more.</span> <span class="dat"><span>11-01-2008</span><br />
        impressive entrance for your clients and a relaxing area for your employees. </span> <span class="dat"><span>04-02-2008</span><br />
        Let us turn that empty into a company oasis! trees and blooming plants will create.</span> <span class="dat"><span>04-11-2007</span><br />
        Trees and blooming plants will create and and more.</span> <span class="dat"><span>11-01-2008</span><br />
        impressive entrance for your clients and a relaxing area for your employees. Trees and blooming plants will create and and more.
        <input name="" type="submit" value="" />
        </span> </span> </div>
      <!--Left Block Ends -->
      <!--Right Block Starts -->
      <div id="right_block"> <span class="modul"> <span class="wel">Welcome to Our Company</span>