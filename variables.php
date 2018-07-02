<?php
  // comment
  # single line 

  /*
  multiline comm

  */

  #Variables

  /*
    prefix with a $
    start with a letter or _
    only letters numbers or _
    case sensitive
  */

  #Data types

  /*
    String $text = 'some text';
    Integers $num1 = 4;
    Floats $float1 = 4.4;
    Booleans
    Arrays
    Objects
    NULL
    Resource

  */

  #Variables

  $num1 = 4;
  $num2 = 10;
  $sum = $num1 + $num2;

  $str1 = 'hi';
  $str2 = 'man';
  $greet = $str1 . ' ' . $str2; // concat Strings with .
  $greet2 = "$str1 $str2"; // can use variables in " " but not in ' '
  $greet3 = "They're here";
  
  $output = 'hello world'; //variable $

  #Constants

  define('GREETING', 'Hello All'); // only use if you know it's not going to change / third parameter - true - if you want case INsensitive const name

  echo GREETING;
?>