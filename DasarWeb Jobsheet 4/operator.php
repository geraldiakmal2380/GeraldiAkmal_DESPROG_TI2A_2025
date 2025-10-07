<?php
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo "Hasil Tambah : $hasilTambah<br>";
    echo "Hasil Kurang : $hasilKurang<br>";
    echo "Hasil Kali : $hasilKali<br>";
    echo "Hasil Bagi : $hasilBagi<br>";
    echo "Hasil Sisa Bagi : $sisaBagi<br>";
    echo "Hasil pangkat: $pangkat<br>";
    
    echo "<br><br>";
    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "Hasil sama  : $hasilSama<br>";
    echo "Hasil tidak sama  : $hasilSama<br>";
    echo "Hasil kecil  : $hasilSama<br>";
    echo "Hasil besar  : $hasilSama<br>";
    echo "Hasil Lebih kecil sama  : $hasilSama<br>";
    echo "Hasil Lebih besar sama  : $hasilSama<br>";
    echo "<br>";

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "Hasil and : $hasilAnd<br>";
    echo "Hasil and : $hasilOr<br>";
    echo "Hasil and : $hasilNotA<br>";
    echo "Hasil and : $hasilNotB<br>";
    echo "<br><br>";

    $a += $b;

    echo "$"."a += $"."b"." = $a<br>";
    $a -= $b;
    echo "$"."a -= $"."b"." = $a<br>";
    $a *= $b;
    echo "$"."a *= $"."b"." = $a<br>";
    $a /= $b;
    echo "$"."a /= $"."b"." = $a<br>";
    $a %= $b;
    echo "$"."a %= $"."b"." = $a<br>";
    echo "<br><br>";
    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo "$"."hasilIdentik : $hasilIdentik<br>";
    echo "$"."hasilIdentik : $hasilTidakIdentik<br>";

?>
