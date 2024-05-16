-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2024 at 04:48 PM
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
  `id` int NOT NULL,
  `judul_news` varchar(100) NOT NULL,
  `jurnalis` varchar(100) NOT NULL,
  `hari_tanggal` varchar(50) NOT NULL,
  `konten_news` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_penyanyi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `musik_news`
--

INSERT INTO `musik_news` (`id`, `judul_news`, `jurnalis`, `hari_tanggal`, `konten_news`, `gambar`, `id_penyanyi`) VALUES
(1, 'JKT48 Resmi Rilis Lagu \'Magic Hour\'', 'Natasa Kumalasah Putri', 'Kamis, 16/05/2024', ' JKT48 telah resmi merilis lagu terbaru mereka bertajuk \"Magic Hour\" pada Kamis (9/5/2024). Musik videonya bahkan masuk jajaran trending di YouTube dan film pendek untuk lagu ini juga berhasil masuk jajaran trending.\r\n\r\nSebagai informasi lagu “Magic Hour” menjadi lagu single ke-25 dan single original ke-3 JKT48. Sebelum merilis video musiknya, grup idol ini juga merilis teaser menarik dengan film pendek berkonsep dunia sihir.\r\n\r\nDiketahui, film pendek tersebut terbagi menjadi tiga bagian yang masing-masing memiliki judul sendiri yaitu The Day Dream (4 menit 31 detik), The Midnight Thieves (4 menit 54 detik), dan The New Dawn (7 menit 48 detik).\r\n\r\nKemudian jumlah member yang berhasil terpilih untuk membawakan single original tersebut berjumlah 12 orang dari beberapa generasi. Di antaranya Feni, Gita, Kathrina, Jessi, Gracia, Muthe, Fiony, Adel, Marsha, Christy, Zee, dan Freya.\r\n\r\nSementara, untuk posisi center dalam lagu ini terdapat dua center utama yaitu Marsha dan Zee. Meskipun Zee telah mengumumkan kelulusannya dari JKT48, Zee masih ingin memberikan kontribusinya sebagai member JKT48 dalam lagu ini.\r\n\r\nPengumuman lebih lanjut terkait pertunjukan terakhirnya sebagai member JKT48 juga belum ada informasi tambahan sehingga Zee masih aktif berkarier sebagai personel JKT48 untuk saat ini.', 'jkt48magichour.jpeg', 1),
(2, 'JKT48 Rilis Lagu Langit Biru Cinta Searah, Ada Member Vtuber', 'Chelsea Venda', 'Kamis, 16/05/2024', 'JKT48 akhirnya kembali mengeluarkan special performance video (SPV) bertajuk Langit Biru Cinta Searah. Lagu berjudul asli Aozora Kataomoi yang merupakan single kedua SKE48 itu berhasil dibawakan dengan nuansa baru yang berbeda dari versi orisinalnya.\r\n\r\nTidak lagi dikemas dalam instrumen band yang kental, Langit Biru Cinta Searah versi JKT48 itu justru tampil dengan musik yang clean dan lebih menonjolkan aspek vokal dari para penyanyinya. Aransemennya membuat lagu ini terasa lebih easy listening.\r\n\r\nDelapan member yang membawakan lagu ini, yakni Helisma Putri, Freya Jayawardana, Lulu Salsabila, Cornelia Vanisa, Flora Shafiq, Gabriela Abigail, Greesella Adhalia, Pia Meraleo (JKT48v) memberikan performa yang apik untuk menghidupkan lagu ini.\r\n\r\nMasing-masing member memberikan warna vokal yang unik dan membuat lagu ini punya daya tarik yang berbeda. Terlebih dengan kehadiran Pia Meraleo, member JKT48 virtual berbentuk avatar yang akhirnya ikut terlibat dalam project musik bersama member asli.\r\n\r\nSedari awal, lagu Langit Biru Cinta Searah langsung tampil dengan memikat. Alih-alih memulainya dengan instrumen, seperti yang SKE48 lakukan, JKT48 justru membuka lagu ini denga dengan intro berupa vokal.\r\n\r\nPilihan estetik ini tampak seperti sebuah petunjuk bahwa lagu tersebut punya daya tarik utama di aspek vokal. Setelah musik mulai berdering, para member yang masing-masing berada di belakang stand mic pun satu per satu mulai bernyanyi.\r\n\r\nLulu Salsabila yang belakangan mulai menunjukkan potensinya dalam hal tarik suara sukses membuka lagu ini dengan baik. Greesella Adhalia yang menyambung bait dari Lulu juga tampil dengan suara yang tak kalah menarik. Setelahnya, member saling bergantian mengisi line masing-masing.\r\n\r\nSPV Langit Biru Cinta Searah tampak jadi project yang punya arti spesial bagi para member terpilih. Sebab, JKT48 akhirnya memilih senbatsu (member terpilih untuk membawakan lagu) dengan wajah-wajah yang terbilang baru.\r\n\r\nLulu Salsabila mengaku terharu saat bergabung ke project lagu ini. Dia pun berterima kasih atas kesempatan ini. Dia berharap ke depan makin banyak member yang lebih menunjukkan bakatnya.\r\n\r\nSangat terharu dengan adanya project ini dan apalagi saat dibilang lagunya Aozora Kataomoi. Nangis dikit,” ucap Lulu dalam akun X resminya, dikutip Hypeabis.id, Rabu (27/3/2024).\r\n\r\nPerasaan haru juga menghinggapi Helisma Putri. Dia senang terlibat dalam project ini dan bisa menjadi salah satu member yang memperkenalkan lagu ini dengan warna yang baru.\r\n\r\n“Akhirnya ada kesempatan buat aku dan temen-teman lagi nunjukkin warna suara kita. Bayi-bayiku juga terima kasih yah udah kompak dan seru abis,” imbuhnya.\r\n\r\nGabriela Abigail juga ingin mengucapkan syukur dan terima kasih atas kesempatan yang telah diberikan. Dia berharap lagu ini bisa diterima dengan baik oleh para penggemar. Tak lupa, dia pun meminta dukungan agar dirinya bisa terus tampil dan berkarya.\r\n\r\n“Gimana shengku, suka gak? Mohon dukungannya selalu ya,” ujar member yang karib disapa Ela tersebut.\r\n\r\nSementara itu, Pia Meraleo yang menjadi satu-satunya member JKT48v pun turut membagikan rasa senangnya di media sosial X. Dia mengaku bersyukur karena bisa mendapatkan kesempatan menajlankan project ini.\r\n\r\n“Lagit Biru Cinta Searah will have its own place in my heart,” kata dia. ', 'jkt48langitbiru.jpeg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `penyanyi`
--

CREATE TABLE `penyanyi` (
  `id_penyanyi` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `penyanyi`
--

INSERT INTO `penyanyi` (`id_penyanyi`, `nama`, `genre`, `negara`) VALUES
(1, 'JKT48', 'POP', 'Indonesia'),
(2, 'JKT48', 'POP', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musik_news`
--
ALTER TABLE `musik_news`
  ADD PRIMARY KEY (`id`),
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penyanyi`
--
ALTER TABLE `penyanyi`
  MODIFY `id_penyanyi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT;

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
