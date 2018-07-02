<?php

  // function simpleFunction() {
  //   echo 'hi';
  // }

  // simpleFunction();

  // function sayHello($name = 'World') {
  //   echo "hi $name<br>";
  // }

  // sayHello('Tom');
  // sayHello('Sara');
  // sayHello();

  // function addNumbers($num1, $num2) {
  //   // echo $num1 + $num2;
  //   return $num1 + $num2;
  // }

  // // addNumbers(2, 3);

  // echo addNumbers(5, 3);

  #passing by reference

  $myNum = 10;

  function addFive($num) { // doesn't manipulate the variable outside of the function
    $num += 5;
  }

  function addTen(&$num) { // DOES manipulate the variable outside of the function - &$ <- reference to the var
    $num += 10;
  }

  addFive($myNum);

  echo "Value: $myNum<br>";

  addTen($myNum);

  echo "Value: $myNum<br>";


?>