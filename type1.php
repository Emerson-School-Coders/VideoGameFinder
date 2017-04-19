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
<!--See comment in main.php-->
<center>
        <h1>
            Video Game Selector
        </h1>
        <h2 id="what_to_select">
             <?="Select what kind of game you want"?>
        </h2>
	<h3>
	Select all that apply
	</h3>
</center>
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
if (document.getElementById('action').checked){
johndoe = johndoe + "&type1-8=action";
}
if (document.getElementById('pvp').checked){
johndoe = johndoe + "&type1-9=pvp";
}
if (document.getElementById('puzzle').checked){
johndoe = johndoe + "&type1-10=puzzle";
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
<input type='checkbox' name='type1-1' value='platforming' id='platforming' \><span style='cursor: help;' onclick=\"alert('Platforming games involve jumping between platforms.  Examples include games like Donkey Kong, Doodle Jump, and Geometry Dash.')\">Platforming</span><br>
<input type='checkbox' name='type1-2' value='sports' id='sports' \><span style='cursor: help;' onclick=\"alert('Sports games include things like soccer, pool, and cards.')\">Sports</span><br>
<input type='checkbox' name='type1-3' value='escape' id='escape' \><span style='cursor: help;' onclick=\"alert('Escape games are generally about finding keys and other objects to open doors, in order to escape.')\">Escape</span><br>
<input type='checkbox' name='type1-4' value='shooter' id='shooter' \><span style='cursor: help;' onclick=\"alert('Games where violent shooting are prominent.  Archery and like games are not in this category.')\">Shooter</span><br>
<input type='checkbox' name='type1-5' value='rpg' id='rpg' \><span style='cursor: help;' onclick=\"alert('A game where the player assumes the role of a single main character.')\">Role Playing Game</span><br>
<input type='checkbox' name='type1-6' value='adventuring' id='adventuring' \><span style='cursor: help;' onclick=\"alert('Adventuring games involve exploration.')\">Adventuring</span><br>
<input type='checkbox' name='type1-7' value='sandbox' id='sandbox' \><span style='cursor: help;' onclick=\"alert('Sandbox games like Minecraft and Terraria are all about building. They allow the player much more choice than other games.')\">Sandbox</span><br>
<input type='checkbox' name='type1-8' value='action' id='action' \><span style='cursor: help;' onclick=\"alert('Most mobile games, like Flappy Bird, Angry Birds, and Temple Run, fall under this category.')\">Action</span><br>
<input type='checkbox' name='type1-9' value='pvp' id='pvp' \><span style='cursor: help;' onclick=\"alert('Multiplayer games where the main goal is to fight other players.')\">PVP</span><br>
<input type='checkbox' name='type1-10' value='puzzle' id='puzzle' \><span style='cursor: help;' onclick=\"alert('Logic games, like Candy Crush ort Bejewled.')\">Puzzle</span><br>
<!--
<input type='checkbox' name='type1-' value='' id='' \><br>
-->

<center><button class='w3-btn w3-blue w3-round-xxlarge' onclick='redir();'>Continue</button></center>

";
//print_r ($_GET);
	?>
        <?php
                include dirname(__FILE__)."/copy.php";
        ?>
    </body>
</html>
