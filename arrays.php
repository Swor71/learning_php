<?php 

  // three types of arrays - Indexed - Associative - Multi-dimensinal

  //indexed

  $people = array('Kevin', 'Tommy', 'Sara');

  //echo $people[1];

  $ids = array(1, 3, 4, 6, 7);

  //echo $ids[2];

  $cars = ['Honda', 'Toyota', 'Ford'];
  $cars[3] = 'Chev';
  $cars[] = 'bmw'; // add onto the end of array

  //echo $cars[3];

  //echo count($cars); // .length()

  //echo print_r($cars); // shows contents of an array

  // echo var_dump($cars); // same but shows the type as well

  # Associative arrays

  $peopleAge = array('Tom' => 32, 'Sam' => 20, 'Will' => 40);
  
  //echo $peopleAge['Sam'];

  $test = [32 => 'Sam', 2 => 'Tom'];

  // echo $test[32];

  $peopleAge['Kull'] = 29;

  // print_r($peopleAge);


  # Multi-dimensional

  $cars = array(
    array('Honda', 32, 10),
    array('Toyota', 14, 3),
    array('BMW', 42, 5),
  );

  echo $cars[1][2];
?> 