-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2021 pada 07.37
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpbo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmhs`
--

CREATE TABLE `tmhs` (
  `id` int(11) NOT NULL,
  `nim` char(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `namamhs` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `jk` enum('L','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `kota` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tmhs`
--

INSERT INTO `tmhs` (`id`, `nim`, `namamhs`, `jk`, `alamat`, `kota`, `email`, `foto`) VALUES
(43, '20051214014', 'Mutiara Vebriani', 'P', 'Dkh.bedagan RT/RW 02/03 Ds.pulung Kec.Pulung, KAB. PONOROGO, PULUNG, JAWA TIMUR', 'Ponorogo', 'mutiara.20014@mhs.unesa.ac.id', 'ARA ALMET.png'),
(44, '20051214018', 'Khoirun Arining Aziah', 'P', 'RT/RW 002/001 Dsn. Wonokoyo Ds. Curahmalang Kec. Sumobito Kab. Jombang', 'Jombang', 'khoirun.20018@mhs.unesa.ac.id', 'PicsArt_07-22-08.36.19.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tmhs`
--
ALTER TABLE `tmhs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tmhs`
--
ALTER TABLE `tmhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
