<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<h3 align="center">Searching for University Newses</h3>
<table width="200" border="1">
  <tr>
    <td>Category</td>
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
</table>
   <p>
  <input name="button" type="submit" value="Go" />
   </p>
   <p>&nbsp;</p>
   <p>
     <?php
include("connect.php");
if(isset($_POST['button']))
{
	
	$cat=$_POST['select'];
?>
   </p>
  <table border="1">
    <tr>
 <td>Sl.No</td>
 <td>File name</td>
 <td>File Description</td>
 <td>Download</td>
 </tr>

 <?php
  $cl=mysql_query("select * from universitynews where category='$cat'");
  if(mysql_num_rows($cl)>0)
{
	while($row=mysql_fetch_array($cl))
	{
	  ?>
   <tr>
    <td><?php echo $row[0]?></td>
    <td><?php echo $row[3]?></td>
    <td><?php echo $row[4]?></td>
    <td><a href="download.php/<?php echo $row[4]?>">Download</a></td>
   
  </tr><?php }
}
?>
 </table>
 <?php } ?>
 <p>&nbsp;</p>
</form>
</body>
</html>