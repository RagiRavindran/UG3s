
<?php
/*
 dbcon db=new dbcon();
 Connection con =db.getcon();
 String sno=request.getParameter("c");
 Statement s=con.createStatement();
 ResultSet rs=s.executeQuery("select * from register where sl_no='"+sno+"' ");
 
String html="<table border='2'><tr><td colspan=6 align='center'> Display Board</td></tr><tr><td> ID</td><td> NAME</td> <td> LOCATION</td> <td> PHONE</td> </tr>";

      while(rs.next())
      {mess
           html=html+"<tr border=1><td>";
           html=html+rs.getString(1);
           html=html+"</td><td>";
           html=html+rs.getString(2);
           html=html+"</td><td>";
           html=html+rs.getString(5);
           html=html+"</td><td>";
           html=html+rs.getString(8);
           html=html+"</td></tr>";
     }
    html=html+"</Table>";
    
   // JOptionPane.showMessageDialog(null, "eeeeeeee");
   */
   $s="";
   include("connect.php");
   try{
 		$msg1=$_GET['c'];
		
		session_start();
		$sender_id=$_SESSION['lid'];
  
  //session.removeAttribute("chid");
  	//$frmid="1";
//  	$tid="2";
//   
	$str="insert into chatroom(csenderid,cmessagedate,cmessagetime,message)values('$sender_id',curdate(),curtime(),'$msg1')";
	mysql_query($str);
	 $s="<label>send</label>";
 }
  catch(Exception $e)
  {
  $s="<label>notsend</label>";
  } 
echo $s;
   
?>
