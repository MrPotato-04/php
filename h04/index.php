<?php
require '../funtions.php';

function tempConvert($cels) {
    $fahr = ($cels * 9.0/5.0) + 32.0;
    return $fahr;
};
echo tempConvert(22);

function devide3($num) {
    if($num % 3 === 0) {
        return $num . " is deelbaar door 3";
    } else {
        return $num . " is niet deelbaar door 3";
    };
};
blankLine();

echo devide3(7);

blankLine();

function reverseString($args) {
    $out = strrev($args);
    return $out;
}

echo reverseString("racecar");

blankLine();

