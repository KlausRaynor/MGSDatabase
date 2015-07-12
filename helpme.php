<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
?>
<html>
<head>
<title>Error Page</title>
<meta charset="utf-8" name="description" content="Metal Gear Solid Database: Final Project--Klaus Holder"/>
<!--jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--Custom Styling-->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--Font-->
<link href='http://fonts.googleapis.com/css?family=Michroma' rel='stylesheet' type='text/css'>
</head>
<body>
<h2>woops!</h2>
<p> ERROR 404: Woops! Looks like the page you were looking for does not exist. </p>
<?php
		$charArray = array("images/amanda.png", "images/cecile.png", "images/chico.png", "images/coldman.png", "images/galvez.png", "images/huey.png", "images/miller.png", "images/paz.png", "images/snake.png", "images/strangelove.png")
		$randBackground = array_rand($input, 1);
		$randPick = $charArray[$randBackground[0]];
		echo "<img src='".$randPick."'alt='error_image'>"; ?>
<p><a href="index.php">Go Back!</a></p>

</body>
</html>