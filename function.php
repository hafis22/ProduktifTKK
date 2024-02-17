<?php
function bilangan_terbesar($bilangan1, $bilangan2) {
    if ($bilangan1 > $bilangan2) {
        return $bilangan1;
    } else {
        return $bilangan2;
    }
}

//CONTOH PENGUJIAN FUNGSI
$bilangan1 = 100;
$bilangan2 = 150;
$hasil_terbesar = bilangan_terbesar($bilangan1, $bilangan2);
echo "bilangan terbesar adalah: " . $hasil_terbesar;
?>