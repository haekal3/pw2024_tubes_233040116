-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2024 at 08:14 PM
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
  `judul_news` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurnalis` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari_tanggal` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten_news` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_penyanyi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `musik_news`
--

INSERT INTO `musik_news` (`id_musik`, `judul_news`, `jurnalis`, `hari_tanggal`, `konten_news`, `gambar`, `id_penyanyi`) VALUES
(1, 'Lirik dan Makna Lagu Magic Hour JKT48, Single Original Ketiga!', 'Acha', 'Kamis, 16/05/2024', 'JKT48 telah merilis single ke-25 mereka bertajuk Magic Hour pada 9 Mei 2024 dengan menggunakan formasi 12 senbatsu. Magic Hour menjadi single orisinal ketiga dari JKT48 setelah Rapsodi (2020) dan Flying High (2022). ', '6665933e3ab60.jpg', 1),
(9, 'Konser di GBK, Avenged Sevenfold: Jakarta, Lama Kita Tak Bersua', 'Andika Aditia, Andi Muttya Keteng', 'Minggu, 26/05/2024', 'Grup band Avenged Sevenfold akhirnya kembali menggelar konser di Indonesia setelah terakhir kali pada 2019 atau lima tahun lalu. Membuka konsernya, Matt Shadows, vokalis Avenged Sevenfold, langsung menyapa penggemar yang sudah menanti beberapa tahun.', 'avenged.jpeg', 9),
(25, 'Iwan Fals berusaha jujur dalam membuat musik', 'Vinny Shoffa Salma', 'Kamis, 30/05/2024', 'Musisi Iwan Fals berusaha untuk jujur dalam membuat musik, jujur dalam apa yang dia inginkan maupun dia rasakan.  \"Secara prinsip, saya tetap menjadi diri saya sendiri aja. Walaupun saya masih berproses, tapi saya berusaha untuk jujur, apa yang saya rasakan, apa yang saya inginkan.\"', '665d7f17d8197.jpeg', 27),
(34, 'Sabrina Carpenter keluarkan single baru', 'Adimas Raditya Fahky P', 'Sabtu, 06/06/2024', 'Penyanyi Amerika, Sabrina Carpenter, melanjutkan peluncuran albumnya yang bertajuk Short nSweet dengan mengeluarkan single baru berjudul Please Please Please. Carpenter', '66614524d6501.jpg', 1),
(35, 'Country music’s tragedy: Latest death continues heartbreaking 2024', 'Brian Linder', 'Minggu, 09/06/2024', 'His recent death at 88 marked another in a growing list of country music contributors who have passed away early in 2024.  Below is a quick look back at the names that that country music world has lost so far this year:  Larry Collins Larry Collins, a former country music child star turned legendary guitarist and song writer, died on Jan. 5.', '6665531f50d98.jpg', 29),
(36, 'Mus Mujiono Taklukkan Tantangan Dingin Jazz Gunung Bromo', 'Ivan Two Putra', 'Minggu, 09/06/2024', 'Mus Mujiono tampil dalam gelaran Jazz Gunung Bromo 2023 hari pertama pada Jumat, 21 Juli. Gitaris legendaris asal Surabaya itu membawakan delapan lagu dengan iringan SweetSwingNoff.  Pria yang akrab dipanggil Om Nono itu membuka penampilannya dengan lagu Puncak Asmara yang diciptakan oleh Oddie Agam.', '6665545a2f94b.jpg', 28),
(37, 'Deep Purple Announce Super Deluxe Edition of Machine Head, Unveil New Mix of Smoke on the Water', 'Spencer Kaufman', 'Minggu, 09/06/2024', 'Deep Purple have announced a Super Deluxe Edition of their classic 1972 album Machine Head, featuring new stereo and Dolby Atmos mixes by Dweezil Zappa. In fact, you can hear Zappa’s new mix of the iconic Smoke on the Water below.  The box set, which arrives March 29th via Rhino, features a vinyl version of the album with Zappa’s new 2024 remix, in addition to three CDs and a Blu-ray audio disc. The first CD contains the original mix and the Zappa mix. The second one features a concert recorded on March 9, 1972, at the Paris Theatre in London.', '666555baaa9a2.jpg', 30),
(38, 'Mengenal Sejarah Musik Blues dan Deretan Musisinya', 'Kumparan.com', 'Minggu, 09/06/2024', 'Sejarah musik blues merupakan salah satu pengetahuan tentang dunia musik yang menarik untuk dipelajari. Musik ini mulai diinisiasi oleh masyarakat Afrika di Amerika. ADVERTISEMENT Kemunculan musik blues didukung dengan adanya banyak musisi yang memilih musik blues sebagai aliran andalannya. Salah satu musisi yang menggunakan musik blues dalam lagu-lagunya adalah W.C Handy.', '66655679cb107.jpg', 31),
(39, 'Karina Christy Hadirkan Nuansa Reggae di Single Kasitau', 'Pohan', 'Minggu, 09/06/2024', 'Penyanyi solo berdarah Bali-Manado, Karina Christy yang sudah mengantongi satu album penuh Circle kembali dengan dua karya baru tahun ini. Pertama adalah single Maybe Some Other Time yang dilepas April lalu dan yang terbaru diberi nama Kasitau.   Lagu Kasitau bercerita tentang fase kehidupan dari mulai usia 12 tahun hingga 30 tahun. Fase yang pasti dilewati seseorang dalam berbagai lini kehidupan, mulai dari romansa remaja, pengalaman bekerja, problematika status pernikahan, hingga perasaan mudah percaya dengan orang lain namun berujung kecewa.', '666557788d865.jpg', 32),
(40, 'Sawig Siap Guncang Musik Hip Hop Indonesia Lewat EP Bertajuk Mogi Rahayu', 'Vania Ika Aldida', 'Minggu, 09/06/2024', 'Rapper muda asal Bali, Satriya Wiguna alias Sawig, siap untuk ikut mewarnai dunia musik tanah air. Tertarik dengan musik hip hop sejak usia 13 tahun dan tumbuh besar di pesisir Kuta, Bali, membuat Sawig dekat dengan musik genre barat.  Ketertarikan awal pada Street Culture Basket dan seni jalanan. Dari situ mulai mendalami dunia hiphop dan juga terinspirasi dari teman sepergaulan. Akhirnya 2015 merilis single pertama berjudul Dont Fu*k With Me yang di produseri Rhigel Ramadhan a.k.a Lapussy di Seminyak, ujarnya.', '666558285dca3.jpeg', 33);

-- --------------------------------------------------------

--
-- Table structure for table `penyanyi`
--

CREATE TABLE `penyanyi` (
  `id_penyanyi` int NOT NULL,
  `genre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyanyi`
--

INSERT INTO `penyanyi` (`id_penyanyi`, `genre`) VALUES
(1, 'Pop'),
(9, 'Metal'),
(20, 'No Genre'),
(27, 'Musik Klasik.'),
(28, 'Jazz.'),
(29, 'Country'),
(30, 'Rock'),
(31, 'Blues'),
(32, 'Reggae'),
(33, 'Hip Hop');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `role`) VALUES
(1, 'haekal', 'haekal123@gmail.com', '$2y$10$Ev7CkBvQ9YEZ4IzIiQ8gaunc0AQ/Fx.kbdjHN8Pdg9fYMZfAwyG.q', 'admin'),
(2, 'admin', 'admin@gmail.com', '$2y$10$.aSdxUGzIP0n4FcH7U5bie7LX4qcyKfAc.DSfuAIomjvNRGZ3UhOS', 'admin'),
(6, 'dafi', 'dafi@gmail.com', '$2y$10$yXnv/LmVm7Wkg3Mi7Gm0Z.XUi7dmOB6/GXjxDoTKNZghuKqaLTyZS', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musik_news`
--
ALTER TABLE `musik_news`
  ADD PRIMARY KEY (`id_musik`),
  ADD KEY `id_penyanyi` (`id_penyanyi`);

--
-- Indexes for table `penyanyi`
--
ALTER TABLE `penyanyi`
  ADD PRIMARY KEY (`id_penyanyi`);

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
  MODIFY `id_musik` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `penyanyi`
--
ALTER TABLE `penyanyi`
  MODIFY `id_penyanyi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `musik_news`
--
ALTER TABLE `musik_news`
  ADD CONSTRAINT `musik_news_ibfk_1` FOREIGN KEY (`id_penyanyi`) REFERENCES `penyanyi` (`id_penyanyi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
