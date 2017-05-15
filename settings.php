<?php
//get out the cookie jar!
if (count($_GET)!=0) {//check if there is any get data, to set the cookies!
//time to bake some cookies


//cookie for price range
if (isset($_GET["range"])){
setcookie("range",$_GET["range"],time()+60*60*24*365);//cookie will expire in 1 year, bc there is no sensitive data stored
}
//cookie for price range
if (isset($_GET["age"])){
setcookie("age",$_GET["age"],time()+60*60*24*365);//cookie will expire in 1 year, bc there is no sensitive data stored
}





//SETTINGS WERE SAVED!
if(!$_GET["saved"]){
header("Location: settings.php?saved=1");
}
}
if ($_GET["saved"]){
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
<h3>What is your age</h3>
<!--selected='selected'-->
        <select name="age">
        <option value='1' <?php if ($_COOKIE["age"]=="1"){echo "selected='selected'";}?>>1</option>
        <option value='2' <?php if ($_COOKIE["age"]=="2"){echo "selected='selected'";}?>>2</option>
        <option value='3' <?php if ($_COOKIE["age"]=="3"){echo "selected='selected'";}?>>3</option>
        <option value='4' <?php if ($_COOKIE["age"]=="4"){echo "selected='selected'";}?>>4</option>
        <option value='5' <?php if ($_COOKIE["age"]=="5"){echo "selected='selected'";}?>>5</option>
        <option value='6' <?php if ($_COOKIE["age"]=="6"){echo "selected='selected'";}?>>6</option>
        <option value='7' <?php if ($_COOKIE["age"]=="7"){echo "selected='selected'";}?>>7</option>
        <option value='8' <?php if ($_COOKIE["age"]=="8"){echo "selected='selected'";}?>>8</option>
        <option value='9' <?php if ($_COOKIE["age"]=="9"){echo "selected='selected'";}?>>9</option>
        <option value='10' <?php if ($_COOKIE["age"]=="10"){echo "selected='selected'";}?>>10</option>
        <option value='11' <?php if ($_COOKIE["age"]=="11"){echo "selected='selected'";}?>>11</option>
        <option value='12' <?php if ($_COOKIE["age"]=="12"){echo "selected='selected'";}?>>12</option>
        <option value='13' <?php if ($_COOKIE["age"]=="13"){echo "selected='selected'";}?>>13</option>
        <option value='14' <?php if ($_COOKIE["age"]=="14"){echo "selected='selected'";}?>>14</option>
        <option value='15' <?php if ($_COOKIE["age"]=="15"){echo "selected='selected'";}?>>15</option>
        <option value='16' <?php if ($_COOKIE["age"]=="16"){echo "selected='selected'";}?>>16</option>
        <option value='17' <?php if ($_COOKIE["age"]=="17"){echo "selected='selected'";}?>>17</option>
        <option value='18' <?php if ($_COOKIE["age"]=="18"){echo "selected='selected'";}?>>18+</option>
        </select>
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
