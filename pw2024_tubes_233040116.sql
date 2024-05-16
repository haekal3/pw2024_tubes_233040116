-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2024 at 04:15 PM
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
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jurnalis` varchar(50) NOT NULL,
  `hari & tanggal` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `jurnalis`, `hari & tanggal`, `isi`, `gambar`) VALUES
(1, 'Lagu Baru JKT48, Magic Hour Trending Youtube sampai Viral di TikTok, Inilah Liriknya yang Bikin Relate!', 'Haekal K', 'Rabu, 15/05/2024', 'JKT48 merilis lagu baru berjudul Magic Hour.\r\n\r\nLagu baru tersebut langsung trending di Youtube sampai viral di TikTok saat baru saja dirilis pada 9 Mei 2024.\r\n\r\nInilah lirik lagu baru JKT48, Magic Hour.\r\n\r\nMagic Hour\r\n\r\nDari balik ruang rahasia berbisik memori yang pedih\r\nLabirin hati yang terluka\r\nMenyimpan sebuah misteri\r\n\r\nMantra ini deras telah meracuni\r\nMenyiksa janji yang terkunci\r\nPandora\'s Magic has been set free\r\nWaktu tak terulang kembali, Tick Tock!\r\n\r\nHey, where is your wand!? Abracadabra, it\'s only just a trick\r\nNow you see me, now you don\'t. Show me magic, bring it on\r\nHeart beating fast, my head now feeling light\r\nThe magic hour shines over me\r\n\r\nIngin ku melayang di angkasa bebas tanpa sayap\r\nMenari di panggung langit cakrawala\r\nPenuh keajaiban dalam kemilau matamu\r\nJust open your eyes, see the sky so bright\r\n\r\nIngin ku genggam tanganmu erat menyebrang pelangi\r\nWarna warni melodi di ujung pagi\r\nPenuh keajaiban dalam kecupan bibirmu\r\nJust close your eyes, believe your heart\r\nThe magic will find you\r\n\r\nGelap malam yang panjang pun berganti\r\nPagi yang baru kini bersemi\r\nIndahnya dunia\r\nTunjukkan padaku take me fly away\r\n\r\nIngin ku melayang di angkasa bebas tanpa sayap\r\nMenari di panggung langit cakrawala\r\nPenuh keajaiban dalam kemilau matamu\r\nJust open your eyes, see the sky so bright\r\n\r\nIngin ku genggam tanganmu erat menyebrang pelangi\r\nWarna warni melodi di ujung pagi\r\nPenuh keajaiban dalam kecupan bibirmu\r\nJust close your eyes, believe your heart\r\nThe magic is you', 'jkt-48.jpeg'),
(2, 'Jabat Kapten JKT48, Gracia: Kepercayaan Kali Ini akan Aku Pakai dengan Gracia Versi yang Baru', 'Haekal K', 'Rabu, 15/05/2024', 'Member Generasi 3 Shania Gracia dipercaya menjadi Kapten JKT48 yang ditinggalkan oleh Shani Indira Natio. Tanggung jawab baru yang harus diemban Gracia itu diumumkan saat meet and greet festival Spring Has Come di ICE BSD, Sabtu (11/5).\r\n\r\nMember yang lahir pada 31 Agustus 1999 itu sebelumnya juga pernah dipercaya menjadi Kapten Tim KIII. Kepada JawaPos.com, Gracia menceritakan bagaimana dia akan mengemban tugas barunya itu. Berikut wawancaranya: \r\n\r\nSelamat atas kepercayaan yang diberikan sebagai kapten JKT48. Apa yang kamu rasakan ketika awal tahu menempati posisi itu?', 'gracia.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
