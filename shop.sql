-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2022 at 05:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`) VALUES
(1, 'Boncafe Espresso Ground Coffee', 'Boncafe Espresso Ground Coffee\r\nBoncafe Espresso Ground Coffee\r\nBoncafe Espresso Ground Coffee\r\nBoncafe Espresso Ground Coffee', 150),
(2, 'Doi Chang', 'Doi Chang\r\nDoi Chang\r\nDoi Chang\r\nDoi Chang', 100),
(3, 'DoiTung Drip Coffee Medium Roast', 'DoiTung Drip Coffee Medium Roast\r\nDoiTung Drip Coffee Medium Roast', 150),
(4, 'Mezzo Coffee Bean\r\n', 'Mezzo Coffee Bean', 200),
(5, 'SUZUKI COFFEE Premium Blend', 'SUZUKI COFFEE Premium Blend\r\nSUZUKI COFFEE Premium Blend\r\n', 200),
(6, 'Phou phieng Drip Coffee 100% Premium Arabica', 'Phou phieng Drip Coffee 100% Premium Arabica\r\nPhou phieng Drip Coffee 100% Premium Arabica\r\n', 150),
(7, 'Espresso Pure by NLCOFFEE', 'Espresso Pure by NLCOFFEE\r\nEspresso Pure by NLCOFFEE', 120),
(8, 'Craze Cafe Single Origin', 'Craze Cafe Single Origin\r\nCraze Cafe Single Origin', 170),
(9, 'ILLY Classico Roasted Ground Coffee 100%', 'ILLY Classico Roasted Ground Coffee 100%\r\nILLY Classico Roasted Ground Coffee 100%', 100),
(10, 'Dao Coffee Arabica Premium', 'Dao Coffee Arabica Premium\r\nDao Coffee Arabica Premium', 190),
(11, 'Arabica', 'Arabica\r\nArabica', 0),
(12, 'NYOK PO Arabica Coffee Dark Roast 200g  Lao Specialty Coffee ', 'Get your coffee from your farmer, exclusively!\r\nSLOW DARK ROAST COFFEE\r\nCACAO AND LIQUORICE\r\n\r\nWe work slowly and at nature\'s pace - to fulfill our mission of growing great coffee and preserving and regenerating the world\'s forests.\r\n\r\n \r\n\r\nSlow Coffee is grown by 37 individual smallholder families on the Bolaven Plateau in Laos, whom all grow their coffee under the gentle shade of trees, practicing the art of agroforestry. \r\n\r\n​\r\n\r\nThis coffee lot was grown by the following Slow farmers. Please click through to visit their farms and learn more about them:\r\n\r\n \r\n\r\nOur popular Dark Roast is a flavorful, gentle blend with rich notes of cocoa and and a hint of liquorice. The rounded, balanced flavor leaves a light and pleasant, chocolate-like aftertaste and makes your coffee break a moment of enjoyment. Our Dark Roast coffee has been grown to you by Family Duangta and Family Ngae.\r\n\r\nAs always, we encourage you to sip slowly… But that doesn’t mean you need to forgo a second (or third) cup. Drink anytime, anywhere, with anyone. And, most importantly, enjoy.\r\n\r\n \r\n\r\nWould like to know about our coffee and our mission?\r\n\r\nClick this link: https://www.laospecialtycoffee.com/pages/slow-coffee', 100),
(13, 'Bourbon', 'Bourbon', 110),
(14, 'Catimor', 'Catimor', 115),
(15, 'Catuai', 'Catuai', 115),
(16, 'Caturra', 'Caturra', 110),
(17, 'Excelsa', 'Excelsa', 110),
(18, 'Geisha', 'Geisha', 150),
(19, 'Icatu', 'Icatu', 110),
(20, 'Jackson', 'Jackson', 110),
(21, 'Jamaican Blue Mountain', 'Jamaican Blue Mountain', 110),
(22, 'Jember', 'Jember', 115),
(23, 'Kent', 'Kent', 110),
(24, 'Kona', 'Kona', 170),
(25, 'Liberica', 'Liberica', 115),
(26, 'Maracatu', 'Maracatu', 130),
(27, 'Maragogype', 'Maragogype', 130),
(28, 'Mocha', 'Mocha', 110),
(29, 'Mundo Novo', 'Mundo Novo', 110),
(30, 'Pacamara', 'Pacamara', 120),
(31, 'Pacas', 'Pacas', 115),
(32, 'Pache', 'Pache', 110),
(33, 'Robusta', 'Robusta', 113),
(34, 'Ruiru', 'Ruiru', 200),
(35, 'SL-28/SL-34', 'SL-28/SL-34', 125),
(36, 'Villa Sarchi', 'Villa Sarchi', 220),
(37, 'Villalobos', 'Villalobos', 150),
(38, 'akha ama coffee', 'akha ama coffee', 120),
(39, 'Cherry coffee', 'Cherry coffee', 100),
(40, 'Weasel coffee', 'Weasel coffee', 250),
(41, 'Elephant coffee', 'Elephant coffee', 450),
(42, 'Robusta Vietnamese', 'Robusta Vietnamese', 150),
(43, 'Arabica Vietnamese', 'Arabica Vietnamese\r\nArabica Vietnamese', 150),
(44, 'Robusta Specialty Coffee Laos', 'Robusta Specialty Coffee', 0),
(45, 'Arabica Catuai Specialty Coffee 250g', '\r\nTasting Notes:\r\n\r\nFRESH CHERRY, RASPBERRY, HONEYCOMB, SUBTLE ROSE PETAL, MILK CHOCOLATE', 300),
(46, 'Arabica Typica Specialty Coffee 250g', 'STRAWBERRY JAM, WILDFLOWER HONEY, ALMOND COOKIES, SWEET MILK CHOCOLATE', 250),
(47, 'Arabica Mixed Specialty Coffee 250g LAOS', 'RASPBERRY JAM, BUTTER COOKIE, GOLDEN SYRUP, HAZELNUTS, CREAMY CHOCOLATE', 0),
(48, 'Arabica Java Specialty Coffee 250g', 'MANGO, PINEAPPLE, HINTS OF BLUEBERRY, RAW CASHEW, BLACK TEA', 600),
(49, 'Peaberry MADE IN LAOS ', '\n\nPeaberry \n\nA very special bean in very limited quantities - the best in Lao coffee.\n\nPeaberry city, which is a medium roasted coffee. These beans are the ultimate of all coffee beans. A taste that is so different that it will be very difficult to drink than any other coffee.\n\n\nກາເຟພີເບີລີ້(peaberry) ເເມ່ນກາເຟຂອງດອກໄມ້ຊະນິດຫນຶ່ງທີ່ກາຍພັນອອກເເບບທໍາມະຊາດ.ການກາຍພັນຂອງກາເຟນີ້ຈະບໍ່ເຫັນໃນການປູກຂອງກາເຟທົ່ວໄປເພາະພີເບີລີ້ສ້າງຂື້ນເເຕ່ພຽຽ5% ຂອງມະເລັດກາເຟທີ່\n\nມີຍູ່ເເລະເຫນືອໄປກ່ວາຫັ້ນພີເບິລີ້ (peaberry) ໄດ້ຮັບຊື່ຍ້ອນເປັນກາເຟທີ່ມີຮູບຊົງມົນເເລະນັ້ນເຮັດໄຫ້ກາເຟຊະນິດນີ້ມີຄວາມເປັນເອກກະລັດເຊິ່ງລົດຊາດຈະມີຄວາມເເຕກຕ່າງເເລະເເພງກວ່າກາເຟຊະນິດອຶ່ນ.\n', 0),
(50, 'ELEPHANT EXPRESS  MADE IN LAOS ', '\r\n\r\nElephant Express \r\n\r\nOur Classic Italian style blend, a brilliant espresso, our most complex and compelling coffee.\r\n\r\nElephant express coffee produce a flavorful crema used in expresso blends. It can be describe as bitter, due to higher caffeine content but is said to add depts of flavor.\r\nElephant express\r\n\r\nຂອງເຮົາຈະໃຫ້ລົດຊາດທີ່ເຂັ້ມຂົ້ນຄ້າຍຄືຊັອກໂກເລັດດໍາເເລະເຫມາະສໍາລັບຄົນທີ່ມັກກາເຟສໄຕຣອີຕາລຽນປະສົມກັບໂຣບັຣສຕ້າ.\r\n', 600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
