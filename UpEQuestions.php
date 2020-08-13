<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<h3 align="center">Updating Entrence Questions</h3>
<table align="center" width="200" border="0">
  <tr>
    <th scope="row">Course</th>
    <td><label for="select"></label>
      <select name="select" id="select">
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
    <th scope="row">Question</th>
    <td><label>
      <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
    </label></td>
  </tr>
  <tr>
    <th scope="row">Answer</th>
    <td><label for="textfield6"></label>
      <input type="text" name="textfield6" id="textfield6" /></td>
  </tr>
  <tr>
    <th scope="row">Option 1</th>
    <td><label>
      <input type="text" name="textfield2" id="textfield2" />
    </label></td>
  </tr>
  <tr>
    <th scope="row">Option 2</th>
    <td><label>
      <input type="text" name="textfield3" id="textfield3" />
    </label></td>
  </tr>
  <tr>
    <th scope="row">Option 3</th>
    <td><label>
      <input type="text" name="textfield4" id="textfield4" />
    </label></td>
  </tr>
  <tr>
    <th scope="row">Option 4</th>
    <td><label>
      <input type="text" name="textfield5" id="textfield5" />
    </label></td>
  </tr>
  <tr>
    <th scope="row"><input type="submit" name="button" id="button" value="Update" /></th>
    <td><input type="submit" name="button2" id="button2" value="Cancel" /></td>
  </tr>
</table>
</form>
</body>
</html>
<?php
include("connect.php");
if(isset($_POST['button']))
{
	$course=$_POST['select'];
	$question=$_POST['textarea'];
	$answer=$_POST['textfield6'];
	$option1=$_POST['textfield2'];
	$option2=$_POST['textfield3'];
	$option3=$_POST['textfield4'];
    $option4=$_POST['textfield5'];
	mysql_query("insert into entrancequestion(question,course,answer,option1,option2,option3,option4)values('$question','$course','$answer','$option1','$option2','$option3','$option4')");
}
?>