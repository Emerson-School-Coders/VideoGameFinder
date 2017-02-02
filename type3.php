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
             <?="What device do you want to play the game on?"?>
        </h2>
	<h3>
	Select all that apply
	</h3>
<script>
function redir(){
//this variable describes part of the URI you will be redirected to:
var johndoe = "";
if (document.getElementById('android').checked){
johndoe = johndoe + "&type3-1=android";
}
if (document.getElementById('ios').checked){
johndoe = johndoe + "&type3-2=ios";
}
if (document.getElementById('online').checked){
johndoe = johndoe + "&type3-3=online";
}
if (document.getElementById('windows').checked){
johndoe = johndoe + "&type3-4=windows";
}
if (document.getElementById('mac').checked){
johndoe = johndoe + "&type3-5=mac";
}
if (document.getElementById('linux').checked){
johndoe = johndoe + "&type3-6=linux";
}
if (document.getElementById('steamwin').checked){
johndoe = johndoe + "&type3-7=steamwin";
}
if (document.getElementById('steammac').checked){
johndoe = johndoe + "&type3-8=steammac";
}
if (document.getElementById('steamlinux').checked){
johndoe = johndoe + "&type3-9=steamlinux";
}
if (document.getElementById('steamos').checked){
johndoe = johndoe + "&type3-10=steamos";
}
if (document.getElementById('arcade').checked){
johndoe = johndoe + "&type3-11=arcade";
}
if (document.getElementById('wii').checked){
johndoe = johndoe + "&type3-12=wii";
}
if (document.getElementById('wiiu').checked){
johndoe = johndoe + "&type3-13=wiiu";
}
if (document.getElementById('xbox360').checked){
johndoe = johndoe + "&type3-14=xbox360";
}
if (document.getElementById('xboxone').checked){
johndoe = johndoe + "&type3-15=xboxone";
}
if (document.getElementById('ps3').checked){
johndoe = johndoe + "&type3-16=ps3";
}
if (document.getElementById('ps4').checked){
johndoe = johndoe + "&type3-17=ps4";
}
if (document.getElementById('nintendods').checked){
johndoe = johndoe + "&type3-18=nintendods";
}
if (document.getElementById('nintendo3ds').checked){
johndoe = johndoe + "&type3-19=nintendo3ds";
}
if (document.getElementById('nintendoswitch').checked){
johndoe = johndoe + "&type3-20=nintendoswitch";
}
if (document.getElementById('other').checked){
johndoe = johndoe + "&type3-21=other";
}
window.location = "type4_redir.php<?php 
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
$type2="";
$type2array=$_GET["type2array"];
foreach ($type2array as &$item) {
$type2 = $type2 . "&type2array[]=" . $item;
};
echo $agerange;
echo $type1;
echo $type2;
?>" + johndoe;
}
</script>
<?php
echo "
<input type='checkbox' name='type3-1' value='android' id='android' \>Android<br>
<input type='checkbox' name='type3-2' value='ios' id='ios' \>iOS<br>
<input type='checkbox' name='type3-3' value='online' id='online' \>Online<br>
<input type='checkbox' name='type3-4' value='windows' id='windows' \>Windows<br>
<input type='checkbox' name='type3-5' value='mac' id='mac' \>Mac<br>
<input type='checkbox' name='type3-6' value='linux' id='linux' \>Linux<br>
<input type='checkbox' name='type3-7' value='steamwin' id='steamwin' \>Steam(Windows)<br>
<input type='checkbox' name='type3-8' value='steammac' id='steammac' \>Steam(Mac)<br>
<input type='checkbox' name='type3-9' value='steamlinux' id='steamlinux' \>Steam(Linux)<br>
<input type='checkbox' name='type3-10' value='steamos' id='steamos' \>SteamOS<br>
<input type='checkbox' name='type3-11' value='arcade' id='arcade' \>Arcade<br>
<input type='checkbox' name='type3-12' value='wii' id='wii' \>Wii<br>
<input type='checkbox' name='type3-13' value='wiiu' id='wiiu' \>WiiU<br>
<input type='checkbox' name='type3-14' value='xbox360' id='xbox360' \>Xbox 360<br>
<input type='checkbox' name='type3-15' value='xboxone' id='xboxone' \>Xbox One<br>
<input type='checkbox' name='type3-16' value='ps3' id='ps3' \>PS3<br>
<input type='checkbox' name='type3-17' value='ps4' id='ps4' \>PS4<br>
<input type='checkbox' name='type3-18' value='nintendods' id='nintendods' \>Nintendo DS<br>
<input type='checkbox' name='type3-19' value='nintendo3ds' id='nintendo3ds' \>Nintendo 3DS<br>
<input type='checkbox' name='type3-20' value='nintendoswitch' id='nintendoswitch' \>Nintendo Switch<br>
<input type='checkbox' name='type3-21' value='other' id='other' \>Other<br>
<!--
<input type='checkbox' name='type3-22' value='' id='' \><br>
-->

<button class='w3-btn w3-blue w3-round-xxlarge' onclick='redir();'>Submit</button>

";
print_r ($_GET);
	?>
    </body>
</html>
