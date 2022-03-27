<html>
    <head>
        <title>Soal 1</title>
    </head>

    <body>
        <form action="" method="POST">
            <Label for="nilai">Nilai : </Label><input type="number" name="angka"> <br>
            <input type="submit" name="enter" value="Konversi">
        </form>
    </body>
</html>
    <html>
        <body>
        <?php
        if (isset($_POST['enter'])) {
            $angka = $_POST['angka'];
            if ($angka >= 0 && $angka < 1000) {
                if ($angka == 0) {
                    echo "Nol";
                }

                elseif ($angka > 0 && $angka < 10) {
                    echo "satuan";
                } 
                elseif ($angka > 10 && $angka < 20) {
                    echo "belasan";
                } 
                elseif (($angka > 19 && $angka < 100) || $angka == 10) {
                    echo "puluhan";
                } 
                elseif ($angka > 99 && $angka < 1000) {
                    echo "ratusan";
                }
                else{
                    echo "Anda Menginput Melebihi Limit Bilangan";
                }
            }   
        }
        ?>
        </body>
</html>


