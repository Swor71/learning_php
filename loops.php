<?php 

  #Loops - For - While - Do While - Foreach

  #For
  #@params - init, condition, increment

  // for($i = 0; $i <= 10; $i++) {
  //   echo $i;
  //   echo '<br>';
  // }

  #While

  // $i = 0;

  // while($i < 10) {
  //   echo $i;
  //   echo '<br>';
  //   $i++;
  // }

  # Do while - runs at least once

  // $i = 0;

  // do{
  //   echo $i;
  //   echo '<br>';
  //   $i++;
  // }

  // while($i < 10);

  #ForEach

  // $people = array('Tom', 'Sam', 'Will', 'Sara');

  // foreach ($people as $person) {
  //   echo $person;
  //   echo '<br>';
  // }

  #Associative array

  $people = array('Tom' => 'tom@gmail.com', 'Sam' => 'sam@gmail.com', 'Will' => 'will@gmail.com', 'Sara' => 'sara@gmail.com');

  foreach ($people as $person => $email) {
    echo $person. ': ' .$email;
    echo '<br>';
  }

?>