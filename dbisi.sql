-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for website01
DROP DATABASE IF EXISTS `website01`;
CREATE DATABASE IF NOT EXISTS `website01` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `website01`;

-- Dumping structure for table website01.beritas
DROP TABLE IF EXISTS `beritas`;
CREATE TABLE IF NOT EXISTS `beritas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exeprt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `refruangan_id` bigint(20) unsigned NOT NULL,
  `refkategori_id` bigint(20) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.beritas: ~0 rows (approximately)
/*!40000 ALTER TABLE `beritas` DISABLE KEYS */;
/*!40000 ALTER TABLE `beritas` ENABLE KEYS */;

-- Dumping structure for table website01.dokters
DROP TABLE IF EXISTS `dokters`;
CREATE TABLE IF NOT EXISTS `dokters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refsmf_id` bigint(20) unsigned NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residen` tinyint(1) NOT NULL,
  `refpoliklinik_id` bigint(20) unsigned DEFAULT NULL,
  `senin` tinyint(1) DEFAULT NULL,
  `selasa` tinyint(1) DEFAULT NULL,
  `rabu` tinyint(1) DEFAULT NULL,
  `kamis` tinyint(1) DEFAULT NULL,
  `jumat` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.dokters: ~0 rows (approximately)
/*!40000 ALTER TABLE `dokters` DISABLE KEYS */;
/*!40000 ALTER TABLE `dokters` ENABLE KEYS */;

-- Dumping structure for table website01.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table website01.jabatans
DROP TABLE IF EXISTS `jabatans`;
CREATE TABLE IF NOT EXISTS `jabatans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refjabatan_id` bigint(20) unsigned NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.jabatans: ~0 rows (approximately)
/*!40000 ALTER TABLE `jabatans` DISABLE KEYS */;
/*!40000 ALTER TABLE `jabatans` ENABLE KEYS */;

-- Dumping structure for table website01.jadwaldokters
DROP TABLE IF EXISTS `jadwaldokters`;
CREATE TABLE IF NOT EXISTS `jadwaldokters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.jadwaldokters: ~0 rows (approximately)
/*!40000 ALTER TABLE `jadwaldokters` DISABLE KEYS */;
/*!40000 ALTER TABLE `jadwaldokters` ENABLE KEYS */;

-- Dumping structure for table website01.menuindikators
DROP TABLE IF EXISTS `menuindikators`;
CREATE TABLE IF NOT EXISTS `menuindikators` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tahun` year(4) NOT NULL,
  `refindikator_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `refruangan_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.menuindikators: ~4 rows (approximately)
/*!40000 ALTER TABLE `menuindikators` DISABLE KEYS */;
REPLACE INTO `menuindikators` (`id`, `tahun`, `refindikator_id`, `user_id`, `refruangan_id`, `created_at`, `updated_at`) VALUES
	(1, '2022', 1, 1, 1, '2022-08-26 12:10:46', '2022-08-26 12:10:46'),
	(2, '2022', 2, 1, 1, '2022-08-26 12:24:42', '2022-08-26 12:24:42'),
	(3, '2022', 3, 1, 1, '2022-08-27 01:23:40', '2022-08-27 01:23:40'),
	(4, '2022', 4, 1, 1, '2022-08-27 01:23:46', '2022-08-27 01:23:46');
/*!40000 ALTER TABLE `menuindikators` ENABLE KEYS */;

-- Dumping structure for table website01.menuinserts
DROP TABLE IF EXISTS `menuinserts`;
CREATE TABLE IF NOT EXISTS `menuinserts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` bigint(20) unsigned NOT NULL,
  `index` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.menuinserts: ~0 rows (approximately)
/*!40000 ALTER TABLE `menuinserts` DISABLE KEYS */;
/*!40000 ALTER TABLE `menuinserts` ENABLE KEYS */;

-- Dumping structure for table website01.menus
DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.menus: ~0 rows (approximately)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
REPLACE INTO `menus` (`id`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Radiologi', 0, NULL, NULL);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Dumping structure for table website01.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.migrations: ~17 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_05_09_134456_create_refruangans_table', 1),
	(6, '2022_05_09_135028_create_refkategoris_table', 1),
	(7, '2022_05_09_135210_create_dokters_table', 1),
	(8, '2022_05_09_135526_create_refsmfs_table', 1),
	(9, '2022_05_18_053119_create_beritas_table', 1),
	(10, '2022_05_31_012335_create_refjabatans_table', 1),
	(11, '2022_05_31_021618_create_jabatans_table', 1),
	(12, '2022_06_02_012732_create_jadwaldokters_table', 1),
	(13, '2022_06_04_004936_create_refpolikliniks_table', 1),
	(14, '2022_06_09_020646_create_menus_table', 1),
	(15, '2022_06_09_023912_create_menuinserts_table', 1),
	(16, '2022_08_25_041215_create_refindikators_table', 1),
	(17, '2022_08_25_052508_create_menuindikators_table', 1),
	(18, '2022_08_26_113529_create_refjuduldetailindikators_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table website01.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table website01.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table website01.refindikators
DROP TABLE IF EXISTS `refindikators`;
CREATE TABLE IF NOT EXISTS `refindikators` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.refindikators: ~4 rows (approximately)
/*!40000 ALTER TABLE `refindikators` DISABLE KEYS */;
REPLACE INTO `refindikators` (`id`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Indikator Mutu Nasional', 1, '2022-08-26 12:03:20', '2022-08-26 12:03:20'),
	(2, 'Area Prioritas Klinik', 1, '2022-08-26 12:03:39', '2022-08-26 12:03:39'),
	(3, 'Area Prioritas Manajemen', 1, '2022-08-26 12:04:23', '2022-08-26 12:04:23'),
	(4, 'Area Prioritas Keselamatan pasien', 1, '2022-08-26 12:04:32', '2022-08-26 12:04:32');
/*!40000 ALTER TABLE `refindikators` ENABLE KEYS */;

-- Dumping structure for table website01.refjabatans
DROP TABLE IF EXISTS `refjabatans`;
CREATE TABLE IF NOT EXISTS `refjabatans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.refjabatans: ~0 rows (approximately)
/*!40000 ALTER TABLE `refjabatans` DISABLE KEYS */;
/*!40000 ALTER TABLE `refjabatans` ENABLE KEYS */;

-- Dumping structure for table website01.refjuduldetailindikators
DROP TABLE IF EXISTS `refjuduldetailindikators`;
CREATE TABLE IF NOT EXISTS `refjuduldetailindikators` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `refindikator_id` bigint(20) unsigned NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.refjuduldetailindikators: ~28 rows (approximately)
/*!40000 ALTER TABLE `refjuduldetailindikators` DISABLE KEYS */;
REPLACE INTO `refjuduldetailindikators` (`id`, `refindikator_id`, `deskripsi`, `status`) VALUES
	(1, 1, 'Kepatuhan Kebersihan Tangan ', 1),
	(2, 1, 'Kepatuhan Penggunaan Alat Pelindung Diri (APD)', 1),
	(3, 1, 'Kepatuhan identifikasi pasien', 1),
	(4, 1, 'Waktu Tanggap Operasi Seksio Sesarea Emergensi ', 1),
	(5, 1, 'Waktu Tunggu Rawat Jalan ', 1),
	(6, 1, 'Penundaan operasi elektif', 1),
	(7, 1, 'Kepatuhan Waktu Visite  Dokter ', 1),
	(8, 1, 'Pelaporan Hasil Kritis Laboratorium ', 1),
	(9, 1, 'Kepatuhan penggunaan formularium', 1),
	(10, 1, 'Kepatuhan Terhadap Alur Klinis (Clinical Pathway)', 1),
	(11, 1, 'Kepatuhan Upaya Pencegahan Resiko Pasien Jatuh ', 1),
	(12, 1, 'Kecepatan Waktu Tanggap Komplain ', 1),
	(13, 1, 'Kepuasan Pasien', 1),
	(14, 2, 'Kelengkapan Assesmen Awal medis dalam waktu 24 Jam Setelah Pelayanan pada pasien Obgyn', 1),
	(15, 2, 'Pertolongan persalinan melalui seksio caesaria', 1),
	(16, 2, 'Status Fsiologi selama anatesi pada pasien Obgyn', 1),
	(17, 2, 'Kelengkapan informed consent setelah mendapatkan informasi yang jelas pada pasien Obgyn', 1),
	(18, 2, 'Infeksi Daerah Operasi (IDO) pada pasien Obgyn', 1),
	(19, 3, 'Kematian ibu melahirkan karena pendarahan', 1),
	(20, 3, 'Kematian ibu melahirkan karena eklamsi', 1),
	(21, 3, 'Respon time cito SC', 1),
	(22, 3, 'Angka kepuasan pasien rawat inap kebidanan', 1),
	(23, 4, 'Kepatuhan Identifikasi pada Pasien Obgyn', 1),
	(24, 4, 'Kepatuhan pengisian Tulbakon pada pasien Rawat inap Kebidanan  ', 1),
	(25, 4, 'Angka peningkatan keamanan obat yang perlu diwaspadai (HAM) di Rawat inap Kebidanan', 1),
	(26, 4, 'Kelengkapan pengisian penandaan lokasi operasi pada pasien obgyn', 1),
	(27, 4, 'Angka pengurangan risiko infeksi melalui kepatuhan cuci tangan di Rawat inap kebidanan', 1),
	(28, 4, 'Kepatuhan upaya pencegahan risiko cedera akibat pasien jatuh pada obgyn', 1);
/*!40000 ALTER TABLE `refjuduldetailindikators` ENABLE KEYS */;

-- Dumping structure for table website01.refkategoris
DROP TABLE IF EXISTS `refkategoris`;
CREATE TABLE IF NOT EXISTS `refkategoris` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.refkategoris: ~0 rows (approximately)
/*!40000 ALTER TABLE `refkategoris` DISABLE KEYS */;
/*!40000 ALTER TABLE `refkategoris` ENABLE KEYS */;

-- Dumping structure for table website01.refpolikliniks
DROP TABLE IF EXISTS `refpolikliniks`;
CREATE TABLE IF NOT EXISTS `refpolikliniks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.refpolikliniks: ~2 rows (approximately)
/*!40000 ALTER TABLE `refpolikliniks` DISABLE KEYS */;
REPLACE INTO `refpolikliniks` (`id`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Radiologi', 1, '2022-08-26 11:43:19', '2022-08-26 11:43:19'),
	(2, 'Poli Mata', 1, '2022-08-26 11:43:37', '2022-08-26 11:43:37');
/*!40000 ALTER TABLE `refpolikliniks` ENABLE KEYS */;

-- Dumping structure for table website01.refruangans
DROP TABLE IF EXISTS `refruangans`;
CREATE TABLE IF NOT EXISTS `refruangans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.refruangans: ~0 rows (approximately)
/*!40000 ALTER TABLE `refruangans` DISABLE KEYS */;
REPLACE INTO `refruangans` (`id`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'PPDE', 1, '2022-08-26 11:09:58', '2022-08-26 11:09:58');
/*!40000 ALTER TABLE `refruangans` ENABLE KEYS */;

-- Dumping structure for table website01.refsmfs
DROP TABLE IF EXISTS `refsmfs`;
CREATE TABLE IF NOT EXISTS `refsmfs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.refsmfs: ~2 rows (approximately)
/*!40000 ALTER TABLE `refsmfs` DISABLE KEYS */;
REPLACE INTO `refsmfs` (`id`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Radiologi', 0, NULL, NULL),
	(2, 'Anastesi', 1, '2022-08-26 12:00:51', '2022-08-26 12:00:51');
/*!40000 ALTER TABLE `refsmfs` ENABLE KEYS */;

-- Dumping structure for table website01.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refruangan_id` bigint(20) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table website01.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `nama`, `username`, `password`, `refruangan_id`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
	(1, 'Ragil M. Rivandi', 'immedy', '$2y$10$7wH9MeSgZ6vbSksJJ9Yw7OgFufzD6vMnWrurXxwVvJCAnfWMGql6m', 1, NULL, '2022-08-26 11:10:22', '2022-08-26 11:10:22', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
