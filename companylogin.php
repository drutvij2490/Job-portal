<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Company Login page</title>
</head>

<body>
<center>
<?php
	$msg="";
	if(isset($_REQUEST["msg"])<>"")
	{
		echo"Enter valid Company ID and password";
	}

?>

<h1> Company Login</h1>

<form id="form1" name="form1" method="post" action="Companyloginprc.php">
<table cellpadding="10">

<tr>
	<td>Company ID</td> <td><input type="text" name="utxt"  /></td>
</tr>

<tr>
	<td>Password</td> <td><input type="password" name="ptxt"  /></td>
</tr>
<tr>
    <td><input type="submit" name="sub1" value="Login" /></td>
</tr>

</table>
</form>
</center>
</body>
</html>
