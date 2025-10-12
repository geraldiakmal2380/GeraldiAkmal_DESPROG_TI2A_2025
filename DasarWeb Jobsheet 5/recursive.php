<?php
for($i=1 ; $i <= 25; $i++){
    echo "Perulangan ke-{$i} <br>";
}
echo "<br>";
//menampilkan angka 1-25 dengan fungsi rekursif

function tampilAngka(int $jumlah, int $index = 1){
    echo "Perulangan ke-{$index} <br>";

    if ($index < $jumlah){
        tampilAngka($jumlah, $index +1);
    }
}

tampilAngka(25);
?>