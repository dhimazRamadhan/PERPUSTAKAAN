-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2022 at 02:51 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `pengarang`, `deskripsi`, `foto`) VALUES
(16, 'Sepatu Dahlan', ' Khrisna Pabichara', 'Sinopsis Novel Sepatu Dahlan. Resensi novel Sepatu Dahlan ini menceritakan tentang masa kecil Dahlan Iskan sebagai salah satu tokoh besar di Indonesia. Pada novel ini menggunakan sudut pandang orang pertama. Alur yang digunakan maju mundur yang menceritakan tokoh Dahlan dari masa kecil hingga dewasa.', '6587ID_MIZ2012MTH12SD_B.jpg'),
(17, 'Dear Nathan', 'Erisca Febrianti', 'Buku ini bercerita tentang Salma, seorang pelajar dari Bandung yang baru pindah sekolah ke SMA Garuda. Nathan yang notabenenya anak \"bandel\" dan tidak tahu aturan di sekolah, sedangkan Salma merupakan murid dengan sikap terpuji. Perbedaan itu justru saling melengkapi pertemanan mereka dan membuat mereka semakin dekat.', '7622covHTM-026.jpg'),
(18, 'Sang Pemimpi', 'Andrea Hirata', 'Sang Pemimpi yaitu novel kedua dalam tetralogi Laskar Pelangi karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada Juli 2006. Dalam novel ini, Andrea mengeksplorasi hubungan persahabatan selang Ikal dan Arai serta kekuatan mimpi mereka yang bisa membawa dua anak kampung dari Belitong ini bersekolah di luar negeri', '626Sang_Pemimpi_film.jpg'),
(19, 'Negara 5 Menara', 'Ahmad Fuadi', 'Kehidupan enam santri dari enam daerah berbeda yang menuntut ilmu di suatu pondok pesantren menjadi landasan cerita novel ini. Dengan segala lika-liku yang ada, mereka mencari makna yang tersirat di balik kehidupan dan terus merupaya sebaik-baiknya untuk menyebarkan kebermanfaatan.', '25277.-Negeri-5-Menara-300x300.jpg'),
(20, 'Dilan', 'Pidi Baiq', 'Novel \"Dilan : Dia Adalah Dilanku Tahun 1990\" bercerita tentang kisah cinta dua remaja Bandung pada tahun 90an. Berawal dari seorang siswa bernama Dilan yang jatuh cinta dengan siswi pindahan dari SMA di Jakarta bernama Milea. Dilan memiliki beragam cara untuk mendekati dan mencuri perhatian Milea.', '7698ID_MIZ2016MTH03DDADT_B.jpg'),
(21, 'Rindu', 'Tere Liye', 'RINDU. Sebuah novel karya Tere Liye yang menceritakan perjalanan sebuah kapal uap yang mengangkut jamaah haji, dari pelabuhan Makassar menuju Mekkah. Setting waktunya yaitu pada tahun 1938. Kapal uap tersebut berlayar dari pelabuhan Makassar - Surabaya - Semarang - Batavia - Lampung - Bengkulu - Padang - Aceh.', '9953buku-rindu-tere-liye.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman_buku`
--

CREATE TABLE `detail_peminjaman_buku` (
  `id_detail_peminjaman_buku` int(11) NOT NULL,
  `id_peminjaman_buku` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_peminjaman_buku`
--

INSERT INTO `detail_peminjaman_buku` (`id_detail_peminjaman_buku`, `id_peminjaman_buku`, `id_buku`, `qty`) VALUES
(1, 6, 14, 1),
(2, 7, 14, 1),
(3, 8, 16, 1),
(4, 9, 16, 2),
(5, 10, 18, 1),
(6, 11, 17, 1),
(7, 11, 0, 0),
(8, 11, 0, 0),
(9, 12, 17, 1),
(10, 13, 16, 1),
(11, 13, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `kelompok` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kelompok`) VALUES
(7, 'XI TKJ 3', 'TKJ');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_buku`
--

CREATE TABLE `peminjaman_buku` (
  `id_peminjaman_buku` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman_buku`
--

INSERT INTO `peminjaman_buku` (`id_peminjaman_buku`, `id_siswa`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(6, 10, '2021-10-12', '2021-10-19'),
(7, 10, '2021-10-17', '2021-10-24'),
(8, 10, '2021-10-17', '2021-10-24'),
(9, 10, '2021-10-17', '2021-10-24'),
(10, 10, '2021-10-17', '2021-10-24'),
(11, 10, '2021-11-17', '2021-11-24'),
(12, 10, '2022-01-17', '2022-01-24'),
(13, 10, '2022-01-18', '2022-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian_buku`
--

CREATE TABLE `pengembalian_buku` (
  `id_pengembalian_buku` int(11) NOT NULL,
  `id_peminjaman_buku` int(11) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian_buku`
--

INSERT INTO `pengembalian_buku` (`id_pengembalian_buku`, `id_peminjaman_buku`, `tanggal_pengembalian`, `denda`) VALUES
(1, 6, '2021-10-12', 0),
(2, 8, '2021-10-17', 0),
(3, 7, '2021-10-17', 0),
(4, 9, '2021-10-17', 0),
(5, 10, '2021-10-17', 0),
(6, 11, '2021-11-19', 0),
(7, 12, '2022-01-17', 0),
(8, 13, '2022-02-19', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `tanggal_lahir`, `gender`, `alamat`, `username`, `password`, `id_kelas`) VALUES
(6, 'Dhimaz Ramadhan', '2021-10-07', 'L', 'jember', 'dhimaz123', '202cb962ac59075b964b07152d234b70', 7),
(10, 'Dhimaz', '2021-10-05', 'L', 'malang', 'dhimaz', '827ccb0eea8a706c4c34a16891f84e7b', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `detail_peminjaman_buku`
--
ALTER TABLE `detail_peminjaman_buku`
  ADD PRIMARY KEY (`id_detail_peminjaman_buku`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_peminjaman_buku` (`id_peminjaman_buku`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  ADD PRIMARY KEY (`id_peminjaman_buku`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `pengembalian_buku`
--
ALTER TABLE `pengembalian_buku`
  ADD PRIMARY KEY (`id_pengembalian_buku`),
  ADD KEY `id_peminjaman_buku` (`id_peminjaman_buku`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `detail_peminjaman_buku`
--
ALTER TABLE `detail_peminjaman_buku`
  MODIFY `id_detail_peminjaman_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  MODIFY `id_peminjaman_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengembalian_buku`
--
ALTER TABLE `pengembalian_buku`
  MODIFY `id_pengembalian_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_peminjaman_buku`
--
ALTER TABLE `detail_peminjaman_buku`
  ADD CONSTRAINT `detail_peminjaman_buku_ibfk_2` FOREIGN KEY (`id_peminjaman_buku`) REFERENCES `peminjaman_buku` (`id_peminjaman_buku`);

--
-- Constraints for table `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  ADD CONSTRAINT `id_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Constraints for table `pengembalian_buku`
--
ALTER TABLE `pengembalian_buku`
  ADD CONSTRAINT `id_peminjaman_buku` FOREIGN KEY (`id_peminjaman_buku`) REFERENCES `peminjaman_buku` (`id_peminjaman_buku`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `id_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
