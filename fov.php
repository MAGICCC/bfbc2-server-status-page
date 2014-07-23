<!DOCTYPE html>
<html class="full" lang="en">
<!-- The full page image background will only work if the html has the custom class set to it! Don't delete it! -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MAGIC">
	<link rel="shortcut icon" href="images/bc2.ico" type="image/x-icon">

    <title>Emulator Nexus &bull; FOV Calculator<</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS for the 'Full' Template -->
    <link href="css/full.css" rel="stylesheet">
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
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<?php include ("inc/fov.php"); ?>

	<div class='container' style='padding-top:20px' align='center'> 
	<div class='bgfov'>
	<p><b><u>FOV Calculator</u></b></p>
<form action="" method="post" onsubmit="return validate();">
<table class="tg">
  <tr>
    <th class="tg-1vl3">Screen width in pixels</th>
    <th class="tg-1vl3"><br></th>
    <th class="tg-1vl3">Screen height in pixels</th>
  </tr>
  <tr>
    <td class="tg-etkm"><input name="width" id="width" type="text"<?php if(isset($_POST['width'])) { echo ' value="' . $_POST['width'] . '"'; } ?>></td>
    <td class="tg-etkm"></td>
    <td class="tg-etkm"><input name="height" id="height" type="text"<?php if(isset($_POST['height'])) { echo ' value="' . $_POST['height'] . '"'; } ?>></td>
  </tr>
  <tr>
    <td class="tg-etkm"></td>
    <td class="tg-1vl3">Desired horizontal FOV in degrees<br></td>
    <td class="tg-etkm"></td>
  </tr>
  <tr>
    <td class="tg-etkm"></td>
    <td class="tg-etkm"><input name="hfov" id="hfov" type="text" value="<?php echo isset($_POST['hfov']) ? $_POST['hfov'] : "90"; ?>"></td>
    <td class="tg-etkm"></td>
  </tr>
  <tr>
    <td class="tg-etkm"></td>
    <td class="tg-etkm"></td>
    <td class="tg-etkm"></td>
  </tr>
  <tr>
    <td class="tg-etkm"></td>
    <td class="tg-1vl3"><?php if (isset($message)) { echo $message; } ?></td>
    <td class="tg-etkm"></td>
  </tr>
  <tr>
    <td class="tg-etkm"></td>
	<td class="tg-etkm"><input name="submit" id="submit" type="submit" value="Calculate vertical FOV"></td>
    <td class="tg-etkm"></td>
  </tr>
</table>
</form>

<br>

<div id="info">
    <p><b><u>Explanation</u></b></p>
	<p>FOV (Field of View) determines how much of your surrounding area you can see without turning.</p>
	<p>Usually in FPS games where this is configurable, you adjust the horizontal field of view so you can see more to the left and right. Battlefield: Bad Company 2 uses vertical FOV instead, so it's a little harder to work out what you need to set it to. Here's the formula, bearing in mind it works in <em>radians</em>, not degrees:</p>
	<p><img src="images/fov.png" alt="FOV formula"></p>
	<p>Not really something you can do in your head, huh? :D So, simply enter your in-game screen resolution and preferred horizontal FOV above and click the calculate button.</p>
	<p>There's currently no way to change this setting in-game, so you'll need to update your <em>settings.ini</em> file manually. The default location is <em>"My Documents\BFBC2"</em>. Open it with notepad and find the line that says something like <em>fov=55</em>, change the number and save the file. If you can't find this line, you'll need to add it yourself. Just make sure it's somewhere under <em>[Graphics]</em>.</p>
</div>
	
	</div>
	</div>


    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/fov.js"></script>

</body>
</html>
