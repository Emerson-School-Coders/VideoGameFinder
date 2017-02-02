<!--DATAQUERY.PHP-->
<!--LOADED WITH GET DATA:
<?php print_r($_GET);?>
-->

<?php
//saving GET data to vars:
echo "<!--";
$agerangelow = $_GET["agerangearray"][0];
$agerangehigh = $_GET["agerangearray"][1];
echo $agerangelow;
echo " " . $agerangehigh . "\n";
$types = $_GET["type1array"];
print_r($types);
echo "\n";
$prices = $_GET["type2array"];
print_r($prices);
echo "\n";
$platforms = $_GET["type3array"];
print_r($platforms);
echo "\n";
echo "-->";
//main code
class DB extends SQLite3
{
        function __construct( $file )
        {
            $this->open( $file );
        }
}

$db = new DB( '/var/www/html/VideoGameFinder/games.db' );

$rows = $db->query("SELECT COUNT(*) as count FROM games");
$row = $rows->fetchArray();
$numRows = $row['count'];
echo "<h1>Games in database:&nbsp;";
echo $numRows;
echo "</h1>";
$i=1;


while ($i<=$numRows){
///////////////START CHECKING FOR COMPATIBILITY
//start checking for price compatibility
$pricecompat=0;
$price=$db->querySingle("SELECT price FROM games WHERE id=" . $i);
if (in_array($price,$prices)){
$pricecompat=1;
}
//stop checking for price compatibility
//start checking type compatibility
$typescompat=0;
$game_types_array=array();
$x=0;
while ($x<3){
$x++;
if ($x==1){
array_push($game_types_array,$db->querySingle("SELECT type FROM games WHERE id=" . $i));
}
else{
array_push($game_types_array,$db->querySingle("SELECT type" . $x . " FROM games WHERE id=" . $i));
}
}
echo "<!--";
print_r($game_types_array);
print_r($types);
echo "-->";
foreach($types as $item){
if (in_array($item, $game_types_array)){
$typescompat=1;
}
echo "<!--";
echo $typescompat;
echo "-->";
}
//stop checking type compatibility
//start checking age range compatibility
$agerangelowcompat=0;
$agerangehighcompat=0;
$agerangecompat=0;
if ($agerangelow<$db->querySingle("SELECT agerangehigh FROM games WHERE id=" . $i)){
$agerangelowcompat=1;
}
if ($agerangehigh>$db->querySingle("SELECT agerangelow FROM games WHERE id=" . $i)){
$agerangehighcompat=1;
}
if ($agerangelowcompat==1 and $agerangehighcompat==1){
$agerangecompat=1;
}
echo "<!--";
echo $db->querySingle("SELECT agerangelow FROM games WHERE id=" . $i);
echo $db->querySingle("SELECT agerangehigh FROM games WHERE id=" . $i);
echo "-->";
//stop checking age range compatibility
//start checking platform compatibility
$game_platforms_array = array();
$x=0;
while ($x<10){
$x++;
if ($x==1){
array_push($game_platforms_array,$db->querySingle("SELECT platform FROM games WHERE id=" . $i));
}
else{
array_push($game_platforms_array,$db->querySingle("SELECT platform" . $x . " FROM games WHERE id=" . $i));
}
}
echo "<!--";
print_r($game_platforms_array);
echo "-->";
$platformcompat=0;
foreach($platforms as $item){
if(in_array($item, $game_platforms_array)){
$platformcompat=1;
}
}
//end of checking platform compatibility
///////////////STOP CHECKING FOR COMPATIBILITY
if(($pricecompat && $platformcompat) && ($agerangecompat && $typescompat)){//check if it is compatible with everything
echo "<a target='_blank' href='";
echo $db->querySingle("SELECT url FROM games WHERE id=" . $i);
echo "'>";
echo "<img title='";
echo $db->querySingle("SELECT name FROM games WHERE id=" . $i);
echo "' src='";
echo $db->querySingle("SELECT image FROM games WHERE id=" . $i);
echo "' width='100' height='100'>";
echo "</a>";
}
$i+=1;
}
//echo $db->querySingle("SELECT image FROM games");
?>
