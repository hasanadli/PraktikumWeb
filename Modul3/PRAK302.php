<html>
    <head>
        <title>PRAK 302</title>
    </head>
    <body>
    <form action="" method="post">
        Tinggi : <input type="text" name="tinggi"> <br>
        Alamat Gambar : <input type="text" name="alamat"> <br>
        <input type="submit" name="enter" value="Cetak">

    </form>
    <?php
        if (isset($_POST['enter'])) {

            $tinggi = $_POST['tinggi'];
            $alamat = $_POST['alamat'];

            $x = 1;
            while ($x <= $tinggi) {
                $y = 1;
                while ($y < $x) {
                    echo str_repeat('&nbsp;', 5);
                    $y++;
                }
                $z = $tinggi;
                while ($z >= $x) {
                    echo '<img src="' . $alamat . '"width = 20 height = 20>';
                    $z--;
                }
                echo '<br>';
                $x++;
            }
        }
    ?>
    </body>
</html>