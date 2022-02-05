<?php 

class StrongNumbers
{
    public function strong($number)
    {
        if($number > 0){
            $result = 1;
            for($i = 1; $i <= $number; $i++)
            {
                $result *= $i;
            }
            return $result;
        } else {
            echo 'Number must be integer, and greater than zero!';
        }
    }
}

$firstNumbers = new StrongNumbers;
echo($firstNumbers->strong(4));