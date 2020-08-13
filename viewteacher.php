<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <h3 align="center">Viewing Teacher's Details</h3>
  <table width="200" border="1">
  <tr>
    <td>College ID</th>
    <td>Teacher ID</td>
    <td>First Name</td>
    <td>Midle Name</td>
    <td>Last Nmae</td>
    <td>DOB</td>
    <td>Gender</td>
    <td>House Nmae</td>
    <td>Post</td>
    <td>District</td>
    <td>Contact No</td>
    <td>Qualification</td>
    <td>Expirence</td>
    <td>E-mail ID</td>
    <td>Course</td>
    
  </tr>
  <?php
  include("connect.php");
  $re=mysql_query("select * from teacherreg");
  if(mysql_num_rows($re)>0)
{
	while($row=mysql_fetch_array($re)){
	  ?>
  <tr>
    <td><?php echo $row[15] ?></th>
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
    <td><?php echo $row[12] ?></td>
    <td><?php echo $row[13] ?></td>
    <td><?php echo $row[14] ?></td>
         <?php
	 if($row[16]=='approved')
     {
		 ?>
<td><?php echo $row[16] ?><p><a href="delete1.php?id=<?php echo $row[0] ?>">Delete</a></p></td>
<?php
	 }else{
	 ?>
	 <td><p><a href="view2.php?lid=<?php echo $row[0] ?>">Verify</a></p>
	
      <p><a href="delete1.php?id=<?php echo $row[0] ?>">Delete</a></p></td><?php }?>
  </tr>
  
  <?php
	}
}
  ?>
  </tr>
</table>
</form>
</body>
</html>