-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 12:52 PM
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
  `bobot` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_basis_pengetahuan`
--

INSERT INTO `tb_detail_basis_pengetahuan` (`id_detail`, `id_gejala`, `id_basis_pengetahuan`, `bobot`) VALUES
('DB01', 'G01', 'BP01', 1),
('DB02', 'G02', 'BP01', 1),
('DB03', 'G03', 'BP01', 5),
('DB04', 'G03', 'BP02', 5),
('DB05', 'G04', 'BP02', 5),
('DB06', 'G05', 'BP03', 3),
('DB07', 'G06', 'BP03', 3),
('DB08', 'G07', 'BP03', 3),
('DB09', 'G08', 'BP03', 1),
('DB10', 'G09', 'BP03', 1),
('DB11', 'G10', 'BP04', 1),
('DB12', 'G11', 'BP04', 3),
('DB13', 'G12', 'BP04', 5),
('DB14', 'G12', 'BP05', 5),
('DB15', 'G13', 'BP05', 5),
('DB16', 'G14', 'BP05', 5),
('DB17', 'G04', 'BP05', 5),
('DB18', 'G15', 'BP06', 3),
('DB19', 'G16', 'BP06', 3),
('DB20', 'G17', 'BP07', 5),
('DB21', 'G18', 'BP07', 3),
('DB22', 'G19', 'BP07', 3),
('DB23', 'G13', 'BP08', 5),
('DB24', 'G20', 'BP08', 5),
('DB25', 'G21', 'BP08', 3),
('DB26', 'G12', 'BP08', 5),
('DB27', 'G22', 'BP09', 5),
('DB28', 'G23', 'BP09', 5),
('DB29', 'G12', 'BP10', 5),
('DB30', 'G24', 'BP10', 1),
('DB31', 'G25', 'BP11', 5),
('DB32', 'G26', 'BP12', 1),
('DB33', 'G27', 'BP12', 1),
('DB34', 'G15', 'BP13', 3),
('DB35', 'G12', 'BP13', 5),
('DB36', 'G13', 'BP13', 5),
('DB37', 'G28', 'BP14', 1);

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
(27, 11, 'G03'),
(28, 11, 'G08'),
(29, 11, 'G14'),
(30, 11, 'G26'),
(31, 11, 'G28'),
(32, 12, 'G01'),
(33, 13, 'G01'),
(34, 14, 'G02'),
(35, 15, 'G01'),
(36, 15, 'G02'),
(37, 16, 'G01'),
(38, 17, 'G01'),
(39, 18, 'G01'),
(40, 19, 'G01'),
(41, 20, 'G01'),
(42, 20, 'G03'),
(43, 21, 'G03'),
(44, 21, 'G04'),
(45, 21, 'G06'),
(46, 21, 'G12'),
(47, 21, 'G13'),
(48, 22, 'G03'),
(49, 22, 'G04'),
(50, 22, 'G06'),
(51, 22, 'G12'),
(52, 22, 'G13'),
(53, 23, 'G03'),
(54, 23, 'G04'),
(55, 23, 'G06'),
(56, 23, 'G12'),
(57, 23, 'G13');

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
  `tgl_pemeriksaan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemeriksaan`
--

INSERT INTO `tb_pemeriksaan` (`id_pemeriksaan`, `id_penyakit`, `hasil`, `tgl_pemeriksaan`) VALUES
(11, 'P02', '44.444444444444', '0000-00-00'),
(12, 'P01', '0', '0000-00-00'),
(13, 'P02', '0', '0000-00-00'),
(14, 'P01', '30', '0000-00-00'),
(15, 'P01', '30', '0000-00-00'),
(16, 'P01', '0', '0000-00-00'),
(17, 'P02', '0', '0000-00-00'),
(18, 'P01', '0', '0000-00-00'),
(19, 'P02', '0', '0000-00-00'),
(20, 'P01', '30', '0000-00-00'),
(21, 'P02', '100', '0000-00-00'),
(22, 'P02', '100', '0000-00-00'),
(23, 'P02', '100', '0000-00-00');

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
  MODIFY `id_detail_pemeriksaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  MODIFY `id_pemeriksaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
  ADD CONSTRAINT `tb_pemeriksaan_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
