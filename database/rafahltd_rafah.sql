-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2019 at 07:00 PM
-- Server version: 5.7.25-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rafahltd_rafah`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `en_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `en_desc` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ar_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ar_desc` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `url` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `en_title`, `en_desc`, `ar_title`, `ar_desc`, `url`, `date`) VALUES
(1, 'Andrew McCabe, FBI deputy director, quits after Trump criticism', 'Andrew McCabe was forced to step down ahead of his official retirement date in March, reports CBS News.\r\n\r\nHis exit from the top law enforcement agency comes a week after a report that Mr Trump wanted him out.\r\n\r\nIt was also reported last week that the president had asked Mr McCabe during an Oval Office meeting whom he voted for.\r\n\r\nWhite House press secretary Sarah Huckabee Sanders told Monday\'s daily press briefing: \"This decision was not made by the White House.\"\r\n\r\n\"The president wasn\'t part of this decision making process,\" she added.', 'معارك ضارية بين قوات هادي والانفصاليين في عدن جنوبي اليمن', '\r\nوقتل تسعة أشخاص على الأقل بعد استئناف المعارك بين القوات اليمنية الحكومية والانفصاليين في عدن، حسب مصادر عسكرية.\r\n\r\nوأوضح المصدر أن 5 من الانفصاليين قتلوا برصاص القناصة، بينما قتل 4 جنود حكوميين في الاشتباكات.\r\n\r\nوكانت الحكومة أعلنت قبلها استعادة الهدوء في المدينة وحضت السكان على الخروج واستئناف أشغالهم الاعتيادية، بعد مقتل 15 شخصا وإصابة العشرات في اشتباكات سابقة.', '234491-tumblr-laptop-backgrounds-1920x1080-for-mac.jpg', '2018-02-03'),
(2, 'Andrew McCabe, FBI deputy director, quits after Trump criticism', 'Andrew McCabe was forced to step down ahead of his official retirement date in March, reports CBS News.\r\n\r\nHis exit from the top law enforcement agency comes a week after a report that Mr Trump wanted him out.\r\n\r\nIt was also reported last week that the president had asked Mr McCabe during an Oval Office meeting whom he voted for.\r\n\r\nWhite House press secretary Sarah Huckabee Sanders told Monday\'s daily press briefing: \"This decision was not made by the White House.\"\r\n\r\n\"The president wasn\'t part of this decision making process,\" she added.', 'معارك ضارية بين قوات هادي والانفصاليين في عدن جنوبي اليمن', '\r\nوقتل تسعة أشخاص على الأقل بعد استئناف المعارك بين القوات اليمنية الحكومية والانفصاليين في عدن، حسب مصادر عسكرية.\r\n\r\nوأوضح المصدر أن 5 من الانفصاليين قتلوا برصاص القناصة، بينما قتل 4 جنود حكوميين في الاشتباكات.\r\n\r\nوكانت الحكومة أعلنت قبلها استعادة الهدوء في المدينة وحضت السكان على الخروج واستئناف أشغالهم الاعتيادية، بعد مقتل 15 شخصا وإصابة العشرات في اشتباكات سابقة.', '139223-popular-tumblr-laptop-backgrounds-1920x1080.jpg', '2018-02-04'),
(4, 'exhibition', 'exhibition', 'Ù…Ø¹Ø±Ø¶', 'Ù…Ø¹Ø±Ø¶', '50628636_488873618308777_5831127061686648832_n.jpg', '2019-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `en_title` varchar(300) COLLATE utf8_bin NOT NULL,
  `ar_title` varchar(300) COLLATE utf8_bin NOT NULL,
  `en_sys` text COLLATE utf8_bin NOT NULL,
  `ar_sys` text COLLATE utf8_bin NOT NULL,
  `en_place` varchar(300) COLLATE utf8_bin NOT NULL,
  `ar_place` varchar(300) COLLATE utf8_bin NOT NULL,
  `area` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `sanitry` text COLLATE utf8_bin NOT NULL,
  `wt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `en_title`, `ar_title`, `en_sys`, `ar_sys`, `en_place`, `ar_place`, `area`, `capacity`, `sanitry`, `wt`) VALUES
(1, 'French Hospital', 'المشفى الفرنسي', 'VRF FROM HISENSE', 'VRF FROM HISENSE', 'SYRIA-DAMASCOUS-ALQISAE', 'سوريا-دمشق-القصاع', 3000, 100, '', 0),
(2, 'ALKALMON LIPRARY', 'مكتبة القلمون', 'UNDERFLOOR HEATING BY SOLARSYSTEM  FROM MULTITUBO CO', 'تدفئة أرضية بمساعدة الطاقة الشمسية من شركة MULTITUBO', 'SYRIA-REEF DAMASCOUS-DAIR ATIAH', 'سوريا-ريف دمشق-دير عطية', 6500, 1341, '', 0),
(3, 'KATERJI GROUP', 'مجموعة قاطرجي', 'VRF FROM HISENSE', 'VRF FROM HISENSE', 'SYRIA-DAMASCOUS-ALMAZZEH', 'سوريا-دمشق-المزة', 4000, 140, 'SOLAR SYSTEM FOR HOT WATER ', 1500),
(4, 'MAKANI HOTEL', 'فندق مكاني', 'VRF ', 'VRF ', 'SYRIA-REEF DAMASCOUS-DAIR ATIAH', 'سوريا-ريف دمشق-دير عطية', 6000, 200, 'SOLAR SYSTEM FOR HOT WATER AND POOL', 0),
(5, 'JDODNA HOTEL', 'فندق ومطعم جدودنا ', 'CHILLER FROM MTA', 'CHILLER FROM MTA', 'SYRIA-REEF DAMASCOUS-BLUDAN', 'سوريا-ريف دمشق-بلودان', 7000, 1609, 'BOILER FOR HOT WATER & HEATING', 0),
(6, 'HOTEL & RESTAURANT ALPATIO', 'فندق و مطعم اللباثيو', 'CHILLER FROM MTA', 'CHILLER FROM MTA', 'SYRIA-REEF DAMASCOUS- DAIR ATIAH', 'سوريا-ريف دمشق-دير عطية', 4000, 939, 'SOLER SYSTEM FOR HOT WATER   BOILER FOR HEATING', 0),
(7, 'SYRIATEL POS', 'مركز خدمات سيريتل \r\n', 'VRF FROM HISENSE', 'VRF FROM HISENSE', 'SYRIA-DAMASCOUS-ALMAZZEH', 'سوريا-دمشق-المزة', 1000, 50, '', 0),
(8, 'KALMON UNIVERSITY', 'جامعة القلمون ', 'CHILLER & BOILER & AHU', 'CHILLER & BOILER & AHU', 'SYRIA-REEF DAMASCOUS-DAIR ATIAH', 'سوريا-ريف دمشق-دير عطية', 40000, 8046, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_img`
--

CREATE TABLE `project_img` (
  `id` int(11) NOT NULL,
  `url` varchar(300) COLLATE utf8_bin NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `project_img`
--

INSERT INTO `project_img` (`id`, `url`, `pid`) VALUES
(1, 'France.jpg', 1),
(2, 'Library.jpg', 2),
(3, 'img-02.jpg', 2),
(4, 'Katerji.jpg', 3),
(5, 'Makani.jpg', 4),
(6, 'Jdodna.jpeg', 5),
(7, 'Elpatio.JPG', 6),
(8, 'Syriatel.jpg', 7),
(9, 'University.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `en_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `en_desc` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ar_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ar_desc` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `type` enum('outdoor unit series','multitubo','indoor unit series','fresh air systems','controller','chiller','air to water unit') CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `redirect` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `token` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `en_title`, `en_desc`, `ar_title`, `ar_desc`, `type`, `redirect`, `token`) VALUES
(1, 'Hi-FLEXi G+ Series', 'Hisense G+ series is the latest larger capacity full DC inverter-driven multi-split central air conditioning product. It focuses on customers\' requirement and comfort, representing Hisense high quality and technology. It’s characterized by:\r\n\r\nLatest enhanced capacity series:\r\n\r\nBrand new high-pressure chamber scroll compressor\r\nIntegrated high-strength structure and convenient installation\r\nAdoption of double larger fans and low-pressure loss heat exchanger\r\nMax. 22HP single unit, 4 modules\' combination', 'Hi-FLEXi G+ Series', 'سلسلة هيسنس G + هو أحدث سعة أكبر الكامل دس العاكس متعدد تقسيم المنتج تكييف الهواء المركزية. وهو يركز على متطلبات العملاء والراحة، وهو ما يمثل هيسنس ذات جودة عالية والتكنولوجيا. انها تتميز:\r\n\r\nأحدث تعزيز سلسلة القدرات:\r\n\r\nالعلامة التجارية الجديدة ارتفاع ضغط غرفة التمرير ضاغط\r\nالمتكاملة عالية-- قوة هيكل وتركيب مريحة\r\nاعتماد مزدوج المشجعين أكبر وفقدان الضغط المنخفض مبادل حراري\r\nماكس. 22HP وحدة واحدة، 4 وحدات \"الجمع', 'outdoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=51', 'adasdas214f421016fbc7446735ab33aee0762dfbd80a037asdsdasdsa15dsasdas1d5as15d1as'),
(2, 'Hi-FLEXI G+ series High Ambient', 'Hisense G+ series is the latest larger capacity full DC inverter-driven multi-split central air conditioning product. It’s focusing on the customers’ requirements and comfort, representing .Hisense high quality and technology. It’s characterized by:\r\n\r\nLatest enhanced capacity series:\r\n\r\nBrand new high-pressure chamber scroll compressor\r\nIntegrated high-strength structure and convenient installation\r\nAdoption of double larger fans and low-pressure loss heat exchanger\r\nMax.20HP single unit, 4 modules\' combination\r\nProduct Details', 'Hi-FLEXI G+ series High Ambient', 'سلسلة هيسنس G + هو أحدث سعة أكبر الكامل دس العاكس متعدد تقسيم المنتج تكييف الهواء المركزية. انها تركز على متطلبات العملاء والراحة، تمثل. هيسنس عالية الجودة والتكنولوجيا. انها تتميز:\r\n\r\nأحدث تعزيز سلسلة القدرات:\r\n\r\nالعلامة التجارية الجديدة ارتفاع ضغط غرفة التمرير ضاغط\r\nالمتكاملة عالية-- قوة هيكل وتركيب مريحة\r\nاعتماد مزدوج المشجعين أكبر وفقدان الضغط المنخفض مبادل حراري\r\nMax.20HP وحدة واحدة، 4 وحدات \"الجمع\r\nتفاصيل المنتج', 'outdoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1154', 'adasdas214f421016fbc7446735ab33aee0762dfbd80a037asdsdasdsa5d1a5s1da'),
(3, 'Hi-FLEXi G Series', 'Hi-FLEXi G series is the full DC inverter-driven multi-split central air conditioning product. It is the concentrated expression of Hisense\'s R&D ability and technical strength. Multiple advanced technology is adopted:\r\nHigh efficiency high-pressure chamber scroll compressor\r\nFull DC inverter-driven control technology\r\nStepless fan speed regulation and fan production technology\r\nSmart and precise unit capacity allocation technology\r\nIntelligent demand mode control technology', 'Hi-FLEXi G Series', 'هاي-فليكسي G سلسلة هو كامل دس العاكس متعدد تقسيم المنتج تكييف الهواء المركزية يحركها العاكس. هو التعبير المركزة من قدرة R & D هيسنس والقوة التقنية. يتم اعتماد التكنولوجيا المتقدمة متعددة:\r\nعالية الكفاءة غرفة الضغط العالي ضاغط التمرير\r\nكامل دس العاكس يحركها تكنولوجيا التحكم\r\nستبليس مروحة سرعة التنظيم و مروحة تكنولوجيا الإنتاج\r\nذكية ودقيقة وحدة تكنولوجيا تخصيص القدرات\r\nذكي تكنولوجيا التحكم في وضع الطلب', 'outdoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=52', 'adasdas214f421016fbc7446735ab33aee0762dfbd80a037asdsdasd1a5sd15as1ds'),
(4, 'Hi-FLEXi X Series', 'Hi-Flexi X series is equipped with large capacity full DC inverter compressor. The wide capacity range and compact structure design make it suitable for various  place such as office building, shopping mall, hospital, school and so on\r\n\r\nHigh efficiency and large capacity scroll compressor\r\nLatest DC inverter-driven technology\r\nStepless fan speed regulation technology\r\nSmart and accurate unit capacity allocation technology\r\nIntelligent control mode', 'Hi-FLEXi X Series', 'وقد تم تجهيز هاي-فليكسي X سلسلة مع قدرة كبيرة الكامل العاصمة العاكس ضاغط. نطاق قدرة واسعة وتصميم هيكل مدمج يجعلها مناسبة لمكان مختلف مثل مبنى المكاتب، مركز للتسوق، مستشفى، المدرسة وهلم جرا\r\n\r\nعالية الكفاءة و قدرة كبيرة ضاغط التمرير\r\nأحدث دس العاكس-- مدفوعة التكنولوجيا\r\nستبليس مروحة سرعة تكنولوجيا التنظيم\r\nذكية ودقيقة وحدة تكنولوجيا توزيع القدرات\r\nوضع التحكم الذكي', 'outdoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1089', 'adasdas214f421016fbc7446735ab33aee0762dfbd80a037asdsdasdad5as4d5as4'),
(5, 'Hi-FLEXi M Series', 'Hisense VRF Hi-FLEXi M Series inverter air conditioning system adopt high efficiency scroll compressor and leading frequency inverter control technology, realizing significant improvement in operation efficiency under partial load.\r\n\r\nHigh efficiency inverter + fixed compressor\r\nLeading inverter control technology\r\nSmall volume and light weight, save transport and installation space\r\nIntelligent control system', 'Hi-FLEXi M Series', 'هيسنس فرف هاي-فليكسي M سلسلة العاكس نظام تكييف الهواء اعتماد كفاءة عالية ضاغط التمرير وتكنولوجيا تردد العاكس الرائدة التحكم، تحقيق تحسن كبير في كفاءة التشغيل تحت الحمل الجزئي.\r\n\r\nعالية الكفاءة العاكس + ضاغط ثابت\r\nالرائدة تكنولوجيا التحكم العاكس\r\nحجم صغير وخفيفة الوزن، وتوفير النقل والتركيب الفضاء\r\nنظام التحكم الذكي', 'outdoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=53', 'adasdas214f421016fbc7446735ab33aee0762dfbd80a037asdsdasda5s4d5asd5a4'),
(6, 'Hi-FLEXi R Series', 'Hisense Hi-FLEXi R Series heat recovery air conditioning systems can realize simultaneous cooling and heating operation within one refrigerating system, which not only contributes to energy conservation but also meets various requirements of different consumers.\r\n\r\nHigh efficiency scroll compressor\r\nSimultaneous cooling and heating\r\nLastest inverter control technology\r\nIntelligent control system', 'Hi-FLEXi R Series', 'هيسنس مرحبا- فليكسي R سلسلة أنظمة استعادة الحرارة الانتعاش الحرارة يمكن تحقيق التبريد في وقت واحد والتدفئة العملية ضمن نظام التبريد واحد، والتي لا تسهم فقط في الحفاظ على الطاقة ولكن أيضا يلبي متطلبات مختلفة من مختلف المستهلكين.\r\n\r\nكفاءة عالية ضاغط التمرير\r\nالتبريد في وقت واحد والتدفئة\r\nأحدث تكنولوجيا التحكم العاكس\r\nنظام التحكم الذكي', 'outdoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=54', 'adasdas214f421016fbc7446735ab33aee0762dfbd80a037asdsdasdsa4d5sd45as'),
(7, 'Hi-FLEXi C Series', 'DC inverter-driven compressor\r\nLow noise technologies\r\nCompact and lightweight design\r\nLong refrigerant pipe and drop', 'Hi-FLEXi C Series', 'قلاب التيار المستمر المنقاد بالضاغط\r\nبتقني الضجيج الخفيف\r\nتصميم خفيف ومدمج\r\nاسقاط انابيب تبريد طويلة', 'outdoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1102', 'adasdas214f421016fbc7446735ab33aee0762dfbd80a037asdsdasdsad2as65ad5s'),
(8, 'Hi-Smart L Series', 'Hisense Hi-Smart L Series is designed and developed for high-end residential and commercial space.\r\n\r\nDC inverter-driven compressor\r\nLow noise technologies\r\nCompact and lightweight design\r\nLong refrigerant pipe and drop', 'Hi-Smart L Series', 'تم تصميم هيسنس مرحبا الذكية L سلسلة وتطوير الراقية السكنية والتجارية الفضاء.\r\n\r\nدس العاكس يحركها ضاغط\r\nتقنيات منخفضة الضوضاء\r\nتصميم مدمج وخفيف الوزن\r\nطويل أنابيب التبريد وإسقاط', 'outdoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1107', 'adasdas214f421016fbc7446735ab33aee0762dfbd80a037asdsdasdasd4as4da4'),
(9, 'Hi-FLEXi E Series', 'Hi-FLEXi E Series', 'Hi-FLEXi E Series', 'Hi-FLEXi E Series', 'outdoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1112', 'adasdas214f421016fbc7446735ab33aee0762dfbd80a037asdsdasdas5d4asd'),
(10, 'Hi-FLEXi W Series', 'Hisense water-source inverter-driven multi-split air conditioning incorporates the merits of air-cooled inverter-driven multi-split system and water-source heat pump system.\r\n\r\nInverter-driven control technology\r\nWater-source technology\r\nSimultaneous cooling and heating\r\nStable performance', 'Hi-FLEXi W Series', 'هيسنس مصدر المياه العاكس يحركها متعددة تقسيم تكييف الهواء يتضمن مزايا نظام متعدد تقسيم الهواء العاكس يحركها العاكس والماء مصدر نظام مضخة الحرارة.\r\n\r\nالعاكس يحركها تكنولوجيا التحكم\r\nتكنولوجيا مصدر المياه\r\nالتبريد في وقت واحد والتدفئة\r\nأداء مستقر', 'outdoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1117', 'adasdas214f421016fbc7446735ab33aee0762dfbd80a037asdsdasda5sd4a4s5'),
(11, 'Hi-Smart H series High Ambient', 'Hisense Hi-Smart H High Ambient Series is designed and developed with core technologies. It is focusing on customers\' requirements and comfort, representing Hisense high quality and technology.\r\n\r\nDC inverter-driven compressor\r\nLow noise technologies\r\nCompact and lightweight design\r\nLong refrigerant pipe and drop', 'Hi-Smart H series High Ambient', 'هيسنس مرحبا- الذكية H تم تصميم سلسلة عالية المحيطة وتطويرها مع التكنولوجيات الأساسية. وهو يركز على متطلبات العملاء والراحة، وهو ما يمثل هيسنس جودة عالية والتكنولوجيا.\r\n\r\nدس العاكس يحركها ضاغط\r\nتقنيات منخفضة الضوضاء\r\nتصميم مدمج وخفيف الوزن\r\nطويل أنابيب التبريد وإسقاط', 'outdoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1159', 'adasdas214f421016fbc7446735ab33aee0762dfbd80a037asdsdasdas85das54d'),
(12, '1-Way Cassette Type', '1-Way Cassette Type', '1-Way Cassette Type', '1-Way Cassette Type', 'indoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1168', ''),
(13, '2-Way Cassette Type', '2-Way Cassette Type', '2-Way Cassette Type', '2-Way Cassette Type', 'indoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1169', ''),
(14, '4-Way Cassette Type', '4-Way Cassette Type', '4-Way Cassette Type', '4-Way Cassette Type', 'indoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1166', ''),
(15, '4-Way Cassette Type (Compact)', '4-Way Cassette Type (Compact)', '4-Way Cassette Type (Compact)', '4-Way Cassette Type (Compact)', 'indoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1167', ''),
(16, 'Ceiling Ducted Type (High Static Pressure)', 'Ceiling Ducted Type (High Static Pressure)', 'Ceiling Ducted Type (High Static Pressure)', 'Ceiling Ducted Type (High Static Pressure)', 'indoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1164', ''),
(17, 'Ceiling Ducted Type (Low Static Pressure)', 'Ceiling Ducted Type (Low Static Pressure)', 'Ceiling Ducted Type (Low Static Pressure)', 'Ceiling Ducted Type (Low Static Pressure)', 'indoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=58', ''),
(18, 'Ceiling Ducted Type (DC Low-height)', 'Ceiling Ducted Type (DC Low-height)', 'Ceiling Ducted Type (DC Low-height)', 'Ceiling Ducted Type (DC Low-height)', 'indoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=55', ''),
(19, 'Ceiling Ducted Type (Low-Height)', 'Ceiling Ducted Type (Low-Height)', 'Ceiling Ducted Type (Low-Height)', 'Ceiling Ducted Type (Low-Height)', 'indoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=56', ''),
(20, 'Ceiling Ducted Type (Slim)', 'Ceiling Ducted Type (Slim)', 'Ceiling Ducted Type (Slim)', 'Ceiling Ducted Type (Slim)', 'indoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1170', ''),
(21, 'Ceiling & Floor Type', 'Ceiling & Floor Type', 'Ceiling & Floor Type', 'Ceiling & Floor Type', 'indoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1171', ''),
(22, 'Wall Mounted Type', 'Wall Mounted Type', 'Wall Mounted Type', 'Wall Mounted Type', 'indoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=57', ''),
(23, 'Floor Concealed Type', 'Floor Concealed Type', 'Floor Concealed Type', 'Floor Concealed Type', 'indoor unit series', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1165', ''),
(24, 'Multi-Function Series', 'Hisense Multifunction VRF System is a multifunctional intelligent ecology home system with integration of home central air conditioning, radiant floor heating and domestic hot water. Utilizing high efficient DC inverter technology, air source heat pump technology and heat recovery technology, it builds a more intelligent and more comfortable modern home life.', 'Multi-Function Series', 'هيسنس مولتفونتيون نظام فرف هو متعدد الوظائف ذكي نظام المنزل البيئة مع التكامل بين تكييف الهواء المركزية المنزل، التدفئة الطابق مشع والمياه الساخنة المحلية. استخدام كفاءة عالية دس العاكس التكنولوجيا، مصدر الهواء التكنولوجيا مضخة الحرارة والتكنولوجيا استعادة الحرارة، فإنه يبني أكثر ذكاء وأكثر راحة الحياة المنزلية الحديثة.', 'air to water unit', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1282', ''),
(25, 'Hi-AquaSmart Series', 'Hisense air to water heat pump system absorbs the free energy from outside atmosphere, which only consume less electricity to generate more heat energy.Hi-AquaSmart series have better performance, high efficiency, high energysaving', 'Hi-AquaSmart Series', 'هيسنس الهواء إلى نظام مضخة الحرارة المياه يمتص الطاقة الحرة من الغلاف الجوي الخارجي، والتي تستهلك فقط أقل من الكهرباء لتوليد المزيد من الطاقة الحرارية.هى سلسلة أكواسمارت يكون أداء أفضل، وكفاءة عالية، وارتفاع إنيرسافينغ', 'air to water unit', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1283', ''),
(26, 'Hi-Mod Series', 'Hisense’s new generation of Hi-Mod series environmental friendly modular air-cooled chiller, compared with the traditional products, improves the system and program design and is specially designed and developed for usage requirements of comfortable occasions. Hi-Mod series unit has complete functions and various speciﬁcations, including standard A series, total heat recovery type R series and low temperature and high heat type E series. The standard A series reference module includes 66kW, 100kW and 130kW with 16 sets in parallel at most. In addition, different models of modules can be connected in parallel randomly to reach the combination of 66kW-2080kW, which has wider application range and can better meet the needs of users.', 'Hi-Mod Series', 'الجيل الجديد هيسنس من مرحبا- وزارة الدفاع سلسلة صديقة للبيئة وحدات تبريد الهواء المبرد، مقارنة مع المنتجات التقليدية، ويحسن النظام وتصميم البرنامج ومصممة خصيصا وتطويرها لمتطلبات الاستخدام من المناسبات المريحة. مرحبا-- وزارة الدفاع سلسلة وحدة لديها وظائف كاملة ومختلف المواصفات، بما في ذلك سلسلة القياسية، مجموع الحرارة استرداد نوع r سلسلة ودرجة الحرارة المنخفضة وارتفاع الحرارة نوع e سلسلة. تتضمن الوحدة المرجعية القياسية سلسلة 66kW، 100kW و 130kW مع 16 مجموعات بالتوازي على الأكثر. وبالإضافة إلى ذلك، نماذج مختلفة من وحدات يمكن توصيلها بشكل مواز عشوائيا للوصول إلى مزيج من 66kW-2080kW، التي لديها نطاق تطبيق أوسع ويمكن أن تلبي بشكل أفضل احتياجات المستخدمين.', 'chiller', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1291', ''),
(27, 'All Fresh Air Indoor Unit', 'Create a comfortable and healthy indoor environment by introducing fresh outdoor air. By heating or cooling fresh outdoor air to almost the same temperature as room temperature, fresh ambient air can be adapted and then introduced into indoor room. Besides, after filtered, fresh outdoor air in transition seasons can be drawn to indoor room directly with no need of heating or cooling operation, While fresh outdoor air is introduced, other indoor units don’t bear fresh air load.', 'All Fresh Air Indoor Unit', 'خلق بيئة داخلية مريحة وصحية من خلال إدخال الهواء الطلق في الهواء الطلق. عن طريق تسخين أو تبريد الهواء الطلق في الهواء الطلق إلى ما يقرب من نفس درجة حرارة الغرفة، والهواء المحيط النقي يمكن تكييفها ثم أدخلت في غرفة داخلية. الى جانب ذلك، بعد تصفيتها، الهواء الطلق في الفصول الانتقالية يمكن استخلاصها إلى غرفة داخلية مباشرة مع عدم وجود حاجة للتدفئة أو عملية التبريد، في حين يتم عرض الهواء الطلق في الهواء الطلق، وحدات داخلية أخرى لا تتحمل حمولة الهواء النقي.', 'fresh air systems', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1228', ''),
(28, 'Air Handling Unit', 'The Hisense AHU-KIT can integrate external heat exchangers of Air-handing units (AHU) into a Hisense VRF system to be used for air conditioning,which can provide more flexible air conditioning solutions and save more cost in the building air conditioning renovation.', 'Air Handling Unit', 'و هيسنس أهو-كيت يمكن أن تدمج المبادلات الحرارية الخارجية من وحدات تسليم الهواء (أهو) في نظام هيسنس فرف لاستخدامها لتكييف الهواء، والتي يمكن أن توفر حلول تكييف الهواء أكثر مرونة وحفظ المزيد من التكاليف في تجديد تكييف الهواء المبنى.', 'fresh air systems', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1232', ''),
(29, 'Heat Recovery Ventilator', 'Hisense heat recovery ventilator adopts efficient convective transfer material to effectively recycle the heat losses due to ventilation, reduces the fresh air load, achieves the purpose of energy saving and lower running cost of air conditioning unit, fresh air is supplied to indoors continuously which can make your room more comfortable and healthy.', 'Heat Recovery Ventilator', 'هيسنس الحرارة الانتعاش التهوية تتبنى كفاءة نقل المواد الحمل الحراري لإعادة تدوير فعال خسائر الحرارة بسبب التهوية، ويقلل من الهواء النقي تحميل، يحقق الغرض من توفير الطاقة وانخفاض تكلفة تشغيل وحدة تكييف الهواء، يتم تزويد الهواء النقي إلى الداخل بشكل مستمر والتي يمكن أن تجعل غرفتك أكثر راحة وصحية.', 'fresh air systems', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1236', ''),
(30, 'HYXE-J01H', '4 inch large LCD screen with a resolution of 320×185.\r\n\r\nFunctions are displayed in iconic form, more intuitive. Operation navigation, more convenient. Various displaying settings: backlit control, contrast ratio setting, backlit displaying time setting, keytone setting, indicator light brightness setting, clock setting, language switch (Chinese, English, Spanish, Italian, German. ) Max.16 indoor units can be connected. It can be used in main-auxiliary control mode.', 'HYXE-J01H', '4 بوصة شاشة لد كبيرة مع دقة 320 × 185.\r\n\r\nيتم عرض وظائف في شكل مبدع، أكثر سهولة. عملية الملاحة، وأكثر ملاءمة. إعدادات العرض المختلفة: التحكم في الإضاءة الخلفية، وإعداد نسبة التباين، وإعداد وقت الإضاءة الخلفية، وإعداد الكيتون، وإعداد سطوع ضوء المؤشر، وإعداد الساعة، والتبديل اللغوي (الصينية والإنجليزية والإسبانية والإيطالية والألمانية). ويمكن استخدامه في وضع التحكم الرئيسي المساعدة.4 بوصة شاشة لد كبيرة مع دقة 320 × 185.\r\n\r\nيتم عرض وظائف في شكل مبدع، أكثر سهولة. عملية الملاحة، وأكثر ملاءمة. إعدادات العرض المختلفة: التحكم في الإضاءة الخلفية، وإعداد نسبة التباين، وإعداد وقت الإضاءة الخلفية، وإعداد الكيتون، وإعداد سطوع ضوء المؤشر، وإعداد الساعة، والتبديل اللغوي (الصينية والإنجليزية والإسبانية والإيطالية والألمانية). ويمكن استخدامه في وضع التحكم الرئيسي المساعدة.', 'controller', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1208', ''),
(31, 'HYXE-F01H', 'Fashion appearance with crystal panel and keys\r\n\r\nLarge LCD backlit screen\r\n\r\nMax.16 indoor units can be connected.\r\n\r\nIt can be used in main-auxiliary control mode.\r\n\r\n', 'HYXE-F01H', 'مظهر الأزياء مع لوحة الكريستال ومفاتيح\r\n\r\nكبير شاشة لد الخلفية\r\n\r\nماكس 16 وحدات داخلية يمكن توصيل.\r\n\r\nويمكن استخدامه في وضع التحكم الرئيسي المساعدة', 'controller', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1209', 'sa1d5as15d1adasdas214f421016fbc7446735ab33aee0762dfbd80a037asdsdasd'),
(32, 'HYXE-M01H', 'Streamline appearance design, white highlight shell\r\n\r\nLarge LCD screen, humanized operation interface\r\n\r\nTouch key control, easy and convenient\r\n\r\nWhite backlight; operation indicator light\r\n\r\nInfrared remote control is acceptable, realizing two control method: wired control and remote control', 'HYXE-M01H', 'تبسيط تصميم المظهر، وتسليط الضوء الأبيض قذيفة\r\n\r\nشاشة لد كبيرة، واجهة عملية أنسنة\r\n\r\nلمس مفتاح التحكم، سهلة ومريحة\r\n\r\nالخلفية البيضاء؛ ضوء مؤشر التشغيل\r\n\r\nالأشعة تحت الحمراء للتحكم عن بعد هو مقبول، تحقيق اثنين من طريقة التحكم: التحكم السلكية والتحكم عن بعد', 'controller', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1210', 'adasdas214f421016fbc7446735ab33aee0762dfbd80a037asdsdasdsd5a12d5sd51'),
(33, 'HYXE-S01H', 'Half-size design:120 mm×70mm×17mm;\r\n\r\nMax. 16 indoor units connectable ;\r\n\r\nMultiple languages support. (English\\Spanish\\Turkish\\Russian\\Italian\\German\\Dutch)', 'HYXE-S01H', 'نصف-- حجم التصميم: 120 مم و مرات؛ 70mm و مرات؛ 17mm؛\r\n\r\nماكس. 16 وحدات داخلية كونكتابل؛\r\n\r\nدعم لغات متعددة. (الإنجليزية \\ الاسبانية \\ التركية \\ الروسية \\ الايطالي \\ الألمانية \\ الهولندية)', 'controller', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1211', 'adasdas214f421016fbc7446735ab33aee0762dfbd80a037asdsdasdsasd1s51dsa51'),
(34, 'HYE-W01', 'Different colors of common used keys\r\n\r\nWhite backlight, convenient for night operation\r\n\r\nMulti-functional, intelligent and humanized', 'HYE-W01', 'ألوان مختلفة من المفاتيح المستخدمة المشتركة\r\n\r\nالخلفية البيضاء، ومريحة لعملية ليلية\r\n\r\nمتعددة الوظائف، ذكي وأنسنة', 'controller', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1212', 'adasdas214f421016fbc7446735ab33aee0762dfbd80a037asdsdasd15151'),
(35, 'HYE-L01', 'Latest wireless controller with fashionable look.\r\n\r\nNewly extended sleep mode and quiet mode', 'HYE-L01', 'أحدث تحكم لاسلكي مع نظرة عصرية.\r\n\r\nوضع النوم الموسعة حديثا ووضع هادئ', 'controller', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1213', 'adasdas214f421016fbc7446735ab33aee0762dfbd80a037asdsdasd'),
(36, 'Receiver Kit for Wireless Control - Optional', 'Receiver Kit for Wireless Control - Optional', 'Receiver Kit for Wireless Control - Optional', 'Receiver Kit for Wireless Control - Optional', 'controller', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1214', '14f421016fbc7446735ab33aee0762dfbd80a037asdsdasdsdasdwqrfasdfasf'),
(37, 'HYJM-S01H', '7-inch touch screen design\r\n\r\nMaximum 160 history alarm records information\r\n\r\nMultiple languages support. (Chinese, English, Spanish, Turkish, Russian, Italian, German, Dutch)\r\n\r\nRecord accumulated operating time of each indoor unit\r\n\r\nService contact information can be shown and setting\r\n\r\nMax.64 remote control groups and Max 160 indoor units are available', 'HYJM-S01H', '7 بوصة تعمل باللمس تصميم الشاشة\r\n\r\nالحد الأقصى 160 سجل إنذار المعلومات\r\n\r\nدعم لغات متعددة. (الصينية والإنجليزية والإسبانية والتركية والروسية والإيطالية والألمانية والهولندية)\r\n\r\nسجل تراكمت وقت التشغيل من كل وحدة داخلية\r\n\r\nيمكن عرض معلومات الاتصال الخدمة والإعداد\r\n\r\nMax.64 مجموعات التحكم عن بعد و 160 وحدات داخلية ماكس متوفرة', 'controller', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1215', 'asdas14f421016fbc7446735ab33aee0762dfbd80a037asdsdasdsdads'),
(38, 'HYJ-J01H', 'Large size touch-key control design    Slim design with a thickness of 13mm\r\n\r\nIt can control up to 16 wired controller groups，realizing centralized ON/OFF control\r\n\r\nMax.128 indoor units can be connected', 'HYJ-J01H', 'كبيرة الحجم تصميم مفتاح اللمس التي تعمل باللمس تصميم نحيف مع سمك 13MM\r\n\r\nفإنه يمكن السيطرة تصل إلى 16 مجموعات تحكم السلكية، تحقيق مركزية أون / أوف السيطرة\r\n\r\nMax.128 وحدات داخلية يمكن ان تكون مرتبطة', 'controller', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1216', '14f421016fbc7446735ab33aee0762dfbd80a037asdsdasdsdasd'),
(39, 'Hi-Mit', 'ON/OFF control, Operation mode,Temperature setting, Airflow Setting\r\nOperate according to a schedule\r\nDisplay the alarm code\r\noff home mode and energy-saving mode\r\nMax. 32 indoor units can be controlled\r\nDimension: 215*137*38 mm', 'Hi-Mit', 'أون / أوف التحكم، وضع التشغيل، إعداد درجة الحرارة، إعداد تدفق الهواء\r\nتعمل وفقا لجدول زمني\r\nعرض رمز التنبيه\r\nمن وضع المنزل ووضع توفير الطاقة\r\nماكس. 32 وحدات داخلية يمكن السيطرة عليها\r\nالبعد: 215 * 137 * 38 ملم', 'controller', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1217', 'sdads14f421016fbc7446735ab33aee0762dfbd80a037asdsdasd'),
(40, 'HC-A64BNP BACnet', 'Running-state Monitoring / On-off Setting\r\nOperating Mode Setting\r\nTemperature Setting and Monitoring\r\nAirflow Setting and Monitoring\r\nAlarm Monitoring and Code Display\r\nCommunication Failure Display\r\nWireless Controller Permission/Prohibition\r\nIndoor Temp. Monitoring', 'HC-A64BNP BACnet', 'تشغيل حالة الرصد / أون-أوف الإعداد\r\nإعداد وضع التشغيل\r\nضبط درجة الحرارة والرصد\r\nإعداد تدفق الهواء والرصد\r\nرصد التنبيه وعرض الشفرة\r\nفشل عرض الاتصالات\r\nتحكم لاسلكي إذن / حظر\r\nدرجة الحرارة في الأماكن المغلقة. رصد مونيتورينغونينغ الدولة / أون-أوف الإعداد\r\nإعداد وضع التشغيل\r\nضبط درجة الحرارة والرصد\r\nإعداد تدفق الهواء والرصد\r\nرصد التنبيه وعرض الشفرة\r\nفشل عرض الاتصالات\r\nتحكم لاسلكي إذن / حظر\r\nدرجة الحرارة في الأماكن المغلقة. مراقبة', 'controller', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1218', '14f421016fbc7446735ab33aee0762dfbd80a037asdsdasd'),
(41, 'HCPC-H2M1C Modbus', 'On-Off Setting\r\nOperating Mode Setting\r\nAirflow Setting and Monitoring\r\nWind Setting and Monitoring\r\nTemperature Setting\r\nInlet Air Temp. Monitoring\r\nAll Units On/Off Control\r\nAlarm Monitoring and Code Display', 'HCPC-H2M1C Modbus', 'أون-أوف سيتينغ\r\nإعداد وضع التشغيل\r\nإعداد تدفق الهواء والرصد\r\nإعداد الرياح والرصد\r\nتحديد درجة الحرارة\r\nمدخل الهواء تيمب. مراقبة\r\nجميع وحدات تشغيل / إيقاف السيطرة\r\nرصد التنبيه وعرض الشفرة', 'controller', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1219', '14f421016fbc7446735ab33aee0762dfbd80a037asd'),
(42, 'Hi-Dom', 'Hi-Dom air conditioning management system adopts communication bus connection, air conditioning indoor units are connected to the computer through network converter; the system is all controlled automatically by a computer with powerful functions and simple operation. One single computer control system can manage 4,096 indoor units.\r\n\r\n', 'Hi-Dom', 'مرحبا دوم نظام إدارة تكييف الهواء يعتمد اتصال حافلة الاتصال، يتم توصيل وحدات تكييف الهواء في الأماكن المغلقة إلى الكمبيوتر من خلال تحويل الشبكة. يتم التحكم في كل النظام تلقائيا عن طريق جهاز كمبيوتر مع وظائف قوية وعملية بسيطة. ويمكن لنظام واحد للتحكم في الحاسوب أن يدير 4،096 وحدة داخلية.', 'controller', 'http://www.hisense-vrf.com/Product/index.aspx?nodeid=1220', '14f421016fbc7446735ab33aee0762dfbd80a037sdad'),
(43, 'Cars', 'sadasdas', 'سيارات', 'asdasdasd', 'outdoor unit series', 'http://localhost:8000/admin/ads', '14f421016fbc7446735ab33aee0762dfbd80a037');

-- --------------------------------------------------------

--
-- Table structure for table `service_img`
--

CREATE TABLE `service_img` (
  `id` int(11) NOT NULL,
  `url` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_img`
--

INSERT INTO `service_img` (`id`, `url`, `sid`) VALUES
(1, '201712151318522752067.png', 1),
(2, '201712151319417744122.png', 1),
(3, '201712151319549719525.png', 1),
(4, '20171215131993732796.png', 1),
(5, '201712241616404362093.png', 2),
(6, '201712241616558183103.png', 2),
(7, '201712241617135241352.png', 2),
(8, '201712241617295924251.png', 2),
(9, '20171224161852855579.png', 2),
(10, '20171218029259087752.png', 3),
(11, '20171218029544872941.png', 3),
(12, '20171218030555467683.png', 3),
(13, '20171218055455675627.png', 4),
(14, '20171218056217746973.png', 4),
(15, '2017121805638343282.png', 4),
(16, '201712241420267559466.png', 5),
(17, '201712241420396712245.png', 5),
(18, '20171224142051135083.png', 5),
(19, '201712241555302517751.png', 6),
(20, '201712241555483315204.png', 6),
(21, '20171224155622785975.png', 6),
(22, '20171225208121824346.png', 7),
(23, '201712252010294779492.png', 8),
(24, 'p1c2qq7p8qdjf17ig11t2ms81aon4.jpg', 9),
(25, '20171227115012482068.png', 10),
(26, '201712271149285655106.png', 10),
(27, 'p1c2b1e7k016v1drgrn4v8aopm4.png', 10),
(28, '2017122712549259358.jpg', 11),
(29, '2017122521206417209.png', 12),
(30, '20171225214554553184.png', 13),
(31, '201712262253258759577.png', 14),
(32, '201712252115327948752.png', 15),
(33, '201712252158566499802.png', 21),
(34, '201712252037406281409.png', 18),
(35, '201712252118169068339.png', 16),
(36, '20171225212258737725.png', 17),
(37, '201712252127508706545.png', 19),
(38, '20171225213640164680.png', 20),
(39, '2017122522513748223.png', 23),
(40, '20171225221557069013.png', 22),
(46, '201712261034263398275.png', 25),
(47, '201712261034391316793.png', 25),
(48, '201712261031376091549.png', 24),
(49, '201712261031519773402.png', 24),
(50, '2018141528537483546.jpg', 26),
(51, '2018141529102938942.png', 26),
(52, 'p1c3ccl9kk1g21rdej8j17ov1e6j4.png', 26),
(53, '2017122606125483525.png', 28),
(54, '201712252351336108440.png', 27),
(55, '20171226014473811299.png', 29),
(56, '20171226134406384671.jpg', 40),
(57, '2017122613557385354.jpg', 41),
(58, '2017122613546331534.jpg', 42),
(59, '2017122613429798134.jpg', 39),
(60, '20171226131395687527.jpg', 35),
(61, '2017122613137976672.png', 34),
(62, '20171226133353832833.jpg', 38),
(63, 'p1c27bo691qe1eus3homi96vv4.jpg', 37),
(64, '20171226128374542946.jpg', 31),
(65, '2017122611552637333.jpg', 38),
(66, '20171226115526373331.jpg', 32),
(67, '20171226130158586306.jpg', 37),
(68, '201712261326737462.jpg', 36),
(69, '2017122611552637333.jpg', 30),
(70, '20171226130158586306.jpg', 33),
(71, '20171226013324698746.png', 29),
(72, '2017122601375093954.png', 29),
(77, '19 (7).jpg', 43);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_img`
--
ALTER TABLE `project_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_img`
--
ALTER TABLE `service_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sp_id` (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project_img`
--
ALTER TABLE `project_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `service_img`
--
ALTER TABLE `service_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_img`
--
ALTER TABLE `project_img`
  ADD CONSTRAINT `project_img_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_img`
--
ALTER TABLE `service_img`
  ADD CONSTRAINT `service_img_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
