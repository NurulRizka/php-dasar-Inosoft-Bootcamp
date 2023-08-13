<?php
function luas_lingkaran($jari_jari) {
    return round(3.14 * $jari_jari * $jari_jari, 2);
}

function keliling_lingkaran($jari_jari) {
    return round(2 * 3.14 * $jari_jari, 2);
}

function luas_persegi($panjang, $lebar) {
    return round($panjang * $lebar, 2);
}

for ($i = 1; $i <= 100; $i++) {
    $output = '';
    if ($i % 3 == 0 && $i % 5 == 0) {
        $output = luas_persegi($i / 3, $i / 5);
    } elseif ($i % 3 == 0) {
        $output = luas_lingkaran($i / 3);
    } elseif ($i % 5 == 0) {
        $output = keliling_lingkaran($i / 5);
    } else {
        $output = $i;
    }
    echo number_format($output, 2) . "<br>";
}
?>