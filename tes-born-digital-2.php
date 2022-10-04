<?php
oddCount(15);

function oddCount($num) {
    $oddNumber = array();
    for($i = 1; $i < $num; $i++) {
        if($i != 0) {
            if(($i % 2) != 0) {
                array_push($oddNumber, $i);
            }
        }
    }
    echo print_r($oddNumber);
}
?>