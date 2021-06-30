<?php

$_SESSION['userID']= $userID; 
echo $_SESSION['userID'];


	include("connect.php");
	
	$uid = $_REQUEST["utxt"];
	$pass = $_REQUEST["ptxt"];
	
	$qr = "select * from user_registration where userID='".$uid."' and password='".$pass."'";
	
	$res = mysql_query($qr,$cn);
	
	if($row=mysql_fetch_array($res))
	{
		
	
		$_SESSION['userlogin']= $uid;
		echo $_SESSION['userlogin'];
		header("Location:jobdetail.php?username=$uid"); 
	}
	else
	{
		header("Location:Userlogin.php?msg=Invalid Login!!");	
	}
	



?>