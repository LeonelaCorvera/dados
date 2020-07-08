<?php

       
$dado1= random_int ( 1 , 6 );
$dado2= random_int ( 1 , 6 );
$dado3= random_int ( 1 , 6 );
$dado4= random_int ( 1 , 6 );
$dado5= random_int ( 1 , 6 );

$testArray = [];
  $testArray[] = $dado1;
  $testArray[] = $dado2;
  $testArray[] = $dado3;
  $testArray[] = $dado4;
  $testArray[] = $dado5;

 
  echo json_encode($testArray);
?>