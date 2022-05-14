SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `sistem_perpustakaan`

-- Struktur [buku]

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(500) NOT NULL,
  `penulis` varchar(500) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `tahun_terbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Isi [Buku]

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(1, 'Iron Man', 'Tony Stark', 'Marvel Studios', 2010),
(2, 'Iron Man 2', 'Tony Stark', 'Marvel Studios ', 2011),
(3, 'Captain America', 'Brie Larson', 'Marvel Studios ', 2011),
(4, 'The Incridible Hulk', 'Mark Ruffalo', 'Marvel Studios ', 2008),
(5, 'The Avengers', 'Tony Stark', 'Marvel Studios ', 2013),
(6, 'Iron Man 3', 'Tony Stark', 'Marvel Studios ', 2013),
(7, 'Doctor Strange', 'Bennedict Cumberbatch', 'Marvel Studios ', 2016),
(8, 'Black Panther', 'Josh Button', 'Marvel Studios ', 2018),
(9, 'Ant-Man', 'Kevin', 'Marvel Studios ', 2018),
(10, 'Spider-Man Homecoming', 'Sony Pictures', 'Marvel Studios ', 2017);

-- --------------------------------------------------------

-- Struktur [Member]

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(250) NOT NULL,
  `nomor_member` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_mendaftar` datetime NOT NULL,
  `tgl_terakhir_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Isi [Member]

INSERT INTO `member` (`id_member`, `nama_member`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES
(1, 'Hasan', '08258178317', 'Bahaur', '2022-05-14 12:12:12', '2022-05-20'),
(2, 'Difa', '085726436792', 'Kotabaru 002', '2022-05-14 15:35:46', '2022-05-21'),
(3, 'Manda', '083715372363', 'Banjarmasin 003', '2022-05-14 16:23:45', '2022-05-23');
-- --------------------------------------------------------

-- Struktur [Peminjaman]

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Isi [Peminjaman]

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, '2022-05-015', '2022-05-30'),
(2, '2022-05-15', '2022-05-30'),
(3, '2022-05-15', '2022-05-30');

-- Indexes for table `buku`
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

-- Indexes for table `member`
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

-- Indexes for table `peminjaman`
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

-- AUTO_INCREMENT for table `buku`
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

-- AUTO_INCREMENT for table `member`
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- AUTO_INCREMENT for table `peminjaman`
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;