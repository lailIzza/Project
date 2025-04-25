-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2025 pada 10.46
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
-- Database: `profil_ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `goals` text DEFAULT NULL,
  `sks` varchar(10) DEFAULT NULL,
  `lecturer` varchar(100) DEFAULT NULL,
  `schedule` varchar(50) DEFAULT NULL,
  `classroom_link` varchar(255) DEFAULT NULL,
  `wa_link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `goals`, `sks`, `lecturer`, `schedule`, `classroom_link`, `wa_link`, `image`) VALUES
(1, 'Pemrograman Web2', 'Mata kuliah yang mengajarkan dasar-dasar pengembangan website, termasuk HTML, CSS, JavaScript, dan pemrograman server-side seperti PHP atau Python. Mata kuliah ini bertujuan untuk memberikan mahasiswa pemahaman teoretis dan praktis mengenai pengembangan aplikasi web, termasuk arsitektur web dan penerapan konsep pengembangan perangkat lunak.', '- Memahami konsep dasar pemrograman web.\n- Menguasai bahasa pemrograman web yang digunakan dalam pengembangan web.\n- Mampu membangun website statis dan dinamis.\n- Mampu mengembangkan aplikasi web yang interaktif dan responsif.\n- Mampu mengakses dan mengelola data menggunakan database.', '4', 'M.Miftakhul Syaikhudin, S.KOM.M.KOM & Pak Fajrul', 'Rabu, 10:00 - 13:00', 'https://classroom.google.com/c/NzU2OTUwNDk1Mzgz', 'https://chat.whatsapp.com/F8rOQkg2ixEApp5C97DIE3', 'pemweb-1.jpg'),
(2, 'Sistem Informasi Manajemen', 'Mata kuliah yang membahas bagaimana sistem informasi digunakan untuk mendukung proses manajemen dalam organisasi.', '- Memahami peran sistem informasi dalam organisasi.\n- Menganalisis kebutuhan informasi manajerial.\n- Mengelola sistem informasi berbasis teknologi.', '3', 'Eddy Kurniawan, S.Kom, MM', 'Selasa, 08:00 - 10:14', 'https://classroom.google.com/c/NzU0NTY3MzAzODMw', 'https://chat.whatsapp.com/EMLCdFjwc6h9BbEicw70ar', 'sim-1.jpg'),
(3, 'Rekayasa Perangkat Lunak', 'Mata kuliah ini memperkenalkan konsep dasar pengembangan perangkat lunak secara sistematis dan terstruktur.', '- Menerapkan siklus hidup pengembangan perangkat lunak.\n- Membuat dokumentasi perangkat lunak.\n- Menggunakan metode pengujian perangkat lunak.', '3', 'Mukhamad Masrur, S.Kom.,', 'Senin, 10:15 - 12:29', 'https://classroom.google.com/c/NzM1MjQ0ODc4NDA3', 'https://chat.whatsapp.com/GSsrEZPtde45Hzod2fHjm5', 'rpl-1.jpg'),
(4, 'Interaksi Manusia dan Komputer', 'Mata kuliah ini membahas prinsip desain antarmuka pengguna dan bagaimana manusia berinteraksi dengan teknologi.', '- Mendesain antarmuka pengguna yang efektif.\n- Menggunakan prinsip-prinsip usability.\n- Mengimplementasikan desain berbasis pengguna.', '3', 'Ahmad Farhan, S.Kom,MM', 'Kamis, 09:30 - 11:44', 'https://classroom.google.com/c/NjY5ODI5MjIyNDY3?cjc=i34b624', 'https://chat.whatsapp.com/LPXsPptGJhw7ugF1qommdW', 'imk-1.jpg'),
(5, 'Metodologi Penelitian SI', 'Mempelajari metode penelitian dalam bidang Sistem Informasi.', '- Menyusun proposal penelitian.\n- Mengidentifikasi metode penelitian kuantitatif dan kualitatif.\n- Mengolah dan menganalisis data penelitian.', '3', 'Yosi Agustiawan , ST.,M.', 'Rabu, 08:00 - 10:14', 'https://classroom.google.com/c/NzM4NDk3MTY0NzA5', 'https://chat.whatsapp.com/JpQzINRdqSa9we2L4zmgdm', 'metopen-1.jpg'),
(6, 'Manajemen Basis Data', 'Mata kuliah ini mengajarkan teknik pengelolaan basis data serta implementasinya dengan DBMS.', '- Mendesain struktur basis data.\n- Mengelola database menggunakan SQL.\n- Melakukan optimasi query.', '3', 'Nufan Balafif, S.Kom., M.', 'Selasa, 10:15 - 12:29', 'https://classroom.google.com/c/NzYwMzY1OTkzMDQ5', 'https://chat.whatsapp.com/LYGm7ovtK7CGnZbUo9KDZU', 'mbd-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
