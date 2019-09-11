<?php
    #require_once('../Classes/Fibonacci.class.php');

    $n = 15;
    $a = 0;
    $b = 1;
    $aux = 0;

    echo "{$b}";

    for($i = 1; $i < $n; $i++){
        $aux = $a + $b;
        $a = $b;
        $b = $aux;

        echo " - {$aux}";
    }

?>

