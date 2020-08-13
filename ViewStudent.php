<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="POST" action="">
<h3 align="center">Viewing Students Details</h3>
<table width="200" border="1">
  <tr>
    <td>SID</th>
    <td>RegNO</td>
    <td>First Name</td>
    <td>Middle Name</td>
    <td>Last Name</td>
    <td>DOB</td>
    <td>Gender</td>
    <td>House name</td>
     <td>Place</td>
    <td>Post</td>
    <td>Distrct</td>
    <td>Contact No</td>
    <td>Course</td>
    <td>E-mail ID</td>
    <td>Caste</td>
    <td>Anual Income </td>
      <td>Semester</td> 
  </tr>
  
  <?php
  include("connect.php");
  $re=mysql_query("select * from studentreg");
  if(mysql_num_rows($re)>0)
{
	while($row=mysql_fetch_array($re)){
	  ?>
  <tr>
    <th scope="row"><?php echo $row[0] ?></th>
    <td><?php echo $row[1] ?></td>
    <td><?php echo $row[2] ?></td>
    <td><?php echo $row[3] ?></td>
    <td><?php echo $row[4] ?></td>
    <td><?php echo $row[5] ?></td>
    <td><?php echo $row[6] ?></td>
    <td><?php echo $row[7] ?></td>
    <td><?php echo $row[8] ?></td>
    <td><?php echo $row[9] ?></td>
    <td><?php echo $row[10] ?></td>
    <td><?php echo $row[11] ?></td>
    <td><?php echo $row[14] ?></td>
    <td><?php echo $row[16] ?></td>
    <td><?php echo $row[12] ?></td>
     <td><?php echo $row[13] ?></td>
     <td><?php echo $row[15] ?></td>
     <?php
	 if($row[17]=='approved')
     {
		 ?>
<td><?php echo $row[17] ?><p><a href="delete.php?id=<?php echo $row[0] ?>">Delete</a></p></td>
<?php
	 }else{
	 ?>
	 <td><p><a href="varify.php?id=<?php echo $row[0] ?>">Verify</a></p>
	
      <p><a href="delete.php?id=<?php echo $row[0] ?>">Delete</a></p></td><?php }?>
  </tr>
  
  <?php
	}
}
  ?>
</table>
</form>
</body>
</html>
