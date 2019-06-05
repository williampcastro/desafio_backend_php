<?php

    class ArrayNumbers {
       
        public $arrayNumbers;

        public function __construct() {
            $this->arrayNumbers = array();
            echo "criou o objeto";
        }

        public function PopulateArray()
        {
            for ($i = 0; $i <= 100; $i++)
            $this->arrayNumbers[$i] = $i;
            return $this->arrayNumbers;
        }

        // public function PopulateArrayWithMultiplesOfThree()
        // {
        //     for ($i = 3; $i <= 100; $i = $i + 3)
        //         $this->arrayNumbers[$i] = "$i - BHUT";
        //     return $this->arrayNumbers;
        // }

        // public function PopulateArrayWithMultiplesOfFive()
        // {
        //     for ($i = 5; $i <= 100; $i = $i + 5)
        //         $this->arrayNumbers[$i] = "$i - IT";
        //     return $this->arrayNumbers;
        // }

        // public function PopulateArrayWithMultiplesOfThreeAndFive()
        // {
        //     for ($i = 1; $i <= 100; $i++)
        //         if ($i % 3 == 0 && $i % 5 == 0) $this->arrayNumbers[$i] = "$i - BHUT IT";
        //     return $this->arrayNumbers;
        // }

        public function showValuesOfArray()
        {
            for ($i = 0; $i <= 100; $i++)
                echo "$this->arrayNumbers[$i]<br>";
        }
    }