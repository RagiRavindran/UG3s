<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="POST" enctype="multipart/form-data" name="form1" id="form1">
<h3 align="center">Updating University News</h3>
<table width="200" border="0" align="center">
  
  <tr>
    <th scope="row">Category</th>
    <td><label>
      <select name="select" id="select">
      <option value="select" selected="selected">Select</option>
      <option value="Scholarship">Scholarship</option>
      <option value="Entrance Exam Details">Entrance Exam Details</option>
      <option value="Current Affairs">Current Affairs</option>
      <option value="Interview Tips">Interview Tips</option>
      <option value="Trending Jobs">Trending Jobs</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <th scope="row">File Descritpion</th>
    <td><label>
      <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
    </label></td>
  </tr>
  <tr>
    <th scope="row">File Name</th>
    <td><input type="file" name="fileField" id="fileField" /></td>
  </tr>
  <tr>
    <th scope="row"><input type="reset" name="button" id="button" value="Cancel" /></th>
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
	$cat=$_POST['select'];
	$filed=$_POST['textarea'];
	$filen=$_FILES['fileField']['name'];
move_uploaded_file($_FILES['fileField']['tmp_name'],"study matereals/$filen");
	mysql_query("insert into universitynews(category,date,filedescription,filename)values('$cat',curdate(),'$filed','$filen')");
}
	?>