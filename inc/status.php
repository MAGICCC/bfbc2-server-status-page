<?php
	
	$plasma_host = "bfbc2.emulatornexus.com";
	$plasma_port = 19021;
	$theater_host = $plasma_host;
	$theater_port = 19026;
	$timeout = 10;
		
	$plasma = @fsockopen($plasma_host, $plasma_port, $timeout);
	$theater = @fsockopen($theater_host, $theater_port, $timeout);

	echo "<p>";
	if ($plasma)
	{
		echo "<b>Plasma:</b> <font color='#00C800'>Online</font>";
	}
	else
	{
		echo "<b>Plasma:</b> <font color='#ff0000'>Offline</font>";
	}
	
	echo "<br />";
	
	if ($theater)
	{
		echo "<b>Theater:</b> <font color='#00C800'>Online</font>";
	}
	else
	{
		echo "<b>Theater:</b> <font color='#ff0000'>Offline</font>";
	}
	
?>