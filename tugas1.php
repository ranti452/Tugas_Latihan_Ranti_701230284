<?php

function cekBilangan($angka) {
  if ($angka == 1) {
    return "Bilangan ganjil.<br>";
  } elseif ($angka == 2) {
    return "Bilangan genap sekaligus bilangan prima.<br>";
  } elseif ($angka % 2 == 0) {
    return "Bilangan genap.<br>";
  } else {
    // Cek prima
    $prima = true;
    for ($i = 2; $i <= sqrt($angka); $i++) {
      if ($angka % $i == 0) {
        $prima = false;
        break;
      }
    }
    if ($prima) {
      return "Bilangan ganjil sekaligus bilangan prima.<br>";
    } else {
      return "Bilangan ganjil.<br>";
    }
  }
}

// Loop untuk input dan cek bilangan
for ($i = 1; $i <= 20; $i++) {
  $kategori = cekBilangan($i);
  echo " <li>Angka $i adalah $kategori\n</li>";
}

?>