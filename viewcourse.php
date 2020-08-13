<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action=""><h3 align="center">View Courses</h3>
  <table width="400" height="100" border="1">
  
    <tr>
    <th>Course ID</th>
      <th width="105" scope="row">Course</th>
       
    </tr>
    <?php
  include("connect.php");
  $re=mysql_query("select * from course");
  if(mysql_num_rows($re)>0)
{
	while($row=mysql_fetch_array($re)){
	  ?>
     <tr>
      <td><?php echo $row[0] ?></td>
      <td scope="row"><?php echo $row[2] ?></td>
	   <td ><p><a href="course.php?id=<?php echo $row[0] ?>">Update</a></p>
	
      <p><a href="delete3.php?id=<?php echo $row[0] ?>">Delete</a></p></td>
	  <?php }?>
     </tr>
     <?php }?>
  </table>
</form>
</body>
</html>
 
