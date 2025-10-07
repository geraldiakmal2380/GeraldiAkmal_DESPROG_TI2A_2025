<?php
    $a = 10;
    $b = 5;
    $c = $a +5;
    $d = $b + (10*5);
    $e = $d - $c;

    echo "Variable a : {$a} <br>";
    echo "Variable a : {$b} <br>";
    echo "Variable a : {$c} <br>";
    echo "Variable a : {$d} <br>";
    echo "Variable a : {$e} <br>";
    
    
    
    $nilaiMatematika = 5.1;
    $nilaiIpa = 6.7;
    $nilaiBahasaIndonesia = 9.3;

    $rataRata = ($nilaiMatematika + $nilaiIpa + $nilaiBahasaIndonesia) /3;

    echo "Matematika : {$nilaiMatematika} <br>";
    echo "IPA : {$nilaiIpa} <br>";
    echo "Bahasa Indonesia : {$nilaiBahasaIndonesia} <br>";
    echo "Rata-rata : {$rataRata} <br><br>";

    var_dump($rataRata);

    $apakahSiswaLulus = true;
    $apakahSiswaSudahUjian = false;

    var_dump($apakahSiswaLulus);
    echo"<br>";
    var_dump($apakahSiswaSudahUjian);

    $namaDepan = "Ibnu";
    $namaBelakang = 'Jakaria';

    $namaLengkap = "{$namaDepan} {$namaBelakang}";
    $namaLengkap2 = $namaDepan .' '. $namaBelakang;

    echo "Nama depan : {$namaDepan} <br>";
    echo 'Nama Belakang : '. $namaBelakang . '<br>';

    echo $namaLengkap."<br>";

    $listMahasiswa = ["Wahid abdullah","Elmo Bachtiar","Lendis Fabri"];
    echo $listMahasiswa[0];
?>