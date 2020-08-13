<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<h3 align="center">Updating Study Materials</h3>
  <table align="center" width="200" border="0">
    <tr>
    <th scope="row">Course</th>
    <td><label for="textfield2"></label>
      <select name="course" id="course">
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
    <td><label>
      <select name="select" id="select">
      <option value="select" selected="selected">Select</option>
      <option value="1">1st Semester</option>
      <option value="2">2nd Semester</option>
      <option value="3">3rd Semester</option>
      <option value="4">4th Semester</option>
      <option value="5">5th Semester</option>
      <option value="6">6th Semester</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <th scope="row">Subject</th>
    <td><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
  </tr>
  <tr>
    <th scope="row">Category</th>
    <td><select name="select3" id="select3">
    <option value="select" selected="selected">Select</option>
    <option value="syllabus">Syllabus</option>
    <option value="model question">Model Question papers</option>
    <option value="reference">Reference</option>
  </select></td>
  </tr>
  <tr>
    <th scope="row">File Name</th>
    <td><label>
      <input type="file" name="fileField" id="fileField" />
    </label></td>
  </tr>
  <tr>
    <th scope="row">File Description</th>
    <td><label>
      <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
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
$semester=$_POST['select'];
$subject=$_POST['textfield'];
$category=$_POST['select3'];
$filename=$_FILES['fileField']['name'];
move_uploaded_file($_FILES['fileField']['tmp_name'],"study matereals/$filename");
$filedescription=$_POST['textarea'];
$course=$_POST['course'];
mysql_query("insert into studymaterial(semester,subject,category,filename,filedescription,course,date)values('$semester','$subject','$category','$filename','$filedescription','$course',curdate())");
}?>