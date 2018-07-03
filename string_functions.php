<?php

  #substr()

  $output = substr('hello', 1, 3);
  // echo $output;

  #strlen()

  $output1 = strlen('hello world');
  // echo $output1;

  #strpos()

  $output2 = strpos('hello world', 'o'); // first occurrence
  // echo $output2;

  #strrpos()

  $output3 = strrpos('hello world', 'o'); //last occurrence

  #trim()

  $text = 'hello world             ';
  // var_dump($text);

  $output4 = trim($text);
  // var_dump($output4);

  #strtoupper / strtolower

  $output5 = strtoupper('heLlO world');
  // echo $output5;

  #ucwords(); uppercases the first letter of a word

  $output6 = ucwords('hello worlds');
  // echo $output6;

  #str_replace()

  $text = 'hello world';
  $output7 = str_replace('world', 'All', $text);
  // echo $output7;

  #is_string();

  $val = 'hello';
  $output8 = is_string($val);

  // echo $output8;

  $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

  foreach($values as $value) {
    if(is_string($value)) {
      //echo "{$value} is a string<br>";
    }
  }

  #gzcompress() //compresses string

  $string = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident adipisci temporibus labore doloribus, non tempora nemo quas deleniti aspernatur possimus! Dolorem, voluptate. Tempore tempora hic architecto laborum, dolores earum? Amet accusamus ut dolorem omnis officiis nemo nobis possimus odio laborum non assumenda at iusto ab labore nulla eum, laudantium quibusdam incidunt molestias ratione adipisci natus esse voluptate. Consectetur odit optio natus exercitationem veniam labore id nisi consequatur reiciendis sed asperiores incidunt velit excepturi, sequi illum voluptatum ea assumenda eveniet iure, necessitatibus tempore illo nam, inventore cumque? Incidunt, sapiente. Ut alias quas ab error animi asperiores voluptatem vitae rem exercitationem quaerat.';

  $compressed = gzcompress($string);

  //echo $compressed;

  $original = gzuncompress($compressed);

  echo $original;

?>