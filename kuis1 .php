<?php
function hitungDiskon($jumlahBayar) {
    $diskon = 0;

    if ($jumlahBayar >= 500000) {
        $diskon = 50;
    } elseif ($jumlahBayar == 250000) {
        $diskon = 12; // Diskon khusus untuk tepat 250.000
    } elseif ($jumlahBayar > 100000) {
        $diskon = 10;
    } elseif ($jumlahBayar == 100000) {
        $diskon = 7; // Diskon khusus untuk tepat 100.000
    } elseif ($jumlahBayar >= 50000) {
        $diskon = 5;
    }

    return $diskon;
}

function totalSetelahDiskon($jumlahBayar) {
    $diskon = hitungDiskon($jumlahBayar);
    $jumlahDiskon = ($diskon / 100) * $jumlahBayar;
    $totalBayar = $jumlahBayar - $jumlahDiskon;

    echo "Total bayar: Rp" . number_format($jumlahBayar, 0, ',', '.') . "<br>";
    echo "Diskon: " . $diskon . "%<br>";
    echo "Jumlah diskon: Rp" . number_format($jumlahDiskon, 0, ',', '.') . "<br>";
    echo "Total setelah diskon: Rp" . number_format($totalBayar, 0, ',', '.') . "<br>";
}

// Contoh penggunaan
$totalBelanja = 250000; // Masukkan total belanja di sini
totalSetelahDiskon($totalBelanja);
?>
