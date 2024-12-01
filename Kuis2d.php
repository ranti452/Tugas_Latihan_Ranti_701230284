<?php
// Inisialisasi nilai awal
$nomor_awal = 10; // Angka awal

// Gunakan perulangan do-while untuk menghasilkan urutan
do {
echo $nomor_awal. "\n"; // Cetak angka saat ini
$nomor_awal -= 2; // Kurangi angka saat ini sebanyak 2
} while ($nomor_awal >= 0); // Lanjutkan hingga angka saat ini kurang dari 0
?>