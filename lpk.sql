-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 03:31 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpk`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` int(2) NOT NULL,
  `alamat_ktp` varchar(1000) NOT NULL,
  `alamat_tinggal` varchar(1000) NOT NULL,
  `agama` enum('ISLAM','KRISTEN','KATOLIK','HINDU','BUDHA','KONGHUCU') NOT NULL,
  `jk` enum('PRIA','WANITA') NOT NULL,
  `bb` int(3) NOT NULL,
  `tb` int(3) NOT NULL,
  `pendidikan` enum('SMP','SMK','SMA','DIPLOMA','SARJANA') NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `img_ktp` varchar(128) NOT NULL,
  `img_selfie` varchar(128) NOT NULL,
  `ref` varchar(500) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `nama`, `email`, `nik`, `tempat_lahir`, `tanggal_lahir`, `usia`, `alamat_ktp`, `alamat_tinggal`, `agama`, `jk`, `bb`, `tb`, `pendidikan`, `jurusan`, `telp`, `img_ktp`, `img_selfie`, `ref`, `date_created`) VALUES
(28, 'sasa', 'asdawd@g.com', '  1314214125215', '  sdawdasdaw', '1982-07-01', 42, '  adawdasdawd', '  asdawdasdaw', 'KRISTEN', 'WANITA', 23, 23, 'SMK', '  asdasdwad', '  213124125123', '172.PNG', '5.PNG', '  dfacasdawdaa', 1626598730),
(29, 'Alwi', 'alwi@a.com', '291174287124761', 'Jakarta', '2003-07-10', 19, 'DJSAJDHA', 'FDASHHDASFHG', 'ISLAM', 'PRIA', 60, 171, 'SMA', 'MIIA', '08215121433', '2221.JPG', 'WhatsApp Image 2021-05-17 at 21_55_30.jpeg', 'instagram', 1626762680);

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jk` varchar(150) NOT NULL,
  `agama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id`, `nama`, `jk`, `agama`, `email`) VALUES
(1, 'saddd', 'Perempuan', 'Protestan', 'asdasd@v.com'),
(4, 'asd', 'Laki-laki', 'Islam', 'asd'),
(5, 'sad', 'Laki-laki', 'Katolik', 'dasdasdas'),
(6, 'ewe', 'Laki-laki', 'Katolik', 'wdwd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`, `galeri_pengguna_id`, `galeri_author`) VALUES
(12, 'Follow Your Passion', '2017-01-24 01:31:42', '8be5f0f0904340052a4cbd0ea025251e.jpg', 4, 1, 'Alwi'),
(13, 'Follow Your Passion', '2017-01-24 01:31:55', 'd769c3541429f21b28611cc9f32166ad.jpg', 4, 1, 'Alwi'),
(14, 'Follow Your Passion', '2017-01-24 01:32:24', '43d0f103096700aacefe492514c1805c.png', 4, 1, 'Alwi'),
(15, 'Follow Your Passion', '2017-01-24 01:32:34', 'd67a9e90d263f2979cbf602d238516e1.jpg', 4, 1, 'Alwi'),
(16, 'Follow Your Passion', '2017-01-24 01:32:44', '8223854edfccc98c6aab50ceab60ca7d.jpg', 4, 1, 'Alwi'),
(17, 'Follow Your Passion', '2017-01-24 01:33:08', 'af30c686978c87c80ba1e6e3b23ec5a1.png', 4, 1, 'Alwi'),
(18, 'Follow Your Passion', '2017-01-24 01:33:24', '232917c52826dd08e32320aa6a3fac8c.png', 4, 1, 'Alwi'),
(19, 'Follow Your Passion', '2017-08-08 00:54:58', '59afe5b3cd629ab2735f9c7a2af8d85f.jpg', 4, 1, 'Alwi'),
(21, 'Follow Your Passion', '2021-07-18 21:31:48', '6ad0adc62358a20521ae7bbea21bea72.JPG', 4, 1, 'Alwi'),
(22, 'Follow Your Passion', '2021-07-18 22:02:33', 'c3ad960835693bc711d60744858fbea2.JPG', 5, 1, 'Administrator'),
(23, 'Follow Your Passion', '2021-07-18 22:02:43', 'df1f5a8bb9ecc4672d99193328bac77f.JPG', 5, 1, 'Administrator'),
(24, 'Follow Your Passion', '2021-07-18 22:03:05', '02f2ea5625765ddebcce2973c3afdcc3.JPG', 4, 1, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Alwi', 'alwi@a.com', '7.jpg', '$2y$10$f6WHa.DmHLDRPZFoJ4.ewOBi4R6T6brG0Vq0zA.RZfDoB8Htx8MjW', 1, 1, 1625916437),
(2, 'a', 'a@a.com', '1.jpg', '$2y$10$I1cOp8tBkJZ1Aggb8yTHZ.LJyaG5NLBcYrP90vUKWz6/l7bRgkUCi', 2, 1, 1623724962),
(14, 'admin', 'admin@a.com', '221.JPG', '$2y$10$f6WHa.DmHLDRPZFoJ4.ewOBi4R6T6brG0Vq0zA.RZfDoB8Htx8MjW', 1, 1, 1626151079);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(8, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 1, 'Pendaftar', 'admin/pendaftar', 'fa fa-address-card', 1),
(10, 1, 'Gallery', 'admin/gallery', 'fa fa-camera-retro', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(9, 'a@a.com', 'M28zylt5YP0yGACh4QdAKFBoiWqIjVJl7THjiWuYgCk=', 1623724962);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`),
  ADD KEY `galeri_album_id` (`galeri_album_id`),
  ADD KEY `galeri_pengguna_id` (`galeri_pengguna_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
