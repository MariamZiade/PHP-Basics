<?php
function replace($string){

    if($string =="php"){

        echo str_replace("php","python",$string);


    }else{
            echo str_replace("python","php",$string);

        }
    }

replace("php");


?> 