<?php
//Finding out Largest Number from 4, 5, 6
$num1=4;
$num2=5;
$num3=6;

if ($num1>=$num2) {
    if ($num1>=$num3) {
        echo ("Largest Number $num1");
      } else {
        echo ("Largest Number $num3");
      }
  } 
else {
    if ($num2>=$num3) {
        echo ("Largest Number $num2");
      } else {
        echo ("Largest Number $num3");
      }
    }
  ?>