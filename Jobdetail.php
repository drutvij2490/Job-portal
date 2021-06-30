<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Job Detail</title>
</head>

<body>

<center>	

	<form name="frm1" method="post">

<h1>JOB</h1></center>


<?php


	include("connect.php");
	$qr="SELECT * FROM job_post c1,skill b1 where c1.skill=b1.sr_no";
	
	$res = mysql_query($qr,$cn);
	
	
?>

		<table align="center" border="1">

			<tr>
            	<th>Job No.</th>
            	<th>Job Title</th>
            	 <th>skill</th>
                 <th>Experience</th>                                                               
                <th>no of vacancy</th>
                <th>Interview Date</th>
                <th>Interview place</th>
                <th>Work place</th>
                <th>Job description</th>
                <th>Apply</th>
            
            </tr>  
            <?php
			
			
				while($row=mysql_fetch_array($res))
				{
			?>
                  
            
            
            
        
            
            
            	<tr>
            	<th><?php echo $row[0] ?></th>
            	<th><?php echo $row[1] ?></th>
                <th><?php echo $row[10] ?></th>
                <th><?php echo $row[5] ?></th>
                <th><?php echo $row[3] ?></th>
                <th><?php echo $row[4] ?></th>
                <th><?php echo $row[6] ?></th>
                <th><?php echo $row[7] ?></th>
            	<th><?php echo $row[8] ?></th>
            	<th><a href="apply.php">apply</a></th>                                                                
                
                
            </tr>        
            <?php
				}
			?>
                    
        
        </table>


<a href="destroy.php">log out </a>

</body>
</html>