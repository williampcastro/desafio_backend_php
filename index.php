<?php

require 'class/arrayNumbersClass.php';

$arrayNumbers = new ArrayNumbers();
$arrayNumbers = $arrayNumbers->PopulateArray();
// $arrayNumbers = $arrayNumbers->PopulateArrayWithMUltiplesOfThree();
// $arrayNumbers = $arrayNumbers->PopulateArrayWithMUltiplesOfFive();
// $arrayNumbers = $arrayNumbers->PopulateArrayWithMUltiplesOfThreeAndFive();
$arrayNumbers->showValuesOfArray();