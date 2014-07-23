<!DOCTYPE html>
<html class="full" lang="en">
<!-- The full page image background will only work if the html has the custom class set to it! Don't delete it! -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MAGIC">
	<link rel="shortcut icon" href="inc/img/bc2.ico" type="image/x-icon">

    <title>Emulator Nexus &bull; Statuspage</title>

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
		//Status
	echo "<div class='container' style='padding-top:20px' align='center'>"; 
	echo "<div class='bgstatus'>";
	echo "<p><b><u>Status</u></b></p>";

	include ("inc/php/fovstatus/status.php");
	
	echo "</div>"; 
	echo "</div>";	
	
	
	
		//Stats
	echo "<div class='container' style='padding-top:20px' align='center'>"; 
	echo "<div class='bgstats'>";
	echo "<p><b><u>Stats</u></b></p>";
	
	include ("inc/php/fovstatus/stats.php");
	
	echo "<p></p>";
	echo "</div>"; 
	echo "</div>";		
?>
	

    <!-- JavaScript -->
    <script src="inc/js/jquery-1.10.2.js"></script>
    <script src="inc/js/bootstrap.js"></script>

</body>
</html>
