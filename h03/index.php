<?php
function blankLine() {
    echo nl2br("\n");
}

$collor = "green";
for($numberIMG = 1; $numberIMG < 11; $numberIMG++) {

    echo "<img style=\"border: 5px solid {$collor};\" src=\"https://picsum.photos/200?random" . $numberIMG . "\">";
    
    if($collor === "red")  {
        $collor = "green";
    }
    else {
        $collor = "red";
    }

}
blankLine();
for($x = 35;$x >= 25;$x--) {
echo 'hoppelepee ';

}	
blankLine();

$prijs = 10;
$eindprijs = 0;
$leeftijd = 10;
if($leeftijd <= 12 or $leeftijd >= 65) {
    if($leeftijd <= 3) {$eindprijs = 0;}
    else {
        $eindprijs = $prijs/2;
    }
}
echo "eind prijs: " . $eindprijs;
blankLine();
blankLine();