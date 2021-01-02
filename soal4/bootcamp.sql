-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2021 pada 14.33
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bootcamp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hero`
--

CREATE TABLE `hero` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_role` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hero`
--

INSERT INTO `hero` (`id`, `name`, `id_role`, `image`, `deskripsi`) VALUES
(1, 'Kadita', 5, 'kadita.jpg', 'Kadita merupakan hero tipe mage yang menggunakan kekuatan ombak untuk menggempur musuh-musuhnya. Kabar kemunculan hero yang satu ini memang sempat menjadi perbincangan hangat di tengah para pemain ML di tanah air. Pasalnya Kadita merupakan karakter hero yang terinspirasi dari tokoh legenda penguasa pantai selatan yang cukup terkenal dan ditakuti masyarakat Indonesia, yaitu Nyi Roro Kidul.'),
(2, 'Yi Sun Shin', 1, 'yisunsin.jpg', 'Yi Sun Shin sendiri merupakan seorang tokoh militer dan pahlawan nasional Korea pada masa Dinasti Joseon. Yi Sun Shin sendiri terkenal dengan perahu perang berbentuk kura-kura berlapis besi. '),
(3, 'Chou', 4, 'chou.jpg', 'Chou merupakan karakter hero yang terinspirasi dari pemain film sekaligus ahli bela diri Jeet Kune Do, Bruce Lee. Gaya bertarungnya yang tengil serta suara erangan saat menghajar musuh memang dapat mengobati kerinduan para penggemar pada legenda kungfu di era 80-an tersebut.'),
(4, 'Sun', 4, 'sun.jpg', 'Sun merupakan siluman kera yang terkenal dengan kemampuan uniknya dalam menduplikasi diri. Sun sendiri adalah hero tipe fighter yang kerap dihindari lawannya dalam permainan. Selain mampu memperbanyak diri, ia juga dapat memberikan serangan mematikan yang bertubi-tubi dengan tongkat saktinya.'),
(5, 'Lancelot', 2, 'lancelot.jpg', 'Lancelot sendiri merupakan karakter yang terinspirasi dari bangsawan bernama Sir Lancelot du Lac. Ia adalah seorang Ksatria Meja Bundar dalam legenda Arthurian. Lancelot sendiri digambarkan sebagai sosok sahabat serta prajurit terbaik dari King Arthur.'),
(6, 'Badang', 4, 'badang.jpg', 'Badang dikenal sebagai salah satu tokoh legenda masyarakat yang memiliki kesaktian luar biasa. Dalam game ia ditakuti karena serangan tinju mendadak yang dimilikinya. Serangan itu pula yang menjadi kekuatannya dalam melumpuhkan lawan. Hal tersebut kerap diantisipasi oleh setiap para pemain.'),
(7, 'Lapu-lapu', 1, 'lapu-lapu.jpg', ' Lapu-lapu terinspirasi dari sosok kepala suku dari pulau Mactan di Filipina pada tahun 1491 hingga 1542. Lapu-lapu sendiri dikenal sebagai pahlawan nasional Filipina. Sosoknya dikenal sebagai orang yang menentang invasi Spanyol. Keberaniannya dalam melawan penjajah memang membuat namanya cukup disegani. Dalam gamenya sendiri Lapu-lapu termasuk hero yang sulit untuk ditumbangkan. Ia bahkan sanggup melawan musuh hanya dengan seorang diri.'),
(8, 'Zilong', 4, 'zilong.jpg', 'Zilong merupakan seorang jenderal pemberani yang hidup di masa pemerintahan Dinasti Han akhir dan era tiga kerajaan awal. Ia merupakan sosok legenda terkenal yang tergabung dalam Lima Jenderal Macan di bawah komando Liu Bei. Di negaranya sendiri Zhao Yun dikenal sebagai seorang pahlawan.'),
(9, 'Gatot Kaca', 3, 'gatotkaca.jpg', 'Gatot Kaca merupakan salah satu tokoh pewayangan dari cerita Mahabaratha yang cukup terkenal di tanah air. Sosoknya digambarkan sebagai seorang yang memiliki kekuatan dahsyat serta memiliki kemampuan untuk terbang. Masyarakat Indonesia sendiri mengenal sosok Gatot Kaca dengan julukan ‘otot kawat tulang besi”.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Marksman'),
(2, 'Assassin'),
(3, 'Tank'),
(4, 'Fighter '),
(5, 'Mage');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`id_role`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hero`
--
ALTER TABLE `hero`
  ADD CONSTRAINT `role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
