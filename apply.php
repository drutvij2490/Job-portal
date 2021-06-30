<?php


	include("connect.php");
	
$uid="j1";
$jid="1";


date_default_timezone_set("Asia/Kolkata");
$dt = date("d-m-Y");






$qr = "insert into user_registration values ('','".$jid."','".$uid."','".$dt."','accept/reject')";
mysql_query($qr,$cn);
echo $qr;
echo "applied";


?>