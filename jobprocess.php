<?php

	include("connect.php");
	
	$jid = $_REQUEST["jtxt"];
	$sid = $_REQUEST["skl"];
	$exid = $_REQUEST["exp"];
	$vid = $_REQUEST["vtxt"];
	$intdid = $_REQUEST["dtxt"];
	$intpid = $_REQUEST["ptxt"];
	$wid = $_REQUEST["wtxt"];
	$jdid = $_REQUEST["jdtxt"];
	
	
	$qr = "insert into job_post values ('','".$jid."','".$sid."','".$vid."','".$intdid."','".$exid."','".$intpid."','".$wid."','".$jdid."')";
	
	mysql_query($qr,$cn);
	
	echo "Data Saved!!";
?>