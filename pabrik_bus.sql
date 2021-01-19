-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2021 pada 12.19
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pabrik_bus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `body_bus`
--

CREATE TABLE `body_bus` (
  `id_body` int(10) NOT NULL,
  `jenis_body` varchar(50) DEFAULT NULL,
  `jumlah_seat` int(10) DEFAULT NULL,
  `merek_seat` varchar(50) DEFAULT NULL,
  `ac` enum('Yes','No') DEFAULT NULL,
  `audio` enum('Yes','No') DEFAULT NULL,
  `toilet` enum('Yes','No') DEFAULT NULL,
  `harga_body` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `body_bus`
--

INSERT INTO `body_bus` (`id_body`, `jenis_body`, `jumlah_seat`, `merek_seat`, `ac`, `audio`, `toilet`, `harga_body`) VALUES
(1, 'JB3+', 50, 'Rimba kencana', 'Yes', 'Yes', 'Yes', 700000000),
(4, 'UHD', 40, 'AMG', 'Yes', 'Yes', 'Yes', 1000000000),
(7, 'MICRO BUS', 25, 'Rimba kencana', 'Yes', 'Yes', 'No', 500000000),
(8, 'SDD', 55, 'AMG', 'Yes', 'Yes', 'Yes', 300000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bus`
--

CREATE TABLE `bus` (
  `id_bus` int(10) NOT NULL,
  `kode_pemesanan` int(10) DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bus`
--

INSERT INTO `bus` (`id_bus`, `kode_pemesanan`, `tgl_selesai`) VALUES
(1, 11, '2020-12-24'),
(2, 12, '2020-12-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` tinytext,
  `no_telpon` varchar(12) DEFAULT NULL,
  `nama_perusahaan_bus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `alamat`, `no_telpon`, `nama_perusahaan_bus`) VALUES
(4, 'Baddridduja', 'Sanggra Agung 03 Socah Bangkalan - Madura', '085606447599', 'PT. Badrid trans'),
(5, 'anto', 'kamal', '085606447599', 'PT. Peltim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kode_pemesanan` int(50) NOT NULL,
  `merek` varchar(50) DEFAULT NULL,
  `type_chasis` varchar(50) DEFAULT NULL,
  `id_body` int(50) DEFAULT NULL,
  `konfigurasi_kursi` varchar(50) DEFAULT NULL,
  `tgl_pemesanan` date DEFAULT NULL,
  `id_customer` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`kode_pemesanan`, `merek`, `type_chasis`, `id_body`, `konfigurasi_kursi`, `tgl_pemesanan`, `id_customer`) VALUES
(11, 'Mercedes benz', 'Mercy 1626', 1, '2-1', '2020-12-24', 4),
(12, 'Scania', 'Scania K27OUA', 4, '2-2', '2020-12-24', 5),
(13, 'Volvo', 'Volvo B11R', 4, '2-2', '2020-12-26', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `body_bus`
--
ALTER TABLE `body_bus`
  ADD PRIMARY KEY (`id_body`);

--
-- Indeks untuk tabel `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id_bus`),
  ADD KEY `id_customer` (`kode_pemesanan`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kode_pemesanan`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `FK_pemesanan_body_bus` (`id_body`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `body_bus`
--
ALTER TABLE `body_bus`
  MODIFY `id_body` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `bus`
--
ALTER TABLE `bus`
  MODIFY `id_bus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `kode_pemesanan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `FK_bus_pemesanan` FOREIGN KEY (`kode_pemesanan`) REFERENCES `pemesanan` (`kode_pemesanan`);

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `FK_pemesanan_body_bus` FOREIGN KEY (`id_body`) REFERENCES `body_bus` (`id_body`),
  ADD CONSTRAINT `FK_pemesanan_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
