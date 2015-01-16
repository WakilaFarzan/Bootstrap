<?php


$number= 12;

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


function is_odd($number){
    if(($number%2)==0){
        return false;
    }
    else{
         return true;
    }
}
//declaration of a function

function myTest(){
    echo "hello";
    return 'bkict';
}

//myTest();
var_dump(is_null( myTest()));



function myTest2(){
    return "hello";
}
myTest2();
//echo myTest2();





