<?php
    $myArray = [];
    const N = 10;
    for($i = 0; $i <= N; $i++) {
        $myArray[$i] = $i + 1;
    }
    print_r($myArray);

    for($i = 0; $i <= N; $i++) {
        if ($myArray[$i] % 2 == 0) {
            print_r($myArray[$i]);
        }
    }


    for($i = 0; $i <= N; $i++ ) {
        $myArray[$i] = $myArray[$i] * 2;
    }
    print_r($myArray);

    for($i = 0; $i <= N; $i++) {
        if ($myArray[$i] % 10 == 0 || $myArray[$i] % 10 > 4 || ($myArray[$i] % 100 >= 10 && $myArray[$i] % 100 <= 20)) {
            $myArray[$i] = $myArray[$i] . " попугаев";
        } else {
            $myArray[$i] = $myArray[$i] . " попугая";
        }
        
    }
    print_r($myArray);
?>