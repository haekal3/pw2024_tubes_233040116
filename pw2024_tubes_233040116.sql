-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2024 at 08:39 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040116`
--

-- --------------------------------------------------------

--
-- Table structure for table `musik_news`
--

CREATE TABLE `musik_news` (
  `id_musik` int NOT NULL,
  `judul_news` varchar(100) NOT NULL,
  `jurnalis` varchar(100) NOT NULL,
  `hari_tanggal` varchar(50) NOT NULL,
  `konten_news` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `musik_news`
--

INSERT INTO `musik_news` (`id_musik`, `judul_news`, `jurnalis`, `hari_tanggal`, `konten_news`, `gambar`) VALUES
(1, 'JKT48 Resmi Rilis Lagu \'Magic Hour\'', 'Natasa Kumalasah Putri', 'Kamis, 16/05/2024', ' JKT48 telah resmi merilis lagu terbaru mereka bertajuk \"Magic Hour\" pada Kamis (9/5/2024). Musik videonya bahkan masuk jajaran trending di YouTube dan film pendek untuk lagu ini juga berhasil masuk jajaran trending.', 'jkt48magichour.jpeg'),
(2, 'JKT48 Rilis Lagu Langit Biru Cinta Searah, Ada Member Vtuber', 'Chelsea Venda', 'Kamis, 16/05/2024', 'JKT48 akhirnya kembali mengeluarkan special performance video (SPV) bertajuk Langit Biru Cinta Searah. Lagu berjudul asli Aozora Kataomoi yang merupakan single kedua SKE48 itu berhasil dibawakan dengan nuansa baru yang berbeda dari versi orisinalnya. ', 'jkt48langitbiru.jpeg'),
(3, 'Taylor Swift rilis ulang 1989: Kembalinya sebuah mahakarya musik pop', 'Rob Freeman', 'Sabtu, 25/05/2024', 'Taylor Swift mengumumkan bahwa dia akan merilis ulang salah satu album terpopulernya 1989 pada bulan Oktober mendatang.\r\n\r\nSejak 2021, para penggemar musik pop telah dengan semangat mendengarkan album-album sang penyanyi yang direkam ulang, dijuluki “Taylor’s version”, dan telah diputar di berbagai layanan streaming sebanyak lebih dari satu miliar kali — jauh melebihi versi orisinalnya.', 'taylorswift.jpeg'),
(9, 'Konser di GBK, Avenged Sevenfold: Jakarta, Lama Kita Tak Bersua', 'Andika Aditia, Andi Muttya Keteng', 'Minggu, 26/05/2024', 'Grup band Avenged Sevenfold akhirnya kembali menggelar konser di Indonesia setelah terakhir kali pada 2019 atau lima tahun lalu. Avenged Sevenfold tampil di Stadion Madya GBK, Jakarta Pusat, Sabtu (25/5/2024). Membuka konsernya, Matt Shadows, vokalis Avenged Sevenfold, langsung menyapa penggemar yang sudah menanti beberapa tahun. Tak bedanya seperti ribuan penonton yang hadir, personel Avenged Sevenfold pun merasakan rindu yang sama.', 'avenged.jpeg'),
(15, 'Tanggapan Iqbaal Ramadhan Usai Single dan MV Barunya Dicibir Netizen', 'Nurul Amanah', 'Rabu, 29/05/2024', ' Iqbaal Ramadhan sempat menghebohkan publik usai merilis tiga buah single barunya, sebagai penanda kembalinya dia ke industri musik tanah air. Iqbaal Ramadhan pun kembali ke dunia tarik suara dengan menggunakan nama panggung BAALE.  Tiga buah single terbarunya itu adalah Cinta Luka Sempurna, Fortuna, dan Di Bawah Lampu. Iqbaal merilis lagu dengan gaya vintage ala tahun 90-an di lagu-lagunya.  Usai dirilis, lagu dan music video ketiga lagu tersebut pun menuai kritik. Mulai dari suara Iqbaal yang dinilai berbeda dengan biasanya hingga penampilan Iqbaal yang menunggang kuda dan menenteng gitar di punggungnya.', 'iqbaal.jpeg'),
(16, 'Heboh! Alan Walker Temui Guru Musik di Medan, Informasi Selengkapnya di Okezone Update', 'Okezone', 'Kamis, 30/05/2024', 'Kehebohan terjadi di sekolah SMA Al Azhar. Kehebohan tersebut terjadi lantaran DJ internasional Alan Walker, mendadak mengunjungi sekolah itu.    Ya, kedatangan Alan walker lantaran penasaran dengan sosok seorang guru musik bernama Tri Adinata, yang viral karena kerap mengajarkan musik kepada siswa-siswinya dengan lagu-lagu ciptaannya. Di kesempatan itu, Alan Walker nampak menikmati lagu In Your Eyes, yang dinanyikan seorang siswi diiringi gitar. Alan juga sempat berdialog dengan Tri Adinata  Sebelumnya Tri Adinata mengunggah kelas musiknya ke media sosial. Dia mengajar murid-murid dengan lagu-lagu ciptaan Alan Walker, seperti Faded dan mendapat apresiasi oleh Alan Walker.  Seolah terkesima dengan penampilan murid-murid Tri Adinata, Alan mengajak mereka berkolaborasi pada konsernya di Jakarta pada 8 Juni 2024 mendatang.', 'alanwalker.jpeg'),
(25, 'Iwan Fals berusaha jujur dalam membuat musik', 'Vinny Shoffa Salma', 'Kamis, 30/05/2024', 'Musisi Iwan Fals berusaha untuk jujur dalam membuat musik, jujur dalam apa yang dia inginkan maupun dia rasakan.  \"Secara prinsip, saya tetap menjadi diri saya sendiri aja. Walaupun saya masih berproses, tapi saya berusaha untuk jujur, apa yang saya rasakan, apa yang saya inginkan.\"', '665d7f17d8197.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `penyanyi`
--

CREATE TABLE `penyanyi` (
  `id_penyanyi` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `id_musik` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `penyanyi`
--

INSERT INTO `penyanyi` (`id_penyanyi`, `nama`, `genre`, `id_musik`) VALUES
(1, 'JKT48', 'POP', 1),
(2, 'JKT48', 'POP', 2),
(3, 'Taylor Swift', 'POP', 3),
(9, 'Avenged Sevenfold', 'Metal', 9),
(15, 'Iqbaal Ramadhan', 'POP', 15),
(16, 'Alan Walker', 'POP', 16),
(20, 'Iwan Fals', '', 25);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `role`) VALUES
(1, 'haekal', 'haekal123@gmail.com', '$2y$10$Ev7CkBvQ9YEZ4IzIiQ8gaunc0AQ/Fx.kbdjHN8Pdg9fYMZfAwyG.q', 'user'),
(2, 'admin', 'admin@gmail.com', '$2y$10$.aSdxUGzIP0n4FcH7U5bie7LX4qcyKfAc.DSfuAIomjvNRGZ3UhOS', 'user'),
(4, 'firly', 'firly@gmail.com', '$2y$10$1G/4HCslp/e8mJmZENCQ7.NbgcnEqKNQKkfS9CHIrxcK/kIIlEULS', 'user'),
(5, 'renu', 'renu@gmail.com', '$2y$10$JVYqp0CvH1bfiSQs6mm4ZOMXr8onpOpgUPPqyNojHkbudFri48UBy', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musik_news`
--
ALTER TABLE `musik_news`
  ADD PRIMARY KEY (`id_musik`);

--
-- Indexes for table `penyanyi`
--
ALTER TABLE `penyanyi`
  ADD PRIMARY KEY (`id_penyanyi`),
  ADD KEY `id_musik` (`id_musik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `musik_news`
--
ALTER TABLE `musik_news`
  MODIFY `id_musik` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `penyanyi`
--
ALTER TABLE `penyanyi`
  MODIFY `id_penyanyi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penyanyi`
--
ALTER TABLE `penyanyi`
  ADD CONSTRAINT `penyanyi_ibfk_1` FOREIGN KEY (`id_musik`) REFERENCES `musik_news` (`id_musik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
