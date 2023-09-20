<?php

function fibonacci() {
    $previous = 0;
    $current = 1;
    for ($i = 0; $i < 10; $i++) {
        if($previous>100){
            break;
        }
        echo $previous . "  ";
        $next = $previous + $current;
        $previous = $current;
        $current = $next;
    }

}

fibonacci();