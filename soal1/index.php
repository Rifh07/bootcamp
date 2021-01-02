<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aplikasi Sederhanan Perhitungan Uang Kembalian</title>
</head>
<body>
    <form method="POST" action="">
        <fieldset>
        <legend>Aplikasi Sederhanan Perhitungan Uang Kembalian</legend>
            <input type="number" name="total" placeholder="Total Bayar"><br>
            <input type="number" name="uang" placeholder="Uang di Bayar"> <br>
            <button type="submit"> Submit</button>
        </fieldset>
    </form>
    <fieldset>
        <legend>Hasil</legend>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") :
                $total = $_POST['total'];
                $uang = $_POST['uang'];

                if ($total > $uang) :
                    echo "Tidak Dapat Diproses Karena Uang Kurang";
                else  :
                    $kembalian = $uang-$total;
                    $k100 = $kembalian % 100000;
                    $a = ($kembalian-$k100)/100000;

                    $k50 = $k100 % 50000;
                    $b = ($k100-$k50)/50000;

                    $k20 = $k50 % 20000;
                    $c = ($k50-$k20)/20000;

                    $k10 = $k20 % 10000;
                    $d = ($k20-$k10)/10000;

                    $k5 = $k10 % 5000;
                    $e = ($k10-$k5)/5000;

                    $k2 = $k5 % 2000;
                    $f = ($k5-$k2)/2000;

                    $k1 = $k2 % 1000;
                    $g = ($k2-$k1)/1000;

                    $kgope = $k1 % 500;
                    $h = ($k1-$kgope)/500;

                    $kduaratus = $kgope % 200;
                    $i = ($kgope-$kduaratus)/200;

                    $kcepe = $kduaratus % 100;
                    $j = ($kduaratus-$kcepe)/100;

                    echo "Uang dibayar: Rp.".number_format($uang, 0, ".", ".").
                          "<br>Total dibayar: Rp.".number_format($total, 0, ".", ".").
                          "<br><br>====================<br><br>";
                    if ($a > 0) {echo "Uang Pecahan Rp.100.000 Sebanyak ".$a." Lembar <br>";}
                    if ($b > 0) {echo "Uang Pecahan Rp.50.000 Sebanyak ".$b." Lembar <br>";}
                    if ($c > 0) {echo "Uang Pecahan Rp.20.000 Sebanyak ".$c." Lembar <br>";}
                    if ($d > 0) {echo "Uang Pecahan Rp.10.000 Sebanyak ".$d." Lembar <br>";}
                    if ($e > 0) {echo "Uang Pecahan Rp.5.000 Sebanyak ".$e." Lembar <br>";}
                    if ($f > 0) {echo "Uang Pecahan Rp.2.000 Sebanyak ".$f." Lembar <br>";}
                    if ($g > 0) {echo "Uang Pecahan Rp.1.000 Sebanyak ".$g." Lembar <br>";}
                    if ($h > 0) {echo "Uang Pecahan Rp.500 Sebanyak ".$h." Lembar <br>";}
                    if ($i > 0) {echo "Uang Pecahan Rp.200 Sebanyak ".$i." Lembar <br>";}
                    if ($j > 0) {echo "Uang Pecahan Rp.100 Sebanyak ".$j." Lembar <br>";}

                    echo "<br>====================<br><br>".
                         "Kembalian: $kembalian";
                endif;
            endif;
        ?>
    </fieldset>
</body>
</html>