<?php

$number1=$_POST['number1'];
$number2=$_POST['number2'];

$_POST['result'];

echo calculateResult($_POST['result']);

function addCalculator($number1,$number2){

    $result=$number1+$number2;
    return $result;
}

function subtractCalculator($number1,$number2){

    if($number1>$number2)
    {
        $result=$number1-$number2;
        return $result;
    }
    else
    {
        return "Number1 should be larger than Number2";
    }
}

function multiplyCalculator($number1,$number2){

    $result= $number1 * $number2;
    return $result;

}

function divideCalculator($number1,$number2){

    if($number2==0)
    {
        return "can't divide";
    }
    else
    {
        $result= $number1/$number2;
        return $result;
    }
}

function calculateResult($number1,$number2,$result){

    if(isset(addCalculator($number1,$number2)))
    {
        return $result;
    }
    elseif(isset(subtractCalculator($result)))
    {
        return $result;
    }
    elseif(isset(multiplyCalculator($result)))
    {
        return $result;
    }
    else(isset(divideCalculator($result)))
    {
        return $result;
    }

}