<?php

$firstArray = array(11, -2, 4, 35, 0, 8, -9);

class SortArray
{
    private $_asort;

    public function __construct(array $asort)
    {
        $this->_asort = $asort;
    }
    public function alhsort()
    {
        $sorted = $this->_asort;
        sort($sorted);

        return $sorted;
    }
}

$sortArray = new SortArray($firstArray);

print_r($sortArray->alhsort()) . "\n";