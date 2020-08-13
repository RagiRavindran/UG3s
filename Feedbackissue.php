<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form action="" method="POST" name="form1" id="form1">
<h3 align="center">Write your Feedback</h3>
<table width="200" border="1">
 <tr><td>Feedback</td>

 </tr> <tr>
    
    <td><label for="textarea"></label>
      <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="button" id="button" value="Issue" />
    <input type="reset" name="button2" id="button2" value="Cancel" /></td>
  </tr>
</table>
</form>
</body>
</html>
<?php

include('connect.php');

if(isset($_POST['button']))
{
	session_start();
		$r=$_SESSION['lid'];
		$res1=mysql_query("select usertype from login where login_id='$r'");
		$str="";
		if(mysql_num_rows($res1)>0){
		$row=mysql_fetch_array($res1);
		$str=$row[0];
	$feed=$_POST['textarea'];
	mysql_query("insert into feedback(userid,feedback,usertype,date)values('$r','$feed','$str',curdate())");
}
}
?>