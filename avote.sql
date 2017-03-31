-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2017 at 06:05 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `level` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `level`) VALUES
('alphard', 's4v3r0', 'root'),
('reyreyhan', 'r3yh4n12031998', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE `calon` (
  `nama` varchar(64) NOT NULL,
  `code` varchar(32) NOT NULL,
  `foto` varchar(64) NOT NULL,
  `visimisi` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`nama`, `code`, `foto`, `visimisi`) VALUES
('Budi Sudarsono', 'MMB01', 'Screenshot_61.png', '<p><strong>Visi</strong></p>\r\n<p>Membuat PENS Terkenal</p>\r\n<p><strong>Misi</strong></p>\r\n<p>Menjadikan PENS Terkenal</p>'),
('Aceng Penjual Bakso Borak', 'MMB02', 'Screenshot_6.png', '<p><strong>Visi</strong></p>\r\n<p>....</p>\r\n<p><strong>Misi</strong></p>\r\n<p>....</p>'),
('Ali Markhus', 'MMB03', '10408688_320546758109638_2873802113239205120_n.jpg', '<p>Visi</p>\r\n<p>....</p>\r\n<p>Misi</p>\r\n<p>....</p>');

-- --------------------------------------------------------

--
-- Table structure for table `manusia`
--

CREATE TABLE `manusia` (
  `nrp` bigint(16) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `kelas` varchar(16) NOT NULL,
  `ukey` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manusia`
--

INSERT INTO `manusia` (`nrp`, `nama`, `kelas`, `ukey`) VALUES
(4103131041, 'Raka Wicaksana', '3 MMB B', 'JOEX'),
(4103141001, 'Ega Khansa Alifa', '3 MMB A', 'VIRW'),
(4103141002, 'Biyan Purnama Sari', '3 MMB A', 'H8RC'),
(4103141003, 'Makhillatul Rofiah', '3 MMB A', 'BBHK'),
(4103141004, 'Novi Erfiani', '3 MMB A', 'ABI6'),
(4103141006, 'Achmat Saputra', '3 MMB A', 'ISZZ'),
(4103141008, 'Rachmaniah', '3 MMB A', 'BZGN'),
(4103141009, 'Marlanisa Arifatul Afifah', '3 MMB A', '8HZE'),
(4103141010, 'Ulil Latifah', '3 MMB A', 'CP08'),
(4103141011, 'Okky Dian Pradika', '3 MMB A', 'BV0S'),
(4103141012, 'Febriana Wulandari', '3 MMB A', '9NZN'),
(4103141013, 'Ismi Nur Faiza', '3 MMB A', 'PMD5'),
(4103141014, 'Dandy Aditya Ari Sadewa', '3 MMB A', '9HJ5'),
(4103141015, 'Rizky Cahyo Prabowo', '3 MMB A', '528Y'),
(4103141016, 'Rininta Oktaviana', '3 MMB A', 'ZDUF'),
(4103141017, 'Ratna Nuha Mufida Ghozali', '3 MMB A', 'WAEZ'),
(4103141019, 'Much. Misbachul Choiri', '3 MMB A', 'HUND'),
(4103141021, 'Nurul Handayani', '3 MMB A', 'U900'),
(4103141022, 'Abdur Rouf', '3 MMB A', 'AZL7'),
(4103141023, 'Galuh Meidaluna', '3 MMB A', 'KHHV'),
(4103141024, 'Zakyyah Medina Tiara', '3 MMB A', 'R2CC'),
(4103141025, 'Almira Rahmanafi', '3 MMB A', 'N4SF'),
(4103141026, 'Savira Rosindah R', '3 MMB A', 'HWFD'),
(4103141027, 'Amadea Wafi Hidayani', '3 MMB A', '9FCG'),
(4103141028, 'M. Aditya Wildan Akbar', '3 MMB A', 'PWCR'),
(4103141029, 'Vina Rahma', '3 MMB A', 'C0FA'),
(4103141030, 'Imelda Septi Dwi Prastiwi', '3 MMB A', '2HXM'),
(4103141031, 'Aldini Sari Purnama', '3 MMB B', 'V4BQ'),
(4103141032, 'Muhamad Dio Anugerah S', '3 MMB B', 'ZOTR'),
(4103141033, 'Yuwanda Bagus Aprilyan', '3 MMB B', 'XVYI'),
(4103141034, 'Novia Suryani', '3 MMB B', '3GOH'),
(4103141035, 'Della Dwi Indri Antika', '3 MMB B', 'D3LB'),
(4103141037, 'Reza Rahman Ramadhan', '3 MMB B', 'PJQ9'),
(4103141038, 'Catur Putri Indriyani ', '3 MMB B', 'O6MP'),
(4103141039, 'Alfira Rizky Ayuputri', '3 MMB B', '4QRN'),
(4103141040, 'Naning Dwiyanti', '3 MMB B', '80SI'),
(4103141041, 'Muhammad Misbahul Munir', '3 MMB B', 'MADM'),
(4103141042, 'Yessy Anggraini', '3 MMB B', '403C'),
(4103141043, 'Shierly Dista Rosantika Dewi', '3 MMB B', '241D'),
(4103141044, 'Zumrotin Sholicha', '3 MMB B', 'U8WY'),
(4103141046, 'Riza Nur Fadillah', '3 MMB B', 'Y0N0'),
(4103141047, 'Muhammad Fahrizal E A', '3 MMB B', 'K7RH'),
(4103141049, 'Uca Candra', '3 MMB B', 'ZCQ2'),
(4103141050, 'Chairunnisa  Ulfatus S', '3 MMB B', '7PQV'),
(4103141051, 'Akhyar Abdan Fillah', '3 MMB B', '4CS8'),
(4103141052, 'Erika Rahmawati', '3 MMB B', 'J0PU'),
(4103141053, 'Mariska Listyasari', '3 MMB B', 'V3F1'),
(4103141054, 'Zsazya Tamara', '3 MMB B', 'PJ64'),
(4103141055, 'Cut Aja Putri Hasna N ', '3 MMB B', 'GG8Z'),
(4103141056, 'Alifia Atika Firdaus', '3 MMB B', 'L3VE'),
(4103141057, 'Bayu Dwi Hartomo', '3 MMB B', '3H6C'),
(4103141059, 'Windy Dwi Mastutti', '3 MMB B', '7961'),
(4103141060, 'Garinda Resnu Phillipus', '3 MMB B', 'ZC28'),
(4103151001, 'Risca Zuliana', '2 MBB A', 'ZMHW'),
(4103151002, 'Nandhita Arifka Putri', '2 MBB A', '2X86'),
(4103151003, 'Fafi Rohmatillah', '2 MBB A', '6PZL'),
(4103151004, 'Muhammad Idris Setiawan', '2 MBB A', 'V526'),
(4103151005, 'Diah Permatasari', '2 MBB A', 'MFXD'),
(4103151006, 'Siti Imaroh Nurfirdha Vamela', '2 MBB A', '836Z'),
(4103151007, 'Muh. Aqil Dian Nugraha', '2 MBB A', 'TW1F'),
(4103151008, 'Mada Marga Diputra', '2 MBB A', 'KLRQ'),
(4103151009, 'Sani Kharismawati', '2 MBB A', 'C5EM'),
(4103151010, 'Mudli''ul Wahdaniyah', '2 MBB A', 'OYR8'),
(4103151011, 'Akhmad Rifat Nur El Ein', '2 MBB A', 'IGL0'),
(4103151012, 'Janin Islam K.A.N', '2 MBB A', 'W1V1'),
(4103151013, 'Alfian Firmansyah', '2 MBB A', 'JE71'),
(4103151014, 'Azmi Redy Pradana', '2 MBB A', 'NGUV'),
(4103151015, 'Fenty Fauziah Nur Islami', '2 MBB A', 'J1C6'),
(4103151016, 'Dwi Mei Puspitoningrum', '2 MBB A', 'YFR1'),
(4103151017, 'Gigih Junaedi Abdullah', '2 MBB A', 'XE7U'),
(4103151018, 'Mega Aprillia Putri C', '2 MBB A', 'SDEF'),
(4103151019, 'Alif Suprianto', '2 MBB A', 'W1G3'),
(4103151020, 'Natasha Savira', '2 MBB A', 'P235'),
(4103151021, 'Arvin Janathan Adhim', '2 MBB A', 'ZFMN'),
(4103151023, 'Nourma Dwinda Valentine', '2 MBB A', 'R82W'),
(4103151025, 'Yuvita Agustiar Nigsih', '2 MBB A', 'ER14'),
(4103151027, 'Dwiki Akbar', '2 MBB A', 'F8DS'),
(4103151028, 'Bilqis Firdausiyah Lutfi', '2 MBB A', '49JD'),
(4103151029, 'Aan Ragi Julianko', '2 MBB A', 'MI40'),
(4103151030, 'Abdurrahman Rizal', '2 MBB A', 'N80B'),
(4103151031, 'Sony Gusti Baghtiar', '2 MBB B', 'SINX'),
(4103151032, 'Endah Porwanti', '2 MBB B', '9KL4'),
(4103151033, 'Asmara Nova Susanto', '2 MBB B', 'OQM4'),
(4103151034, 'Mahfud Syafuddin', '2 MBB B', '0OJR'),
(4103151035, 'Alfian Tohari', '2 MBB B', '7P24'),
(4103151036, 'Findia Putri Mashitho', '2 MBB B', 'R55M'),
(4103151037, 'Akemad Ragel', '2 MBB B', '5OKF'),
(4103151038, 'Setiyo Wati', '2 MBB B', '78WP'),
(4103151039, 'Ronaldo Vauzan Akbar', '2 MBB B', 'CZ1L'),
(4103151040, 'Maulana Ahmad Ruspandi', '2 MBB B', 'Q6ET'),
(4103151042, 'Azzanda Abdul Basith A', '2 MBB B', 'V6ZY'),
(4103151043, 'Nabila Charisma Azelia', '2 MBB B', '0YXF'),
(4103151044, 'Brigitta Violena Mahardik', '2 MBB B', 'MF6T'),
(4103151045, 'Muhammad Ali Akbar', '2 MBB B', 'GBYU'),
(4103151046, 'Pingky Titus Awaliyah', '2 MBB B', 'E945'),
(4103151048, 'Fauzia Rochmatul Isnayni', '2 MBB B', 'MFES'),
(4103151049, 'Melly Dhea Forekha', '2 MBB B', 'MMSJ'),
(4103151050, 'Zulfina Kharisma F', '2 MBB B', 'ERIS'),
(4103151051, 'Adelia Indah Kusuma T', '2 MBB B', '43U7'),
(4103151052, 'Birou Novi Cahyani', '2 MBB B', 'MPCP'),
(4103151054, 'Muhammad Chikam Alauddin', '2 MBB B', 'BL42'),
(4103151055, 'Ragil Iqbal Tawakal', '2 MBB B', 'I7MS'),
(4103151056, 'Iqlimah Musabbichah O.', '2 MBB B', '2ZHA'),
(4103151057, 'Maghfirah Aginda Putri', '2 MBB B', 'CT5O'),
(4103151058, 'Dimas Rino Hermawan', '2 MBB B', 'MM1D'),
(4103151059, 'Dony Baktiar', '2 MBB B', 'J5A2'),
(4103151060, 'Harcahyanto Utas Suro A.', '2 MBB B', '24QQ'),
(4103161001, 'Muhammad Aditia Ramadhani Yuwono', '1 MMB A', 'I2RI'),
(4103161002, 'Ita Maulania', '1 MMB A', 'HH1B'),
(4103161003, 'Erricha Darin Irbah', '1 MMB A', 'UG2D'),
(4103161004, 'Sheila Azizah', '1 MMB A', '2VLL'),
(4103161005, 'Dio Ekky Pratama', '1 MMB A', 'CEHI'),
(4103161006, 'Afifatul Azizah', '1 MMB A', 'P1YO'),
(4103161007, 'Arjun Bagus Mulyono', '1 MMB A', 'T9VG'),
(4103161008, 'Fani Isbat Qauli Fudhola', '1 MMB A', 'C5AJ'),
(4103161009, 'Friskila Enggar P', '1 MMB A', 'QWYC'),
(4103161011, 'Armita Dewi Cahyanti', '1 MMB A', 'KLN1'),
(4103161012, 'Muhammad Linggar Jati', '1 MMB A', 'FM1K'),
(4103161013, 'Sekar Jati Wisesa', '1 MMB A', 'FFQL'),
(4103161014, 'Dafiq Taqwim', '1 MMB A', '0LZV'),
(4103161015, 'Ika Fadhilah Ariyanti', '1 MMB A', 'T59D'),
(4103161017, 'Lila Julianawati', '1 MMB A', '55F2'),
(4103161018, 'Muhammad Hanif Al-Azhar R', '1 MMB A', 'EETV'),
(4103161021, 'Bayu Ramadhan Shafiyuddin', '1 MMB A', 'J0AH'),
(4103161023, 'M. Fahmi Risal', '1 MMB A', 'VELP'),
(4103161024, 'Burhanudin Abu Sujak', '1 MMB A', 'ISWE'),
(4103161025, 'Alga Dwi Novianto', '1 MMB A', 'QT6L'),
(4103161026, 'Nur Rohma Wulandari', '1 MMB A', '9QX1'),
(4103161027, 'Rifki Fadillah Akbar', '1 MMB A', '2WMG'),
(4103161028, 'Nur Ferina Indrawati', '1 MMB A', 'QSLO'),
(4103161029, 'Windasari Dwiastuti', '1 MMB A', 'FBI8'),
(4103161030, 'Bilal Savero Putra C', '1 MMB A', 'A4Z5'),
(4103161031, 'Qurrota A''Yun', '2 MMB B', 'DB8I'),
(4103161032, 'Reza Ayu Purwanti', '2 MMB B', 'DMZO'),
(4103161033, 'Abdi Prasetyo', '2 MMB B', '547W'),
(4103161034, 'Hilma Humairotun Nissa', '2 MMB B', 'TIB4'),
(4103161035, 'Musfiqon', '2 MMB B', 'X9V5'),
(4103161036, 'Muhammad Luqman Hakim', '2 MMB B', 'ULIM'),
(4103161038, 'Syarifah Qonitatulhaq', '2 MMB B', '4A2X'),
(4103161039, 'Alexander Ryan P', '2 MMB B', 'BGQ1'),
(4103161041, 'Nita Safira Yuliani', '2 MMB B', 'FIPZ'),
(4103161042, 'Anggie Salsabila Anjani', '2 MMB B', 'BWYO'),
(4103161043, 'Agita Firdaus Royani', '2 MMB B', 'H0GH'),
(4103161045, 'Putri Pangestu Perwito S', '2 MMB B', 'XFL7'),
(4103161046, 'Ahmad Nur Syamsu I', '2 MMB B', '3NSH'),
(4103161047, 'I''in Alfianti Okta', '2 MMB B', 'JZT9'),
(4103161048, 'Ikrimah Nurhalimah Susilo', '2 MMB B', 'VUR0'),
(4103161049, 'Lisa Dwi Astutik', '2 MMB B', 'I1I5'),
(4103161050, 'Muhamad Ryan Fauzi Hutomo', '2 MMB B', 'LL6V'),
(4103161051, 'Achmad Kharis', '2 MMB B', 'RFIY'),
(4103161052, 'Jana Clarita', '2 MMB B', 'D3YP'),
(4103161053, 'Rima Firliana Anggraini', '2 MMB B', 'NIC8'),
(4103161054, 'Gradis Ayuni', '2 MMB B', '4SLR'),
(4103161055, 'Ardityas Nugrahani R', '2 MMB B', 'SXIE'),
(4103161056, 'Ahmad Zulfian Pratama P', '2 MMB B', 'V7RV'),
(4103161057, 'Ayu Putri Dwi S', '2 MMB B', 'EI62'),
(4103161058, 'Mochammad Rizki R. H', '2 MMB B', 'T79C'),
(4103161059, 'Arsya Inzaghi Febrian ', '2 MMB B', 'EEFG'),
(4103161060, 'Kiki Intania Amandasari', '2 MMB B', '9SG1'),
(4210131001, 'Yulita Ayu Rengganis', '4 GT', 'ZPQ1'),
(4210131002, 'Deny Bimantara Putra', '4 GT', '82W9'),
(4210131003, 'Siti Hamidatul Choiriyah', '4 GT', 'S2QK'),
(4210131004, 'Muhamma Cholil', '4 GT', 'HM2A'),
(4210131005, 'Eko Sri Wahyuni', '4 GT', 'Z9RI'),
(4210131006, 'Jhorgy Reza Pratama', '4 GT', '6UZ9'),
(4210131007, 'Anisah Nurul Hidayati', '4 GT', '9AEC'),
(4210131008, 'Wino Rahmat Ramadhan', '4 GT', 'PKGT'),
(4210131009, 'Dennis Yefta Patriawan', '4 GT', '7F2E'),
(4210131010, 'Audy Pratama ', '3 GT', 'LI2J'),
(4210131011, 'Meynisa Nur Andani', '4 GT', 'A6OQ'),
(4210131013, 'Dio Al Sabah Akbar Zain', '4 GT', '4JTB'),
(4210131014, 'Rahman Diki Ardian', '4 GT', 'NDBR'),
(4210131015, 'Nadia Ukhti Dzulhasni', '4 GT', 'O54T'),
(4210131016, 'Ahmad Fadhlillah', '4 GT', 'T6CU'),
(4210131017, 'Nur Shabrina Shaliha', '4 GT', 'JFGR'),
(4210131019, 'Nyimas Ariny Sabilarrusyda', '4 GT', 'SJHP'),
(4210131020, 'Mochammad Eko Prasetyo', '4 GT', '49Q5'),
(4210131021, 'Idma Krisna Pradyana', '4 GT', 'U3V0'),
(4210131022, 'Hendra Permana Dharma Nuswantara', '4 GT', 'L5RT'),
(4210131023, 'Gusde Hario Anantasena', '4 GT', '5UDT'),
(4210131024, 'Mastuti Puspitasari', '4 GT', '48FP'),
(4210131025, 'Eka Putra Nugraha', '4 GT', '6HGZ'),
(4210131026, 'Ahmad Fariz Ainun Rizqi', '4 GT', 'G6YM'),
(4210131027, 'Miftakhul Firdaus', '4 GT', '0QZZ'),
(4210131028, 'Riky Firmansyah', '3 GT', 'L11F'),
(4210131029, 'Edgar Theovanny Adventure', '4 GT', '8T7F'),
(4210131030, 'Hendy Himawan Septiarso', '4 GT', '2L8I'),
(4210141001, 'Abdullah Iskandar', '3 GT', 'PB0Y'),
(4210141002, 'Bayu Luky Istanto', '3 GT', 'C992'),
(4210141003, 'Anita Sri Nurhayati', '3 GT', 'PBQX'),
(4210141004, 'Alfan Zain Kusuma Putra', '3 GT', 'JQQR'),
(4210141005, 'M. Jainal Arifin ', '3 GT', 'OAJE'),
(4210141006, 'Tita Aprilliawati Putri Santoso', '3 GT', 'P2CH'),
(4210141007, 'Alji Gelar Senatama ', '3 GT', '5RCG'),
(4210141008, 'Mochmmad Rizal Al Anshori', '3 GT', '2GIG'),
(4210141009, 'Dwi Antini Rohmah Dea Alqarana', '3 GT', 'ENSE'),
(4210141010, 'Imanuel Revana', '3 GT', 'I2NQ'),
(4210141011, 'Muhammad Wahyu Nugroho Sakti', '3 GT', 'SJ7Y'),
(4210141012, 'Septian Dwi Wiryawan ', '3 GT', 'LO7A'),
(4210141013, 'Niko Febri Hatmika', '3 GT', 'Y5L1'),
(4210141014, 'Muhammad Syahrizal Widodo', '3 GT', 'F2R0'),
(4210141015, 'Faris Rosyadi Putra ', '3 GT', '39MQ'),
(4210141016, 'Nur Ikhwan Annafis', '3 GT', 'CEZM'),
(4210141017, 'Muhammad Rum Rowi Rizqon', '3 GT', 'TCOV'),
(4210141018, 'Iqbal Sabilirrasyad', '3 GT', 'Y27P'),
(4210141019, 'Mohamad Heru Ardiyanto', '3 GT', '2KD7'),
(4210141020, 'Akbar Widyoseno', '3 GT', 'AA73'),
(4210141021, 'Azis Jabbar Susetio', '3 GT', '8PK9'),
(4210141024, 'Alfi Inayah', '3 GT', '6GXX'),
(4210141025, 'Marsa Abrar Farros', '3 GT', 'HFAM'),
(4210141027, 'Hernando Permadi', '3 GT', '0JMC'),
(4210141028, 'Muhammad Helmi Alauddin', '3 GT', 'JQR4'),
(4210141029, 'Agus Tri Prastyo', '3 GT', 'BE7S'),
(4210141030, 'David Fahmi Abdillah', '3 GT', 'XHPT'),
(4210151001, 'Noni Nurmaliki', '2 GT', 'BTIB'),
(4210151002, 'Buchori Rafsanjani', '2 GT', 'C72G'),
(4210151003, 'Mohammad Alviyan Anwari', '2 GT', 'GZ3H'),
(4210151004, 'M. Eryan Wicaksono', '2 GT', 'QPZP'),
(4210151005, 'Bagus Hidayatullah', '2 GT', 'UM5U'),
(4210151006, 'Ni Made Larasathi Putri R.', '2 GT', '5H6B'),
(4210151007, 'Billy Putra Kusuma Wardhana', '2 GT', 'EXU5'),
(4210151009, 'Adam Alkutus', '2 GT', 'ZWGL'),
(4210151010, 'Setyabudi Utomo', '2 GT', 'MNU1'),
(4210151011, 'Dimas Septian Rakasiwi', '2 GT', 'IAKN'),
(4210151012, 'Mohammad Yusuf Prastomo', '2 GT', '0MBK'),
(4210151013, 'Rosyidina Afifah', '2 GT', 'QRC5'),
(4210151014, 'Danang Sugiarto', '2 GT', 'PJYY'),
(4210151016, 'Muhammad Khoirur Rizal', '2 GT', 'PKQI'),
(4210151017, 'Okky Dwi Prabowo', '2 GT', '9TDL'),
(4210151019, 'Haidar Abhirama Try Nurhadi', '2 GT', 'Z5CX'),
(4210151020, 'Aldo Ignata Chandra', '2 GT', 'CWF0'),
(4210151021, 'Ahistya Purbolintang', '2 GT', 'F3P3'),
(4210151022, 'Irfan Ramadhi', '2 GT', '1Y9S'),
(4210151023, 'Bimaswara Adam Noval', '2 GT', 'VYMC'),
(4210151024, 'Fidelis Yoga Pralista', '2 GT', 'H3N1'),
(4210151025, 'Maul Huda Dirosussalam', '2 GT', 'H0H4'),
(4210151027, 'Ahmad Mujadid', '2 GT', '7BHI'),
(4210151028, 'Muhammad Irham Akbar P', '2 GT', '4H0Z'),
(4210151029, 'Nadhif Yonda Raditya', '2 GT', '9TKF'),
(4210151030, 'Daru Lintang Wijaya', '2 GT', '3YO2'),
(4210161001, 'Yayang Rahmadina', '1 GT', '81IR'),
(4210161002, 'Naufal Febriyan Prasetijo', '1 GT', 'XN8S'),
(4210161003, 'Mochmmad Mustakim', '1 GT', 'RN0A'),
(4210161004, 'Apriana Pramadita', '1 GT', '1V0R'),
(4210161005, 'Muchamad Irsad Maulana', '1 GT', 'EYQH'),
(4210161006, 'Muhammad Shidqi Firdaus', '1 GT', 'LEH4'),
(4210161007, 'Yohanes Bosko Grethaputra', '1 GT', 'ACQ6'),
(4210161008, 'Chusnul Chotimah', '1 GT', '2W25'),
(4210161009, 'Gusti Zainokta Gianto B', '1 GT', '0H07'),
(4210161010, 'Rahadian Rayhan Wibisono', '1 GT', '8J99'),
(4210161011, 'Dini Ayu Tri Maryani', '1 GT', '85JE'),
(4210161012, 'Bernando Getar Pratama', '1 GT', 'XSV7'),
(4210161013, 'Muhammad Aditya Devara', '1 GT', 'JYQK'),
(4210161014, 'Rahmat Maulana P R', '1 GT', 'NE21'),
(4210161015, 'Galuh Yoga Prastyo', '1 GT', 'HHLY'),
(4210161016, 'Muhammad Dzaki Adani', '1 GT', '0QQA'),
(4210161017, 'Putra Adi Wardana', '1 GT', '6FML'),
(4210161018, 'Thariq Abdul Ilah', '1 GT', '90PI'),
(4210161019, 'M Ray Farandy L', '1 GT', 'ZISD'),
(4210161020, 'Hardinata Bagas Atmaja', '1 GT', 'TJ7T'),
(4210161021, 'Dahani Yanuar Erdiansyah ', '1 GT', 'IQAD'),
(4210161022, 'Achmad Syaifudin', '1 GT', '0Q05'),
(4210161023, 'Reyhan Alphard Savero', '1 GT', 'CUK2'),
(4210161024, 'Listia Eka Septiana', '1 GT', '81OG'),
(4210161025, 'Georgius Bagas Wicaksono', '1 GT', 'OJDQ'),
(4210161026, 'Mochammad Aditya Mahendra', '1 GT', 'GO8N'),
(4210161027, 'Achmad Robith Fuadi', '1 GT', 'CZ55'),
(4210161028, 'Galih Aulia Al Hakim', '1 GT', 'R165'),
(4210161029, 'Julian Akbar Renaldi', '1 GT', '8HQ5');

-- --------------------------------------------------------

--
-- Table structure for table `manusiaselesai`
--

CREATE TABLE `manusiaselesai` (
  `nrp` varchar(16) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `kelas` varchar(16) NOT NULL,
  `ukey` varchar(8) NOT NULL,
  `codecalon` varchar(32) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manusiaselesai`
--

INSERT INTO `manusiaselesai` (`nrp`, `nama`, `kelas`, `ukey`, `codecalon`, `tanggal`) VALUES
('4103131041', 'Raka Wicaksana', '3 MMB B', 'JOEX', 'MMB03', '2017-02-17 11:11:53'),
('4210161005', 'Muchamad Irsad Maulana', '1 GT', 'EYQH', 'MMB01', '2017-02-18 00:03:06'),
('4210161010', 'Rahadian Rayhan Wibisono', '1 GT', '8J99', 'MMB01', '2017-02-18 00:03:12'),
('4210161016', 'Muhammad Dzaki Adani', '1 GT', '0QQA', 'MMB03', '2017-02-18 00:01:59'),
('4210161017', 'Putra Adi Wardana', '1 GT', '6FML', 'MMB01', '2017-02-17 17:09:07'),
('4210161022', 'Achmad Syaifudin', '1 GT', '0Q05', 'MMB03', '2017-02-18 00:02:00'),
('4210161023', 'Reyhan Alphard Savero', '1 GT', 'CUK2', 'MMB01', '2017-02-17 17:10:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`code`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `manusia`
--
ALTER TABLE `manusia`
  ADD PRIMARY KEY (`nrp`),
  ADD UNIQUE KEY `ukey` (`ukey`),
  ADD UNIQUE KEY `nrp` (`nrp`);

--
-- Indexes for table `manusiaselesai`
--
ALTER TABLE `manusiaselesai`
  ADD PRIMARY KEY (`nrp`),
  ADD UNIQUE KEY `ukey` (`ukey`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
