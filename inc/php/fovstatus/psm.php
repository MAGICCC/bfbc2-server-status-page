<?php

	$response = file_get_contents("http://api.emulatornexus.com/v1/rome/status");
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
			// Plasma Servermanager
			if ($obj["data"]["plasma"]["server_manager"] == "online") 
		{ 
			print("<span style=\"color:#00C800\">Online</span><br>"); 
		} 
		else if ($obj["data"]["plasma"]["server_manager"] == "offline") 
		{ 
			print("<span style=\"color:#ff0000\">Offline</span><br>"); 
		}

	}
	else
	{
		print("Error while retrieving stats.");
	}
		
?>