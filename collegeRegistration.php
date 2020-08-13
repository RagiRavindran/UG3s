<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function val()
{
	if(document.getElementById("textfield").value=="")
	{
		alert("Enter College Id");
		document.getElementById("textfield").focus();
    	return false;
 	}
	else if(document.getElementById("textfield2").value=="")
   	 {
     	alert("Enter College name!");
     	document.getElementById("v").focus();
     	return false;
 	}
	
	else if(document.getElementById("textfield3").value=="")
	
	{
		alert("Enter place");
		document.getElementById("textfield3").focus();
		return false;
	}
	if(document.getElementById("select").value=="")
	{
		alert("Select a District!");
		document.getElementById("select").focus();
    	return false;
 	}
	
	if(document.getElementById("textfield4").value=="")
   	 {
     	alert("Enter Phone Number!");
     	document.getElementById("textfield4").focus();
     	return false;
 	}
	if(/[^0-9]/gi.test(document.getElementById("textfield4").value))
	{
		alert("Special characters not allowed in Phone Number");
		document.getElementById("textfield4").focus();
		return false;
	}
	if((document.getElementById("textfield4").value).length<10 || (document.getElementById("textfield4").value).length>10)
	
	{
		alert("Phone number is not valid");
		document.getElementById("textfield4").focus();
		return false;
	}
	
	
	if(document.getElementById("textfield5").value=="")
	{
		alert("Enter your E-mail ID");
		document.getElementById("textfield5").focus();
		return false;
	}
	var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
	var emailid=document.getElementById("textfield5").value;
	var matchArray = emailid.match(emailPat);
	if (matchArray == null)
	{
		alert("Your Email ID seems incorrect. Enter Correct Email ID.");
		document.getElementById("textfield5").focus();
		return false;
	}
	if(document.getElementById("textfield6").value=="")
	{
		alert("Enter User Name!");
		document.getElementById("textfield6").focus();
    	return false;
 	}
	if(document.getElementById("textfield7").value=="")
	{
		alert("Enter Password!");
		document.getElementById("textfield7").focus();
    	return false;
 	}
	if(document.getElementById("textfield7").value.length<6)
	{
		alert("Password is too short..Password should be atleast 6 characters...");
		document.getElementById("textfield7").focus();
    	return false;
	}
	if(document.getElementById("textfield8").value=="")
	{
		alert("Enter Confirm Password!");
		document.getElementById("textfield8").focus();
    	return false;
 	}
	if((document.getElementById("textfield8").value)!=(document.getElementById("pwd").value))
	{
		alert("Password is missmatch!");
		document.getElementById("textfield8").focus();
    	return false;
 	}
}
</script>




</head>

<body><form action="" method="post">
<h3 align="center">REGISTRATION</h3>
<table width="200" border="1">
  <tr>
    <th scope="row">University Collage ID</th>
    <td><label>
      <input type="text" name="textfield" id="textfield" />
    </label></td>
  </tr>
  <tr>
    <th scope="row">Collage Name</th>
    <td><label>
      <input type="text" name="textfield2" id="textfield2" />
    </label></td>
  </tr>
  <tr>
    <th scope="row">Place</th>
    <td><label>
      <input type="text" name="textfield3" id="textfield3" />
    </label></td>
  </tr>
  <tr>
    <th scope="row">District</th>
    <td><label>
      <select name="select" id="select">
      <option value="kasaragod">Kasaragod</option>
      <option value="kannur">Kannur</option>
      <option value="wayanad">Wayanad</option>
      <option value="kozhikode">Kozhikode</option>
      <option value="malappuram">Malappuram</option>
      <option value="palakad">Palakad</option>
      <option value="thrissur">Thrissur</option>
      <option value="eranakulam">Eranakulam</option>
      <option value="idukki">Idukki</option>
      <option value="kottayam">Kottayam</option>
      <option value="alappuzha">Alappuzha</option>
      <option value="pathanamthitta">Pathanamthitta</option>
      <option value="kollam">Kollam</option>
      <option value="thiruvananthapuram">Thiruvananthapuram</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <th scope="row">Contact No</th>
    <td><label>
      <input type="text" name="textfield4" id="textfield4" />
    </label></td>
  </tr>
  <tr>
    <th scope="row">E-mail ID</th>
    <td><label>
      <input type="text" name="textfield5" id="textfield5" />
    </label></td>
  </tr>
  <tr>
    <th scope="row">User Name</th>
    <td><label>
      <input type="text" name="textfield6" id="textfield6" />
    </label></td>
  </tr>
  <tr>
    <th scope="row">Password</th>
    <td><label>
      <input type="password" name="textfield7" id="textfield7" />
    </label></td>
  </tr>
  <tr>
    <th scope="row">Conform Password</th>
    <td><label>
      <input type="password" name="textfield8" id="textfield8" />
    </label></td>
  </tr>
  <tr>
    <th scope="row"><input type="reset" name="button" id="button" value="Reset" /></th>
    <td><input type="submit" name="button2" id="button2" value="Submit" onclick="return val()" /></td>
  </tr>
</table>
</form>

</body>
</html>
<?php
include("connect.php");
if(isset($_POST['button2']))
{
$universitycollege_id=$_POST['textfield'];
$collegename=$_POST['textfield2'];
$place=$_POST['textfield3'];
$district=$_POST['select'];
$contactno=$_POST['textfield4'];
$emailid=$_POST['textfield5'];
$username=$_POST['textfield6'];
$password=$_POST['textfield7'];
mysql_query("insert into login(username,password,usertype)values('$username','$password','college')") or die(mysql_error());
$id=mysql_insert_id();
mysql_query("insert into collegereg(lid,universitycollege_id,collegename,place,district,contactno,email)values('$id','$universitycollege_id','$collegename','$place','$district','$contactno','$emailid')")or die(mysql_error());

	
	}?>