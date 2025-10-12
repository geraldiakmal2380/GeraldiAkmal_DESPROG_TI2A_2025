<?php
    //menentukan menu multi level menggunakan array asosiatif

    $menu = array(
        "Rumah" => "#home",
        "Tentang kami" => array(
            "Tim kami" => "#team",
            "Kisah kami" => "#story",
            "Misi & visi" => "#mission"
        ),
        "Layanan" => array(
            "Pengembangan web" => "#web",
            "Pengembangan seluler" => "#mobile",
            "Optimasi SEO" => "#seo"
        ),
        "kontak" => "#contact"
    );


    //fungsi untuk menampilkan menu
    function displayMenu($menu){
        echo "<ul>";
        foreach ($menu as $key => $value){
            //periksa apakah item menu adalah array (artinya memiliki sub item)
            if (is_array($value)){
                echo "<li> key";
                displayMenu($value);
                echo "</li>";
            }else{
                echo "<li><a href='$value'>$key</a></li>";
            }
        }
        echo"</ul>";
    }
    //panggil fungsi untuk menampilkan menu
    displayMenu($menu);
?>