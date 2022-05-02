<html>
    <head>
        <title>Soal 1</title>
    </head>
    <body>
        <form action="" method="post">
            Panjang : <input type="text" name="tinggi"><br>
            Lebar : <input type="text" name="lebar"><br>
            Nilai : <input type="text" name="nilai"><br>
            <input type="submit" value="Cetak" name="enter">
        </form>

        <?php
            if (isset($_POST['enter'])) {
                $nilaiArr = explode(" ", $_POST['nilai']);
                $arr = array_chunk($nilaiArr, 3);

                if ($_POST['tinggi'] == $_POST['lebar']) {

                    echo "<table align=\"left\" border=\"1\">";
                    for ($i = 0; $i < $_POST['tinggi']; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < $_POST['tinggi']; $j++) {
                            echo "<td>" . $arr[$i][$j] . "</td>";
                        }
                        echo "</tr>";
                    }
                } else {
                    echo "Panjang nilai tidak sesuai dengan ukuran matriks";
                }
            }
        ?>
    </body>
</html