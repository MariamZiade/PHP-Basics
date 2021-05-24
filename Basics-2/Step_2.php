<?php 

function greaterFn($num){

    if($num>30 || $num > 20 || $num >10){
        echo " $num is greater than 30";

    }else if( $num>20){
        echo  " $num is greater than 20 ";
    }else if($num >10){
        echo " $num is greater than 10";
    }else
        echo  "$num is less than 10"; 
    

}
 greaterFn(40); echo "<hr>";

 greaterFn(21);
 echo "<hr>";
 greaterFn(12);
 echo "<hr>";
 greaterFn(8);