-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 16 Mar 2018 pada 08.52
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ijournal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_aboutus`
--

CREATE TABLE `tb_aboutus` (
  `id_aboutus` int(3) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `tagline` text NOT NULL,
  `detail_aboutus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_aboutus`
--

INSERT INTO `tb_aboutus` (`id_aboutus`, `judul`, `tagline`, `detail_aboutus`) VALUES
(1, 'iJournal', 'Aplikasi Informasi Pengumuman (Jurnal) Penerimaan Peserta Didik Baru Sekolah Menengah Di Kabupaten Pekalongan berbasis android dan web.', 'iJournal adalah sebuah sistem yang dirancang untuk melakukan otomasi terhadap penerimaan peserta didik baru mula dari pemberian informasi tentang profil suatu sekolah, syarat-syarat yang diajukan suatu sekolah hingga pengumuman hasil seleksi yang dilakukan secara online dan berbasis waktu nyata (real-time). Dalam aplikasi mobile ini, dilengkapi dengan informasi terkait PPDB meliputi Profil Sekolah, Daya Tampung, Persyaratan Nilai, Pengumuman Seleksi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_masukan`
--

CREATE TABLE `tb_masukan` (
  `id_masukan` int(11) NOT NULL,
  `email_masukan` varchar(50) NOT NULL,
  `isi_masukan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_masukan`
--

INSERT INTO `tb_masukan` (`id_masukan`, `email_masukan`, `isi_masukan`) VALUES
(11, 'erikwibo@gmail.com', 'fhsdkjdjnsdjv'),
(12, 'erikwibo@yahoo.com', 'vfdbgbfgbfgbfgbfg'),
(13, 'qomariyah2211@gmail.com', 'pesan disini');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id_sekolah` char(5) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `telp_sekolah` varchar(15) NOT NULL,
  `email_sekolah` varchar(50) NOT NULL,
  `website_sekolah` varchar(50) NOT NULL,
  `kuota` int(4) NOT NULL,
  `min_nilai` float NOT NULL,
  `info_umum` text NOT NULL,
  `id_user` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id_sekolah`, `nama_sekolah`, `alamat_sekolah`, `telp_sekolah`, `email_sekolah`, `website_sekolah`, `kuota`, `min_nilai`, `info_umum`, `id_user`) VALUES
('SK001', 'SMK MUHAMMADIYAH KAJEN', 'Jl. Pahlawan Kebonagung ,51161 Kec. Kajen Kab.Pekalongan Jawa Tengah', '(0285) 381037', 'smkmuhamka@gmail.com', 'http://www.smkmuhamka.sch.id', 400, 220, 'Batas akhir pendaftaran 31 Agustus 2018.\r\nPengumuman 10 September 2018.\r\nDaftar Ulang 15 September 2018.', 'ID001'),
('SK002', 'SMK NEGERI 1 SRAGI', 'Jl. Raya Sragi No. 139 B Sragi 51155, Kec. Sragi Kab. Pekalongan Jawa Tengah', '(0285) 4475405', 'smk1sragi@yahoo.co.id', 'http://www.smk1sragi.sch.id', 340, 245, 'Batas akhir pendaftaran 31 Agustus 2018.\r\nPengumuman 10 September 2018.\r\nDaftar Ulang 15 September 2018.', 'ID001'),
('SK003', 'SMK GONDANG WONOPRINGGO', 'Kampus Pendidikan Islam Gondang, 51181 Kec.Wonopringgo Kab.Pekalongan Jawa Tengah', '(0285) 784914', 'smk.gondang@yahoo.co.id', 'http://smk.yayasan-gondang.com', 300, 215, '', 'ID001'),
('SK004', 'SMK NEGERI 1 KEDUNGWUNI', 'Jl. Paesan Utara 51173 Kedungwuni Barat Kec. Kedungwuni Kab.Pekalongan Jawa Tengah', '(0285) 785146', 'smkn01kedungwuni@yahoo.com', 'http://smk1kedungwuni.sch.id', 300, 210, '', 'ID001'),
('SK005', 'SMK MUHAMMADIYAH BLIGO', 'Sapugarut Gg. 7 Buaran, Bligo 51171 Kec. Buaran Kab. Pekalongan Jawa Tengah', '(0285)4415132', 'smk.bligo@yahoo.com', 'http://smkmuhbligo.sch.id', 300, 225, '', 'ID001'),
('SK006', 'SMA NEGERI 1 KAJEN', 'Jl. Mandurorejo, Nyamok  51161, Kec. Kajen Kab. Pekalongan Jawa Tengah', '(0285) 381708', 'sman1kajen@yahoo.com', 'http://sma1kajen.sch.id', 300, 240, 'Batas akhir pendaftaran 31 Agustus 2018.\r\nPengumuman 10 September 2018.\r\nDaftar Ulang 15 September 2018.', 'ID001'),
('SK007', 'SMA NEGERI 1 SRAGI', 'Jl. Raya Bulakpelem, Bulakpelem 51155, Kec. Sragi Kab. Pekalongan Jawa Tengah', '(0285)4475136', 'smasragi@ymail.com', 'http://www.sma1sragi.sch.id', 300, 220, '', 'ID001'),
('SK008', 'SMA NEGERI 1 BOJONG', 'Jl. Raya Wangandowo No. 116 51156, Wangandowo, Kec. Bojong Kab. Pekalongan Jawa Tengah', '(0283) 3467311', 'smabojong@yahoo.co.id', 'http://sma1bojong.sch.id', 300, 222, 'Batas akhir pendaftaran 31 Agustus 2018.\r\nPengumuman 10 September 2018.\r\nDaftar Ulang 15 September 2018.', 'ID001'),
('SK009', 'SMA NEGERI 1 KEDUNGWUNI', 'Jl. Paesan Utara, Kedungwuni Barat 51173, Kec. Kedungwuni Kab. Pekalongan Jawa Tengah', '(0285) 785434', 'sman1kdwuni@yahoo.co.id', 'http://sman1kedungwuni.sch.id', 300, 230, '', 'ID001'),
('SK010', 'SMA NEGERI 1 WIRADESA', 'Jl. Patimura No. 467 Wiradesa 51152, MAYANGAN, Kec. Wiradesa Kab. Pekalongan Jawa Tengah', '(0285) 4417367', 'sma1wiradesa@gmail.com', 'http://sma1wiradesa.sch.id', 300, 230, '', 'ID001'),
('SK011', 'SMK MUHAMMADIYAH KESESI', 'Jalan Raya Kaibahan KM.3 Kesesi Kab Pekalongan 51162', '(0285) 4483250', 'smkmusi@gmail.com', 'http://www.smkmusi.sch.id', 200, 320, 'Info pendaftaran', 'ID001'),
('SK012', 'SMK NEGERI 1 KARANGDADAP', 'Jl. Raya Kedungkebo No. 6 RT.01 RW.01 Kedungkebo Karangdadap 51174', '(0285) 7878333', 'smk1karangdadap@gmail.com', 'http://www.smk1karangdadap.org', 340, 300, 'Batas akhir pendaftaran peserta didik baru pada 16 Juni 2018.\r\nPengumuman akan dilaksanakan pada tanggal 26 Juni 2018.', 'ID001'),
('SK013', 'SMA NEGERI 1 PANINGGARAN', 'Jalan Raya Paninggaran 51164', '(0285) 521044', 'smanpaninggaran@yahoo.co.id', 'http://www.sman1paninggaran.sch.id', 240, 330, 'Btas akhir pendaftran 23 Juni 2018.\r\nPengumuman dilaksanakan pada 7 Juli 2018.', '16153');

--
-- Trigger `tb_sekolah`
--
DELIMITER $$
CREATE TRIGGER `trg_inst_user` AFTER INSERT ON `tb_sekolah` FOR EACH ROW BEGIN
	INSERT INTO tb_user VALUES (new.id_sekolah, new.nama_sekolah, md5('123456'), 'Operator', new.email_sekolah);
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `no_pendaftaran` varchar(15) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jns_kel` enum('L','P') NOT NULL,
  `asal_sekolah` varchar(30) NOT NULL,
  `id_sekolah` char(5) NOT NULL,
  `telp_siswa` varchar(20) NOT NULL,
  `nilai_siswa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`no_pendaftaran`, `nama_siswa`, `alamat`, `jns_kel`, `asal_sekolah`, `id_sekolah`, `telp_siswa`, `nilai_siswa`) VALUES
('11092017001', 'Afrizal Ahmed Alfarid', 'Desa Bulakpelem Sragi', 'L', 'SMP N 1 Sragi', 'SK002', '082325379061', 350),
('11092017002', 'Erik Wibowo', 'Desa Bubak Kajen', 'L', 'SMP N 1 Kajen', 'SK001', '081510815414', 360.2),
('11092017003', 'Dewi Sakinah', 'Desa Rowokembu Wonopringgo', 'P', 'SMP N 1 Wonopringgo', 'SK001', '085325936026', 350.5),
('11092017004', 'Qomariyah', 'Desa Kebonagung Kajen', 'P', 'SMP N 1 Kajen', 'SK001', '085741908343', 370.4),
('11092017005', 'Angga Afrizal', 'Pakumbulan RT.16 RW.08 Kec.Buaran', 'L', 'SMP 1 BUARAN', 'SK004', '085870256233', 295),
('11092017006', 'Angga Pradita', 'Sumur Jomblang Bogo RT.12 RW.04 Kec. Bojong', 'L', 'SMP 1 BOJONG', 'SK004', '081519855166', 300),
('11092017007', 'Anna Silvarina', 'Gembong Gg. Beringin 2 RT.01 RW.11 Kedungwuni', 'P', 'MTS N BUARAN', 'SK004', '085228623113', 290),
('11092017008', 'Aryo Widodo', 'Bojong Lor RT.08 RW.03 Kec. Bojong', 'L', 'SMP 1 BOJONG', 'SK004', '085642986116', 275),
('11092017009', 'Dewi Kurniasih', 'Gembong Gg. Beringin 2 RT.01 RW.09 Kedungwuni', 'P', 'MTS N BUARAN', 'SK004', '085742613705', 335),
('11092017010', 'Dewi Riskawati', 'Perum Vila Pisma Asri Blok B1 No.35 Kedungwuni', 'P', 'SMP MUHAMMADIYAH PEKAJANGAN', 'SK005', '081542362229', 330),
('11092017011', 'Diaz Permana', 'Karangsari RT.02 RW.03 Karanganyar', 'L', 'SMP 1 WONOPRINGGO', 'SK005', '085869181980', 315),
('11092017012', 'Dilla Nur Alisya', 'Legok Kalong RT.02 RW.11 Karanganyar', 'P', 'SMP 1 KARANGANYAR', 'SK005', '082324854380', 375),
('11092017013', 'Ery Erianto', 'Pekajangan Gg.24 RT.24 RW.09 Kedungwuni', 'L', 'SMP 1 Kedungwuni', 'SK005', '085870485293', 350),
('11092017014', 'Helmi Sugiharto', 'Kebonagung RT.01 Rw.06 Kajen', 'L', 'SMP 1 KARANGANYAR', 'SK005', '085641417717', 385),
('11092017015', 'Fian Alfarizi', 'Pekajangan Gg.3 RT.01 RW.01 Kedungwuni', 'L', 'SMP MUHAMMADIYAH PEKAJANGAN', 'SK001', '085742612129', 365),
('11092017016', 'Mahendra Eko Saputra', 'Bebel Gg.20 NO.495 RT.10 RW.03 Wonokerto', 'L', 'SMP 1 WIRADESA', 'SK001', '085647679202', 370),
('11092017017', 'Moch. Rafsanjani', 'Capgawen RT.04 RW.04 Kedungwuni', 'L', 'MTS N BUARAN', 'SK001', '081573378660', 280),
('11092017018', 'M. Manggala Sakti Putra', 'Perum Medono Indah Blok 11D No.12', 'L', 'SMP 3 PEKALONGAN', 'SK001', '082322380942', 295),
('11092017019', 'Naeli Afiani', 'Wiroditan RT.08 RW.02 Bojong', 'P', 'SMP 1 BOJONG', 'SK001', '085742454370', 360),
('11092017020', 'Muhamad Fathul Rujab', 'Bojong RT.01 RW.02 Kec.Bojong', 'L', 'SMP 1 BOJONG', 'SK002', '085865078087', 285),
('11092017021', 'Muhammad Firman Dani', 'Paesan Utara RT.02 RW.05 Kedungwuni', 'L', 'SMP 1 BUARAN', 'SK002', '085600605612', 340),
('11092017022', 'Nadya Puja Sakinah', 'Kajongan RT.03 RW.02 Kajen', 'P', 'SMP 4 KAJEN', 'SK002', '085602002769', 315),
('11092017023', 'Novita Indriyani', 'Pekajangan Gg.7 RT.05 RW.02 Kedungwuni', 'P', 'SMP MUHAMMADIYAH PEKAJANGAN', 'SK002', '085869056528', 360),
('11092017024', 'Nur Khozanah', 'Kwagean RT.06 RW.08 Wonopringgo', 'P', 'SMP ISLAM WONOPRINGGO', 'SK002', '085879993203', 385),
('11092017025', 'Rika Fadillah', 'Gg. Wuni 4 No.40 Kedungwuni Barat', 'P', 'MTS Kedungwuni', 'SK003', '085742069951', 355),
('11092017026', 'Tri Komala Dewi', 'Ambokembang Gg.14 Kedungwuni', 'P', 'MTS N BUARAN', 'SK006', '085842344372', 390),
('11092017027', 'Riskiyah', 'Galang Pengampon RT.02 RW.01 Wonopringgo', 'P', 'SMP 2 WONOPRINGGO', 'SK003', '085701311641', 295),
('11092017028', 'Tiara Ramadani', 'Dororejo RT.17 RW.06 Doro', 'P', 'SMP 1 Kajen', 'SK003', '085600438547', 325),
('11092017029', 'Titik Kurniati', 'Legok Gunung RT.10 RW.02 Wonopringgo', 'P', 'SMP 2 WONOPRINGGO', 'SK003', '085701311639', 285),
('11092017030', 'Uwais Alqurni', 'Perum Pisma Kedungwuni Blok K No.15', 'L', 'MTS Gondang Wonopringgo', 'SK006', '085865723466', 285),
('11092017031', 'Winda Triastuti', 'Karyomukti RT.02 RW.02 Kesesi', 'P', 'SMP 1 KESESI', 'SK006', '085201506468', 370),
('11092017033', 'Arief Budi Cahyo', 'Tanjung Kulon RT.01 RW.01 Kajen', 'L', 'SMP 1 KAJEN', 'SK007', '085200846095', 337.5),
('11092017034', 'Krismia Dewi', 'Jl. Jeruk No.271 RT.02 RW.12 Kajen', 'P', 'SMP 1 KAJEN', 'SK007', '085702356298', 355),
('11092017035', 'Muhammad Khairuddin', 'Gembong Gg. Beringin RT.03 RW.11 Kedungwuni', 'L', 'SMP 1 KEDUNGWUNI', 'SK007', '085742784242', 292.5),
('11092017036', 'Risky Riyantiarno', 'Karangsari RT.04 RW.03 Karanganyar', 'P', 'SMP 1 KAJEN', 'SK007', '085742459294', 357.5),
('11092017037', 'Siti Nok Asih', 'RT.04 RW.01 Karanganyar', 'P', 'SMP 1 KARANGANYAR', 'SK007', '085742527746', 327.5),
('11092017038', 'Tri Mulyani', 'Gebangkerep RT.02 RW.08 Sragi', 'P', 'SMP 1 SRAGI', 'SK008', '085786959222', 360),
('11092017039', 'Wido Santoso', 'Sragi RT.01 RW.10 Sragi', 'L', 'SMP 1 SRAGI', 'SK008', '085712347922', 297.5),
('11092017040', 'Zuhrof Karima Hamidah', 'Wonokerto RT.13 RW.04 Wonokerto', 'P', 'SMP 2 WIRADESA', 'SK008', '085742706229', 367.5),
('11092017041', 'Dina Misroh', 'Pododadi RT.02 RW.03 Karanganyar', 'P', 'SMP 1 KAJEN', 'SK008', '082325092302', 365),
('11092017042', 'Martha Amalya', 'Pekajangan Gg.23 No.85 RT.16 RW.6 Kedungwuni', 'P', 'SMP 1 KEDUNGWUI', 'SK009', '085701338070', 347.5),
('11092017043', 'Okta Anggarista', 'Ambokembang Gg.16 RT.08 RW.9 Kedungwuni', 'P', 'SMP 1 KEDUNGWUNI', 'SK009', '085642735092', 277.5),
('11092017044', 'Ruliyah', 'Wonorejo RT.09 RW.04 Kajen', 'P', 'SMP NU KAJEN', 'SK009', '085201378332', 282.5),
('11092017045', 'Arif Burhanuddin', 'Limbangan RT.01 RW.03 Karanganyar', 'L', 'SMP 1 KARANGANYAR', 'SK009', '085726042691', 352.5),
('11092017046', 'Dimas Sri Winarko', 'Tanjungsari RT.01 RW.01 Kajen', 'L', 'SMP 1 KAJEN', 'SK009', '081542167245', 330),
('11092017047', 'Muhammad Nur Salim', 'Galang Pengampon RT.04RW.02 Wonopringgo', 'L', 'SMP 2 WONOPRINGGO', 'SK010', '085742701439', 350),
('11092017048', 'Alfin Kurniansyah B.R.', 'Perum GKI Blok B No.322 Gandarum Kajen', 'L', 'SMP 1 KAJEN', 'SK010', '085624951965', 340),
('11092017049', 'Dirchamsyah', 'Jagung RT.02 RW.04 Kesesi', 'L', 'SMP 1 KAJEN', 'SK010', '085842244829', 362.5),
('11092017050', 'Faturrhman', 'Kesesi RT.02 RW.04', 'L', 'SMP 1 KESESI', 'SK010', '087764471915', 285),
('11092017051', 'M. Rijal Wafaul Huda', 'Perum Griya Kajen Raya Blok B No.1 Gejlig Kajen', 'L', 'SMP 1 KAJEN', 'SK010', '085786859051', 347.5),
('1234567', 'Dewi Sakinah', 'Kebonagung', 'P', 'smp 1 wonopringgo', 'SK006', '08123456', 230);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` char(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Administrator','Operator','','') NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`, `email`) VALUES
('16153', 'Qomariyah', 'f06a6b3dd6053b62beaa9d49668bae45', 'Administrator', 'qomariyah2211@gmail.com'),
('16159', 'Erik Wibowo', '6a42dd6e7ca9a813693714b0d9aa1ad8', 'Administrator', 'erikwibo@gmail.com'),
('SK001', 'SMK MUHAMMADIYAH KAJEN', 'e10adc3949ba59abbe56e057f20f883e', 'Operator', 'smkmuhamka@gmail.com'),
('SK002', 'SMK NEGERI 1 SRAGI', 'e10adc3949ba59abbe56e057f20f883e', 'Operator', 'smk1sragi@yahoo.co.id'),
('SK003', 'SMK GONDANG WONOPRINGGO', 'e10adc3949ba59abbe56e057f20f883e', 'Operator', 'smk.gondang@yahoo.co.id'),
('SK004', 'SMK NEGERI 1 KEDUNGWUNI', 'e10adc3949ba59abbe56e057f20f883e', 'Operator', 'smkn01kedungwuni@yahoo.com'),
('SK005', 'SMK MUHAMMADIYAH BLIGO', 'e10adc3949ba59abbe56e057f20f883e', 'Operator', 'smk.bligo@yahoo.com'),
('SK006', 'SMA NEGERI 1 KAJEN', 'e10adc3949ba59abbe56e057f20f883e', 'Operator', 'sman1kajen@yahoo.com'),
('SK007', 'SMA NEGERI 1 SRAGI', 'e10adc3949ba59abbe56e057f20f883e', 'Operator', 'smasragi@ymail.com'),
('SK008', 'SMA NEGERI 1 BOJONG', 'e10adc3949ba59abbe56e057f20f883e', 'Operator', 'smabojong@yahoo.co.id'),
('SK009', 'SMA NEGERI 1 KEDUNGWUNI', 'e10adc3949ba59abbe56e057f20f883e', 'Operator', 'sman1kdwuni@yahoo.co.id'),
('SK010', 'SMA NEGERI 1 WIRADESA', 'e10adc3949ba59abbe56e057f20f883e', 'Operator', 'sma1wiradesa@gmail.com'),
('SK011', 'SMK MUHAMMADIYAH KESESI', 'e10adc3949ba59abbe56e057f20f883e', 'Operator', 'smkmusi@gmail.com'),
('SK012', 'SMK NEGERI 1 KARANGDADAP', 'e10adc3949ba59abbe56e057f20f883e', 'Operator', 'smk1karangdadap@gmail.com'),
('SK013', 'SMK 1 KARANGDADAP', 'e10adc3949ba59abbe56e057f20f883e', 'Operator', 'dsdsac@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_aboutus`
--
ALTER TABLE `tb_aboutus`
  ADD PRIMARY KEY (`id_aboutus`);

--
-- Indeks untuk tabel `tb_masukan`
--
ALTER TABLE `tb_masukan`
  ADD PRIMARY KEY (`id_masukan`);

--
-- Indeks untuk tabel `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id_sekolah`,`id_user`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`no_pendaftaran`,`id_sekolah`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_aboutus`
--
ALTER TABLE `tb_aboutus`
  MODIFY `id_aboutus` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_masukan`
--
ALTER TABLE `tb_masukan`
  MODIFY `id_masukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
