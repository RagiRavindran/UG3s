<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<h3 align="center">Complaints</h3>
<table align="center" width="200" border="1">
  <tr>
    <td scope="row">Complaints ID</td>
    <td scope="row">User Name</td>
    
    <td>Complaint</td>
    <td scope="row">Against whom</td>
  </tr>
  <?php
  include("connect.php");


   $re=mysql_query("select complaint.complaintid,studentreg.firstname,studentreg.middlename,studentreg.lastname,complaint.complaint,complaint.againstid,teacherreg.status from complaint,teacherreg,studentreg where complaint.againstid=teacherreg.tid and studentreg.lid=complaint.userid");
     if(mysql_num_rows($re)>0)
{
	while($row=mysql_fetch_array($re))
	{
		
	
	  ?>
   
   
   <tr>
    <td scope="row"><?php echo $row[0] ?></td>
    <td><?php echo $row[1]." ". $row[2]." ". $row[3];?></td>
   
    <td><?php echo $row[4] ?></td>
    <td scope="row"><?php echo $row[5] ?></td>
    
     
    <?php
	
    if($row[6]=='blocked')
     {
		 ?>
<td><?php echo $row[6] ?></td>
<?php
	 }
	 else
	 {
		 ?>
		<td> <a href="blocktea.php?id=<?php echo $row[5] ?>">Block</a></td>
	<?php }
	 ?>

  </tr>
     <?php }?>
  </table>
 <?php }?>
</form>
</body>
</html>