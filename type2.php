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
<center>
        <h1>
            Video Game Selector
        </h1>
        <h2 id="what_to_select">
             <?="What are you willing to pay?"?>
        </h2>
	<h3>
	Select all that apply
	</h3>
</center>
<script>
function redir(){
//this variable describes part of the URI you will be redirected to:
var johndoe = "";
if (document.getElementById('free').checked){
johndoe = johndoe + "&type2-1=free";
}
if (document.getElementById('freemium').checked){
johndoe = johndoe + "&type2-2=freemium";
}
if (document.getElementById('1499').checked){
johndoe = johndoe + "&type2-3=1499";
}
if (document.getElementById('5999').checked){
johndoe = johndoe + "&type2-4=5999";
}
if (document.getElementById('101999').checked){
johndoe = johndoe + "&type2-5=101999";
}
if (document.getElementById('204999').checked){
johndoe = johndoe + "&type2-6=204999";
}
if (document.getElementById('50').checked){
johndoe = johndoe + "&type2-7=50";
}
window.location = "type3_redir.php<?php 
$agerange="?";
$theagearray=$_GET["agerangearray"];
foreach ($theagearray as &$item) {
$agerange = $agerange . "&agerangearray[]=" . $item;
};
$type1="";
$type1array=$_GET["type1array"];
foreach ($type1array as &$item) {
$type1 = $type1 . "&type1array[]=" . $item;
};
echo $agerange;
echo $type1;
?>" + johndoe;
}
</script>
<?php
echo "
<input type='checkbox' name='type2-1' value='free' id='free' \>Free<br>
<input type='checkbox' name='type2-2' value='freemium' id='freemium' \>Free with in game purchases<br>
<input type='checkbox' name='type2-3' value='1499' id='1499' \>$0.01-$4.99<br>
<input type='checkbox' name='type2-4' value='5999' id='5999' \>$5.00-$9.99<br>
<input type='checkbox' name='type2-5' value='101999' id='101999' \>$10.00-$19.99<br>
<input type='checkbox' name='type2-6' value='204999' id='204999' \>$20.00-$49.99<br>
<input type='checkbox' name='type2-7' value='50' id='50' \>$50.00+<br>
<!--
<input type='checkbox' name='type2-1' value='' id='' \><br>
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
