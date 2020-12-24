-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Des 2020 pada 08.05
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikan`
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
(1, 'admin', 'aries@gmail.com', 'ariesdis', '', '', '10-10-2020', 2),
(2, 'juni', 'arie@gmail.com', '12345678', '', '', '', 2),
(3, 'asep', 'asep@gmail.com', '12345678', '', '', '', 3),
(4, 'Teddy Discus', 'null', '12345678', '08561300330', 'Jl. Pelita Guru Rt 01 RW 05 No. 74 - 75 Kp. Kandang Panjang Tajur Halang, Bogor', '15-12-2020', 1),
(5, 'Arie Sarsono B', '', '12345678', ' 0811110228', 'Jln Panorama III Blok D No 70 Sindangbarang Kavling -Bogor', '15-12-2020', 1),
(6, 'agus', 'null1', '12345678', '081385816388', 'jln ardio gg 7 bogor', '15-12-2020', 1),
(7, 'Ismail Ganu', 'null2', '12345678', '085692939949', 'jln. Melar salut RT 02 RW 17 No. 121. Cilendek Barat. Kota Bogor', '15-12-2020', 1),
(8, 'Hendri', 'null5', '12345678', '085311619990', 'Jl. Pahlawan, rt02/06, cibadung, kec gunung sindur Bogor 16340', '15-12-2020', 1),
(9, 'Andry', 'null6', '12345678', '087770076679', 'Jl. pasar Ciseeng Kp. Rawa RT 01/04 parigi mekar Kec. Ciseeng', '15-12-2020', 1),
(10, 'Ferdy', 'null3', '12345678', '087711398107 ', 'Jl pan gas no 55 rt 003/001 pemegarsari kec. Parung', '15-12-2020', 1),
(11, 'Asun', 'null4', '12345678', '085777501220', 'Kamp.basmol no.2 Jln.kenangan Rt/rw.05/06 Kel.Kembangan utara Kec.kembangan Jakarta barat\r\n', '15-12-2020', 1),
(12, 'Fay', 'null7', '12345678', '081290123482', 'Jl Jambudipa No 56 Cilebut Timur Sukaraja Bogor', '15-12-2020', 1),
(13, 'Bayu', 'null8', '12345678', ' 085692833855', 'KP Sindangbarang Dana Gg.M Otong Rt 01/01.kel.Pasireurih.kec. Tamansari.Kab.Bogor', '15-12-2020', 1),
(14, 'Hidayat', 'null9', '12345678', '08561801552', 'jl jati 8 Pabuaran Cibinong', '15-12-2020', 1),
(15, 'Fadli', 'null10', '12345678', '081289849606', 'kp.babakan jln.pekapuran Rt06/22 sukatani, Tapos Depok. Maps Sfp Discus', '15-12-2020', 1),
(16, 'Satria', 'null11', '12345678', '081225814466', 'Kp. Curug RT 02/04 No.66 Pakansari Cibinong Kab.Bogor', '15-12-2020', 1),
(17, 'Azka', 'null12', '12345678', '085710049167 ', 'Jl. Gatot kaca Rt 08/03 no. 50DHarjamukti cimanggis depok ', '15-12-2020', 1),
(18, 'Hendra', 'null13', '12345678', '081295093908', 'Kedoya utara no 42 Jakarta barat.\r\n', '15-12-2020', 1),
(19, ' Adhiet', 'null15', '12345678', '6281310418707', 'cipayung, depok\r\n', '15-12-2020', 1),
(20, 'Widi', 'null16', '12345678', '081283997123', 'Jl. H. Dimun, Blok Rosyid, Rt. 005, Rw. O6, Sukamaju, Cilodong, depok.\r\n', '15-12-2020', 1),
(21, 'Edward', 'null17', '12345678', '08161654056', 'Kp. Sidamukti No. 89 RT/RW 08/07 Kel. Sukamaju Kec. Cilodong Depok.\r\n', '15-12-2020', 1),
(22, 'Dafit', 'null18', '12345678', '081213441965', 'Komplek Pertanian Atsiri Permai, Jl.Sedap Malam Raya no. 53, Desa Raga Jaya, Bojong Gede Bogor\r\n', '15-12-2020', 1),
(23, 'Bima Priyo', 'null19', '12345678', '081219402784', 'Perumahan Mutiara Sentosa D 16/17 Keluarahan Pasir Putih, Sawangan, Depok\r\n', '15-12-2020', 1),
(24, 'Arif Hardianto', 'null20', '12345678', '081802909725', 'Puri Artha Sentosa blok B1 no.29 Desa Waringin Jaya Kec. Bojonggede Kab. Bogor\r\n\r\n', '15-12-2020', 1),
(25, 'Liong hendry', 'null21', '12345678', '085100060933', 'Jalan raden saleh no 9, depan gg tk arrahman , samping bank bri karang tengah ciledug 15157', '15-12-2020', 1),
(26, 'Bryan Prasetya', 'null22', '12345678', '0895320370081', 'jalan kyai haji soleh ali, tangerang', '15-12-2020', 1),
(27, 'Ferdiansyah', 'null23', '12345678', '08179915223', 'Perum. Villa Citra Blok A.1/22 Bantarjati, Bogor\r\n\r\n\r\n', '15-12-2020', 1),
(28, 'Wawan', 'null24', '12345678', '081314125111', 'Perumahan Villa Asia B7 no 12 Rt 001/09, Susukan,Bojong Gede', '15-12-2020', 1),
(29, 'Benghan', 'null26', '12345678', '08128597905', 'Jl. Babakan Kulon 1 Rt 03/01 No. 17 Ciseeng Tugu Lele,Bogor Jawa Barat\r\n\r\n', '15-12-2020', 1),
(30, 'XOCI mini farm', 'null27', '12345678', '081283633130', 'jalan pualam VI no 139, kemayoran,jakarta pusat.\r\n', '15-12-2020', 1),
(31, 'GLC RACHEL DISCUS', 'nul31', '12345678', '087888399189', 'perumahan. Green   Lake City. Cluster Asia 6 no.7. Cipondoh.\r\nTangerang', '15-12-2020', 1);

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

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id_harga`, `harga`, `ket`) VALUES
(1, '250.000-400.000', ''),
(2, '300.000-500.000', ''),
(3, '350.000-500.000', ''),
(4, '250.000-300.000', ''),
(5, '400.000-600.000', ''),
(6, '400.000-700.000', ''),
(7, '600.000-800.000', ''),
(8, '500.000-700.000', ''),
(9, '600.000-1.000.000', ''),
(10, '700.000-1.000.000', ''),
(11, '800.000-1.500.000', '');

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
(3, 'artikel');

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
  `id_harga` int(11) NOT NULL,
  `stok` varchar(4) NOT NULL,
  `ket` text NOT NULL,
  `id_toko` int(18) NOT NULL,
  `id_jenis` int(18) NOT NULL,
  `id_reviuw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `file_ktp` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `tgl_buat` text NOT NULL,
  `tgl_acc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `id_akun`, `id`, `nik`, `file_ktp`, `status`, `tgl_buat`, `tgl_acc`) VALUES
(2, 'Rani Strore', 14, 0, '1234567891011121', 'WhatsApp Image 2020-10-15 at 20.44.49.jpeg', 'terima', '22-10-2020', '21-12-2020'),
(3, 'Budi Strore', 12, 0, '1234567891011121', 'daftarbpkp2.PNG', 'terima', '31-10-2020', '21-12-2020'),
(4, 'Udin Discus', 15, 0, '1234567891011121', 'ikan3.png', 'terima', '01-11-2020', '21-12-2020'),
(6, 'CBD Discus', 0, 1, '1234567891011121', 'category-2.jpg', 'terima', '21-12-2020', '21-12-2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `id_level`) VALUES
(1, 'cbddiscus', '', 'CBD Discus', 'cbddiscus@gmail.com', 3),
(2, 'herlambang.angga.21', '', 'Angga Herlambang', 'herlambang.angga.21@gmail.com', 0);

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
  MODIFY `id_akun` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
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
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id_jenis` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `id_produk` int(18) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_toko` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
