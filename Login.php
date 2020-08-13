<?php

include("loginheaer.php"); 
?>
                   
    <form id="form1" name="form1" method="post" action="">
<h3 align="center">
WELCOME
</h3>
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
  
  <td colspan="2"><a href="forgot password.php">Forget Password?</a> </td>
  </tr><tr>
      <th colspan="2">Create New Account</th>
    </tr>
    <tr>
      <td><a href="collegeRegistration.php">College</a></td>
      <td><a href="RegForStudent.php">Sudent</a></td>
    </tr>
</table>

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

              
              
         
    <?php
	
	include("loginfooter.php");
	?>