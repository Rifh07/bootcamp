<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Medeteksi 3 Nilai Terbesar Dan Tidak Boleh Bilangan Genap Pada Sebuah Array</title>
</head>
<body>
    <fieldset>
    <legend>Medeteksi 3 Nilai Terbesar Dan Tidak Boleh Bilangan Genap Pada Sebuah Array</legend>
        <?php
            $n = array(1,4,6,2,6,8,9,21,20,14,3,6,11,1,1,2,3,4,6,8,9,2,1,5,2,5,6,8,3,2);
            // $n = array(1,2,3,4,5,6,7,8,9);
            echo "Data array: ";
            for ($i=0; $i<count($n); $i++){
                if ($n[$i] % 2 > 0) :
                    $data[] = $n[$i];
                endif;
                echo $n[$i]." ";
            }
            echo "<br>Data array bilangan ganjil: ";

            for ($i=0; $i<count($data); $i++){
                echo $data[$i]." ";
            }

            $ketiga = $pertama = $kedua = PHP_INT_MIN; 
            for ($i=0; $i<count($data); $i ++) { 
                if ($data[$i] > $pertama) 
                { 
                    $ketiga = $kedua; 
                    $kedua = $pertama; 
                    $pertama = $data[$i]; 
                } 
                else if ($data[$i] > $kedua) 
                { 
                    $ketiga = $kedua; 
                    $kedua = $data[$i]; 
                } 
                else if ($data[$i] > $ketiga) {
                    $ketiga = $data[$i]; 
                } 
            }
            
            echo
                "<br><br>Nilai tertinggi pertama: $pertama <br>
                 Nilai tertinggi kedua: $kedua <br>
                 Nilai tertinggi ketiga: $ketiga <br>";
        ?>
    </fieldset>
</body>
</html>