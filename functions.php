<?php
// function block of resuable code

function simpleFunc(){
  echo "fart";
}
simpleFunc();

// function with param
function func2($name = 'world'){
  echo "Hello $name <br />";
}
func2('shaun');

//return value from function
function addNumbers($num1, $num2){
  return $num1 + $num2;
}
echo addNumbers(3,4);

//by referenfe
$myNUm=10;
function addFive($num){
  $num += 5;
}

function addTen(&$num){
  $num += 10;
}

addFive($myNUm);
echo $myNUm;
addTen($myNUm);
echo $myNUm;


 ?>
