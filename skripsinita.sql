-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 05:51 PM
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
  `id_gejala` varchar(10) NOT NULL,
  `id_penyakit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bobot`
--

CREATE TABLE `tb_bobot` (
  `id_bobot` int(10) NOT NULL,
  `kriteria` varchar(30) NOT NULL,
  `nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_perhitungan`
--

CREATE TABLE `tb_detail_perhitungan` (
  `id_detail_perhitungan` int(10) NOT NULL,
  `id_perhitungan` int(10) NOT NULL,
  `id_gejala` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` varchar(10) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `id_bobot` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kasus_baru`
--

CREATE TABLE `tb_kasus_baru` (
  `id_kasus_baru` varchar(10) NOT NULL,
  `id_perhitungan` int(10) NOT NULL,
  `id_penyakit` varchar(10) NOT NULL
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
  `definisi` varchar(1000) NOT NULL,
  `solusi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_penyakit`, `nama_penyakit`, `definisi`, `solusi`) VALUES
('P01', 'Kembung', 'Penyakit ini bisa menyerang kelinci usia dibawah 2 tahun dan indukan kelinci yang sedang hami atau menyusui', 'diberi pakan daun kacang kering, diberi antibiotik kedalam makanan atau minuman'),
('P02', 'Diare', 'Penyakit mencret/diare pada ternak kelinci sering dianggap hal yang biasa, padahal mencret bisa menyebabkan kematian. Ternak kelinci yang mengalami mencret jika dibiarkan dapat menyebabkan perut kelinci kembung dan tidak jarang mengakibatkan ternak mati. Penyakit mencret/diare pada kelinci bisa disebabkan oleh pakan yang diberikan. ', 'diberi antibiotik kedalam makanan atau minuman\r\n'),
('P03', 'Pasteurellosis', 'Pasteurellosis adalah penyakit gangguan pencernaan pada ternak kelinci. Penyebab penyakit pasteurellosis pada kelinci adalah kuman Pasteurella multocida. Penyakit ini sering menyerang kelinci dewasa, baik jantan maupun betina.', 'Selalu membersihkan kandang dari feses/kotoran kelinci dan diberi vaksin'),
('P04', 'Young De Syndrome', 'Penyakit ini terjadi pada kelinci betina yang sedang menyususi. Penyebabnya adalah septicemia akibat mastitis sehingga terjadi pembengkakan pada kelenjar susu atau puting susu. Akibatnya induk kelinci tidak bisa menyusui anaknya dan anak-anak kelinci akan mati karena tidak mendapatkan air susu dari induknya.', 'Pembersihan kandang,  induk kelinci yang terkena Young Doe Syndrome harus di isolasi dulu di kandang terpisah lalu disuntikan dengan Penicilin, Sulfa Strong, Oxylin atau Sulmethonl.\r\n\r\n'),
('P05', 'Koksidiosis', 'Koksidiosis disebabkan oleh protozoa Eimeria Spp yang menyerang hati (hepatik) ataupun pencernaan (intestinal) kelinci. Koksidiosis juga bisa ditularkan dari induk, sehingga muncul pada anaknya pasca sapih. Pada saat masih menyusu, anak kelinci sebenarnya sudah terpapar, tetapi bersifat sub klinis.', 'Sanitasi kandang dan lingkungan, lakukan Karantina terhadap kelinci dengan cara menempatkan kelinci yang sakit di lokasi berbeda dari yang lain sehingga penanganan bisa dilakukan secara khusus dan fokus, membeli obat untuk kelinci di toko khusus hewan. Obat yang di anjurkan adalah jenis obat khusus kelinci yang terjangkit koksidiosis seperti obat yang mengancung sulfa, lakukan pengecekan kondisi kelinci yang sakit secara berkala\r\n'),
('P06', 'Sembelit', 'Sembelit atau susah buang air besar pada ternak kelinci disebabkan oleh pemberian pakan kering yang tidak seimbang dengan kebutuhan air.', 'memberi air minum sebanyak-banyaknya, makanan hijau yang mengandung serat tinggi, dan diberi vitamin\r\n'),
('P07', 'Flu/Pilek', 'Penyakit pilek pada kelinci disebabkan oleh virus/bakteri. Meskipun tergolong penyakit ringan dan tidak berbahaya, namun jika tidak segera diobati dapat berakibat fatal. Lingkungan kandang yang lembab/kurang sinar matahari dapat memicu perkembangbiakan virus/bakteri penyebab flu pada kelinci.', 'hidung disemprot larutan antiseptik, kerak yang mengeras dibersihkan dengan air hangat,  dan kelinci penderita flu/pilek diletakkan pada kandang yang lebih hangat\r\n'),
('P08', 'Cacingan', 'Cacingan pada kelinci disebabkan oleh cacing pita, Toxocara canis, cacing tambang, cacing gelang, Ancylostama caninum, Uncinaria stenochepala dan cacing cambuk. Cacing parasit tersebut kadang keluar bersama feses/kotoran dan dapat menular ke kelinci lainnya.', 'Menjaga kebersihan kandang, memberi pakan yang bergizi bersih, dan pemberian obat cacing.'),
('P09', 'Scabies', 'Penyakit scabies pada ternak kelinci disebabkan oleh tungau (Darcoptes scabies). Bagian tubuh kelinci yang sering diserang penyakit ini adalah tepi telinga.', 'Kelinci yang terserang diisolasi agar tidak menular pada kelinci lainnya, dicukur bulu dibagian yang terkena kudisan, cuci luka dengan air hangat, dilap kering lalu diberi obat kudis seperti salep belerang, caviam atau scabicid cream\r\n'),
('P10', 'Maloklusi', 'Maloklusi dapat dengan mudah diamati dari perubahan bentuk gigi yang abnormal.', 'Penanganan untuk maloklusi adalah dengan pemotongan (trimming) untuk menyamakan bentuk dan ukuran gigi. '),
('P11', 'Radang Mata', 'Penyebab radang mata pada kelinci bisa karena bakteri, debu, asap atau benda kecil lainnya. Bisa juga karena kelinci suka menggosok-nggosokkan kepala atau pipinya ke dinding kandang/benda keras hingga mengenai mata. Aktifitas ini umumnya terjadi pada kelinci jantan yang sedang birahi.', 'Mata dibersihkan dengan boorwater menggunakan kapas, diobati dengan tetes mata atau salep mata yang mengandung antibiotik\r\n'),
('P12', 'Hairball', 'Hairball terjadi karena masuknya rambut/bulu kelinci ke dalam saluran pencernaan, kemudian terakumulasi dalam jangka waktu lama hingga mengeras. Hal ini akibat kelinci suka menjilati-jilat tubuh', 'Pemberian Hay/rumput kering juga disarankan untuk menstimulasi gerakan saluran pencernaan sehingga hairball terdorong keluar tubuh.'),
('P13', 'Abses', 'Abses adalah suatu pernimbunan nanah, biasanya terjadi akibat suatu infeksi bakteri. Jika bakteri menyusup kedalam jaringan yang sehat, maka akan terjadi infeksi. Sebagian sel akan mati dan hancur, meninggalkan rongga yang berisi jaringan dan sel – sel yang terinfeksi. ', 'Gunting bulu diatas abses hingga bersih, keluarkan nanahnya dan diberi antibiotik\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perhitungan`
--

CREATE TABLE `tb_perhitungan` (
  `id_perhitungan` int(10) NOT NULL,
  `id_penyakit` varchar(10) NOT NULL,
  `hasil` varchar(1000) NOT NULL,
  `tgl_perhitungan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_basis_pengetahuan`
--
ALTER TABLE `tb_basis_pengetahuan`
  ADD PRIMARY KEY (`id_basis_pengetahuan`),
  ADD KEY `id_gejala` (`id_gejala`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `tb_bobot`
--
ALTER TABLE `tb_bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `tb_detail_perhitungan`
--
ALTER TABLE `tb_detail_perhitungan`
  ADD PRIMARY KEY (`id_detail_perhitungan`),
  ADD KEY `id_perhitungan` (`id_perhitungan`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`),
  ADD KEY `id_bobot` (`id_bobot`);

--
-- Indexes for table `tb_kasus_baru`
--
ALTER TABLE `tb_kasus_baru`
  ADD PRIMARY KEY (`id_kasus_baru`),
  ADD KEY `id_perhitungan` (`id_perhitungan`),
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
-- Indexes for table `tb_perhitungan`
--
ALTER TABLE `tb_perhitungan`
  ADD PRIMARY KEY (`id_perhitungan`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bobot`
--
ALTER TABLE `tb_bobot`
  MODIFY `id_bobot` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_detail_perhitungan`
--
ALTER TABLE `tb_detail_perhitungan`
  MODIFY `id_detail_perhitungan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_perhitungan`
--
ALTER TABLE `tb_perhitungan`
  MODIFY `id_perhitungan` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_basis_pengetahuan`
--
ALTER TABLE `tb_basis_pengetahuan`
  ADD CONSTRAINT `tb_basis_pengetahuan_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `tb_gejala` (`id_gejala`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_basis_pengetahuan_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_perhitungan`
--
ALTER TABLE `tb_detail_perhitungan`
  ADD CONSTRAINT `tb_detail_perhitungan_ibfk_1` FOREIGN KEY (`id_perhitungan`) REFERENCES `tb_perhitungan` (`id_perhitungan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD CONSTRAINT `tb_gejala_ibfk_2` FOREIGN KEY (`id_bobot`) REFERENCES `tb_bobot` (`id_bobot`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kasus_baru`
--
ALTER TABLE `tb_kasus_baru`
  ADD CONSTRAINT `tb_kasus_baru_ibfk_1` FOREIGN KEY (`id_perhitungan`) REFERENCES `tb_perhitungan` (`id_perhitungan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_kasus_baru_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_perhitungan`
--
ALTER TABLE `tb_perhitungan`
  ADD CONSTRAINT `tb_perhitungan_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
