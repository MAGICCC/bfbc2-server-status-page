<?php

	$response = file_get_contents("http://api.emulatornexus.com/v1/rome/stats");
	$obj = json_decode($response, true);

	if ($response === false)
	{
		print("Received an invalid response while trying to get stats.");
		return;
	}

	if ($obj === null && json_last_error() !== JSON_ERROR_NONE)
	{
		print("Could not parse json data.");
		return;
	}

	if ($obj["status"]["code"] == 200)
	{
		print("<b>Server Count:</b> " . $obj["data"]["servers"]["active"] . "<br>");
		print("<b>Players Online:</b> " . $obj["data"]["players"]["online"] . "<br>");
		print("<b>Players Ingame:</b> " . $obj["data"]["players"]["ingame"] . "<br>");
	}
	else
	{
		print("Error while retrieving stats.");
	}
		
?>