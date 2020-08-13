<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script>
function getuser(option){
	
	alert(option)
	
	
	
	}


</script>




<form id="form1" name="form1" method="post" action="">
<h3 align="center">Student Interact With Teacher</h3>
<table width="200" border="0">
  <tr>
    <th height="61" scope="row">Select a Category</th>
    <th scope="row"><label>
      <select name="select" id="select" onchange="getuser(this.value)">
      <option selected="select">
Select</option>
      <option value="system">
System</option>
<option value="college">
College</option>
<option value="single">
Single</option>
      </select>
    </label></th>
   
  </tr>
  <tr>
  <td height="44">College</td>
  <td><label for="select2"></label>
    <select name="select2" id="select2">
    </select></td>
  </tr>
  <tr>
  <td height="44">Staff</td>
  <td><label for="select3"></label>
    <select name="select3" id="select3">
    </select></td>
  </tr>
  <tr>
    <th scope="row">Doubts</th>
    <td colspan="3"><label>
      <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
    </label></td>
  </tr>
  <tr>
    <td colspan="2" ><input type="submit" name="button" id="button" value="Send" /></th>
    <td colspan="2"><input type="submit" name="button2" id="button2" value="Cancel" /></td>
  </tr>
</table>

</form>
</body>
</html>