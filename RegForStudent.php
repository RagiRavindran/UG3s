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
		alert("Enter Student ID");
		document.getElementById("textfield").focus();
    	return false;
 	}
	else if(document.getElementById("textfield2").value=="")
   	 {
     	alert("Enter First Name!");
     	document.getElementById("v").focus();
     	return false;
 	}
	if(/[^a-z\s]/gi.test(document.getElementById("textfield2").value))
	{
		alert("Special characters are not allowed in name");
		document.getElementById("textfield2").focus();
		return false;
	}
	
	else if(document.getElementById("textfield3").value=="")
	{
		alert("Enter Middle Name!");
		document.getElementById("textfield3").focus();
		return false;
	}
	if(/[^a-z\s]/gi.test(document.getElementById("textfield2").value))
	{
		alert("Special characters are not allowed in name");
		document.getElementById("textfield2").focus();
		return false;
	}
	else if(document.getElementById("textfield4").value=="")
   	 {
     	alert("Enter Last Name!");
     	document.getElementById("v").focus();
     	return false;
 	}
	if(/[^a-z\s]/gi.test(document.getElementById("textfield4").value))
	{
		alert("Special characters are not allowed in name");
		document.getElementById("textfield4").focus();
		return false;
	}
	if(document.getElementById("textfield10").value=="")
   	 {
     	alert("Enter a valid Date!");
     	document.getElementById("textfield10").focus();
     	return false;
 	}
	if(document.getElementById("textfield11").value=="")
   	 {
     	alert("Enter a valid Data!");
     	document.getElementById("textfield11").focus();
     	return false;
 	}
	if(document.getElementById("textfield12").value=="")
   	 {
     	alert("Enter a valid Data!");
     	document.getElementById("textfield12").focus();
     	return false;
 	}
	if(document.getElementById("textfield13").value=="")
   	 {
     	alert("Enter a valid Data!");
     	document.getElementById("textfield13").focus();
     	return false;
 	}
	if(document.getElementById("textfield15").value=="")
   	 {
     	alert("Enter a valid Data!");
     	document.getElementById("textfield15").focus();
     	return false;
 	}
	if(document.getElementById("textfield16").value=="")
   	 {
     	alert("Enter a valid Data!");
     	document.getElementById("textfield16").focus();
     	return false;
 	}
	if(document.getElementById("select").value=="select")
	{
		alert("Select a Course!");
		document.getElementById("select").focus();
    	return false;
 	}
	if(document.getElementById("select2").value=="")
	{
		alert("Select a Semester!");
		document.getElementById("select2").focus();
    	return false;
 	}
	
	
	if(document.getElementById("textfield5").value=="")
   	 {
     	alert("Enter Phone Number!");
     	document.getElementById("textfield5").focus();
     	return false;
 	}
	if(/[^0-9]/gi.test(document.getElementById("textfield5").value))
	{
		alert("Special characters not allowed in Phone Number");
		document.getElementById("textfield5").focus();
		return false;
	}
	if((document.getElementById("textfield5").value).length<10 || (document.getElementById("textfield5").value).length>10)
	
	{
		alert("Phone number is not valid");
		document.getElementById("textfield5").focus();
		return false;
	}
	if(document.getElementById("select3").value=="")
	{
		alert("Select a District!");
		document.getElementById("select3").focus();
    	return false;
 	}
	
	if(document.getElementById("textfield6").value=="")
	{
		alert("Enter your E-mail ID");
		document.getElementById("textfield6").focus();
		return false;
	}
	var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
	var emailid=document.getElementById("textfield6").value;
	var matchArray = emailid.match(emailPat);
	if (matchArray == null)
	{
		alert("Your Email ID seems incorrect. Enter Correct Email ID.");
		document.getElementById("textfield6").focus();
		return false;
	}
	if(document.getElementById("textfield7").value=="")
	{
		alert("Enter User Name!");
		document.getElementById("textfield7").focus();
    	return false;
 	}
	if(document.getElementById("textfield8").value=="")
	{
		alert("Enter Password!");
		document.getElementById("textfield8").focus();
    	return false;
 	}
	if(document.getElementById("textfield8").value.length<6)
	{
		alert("Password is too short..Password should be atleast 6 characters...");
		document.getElementById("textfield8").focus();
    	return false;
	}
	if(document.getElementById("textfield9").value=="")
	{
		alert("Enter Confirm Password!");
		document.getElementById("textfield9").focus();
    	return false;
 	}
	if((document.getElementById("textfield8").value)!=(document.getElementById("textfield9").value))
	{
		alert("Password is missmatch!");
		document.getElementById("textfield9").focus();
    	return false;
 	}


}
</script>

</head>

<body>
<form action="" method="POST" enctype="multipart/form-data" name="form1" id="form1">
<h3 align="center">Registration</h3>
<table width="200" border="1">
  <tr>
    <th scope="row">Cap/Reg No</th>
    <td><label>
      <input type="text" name="textfield" id="textfield" />
    </label></td>
  </tr>
  <tr>
    <th scope="row">First Nme</th>
    <td><input type="text" name="textfield2" id="textfield2" /></td>
  </tr>
  <tr>
    <th scope="row">Middle Name</th>
    <td><input type="text" name="textfield3" id="textfield3" /></td>
  </tr>
  <tr>
    <th scope="row">Last Name</th>
    <td><input type="text" name="textfield4" id="textfield4" /></td>
  </tr>
  <tr>
    <th scope="row">DOB</th>
    <td><label>
      <input type="date" name="textfield10" id="textfield10" />
    </label></td>
  </tr>
  <tr>
    <th scope="row">Gender</th>
    <td><label>
      <input type="radio"  name="radio" id="radio" value="male" checked="checked" />
      Male
      <input type="radio" name="radio" id="radio" value="female" />
  Female</label></td>
  </tr>
  <tr>
    <th scope="row">House Name</th>
    <td><label for="textfield11"></label>
      <input type="text" name="textfield11" id="textfield11" /></td>
  </tr>
  <tr><th>Place</th>
  <td><label for="textfield12"></label>
    <input type="text" name="textfield12" id="textfield12" /></td>
  </tr>
    <tr><th>Post</th>
    <td><label for="textfield13"></label>
      <input type="text" name="textfield13" id="textfield13" /></td></tr>
      <tr>
      <th>Annual Income</th><td><label for="fileField"></label>
        <label for="textfield15"></label>
        <input type="text" name="textfield15" id="textfield15" /></td></tr>
        <tr><th>Cast</th>
  <td><label for="textfield16"></label>
    <input type="text" name="textfield16" id="textfield16" /></td></tr>
  <tr>
    <th scope="row">Course</th>
    <td><select name="select" id="select">
	  <option value="slect" selected="selected">Select</option>
      <option value="BA">BA</option>
      <option value="BSc">BSc</option>
      <option value="BBA">BBA</option>
      <option value="BCA">BCA</option>
      <option value="BCom">BCom</option>
      <option value="BMMC">BMMC</option>
      <option value="BTA">BTA</option>
      <option value="BDS">BDS</option>
      <option value="BHM">BHM</option>
	  <option value="BPM">BPM</option>
      <option value="B.Pharm">B.Pharm</option>
      <option value="B.PED">B.PED</option>
      <option value="BTHM">BTHM</option>
      <option value="BSW">BSW</option>
      <option value="B.Lisc">B.Lisc</option>
      <option value="BPT">BPT</option>
      <option value="BHMS">BHMS</option>
      <option value="BAMS">BAMS</option>
      <option value="BASLP">BASLP</option>
      <option value="LLB">LLB</option>
      <option value="LLM">LLM</option>
      <option value="Others">Others</option>
        	  </select></td>
  </tr>
  <tr>
    <th scope="row">Semester</th>
    <td><select name="select2" id="select2">
     <option value="one">1st Semester</option>
      <option value="two">2nd Semester</option>
      <option value="three">3rd Semester</option>
      <option value="four">4th Semester</option>
      <option value="five">5th Semester</option>
      <option value="six">6th Semester</option>
          </select></td>
  </tr>
  <tr>
    <th scope="row">Contact No</th>
    <td><input type="text" name="textfield5" id="textfield5" /></td>
  </tr>
  <tr>
    <th scope="row">District</th>
    <td><select name="select3" id="select3">
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
    </select></td>
  </tr>
  <tr>
    <th scope="row">E-mail ID</th>
    <td><input type="text" name="textfield6" id="textfield6" /></td>
  </tr>
  <tr>
    <th scope="row">User Name</th>
    <td><input type="text" name="textfield7" id="textfield7" /></td>
  </tr>
  <tr>
    <th scope="row">Password</th>
    <td><input type="password" name="textfield8" id="textfield8" /></td>
  </tr>
  <tr>
    <th scope="row">Confirm Password</th>
    <td><input type="password" name="textfield9" id="textfield9" /></td>
  </tr>
  <tr>
    <th scope="row"><input type="submit" name="button" id="button" value="Submit" onclick="return val();" /></th>
    <td><input type="reset" name="button2" id="button2" value="Reset" /></td>
  </tr>
</table>
</form>
</body>
</html>
<?php
include("connect.php");
if(isset($_POST['button']))
{
	$cid=$_POST['textfield'];
	$fname=$_POST['textfield2'];
	
	$mname=$_POST['textfield3'];
	$lname=$_POST['textfield4'];
	$dob=$_POST['textfield10'];
	$gender=$_POST['radio'];
	$hname=$_POST['textfield11'];
	$place=$_POST['textfield12']; 
	$post=$_POST['textfield13'];
	$course=$_POST['select'];
	$district=$_POST['select3'];
	$cono=$_POST['textfield5'];
	$anincom=$_POST['textfield15'];
$cast=$_POST['textfield16'];
$sem=$_POST['select2'];
$email=$_POST['textfield6'];
$uname=$_POST['textfield7'];
$pword=$_POST['textfield8'];
mysql_query("insert into login(username,password,usertype)values('$uname','$pword','student')");
$id=mysql_insert_id();
mysql_query("insert into studentreg(lid,cap_id,firstname,middlename,lastname,dob,housename,gender,place,post,district,contactno,caste,annual_income,course,semester,email_id)values('$id','$cid','$fname','$mname','$lname','$dob','$hname','$gender','$place','$post','$district','$cono','$cast','$anincom','$course','$sem','$email')");
	}
	?>
	
