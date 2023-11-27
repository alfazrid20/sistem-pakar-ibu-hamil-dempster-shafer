-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jun 2022 pada 11.40
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_bumil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `kelompok_gejala_id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id`, `kelompok_gejala_id`, `kode`, `nama_gejala`) VALUES
(1, 1, 'G001', 'Pusing'),
(2, 1, 'G002', 'Konjungtiva Pucat'),
(3, 1, 'G003', 'Tekanan Darah Rendah'),
(4, 1, 'G004', 'Sakit Kepala'),
(5, 1, 'G005', 'Usia Diatas 35 Tahun'),
(6, 1, 'G006', 'Tekanan Darah Selalu Tinggi'),
(7, 1, 'G007', 'Faktor Stress Atau Cemas'),
(8, 1, 'G008', 'Usia Kehamilan 20 Minggu'),
(9, 1, 'G009', 'Mual Atau Muntah Lebih Dari 1 Kali'),
(10, 1, 'G010', 'Tidak Mau Makan'),
(11, 1, 'G011', 'Dehidrasi'),
(15, 1, 'G012', 'Nyeri Pinggang'),
(17, 1, 'G013', 'Keluarnya Flek Atau Bercak Merah'),
(18, 1, 'G014', 'Kontraksi Pada Bagian Perut'),
(20, 1, 'G015', 'Nyeri Pada Bagian Bawah Perut'),
(21, 1, 'G016', 'Keluarnya Flek Pada Usia Kehamilan 20 Minggu'),
(22, 1, 'G017', 'Anemia'),
(24, 1, 'G018', 'Janin Terdapat 2'),
(30, 1, 'G024', 'Perut Membesar Lebih Dari Usia Kehamilan'),
(31, 1, 'G019', 'Memiliki Penyakit Crohn\'s Sebelumnya'),
(32, 1, 'G020', 'Keguguran Melebihi 2 Kali'),
(33, 1, 'G021', 'Tekanan Darah Tinggi'),
(35, 1, 'G022', 'Malnutrisi'),
(36, 1, 'G023', 'Sering Kontraksi Pada Usia Kehamilan 7 Bulan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala_penyakit`
--

CREATE TABLE `gejala_penyakit` (
  `id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL,
  `penyakit_id` int(11) NOT NULL,
  `md` float NOT NULL,
  `mb` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala_penyakit`
--

INSERT INTO `gejala_penyakit` (`id`, `gejala_id`, `penyakit_id`, `md`, `mb`) VALUES
(66, 36, 9, 0.15, 0.85),
(67, 20, 9, 0.2, 0.8),
(68, 35, 9, 0.12, 0.88),
(69, 22, 7, 0.1, 0.9),
(70, 33, 7, 0.1, 0.9),
(71, 32, 7, 0.1, 0.9),
(72, 5, 7, 0.15, 0.85),
(73, 31, 7, 0.1, 0.9),
(74, 30, 5, 0.1, 0.9),
(75, 24, 5, 0.11, 0.89),
(76, 22, 4, 0.2, 0.8),
(77, 3, 4, 0.3, 0.7),
(78, 1, 4, 0.3, 0.7),
(79, 21, 4, 0.15, 0.85),
(80, 20, 4, 0.2, 0.8),
(81, 18, 3, 0.2, 0.8),
(82, 17, 3, 0.2, 0.8),
(83, 15, 3, 0.25, 0.75),
(84, 11, 2, 0.25, 0.75),
(85, 10, 2, 0.25, 0.75),
(86, 1, 2, 0.25, 0.75),
(87, 9, 2, 0.2, 0.8),
(88, 8, 6, 0.25, 0.75),
(89, 7, 6, 0.25, 0.75),
(90, 6, 6, 0.1, 0.9),
(91, 4, 6, 0.25, 0.75),
(92, 5, 6, 0.2, 0.8),
(93, 4, 1, 0.3, 0.7),
(94, 3, 1, 0.25, 0.75),
(95, 2, 1, 0.2, 0.8),
(96, 1, 1, 0.3, 0.7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_diagnosa`
--

CREATE TABLE `hasil_diagnosa` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kepercayaan` float NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_diagnosa`
--

INSERT INTO `hasil_diagnosa` (`id`, `kode`, `nama`, `kepercayaan`, `keterangan`, `created_at`) VALUES
(3, 'P002', 'Corela', 98.824, 'Penyakit ini sangat erat hubungannya dengan berbagai faktor pemicu stress seperti fluktuasi cuaca, kelembaban, pindah kandang, dan transportasi', '2018-08-13 16:57:46'),
(4, 'P004', 'Pullorum/Berak Kapus', 98, 'Penyakit ini menimbulkan mortalitas yang sangat tinggi pada anak ayam umur 1-10 hari dan memiliki masa inkubasi 7 hari', '2018-08-30 10:39:41'),
(5, 'P001', 'Terelo/ND', 90, 'Terjadi karena infeksi viral yang berakibat gangguan pada saraf pernafasan, virus yang membawa penyakit ini adalah virus paramyxo', '2018-08-30 10:41:04'),
(6, 'P002', 'Corela', 98, 'Penyakit ini sangat erat hubungannya dengan berbagai faktor pemicu stress seperti fluktuasi cuaca, kelembaban, pindah kandang, dan transportasi', '2018-08-30 11:18:05'),
(7, 'P004', 'Pullorum/Berak Kapus', 80, 'Penyakit ini menimbulkan mortalitas yang sangat tinggi pada anak ayam umur 1-10 hari dan memiliki masa inkubasi 7 hari', '2018-08-30 13:01:09'),
(8, 'P005', 'Coriza/Snot', 95.2, 'Penyakit yang menyerang sistem pernapasan dan disebabkan oleh bakteri', '2018-08-30 15:43:26'),
(9, 'P005', 'Coriza/Snot', 68, 'Penyakit yang menyerang sistem pernapasan dan disebabkan oleh bakteri', '2018-08-30 15:45:11'),
(10, 'P005', 'Solusio Plasenta', 95.2, 'Konsultasi pada dokter sebaiknya segera dilakukan apabila seorang wanita hamil mengalami gejala seperti yang disebutkan untuk pemeriksaan lebih lanjut.\r\nMeskipun rawan terjadi di trimester ketiga, solusio plasenta juga bisa terjadi kapan saja setelah usia', '2018-09-05 00:22:36'),
(11, 'P001', 'Kehamilan Ektropik', 99.6, 'Sebaiknya Anda segera ke rumah sakit jika mengalami gejala-gejala tersebut. Umumnya penyakit ini ditangani dengan suntikan methotrexate untuk menghentikan pertumbuhan sekaligus menghancurkan sel-sel yang sudah terbentuk. atau dengan cara operasi. Kehamila', '2018-09-05 09:16:38'),
(12, 'P001', 'Kehamilan Ektropik', 80, 'Sebaiknya Anda segera ke rumah sakit jika mengalami gejala-gejala tersebut. Umumnya penyakit ini ditangani dengan suntikan methotrexate untuk menghentikan pertumbuhan sekaligus menghancurkan sel-sel yang sudah terbentuk. atau dengan cara operasi. Kehamila', '2018-09-05 10:12:04'),
(13, 'P001', 'Kehamilan Ektropik', 99.6, 'Sebaiknya Anda segera ke rumah sakit jika mengalami gejala-gejala tersebut. Umumnya penyakit ini ditangani dengan suntikan methotrexate untuk menghentikan pertumbuhan sekaligus menghancurkan sel-sel yang sudah terbentuk. atau dengan cara operasi. Kehamila', '2018-09-07 12:56:57'),
(14, 'P009', 'Infeksi Saluran Kemi', 90, 'Penyembuhan ISK dapat dilakukan dengan menggunakan obat-obatan antibiotik . Selain antibiotik, obat pereda nyeri seperti parasetamol juga mungkin diperlukan untuk meredakan demam atau rasa sakit yang ada.											', '2018-09-22 16:20:51'),
(15, 'P009', 'Infeksi Saluran Kemi', 96, 'Penyembuhan ISK dapat dilakukan dengan menggunakan obat-obatan antibiotik . Selain antibiotik, obat pereda nyeri seperti parasetamol juga mungkin diperlukan untuk meredakan demam atau rasa sakit yang ada.											', '2018-09-22 16:34:33'),
(16, 'P006', 'Preklampsia', 80, 'Karena penyebab preeklamsia dan eklamsia tidak diketahui secara pasti, maka langkah pencegahan cukup sulit dilakukan. Namun, dokter dapat menyarankan sejumlah hal kepada ibu hamil untuk meminimalisasi risiko terjadinya kedua kondisi tersebut beserta kompl', '2020-01-28 03:58:03'),
(40, 'P002', 'Abortus', 40, 'Jika mengalami gejala-gejala tersebut segera ke rumah sakit untuk pemeriksaan lebih lanjut.\r\nSetelah memastikan diagnosis keguguran, Anda dapat memilih untuk menunggu sampai seluruh jaringan luruh dan keluar secara alami dari rahim atau dengan penanganan ', '2022-04-15 16:19:59'),
(41, 'P002', 'Abortus', 71, 'Jika mengalami gejala-gejala tersebut segera ke rumah sakit untuk pemeriksaan lebih lanjut.\r\nSetelah memastikan diagnosis keguguran, Anda dapat memilih untuk menunggu sampai seluruh jaringan luruh dan keluar secara alami dari rahim atau dengan penanganan ', '2022-04-15 16:22:39'),
(54, 'P006', 'Preklampsia', 65, 'Karena penyebab preeklamsia dan eklamsia tidak diketahui secara pasti, maka langkah pencegahan cukup sulit dilakukan. Namun, dokter dapat menyarankan sejumlah hal kepada ibu hamil untuk meminimalisasi risiko terjadinya kedua kondisi tersebut beserta kompl', '2022-04-22 15:07:33'),
(55, 'P005', 'Hamil Kembar', 80, 'Saat hamil kembar, ada beberapa hal yang perlu diperhatikan agar kondisi Anda dan kedua janin di dalam kandungan tetap dalam keadaan sehat, yaitu:\r\n\r\n1. Istirahat yang cukup\r\nWanita yang sedang hamil kembar akan disarankan dokter untuk lebih banyak berist', '2022-04-22 15:09:14'),
(56, 'P001', 'Anemia', 50, 'Pencegahan anemia saat hamil dapat mulai dilakukan dengan mengatur pola makan menjadi lebih baik, seperti:\r\n1. Mengonsumsi suplemen asam folat dan zat besi (60 mg zat besi dan 400 mcg asam folat).\r\n2. Mengonsumsi makanan yang mengandung zat besi tinggi (d', '2022-04-22 15:10:54'),
(57, 'P007', 'Kehamilan Dengan Res', 75, 'Penanganan yang dilakukan selama ini oleh para ahli dalam menghadapi kasus ketuban pecah dini adalah dengan memperlambat bayi lahir dan melakukan persiapan pematangan paru bayi jika kelahiran tak bisa dihindari. Pada umumnya, persalinan terjadi dalam sepe', '2022-05-13 06:00:43'),
(58, 'P001', 'Anemia', 50, 'Pencegahan anemia saat hamil dapat mulai dilakukan dengan mengatur pola makan menjadi lebih baik, seperti:\r\n1. Mengonsumsi suplemen asam folat dan zat besi (60 mg zat besi dan 400 mcg asam folat).\r\n2. Mengonsumsi makanan yang mengandung zat besi tinggi (d', '2022-05-20 14:57:46'),
(59, 'P001', 'Anemia', 50, 'Pencegahan anemia saat hamil dapat mulai dilakukan dengan mengatur pola makan menjadi lebih baik, seperti:\r\n1. Mengonsumsi suplemen asam folat dan zat besi (60 mg zat besi dan 400 mcg asam folat).\r\n2. Mengonsumsi makanan yang mengandung zat besi tinggi (d', '2022-05-21 03:12:04'),
(60, 'P009', 'Ketuban Pecah Dini', 73, 'Cara menjaga air ketuban tidak pecah dini\r\nSemakin dini ketuban pecah, maka semakin membahayakan ibu maupun janin. Oleh karena itu, berikut adalah cara menjaga air ketuban tidak pecah dini yang bisa Anda lakukan.\r\n\r\n1. Rutin melakukan pemeriksaan kehamila', '2022-05-21 03:13:22'),
(61, 'P007', 'Kehamilan Dengan Res', 70, 'Penanganan yang dilakukan selama ini oleh para ahli dalam menghadapi kasus ketuban pecah dini adalah dengan memperlambat bayi lahir dan melakukan persiapan pematangan paru bayi jika kelahiran tak bisa dihindari. Pada umumnya, persalinan terjadi dalam sepe', '2022-05-21 03:16:45'),
(62, 'P001', 'Anemia', 50, 'Pencegahan anemia saat hamil dapat mulai dilakukan dengan mengatur pola makan menjadi lebih baik, seperti:\r\n1. Mengonsumsi suplemen asam folat dan zat besi (60 mg zat besi dan 400 mcg asam folat).\r\n2. Mengonsumsi makanan yang mengandung zat besi tinggi (d', '2022-05-21 07:01:37'),
(63, 'P002', 'Hiperemesis Gravidar', 50, 'Pencegahan hiperemesis gravidarum. ada beberapa upaya yang bisa dilakukan untuk meredakan morning sickness sehingga tidak berkembang menjadi hiperemesis gravidarum, yaitu:\r\n1. Mencukupi waktu istirahat untuk meredakan stres dan menghilangkan lelah\r\n2. Men', '2022-05-21 08:47:39'),
(64, 'P006', 'Preklampsia', 65, 'Karena penyebab preeklamsia dan eklamsia tidak diketahui secara pasti, maka langkah pencegahan cukup sulit dilakukan. Namun, dokter dapat menyarankan sejumlah hal kepada ibu hamil untuk meminimalisasi risiko terjadinya kedua kondisi tersebut beserta kompl', '2022-05-21 08:52:24'),
(65, 'P006', 'Preklampsia', 71, 'Karena penyebab preeklamsia dan eklamsia tidak diketahui secara pasti, maka langkah pencegahan cukup sulit dilakukan. Namun, dokter dapat menyarankan sejumlah hal kepada ibu hamil untuk meminimalisasi risiko terjadinya kedua kondisi tersebut beserta kompl', '2022-05-21 08:55:39'),
(66, 'P001', 'Anemia', 50, 'Pencegahan anemia saat hamil dapat mulai dilakukan dengan mengatur pola makan menjadi lebih baik, seperti:\r\n1. Mengonsumsi suplemen asam folat dan zat besi (60 mg zat besi dan 400 mcg asam folat).\r\n2. Mengonsumsi makanan yang mengandung zat besi tinggi (d', '2022-06-14 06:53:27'),
(67, 'P006', 'Preklampsia', 50, 'Karena penyebab preeklamsia dan eklamsia tidak diketahui secara pasti, maka langkah pencegahan cukup sulit dilakukan. Namun, dokter dapat menyarankan sejumlah hal kepada ibu hamil untuk meminimalisasi risiko terjadinya kedua kondisi tersebut beserta kompl', '2022-06-14 14:48:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `gejala_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`gejala_id`, `created_at`) VALUES
(36, '2022-04-15 16:47:47'),
(1, '2022-04-15 16:48:15'),
(1, '2022-04-15 22:45:35'),
(3, '2022-04-15 22:45:35'),
(8, '2022-04-15 22:45:35'),
(9, '2022-04-15 22:45:35'),
(1, '2022-04-15 22:57:11'),
(2, '2022-04-15 22:57:11'),
(9, '2022-04-18 15:17:01'),
(10, '2022-04-18 15:17:01'),
(11, '2022-04-18 15:17:01'),
(1, '2022-04-18 15:17:25'),
(2, '2022-04-18 15:17:25'),
(10, '2022-04-18 15:17:25'),
(31, '2022-04-18 15:17:25'),
(32, '2022-04-18 15:17:25'),
(33, '2022-04-18 15:17:25'),
(6, '2022-04-18 15:18:27'),
(7, '2022-04-18 15:18:27'),
(1, '2022-04-18 16:14:59'),
(2, '2022-04-18 16:14:59'),
(1, '2022-04-18 16:54:58'),
(2, '2022-04-18 16:54:58'),
(1, '2022-04-18 17:06:33'),
(2, '2022-04-18 17:06:33'),
(1, '2022-04-22 15:05:03'),
(2, '2022-04-22 15:05:03'),
(1, '2022-04-22 15:07:33'),
(3, '2022-04-22 15:07:33'),
(6, '2022-04-22 15:07:33'),
(7, '2022-04-22 15:07:33'),
(4, '2022-04-22 15:09:14'),
(5, '2022-04-22 15:09:14'),
(6, '2022-04-22 15:09:14'),
(30, '2022-04-22 15:09:14'),
(31, '2022-04-22 15:09:14'),
(32, '2022-04-22 15:09:14'),
(1, '2022-04-22 15:10:53'),
(2, '2022-04-22 15:10:53'),
(3, '2022-05-13 06:00:43'),
(4, '2022-05-13 06:00:43'),
(5, '2022-05-13 06:00:43'),
(33, '2022-05-13 06:00:43'),
(1, '2022-05-20 14:57:46'),
(2, '2022-05-20 14:57:46'),
(1, '2022-05-21 03:12:04'),
(2, '2022-05-21 03:12:04'),
(35, '2022-05-21 03:13:22'),
(36, '2022-05-21 03:13:22'),
(4, '2022-05-21 03:16:45'),
(5, '2022-05-21 03:16:45'),
(1, '2022-05-21 07:01:37'),
(2, '2022-05-21 07:01:37'),
(1, '2022-05-21 08:47:39'),
(2, '2022-05-21 08:47:39'),
(3, '2022-05-21 08:47:39'),
(6, '2022-05-21 08:52:24'),
(7, '2022-05-21 08:52:24'),
(3, '2022-05-21 08:55:39'),
(4, '2022-05-21 08:55:39'),
(5, '2022-05-21 08:55:39'),
(6, '2022-05-21 08:55:39'),
(1, '2022-06-14 06:53:27'),
(2, '2022-06-14 06:53:27'),
(2, '2022-06-14 14:48:07'),
(3, '2022-06-14 14:48:07'),
(4, '2022-06-14 14:48:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok_gejala`
--

CREATE TABLE `kelompok_gejala` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelompok_gejala`
--

INSERT INTO `kelompok_gejala` (`id`, `nama`, `keterangan`) VALUES
(1, 'Gejala Fisik', '-'),
(2, 'Gejala Non Fisik', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id`, `kode`, `nama`, `keterangan`) VALUES
(1, 'P001', 'Anemia', 'Pencegahan anemia saat hamil dapat mulai dilakukan dengan mengatur pola makan menjadi lebih baik, seperti:\r\n1. Mengonsumsi suplemen asam folat dan zat besi (60 mg zat besi dan 400 mcg asam folat).\r\n2. Mengonsumsi makanan yang mengandung zat besi tinggi (daging, ayam, ikan, telur, dan gandum).\r\n3. Memakan makanan yang kaya akan asam folat (kacang kering, gandum, jus jeruk, dan sayuran hijau).\r\n4. Mengonsumsi suplemen dan makanan yang mengandung vitamin C (buah dan sayur yang segar).\r\n5. Perhatikan juga bahwa zat besi dari sumber makanan hewani, seperti daging, dapat terserap tubuh lebih baik dibanding zat besi dari sayuran atau buah.																																'),
(2, 'P002', 'Hiperemesis Gravidarum', 'Pencegahan hiperemesis gravidarum. ada beberapa upaya yang bisa dilakukan untuk meredakan morning sickness sehingga tidak berkembang menjadi hiperemesis gravidarum, yaitu:\r\n1. Mencukupi waktu istirahat untuk meredakan stres dan menghilangkan lelah\r\n2. Mengonsumsi makanan tinggi protein, rendah lemak, dan bertekstur halus agar mudah ditelan dan dicerna\r\n3. Mengonsumsi makanan dalam porsi kecil tetapi sering, serta menghindari makanan berminyak, pedas, atau berbau tajam, yang dapat memicu rasa mual\r\n4. Memperbanyak minum air putih untuk mencegah dehidrasi\r\n5. Mengonsumsi minuman yang mengandung jahe untuk meredakan mual dan menghangatkan tubuh\r\n6. Mengonsumsi suplemen kehamilan untuk mencukupi kebutuhan vitamin dan zat besi selama hamil\r\n7. Menggunakan aromaterapi untuk mengurangi mual di pagi hari\r\n8. Menjaga kesehatan kehamilan selama trimester pertama juga penting dilakukan untuk mencegah hiperemesis gravidarum, salah satunya adalah dengan menjalani pemeriksaan kehamilan secara rutin.\r\n\r\nPemeriksaan kehamilan umumnya dilakukan sejak usia kehamilan 4 minggu, untuk memantau perkembangan janin dan mendeteksi dini bila ada kelainan yang mungkin terjadi pada janin.'),
(3, 'P003', 'Keguguran', 'Pencegahan Keguguran Keguguran yang disebabkan oleh kelainan genetik sulit untuk dicegah. Namun, keguguran yang terjadi karena faktor lain dapat dicegah dengan melakukan beberapa cara berikut:\r\n1. Mengonsumsi minimal 400 mcg asam folat setiap hari, setidaknya 1–2 bulan selama program kehamilan\r\n2. Menjaga berat badan ideal\r\n3. Mengonsumsi makanan bergizi seimbang\r\n4. Mengelola stres dengan baik\r\n5. Tidak merokok atau terpapar asap rokok, tidak mengonsumsi minuman beralkohol, dan tidak menggunakan obat-obatan tanpa resep dokter\r\n6. Menerima vaksin sebelum hamil sesuai anjuran dokter, untuk mencegah infeksi\r\n7. Menghindari paparan sinar radiasi dan zat beracun, seperti arsenik, timbal, dan formaldehida\r\n8. Menjalani pengobatan untuk kondisi medis, terutama gangguan kesehatan yang berisiko menyebabkan keguguran'),
(4, 'P004', 'Plasenta Previa', 'Jika mengalami perdarahan dalam trimester kedua atau ketiga, sebaiknya Anda segera menghubungi dokter.\r\nPenanganan untuk plasenta previa umumnya  meliputi istirahat sebanyak mungkin, transfusi darah jika dibutuhkan, serta operasi caesar.\r\n											'),
(5, 'P005', 'Hamil Kembar', 'Saat hamil kembar, ada beberapa hal yang perlu diperhatikan agar kondisi Anda dan kedua janin di dalam kandungan tetap dalam keadaan sehat, yaitu:\r\n\r\n1. Istirahat yang cukup\r\nWanita yang sedang hamil kembar akan disarankan dokter untuk lebih banyak beristirahat dan mengurangi aktivitas berat agar tidak kelelahan. Namun, Bunda tetap disarankan untuk rutin melakukan olahraga ringan, seperti berjalan di sekitar rumah, yoga, atau berenang.\r\n\r\n2. Cukupi asupan kalori dan nutrisi\r\nSaat mengandung dua janin, Bunda membutuhkan asupan kalori dan nutrisi lebih banyak. Kebutuhan kalori harian yang perlu dicukupi adalah sekitar 2.700–3.000 kalori. Ibu hamil juga disarankan untuk cukup minum air putih agar tidak dehidrasi.\r\n3. Jaga berat badan ideal\r\nSaat sedang hamil kembar, penting juga untuk menjaga berat badan ideal. Jangan sampai mengalami kekurangan atau kelebihan berat badan agar ibu dan bayi tetap sehat. Kenaikan berat badan yang ideal untuk wanita dengan kehamilan kembar adalah 17–25 kg.\r\n\r\n4. Kelola stres\r\nStres saat hamil dapat membawa dampak buruk bagi kesehatan ibu dan janin. Stres berlebihan terbukti dapat membuat sistem kekebalan tubuh ibu menjadi lebih lemah sehingga rentan sakit.'),
(6, 'P006', 'Preklampsia', 'Karena penyebab preeklamsia dan eklamsia tidak diketahui secara pasti, maka langkah pencegahan cukup sulit dilakukan. Namun, dokter dapat menyarankan sejumlah hal kepada ibu hamil untuk meminimalisasi risiko terjadinya kedua kondisi tersebut beserta komplikasinya. Di antaranya adalah:\r\n1.	Mengonsumsi aspirin dosis rendah. \r\n2.	Menjaga tekanan darah. \r\n3.	Mengonsumsi obat antioksidan											'),
(7, 'P007', 'Kehamilan Dengan Resiko Tinggi', 'Penanganan yang dilakukan selama ini oleh para ahli dalam menghadapi kasus ketuban pecah dini adalah dengan memperlambat bayi lahir dan melakukan persiapan pematangan paru bayi jika kelahiran tak bisa dihindari. Pada umumnya, persalinan terjadi dalam sepekan, sedikit yang bisa bertahan sampai 4 minggu'),
(9, 'P009', 'Ketuban Pecah Dini', 'Cara menjaga air ketuban tidak pecah dini\r\nSemakin dini ketuban pecah, maka semakin membahayakan ibu maupun janin. Oleh karena itu, berikut adalah cara menjaga air ketuban tidak pecah dini yang bisa Anda lakukan.\r\n\r\n1. Rutin melakukan pemeriksaan kehamilan\r\n2. Mengonsumsi makanan bergizi seimbang\r\n3. Tidak merokok\r\n4. Menjaga kebersihan organ intim\r\n5. Mengonsumsi suplemen vitamin C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `level`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'suhairie', 'suhayrivalano@gmail.com', 'admin', ''),
(3, 'alfazri', '21232f297a57a5a743894a0e4a801fc3', 'alfazri', 'alfazri@gmail.com', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelompok_gejala_id` (`kelompok_gejala_id`);

--
-- Indexes for table `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gejala_id` (`gejala_id`),
  ADD KEY `penyakit_id` (`penyakit_id`);

--
-- Indexes for table `hasil_diagnosa`
--
ALTER TABLE `hasil_diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelompok_gejala`
--
ALTER TABLE `kelompok_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `hasil_diagnosa`
--
ALTER TABLE `hasil_diagnosa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `kelompok_gejala`
--
ALTER TABLE `kelompok_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD CONSTRAINT `gejala_ibfk_1` FOREIGN KEY (`kelompok_gejala_id`) REFERENCES `kelompok_gejala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  ADD CONSTRAINT `gejala_penyakit_ibfk_1` FOREIGN KEY (`gejala_id`) REFERENCES `gejala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gejala_penyakit_ibfk_2` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
