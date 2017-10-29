<?php
//Tonen van welkomst tekst en genre keuzes

echo "Welkom bij de Jones MP3 selector applicatie";
echo "<br>";
echo "Maakt svp een keuze van genre en dan de nummers van die genre";
echo "<br>";
echo "kies uit onderstaande genre's";
echo "<br>";
echo "<br>";

$genre = array("jazz=1","rock=2","pop=3","rnb=4","hiphop=5","soul=6");
for($counter=0; $counter < count($genre); $counter++){
    echo $genre[$counter];
    echo "<br>";
    
} 
$style = $_GET['genre'];

switch ($style){
    
}
?>
