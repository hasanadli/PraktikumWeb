<html>
    <head>
    <title>Form Member</title>
</head>
<body>
	<center>
    <?php 
        require('./Model.php');
        if (isset($_GET['id_member'])) {
            editMember();
        }
    ?>

    <form action="" method="post">
        <label for="nama_member">Nama Member</label><br>
        <input type="text" name="nama_member" id="nama_member" value="<?php if(isset($_GET['id_member']))  echo $result[0]["nama_member"] ?>" required><br><br>

        <label for="nomor_member" >Nomor Member</label><br>
        <input type="text" name="nomor_member" id="nomor_member" value="<?php if(isset($_GET['id_member'])) echo $result[0]["nomor_member"] ?>" required><br><br>

        <label for="alamat" >Alamat</label><br>
        <textarea name="alamat" id="alamat"  required><?php if(isset($_GET['id_member'])) echo $result[0]["alamat"] ?> </textarea><br><br>

        <label for="tgl_mendaftar" >Tanggal Mendaftar</label><br>
        <input type="datetime-local" name="tgl_mendaftar" id="tgl_mendaftar" value ="<?php if(isset($_GET['id_member'])) echo date('Y-m-d\TH:i', strtotime($result[0]["tgl_mendaftar"]))?>" required><br><br>

        <label for="tgl_terakhir_bayar">Tanggal Terakhir bayar</label><br>
        <input type="date" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar" value="<?php if(isset($_GET['id_member'])) echo  $result[0]["tgl_terakhir_bayar"] ?>" required><br><br>

        <?php 
            if (isset($_GET['id_member'])) {
                echo "<button type=\"submit\" name=\"update\"> Update </button>";
            }
            else {
                echo "<button type=\"submit\" name=\"tambah\"> Tambah </button>"; 
            }
        ?>
   		<br><input type="button" value="batalkan" onclick="history.back()">
    </form>

    <?php
        if (isset($_POST['update'])) {
            $tgl_daftar = date('Y-m-d H:i:s', strtotime($_POST['tgl_daftar']));
            updatemember($_GET['id_member'],$_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
        }
        if (isset($_POST['tambah'])) {
            $tgl_daftar = date_create($_POST['tgl_daftar']);
            $tgl_daftar = date_format($tgl_daftar,"Y-m-d H:i:s");
            print_r($_POST);
            insertDataMember( $_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
        }
    ?>

    </center>
</body>
</html>