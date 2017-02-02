<!--DATAQUERY.PHP-->
<!--LOADED WITH GET DATA:
<?php print_r($_GET);?>-->

<?php

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
echo $numRows;
$i=1;
while ($i<=$numRows){
echo "<img src='";
echo $db->querySingle("SELECT image FROM games WHERE id=" . $i);
echo "' width='100' height='100'>";
$i+=1;
}
echo $db->querySingle("SELECT image FROM games");
?>
