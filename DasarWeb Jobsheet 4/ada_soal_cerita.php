<?php
    $array_nilai = [85,92,78,64,90,75,88,79,70,96];
    $PanjangArray=0;

    echo "Array sebelum di urutkan <br>";
    foreach($array_nilai as $nilai){  
        $PanjangArray++;
        echo"$nilai ";
    }
    
    //algoritma bublesort untuk mengurutkan
    echo "<br><br><br>";
    echo "Array Sesudah di urutkan <br>";

    //algotirma bublesort di bawah ini
    for($i=0;$i<$PanjangArray-1;$i++){
        for($j=0;$j<$PanjangArray-1;$j++){
            if($array_nilai[$j] > $array_nilai[$j+1]){
                $temp = $array_nilai[$j];
                $array_nilai[$j] = $array_nilai[$j+1];
                $array_nilai[$j+1] = $temp;
            }
        }
    }
    //print hasil sudah di urutkan
    foreach($array_nilai as $nilai){  
        echo"$nilai ";
    }

    echo "<br><br>";

    echo "2 angka terendah : ";
    echo "$array_nilai[0], ";
    echo "$array_nilai[1]<br><br>"; 

    echo "2 angka tertinggi : ";
    echo "$array_nilai[8], ";
    echo "$array_nilai[9]<br><br>";
    
    //menghitung rata2 dengan foreach
    $loopingke=0;
    $nilaiRata2=0;
    foreach($array_nilai as $nilai ){//foreach untuk menambahkan variable
        if($loopingke > 1 && $loopingke <8 ){
            $nilaiRata2 += $nilai;
        }

        if($loopingke == 9){//setelah looping 9 kali sesuai dengan panjang array awal
            $nilaiRata2 /= 6;//dibagi 6 karena mengecualiakan 2 value paling tinggi dan rendah
            echo "Hasil bagi adalah : $nilaiRata2";
        }
        $loopingke++;
    }
?>