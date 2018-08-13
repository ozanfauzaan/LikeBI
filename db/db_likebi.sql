-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 09:22 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_likebi`
--

-- --------------------------------------------------------

--
-- Table structure for table `apotik`
--

CREATE TABLE `apotik` (
  `id_apotik` int(11) NOT NULL,
  `nama_apotik` varchar(200) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `alamat_apotik` varchar(255) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `dokter_umum` int(11) NOT NULL,
  `dokter_gigi` int(11) NOT NULL,
  `laboratorium` int(11) NOT NULL,
  `obat` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apotik`
--

INSERT INTO `apotik` (`id_apotik`, `nama_apotik`, `id_prov`, `alamat_apotik`, `lat`, `lng`, `no_telp`, `dokter_umum`, `dokter_gigi`, `laboratorium`, `obat`, `note`) VALUES
(1, 'Apotik Farmarin 1 Kebon Sirih', 1, 'Gedung Kebon Sirih Lantai 1 Bank Indonesia', -6.1823895, 106.8175818, '0212311940', 2, 2, 2, 1, 'Jadwal praktek dokter umum dan dokter gigi, serta pemeriksaan laboratorium agar dikonfirmasi melalui No.telepon  masing-masing Klinik '),
(2, 'Poliklinik Terpadu Bidakara Medical Center (BiMC) & Apotek Farmarin III', 1, 'Gedung Pusdiklat Binasentra Jl. Jend. Gatot Subroto Kav. 71-73, Jakarta Selatan', -6.242183, 106.843146, '02183783535', 1, 1, 1, 1, 'Jadwal praktek dokter umum dan dokter gigi, serta pemeriksaan laboratorium agar dikonfirmasi melalui No.telepon  masing-masing Klinik '),
(3, 'Klinik Farmatama & Apotek Farmarin II Penggilingan', 1, 'Jl. Kompl. Taman Pulo Indah Blok I No.7-8 Penggilingan', -6.198285, 106.936451, '0214800688', 1, 1, 1, 2, 'Jadwal praktek dokter umum dan dokter gigi, serta pemeriksaan laboratorium agar dikonfirmasi melalui No.telepon  masing-masing Klinik '),
(4, 'Klinik Farmatama & Apotek Farmarin IV Bintaro', 1, 'Jl. Pondok Betung Raya No.46 Pd. Aren', -6.261543, 106.747438, '0217357077', 1, 1, 1, 2, 'Jadwal praktek dokter umum dan dokter gigi, serta pemeriksaan laboratorium agar dikonfirmasi melalui No.telepon  masing-masing Klinik ');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `id_jenisdokter` int(11) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `alamat_dokter` varchar(255) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `id_jenisdokter`, `nama_dokter`, `id_prov`, `alamat_dokter`, `lat`, `lng`, `no_telp`) VALUES
(1, 1, 'Drg. Stephanie Raharjo', 1, 'Jl.setia budi no. 38 Pamulang, Tanggerang', -6.3490409, 106.7353141, '0217203053'),
(2, 1, 'Drg. Gunawan Atmadja', 1, 'Jl.Jatinegara Timur II/3 Jakarta Timur', -6.2185462, 106.8659852, '02172788688'),
(3, 1, 'Drg. Irawati Wisnuwardani', 1, 'Jl. LL No. C-5, Komp. Kehakiman, Cipinang', -6.2401955, 106.8993571, '0214756207'),
(5, 1, 'Drg. Ria Andriani', 1, 'Ruko Bona Indah Bisnis Center No. 8N', -6.301094, 106.780762, '02129237063'),
(6, 1, 'Drg. Jeanie Herdiani', 1, 'Jl. Arabika III Blok X3 No. 16, Pondok Kopi, Jakarta Timur', -6.229368, 106.946121, '0218606202'),
(7, 1, 'Drg. Indah', 1, 'Jl. Kutilang I Blok M5 No. 7, Bintaro Jaya', -6.280113, 106.751195, '-'),
(8, 1, 'Drg. Suci Bonowati', 1, 'Jl. Cipinang Elok I Blok B No. 51, Komplek Cipinang Elok', -6.220509, 106.889126, '0218193594'),
(9, 1, 'Drg. Elisabeth Siburian', 8, 'Jl. Pahlawan No.4, Rempoa, Ciputat', -6.285319, 106.760053, '0217430366'),
(10, 1, 'Drg. Eka Putri Oktarina S', 1, 'Jl. Warga No.55 Komp.MA, Pejaten Barat, Jakarta Selatan', -6.272475, 106.842, '0217995317'),
(11, 1, 'Drg. Ny. Nany Rusadi', 2, 'Jl. Kaca Piring F IV/55 Cinere Estate, Depok', -6.344777, 106.782042, '081287859856');

-- --------------------------------------------------------

--
-- Table structure for table `jenisdokter`
--

CREATE TABLE `jenisdokter` (
  `id_jenisdokter` int(11) NOT NULL,
  `jenisdokter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenisdokter`
--

INSERT INTO `jenisdokter` (`id_jenisdokter`, `jenisdokter`) VALUES
(1, 'Dokter Gigi'),
(2, 'Spesialis Dokter Kelamin');

-- --------------------------------------------------------

--
-- Table structure for table `laboratorium`
--

CREATE TABLE `laboratorium` (
  `id_lab` int(11) NOT NULL,
  `nama_lab` varchar(255) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `alamat_lab` varchar(255) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laboratorium`
--

INSERT INTO `laboratorium` (`id_lab`, `nama_lab`, `id_prov`, `alamat_lab`, `lat`, `lng`, `no_telp`) VALUES
(1, 'Prodia cabang Kramat', 1, 'Jl. Kramat Raya No. 150', -6.188722, 106.8434203, '0213906709'),
(2, 'Prodia cabang Kedoya', 1, 'Jl. Kedoya Agave Raya, Perkantoran Tomang Tol Raya Blok AII/22', -6.189505, 106.766533, '0215803066'),
(3, 'Prodia cabang Puri Indah', 1, 'Kompleks Sentra Niaga Puri Indah Blok T6/28 Jl. Puri Lingkar Dalam', -6.187886, 106.736364, '02158304501'),
(4, 'Prodia cabang Kelapa Gading', 1, 'Jl. Boulevard Raya Blok H4 No.15 Kelapa Gading Permai', -6.171589, 106.898597, '0214522148'),
(5, 'Prodia cabang Sunter', 1, 'Jl. Danau Sunter Utara Blok C2 No. 1B-1C', -6.137595, 106.874637, '02165308116'),
(6, 'Prodia cabang Cibubur', 2, 'Jl. Alternatif Cibubur Cileungsi No. 8 C-D Depok', -6.375949, 106.898651, '02184598650'),
(7, 'Prodia Cabang Arteri Pondok Indah', 1, ' Jl. Sultan Iskandar Muda No. 31C Kebayoran Lama', -6.24531, 106.781895, '0217227728'),
(8, 'Prodia cabang Bintaro', 8, 'Ruko Kebayoran Arcade 2 Sektor 7, Blok B3 No. 33-35', -6.272635, 106.715822, '0217370185'),
(9, 'Prodia cabang Bona Indah', 1, 'Ruko Bona Indah Blok A2/Kav. C7, Jl. Karang Tengah Raya Lebak E', -6.299927, 106.782463, '0217506715'),
(10, 'Prodia cabang Kampung Melayu', 1, 'Jl. KH. Abdullah Syafei No.28', -6.223948, 106.848151, '0218308055'),
(11, 'Prodia cabang Kebayoran', 1, 'Jl Gunawarman No.77 Kebayoran Baru', -6.238536, 106.807423, '0217220203'),
(12, 'Prodia cabang Pasar Minggu', 1, 'Jl. Raya Pasar Minggu No. 98 E, Jakarta Selatan', -6.278248, 106.845506, '0217986247'),
(13, 'Prodia cabang Bogor', 2, 'Jl. Jendral Sudirman No. 38B Bogor', -6.584165, 106.79706, '02518351612'),
(14, 'Prodia cabang Depok', 2, 'Ruko Pesona Khayangan No.9 Jl. Margonda Raya No.45', -6.383058, 106.83013, '0217751178'),
(15, 'Prodia cabang Tanggerang', 8, 'Sutera Niaga I No.21 Ruko Alam Sutera, Serpong, Tanggerang', -6.248934, 106.650305, '0215399961'),
(16, 'Prodia Gading Serpong', 8, 'Ruko Paramount Center 1A/32 Jl. Kelapa Dua', -6.243114, 106.625196, '02129014884'),
(17, 'Prodia cabang BSD', 8, 'Jl. Letnan Sutopo, Ruko Golden Madrid Blok B No. 1-2 Bumi Serpong', -6.303365, 106.685372, '02153160403'),
(18, 'Prodia cabang Bekasi', 2, 'Jl. KH Noer Ali No 90, Kayuringin Jaya, Bekasi Selatan', -6.247873, 106.98085, '0218840480'),
(19, 'Prodia cabang Harapan Indah', 2, 'Ruko Sentra Niaga, Boulevard Hijau Blok C5/41 Harapan Indah, Bekasi', -6.184421, 106.984393, '02129465476'),
(20, 'Prodia cabang Summarecon Bekasi', 2, 'Rukan Sinpasa Blok A 20 Jl. Boulevard Selatan Summarecon Bekasi', -6.228554, 107.001136, '0218840480');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` int(11) NOT NULL,
  `nama_prov` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `nama_prov`) VALUES
(1, 'DKI Jakarta'),
(2, 'Jawa Barat'),
(3, 'Jawa Tengah'),
(4, 'Jawa Timur'),
(5, 'Daerah Istimewa Yogyakarta'),
(6, 'Nusa Tenggara Timur'),
(7, 'Nusa Tenggara Barat'),
(8, 'Banten'),
(9, 'Sumatra Utara'),
(10, 'Aceh'),
(11, 'Bali'),
(12, 'Bengkulu'),
(13, 'Gorontalo'),
(14, 'Jambi'),
(15, 'Kalimantan Barat'),
(16, 'Kalimantan Selatan'),
(17, 'Kalimantan Tengah'),
(18, 'Kalimantan Timur'),
(19, 'Kalimantan Utara'),
(20, 'Kepulauan Bangka Belitung'),
(21, 'Kepulauan Riau'),
(22, 'Lampung'),
(23, 'Maluku'),
(24, 'Maluku Utara'),
(25, 'Papua'),
(26, 'Papua Barat'),
(27, 'Riau'),
(28, 'Sulawesi Barat'),
(29, 'Sulawesi Utara'),
(30, 'Sulawesi Tenggara'),
(31, 'Sulawesi Tengah'),
(32, 'Sulawesi Selatan'),
(33, 'Sumatra Selatan'),
(34, 'Sumatra Barat');

-- --------------------------------------------------------

--
-- Table structure for table `rumahsakit`
--

CREATE TABLE `rumahsakit` (
  `id_rs` int(11) NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `alamat_rs` varchar(255) NOT NULL,
  `lat` int(11) NOT NULL,
  `lng` int(11) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `konsultasi_dokter_spesialis` int(11) NOT NULL,
  `konsultasi_dokter_subspesialis` int(11) NOT NULL,
  `pemeriksaan_penunjang` int(11) NOT NULL,
  `tindakan_medis` int(11) NOT NULL,
  `obat` int(11) NOT NULL,
  `mri_ct_petscan` int(11) NOT NULL,
  `bpjs_kesehatan_rawatjalan` int(11) NOT NULL,
  `jaminan_surat_ykkbi` int(11) NOT NULL,
  `bpjs_kesehatan_rawatinap` int(11) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rumahsakit`
--

INSERT INTO `rumahsakit` (`id_rs`, `nama_rs`, `id_prov`, `alamat_rs`, `lat`, `lng`, `no_telp`, `konsultasi_dokter_spesialis`, `konsultasi_dokter_subspesialis`, `pemeriksaan_penunjang`, `tindakan_medis`, `obat`, `mri_ct_petscan`, `bpjs_kesehatan_rawatjalan`, `jaminan_surat_ykkbi`, `bpjs_kesehatan_rawatinap`, `catatan`) VALUES
(1, 'RSIA Bunda Jakarta', 1, 'Jln Cik Ditiro No 28. Menteng, Jakarta Pusat', 123131, 3213131, '021-31922005', 2, 2, 2, 2, 2, 2, 2, 1, 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apotik`
--
ALTER TABLE `apotik`
  ADD PRIMARY KEY (`id_apotik`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `jenisdokter`
--
ALTER TABLE `jenisdokter`
  ADD PRIMARY KEY (`id_jenisdokter`);

--
-- Indexes for table `laboratorium`
--
ALTER TABLE `laboratorium`
  ADD PRIMARY KEY (`id_lab`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indexes for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  ADD PRIMARY KEY (`id_rs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apotik`
--
ALTER TABLE `apotik`
  MODIFY `id_apotik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jenisdokter`
--
ALTER TABLE `jenisdokter`
  MODIFY `id_jenisdokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laboratorium`
--
ALTER TABLE `laboratorium`
  MODIFY `id_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  MODIFY `id_rs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
