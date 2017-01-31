<?php
$agerange=array();
if(isset($_GET["agerange1"])){
array_push($agerange,$_GET["agerange1"]);
}
if(isset($_GET["agerange2"])){
array_push($agerange,$_GET["agerange2"]);
}
if(isset($_GET["agerange3"])){
array_push($agerange,$_GET["agerange3"]);
}
if(isset($_GET["agerange4"])){
array_push($agerange,$_GET["agerange4"]);
}
if(isset($_GET["agerange5"])){
array_push($agerange,$_GET["agerange5"]);
}
if(isset($_GET["agerange6"])){
array_push($agerange,$_GET["agerange6"]);
}
if(isset($_GET["agerange7"])){
array_push($agerange,$_GET["agerange7"]);
}
$placetogo="type1.php?";
foreach($agerange as &$item){
$placetogo=$placetogo . "&agerangearray[]=";
$placetogo=$placetogo . $item;
}
header("Location:" . $placetogo)

?>
