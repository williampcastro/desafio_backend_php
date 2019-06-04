<?php

require 'functions/functions.php';

$array = CreateArray();
$array = PopulateArray($array);
$array = PopulateArrayWithMUltiplesOfThree($array);
$array = PopulateArrayWithMUltiplesOfFive($array);
$array = PopulateArrayWithMUltiplesOfThreeAndFive($array);
showValuesOfArray($array);