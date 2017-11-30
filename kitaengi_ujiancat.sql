-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 10:39 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitaengi_ujiancat`
--

-- --------------------------------------------------------

--
-- Table structure for table `d_admin`
--

CREATE TABLE `d_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) DEFAULT 'siswa ,psoal',
  `kon_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_admin`
--

INSERT INTO `d_admin` (`id`, `username`, `password`, `level`, `kon_id`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1),
(17, 'aldani1', '21232f297a57a5a743894a0e4a801fc3', 'siswa', 10),
(18, '8psoal', '21232f297a57a5a743894a0e4a801fc3', 'psoal', 8),
(19, 'abdil', 'd346a95b0f05fc044370d3b1d76172e0', 'siswa', 11),
(20, 'naruto', 'cf9ee5bcb36b4936dd7064ee9b2f139e', 'siswa', 12),
(21, 'a', '0cc175b9c0f1b6a831c399e269772661', 'siswa', 13),
(22, 'redi', '3e6e04925cfedccb173c7569687528d1', 'siswa', 14),
(23, 'syalala', '78d3cab8aa662b4aa4cd2763c8be8901', 'siswa', 20),
(24, 'fal', 'cd163c8ced276359d763ec1a31301a42', 'siswa', 22);

-- --------------------------------------------------------

--
-- Table structure for table `d_hasil_ujian`
--

CREATE TABLE `d_hasil_ujian` (
  `id_h_uj` tinyint(4) NOT NULL,
  `h_namasiswa` varchar(100) NOT NULL,
  `h_n_ujian` smallint(100) NOT NULL,
  `h_waktu_ujian` varchar(50) NOT NULL,
  `h_tot_nilai` int(10) NOT NULL,
  `h_benar_tpa` varchar(15) NOT NULL,
  `h_benar_tbi` varchar(15) NOT NULL,
  `h_sal_tpa` varchar(15) NOT NULL,
  `h_sal_tbi` varchar(15) NOT NULL,
  `h_kos_tpa` varchar(15) NOT NULL,
  `h_kos_tbi` varchar(15) NOT NULL,
  `h_nil_tpa` varchar(15) NOT NULL,
  `h_nil_tbi` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_hasil_ujian`
--

INSERT INTO `d_hasil_ujian` (`id_h_uj`, `h_namasiswa`, `h_n_ujian`, `h_waktu_ujian`, `h_tot_nilai`, `h_benar_tpa`, `h_benar_tbi`, `h_sal_tpa`, `h_sal_tbi`, `h_kos_tpa`, `h_kos_tbi`, `h_nil_tpa`, `h_nil_tbi`, `status`, `id_user`) VALUES
(1, 'a', 1, '150', 16, '4', '1', '1', '3', '115', '56', '15', '1', 'gagal', 21);

-- --------------------------------------------------------

--
-- Table structure for table `d_mulai_ujian`
--

CREATE TABLE `d_mulai_ujian` (
  `id_m_ujian` int(5) NOT NULL,
  `id_user` int(6) NOT NULL,
  `id_ujian` smallint(6) NOT NULL,
  `list_soal` varchar(100) NOT NULL,
  `list_jawaban` varchar(100) NOT NULL,
  `jumlah_benar` smallint(6) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_selesai` datetime NOT NULL,
  `status` char(10) NOT NULL,
  `jumlah_bobot` int(5) NOT NULL,
  `soal_kat` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_mulai_ujian`
--

INSERT INTO `d_mulai_ujian` (`id_m_ujian`, `id_user`, `id_ujian`, `list_soal`, `list_jawaban`, `jumlah_benar`, `waktu_mulai`, `waktu_selesai`, `status`, `jumlah_bobot`, `soal_kat`) VALUES
(1, 21, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,3', '1:,2:,3:,4:,5:,6:,7:,8:,9:,10:,11:,12:,13:,14:,15:,16:,17:,18:,19:,20:,21:,22:,23:,24:,25:,26:,27:,2', 4, '2017-11-01 22:18:02', '2017-11-01 23:58:02', 'N', 15, 'tpa'),
(2, 21, 1, '121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,', '121:,122:A,123:,124:A,125:A,126:,127:,128:,129:,130:,131:,132:,133:,134:,135:,136:,137:,138:,139:,14', 1, '2017-11-01 22:18:41', '2017-11-01 23:08:41', 'N', 1, 'tbi'),
(3, 17, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,3', '1:A,2:D,3:C,4:,5:,6:,7:,8:,9:,10:,11:,12:,13:,14:,15:,16:,17:,18:,19:,20:,21:,22:,23:,24:,25:,26:,27', 0, '2017-11-25 14:45:58', '2017-11-25 16:25:58', 'S', 0, 'tpa');

-- --------------------------------------------------------

--
-- Table structure for table `d_psoal`
--

CREATE TABLE `d_psoal` (
  `id_psoal` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_psoal`
--

INSERT INTO `d_psoal` (`id_psoal`, `nama`) VALUES
(8, 'abdil'),
(7, 'narutonian');

-- --------------------------------------------------------

--
-- Table structure for table `d_siswa`
--

CREATE TABLE `d_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `s_username` varchar(100) NOT NULL,
  `s_password` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_siswa`
--

INSERT INTO `d_siswa` (`id_siswa`, `nama`, `email`, `s_username`, `s_password`, `jenis_kelamin`, `asal_sekolah`) VALUES
(3, 'madara', 'madara@gmail.com', '', '', '', ''),
(6, 'asdfa', 'abdiillah98@gmail.com', 'asf', '89ccfac87d8d06db06bf3211cb2d69ed', 'laki-laki', ''),
(8, 'ds', 'abdiillah98@gmail.com', 'sdc', 'a593b8ca80d28b706235f9accff5533f', 'laki-laki', 'dscs'),
(9, 'narutonian', 'abdiillah98@gmail.com', 'abdi', 'l', '', 'abdi'),
(10, 'aldani12', 'abdiillah98@gmail.com', 'aldani1', '21232f297a57a5a743894a0e4a801fc3', '', 'Sma N 2 Padang'),
(11, 'adbi', 'abdiillah98@gmail.com', 'abdil', 'd346a95b0f05fc044370d3b1d76172e0', 'laki-laki', 'Sma N 2 Padangsidimpuan'),
(12, 'gue', 'asd@gmail.com', 'naruto', 'cf9ee5bcb36b4936dd7064ee9b2f139e', 'laki-laki', 'sdf'),
(13, 'a', 'ab@gmail.com', 'a', '0cc175b9c0f1b6a831c399e269772661', 'laki-laki', 'a'),
(14, 'redi syaputra', 'redi@gmail.com', 'redi', '3e6e04925cfedccb173c7569687528d1', 'laki-laki', 'sma 1 medan'),
(19, 'a', 'asd@gmail.com', 'as', 'f970e2767d0cfe75876ea857f92e319b', 'laki-laki', 'a'),
(20, 'lala', 'lalabubu@yahoo.com', 'syalala', '78d3cab8aa662b4aa4cd2763c8be8901', 'laki-laki', 'bumbum'),
(21, 'aku', 'abdil@gmail.com', 'aku', '89ccfac87d8d06db06bf3211cb2d69ed', 'laki-laki', 'aku'),
(22, 'fal kampret', 'fal@gmail', 'fal', 'cd163c8ced276359d763ec1a31301a42', 'laki-laki', 'smk telkom');

-- --------------------------------------------------------

--
-- Table structure for table `d_soal`
--

CREATE TABLE `d_soal` (
  `id_soal` int(11) NOT NULL,
  `soal_kat` varchar(20) NOT NULL,
  `soal` text NOT NULL,
  `opsi_a` varchar(100) NOT NULL,
  `opsi_b` varchar(100) NOT NULL,
  `opsi_c` varchar(100) NOT NULL,
  `opsi_d` varchar(100) NOT NULL,
  `opsi_e` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `bobot` int(2) NOT NULL,
  `pembuat_soal` varchar(50) NOT NULL,
  `id_ujian` smallint(6) NOT NULL,
  `petunjuk_soal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_soal`
--

INSERT INTO `d_soal` (`id_soal`, `soal_kat`, `soal`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `jawaban`, `bobot`, `pembuat_soal`, `id_ujian`, `petunjuk_soal`) VALUES
(1, 'tpa', 'Tangkal\r\n', 'CEgah\r\n', 'Tak mempan\r\n', 'Lelang\r\n', 'Rangkul\r\n', 'Mempan\r\n', 'a', 4, 'admin', 1, 'SINONIM\r\n'),
(2, 'tpa', 'Virtual', 'Hiponema', 'Maya', 'Nyata', 'Virgin', 'Impian', 'E', 4, 'admin', 1, ''),
(3, 'tpa', 'Friski', 'Kasar', 'Licin', 'Desakan', 'Sedih', 'Tidak berdaya', 'C', 4, 'admin', 1, ''),
(4, 'tpa', 'Hukuman', 'Aturan', 'Penjara', 'Denda', 'Delik aduan', 'Larangan', 'C', 4, 'admin', 1, ''),
(5, 'tpa', 'Hibrida', 'Cepat berbuah', 'Tanaman rendah', 'Cangkokan', 'Antar tanaman', 'Bibit unggul', 'E', 4, 'admin', 1, ''),
(6, 'tpa', 'Residu ', 'Reduksi ', 'Remisi', 'Sisa', 'Ampas', 'Hasil', 'C', 4, 'admin', 1, ''),
(7, 'tpa', 'Akurat', ' Ralat', 'Saksama', 'Selidik', 'Limit', 'Aproksimasi', 'B', 4, 'admin', 1, 'PENGERTIAN'),
(8, 'tpa', 'Class', ' State', ' Kamar ', 'Tingkatan ', 'Ruangan', ' Group', 'E', 4, 'admin', 1, ''),
(9, 'tpa', 'Canggih', 'sophisticated', ' Sulit', ' Mutakhir', 'Kompleks', ' Sukar', 'A', 4, 'admin', 1, ''),
(10, 'tpa', 'Otodidak', 'Rehabilitasi kerusakan tulang ', 'Cara belajar mandiri ', 'Pendidikan luar biasa', 'Cara mengajar tuna grahita', 'Maju dengan belajar sendiri', 'E', 4, 'admin', 1, ''),
(11, 'tpa', 'Latif ', 'Atraktif ', 'Bersahaja', 'Aktif', 'Natural ', 'Indah', 'E', 4, 'admin', 1, ''),
(12, 'tpa', 'Gaji    ', 'Honor ', 'Bonus', 'Tunjangan', 'Pekerjaan', 'Pencaharian', 'A', 4, 'admin', 1, ''),
(13, 'tpa', 'Konkaf   ', 'Konveks', 'Optik', 'Lensa', 'Cekung ', 'Konveksi', 'A', 4, 'admin', 1, 'ANTONIM'),
(14, 'tpa', 'Perintis  ', 'Pioner', 'Pembawa ', 'Generasi ', 'Pewaris', 'Pendahulu', 'D', 4, 'admin', 1, ''),
(15, 'tpa', 'Tinggi  ', 'Bawah ', 'Kerdil ', 'Kecil ', 'Rendah', 'Pendek', 'D', 4, 'admin', 1, ''),
(16, 'tpa', 'Gegai  ', 'Petir', 'Sahih', 'Lemah', 'Kuat ', 'Berhasil', 'D', 4, 'admin', 1, ''),
(17, 'tpa', 'Tetiran ', 'Petir', ' Asli', 'Amatiran', 'Imitasi', 'Palsu', 'B', 4, 'admin', 1, ''),
(18, 'tpa', 'Ekspresi  ', 'Kuasai', 'Cepat', 'Lambat ', 'Impresi ', 'Reaksi', 'D', 4, 'admin', 1, ''),
(19, 'tpa', 'Petunjuk : Afirmasi  ', 'Menolak : melawan', 'Didenda : bertahan ', 'Setuju : berkata', 'Relasi : keadaan ', 'Rejeksi : konfirmasi', 'B', 4, 'admin', 1, 'ANALOGI'),
(20, 'tpa', 'Kaki : Sepatu ', ' Cat : kuas', 'Meja : ruangan', 'Telinga : anting', 'Cincin : jari', ' Topi : kepala', 'C', 4, 'admin', 1, ''),
(21, 'tpa', 'Koran : Makalah : Buletin   ', 'Restoran : hotel : losmen', 'Cat : kuas : lukisan', 'Sandal : sepatu : kaos', 'Air : roti : singkong', 'Bus : kereta api : delman', 'E', 4, 'admin', 1, ''),
(22, 'tpa', 'Busur : Garis ', 'Terbenam : terbit', 'Tangkap : lempar ', 'Tombak : busur ', 'Busur : panah ', 'Relatif : absolut', 'D', 4, 'admin', 1, ''),
(23, 'tpa', 'Tembakau : Rokok : Isap   ', ' Gandum : roti : makan ', 'Kulit : sepatu : kaki', 'Plastik : sisir : rambut', 'Beras : nasi : jemur', 'Teh : susu : minun', 'A', 4, 'admin', 1, ''),
(24, 'tpa', 'Mulut : Monyong  ', 'Leher : jenjang ', 'Mata : hitam', 'Dahi : muka ', 'Hidung : pesek', 'Pipi : merah', 'D', 4, 'admin', 1, ''),
(25, 'tpa', 'Penghormatan : Jasa | Intensif : ....    ', 'Piagam', 'Pensiun ', 'Hadiah', 'Prestasi', 'Lembur', 'D', 4, 'admin', 1, ''),
(26, 'tpa', 'Tubuh : Pakaian ', 'Kurva : alam ', 'Lidi : sapu', 'Meja : kotak', 'Buku : sampul ', 'Jalan : garis', 'D', 4, 'admin', 1, ''),
(27, 'tpa', 'Air : Menguap ', 'Es : mencair', 'Panas : memuai ', 'Jatuh : pecah', 'Uap : hujan', 'Laut : mendung', 'A', 4, 'admin', 1, ''),
(28, 'tpa', 'Gundul : Rambut ', 'Bugil : pakaian', 'Keramik : lantai', 'Kepala : botak ', 'Mogok : mobil ', 'Rambut : bulu', 'A', 4, 'admin', 1, ''),
(29, 'tpa', 'Masalah dalam kutipan tajuk rencana tersebut adalah ..', 'Pemerintah tidak serius dalam menyediakan infrastruktur dan sarana transportasi publik.', 'Kegagalan pemerintah di sektor transportasi publik memicu konsumsi BBM semakin melonjak.', 'Kemacetan lalu lintas parah terlihat pada setiap saat di kotakota besar, khususnya di Jakarta. ', 'Pemerintah ingin menghemat anggaran subsidi APBN, tetapi dalam kenyataannya malah sebaliknya. ', 'Pertumbuhan ekonomi terhambat dan terjadi kelangkaan BBM karena pemerintah menaikkan harga BBM.', 'A', 4, 'admin', 1, 'BACAAN 1 (29 s.d 30) (1) Kita pertanyakan keseriusan pemerintah menyediakan infrastruktur dan sarana transportasi publik, khususnya angkutan darat. (2) Sampai kini, belum terlihat upaya signifikan ke arah itu. (3) Bahkan, kita melihat kemacetan parah setiap saat di kota-kota besar, khususnya di Jakarta. (4) Kegagalan pemerintah di sektor transportasi publik itulah pemicu konsumsi BBM semakin melonjak. (5) Buktinya, sektor transportasi darat menyedot 90 persen BBM bersubsidi, mobil pribadi mengonsumsi 53 persen dan sepeda motor 40 persen. (6) Menggunakan kendaraan pribadi walau ongkos mahal menjadi pilihan efektif ketika solusi alternatif bagi masyarakat tidak tersedia. (7) Kita ingatkan, jangan sampai pemerintah ingin menghemat anggaran subsidi demi APBN lantas masyarakat berkorban berkali-kali lipat karena kehilangan kesempatan peningkatan produktivitas, akibat kelangkaan BBM yang merugi, melainkan secara umum pertumbuhan ekonomi pun terhambat.'),
(30, 'tpa', 'Opini penulis dalam paragraf tersebut terdapat pada kalimat nomor ....  ', '(1) dan (2) ', '(2) dan (4)', '(3) dan (4)', '(5) dan (6)', '(6) dan (7)', 'E', 4, 'admin', 1, ''),
(31, 'tpa', 'Ide pokok paragraf di atas adalah......    ', 'penggundulan dan perbaikan hutan', 'luas hutan di Indonesia', 'keadaan hutan Indonesia ', 'anggaran perbaikan hutan', 'penurunan kualitas hutan tutupan', 'B', 4, 'admin', 1, 'BACAAN 2 (31 s.d 32) (1) Sebagai salah satu negara dengan hutan terluas di dunia, Indonesia menjadi incaran investor kegiatan ekonomi ekstraktif. (2) Kini luas hutan di Indonesia yang mengalami deforentasi atau penggundulan dan degradasi atau penurunan kualitas tutupan hutan mencapai 56 juta hektar. (3) Perbaikan hutan pada tahun ini diharapkan dapat mencapai 1 juta hektar. (4) Akan tetapi, itubergantung pada anggaran. (5) Tahun ini Departemen Kehutanan mengajukan anggaran Rp 8,5 trilyun ke Departemen Keuangan.'),
(32, 'tpa', 'Kalimat fakta dalam paragraf di atas terdapat pada nomor…', '(1) dan (2) ', '(1) dan (3)', '(2) dan (3) ', '(2) dan (5) ', '(3) dan (5)', 'D', 4, 'admin', 1, ''),
(33, 'tpa', 'Konflik yang terdapat dalam cuplikan cerpen tersebut adalah...  ', 'Perasaan marah Bapak terhadap seisi rumah.', 'Mbak Nurul merasa sedih terhadap Bapak.', 'Ketidakrelaan Bapak tinggal di rumah. ', 'Perasaan marah Mbak Nurul kepada Bapak', 'Rasa penyesalan Bapak menjadi pejuang.', 'D', 4, 'admin', 1, 'BACAAN 3 Ceritanya hari itu tanggal 10 November, sejak pagi hujan gerimis terus turun. Di bawah rintik-rintik hujan bapak memasang bendera, kemudian dari teras rumah dipandanginya bendera yang mulai basah terkena air hujan. Rupanya bapak tidak rela jika benderanya basah. Oleh karena itu, kemudian dicabutnya tiang bendera yang terbuat dari bambu itu dan dipanggulnya menuju tempat yang teduh. Tak lama kemudian hujan reda, dipasangnya kembali tiang itu di halaman. Namun, ketika beberapa jam kemudian hujan turun lagi. Lantas diambilnya lagi tiang bendera itu dan dibawa ke tempat yang teduh. Hal itu terjadi sampai beberapa kali. Tentu saja melihat ulah bapak seperti itu, Mas Toro calon suami Mbak Nurul tertawa. Dan hal itu membuat kakakku malu. Setelah makan siang dengan suara keras kakakku bercerita: \"Ibu kenal Pak Samsuri, Pakde Mas Toro? Dia juga pejuang Angkatan \'45. Dulu katanya pernah berjuang bersama bapak, tapi orangnya sederhana ya, Bu. Tidak pernah menunjukkan kalau dirinya mantan pejuang\". Dia terus bicara seperti penyiar radio yang tanpa meminta pendapat pendengarnya. Kami semua tahu untuk siapa cerita itu ditunjukkan dan bapak mengerti kalau kakakku tengah menyindirnya. Dengan kalem bapak menyahut: \"Samsuri itu tentara, tapi tidak pernah ikut perang, tugasnya di bagian logistik. Jadi tahunya, ya, makanan saja. Bilang sama Toro, pacarmu itu kalau pakdenya tentara yang takut sama bedil!\" Mendengar omongan bapak seperti itu, Mbak Nurul sangat tersinggung. Akibatnya dia tidak mau bicara dengan bapak sampai beberapa hari. (Benderaku, Atfi Lailia Khusnawati)'),
(34, 'tpa', 'Penyebab terjadinya konflik dalam kutipan cerpen tersebut adalah....   ', 'Bapak tidak rela jika benderanya basah karena air hujan. ', 'Mas Toro malu memiliki pakde yang takut dengan bedil.', 'Bapak mengejek Pak Samsuri, Pakde pacar Mbak Nurul', 'Mbak Nurul marah karena pacarnya diejek bapak.', 'Bapak adalah pejuang Angkatan \'45 yang pernah berperang.', 'C', 4, 'admin', 1, ''),
(35, 'tpa', 'Peristiwa yang terjadi akibat konflik adalah…', 'Bapak tetap dengan pendiriannya, sangat mencintai bendera. ', 'Mas Toro senang melihat bapak bersikap berlebihan terhadap bendera. ', 'Ibu memaklumi sikap bapak yang sangat menghormati bendera.', 'Mbak Nurul sangat tersinggung mendengar perkataan bapak. ', 'Mbak Nurul tidak mau berbicara dengan bapak sampai beberapa hari.', 'E', 4, 'admin', 1, ''),
(36, 'tpa', 'Amir berkendaraan dari kota A ke kota Byang berjarak 247 km. Jika Amir berangkatdari kota A pukul 07.20 dan tiba di kota Bpukul 10.35 maka kecepatan rata-ratakendaraan Amir ialah..', '62 km/jam ', '69 km/jam ', '76 km/jam ', '82 km/jam', '', 'C', 4, 'admin', 1, 'KEMAMPUAN KUANTITATIF'),
(37, 'tpa', 'Harga 3 buku tulis dan 2 buku gambarRp11.500,00 sedangkan harga 2 buku tulisdan 5 buku gambar Rp15.000,00. Harga 5buku tulis dan 10 buku gambar ialah ... ', 'Rp27.500,00 ', 'Rp32.500,00 ', 'Rp35.000,00 ', 'Rp45.000,00 ', '', 'B', 4, 'admin', 1, ''),
(38, 'tpa', 'Dalam suatu tes ditetapkan bahwa untukjawaban yang benar diberi nilai 2, jawabanyang salah diberi nilai - 1, dan untuk soalyang tidak dijawab diberi nilai 0. Jika dari100 soal-pada tes tersebut Tono menjawabdengan benar 82 soal, 8 soal tidak dijawab,dan sisanya dijawab salah, nilai yangdiperoleh Tono ialah ... ', '146', '1.54', '164', '1.74', '', 'B', 4, 'admin', 1, ''),
(39, 'tpa', 'Tono menjual motor seharga Rp 6.000.000,00.Bila Tono mendapat untung 25%, hargapembelian motor tersebut? ', 'Rp3.500.000,00 ', 'Rp4.500.000,00.', 'Rp4.800.000,00.', 'Rp7.500.000,00.', '', 'C', 4, 'admin', 1, ''),
(40, 'tpa', 'Pak Ali membagikan 40 buah buku dan 30buah pensil kepada sekelompok anak yatim.Setiap anak mendapatkan sama banyakuntuk setiap jenisnya. Berapa orang anakyatim paling banyak yang dapat menerimabuku dan pensil? ', '5 orang', '10 orang ', '15 orang. ', '20 orang', '', 'B', 4, 'admin', 1, ''),
(41, 'tpa', 'Pada hari Minggu, Deni bermain sepeda dihalaman rumahnya. Jari-jari roda sepedayang digunakan oleh Deni 42 cm. Jika selamabersepeda rodanya berputar sebanyak 50kali, panjang lintasan yang dilalui ialah... ', '55,44 meter ', '132 meter', '264 meter ', '277,20 meter', '', 'B', 4, 'admin', 1, ''),
(42, 'tpa', 'setiap siswa dalam satu kelas suka basketatau sepak bola. Jika di dalam kelas ada 30siswa, yang suka basket ada 27 siswa,sedangkan yang suka sepak bola ada 22siswa, maka berapa jumlah siswa yang sukabasket dan sepak bola. ', '3', '5', '8', '11', '19', 'E', 4, 'admin', 1, ''),
(43, 'tpa', 'Sebuah wadah berbentuk silinder dan berisiair 1/5 nya. Jika ditambah dengan 6 liter air,temyata wadah tersebut terisi 1/2 nya.Berapa liter kapasitas wadah tersebut ?', '24', '15', '22', '18', '20', 'E', 4, 'admin', 1, ''),
(44, 'tpa', 'Seorang pedagang menjual sebuah barangdengan harga Rp. 80.000,- dan mempunyailaba 25% dari harga belinya. Berapakahharga beli barang tersebut?   ', 'Rp. 120.000,-', 'Rp. 100.000,- ', 'Rp. 20.000,- ', 'Rp. 96.000', 'Rp. 64.000,-', 'E', 4, 'admin', 1, ''),
(45, 'tpa', 'Sandra mengendarai mobil dari kota A kekota B. Rute perjalanannya sebagai berikut :ia berangkat dari kola A menuju timur sejauh20 km, kemudian belok ke utara 20 km,kemudian belok lagi ke timur 10 km,kemudian belok lagi ke utara 10 km.Terakhir ia belok ke timur sejauh 10 km dantiba di kota B. Sebenarnya berapa jarak kota A - B?', '80 km', '70 km', '60 km', '50 km', '40 km', 'D', 4, 'admin', 1, ''),
(46, 'tpa', '¼ berbanding 3/5 adalah.... ', '1 berbanding 3 ', '3 berbanding 20', '5 berbanding 12', '3 berbanding 4', '5 berbanding 4', 'C', 4, 'admin', 1, ''),
(47, 'tpa', 'Empat orang membangun jembatan untuksungai dan selesai dalam 15 hari. Jikajembatan ingin diselesaikan dalam 6 hari,25makaberapa orang yang diperlukan untukmenyelesaikannya?', '12 orang ', '10 orang ', '8 orang ', '4 orang', '6 orang', 'B', 4, 'admin', 1, ''),
(48, 'tpa', 'Jika x = berat total p kotak yang masingmasingberatnya q kg.Jika y = berat total q kotak yang masingmasingberatnya p kg, maka.... ', 'x > yang ', 'x < yang', ' x = yang ', '2x = 2y ', ' X dan yang tidak dapat ditentukan', 'C', 4, 'admin', 1, ''),
(49, 'tpa', '49.Sebuah kubus yang panjang rusuknya 10 cmdibelah-belah menjadi 8 kubus kecil yangsama besarnya. Berapakah panjang rusuk ke8 kubus kecil tersebut? ', ' 1 : 2  ', '  2 : 1 ', ' 2 : 3 ', ' 3 : 2 ', ' 3 : 1', 'D', 4, 'admin', 1, ''),
(50, 'tpa', '50.Jika tinggi tabung p 2 kali tinggi tabung q,sedangkan jarijari tabung p adalah 1/2 darijarijari tabung q, maka perbandingan isitabung p terhadap isi tabung q adalah... ', ' 1 : 2 ', ' 2 : 1 ', ' 1 : 4 ', ' 4 : 1 ', ' 1 : 1', 'A', 4, 'admin', 1, ''),
(51, 'tpa', '51.Sebuah pabrik merencanakan membuatsepatu dan sandal. Jika jumlah barangtersebut adalah 1200 pasang dan jumlahsepatu 4 kali lipat dari jumlah sandal, berapapasang sepatu yang akan dibuat?', '1000', '960', '720', '480', '360', 'B', 4, 'admin', 1, ''),
(52, 'tpa', '52.Waktu di negara S adalah 3 jam lebih cepatdibandingkan dengan negara M. Sebuahpesawat terbang bergerak dari negara S kenegara M pada pukul 5 pagi dan tiba 4 jamkemudian. Pada pukul …', '2 pagi ', ' 3 pagi ', '4 pagi ', ' 6 pagi ', ' 9 pagi', 'D', 4, 'admin', 1, ''),
(53, 'tpa', '53.Umur rata-rata hitung suatu kelompok yangterdiri dari guru dan dosen adalah 40 tahun.Jika unmr rata-rata para guru adalah 35tahun dan umur rata-rata para dosen adalah50 tahun, maka perbandingan banyaknyaguru dan dosen adalah....', ' 1 : 2 ', '  2 : 1', '  2 : 3', '  3 : 2 ', ' 3 : 1', 'B', 4, 'admin', 1, ''),
(54, 'tpa', '54.Seorang pedagang menjual sepatu sehargaRp. 60.000,- dan memperoleh laba sebesar20% dari harga belinya. Berapa hargabelinya? ', ' Rp. 72.000,- ', ' Rp. 56.000,- ', ' Rp. 50.000,- ', ' Rp. 48.000,- ', ' Rp. 30.000,-', 'C', 4, 'admin', 1, ''),
(55, 'tpa', '55.Dalam sebuah kandang terdapat 50 ekorayam. Terdiri dari 27 ekor ayam jantan yang18 di antaranya berwarna hitam. Jika yangberwarna hitam di kandang tersebut ada 35ekor, maka banyaknya ayam betina yangtidak berwama hitam adalah... ', '6', '7', '8', '10', '12', 'A', 4, 'admin', 1, ''),
(56, 'tpa', '56.Untuk membentuk pantia sebuah acara, ada2 orang calon ketua, 3 orang calon sekretaris,dan 2 orang calon bendahara, serta tidak satupun yang dicalonkan pada dua jabatan yangberbeda. Jika panitia terdiri dari 1 orangketua, 1 sekretaris, dan 1 bendahara, makaada berapa cara susunan panitia tersebutdapat dibentuk? ', ' 18 cara ', ' 16 cara ', '12 cara ', ' 8 cara ', ' 10 cara', 'C', 4, 'admin', 1, ''),
(57, 'tpa', '57.Delapan tahun yang lalu umur A samadengan 3 kali umur B. Sekarang umur Amenjadi 2 kali umur B. Berapakah jumlahumur mereka? ', '36', '42', '45', '46', '48', 'E', 4, 'admin', 1, ''),
(58, 'tpa', '58.Sebuah keluarga memiliki 5 orang anak.Salah satu berumur x tahun dan ada anakyang berumur 2 tahun. 3 anak lainnyaberumur x + 2, x + 4, 2x - 3 tahun. Jika rataratahitung umur mereka 16 tahun. Berapaumur anak tertua?', ' 11 tahun ', ' 15 tahun ', '19 tahun ', '22 tahun ', ' 27 tahun', 'E', 4, 'admin', 1, ''),
(59, 'tpa', '59.Sebuah truk berangkat menuju kota S padapuku 08.10 dengan kecepatan 40km/jam.Sebuah sedan menyusul dari tempat yangsama pada pukul 08.40 dengan kecepatan 60km/jam. Jika rute keduanya sama dan tidakada yang berhenti, maka pukul berapakahsedan menyalip truk? ', ' 10.20 ', ' 10.00', ' 09.40 ', ' 09.35', ' 09.45', 'C', 4, 'admin', 1, ''),
(60, 'tpa', '60.Gelas A berbentuk silinder dan mempunyaitinggi 4 kali tinggi gelas B. Jika jari jari gelasA ½ kali jari jari gelas B, maka perbandinganvolume gelas A dan gelas B adalah... ', ' 1 : 2 ', ' 2 : 1 ', ' 1 : 1', '  1 : 4 ', ' 4 : 1', 'C', 4, 'admin', 1, ''),
(61, 'tpa', 'Di dalam kelas terdapat sejumlahmahasiswa. Mahasiswa yang suka renangada 34 orang. Mahasiswa yang suka tenisada 16 orang. Sedangkan yang sukakeduanya 5 orang. Berapa jumlah mahasisadalam kelas tersebut, jika ada 2 orang tidakmenyukai renang dan tenis ? ', '6', '18', '30', '42', '47', 'E', 4, 'admin', 1, ''),
(62, 'tpa', 'Jawablah pertanyaanpertanyaan berikut inidengan memilih alternatif jawaban yangdisediakan!Jika x = p x l x l dan y = p + 1 + l,Maka … ', ' x > y', ' x < y ', ' x = y ', ' hubungan antar x dan y tak dapat ditentukan', '', 'B', 4, 'admin', 1, ''),
(63, 'tpa', 'Jika x = berat total k kotak yang masingmasingberatnya 1 kg. y = berat total 1 kotakyang masing-masing beratnya k kg, maka …', ' x > Y ', ' x < y ', ' x = y ', ' hubungan antara x dan y tak dapat ditentukan', '', 'C', 4, 'admin', 1, ''),
(64, 'tpa', 'Jika x = ?72 ? ?78 dan y = 1/74 - 1/76,maka…', ' x > y', 'x < y', ' x =y', ' hubungan antara x dan y tak dapat ditentukan', '', 'B', 4, 'admin', 1, ''),
(65, 'tpa', 'Jika 4 < x < 6 dan 5 < y < 7, maka …', ' x > y', ' x < y ', ' x = y ', ' hubungan antara x dan y tak dapat ditentukan', '', 'C', 4, 'admin', 1, ''),
(66, 'tpa', 'Jika x = selisih umur Tuti dan umur ayahnyasekarang, dan y = selisih umur kedua orangitu 5 tahun yang lalu, maka … ', ' x > y', ' x < y', 'x = y ', ' hubungan antara x dan y tak dapat ditentukan', '', 'C', 4, 'admin', 1, ''),
(67, 'tpa', 'Jika x = rusuk sebuah kubus yang isinya =125 cm3 dan y = sisi miring segitiga siku- sikuyang panjang kedua sisinya yang luar 3 cmdan 4 cm, maka …', ' x > y ', ' x < y ', ' x = y ', ' hubungan antara x dan y tak dapat ditentukan', '', 'C', 4, 'admin', 1, ''),
(68, 'tpa', 'Jika harga y terletak di antara harga x dan z,dan x < z, maka …. ', ' x > y', 'x < y ', ' x = y', ' hubungan antara x dan y tak dapat ditentukan', '', 'B', 4, 'admin', 1, ''),
(69, 'tpa', 'Jika x = luas bujur sangkar yang panjangsisinya = 10 cm dan y = luas lingkaran yanggaris tengahnya = 10 cm, maka …', ' x > y', ' x < y', '  x = y ', ' hubungan antara x dan y tak dapat ditentukan', '', 'A', 4, 'admin', 1, ''),
(70, 'tpa', 'Jika p = 3, q =1 dan x = ?64 ?serta y = pq + q3, maka …. ', ' x = y ', ' x > y ', ' x < y', ' hubungan antara x dan y tak dapat ditentukan', '', 'A', 4, 'admin', 1, ''),
(71, 'tpa', 'Jika x adalah bilangan positif terkecil yanghabis dibagi 14 dan 21 dan y adalah bilanganpositif terkecil yang habis dibagi 14 dan 28,maka …', ' x > y ', ' x < y ', ' x = y', ' hubungan antara x dan y tak dapat ditentukan', '', 'A', 4, 'admin', 1, ''),
(72, 'tpa', 'Jika Sumantri berjalan menempuh jarak 2/5km dalam 6 menit, berapakah kecepatanrata-rata perjalanan Sumantri?', '4 km/jam ', ' 4,2 km/jam ', ' 4,5 km/jam ', '4,8 km/jam', ' 5 km/jam', 'A', 4, 'admin', 1, ''),
(73, 'tpa', 'Seorang mahasiswa telah menyelesaikan 124SKS dengan Indeks Prestasi Komulatif 3,20.Semester ini dia mengambil 16 SKS.Berapakah indeks prestasi yang harus diacapai semester ini agar Indeks PrestasiKomulatifnya sebesar 3,25? ', '3,64', '3,68', '3,7', '3,74', '3,8', 'A', 4, 'admin', 1, ''),
(74, 'tpa', 'Jika x adalah sisi bujur sangkar yang luasnya= 100, dan y adalah sisi panjang sebuahempat persegi panjang yang luasnya = 100dan sisi pendeknya = 5 berapakah xy? ', '80', '100', '200', '250', '300', 'C', 4, 'admin', 1, ''),
(75, 'tpa', 'Jika tabung P tingginya dua kali tabung Qdan panjang jarijarinya setengah daripanjang jari-jari tabung Q, berapakah perbandingan isi tabung P terhariap isitabung Q? ', ' 1 : 4 ', ' 1 : 2 ', ' 1 : 1 ', ' 2 : 1 ', ' 4 : 1', 'B', 4, 'admin', 1, ''),
(76, 'tpa', 'Seorang berjalan dari titik A ke Timur sejauh4 m lalu ke Selatan sejauh 3 m, sampai ketitik B, lalu ke Timur sejauh 8 m terus keSelatan sejauh 8 m, sampai ke titik C, terus keSelatan sejauh 2 m sampai ke titik D.Berapakah panjang ABCD? ', ' 16 m ', ' 17 m ', ' 18 m ', ' 19 m', ' 20 m', 'D', 4, 'admin', 1, ''),
(77, 'tpa', 'Nana lebih tua dari Nani, Nia lebih mudadari Ani, Ane lebih muda dari Nani, Nanalebih muda dari Nia, Nani lebih tua dari Anemaka yang paling muda umurnya adalah .... ', ' Nana ', ' Nani', ' Nia', ' Ani ', ' Ane', 'E', 4, 'admin', 1, ''),
(78, 'tpa', 'R, S, T, U, V adalah lima siswa yang telahmenempuh Ujian Nasional. Berikut iniadalah hasil ujian kelima siswa.1) Nilai R lebih tinggi dari nilai S.2) Nilai T tertinggi.3) Nilai U lebih tinggi dari nilai R.4) Nilai V lebih rendah dari nilai R, tetapilebih tinggi dari nilai S.Dari pernyataan-pernyataan di atas, urutandari nilai yang terendah ialah .... ', 'R, S, U, V, T ', 'S, R, U, V, T ', ' S, V, U, R, T', 'S, V, R, U, T ', ' V, R, U, S, T', 'D', 4, 'admin', 1, ''),
(79, 'tpa', 'Jadi, pelamar yang akan diterima diperusahaan sebagai staf administrasi adalah....', 'P ', 'Q ', 'R', ' S', 'T', 'D', 4, 'admin', 1, 'Suatu perusahaan membutuhkan karyawanuntuk ditempatkan sebagai staf adminisirasidengan ketentuan pendidikan sarjana danberumur di bawah 30 tahun. Terdapat limapelamar di perusahaan ini, yaitu P, Q, R, S,dan T. Berikut ini informasi kelima pelamar. 1) Ada dua golongan umur, yaitu di bawah30 tahun dan di atas 30 tahun. Darikelima pelamar terdapat 2 pelamar yangberumur di bawah 30 tahun dan 3pelamar yang berumur di atas 30 Tahun. 2) Terdapat 2 pelamar yang berpendidikansarjana dan 3 pelamar yangberpendidikan diploma. 3) P dan R masuk golongan umur yangsama. 4) S dan T berada pada golongan umur yangberbeda. 5) Q dsn T memiliki pendidikan yang sama 6) R dan S memiliki tingkat pendidikanyang berbeda.'),
(80, 'tpa', 'Jarak antara kota P dan Q adalah setengahjarak antara kota R dan S. Di antara kota Pdan Q terdapat kota T. Jarak kota P ke kota Rsama dengan jarak kota Q ke kota S, yaitusetengah jarak kota P ke kota T. Jarak yangpaling jauh adalah antara kota .... ', ' P dan Q ', ' R dan S', 'P dan R', ' Q danS ', 'R dan T', 'B', 4, 'admin', 1, ''),
(81, 'tpa', '10 30 32 16 48 50 .... .... ', ' 18 36', '98 60 ', '58 48 ', ' 25 75', ' 32 64', 'D', 4, 'admin', 1, ''),
(82, 'tpa', '15 10 5 20 15 10 .... ....', ' 5 10', ' 40 35 ', ' 5 15 ', ' 20 25', ' 100 50', 'B', 4, 'admin', 1, ''),
(83, 'tpa', ' 2 4 6 9 11 13 .... .... ', ' 9 8 ', '22 26 ', '18 22 ', '14 17 ', ' 16 18', 'E', 4, 'admin', 1, ''),
(84, 'tpa', ' 94 88 82 76 70 64 .... .... ', '52 60 ', '58 52 ', ' 56 50 ', ' 70 68 ', ' 60 54', 'B', 4, 'admin', 1, ''),
(85, 'tpa', '12 9 9 8 6 7 .... ....', '3 6 ', '3 3 ', '4 4 ', '34 33 ', '5 4', 'A', 4, 'admin', 1, ''),
(86, 'tpa', '18 27 27 36 36 45 .... ....', '55 28 ', '54 37', '45 54 ', '39 55 ', '8 9', 'C', 4, 'admin', 1, ''),
(87, 'tpa', 'G H I M N J K L M N ... ... ', 'M N', 'N M ', 'O P ', 'P O', 'P Q', 'A', 4, 'admin', 1, ''),
(88, 'tpa', 'A B C C D D E F E G H F I J .... .... ', 'I I ', ' I J ', 'J J ', 'G K ', 'K K', 'D', 4, 'admin', 1, ''),
(89, 'tpa', 'A B D B B D C B D D B D .... .... ', 'B M ', 'E B', 'C D ', 'D E ', 'Z F', 'B', 4, 'admin', 1, ''),
(90, 'tpa', 'Suatu deret :b – m – n – d – o – p – f – q – r .... .... .... Tiga huruf berikutnya adalah ....', 'h, t, s', 'h, s, t ', 'd, r, s ', 'g, s, t', 's, h, t', 'B', 4, 'admin', 1, ''),
(91, 'tpa', 'Jika Budi rajin belajar maka ia menjadi pandai. Jika Budi menjadi pandai maka ia lulus ujian. Budi tidak lulus ujian. ', 'Budi menjadi pandai. ', 'budi rajin belajar', 'Budi lulus ujian. ', 'Budi tidak pandai. ', 'Budi tidak rajin belajar.', 'E', 4, 'admin', 1, ''),
(92, 'tpa', 'Jika Fadhil lulus ujian pegawai atau menikah maka ayah memberi hadiah uang. Ayah tidak memberi hadiah uang.', 'Fadhil tidak lulus ujian dan menikah. ', 'Fadhil tidak lulus ujian pegawai dan tidak menikah. ', 'Fadhil lulus ujian pegawai atau menikah.', 'Fadhil tidak lulus ujian pegawai atau tidak menikah.', 'Jika Fadhil tidak lulus ujian pegawai maka Fadhil tidak menikah', 'B', 4, 'admin', 1, ''),
(93, 'tpa', 'Jika Siti sakit maka dia pergi ke dokter.Jika Siti pergi ke dokter maka dia diberi obat.', 'Siti tidak sakit atau diberi obat. ', 'Siti sakit atau diberi obat.', ' Siti tidak sakit atau tidak diberi obat.', 'Siti sakit dan diberi obat. ', 'Siti tidak sakit dan tidak diberi obat.', 'A', 4, 'admin', 1, ''),
(94, 'tpa', 'Jika adik tidak makan, maka adik tidak bertenaga.Jika adik tidak bertenaga maka dia lemas.', 'Adik tidak makan atau adik lemas.', 'Adik makan atau adik lemas.', 'Adik makan atau adik tidak lemas ', 'Adik tidak makan walaupun lemas. ', 'Adik bertenaga karena makan.', 'B', 4, 'admin', 1, ''),
(95, 'tpa', 'Jika hari panas, maka Ani memakai topi. Ani tidak memakai topi atau ia memakai payung.Ani tidak memakai payung. ', ' Hari panas. ', 'Hari tidak panas.', 'Ani memakai topi. ', 'Hari panas dan Ani memakai topi. ', 'Hari tidak panas dan Ani memakai topi.', 'B', 4, 'admin', 1, ''),
(96, 'tpa', 'Jika Dodi rajin belajar, maka ia naik kelas.Jika Doi naik kelas, maka ia akan dibelikan baju', 'Dodi tidak rajin belajar tetapi ia akan dibelikan baju.', 'Dodi rajin belajar tetapi ia tidak akan dibelikan baju', ' Dodi rajin belajar atau ia akan dibelikan baju. ', 'Dodi tidak rajin belajaratau ia akan dibelikan baju. ', 'Dodi rajin belajar atau ia tidak akan dibelikan baju.', 'D', 4, 'admin', 1, ''),
(97, 'tpa', 'Jika Dinda rajin belajar, maka ia menjadi pandai. Jika Dinda menjadi pandai, maka ia lulus ujian.Jika Dinda lulus ujian, maka ia bahagia.', 'Jika Dinda rajin belajar maka ia tidak bahagia. ', 'Jika Dinda rajin belajar maka ia bahagia. ', 'Jika Dinda menjadi pandai maka ia rajin belajar. ', 'Jika Dinda tidak rajin belajar, maka ia tidak bahagia. ', 'Jika Dinda tidak menjadi pandai, maka ia rajin belajar.', 'B', 4, 'admin', 1, ''),
(98, 'tpa', 'Jika hari hujan, maka ibu memakai payung . Ibu tidak memakai payung ', ' Hari tidak hujan ', 'Hari hujan', ' Ibu memakai payung ', 'Hari hujan dan Ibu memakai payung', 'Hari tidak hujan dan Ibu memakai paying', 'A', 4, 'admin', 1, ''),
(99, 'tpa', 'Jika hari ini hujan maka saya tidak pergi. Jika saya tidak pergi maka saya nonton sepak bola …', 'Jika hujan maka saya tidak jadi nonton sepak bola', 'Jika hari ini hujan maka saya nonton sepak bola ', 'Hari hujan dan saya nonton sepak bola', 'Saya tidak nonton sepak bola atau hari tidak hujan ', 'Hari tidak hujan, saya tidak pergi tetapi saya nonton sepak bola', 'B', 4, 'admin', 1, ''),
(100, 'tpa', 'Saya bermain atau saya tidak gagal dalam ujian.Saya gagal dalam ujian.', 'Saya tidak bermain dan saya gagal dalam ujian. ', 'Jika saya bermain maka saya tidak gagal dalam ujian.', 'Saya bermain. ', ' Saya belajar.', 'Saya tidak bermain', 'C', 4, 'admin', 1, ''),
(101, 'tpa', 'Urutan-urutan jadwal berikut ini yang memenuhi persyaratan-persyaratan di atas untuk mahasiswa semester 2 hingga semester 8 adalah ', 'J,H,G,F,M,K,L ', 'G,J,F,H,M,K,L ', 'N,H,L,J,G,F,K', 'M,K,L,J,G,F,H', '', '', 4, 'admin', 1, ''),
(102, 'tpa', 'H dapat diambil pada setiap semester berikut ini,kecuali.... ', '2', '3', '4', '6', '', '', 4, 'admin', 1, ''),
(103, 'tpa', 'semester tercepat yang dapat digunakan oleh mahasiswa untuk mengambil mata kuliah F adalah semester…', '5', '4', '3', '2', '', 'B', 4, 'admin', 1, ''),
(104, 'tpa', 'apabila UJ diambil pada semester 4,maka G harus diambil pada semester... ', '2', '3', '5', '', '', 'C', 4, 'admin', 1, ''),
(105, 'tpa', 'apabila H diambil pada semester 5,maka terdapat beberapa kemungkinan jadwalkah kondisi diatas ', '1', '2', '3', '4', '', 'D', 4, 'admin', 1, ''),
(106, 'tpa', 'dari urutan2 berikut ini,manakah yang memenuhi persyaratan tersebut? ', 'E,F,A,C,B,D ', 'A,F,C,D,B,E', 'E,F,A,B,D,C ', 'B,A,F,E,D,C', '', 'D', 4, 'admin', 1, ''),
(107, 'tpa', 'Manakah dari pernyataan berikut ini yang menunjukkan urutan2 yang lengkap dan akurat mengenai mahasiswa yang dapat maju segera setelah C maju ', 'D', 'E ', 'D,E,A ', 'D,E,F', '', 'D', 4, 'admin', 1, ''),
(108, 'tpa', 'apabila B maju pada urutan kelima,manakah dari penyataaan berikut ini yang benar?', 'B maju pada urutan pertama', 'E maju pada urutan kedua', 'A maju pada urutas ketiga', 'D majju pada urutan keempat', '', 'D', 4, 'admin', 1, ''),
(109, 'tpa', 'apabila E maju persis sebelum C,ada beberapa urutan yang berbeda keenam presentasi tersebut dapat dibuat? ', '2', '3', '4', '5', '', 'A', 4, 'admin', 1, ''),
(110, 'tpa', 'baik jono,kasminto maupun lanang masing2 turun di', 'A,B,E', 'A,B,D', 'C,A,E ', 'D,F,A', '', '', 4, 'admin', 1, ''),
(111, 'tpa', 'apabila jono turun di R,maka lanag mungkin akan turun di ', 'B', ' C', ' D ', 'F', '', '', 4, 'admin', 1, ''),
(112, 'tpa', 'apabila tidak ada seorangpun yang turun di C atau E, maka pernyataan berikut ini,manakah yang benar? ', 'jono turun di F ', 'kasminto turun di A ', 'kasminto turun di B ', 'lanang turun di D', '', 'A', 4, 'admin', 1, ''),
(113, 'tpa', 'Semua hewan adalah makhluk hidup, semua makhluk hidup akan mati. kucing adalah binatang yang mempunyai ekor. tidak semua hewan berekor dapat memanjat. jadi …', 'kucing dapat memanjat pohon ', 'kucing tidak dapat memanjat pohon ', 'kucing tidak akan mati', 'kucing akan mati', '', 'D', 4, 'admin', 1, ''),
(114, 'tpa', 'indra adalah orang desa . indra bekerja sebagai buruh di sebuah pabrik, banyak buruh2 pabrik yang malas. bonar adalah teman indra.jadi : ', 'indra itu malas', 'bonar itu malas ', 'teman2 indra semuanya malas ', 'bonar mungkin sedesa dengan indra', '', 'D', 4, 'admin', 1, ''),
(115, 'tpa', 'semua mamalia tidak bertelur , dan semua yang bertelur adalah hewan. jadi : ', 'mamalia bukan hewan ', 'ada hewan yang tidak bertelur ', ' mamalia bisa saja bertelur ', 'ikan paus adalah mamalia', '', 'B', 4, 'admin', 1, ''),
(116, 'tpa', '.', 'A', 'B', 'C', 'D', '', 'D', 4, 'admin', 1, ''),
(117, 'tpa', '.', 'A', 'B', 'C', 'D', '', 'B', 4, 'admin', 1, ''),
(118, 'tpa', '.', '1', '2', '3', '4', '', 'A', 4, 'admin', 1, ''),
(119, 'tpa', '.', 'A', 'B', 'C', 'D', 'E', 'B', 4, 'admin', 1, ''),
(120, 'tpa', '.', 'A', 'B', 'C', 'D', 'E', 'C', 4, 'admin', 1, ''),
(121, 'tbi', ' _________ was backed up for miles on the freeway. ', 'Yesterday ', 'In the morning ', 'Traffic ', 'Cars', '', 'C', 4, 'admin', 1, ''),
(122, 'tbi', 'Engineers________ for work on the new spaceprogram.', 'necessary', 'are needed ', 'hopefully', 'next month', '', 'B', 4, 'admin', 1, ''),
(123, 'tbi', 'Fitzgerald_______ the society of the 1920\'s in his novel, The Great Gatsby. ', 'reflect', 'reflects', 'are reflecting ', 'have reflected', '', 'B', 4, 'admin', 1, ''),
(124, 'tbi', 'With his friend________ found the movie theater ', 'has', 'he', ' later', 'when', '', 'B', 4, 'admin', 1, ''),
(125, 'tbi', ' _________, George, is attending the lecture. ', 'Right now', 'Happily ', 'Because of the time ', 'My friend', '', 'D', 4, 'admin', 1, ''),
(126, 'tbi', ' __________ , Sarah rarely misses her basketball shots.', 'An excellent basketball player ', 'An excellent basketball player is ', 'Sarah is an excellent basketball player ', 'Her excellent basketball play', '', 'A', 4, 'admin', 1, ''),
(127, 'tbi', 'The child_________ playing in the yard is my son.', ' now', ' is', 'he ', 'was', '', 'A', 4, 'admin', 1, ''),
(128, 'tbi', 'The bread _________ baked this morning smelled delicious.', 'has', ' was', ' it', ' just', '', '', 4, 'admin', 1, ''),
(129, 'tbi', ' A power failure occured, _______ the lamps went out. ', 'then', ' so', ' later', ' next', '', 'B', 4, 'admin', 1, ''),
(130, 'tbi', ' _______ was late, I missed the appointment ', ' I ', 'Because', 'The train', 'Since he', '', 'D', 4, 'admin', 1, ''),
(131, 'tbi', '_____ the demands of aerospace, medicine, and agriculture, aengineers, are creating exotic new metallic substances.', 'Meet', 'Being met are ', 'To meet', 'They are meeting', '', 'C', 4, 'admin', 1, ''),
(132, 'tbi', ' _______ James A. Bland, “Carry Me Back to Old Virginny” was adopted is the state song of Virginia in 1940. ', 'Was written b ', ' His writing was ', 'He wrote the ', 'Written by', '', 'D', 4, 'admin', 1, ''),
(133, 'tbi', 'Mary Garden, ______ the early 1900’s was considered one of the best singing actresses of her time. ', 'a soprano was popular', ' in a popular soprano', 'was a popular soprano ', ' a popular soprano in', '', 'D', 4, 'admin', 1, ''),
(134, 'tbi', 'In the realm of psychological theory Margaret F. Washburn was a dualist _____ that motor phenomena have an essential role in psychology.', 'who she believed ', 'who believed ', 'believed ', 'who did she believe', '', 'B', 4, 'admin', 1, ''),
(135, 'tbi', 'I wish you would tell me …………………. ', 'Who is being lived next door ', 'Who does live in the next door ', 'Who lives next door ', 'Who next door was living', '', 'C', 4, 'admin', 1, ''),
(136, 'tbi', 'During the Daytona, the lead car ………………….., leaving the others far behind. ', 'Forwarded rapidly ', 'Advanced rapidly ', 'Advanced forward rapidly ', 'Advanced in a rapidly manner', '', 'B', 4, 'admin', 1, ''),
(137, 'tbi', ' Geysers have often been compared to volcanoes _______ they both emit hot liquids from below the Earth’s surface.', 'due to', 'because ', ' in spite of', ' regardless of', '', 'B', 4, 'admin', 1, ''),
(138, 'tbi', 'During the early period of ocean navigation, ________ any need for sophisticated instruments and techniques. ', ' so that hardly ', ' where there hardly was ', 'hardly was ', 'there was hardly', '', 'D', 4, 'admin', 1, ''),
(139, 'tbi', 'The swimming instructor came... if the apartment was still available…', ' to see', 'seeing ', 'saw ', 'for seeing', '', 'A', 4, 'admin', 1, ''),
(140, 'tbi', 'The committee has met twice and .... ', 'they reached a final decision ', 'a final decision was reached ', 'its decision was reached ', 'it has reached a final decision', '', 'D', 4, 'admin', 1, ''),
(141, 'tbi', 'The manager won\'t be able to attend the shareholders\' meeting tomorrow because.... ', 'he must to give a lecture', 'he will be giving a lecture ', 'of he will give lecture ', 'he will have giving a lecture', '', 'B', 4, 'admin', 1, ''),
(142, 'tbi', 'Brenda\'s score on the test is the highest in class,..... ', 'She should study hard last night.', 'She should have studied hard last night. ', 'She must have studied hard last night. ', 'She had to study hard last night', '', 'C', 4, 'admin', 1, ''),
(143, 'tbi', 'To answer accurately is more important than…', ' to finish quickly', 'a quick finish ', 'you finish it quickly ', 'quick finish', '', 'A', 4, 'admin', 1, ''),
(144, 'tbi', 'Having been served lunch,.... ', 'the problems were discussed by the participants. ', 'the participants discuss the problems. ', 'it was discussed by the participants.', ' A discussion of the problems were made by the participants', '', 'B', 4, 'admin', 1, ''),
(145, 'tbi', 'East Kalimantan relies heavily on income from oil and natural gas, and.... ', 'Aceh province also. ', 'Aceh province too.', ' Aceh province is as well. ', 'so does Aceh province.', '', 'D', 4, 'admin', 1, ''),
(146, 'tbi', 'The participants have had some problems deciding....', 'when they should announce the result of the meeting.', 'when are they sgoing to announce the result of the meeting.', 'when should they announce the result of the meeting. ', 'the time when the result of the meeting to announce.', '', 'C', 4, 'admin', 1, ''),
(147, 'tbi', 'This year will be more difficult for our organization because.... ', 'we have less money and volunteers than last year.', 'there is a little money and volunteers than last year.', 'it has less money and fewer volunteers than it had last year. ', 'it has fewer money and less volunteers than it had last year.', '', 'C', 4, 'admin', 1, ''),
(148, 'tbi', 'Professor Baker told his students that... ', 'they can turn over their reports on Mondays.', 'the reports can turn over on Monday. ', 'they could hand in their reports on Monday.', 'the reports they can hand in on Monday.', '', 'C', 4, 'admin', 1, ''),
(149, 'tbi', 'The adder is a venomous snake ... bite may prove fatal to humans.', 'its', 'whom its ', 'that ', 'whose', '', 'D', 4, 'admin', 1, ''),
(150, 'tbi', ' .... a bee colony gets, the more the queen\'s egglaying capability diminishers.', 'It is more overcrowded.', 'The more overcrowded. ', 'More overcrowded than. ', ' More than overcrowded.', '', 'B', 4, 'admin', 1, ''),
(151, 'tbi', ' The chairwoman requested that .... ', 'the participants studied more careful the problem.', 'the participants study the problem more carefully. ', 'the participants studied the problem with more careful. ', 'the problem be studied more carefully.', '', 'B', 4, 'admin', 1, ''),
(152, 'tbi', 'Unlike the earth, which rotates once every twenty-four hours ... once every ten hours. ', 'the rotation of Jupiter ', 'Jupiter rotates', 'Jupiter rotation ', 'Jupiter rotate', '', 'B', 4, 'admin', 1, ''),
(153, 'tbi', 'Jackson,... capital of Mississippi, is the largest city in the state. ', ' the ', ' it is the', 'is the ', ' where the', '', 'A', 4, 'admin', 1, ''),
(154, 'tbi', 'The various types of bacteria are classified according to...shapes.', 'whose', ' how they are', 'have', 'their', '', 'D', 4, 'admin', 1, ''),
(155, 'tbi', 'This year will be more difficult for our organization because.... ', 'we have less money and volunteers than last year. ', 'there is a little money and volunteers than last year. ', 'it has less money and fewer volunteers than it had last year.', ' it has fewer money and less volunteers than it had last year.', '', 'C', 4, 'admin', 1, ''),
(156, 'tbi', 'ERROR RECOGNITION 156.Serving several term in Congress, Shirley Chisholm became an important United States politician. ', 'Serving ', 'term', 'important ', 'politician', '', 'B', 4, 'admin', 1, ''),
(157, 'tbi', 'On the floor of the Pacific Ocean is hundreds of flattopped mountains more than a mile ', 'the floor of', 'is', 'flat-topped', 'more than', '', 'C', 4, 'admin', 1, ''),
(158, 'tbi', 'Because of the flourish with which John Hancock signed the Declaration of Independence,his name become synonymous with signature. ', 'synonymous ', 'his ', 'become ', 'which', '', 'C', 4, 'admin', 1, ''),
(159, 'tbi', 'Segregation in public schools was declare unconstitutional by the Supreme Court in 1954.', 'was declare', 'in 1954 ', 'public', 'unconstitutional', '', 'B', 4, 'admin', 1, ''),
(160, 'tbi', 'Sirius, the Dog Star, is the most brightest star in the sky with an absolute magnitude about twenty-three times that of the Sun. ', 'an absolute ', 'the most brightest star ', 'that', 'twenty-three times', '', 'A', 4, 'admin', 1, ''),
(161, 'tbi', 'Some of the most useful resistor material are carbon, metals, and metallic alloys. ', 'Some of', 'most useful resistor ', 'metallic ', 'material', '', 'A', 4, 'admin', 1, ''),
(162, 'tbi', 'The community of Bethesda, Maryland, was previous known as Darcy’s Store.', 'The community', 'as ', 'previous ', 'known', '', 'A', 4, 'admin', 1, ''),
(163, 'tbi', 'Killer whales tend to wander in family clusters that hunt, play, and resting together.', 'resting', 'to wander', 'together ', 'tend', '', 'B', 4, 'admin', 1, ''),
(164, 'tbi', 'Guppies are sometimes call rainbow fish because of the males’ bright colors ', ' call ', 'fish ', 'because ', 'bright', '', 'A', 4, 'admin', 1, 'Questions 1-10 refer to the following passage. The most familiar speleothems (from the Greek word spelaion for the cave and thema for deposit), the decorative dripstone features found in caves, are stalactites and stalagmites. Stalactites hang downward from the ceiling of the cave and are formed as drop after drop of water slowly trickles through crack on the cave roof. Stalagmites grow upward from the floor of the cave, generally as a result of water dripping from an overhead stalactite. A column forms when a stalactite and a stalagmite grow until they join. A “curtain” or “drapery” begins to form on an inclined ceiling when drops of water trickle along a slope. Natural openings on the surface that lead to caves are called sinkholes. or swallow holes. Streams sometimes disappear down these holes and flow through the cavern. Rivers may flow from one mountain to another through a series of caves . Some caverns have sinkholes in their floors. Water often builds up a rim of dripstone around the edge of the hole. Dripping water often contains dissolved minerals as well as acid. These minerals too will be deposited; and they may give rich coloring to the deposits. If minerals in the water change, layers of different colors may be formed.'),
(165, 'tbi', 'Stalagmites are formed by …', 'drops of water which enter through cracks in the ceiling. ', 'underground rivers which flow through the cave.', 'water dripping from an overhead stalactite.', 'water which trickles down a slope', '', 'C', 4, 'admin', 1, ''),
(166, 'tbi', 'Which speleothem grows upward from the floor?', 'Stalagmites ', ' Stalactites ', 'Sinkholes ', 'Curtains', '', 'A', 4, 'admin', 1, ''),
(167, 'tbi', 'An “inclined ceiling” is one which … ', 'is straight.', ' is crooked. ', 'is slanted.', ' is wet', '', 'C', 4, 'admin', 1, ''),
(168, 'tbi', 'Which of the following are NOT caused by dripping water? ', 'Stalactites ', 'Stalagmites ', 'Slopes', 'Curtains', '', 'C', 4, 'admin', 1, ''),
(169, 'tbi', 'The information in the passage is most relevant to which field of study? ', 'Geography', 'Archaeology ', 'Physics ', ' Geology', '', 'D', 4, 'admin', 1, ''),
(170, 'tbi', '“ Curtains” can also be called …', 'column.', 'draperies. ', 'stalagmites. ', 'rims.', '', 'B', 4, 'admin', 1, ''),
(171, 'tbi', 'The word speleothem comes from which language?', 'Latin ', 'French', 'Greek', 'English', '', 'C', 4, 'admin', 1, ''),
(172, 'tbi', 'Stalagmites are formed by … ', 'drops of water which enter the cave through cracks in the ceiling.', 'underground rivers which flow through the cave.', 'water which seeps through the cave floor.', 'water which trickles down a slope.', '', 'A', 4, 'admin', 1, ''),
(173, 'tbi', 'Which speleothem hangs from the ceiling of a cave? ', ' Stalagmites ', 'Stalactites', 'Columns', 'Rimstones', '', 'B', 4, 'admin', 1, ''),
(174, 'tbi', 'Sinkholes are …', 'the decorative dripstone features found in caves. ', 'natural openings on the surface that lead to caves.', 'colorful layers of mineral deposits.', ' None of the above', '', 'B', 4, 'admin', 1, ''),
(175, 'tbi', '…….', ' has become', 'becoming ', 'becomes ', ' became', '', 'D', 4, 'admin', 1, 'CLOZE QUESTION Alexander was born in Macedonia in 356 BC. His father, King Philip II of Macedonia, hired the famous Greek philosoper Aristotle to tutor young Alexander. In the summer of 336 BC, Philip was murdered by one of his bodyguards. Alexander then ... (175) a king. Many people in Macedonia plotted against the young King ... (176) Alexander was shrewd. He ... (177) ordered the execution of all the conspirators. At the same time, some Greek cities ruled by Macedonia rebelled and other threatened to seek independence. Alexander crushed the rebellions and restored Macedonian rule.'),
(176, 'tbi', '…….', 'moreover', ' or ', 'but ', ' and', '', 'C', 4, 'admin', 1, ''),
(177, 'tbi', '…... ', ' quick ', ' hardly', 'quickly', 'quicken', '', 'C', 4, 'admin', 1, ''),
(178, 'tbi', '……', 'attend', 'attendant ', 'attending', 'attendance', '', 'A', 4, 'admin', 1, 'NOTICE To : All Employees Re : Staff Meeting There will be a staff meeting next Friday at 11:00 A.M. All employees are required to ... (178) the meeting and to arrive on time. The topic of the meeting is Improving Employee Morale. Though it has been a long cold winter, we need to stay positive at work. As usual we have ... (179) a guest speaker to join us. The speaker ... (180) this month\'s meeting will be taking about methods of positive thinking. Thank you. (Teks diambil dari Barron\'s TOEIC Test 4th Edition)'),
(179, 'tbi', '…..', ' invite', ' invited ', 'inviting', ' invitation', '', 'B', 4, 'admin', 1, ''),
(180, 'tbi', '……', 'in', 'on', 'at', 'by', '', 'C', 4, 'admin', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `d_ujian`
--

CREATE TABLE `d_ujian` (
  `id_ujian` smallint(4) NOT NULL,
  `nama_ujian` varchar(100) NOT NULL,
  `jumlah_soal` int(4) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_ujian`
--

INSERT INTO `d_ujian` (`id_ujian`, `nama_ujian`, `jumlah_soal`, `jenis`, `waktu`) VALUES
(1, 'usm stan 12', 180, 'acak', 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `d_admin`
--
ALTER TABLE `d_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kon_id` (`kon_id`),
  ADD KEY `kon_id_2` (`kon_id`);

--
-- Indexes for table `d_hasil_ujian`
--
ALTER TABLE `d_hasil_ujian`
  ADD PRIMARY KEY (`id_h_uj`),
  ADD KEY `h_n_ujian` (`h_n_ujian`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `d_mulai_ujian`
--
ALTER TABLE `d_mulai_ujian`
  ADD PRIMARY KEY (`id_m_ujian`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_ujian` (`id_ujian`),
  ADD KEY `soal_kat` (`soal_kat`);

--
-- Indexes for table `d_psoal`
--
ALTER TABLE `d_psoal`
  ADD PRIMARY KEY (`id_psoal`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `d_siswa`
--
ALTER TABLE `d_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `s_username` (`s_username`);

--
-- Indexes for table `d_soal`
--
ALTER TABLE `d_soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_ujian` (`id_ujian`),
  ADD KEY `id_ujian_2` (`id_ujian`),
  ADD KEY `pembuat_soal` (`pembuat_soal`);

--
-- Indexes for table `d_ujian`
--
ALTER TABLE `d_ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `d_admin`
--
ALTER TABLE `d_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `d_hasil_ujian`
--
ALTER TABLE `d_hasil_ujian`
  MODIFY `id_h_uj` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `d_mulai_ujian`
--
ALTER TABLE `d_mulai_ujian`
  MODIFY `id_m_ujian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `d_psoal`
--
ALTER TABLE `d_psoal`
  MODIFY `id_psoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `d_siswa`
--
ALTER TABLE `d_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `d_soal`
--
ALTER TABLE `d_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `d_ujian`
--
ALTER TABLE `d_ujian`
  MODIFY `id_ujian` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `d_hasil_ujian`
--
ALTER TABLE `d_hasil_ujian`
  ADD CONSTRAINT `d_hasil_ujian_ibfk_1` FOREIGN KEY (`h_n_ujian`) REFERENCES `d_ujian` (`id_ujian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `d_hasil_ujian_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `d_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `d_mulai_ujian`
--
ALTER TABLE `d_mulai_ujian`
  ADD CONSTRAINT `d_mulai_ujian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `d_admin` (`id`),
  ADD CONSTRAINT `d_mulai_ujian_ibfk_2` FOREIGN KEY (`id_ujian`) REFERENCES `d_ujian` (`id_ujian`);

--
-- Constraints for table `d_soal`
--
ALTER TABLE `d_soal`
  ADD CONSTRAINT `d_soal_ibfk_1` FOREIGN KEY (`id_ujian`) REFERENCES `d_ujian` (`id_ujian`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
