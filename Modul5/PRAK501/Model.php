<html>
    <head>
        <title>Model</title>
    </head>
    </html>
    <?php
    require("./Koneksi.php");

    function readData($nama_tabel)
    {
        $stmt = koneksi()->prepare("SELECT * FROM $nama_tabel");
        $stmt-> execute();
        $result = $stmt-> fetchAll();

        if (!empty($result)) {
            if ($nama_tabel == "member") {
                foreach ($result as $hasil) {
                    echo "<tr>";
                    echo "<td>" . $hasil['id_member'] . "</td>";
                    echo "<td>" . $hasil['nama_member'] . "</td>";
                    echo "<td>" . $hasil['nomor_member'] . "</td>";
                    echo "<td>" . $hasil['alamat'] . "</td>";
                    echo "<td>" . $hasil["tgl_mendaftar"] . "</td>";
                    echo "<td>" . $hasil["tgl_terakhir_bayar"] . "</td>";
                    echo "<td>";
                    echo "<a class='btn btn-primary' href='FormMember.php?id_member=" . $hasil['id_member'] . "'>Edit</a>";
                    echo " ";
                    echo "<a class='btn btn-danger' href='Member.php?id_member=" . $hasil['id_member'] . "' onclick=\"return confirm('Yakin Ingin Dihapus?')\">Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            }

            elseif ($nama_tabel == "buku") {
                foreach ($result as $hasil) {
                    echo "<tr>";
                    echo "<td>" . $hasil['id_buku'] . "</td>";
                    echo "<td>" . $hasil['judul_buku'] . "</td>";
                    echo "<td>" . $hasil['penulis'] . "</td>";
                    echo "<td>" . $hasil['penerbit'] . "</td>";
                    echo "<td>" . $hasil["tahun_terbit"] . "</td>";
                    echo "<td>";
                    echo "<a class='btn btn-primary' href='FormBuku.php?id_buku=" . $hasil['id_buku'] . "'>Edit</a>";
                    echo "  ";
                    echo "<a class='btn btn-danger' href='Buku.php?id_buku=" . $hasil['id_buku'] . "' onclick=\"return confirm('Yakin Ingin Dihapus?')\">Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            }

            elseif ($nama_tabel == "peminjaman") {
                foreach ($result as $hasil) {
                    echo "<tr>";
                    echo "<td>" . $hasil["id_peminjaman"] . "</td>";
                    echo "<td>" . $hasil["tgl_pinjam"] . "</td>";
                    echo "<td>" . $hasil["tgl_kembali"] . "</td>";
                    echo "<td>";
                    echo "<a class='btn btn-primary' href='FormPeminjaman.php?id_peminjaman=" . $hasil['id_peminjaman'] . "'>Edit</a>";
                    echo " ";
                    echo "<a class='btn btn-danger' href='Peminjaman.php?id_peminjaman=" . $hasil['id_peminjaman'] . "' onclick=\"return confirm('Yakin Ingin Dihapus?')\">Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            }
        }
    }

    //Tambah Data
    function insertDataMember($nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar)
    {
        $sql = "INSERT INTO `member` 
        (`nama_member`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES (:nama_member,:nomor_member,:alamat,:tgl_mendaftar,:tgl_terakhir_bayar)";
        $stmt = koneksi()->prepare($sql);
        $result = $stmt->execute(array(':nama_member' => $nama_member, ':nomor_member' => $nomor_member, ':alamat' => $alamat, ':tgl_mendaftar' => $tgl_mendaftar, ':tgl_terakhir_bayar' => $tgl_terakhir_bayar));
        if (!empty($result)) {
            header('location:Member.php');
        }
    }

    function insertDataBuku($judul_buku, $penulis, $penerbit, $tahun_terbit){
        $sql = "INSERT INTO `buku` (`judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES (:judul_buku,:penulis,:penerbit,:tahun_terbit)";
        $stmt = koneksi()->prepare($sql);
        $result = $stmt->execute(array(':judul_buku' => $judul_buku, ':penulis' => $penulis, ':penerbit' => $penerbit, ':tahun_terbit' => $tahun_terbit));
        if (!empty($result)) {
            header('location:Buku.php');
        }
    }

    function insertDataPeminjaman($tgl_pinjam, $tgl_kembali)
    {
        $sql = "INSERT INTO `peminjaman` (`tgl_pinjam`, `tgl_kembali`) VALUES (:tgl_pinjam,:tgl_kembali)";
        $stmt = koneksi()->prepare($sql);
        $result = $stmt->execute(array(':tgl_pinjam' => $tgl_pinjam, ':tgl_kembali'=> $tgl_kembali));

        if (!empty($result)) {
            header('location:Peminjaman.php');
        }
    }

    //Edit Data
    function editMember()
    {
        $stmt = koneksi()->prepare("SELECT * FROM member where id_member=" . $_GET["id_member"]);
        $stmt->execute();
        $GLOBALS['result'] = $stmt->fetchAll();
    }

    function editBuku()
    {
        $stmt = koneksi()->prepare("SELECT * FROM buku where id_buku=" . $_GET["id_buku"]);
        $stmt->execute();
        $GLOBALS['result'] = $stmt->fetchAll();
    }

    function editPeminjaman(){
        $stmt = koneksi()->prepare("SELECT * FROM peminjaman WHERE id_peminjaman =". $_GET['id_peminjaman']);
        $stmt->execute();
        $GLOBALS['result'] = $stmt->fetchAll();
    }

    //Update Data
    function updateMember($id_member, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar)
    {
        $pdo_statement = koneksi()->prepare(
            "UPDATE member SET nama_member='" . $nama_member . "', nomor_member='" . $nomor_member . "', alamat='" . $alamat . "', tgl_mendaftar='" . $tgl_mendaftar . "', tgl_terakhir_bayar='" . $tgl_terakhir_bayar . "' where id_member=" . $id_member
        );
        $result = $pdo_statement->execute();
        if ($result) {
            header('location:Member.php');
        }
    }

    function updateBuku($id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit)
    {
        $pdo_statement = koneksi()->prepare(
            "UPDATE buku SET judul_buku='" . $judul_buku . "', penulis='" . $penulis . "', penerbit='" . $penerbit . "', tahun_terbit='" . $tahun_terbit . "' where id_buku=" . $id_buku
        );
        $result = $pdo_statement->execute();
        if ($result) {
            header('location:Buku.php');
        }
    }

    function updatePeminjaman($id_peminjaman, $tgl_pinjam, $tgl_kembali) 
    {
        $pdo_statement = koneksi()->prepare(
            "UPDATE peminjaman SET tgl_pinjam='" . $tgl_pinjam ."', tgl_kembali='" . $tgl_kembali . "' WHERE id_peminjaman = ". $id_peminjaman
        );
        $result = $pdo_statement->execute();
        if (!empty($result)) {
            header('location:Peminjaman.php');
        }
    }

    //Delete Data
    function deleteMember($id_member)
    {
        $stmt = koneksi()->prepare("DELETE FROM member where id_member=" . $id_member);
        $result = $stmt->execute();
        if ($result) {
            header('location:Member.php');
        }

    }
    function deleteBuku($id_buku)
    {
        $stmt = koneksi()->prepare("DELETE FROM buku where id_buku=" . $id_buku);
        $result = $stmt->execute();
        if ($result) {
            header('location:Buku.php');
        }
    }
    function deletePeminjaman($id_peminjaman)
    {
        $stmt = koneksi()->prepare("DELETE FROM peminjaman WHERE id_peminjaman=" . $id_peminjaman);
        $result = $stmt->execute();
        if ($result) {
            header('location:Peminjaman.php');
        }
    }