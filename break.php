
<?php

$first = 0;
$second = 1;

for ($i = 0; $i < 10; $i++) {
    $nextNumber = $first + $second;
    
 
    if ($nextNumber > 100) {
        break; 
    }
    
    echo $nextNumber . " ";
    
    // Update values for the next iteration
    $first = $second;
    $second = $nextNumber;
}
?>