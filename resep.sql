-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2024 at 09:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warisanrasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `idresep` int(11) NOT NULL,
  `nama_resep` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `bahan` text DEFAULT NULL,
  `cara_membuat` text DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`idresep`, `nama_resep`, `tanggal`, `deskripsi`, `bahan`, `cara_membuat`, `userid`, `foto`) VALUES
(3, 'Soto Banjar', '2024-12-30', 'Soto Banjar adalah masakan khas dari daerah Banjar, Kalimantan Selatan.', '1 bagian dada ayam\r\n1 bungkus kecil soun (aku pakai merk Naga)\r\n4 butir telur rebus\r\n4 buah perkedel kentang\r\nSecukupnya bawang goreng\r\nSecukupnya daun bawang (aku gak pakai karena gak suka)\r\nBumbu Halus\r\n5 siung bawang merah\r\n3 siung bawang putih\r\n1 butir bawang bombai kecil\r\n1 sdm merica bubuk\r\n1/2 sdt pala bubuk\r\n1/2 ruas jari jahe\r\n1/4 sdt jinten bubuk\r\nBumbu Cemplung\r\n2 buah cengkeh\r\n1 cm kayu manis\r\n3 buah kapulaga\r\n2 buah bunga lawang\r\nSecukupnya garam\r\nSecukupnya kaldu ayam\r\nSecukupnya gula', '1. Didihkan air dan rebus dada ayam hingga matang. Beri sedikit garam sebagai perasa.\r\n2. Sambil menunggu ayam matang, tumis bumbu halus hingga tidak langu (wangi).\r\n3. Angkat dan tiriskan dada ayam yang telah matang. Untuk kemudian kita suwir.\r\n4. Masukan tumisan bumbu halus kedalam air rebusan ayam. Tambahkan bumbu cemplung dan koreksi rasa sesuai selera.\r\n5. Sembari menunggu kuah mendidih, rendam soun dengan air panas selama 2 menit dan tiriskan.\r\n6. Soto Banjar siap dihidangkan sesuai selera keluarga bun. Kalau aku dan suami suka urutan seperti ini:\r\n- Nasi putih\r\n- Soun\r\n- Ayam suwir\r\n- Irisan telur rebus\r\n- Taburan bawang goreng\r\n- Perkedel kentang', 0, ''),
(4, 'Ayam Betutu', '2024-12-30', 'Ayam Betutu itu identik dengan rasa pedasnya, merupakan masakan khas dari Bali.', '1/2 ekor ayam\r\n2 lbr daun salam\r\n250 ml air\r\nBumbu Halus :\r\n1 sdm ketumbar bubuk\r\n5 buah cabe merah keriting\r\n2 buah kemiri\r\n1/2 sdm lada bubuk\r\n1 cm kunyit\r\n1 bks terasi ABC\r\nBumbu Rajang :\r\n100 gr bawang merah\r\n5 siung bawang putih\r\n10 buah cabe merah keriting\r\n2 jempol kencur\r\n2 btg sereh\r\n2 jempol kunyit\r\n2 jempol lengkuas\r\n2 jempol jahe\r\nBahan Pelengkap :\r\n1 sdt gula pasir\r\nsecukupnya Garam dan kaldu bubuk', '1. Cuci bersih ayam\r\n2. Panggang ayam hingga kecoklatan\r\n3. Siapkan bumbu halus\r\n4. Siapkan semua bumbu rajang (saya pake chopper)\r\n5. Tumis bumbu halus, bumbu rajang dan daun salam dengan sedikit minyak hingga harum\r\n6. Masukkan ayam yang telah dipanggang dan baluri dengan bumbu diamkan 5 menit\r\n7.Tambahkan air dan pelengkap lainnya, masak dengan api kecil hingga kuah menyusut dan ayam empuk\r\n8. Sajikan', 0, ''),
(5, 'Rawon', '2024-12-30', 'Rawon merupakan masakan khas Jawa.', '500 gr daging rawon\r\nAir untuk merebus\r\nBumbu di haluskan :\r\n8 butir bawang merah\r\n10 siung bawang putih\r\n6 butir kemiri (sangrai)\r\n1 sdt ketumbar | 1sdt jinten (sangrai)\r\n1 ruas jahe\r\n1 ruas kunyit\r\n1 ruas kencur\r\n5 buah kluwek (kupas) goreng sebentar\r\nBahan cemplung :\r\n3 batang serai\r\n4 lbr daun jeruk\r\n2 lbr daun salam\r\n1 ruas Lengkuas\r\nGula merah secukup nya\r\nsesuai selera Garam\r\n3 sdm sambal lamak\r\nPelengkap :\r\nBawang goreng\r\nTauge\r\nTelur asin\r\nKerupuk melinjo\r\nIrisan daun bawang\r\nIrisan daun seledri\r\nSambal', '1. Rebus daging hingga setengah lunak|angkat lalu Potong daging sesuai selera|Sisihkan.\r\n2. Tumis bumbu halus|daun jeruk|daun salam|lengkuas dan serai hingga harum dan matang tambah kan irisan daging masak hingga bumbu meresap.\r\n3. Masukkan kembali ke dalam air kaldu Masak dengan api kecil hingga daging empuk.\r\n4. Sajikan hangat beserta pelengkap.', 0, ''),
(6, 'Nasi Kuning', '2024-12-30', 'Nasi Kuning merupakan masakan yang memiliki ciri khas tersendiri yaitu berbau harum dan berwarna kuning hasil dari rempah-rempah.', '1 kg beras cuci bersih\r\n1200 ml santan kekentalan sedang dari 1btr kelapa(air sesuaikan jenis berasnya)\r\n5 siung bawang putih, geprek, cincang halus\r\n2 btg sereh, geprek bagian putihnya, buat simpul\r\n2 lmbr daun pandan, buat simpul\r\n6 lmbr daun jeruk, buang tulang daunnya\r\n10 cm kunyit, kupas, parut, beri sedikit air, peras,ambil airnya\r\n2 sdt garam\r\n3 sdm minyak untuk menumis', '1. Panaskan minyak, tumis bawang putih sampai kekuningan bersama daun Pandan, sereh & daun jeruk(disini aku bawang putih dan kunyit dihaluskan/blender. Tp klo dicincang saja,menurutku lebih harum)\r\n2. Masukkan santan, air perasan kunyit dan garam(kunyit aku haluskan bersama bawang putih). Masak perlahan hingga mendidih. Matikan api.\r\n3. Masukkan beras & santan yang sudah berbumbu kedalam wadah rice cooker, masak seperti biasa sampai matang (jika tidak menggunakan rice cooker, masukan beras kedalam santan berbumbu sampai menjadi aron, pindahkan ke dalam kukusan dan kukus sampai matang).\r\n4. Sajikan dengan menu pendampingnya(ayam/telur/ikan masak habang, mie dan taburan bawang goreng sebagai pelengkapnya)', 0, ''),
(7, 'Soto Lamongan', '2024-12-30', 'Soto Lamongan merupakan masakan khas dari Jawa Timur.', '1/2 kilo ayam\r\n6 siung bawang putih\r\n3 siung bawang merah\r\n2 buah kemiri\r\n1 ruas kelingking kunyit\r\n1 ruas kelingking jahe\r\n3 lembar daun jeruk\r\n2 sereh (digeprek)\r\nsecukupnya lada, garam, gula, kaldu bubuk\r\nsecukupnya daun bawang, bawang goreng', '1. Rebus daging dalam air mendidih hingga setengah matang.\r\n2. Haluskan bawang merah, bawang putih, kemiri, kunyit, jahe.\r\n3. Tumis bumbu halus bersama dengan sereh dan daun jeruk hingga harum.\r\n4. Masukkan tumisan bumbu ke dalam rebusan daging yang sudah setengah matang, masak hingga air sedikit menyusut. masukan sebagian daun bawang (kalo aku sebagian lagi pas penyajian hehe)\r\n5.Sajikan bersama aneka pelengkap sesuai selera. ', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`idresep`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `idresep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
