<?php

    class ArrayNumbers {
       
        public $arrayNumbers;

        public function __construct() {
            $this->arrayNumbers = array();
        }

        public function PopulateArray()
        {
            for ($i = 0; $i <= 100; $i++)
                $this->arrayNumbers[$i] = $i;
            return $this->arrayNumbers;
        }

        public function PopulateArrayWithMultiplesOfThree()
        {
            for ($i = 3; $i <= 100; $i = $i + 3)
                $this->arrayNumbers[$i] = "$i - BHUT";
            return $this->arrayNumbers;
        }

        public function PopulateArrayWithMultiplesOfFive()
        {
            for ($i = 5; $i <= 100; $i = $i + 5)
                $this->arrayNumbers[$i] = "$i - IT";
            return $this->arrayNumbers;
        }

        public function PopulateArrayWithMultiplesOfThreeAndFive()
        {
            for ($i = 1; $i <= 100; $i++)
                if ($i % 3 == 0 && $i % 5 == 0) $this->arrayNumbers[$i] = "$i - BHUT IT";
            return $this->arrayNumbers;
        }

        public function showValuesOfArray(): void
        {
            foreach($this->arrayNumbers as $number => $value)
            {
                echo "$value<br>";
            }
        }

        public function executeAndShowValues(): void
        {
            $this->arrayNumbers = $this->PopulateArray();
            $this->arrayNumbers = $this->PopulateArrayWithMultiplesOfThree();
            $this->arrayNumbers = $this->PopulateArrayWithMultiplesOfFive();
            $this->arrayNumbers = $this->PopulateArrayWithMultiplesOfThreeAndFive();
            $this->showValuesOfArray();
        }
    }