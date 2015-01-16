<?php


$_POST['number'];

echo identifyOddEven($_POST['number']);

function is_odd($number){
    if(($number%2)==0){
        return false;
    }
    else{
        return true;
    }
}


function identifyOddEven($number){
    if (($number%2)==0)
    {
        return "even number";
    }
    else
    {
        return  "odd number";
    }
}