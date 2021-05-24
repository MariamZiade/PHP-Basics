<?php

function  mynumbers($num){

    switch ($num) {
        
        case "zero":
          echo "0";
          break;
          
        case "one":
          echo "1";
          break;

        case "five":
          echo "5";
          break;
          
  default:
          echo "you didn't enter a number";
      }
      
} 

mynumbers('five');

?>