-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2025 at 05:13 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `email`, `telepon`, `alamat`, `deskripsi`) VALUES
(1, 'Muhammad Imam Faisal', 'Sukabumi', '2005-03-13', 'muhif13@ummi.ac.id', '0838-7415-1326', 'Perumahan Villa AdiPrima Blok E1, No.1, Desa Langensari, Kecamatan Sukaraja, Kabupaten Sukabumi, Provinsi Jawa Barat, Indonesia', 'Saya memiliki pengalaman di bidang operasional seperti pengelolaan gudang, pekerjaan lapangan, serta pengalaman organisasi dengan tanggung jawab kepemimpinan.');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id` int NOT NULL,
  `biodata_id` int DEFAULT NULL,
  `posisi` varchar(150) DEFAULT NULL,
  `organisasi` varchar(150) DEFAULT NULL,
  `tahun` year DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id`, `biodata_id`, `posisi`, `organisasi`, `tahun`, `deskripsi`) VALUES
(1, 1, 'Ketua Pelaksana', 'Pelatihan Dasar Organisasi Himpunan Mahasiswa Teknik Informatika', '2025', 'Memimpin panitia, menyusun rundown acara, dan mengkoordinasi tim untuk melatih anggota baru tentang dasar organisasi.'),
(2, 1, 'Ketua Pelaksana', 'Panitia Agustus ', '2024', 'Memimpin keseluruhan rangkaian kegiatan peringatan Agustus 2025, mulai dari perencanaan konsep acara, pembentukan panitia, hingga pelaksanaan kegiatan. Mengatur pembagian tugas, menyusun timeline, serta memastikan koordinasi antarbidang berjalan efektif. Bertanggung jawab dalam pengambilan keputusan, pengawasan anggaran, dan evaluasi akhir kegiatan agar seluruh acara berjalan tertib, meriah, dan sesuai target.'),
(3, 1, 'Koordinator Keamanan', 'Hari Teknik Informatika (HARTIK)', '2025', 'Bertugas sebagai penanggung jawab utama keamanan selama acara HARTIK 2025. Mengatur strategi keamanan, membagi tim jaga di beberapa titik lokasi, dan memastikan seluruh rangkaian acara berjalan kondusif. Melakukan briefing dengan anggota keamanan, berkoordinasi dengan panitia lain, serta menindaklanjuti potensi risiko agar acara dapat berlangsung aman, tertib, dan tanpa insiden.'),
(4, 1, 'Anggota Humas', 'Karang Taruna', '2024', 'Berperan dalam menjalin komunikasi antara Karang Taruna dan masyarakat. Membantu membuat materi publikasi, menyebarkan informasi kegiatan, serta melakukan pendekatan kepada pihak terkait seperti RT/RW, masyarakat umum, dan mitra acara. Mendukung kelancaran kegiatan dengan memastikan informasi tersampaikan dengan jelas dan membangun citra positif organisasi di lingkungan masyarakat.');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int NOT NULL,
  `biodata_id` int DEFAULT NULL,
  `jenjang` varchar(100) DEFAULT NULL,
  `institusi` varchar(150) DEFAULT NULL,
  `tahun_mulai` year DEFAULT NULL,
  `tahun_selesai` year DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `biodata_id`, `jenjang`, `institusi`, `tahun_mulai`, `tahun_selesai`) VALUES
(1, 1, 'SMA', 'SMA Negeri 1 Sukaraja', '2020', '2023'),
(2, 1, 'Sarjana (sedang)', 'Universitas Muhammadiyah Sukabumi', '2023', '2027');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int NOT NULL,
  `biodata_id` int DEFAULT NULL,
  `posisi` varchar(150) DEFAULT NULL,
  `tempat` varchar(150) DEFAULT NULL,
  `tahun_mulai` year DEFAULT NULL,
  `tahun_selesai` year DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `biodata_id`, `posisi`, `tempat`, `tahun_mulai`, `tahun_selesai`, `deskripsi`) VALUES
(1, 1, 'Pengelola Gudang', 'Apotek Bunut', '2023', '2024', 'Mengelola stok obat, memantau barang masuk/keluar, memastikan gudang bersih dan sesuai standar.'),
(2, 1, 'Karyawan Operasional', 'MBG', '2022', '2022', 'Membantu proses bongkar muat, pengecekan kualitas barang, dan pengemasan.'),
(3, 1, 'Gentala Chicken', 'Usaha Sendiri', '2019', '2021', 'Mengelola penjualan ayam, pemotongan, stok barang, dan transaksi harian.'),
(4, 1, 'Anggota KPPS', 'Perumahan Villa AdiPrima - Pemilu 2024', '2024', '2024', 'Melayani pemilih di TPS, mengelola daftar hadir, dan membantu proses pemungutan suara.');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int NOT NULL,
  `judul` varchar(150) NOT NULL,
  `deskripsi` text,
  `link` varchar(255) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `judul`, `deskripsi`, `link`, `tahun`, `gambar`) VALUES
(1, 'Aplikasi Monitoring Stok Gudang Apotek', 'Membantu proses pemantauan stok obat di gudang apotek dengan membuat laporan harian berbasis spreadsheet yang terstruktur. Membuat sistem pencatatan masuk/keluar barang dan alarm manual untuk stok menipis.', NULL, '2023', NULL),
(2, 'Sistem Pengelolaan Barang MBG (Micro Inventory System)', 'Terlibat dalam proses monitoring dan pencatatan barang masuk/keluar di MBG melalui digitalisasi laporan menggunakan Google Sheet & Excel otomatis. Meningkatkan efisiensi pencatatan hingga 40%.', NULL, '2022', NULL),
(3, 'Pelatihan Dasar Organisasi TI - Ketua Pelaksana', 'Menjadi ketua pelaksana acara pelatihan dasar organisasi untuk mahasiswa TI. Mengelola kepanitiaan, menyiapkan materi, serta mengatur dokumentasi dan publikasi kegiatan.', NULL, '2021', NULL),
(4, 'Sistem Pencatatan Penjualan Ayam Harian (Simple Cashflow)', 'Mengembangkan format digital sederhana untuk mencatat pemasukan, pengeluaran, dan stok harian usaha berjualan ayam. Mengurangi kesalahan pencatatan manual hingga 70%.', NULL, '2020', NULL),
(5, 'Manajemen Data KPPS Pada Pemilu', 'Berperan dalam pendataan pemilih, pengelolaan dokumen, serta pelaporan rekapitulasi suara di TPS menggunakan format digital yang lebih rapi dan terstruktur.', NULL, '2024', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `biodata_id` int DEFAULT NULL,
  `skill` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `biodata_id`, `skill`) VALUES
(1, 1, 'Manajemen gudang'),
(2, 1, 'Pengecekan stok & kualitas barang'),
(3, 1, 'Komunikasi dan pelayanan masyarakat'),
(4, 1, 'Kepemimpinan dan koordinasi organisasi'),
(5, 1, 'Pekerjaan lapangan'),
(6, 1, 'Microsoft Word & Excel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD CONSTRAINT `organisasi_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`);

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`);

--
-- Constraints for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `pengalaman_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
