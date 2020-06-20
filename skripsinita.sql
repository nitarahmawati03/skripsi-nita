-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 01:14 PM
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
('BP02', 'P02'),
('BP15', 'P02'),
('BP16', 'P02'),
('BP17', 'P02'),
('BP03', 'P03'),
('BP04', 'P04'),
('BP05', 'P05'),
('BP06', 'P06'),
('BP07', 'P07'),
('BP08', 'P08'),
('BP09', 'P09'),
('BP10', 'P10'),
('BP11', 'P11'),
('BP12', 'P12'),
('BP13', 'P13'),
('BP14', 'P14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_basis_pengetahuan`
--

CREATE TABLE `tb_detail_basis_pengetahuan` (
  `id_detail` varchar(10) NOT NULL,
  `id_gejala` varchar(10) NOT NULL,
  `id_basis_pengetahuan` varchar(10) NOT NULL,
  `bobot` enum('1','3','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_basis_pengetahuan`
--

INSERT INTO `tb_detail_basis_pengetahuan` (`id_detail`, `id_gejala`, `id_basis_pengetahuan`, `bobot`) VALUES
('DB01', 'G01', 'BP01', '1'),
('DB02', 'G02', 'BP01', '1'),
('DB03', 'G03', 'BP01', ''),
('DB04', 'G03', 'BP02', ''),
('DB05', 'G04', 'BP02', ''),
('DB06', 'G05', 'BP03', '5'),
('DB07', 'G06', 'BP03', '5'),
('DB08', 'G07', 'BP03', '5'),
('DB09', 'G08', 'BP03', '1'),
('DB10', 'G09', 'BP03', '1'),
('DB11', 'G10', 'BP04', '1'),
('DB12', 'G11', 'BP04', '5'),
('DB13', 'G12', 'BP04', ''),
('DB14', 'G12', 'BP05', ''),
('DB15', 'G13', 'BP05', ''),
('DB16', 'G14', 'BP05', ''),
('DB17', 'G04', 'BP05', ''),
('DB18', 'G15', 'BP06', '5'),
('DB19', 'G16', 'BP06', '5'),
('DB20', 'G17', 'BP07', ''),
('DB21', 'G18', 'BP07', '5'),
('DB22', 'G19', 'BP07', '5'),
('DB23', 'G13', 'BP08', ''),
('DB24', 'G20', 'BP08', ''),
('DB25', 'G21', 'BP08', '5'),
('DB26', 'G12', 'BP08', ''),
('DB27', 'G22', 'BP09', ''),
('DB28', 'G23', 'BP09', ''),
('DB29', 'G12', 'BP10', ''),
('DB30', 'G24', 'BP10', '1'),
('DB31', 'G25', 'BP11', ''),
('DB32', 'G26', 'BP12', '1'),
('DB33', 'G27', 'BP12', '1'),
('DB34', 'G15', 'BP13', '5'),
('DB35', 'G12', 'BP13', ''),
('DB36', 'G13', 'BP13', ''),
('DB37', 'G28', 'BP14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pemeriksaan`
--

CREATE TABLE `tb_detail_pemeriksaan` (
  `id_detail_pemeriksaan` int(10) NOT NULL,
  `id_pemeriksaan` int(10) NOT NULL,
  `id_gejala` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_pemeriksaan`
--

INSERT INTO `tb_detail_pemeriksaan` (`id_detail_pemeriksaan`, `id_pemeriksaan`, `id_gejala`) VALUES
(71, 29, 'G01'),
(72, 29, 'G02'),
(73, 29, 'G03'),
(74, 30, 'G05'),
(75, 30, 'G11'),
(76, 31, 'G11'),
(77, 31, 'G15'),
(78, 32, 'G11'),
(79, 32, 'G15'),
(80, 33, 'G11'),
(81, 33, 'G15'),
(82, 33, 'G19'),
(83, 33, 'G21'),
(84, 34, 'G11'),
(85, 34, 'G15'),
(86, 34, 'G19'),
(87, 34, 'G21'),
(165, 59, 'G01'),
(166, 59, 'G02'),
(167, 59, 'G03'),
(168, 60, 'G01'),
(169, 60, 'G04'),
(170, 60, 'G09'),
(171, 60, 'G13'),
(172, 61, 'G01'),
(173, 61, 'G04'),
(174, 61, 'G09'),
(175, 61, 'G13'),
(176, 62, 'G01'),
(177, 62, 'G16'),
(178, 63, 'G14'),
(179, 63, 'G28'),
(180, 64, 'G01'),
(181, 64, 'G09'),
(182, 64, 'G21'),
(183, 64, 'G28'),
(184, 65, 'G02'),
(185, 65, 'G04'),
(186, 65, 'G07'),
(187, 65, 'G11'),
(188, 66, 'G01'),
(189, 66, 'G10'),
(190, 66, 'G16'),
(191, 66, 'G23'),
(192, 66, 'G28'),
(193, 67, 'G07'),
(194, 67, 'G23'),
(195, 68, 'G07'),
(196, 68, 'G15'),
(197, 68, 'G23'),
(198, 69, 'G07'),
(199, 69, 'G15'),
(200, 69, 'G23'),
(201, 70, 'G07'),
(202, 70, 'G10'),
(203, 70, 'G14'),
(204, 70, 'G23'),
(205, 70, 'G28'),
(206, 71, 'G01'),
(207, 71, 'G04'),
(208, 71, 'G08'),
(209, 71, 'G13'),
(210, 71, 'G17'),
(211, 71, 'G21'),
(212, 71, 'G25'),
(213, 71, 'G28'),
(214, 72, 'G01'),
(215, 72, 'G04'),
(216, 72, 'G08'),
(217, 72, 'G13'),
(218, 72, 'G17'),
(219, 72, 'G21'),
(220, 72, 'G25'),
(221, 72, 'G28'),
(222, 73, 'G01'),
(223, 73, 'G04'),
(224, 73, 'G07'),
(225, 73, 'G17'),
(226, 74, 'G11'),
(227, 74, 'G17'),
(228, 74, 'G28'),
(229, 75, 'G11'),
(230, 75, 'G19');

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
('G13', 'Badan kurus'),
('G14', 'Berak bercampur darah atau berlendir putih'),
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
  `status` enum('1','2','3','4') NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `tgl_revisi` date DEFAULT NULL,
  `id_pengelola` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemeriksaan`
--

INSERT INTO `tb_pemeriksaan` (`id_pemeriksaan`, `id_penyakit`, `hasil`, `status`, `tgl_pemeriksaan`, `tgl_revisi`, `id_pengelola`) VALUES
(29, 'P01', '100.00', '1', '2020-06-13', '2020-06-13', NULL),
(30, 'P01', '33.33', '3', '2020-06-15', '2020-06-15', NULL),
(31, 'P06', '50.00', '1', '2020-06-15', '2020-06-15', NULL),
(32, 'P06', '50.00', '1', '2020-06-15', '2020-06-15', NULL),
(33, 'P06', '50.00', '1', '2020-06-15', '2020-06-15', NULL),
(34, 'P06', '50.00', '1', '2020-06-15', '2020-06-15', NULL),
(59, 'P01', '100.00', '1', '2020-06-16', '2020-06-16', NULL),
(60, 'P02', '50.00', '1', '2020-06-18', '2020-06-18', NULL),
(61, 'P05', '50.00', '1', '2020-06-18', '2020-06-18', NULL),
(62, 'P06', '50.00', '1', '2020-06-18', '2020-06-18', NULL),
(63, 'P14', '100.00', '1', '2020-06-18', '2020-06-18', NULL),
(64, 'P14', '100.00', '1', '2020-06-18', '2020-06-18', NULL),
(65, 'P02', '50.00', '1', '2020-06-18', '2020-06-18', NULL),
(66, 'P14', '100.00', '1', '2020-06-18', '2020-06-18', NULL),
(67, 'P09', '50.00', '1', '2020-06-18', '2020-06-18', NULL),
(68, 'P06', '50.00', '1', '2020-06-18', '2020-06-18', NULL),
(69, 'P09', '50.00', '1', '2020-06-18', '2020-06-18', NULL),
(70, 'P14', '100.00', '1', '2020-06-18', '2020-06-18', NULL),
(71, 'P11', '100.00', '1', '2020-06-18', '2020-06-18', NULL),
(72, 'P14', '100.00', '1', '2020-06-18', '2020-06-18', NULL),
(73, 'P02', '50.00', '1', '2020-06-20', '2020-06-20', NULL),
(74, 'P14', '100.00', '1', '2020-06-20', '2020-06-20', NULL),
(75, 'P02', '33.33', '4', '2020-06-20', '2020-06-20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengelola`
--

CREATE TABLE `tb_pengelola` (
  `id_pengelola` int(10) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengelola`
--

INSERT INTO `tb_pengelola` (`id_pengelola`, `username`, `pass`, `nama`) VALUES
(1, 'admin', 'admin', 'Admin'),
(2, 'pakar', 'pakar', 'Pakar');

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
('P10', 'Maloklusi\r\n', 'Maloklusi dapat disebabkan karena makanan yang kurang serat, akibat gigitan anjing atau hewan buas di kepala, atau karena luka kecelakaan/jatuh. Namun kebanyakan maloklusi terjadi karena kekurangan serat yang menyebabkan gigi tidak difungsikan dengan baik. Secara alami, gigi kelinci yang tumbuh secara normal akan bertemu antara gigi atas dan bawah.', 'Penanganan untuk maloklusi adalah dengan pemotongan (trimming) untuk menyamakan bentuk dan ukuran gigi. Pemotongan gigi harus dilakukan dengan kondisi kelinci yang tidak sadar dengan anastesi/pembiusan.'),
('P11', 'Furmites', 'Parasit Cheyletiella hidup dalam hubungan erat dengan lapisan keratin kulit tetapi mereka tidak bersembunyi ke dalam kulit. Hal ini diduga bahwa tungau mungkin ada asymptomatically dalam jumlah kecil pada kelinci sehat. Perkembangan dari telur menjadi tungau dewasa terjadi pada host kelinci yang sama. Betina bertelur dan tongkat mereka untuk rambut sekitar 3 sampai 4 mm di atas kulit. Siklus hidup memakan waktu sekitar 5 minggu di bawah kondisi yang optimal.', 'sering mengganti alas dasar, dicukur, diberi bedak kutu, dan dimandikan, menggunakan alkohol bisa membantu jika tdk ada luka terbuka dan cukup efektif\r\n'),
('P12', 'Radang Mata', 'Penyebab radang mata pada kelinci bisa karena bakteri, debu, asap atau benda kecil lainnya. Bisa juga karena kelinci suka menggosok-nggosokkan kepala atau pipinya ke dinding kandang/benda keras hingga mengenai mata. Aktifitas ini umumnya terjadi pada kelinci jantan yang sedang birahi.', 'Mata dibersihkan dengan boorwater menggunakan kapas, diobati dengan tetes mata atau salep mata yang mengandung antibiotik\r\n'),
('P13', 'Hairball', 'Kelinci yang memakan bulunya sendiri atau bulu temannya disebabkan pakan yang diberikan kurang mengandung protein. Kekurangan protein menyebabkan nafsu makan kelinci menjadi rendah sehingga berat badan merosot. Bulu-bulu yang dimakan bisa mengganggu sistem pencernaan kelinci, karena bulu tidak bisa dicerna.', 'Terapi dengan mineral oil 20 PO, obat sembelit/laxative, atau obat hairball untuk kucing (hairball paw gel).'),
('P14', 'Abses', 'Abses atau kelenjar nanah yg terbentuk bisa karena iritasi ringan yg di ikuti oleh terinveksinya kulit oleh bakteri hingga terjadinya peradangan, atau bisa juga terjadi karena terdapatnya lemak jahat pada tubuh kelinci yg tidak dapat terproses oleh darah sehingga menjadi gumpalan lemak kotor yg berasal dari pakan yg biasa hewan tersebut konsumsi. ABSES ini berbentuk seperti cairan berwarna putih kental atau seperti yogurt berwarna putih atau agak kekuningan. ', 'Gunting bulu diatas abses hingga bersih, keluarkan nanahnya dan diberi antibiotik\r\n');

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
  ADD KEY `id_basis_pengetahuan` (`id_basis_pengetahuan`) USING BTREE;

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
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_pengelola` (`id_pengelola`);

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
  MODIFY `id_detail_pemeriksaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  MODIFY `id_pemeriksaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tb_pengelola`
--
ALTER TABLE `tb_pengelola`
  MODIFY `id_pengelola` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_basis_pengetahuan`
--
ALTER TABLE `tb_basis_pengetahuan`
  ADD CONSTRAINT `tb_basis_pengetahuan_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_basis_pengetahuan`
--
ALTER TABLE `tb_detail_basis_pengetahuan`
  ADD CONSTRAINT `tb_detail_basis_pengetahuan_ibfk_1` FOREIGN KEY (`id_basis_pengetahuan`) REFERENCES `tb_basis_pengetahuan` (`id_basis_pengetahuan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_basis_pengetahuan_ibfk_2` FOREIGN KEY (`id_gejala`) REFERENCES `tb_gejala` (`id_gejala`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `tb_pemeriksaan_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pemeriksaan_ibfk_2` FOREIGN KEY (`id_pengelola`) REFERENCES `tb_pengelola` (`id_pengelola`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
