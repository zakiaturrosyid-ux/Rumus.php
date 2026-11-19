<?php
    echo "<h3>Program PHP - Menghitung Sisi Miring Segitiga</h3>";
    echo "<hr>";

    // Diketahui panjang sisi alas (a) dan tinggi (b)
    $alas = 6;
    $tinggi = 8;

    // Menghitung sisi miring menggunakan fungsi sqrt() dan pow()
    $sisi_miring = sqrt(pow($alas, 2) + pow($tinggi, 2));

    echo "Panjang Alas (a) = " . $alas . " cm<br>";
    echo "Tinggi Segitiga (b) = " . $tinggi . " cm<br>";
    echo "<b>Sisi Miring (c) = " . $sisi_miring . " cm</b>";
?>