<?php
    $hargaProduk = 120000;
    $diskonJikaBeliDiAtas100K = 0.2;

    $hargaBayar = $hargaProduk - ($hargaProduk*$diskonJikaBeliDiAtas100K);
    echo "Jadi total Bayar adalah $hargaBayar"
?>