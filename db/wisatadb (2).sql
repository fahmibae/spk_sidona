-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 11:17 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wisatadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_pengguna`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE IF NOT EXISTS `wisata` (
`id` int(11) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama_lokasi`, `alamat`, `deskripsi`, `lat`, `lng`, `gambar`) VALUES
(1, 'Taman Goa Sunyaragi', 'Sunyaragi, Kec. Kesambi, Kota Cirebon, Jawa Barat', 'Sejarah berdirinya gua Sunyaragi memiliki dua buah versi, yang pertama adalah berita lisan tentang sejarah berdirinya Gua Sunyaragi yang disampaikan secara turun-temurun oleh para bangsawan Cirebon atau keturunan keraton. Versi tersebut lebih dikenal dengan sebutan versi Carub Kanda. Versi yang kedua adalah versi Caruban Nagari yaitu berdasarkan buku Purwaka Caruban Nagari tulisan tangan Pangeran Kararangen atau Pangeran Arya Carbon tahun 1720. Sejarah berdirinya gua Sunyaragi versi Caruban Nagari adalah yang digunakan sebagai acuan para pemandu wisata gua Sunyaragi. Menurut versi ini, Gua Sunyaragi didirikan tahun 1703 Masehi oleh Pangeran Kararangen, cicit Sunan Gunung Jati. Kompleks Sunyaragi lalu beberapa kali mengalami perombakan dan perbaikan.\r\n\r\nMenurut Caruban Kandha dan beberapa catatan dari Keraton Kasepuhan, Tamansari dibangun karena Pesanggrahan Giri Nur Sapta Rengga berubah fungsi menjadi tempat pemakaman raja-raja Cirebon, yang sekarang dikenal sebagai Astana Gunung Jati. Hal itu dihubungkan dengan perluasan Keraton Pakungwati (sekarang Keraton Kasepuhan Cirebon) yang terjadi pada tahun 1529 M, dengan pembangunan tembok keliling keraton, Siti Inggil, dan lain-lain. Sebagai data perbandingan, Siti Inggil dibangun dengan ditandai candrasengkala Benteng Tinataan Bata yang menunjuk angka tahun 1529 M.', '-6.7364612', '108.5434656', 'gs.jpg'),
(2, 'Keraton Kanoman', 'Jl. Kanoman', 'Keraton Kanoman didirikan pada tahun 1510 Saka atau 1588 Masehi oleh Sultan Kanoman I yang merupakan keturunan ke-7 dari Sunan Gunung Jati atau Syarief Hidayatullah. Tahun berdirinya tertulis dalam bentuk prasasti yang terdapat pada pintu Pandopa Jinem. Di sana terpahat gambar Surya Sangkala dan Chandra Sangkala yang jika diartikan menjadi matahari (angka 1), wayang darma kusumah (angka 5), bumi (angka 1), dan bintang kemangmang (angkal 0).\r\n\r\nKesultanan Kanoman lahir dari keinginan Sultan Banten Ki Ageung Tirtayasa yang menobatkan dua orang pangeran dari Putra Panembahan Adining Kusuma (Kerajaan Mataram) untuk memerintah di dua kesultanan.\r\nPangeran Badriddin Kartawijaya memerintah di Kesultanan Kanoman dan diberi gelar Sultan Anom. Sementara itu, Pangeran Syamsuddin Martawijaya memerintah di Kesultanan Kasepuhan dengan gelar Sultan Sepuh. Di antara keraton-keraton yang lain, Keraton Kanoman bisa dikatakan sebagai pusat peradaban Kesultanan Cirebon.\r\nDi keraton ini, tersimpan peninggalan-peninggalan bersejarah, mulai dari kereta milik keraton, peralatan rumah tangga, hingga senjata-senjata keraton. Salah satu kereta kerajaan yang masih tersimpan di sini adalah Paksi Naga Liman yang berbahan kayu sawo dan dibuat oleh Pangeran Losari pada tahun 1350 Saka atau 1428 Masehi. Kereta Paksi Naga Liman merupakan kereta kebesaran Sunan Gunung Jati, yang memerintah di Kesultanan Cirebon pada tahun 1479 â€“ 1568. Pemberian nama kereta pun berkaitan dengan bentuknya, yaitu gabungan antara paksi (burung), naga, dan liman (gajah) yang memegang senjata berbentuk trisula. Perpaduan bentuk ini juga melambangkan tiga kekuatan, yaitu darat, laut, dan darat, serta menyimbolkan keutuhan wilayah.\r\nKereta lain bernama Jempana, merupakan kereta kebesaran permaisuri yang ukirannya bermotif batik Cirebon. Kereta ini juga berbahan kayu sawo dan dirancang serta dibuat pada tahun 1428 Masehi, atas arahan Pangeran Losari. Di bagian lagi keraton, terdapat singgasana Sri Sultan yang terbuat dari gading dan sudah berusia lebih dari 700 tahun. Kursi kebesaran ini digunakan pada awal pemerintahan Kesultanan Cirebon hingga masa pemerintahan Sri Sultan Kanoman ke-8. ', '-6.7223931', '108.5678240', 'kk.jpg'),
(3, 'Makam Sunan Gunung Jati Cirebon', 'Blok parid tengah RT.13 RW.04 No. 81, Astana, Kec. Gunungjati, Kab. Cirebon', 'Cirebon memiliki keterkaitan sejarah penyebaran agama Islam di Indonesia, khususnya pulau Jawa. Salah satu dari sembilan tokoh (wali sanga) penyebar agama Islam yang terkenal di Indonesia, yaitu Sunan Gunung Jati atau Syarief Hidayatullah, juga merupakan sultan pertama di Kasultanan Cirebon yang dulu bernama Keraton Pakungwati. Tokoh ini adalah ulama utama yang menyebarkan agama Islam di bagian barat pulau Jawa.\r\nSunan Gunung Jati lahir pada tahun 1450 Masehi, tetapi ada juga yang mengatakan kalau beliau lahir pada tahun 1448 Masehi. Tokoh yang berperan sebagai pemimpin spriritual, sufi, mubalig, dan ulama ini wafat pada tahun 1568, saat usianya mencapai 120 tahun. Beliau kemudian dimakamkan di Desa Astana, Kecamatan Gunung Jati, Kabupaten Cirebon, yang berjarak kira-kira tiga kilometer dari kota Cirebon.\r\nMakam Sunan Gunung Jati berada di sebuah kompleks pemakaman yang terletak di atas lahan seluas lima hektare, dan dibagi menjadi dua kompleks makam. Kompleks utamanya adalah kompleks ', '-6.6722584', '108.5404189', 'sgj.jpg'),
(4, 'Keraton Kesepuhan', 'Jl. Kasepuhan No.43, Kesepuhan, Kec. Lemahwungkuk, Kota Cirebon, Jawa Barat 45114', 'Cirebon merupakan salah satu wilayah di nusantara yang memiliki sejarah panjang kebudayaan Islam. Hal tersebut dapat dilihat dari bangunan Keraton Kasepuhan Cirebon. Berlokasi di Jalan Keraton Kasepuhan No 43, Kelurahan Kasepuhan, Kecamatan Lemahwungkuk, Keraton Kasepuhan sudah berdiri sejak tahun 1529.\r\nPada awal pembangunannya, Keraton Kasepuhan dibangun oleh Pangeran Emas Zainul Arifin dengan maksud untuk memperluas bangunan pesanggerahan Keraton Pangkuwati, yaitu keraton pertama yang berdiri pada tahun 1430 di Kota Cirebon.\r\nKeraton Kasepuhan menempati lahan seluas 25 hektar yang terdiri dari berbagai macam bangunan. Bangunan Siti Hinggil merupakan bangunan pertama atau bangunan paling terdepan saat pengunjung memasuki kawasan keraton.\r\nSiti Hinggil yang berarti tanah yang tinggi disebut juga lemah duwur dalam bahasa Cirebon. Siti Hinggil terbuat dari susunan bata merah dan memiliki gaya arsitektur Majapahit yang mengikuti perkembangan zaman pada saat itu.\r\nDi dalam kompleks Siti H', '-6.7263338', '108.5710061', 'ks.jpg'),
(5, 'Masjid Agung Sang Cipta Rasa', 'Jl. Kasepuhan No.Komplek, Kesepuhan, Kec. Lemahwungkuk, Kota Cirebon, Jawa Barat 45114, Indonesia', 'Tembok merah berdiri rapi dan kokoh di Kompleks Keraton Kasepuhan. Di dalamnya terdapat bangunan menyerupai bentuk limas dengan 3 tingkat di bagian atapnya. Meski terlihat kuno dan tua, namun bangunan ini tetap tangguh meskipun sudah melewati banyak zaman. Inilah masjid bersejarah di Kota Cirebon, Masjid Sang Cipta Rasa.\r\nMasjid Sang Cipta Rasa dibangun pada zaman Sunan Gunung Jati tahun 1408. Saat itu, Sunan Kalijaga dan Raden Sepat ditugaskan untuk menjadi arsitektur dalam pendirian masjid. Lima ratus pekerja dari Majapahit, Demak, dan Cirebon, dikerahkan untuk menyelesaikan pembangunan yang konon dikerjakan hanya dalam rentang waktu semalam. Gaya arsitektur masjid mengambil perpaduan gaya Jawa dan Hindu Majapahit. Hal ini bisa dilihat dari gapura di bagian halaman masjid dan serambi, serta atap masjid yang menyerupai rumah Joglo, yaitu rumah adat masyarakat Jawa. Secara umum, masjid ini mempunyai 9 pintu sebagai jalan masuknya. Satu pintu utama dan delapan di sisi kanan dan kiri. ', '-6.7255523', '108.5700284', 'ma3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
