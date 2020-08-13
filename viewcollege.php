<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="POST" action="">
  <h3 align="center">Viewing College Details
  <table width="200" border="1">
  <tr>
    <td>UniversityCollegeId</td>
    <td>College Name</td>
    <td>Place</td>
    <td>District</td>
    <td>Contact No</td>
    <td>EmailId</td>
  </tr>
  <tr>
  <?php
  include("connect.php");
  $cl=mysql_query("select * from collegereg");
  if(mysql_num_rows($cl)>0)
{
	while($row=mysql_fetch_array($cl)){
	  ?>
    <th scope="row"><?php echo $row[1]?></th>
    <td> <?php echo $row[2]?></td>
    <td> <?php echo $row[3]?></td>
    <td> <?php echo $row[4]?></td>
    <td> <?php echo $row[5]?></td>
    <td> <?php echo $row[6]?></td>
     
     <?php
	 if($row[7]=='approved')
     {
		 ?>
<td><?php echo $row[7] ?><p><a href="deletec.php?id=<?php echo $row[0] ?>">Delete</a></p></td>
<?php
	 }else{
	 ?>
	 <td><p><a href="varify1.php?lid=<?php echo $row[0] ?>">Verify</a></p>
	
      <p><a href="deletec.php?id=<?php echo $row[0] ?>">Delete</a></p></td><?php }?>
  </tr>
  
  <?php
	}
}
  ?>
     
     
</table>
</form>
</body>
</html>