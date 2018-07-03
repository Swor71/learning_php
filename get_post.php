<?php
  
  if(isset($_GET['name'])){
    $name = htmlentities($_GET['name']); // prevents XSS attacks by turning tags into text
    echo $name;
  }
  /*
  if(isset($_POST['name'])){
    $name = htmlentities($_POST['name']); 
    echo $name;
  }
  

  if(isset($_REQUEST['name'])){
    $name = htmlentities($_REQUEST['name']); // REQUEST works regardless what method you use in form method
    echo $name;
  }
  
  */

  // echo $_SERVER['QUERY_STRING'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form method="POST" action="get_post.php">
    <div>
      <label for="">Name</label>
      <input type="text" name='name'>
    </div>
    <div>
      <label for="">Email</label>
      <input type="text" name='email'>
    </div>
    <input type="submit" value="Submit">
  </form>
  <ul>
    <li>
      <a href="get_post.php?name=Tom">Tom</a>
    </li>
    <li>
      <a href="get_post.php?name=Alan">Alan</a>
    </li>
  </ul>
  <h1><?php echo "{$name}'s profile" ?></h1>
</body>
</html>