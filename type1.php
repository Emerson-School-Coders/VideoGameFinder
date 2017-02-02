<!DOCTYPE html>
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
        <h1>
            Video Game Selector
        </h1>
        <h2 id="what_to_select">
             <?="Select what kind of game you want"?>
        </h2>
	<h3>
	Select all that apply
	</h3>
<script>
function redir(){
//this variable describes part of the URI you will be redirected to:
var johndoe = "";
if (document.getElementById('platforming').checked){
johndoe = johndoe + "&type1-1=platforming";
}
if (document.getElementById('sports').checked){
johndoe = johndoe + "&type1-2=sports";
}
if (document.getElementById('escape').checked){
johndoe = johndoe + "&type1-3=escape";
}
if (document.getElementById('shooter').checked){
johndoe = johndoe + "&type1-4=shooter";
}
if (document.getElementById('rpg').checked){
johndoe = johndoe + "&type1-5=rpg";
}
if (document.getElementById('adventuring').checked){
johndoe = johndoe + "&type1-6=adventuring";
}
if (document.getElementById('sandbox').checked){
johndoe = johndoe + "&type1-7=sandbox";
}
window.location = "type2_redir.php<?php
$agerange="?";
$theagearray=$_GET["agerangearray"];
foreach ($theagearray as &$item) {
$agerange = $agerange . "&agerangearray[]=" . $item;
};
echo $agerange;
?>" + johndoe;
}
</script>
        <?php
echo "
<input type='checkbox' name='type1-1' value='platforming' id='platforming' \>Platforming<br>
<input type='checkbox' name='type1-2' value='sports' id='sports' \>Sports<br>
<input type='checkbox' name='type1-3' value='escape' id='escape' \>Escape<br>
<input type='checkbox' name='type1-4' value='shooter' id='shooter' \>Shooter<br>
<input type='checkbox' name='type1-5' value='rpg' id='rpg' \>Role Playing Game<br>
<input type='checkbox' name='type1-6' value='adventuring' id='adventuring' \>Adventuring<br>
<input type='checkbox' name='type1-7' value='sandbox' id='sandbox' \>Sandbox<br>

<!--
<input type='checkbox' name='type1-' value='' id='' \><br>
-->

<button class='w3-btn w3-blue w3-round-xxlarge' onclick='redir();'>Submit</button>

";
print_r ($_GET);
	?>
    </body>
</html>
