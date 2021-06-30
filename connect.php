<?php

	$cn = mysql_connect("localhost","root","");
	
	mysql_select_db("jobportal",$cn) or die("Problem in connection!");
	
	session_start();
?>