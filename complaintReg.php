<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<h3 align="center">

<?php 
include("connect.php");
session_start();
$type='';
$id=$_SESSION['lid'];
$qry=mysql_query("select * from login where login_id='$id'");
if(mysql_num_rows($qry)>0){
	
	$row=mysql_fetch_array($qry);
	$type=$row[1];
	}
echo $type;
if($type=='teacher'){
	
	$view="select  studentreg.lid,studentreg.firstname,studentreg.middlename,studentreg.lastname from studentreg,teacherreg where teacherreg.tid='$id' and teacherreg.course=studentreg.course";
	
	}
	
	if($type=='student'){
		$view="select teacherreg.tid,teacherreg.firstname,teacherreg.middlename,teacherreg.lastname from studentreg,teacherreg where studentreg.lid='$id' and teacherreg.course=studentreg.course";
		
		
	}
	

	$qry1=mysql_query($view);
	
	

?>


COMPLAINT REGISTRATION
</h3><table width="200" border="0">
  <tr>
    <th scope="row" colspan="2"> Please let us know what you think</th>
    <td><label for="textfield"></label></td>
  </tr>
  <tr>
    <th scope="row">Againt </th>
    <td><label for="textfield3">
      <select name="select" id="select">
      <?php 
	  
	  if(mysql_num_rows($qry1)>0)
	  {
		  while($row1=mysql_fetch_array($qry1))
		  {
	  
	  ?>
      <option value="<?php echo $row1[0]?>"><?php echo $row1[1]." ". $row1[2]." ". $row1[3];?></option>
      <?php 
	  
		  }
	  }
	  ?>
      
      
      </select>
    </label></td>
  </tr>

  <tr>
  
  
  <th>Evidence</th>
    <td scope="row" >
      <input type="file" name="fileField" id="fileField" />
    </td>
    <td><label for="textfield2"></label></td>
  </tr>
    <tr>
    <th scope="row">Complaint</th>
    <td><label for="textarea"></label>
      <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <th scope="row"><input type="submit" name="button" id="button" value="Register" /></th>
    <td><input type="reset" name="button2" id="button2" value="Cancel"/></td>
  </tr>
</table>
</form>
</body>
</html>
<?php

if(isset($_POST['button']))
{
	$ag=$_POST['select'];
	$evi=$_FILES['fileField']['name'];
move_uploaded_file($_FILES['fileField']['tmp_name'],"study matereals/$evi");
 
	  
	  
		  
$comp=$_POST['textarea'];
mysql_query("insert into complaint(userid,complaint,date,time,evidence,usertype,againstid)values('$id','$comp',curdate(),curtime(),'$evi','$type','$ag')") or die(mysql_error()) ;
	
	
	
	
	}
?>
	 