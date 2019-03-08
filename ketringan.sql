-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Feb 2019 pada 08.24
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ketringan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `Id_Akun` varchar(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` enum('Admin','Bg_Keuangan','CS','Vendor') NOT NULL,
  `Aktifitas_Akun` enum('online','offline') NOT NULL,
  `Status_Akun` enum('aktif','nonaktif') NOT NULL,
  `Created_at` text NOT NULL,
  `Update_at` text NOT NULL,
  `Delete_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`Id_Akun`, `Username`, `Password`, `Role`, `Aktifitas_Akun`, `Status_Akun`, `Created_at`, `Update_at`, `Delete_at`) VALUES
('AKN-1', 'NiaAdmin', '8728075abafefc9ed2c8e5e610c64917', 'Admin', '', 'aktif', '', '', ''),
('AKN-2', 'PenyetSBY', '9f7c9eb96188a817f02ca4572d9acd4a', '', 'online', '', '', '', ''),
('AKN-3', 'GepBenChmpls', '4025b55e9d2e1a71dafee2c19b0c0e40', '', 'offline', '', '2019-02-11 07:24:28', 'null', 'null');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bank`
--

CREATE TABLE `tb_bank` (
  `Id_Bank` varchar(20) NOT NULL,
  `Nama_Bank` varchar(50) NOT NULL,
  `No_Rekening` varchar(100) NOT NULL,
  `Deskripsi` varchar(200) NOT NULL,
  `Logo_Bank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_banner`
--

CREATE TABLE `tb_banner` (
  `Id_Banner` varchar(20) NOT NULL,
  `Nama_Banner` varchar(100) NOT NULL,
  `Banner` text NOT NULL,
  `Status` enum('Enable','Disable') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_denda`
--

CREATE TABLE `tb_denda` (
  `Id_Denda` varchar(20) NOT NULL,
  `Id_Pembayaran` varchar(20) NOT NULL,
  `Jumlah_Denda` int(11) NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  `Tgl_Denda` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_deposit`
--

CREATE TABLE `tb_deposit` (
  `Id_Deposit` varchar(20) NOT NULL,
  `Id_Vendor` varchar(20) NOT NULL,
  `Nominal_Deposit` int(200) NOT NULL,
  `Status_Deposit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_diskon`
--

CREATE TABLE `tb_diskon` (
  `Id_Diskon` varchar(20) NOT NULL,
  `Kode_Diskon` varchar(50) NOT NULL,
  `Nominal` int(11) NOT NULL,
  `Status_Diskon` enum('enable','disable') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dompet`
--

CREATE TABLE `tb_dompet` (
  `Id_Dompet` varchar(20) NOT NULL,
  `Id_Konsumen` varchar(20) NOT NULL,
  `Nominal_Dompet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `Id_Feedback` varchar(20) NOT NULL,
  `Id_Konsumen` varchar(20) NOT NULL,
  `Id_Menu_Paket` varchar(20) NOT NULL,
  `Komentar` varchar(100) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Tanggal_Feedback` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `Id_Konsumen` varchar(20) NOT NULL,
  `Id_Menu_Paket` varchar(20) NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komplain`
--

CREATE TABLE `tb_komplain` (
  `Id_Komplain` varchar(20) NOT NULL,
  `Id_Konsumen` varchar(20) NOT NULL,
  `isi_komplain` text NOT NULL,
  `tanggal_komplain` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsumen`
--

CREATE TABLE `tb_konsumen` (
  `Id_Konsumen` varchar(20) NOT NULL,
  `Nama_Konsumen` varchar(50) NOT NULL,
  `Role` enum('perseorangan','organisasi') NOT NULL,
  `No_Telfon_Konsumen` varchar(50) NOT NULL,
  `Email_Konsumen` varchar(50) NOT NULL,
  `Alamat_Konsumen` varchar(50) NOT NULL,
  `Foto_Profil_Konsumen` varchar(50) NOT NULL,
  `Aktifitas_Konsumen` enum('online','offline') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konten_statis`
--

CREATE TABLE `tb_konten_statis` (
  `Id_Konten_Statis` varchar(20) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kurir`
--

CREATE TABLE `tb_kurir` (
  `Id_Kurir` varchar(20) NOT NULL,
  `Nama_Kurir` varchar(50) NOT NULL,
  `No_Telfon_Kurir` varchar(12) NOT NULL,
  `Status_Akun` enum('aktif','nonaktif') NOT NULL,
  `Created_at` text NOT NULL,
  `Update_at` text NOT NULL,
  `Delete_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu_paket`
--

CREATE TABLE `tb_menu_paket` (
  `Id_Menu_Paket` varchar(20) NOT NULL,
  `Nama_Paket` varchar(50) NOT NULL,
  `Gambar_Paket` varchar(50) NOT NULL,
  `Harga_Paket` int(11) NOT NULL,
  `Deskripsi_Paket` varchar(100) NOT NULL,
  `Kategori_Paket` enum('event','harian') NOT NULL,
  `Jenis_Paket` enum('nasi','kue') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket_dipesan`
--

CREATE TABLE `tb_paket_dipesan` (
  `Id_Pesanan` varchar(20) NOT NULL,
  `Id_Menu_Paket` varchar(20) NOT NULL,
  `Jumlah_Kotak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `Id_Pembayaran` varchar(20) NOT NULL,
  `Id_Pesanan` varchar(20) NOT NULL,
  `Metode_Pembayaran` enum('cash','cicil') NOT NULL,
  `Tagihan` int(11) NOT NULL,
  `Total_Telah_Dibayar` int(11) NOT NULL,
  `Denda` int(11) NOT NULL,
  `Total_Tagihan` int(11) NOT NULL,
  `Sisa_Tagihan` int(11) NOT NULL,
  `Keterangan_Pembayaran` enum('Sudah','Belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penambahan_deposit`
--

CREATE TABLE `tb_penambahan_deposit` (
  `Id_Penambahan_Deposit` varchar(20) NOT NULL,
  `Id_Deposit` varchar(20) NOT NULL,
  `Nominal_Penambahan` int(200) NOT NULL,
  `Tanggal_Penambahan` date NOT NULL,
  `Waktu_Penambahan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penarikan_deposit`
--

CREATE TABLE `tb_penarikan_deposit` (
  `Id_Penarikan_Deposit` varchar(20) NOT NULL,
  `Id_Deposit` varchar(20) NOT NULL,
  `Nominal_Penarikan` int(200) NOT NULL,
  `Tanggal_Penarikan` date NOT NULL,
  `Waktu_Penarikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan_event`
--

CREATE TABLE `tb_pesanan_event` (
  `Id_Pesanan` varchar(20) NOT NULL,
  `Id_Konsumen` varchar(20) NOT NULL,
  `Id_Menu_Paket` varchar(20) NOT NULL,
  `Id_Vendor` varchar(20) NOT NULL,
  `Alamat_Pengiriman` varchar(50) NOT NULL,
  `No_Telfon_Aktif` varchar(50) NOT NULL,
  `Total_Harga` int(11) NOT NULL,
  `Tanggal_Pesan` date NOT NULL,
  `Tanggal_Kegiatan` date NOT NULL,
  `Waktu_Diterima` text NOT NULL,
  `Id_Bank` varchar(20) NOT NULL,
  `Jenis_Pembayaran` enum('cash','cicil') NOT NULL,
  `Nama_Pemegang_Rekening` varchar(50) NOT NULL,
  `Bukti_Pembayaran` varchar(50) NOT NULL,
  `Status_Pesanan` enum('menunggu verifikasi','diproses','dikirim','selesai') NOT NULL,
  `Id_Kurir` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `Id_Petugas` varchar(20) NOT NULL,
  `Nama_Petugas` varchar(50) NOT NULL,
  `No_Telfon` varchar(50) NOT NULL,
  `Divisi` varchar(50) NOT NULL,
  `Id_Akun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_testimoni`
--

CREATE TABLE `tb_testimoni` (
  `Id_Testimoni` varchar(20) NOT NULL,
  `Id_Konsumen` varchar(20) NOT NULL,
  `Isi_Testimoni` varchar(50) NOT NULL,
  `Tgl_Testimoni` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transfer`
--

CREATE TABLE `tb_transfer` (
  `Id_Transfer` varchar(20) NOT NULL,
  `Id_Pembayaran` varchar(20) NOT NULL,
  `Status_Verifikasi` enum('Sudah','Belum') NOT NULL,
  `Jumlah_Transfer` int(11) NOT NULL,
  `Keterangan` varchar(100) NOT NULL,
  `Tgl_Transfer` date NOT NULL,
  `Id_Bank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_vendor`
--

CREATE TABLE `tb_vendor` (
  `Id_Vendor` varchar(20) NOT NULL,
  `Nama_Vendor` varchar(50) NOT NULL,
  `Kategori_Vendor` varchar(50) NOT NULL,
  `No_Telfon_Vendor` varchar(20) NOT NULL,
  `Email_Vendor` varchar(50) NOT NULL,
  `Alamat_Vendor` text NOT NULL,
  `Deskripsi_Vendor` text NOT NULL,
  `Foto_Profil_Vendor` text NOT NULL,
  `Nama_Pemilik` varchar(50) NOT NULL,
  `No_KTP` varchar(20) NOT NULL,
  `Kuota_Pemesanan` int(11) NOT NULL,
  `Status_Vendor` enum('aktif','nonaktif') NOT NULL,
  `Id_Akun` varchar(20) NOT NULL,
  `Status_Akun` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_vendor`
--

INSERT INTO `tb_vendor` (`Id_Vendor`, `Nama_Vendor`, `Kategori_Vendor`, `No_Telfon_Vendor`, `Email_Vendor`, `Alamat_Vendor`, `Deskripsi_Vendor`, `Foto_Profil_Vendor`, `Nama_Pemilik`, `No_KTP`, `Kuota_Pemesanan`, `Status_Vendor`, `Id_Akun`, `Status_Akun`) VALUES
('VEN-1', 'Ayam Penyet Surabaya', 'Rumah Makan', '0341456751', 'penyetSby@gmail.com', 'Jl. Raya Banjaran , Banjaran, Bandung', 'Ayam Penyet, Ayam Bakar, Ayam Goreng', 'C:/xampp/htdocs/ketringan_admin/gambar/paint13.jpg', 'Bagus Rahadi', '6756785436789', 1000, 'aktif', 'AKN-2', 'aktif'),
('VEN-2', 'Geprek Bensu Cihampelas', 'Rumah Makan', '098765432123', 'bensuAyam@gmail.com', 'Jl, Raya Cihampelas', 'Ayam Geprek 2', 'C:/xampp/htdocs/ketringan_admin/gambar/paint14.jpg', 'Ruben Onsu', '345678909998', 1000, 'aktif', 'AKN-3', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`Id_Akun`);

--
-- Indeks untuk tabel `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`Id_Bank`);

--
-- Indeks untuk tabel `tb_denda`
--
ALTER TABLE `tb_denda`
  ADD PRIMARY KEY (`Id_Denda`),
  ADD KEY `Id_Pembayaran` (`Id_Pembayaran`);

--
-- Indeks untuk tabel `tb_deposit`
--
ALTER TABLE `tb_deposit`
  ADD PRIMARY KEY (`Id_Deposit`),
  ADD KEY `Id_Vendor` (`Id_Vendor`);

--
-- Indeks untuk tabel `tb_diskon`
--
ALTER TABLE `tb_diskon`
  ADD PRIMARY KEY (`Id_Diskon`);

--
-- Indeks untuk tabel `tb_dompet`
--
ALTER TABLE `tb_dompet`
  ADD PRIMARY KEY (`Id_Dompet`),
  ADD KEY `Id_Konsumen` (`Id_Konsumen`);

--
-- Indeks untuk tabel `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD KEY `Id_Konsumen` (`Id_Konsumen`),
  ADD KEY `Id_Menu_Paket` (`Id_Menu_Paket`);

--
-- Indeks untuk tabel `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD KEY `Id_Konsumen` (`Id_Konsumen`),
  ADD KEY `Id_Menu_Paket` (`Id_Menu_Paket`);

--
-- Indeks untuk tabel `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  ADD PRIMARY KEY (`Id_Konsumen`);

--
-- Indeks untuk tabel `tb_konten_statis`
--
ALTER TABLE `tb_konten_statis`
  ADD PRIMARY KEY (`Id_Konten_Statis`);

--
-- Indeks untuk tabel `tb_kurir`
--
ALTER TABLE `tb_kurir`
  ADD PRIMARY KEY (`Id_Kurir`);

--
-- Indeks untuk tabel `tb_menu_paket`
--
ALTER TABLE `tb_menu_paket`
  ADD PRIMARY KEY (`Id_Menu_Paket`);

--
-- Indeks untuk tabel `tb_paket_dipesan`
--
ALTER TABLE `tb_paket_dipesan`
  ADD KEY `fk_pesanan` (`Id_Pesanan`),
  ADD KEY `fk_menu_paket` (`Id_Menu_Paket`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`Id_Pembayaran`),
  ADD KEY `Id_Pesanan` (`Id_Pesanan`);

--
-- Indeks untuk tabel `tb_penambahan_deposit`
--
ALTER TABLE `tb_penambahan_deposit`
  ADD PRIMARY KEY (`Id_Penambahan_Deposit`),
  ADD KEY `Id_Deposit` (`Id_Deposit`);

--
-- Indeks untuk tabel `tb_penarikan_deposit`
--
ALTER TABLE `tb_penarikan_deposit`
  ADD PRIMARY KEY (`Id_Penarikan_Deposit`),
  ADD KEY `Id_Deposit` (`Id_Deposit`);

--
-- Indeks untuk tabel `tb_pesanan_event`
--
ALTER TABLE `tb_pesanan_event`
  ADD PRIMARY KEY (`Id_Pesanan`),
  ADD KEY `Id_Konsumen` (`Id_Konsumen`),
  ADD KEY `Id_Menu_Paket` (`Id_Menu_Paket`),
  ADD KEY `Id_Vendor` (`Id_Vendor`),
  ADD KEY `Id_Bank` (`Id_Bank`),
  ADD KEY `Id_Kurir` (`Id_Kurir`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`Id_Petugas`),
  ADD KEY `Id_Akun` (`Id_Akun`);

--
-- Indeks untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD PRIMARY KEY (`Id_Testimoni`),
  ADD KEY `Id_Konsumen` (`Id_Konsumen`);

--
-- Indeks untuk tabel `tb_transfer`
--
ALTER TABLE `tb_transfer`
  ADD PRIMARY KEY (`Id_Transfer`),
  ADD KEY `Id_Bank` (`Id_Bank`),
  ADD KEY `Id_Pembayaran` (`Id_Pembayaran`);

--
-- Indeks untuk tabel `tb_vendor`
--
ALTER TABLE `tb_vendor`
  ADD PRIMARY KEY (`Id_Vendor`),
  ADD KEY `Id_Akun` (`Id_Akun`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_denda`
--
ALTER TABLE `tb_denda`
  ADD CONSTRAINT `tb_denda_ibfk_1` FOREIGN KEY (`Id_Pembayaran`) REFERENCES `tb_pembayaran` (`Id_Pembayaran`);

--
-- Ketidakleluasaan untuk tabel `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD CONSTRAINT `tb_feedback_ibfk_1` FOREIGN KEY (`Id_Konsumen`) REFERENCES `tb_konsumen` (`Id_Konsumen`),
  ADD CONSTRAINT `tb_feedback_ibfk_2` FOREIGN KEY (`Id_Menu_Paket`) REFERENCES `tb_menu_paket` (`Id_Menu_Paket`);

--
-- Ketidakleluasaan untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`Id_Pesanan`) REFERENCES `tb_pesanan_event` (`Id_Pesanan`);

--
-- Ketidakleluasaan untuk tabel `tb_penambahan_deposit`
--
ALTER TABLE `tb_penambahan_deposit`
  ADD CONSTRAINT `tb_penambahan_deposit_ibfk_1` FOREIGN KEY (`Id_Deposit`) REFERENCES `tb_deposit` (`Id_Deposit`);

--
-- Ketidakleluasaan untuk tabel `tb_penarikan_deposit`
--
ALTER TABLE `tb_penarikan_deposit`
  ADD CONSTRAINT `tb_penarikan_deposit_ibfk_1` FOREIGN KEY (`Id_Deposit`) REFERENCES `tb_deposit` (`Id_Deposit`);

--
-- Ketidakleluasaan untuk tabel `tb_pesanan_event`
--
ALTER TABLE `tb_pesanan_event`
  ADD CONSTRAINT `tb_pesanan_event_ibfk_1` FOREIGN KEY (`Id_Konsumen`) REFERENCES `tb_konsumen` (`Id_Konsumen`),
  ADD CONSTRAINT `tb_pesanan_event_ibfk_2` FOREIGN KEY (`Id_Menu_Paket`) REFERENCES `tb_menu_paket` (`Id_Menu_Paket`),
  ADD CONSTRAINT `tb_pesanan_event_ibfk_3` FOREIGN KEY (`Id_Vendor`) REFERENCES `tb_vendor` (`Id_Vendor`),
  ADD CONSTRAINT `tb_pesanan_event_ibfk_4` FOREIGN KEY (`Id_Bank`) REFERENCES `tb_bank` (`Id_Bank`),
  ADD CONSTRAINT `tb_pesanan_event_ibfk_5` FOREIGN KEY (`Id_Kurir`) REFERENCES `tb_kurir` (`Id_Kurir`);

--
-- Ketidakleluasaan untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD CONSTRAINT `tb_petugas_ibfk_1` FOREIGN KEY (`Id_Akun`) REFERENCES `tb_akun` (`Id_Akun`);

--
-- Ketidakleluasaan untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD CONSTRAINT `tb_testimoni_ibfk_1` FOREIGN KEY (`Id_Konsumen`) REFERENCES `tb_konsumen` (`Id_Konsumen`);

--
-- Ketidakleluasaan untuk tabel `tb_transfer`
--
ALTER TABLE `tb_transfer`
  ADD CONSTRAINT `tb_transfer_ibfk_1` FOREIGN KEY (`Id_Bank`) REFERENCES `tb_bank` (`Id_Bank`),
  ADD CONSTRAINT `tb_transfer_ibfk_2` FOREIGN KEY (`Id_Pembayaran`) REFERENCES `tb_pembayaran` (`Id_Pembayaran`);

--
-- Ketidakleluasaan untuk tabel `tb_vendor`
--
ALTER TABLE `tb_vendor`
  ADD CONSTRAINT `tb_vendor_ibfk_1` FOREIGN KEY (`Id_Akun`) REFERENCES `tb_akun` (`Id_Akun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
