<?php
function koneksi()
{
    try {
        $dbb = new PDO('mysql:host=localhost;dbname=sistem_perpustakaan', "root", "");
        $dbb->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      }
      catch (PDOException $e) {
        print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
        die();
      }
    return $dbb;
}
?>