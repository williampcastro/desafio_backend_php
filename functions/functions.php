<?php

function CreateArray(){
    return [];
}

function PopulateArray($array)
{
    for ($i = 0; $i <= 100; $i++)
        $array[$i] = $i;
    return $array;
}

function PopulateArrayWithMUltiplesOfThree($array)
{
    for ($i = 3; $i <= 100; $i = $i + 3)
        $array[$i] = "$i - BHUT";
    return $array;
}

function PopulateArrayWithMUltiplesOfFive($array)
{
    for ($i = 5; $i <= 100; $i = $i + 5)
        $array[$i] = "$i - IT";
    return $array;
}

function PopulateArrayWithMUltiplesOfThreeAndFive($array)
{
    for ($i = 1; $i <= 100; $i++)
        if ($i % 3 == 0 && $i % 5 == 0) $array[$i] = "$i - BHUT IT";
    return $array;
}

function showValuesOfArray($array)
{
    for ($i = 0; $i <= 100; $i++)
        echo "$array[$i]<br>";
}