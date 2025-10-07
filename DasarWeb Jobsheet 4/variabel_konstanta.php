<?php
    $angka1 = 10;
    $angka2 = 5;
    $hasil = $angka1 + $angka2;
    echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil";

    $benar = true;
    $salah = false;

    echo "Variabel benar : $benar, Variabel salah : $salah<br>";

    //Mendefinisikan konstanta bernilai tetap
    define("Nama_situs","Websiteku.com");
    define("Tahun_Pendirian",2025);

    echo "Selamat datang di " . Nama_situs . ", Situs yang di dirikan pada tahun " . Tahun_Pendirian . ".";
?>