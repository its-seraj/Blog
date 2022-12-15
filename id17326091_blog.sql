-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2022 at 05:47 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17326091_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_no` int(11) NOT NULL,
  `source` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_no`, `source`, `date`, `head`, `intro`) VALUES
(1, 'Alex Xander', '07 JAN 2021', 'The Lenovo Tab P11 is the latest productivity tablet from the company', 'At CES 2021, Lenovo has announced a new productivity tablet called the Tab P11. The newest Android-based tablet seems like a humbler version'),
(2, 'Alex Xander', '08 JAN 2021', 'Here everything we know about the Samsung Galaxy S21 series, launching in January', 'Samsung flagship smartphones for 2020 were some of the best Android smartphones this year, and we have high hopes for the company’s upcoming Galaxy S21 series.'),
(3, 'Alex Xander', '27 APR 2021', 'Vivo V21 Hands-on: Can the 44MP OIS selfie camera compete with the iPhone 12?', 'Vivo’s prolific selfie-centric V series is back with an update just six months after the last release. In the new Vivo V21, Vivo has added an optical image stabilization module to the front-facing 44M');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `heading` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `para` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `heading`, `para`, `img`) VALUES
(1, 'Google Pixel 4 now on sale for just $399 at multiple stores', 'Google’s Pixel 4 is nearly two years old at this point, but it’s still a capable Android phone with a clean software experience and regular security patches. The smaller Pixel 4 was originally priced at $799, and has gone on sale many times since release, but now you can pick one up for $399.00 at multiple stores. That’s $400 off the original price, and one of the lowest prices we’ve seen for the phone yet in new condition. \r\n\r\nThe Google Pixel 4 was released in October 2019, with a Snapdragon 855 chipset, 64GB of internal storage (with no microSD expansion), 6GB of RAM, a 5.7-inch 1080×2280 AMOLED screen, and IP68 water/dust resistance. Another model with 128GB storage was also released by Google, but that not model is not available. There are also two rear cameras: a 12.2MP primary lens, and a 16MP telephoto lens. Google says the Pixel 4 will receive Android updates until October 2022 at the earliest, which means the phone will definitely get Android 12, and most likely Android 13 next year (assuming that update comes in the typical time frame of August-September). Google’s phones also have excellent custom ROM support, so if you don’t mind losing Google Pay and other SafetyNet-dependent features after that point, you can keep the updates going for the life of the phone.', 'pixel_4a.jpg'),
(2, 'Google Pixel phones may offer to translate apps for you on Android 12', 'One of the biggest hurdles to joining Team Pixel is availability: Google just doesn’t sell their phones in every country like Samsung or Apple. For example, Google’s upcoming Pixel 5a 5G is only confirmed to launch in two countries so far: the U.S. and Japan. Importing a Pixel phone is always an option, and Google does a great job at making sure its software is readable in most languages. But what about third-party services? In Chrome, you can use the built-in translation tool to translate webpages to your native tongue, but there’s currently no way to do that for Android apps. That’s set to change with a new feature in Android 12, and we’ve spotted evidence suggesting it’ll be available on Pixel phones.\r\n\r\nBack in April, we reported that Google was working on a new framework in Android 12 for translating an app’s UI to the user’s native language. After the launch of the first Android 12 Beta at Google I/O 2021, Google updated its API differences report with a new android.view.translation package as well as related methods in the View class that match what we found last month. However, these new APIs are undocumented, meaning we can only make educated guesses at their intended use. In a blog post, developer CommonsWare corroborated our interpretation of this new feature, which is set to offer “system-supplied translations of user-visible strings.” As he points out, this feature may pose a challenge to developers if it’s made mandatory, but it’ll no doubt make apps with limited language support more accessible to users.\r\n\r\nHowever, app UI translations won’t be a standard feature of Android 12 as support will depend on a system-defined “translation service” to be present. This translation service is defined by the value config_defaultTranslationService in the framework, and as developer kdrag0n pointed out to us, this value is actually defined in Android 12 Beta 1 for Pixel phones. Specifically, config_defaultTranslationService is set to com.google.android.as/com.google.android.apps.miphone.aiai.translate.services.TranslationService where “com.google.android.as” is the package name for Device Personalization Services and “com.google.android.apps.miphone.aiai.translate.services.TranslationService” is the name of the translation service provided by the app.\r\nCurrent versions of the Device Personalization Services app do not actually have this service, so we can’t actually test Android 12’s new UI translation feature on Pixel phones. Once Device Personalization Services is updated, we should be able to finally test this new feature. Since Google set the value of config_defaultTranslationService using a Runtime Resource Overlay (RRO) called “PixelConfigOverlayCommon”, we believe for now that this feature won’t be limited to a specific Pixel phone once it’s released. If Google intended to limit access to a specific Pixel device, they could have defined the value in one or more of the PixelConfigOverlay APKs that are included for a generation or more of Pixel devices (eg. PixelConfigOverlay2019 for the Pixel 4 and later). We won’t know for sure until the feature is released, though, and it’s likely that won’t happen until the launch of the Pixel 6 series later this fall.', 'google_translate.jpg'),
(3, 'Google Pixel 6 renders show off wild new design', 'Since the first Google Pixel hit the scene back in 2016, Google has stuck to a mostly formulaic design. But all that could change with the release of the Pixel 6, which will supposedly adopt a radical new design compared to the existing Pixel 5.\r\n\r\nAccording to renders released by Jon Prosser, the Pixel 6 will feature a horizontal camera bump on the back that sits just below the top of the device. Above the camera module will be a small strip of color — in the instance of the renders, that color is orange. The remainder of the back appears to feature a matte glass with a subtle color that looks like the opacity was turned down.\r\nIf anything, the design of the alleged Pixel 6 stands out, making Google’s device look unique in a market where everything pretty much looks the same. It’s worth noting that these renders shared by Prosser were created in collaboration with an artist, and aren’t official images from Google. Prosser claims he was sent images of the Pixel 6, but rather than sharing those photos and risk revealing a source, he created his own images based on what he saw.\r\n\r\nMax Weinbach, a former writer at XDA, corroborated Prosser’s report, saying they are “accurate in design.” However, Weinbach claims the colors shown off in the renders don’t match information he’s heard, so what you see above might not be entirely accurate.\r\nWith these type of reports, it’s always important to take them with a huge grain of salt. That fact that two separate reports are conflicting in their information doesn’t give us much confidence in their accuracy. However, they both claim that the Google Pixel 6 will drastically change its approach to design, so we might finally see the company’s handsets take on a semblance of personality.\r\n\r\nThe renders also reveal the Pixel 6 will feature a centered hole-punch design, along with the possibility of a fingerprint sensor embedded beneath the display. Additionally, Prosser’s report claims Google will launch a standard Pixel 6 and a larger Pixel 6 Pro, which could feature a triple-camera setup.\r\n\r\nEarlier this year, a report claimed the Pixel 6 would launch with a Google-designed Whitechapel chipset. What better way to introduce your own processor than with an unforgettable new design?\r\n\r\n', 'google_pixel_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menulist`
--

CREATE TABLE `menulist` (
  `si` int(11) DEFAULT NULL,
  `flist` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dlist` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlist` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bplist` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menulist`
--

INSERT INTO `menulist` (`si`, `flist`, `dlist`, `tlist`, `bplist`) VALUES
(1, '', 'Apple', 'Android', ''),
(2, '', 'Asus', 'IOS', ''),
(3, '', 'Google', 'Apps', ''),
(4, '', 'Huawei', 'Development', ''),
(5, '', 'Lenovo', 'Wear OS', ''),
(6, '', 'Motorola', 'MODS', ''),
(7, '', 'Samsung', 'Tutorials', ''),
(8, '', 'Xiaomi', '', ''),
(9, '', 'Vivo', '', ''),
(10, '', 'Realme', '', ''),
(11, '', 'Sony', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `blog_no` int(11) NOT NULL,
  `tags` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`blog_no`, `tags`, `link`, `img`) VALUES
(1, 'Lenovo Tab P11 2021 Launch 662 Android10', 'lenevo tab p11.php', 'Lenovo-Tab-P11-product-image2-1024x683.png'),
(2, 'samsung s21 ultra plus jan january 2021 specs launch smartphone', 'samsung s21.php', 'Samsung-Galaxy-S21.jpg'),
(3, 'vivo v21 April 2021', 'vivo v21.php', 'DSC04719-810x298_c.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_no`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`blog_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
