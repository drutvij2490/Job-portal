<?php

	include("connect.php");
	
	$cid = $_REQUEST["utxt"];
	$pass = $_REQUEST["ptxt"];
	
	$qr = "select * from company_registration where companyID='".$cid."' and password='".$pass."'";
	
	$res = mysql_query($qr,$cn);
	
	if($row=mysql_fetch_array($res))
	{
		 session_start();
		$_SESSION['userlogin']= $cid;
		echo $_SESSION['userlogin'];
		header("Location:jobpost.php?companyid=$cid");
	}
	else
	{
		header("Location:companylogin.php?msg=Invalid Login!!");	
	}
	



?>