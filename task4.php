<?php

function fibonacci($totalNumber) {
    $previous = 0;
    $current = 1;
    // $next=1;

    for ($i = 0; $i < $totalNumber; $i++) {
        echo $previous . "  ";
        $next = $previous + $current;
        $previous = $current;
        $current = $next;
    }

}

fibonacci(15);