<!DOCTYPE html>
<html>
    <head>
        <script src="jquery.js"></script>
        <link rel="stylesheet" type="text/css" src="w3.css">
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
        <?php
$agerangearray="?";
$theagearray=$_GET["agerangearray"];
foreach ($theagearray as &$item) {
$agerangearray = $agerangearray . "&agerangearray[]=" . $item;
};
echo "
<script>
function redir(){
var johndoe = \"\";
if (document.getElementById('violent').checked){
johndoe = johndoe + \"&type1-1=violent\";
}
if (document.getElementById('sandbox').checked){
johndoe = johndoe + \"&type1-2=sandbox\";
}
if (document.getElementById('peaceful').checked){
johndoe = johndoe + \"&type1-3=peaceful\";
}
if (document.getElementById('towerdefense').checked){
johndoe = johndoe + \"&type1-4=towerdefense\";
}
window.location = \"type2.php" . $agerangearray . "\" + johndoe;
}
</script>
";
echo "
<input type='checkbox' name='type1-1' value='violent' id='violent' \>Violent<br>
<input type='checkbox' name='type1-2' value='sandbox' id='sandbox' \>Sandbox<br>
<input type='checkbox' name='type1-3' value='peaceful' id='peaceful' \>Peaceful<br>
<input type='checkbox' name='type1-4' value='towerdefense' id='towerdefense' \>Tower Defense<br>
<!--<input type='checkbox' name='type1' value='' \><br>
<input type='checkbox' name='type1' value='' \><br>
<input type='checkbox' name='type1' value='' \><br>
<input type='checkbox' name='type1' value='' \><br>
-->
<button onclick='redir();'>Submit</button>
";
print_r ($_GET);
	?>
    </body>
</html>
