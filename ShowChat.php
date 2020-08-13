<?php
    
	include("connect.php");
   	$frmid="22";
  	$tid="2";
    $rs=mysql_query("select * from chatroom order by cmessageid ");
 
    $html="<table id='tbl' style='width: 300px;' >";//"<table border='2'><tr><td colspan=6 align='center'> Display Board</td></tr><tr><td> ID</td><td> NAME</td> <td> LOCATION</td> <td> PHONE</td> </tr>";

      while($r=mysql_fetch_array($rs))
      {
          $html.="<tr border=1><td>";
          $html.="<div  ";
          if(($r['csenderid']==$frmid))
              $html.="align='right' style=background-color:#CCFFCC>";
          else 
             $html.="align='left' style=background-color:#FFFFCC>"; 
          $html.=$r['message'];
          $html.="</div></td></tr>";
          
           /*html=html+"<tr border=1><td>";
           html=html+rs.getString(1);
           html=html+"</td><td>";
           html=html+rs.getString(2);
           html=html+"</td><td>";
           html=html+rs.getString(5);
           html=html+"</td><td>";
           html=html+rs.getString(8);
           html=html+"</td></tr>";*/
     }
    $html.="</Table>";
    
   // JOptionPane.showMessageDialog(null, "eeeeeeee");
    
    echo $html;
?>
