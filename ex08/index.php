<?php

function primos($numero){
   

    for($i=0; $i <= $numero; $i++){
        $primo = true;
        if($i != 0 && $i != 1){
            for($j=2; $j < $i; $j++){
                if($i % $j == 0){
                    $primo = false;
                    break;
                }
            }

            if($primo){
                echo "$i - ";
            }
        }
    }
}primos(35);