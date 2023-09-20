<?php
function printEvenNumbers() {
    for ($i = 2; $i <= 20; $i += 2) {
        echo $i . " ";
    }
}

printEvenNumbers();


//==========while loop=======

function printEvenNumbersWhile() {
    $i = 2;
    while ($i <= 20) {
        echo $i . " ";
        $i += 2;
    }
}

printEvenNumbersWhile();

//=============do-while loop=======

function printEvenNumbersDoWhile() {
    $i = 2;
    do {
        echo $i . " ";
        $i += 2;
    } while ($i <= 20);
}

printEvenNumbersDoWhile();


?>
