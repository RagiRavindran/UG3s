<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<h3 align="center">Study Materials</h3>
<table width="200" border="1">
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
    <th scope="row">Course</th>
    <td><label>
      <select name="select2" id="select2">
	  <option value="slect" selected="selected">Select</option>
      <option value="ba">BA</option>
      <option value="bsc">BSc</option>
      <option value="bba">BBA</option>
      <option value="bca">BCA</option>
      <option value="bcom">BCom</option>
      <option value="bmmc">BMMC</option>
      <option value="bta">BTA</option>
      <option value="bds">BDS</option>
      <option value="bhm">BHM</option>
	  <option value="bpm">BPM</option>
      <option value="bpharm">B.Pharm</option>
      <option value="b.ped">B.PED</option>
      <option value="bthm">BTHM</option>
      <option value="bsw">BSW</option>
      <option value="b.lisc">B.Lisc</option>
      <option value="bpy">BPT</option>
      <option value="bhms">BHMS</option>
      <option value="bams">BAMS</option>
      <option value="baslp">BASLP</option>
      <option value="llb">LLB</option>
      <option value="llm">LLM</option>
      <option value="others">Others</option>
        	  </select>
    </label></td>
  </tr>
  <tr>
    <th scope="row">Subject</th>
    <td><input type="text" name="textfield" id="textfield" /></td>
  </tr>
  <tr>
    <th scope="row">Catogory</th>
    <td><label>
      <select name="select3" id="select3">
    <option value="select" selected="selected">Select</option>
    <option value="syllabus">Syllabus</option>
    <option value="model question">Model Question papers</option>
    <option value="reference">Reference</option>
  </select>
    </label></td>
  </tr>
  <tr>
    <th scope="row"><input type="submit" name="button" id="button" value="Search" /></th>
    <td><input type="submit" name="button2" id="button2" value="Cancel" /></td>
  </tr>
</table>
<p>&nbsp;</p>

<?php
include("connect.php");
if(isset($_POST['button']))
{
	$sem=$_POST['select'];
	$cou=$_POST['select2'];
	$sub=$_POST['textfield'];
	$cat=$_POST['select3'];
?>
<table width="200" border="1">
  <tr>
    <td>Sl. No</td>
    <td>File name</td>
    <td>Description</td>
    <td>Download</td>
  </tr>
   <?php
  $cl=mysql_query("select * from studymaterial where course='$cou' and semester='$sem' and category='$cat' and subject like '%$sub%'");
  if(mysql_num_rows($cl)>0)
{
	while($row=mysql_fetch_array($cl)){
	  ?>
   <tr>
    <td><?php echo $row[0]?></td>
    <td><?php echo $row[4]?></td>
    <td><?php echo $row[5]?></td>
    <td><a href="download.php?filename=study matereals/<?php echo $row[4]?>">Download</a></td>
   
  </tr><?php }
}
?>
</table>
<?php }
?>


</form>
</body>
</html>