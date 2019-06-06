<?php

class ArrayOfNumbers
{

    public $arrayOfNumbers;

    public function __construct()
    {
        $this->arrayOfNumbers = array();
    }

    public function PopulateArray()
    {
        for ($i = 0; $i <= 100; $i++)
            $this->arrayOfNumbers[$i] = $i;

        return $this->arrayOfNumbers;
    }

    public function PopulateArrayWithMultiplesOfThree()
    {
        for ($i = 3; $i <= 100; $i = $i + 3)
            $this->arrayOfNumbers[$i] = "$i - BHUT";
        return $this->arrayOfNumbers;
    }

    public function PopulateArrayWithMultiplesOfFive()
    {
        for ($i = 5; $i <= 100; $i = $i + 5)
            $this->arrayOfNumbers[$i] = "$i - IT";

        return $this->arrayOfNumbers;
    }

    public function PopulateArrayWithMultiplesOfThreeAndFive()
    {
        for ($i = 1; $i <= 100; $i++)
            if ($i % 3 == 0 && $i % 5 == 0) $this->arrayOfNumbers[$i] = "$i - BHUT IT";

        return $this->arrayOfNumbers;
    }

    public function showValuesOfArray(): void
    {
        foreach ($this->arrayOfNumbers as $number => $value)
            echo "$value<br>";
    }

    public function executeAndShowValues(): void
    {
        $this->arrayOfNumbers = $this->PopulateArray();
        $this->arrayOfNumbers = $this->PopulateArrayWithMultiplesOfThree();
        $this->arrayOfNumbers = $this->PopulateArrayWithMultiplesOfFive();
        $this->arrayOfNumbers = $this->PopulateArrayWithMultiplesOfThreeAndFive();
        $this->showValuesOfArray();
    }
}
