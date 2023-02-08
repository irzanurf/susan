-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2022 pada 00.16
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_susan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_departemen`
--

CREATE TABLE `tb_departemen` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_departemen`
--

INSERT INTO `tb_departemen` (`id`, `username`, `departemen`) VALUES
(0, 'teknik', 'Umum / Fakultas'),
(1, 'sipil', 'Departemen Teknik Sipil'),
(2, 'arsi', 'Departemen Teknik Arsitektur'),
(3, 'kimia', 'Departemen Teknik Kimia'),
(4, 'pwk', 'Departemen Perencanaan Wilayah dan Kota'),
(5, 'mesin', 'Departemen Teknik Mesin'),
(6, 'elektro', 'Departemen Teknik Elektro'),
(7, 'kapal', 'Departemen Teknik Perkapalan'),
(8, 'industri', 'Departemen Teknik Industri'),
(9, 'lingkungan', 'Departemen Teknik Lingkungan'),
(10, 'geologi', 'Departemen Teknik Geologi'),
(11, 'geodesi', 'Departemen Teknik Geodesi'),
(12, 'komputer', 'Departemen Teknik Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kadep`
--

CREATE TABLE `tb_kadep` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kadep`
--

INSERT INTO `tb_kadep` (`id`, `username`, `departemen`) VALUES
(1, 'kadepsipil', 'Departemen Teknik Sipil'),
(2, 'kadeparsi', 'Departemen Teknik Arsitektur'),
(3, 'kadepkimia', 'Departemen Teknik Kimia'),
(4, 'kadeppwk', 'Departemen Perencanaan Wilayah dan Kota'),
(5, 'kadepmesin', 'Departemen Teknik Mesin'),
(6, 'kadepelektro', 'Departemen Teknik Elektro'),
(7, 'kadepkapal', 'Departemen Teknik Perkapalan'),
(8, 'kadepindustri', 'Departemen Teknik Industri'),
(9, 'kadeplingkungan', 'Departemen Teknik Lingkungan'),
(10, 'kadepgeologi', 'Departemen Teknik Geologi'),
(11, 'kadepgeodesi', 'Departemen Teknik Geodesi'),
(12, 'kadepkomputer', 'Departemen Teknik Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menetapkan`
--

CREATE TABLE `tb_menetapkan` (
  `id` int(100) NOT NULL,
  `id_sk` int(100) NOT NULL,
  `menetapkan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_menetapkan`
--

INSERT INTO `tb_menetapkan` (`id`, `id_sk`, `menetapkan`) VALUES
(1, 6, 'zz'),
(2, 8, 'asdas'),
(3, 9, 's'),
(4, 10, 'as'),
(5, 11, 'sasa'),
(6, 12, 'zxa'),
(7, 13, 'dddddddddd'),
(8, 14, 'dddddddddd'),
(9, 16, 'adaw'),
(10, 17, 'adsad'),
(11, 17, 'xzcc'),
(12, 18, 'xzczc'),
(13, 18, 'xczcxc'),
(14, 19, 'asd'),
(15, 19, 'xzc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mengingat`
--

CREATE TABLE `tb_mengingat` (
  `id` int(100) NOT NULL,
  `id_sk` int(100) NOT NULL,
  `mengingat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mengingat`
--

INSERT INTO `tb_mengingat` (`id`, `id_sk`, `mengingat`) VALUES
(1, 4, 'a'),
(2, 4, 'b'),
(3, 6, 'a'),
(4, 8, 'asxas'),
(5, 9, 's'),
(6, 10, 'sasa'),
(7, 11, 'zx'),
(8, 12, 'hfhfg'),
(9, 13, 'bbbbbbbbbbb'),
(10, 14, 'bbbbbbbbbbb'),
(11, 15, 'as'),
(12, 15, 'as'),
(13, 16, 'sadas'),
(14, 16, 'asdas'),
(15, 17, 'asdad'),
(16, 17, 'adsad'),
(17, 18, 'sdfsf'),
(18, 18, 'asdas'),
(19, 19, 'dfsd'),
(20, 19, 'xcvcx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menimbang`
--

CREATE TABLE `tb_menimbang` (
  `id` int(100) NOT NULL,
  `id_sk` int(100) NOT NULL,
  `menimbang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_menimbang`
--

INSERT INTO `tb_menimbang` (`id`, `id_sk`, `menimbang`) VALUES
(1, 4, 'aa'),
(2, 4, 'bb'),
(3, 6, 'aa'),
(4, 8, 'asxas'),
(5, 9, 's'),
(6, 10, 'as'),
(7, 11, 'asxa'),
(8, 12, 'vcvc'),
(9, 13, 'cccccccccccc'),
(10, 14, 'cccccccccccc'),
(11, 15, 'asdas'),
(12, 15, 'xzcx'),
(13, 16, 'asdas'),
(14, 16, 'xcz'),
(15, 17, 'asdad'),
(16, 17, 'adsad'),
(17, 18, 'zcx'),
(18, 18, 'xzczxc'),
(19, 19, 'cxvds'),
(20, 19, 'wdqw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_note_kadep`
--

CREATE TABLE `tb_note_kadep` (
  `id` int(11) NOT NULL,
  `id_sk` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_note_kadep`
--

INSERT INTO `tb_note_kadep` (`id`, `id_sk`, `catatan`, `tgl`) VALUES
(1, 2, '2', '2022-02-06'),
(2, 3, '3', '2022-02-06'),
(3, 4, '4', '2022-02-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_note_verifikator`
--

CREATE TABLE `tb_note_verifikator` (
  `id` int(11) NOT NULL,
  `id_sk` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_note_wadek1`
--

CREATE TABLE `tb_note_wadek1` (
  `id` int(11) NOT NULL,
  `id_sk` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_note_wadek2`
--

CREATE TABLE `tb_note_wadek2` (
  `id` int(11) NOT NULL,
  `id_sk` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sk`
--

CREATE TABLE `tb_sk` (
  `id` int(100) NOT NULL,
  `no_sk` varchar(100) NOT NULL,
  `judul` text NOT NULL,
  `tentang` text NOT NULL,
  `kategori` tinyint(1) NOT NULL,
  `departemen` int(10) NOT NULL,
  `lampiran` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `spv` varchar(5) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sk`
--

INSERT INTO `tb_sk` (`id`, `no_sk`, `judul`, `tentang`, `kategori`, `departemen`, `lampiran`, `tgl`, `spv`, `status`) VALUES
(1, '', 'aku', 'aku adalah', 0, 6, '', '2022-02-04', 's1', 2),
(2, '', 'dua dua', 'b', 1, 6, '', '2022-02-05', '0', 1),
(3, '', 'a', 'b', 1, 6, '', '2022-02-05', '0', 1),
(4, '', 'asas', 'asassasasasasasa', 0, 6, '', '2022-02-05', '0', 1),
(5, '', 'a', 'a', 0, 6, '', '2022-02-05', '0', 0),
(6, '', 'saaxdas', 'asa', 1, 6, '', '2022-02-05', '0', 0),
(7, '', 'sas', 'azasa', 0, 6, '', '2022-02-05', '0', 0),
(8, '', 'asxasx', 'saxasx', 1, 6, '', '2022-02-05', '0', 0),
(9, '', 'zzsas', 'ZZ', 1, 6, '', '2022-02-05', '0', 0),
(10, '', 'saxas', 'sas', 0, 6, '', '2022-02-05', '0', 0),
(11, '', 's', 'zx', 1, 6, '', '2022-02-05', '0', 0),
(12, '', 'xaz', 'zz', 1, 6, '', '2022-02-05', '0', 0),
(13, '', 'aaaa', 'ssssssssssss', 0, 6, '', '2022-02-05', '0', 0),
(14, '', 'aaaa', 'ssssssssssss', 0, 6, '', '2022-02-05', '0', 0),
(15, '', 'sadad', 'asddas', 0, 6, '', '2022-02-05', '0', 0),
(16, '', 'sdad', 'asdsad', 0, 6, '', '2022-02-05', '0', 0),
(17, '', 'adsda', 'asdasd', 0, 6, '', '2022-02-05', '0', 0),
(18, '', 'sadsa', 'xczc', 0, 6, '', '2022-02-05', '0', 0),
(19, '', 'vfxc', 'cxvx', 0, 6, '', '2022-02-05', '0', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` int(5) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `departemen` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `password`, `role`, `nama`, `departemen`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'Administrator', NULL),
(3, 'teknik', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Teknik', NULL),
(4, 'sipil', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Teknik Sipil', '1'),
(5, 'arsi', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Arsitektur', '2'),
(6, 'kimia', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Teknik Kimia', '3'),
(7, 'pwk', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'PWK', '4'),
(8, 'mesin', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Teknik Mesin', '5'),
(9, 'elektro', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Teknik Elektro', '6'),
(10, 'kapal', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Teknik Perkapalan', '7'),
(11, 'industri', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Teknik Industri', '8'),
(12, 'lingkungan', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Teknik Lingkungan', '9'),
(13, 'geologi', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Teknik Geologi', '10'),
(14, 'geodesi', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Teknik Geodesi', '11'),
(15, 'komputer', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Teknik Komputer', '12'),
(16, 'kadepsipil', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'Teknik Sipil', '1'),
(17, 'kadeparsi', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'Arsitektur', '2'),
(18, 'kadepkimia', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'Teknik Kimia', '3'),
(19, 'kadeppwk', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'PWK', '4'),
(20, 'kadepmesin', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'Teknik Mesin', '5'),
(21, 'kadepelektro', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'Teknik Elektro', '6'),
(22, 'kadepkapal', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'Teknik Perkapalan', '7'),
(23, 'kadepindustri', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'Teknik Industri', '8'),
(24, 'kadeplingkungan', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'Teknik Lingkungan', '9'),
(25, 'kadepgeologi', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'Teknik Geologi', '10'),
(26, 'kadepgeodesi', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'Teknik Geodesi', '11'),
(27, 'kadepkomputer', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'Teknik Komputer', '12'),
(28, 'verifikator', '5f4dcc3b5aa765d61d8327deb882cf99', 4, 'Verifikator', NULL),
(29, 'spv1', '5f4dcc3b5aa765d61d8327deb882cf99', 5, 'Supervisor 1', 's1'),
(30, 'spv2', '5f4dcc3b5aa765d61d8327deb882cf99', 5, 'Supervisor 2', 's2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_departemen`
--
ALTER TABLE `tb_departemen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kadep`
--
ALTER TABLE `tb_kadep`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_menetapkan`
--
ALTER TABLE `tb_menetapkan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mengingat`
--
ALTER TABLE `tb_mengingat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_menimbang`
--
ALTER TABLE `tb_menimbang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_note_kadep`
--
ALTER TABLE `tb_note_kadep`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_note_verifikator`
--
ALTER TABLE `tb_note_verifikator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_note_wadek1`
--
ALTER TABLE `tb_note_wadek1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_note_wadek2`
--
ALTER TABLE `tb_note_wadek2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sk`
--
ALTER TABLE `tb_sk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_departemen`
--
ALTER TABLE `tb_departemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_kadep`
--
ALTER TABLE `tb_kadep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_menetapkan`
--
ALTER TABLE `tb_menetapkan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_mengingat`
--
ALTER TABLE `tb_mengingat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_menimbang`
--
ALTER TABLE `tb_menimbang`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_note_kadep`
--
ALTER TABLE `tb_note_kadep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_note_verifikator`
--
ALTER TABLE `tb_note_verifikator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_note_wadek1`
--
ALTER TABLE `tb_note_wadek1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_note_wadek2`
--
ALTER TABLE `tb_note_wadek2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_sk`
--
ALTER TABLE `tb_sk`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
