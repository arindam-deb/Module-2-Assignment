<?php

echo"Task 1 With Foor Loop".'<br>';
function myFunction($firstNumber,$secondNumber,$difference){
    $firstNumber+=1;
    for($i=$firstNumber; $i<=$secondNumber; $i+=$difference){
        echo $i. " ".'<br>';
    }

}

myFunction(1,20,2);


echo"Task 1 With While Loop ".'<br>';

function myFunctionWithWhile($firstNumber,$secondNumber,$difference){
    $firstNumber+=1;
    $i=$firstNumber;
    while( $i<=$secondNumber){
        echo $i. " ".'<br>';
        $i+=$difference;
    }

}

myFunctionWithWhile(1,20,2);

echo"Task 1 With Do While Loop".'<br>';

function myFunctionWithDoWhile($firstNumber,$secondNumber,$difference){
    $firstNumber+=1;
    $i=$firstNumber; 
    do{
        echo $i. " ".'<br>';
        $i+=$difference;
    }while($i<=$secondNumber);

}

myFunctionWithDoWhile(1,20,2);
