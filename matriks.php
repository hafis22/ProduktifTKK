<?php
    $m1 = array(
        array(1, 1, 1),
        array(2, 2, 2),
        array(3, 3, 3)
    );
    $m2 = array(
        array(3, 3, 3),
        array(2, 2, 2),
        array(1, 1, 1)
    );
    $resultMatrix = array();
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $resultMatrix[$i][$j] = $m1[$i][$j] + $m2[$i][$j];
        }
    }
    echo "Matriks Hasil Penjumlahan:\n";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $resultMatrix[$i][$j] . " ";
        }
        echo "\n";
    }
?>