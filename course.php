<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="POST" action="">
<h3>COURSE UPDATION</h3>
<table width="200" border="1">
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
    <th scope="row"><input type="submit" name="button" id="button" value="Updae" /></th>
    <td><input type="submit" name="button2" id="button2" value="Cancel" /></td>
  </tr>
</table>

</form>
</body>
</html>
<?php
include('connect.php');
$lid=mysql_insert_id();
if(isset($_POST['button']))
{
	
		session_start();
		$res=$_SESSION['lid'];
		$res1=mysql_query("select universitycollege_id from collegereg where lid='$res'");
		
		$clgid="";
		if(mysql_num_rows($res1)>0){
		$row=mysql_fetch_array($res1);
		$clgid=$row[0];	
		}
	$cors=$_POST['select'];
	mysql_query("insert into course(universitycollegeid,course)value('$clgid','$cors')");
}
?>