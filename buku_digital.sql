-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2021 pada 13.58
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_digital`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `file_buku` varchar(255) DEFAULT NULL,
  `created` date DEFAULT current_timestamp(),
  `updated` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `file_buku`, `created`, `updated`) VALUES
(1, '05-bukukeamanansibere-commerce3-180205060444.pdf', '2020-12-29', '2020-12-29'),
(2, 'bahagianya_saling_memaafkan.pdf', '2020-12-29', '2020-12-29'),
(3, 'bijakbersosmed-tipsdaninformasigerakan2017-180208072341.pdf', '2020-12-29', '2020-12-29'),
(4, 'BUKU_SAKU_NXG.pdf', '2020-12-29', '2020-12-29'),
(5, 'ebook-kiat-bikin-infografis-keren1-180202033321.pdf', '2020-12-29', '2020-12-29'),
(6, 'kebiasaan_mampu_mengubah_takdir.pdf', '2020-12-29', '2020-12-29'),
(7, 'kewirausahaandigital2feb2018210pm-180202081101.pdf', '2020-12-29', '2020-12-29'),
(8, 'pejuang_emansipasi_perempuan.pdf', '2020-12-29', '2020-12-29'),
(9, 'peta_jalan_perlindungan_anak_di_internet_indonesia.pdf', '2020-12-29', '2020-12-29'),
(10, 'rumuskereninternetbaik1-180208043938.pdf', '2020-12-29', '2020-12-29'),
(11, 'satu_hari_di_gedung_bioskop_2.pdf', '2020-12-29', '2020-12-29'),
(12, 'seribukuliterasidigital-kebijakancybersecuritydalamperspektifmultistakeholder-180201035050.pdf', '2020-12-29', '2020-12-29'),
(13, 'seribukuliterasidigital-mediasosialuntukadvokasipublik-180201041235.pdf', '2020-12-29', '2020-12-29'),
(14, 'seribukuliterasidigital-pengantartatakelolainternetedisirevisi2018-idigf-180201034609.pdf', '2020-12-29', '2020-12-29'),
(15, 'SMART_VILLAGE_FINAL_(Ebook_Version)_(1)1.pdf', '2020-12-29', '2020-12-29'),
(16, 'www-studenthandbookbahasaindonesia-180329070744.pdf', '2020-12-29', '2020-12-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inbox`
--

CREATE TABLE `inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text DEFAULT NULL,
  `inbox_tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `inbox_status` int(1) NOT NULL DEFAULT 1 COMMENT '1 = Belum Dilihat, 0 = Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inbox`
--

INSERT INTO `inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(2, 'test', 'test', 'asdasdjnjansndnadnka', 'test', '2020-04-22 13:47:18', 0),
(8, '&quot;&gt;&lt;marquee&gt;Hacked&lt;/marq', 'asd@asd.asd', '&quot;&gt;&lt;marque', '12312312312', '2020-06-03 13:32:06', 0),
(9, 'asd', 'asd@asd.asd', '[removed]', '12312312312312', '2020-06-03 14:21:07', 0),
(10, 'asd', 'asdas@gmail.com', '&quot;&gt;[removed]a', '123123123', '2020-06-03 14:22:35', 0),
(12, 'test123123', 'test@gmail.com', 'testtest', '1231231231231', '2021-02-19 16:36:01', 0),
(13, 'flashdata', 'flashdata@gmail.com', 'asdasdadsadasdasdaa', '09120912312', '2021-02-19 16:37:36', 0),
(14, 'minato', 'minato@gmail.com', 'Minato', '098099829321', '2021-02-19 16:41:54', 0),
(15, 'popopopopo', 'ppopop@popo.pop', 'popopopopop', '092912391291', '2021-02-19 16:42:45', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Novel'),
(2, 'Komik'),
(7, 'Biografi'),
(10, 'Dongeng'),
(13, 'Kalkulus'),
(14, 'Biology'),
(15, 'Geografis'),
(18, 'Edukasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keahlian`
--

CREATE TABLE `tbl_keahlian` (
  `id_keahlian` int(11) NOT NULL,
  `nama_keahlian` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_keahlian`
--

INSERT INTO `tbl_keahlian` (`id_keahlian`, `nama_keahlian`) VALUES
(1, 'Math'),
(2, 'Sains'),
(3, 'Umum'),
(4, 'Technology'),
(6, 'Sastra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sampul`
--

CREATE TABLE `tbl_sampul` (
  `id_sampul` int(11) NOT NULL,
  `judul_buku` varchar(255) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `file_sampul` varchar(255) DEFAULT NULL,
  `created` date NOT NULL DEFAULT current_timestamp(),
  `updated` date NOT NULL DEFAULT current_timestamp(),
  `id_kategori` int(11) NOT NULL,
  `id_keahlian` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sampul`
--

INSERT INTO `tbl_sampul` (`id_sampul`, `judul_buku`, `penulis`, `penerbit`, `deskripsi`, `file_sampul`, `created`, `updated`, `id_kategori`, `id_keahlian`, `id_buku`) VALUES
(1, 'Keamanan Siber Untuk E-Commerce', 'Editor: Donny B.U Indroyatno Banyumurti', 'Literasi Digital', 'Keamanan Jual Beli Online Bagi Pelapak dan Konsumen', 'KeamananSiberUntukE-Commerce.png', '2020-12-29', '2020-12-29', 18, 4, 1),
(2, 'Bahagianya Saling Memaafkan', 'Pendidikan.id', 'Pendidikan.id', 'Menjadi pribadi yang mudah memaafkan, tidak suka menyimpan dendam dan kepahitan terutama didalam lingkup keluarga.', 'BahagianyaSalingMemaafkan1.png', '2020-12-29', '2020-12-29', 2, 6, 2),
(3, 'Bijak BerSosmed', 'Sosial Media Indonesia', 'Sosial Media Indonesia', 'Bagaimana Menggunakan Sosial Media dengan Baik dan Benar.', 'BijakBersosmed.png', '2020-12-29', '2020-12-29', 18, 3, 3),
(4, 'Video Game (Kenali, Pelajari dan Sikapi)', 'M. Iqbal Tawakal', 'NXG Indonesia', 'Panduan Praktis Bagi Orangtua Menghadapi Isu Video Game dan Anak di Era Digital', 'VideoGame.png', '2020-12-29', '2020-12-29', 18, 3, 4),
(5, 'Kiat Bikin Infografis Keren dan Berkualitas Baik', 'Kominfo', 'Kominfo', 'Cara Membuat InfoGrafis Keren dan Berkualitas', 'InfoGrafisKeren.png', '2020-12-29', '2020-12-29', 18, 4, 5),
(6, 'Kebiasaan Mampu Mengubah Takdir', 'Pendidikan.id', 'Pendidikan.id', 'Ajaran Kepada Anak - Anak Untuk Memiliki Kebiasaan yang Baik Agar Hidup Tetap Berjalan dengan Baik.', 'KebiasaanMampuMengubahTakdir.png', '2020-12-29', '2020-12-29', 2, 6, 6),
(7, 'Strategi Kewirausahaan Digital', 'Kominfo', 'Kominfo', 'Sebuah Panduan Untuk UMKM, StartUp, dan E-Commerce', 'StrategiKewirausahaanDigital.png', '2020-12-29', '2020-12-29', 18, 4, 7),
(8, 'Pejuang Emansipasi Perempuan', 'Pendidikan.id', 'Pendidikan.id', 'Kisah Salah Satu Tokoh Nasional yaitu Raden Ajeng Kartini.', 'PejuangEmansipasiPerempuan.png', '2020-12-29', '2020-12-29', 7, 6, 8),
(9, 'Peta Jalan Perlindungan Anak Di Internet', 'Kominfo', 'Kominfo', 'Kebijakan Perlindungan Anak di Ranah Maya', 'PetaJalanPerlindungan.png', '2020-12-29', '2020-12-29', 18, 3, 9),
(10, 'Rumus Keren Internet Baik', 'Telkomsel Indonesia', 'Telkomsel Indonesia', 'Rumus Keren Internet Baik', 'RumusKerenInternetBaik.png', '2020-12-29', '2020-12-29', 18, 3, 10),
(11, 'Satu Hari di Gedung Bioskop', 'Pendidikan.id', 'Pendidikan.id', 'Komik Literasi Seri Pendidikabn Moral yang Mengajarkan Anak - Anak untuk tidak Egois.', 'SatuHaridiGedungBioskop.png', '2020-12-29', '2020-12-29', 2, 6, 11),
(12, 'Kebijakan CyberSecurity dalam Perspektif Multi StakeHolder', 'Kominfo', 'Kominfo', 'Memahami Kebijakan tentang Cyber Securiy', 'KebijakanCybeSecurity.png', '2020-12-29', '2020-12-29', 18, 4, 12),
(13, 'Media Sosial Untuk Advokasi Publik', 'ICT Watch', 'ICT Watch', 'Melakukan Advokasi Kebijakan Publik ataupun Mendorong Inisiasi Gerakan Sosial', 'MediaSosial.png', '2020-12-29', '2020-12-29', 18, 4, 13),
(14, 'Pengantar Tata Kelola Internet', 'Kominfo', 'Kominfo', 'Pengantar Tata Kelola Internet', 'PengantarTataKelolaInternet.png', '2020-12-29', '2020-12-29', 18, 4, 14),
(15, 'Desa Cerdas', 'Univ. Gadjah Mada', 'Univ. Gadjah Mada', 'Transformasi Kebijakan dan Pembangunan Desa Merespon Era Revolusi Industri 4.0', 'SmartVillage.png', '2020-12-29', '2020-12-29', 18, 4, 15),
(16, 'The Web We Want', 'Kominfo', 'Kominfo', 'Young and Online - Activities By Young People for Young People.', 'WebWeWant.png', '2020-12-29', '2020-12-29', 18, 4, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1.admin, 2.user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', 'Jakarta', 1),
(2, 'user', '12dea96fec20593566ab75692c9949596833adc9', 'User', 'Jakarta', 2),
(6, 'yahiko', 'e60c43d97055a87acdd33dc26cf1c74815417124', 'Yahiko', 'Amegakure', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_keahlian`
--
ALTER TABLE `tbl_keahlian`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indeks untuk tabel `tbl_sampul`
--
ALTER TABLE `tbl_sampul`
  ADD PRIMARY KEY (`id_sampul`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `inbox`
--
ALTER TABLE `inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_keahlian`
--
ALTER TABLE `tbl_keahlian`
  MODIFY `id_keahlian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
