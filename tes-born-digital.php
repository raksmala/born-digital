<?php
printDigitValue("9.327.421");

function printDigitValue($num) {
    $num = preg_replace('/[^0-9]/', '', $num);

    for($i = strlen($num); $i > 0; $i--) {
        $reverse = strrev($num);
        $output = $reverse[$i-1] . str_repeat('0', ($i - 1));
        echo $output . "\n";
    }
}
?>