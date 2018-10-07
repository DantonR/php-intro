<?php 
  /*
  VARIABLE SYNTAX
  Variables start with a $
  They must begin with a letter or an underscore
  */

  $hello = 'Hello';
  $_hello = 'Hello with underscore';
  $number = 10;
  $boolean = false;

  /*
    # array syntax
    $array = array(10,20,30,40);

    # how to view the PHP
    # echo spits out the data
    echo 'Hello';
    echo($_hello);
    print('Print is the same as echo');

    # tool for debugging, similar to a console log
    var_dump('This is a var dump');
    var_dump($array);
  */

  # end the code
  // die('this is from a die')

  $list = array('apples', 'bananas', 'pears');


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
  <h1 class='heading-1 <?php echo 'classname';?>'>This is running from a PHP file</h1>
  <?php echo '<h2>This is from an echo</h2>';?>
  <h2><?php echo $hello;?></h2>
  <h3><?= 'this is from the shorthand' ?></h3>

  <ul>
    <?php
      # this will loop over the list and each item looped over will be named listItem
      foreach($list as $listItem) {
        echo '<li>'.$listItem.'</li>';
      }
    ?>
  </ul>

  <ul>
    <?php foreach($list as $listItem): ?>
      <li><?= $listItem; ?></li>
    <?php endforeach; ?>
  </ul>

  <?php
    $scores = array(24, 70, 42, 98, 89, 100, 28, 64);
  ?>
  <h2>The total number of people is <?= count($scores); ?></h2>
  <ul>
    <?php foreach($scores as $score): ?>
      <li><?= $score; ?></li>
    <?php endforeach ?>
  </ul>
  <?php
    $totalScore = 0;
  ?>




    
</body>
</html>