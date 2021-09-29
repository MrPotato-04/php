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

//tried using map like jscript but that made me flip my table (╯°□°）╯︵ ┻━┻
$testArray = ["De spartelkuikens", 25, "De waterbuffels", 35, "Plonsmderin", 11];
$j = 0;
$astrixFIG = "*";

echo "* inplaats van plaatje";
blankLine();

foreach ($testArray as &$value) {
    echo $value . " ";
    if($j % 2 === 1) {
        $valueTMP = $value / 5;
        for($h = 0; $h < $valueTMP; $h++) {
            echo $astrixFIG;
        }
        echo "<br>";
    }
    $j++;
}




