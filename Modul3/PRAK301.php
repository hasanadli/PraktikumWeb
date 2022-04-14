<html>
    <head>
        <title>PRAK 301</title>
    </head>
    <body>
        <form action="" method="post">
            Jumlah Peserta:
            <input type="text" name="jumlah"><br>
            <input type="submit" name="enter" value="Cetak">
        </form>
    <?php
        if (isset($_POST['enter'])) {
            $peserta = $_POST['jumlah'];
            $nilai = 1;

            while ($nilai <= $peserta) {
                if ($nilai % 2 == 0) {
                    echo "<h1 style=\"color:green\">Peserta ke-$nilai</h1>";
                } else {
                    echo "<h1 style=\"color:red\">Peserta ke-$nilai</h1>";
                }
                $nilai++;
            }
        }
    ?>
    </body>
</html>