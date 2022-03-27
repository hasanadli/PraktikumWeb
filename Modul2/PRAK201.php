<html>
    <head>
        <title>Soal 1</title>
    </head>

    <body>
    <form action="" method="post">
                Nama 1 : <input type="text" name="name[]"><br>
                Nama 2 : <input type="text" name="name[]"><br>
                Nama 3 : <input type="text" name="name[]"><br>
                <input type="submit" name="submit" value="Urutkan">
        </form>
        
        </body>
</html>

        <?php
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            
            $urut=count($name);
            for($i = 0; $i < $urut; $i++){
                for($j = 0; $j < $urut; $j++){
                    if($name[$i] < $name[$j]){
                        $name1 = $name[$i];
                        $name[$i] = $name[$j];
                        $name[$j] = $name1;
                    }
                }
            }
            foreach($name as $name => $nilai){
            echo "$nilai<br>";
        }    
    }        
?>

