-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 12:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `christ_ambassadors`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogcategories`
--

CREATE TABLE `blogcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT 10000,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogcategories`
--

INSERT INTO `blogcategories` (`id`, `category_name`, `ordering`, `created_at`, `updated_at`) VALUES
(1, 'Relationship', 10000, '2023-07-03 12:03:09', '2023-07-03 13:03:09'),
(2, 'Technology', 10000, '2023-07-03 12:03:09', '2023-07-03 13:03:09'),
(3, 'Entertainment', 10000, '2023-07-03 12:03:09', '2023-07-03 13:03:09'),
(4, 'Jounney', 10000, '2023-07-03 12:03:09', '2023-07-03 13:03:09'),
(5, 'Restaurants', 10000, '2023-07-03 12:03:09', '2023-07-03 13:03:09'),
(6, 'Christianity', 10000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `posttitle` tinytext DEFAULT NULL,
  `shortwriteup` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `reference` longtext DEFAULT NULL,
  `author` tinytext DEFAULT NULL,
  `category` tinytext DEFAULT NULL,
  `featured_image` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `admin_id`, `posttitle`, `shortwriteup`, `content`, `reference`, `author`, `category`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(16, 1, 'COME CHILL WITH CHRIST --- CHILDREN BIBLE READING!!!', 'The name ‘Come Chill with Christ’ was inspired by the popular UK programme tagged ‘Come Dine with me’ where different people go to ..', '<p style=\"margin-left:0px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:14.0pt\">The name &lsquo;<strong>Come Chill with Christ&rsquo;</strong> was inspired by the popular UK programme tagged &lsquo;Come Dine with me&rsquo; where different people go to visit each other in their homes and they share food and some conversation too.&nbsp; Jesus said in John 4 v 34 &ldquo;My food is to do my Father&rsquo;s will and finish it&rdquo; Thus our food is to do the Father&rsquo;s will too, and as led by the Holy Spirit; by helping children understand the word and thrive as Christ Ambassadors in their everyday lives to the glory of God.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:14.0pt\">So, we started an onsite Bible Study for Children on Saturday, 26<sup>th</sup> November 2022. The maiden edition saw us read about the Fruit of the Spirit in Galatians 5. Amy, Elsie, Archie, Eli, Emefa were fully participatory; even Baby Zoe slept through the session. Aunty Amanda was present to help manage the activities in the background. We all had so much fun reading, discussing and understanding God&rsquo;s word.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:14.0pt\">As Children are the heritage of God, it&rsquo;s important to help them have a foundation grounded in the word of God so they know their heritage in Christ, understand it and live the life that shows forth the Glory of God through them as worthy Christ Ambassadors.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:14.0pt\">I encourage you to read the bible with your Children; the word of the Lord is a lamp unto our feet and it is profitable for instruction and to direct.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:14.0pt\">Our Children are taught of the Lord and great is their Peace.</span></span></span></p>\r\n<quillbot-extension-portal></quillbot-extension-portal>', 'Admin', 'Admin', '1', 'blogs/1691647153.png', 1, '2023-07-23 23:28:26', '2023-08-10 05:00:12'),
(17, 1, 'HOW CAN I THRIVE?', 'Do you know that God Loves us?\r\nThat’s why he gave us Jesus Christ- His dearly beloved Son to die on the Cross so that we can be free to live a joyful and great life.', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">Do you know that God Loves us?</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">That&rsquo;s why he gave us Jesus Christ- His dearly beloved Son to die on the Cross so that we can be free to live a joyful and great life.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">After 3 days, Jesus rose from dead by the power of the Holy Spirit and he is alive today, seated with God in Heaven.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">If you accept Jesus and your Lord and saviour, you will have Joy in your heart, power to heal the sick, raise the dead, set people free from evil people, bring joy to people, live a great life and so much more. </span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">You will be just like Jesus Christ to everyone who meets you.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">You might ask, &ldquo;How do I accept Jesus as My Lord and saviour so that I can be part of this glorious Kingdom, so that I can be like Jesus?&rdquo; All you need to do is repeat these out loud and you are now Born Again.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">&lsquo;<strong>Dear Lord, I thank you for the gift of Jesus Christ, I believe that he died and rose again for my sins and I accept him as my Lord and saviour. Thank you for forgiving my past sins and for giving me a brand new life in Christ. I also ask that the Holy Spirit come into my life to help show me how to live this great life in Christ. &nbsp;</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">Thank you Lord for accepting me into your family, in Jesus Name I have Prayed. Amen</span></strong><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">.&rsquo;</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">Welcome to a glorious new beginning in Christ. </span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">You are now a born again Christian; Born of the Holy Spirit of God and he will help you lead your glorious new life and you will bring many more people to the kingdom of God.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">To help you on your glorious journey in this new life, its important to</span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">Read your Bible daily: Reading your bible aloud to yourself daily is a great way to learn about God and Jesus Christ. The Holy Spirit in you now, will help you understand more as you read. So, that what you read is real and meaningful to you to lead a life pleasing to God.</span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">Prayer: Praying is important too and its simply you talking to God like you are talking to your Father, Mother, Best Friend, Sister, Brother or anyone dear to you. Praying in tongues is also a very important part of prayer; the bible will help you understand more about praying in tongues.</span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">Fellowship: </span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">While Jesus was on Earth, before he ascended, he told us he will send us the Holy Spirit who will always be with us and help us remember things, comfort us when we are facing challenges, show us what to do in difficult situations, guide and lead us in all our ways so that we are living full glorious lives as Born Again Christians.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">Now, that you are Born Again, you need to ask for the Holy Spirit so that your daily living and your overall destiny is glorious. So, you can say something like this&hellip;</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">It&rsquo;s time to start reading the Word of God where you will get to know God more; his words will instruct and direct your path and enable the Holy Spirit guide you accordingly. It&rsquo;s very helpful to find a Bible believing local church where you can worship God with your siblings in Christ.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\">Congratulations and welcome to the Supernatural Life.</span></span></span></p>\r\n\r\n<p><span dir=\"ltr\" lang=\"EN-GB\" style=\"font-size:16.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Love always from your sibling.</span></span></p>\r\n\r\n<quillbot-extension-portal></quillbot-extension-portal>', 'Admin', NULL, '1', 'blogs/1691647281.png', 1, '2023-07-23 23:32:52', '2023-08-10 05:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` int(11) DEFAULT NULL,
  `Fname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `inputAddress` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `pnumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subtotalamount` double(10,2) DEFAULT NULL,
  `totalamount` double(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`id`, `order_number`, `Fname`, `Lname`, `country`, `inputAddress`, `city`, `state`, `zipcode`, `pnumber`, `email`, `subtotalamount`, `totalamount`, `created_at`, `updated_at`) VALUES
(1, 901807, 'Daniel', 'Eshanokpe', 'Nigeria', 'ikorodu, Lagos', NULL, 'Lagos', NULL, '08139267960', 'admin@gmail.com', 3200.00, 3200.00, '2023-07-17 12:15:11', '2023-07-17 12:15:11'),
(2, 20229, 'Daniel', 'Eshanokpe', 'Nigeria', 'ikorodu, Lagos', NULL, 'New Jearsy', NULL, '08139267960', 'israeljohn774@gmail.com', 5200.00, 5200.00, '2023-07-25 12:44:52', '2023-07-25 12:44:52'),
(3, 699402, 'Daniel', 'Eshanokpe', 'Nigeria', 'ikorodu, Lagos', NULL, 'New Jearsy', NULL, '08139267960', 'israeljohn774@gmail.com', 5200.00, 5200.00, '2023-07-25 12:45:58', '2023-07-25 12:45:58'),
(4, 480672, 'Daniel', 'Eshanokpe', 'Nigeria', 'ikorodu, Lagos', NULL, 'Lagos', NULL, '08139267960', 'admin@gmail.com', 5200.00, 5200.00, '2023-07-25 13:46:10', '2023-07-25 13:46:10'),
(5, 480672, 'Daniel', 'Eshanokpe', 'Nigeria', 'ikorodu, Lagos', NULL, 'Lagos', NULL, '08139267960', 'admin@gmail.com', 5200.00, 5200.00, '2023-07-25 13:48:04', '2023-07-25 13:48:04'),
(6, 480672, 'Daniel', 'Eshanokpe', 'Nigeria', 'ikorodu, Lagos', NULL, 'Lagos', NULL, '08139267960', 'admin@gmail.com', 5200.00, 5200.00, '2023-07-25 13:48:59', '2023-07-25 13:48:59'),
(7, 259018, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5000.00, 5000.00, '2023-08-03 15:26:01', '2023-08-03 15:26:01'),
(8, 42192, 'Daniel', 'Eshanokpe', NULL, 'ikorodu, Lagos', NULL, 'Delta', NULL, '1234567890', 'gabrino4two@gmail.com', 5000.00, 5000.00, '2023-08-03 15:35:52', '2023-08-03 15:35:52'),
(9, 93489, 'Daniel', 'Eshanokpe', NULL, 'ikorodu, Lagos', NULL, 'Delta', NULL, '1234567890', 'user@gmail.com', 10000.00, 10000.00, '2023-08-08 09:31:38', '2023-08-08 09:31:38'),
(26, 774781, 'd', 'Eshanokpe', NULL, 'ikorodu, Lagos', NULL, 'Delta', NULL, '1234567890', 'admin@gmail.com', 2000.00, 2000.00, '2023-08-18 08:09:01', '2023-08-18 08:09:01'),
(27, 774781, 'd', 'Eshanokpe', NULL, 'ikorodu, Lagos', NULL, 'Delta', NULL, '1234567890', 'admin@gmail.com', 2000.00, 2000.00, '2023-08-18 08:15:17', '2023-08-18 08:15:17'),
(33, 774781, 'd', 'Eshanokpe', NULL, 'ikorodu, Lagos', NULL, 'Delta', NULL, '1234567890', 'admin@gmail.com', 2000.00, 2000.00, '2023-08-18 08:23:42', '2023-08-18 08:23:42'),
(34, 774781, 'd', 'Eshanokpe', NULL, 'ikorodu, Lagos', NULL, 'Delta', NULL, '1234567890', 'admin@gmail.com', 2000.00, 2000.00, '2023-08-18 08:24:15', '2023-08-18 08:24:15'),
(35, 20164, 'Daniel', 'Eshanokpe', NULL, 'ikorodu, Lagos', NULL, 'Delta', NULL, '1234567890', 'admin@gmail.com', 5000.00, 5000.00, '2023-08-21 08:01:09', '2023-08-21 08:01:09'),
(36, 472777, 'Daniel', 'Eshanokpe', NULL, 'ikorodu, Lagos', NULL, 'Delta', NULL, '1234567890', 'user@gmail.com', 5000.00, 5000.00, '2023-08-21 08:02:44', '2023-08-21 08:02:44'),
(37, 472777, 'Daniel', 'Eshanokpe', NULL, 'ikorodu, Lagos', NULL, 'Delta', NULL, '1234567890', 'user@gmail.com', 5000.00, 5000.00, '2023-08-21 08:05:28', '2023-08-21 08:05:28'),
(38, 472777, 'Daniel', 'Eshanokpe', NULL, 'ikorodu, Lagos', NULL, 'Delta', NULL, '1234567890', 'user@gmail.com', 5000.00, 5000.00, '2023-08-21 08:24:26', '2023-08-21 08:24:26'),
(39, 62587, 'Daniel', 'Eshanokpe', NULL, 'ikorodu, Lagos', NULL, 'Delta', NULL, '1234567890', 'user@gmail.com', 2000.00, 2000.00, '2023-08-21 08:37:46', '2023-08-21 08:37:46'),
(40, 187096, 'Daniel', 'Eshanokpe', 'Nigeria', 'ikorodu, Lagos', 'Lagos', 'Delta', '104211', '1234567890', 'admin@gmail.com', 2000.00, 2000.00, '2023-08-21 09:03:49', '2023-08-21 09:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `commenter_name` varchar(255) DEFAULT NULL,
  `commenter_email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `parent_id`, `content`, `commenter_name`, `commenter_email`, `created_at`, `updated_at`) VALUES
(1, 17, NULL, 'content', 'dany', 'dann@gmail.com', '2023-07-24 01:00:32', '2023-07-24 01:00:32'),
(2, NULL, 1, 'reply', 'user', 'user@gmail.com', '2023-07-24 02:46:33', '2023-07-24 02:46:33'),
(3, NULL, 1, 'reply content', 'user', 'user@gmail.com', '2023-07-24 02:51:08', '2023-07-24 02:51:08'),
(4, 17, NULL, 'message', 'vic', 'vic@gmail.com', '2023-07-24 07:44:02', '2023-07-24 07:44:02'),
(5, NULL, 4, 'reply', 'userdd', 'userdd@gmail.com', '2023-07-24 07:44:34', '2023-07-24 07:44:34'),
(6, NULL, 1, 'Reply mesaage', 'Dami', 'Dami@gmail.com', '2023-07-25 08:39:07', '2023-07-25 08:39:07'),
(7, NULL, 1, 'my reply', 'Dami', 'Dami@gmail.com', '2023-07-31 13:49:40', '2023-07-31 13:49:40'),
(8, NULL, 1, 'message', 'godwin', 'godwin@gmail.com', '2023-08-08 09:14:26', '2023-08-08 09:14:26'),
(9, NULL, 1, 'Am coming home', 'dami', 'Dami@gmail.com', '2023-08-08 09:15:26', '2023-08-08 09:15:26'),
(10, 16, NULL, 'message', 'user', 'vic@gmail.com', '2023-08-10 05:19:46', '2023-08-10 05:19:46'),
(11, 16, NULL, 'meesage', 'dany', 'user@gmail.com', '2023-08-10 05:27:24', '2023-08-10 05:27:24'),
(12, 16, NULL, 'message', 'user', 'bumi@gmail.com', '2023-08-10 05:28:23', '2023-08-10 05:28:23'),
(13, 16, NULL, 'message', 'user', 'user@gmail.com', '2023-08-10 05:35:26', '2023-08-10 05:35:26'),
(14, 16, NULL, 'mes', 'user', 'user@gmail.com', '2023-08-10 05:36:49', '2023-08-10 05:36:49'),
(15, 16, NULL, 'mess', 'user', 'user@gmail.com', '2023-08-10 05:45:07', '2023-08-10 05:45:07'),
(16, 16, NULL, 'mess', 'user', 'user@gmail.com', '2023-08-10 05:49:38', '2023-08-10 05:49:38'),
(17, 16, NULL, 'message', 'dany', 'user@gmail.com', '2023-08-10 05:49:54', '2023-08-10 05:49:54'),
(18, 16, NULL, 'mess', 'user', 'user@gmail.com', '2023-08-10 05:52:28', '2023-08-10 05:52:28');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `event_title` varchar(255) DEFAULT NULL,
  `event_content` varchar(255) DEFAULT NULL,
  `event_date` varchar(255) DEFAULT NULL,
  `event_time` varchar(255) DEFAULT NULL,
  `event_venue` varchar(255) DEFAULT NULL,
  `event_image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `admin_id`, `event_title`, `event_content`, `event_date`, `event_time`, `event_venue`, `event_image`, `status`, `created_at`, `updated_at`) VALUES
(6, 1, 'A DAY IN THE PARK23', 'Minimum Viable Product', '12/09/2013', '12:33:33', 'Melbourne, Australia', 'events/1691490076.jpg', '1', '2023-08-08 09:21:17', '2023-08-08 09:21:17'),
(7, 1, 'A DAY IN THE PARK', 'content', '12/32/2023', '12:10:10', 'Melbourne, Australia', 'events/1691490204.jpg', '1', '2023-08-08 09:23:24', '2023-08-08 09:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallerytitle` text DEFAULT NULL,
  `gallery_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallerytitle`, `gallery_image`, `created_at`, `updated_at`) VALUES
(9, 'DAY AT THE ZOO', 'gallery/1691635524.jpg', '2023-08-03 16:34:59', '2023-08-10 02:24:44'),
(10, 'VISIT THE PLANETARIUM', 'gallery/1691635546.jpg', '2023-08-03 16:35:47', '2023-08-10 02:25:22'),
(11, 'ART MUSEUM', 'gallery/1691637524.jpg', '2023-08-03 16:36:12', '2023-08-10 02:25:33'),
(12, 'CLASSIC CONCERT', 'gallery/1691635576.jpg', '2023-08-03 16:36:46', '2023-08-10 02:25:47'),
(15, 'COOKING LESSONS', 'gallery/1691638691.jpg', '2023-08-03 16:38:01', '2023-08-10 02:38:11'),
(17, 'SEA EXCURSIONS', 'gallery/1691638702.jpg', '2023-08-03 16:38:27', '2023-08-10 02:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_06_111748_create_blogs_table', 1),
(6, '2023_01_19_105256_create_orders_table', 1),
(7, '2023_07_07_183740_create_products_table', 2),
(8, '2023_07_08_081757_create_blogcategories_table', 3),
(9, '2023_07_08_101720_create_blogs_table', 4),
(10, '2023_07_10_010321_create_events_table', 4),
(11, '2023_07_10_082752_create_productcategories_table', 5),
(12, '2023_07_10_101539_create_galleries_table', 6),
(13, '2023_07_17_015121_create_checkouts_table', 7),
(14, '2023_07_10_124154_create_carts_table', 8),
(15, '2023_07_24_012842_create_comments_table', 9),
(16, '2023_07_24_050517_create_podcasts_table', 10),
(17, '2014_10_12_100000_create_password_reset_tokens_table', 11),
(18, '2023_08_21_032220_create_payments_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` text DEFAULT NULL,
  `product_name` text DEFAULT NULL,
  `product_amount` decimal(10,2) DEFAULT NULL,
  `product_qty` text DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `product_name`, `product_amount`, `product_qty`, `total`, `created_at`, `updated_at`) VALUES
(1, '901807', 'product', 1200.00, '1', 1200.00, '2023-07-17 12:13:32', '2023-07-17 12:13:32'),
(2, '901807', 'product2', 2000.00, '1', 2000.00, '2023-07-17 12:13:32', '2023-07-17 12:13:32'),
(3, '019815', 'product', 1200.00, '1', 1200.00, '2023-07-17 12:26:36', '2023-07-17 12:26:36'),
(4, '019815', 'product2', 2000.00, '1', 2000.00, '2023-07-17 12:26:36', '2023-07-17 12:26:36'),
(5, '092682', 'product', 1200.00, '2', 2400.00, '2023-07-25 08:41:20', '2023-07-25 08:41:20'),
(6, '092682', 'product2', 2000.00, '1', 2000.00, '2023-07-25 08:41:20', '2023-07-25 08:41:20'),
(7, '101425', 'product', 1200.00, '1', 1200.00, '2023-07-25 12:00:26', '2023-07-25 12:00:26'),
(8, '101425', 'product2', 2000.00, '2', 4000.00, '2023-07-25 12:00:26', '2023-07-25 12:00:26'),
(9, '015746', 'product', 1200.00, '1', 1200.00, '2023-07-25 12:38:51', '2023-07-25 12:38:51'),
(10, '015746', 'product2', 2000.00, '2', 4000.00, '2023-07-25 12:38:51', '2023-07-25 12:38:51'),
(11, '020229', 'product', 1200.00, '1', 1200.00, '2023-07-25 12:42:32', '2023-07-25 12:42:32'),
(12, '020229', 'product2', 2000.00, '2', 4000.00, '2023-07-25 12:42:43', '2023-07-25 12:42:43'),
(13, '699402', 'product', 1200.00, '1', 1200.00, '2023-07-25 12:45:48', '2023-07-25 12:45:48'),
(14, '699402', 'product2', 2000.00, '2', 4000.00, '2023-07-25 12:45:48', '2023-07-25 12:45:48'),
(15, '053785', 'product', 1200.00, '1', 1200.00, '2023-07-25 13:42:09', '2023-07-25 13:42:09'),
(16, '053785', 'product2', 2000.00, '2', 4000.00, '2023-07-25 13:42:09', '2023-07-25 13:42:09'),
(17, '815579', 'product', 1200.00, '1', 1200.00, '2023-07-25 13:42:56', '2023-07-25 13:42:56'),
(18, '815579', 'product2', 2000.00, '2', 4000.00, '2023-07-25 13:42:59', '2023-07-25 13:42:59'),
(19, '646010', 'product', 1200.00, '1', 1200.00, '2023-07-25 13:43:48', '2023-07-25 13:43:48'),
(20, '646010', 'product2', 2000.00, '2', 4000.00, '2023-07-25 13:43:48', '2023-07-25 13:43:48'),
(21, '480672', 'product', 1200.00, '1', 1200.00, '2023-07-25 13:45:34', '2023-07-25 13:45:34'),
(22, '480672', 'product2', 2000.00, '2', 4000.00, '2023-07-25 13:45:35', '2023-07-25 13:45:35'),
(23, '988409', 'product3', 5000.00, '1', 5000.00, '2023-08-03 14:59:19', '2023-08-03 14:59:19'),
(24, '298780', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:00:18', '2023-08-03 15:00:18'),
(25, '875051', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:04:42', '2023-08-03 15:04:42'),
(26, '669859', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:05:16', '2023-08-03 15:05:16'),
(27, '670583', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:05:58', '2023-08-03 15:05:58'),
(28, '518415', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:06:05', '2023-08-03 15:06:05'),
(29, '969998', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:06:34', '2023-08-03 15:06:34'),
(30, '396108', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:08:46', '2023-08-03 15:08:46'),
(31, '843643', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:09:09', '2023-08-03 15:09:09'),
(32, '186762', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:09:17', '2023-08-03 15:09:17'),
(33, '097285', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:10:36', '2023-08-03 15:10:36'),
(34, '104063', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:11:35', '2023-08-03 15:11:35'),
(35, '879523', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:11:54', '2023-08-03 15:11:54'),
(36, '784464', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:19:17', '2023-08-03 15:19:17'),
(37, '400550', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:20:07', '2023-08-03 15:20:07'),
(38, '039079', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:20:58', '2023-08-03 15:20:58'),
(39, '560236', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:21:17', '2023-08-03 15:21:17'),
(40, '722457', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:21:39', '2023-08-03 15:21:39'),
(41, '259018', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:25:48', '2023-08-03 15:25:48'),
(42, '130112', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:29:01', '2023-08-03 15:29:01'),
(43, '868069', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:30:27', '2023-08-03 15:30:27'),
(44, '042192', 'product3', 5000.00, '1', 5000.00, '2023-08-03 15:35:24', '2023-08-03 15:35:24'),
(45, '419203', 'name', 1000.00, '4', 4000.00, '2023-08-04 08:59:24', '2023-08-04 08:59:24'),
(46, '726714', 'Card', 2000.00, '2', 4000.00, '2023-08-08 09:29:49', '2023-08-08 09:29:49'),
(47, '726714', 'Calender', 3000.00, '2', 6000.00, '2023-08-08 09:29:49', '2023-08-08 09:29:49'),
(48, '093489', 'Card', 2000.00, '2', 4000.00, '2023-08-08 09:31:11', '2023-08-08 09:31:11'),
(49, '093489', 'Calender', 3000.00, '2', 6000.00, '2023-08-08 09:31:11', '2023-08-08 09:31:11'),
(50, '865079', 'Calender', 2000.00, '1', 2000.00, '2023-08-17 08:56:50', '2023-08-17 08:56:50'),
(51, '865079', 'Calender Reminder', 3000.00, '1', 3000.00, '2023-08-17 08:56:50', '2023-08-17 08:56:50'),
(52, '547877', 'Calender', 2000.00, '1', 2000.00, '2023-08-18 07:31:52', '2023-08-18 07:31:52'),
(53, '774781', 'Calender', 2000.00, '1', 2000.00, '2023-08-18 07:53:59', '2023-08-18 07:53:59'),
(54, '488744', 'Calender', 2000.00, '1', 2000.00, '2023-08-18 08:48:47', '2023-08-18 08:48:47'),
(55, '030905', 'Daily Card', 2000.00, '1', 2000.00, '2023-08-21 03:08:57', '2023-08-21 03:08:57'),
(56, '481096', 'Daily Card', 2000.00, '1', 2000.00, '2023-08-21 03:10:04', '2023-08-21 03:10:04'),
(57, '507669', 'Daily Card', 2000.00, '1', 2000.00, '2023-08-21 03:10:22', '2023-08-21 03:10:22'),
(58, '313292', 'Daily Card', 2000.00, '1', 2000.00, '2023-08-21 03:33:36', '2023-08-21 03:33:36'),
(59, '243628', 'Daily Card', 2000.00, '1', 2000.00, '2023-08-21 04:13:40', '2023-08-21 04:13:40'),
(60, '269021', 'Daily Card', 2000.00, '1', 2000.00, '2023-08-21 07:50:13', '2023-08-21 07:50:13'),
(61, '269021', 'Calender Reminder', 3000.00, '1', 3000.00, '2023-08-21 07:50:15', '2023-08-21 07:50:15'),
(62, '020164', 'Daily Card', 2000.00, '1', 2000.00, '2023-08-21 08:00:28', '2023-08-21 08:00:28'),
(63, '020164', 'Calender Reminder', 3000.00, '1', 3000.00, '2023-08-21 08:00:28', '2023-08-21 08:00:28'),
(64, '837460', 'Daily Card', 2000.00, '1', 2000.00, '2023-08-21 08:01:10', '2023-08-21 08:01:10'),
(65, '837460', 'Calender Reminder', 3000.00, '1', 3000.00, '2023-08-21 08:01:10', '2023-08-21 08:01:10'),
(66, '192441', 'Daily Card', 2000.00, '1', 2000.00, '2023-08-21 08:02:06', '2023-08-21 08:02:06'),
(67, '192441', 'Calender Reminder', 3000.00, '1', 3000.00, '2023-08-21 08:02:06', '2023-08-21 08:02:06'),
(68, '472777', 'Daily Card', 2000.00, '1', 2000.00, '2023-08-21 08:02:25', '2023-08-21 08:02:25'),
(69, '472777', 'Calender Reminder', 3000.00, '1', 3000.00, '2023-08-21 08:02:25', '2023-08-21 08:02:25'),
(70, '062587', 'Daily Card', 2000.00, '1', 2000.00, '2023-08-21 08:37:31', '2023-08-21 08:37:31'),
(71, '047029', 'Daily Card', 2000.00, '1', 2000.00, '2023-08-21 08:55:42', '2023-08-21 08:55:42'),
(72, '115348', 'Daily Card', 2000.00, '1', 2000.00, '2023-08-21 08:57:05', '2023-08-21 08:57:05'),
(73, '187096', 'Daily Card', 2000.00, '1', 2000.00, '2023-08-21 09:03:19', '2023-08-21 09:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `payer_id` varchar(255) NOT NULL,
  `payer_email` varchar(255) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text DEFAULT NULL,
  `amount` varchar(10) NOT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_id`, `payer_id`, `payer_email`, `first_name`, `last_name`, `amount`, `currency`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 'PAYID-MTRPLMI0B389141PH540264M', 'UQUUKPAXHDLN6', 'sb-uttey27145990@personal.example.com', '', NULL, '600.00', 'USD', 'approved', '2023-08-21 07:41:35', '2023-08-21 07:41:35'),
(2, 'PAYID-MTRSRWY1LC75681956685901', 'UQUUKPAXHDLN6', 'sb-uttey27145990@personal.example.com', '', NULL, '5000.00', 'USD', 'approved', '2023-08-21 08:09:17', '2023-08-21 08:09:17'),
(3, 'PAYID-MTRSRWY1LC75681956685901', 'UQUUKPAXHDLN6', 'sb-uttey27145990@personal.example.com', '', NULL, '5000.00', 'USD', 'approved', '2023-08-21 08:14:04', '2023-08-21 08:14:04'),
(4, 'PAYID-MTRSRWY1LC75681956685901', 'UQUUKPAXHDLN6', 'sb-uttey27145990@personal.example.com', '', NULL, '5000.00', 'USD', 'approved', '2023-08-21 08:15:05', '2023-08-21 08:15:05'),
(5, 'PAYID-MTRTA3I504939391C847482L', 'UQUUKPAXHDLN6', 'sb-uttey27145990@personal.example.com', 'John', 'Doe', '2000.00', 'USD', 'approved', '2023-08-21 08:47:53', '2023-08-21 08:47:53'),
(6, 'PAYID-MTRTNCI8LY368034J9342133', 'UQUUKPAXHDLN6', 'sb-uttey27145990@personal.example.com', 'John', 'Doe', '2000.00', 'USD', 'approved', '2023-08-21 09:05:01', '2023-08-21 09:05:01');

-- --------------------------------------------------------

--
-- Table structure for table `payment_items`
--

CREATE TABLE `payment_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_email` text DEFAULT NULL,
  `product_name` text DEFAULT NULL,
  `product_price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `podcasts`
--

CREATE TABLE `podcasts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `audio_file` varchar(255) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `end_time` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productcategories`
--

CREATE TABLE `productcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productcategories`
--

INSERT INTO `productcategories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'category_1', NULL, NULL),
(2, 'category_2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `productname` text DEFAULT NULL,
  `productamount` float(10,2) DEFAULT NULL,
  `productdiscount` int(11) DEFAULT NULL,
  `productimage` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `admin_id`, `productname`, `productamount`, `productdiscount`, `productimage`, `status`, `created_at`, `updated_at`) VALUES
(39, 1, 'Daily Decleration Calender', 2700.00, NULL, 'products/1691634447.png', 1, '2023-08-10 00:48:22', '2023-08-10 01:27:27'),
(40, 1, 'Calender', 2000.00, NULL, 'products/1691632239.png', 1, '2023-08-10 00:50:39', '2023-08-10 00:50:39'),
(41, 1, 'Daily Card', 2000.00, NULL, 'products/1691632268.jpg', 1, '2023-08-10 00:51:08', '2023-08-10 00:51:08'),
(42, 1, 'Calender Reminder', 3000.00, NULL, 'products/1691632336.png', 1, '2023-08-10 00:52:16', '2023-08-10 00:52:16'),
(43, 1, 'Affirmation card', 2000.00, NULL, 'products/1691632359.png', 1, '2023-08-10 00:52:40', '2023-08-10 00:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `blocked` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `is_admin`, `blocked`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 1, 1, 0, NULL, '$2y$10$4WbZElJulBHCN4/UO4BnWu6JNoEWj9PRbppYrjQg1XXB0/RLDC3ae', NULL, '2023-07-03 12:03:09', '2023-07-03 13:03:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogcategories`
--
ALTER TABLE `blogcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_items`
--
ALTER TABLE `payment_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `podcasts`
--
ALTER TABLE `podcasts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcategories`
--
ALTER TABLE `productcategories`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blogcategories`
--
ALTER TABLE `blogcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment_items`
--
ALTER TABLE `payment_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `podcasts`
--
ALTER TABLE `podcasts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productcategories`
--
ALTER TABLE `productcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
