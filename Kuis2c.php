<?php
// Inisialisasi nilai awal
$nomor_awal = 30; // Angka awal

// Gunakan perulangan do-while untuk menghasilkan deret
do {
echo $nomor_awal . "\n"; // Cetak angka saat ini
$nomor_awal -= 3; // Kurangi angka saat ini sebanyak 3
} while ($nomor_awal >= 0); // Lanjutkan hingga angka saat ini kurang dari 0
?>