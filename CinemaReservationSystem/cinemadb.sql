-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Haz 2021, 15:39:47
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cinemadb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `ss_id` int(11) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `booking`
--

INSERT INTO `booking` (`b_id`, `s_id`, `ss_id`, `Id`) VALUES
(92, 14, 137, 2),
(93, 15, 138, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cinema_seat`
--

CREATE TABLE `cinema_seat` (
  `c_id` int(11) NOT NULL,
  `c_row` varchar(5) NOT NULL,
  `c_column` int(11) NOT NULL,
  `h_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `cinema_seat`
--

INSERT INTO `cinema_seat` (`c_id`, `c_row`, `c_column`, `h_id`) VALUES
(44, 'A', 1, 1),
(45, 'A', 2, 1),
(46, 'A', 3, 1),
(47, 'A', 4, 1),
(48, 'A', 5, 1),
(49, 'A', 6, 1),
(50, 'B', 1, 1),
(51, 'B', 2, 1),
(52, 'B', 3, 1),
(53, 'B', 4, 1),
(54, 'B', 5, 1),
(55, 'B', 6, 1),
(56, 'B', 7, 1),
(57, 'B', 8, 1),
(58, 'C', 1, 1),
(59, 'C', 2, 1),
(60, 'C', 3, 1),
(61, 'C', 4, 1),
(62, 'C', 5, 1),
(63, 'C', 6, 1),
(64, 'C', 7, 1),
(65, 'C', 8, 1),
(66, 'C', 9, 1),
(67, 'C', 10, 1),
(68, 'D', 1, 1),
(69, 'D', 2, 1),
(70, 'D', 3, 1),
(71, 'D', 4, 1),
(72, 'D', 5, 1),
(73, 'D', 6, 1),
(74, 'D', 7, 1),
(75, 'D', 8, 1),
(76, 'D', 9, 1),
(77, 'D', 10, 1),
(78, 'D', 11, 1),
(79, 'D', 12, 1),
(80, 'A', 1, 2),
(81, 'A', 2, 2),
(82, 'A', 3, 2),
(83, 'A', 4, 2),
(84, 'A', 5, 2),
(85, 'A', 6, 2),
(86, 'B', 1, 2),
(87, 'B', 2, 2),
(88, 'B', 3, 2),
(89, 'B', 4, 2),
(90, 'B', 5, 2),
(91, 'B', 6, 2),
(92, 'B', 7, 2),
(93, 'B', 8, 2),
(94, 'C', 1, 2),
(95, 'C', 2, 2),
(96, 'C', 3, 2),
(97, 'C', 4, 2),
(98, 'C', 5, 2),
(99, 'C', 6, 2),
(100, 'C', 7, 2),
(101, 'C', 8, 2),
(102, 'C', 9, 2),
(103, 'C', 10, 2),
(104, 'D', 1, 2),
(105, 'D', 2, 2),
(106, 'D', 3, 2),
(107, 'D', 4, 2),
(108, 'D', 5, 2),
(109, 'D', 6, 2),
(110, 'D', 7, 2),
(111, 'D', 8, 2),
(112, 'D', 9, 2),
(113, 'D', 10, 2),
(114, 'D', 11, 2),
(115, 'D', 12, 2),
(116, 'A', 1, 3),
(117, 'A', 2, 3),
(118, 'A', 3, 3),
(119, 'A', 4, 3),
(120, 'A', 5, 3),
(121, 'A', 6, 3),
(122, 'B', 1, 3),
(123, 'B', 2, 3),
(124, 'B', 3, 3),
(125, 'B', 4, 3),
(126, 'B', 5, 3),
(127, 'B', 6, 3),
(128, 'B', 7, 3),
(129, 'B', 8, 3),
(130, 'C', 1, 3),
(131, 'C', 2, 3),
(132, 'C', 3, 3),
(133, 'C', 4, 3),
(134, 'C', 5, 3),
(135, 'C', 6, 3),
(136, 'C', 7, 3),
(137, 'C', 8, 3),
(138, 'C', 9, 3),
(139, 'C', 10, 3),
(140, 'D', 1, 3),
(141, 'D', 2, 3),
(142, 'D', 3, 3),
(143, 'D', 4, 3),
(144, 'D', 5, 3),
(145, 'D', 6, 3),
(146, 'D', 7, 3),
(147, 'D', 8, 3),
(148, 'D', 9, 3),
(149, 'D', 10, 3),
(150, 'D', 11, 3),
(151, 'D', 12, 3),
(152, 'A', 1, 4),
(153, 'A', 2, 4),
(154, 'A', 3, 4),
(155, 'A', 4, 4),
(156, 'A', 5, 4),
(157, 'A', 6, 4),
(158, 'B', 1, 4),
(159, 'B', 2, 4),
(160, 'B', 3, 4),
(161, 'B', 4, 4),
(162, 'B', 5, 4),
(163, 'B', 6, 4),
(164, 'B', 7, 4),
(165, 'B', 8, 4),
(166, 'C', 1, 4),
(167, 'C', 2, 4),
(168, 'C', 3, 4),
(169, 'C', 4, 4),
(170, 'C', 5, 4),
(171, 'C', 6, 4),
(172, 'C', 7, 4),
(173, 'C', 8, 4),
(174, 'C', 9, 4),
(175, 'C', 10, 4),
(176, 'D', 1, 4),
(177, 'D', 2, 4),
(178, 'D', 3, 4),
(179, 'D', 4, 4),
(180, 'D', 5, 4),
(181, 'D', 6, 4),
(182, 'D', 7, 4),
(183, 'D', 8, 4),
(184, 'D', 9, 4),
(185, 'D', 10, 4),
(186, 'D', 11, 4),
(187, 'D', 12, 4),
(188, 'A', 1, 5),
(189, 'A', 2, 5),
(190, 'A', 3, 5),
(191, 'A', 4, 5),
(192, 'A', 5, 5),
(193, 'A', 6, 5),
(194, 'B', 1, 5),
(195, 'B', 2, 5),
(196, 'B', 3, 5),
(197, 'B', 4, 5),
(198, 'B', 5, 5),
(199, 'B', 6, 5),
(200, 'B', 7, 5),
(201, 'B', 8, 5),
(202, 'C', 1, 5),
(203, 'C', 2, 5),
(204, 'C', 3, 5),
(205, 'C', 4, 5),
(206, 'C', 5, 5),
(207, 'C', 6, 5),
(208, 'C', 7, 5),
(209, 'C', 8, 5),
(210, 'C', 9, 5),
(211, 'C', 10, 5),
(212, 'D', 1, 5),
(213, 'D', 2, 5),
(214, 'D', 3, 5),
(215, 'D', 4, 5),
(216, 'D', 5, 5),
(217, 'D', 6, 5),
(218, 'D', 7, 5),
(219, 'D', 8, 5),
(220, 'D', 9, 5),
(221, 'D', 10, 5),
(222, 'D', 11, 5),
(223, 'D', 12, 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `employees_customers`
--

CREATE TABLE `employees_customers` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `authpass` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `employees_customers`
--

INSERT INTO `employees_customers` (`Id`, `name`, `e_mail`, `authpass`, `type`) VALUES
(1, 'Emre Büyüktaş', 'emrebyk348@gmail.com', '123456', 'admin'),
(2, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(3, 'Yunus', 'yunus@gmail.com', '123', 'customer'),
(4, 'Ömer Kılıççeker', 'omer@gmail.com', '123456', 'customer');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hall`
--

CREATE TABLE `hall` (
  `h_id` int(11) NOT NULL,
  `h_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hall`
--

INSERT INTO `hall` (`h_id`, `h_capacity`) VALUES
(1, 36),
(2, 36),
(3, 36),
(4, 36),
(5, 36);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `movies`
--

CREATE TABLE `movies` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(60) NOT NULL,
  `m_director` varchar(60) NOT NULL,
  `m_subject` varchar(400) NOT NULL,
  `m_description` varchar(400) NOT NULL,
  `m_genre` varchar(40) NOT NULL,
  `m_length` varchar(40) NOT NULL,
  `m_visionDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `movies`
--

INSERT INTO `movies` (`m_id`, `m_name`, `m_director`, `m_subject`, `m_description`, `m_genre`, `m_length`, `m_visionDate`) VALUES
(1, 'Star Wars', 'George Lucas', 'Stories from a Galaxy Far', 'War of Glaxy', 'Science Fiction', '2.30', '2021-05-27'),
(2, 'The Lord of the Rings', 'Peter Jackson', 'Lord of the Rings, a major fantasy novel by J. R. R. Tolkien', 'The Lord of the Rings is the saga of a group of sometimes reluctant heroes who set forth to save their world from consummate evil.', 'Science Fiction', '3', '2021-05-31'),
(5, 'The pianist ', 'Roman Polanski', 'Survival. Perhaps the most important theme in The Pianist is survival.', 'Roman Polanski\'s \"The Pianist\" tells the story of a Polish Jew, a classical musician, who survived the Holocaust through stoicism and good luck.', 'Autobiography', '2.40', '2021-06-01'),
(7, 'Gora', 'Cem Yılmaz', 'A Story From Space', 'A Story From Space', 'Comedy', '2', '2021-06-02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seans`
--

CREATE TABLE `seans` (
  `s_id` int(11) NOT NULL,
  `s_date` date NOT NULL,
  `s_startTime` time NOT NULL,
  `s_endTime` time NOT NULL,
  `m_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `seans`
--

INSERT INTO `seans` (`s_id`, `s_date`, `s_startTime`, `s_endTime`, `m_id`, `h_id`) VALUES
(14, '2021-06-02', '09:00:00', '12:00:00', 1, 1),
(15, '2021-06-02', '09:00:00', '12:00:00', 2, 2),
(16, '2021-06-02', '09:00:00', '12:00:00', 5, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `show_seat`
--

CREATE TABLE `show_seat` (
  `ss_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `show_seat`
--

INSERT INTO `show_seat` (`ss_id`, `s_id`, `c_id`) VALUES
(137, 14, 45),
(138, 15, 80);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `type`
--

CREATE TABLE `type` (
  `Id` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `type`
--

INSERT INTO `type` (`Id`, `Type`, `Price`) VALUES
(1, 'standard', 20),
(2, 'promotion', 15),
(3, 'student', 10);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `s_id` (`s_id`,`ss_id`),
  ADD KEY `ss_id` (`ss_id`),
  ADD KEY `Id` (`Id`);

--
-- Tablo için indeksler `cinema_seat`
--
ALTER TABLE `cinema_seat`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `h_id` (`h_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Tablo için indeksler `employees_customers`
--
ALTER TABLE `employees_customers`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`h_id`),
  ADD KEY `h_id` (`h_id`);

--
-- Tablo için indeksler `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Tablo için indeksler `seans`
--
ALTER TABLE `seans`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `m_id` (`m_id`,`h_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `h_id` (`h_id`);

--
-- Tablo için indeksler `show_seat`
--
ALTER TABLE `show_seat`
  ADD PRIMARY KEY (`ss_id`),
  ADD KEY `ss_id` (`ss_id`,`s_id`,`c_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Tablo için indeksler `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`Id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Tablo için AUTO_INCREMENT değeri `cinema_seat`
--
ALTER TABLE `cinema_seat`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- Tablo için AUTO_INCREMENT değeri `employees_customers`
--
ALTER TABLE `employees_customers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `hall`
--
ALTER TABLE `hall`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `movies`
--
ALTER TABLE `movies`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `seans`
--
ALTER TABLE `seans`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `show_seat`
--
ALTER TABLE `show_seat`
  MODIFY `ss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- Tablo için AUTO_INCREMENT değeri `type`
--
ALTER TABLE `type`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `seans` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`ss_id`) REFERENCES `show_seat` (`ss_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`Id`) REFERENCES `type` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `cinema_seat`
--
ALTER TABLE `cinema_seat`
  ADD CONSTRAINT `cinema_seat_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `hall` (`h_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `seans`
--
ALTER TABLE `seans`
  ADD CONSTRAINT `seans_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `hall` (`h_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seans_ibfk_2` FOREIGN KEY (`m_id`) REFERENCES `movies` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `show_seat`
--
ALTER TABLE `show_seat`
  ADD CONSTRAINT `show_seat_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `seans` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `show_seat_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `cinema_seat` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
