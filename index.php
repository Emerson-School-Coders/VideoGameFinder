<!DOCTYPE html>
<?php
include('credit.php');
?>
<html>
    <head>
        <script src="jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="w3.css">
        <style>
        </style>
        <title>
            Video Game Selector - Selects Video Games You May Enjoy
        </title>
    </head>
    <body>
        <h1 style="text-align:center">
            Video Game Selector
        </h1>
	<br>
	<h2 style="text-align:center">
	    About
	</h2>
	<hr>
	<p>
	    This program will allow you to select which video games will suit what you want to play.  For example, you can select free games that are non-violent and those are the only ones you'll see.
	</p>
        <br>
	<center><a href="main.php" class='w3-btn w3-blue w3-round-xxlarge'>Start Here</a></center>
	<?php
	include dirname(__FILE__)."/copy.php";
	?>
    </body>
</html>
