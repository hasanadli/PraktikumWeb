<html>
    <head>
        <title>PRAK 305</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="nilai">
            <input type="submit" name="enter" value="submit">
        </form>

        <?php
            if (isset($_POST['enter'])) {
                $kata = $_POST['nilai'];
                $arrayKata = str_split($kata);
                $banyakKata = count($arrayKata);

                foreach ($arrayKata as $key => $value) {
                    for ($i = 0; $i < $banyakKata; $i++) {
                        if ($i == 0) {
                            echo strtoupper($value);
                        } else {
                            echo strtolower($value);
                        }
                    }
                }
            }
        ?>
    </body>
</html>