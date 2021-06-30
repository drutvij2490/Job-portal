<?php

	include("connect.php");
	
	$uid = $_REQUEST["utxt"];
	$pass = $_REQUEST["ptxt"];
	$email = $_REQUEST["etxt"];
	$mobileno = $_REQUEST["mtxt"];
	
	$qr = "insert into user_registration values ('','".$uid."','".$pass."','".$email."','".$mobileno."')";
	
	mysql_query($qr,$cn);
	
	echo "Data Saved!!";
?>