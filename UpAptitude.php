<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<h3 align="center">Updating Questions for Aptitude Test</h3>
  <table align="center" width="200" border="0">
  <tr>
    <th scope="row">Question</th>
    <td><label>
      <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
    </label></td>
  </tr>
   <tr>
    <th scope="row">Option 1</th>
    <td><input type="text" name="textfield2" id="textfield2" /></td>
  </tr>
  <tr>
    <th scope="row">Option 2</th>
    <td><input type="text" name="textfield3" id="textfield3" /></td>
  </tr>
  <tr>
    <th scope="row">Option 3</th>
    <td><input type="text" name="textfield4" id="textfield4" /></td>
  </tr>
 
  <tr>
    <th scope="row">Option 4</th>
    <td><input type="text" name="textfield5" id="textfield5" /></td>
  </tr>
   <tr>
    <th scope="row">Answer</th> 
    <td><input type="text" name="textfield6" id="textfield6" /></td>
  </tr>
  <tr>
    <th scope="row">Category</th>
    <td><select name="select" id="select">
      <option value="select" selected="selected">Select</option>
      <option value="Verbal Ability ">Verbal Ability </option>
       <option value="Numeric Ability">Numeric Ability</option>
       <option value="Abstract Reasoning">Abstract Reasoning</option>
       <option value="Spatial Reasoning">Spatial Reasoning</option>
       <option value="Mechanical Reasoning">Mechanical Reasoning</option>
       <option value="Data Checking">Data Checking</option>
    </select>
    </td>
  </tr>
  <tr>
    <th scope="row"><input type="submit" name="button" id="button" value="Cancel" /></th>
    <td><input type="submit" name="button2" id="button2" value="Update" /></td>
  </tr>
</table>
  </form>
</body>
</html>
<?php
include("connect.php");
if(isset($_POST['button2']))
{
	$question=$_POST['textarea'];
	$option1=$_POST['textfield2'];
	$option2=$_POST['textfield3'];
	$option3=$_POST['textfield4'];
	$option4=$_POST['textfield5'];
	$ans=$_POST['textfield6'];
	$cat=$_POST['select'];
mysql_query("insert into aptitude(question,option1,option2,option3,option4,answer,category)values('$question','$option1','$option2','$option3','$option4','$ans','$cat')");																																																																																																			
}
?>
	
	