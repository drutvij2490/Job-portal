<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<title>company job post</title>
<?php 
	include("connect.php");
?>
<?php
		$qr1="select * from skill";
		$res1 = mysql_query($qr1,$cn);
?>
<body>

<center>

<h1>Job Post</h1>

<form id="form1" name="form1" method="post" action="jobprocess.php">
<table cellpadding="10">


<tr>
	<td>Job Title</td> <td><input type="text" name="jtxt" /></td>
</tr>   

<tr>
	<td>Select skill:</td> <td><select name="skl">
	 <option value="-1">Select Skill</option>
	<?php
		while($row1=mysql_fetch_array($res1))
		{
	
	?>
		<option value="<?php echo $row1[0] ?>"><?php echo $row1[1] ?></option>
 	<?php
		}
 	?>
    </select></td>
 </tr>   
 <tr>
	<td>Experience</td> <td><select name="exp">
    <option value="1">less than 1 year</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">more than 10 year</option>
    </td>
</tr>   
<tr>
	<td>No of Vacancy</td> <td><input type="text" name="vtxt" /></td>
</tr>   
<tr>
	<td>Interview Date</td> <td><input type="date" name="dtxt" /></td>
</tr>    
<tr>
	<td>Interview place</td> <td><input type="text" name="ptxt" /></td>
</tr>   
<tr>
	<td>Work Place</td> <td><input type="text" name="wtxt" /></td>
</tr>   
<tr>
	<td>Job Description</td> <td><input type="text" name="jdtxt" /></td>
</tr>   
<tr>
	<td></td> <td><input type="submit" name="stxt" value="post"/></td>
</tr>   
 
<a href="desroycompany.php">log out</a>

</body>
</html>