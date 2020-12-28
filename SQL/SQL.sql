-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 06:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenleaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `Email_Id` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `phone`, `Email_Id`, `password`) VALUES
(1, 'Cooper', '0703959145', 'Admin@gmail.com', '4b0d2b146577fda6c148eb6100c12b3c');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(39, '::1', 0),
(41, '::1', 0),
(42, '::1', 0),
(44, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Flowers'),
(2, 'Herbs'),
(3, 'Trees'),
(4, 'Fruits'),
(5, 'Vegetables');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(20) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `County` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Contacts` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `FirstName`, `LastName`, `County`, `Subject`, `Message`, `Contacts`) VALUES
(1, 'susan', 'monicah', 'Nairobi', 'Delivery Info', 'What a quick delivery....And i realy loved the checkout process', '078976543'),
(2, 'Donald', 'Kibet', 'Uasin Gishu', 'Orders', 'Am enquiring about my orders because i did not get my shipment delivered', '07483647'),
(3, 'gh', 'vsvscs', 'scsc', '', 'scc', '023655'),
(4, 'Truth', '.Com', 'Uasin Gishu', 'Confirmation', 'RECEIVED', '070094394');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `Email_id` varchar(20) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `station` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`firstname`, `lastname`, `Email_id`, `phonenumber`, `address`, `station`) VALUES
('dfgb', 'rtgtrgv', 'awdfb@gmail.com', '0712546333', '4c4c4cc', 'Nairobi'),
('Dona', 'kib', 'don@gmail.com', '072536542', '1530', 'Machakos'),
('Donald', 'Kibet', 'kibetdonald97@gmail.', '0703959145', 'Eldoret 1607', 'Eldoret'),
('Kevin', 'KIrwa', 'kirwa@gmail.com', '0725623122', 'Machakos 170', 'Nairobi');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `product_id`, `qty`, `order_date`, `order_status`) VALUES
(1, 47, 1140, 1039401523, '52', 38, '2020-01-05', 'pending'),
(2, 47, 360, 1870829509, '42', 36, '2020-01-05', 'pending'),
(3, 47, 390, 1815527890, '44', 39, '2020-01-15', 'pending'),
(4, 47, 585, 1815527890, '46', 39, '2020-01-25', 'pending'),
(5, 47, 9600, 1170617816, '41', 48, '2020-01-28', 'pending'),
(6, 47, 480, 1170617816, '42', 48, '2020-01-30', 'pending'),
(7, 50, 1350, 1456322667, '39', 27, '2020-02-01', 'pending'),
(8, 50, 340, 1691153855, '42', 34, '2020-02-03', 'pending'),
(9, 52, 950, 1432303913, '47', 19, '2020-02-08', 'pending'),
(10, 52, 380, 1432303913, '49', 19, '2020-02-10', 'pending'),
(11, 52, 570, 1432303913, '52', 19, '2020-02-12', 'pending'),
(12, 52, 250, 1225108164, '47', 5, '2020-02-16', 'pending'),
(13, 52, 150, 174914739, '52', 5, '2020-02-25', 'pending'),
(14, 52, 500, 174914739, '52', 5, '2020-02-29', 'pending'),
(15, 52, 100, 691146327, '47', 10, '2020-03-05', 'pending'),
(16, 47, 1400, 1979173887, '55', 28, '2020-03-06', 'pending'),
(17, 47, 1080, 1226088518, '35', 9, '2020-03-06', 'pending'),
(18, 47, 270, 1226088518, '52', 9, '2020-04-06', 'COMPLETE'),
(19, 52, 750, 1874349964, '46', 50, '2020-04-08', 'pending'),
(20, 59, 1350, 144806836, '59', 45, '2020-04-10', 'Complete'),
(21, 59, 2500, 2117119492, '50', 50, '2020-04-10', 'pending'),
(22, 59, 600, 1341153446, '41', 3, '2020-03-10', 'pending'),
(23, 59, 80, 1247170237, '45', 4, '2020-03-10', 'pending'),
(24, 52, 400, 1972041986, '71', 5, '2020-03-10', 'pending'),
(26, 60, 1440, 38216224, '52', 48, '2020-03-11', 'pending'),
(27, 52, 140, 1303452673, '45', 7, '2020-03-11', 'pending'),
(28, 59, 1000, 1385764577, '39', 20, '2020-03-11', 'pending'),
(29, 52, 800, 1832238637, '41', 4, '2020-03-11', 'pending'),
(30, 52, 400, 1595232705, '45', 20, '2020-03-11', 'pending'),
(32, 47, 100, 1829418551, '44', 10, '2020-03-11', 'pending'),
(33, 61, 40, 1665850501, '49', 2, '2020-03-11', 'pending'),
(34, 52, 50, 831208919, '42', 5, '2020-03-12', 'pending'),
(35, 52, 500, 831208919, '55', 5, '2020-03-12', 'pending'),
(36, 59, 40, 134929502, '45', 2, '2020-03-12', 'pending'),
(37, 59, 45, 715225139, '46', 3, '2020-03-12', 'pending'),
(38, 47, 200, 333219433, '48', 20, '2020-03-13', 'pending'),
(39, 47, 1100, 455920733, '55', 11, '2020-03-13', 'pending'),
(40, 47, 150, 1754588503, '39', 3, '2020-03-13', 'pending'),
(41, 59, 30, 1172862093, '42', 3, '2020-03-15', 'pending'),
(42, 59, 150, 1172862093, '47', 3, '2020-03-15', 'pending'),
(43, 52, 45, 856537178, '46', 3, '2020-03-16', 'pending'),
(44, 52, 300, 856537178, '58', 3, '2020-03-16', 'pending'),
(57, 47, 5880, 1565880838, '35', 49, '2020-03-18', 'pending'),
(58, 47, 60, 884440858, '42', 6, '2020-03-19', 'pending'),
(59, 62, 45, 1086730508, '46', 3, '2020-03-19', 'pending'),
(60, 62, 50, 612317634, '42', 5, '2020-03-19', 'pending'),
(61, 47, 0, 1186323995, '41', 0, '2020-03-19', 'pending'),
(62, 47, 0, 1186323995, '42', 0, '2020-03-19', 'pending'),
(63, 47, 0, 1186323995, '45', 0, '2020-03-19', 'pending'),
(64, 47, 0, 1186323995, '47', 0, '2020-03-19', 'pending'),
(65, 47, 300, 143736866, '44', 30, '2020-03-20', 'pending'),
(66, 47, 2000, 2025899957, '41', 10, '2020-03-20', 'pending'),
(67, 47, 2000, 1499104342, '41', 10, '2020-03-20', 'pending'),
(68, 47, 100, 95285005, '42', 10, '2020-09-20', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `farmer_id` int(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `Email_Id` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`farmer_id`, `username`, `phone`, `Email_Id`, `password`) VALUES
(1, 'Sarah', '0722563895', 'fam@gmail.com', '78ae67a9b8dec853ca37dd0c05976e1f'),
(2, 'Jeff', '070245556333', 'jeff@gmail.com', '72719a4b858009fff3391475e0d00aa1'),
(5, 'Goodwill', '07145898667', 'goodwill@gmail.com', 'aaf0916d9b2785841e98867be2d33e3a'),
(9, 'Henry', '0723145263', 'Henry@gmail.com', '59e71bf22401656a135d8c4a9a8529ed'),
(42, 'Luna', '070245556333', 'luna@gmail.com', '5b447f00509109666809ef7955671cc3');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_payments`
--

CREATE TABLE `mobile_payments` (
  `transLoID` int(11) NOT NULL,
  `TransactionType` varchar(10) NOT NULL,
  `TransID` varchar(10) NOT NULL,
  `TransTime` varchar(14) NOT NULL,
  `TransAmount` varchar(6) NOT NULL,
  `BusinessShortCode` varchar(6) NOT NULL,
  `BillRefNumber` varchar(6) NOT NULL,
  `InvoiceNumber` varchar(6) NOT NULL,
  `OrgAccountBalance` varchar(10) NOT NULL,
  `ThirdPartyTransID` varchar(10) NOT NULL,
  `MSISDN` varchar(14) NOT NULL,
  `FirstName` varchar(10) DEFAULT NULL,
  `MiddleName` varchar(10) DEFAULT NULL,
  `LastName` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(20) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `order_status`) VALUES
(1, 52, 1595232705, '45', 20, 'pending'),
(2, 47, 93006517, '52', 2, 'pending'),
(3, 47, 1829418551, '44', 10, 'pending'),
(4, 61, 1665850501, '49', 2, 'pending'),
(5, 52, 831208919, '42', 5, 'pending'),
(6, 52, 831208919, '55', 5, 'pending'),
(7, 59, 134929502, '45', 2, 'pending'),
(8, 59, 715225139, '46', 3, 'pending'),
(9, 47, 333219433, '48', 20, 'pending'),
(10, 47, 455920733, '55', 11, 'pending'),
(11, 47, 1754588503, '39', 3, 'pending'),
(12, 59, 1172862093, '42', 3, 'pending'),
(13, 59, 1172862093, '47', 3, 'pending'),
(14, 52, 856537178, '46', 3, 'pending'),
(15, 52, 856537178, '58', 3, 'pending'),
(27, 62, 998127135, '35', 4, 'pending'),
(28, 47, 1565880838, '35', 49, 'pending'),
(29, 47, 884440858, '42', 6, 'pending'),
(30, 62, 1086730508, '46', 3, 'pending'),
(31, 62, 612317634, '42', 5, 'pending'),
(32, 47, 1186323995, '41', 0, 'pending'),
(33, 47, 1186323995, '42', 0, 'pending'),
(34, 47, 1186323995, '45', 0, 'pending'),
(35, 47, 1186323995, '47', 0, 'pending'),
(36, 47, 143736866, '44', 30, 'pending'),
(37, 47, 2025899957, '41', 10, 'pending'),
(38, 47, 1499104342, '41', 10, 'pending'),
(39, 47, 95285005, '42', 10, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prd_id` int(100) NOT NULL,
  `prd_cat` int(100) NOT NULL,
  `prd_variety` int(100) NOT NULL,
  `prd_title` varchar(255) NOT NULL,
  `prd_price` int(100) NOT NULL,
  `prd_desc` text NOT NULL,
  `prd_img` text NOT NULL,
  `prd_keyword` text NOT NULL,
  `prd_quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prd_id`, `prd_cat`, `prd_variety`, `prd_title`, `prd_price`, `prd_desc`, `prd_img`, `prd_keyword`, `prd_quantity`) VALUES
(35, 4, 4, 'Grafted Purple passion', 120, '<ul><li>Grafted purple passion are pest and disease resistant.</li><li>They have a long lifespan of more than 6 years.</li><li>They have a short maturity period of 8 months unlike the ungrafted ones.</li></ul>', 'Grafted Purple passion.jpg', 'Passion', 200),
(39, 5, 4, 'Arrow root', 50, '<ul>  <li> is a perennial plant growing to a height of between 0.3 m (1 ft) and 1.5 m (5 ft)</li>  <li> Its leaves are lanceolate. The edible part of the plant is the rhizome.</li>  <li>Twin clusters of small white flowers bloom about 90 days after planting.</li></ul>', 'arrow root (2).jpg', 'Arrow root', 15),
(41, 1, 2, 'Royal palms', 200, '<ul>  <li>Royal palm trees can grow to 125 feet tall at maturity</li>  <li>There are 15 to 20 fronds making up the canopy or crown of the palm.</li>  <li>There are 15 to 20 fronds making up the canopy or crown of the palm.</li></ul>', 'IMG_20200209_150327_1.jpg', 'Royal palms', 63),
(42, 1, 2, 'Yellow Iris', 10, '<ul>  <li>Iris pseudacorus is a perennial, emergent aquatic plant</li>  <li>At maturity, I. pseudacorus grows to a height of 0.40-1.5 meters (1.3-4.9 ft) tall. </li>  <li>Broad, sword-shaped leaves are stiff, erect and glaucous.</li></ul>', 'IMG_20200209_150648_5.jpg', 'Yellow iris', 77),
(44, 5, 4, 'Spinach', 10, 'It needs 6 weeks of cool weather from seed sowing to harvest. Spinach grows best when planted outdoors in early spring and then again in autumn. In mild-winter regions grow spinach outdoors in winter.', 'spinach.jpg', 'Spinach', 65),
(45, 3, 6, 'Ponderosa pine', 20, 'an evergreen tree narrow, upright, oval form in youth opens up into an irregular crown 50\' to 80\' tall 30\' wide fine to medium texture fast growth rate', 'Bottle Brush.jpg', 'pine', 40),
(46, 3, 6, 'Grevillea', 15, '<ul><li>It is a fast-growing evergreen tree with a single main trunk, growing to 5-40 m (20-100 ft) tall.  </li><li> When young, it can be grown as a houseplant where it can tolerate light shade, but it prefers full sun because it grows best in warm zones. </li><li> It needs occasional water but is otherwise fairly drought-resistant. Care needs to be taken when planting it near bushland because it can be invasive. </li><li> It is used for external window joinery, as it is resistant to wood rot. It is used in the manufacture of furniture, cabinetry, and fences.  </li></ul>', 'Gravelia.jpg', 'Grevillea', 136),
(47, 4, 1, 'Grafted Ovacado', 50, '<ul><li>Harvesting avocados Grafted trees usually start to flourish and bear fruit 3 to 4 years after they have been planted in the field</li><li>Avocados do not like poorly drained, heavy soils and flooding or high water tables, and they will also not tolerate salty or very acidic conditions.</li><li>The most favourable planting time is at the beginning of the rainy season. </li><li>Spacing between trees lies between 6 and 10 m, depending on soil fertility, climate, and variety.</li></ul>', 'Ovacado.jpg', 'Ovacado', 45),
(48, 5, 4, 'Kales', 10, 'Kale is very high in beta carotene , vitamin K , vitamin C , lutein , zeaxanthin , roughage and reasonably rich in iron and calcium . The leaves are widely utilized mainly alone or in mixture with other vegetables, meat and pulses.Prefers well-drained, fertile soil high in organic matter, pH 6.0 to 7.5. Can tolerate slightly alkaline soil. Prefers plentiful, consistent moisture. Can tolerate drought, but quality and flavor of leaves suffer. As plants mature and lower leaves are harvested, plants begin to look less like a clump and start to resemble small palm trees with a cluster of leaves at the top of a long stem.', 'Sumuka wiki.jpg', 'kales', 90),
(49, 3, 5, 'Blue Gum', 20, 'The Grevillea .spp may be propagated by use of wildings or seedlings.  Pollarding, lopping, coppicing and pruning optimizes their benefits if used in their management. Note; Only young trees coppice well Maturity takes 6 yrs for poles and 30 yrs for timber', 'Blue Gum.jpg', 'Blue Gum', 39),
(50, 1, 2, 'Saw palmetto', 50, '<ul><li>Palmetto is a tree.Its ripe fruit is used to make medicine.    </li><li>  Palmetto will grow to be about 8 feet tall at maturity, with a spread of 10 feet.   </li><li>   It has a low canopy with a typical clearance of 1 foot from the ground, and is suitable for planting under power lines   </li><li>  It grows at a slow rate, and under ideal conditions can be expected to live for 50 years or more.   </li></ul>', 'Saw palmetto.jpg', 'Saw palmetto', 30),
(52, 3, 4, 'Coffee seedlings', 30, '<ul><li> These are the best type of coffee for a farmer to plant because it takes less space and take a period of 2 years to start harvesting.</li><li>Resistant to pests and disease unlike other brands of coffee. </li><li>At 4 years of  maturity a stem can yield on average 40kg if well nurtured.  </li></ul>', 'coffee.jpg', 'Coffee seedlings', 9),
(53, 4, 1, 'Grafted Macadamia', 200, '<ul><li> Grafted macadamia seedlings</li><li>  licensed by kephis to practice grafting and scion selection</li><li> takes a duration of 3-5 years to mature. </li><li>-yield production ranging 70-150kg per tree.(average of 100kg)</li></ul>', 'Brazilian Cherry.jpg', 'Grafted Macadamia', 19),
(54, 2, 4, 'Ginger', 130, '<ul>\r\n<li>Healthy ginger seeds and seedlings at affordable prices.</li>\r\n<li>is a perennial plant with spear-like leaves and unremarkable yellow flowers  </li>\r\n<li> deal air temperature for growing ginger is 77Â° F with humidity. </li>\r\n<li> Ginger can be harvested over time, beginning at 3 to 4 months after planting.  </li>\r\n</ul>', 'ginger.jpg', 'Ginger', 79),
(55, 4, 4, 'Guava', 100, '<ul>\r\n<li>Guava is a small indigenous plant in the American tropic  </li>\r\n<li>Guava grows to a height upto 26 feet </li>\r\n<li>Time period between flowering and  ripening of the fruit is 20-28 weeks depending on when it was pruned   </li>\r\n<li>Tree produces from 50 to 80 pounds of fruits </li>\r\n\r\n\r\n</ul>', 'guava.jpg', 'Guava', 43),
(57, 4, 1, 'Grafted Mango', 90, '<ul><li> Grafted trees usually produce fruit in 3 to 5 years in dry areas, while seedling trees usually take at least five years to come into bearing. </li><li>Grafted mango trees can remain in production for 40 years or more.</li></ul>', 'Grafted Mango.jpg', 'Grafted Mango', 97),
(58, 3, 6, 'Bamboo', 100, '<ul><li>Its is one of the fastest-growing plants in the world due to a unique rhizome-dependent system  </li><li>Bamboo species are native to warm and moist tropical and to warm temperate climates.</li><li>Largest timber bamboo can grow over 30 m (98 ft) tall, and be as large as 250Ã¢â‚¬â€œ300 mm (10-12 in) in diameter.  </li></ul>', 'Bamboo seedlings.jpg', 'Bamboo', 60),
(59, 4, 2, 'Strawberry Seedlings', 30, '<ul>\r\n<li>Strawberry plants are a wonderful forb.  </li>\r\n<li> he growth cycle of strawberry plants spans the entire year and repeats annually. </li>\r\n<li>Once the plants have matured, they are ready to multiply and expand. The do this by means of the runner plants that have already been mentioned. The runners (stolons) are usually between 8 and 18 inches long, depending on the strawberry variety.   </li>\r\n\r\n</ul>', 'Strawberries.jpg', 'Strawberry', 110),
(68, 5, 4, 'Tomato', 15, 'Tomato seeds are commonly planted indoors as early as 8 to 6 weeks before the average date of the last spring frost.Tomato seedlings are usually transplanted into the garden 1 to 3 weeks after the last frost. If an unexpected frost threatens, transplants must be covered and protected.Early-season tomatoes require 50 to 60 days to reach harvest from transplanting; mid-season tomatoes require 60 to 80 days; late-season tomatoes require 80 or more days.', 'tomato.jpg', 'Tomato', 150),
(71, 4, 4, 'Coconut', 80, 'Its a very tall tree with a very hard shell fruit and mainly grows along the coastal regions', 'Coconut.jpg', 'Coconut', 44);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subscription_id` int(20) NOT NULL,
  `Email_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`subscription_id`, `Email_id`) VALUES
(3, ''),
(4, ''),
(5, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `customer_id` int(3) NOT NULL,
  `firstname` varchar(70) NOT NULL,
  `lastname` varchar(70) NOT NULL,
  `gender` varchar(70) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`customer_id`, `firstname`, `lastname`, `gender`, `contact_no`, `Email_id`, `password`) VALUES
(47, 'John', 'Doe', 'male', '0703959145', 'johndoe@gmail.com', 'd23949a122499d1209be9a00deec30b5'),
(48, 'sean', 'shaun', 'male', '0702055332', 'shaun@yahoo.com', '9238afd6216857d35ba9368450655490'),
(49, 'sean', 'shaun', 'male', '0702055332', 'd@yahoo.com', 'd23949a122499d1209be9a00deec30b5'),
(50, 'Kevin', 'Kirwa', 'male', '070105565', 'kevinkirwa@gmail.com', 'd264c460b375258f2fc6541a3561e85a'),
(52, 'Donald', 'Kibet', 'male', '254703959145', 'kibetdonald97@gmail.com', 'f6699234bd728b7dcf9e66bce9c33852'),
(58, 'fgffffg', 'gffcgcgf', 'male', '070105565', 'donald97@gmail.com', '202cb962ac59075b964b07152d234b70'),
(59, 'Doreen', 'Wanjiku', 'female', '070251445', 'wanjiku@gmail.com', 'd1ee98e296e3af8b76471475581826ba'),
(60, 'hahah', 'hehe', 'male', '012335555', 'kibet@gmail.com', '914aed51c83f3356509f17fd1d6baa62'),
(61, 'Paulyne', 'Alayne', 'female', '0703256455', 'alyne@gmail.com', '3b153b77e216d979df05cec1e4039140'),
(62, 'Salome', 'Cherop', 'female', '0703256455', 'salome@gmail.com', 'c84cd7efba86ec9e868f04082cad0754');

-- --------------------------------------------------------

--
-- Table structure for table `variety`
--

CREATE TABLE `variety` (
  `variety_id` int(100) NOT NULL,
  `variety_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variety`
--

INSERT INTO `variety` (`variety_id`, `variety_title`) VALUES
(1, 'Grafted'),
(2, 'Flowering'),
(3, 'Indoors'),
(4, 'Fast Growing'),
(5, 'Shade'),
(6, 'Fencing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`Email_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`(3072));

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `mobile_payments`
--
ALTER TABLE `mobile_payments`
  ADD PRIMARY KEY (`transLoID`),
  ADD UNIQUE KEY `TransID` (`TransID`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prd_id`),
  ADD KEY `prd_cat` (`prd_cat`),
  ADD KEY `prd_variety` (`prd_variety`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`subscription_id`),
  ADD KEY `Email_id` (`Email_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `Email_id` (`Email_id`),
  ADD KEY `Email_id_2` (`Email_id`),
  ADD KEY `Email_id_3` (`Email_id`);

--
-- Indexes for table `variety`
--
ALTER TABLE `variety`
  ADD PRIMARY KEY (`variety_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `farmer_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=446;

--
-- AUTO_INCREMENT for table `mobile_payments`
--
ALTER TABLE `mobile_payments`
  MODIFY `transLoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prd_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `subscription_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `customer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `variety`
--
ALTER TABLE `variety`
  MODIFY `variety_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `farmer` (`farmer_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`prd_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD CONSTRAINT `customer_orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`customer_id`);

--
-- Constraints for table `mobile_payments`
--
ALTER TABLE `mobile_payments`
  ADD CONSTRAINT `mobile_payments_ibfk_1` FOREIGN KEY (`transLoID`) REFERENCES `users` (`customer_id`);

--
-- Constraints for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD CONSTRAINT `pending_orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`customer_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`prd_cat`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`prd_variety`) REFERENCES `variety` (`variety_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
