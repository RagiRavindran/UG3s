<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<h3>Feedback</h3>
<table width="434" border="1">
  <tr>
    <td width="96" scope="row">FeedbackID</th>
    <td width="71">User ID</td>
    <td width="53">User type</td>
   
    <td width="63">Feedback</td>
    <td width="65">Date</td>
   </tr>
    <?php
  include("connect.php");
  $re=mysql_query("select * from feedback");
  if(mysql_num_rows($re)>0)
{
	while($row=mysql_fetch_array($re)){
	  ?>
  <tr>
    <td><?php echo $row[0] ?></td>
    <td><?php echo $row[1] ?></td>
    <td><?php echo $row[3] ?></td>
    <td><?php echo $row[2] ?></td>
    <td><?php echo $row[4] ?></td>
   <?php }
   ?>
      </tr>
      <?php
}
?>
</table>
</form>
</body>
</html>