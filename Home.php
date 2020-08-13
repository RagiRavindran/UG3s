<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<blockquote>
  <h3 align="right">
    WELCOME
</h3></blockquote>
<table align="right" width="200" border="0">
  <tr>
    <th colspan="2">Login</th></tr>
  <tr>
    <td scope="row">Username</td>
    <td><label>
      <input type="text" name="textfield" id="textfield" />
      </label></td>
    </tr>
  <tr>
    <td scope="row">Password</td>
    <td><label>
      <input type="password" name="textfield2" id="textfield2" />
      </label></td>
    </tr>
  <tr>
    <th scope="row"><input type="submit" name="button" id="button" value="Login" /></th>
    <td><input type="Reset" name="button2" id="button2" value="Cancel" /></td>
    </tr>
  <tr>
    <th colspan="2">Create New Account</th>
    </tr>
  <tr>
    <td><a href="collegeRegistration.php">College</a></td>
    <td><a href="RegForStudent.php">Sudent</a></td>
    
    
    </tr>
</table>

</form>
</body>
</html>
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