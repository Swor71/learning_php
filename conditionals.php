<?php

  #Conditionals - == - === - < - > - <= - >= - != - !==

  // $num = '5';
  
  // if($num == 5){
  //   echo 'righty';
  // } elseif($num == 6) {
  //   echo '6 here';
  // } else {
  //   echo 'nope';
  // }

  
  // $num = 5;

  // if($num > 4){
  //   if($num < 10) {
  //     echo 'yup';
  //   }
  // }

  /*
    Logical operators
      AND &&
      OR ||
      XOR - one has to be true but not both
  */

  // if($num > 4 XOR $num < 10) {
  //   echo "$num is here";
  // }

    #Switch

  $favColor = 'blue';

  switch ($favColor) {
    case 'red':
      echo 'nope';
      break;
    case 'blue':
      echo 'hellya';
      break;
    default:
      echo 'dont know about that';
  }

?>
