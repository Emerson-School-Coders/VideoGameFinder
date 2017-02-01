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
$type2="";
$type2array=$_GET["type2array"];
foreach ($type2array as &$item) {
$type2 = $type2 . "&type2array[]=" . $item;
}
$type3=array();
if(isset($_GET["type3-1"])){
array_push($type3,$_GET["type3-1"]);
}
if(isset($_GET["type3-2"])){
array_push($type3,$_GET["type3-2"]);
}
if(isset($_GET["type3-3"])){
array_push($type3,$_GET["type3-3"]);
}
if(isset($_GET["type3-4"])){
array_push($type3,$_GET["type3-4"]);
}
if(isset($_GET["type3-5"])){
array_push($type3,$_GET["type3-5"]);
}
if(isset($_GET["type3-6"])){
array_push($type3,$_GET["type3-6"]);
}
if(isset($_GET["type3-7"])){
array_push($type3,$_GET["type3-7"]);
}
if(isset($_GET["type3-8"])){
array_push($type3,$_GET["type3-8"]);
}
if(isset($_GET["type3-9"])){
array_push($type3,$_GET["type3-9"]);
}
if(isset($_GET["type3-10"])){
array_push($type3,$_GET["type3-10"]);
}
if(isset($_GET["type3-11"])){
array_push($type3,$_GET["type3-11"]);
}
if(isset($_GET["type3-12"])){
array_push($type3,$_GET["type3-12"]);
}
if(isset($_GET["type3-13"])){
array_push($type3,$_GET["type3-13"]);
}
if(isset($_GET["type3-14"])){
array_push($type3,$_GET["type3-14"]);
}
if(isset($_GET["type3-15"])){
array_push($type3,$_GET["type3-15"]);
}
if(isset($_GET["type3-16"])){
array_push($type3,$_GET["type3-16"]);
}
if(isset($_GET["type3-17"])){
array_push($type3,$_GET["type3-17"]);
}
if(isset($_GET["type3-18"])){
array_push($type3,$_GET["type3-18"]);
}
if(isset($_GET["type3-19"])){
array_push($type3,$_GET["type3-19"]);
}
if(isset($_GET["type3-20"])){
array_push($type3,$_GET["type3-20"]);
}
if(isset($_GET["type3-21"])){
array_push($type3,$_GET["type3-21"]);
}
$placetogo="dataquery.php?";
foreach($type3 as &$item){
$placetogo=$placetogo . "&type3array[]=";
$placetogo=$placetogo . $item;
}
$placetogo=$placetogo . $agerange . $type1 . $type2;
header("Location:" . $placetogo);
?>
