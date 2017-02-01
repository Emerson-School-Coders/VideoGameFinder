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
             <?="What are you willing to pay?"?>
        </h2>
	<h3>
	Select all that apply
	</h3>
<script>
function redir(){
//this variable describes part of the URI you will be redirected to:
var johndoe = "";
if (document.getElementById('').checked){
johndoe = johndoe + "&type2-1=";
}
if (document.getElementById('').checked){
johndoe = johndoe + "&type2-2=";
}
if (document.getElementById('').checked){
johndoe = johndoe + "&type2-3=";
}
if (document.getElementById('').checked){
johndoe = johndoe + "&type2-4=";
}
if (document.getElementById('').checked){
johndoe = johndoe + "&type2-5=";
}
if (document.getElementById('').checked){
johndoe = johndoe + "&type2-6=";
}
if (document.getElementById('').checked){
johndoe = johndoe + "&type2-7=";
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
