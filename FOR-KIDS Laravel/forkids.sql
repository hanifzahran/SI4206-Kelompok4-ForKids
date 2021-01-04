-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2021 pada 08.04
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forkids`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_children`
--

CREATE TABLE `activity_children` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `activity_children`
--

INSERT INTO `activity_children` (`id`, `user_id`, `name`, `lokasi`, `description`, `tanggal`, `foto`, `created_at`, `updated_at`) VALUES
(2, 7, 'Belajar Mewarnai', 'Rumah saya', 'AKu belajar mewarnai', '2021-01-06T23:30', '1609680536malinkundang.jpg', '2021-01-03 05:28:56', '2021-01-03 05:28:56'),
(3, 5, 'Mewarnai ceria', 'rumah yudha', 'Mewarnai gambar malin kundang sangat seru dan menyenangkan saya sangat suka dan bersemangat sekali dalam menyelesaikannya asikkk..', '2021-01-21T02:13', '1609682995malinkundang.jpg', '2021-01-03 06:09:55', '2021-01-03 17:55:28'),
(4, 5, 'Camping aku dan keluarga', 'Lembang', 'camping bersama keluarga sangat mengasikan', '2020-12-10T10:55', '1609722972gambar1.jpg', '2021-01-03 17:16:12', '2021-01-03 17:16:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `children`
--

CREATE TABLE `children` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `parent_child_id` int(11) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `children`
--

INSERT INTO `children` (`id`, `user_id`, `parent_child_id`, `tanggal_lahir`, `alamat`, `hp`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2021-01-03', 'aadadadada', '08124124124', '2021-01-03 01:44:59', '2021-01-03 01:44:59'),
(2, 5, 2, '2000-02-16', 'D', '081353081122', '2021-01-03 02:54:00', '2021-01-03 02:54:00'),
(3, 7, 3, '2000-12-17', 'G', '0816568456', '2021-01-03 05:11:02', '2021-01-03 05:11:02'),
(4, 9, 4, '2000-12-31', 'J', '081353584584', '2021-01-03 17:02:27', '2021-01-03 17:02:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `competitions`
--

CREATE TABLE `competitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('mewarnai','menggambar','prakarya','cerita pendek') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `competitions`
--

INSERT INTO `competitions` (`id`, `foto`, `name`, `description`, `type`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, '1609679337malinkundang.jpg', 'Mewarnai Gambar Malin Kundang', 'Mewarnai gambar malin kundang', 'mewarnai', '2021-01-13T22:06', '2021-01-03 05:08:57', '2021-01-03 20:23:26'),
(2, '1609739529gambarcerita2.jpg', 'Menggambar Kancil dan Buara', 'Menggambar gambar kancil dan kura-kura seperti pada contoh dengan menggunakan pensil warna dan krayon', 'menggambar', '2021-01-30T13:52', '2021-01-03 21:52:09', '2021-01-03 21:52:09'),
(3, '1609741968menulis.jpg', 'Menulis Kegiatan Sehari-hari', 'Lomba menulis cerita pendek tentang kegiatan yang dilakukan sehari-hari', 'cerita pendek', '2021-01-29T20:38', '2021-01-03 22:32:48', '2021-01-03 22:32:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `competition_details`
--

CREATE TABLE `competition_details` (
  `id` int(11) NOT NULL,
  `competition_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `competition_details`
--

INSERT INTO `competition_details` (`id`, `competition_id`, `user_id`, `file`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '1609685641Rangkuman Google Garage.docx', 100, '2021-01-03 06:45:54', '2021-01-03 06:55:16'),
(2, 1, 5, '1609724454gambar1.jpg', 100, '2021-01-03 06:46:16', '2021-01-03 17:53:18'),
(3, 1, 5, NULL, NULL, '2021-01-03 07:00:57', '2021-01-03 07:00:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dongengs`
--

CREATE TABLE `dongengs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dongengs`
--

INSERT INTO `dongengs` (`id`, `name`, `description`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Malin Kundang', 'Pada zaman dahulu, hiduplah seorang janda bersama seorang anak laki-laki, di perkampungan Pantai Air Manis, Padang Sumatera Barat.\r\n\r\nPerempuan itu bernama Mande Rubayah, sedangkan anak laki-lakinya bernama Malin Kundang. Sejak kanak-kanak, Malin Kundang sudah ditinggal mati ayahnya. Pada saat Malin menginjak dewasa, ada kapal besar berlabuh di Pantai Air Manis. Kedatangan kapal tersebut meneguhkan hatinya untuk pergi merantau.\r\nTidak lama kemudian, cuaca di tengah laut yang tadinya cerah, mendadak berubah menjadi gelap. Entah bagaimana awalnya, tiba-tiba datanglah badai besar menghantam kapal Malin Kundang. Seketika kapal itu hancur berkeping-keping. Kemudian terempas ombak hingga ke pantai.\r\n\r\nKeesokan harinya, di kaki bukit terlihat kepingan kapal yang telah menjadi batu, itulah kapal Malin Kundang. Tak jauh dari tempat itu, nampaklah sebongkah batu yang menyerupai tubuh manusia. Konon, itulah tubuh Malin Kundang anak durhaka yang terkena kutukan ibunya menjadi batu. Di sela-sela batu itu, berenang-renang ikan teri, ikan belanak, dan ikan tenggiri.\r\n\r\nKonon, ikan ikan itu berasal dari serpihan tubuh sang istri yang terus mencari Malin Kundang', '1609671572malinkundang.jpg', '2021-01-03 02:59:32', '2021-01-03 02:59:32'),
(2, 'Buaya dan Kancil', 'Pada suatu hari Kancil sedang berjalan-jalan di hutan. Tiba-tiba perutnya terasa lapar. Lalu ia melihat ada banyak buah segar yang ada di seberang sungai deras. Kancil pun bingung, bagaimana caranya ia dapat melewati sungai untuk mendapatkan makanan. Akhirnya, Kancil menemukan ide cemerlang untuk dapat menyeberangi sungai. Lalu Kancil pun memanggil seekor buaya yang tinggal di dalam sungai.\r\n\"Hey buaya keluarlah, aku punya kabar gembira\"\r\nMendengar suara Kancil, akhirnya seekor buaya keluar dan mendekati Kancil.\r\n\"Ada apa Kancil, kau mengganggu tidurku!\" sahut sang buaya.\r\n\"Aku akan membagikan banyak daging segar untuk kalian\" kata Kancil dengan wajah ceria\r\n\"Di mana daging itu?\" jawab buaya dengan raut wajah buasnya.\r\n\"Sepertinya dagingnya cukup banyak, kau harus memanggil teman-temanmu untuk memakannya juga.\r\nAkhirnya buaya besar itu memanggil kawanan buaya yang lain. Setelah semua berkumpul, Kancil meminta mereka untuk berbaris rapi.\r\n\"Untuk apa kami harus berbaris?\" tanya sang buaya\r\n\"Aku harus menghitung berapa jumlah kalian untuk membagikan daging secara merata\"\r\nKancil pun berhasil meyakinkan mereka dan buaya-buaya tersebut membuat barisan seperti membentuk sebuah jembatan.\r\n\"Baik aku akan mulai menghitung, satu... dua... tiga...\" kata Kancil sambil menginjak satu per satu buaya melewati aliran sungai yang deras.\r\nKancil pun berhasil menyebrangi sungai dengan melewati sekumpulan buaya itu. Setelah itu ia tertawa terbahak-bahak.\r\n\"Hahahaha sebenarnya aku tak membawa daging sedikit pun, aku hanya ingin kalian berbaris agar aku dapat menyeberang sungai. Ternyata mudah sekali memanfaatkan kalian!\" kata Kancil\r\nSekelompok buaya tersebut akhirnya marah dan hendak memakan Kancil. Tetapi sudah terlambat karena Kancil sudah lari menjauh dari mereka.\r\nCerita ini membuktikan bahwa kecerdikan dapat mengalahkan kekuatan.', '1609693592gambarcerita2.jpg', '2021-01-03 05:42:13', '2021-01-03 09:06:32'),
(3, 'Kancil Mencuri Mentimun', 'Kancil Mencuri Ketimun\r\nPada suatu hari, Kancil sedang jalan-jalan di pinggir hutan. Tiba-tiba perutnya sangat lapar. Kebetulan ia melihat ada hamparan ladang timun yang sedang berbuah. Kancil berniat mengambil mentimun tersebut. Tanpa basa-basi Kancil melewati pagar pembatas ladang dan menikmati buah mentimun yang sudah mulai masak. Setelah kenyang, Kancil pun pergi meninggalkan ladang yang telah terlihat berantakan karena ulah dirinya.\r\nSetelah Kancil beranjak pergi, Pak Tani sang pemilik ladang datang untuk memeriksa ladang mentimun miliknya. Betapa kagetnya ia saat mengetahui jika ladangnya telah rusak dan sebagian mentimun miliknya telah raib entah ke mana.\r\nPak Tani kesal dengan kejadian tersebut, lalu ia memasang orang-orangan sawah yang telah diberi lem lengket untuk menjebak si pencuri ketimun. Keesokan harinya Kancil kembali ke ladang untuk mengambil ketimun lagi. Betapa kagetnya ia melihat ada sosok petani yang menjaga ladang.\r\nBukannya merasa takut, Kancil malah menghampiri sosok petani itu.\r\n\"Hmm sepertinya Pak Tani ingin menakut - nakutiku, dia pikir aku bodoh\" kata Kancil sambil menendang orang-orangan sawah itu.\r\nTak disangka kaki Kancil tersangkut di orang-orangan sawah. Kancil pun terperangkap dan tidak bisa melarikan diri.\r\nPak Tani yang melihat Kancil terperangkap senang bukan kepalang. Lalu Kancil dibawa pulang ke rumah Pak Tani dan dikurung dalam sebuah kandang ayam. Kancil tak hilang akal, ia mencoba mencari cara agar bisa ke luar dari dalam kandang itu.\r\nKancil melihat seekor anjing peliharaan milik Pak Tani dan memanggilnya.\r\n\"Halo anjing, sedang apa kau di sana?\" kata Kancil.\r\n\"Aku sedang menjagamu agar kamu tak kabur ke mana-mana\" kata anjing sambil menghampiri Kancil.\r\n\"Aku senang sekali, besok aku akan diajak makan-makan di pesta Pak Lurah, oleh karena itu Pak Tani memintaku untuk istirahat sejenak di sini\" ucap Kancil.\r\nSang anjing terlihat kesal karena Pak Tani tak pernah mengajaknya untuk mengunjungi pesta dan makan di rumah Pak Lurah.\r\n\"Sebenarnya aku kasihan padamu, yang telah lama mengabdi tapi tak pernah di ajak bersenag-senang. Aku punya ide nih agar besok kamu bisa ikut ke pesta Pak Lurah\" sahut Kancil.\r\n\"Bagaimana caranya agar aku bisa ikut?\" tanya anjing.\r\n\"Kita harus bertukar posisi, agar kamu bisa menggantikanku untuk ikut ke pesta Pak Lurah\" bujuk Kancil.\r\nAkhirnya anjing pun termakan rayuan Kancil dan membantu Kancil ke luar dari kandang ayam lalu bertukar posisi. Sekarang, Kancil berhasil keluar, sementara si anjing sudah berada di dalam kandang ayam.\r\n\"Maafkan aku anjing, sebenarnya tidak ada pesta di rumah Pak Lurah, aku hanya membohongimu agar bisa keluar dari kurungan ini\" Kata Kancil sambil tertawa\r\nBetapa kesalnya anjing, dan melontarkan sumpah serapah untuk si Kancil. Tetapi, sudah terlambat, karena Kancil telah berhasil ke bebas dan pergi berlari menuju hutan.\r\nPesan pada dongeng Si Kancil ini adalah, jangan mudah percaya terhadap omongan orang begitu saja. Walaupun Kancil cerdik, tetapi sifatnya yang suka mencuri dan membohongi anjing tidak patut dicontoh ya!', '1609693713gambarcerita3.jpg', '2021-01-03 09:08:33', '2021-01-03 09:08:33'),
(4, 'Si Kura-Kura Yang Sombong', 'Ada seekor kura-kura yang sombong dan merasa dirinya lebih pantas terbang dibandingkan berenang di perairan. Ia jengkel karena memiliki tempurung keras yang membuat tubuhnya terasa berat.\r\nIa pun kesal melihat kawan-kawannya sudah berpuas diri dengan berenang. Saat melihat burung yang bebas terbang di langit, kejengkelannya kian bertambah.\r\nSuatu hari, kura-kura ini memaksa seekor angsa untuk membantunya terbang. Si angsa setuju. Ia mengusulkan agar si kura-kura berpegangan pada sebatang kayu yang akan diangkatnya.\r\nKarena tangan kura-kura agak lemah, ia menggunakan mulutnya yang lebih kuat. Ia pun akhirnya bisa terbang dan merasa bangga.\r\nMelihat teman-temannya yang tengah berenang, ia ingin menyombongkan diri. Ia lupa bahwa mulutnya harus terus dipakai untuk menggigit kayu. Ia pun terjatuh dengan keras. Beruntung, ia selamat berkat tempurung yang pernah dibencinya.', '1609726160kurakuras.jpg', '2021-01-03 17:07:23', '2021-01-03 18:09:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `price`, `tanggal`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Memasak Bersama  Chef Renata', 'test', '50000', '2021-01-19', 'kurakuras.jpg', '2021-01-03 05:04:34', '2021-01-03 18:16:52'),
(2, 'Camping Ceria di Lembang Bandung', 'asik', '50000', '2021-01-13', 'camping.jpg', '2021-01-03 05:45:22', '2021-01-03 22:27:30'),
(3, 'Kegiatan Outbound Bedugul Bali', 'berwisata dan bermain bersama unuk pelatihan team work.', '75000', '2021-01-12', 'camping.jpg', '2021-01-03 22:26:48', '2021-01-03 22:26:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_details`
--

CREATE TABLE `event_details` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `games`
--

CREATE TABLE `games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `games`
--

INSERT INTO `games` (`id`, `name`, `link`, `description`, `created_at`, `updated_at`) VALUES
(1, 'game memasak', 'https://www.games.co.id/permainan/buku_mewarnai', 'Game mewarnai untuk menambah kemampuan anak dalam berimajinasi dan meningkatkan kreatifitas anak', '2021-01-03 04:59:16', '2021-01-03 22:38:02'),
(3, 'Games.co.id', 'https://www.games.co.id/?utm_source=spildomains&utm_medium=redirect&utm_campaign=www.game.co.id', 'Game mengasah kemampuan dan motoric anak di dalam menyelesaikan permasalan yang ada dan untuk mengembangkan kratifitas anak.', '2021-01-03 17:04:34', '2021-01-03 17:04:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merchandises`
--

CREATE TABLE `merchandises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `merchandises`
--

INSERT INTO `merchandises` (`id`, `name`, `price`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Buku Cerita Malin Kundang', '50000', '1609678785malinkundang.jpg', '2021-01-03 04:59:45', '2021-01-03 22:33:33'),
(2, 'Kaos rame-rame anak', '50000', '1609742052kaosrame.jpg', '2021-01-03 17:11:05', '2021-01-03 22:34:12'),
(3, 'Kaos IKO', '75000', '1609742139kaos iko.jpg', '2021-01-03 22:35:39', '2021-01-03 22:35:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_30_101842_create_events_table', 1),
(5, '2020_11_30_101856_create_transaksis_table', 1),
(6, '2020_11_30_101909_create_transaksi_details_table', 1),
(7, '2020_11_30_101936_create_games_table', 1),
(8, '2020_11_30_102026_create_competitions_table', 1),
(9, '2020_12_13_142519_create_children_table', 1),
(10, '2020_12_13_143606_create_parent_children_table', 1),
(11, '2020_12_18_073632_create_products_table', 1),
(12, '2020_12_18_090329_create_event_details_table', 1),
(13, '2020_12_18_090507_create_merchandises_table', 1),
(14, '2020_12_18_090720_create_competition_details_table', 1),
(15, '2020_12_18_091101_create_activity_children_table', 1),
(16, '2020_12_18_092115_create_dongengs_table', 1),
(17, '2020_12_18_094142_create_pembayarans_table', 1),
(18, '2020_12_31_023412_create_videos_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `parent_children`
--

CREATE TABLE `parent_children` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `parent_children`
--

INSERT INTO `parent_children` (`id`, `user_id`, `tanggal_lahir`, `alamat`, `hp`, `created_at`, `updated_at`) VALUES
(1, 2, '2021-01-03', 'tesss ajaa', '08123124124', '2021-01-03 01:44:59', '2021-01-03 01:44:59'),
(2, 4, '1945-01-01', 'Banyuwangi, Jawa Timur', '081353081444', '2021-01-03 02:53:59', '2021-01-03 02:53:59'),
(3, 6, '1980-07-08', 'Gianyar Bali', '081353081122', '2021-01-03 05:11:01', '2021-01-03 05:11:01'),
(4, 8, '2000-01-05', 'Jawa timur', '08135381252', '2021-01-03 17:02:26', '2021-01-03 17:02:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `no_unik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reff` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_respon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('success','pending','error') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Paket Menggambar', '50000', '1609671884mewarnai.jpg', '2021-01-03 03:04:44', '2021-01-03 22:16:09'),
(2, 'Paket Mewarnai Ceria', '45000', '1609741451mewarnai.jpg', '2021-01-03 22:24:11', '2021-01-03 22:24:11'),
(3, 'Paket Balon Ceria', '25000', '1609741472balon.jpg', '2021-01-03 22:24:32', '2021-01-03 22:24:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_unik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `no_unik`, `produk`, `harga`, `user_id`, `foto`, `created_at`, `updated_at`) VALUES
(1, '2021010349', 'Buku Gambar', '50000', 1, '/img/product/1609671884mewarnai.jpg', '2021-01-03 03:05:43', '2021-01-03 03:05:43'),
(2, '2021010307', 'Buku Gambar', '50000', 7, '/img/product/1609671884mewarnai.jpg', '2021-01-03 05:36:27', '2021-01-03 05:36:27'),
(3, '2021010307', 'I Putu Dharma Yudha', '50000', 7, '/assets/Event.png', '2021-01-03 05:36:27', '2021-01-03 05:36:27'),
(4, '2021010307', 'I Putu Dharma Yudha', '50000', 7, '/img/merchandise/1609678785malinkundang.jpg', '2021-01-03 05:36:27', '2021-01-03 05:36:27'),
(5, '2021010310', 'Buku Gambar', '50000', 5, '/img/product/1609671884mewarnai.jpg', '2021-01-03 05:52:40', '2021-01-03 05:52:40'),
(6, '2021010310', 'I Putu Dharma Yudha', '50000', 5, '/assets/Event.png', '2021-01-03 05:52:40', '2021-01-03 05:52:40'),
(7, '2021010310', 'I Putu Dharma Yudha', '50000', 5, '/img/merchandise/1609678785malinkundang.jpg', '2021-01-03 05:52:41', '2021-01-03 05:52:41'),
(8, '2021010310', 'I Putu Dharma Yudha', '50000', 5, '/assets/Event.png', '2021-01-03 05:52:41', '2021-01-03 05:52:41'),
(9, '2021010310', 'Memasak Bersama', '50000', 5, '/assets/Event.png', '2021-01-03 05:52:41', '2021-01-03 05:52:41'),
(10, '2021010310', 'Memasak Bersama', '50000', 5, '/assets/Event.png', '2021-01-03 05:52:41', '2021-01-03 05:52:41'),
(11, '2021010310', 'I Putu Dharma Yudha', '50000', 5, '/assets/Event.png', '2021-01-03 05:52:41', '2021-01-03 05:52:41'),
(12, '2021010310', 'Buku Gambar', '50000', 5, '/img/product/1609671884mewarnai.jpg', '2021-01-03 05:52:41', '2021-01-03 05:52:41'),
(13, '2021010309', 'I Putu Dharma Yudha', '50000', 5, '/assets/Event.png', '2021-01-03 06:06:00', '2021-01-03 06:06:00'),
(14, '2021010309', 'Memasak Bersama', '50000', 5, '/assets/Event.png', '2021-01-03 06:06:01', '2021-01-03 06:06:01'),
(15, '2021010309', 'Memasak Bersama', '50000', 5, '/assets/Event.png', '2021-01-03 06:06:01', '2021-01-03 06:06:01'),
(16, '2021010309', 'I Putu Dharma Yudha', '50000', 5, '/assets/Event.png', '2021-01-03 06:06:01', '2021-01-03 06:06:01'),
(17, '2021010309', 'Buku Gambar', '50000', 5, '/img/product/1609671884mewarnai.jpg', '2021-01-03 06:06:01', '2021-01-03 06:06:01'),
(18, '2021010309', 'Buku Gambar', '50000', 5, '/img/product/1609671884mewarnai.jpg', '2021-01-03 06:06:01', '2021-01-03 06:06:01'),
(19, '2021010475', 'Buku Gambar', '50000', 9, '/img/product/1609671884mewarnai.jpg', '2021-01-03 17:02:54', '2021-01-03 17:02:54'),
(20, '2021010475', 'Memasak Bersama  Chef Renata', '50000', 9, '/assets/Event.png', '2021-01-03 17:02:54', '2021-01-03 17:02:54'),
(21, '2021010492', 'Kaos rame-rame anak', '50000', 5, '/img/merchandise/1609722665kaosrame.jpg', '2021-01-03 17:12:38', '2021-01-03 17:12:38'),
(22, '2021010492', 'Buku Gambar', '50000', 5, '/img/product/1609671884mewarnai.jpg', '2021-01-03 17:12:39', '2021-01-03 17:12:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_details`
--

CREATE TABLE `transaksi_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isParent` tinyint(4) NOT NULL DEFAULT 0,
  `isAdmin` tinyint(4) NOT NULL DEFAULT 0,
  `isChild` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `isParent`, `isAdmin`, `isChild`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@web.com', NULL, '$2y$10$50FLrmHrO7ht45YgtLm7o.lhVuSWldcCUFQUPeGvzxtA2oNM6Jmwy', 0, 1, 0, NULL, 1, NULL, NULL),
(2, 'Parent', 'parent@web.com', NULL, '$2y$10$nihocGsFSZWUphANCqnkJuj3gvSyqTAcmsh8ylmvwaIAxs1EICgk2', 1, 0, 0, NULL, 1, NULL, NULL),
(3, 'Child', 'child@web.com', NULL, '$2y$10$A/HuI2HGp/Dfu7IlaTs8i.qIu/dDkghfHaU4405cZ2nBDNkDqLone', 0, 0, 1, NULL, 1, NULL, NULL),
(4, 'Ayu Syafira alfain', 'ayu@gmail.com', NULL, '$2y$10$f2KdGqboeN.k.0RxIKKnf.yIXIFnN3cetCQeasZeV4hu5b2FB77Sq', 1, 0, 0, NULL, 1, '2021-01-03 02:53:59', '2021-01-03 02:53:59'),
(5, 'Dharma Yudha', 'yudha@gmail.com', NULL, '$2y$10$bHZkn5j2ZbCVe7ARAYCoKuuvjvO5ee0oVBhgqN7/laHkPwGRM4URm', 0, 0, 1, NULL, 1, '2021-01-03 02:54:00', '2021-01-03 02:54:00'),
(6, 'Dharma Yudha', 'yudha16@gmail.com', NULL, '$2y$10$M5kxJHX5PMyMpwX/eiWhbeQ6Rr7IDpsar12IcQj0H1rA4Gv1K5YJW', 1, 0, 0, NULL, 1, '2021-01-03 05:11:01', '2021-01-03 05:11:01'),
(7, 'Hanif Zahran', 'zahran@gmail.com', NULL, '$2y$10$5FA0QfBDMMZ2i2JmriyNjuYDFU070YySKu2vI2MqlmgUN.xsY5Bye', 0, 0, 1, NULL, 1, '2021-01-03 05:11:01', '2021-01-03 05:11:01'),
(8, 'Syafira Ayu', 'ayusyaf@gmail.com', NULL, '$2y$10$XK37.YHscURd20OtlHG9IeU76ke9Oob8tpksbYKLQjqDCsDMYGoHC', 1, 0, 0, NULL, 1, '2021-01-03 17:02:26', '2021-01-03 17:02:26'),
(9, 'hanfi zahran', 'zahran10@gmail.com', NULL, '$2y$10$TkwLX23raoA0uEqmR/94x.kiMFO/2i5VfBBx1rP594jBBZCdv8BS2', 0, 0, 1, NULL, 1, '2021-01-03 17:02:26', '2021-01-03 17:02:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `videos`
--

INSERT INTO `videos` (`id`, `name`, `category`, `link`, `foto`, `created_at`, `updated_at`) VALUES
(1, '39 BRILLIANT HACKS YOU SHOULD TRY', 'CRAFT', 'https://www.youtube.com/embed/fjvyAPUnNtA', 'malinkundang.jpg', '2021-01-03 05:23:50', '2021-01-03 09:10:45'),
(2, 'How To Cook Like a Chef || Recipes and Food Hacks', 'CRAFT', 'https://www.youtube.com/embed/w8I1m1n-7Lg', 'gambarcerita3.jpg', '2021-01-03 05:41:10', '2021-01-03 09:11:54'),
(3, 'DIY TRAVEL HACKS TO HELP YOU ON A TRIP', 'CRAFT', 'https://www.youtube.com/embed/ovMRb7atXvg', 'malinkundang.jpg', '2021-01-03 06:12:34', '2021-01-03 09:13:00'),
(4, 'COOL TINY DIYs YOU CAN MAKE IN 5 MINUTES', 'DIY', 'https://www.youtube.com/embed/NPzlzkqomvo', 'kurakuras.jpg', '2021-01-03 17:09:31', '2021-01-03 17:09:31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity_children`
--
ALTER TABLE `activity_children`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `competition_details`
--
ALTER TABLE `competition_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dongengs`
--
ALTER TABLE `dongengs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `merchandises`
--
ALTER TABLE `merchandises`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `parent_children`
--
ALTER TABLE `parent_children`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_details`
--
ALTER TABLE `transaksi_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity_children`
--
ALTER TABLE `activity_children`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `children`
--
ALTER TABLE `children`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `competitions`
--
ALTER TABLE `competitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `competition_details`
--
ALTER TABLE `competition_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dongengs`
--
ALTER TABLE `dongengs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `merchandises`
--
ALTER TABLE `merchandises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `parent_children`
--
ALTER TABLE `parent_children`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `transaksi_details`
--
ALTER TABLE `transaksi_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
