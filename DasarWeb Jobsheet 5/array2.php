<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale = 1>
        <link rel="stylesheet" href="CSS/gaya.css">
        <title>Data Dosen</title>
    </head>
    <body id="Backround-id">
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamada',
                'Domisili' => 'Malang',
                'Jenis_kelamin' => 'Perempuan'
            ];
                        
            echo "<p id=IniWarnaHijau>Nama : {$Dosen ['nama']}</p> <br>";
            echo "<p id=IniWarnaMerah>Domisili : {$Dosen ['Domisili']}</p> <br>";
            echo "<p id=IniWarnaKuning>Jenis kelamin : {$Dosen ['Jenis_kelamin']}</p> <br>";

        ?>
    </body>
</html>