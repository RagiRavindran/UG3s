<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<script type="text/javascript">
function val()
{
	if(document.getElementById("textfield").value=="")
	{
		alert("Enter Teacher ID!");
		document.getElementById("textfield").focus();
    	return false;
 	}
	
	if(document.getElementById("textfield1").value=="")
   	 {
     	alert("Enter First Name!");
     	document.getElementById("textfield1").focus();
     	return false;
 	}
	if(/[^a-z\s]/gi.test(document.getElementById("textfield1").value))
	{
		alert("Special characters are not allowed in name");
		document.getElementById("textfield1").focus();
		return false;
	}

	if(document.getElementById("textfield2").value=="")
   	 {
     	alert("Enter Second Name!");
     	document.getElementById("textfield2").focus();
     	return false;
 	}
	if(/[^a-z\s]/gi.test(document.getElementById("textfield2").value))
	{
		alert("Special characters are not allowed in name");
		document.getElementById("textfield2").focus();
		return false;
	}
	if(document.getElementById("textfield3").value=="")
   	 {
     	alert("Enter Last Name!");
     	document.getElementById("textfield3").focus();
     	return false;
 	}
	if(/[^a-z\s]/gi.test(document.getElementById("textfield3").value))
	{
		alert("Special characters are not allowed in name");
		document.getElementById("textfield3").focus();
		return false;
	}
	if(document.getElementById("textfield4").value=="")
   	 {
     	alert("Enter a valid Date!");
     	document.getElementById("textfield4").focus();
     	return false;
 	}
	//if((document.getElementById("textfield4").value).length>2)
//	
//	{
//		alert("Age is not valid");
//		document.getElementById("textfield4").focus();
//		return false;
//	}
	if(document.getElementById("textfield12").value=="")
	{
		alert("Enter House Name!");
		document.getElementById("textfield12").focus();
    	return false;
 	}
	if(document.getElementById("textfield14").value=="")
	{
		alert("Enter Post!");
		document.getElementById("textfield14").focus();
    	return false;
 	}
	
	if(document.getElementById("select").value=="")
   	 {
     	alert("Enter a District!");
     	document.getElementById("select").focus();
     	return false;
 	}
if(document.getElementById("textfield5").value=="")
   	 {
     	alert("Enter Phone Number!");
     	document.getElementById("textfield5").focus();
     	return false;
 	}
	if((document.getElementById("textfield4").value).length<10 || (document.getElementById("textfield4").value).length>10)
	
	{
		alert("Phone number is not valid");
		document.getElementById("textfield4").focus();
		return false;
	}
	
	if(/[^0-9]/gi.test(document.getElementById("textfield5").value))
	{
		alert("Special characters not allowed in Phone Number");
		document.getElementById("textfield5").focus();
		return false;
	}
	if((document.getElementById("textfield5").value).length<10)
	
	{
		alert("Phone number is not valid");
		document.getElementById("textfield5").focus();
		return false;
	}
	if((document.getElementById("textfield5").value).length>15)
	
	{
		alert("Phone number is not valid");
		document.getElementById("textfield5").focus();
		return false;
	}
	if(document.getElementById("textfield6").value=="")
   	 {
     	alert("Enter your Qualification!");
     	document.getElementById("textfield6").focus();
     	return false;
 	}
	if(document.getElementById("textfield7").value=="")
   	 {
     	alert("Enter your Expirience!");
     	document.getElementById("textfield7").focus();
     	return false;
 	}
	
	
	//if(/[^a-z\s]/gi.test(document.getElementById("textfield6").value))
//	{
//		alert("Special characters are not allowed in name");
//		document.getElementById("textfield6").focus();
//		return false;
//	}
if(document.getElementById("select2").value=="")
   	 {
     	alert("Enter a Course!");
     	document.getElementById("select2").focus();
     	return false;
 	}
if(document.getElementById("textfield8").value=="")
	{
		alert("Enter your E-mail ID");
		document.getElementById("textfield8").focus();
		return false;
	}
	var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
	var emailid=document.getElementById("textfield8").value;
	var matchArray = emailid.match(emailPat);
	if (matchArray == null)
	{
		alert("Your Email ID seems incorrect. Enter Correct Email ID.");
		document.getElementById("textfield8").focus();
		return false;
	}
	if(document.getElementById("textfield9").value=="")
	{
		alert("Enter User Name!");
		document.getElementById("textfield9").focus();
    	return false;
 	}
	if(document.getElementById("textfield10").value=="")
	{
		alert("Enter Password!");
		document.getElementById("textfield10").focus();
    	return false;
 	}
	if(document.getElementById("textfield10").value.length<6)
	{
		alert("Password is too short..Password should be atleast 6 characters...");
		document.getElementById("textfield10").focus();
    	return false;
	}
	if(document.getElementById("textfield11").value=="")
	{
		alert("Confirm Your Password!");
		document.getElementById("textfield11").focus();
    	return false;
 	}
	if((document.getElementById("textfield10").value)!=(document.getElementById("textfield11").value))
	{
		alert("Password is missmatch!");
		document.getElementById("textfield11").focus();
    	return false;
 	}
}
</script>
<body>
<form id="form1" name="form1" method="post" action="">
  <h3 align="center">REGISTRATION</h3>
  <table width="200" border="1">
    <tr>
      <th scope="row">Teacher ID</th>
      <td><label>
        <input type="text" name="textfield" id="textfield" />
      </label></td>
    </tr>
    <tr>
      <th scope="row">Frist Name</th>
      <td><input type="text" name="textfield1" id="textfield1" /></td>
    </tr>
    <tr>
      <th scope="row">Midle Name</th>
      <td><input type="text" name="textfield2" id="textfield2" /></td>
    </tr>
    <tr>
      <th scope="row">Last Name</th>
      <td><input type="text" name="textfield3" id="textfield3" /></td>
    </tr>
    <tr>
      <th scope="row">DOB</th>
      <td><label>
        <input type="date" name="textfield4" id="textfield4" />
      </label></td>
    </tr>
    <tr>
      <th scope="row">Gender</th>
      <td><label>
        <input type="radio" name="radio" id="radio" value="Male" checked="checked"/>
      Male 
      <input type="radio" name="radio" id="radio" value="Female" />
      Female</label></td>
    </tr>
    <tr>
      <th scope="row">House Name</th>
      <td>
      <input type="text" name="textfield12" id="textfield12" /></td>
      </tr>
    <tr>
    <th width="120" height="35">Post</th>
    <td width="120">
      <input type="text" name="textfield14" id="textfield14" /></td>
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
      <option value="other">Other</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <th scope="row">Contact No</th>
      <td><input type="text" name="textfield5" id="textfield5" /></td>
    </tr>
    <tr>
      <th scope="row">Qualification</th>
      <td>      <input type="text" name="textfield6" id="textfield6" /></td>
    </tr>
    <tr>
      <th scope="row">Experience</th>
      <td><input type="text" name="textfield7" id="textfield7" /></td>
    </tr>
    <tr>
      <th scope="row">Course</th>
      <td><select name="select2" id="select2">
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
      <th scope="row">E-mail ID</th>
      <td><input type="text" name="textfield8" id="textfield8" /></td>
    </tr>
    <tr>
      <th scope="row">User Name</th>
      <td><input type="text" name="textfield9" id="textfield9" /></td>
    </tr>
    <tr>
      <th scope="row">Password</th>
      <td><input type="password" name="textfield10" id="textfield10" /></td>
    </tr>
    <tr>
      <th scope="row">Confirm Password</th>
      <td><input type="password" name="textfield11" id="textfield11" /></td>
    </tr>
    <tr>
      <th scope="row"><input type="reset" name="button" id="button" value="Reset" /></th>
      <td><input type="submit" name="button2" id="button2" value="Submit" onclick="return val()"/></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
<?php
include("connect.php");
if(isset($_POST['button2']))
{

		session_start();
		$clgid=$_SESSION['lid'];
		
	$teacherid=$_POST['textfield'];
	$fname=$_POST['textfield1'];
	$mname=$_POST['textfield2'];
	$lname=$_POST['textfield3'];
	$dob=$_POST['textfield4'];
		$gender=$_POST['radio'];
		$housename=$_POST['textfield12'];
		$post=$_POST['textfield14'];
		$district=$_POST['select'];
		$contactno=$_POST['textfield5'];
		$qulification=$_POST['textfield6'];
		$experience=$_POST['textfield7'];
		$course=$_POST['select2'];
		$email_id=$_POST['textfield8'];
		$username=$_POST['textfield9'];
		$password=$_POST['textfield10'];
		$conpassword=$_POST['textfield11'];
	mysql_query("insert into login(username,password,usertype)values('$username','$password','teacher')");
	$id=mysql_insert_id();
		mysql_query("insert into teacherreg(tid,teacher_id,firstname,middlename,lastname,dob,gender,housename,post,district,contactno,qualification,experience,course,email_id,universitycollege_id)values(
'$id','$teacherid','$fname','$mname','$lname','$dob','$gender','$housename','$post','$district','$contactno','$qulification','$experience','$course','$email_id','$clgid')");
	}
?>