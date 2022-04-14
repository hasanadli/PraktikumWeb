<html>
    <head>
        <title>PRAK 303</title>
    </head>
    <body>
        <form action="" method="post">
            Batas Bawah <br> <input type="text" name="batasBawah"><br>
            Batas Atas <br> <input type="text" name="batasAtas"><br>
            <br>
            <input type="submit" name="enter" value="Cetak">
        </form>

        <?php
            if (isset($_POST['enter'])) {
                $batasBawah = $_POST['batasBawah'];
                $batasAtas = $_POST['batasAtas'];
                do {
                    if (($batasBawah + 7) % 5 == 0) {
                        echo "<img src=\"bintang.png\" height=\"20\" width=\"20\">";
                    } else {
                        echo "$batasBawah ";
                    }
                    $batasBawah++;
                } while ($batasBawah <= $batasAtas);
            }
        ?>
    </body>
</html>