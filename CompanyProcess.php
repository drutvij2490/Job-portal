<?php

	include("connect.php");
	
	$cname = $_REQUEST["ctxt"];
	$cid = $_REQUEST["utxt"];
	$pass = $_REQUEST["ptxt"];
	$add = $_REQUEST["atxt"];
	$phone = $_REQUEST["mtxt"];
	
	$qa = "insert into company_registration values ('','".$cname."','".$cid."','".$pass."','".$add."','".$phone."')";
	
	mysql_query($qa,$cn);
	
	echo "Data Saved!!";

?>