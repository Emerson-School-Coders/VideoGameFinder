<?php
$agerange=array();
if(isset($_GET["agerangelow"])){
array_push($agerange,$_GET["agerangelow"]);
}
if(isset($_GET["agerangehigh"])){
array_push($agerange,$_GET["agerangehigh"]);
}
$placetogo="type1.php?";
foreach($agerange as &$item){
$placetogo=$placetogo . "&agerangearray[]=";
$placetogo=$placetogo . $item;
}
header("Location:" . $placetogo)

?>
