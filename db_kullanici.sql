-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Oca 2018, 05:32:07
-- Sunucu sürümü: 10.1.24-MariaDB
-- PHP Sürümü: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `db_kullanici`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_kisiler`
--

CREATE TABLE `tbl_kisiler` (
  `id` int(11) NOT NULL,
  `k_name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` text COLLATE utf8_turkish_ci,
  `web` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `googlePlus` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tbl_kisiler`
--

INSERT INTO `tbl_kisiler` (`id`, `k_name`, `lastname`, `adres`, `web`, `email`, `phone`, `facebook`, `twitter`, `googlePlus`, `note`, `birthday`) VALUES
(1, 'Osman', 'Yılmaz', 'Kocasinan/KAYSERİ', 'www.osman.com', 'osman@gmail.com', '0542 1234567', '@osman', ' @osman', '@osman', '', '2018-01-15'),
(2, 'Handan', 'Coşkun', 'Kayseri', 'www.handan.com', 'handan@gmail.com', '0545 1234567', '@handan', '@handan', '@handan', '', '2018-01-15'),
(5, 'Sinan', 'Küçük', 'asdfg', 'www.kucuk.com', 'sinan@gmail.com', '05351234567', 'sinan', 'sinan', 'sinankucuk', 'sadfg', '2018-01-16'),
(12, 'Deneme', 'denemee', 'asdfghjklş', 'www.deneme.com', 'deneme@gmail.com', '0542123654789', '@deneme', '#deneme', 'denemeDenmee', 'fghbjnkmlöş', '2018-01-17');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_kisiler`
--
ALTER TABLE `tbl_kisiler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_kisiler`
--
ALTER TABLE `tbl_kisiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
