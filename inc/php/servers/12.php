<?php
echo "<div class='container' align='center' style='padding-top:20px'>";
	
	if (!$BC2Conn_12->isConnected())
	{
		echo "<div class='servercontainer'>";
		echo "<p><b>Server 01:</b> Connection could not be established, maybe the server is offline.</p>";
		echo "</div>";
		echo "<br />";
		//return 0; // stop executing this script
	}
	else
	{
		echo "<div class='servercontainer'>";
		echo "<p class='server'>";
		echo "<b>Servername:</b> " . $BC2Conn_12->getServerName() . "<img src='inc/img/maps/bc2/".$BC2Conn_12->getCurrentMap().".png' border='0' widht='100' height='73' style='float:right;padding-right:20px'></img><br />";
		echo "<b>Players:</b> " . $BC2Conn_12->getCurrentPlayers() . "/" . $BC2Conn_12->getMaxPlayers() . "<br />";
		echo "<b>Gamemode:</b> " . $BC2Conn_12->getCurrentPlaymodeName() . "<br />";
		echo "<b>Map:</b> " . $BC2Conn_12->getCurrentMapName();
		echo "</p>";
		echo "</div>";

		$BC2Conn_12->logout();
	}
echo "</div>";
?>