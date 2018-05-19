-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 04:35 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soft`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Motherboard DDR3', '2018-03-12 22:02:50', '2018-05-17 20:45:43'),
(2, 'RAM DDR3', '2018-03-12 22:03:14', '2018-05-17 20:45:03'),
(3, 'Hard Driver Disk', '2018-04-05 09:08:57', '2018-04-05 09:08:57'),
(4, 'Power Supply', '2018-04-05 09:09:26', '2018-04-05 09:29:30'),
(5, 'SSD', '2018-04-05 09:09:31', '2018-04-05 09:09:31'),
(6, 'Graphics Card', '2018-04-05 09:09:50', '2018-04-05 09:09:50'),
(7, 'Processor', '2018-04-05 09:09:57', '2018-04-05 09:09:57'),
(8, 'Catching', '2018-04-05 09:10:10', '2018-04-05 09:20:49'),
(9, 'RAM DDR4', '2018-05-17 20:45:27', '2018-05-17 20:45:27'),
(10, 'MotherBoard DDR4', '2018-05-17 20:46:05', '2018-05-17 20:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `combos`
--

CREATE TABLE `combos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `motherboard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `graphics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hdd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `powersupply` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catching` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `approval` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `combos`
--

INSERT INTO `combos` (`id`, `title`, `description`, `motherboard`, `ram`, `graphics`, `hdd`, `ssd`, `powersupply`, `processor`, `catching`, `price`, `image`, `user_id`, `approval`, `created_at`, `updated_at`) VALUES
(2, 'Antec GX200 Mid Tower Window', 'Designed for entry level gaming builds, the GX200 mid-tower case by Antec sets the standard for fast, economical gaming builds. The rugged exterior styling is accentuated with a front intake grill that optimizes airflow and includes a removable dust filter. Inside, the GX200 boasts a spacious interior, ideal for high performance graphics cards up to 15” (380 mm) in length. The extra-large CPU cutout, routing holes for cable management, and seven expansion slots allow for a versatile, builder-friendly experience. And we’ve included USB 3.0 connectivity on the front panel, for lightning fast data transfer and compatibility with next-gen peripherals. On the top of the case, the convenient storage compartment lets you easily store your accessories and mobile devices. The GX200 gives you the features you want, without losing sight of performance and value.  Being the distributor of this brand Star Tech can ensure you the premium quality at the best price. Order online and get the delivery at any places in Bangladesh.', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 800, '1526739166.jpg', 1, 1, '2018-04-09 08:51:49', '2018-05-19 08:12:46'),
(4, 'Antec VSK4000B-U3 Combo', 'Antec VSK4000B-U3 Value Solution antec VSK4000B U3 Mid-Tower Gaming Casing has an elegant black color that supports Standard ATX, microATX, Mini-ITX motherboards for the flexibility of your choice. This is a reliable enclosure constructed with durable, galvanized steel suitable for experienced system builders. It will keep your components cool by the help of bottom and front side vents, 120 mm rear fan, 120 mm front fan mount and rear water cooling support while meeting Intel® Thermally Advantaged Chassis (TAC) 2.0 guidelines. Moreover, its stylish black front panel is equipped with two USB 3.0 ports, Audio In/Out jacks and other essentials for your home or office needs.  Being the distributor of this brand Star Tech can ensure you the premium quality at the best price. Our online delivery can reach you at any places in Bangladesh.', 'yes', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'no', 700, '1526738275.jpg', 1, 1, '2018-05-19 07:55:48', '2018-05-19 08:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_03_152311_create_products_table', 2),
(4, '2018_03_13_032101_create_categories_table', 3),
(5, '2018_03_13_042953_add_category_id_to_products_table', 4),
(6, '2018_03_13_051954_add_admin_to_user_table', 5),
(7, '2018_03_31_175832_create_orders_table', 6),
(8, '2018_04_03_024501_add_user_id_to_products_table', 7),
(9, '2018_04_09_110018_create_combos_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `zip` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `full_name`, `address`, `city`, `phone`, `zip`, `qty`, `tax`, `subtotal`, `total`, `status`, `title`, `image`, `size`, `created_at`, `updated_at`) VALUES
(1, 1, 'AL-AKHIR NAYAN', 'fffffff', 'Dhaka', 1798397640, 12456, 1, 150, 1000, 1150, 1, 'Antec VSK3000 ELITE Micro ATX Case', '1522941620.jpg', 'S', '2018-04-09 02:13:30', '2018-04-09 02:18:43'),
(2, 1, 'AL-AKHIR NAYAN', 'fhsdhsfhserh', 'hshe', 1998050786, 12456, 2, 300, 2000, 2300, 1, 'Antec VSK3000 ELITE Micro ATX Case', '1522941620.jpg', 'S', '2018-04-09 02:15:59', '2018-04-10 03:07:59'),
(3, 1, 'AL-AKHIR NAYAN', 'rhahgvoa', 'aodgajga', 1998050786, 123456, 1, 150, 1000, 1150, 1, 'Max Green 500 Watt power supply', '1522942241.JPG', 'S', '2018-04-09 02:17:54', '2018-05-18 08:07:24'),
(4, 1, 'AL-AKHIR NAYAN', 'rhahgvoa', 'aodgajga', 1998050786, 123456, 1, 150, 1000, 1150, 0, 'Adata SU 650 120 GB Solid State Drive', '1522942070.jpg', 'S', '2018-04-09 02:17:54', '2018-04-09 02:17:54'),
(5, 1, 'AL-AKHIR NAYAN', 'dhakaaaa', 'dhaka', 1798397640, 1235, 1, 750, 5000, 5750, 0, 'ASUS PRIME Z370-P LGA1151', '1522941348.png', 'S', '2018-04-10 03:01:17', '2018-04-10 03:01:17'),
(6, 3, 'akhir', 'arefhsh', 'fsdhsn', 1798397640, 42424, 1, 15, 100, 115, 1, 'Adata 4GB DDR4 2400MHz Premier Series Ram', '1522941820.png', 'S', '2018-04-28 08:23:46', '2018-05-18 08:03:44'),
(7, 3, 'akhir', 'dagagd', 'agdsge', 1798397640, 42424, 1, 15, 100, 115, 0, 'Adata 4GB DDR4 2400MHz Premier Series Ram', '1522941820.png', 'S', '2018-05-18 07:33:55', '2018-05-18 07:33:55'),
(8, 3, 'akhir', 'uyutguvhv', 'dhanmondi', 1998050786, 42424, 1, 15, 100, 115, 0, 'Adata 4GB DDR4 2400MHz Premier Series Ram', '1522941820.png', 'S', '2018-05-19 02:19:40', '2018-05-19 02:19:40'),
(9, 3, 'akhir', 'uyutguvhv', 'dhanmondi', 1998050786, 42424, 1, 15, 100, 115, 0, 'Adata 4GB DDR4 2400MHz Premier Series Ram', '1522941820.png', 'S', '2018-05-19 02:19:46', '2018-05-19 02:19:46'),
(10, 3, 'akhir', 'dasg', 'agd', 1798397640, 42424, 1, 150, 1000, 1150, 0, 'Antec VSK3000 ELITE Micro ATX Case', '1522941620.jpg', 'S', '2018-05-19 07:13:29', '2018-05-19 07:13:29'),
(11, 3, 'akhir', 'fadnvdxn', 'dhanmondib', 1798397640, 42424, 1, 75, 500, 575, 0, 'Adata XPG DDR4 4GB 2400 MHz RAM', '1526738354.jpg', 'S', '2018-05-19 08:10:01', '2018-05-19 08:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `image`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(9, 'ASUS PRIME Z370-P LGA1151', 'Chipset	Intel® Z370 Supported Processors	Intel® Socket 1151 for 8th Generation Core™ Processors  Supports Intel® 14 nm CPU Supports Intel® Turbo Boost Technology 2.0 Max Memory	4 x DIMM, Max. 64GB, DDR4 4000(O.C.)/3866(O.C.)/3733(O.C.)/3600(O.C.)/3466(O.C.)/3400(O.C.) /3333(O.C.)/3300(O.C.)/3200(O.C.)/3000(O.C.)/2800(O.C.) /2666/2400/2133 MHz Non-ECC, Un-buffered Memory * Dual Channel Memory Architecture  Supports Intel® Extreme Memory Profile (XMP) Onboard Video	Integrated Graphics Processor- Intel® HD Graphics support  Multi-VGA output support : HDMI/DVI-D ports  - Supports HDMI 1.4b with max. resolution 4096 x 2160 @ 24 Hz / 2560 x 1600 @ 60 Hz - Supports DVI-D with max. resolution 1920 x 1200 @ 60 Hz Maximum shared memory of 1024 MB Onboard Audio	Realtek® ALC887 8-Channel High Definition Audio CODEC  - Supports : Jack-detection, Front Panel Jack-retasking Audio Feature : - LED-illuminated design - Brighten up your build with the gorgeous illuminated audio trace path. - Audio Shielding: Ensures precision analog/digital separation and greatly reduced multi-lateral interference - Dedicated audio PCB layers: Separate layers for left and right channels to guard the quality of the sensitive audio signals - Premium Japanese audio capacitors: Provide warm, natural and immersive sound with exceptional clarity and fidelity Onboard LAN	Realtek® RTL8111H, 1 x Gigabit LAN Controller(s) ASUS LAN Guard Warranty', 700, '1522941348.png', 1, 1, '2018-04-05 09:15:48', '2018-05-19 08:18:50'),
(10, 'Antec VSK3000 ELITE Micro ATX Case', 'Case Type Type	Micro-ATX Motherboard Support	micro-ATX, mini-ITX External Features Color(s)	Black Weight	- Net Weight 7.5 lbs | - Gross Weight 8.8 lbs | Dimensions	373 mm (H) x 180 mm (W) x 410 mm (D) Front Ports	2 x USB 3.0 - Audio In/Out Expansion Slots	4 expansion slots Additional Feature Cooling System	1 x 120 mm rear exhaust fan | 1 x 80 mm or 1 x 120 mm front intake fan (optional) | Left side panel: 2 x 120 mm fan (optional) | AFFORDABLE BUILDER-FRIENDLY CASE Building a system starts with buying a case, then comes the parts that goes into it, which the cost can add up very quickly. The VSK3000 Elite is here to provide the basic platform to start building your very own system. Its humble design and practical functionality contains the fundamentals for a PC in your business or home office. COOLING AND FUNCTIONALITY Thermally Advantaged Chassis (TAC) 2.0 compliant panel with Chassis Air Guide allows air to flow directly in the path of the CPU fan and heat sink. In addition, the stylish black front panel is equipped with two USB 3.0 ports, Audio In/Out jacks and other computing essentials. CONSTRUCTION The VSK3000 Elite is constructed to be a versatile case that is easy to work with. The VSK3000 Elite supports up to micro-ATX motherboards and has four expansion slots and ample room for hard drives, all while having space to accommodate VGA cards up to 13 inches (335 mm). If you’re looking for a simple, reliable case that won’t break the bank, the VSK3000 Elite fits the bill.', 850, '1522941620.jpg', 1, 8, '2018-04-05 09:20:20', '2018-05-19 08:19:10'),
(11, 'Intel 8th Generation Core i3-8100 Processor', 'Processor Type	Intel® Core™ i3-8100 Processor (6M Cache, 3.60 GHz ) Processor Speed	3.60 GHz Number Of Cores	4 Number Of Threads	4 Processor Cache	6 MB Intel 8th Generation Core i3-8100 Processor  Processor Base Frequency- 3.60 GHz Cache- 6 MB Bus Speed- 8 GT/s DMI3 Graphics Base Frequency- 350 MHz Code Name- Products formerly Coffee Lake Max Memory Size (dependent on memory type)- 64 GB Memory Types- DDR4-2400 Max Number of Memory Channels- 2', 1500, '1522941746.jpg', 1, 7, '2018-04-05 09:22:26', '2018-05-19 08:19:47'),
(12, 'Adata 4GB DDR4 2400MHz Premier Series Ram', 'Adata 4GB DDR4 2400MHz Premier Series Ram Memory type: DDR4 Internal memory: 4 GB Memory clock speed: 2400 MHz Form Factor: standard 1.23\" height Memory voltage: 1.2 V Memory form factor: 288-pin DIMM Operating temperature: 0°C to 85°C', 100, '1522941820.png', 1, 2, '2018-04-05 09:23:40', '2018-04-05 09:35:31'),
(13, 'Gigabyte GT 1030 2GB OC Graphics card', 'Memory Size	2GB Graphics Engine	GeForce® GT 1030 Core Clock	Boost: 1544 MHz/ Base: 1290 MHz in OC Mode  Boost: 1518 MHz/ Base: 1265 MHz in Gaming Mode Memory Type	GDDR5 Memory Clock	6008 MHz Warranty	2 Years Gigabyte GT 1030 2GB OC Graphics card Features Powered by GeForce® GT 1030  Integrated with 2GB GDDR5 64bit memory  Supports HDMI 4K@60Hz  Smooth 4K video playback and HTML5 web browsing One-click overclocking via AORUS Graphics Engine Core Clock Boost: 1544 MHz/ Base: 1290 MHz in OC Mode Boost: 1518 MHz/ Base: 1265 MHz in Gaming Mode', 1000, '1522941919.png', 1, 6, '2018-04-05 09:25:19', '2018-05-19 08:20:01'),
(14, 'Adata SU 650 120 GB Solid State Drive', 'Adata SU 650 120 GB Solid State Drive The Ultimate SU650 solid state drive implements 3D NAND Flash and a high speed controller, offering capacities up to 480GB. It delivers read/write performance up to 520/450MB/s and greater reliability than 2D NAND SSDs. The SU650 features SLC caching and advanced error correction technologies to ensure optimized data performance and integrity. For those who want to experience a clear PC upgrade, the SU650 is an excellent choice with a great cost-performance ratio. 3D NAND in an easy PC upgrade With 3D NAND Flash, the SU650 features higher efficiency and increased reliability compared to 2D NAND SSDs with an improved cost-performance ratio. Faster performance The intelligent SLC caching algorithm allows NAND Flash memory to operate in single-level cell mode and boosts performance, helping sustain peak SU650 read/write speeds up to 520/450MB per second for smoother and faster boot, file transfers, and downloads. Advanced error correction code With the support for ECC (error correction code) technology, the SU650 can detect and fix errors to ensure data integrity and help to extend SSD lifespan Its MTBF (mean time between failures) is up to 2 million hours, or 25% more than 2D NAND SSDs. Tougher , quieter , and more reliable There\'s no mechanical component inside SSDs, so they outperform traditional HDDs with higher resistance to shock, vibration (1500G/0.5ms) and extreme temperatures (0°C-70°C). They are also completely silent and consume very little power, all while better protecting your data. For notebooks and desktops Just 7mm thick, the SU650 is an easy fit in ultrabooks. A 2.5mm spacer is bundled for use in 9.5mm drive bays, allowing compatibility with virtually every notebook, desktop, and console.', 700, '1522942070.jpg', 1, 5, '2018-04-05 09:27:50', '2018-05-19 08:20:42'),
(15, 'Toshiba 1TB Sata Desktop Hard Disk', 'Buffer size	32 MByte Non-operating (Maximum)	350 G, with 2 ms half sine wave Single track seek time (read)	0.6 ms Single track seek time (write)	0.8 ms Supported interface standards	ATA-8 Serial ATA 3.0 Internal or External	Internal Capacity (GB)	1000 GB RPM	7200', 1500, '1522942130.jpg', 1, 3, '2018-04-05 09:28:50', '2018-04-05 09:28:50'),
(16, 'Max Green 500 Watt power supply', 'Max Green 500 Watt power supply  Input Voltage 110v/230v, current 10A/5A  frequency 50Hz/60Hz  Do not remove this cover.Select the right voltage.', 500, '1522942241.JPG', 1, 4, '2018-04-05 09:30:41', '2018-05-19 08:20:17'),
(17, 'GIGABYTE GA-H81M-S2PV', 'Chipset	Intel® H81 Express Chipset Supported Processors	Support for Intel® Core™ i7 processors/Intel® Core™ i5 processors/Intel® Core™ i3 processors/Intel® Pentium® processors/Intel® Celeron® processors in the LGA1150 package L3 cache varies with CPU Max Memory	2 x 1.5V DDR3 DIMM sockets supporting up to 16 GB of system memory Support for Intel® Core™ i7 processors/Intel® Core™ i5 processors/Intel® Core™ i3 processors/Intel® Pentium® processors/Intel® Celeron® processors in the LGA1150 package L3 cache varies with CPU Onboard Video	1 x D-Sub port, supporting a maximum resolution of 1920x1200 1 x DVI-D port, supporting a maximum resolution of 1920x1200 * The DVI-D port does not support D-Sub connection by adapter. Maximum shared memory of 1 GB Onboard Audio	Realtek® ALC887 codec High Definition Audio 2/4/5.1/7.1-channel Onboard LAN	Realtek® GbE LAN chip (10/100/1000 Mbit)', 750, '1522996993.jpg', 1, 1, '2018-04-06 00:43:13', '2018-05-19 08:19:33'),
(18, 'Samsung T5 Portable USB 3.1 500GB External SSD', 'Key Features Capacity	500 GB Flash Type	AES 256-bit hardware encryption Interface	Compatible with USB 3.1 Gen 2 (10Gbps), backwards compatible Sequential R/W	540 MB/s Physical Specification Dimension (L x W x H)	2.91\" x 2.26\" x 0.41\" Weight	1.80oz Warranty Manufacturing Warranty	03 years warranty Samsung T5 Portable USB 3.1 500GB External SSD Superfast Read-Write speeds of up to 540 MB/s Top to bottom metal design that fits in the palm of your hand Optional password protection and AES 256-bit hardware encryption Includes USB Type C to C and USB Type C to A cables', 1500, '1522997229.jpg', 3, 5, '2018-04-06 00:47:09', '2018-04-06 00:47:09'),
(19, 'Adata XPG DDR4 4GB 2400 MHz RAM', 'Adata XPG DDR4-2400 Mhz Red colored memory specially designed to perform under the extreme gaming overclocking condition with better power efficiency. In comparison of DDR3 memory, it consumes 1.2V that means 20% less power in high clock frequency of 2400MHz for overclockers. Considering the material its Thermal Conductive Technology and 10-layer PCB with 2oz of copper keeps it cool and its high-quality chips provides stability and durability.  Buy quality Adata RAM at best price in Chittagong, Rangpur, Sylhet, & Dhaka. Order online from anywhere in the country and have the delivery at your desired location.', 500, '1526738354.jpg', 3, 9, '2018-05-18 08:09:36', '2018-05-19 07:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AL-AKHIR NAYAN', 'alakhirnayan@gmail.com', 1, '$2y$10$V6rxAQ1q.V/e8H4A5ppMaO9/YEXyBNEmSU97j1y2abwOWhHW8Wxxm', 'p8eajjXu0LdT5DJB2hrT5SPk74giWJ1kU18m3oICz9VsEIxtF66SvFEM99HW', '2018-03-12 23:33:44', '2018-03-12 23:33:44'),
(3, 'akhir', 'alakhirnayan@hotmail.com', 0, '$2y$10$DmuBk73Zg6wbUOdfAbZtauTx5l8BU6VGU43sgH5dk9pIdrSW1Hijy', 'MfT0kg2hb2rlGrQAbNOFTtAMchqO7Y37Z1Ir4FWfYQBg6nSEfiFbBZglvIPo', '2018-04-02 22:13:46', '2018-04-02 22:13:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combos`
--
ALTER TABLE `combos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `combos`
--
ALTER TABLE `combos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
