<?php
//get out the cookie jar!
if (count($_GET)!=0) {//check if there is any get data, to set the cookies!
//time to bake some cookies


//cookie for price range
if (isset($_GET["range"])){
setcookie("range",$_GET["range"],time()+60*60*24*365);//cookie will expire in 1 year, bc there is no sensitive data stored
}






//SETTINGS WERE SAVED!
if(!$_GET[saved]){
header("Location: settings.php?saved=1");
}
}
if ($_GET[saved]){
$settingssaved=1;
}
?>
<!--
COOKIES WERE BAKED!
-->
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
	    Settings
	</h2>
<?php
//are there settings that were saved?  who knows?
if ($settingssaved==1){
echo "<h6 style='color:red;'>Settings were saved!</h3>";
}
?>
	<hr>
<form action="settings.php">
<h3>
What is your average price range for a game?</h3>
<label><input type='radio' name='range' value='0' id='free' <?php if ($_COOKIE["range"]=="0"){echo "checked='checked'";}?>  \>Free<br></label><!--<label>s make radio buttons clickable by the text-->
<label><input type='radio' name='range' value='5' id='1499' <?php if ($_COOKIE["range"]=="5"){echo "checked='checked'";}?> \>$5<br></label>
<label><input type='radio' name='range' value='10' id='5999' <?php if ($_COOKIE["range"]=="10"){echo "checked='checked'";}?> \>$10<br></label>
<label><input type='radio' name='range' value='20' id='101999' <?php if ($_COOKIE["range"]=="20"){echo "checked='checked'";}?> \>$20<br></label>
<label><input type='radio' name='range' value='50' id='204999' <?php if ($_COOKIE["range"]=="50"){echo "checked='checked'";}?> \>$50<br></label>
<label><input type='radio' name='range' value='10000' id='50' <?php if ($_COOKIE["range"]=="10000"){echo "checked='checked'";}?> \>No maximum<br></label>
<br>
	<center><input type="submit" value="Save" class='w3-btn w3-blue w3-round-xxlarge'></center>
</form>
        <br>
	<?php
	include dirname(__FILE__)."/copy.php";
	?>
    </body>
</html>
