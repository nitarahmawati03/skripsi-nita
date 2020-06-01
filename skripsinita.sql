-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 04:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsinita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_basis_pengetahuan`
--

CREATE TABLE `tb_basis_pengetahuan` (
  `id_basis_pengetahuan` varchar(10) NOT NULL,
  `id_penyakit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_basis_pengetahuan`
--

INSERT INTO `tb_basis_pengetahuan` (`id_basis_pengetahuan`, `id_penyakit`) VALUES
('BP01', 'P01'),
('BP02', 'P02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_basis_pengetahuan`
--

CREATE TABLE `tb_detail_basis_pengetahuan` (
  `id_detail` varchar(10) NOT NULL,
  `id_gejala` varchar(10) NOT NULL,
  `id_basis_pengetahuan` varchar(10) NOT NULL,
  `bobot` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_basis_pengetahuan`
--

INSERT INTO `tb_detail_basis_pengetahuan` (`id_detail`, `id_gejala`, `id_basis_pengetahuan`, `bobot`) VALUES
('DBP1', 'G01', 'BP01', 1),
('DBP2', 'G02', 'BP01', 1),
('DBP3', 'G03', 'BP01', 5),
('DBP4', 'G03', 'BP02', 5),
('DBP5', 'G04', 'BP02', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pemeriksaan`
--

CREATE TABLE `tb_detail_pemeriksaan` (
  `id_detail_pemeriksaan` int(10) NOT NULL,
  `id_pemeriksaan` int(10) NOT NULL,
  `id_gejala` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` varchar(10) NOT NULL,
  `gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `gejala`) VALUES
('G01', 'Berdiri dengan posisi membungkuk'),
('G02', 'Daun telinga turun'),
('G03', 'Kotoran encer, berwarna gelap, berlendir'),
('G04', 'Lesu'),
('G05', 'Kelebihan air liur'),
('G06', 'Sesak napas'),
('G07', 'Pembengkakan wajah'),
('G08', 'Memiringkan kepala'),
('G09', 'Penyumbatan saluran air mata'),
('G10', 'Terjadi pada kelinci betina'),
('G11', 'Pembengkakan pada kelenjar susu'),
('G12', 'Nafsu makan berkurang'),
('G13', 'Berak bercampur darah atau berlendir putih'),
('G14', 'Badan kurus'),
('G15', 'Susah berak'),
('G16', 'Kencing sedikit'),
('G17', 'Bersin-bersin'),
('G18', 'Hidung mengeluarkan lendir berwarna jernih atau keruh'),
('G19', 'Mata sembap berair'),
('G20', 'Lemah'),
('G21', 'Pucat'),
('G22', 'Koreng/kerak'),
('G23', 'Gatal-gatal'),
('G24', 'Rambut rontok'),
('G25', 'Gigi memanjang'),
('G26', 'Kelopak atau selaput mata berwarna merah'),
('G27', 'Bulu sekitar mata basah dan kadang-kadang keluar nanah'),
('G28', 'Timbul bengkak dibawah kulit pada bagian dagu leher, dada atau di tempat lain pada tubuh');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemeriksaan`
--

CREATE TABLE `tb_pemeriksaan` (
  `id_pemeriksaan` int(10) NOT NULL,
  `id_penyakit` varchar(10) NOT NULL,
  `hasil` varchar(1000) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengelola`
--

CREATE TABLE `tb_pengelola` (
  `id_pengelola` int(10) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengelola`
--

INSERT INTO `tb_pengelola` (`id_pengelola`, `username`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_penyakit` varchar(10) NOT NULL,
  `nama_penyakit` varchar(1000) NOT NULL,
  `definisi` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_penyakit`, `nama_penyakit`, `definisi`, `solusi`) VALUES
('P01', 'Kembung', 'Penyakit ini bisa menyerang kelinci usia dibawah 2 tahun dan indukan kelinci yang sedang hami atau menyusui', 'diberi pakan daun kacang kering, diberi antibiotik kedalam makanan atau minuman'),
('P02', 'Diare', 'Diare merupakan penyakit pencernaan dan menjadi penyebab kematian paling banyak pada peternakan kelinci. Biasanya penyebab diare ini dikarenakan makanan yang diberikan tidak cocok atau sudah terkontaminasi, terlalu banyak makan hijau-hijauan basah, kondisi kandang yang kotor dan penggunaan obat berbahaya yang tidak sesuai dosis untuk kelinci.', 'diberi antibiotik kedalam makanan atau minuman\r\n'),
('P03', 'Pasteurellosis', 'Pasteurellosis adalah penyakit gangguan pencernaan pada ternak kelinci. Penyebab penyakit pasteurellosis pada kelinci adalah kuman Pasteurella multocida. Penyakit ini sering menyerang kelinci dewasa, baik jantan maupun betina.', 'Selalu membersihkan kandang dari feses/kotoran kelinci dan diberi vaksin'),
('P04', 'Young De Syndrome', 'Penyakit ini terjadi pada kelinci betina yang sedang menyususi. Penyebabnya adalah septicemia akibat mastitis sehingga terjadi pembengkakan pada kelenjar susu atau puting susu. Akibatnya induk kelinci tidak bisa menyusui anaknya dan anak-anak kelinci akan mati karena tidak mendapatkan air susu dari induknya.', 'Pembersihan kandang,  induk kelinci yang terkena Young Doe Syndrome harus di isolasi dulu di kandang terpisah lalu disuntikan dengan Penicilin, Sulfa Strong, Oxylin atau Sulmethonl.\r\n\r\n'),
('P05', 'Koksidiosis', 'Koksidiosis disebabkan oleh protozoa Eimeria Spp yang menyerang hati (hepatik) ataupun pencernaan (intestinal) kelinci. Koksidiosis juga bisa ditularkan dari induk, sehingga muncul pada anaknya pasca sapih. Pada saat masih menyusu, anak kelinci sebenarnya sudah terpapar, tetapi bersifat sub klinis.', 'Sanitasi kandang dan lingkungan, lakukan Karantina terhadap kelinci dengan cara menempatkan kelinci yang sakit di lokasi berbeda dari yang lain sehingga penanganan bisa dilakukan secara khusus dan fokus, membeli obat untuk kelinci di toko khusus hewan. Obat yang di anjurkan adalah jenis obat khusus kelinci yang terjangkit koksidiosis seperti obat yang mengancung sulfa, lakukan pengecekan kondisi kelinci yang sakit secara berkala\r\n'),
('P06', 'Sembelit\r\n', 'Sembelit atau susah buang air besar pada ternak kelinci disebabkan oleh pemberian pakan kering yang tidak seimbang dengan kebutuhan air.', 'memberi air minum sebanyak-banyaknya, makanan hijau, diberi vitamin\r\n'),
('P07', 'Flu/Pilek', 'Penyakit pilek pada kelinci disebabkan oleh virus/bakteri. Meskipun tergolong penyakit ringan dan tidak berbahaya, namun jika tidak segera diobati dapat berakibat fatal. Lingkungan kandang yang lembab/kurang sinar matahari dapat memicu perkembangbiakan virus/bakteri penyebab flu pada kelinci.', 'hidung disemprot larutan antiseptik, kerak yang mengeras dibersihkan dengan air hangat,  dan kelinci penderita flu/pilek diletakkan pada kandang yang lebih hangat\r\n'),
('P08', 'Cacingan\r\n', 'Cacingan pada kelinci disebabkan oleh cacing pita, Toxocara canis, cacing tambang, cacing gelang, Ancylostama caninum, Uncinaria stenochepala dan cacing cambuk. Cacing parasit tersebut kadang keluar bersama feses/kotoran dan dapat menular ke kelinci lainnya.', 'diberi obat cacing, makanan hijau, sanitasi kandang dijaga dengan baik\r\n'),
('P09', 'Scabies', 'Penyakit scabies pada ternak kelinci disebabkan oleh tungau (Darcoptes scabies). Bagian tubuh kelinci yang sering diserang penyakit ini adalah tepi telinga.', 'Kelinci yang terserang diisolasi agar tidak menular pada kelinci lainnya, dicukur bulu dibagian yang terkena kudisan, cuci luka dengan air hangat, dilap kering lalu diberi obat kudis seperti salep belerang, caviam atau scabicid cream\r\n'),
('P10', 'Scabies\r\n', 'Penyakit gudig, kudis atau scabies pada ternak kelinci disebabkan oleh tungau (Darcoptes scabies). Bagian tubuh kelinci yang sering diserang penyakit ini adalah tepi telinga.', 'Dicukur bulu dibagian yang terkena kudisan, cuci luka dengan air hangat, dilap kering lalu diberi obat kudis seperti salep belerang, caviam atau scabicid cream.\r\n'),
('P11', 'Maloklusi\r\n', 'Maloklusi dapat disebabkan karena makanan yang kurang serat, akibat gigitan anjing atau hewan buas di kepala, atau karena luka kecelakaan/jatuh. Namun kebanyakan maloklusi terjadi karena kekurangan serat yang menyebabkan gigi tidak difungsikan dengan baik. Secara alami, gigi kelinci yang tumbuh secara normal akan bertemu antara gigi atas dan bawah.', 'Penanganan untuk maloklusi adalah dengan pemotongan (trimming) untuk menyamakan bentuk dan ukuran gigi. Pemotongan gigi harus dilakukan dengan kondisi kelinci yang tidak sadar dengan anastesi/pembiusan.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_basis_pengetahuan`
--
ALTER TABLE `tb_basis_pengetahuan`
  ADD PRIMARY KEY (`id_basis_pengetahuan`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `tb_detail_basis_pengetahuan`
--
ALTER TABLE `tb_detail_basis_pengetahuan`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_gejala` (`id_gejala`),
  ADD KEY `id_basis_pengetahuan` (`id_basis_pengetahuan`);

--
-- Indexes for table `tb_detail_pemeriksaan`
--
ALTER TABLE `tb_detail_pemeriksaan`
  ADD PRIMARY KEY (`id_detail_pemeriksaan`),
  ADD KEY `id_gejala` (`id_gejala`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `tb_pengelola`
--
ALTER TABLE `tb_pengelola`
  ADD PRIMARY KEY (`id_pengelola`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_pemeriksaan`
--
ALTER TABLE `tb_detail_pemeriksaan`
  MODIFY `id_detail_pemeriksaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  MODIFY `id_pemeriksaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_basis_pengetahuan`
--
ALTER TABLE `tb_basis_pengetahuan`
  ADD CONSTRAINT `tb_basis_pengetahuan_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_basis_pengetahuan`
--
ALTER TABLE `tb_detail_basis_pengetahuan`
  ADD CONSTRAINT `tb_detail_basis_pengetahuan_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `tb_gejala` (`id_gejala`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_basis_pengetahuan_ibfk_2` FOREIGN KEY (`id_basis_pengetahuan`) REFERENCES `tb_basis_pengetahuan` (`id_basis_pengetahuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_pemeriksaan`
--
ALTER TABLE `tb_detail_pemeriksaan`
  ADD CONSTRAINT `tb_detail_pemeriksaan_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `tb_gejala` (`id_gejala`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_pemeriksaan_ibfk_2` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `tb_pemeriksaan` (`id_pemeriksaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD CONSTRAINT `tb_pemeriksaan_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
