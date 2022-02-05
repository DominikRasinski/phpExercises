<?php

class Calculate
{

    private $num1, $num2;

    public function __construct($tempNum1, $tempNum2)
    {
        $this->num1 = $tempNum1;
        $this->num2 = $tempNum2;
    }

    public function add()
    {
        $tempNum1 = $this->num1;
        $tempNum2 = $this->num2;

        $result = ($tempNum1 + $tempNum2);

        return $result . "\n";
    }
    public function multiply()
    {
        $tempNum1 = $this->num1;
        $tempNum2 = $this->num2;

        $result = ($tempNum1 * $tempNum2);

        return $result . "\n";
    }
}

$mycalc = new Calculate(12, 6);
print_r($mycalc->add());
print_r($mycalc->multiply());


?>