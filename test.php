<?php 

	include("connect.php");

echo login("f","d");


function login($un,$pn)
{
	
	$rs="na";
	try{
	$r=mysql_query("select * from login where username='$un' and password='$pn'");
	if(mysql_num_rows($r)>0)
	{
	  while($row=mysql_fetch_array($r))
	  {
		 $rs=$row[0];
		 
	  }
	}
	return $rs;
	}
	catch(Exception $e)
	{
		return "Invalid";
	}

}
?>