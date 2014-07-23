<!DOCTYPE html>
<html class="full" lang="en">
<!-- The full page image background will only work if the html has the custom class set to it! Don't delete it! -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MAGIC">
	<link rel="shortcut icon" href="inc/img/bc2.ico" type="image/x-icon">

    <title>Emulator Nexus &bull; MAGICs Serverlist</title>

    <!-- Bootstrap core CSS -->
    <link href="inc/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS for the 'Full' Template -->
    <link href="inc/css/full.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="rush.php">Rush</a>
                    </li>
                    <li><a href="conquest.php">Conquest</a>
                    </li>
                    <li><a href="sqdm.php">SQDM</a>
                    </li>
					<li><a href="mixed.php">Mixed</a>
                    </li>
                </ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="status.php">Status</a>
                    </li>
					<li><a href="fov.php">FOV Calculator</a>
                    </li>
					<li><a href="http://emulatornexus.com" target="_blank">EmulatorNexus</a>
                    </li>
					<li><a href="https://github.com/MAGICCC/bfbc2-server-status-page" target="_blank">Source</a>
                    </li>
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
	<?php
	include ("inc/php/servers/BC2Conn.php");
	
	$BC2Conn_2 = new BC2Conn("127.0.0.1", 48890); //Bad Company 2: Rush 24/7
	$BC2Conn_3 = new BC2Conn("127.0.0.1", 48892); //Bad Company 2: Rush 24/7 #2
	$BC2Conn_6 = new BC2Conn("127.0.0.1", 48880); //Bad Company 2: Atacama Desert 24/7 XP	
	$BC2Conn_7 = new BC2Conn("127.0.0.1", 48881); //Bad Company 2: Arica Habour 24/7 XP
	$BC2Conn_8 = new BC2Conn("127.0.0.1", 48882); //Bad Company 2: Arica Habour 24/7 XP #2
	$BC2Conn_9 = new BC2Conn("127.0.0.1", 48883); //Bad Company 2: Valparaiso 24/7	
	$BC2Conn_10 = new BC2Conn("127.0.0.1", 48884); //Bad Company 2: Valparaiso 24/7	#2
		
		
	include ("inc/php/servers/2.php");
	include ("inc/php/servers/3.php");
	include ("inc/php/servers/6.php");
	include ("inc/php/servers/7.php");
	include ("inc/php/servers/8.php");
	include ("inc/php/servers/9.php");
	include ("inc/php/servers/10.php");

?>
	

    <!-- JavaScript -->
    <script src="inc/js/jquery-1.10.2.js"></script>
    <script src="inc/js/bootstrap.js"></script>

</body>
</html>
