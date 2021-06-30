`<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register Page</title>
<script type="text/javascript">

	
	function checkVal()
	{	
		var uid = document.forms["form1"]["utxt"].value;
		var pass = document.forms["form1"]["ptxt"].value;	
		var eid = document.forms["form1"]["etxt"].value;
		var phn = document.forms["form1"]["mtxt"].value;
		
			if(uid=="")
			{	
					alert("Enter the User Id");
					return false;
			}
		
		
			if(pass=="")
			{	
					alert("Enter the Password");
					return false;
			}
	
		
		
			if(eid=="")
			{	
					alert("Enter the Email Id");
					return false;
			}
		
		
		
			
			if(phn=="")
			{	
					alert("Enter the Phone Number");
					return false;
			}
			
			if(isNaN(phn))
			{
					alert("Please Enter only digit!!");	
					return false;
			}
			
			if(phn.length!=10)
			{
					alert("Enter 10 digit");
					return false;
			}
		
			if(pass!=cpass)
			{
					alert("Password and Conform password does not match!");	
					return false;
			}
	}
		
	

</script>


</head>

<div id="body">
<center>

<h1> User Registration Form</h1>

<form id="form1" name="form1" method="post" action="UserProcess.php">
<table cellpadding="10">

<tr>
	<td>User ID-</td> <td><input type="text" name="utxt"  /></td>
</tr>
<tr>
    <td>Enter Password :-</td> <td><input type="password" name="ptxt" /></td>
</tr>

<tr>
    <td>Enter Email Id :-</td> <td><input type="email" name="etxt"  /></td>
</tr>
<tr>
    <td>Mobile no</td> <td><input type="text" name="mtxt" /></td>
</tr>
<tr>
    <td><input type="submit" name="sub1" value="Register"  onclick="return checkVal()" /></td>
</tr>
</table>
</form>
</center>
</div>
</body>
</html>
