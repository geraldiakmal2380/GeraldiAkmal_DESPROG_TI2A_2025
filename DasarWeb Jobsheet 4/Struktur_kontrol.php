<?php
    $nilaiNumerik = 92;

    if($nilaiNumerik >=90 && $nilaiNumerik <=100){
        echo "Nilai huruf : A <br>";
    }elseif($nilaiNumerik >=80 && $nilaiNumerik < 90){
        echo "Nilai Huruf : B<br>" ;
    }elseif($nilaiNumerik >= 70 && $nilaiNumerik <80){
        echo "Nilai Huruf : C<br>" ;
    }elseif($nilaiNumerik <70 ){
        echo "Nilai Huruf : D<br>";
    }

    echo "<br><br>";

    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningktanHarian = 30;
    $hari = 0;

    while ($jarakSaatIni < $jarakTarget){
        $jarakSaatIni += $peningktanHarian;
        $hari++;
    }

    echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer<br>";
    echo "<br><br>";


    $jumlahLahan = 10;
    $tanamanPerLahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;

    for ($i =1;$i <= $jumlahLahan ; $i++){
        $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman); 
    }

    echo "jumlah buah yang akan dipanen adalah : $jumlahBuah<br>";
    
    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;

    foreach($skorUjian as $skor){
        $totalSkor += $skor;
    }

    echo "Total skor ujian adalah : $totalSkor<br>";
    echo "<br>";

    $nilaiMahasiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

    foreach($nilaiMahasiswa as $nilai){
        if ($nilai < 60){
            echo "Nilai : $nilai (tidak lulus) <br>";
            continue;
        }
        echo "Nilai : $nilai (lulus) <br>";
    }
?>