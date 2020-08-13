
<?php 


include("header1.php");
?>
<form id="form1" name="form1" method="post" action="">
  <table>
    <tr>
      <td>User Name</td>
      <td><label for="usern"></label>
      <input type="text" name="usern" id="usern" /></td>
    </tr>
<tr>
      <td colspan="2"><center><input type="submit" name="submit2" id="submit2" value="Submit" /></td>
    </tr>
  </table>
</form>
<?php 


include("footer1.php");
?>
<?php
include("connect.php");

if(isset($_POST['submit2']))
{
$type="";
$login="";
$emil="";
	$usr=$_POST['usern'];
	   $r=mysql_query("select login_id,usertype from login where username='$usr'");
	   if(mysql_num_rows($r)>0){
		$ro=mysql_fetch_array($r);
		$login=$ro[0];
		$type=$ro[1];
	    }
		if($type=="college")
		{
		        $v=mysql_query("select email from collegereg where lid='$login'");
				if(mysql_num_rows($v)>0)
				{
								$e=mysql_fetch_array($v);
								$emil=$e[0];
								}
		}
		else if($type=="student")
		{
				$v=mysql_query("select email_id from studentreg where lid='$login'");
				if(mysql_num_rows($v)>0)
				{
								$e=mysql_fetch_array($v);
								$emil=$e[0];
								
								}

		}
		else if($type=="teacher")
		{
				$v=mysql_query("select email_id from teacherreg where tid='$login'");
				if(mysql_num_rows($v)>0)
				{
				$e=mysql_fetch_array($v);
				$emil=$e[0];
								
				}

		}
		
		
		
		$re=mysql_query("select username,password from login where login_id='$login' and usertype='$type'");	
	if(mysql_num_rows($re)>0){
		$row=mysql_fetch_array($re);
		$pass=$row[1];
		$username=$row[0];
		require("frgt pss/class.phpmailer.php");

		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587;
		$mail->Username = "proug3s@gmail.com";  // SMTP username gmail username
		$mail->Password = "ug3s1234"; // SMTP password   gmail password
		
		$mail->From = "proug3@gmail.com"; // from email address
		$mail->FromName = "Username & Password"; //from name
		   
		$mail->AddAddress($emil);        
		
		$mail->WordWrap = 10000;                                 
		$mail->IsHTML(true);                          
		
		$mail->Subject = "Your Password & Username ";
		$mail->Body    = "Password is $pass and username is $username. ";
		$mail->AltBody = "Secure this!!";
		
		if(!$mail->Send())
		{
		   ?>
		   <script type="text/javascript">
		   alert("User name not varified,please Enter with correct User Name..");
		   </script>
		   <?php
		}
		else
		{
			 ?>
		   <script type="text/javascript">
		   alert("please check your mail for your password");
		   </script>
		   
		   <?php
		}
		
	}
	else{
		?>
	<script>
    alert("Check your User Name");
    </script>
    <?php
	}

}
	?>
