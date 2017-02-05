<?php
$agerange="";
$theagearray=$_GET["agerangearray"];
foreach ($theagearray as &$item) {
$agerange = $agerange . "&agerangearray[]=" . $item;
}
$type1=array();
if(isset($_GET["type1-1"])){
array_push($type1,$_GET["type1-1"]);
}
if(isset($_GET["type1-2"])){
array_push($type1,$_GET["type1-2"]);
}
if(isset($_GET["type1-3"])){
array_push($type1,$_GET["type1-3"]);
}
if(isset($_GET["type1-4"])){
array_push($type1,$_GET["type1-4"]);
}
if(isset($_GET["type1-5"])){
array_push($type1,$_GET["type1-5"]);
}
if(isset($_GET["type1-6"])){
array_push($type1,$_GET["type1-6"]);
}
if(isset($_GET["type1-7"])){
array_push($type1,$_GET["type1-7"]);
}
if(isset($_GET["type1-8"])){
array_push($type1,$_GET["type1-8"]);
}
if(isset($_GET["type1-9"])){
array_push($type1,$_GET["type1-9"]);
}
if(isset($_GET["type1-10"])){
array_push($type1,$_GET["type1-10"]);
}
$placetogo="type2.php?";
foreach($type1 as &$item){
$placetogo=$placetogo . "&type1array[]=";
$placetogo=$placetogo . $item;
}
$placetogo=$placetogo . $agerange;
header("Location:" . $placetogo);
?>
