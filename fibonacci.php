<?php
function printFibonacci($numTerms) {
    $first = 0;
    $second = 1;

    for ($i = 0; $i < $numTerms; $i++) {
        echo $first . " ";

        $next = $first + $second;

        $first = $second;
        $second = $next;
    }
}
printFibonacci(15);
?>
