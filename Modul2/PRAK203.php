<html>
    <head>
        <title>Soal 3</title>
    </head>
    <body>
        <form action="" method="POST">
            Nilai : <input type="text" name="nilai"><br>
            <br>
            Dari : <br>
            <input type="radio" name="suhuDari" value="Celcius"<?php if(isset($_POST["suhuDari"]) && $_POST["suhuDari"] == "Celcius")echo "checked"; ?>> Celcius<br>
            <input type="radio" name="suhuDari" value="Fahrenheit"<?php if(isset($_POST["suhuDari"]) && $_POST["suhuDari"] == "Fahrenheit")echo "checked"; ?>> Fahrenheit<br>
            <input type="radio" name="suhuDari" value="Reamur"<?php if(isset($_POST["suhuDari"]) && $_POST["suhuDari"] == "Reamur")echo "checked"; ?>> Reamur<br>
            <input type="radio" name="suhuDari" value="Kelvin"<?php if(isset($_POST["suhuDari"]) && $_POST["suhuDari"] == "Kelvin")echo "checked"; ?>> Kelvin<br>
            <br>
            Ke : <br>
            <input type="radio" name="suhuKe" value="Celcius"<?php if(isset($_POST["suhuKe"]) && $_POST["suhuKe"] == "Celcius")echo "checked"; ?>> Celcius<br>
            <input type="radio" name="suhuKe" value="Fahrenheit"<?php if(isset($_POST["suhuKe"]) && $_POST["suhuKe"] == "Fahrenheit")echo "checked"; ?>> Fahrenheit<br>
            <input type="radio" name="suhuKe" value="Reamur"<?php if(isset($_POST["suhuKe"]) && $_POST["suhuKe"] == "Reamur")echo "checked"; ?>> Reamur<br>
            <input type="radio" name="suhuKe" value="Kelvin"<?php if(isset($_POST["suhuKe"]) && $_POST["suhuKe"] == "Kelvin")echo "checked"; ?>> Kelvin<br>
            <br>
            <button type="submit">Konversi</button>
            <br>
            <h2 style="padding-top: 10px;">Hasil Konversi : <?php echo rumus() ?></h2>  
        </form>
    </body>
    </html>

    <?php
        function rumus(){
            $hasil = null;
            $nilai = $_POST["nilai"];
            $suhuDari = $_POST["suhuDari"];
            $suhuKE = $_POST["suhuKe"];
                if($suhuDari=="Celcius" && $suhuKE == "Fahrenheit"){
                    $hasil = 9 / 5 * $nilai + 32;
                    return "$hasil °F";
                }elseif($suhuDari == "Celcius" && $suhuKE == "Reamur"){
                    $hasil = 4 / 5 * $nilai;
                    return "$hasil °R";
                }elseif($suhuDari == "Celcius" && $suhuKE == "Kelvin"){
                    $hasil = $nilai + 273.15;
                    return "$hasil °K";
                }elseif($suhuDari == "Fahrenheit" && $suhuKE == "Celcius"){
                    $hasil = 5 / 9 * ($nilai - 32);
                    return "$hasil °C";
                }elseif($suhuDari == "Fahrenheit" && $suhuKE == "Reamur"){
                    $hasil = 4/9*($nilai-32);
                    return "$hasil °R";
                }elseif($suhuDari == "Fahrenheit" && $suhuKE == "Kelvin"){
                    $hasil = 5/9*($nilai-32)+273.15;
                    return "$hasil °K";
                }elseif($suhuDari == "Reamur" && $suhuKE == "Celcius"){
                    $hasil = 5/4*$nilai;
                    return "$hasil °C";
                }elseif($suhuDari == "Reamur" && $suhuKE == "Fahrenheit"){
                    $hasil = 9/4*$nilai+32;
                    return "$hasil °F";
                }elseif($suhuDari == "Reamur" && $suhuKE == "Kelvin"){
                    $hasil = 5/4*$nilai+273.15;
                    return "$hasil °K";
                }elseif($suhuDari == "Kelvin" && $suhuKE == "Celcius"){
                    $hasil = $nilai - 273.15;
                    return "$hasil °C";
                }elseif($suhuDari == "Kelvin" && $suhuKE == "Fahrenheit"){
                    $hasil = 4/5*($nilai-273.15);
                    return "$hasil °F";
                }elseif($suhuDari == "Kelvin" && $suhuKE == "Reamur"){
                    $hasil = 9/5*($nilai - 273.15)+32;
                    return "$hasil °R";
                }else{
                    return "$nilai";
                }
        }
    ?>