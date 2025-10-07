<?php
    $daftarNilai = [
        ['alice', 85],
        ['bob',92], 
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],   
    ];

    $rata2Kelas = 0;
    foreach($daftarNilai as $nilai){
        $rata2Kelas += $nilai[1];
    };

    $rata2Kelas /=5;
    echo "Rata - rata kelas adalah $rata2Kelas <br>";

    foreach($daftarNilai as $nilai){
        if($nilai[1] > $rata2Kelas){
            echo "$nilai[0], $nilai[1] Di atas rata2 kelas <br>";
            continue;
        }else{
            echo "$nilai[0], $nilai[1] tidak di atas rata2 kelas <br>";
        }
    }
?>