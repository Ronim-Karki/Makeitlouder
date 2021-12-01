<?php
	$db=mysqli_connect("localhost","root","","makeitlouder");
	if(!$db)
		{
			die("Connection Failed: " . mysqli_connect_error());
		}
		
?>