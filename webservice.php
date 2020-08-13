<?php
require_once('lib/nusoap.php');

// Create the server instance
$server = new soap_server;
$server->configureWSDL("demo","urn:demo");//create wsdl

//create function

$server->register('dbtid',array('lid'=>"xsd:string"),array('return'=>"xsd:string"));
$server->register('master',array('db'=>"xsd:string"),array('return'=>"xsd:string"));
$server->register('forget',array('us'=>"xsd:string",'em'=>"xsd:string",'ps'=>"xsd:string",'cps'=>"xsd:string"),array('return'=>"xsd:string"));

$server->register('chatUser',array('lstid'=>"xsd:string"),array('return'=>"xsd:string"));
$server->register('chatText',array('sender_id'=>"xsd:string",'message'=>"xsd:string"),array('return'=>"xsd:string"));

$server->register('login',array('un'=>"xsd:string",'pn'=>"xsd:string"),array('return'=>"xsd:string"));

$server->register('cteachername',array('lid'=>"xsd:string"),array('return'=>"xsd:string"));
$server->register('collegename',array('lid'=>"xsd:string"),array('return'=>"xsd:string"));
$server->register('teachername',array('lid'=>"xsd:string"),array('return'=>"xsd:string"));

$server->register('aptitudeTest',array('lid'=>"xsd:string",'qu'=>"xsd:string",'op1'=>"xsd:string",'op2'=>"xsd:string",'op3'=>"xsd:string",'op4'=>"xsd:string"),array('return'=>"xsd:string"));
$server->register('aptituderesult',array('lid'=>"xsd:string",'qd'=>"xsd:string",'ct'=>"xsd:string",'scr'=>"xsd:string"),array('return'=>"xsd:string"));

//'lid'=>"xsd:string",'qu'=>"xsd:string",'an'=>"xsd:string",'op1'=>"xsd:string",'op2'=>"xsd:string",'op3'=>//"xsd:string",'op4'=>"xsd:string"
$server->register('entrenceExm',array('lid'=>"xsd:string"),array('return'=>"xsd:string"));
$server->register('entrenceResult',array('lid'=>"xsd:string",'qd'=>"xsd:string",'an'=>"xsd:string"),array('return'=>"xsd:string"));

$server->register('askDbt',array('lid'=>"xsd:string",'db'=>"xsd:string",'ct'=>"xsd:string",'cl'=>"xsd:string",'tr'=>"xsd:string"),array('return'=>"xsd:string"));
$server->register('chatRoom',array('lid'=>"xsd:string",'mb'=>"xsd:string",'mg'=>"xsd:string",'rp'=>"xsd:string"),array('return'=>"xsd:string"));
$server->register('complaint',array('lid'=>"xsd:string",'cm'=>"xsd:string",'ev'=>"xsd:string",'ag'=>"xsd:string"),array('return'=>"xsd:string"));
$server->register('feedback',array('lid'=>"xsd:string",'fd'=>"xsd:string"),array('return'=>"xsd:string"));
$server->register('subject',array('sm'=>"xsd:string",'cu'=>"xsd:string",'ct'=>"xsd:string"),array('return'=>"xsd:string"));
$server->register('messageRead',array('mg'=>"xsd:string",'rp'=>"xsd:string"),array('return'=>"xsd:string"));
$server->register('StudyMaterial',array('sm'=>"xsd:string",'cr'=>"xsd:string",'sb'=>"xsd:string",'ct'=>"xsd:string"),array('return'=>"xsd:string"));
$server->register('UniversityNews',array('ct'=>"xsd:string"),array('return'=>"xsd:string"));
include("connect.php");
function login($un,$pn)
{
	
	$rs="Invalid";
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

function forget('us','em','ps''cps')
{

}

//student registration............................................................................



$server->register('StudRegister',array('ci'=>"xsd:string",'nm'=>"xsd:string",'mnm'=>"xsd:string",'lnm'=>"xsd:string",'cn'=>"xsd:string",'sm'=>"xsd:string",'db'=>"xsd:string",'gn'=>"xsd:string",'ad'=>"xsd:string",'an'=>"xsd:string",'cs'=>"xsd:string",'cu'=>"xsd:string",'ds'=>"xsd:string",'e'=>"xsd:string",'un'=>"xsd:string",'ps'=>"xsd:string",'cps'=>"xsd:string"),array('return'=>"xsd:string"));

function StudRegister($ci,$nm,$mnm,$lnm,$cn,$sm,$db,$gn,$ad,$an,$cs,$cu,$ds,$e,$un,$ps,$cps)
{
	
	$rs="na";
	try{
		$address=explode(',',$ad);
	$r=mysql_query("select * from login where username='$un'");
	if(mysql_num_rows($r)>0)
	{
		return "na";
	}
	else{
		mysql_query("insert into login(username,password,usertype) values('$un', '$ps','student')");
		$id=mysql_insert_id();
		
		mysql_query("insert into studentreg(cap_id,firstname,middlename,lastname,dob,gender,housename,place,post,district,contactno,caste,annual_income,course,semester,email_id)values('$ci','$nm','$mnm','$lnm','$db','$gn','$address[0]','$address[1]','$address[2]','$ds','$cn','$cs','$an','$cu','$sm','$e')");
		return "ok";
	}
	}
	catch(Exception $e)
	{
		return "no";
	}
}


//Entrence exam..............................................................
//'lid'=>"xsd:string",'qu'=>"xsd:string",'op1'=>"xsd:string",'op2'=>"xsd:string",'op3'=>"xsd:string",'op4'=>"xsd:string")
//$lid,$qu,$an,$op1,$op2,$op3,$op4
function entrenceExm($lid)
{
$rs="";
	try
	{
$str="select entrancequestion.question,entrancequestion.answer,entrancequestion.option1,entrancequestion.option2,entrancequestion.option3,entrancequestion.option4 from studentreg,entrancequestion where entrancequestion.course=studentreg.course and studentreg.lid='$lid'";
  
		$res=mysql_query($str);
		while($res1=mysql_fetch_array($res))
		{
			$rs.=$res1[0]."#".$res1[1]."#".$res1[2]."#".$res1[3]."#".$res1[4]."#".$res1[5]."^";
		}
		return $rs;
	}
	catch(Exception $e)
	{
	}
	return "no";
	
}
//entrance exam result............................................................................
//'entrenceResult',array('lid'=>"xsd:string",'an'=>"xsd:string
function entrenceResult($lid,$qd,$an)
{
	//include("connect.php");
	$rs="no";
	try{
	 	mysql_query("insert into entranceresult(lid,qid,ans) values('$lid','$qd','$an')");
		$id=mysql_insert_id();
		$re="select entrancequestion.answer from entrancequestion,entranceans where entranceans.qid=entrancequestion.questionid and entrancequestion.questionid='$id'";
		if(mysql_num_rows($re)>0)
	{
	while($row=mysql_fetch_array($re))
	{
	 $rs.=$row[0]."@";	
	}	
	}
		return $rs;
	}
	
	catch(Exception $e)
	{
	}
	return $rs;
}




//aptitude exam....................................................................................


function aptitudeTest($lid)
{
	$rs="";
	try
	{
$str="select question,option1,option2,option3,option4,answer,category from aptitude";
  
		$res=mysql_query($str);
		while($res1=mysql_fetch_array($res))
		{
			$rs.=$res1[0]."#".$res1[1]."#".$res1[2]."#".$res1[3]."#".$res1[4]."#".$res1[5]."#".$res1[6]."^";
		}
		return $rs;
	}
	catch(Exception $e)
	{
	}
	return "no";
	
	}


//aptitude Result...........................................................................................
$server->register('aptitudegraph',array('lid'=>"xsd:string"),array('return'=>"xsd:string"));
function aptitudegraph($lid)
{

$rs="";
	try
	{
$str="select aptituderesult.categorymark,aptituderesult.rank from aptituderesult where lid='$lid'";
  
		$res=mysql_query($str);
		while($res1=mysql_fetch_array($res))
		{
			$rs.=$res1[0]."#".$res1[1]."@";
		}
		return $rs;
	}
catch(Exception $e)
	{
		return "error";
	}
	

	
}
function aptituderesult($lid,$qd,$ct,$scr)
{
	//include("connect.php");
	$rs="no";
	try{
//$qry=mysql_query("select * from aptituderesult where lid='$lid' and categorymark='$cat'");
//if(mysql_num_rows($qry)>0)
//{
//$res1=mysql_fetch_array($qry);
//mysql_query("update aptituderesult set rank=rank+'$scr' where resultid='$res1[0]'");	
//}else{
		
	 	mysql_query("insert into aptituderesult(lid,qid,categorymark,rank) values('$lid','$qd','$ct','$scr')");
		$id=mysql_insert_id();
//}
//       $rs.=$res1[0]."#".$res1[1]."#".$res1[2]."#".$res1[3]."#".$res1[4]."^";
		return $rs;
	}
	catch(Exception $e)
	{
	}
	return $rs;
}










//colleges.............................................................................

function collegename($lid)
{
	//include("connect.php");
	$res="no";
	$r=mysql_query("select collegereg.universitycollege_id,collegereg.collegename from studentreg,collegereg,course where  studentreg.lid='$lid' and studentreg.course=course.course and collegereg.universitycollege_id=course.universitycollegeid");
		if(mysql_num_rows($r)>0)
	{  
	    $res="";
		while($row=mysql_fetch_array($r))
		{
		
		$res.=$row[0]."#".$row[1]."@";		
		}
		return $res;
	}
	return $res;
	

}

//teacher under specified college.................................................................

function cteachername($lid)
{
	
		
	//include("connect.php");
	$res="no";
	$r=mysql_query("select teacherreg.tid,teacherreg.firstname,teacherreg.middlename,teacherreg.lastname from studentreg,teacherreg,collegereg where studentreg.lid='$lid' and teacherreg.course=studentreg.course and collegereg.universitycollege_id=teacherreg.universitycollege_id");
		if(mysql_num_rows($r)>0)
	{
		$res="";
		while($row=mysql_fetch_array($r))
		{
		
		$res.=$row[0]."#".$row[1]." ".$row[2]." ".$row[3]."@";		
		}
		return $res;
	}
	return $res;
	}



//askdoubt............................................................................................

function askDbt($lid,$db,$ct,$cl,$tr)
{
	//include("connect.php");
	$rs="no";
	try
	{
		mysql_query("insert into askdoubt(senderid,doubt,date,time)values('$lid','$db',curdate(),curtime())");
		
		$id=mysql_insert_id();
		
		if($ct=='Single'){
		//
		mysql_query("insert into master(dbtid,teacherid,date,time)values('$id','$tr',curdate(),curtime())");
		}
		if($ct=='College'){
			
			$r=mysql_query("select collegereg.lid from studentreg,collegereg,course where studentreg.lid='$lid' and studentreg.course=course.course and collegereg.universitycollege_id=course.universitycollegeid");
			if(mysql_num_rows($r)>0){
				$cl=mysql_fetch_array($r);
				return "l";
			}
			$tr1=mysql_query("select teacherreg.tid,teacherreg.firstname,teacherreg.middlename,teacherreg.lastname from studentreg,teacherreg,collegereg where studentreg.lid='$lid' and collegereg.lid='$cl' and teacherreg.course=studentreg.course and collegereg.lid=teacherreg.universitycollege_id");
			if(mysql_num_rows($tr1)>0)
			{
			while($tr2=mysql_fetch_array($tr1))
			{
			 
			$tr=$tr2[0];
		mysql_query("insert into master(dbtid,teacherid,date,time)values('$id','$tr',curdate(),curtime())");
			}
			return "h";
		}
		}
		
		if($ct=='System'){
			
		$tr1=mysql_query("select teacherreg.tid,teacherreg.firstname,teacherreg.middlename,teacherreg.lastname from studentreg,teacherreg,collegereg where studentreg.lid='$lid' and teacherreg.course=studentreg.course and collegereg.lid=teacherreg.universitycollege_id");
			if(mysql_num_rows($tr1)>0)
			{
			while($tr2=mysql_fetch_array($tr1))
			{
			 
			$tr=$tr2[0];
		mysql_query("insert into master(dbtid,teacherid,date,time)values('$id','$tr',curdate(),curtime())");
			}
			return "e";
			}
		}
		return "ok";

	}
	catch(Exception $e)
	{
	}
	return $rs;
}







//chatroom......................................................................................



function chatRoom($lid,$mb,$mg,$rp)
{
	include("connect.php");
	$rs="";
	try
	{
		mysql_query("insert into chatroomchatroom(csenderid,creplayid,cmessagetime,message,creplaytime,creplaydate)values('$lid','$id',curtime(),'$mg')");
	}
	catch(Exception $e)
	{
	}
	return $rs;
}

//teachername.........................................................................



function teachername($lid)
{
	
		
	//include("connect.php");
	$res="no";
	$r=mysql_query("select teacherreg.tid,teacherreg.firstname,teacherreg.middlename,teacherreg.lastname from studentreg,teacherreg where studentreg.lid='$lid' and teacherreg.course=studentreg.course");
		if(mysql_num_rows($r)>0)
	{
		$res="";
		while($row=mysql_fetch_array($r))
		{
		
		$res.=$row[0]."#".$row[1]." ".$row[2]." ".$row[3]."@";		
		}
		return $res;
	}
	return $res;
	}

//complaint registration...................................................................................



function complaint($lid,$cm,$ev,$ag)
{
	include("connect.php");
	$rs="no";
	$fn='';
	$cid=1;
	$qry=mysql_query("select max(complaintid) from complaint");
if(mysql_num_rows($qry)>0)
{
	$row1=mysql_fetch_array($qry);
	$cid=$row1[0]+1;
}
	
	$fn=$cid.".jpg";
	try{
		$decode=base64_decode($ev);
		file_put_contents("evd/$fn",$decode);
	  
		mysql_query("insert into complaint(userid,complaint,date,time,evidence,usertype,againstid) values('$lid','$cm',curdate(),curtime(),'$fn','student','$ag')");
		$id=mysql_insert_id();
		return "ok";
	}
	
	catch(Exception $e)
	{
	}
	return $rs;
}







//subject......................................................................................




function subject($sm,$cu,$ct)
{

	$res="";
	$str="select studyid,subject,filename from studymaterial where course='$cu' and semester='$sm' and category='$ct'";
	$r=mysql_query($str);
	while($row=mysql_fetch_array($r))
		{
		
		$res.=$row[0]."#".$row[1]."#".$row[2]."@";		
		}
		return $res;
	
}





//search study materials................................................................................



function StudyMaterial($sm,$cr,$sb,$ct)
{

	$res="no";
	$r=mysql_query("select * from studymaterial where category='$ct' and semester='$sm' and subject='$sb' and course='$cr'");
		if(mysql_num_rows($r)>0)
	{
		$res="";
		while($row=mysql_fetch_array($r))
		{
		
		//						semt[i]=r[0];	
//						subj[i]=r[1];
//						catry[i]=r[2];
//						fldis[i]=r[3];
//						filename[i]=r[4];
//						cous[i]=r[5];		
//						date[i]=r[6];
		
		
		//seme, sub,cate,filnm,filede,cour,date
		
		$res.=$row[0]."#".$row[1]." ".$row[2]." ".$row[4]."#".$row[3]." ".$row[5]." ".$row[6]."@";		
		}
		return $res;
	}
	return $res;
}






//search university news...............................................................................




function UniversityNews($ct)
{
	include("connect.php");
	$rs="";
	try
	{
		$str="select * from universitynews where category='$ct'";
		$res=mysql_query($str);
		while($res1=mysql_fetch_array($res))
		{
			$rs.=$res1[1]."#".$res1[2]."#".$res1[3]."#".$res1[4]."^";
		}
	}
	catch(Exception $e)
	{
	}
	return $rs;
}



//feedback...............................................................................





function feedback($lid,$fd)
{
	
	$rs="na";
	try{
		mysql_query("insert into feedback(userid,feedback,usertype,date) values('$lid', '$fd','student',curdate())");
		
		return "ok";
		}
	catch(Exception $e)
	{
		return "no";
	}
}



//view message..........................................................................................


function chatUser($lstid)
{
	//include("connect.php");
	$rs="";
	try
	{
		$str="select cmessageid,csenderid,message from chatroom where cmessageid>'$lstid'";
		$res=mysql_query($str);
		while($res1=mysql_fetch_array($res))
		{
			$rs.=$res1[0]."#".$res1[1]."#".$res1[2]."@";
		}
	}
	catch(Exception $e)
	{
	}
	return $rs;

}

//text insert...........................................................................................



function chatText($sender_id,$message)
{
	//include("connect.php");
$rs="no";
	try
	{
		mysql_query("insert into chatroom(csenderid,cmessagedate,cmessagetime,message)values('$sender_id',curdate(),curtime(),'$message')");
	return "ok";
	
	}
	catch(Exception $e)
	{
	}
	return $rs;
}









$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>