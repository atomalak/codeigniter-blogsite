-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2019 at 09:55 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `admin_surname` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `admin_tagname` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `admin_name`, `admin_surname`, `admin_tagname`, `password`) VALUES
(1, 'admin', 'adminsurname', 'bloagadmin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `description` longtext COLLATE utf8_turkish_ci NOT NULL,
  `desc_date` date NOT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `clickSize` int(255) NOT NULL,
  `csafeUrl` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `description`, `desc_date`, `url`, `clickSize`, `csafeUrl`) VALUES
(7, 'Galatasaray\'ı bekleyen tarihi gelir; 550 milyon TL', ' ARAŞTIRMA: Spor Toto Süper Lig\'in 31. haftasında Beşiktaş\'ı 2-0 mağlup ederek bitime 3 maç kala yeniden liderlik koltuğuna oturan Galatasaray\'da, hem 22. şampiyonluğun hem de elde edilecek büyük gelirin hesapları yapılıyor.\r\n\r\nFatih Terim önderliğinde, 22. şampiyonluk için büyük bir avantajı elinde bulunduran Galatasaray sezon sonu mutlu sona ulaşması halinde ekonomik olarak da çok büyük bir kazanç sağlamış olacak. Sarı-kırmızılı kulübün kasasına Süper Lig şampiyonluğu ve Şampiyonlar Ligi\'ne katılma hakkından dolayı yaklaşık 450 milyon TL gibi bir rakamın girmesi bekleniyor.\r\n\r\nSÜPER LİG\'DEN YAKLAŞIK 200 MİLYON TL\r\n\r\nGalatasaray, Spor Toto Süper Lig\'de 2018/2019 sezonunu şampiyon bitirmesi halinde, katılım payı, geçmiş şampiyonluk primi, performans primleriyle birlikte bir sezon için yaklaşık 200 milyon TL kasasına koymuş olacak. Sarı-kırmızılı takımın 31. hafta itibariyle 46,8 milyon TL galibiyet primi ve 11,7 milyon TL beraberlik primi bulunuyor.\r\n\r\nGalibiyet primi: 46,8 milyon TL \r\n(31. haftaya kadar)\r\n\r\nBeraberlik primi: 11,7 milyon TL \r\n(31. haftaya kadar)\r\n\r\nŞampiyonluk ödülü: 33 milyon TL\r\nSezona katılım payı: 35 milyon TL\r\nGeçmiş şampiyonluk primi: 63 milyon TL                                                            ', '2019-05-07', 'galatasaray-i-bekleyen-tarihi-gelir-450-milyon-tl', 0, 'eglence-senlik'),
(8, 'Fatih Terim\'den Ndiaye\'ye terapi!', ' Galatasaray derbi galibiyetinin ardından hız kesmeden Rizespor ile oynayacağı maçın hazırlıklarına başladı.\r\n\r\nBeşiktaş maçında orta alanda Donk\'u tercih edip Ndiaye\'yi dışarıda bırakan Fatih Terim, dün Senegalli futbolcuyla bir konuşma yaptı. Kesinlikle küsmemesi gerektiğini öğrencisine söyleyen Terim \"Bu maça özel bir taktik tercihti\" dedi.\r\n\r\nHavaya girmek yok\r\n\r\nGalatasaray\'da Beşiktaş derbisinin yıldızlarından olan ve perdeyi açan Henry Onyekuru \"Liderlik koltuğuna oturduğumuz için çok mutluyuz ancak daha işimiz bitmedi. Adım adım gideceğiz. Havaya girmek yok\" dedi.\r\n\r\nDerbi galibiyetinin sevincini abartmamaları gerektiğini belirten Nijeryalı \"Rizespor ile zorlu bir maçımız var\" hatırlatmasında bulundu.\r\n                                                            ', '2019-05-07', 'fatih-terim-den-ndiaye-ye-terapi', 0, 'spor'),
(9, 'Galatasaray, Bayern Münih gibi', 'Galatasaray, son virajda şampiyonluğu bırakmıyor. Sarı-kırmızılılar, Süper Lig’de üç puanlı sistemde son 3 haftaya lider girdiği tüm sezonlarda mutlu sona ulaştı.\r\n\r\nCim-Bom, 1987-88 sezonundan itibaren bitime 3 hafta kala zirvede yer aldığı 11 sezonunda da şampiyonluk kupasının sahibi oldu. Galatasaray’ın bu 11 şampiyonluğunun 7’sini teknik direktör Fatih Terim yönetiminde kazandı.\r\n\r\nAslan, üç puanlı sistemde son 3 haftaya averajla ikinci sırada girdiği 4 sezonun üçünde de rakiplerini geçerek şampiyonluğa ulaştı. Sarı-kırmızılı ekip, 1992-1993’te Beşiktaş, 2005-2006 ve 2007-2008 sezonlarında da Fenerbahçe’yi son 3 haftada geçerek, sezon sonunda kupayı havaya kaldırdı. Galatasaray’ın bitime üç hafta kala averajla ikinci sırada yer aldığı 2000-2001 sezonunda ise lider Fener bahçe şampiyonluk elde etti.\r\n\r\nBayern Münih gibi\r\nSpor Toto Süper Lig’de 22 hafta sonra liderliğe yükselen Galatasaray, Alman devi Bayern Münih’le olan benzerliğiyle dikkat çekiyor. Aslan, tıpkı Alman ekibi gibi ciddi puan farkından geri gelip, zirveye kuruldu.\r\n\r\nBayern Münih de sezonun ikinci yarısı başlarken Borussia Dortmund’un 9 puan gerisinde kalmıştı. Ancak arka arkaya 12 lig maçında 10 galibiyet, 2 beraberlik alan Bayern, liderliğe çıktı. Galatasaray da 10 hafta önce 8 puan geride olduğu ligde toplamda son 17 maçta kaybetmeyerek, bitime 3 hafta kala birinci sırayı devraldı.                              ', '2019-05-07', 'galatasaray-bayern-munih-gibi', 0, 'eglence-senlik'),
(10, 'Kutu Oyunu Sevenlerin İlk Tercihlerinden Biri: Ödüllü Oyun The Settlers of Catan', 'the settlers of catan, birçok açıdan yeni moda oyun akımı yaratma gücüne sahip, zekice düşünülüp basit kurgulanmış bir board game. catan, 1995\'te almanya\'da yılın oyunu, 1996\'da abd\'de yılın oyunu seçilmiştir. 10 seneyi aşkın yolculuğunda türlü dillere çevrilmiş, bir sürü expansion pack\'leri (yamaları), add-on\'ları çıkmıştır. nedendir inceleyelim:', '2019-05-09', 'kutu-oyunu-sevenlerin-ilk-tercihlerinden-biri-odullu-oyun-the-settlers-of-catan', 0, 'eglence-senlik');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `csefurl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `cname`, `csefurl`) VALUES
(4, 'Eğlence Şenlik', 'eglence-senlik'),
(6, 'Spor', 'spor'),
(7, 'Dersler', 'dersler');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
