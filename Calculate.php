<?php

class Calculate
{
    function calc($number1, $number2, $operation)
    {
        $resultCalc = '';
        if (!empty($number1) && !empty($number2)) {
            if ($operation == 'add') {
                $resultCalc = $number1 + $number2;
            } else if ($operation == 'sub') {
                $resultCalc = $number1 - $number2;
            } else if ($operation == 'mult') {
                $resultCalc = $number1 * $number2;
            } else if ($operation == 'divi') {
                if ($number2 == 0) {
                    echo "You can't divide by zero!";
                } else {
                    $resultCalc = $number1 / $number2;
                }
            }
        }
        return $resultCalc;
    }
}




