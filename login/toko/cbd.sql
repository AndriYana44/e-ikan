-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Des 2020 pada 08.50
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(18) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(8) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_buat` text NOT NULL,
  `id_level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `email`, `password`, `no_hp`, `alamat`, `tgl_buat`, `id_level`) VALUES
(1, 'admin', 'aries@gmail.com', 'ariesdis', '', '', '10-10-2020', 1),
(10, 'juni', 'arie@gmail.com', '12345678', '', '', '', 2),
(11, 'asep', 'asep@gmail.com', '12345678', '', '', '', 3),
(12, 'Budi Raharjo', 'budi@gmail.com', '12345679', '0816110111', 'jln. bogor no. 18', '', 2),
(14, 'rani', 'rani@gmail.com', '12345678', '0816110111', 'jln. pahlawan\r\n', '22-10-2020', 2),
(15, 'udin', 'udin@gmail.com', '12345678', '0816110111', 'jln. cibinong', '01-11-2020', 2),
(16, 'ahmad', 'ahmad1111@gmail.com', '12345678', '083892244296', 'bogor kota', '18-11-2020', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(18) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `file_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL,
  `tgl_posting` text NOT NULL,
  `id_akun` int(18) NOT NULL,
  `id_kategori` int(18) NOT NULL,
  `status` varchar(25) NOT NULL,
  `tgl_acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `file_artikel`, `isi_artikel`, `tgl_posting`, `id_akun`, `id_kategori`, `status`, `tgl_acc`) VALUES
(2, 'Acara Bulanan CBD Discus Community', 'IMG-20201118-WA0027.jpg', 'acara ini dilaksanakan untuk tetap menjaga silahturahmi antar anggota', '18-11-2020', 12, 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(18) NOT NULL,
  `diskon` int(11) NOT NULL,
  `ket` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `diskon`, `ket`) VALUES
(1, 15, 'ayobelanjaDiscus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(11) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id_jenis` int(18) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL,
  `id_kategori` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_produk`
--

INSERT INTO `jenis_produk` (`id_jenis`, `nama_jenis`, `id_kategori`) VALUES
(3, 'White', 2),
(4, 'Brown', 2),
(5, 'Blue', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori` int(18) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Discus'),
(3, 'artikel'),
(4, 'Ikan Hias'),
(5, 'Pakan'),
(6, 'Obat-obatan'),
(7, 'Acessories');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(18) NOT NULL,
  `id_produk` int(18) NOT NULL,
  `id_diskon` int(18) NOT NULL,
  `id_akun` int(18) NOT NULL,
  `jml_item` int(11) NOT NULL,
  `total_pembayaran` int(11) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_akun`
--

CREATE TABLE `level_akun` (
  `id_level` int(2) NOT NULL,
  `level` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level_akun`
--

INSERT INTO `level_akun` (`id_level`, `level`) VALUES
(1, 'Master'),
(2, 'Penjual'),
(3, 'Pembeli');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(18) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `gambar1` text NOT NULL,
  `gambar2` text NOT NULL,
  `gambar3` text NOT NULL,
  `gambar4` text NOT NULL,
  `ukuran` varchar(25) NOT NULL,
  `harga` varchar(12) NOT NULL,
  `stok` varchar(4) NOT NULL,
  `ket` text NOT NULL,
  `id_toko` int(18) NOT NULL,
  `id_jenis` int(18) NOT NULL,
  `id_reviuw` int(11) NOT NULL,
  `id_kategori` int(18) NOT NULL,
  `rayakan` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `ukuran`, `harga`, `stok`, `ket`, `id_toko`, `id_jenis`, `id_reviuw`, `id_kategori`, `rayakan`) VALUES
(1, 'diamond', '', '', '', '', '2', '700.000', '30', 'diterima', 1, 1, 1, 2, 100),
(2, 'Arwana Super Red', '', '', '', '', '10', '2.000.000', '5', 'diterima', 2, 2, 2, 4, 0),
(3, 'Cacing Beku', '', '', '', '', '1', '20.000', '100', '', 3, 3, 3, 5, 0),
(4, 'Acriflavin', '', '', '', '', '2', '15.000', '25', 'ditolak', 4, 4, 4, 6, 0),
(5, 'Lampu LED', '', '', '', '', '5', '100.000', '10', 'diterima', 5, 5, 5, 7, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `publikasi`
--

CREATE TABLE `publikasi` (
  `id_publikasi` int(18) NOT NULL,
  `judul_publikasi` varchar(255) NOT NULL,
  `file_publikasi` text NOT NULL,
  `isi_publikasi` text NOT NULL,
  `tgl_posting` date NOT NULL,
  `id_akun` int(18) NOT NULL,
  `id_kategori` int(18) NOT NULL,
  `status` varchar(25) NOT NULL,
  `tgl_acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id_reviuw` int(11) NOT NULL,
  `jml_reviuw` int(2) NOT NULL,
  `ket` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`id_reviuw`, `jml_reviuw`, `ket`) VALUES
(1, 1, 'Sangat Tidak Baik'),
(2, 2, 'Biasa'),
(3, 3, 'Cukup'),
(4, 4, 'Baik'),
(5, 5, 'Sangat Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_jenis`
--

CREATE TABLE `sub_jenis` (
  `id_sj` int(18) NOT NULL,
  `id_jenis` int(18) NOT NULL,
  `nama_sub` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_jenis`
--

INSERT INTO `sub_jenis` (`id_sj`, `id_jenis`, `nama_sub`) VALUES
(1, 3, 'White Diomand'),
(2, 4, 'Brown Diomand');

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(18) NOT NULL,
  `nama_toko` varchar(150) NOT NULL,
  `id_akun` int(18) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `file_ktp` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `tgl_buat` text NOT NULL,
  `tgl_acc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `id_akun`, `nik`, `file_ktp`, `status`, `tgl_buat`, `tgl_acc`) VALUES
(2, 'Rani Strore', 14, '1234567891011121', 'WhatsApp Image 2020-10-15 at 20.44.49.jpeg', 'terima', '22-10-2020', '25-10-2020'),
(3, 'Budi Strore', 12, '1234567891011121', 'daftarbpkp2.PNG', 'terima', '31-10-2020', '01-11-2020'),
(4, 'Udin Discus', 15, '1234567891011121', 'ikan3.png', '', '01-11-2020', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`) VALUES
(1, 'cbddiscus', '', 'CBD Discus', 'cbddiscus@gmail.com'),
(2, 'herlambang.angga.21', '', 'Angga Herlambang', 'herlambang.angga.21@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `level_akun`
--
ALTER TABLE `level_akun`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `publikasi`
--
ALTER TABLE `publikasi`
  ADD PRIMARY KEY (`id_publikasi`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_reviuw`);

--
-- Indexes for table `sub_jenis`
--
ALTER TABLE `sub_jenis`
  ADD PRIMARY KEY (`id_sj`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id_jenis` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(18) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level_akun`
--
ALTER TABLE `level_akun`
  MODIFY `id_level` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `publikasi`
--
ALTER TABLE `publikasi`
  MODIFY `id_publikasi` int(18) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_reviuw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sub_jenis`
--
ALTER TABLE `sub_jenis`
  MODIFY `id_sj` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
