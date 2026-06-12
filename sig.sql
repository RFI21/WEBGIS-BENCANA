-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2026 pada 13.34
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bencana`
--

CREATE TABLE `bencana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_bencana` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `long_lat` text NOT NULL,
  `terdampak` text NOT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bencana`
--

INSERT INTO `bencana` (`id`, `jenis_bencana`, `tanggal`, `long_lat`, `terdampak`, `lokasi`, `created_at`, `updated_at`, `gambar`) VALUES
(30, 'Banjir', '2023-03-24', '-3.062439,120.155840', '4 Unit Rumah Terendam Air', 'Sendana', '2026-06-01 01:07:24', '2026-06-09 04:16:04', '1781007364_Screenshot 2026-06-09 201101.png'),
(31, 'Banjir', '2023-05-08', '-2.996039,120.199914', 'Tergenangnya air dirumah warga', 'Wara Timur', '2026-06-01 01:15:03', '2026-06-11 16:13:52', '1781007687_Screenshot 2026-06-09 201928.png'),
(32, 'Tanah Longsor', '2023-05-12', '-3.032687,120.161247', 'Akses jalan tertutup akibat material longsor', 'Sendana', '2026-06-01 01:19:29', '2026-06-11 16:24:15', '1781007856_Screenshot 2026-06-09 202246.png'),
(33, 'Banjir', '2023-05-16', '-2.999503,120.200944', 'Tergenangnya air dirumah warga', 'Wara Timur', '2026-06-01 01:23:34', '2026-06-11 16:26:48', '1781008152_Screenshot 2026-06-09 202746.png'),
(34, 'Tanah Longsor', '2023-05-21', '-3.009657,120.151634', 'Arus lalu lintas terganggu', 'Mungkajang', '2026-06-01 01:26:10', '2026-06-11 16:37:46', '1781008379_Screenshot 2026-06-09 203127.png'),
(35, 'Kebakaran', '2023-08-04', '-2.916677,120.163136', 'Sekitar 50 are', 'Telluwanua', '2026-06-01 02:04:17', '2026-06-11 16:41:25', '1781010948_Screenshot 2026-06-09 211403.png'),
(36, 'Kebakaran', '2023-09-28', '-2.989531,120.168285', '-+ Ha lahan terbakar habis', 'Wara Barat', '2026-06-01 02:08:06', '2026-06-11 16:45:04', '1781011436_Screenshot 2026-06-09 212214.png'),
(37, 'Kebakaran', '2023-10-01', '-3.013677,120.157814', '-+ 1/4 Ha lahan terbakar', 'Mungkajang', '2026-06-01 02:09:43', '2026-06-11 16:48:32', '1781011603_Screenshot 2026-06-09 212517.png'),
(38, 'Kebakaran', '2023-10-03', '-3.054973,120.215921', '-+ 1/2 Ha lahan terbakar', 'Wara Selatan', '2026-06-01 02:11:21', '2026-06-11 16:50:08', '1781011807_Screenshot 2026-06-09 212851.png'),
(39, 'Kebakaran', '2023-10-04', '-3.038284,120.211115', '-+ 700 meter/segi lahan terbakar', 'Wara Selatan', '2026-06-01 02:13:08', '2026-06-11 16:51:00', '1781012394_Screenshot 2026-06-09 213549.png'),
(40, 'Kebakaran', '2023-10-06', '-3.061496,120.153437', '-+ 500 m lahan terbakar', 'Sendana', '2026-06-01 02:16:06', '2026-06-09 05:43:13', '1781012593_Screenshot 2026-06-09 214130.png'),
(41, 'Angin Puting Beliung', '2023-12-06', '-3.037791,120.214462', '1 buah rumah rubuh rata dengan tanah', 'Wara Selatan', '2026-06-01 02:19:02', '2026-06-11 16:53:33', '1781012993_Screenshot 2026-06-09 214550.png'),
(42, 'Tanah Longsor', '2024-01-15', '-3.025161,120.134640', '-', 'Mungkajang', '2026-06-01 16:33:59', '2026-06-11 16:55:57', '1781013406_Screenshot 2026-06-09 215149.png'),
(43, 'Banjir', '2024-02-11', '-2.916795,120.213432', 'Sekita 40 rumah yang terdampak', 'Telluwanua', '2026-06-01 16:42:10', '2026-06-11 16:57:59', '1781013611_Screenshot 2026-06-09 215847.png'),
(44, 'Banjir', '2024-02-10', '-2.900208,120.204849', 'Sekitar 40 rumah yang terdampak', 'Telluwanua', '2026-06-01 16:45:00', '2026-06-11 17:01:36', '1781013854_Screenshot 2026-06-09 220243.png'),
(46, 'Banjir', '2024-02-19', '-3.013520,120.206330', '67 unit rumah warga yang terdampak', 'Wara Selatan', '2026-06-01 16:51:47', '2026-06-09 06:06:40', '1781014000_Screenshot 2026-06-09 220502.png'),
(47, 'Banjir', '2024-02-19', '-3.008699,120.209956', '17 unit rumah warga yang terdampak', 'Wara Timur', '2026-06-01 16:56:12', '2026-06-09 07:20:15', '1781018415_Screenshot 2026-06-09 231806.png'),
(48, 'Banjir', '2024-02-19', '-3.012363,120.190923', '46 unit rumah warga yang terendam', 'Wara', '2026-06-01 16:59:57', '2026-06-09 07:22:22', '1781018542_Screenshot 2026-06-09 232045.png'),
(49, 'Tanah Longsor', '2024-02-27', '-2.973580,120.151119', '-', 'Wara Barat', '2026-06-01 17:02:48', '2026-06-11 17:06:28', '1781018725_Screenshot 2026-06-09 232336.png'),
(50, 'Tanah Longsor', '2024-02-28', '-3.034656,120.124168', '-', 'Mungkajang', '2026-06-01 17:04:09', '2026-06-11 17:07:52', '1781018850_Screenshot 2026-06-09 232618.png'),
(51, 'Tanah Longsor', '2024-03-03', '-2.950520,120.178242', '1 rumah bagian dapur dan wc hanyut terbawa air', 'Bara', '2026-06-01 17:07:39', '2026-06-11 17:10:26', '1781019225_Screenshot 2026-06-09 233216.png'),
(52, 'Banjir', '2024-03-10', '-2.998113,120.194871', '-', 'Wara', '2026-06-01 17:14:11', '2026-06-09 07:38:12', '1781019492_Screenshot 2026-06-09 233635.png'),
(53, 'Banjir', '2024-03-26', '-3.020800,120.176182', 'Ruas jalan tergenang setinggi 50 cm', 'Mungkajang', '2026-06-01 17:15:56', '2026-06-11 18:08:05', '1781050471_Screenshot 2026-06-10 081240.png'),
(54, 'Banjir', '2024-03-26', '-2.999699,120.193241', '107 KK 417 jiwa', 'Wara', '2026-06-01 17:18:27', '2026-06-09 16:16:52', '1781050612_Screenshot 2026-06-10 081509.png'),
(55, 'Banjir', '2024-03-26', '-3.018020,120.207489', '103 KK 425 jiwa', 'Wara Selatan', '2026-06-01 17:21:16', '2026-06-09 16:18:58', '1781050738_Screenshot 2026-06-10 081737.png'),
(56, 'Banjir', '2024-03-26', '-3.006749,120.205901', 'Ruas jalan tergenang setinggi 50 cm', 'Wara Timur', '2026-06-01 17:24:23', '2026-06-09 16:21:01', '1781050861_Screenshot 2026-06-10 081953.png'),
(57, 'Tanah Longsor', '2024-03-28', '-3.029012,120.130949', 'Ruas jalan', 'Mungkajang', '2026-06-01 17:25:31', '2026-06-09 16:22:39', '1781050959_Screenshot 2026-06-10 082132.png'),
(58, 'Banjir', '2024-03-29', '-2.902710,120.196953', '41 KK', 'Telluwanua', '2026-06-01 17:27:48', '2026-06-09 16:24:18', '1781051058_Screenshot 2026-06-10 082312.png'),
(59, 'Banjir', '2024-03-28', '-2.997952,120.193970', 'Ruas jalan dan beberapa rumah warga', 'Wara', '2026-06-01 17:29:11', '2026-06-09 16:26:33', '1781051193_Screenshot 2026-06-10 082502.png'),
(60, 'Banjir', '2024-03-28', '-3.034353,120.214076', 'Ruas jalan dan beberapa rumah warga', 'Wara Selatan', '2026-06-01 17:30:56', '2026-06-11 17:27:38', '1781051309_Screenshot 2026-06-10 082715.png'),
(61, 'Banjir', '2024-03-28', '-2.998426,120.199270', 'Ruas jalan dan beberapa rumah warga', 'Wara Timur', '2026-06-01 17:33:34', '2026-06-11 17:28:49', '1781051426_Screenshot 2026-06-10 082906.png'),
(62, 'Tanah Longsor', '2024-03-30', '-3.031412,120.127602', 'Sepanjang 20 M badan jalan tertutupi material longsor', 'Mungkajang', '2026-06-01 17:35:22', '2026-06-11 17:30:21', '1781051540_Screenshot 2026-06-10 083115.png'),
(63, 'Banjir', '2024-04-01', '-3.039683,120.153522', 'Jembatan rusak, separuh badan jalan terbawa arus sungai', 'Sendana', '2026-06-01 17:38:31', '2026-06-11 17:32:11', '1781051665_Screenshot 2026-06-10 083321.png'),
(64, 'Banjir', '2024-04-16', '-3.022031,120.169230', 'Ruas jalan, rumah penduduk', 'Mungkajang', '2026-06-01 17:39:43', '2026-06-11 18:09:39', '1781056974_Screenshot 2026-06-10 100034.png'),
(65, 'Banjir', '2024-04-29', '-2.902539,120.188069', '60 KK', 'Telluwanua', '2026-06-01 17:44:21', '2026-06-10 04:26:30', '1781094390_Screenshot 2026-06-10 202410.png'),
(66, 'Banjir', '2024-05-08', '-2.995938,120.199903', '-', 'Wara Timur', '2026-06-01 17:48:01', '2026-06-10 04:37:06', '1781095026_Screenshot 2026-06-10 203601.png'),
(67, 'Banjir', '2024-05-09', '-3.065187,120.145025', '-', 'Sendana', '2026-06-01 17:50:14', '2026-06-10 04:41:55', '1781095113_Screenshot 2026-06-10 203743.png'),
(68, 'Banjir', '2025-01-14', '-2.902285,120.192267', 'Sebanyak 100 rumah', 'Telluwanua', '2026-06-02 00:07:10', '2026-06-10 04:48:47', '1781095727_Screenshot 2026-06-10 204625.png'),
(69, 'Tanah Longsor', '2025-04-13', '-3.067778333,120.163865', '1 buah jembatan rusak berat', 'Sendana', '2026-06-02 00:13:02', '2026-06-10 05:04:54', '1781096694_Screenshot 2026-06-10 210303.png'),
(76, 'Banjir', '2024-11-24', '-3.013091,120.189807', '-', 'Wara', '2026-06-02 03:23:31', '2026-06-10 05:32:11', '1781098331_Screenshot 2026-06-10 213111.png'),
(77, 'Banjir', '2024-11-24', '-2.993281,120.200247', '-', 'Wara Timur', '2026-06-02 03:25:34', '2026-06-10 05:29:52', '1781098192_Screenshot 2026-06-10 212842.png'),
(78, 'Banjir', '2024-12-12', '-2.995820,120.199935', 'Ruas jalan tergenang air', 'Wara Timur', '2026-06-02 03:30:27', '2026-06-10 05:23:17', '1781097797_Screenshot 2026-06-10 212227.png'),
(79, 'Tanah Longsor', '2024-12-12', '-3.039383,120.110435', 'Sebagian akses jalan tertutupi tanah', 'Mungkajang', '2026-06-02 03:34:18', '2026-06-10 05:26:33', '1781097993_Screenshot 2026-06-10 212542.png'),
(80, 'Banjir', '2025-01-14', '-2.927106,120.213751', '50 rumah', 'Telluwanua', '2026-06-02 09:35:38', '2026-06-10 04:58:31', '1781096311_Screenshot 2026-06-10 205633.png'),
(81, 'Banjir', '2025-01-15', '-2.927807643,120.2137958', 'Rumah 18 unit', 'Telluwanua', '2026-06-02 09:45:23', '2026-06-10 05:00:35', '1781096435_Screenshot 2026-06-10 205855.png'),
(82, 'Angin Puting Beliung', '2025-01-21', '-2.962299864,120.1806358', 'sebanyak 12 rumah warga rusak bagian atap dan dinding', 'Bara', '2026-06-02 09:52:22', '2026-06-10 05:57:54', '1781099874_Screenshot 2026-06-10 215639.png'),
(83, 'Banjir', '2025-01-23', '-3.032120086,120.2145854', '15 unit rumah', 'Wara Selatan', '2026-06-02 09:55:44', '2026-06-10 06:00:06', '1781100006_Screenshot 2026-06-10 215913.png'),
(84, 'Banjir', '2025-01-23', '-3.030568081,120.2138891', '30 rumah dan 1 orang lansia dievakuasi', 'Wara Selatan', '2026-06-02 09:59:11', '2026-06-10 06:02:19', '1781100139_Screenshot 2026-06-10 220106.png'),
(85, 'Angin Puting Beliung', '2025-02-25', '-2.98098,120.182284', '2 rumah warga rusak parah bagian atap dan dinding', 'Wara Utara', '2026-06-02 10:09:18', '2026-06-10 06:05:52', '1781100352_Screenshot 2026-06-10 220457.png'),
(86, 'Tanah Longsor', '2025-04-11', '-3.039087851,120.1132487', 'Jalan tertutupi material longsor', 'Mungkajang', '2026-06-03 03:28:03', '2026-06-10 06:08:06', '1781100486_Screenshot 2026-06-10 220709.png'),
(87, 'Banjir', '2025-04-21', '-3.006900032,120.1955662', '-', 'Wara', '2026-06-03 03:39:38', '2026-06-10 06:17:23', '1781100956_Screenshot 2026-06-10 220945.png'),
(88, 'Banjir', '2025-04-21', '-2.998977507,120.1955607', '-', 'Wara', '2026-06-03 03:41:50', '2026-06-10 06:17:03', '1781101023_Screenshot 2026-06-10 221441.png'),
(89, 'Banjir', '2025-04-21', '-3.010328462,120.1915037', '-', 'Wara', '2026-06-03 03:44:25', '2026-06-10 06:18:23', '1781101086_Screenshot 2026-06-10 221441.png'),
(90, 'Banjir', '2025-05-01', '-2.995526036,120.1712969', 'Tanggul jebol, 4  rumah warga dan 1 hektar tanah', 'Wara Barat', '2026-06-03 03:47:35', '2026-06-10 06:23:38', '1781101418_Screenshot 2026-06-10 222208.png'),
(91, 'Kebakaran', '2025-09-02', '-2.979722222,120.1627778', 'Kurang lebih 1 Ha', 'Wara Barat', '2026-06-03 03:51:04', '2026-06-10 06:30:25', '1781101825_Screenshot 2026-06-10 222926.png'),
(92, 'Tanah Longsor', '2025-10-30', '-3.035827683,120.1211097', '1 tiang listrik rebah akibat longsoran', 'Mungkajang', '2026-06-03 03:54:36', '2026-06-10 06:32:39', '1781101959_Screenshot 2026-06-10 223144.png'),
(93, 'Tanah Longsor', '2025-11-11', '-3.036127683,120.1173135', 'Jalan tertutupi material longsor', 'Mungkajang', '2026-06-03 03:59:50', '2026-06-10 06:40:01', '1781102401_Screenshot 2026-06-10 223406.png'),
(94, 'Tanah Longsor', '2025-11-11', '-3.039666667,120.11122', 'Jalan tertutupi material longsor', 'Mungkajang', '2026-06-03 04:01:46', '2026-06-10 06:40:21', '1781102421_Screenshot 2026-06-10 223418.png'),
(95, 'Banjir', '2025-11-21', '-2.995640017,120.2005312', '60 rumah warga', 'Wara', '2026-06-03 04:06:43', '2026-06-10 06:48:15', '1781102895_Screenshot 2026-06-10 224712.png'),
(96, 'Banjir', '2025-11-21', '-2.99580073,120.1992866', '10 rumah warga', 'Wara', '2026-06-03 04:08:58', '2026-06-10 06:51:13', '1781103073_Screenshot 2026-06-10 224859.png'),
(97, 'Banjir', '2025-11-21', '-2.996056218,120.1974323', '10 rumah warga', 'Wara Timur', '2026-06-03 04:13:14', '2026-06-10 06:51:56', '1781103116_Screenshot 2026-06-10 224918.png'),
(98, 'Banjir', '2025-11-21', '-3.025903889,120.1793783', 'Puluhan rumah terdampak banjir', 'Sendana', '2026-06-03 04:19:08', '2026-06-10 06:54:42', '1781103282_Screenshot 2026-06-10 225354.png'),
(100, 'Tanah Longsor', '2025-11-21', '-3.028318176,120.143910002', 'Arus lalu lintas terganggu', 'Mungkajang', '2026-06-03 18:22:01', '2026-06-10 07:03:40', '1781103820_Screenshot 2026-06-10 225929.png'),
(101, 'Tanah Longsor', '2025-11-21', '-3.039666667,120.11122', 'Arus lalu lintas terganggu', 'Mungkajang', '2026-06-03 18:23:24', '2026-06-10 07:04:01', '1781103841_Screenshot 2026-06-10 225943.png'),
(102, 'Banjir', '2025-11-21', '-2.905950517,120.2044244', 'puluhan rumah dampak banjir', 'Telluwanua', '2026-06-03 18:26:01', '2026-06-10 07:16:03', '1781104563_Screenshot 2026-06-10 213111.png'),
(103, 'Banjir', '2025-11-30', '-2.969370529,120.1795311', 'kurang lebih 1KM puluhan rumah dampak banjir', 'Bara', '2026-06-03 18:27:53', '2026-06-10 07:19:43', '1781104783_Screenshot 2026-06-10 231653.png'),
(104, 'Banjir', '2025-11-30', '-2.982761924,120.1831957', 'kurang lebih 1KM puluhan rumah dampak banjir', 'Wara Utara', '2026-06-03 18:29:41', '2026-06-10 07:19:20', '1781104760_Screenshot 2026-06-10 231705.png'),
(105, 'Angin Puting Beliung', '2025-11-30', '-2.954681753,120.1783883', '2 buah rumah terangkat atapnya', 'Bara', '2026-06-03 18:31:18', '2026-06-10 07:21:38', '1781104898_Screenshot 2026-06-10 232030.png'),
(108, 'Angin Puting Beliung', '2024-05-04', '-2.967706,120.180194', 'Satu unit rumah rusak sedang', 'Bara', '2026-06-10 04:35:19', '2026-06-10 04:35:19', '1781094919_Screenshot 2026-06-10 203417.png'),
(109, 'Banjir', '2024-06-02', '-2.901339,120.195322', 'Lahan -+ 20 M', 'Telluwanua', '2026-06-10 05:37:48', '2026-06-10 05:37:48', '1781098668_Screenshot 2026-06-10 213529.png'),
(110, 'Banjir', '2024-06-02', '-2.911625,120.205493', '10 KK 40 jiwa, Lahan -+ 20 M', 'Telluwanua', '2026-06-10 05:43:22', '2026-06-10 05:43:22', '1781099002_Screenshot 2026-06-10 214000.png'),
(111, 'Banjir', '2024-06-04', '-2.900739,120.187125', 'Abrasi sungai, pustu, mesjid, 40 rumah, posyandu, lahan -+ 200 m', 'Telluwanua', '2026-06-10 05:47:45', '2026-06-10 05:47:45', '1781099265_Screenshot 2026-06-10 214632.png'),
(112, 'Banjir', '2024-06-04', '-2.908100,120.204806', 'Kantor lurah salubattang, mesjid, 37 rumah, sekolah, jalan desa -+ 1km', 'Telluwanua', '2026-06-10 05:51:04', '2026-06-10 05:51:04', '1781099464_Screenshot 2026-06-10 214918.png'),
(113, 'Banjir', '2022-02-17', '-3.009577,120.195665', 'Terjadi kerusakan seperti kebocoran/keretakan tanggul', 'Wara', '2026-06-10 14:33:29', '2026-06-10 14:33:29', '1781130809_Screenshot 2026-06-11 062939.png'),
(114, 'Tanah Longsor', '2022-05-25', '-2.949898,120.082755', 'Arus lalu lintas macet karena material tanah longsor menutupi sebagian badan jalan', 'Wara Barat', '2026-06-10 14:37:43', '2026-06-10 14:37:43', '1781131063_Screenshot 2026-06-11 063616.png'),
(115, 'Tanah Longsor', '2022-06-04', '-2.954527,120.089235', 'Arus lalu lintas macet karena material tanah longsor menutupi sebagian badan jalan', 'Wara Barat', '2026-06-10 14:40:32', '2026-06-10 14:40:32', '1781131232_Screenshot 2026-06-11 063926.png'),
(116, 'Banjir', '2022-06-11', '-2.977479,120.153179', 'Menyebabkan mesjid Al-hasan tergenang banjir', 'Wara Barat', '2026-06-10 14:43:52', '2026-06-11 18:15:39', '1781131432_Screenshot 2026-06-11 064244.png'),
(117, 'Tanah Longsor', '2022-06-12', '-2.953370,120.104213', 'Akses jalan palopo-toraja terputus -+ 100 KM', 'Wara Barat', '2026-06-10 14:54:56', '2026-06-10 14:54:56', '1781132096_Screenshot 2026-06-11 065343.png'),
(118, 'Banjir', '2022-10-05', '-3.010349,120.196073', 'Tergenangnya air dirumah warga', 'Wara', '2026-06-10 15:08:17', '2026-06-10 15:08:17', '1781132897_Screenshot 2026-06-11 070246.png'),
(119, 'Banjir', '2022-10-05', '-3.002656,120.197039', 'Tergenangnya air dirumah warga', 'Wara', '2026-06-10 15:09:28', '2026-06-10 15:09:28', '1781132968_Screenshot 2026-06-11 070254.png'),
(120, 'Banjir', '2022-10-05', '-3.000513,120.200429', 'Tergenangnya air dirumah warga', 'Wara Timur', '2026-06-10 15:11:25', '2026-06-10 15:11:25', '1781133085_Screenshot 2026-06-11 070308.png'),
(121, 'Banjir', '2022-10-05', '-2.902624,120.193520', 'Tergenangnya air dirumah warga', 'Telluwanua', '2026-06-10 15:13:55', '2026-06-10 15:13:55', '1781133235_Screenshot 2026-06-11 070320.png'),
(122, 'Banjir', '2022-10-05', '-3.001499,120.185194', 'Tergenangnya air dirumah warga', 'Wara Barat', '2026-06-10 15:18:23', '2026-06-10 15:18:23', '1781133503_Screenshot 2026-06-11 070335.png'),
(123, 'Tanah Longsor', '2022-10-05', '-2.958384,120.137901', 'Jalan tertutupi material longsor', 'Wara Barat', '2026-06-10 15:21:04', '2026-06-10 15:21:04', '1781133664_Screenshot 2026-06-11 072004.png'),
(124, 'Banjir', '2022-10-06', '-2.919983,120.215235', 'Menyebabkan tergenangnya air di rumah warga sebanyak 215 KK', 'Telluwanua', '2026-06-10 15:27:29', '2026-06-10 15:27:29', '1781134049_Screenshot 2026-06-11 072214.png'),
(125, 'Banjir', '2022-10-08', '-2.910982,120.205150', 'Tergenangnya air dirumah warga', 'Telluwanua', '2026-06-10 15:34:23', '2026-06-10 15:34:23', '1781134463_Screenshot 2026-06-11 073140.png'),
(126, 'Banjir', '2022-10-08', '-2.946984,120.179186', 'Tergenangnya air dirumah warga', 'Bara', '2026-06-10 15:37:59', '2026-06-10 15:37:59', '1781134679_Screenshot 2026-06-11 073151.png'),
(127, 'Tanah Longsor', '2022-10-08', '-2.981999,120.181761', '1 rumah tidak berpenghuni', 'Wara Utara', '2026-06-10 16:01:56', '2026-06-10 16:01:56', '1781136116_Screenshot 2026-06-11 075221.png'),
(128, 'Tanah Longsor', '2022-10-08', '-2.954527,120.109921', 'Jalan tertutupi material longsor', 'Wara Barat', '2026-06-10 16:03:53', '2026-06-10 16:03:53', '1781136233_Screenshot 2026-06-11 075348.png'),
(129, 'Tanah Longsor', '2022-10-08', '-2.917625,120.170431', 'Kerusakan talud penfgaman sungai sepanjang 50 M', 'Telluwanua', '2026-06-10 16:09:14', '2026-06-10 16:09:14', '1781136554_Screenshot 2026-06-11 075231.png'),
(130, 'Banjir', '2022-10-10', '-3.001542,120.197425', 'Sebanyak 50 KK terdampak banjir', 'Wara', '2026-06-10 23:28:16', '2026-06-10 23:28:16', '1781162896_Screenshot 2026-06-11 152617.png'),
(131, 'Banjir', '2022-10-17', '-2.965584,120.183992', '61 KK terdampak', 'Bara', '2026-06-10 23:37:42', '2026-06-10 23:37:42', '1781163462_Screenshot 2026-06-11 153013.png'),
(132, 'Banjir', '2022-10-17', '-2.906739,120.203733', '1 unit jembatan rusak sedang', 'Telluwanua', '2026-06-10 23:39:03', '2026-06-10 23:39:03', '1781163543_Screenshot 2026-06-11 153145.png'),
(133, 'Banjir', '2022-10-18', '-2.968284,120.181825', '1 unit jembatan trans ambruk', 'Bara', '2026-06-10 23:51:20', '2026-06-10 23:51:20', '1781164280_Screenshot 2026-06-11 154339.png'),
(134, 'Banjir', '2022-10-18', '-3.000534,120.196803', 'Tergenangnya air dirumah warga', 'Wara', '2026-06-10 23:52:31', '2026-06-10 23:52:31', '1781164351_Screenshot 2026-06-11 154536.png'),
(135, 'Banjir', '2022-10-18', '-2.901424,120.186224', 'Tergenangnya air dirumah warga', 'Telluwanua', '2026-06-10 23:53:52', '2026-06-10 23:53:52', '1781164432_Screenshot 2026-06-11 154554.png'),
(136, 'Banjir', '2021-05-08', '-2.897738,120.216866', 'Rumah warga dan jalan penghubung antar kecamatan terendam banjir setinggi -+ 80 cm', 'Telluwanua', '2026-06-11 00:13:57', '2026-06-11 00:13:57', '1781165637_Screenshot 2026-06-11 160628.png'),
(137, 'Tanah Longsor', '2021-05-16', '-2.958286,120.174669', 'Menyebabkan air sungai keruh sehingga sementara tidak dikonsumsi oleh warga sekitar', 'Bara', '2026-06-11 01:47:26', '2026-06-11 01:47:55', '1781171246_Screenshot 2026-06-11 172953.png'),
(138, 'Tanah Longsor', '2021-07-08', '-3.035183,120.161934', '-', 'Sendana', '2026-06-11 01:54:49', '2026-06-11 01:54:49', '1781171689_Screenshot 2026-06-11 175130.png'),
(139, 'Tanah Longsor', '2021-07-08', '-2.952298,120.073872', '-', 'Wara Barat', '2026-06-11 02:02:47', '2026-06-11 02:02:47', '1781172167_Screenshot 2026-06-11 180120.png'),
(140, 'Banjir', '2021-08-28', '-3.053225,120.215042', '10 rumah di perumahan nirwana sampoddo dan 6 rumah di RT 002 RW 003 tergenang air', 'Wara Selatan', '2026-06-11 02:17:12', '2026-06-11 02:17:12', '1781173032_Screenshot 2026-06-11 181316.png'),
(141, 'Banjir', '2021-08-28', '-3.055929,120.188627', 'Tergenangnya air dirumah warga', 'Sendana', '2026-06-11 02:21:06', '2026-06-11 02:27:56', '1781173266_Screenshot 2026-06-11 181953.png'),
(142, 'Banjir', '2021-10-01', '-3.001692,120.197039', 'Terjadi kemacetan karena sebagian jalan tergenang air', 'Wara', '2026-06-11 02:36:07', '2026-06-11 02:36:07', '1781174167_Screenshot 2026-06-11 183124.png'),
(143, 'Banjir', '2021-10-01', '-2.997556,120.195129', 'Terjadi kemacetan karena sebagian jalan tergenang air', 'Wara', '2026-06-11 02:40:07', '2026-06-11 02:40:07', '1781174406_Screenshot 2026-06-11 183746.png'),
(144, 'Banjir', '2021-10-01', '-2.998511,120.200429', 'Terjadi kemacetan karena sebagian jalan tergenang air', 'Wara Timur', '2026-06-11 03:31:45', '2026-06-11 03:36:16', '1781177505_Screenshot 2026-06-11 192555.png'),
(145, 'Banjir', '2021-10-01', '-2.995199,120.200601', 'Terjadi kemacetan karena sebagian jalan tergenang air', 'Wara Timur', '2026-06-11 03:34:39', '2026-06-11 03:34:39', '1781177678_Screenshot 2026-06-11 192610.png'),
(146, 'Banjir', '2021-10-29', '-2.923583,120.171375', 'Air yang meluap sehingga mengakibatkan banjir dan memasuki rumah warga', 'Telluwanua', '2026-06-11 03:43:40', '2026-06-11 03:43:40', '1781178220_Screenshot 2026-06-11 193946.png'),
(147, 'Banjir', '2021-10-29', '-2.912697,120.173264', 'Air yang meluap sehingga mengakibatkan banjir dan memasuki rumah warga', 'Telluwanua', '2026-06-11 03:45:35', '2026-06-11 03:45:35', '1781178335_Screenshot 2026-06-11 194001.png'),
(148, 'Banjir', '2021-10-29', '-2.936012,120.175581', 'Air yang meluap sehingga mengakibatkan banjir dan memasuki rumah warga', 'Bara', '2026-06-11 03:47:28', '2026-06-11 03:47:28', '1781178448_Screenshot 2026-06-11 194011.png'),
(149, 'Banjir', '2021-11-04', '-2.995820,120.197532', 'Air yang meluap sehingga mengakibatkan banjir dan memasuki rumah warga', 'Wara', '2026-06-11 03:52:41', '2026-06-11 03:52:41', '1781178761_Screenshot 2026-06-11 194848.png'),
(150, 'Banjir', '2021-11-04', '-2.989378,120.195150', 'Air yang meluap sehingga mengakibatkan banjir dan memasuki rumah warga', 'Wara Utara', '2026-06-11 03:54:40', '2026-06-11 17:50:55', '1781178880_Screenshot 2026-06-11 194922.png'),
(151, 'Tanah Longsor', '2021-11-07', '-2.950241,120.126228', 'Akses jalan palopo-toraja terputus', 'Wara Barat', '2026-06-11 04:01:33', '2026-06-11 04:01:33', '1781179293_Screenshot 2026-06-11 195622.png'),
(152, 'Tanah Longsor', '2021-11-08', '-2.953841,120.123482', 'Akses jalan palopo-toraja terputus disebabkan oleh batang-batang pohon yang terbawa longsor', 'Wara Barat', '2026-06-11 04:06:08', '2026-06-11 04:06:08', '1781179568_Screenshot 2026-06-11 195652.png'),
(153, 'Tanah Longsor', '2021-11-08', '-2.949727,120.133610', 'Akses jalan palopo-toraja terputus disebabkan oleh batang-batang pohon yang terbawa longsor', 'Wara Barat', '2026-06-11 04:07:15', '2026-06-11 04:07:15', '1781179635_Screenshot 2026-06-11 195717.png'),
(154, 'Tanah Longsor', '2021-11-10', '-2.954870,120.108719', 'Akses jalan palopo-toraja terputus disebabkan oleh batang-batang pohon yang terbawa longsor', 'Wara Barat', '2026-06-11 04:12:14', '2026-06-11 04:12:14', '1781179934_Screenshot 2026-06-11 200912.png'),
(155, 'Tanah Longsor', '2021-11-10', '-2.954870,120.136013', 'Akses jalan palopo-toraja terputus disebabkan oleh batang-batang pohon yang terbawa longsor', 'Wara Barat', '2026-06-11 04:13:09', '2026-06-11 04:13:09', '1781179989_Screenshot 2026-06-11 200941.png'),
(156, 'Banjir', '2021-11-07', '-2.966184,120.180988', '4 rumah warga dan 1 panti asuhan mengalami rusak berat dan ringan', 'Bara', '2026-06-11 04:20:14', '2026-06-11 04:20:14', '1781180414_Screenshot 2026-06-11 201734.png'),
(157, 'Banjir', '2021-11-07', '-2.941498,120.176010', '4 rumah warga dan 1 panti asuhan mengalami rusak berat dan ringan', 'Bara', '2026-06-11 04:21:37', '2026-06-11 04:21:37', '1781180497_Screenshot 2026-06-11 201753.png'),
(158, 'Banjir', '2021-11-28', '-3.001906,120.193648', 'Air yang meluap sehingga mengakibatkan banjir dan memasuki rumah warga, dan menyebabkan kemacet', 'Wara', '2026-06-11 04:29:53', '2026-06-11 04:29:53', '1781180993_Screenshot 2026-06-11 202421.png'),
(159, 'Banjir', '2021-11-28', '-2.998884,120.196073', 'Air yang meluap sehingga mengakibatkan banjir dan memasuki rumah warga, dan menyebabkan kemacet', 'Wara', '2026-06-11 04:31:32', '2026-06-11 04:31:32', '1781181092_Screenshot 2026-06-11 202436.png'),
(160, 'Banjir', '2021-11-28', '-2.994620,120.198272', 'Air yang meluap sehingga mengakibatkan banjir dan memasuki rumah warga, dan menyebabkan kemacetan', 'Wara Timur', '2026-06-11 04:39:28', '2026-06-11 04:39:28', '1781181568_Screenshot 2026-06-11 203302.png'),
(161, 'Banjir', '2021-11-28', '-2.995970,120.199935', 'Air yang meluap sehingga mengakibatkan banjir dan memasuki rumah warga, dan menyebabkan kemacetan', 'Wara Timur', '2026-06-11 04:41:07', '2026-06-11 04:41:07', '1781181667_Screenshot 2026-06-11 203359.png'),
(162, 'Banjir', '2021-11-28', '-2.997149,120.200858', 'Air yang meluap sehingga mengakibatkan banjir dan memasuki rumah warga, dan menyebabkan kemacetan', 'Wara Timur', '2026-06-11 04:42:40', '2026-06-11 04:42:40', '1781181760_Screenshot 2026-06-11 203444.png'),
(163, 'Banjir', '2023-05-08', '-2.995563,120.202854', 'Tergenangnya air dirumah warga', 'Wara Timur', '2026-06-11 16:18:05', '2026-06-11 16:18:05', '1781223485_Screenshot 2026-06-12 081508.png'),
(164, 'Banjir', '2023-05-08', '-3.000513,120.192962', 'Tergenangnya air dirumah warga', 'Wara', '2026-06-11 16:21:51', '2026-06-11 16:21:51', '1781223711_Screenshot 2026-06-12 081928.png'),
(165, 'Banjir', '2023-05-16', '-2.998027,120.196631', 'Tergenangnya air dirumah warga dan jalan', 'Wara', '2026-06-11 16:34:52', '2026-06-11 16:34:52', '1781224492_Screenshot 2026-06-12 083242.png'),
(166, 'Banjir', '2024-03-29', '-3.043497,120.172234', '10 KK', 'Sendana', '2026-06-11 17:25:20', '2026-06-11 17:25:20', '1781227520_Screenshot 2026-06-10 082312.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2026_06_09_013111_add_gambar_to_bencana_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '$2y$12$qlyNrodvxP7XvOfqFkqb4OZKF8htBq5F8uFztmgqmhaYxWHUb9Dmi', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bencana`
--
ALTER TABLE `bencana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bencana`
--
ALTER TABLE `bencana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
