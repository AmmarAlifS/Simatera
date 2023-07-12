-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 02:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simatera`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel_simatera`
--

CREATE TABLE `artikel_simatera` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `artikel` varchar(10000) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Foto2` varchar(255) NOT NULL,
  `Foto3` varchar(255) NOT NULL,
  `Video` varchar(255) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel_simatera`
--

INSERT INTO `artikel_simatera` (`id_artikel`, `judul`, `artikel`, `kategori`, `Foto`, `Foto2`, `Foto3`, `Video`, `tanggal`) VALUES
(1, 'Pusat Pemerintahan Gemeente', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Pemerintah Hindia Belanda akan membentuk <em>gewestelijk raden</em> (dewan dewan wilayah) untuk wilayah setingkat keresidenan dan <em>plaatselijk raden</em> (dewan dewan lokal) untuk wilayah setingkat kabupatan. Untuk wilayah yang luasnya di bawah kabupaten, yakni wilayah kota, akan dibentuk <em>gemeentelijk resort</em> atau <em>gemeente</em>.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Pada dasarnya, pembentukan <em>gemeente</em> dilakukan untuk melayani kepentingan masyarakat Eropa, khususnya Belanda. Faktor pendorongnya adalah suatu pemikiran bahwa masyarakat Eropa dan non-Eropa harus tunduk terhadap hokum Eropa, bukan hokum masyarakat pribumi. Dengan perkataan lain, pembentukan <em>gemeente</em> ini tidak dimaksudkan untuk memberikan pelayanan langsung kepada masyrakat pribumi, meskipun pada akhirnya masyarakt pribumi menikmati berbagai prasarana dan sarana yang dibangun pemerintahan <em>gemeente</em>.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Pemerintahan Hindia Belanda membentuk <em>gemeente </em>Bandung berdasarkan Ordonansi tanggal 21 maret 1906 dan Undang-Undang tanggal 1 maret 1906 yang diresmikan oleh Gubernur Jenderal J.B.van Heutz pada 1 april 1906. Ketika dibentuk <em>gemeente</em> Bandung dipimpin oleh E. A. Maurenbrecher. Sebagaimana lazimnya dan juga untuk keperluan protokoler, Pemerintahan <em>Gemeente</em> Bandoeng menetapkan sebuah lambang kota yang menjadi simbol jatidiri warga Bandung pada saat itu.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"/Simatera/assets/admin/plugins/kcfinder/upload/files/Pemerintahan_gementee1.jpeg\" style=\"height:559px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Meskipun lambang tersebut mengandung makna simbolisasi kondisi <em>Gemeente</em> Bandoeng, namun mottonya <em>Ex Undis Sol </em>yang berarti &ldquo;Mentari Muncul di atas Gelombang&rdquo; tidak menunjukkan identitas yang sebenernya.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Pada 1922 pemerintah mengeluarkan Undang-undang perubahn Pemerintahan aatau <em>Bestuurshervormingswet, </em>bertujuan membentuk kesatuan-kesatuan hokum yang lebih luas dan dapat dibagi lebih lanjut dalam kesatuan-kesatuan hukum yang lebih sempit. Pembentukan kembali pemerintahaan itu adalah penyatuan dan penyamaan luas dan batas gewest dengan luas dan batas <em>geweselijke raad</em> (wilayah otonom), demikian pula luas dan batas bagian dari wilayah (administratif) dengan luas dan batas<em> plaatselijke raad </em>(daerah otonom). Kedua mcam gewest (wilayah/daerah) yang sama luas dan batasnya itu disebut <em>provincie</em>, sedangkan bagian-bagian dari <em>gewest</em> dinamakan regentschap. Pada 1924 pemerintah mengeluarkan <em>Regentschap Ordonnantie</em> dan untuk wilayah <em>gemeente</em>, <em>Stadsgemente Ordonnantie.</em></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Berdasarkan ordonansi tersebut, sebutan <em>gemeente</em> berubah menjadi <em>stadsgemeente</em> sehingga status <em>gemeente</em> bandung diubah menjadi <em>stadsgemeente</em> bandung. Pemerinahaan di <em>stadsgemeente</em> bandung dijalankan oleh Gemeenteraad, College Burgemeester, dan Wethouders (Dewan Kota), serta bergemeester (Walikota), dengan dipegang oleh walikota. Masa jabatan pengurus keanggotaan dewan-dewan tersebut berlangsung selama 4 tahun. Status Kota Bandung sebagai stadsgemeente atau kotapraja terus bertahan sampai Indonesia merdeka.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Ketika kemerdekaan Indonesia diproklamirkan pada 17 agustus 1945, keesokan harinya Pemerintah Pusat menetapkan Bandung sebagai salah satu kotapraja di Provinsi Jawa Barat dan R. Atmadinata ditunjuk sebagai walikotanya yang setahun kemudian, jabatan diserahkan kepada Ir. Ukar Bratakusumah. Berdasarkan UU No 16 tahun 1950, Pemerintah pusat menetapkan Bandung sebagai salah satu kota besar di Pulau Jawa dalam lingkungan NKRI.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"/Simatera/assets/admin/plugins/kcfinder/upload/files/Pemerintahan_gementee2.jpg\" style=\"height:462px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Pada masa awal pembentukan gemeente Bandung, sebagai kantor gemeente dipilih bagian atas dari Gedung yang pernah menjadi toko buku sumur balndung di jalan Asia Afrika. Setelah sekian lama berkantor ditempat itu, pusat pemerintahan Gemeente bandung dipindahkan ke &ldquo;Gedong Papak&rdquo; (Kantor pemerintahan Kota Bandung sekarang). Bangunan tersebut didirikan di atas tanah bekas Gudang kopi milik Andries de Wilde.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><img alt=\"\" src=\"/Simatera/assets/admin/plugins/kcfinder/upload/files/Pemerintahan_gemente3.jpg\" style=\"height:1072px; width:800px\" /></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', 'Sejarah', '5f6c27d996a08bf4c3f9eb0847f8d49d.jpeg', '338383d93c15f565c39392b2fd071eba.jpg', 'a3b8ea1f104e9d8dfd4d97619a0729f4.jpg', 'https://youtu.be/Cjb0uLBsBlA', '2023-07-02'),
(2, 'Museum KAA', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Gedung bekas Sicueteit Concordia yang juga digunakan sebagai tempat Konferensi Asia Afrika tahun 1955, setelah konferensi kemudian menjadi bagian dari Gedung Merdeka. Setelah Dewan konstituante dibubarkan tahun 1959 dan setelah Majelis Permusyawaratan Rakyat sementara (MPRS) bersidang di Jakarta (1996), Gedung bekas Societeit Concordia ini dijadikan Museum Konferensi Asia Afrika dan Perpustakaan Gedung Merdeka (1970-an) sampai sekarang.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Atas prakarsa Asisten Residen Pieter Sijthoff, Societeit (tempat pertemuan sosial dan rekreasi ) dibentuk di Bragaweg (Jl. Braga) menempati bangunana berdinding bilik milik seorang Cina. Mengingat perngunjung bertambah ramai makan tahun 1870 Societeit dipindahkan ke sebuah bangunan berdinding papan yang lebih luas di sisi barat Hotel Post Road (Kemudian menjadi Grand Hotel Homann) dan diberi nama Concordia.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"/Simatera/assets/admin/plugins/kcfinder/upload/files/Museum%20KAA.jpeg\" style=\"height:565px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Societeit Concordia kembali mengalami perombakan pada tahun 1940 dengan gaya arsitektur International Style dengan bantuan arsitek A.F. Aalbers. Bangunan gaya arsitektur ini bercirikan dinding tembok plesteran dengan atap mendatar, tampak depan bangunan terdiri dari garis dan elemen horizontal, sedangkan bagian gedung bercorak kubistis. Pada masa pendudukan tentara Jepang (1942 &ndash; 1945), Gedung Societeit Concordia berganti nama menjadi Dai Toa Kaikan dan difungsikan sebagai pusat kebudayaan.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Setelah proklamasi kemerdekaan Republik Indonesia pada tanggal 17 Agustus 1945, gedung tersebut dijadikan markas para pemuda Indonesia di Bandung guna menghadapi tentara Jepang yang tidak bersedia menyerahkan kekuasaannya. Sekitar tahun 1949, sejak pemerintahan pendudukan, Gedung Societeit Concordia diperbaiki dan difungsikan kembali sebagai Societeit Concordia, tempat pertemuan orang-orang Eropa (termasuk juga beberapa orang Indonesia). Di gedung ini kembali seperti biasa diselenggarakan lagi pertunjukan kesenian, pesta, restoran, dan pertemuan umum lainnya.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><img alt=\"\" src=\"/Simatera/assets/admin/plugins/kcfinder/upload/files/Museum%20Konferensi%20Asia%20Afrika_jpg.jpg\" style=\"height:600px; width:800px\" /></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', 'Museum', 'f0d0c3b4d88153261c7666e6900e36d8.jpg', 'b15df09044470c3adf8c44a03d958f45.jpg', '40623a274a21ee0702e2b513b9c84ede.jpeg', 'https://youtu.be/6x7ny-645cA', '2023-07-02'),
(3, 'Museum Geologi', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Museum Geologi terletak di Rembrandt Straat, sekarang Jalan Diponegoro. Gedung bergaya Art Deco ini adalah bangunan modern pada zamannya. Dirancang oleh arsitek Belanda Ir.H.M.van Schouwenburg dan Geologisch Laboratorium, <span style=\"background-color:white\"><span style=\"color:black\">Gedung Museum Geologi dibangun pada 1928 dan diresmikan dengan nama &quot;Geologische Museum&quot; pada 16 Mei 1929 bertepatan dengan penyelenggaraan Kongres Ilmu Pengetahuan Pasifik yang ke IV. Pembangunan dikerjakan selama 11 bulan dengan 300 pekerja dan menghabiskan dana 400.000 Gulden dibangun dengan arsitektur bergaya Art Deco.</span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Geologisch Laboratorium, disebut juga Geologisch Museum, dibangun oleh Pemerintah Hindia Belanda untuk mendokumentasi seperti batuan, mineral, serta fosil yang dikumpulkan para ahli geologi dari berbagai daerah di Kawasan Hindia Belanda. Sekarang Museum Geologi adalah bagian dari Departemen Energi dan Sumber Daya Mineral, Republik Indonesia.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"/Simatera/assets/admin/plugins/kcfinder/upload/files/Geologi.jpg\" style=\"height:480px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Masa Belanda (1928-1942)</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Pada 1850 kegiatan survei dan penelitian geologi di Indonesia dilaksanakan oleh &quot;Dienst van het Mijnwezen&quot; lembaga Pemerintah Belanda. Kemudian pada 1922 berganti nama menjadi &quot;Dienst van den Mijnbouw&quot;. penelitian geologi semakin meningkat sehingga contoh batuan, mineral, fosil semakin banyak, maka pada 1928 dibangun gedung yang diperuntukkan bagi Laboratorium dan Museum Geologi yang bertempat di Rembrandt Straat Bandung, atau saat ini Jl. Diponegoro, Bandung.</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Pendudukan Jepang (1942-1945)</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Pada masa Pendudukan Jepang (1942-1945). lembaga &quot;Dienst van den Mijnbouw diganti namanya menjadi &quot;Kogyoo Zimusho yang kemudian berganti lagi namanya menjadi &quot;Chishitsu Chosasho&quot;. Museum Geologi pada masa itu merupakan bagian dari Laboratorium Paleontologi dan Kimia dari Lembaga tersebut.</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Masa Kemerdekaan (1945-1967)</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Setelah Indonesia merdeka pada 1945. Terjadi pengambilalihan kantor &quot;Chishitsu Chosasho&quot; dari penguasa Jepang, pengelolaan Museum Geologi beralih menjadi Pusat Djawatan Tambang dan Geologi (PDTG, 1945-1950), Djawatan Pertambangan Republik Indonesia (1950-1952), Djawatan Geologi (1952-1956), Pusat Djawatan Geologi (1956-1957)</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><img alt=\"\" src=\"/Simatera/assets/admin/plugins/kcfinder/upload/files/Museum%20Geologi%20Zaman%20Hindia%20Belanda.jpg\" style=\"height:363px; width:800px\" /></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Revitalisasi Museum Geologi</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Revitalisasi Museum Geologi merupakan program untuk mengembangkan sistem pameran Museum Geologi untuk menarik lebih banyak pengunjung, kualitas pelayanan museum yang baik. Berdasarkan pada kebutuhan pengunjung dan inovasi ilmu pengetahuan dan teknologi terkini. Revitalisasi dimulai pada tahun 1998 kemudian dilanjutkan pada tahun 2012-2015 dan 2019-2020.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Tahun 1998-2000</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Revitalisasi dan pengembangan sistem tata pamer yang dilakukan pada 1998 melalui kerja sama antara pemerintah Indonesia dengan pemerintah Jepang (JICA). kerjasama tersebut dilaksanakan mulai 2 November 1998 dan diselesaikan pada pertengahan Agustus 2000.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Tahun 2002</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Museum Geologi menjadi Unit Pelaksana Teknis (UPT) Museum Geologi di bawah Pusat Survei Geologi, Badan Geologi, Kementerian Energi dan Sumber Daya Mineral (KESDM). Pada 2013, berdasarkan Permen ESDM No. 12 Tahun 2013, Museum Geologi menjadi Unit Pelaksana Teknis (UPT) Museum Geologi, di bawah Badan Geologi, Kementerian Energi dan Sumber Daya Mineral (KESDM). Sejak 2017, Museum Geologi berada di bawah Sekretariat Badan Geologi, Badan Geologi, Kementerian Energi dan Sumber Daya Mineral (KESDM).</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Tahun 2012</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Dilakukan revitalisasi ruang pamer Sumber Daya Geologi. Pengembangan yang dilakukan yaitu penambahan sistem tata pamer berupa sarana multimedia.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Tahun 2013</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Pengembangan ruang pameran Manfaat dan Bencana Geologi. Selain media pamer berupa poster dan multimedia, juga dipasang simulator gempabumi.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Tahun 2014</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Pengembangan ruang pameran Geologi Indonesia. Pada ruangan ini disajikan berbagai jenis batuan dari seluruh wilayah di Indonesia, mineral, hingga mineral ametis berukuran besar.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Tahun 2020</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Dilakukan revitalisasi Ruang Pamer Sejarah Kehidupan. Hasil revitalisasi ruangan ini adalah adanya penyegaran dari sisi storyline, tata penyajian dan strategi penyampaian informasi sesuai dengan kaidah permuseuman, yaitu wajib mengkaji ulang tata pamernya secara berkala.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', 'Museum', 'cb3b79383d0279829267396c24c6294a.jpg', '8a47b2ead936c970d575bb93e03e6c59.jpg', 'ac8dea71aad0689c89c9c1d2131ae76f.jpg', 'https://youtu.be/5-tR_G83FwM', '2023-07-02'),
(4, 'Palang Merah Indonesia', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">International Red Cross (Palang Merah Internasional) yang didirikan atas prakarsa J. Henry.Dunant (Bapak Palang Merah Internasional) adalah organisasi kemanusiaan yang bersifat independent dan diakui netralitasnya oleh semua negara di dunia. Organisasi Palang Merah Internasional terdiri dari tiga elemen, yaitu : Komite internasional Palang Merah yang merupakan pendiri sekaligus sebagai Lembaga legislative (1863), Liga Palang Merah dan Masyarakat anggota Palang Merah (1919). Fungsi Palang Merah adalah meringankan penderitaan manusia dan berupaya meningkatkan taraf kesehatan masyarakat, antara lain dalam bentuk bantuan pada prajurit dan warga sipil dalam peperangan, pengungsian serta memberikan pelayanan medis kepada masyarakat yang memerlukan, seperti menangani pertolongan pertama dalam kecelakaan, melayani para donor darah, menyimpan dan memproses darah, dan menyalurkan darah kepada warga masyarakat yang membutuhkannya.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"/Simatera/assets/admin/plugins/kcfinder/upload/files/PMI.jpg\" style=\"height:341px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Palang Merah Indonesia (PMI) didirikan di Jakarta pada tanggal 17 september 1945. Ketika Jakarta diduduki oleh tentara sekutu dan Belanda, Pengurus besar PMI dipindahkan ke Yogyakarta. PMI diakui resmi oleh Pemerintah Republik Indonesia dan Palang Merah Internasional pada tahun 1950 pada tahun 1950. Kegiatan awal PMI adalah mengurus kepulangan para romusha asal Indonesia ke kampung halamannya masing-masing.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Sejak Akhir tahun 1960-an PMI Bandung berpusat di Jl.Aceh menggunakan bangunana bekas Bandoengsch Internaat di masa Hindia Belanda. Organisasi Palang Merah sudah ada sejak masa pemerintahan HIndia Belanda dengan nama Rode Kruis.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><img alt=\"\" src=\"/Simatera/assets/admin/plugins/kcfinder/upload/files/PMIBANDUNG.jpeg\" style=\"height:482px; width:800px\" />(Bangunan Bandoengsc Internaat tahun 1910an di Menadostraat (Jl Aceh) yang sekarang digunakan sebagai kantor pusat PMI Bandung)</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', 'Sejarah', '45774e06290747d74176ec65f67e5edc.jpg', '0fa2c9b5c226c584938a1318edb12207.jpg', '3606d1f407a213d504007eb2a8bebbf5.jpeg', 'https://youtu.be/Hsei4AyjvAQ', '2023-07-02'),
(5, 'Pasar Baru Bandung', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Pasar Baru yang merupakan pasar tradisional terbesar kota bandung terletak di Pasar Baroeweg (Jl. Pasar baru dan sekarang menjadi Jl. Otto Iskandar Dinata). Pasar Baru merupakan pengganti pasar di daerah Pencinan yang dibangun pada tahun 1884 sebagai pasar dan penampungan para pedagang pasar Ciguriang di belakang Kepatihan (dibangun pada tahun 1812) yang terpaksa berkeliaran akibat dibakarnya pasar tersebut adalam huru-hara Munada tanggal 30 Desember 1842.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"/Simatera/assets/admin/plugins/kcfinder/upload/files/pasarbandungdulu2.jpeg\" style=\"height:487px; width:800px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Munada semula bernama Liem Siang, adalah seorang Cina yang masuk agama Islam. Ia berasal dari Kudus dan bermukim di CIanjur sebagai pedagang kuda, kerbau dan penyewaan kerata kuda. Munada pindah ke Bandungdan mendapatkan kepercayaan dari Assisten Residen Nagel untuk mengadakan alat angkut berserta kuda penghelannya. Akibat ulah buruknya yang suka berfoya-foya, berjudi, minum-minum, akhirnya Munada terbelit hutang besar kepada Asister Residen Nagel. Munada diberi kesempatan untuk memperbaiki diri dengan jalan diberi keleluasaan mendapatkan pesanan barang dan diberi tugas menjualkan enam pasang kerbau milik Asisten Residen Nagel di Balubur Limbangan tidak digunakan dengan baik oleh Munada. Hasil penjualan kerbau dihabiskan di meja judu, sehinggan ditangkap, disiksa, dan dipenjarakan oleh Asisten Residen Nagel. Munada dendam bersekongkol dengan orang-orang yang tidak senang dikalangan pamong praja untuk membuat keonaran dan membakarpasar Ciguriang. Pada saat pasar terbakar Asisten Tesiden Nagel dating ke pasar dan diserang oleh Munada dengan golok sehingga terluka parah dan keesokan harinya meninggal. Bupati R.A.A Wiranata koesoemah III luput dari serangan Munada karena dilindungi oleh kopral prajurit Kabupaten Unit.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Pasar Baru dibangun pada tahun 1906 dan sudah merupakan pasar dengan bangunan permanen berupa jajaran toko di bagian muka dan los-los pasar tempat berdagang di bagian belakangnya. Tahun 1930-an disekitar Pasar Baru sudah berjejer toko-toko dengan bangunan permanen yang besar dan bahkan bertingkat. Tahun 1935 Pasar Baru mendapat predikat sebagai pasar terbersih dan paling teratur di Pulau Jawa. Tahun 1970 Pasar Baru dibangun menjadi pasar berbentuk modern tanpa menghilangkan pasar tradisional.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><img alt=\"\" src=\"/Simatera/assets/admin/plugins/kcfinder/upload/files/59.-Pasar-Baru-Bandung-750x450.jpeg\" style=\"height:480px; width:800px\" /></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', 'Sejarah', '4416fba1fc821f8cbc116ccbc9fd66e3.jpeg', '58ebe94ae805adf5e118e6793aadf8a7.jpg', '16142233994a6edd7c73cea209029bbb.jpeg', 'https://youtu.be/gBA0DkU99UQ', '2023-07-02'),
(6, 'Piesterspark Yang Sekarang Menjadi Taman Balai Kota Bandung', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Pieter Sijthoffpark adalah taman tertua yang dibangun di Kota Badnung. Piter Sijthoffpark yang lebih dikenal dengan nama Pieterspark dibangun pada tahun 1885, untuk mengenang jasa besar Asister Residen Priangan Pieter Sijtjoff kepada perkembangan kota Bandung.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Perancang taman adalah R. Teusher seorang Botanikus yang bertempat tinggal di pojok jalan Tamblong dan jalan Naripan, pada tahun 2005 bangunan tersbut dihancurkan untuk membangun pompa bensin.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Pieterspark merupakan salah satu dari banyak taman lainnya yang menjadikan Kota Bandung dikenal sebagai Kota Taman (1936). Tatakota Kota Bandung memang dirancang mengacu kepada konsep kota taman (garden city) seperti negara-negara di Eropa.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"/Simatera/assets/admin/plugins/kcfinder/upload/files/pieter-park-balai-kota-bandung-1.jpg\" style=\"height:419px; width:640px\" /></p>\r\n\r\n<table cellspacing=\"0\" class=\"MsoTableGrid\" style=\"border-collapse:collapse; border:none\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:601px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Pohon Lindung</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Pohon Karet</span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Ficus elastic</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Pohon Jaran Kenari</span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Canrium Commune</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Pohon Sepatu Dewa</span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Spathodhea Campanulata</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Pohon Kenari</span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\">&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Pohon Ki Hujan</span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Samanea saman</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Pohon Johar</span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Cassia</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Pohon Ki Damar</span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Agathis</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Cemara Laut</span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Casuarina</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Pinang</span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Cyrtostachys renda</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Aren</span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:301px\">\r\n			<p style=\"text-align:center\">&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'Sejarah', '140c0a035e033bab60ea30671922afcb.jpg', '04644356760b62af292deaf52c5f9a15.jpg', '6dd9697dd164668e58885434a22595c3.jpg', 'https://youtu.be/Im2GisQ3Tpk', '2023-07-02'),
(7, 'Sejarah Bank NISP (NV. NEDERLANDSCH INDISCHE SPAAR EN DEPOSITO BANK)', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Bank OCBC NISP (Sebelumnya dikenal dengan Bank NISP) merupakan bank tertua keempat di Indonesia, yang didirikan pada tanggal 4 April 1941 di bandung dengan nama NV. Nerderlandsch Indische Spaar En Deposito Bank (N.I.S.P). Bank OCBC NISP kemudian berkembang menjadi bank yang solid dan handal, terutama melayani segemn Usaha Kecil dan Menengah (UKM). Bank OCBC NISP resmi menjadi bank komersial pada tahun 1967.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Tahun 1994 Bank Nisp Menjual sahamnya kepada masyarakat (go public). Bank NISP merupakan bank yang sangat berhati hati dan dapat dikatakan sebagai bank yang sifatnya konservatif, baik dari segi operasinya maupun para pemimpin banknya. Bank ini juga merupakan bank yang tidak agresif untuk melakukan ekspansi dan memperluas jaringan operasinya tanpa perhitungan yang matang, sehingga pada masa krisis moneter menimpa Indonesia sejak tahun 1997, Bank NISP dapat tetap bertahan dan bahkan berkembang.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Gedung Bank NISP pada mulannya merupakan Gedung organisasi sosial Ons Aller Belang (OAB) yang selesai dibangun pada tahhun 1931 berdasarkan rancangan Biro Arsitek Brinkman en Voorhoeve. Bank NISP terletak di Tjibeunjing Plantsoen Zuidstraat (Sekarang Jl. Taman Cibeunying Selatan).</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><img alt=\"\" src=\"/Simatera/assets/admin/plugins/kcfinder/upload/files/WhatsApp%20Image%202023-03-31%20at%2013.07.12%20(1).jpeg\" style=\"height:481px; width:800px\" />(Gedung Organisasi sosial Ons Aller Belang-OAB (1931) yang kemudian menjadi Gedung NV Nederlandsch Indische Spaar En Deposito Bank (Bank NISP) Pada tahun 1941)</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"/Simatera/assets/admin/plugins/kcfinder/upload/files/BANK%20NISP.jpeg\" style=\"height:553px; width:800px\" /><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">(Tahun 1990an Gedung Bank NISP dibangun ulang menjadi bangunan bertingkat lima ditamba basement, sehingga merupakan Gedung yang megah)</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', 'Bank', 'e1a3ecffbc0ec82c1e360035e4ae56f5.jpg', '180bdbf64037c013cafd9ecb747e8f64.jpeg', 'f7b78065e3e29559c4cec97fc0644f7b.jpeg', 'https://youtu.be/qHjuKh0H2hM', '2023-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategoricode` int(16) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategoricode`, `nama_kategori`) VALUES
(1, 'Sejarah'),
(2, 'Pendidikan'),
(3, 'Museum'),
(4, 'Bank');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'a', 'a@a', 'a'),
(2, 'b', 'b@b', 'b'),
(3, 'c', 'c@c', 'c'),
(4, 'aa', 'aa@a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `login_simatera`
--

CREATE TABLE `login_simatera` (
  `id` int(11) NOT NULL,
  `login_oauth_uid` varchar(100) NOT NULL,
  `name` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` enum('yes','no','','') NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_simatera`
--

INSERT INTO `login_simatera` (`id`, `login_oauth_uid`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(11, '', 'Rihma', 'rihma@gmail.com', 'default.jpg', '$2y$10$lpZYtHT9/iK8LbnFVQdNnO3yk7kJOu91brUthuymH76D.kU44LUiO', 2, 'yes', '2023-06-15 03:09:23'),
(24, '', 'Rijal Fauzi Iskandar', 'rijalfauziiskandar93.rfi@gmail.com', 'default.jpg', '$2y$10$EDBocT0zrDPSO3D7cI.BpOw1QXu4hOSAItw4jlAOfFOKaW7YbQ3ZW', 1, 'yes', '2023-06-14 07:45:05'),
(29, '', 'Ammar Alif', 'ammaralifs@gmail.com', 'default.jpg', '$2y$10$81fjSwJVTa13u93u5pd2Nex9i6Jrb.LMoVUU3cH1TS6EHUz0ZICl6', 1, 'yes', '2023-06-23 07:10:37'),
(30, '', 'fauzi iskandar', 'rijal.fauzi@widyatama.ac.id', 'default.jpg', '$2y$10$vb1P.rxaq/1iaomiyLI0G.sUUvxPpylhkMYN1ErcmEOBwYLWswN6e', 2, 'yes', '2023-06-15 03:09:33'),
(73, '111338418244761899298', 'Rijal Fauzi Iskandar', 'rijalfauziiskandar93.rfi@gmail.com', '', '', 2, 'yes', '2023-06-16 06:23:08'),
(75, '111197384953197867127', 'REG.A/0620101061/RIJAL FAUZI', 'rijal.fauzi@widyatama.ac.id', '', '', 2, 'yes', '2023-06-16 07:44:31'),
(77, '100632164184714595705', 'Veronz TV', 'veronztv@gmail.com', '', '', 2, 'yes', '2023-06-19 04:25:32'),
(79, '', 'Rijal Fauzi', 'rijalfauziiskandar4@gmail.com', 'default.png', '$2y$10$jUWe/T4lPklIrHmNn9xf1O01YAUsGHjo6MmtysQeRzaXeke/hCHNq', 2, 'yes', '2023-06-19 03:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `login_simatera_token`
--

CREATE TABLE `login_simatera_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_simatera_token`
--

INSERT INTO `login_simatera_token` (`id`, `email`, `token`, `date_created`) VALUES
(16, 'rijalfauziiskandar93.rfi@gmail.com', 'P7iX5ud6LQ8T6bJa8q16fco86tcpM6n1v6cQ0ugsX1E=', 1684330648),
(53, 'ammaralifs@gmail.com', 'xMZhZKccDHQh3R1sVzqcw/owhfL5EuzETLHgI9/zVzE=', 1684817308),
(63, 'rijalfauziiskandar4@gmail.com', 'k4/+8aPaIMV/x2cq5b/OVrV56n5pavdqxc0b9zFzJiU=', 1687146693);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(16) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` int(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook` varchar(55) NOT NULL,
  `twitter` varchar(55) NOT NULL,
  `instagram` varchar(55) NOT NULL,
  `tentang_kami` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `alamat`, `no_telp`, `email`, `facebook`, `twitter`, `instagram`, `tentang_kami`) VALUES
(1, 'Jl. Wastukencana No.2, Babakan Ciamis, Kec. Sumur ', 224234793, 'diskominfo@bandung.go.id', 'https://www.facebook.com/DiskominfoBandung', 'https://twitter.com/DiskominfoBdg', 'https://www.instagram.com/diskominfobdg', '<p style=\"text-align:justify\">Selamat datang di website kami! Kami adalah platform yang didedikasikan untuk menyediakan informasi dan layanan yang bermanfaat bagi pengunjung kami. Website kami menyajikan berbagai informasi terkini dan terpercaya tentang tempat bersejarah di kota Bandung.</p>\r\n\r\n<p style=\"text-align:justify\">Kami selalu berusaha untuk memberikan pengalaman terbaik bagi pengunjung kami dengan menyediakan tampilan yang mudah digunakan dan responsif di berbagai perangkat. Website kami juga dilengkapi dengan fitur pencarian dan navigasi yang mudah untuk membantu pengunjung menemukan informasi yang mereka cari dengan cepat.</p>\r\n\r\n<p style=\"text-align:justify\">Kami berharap website kami dapat membantu meningkatkan pengetahuan dan kehidupan sehari-hari pengunjung kami dan menjadi sumber informasi yang terpercaya dan berguna. Terima kasih telah mengunjungi website kami!</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(128) NOT NULL,
  `menu_id` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_masukan`
--

CREATE TABLE `user_masukan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_masukan`
--

INSERT INTO `user_masukan` (`id_pesan`, `nama`, `email`, `subjek`, `pesan`, `timestamp`) VALUES
(1, 'a', 'a@a', '', 'a', '2023-03-27 13:55:05'),
(2, 'a', 'a@a', 'a', 'a', '2023-03-27 13:55:05'),
(3, 's', 's@s', 's', 's', '2023-03-27 13:55:05'),
(4, 's', 's@ss', 's', 's', '2023-03-27 13:55:05'),
(5, 'sdsa', 'dsa@dsa', 'dsa', 'das', '2023-03-27 13:55:05'),
(6, 'das', 'dsa@ds', 'dsa', 'dsa', '2023-03-27 13:55:05'),
(7, 'dsa', 'dsa@dsa', 'dsa', 'dsa', '2023-03-27 13:55:05'),
(8, 'dsa', 'dsa@dsa', 'das', 'das', '2023-03-27 13:55:05'),
(9, 'das', 'da@da', 'da', 'dsa', '2023-03-27 13:55:05'),
(10, 'dsa', 'das@dsa', 'dsa', 'dsa', '2023-03-27 13:55:05'),
(11, 'dsa', 'das@dsa', 'dsa', 'dsa', '2023-03-27 13:55:05'),
(12, 'dsa', 'dsa@dsa', 'dsa', 'das', '2023-03-27 13:55:05'),
(13, 'dsa', 'dsadsad@dsa', 'dsadsa', 'dsad', '2023-03-27 13:55:05'),
(14, 'dsadsa', 'dsaddsa@dada', 'das', 'das', '2023-03-27 13:55:05'),
(15, 'dsa', 'dsa@das', 'dsa', 'dsa', '2023-03-27 13:55:05'),
(16, 'cxz', 'cxz2s@dsa', 'das', 'dsa', '2023-03-27 13:55:05'),
(17, 'sda', 'dsadsas@dsad', 'saddsa', 'dsadas', '2023-03-27 13:55:05'),
(18, 'dsa', 'das@dsa', 'dsa', 'das', '2023-03-27 13:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel_simatera`
--
ALTER TABLE `artikel_simatera`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategoricode`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_simatera`
--
ALTER TABLE `login_simatera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_simatera_token`
--
ALTER TABLE `login_simatera_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_masukan`
--
ALTER TABLE `user_masukan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel_simatera`
--
ALTER TABLE `artikel_simatera`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategoricode` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_simatera`
--
ALTER TABLE `login_simatera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `login_simatera_token`
--
ALTER TABLE `login_simatera_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_masukan`
--
ALTER TABLE `user_masukan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
