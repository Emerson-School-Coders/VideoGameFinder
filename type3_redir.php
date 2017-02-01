<?php
$agerange="";
$theagearray=$_GET["agerangearray"];
foreach ($theagearray as &$item) {
$agerange = $agerange . "&agerangearray[]=" . $item;
}
$type1="";
$type1array=$_GET["type1array"];
foreach ($type1array as &$item) {
$type1 = $type1 . "&type1array[]=" . $item;
}
$type2=array();
if(isset($_GET["type2-1"])){
array_push($type2,$_GET["type2-1"]);
}
if(isset($_GET["type2-2"])){
array_push($type2,$_GET["type2-2"]);
}
if(isset($_GET["type2-3"])){
array_push($type2,$_GET["type2-3"]);
}
if(isset($_GET["type2-4"])){
array_push($type2,$_GET["type2-4"]);
}
if(isset($_GET["type2-5"])){
array_push($type2,$_GET["type2-5"]);
}
if(isset($_GET["type2-6"])){
array_push($type2,$_GET["type2-6"]);
}
if(isset($_GET["type2-7"])){
array_push($type2,$_GET["type2-7"]);
}
$placetogo="type3.php?";
foreach($type2 as &$item){
$placetogo=$placetogo . "&type2array[]=";
$placetogo=$placetogo . $item;
}
$placetogo=$placetogo . $agerange . $type1;
header("Location:" . $placetogo);
?>
