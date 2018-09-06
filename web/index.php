<?php
// Remove all froms of caching.
// Not sure if this is the correct way to do it...
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Hash med Jo(u)d)</title>
		<meta name="description" content="Ring Åklageren!">
		<meta name="author" content="Platoon IT Mafia">
		<meta http-equiv="refresh" content="30"> <!-- Experimental -->
		<link rel="stylesheet" type="text/css" href="./hash/fultSomFan.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	</head>
	<body>
		<div id="walla">
			<br>
			<h1 style="font-size:10vw;">
			Är Joud full?
			</h1>
			<h1 style="font-size:10vw;">
				<?php
					$statusOfJoud = fopen("lan.platoon:5000/_ping.txt", "r");
					$displayStatus = fgets($statusOfJoud);
					// Read line from the text file and write the contents to the client
					echo $displayStatus;
					fclose($statusOfJoud);
				?>
			</h1>
			<br>
		</div>
	</body>
</html>