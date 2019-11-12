<?php
echo "tijden neerzetten als bijv. 2d 3u 5m 7s" . PHP_EOL;
$tijd = readline();
// "4m 10s"

$tijden = explode(" ", $tijd);
// "4m"
// "10s"

foreach ($tijden as $tijd2) {
    // "4m"
    $x = substr($tijd2, -1);
    switch ($x) {
        case "s":
            $seconden = (int)$tijd2;
            break;
        case "m":
            $minuten = (int)$tijd2 * 60;
            break;
        case "u":
            $uur = (int)$tijd2 * 60 * 60;
            break;
        case "d":
            $dag = (int)$tijd2 * 24 * 60 * 60;
            break;
    }
}

$totaal = $dag + $uur + $minuten + $seconden;

echo "$totaal seconden";





/*
if(strpos($x, "s")) {
    echo "$tijd seconden";
}
elseif(strpos($x, "m")) {
    echo "$tijd minuten";
}
elseif(strpos($x, "u")) {
    echo "$tijd uur";
}
else{
    echo "Geen tijd gevonden";
    exit;
}
*/
