-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2020 at 04:23 AM
-- Server version: 10.2.31-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demowork_intelligence`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutcontent`
--

CREATE TABLE `aboutcontent` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updated_dates` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutcontent`
--

INSERT INTO `aboutcontent` (`id`, `image`, `description`, `status`, `created_date`, `updated_dates`) VALUES
(3, '202007191444024927192_about_2.png', 'intelligence Systems Corporation is an IT Business Solution Provider offering complete digital transformation services and solutions to our clients. We practice and implement internationally accepted best practices and standards whereas our technolog', 1, '2020-07-19 09:14:02.931889', '2020-07-19 09:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `about_core_competencies`
--

CREATE TABLE `about_core_competencies` (
  `id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `text_line` text NOT NULL,
  `description` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_core_competencies`
--

INSERT INTO `about_core_competencies` (`id`, `image`, `text_line`, `description`, `created_date`, `updated_date`, `status`) VALUES
(1, '202007211002544845991_img13.png', 'Over the years, we at Intelligence Systems have built a culture – that is to put our customer business FIRST and it is embedded in our DNA. We continuously and consistently work on building and enhancing our core competencies. In a nutshell, they’re:', '<ul>\r\n	<li>We&rsquo;ve put in place robust systems, processes, and protocols for all projects implementations</li>\r\n	<li>The tech team comes with enormous experience, expertise and exposure working on large enterprise-level applications development</li>\r\n	<li>Process improvement and customer &amp; vendor relationship management</li>\r\n	<li>System analysis and change and configuration management</li>\r\n	<li>Turnkey, end-to-end technology consulting, design, development, testing, and deployment</li>\r\n	<li>We customize and tailor the solutions that meet our customers&rsquo; core business goals</li>\r\n	<li>Comprehensive technology solutions under one roof, saving time and effort for our customers so that they can focus on their core business growth</li>\r\n	<li>The complete package deliverables include training, documentation, and continued support</li>\r\n</ul>\r\n', '2020-07-24 10:57:22', '2020-07-24 16:27:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `about_key_differentiators`
--

CREATE TABLE `about_key_differentiators` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text_line` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_key_differentiators`
--

INSERT INTO `about_key_differentiators` (`id`, `image`, `text_line`, `description`, `created_date`, `updated_date`, `status`) VALUES
(1, '202007210943499126084_img14.png', 'The key differentiating factors that culminate into making us the most preferred technology partner are:', '<ul>\r\n	<li>We make sure we offer the technology services, solutions and products within budget, and timeline to help our customer accelerate time to market</li>\r\n	<li>Adopt a sustainable and proactive approach to stay in tune with tomorrow on technology upgrades</li>\r\n	<li>We ensure our implementations are integrated into the existing technology infrastructure to create a seamless infrastructure</li>\r\n	<li>Technology stack and frameworks capabilities across various platforms including DevSecOps, Cloud Transformation, cybersecurity and independent verification and validation (IV&amp;V)</li>\r\n	<li>Digital Transformation across the enterprise with to ensure business continuity in pandemic like situations</li>\r\n	<li>Digital customer engagement and digital customer experience at the core of our competencies.</li>\r\n	<li>Business systems planning (BSP), Governance, infrastructure modernization, strategic planning, and management</li>\r\n</ul>\r\n', '2020-07-21 04:13:49', '2020-07-21 04:13:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `about_leadership`
--

CREATE TABLE `about_leadership` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description_one` text NOT NULL,
  `description` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_leadership`
--

INSERT INTO `about_leadership` (`id`, `image`, `description_one`, `description`, `created_date`, `updated_date`, `status`) VALUES
(1, '202007210940108339274_ceo.png', '<p>The leadership of Intelligence Systems is helmed by its founder and director Raju Pentiboyina. He comes from strong technology and management background with over 25 years of experience working with multi-national companies and government agencies across. His experience spans across multiple domains in Telecom, Banking, and Healthcare IT. Raju held responsible and leadership positions from Program and Technical management portfolios.</p>\r\n\r\n<p>Raju founded Intelligence System (IS), a technology-driven company delivering Innovating, high-end, enterprise-level technology services across the spectrum of different industries. He hired, trained, and nurtured extremely talented engineers and together they put to test a wide array of cutting-edge technologies and recommended and implemented customized, tailored and right-fit technological solutions that improved efficiency, increase productivity, fueling growth to the customers.</p>\r\n\r\n<p>Raju brings to the table his international experience, technological capabilities and business acumen that culminates in giving him the edge in understanding, analyzing complex technological challenges faced by global customers with clarity. This unique combination provides him the much-needed impetus in recommending and implementing high-end technology solutions that enriches the customers&rsquo; digital experience paving the way to growth.</p>\r\n', 'Raju’s unflinching desire and unwavering commitment to customers’ business growth, compassionate leadership towards employees and an uncanny knack of sensing a business opportunity propelling Intelligence Systems reach greater heights in a short span of time. Raju earned his Executive Leadership Program Certification from Cornell University and earned his MBA from Strayer University, Arlington, VA, USA.', '2020-07-21 04:10:10', '2020-07-21 04:10:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `about_servies`
--

CREATE TABLE `about_servies` (
  `id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `title` varchar(255) NOT NULL,
  `first_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_servies`
--

INSERT INTO `about_servies` (`id`, `image`, `title`, `first_title`, `description`, `created_date`, `updated_date`, `status`) VALUES
(1, '202007210935389003940_about_3.png', 'Welcome To Intelligence Systems', 'Intelligence Systems as the very name define – we’ve been consistently ideating, conceptualizing, planning, building, and implementing cutting-edge, emerging technologies driven solutions for US Federal Government and Fortune 500 companies.', 'We’ve digitally transformed enterprise level organizations with Program Management by establishing tailored Governance, Standards, Protocols, Processes and Procedures enabling growth and maturity\r\n', '2020-07-21 04:05:38', '2020-07-21 04:05:38', 1),
(2, '202007210936043168152_about_4.png', 'Welcome To Intelligence Systems', 'Intelligence Systems as the very name define – we’ve been consistently ideating, conceptualizing, planning, building, and implementing cutting-edge, emerging technologies driven solutions for US Federal Government and Fortune 500 companies.', 'Identified security vulnerabilities, built a road map, and deployed strategic cybersecurity systems and processes to protect networks, improved information security, and business continuity management', '2020-07-21 04:06:04', '2020-07-21 04:06:04', 1),
(3, '202007210936415350462_about_5.png', 'Welcome To Intelligence Systems', 'Intelligence Systems as the very name define – we’ve been consistently ideating, conceptualizing, planning, building, and implementing cutting-edge, emerging technologies driven solutions for US Federal Government and Fortune 500 companies.', 'Intelligence Systems offer Cloud services, including on premise to Cloud migration and optimization ensuring security, stability, and scalability. We offer Microsoft Azure, Amazon AWS, Salesforce Cloud Services', '2020-07-21 04:06:41', '2020-07-21 04:06:41', 1),
(4, '202007210937027771724_about_6.png', 'Welcome To Intelligence Systems', 'Intelligence Systems as the very name define – we’ve been consistently ideating, conceptualizing, planning, building, and implementing cutting-edge, emerging technologies driven solutions for US Federal Government and Fortune 500 companies', 'Enterprise-level applications design and development leveraging cutting-edge DevSecOps ensure agile development with advanced security for operational efficiency. We help enterprises with DevSecOps implement to scale operations and grow.', '2020-07-21 04:07:02', '2020-07-21 04:07:02', 1),
(5, '20200721093505347855_about_7.png', 'Welcome To Intelligence Systems', 'Intelligence Systems as the very name define – we’ve been consistently ideating, conceptualizing, planning, building, and implementing cutting-edge, emerging technologies driven solutions for US Federal Government and Fortune 500 companies.', 'The applications have to work consistently and continuously at scale and speed for business continuity. We empower organizations with Independent Verification and Validation by implementing robust systems, procedures, and protocols.', '2020-07-21 04:05:05', '2020-07-21 04:05:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `subject` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `name`, `email`, `message`, `subject`, `created_date`) VALUES
(1, 'rajkumar', 'rajkumarramineni@gmail.com', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.', 'MCSE boot camps have its supporters and its detractors', '2020-07-21 07:02:34'),
(2, 'rajkumar', 'rajkumarramineni@gmail.com', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.', 'MCSE boot camps have its supporters and its detractors', '2020-07-21 07:02:34'),
(3, 'rajkumar', 'rajkumarramineni@gmail.com', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.', 'MCSE boot camps have its supporters and its detractors', '2020-07-21 07:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `client_images` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updated_date` varchar(6) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_images`, `name`, `created_date`, `updated_date`, `status`) VALUES
(9, '202007190959297753542_logo.png', 'test1', '2020-07-19 07:59:29.539587', '', 1),
(10, '202007190803597020913_logo.png', 'test2', '2020-07-19 06:03:59.957303', '', 1),
(11, '202007190804138068107_logo.png', 'test3', '2020-07-19 06:04:13.220709', '', 1),
(12, '202007190804277083825_logo.png', 'test4', '2020-07-19 06:04:27.241995', '', 1),
(13, '202007190804495670213_logo.png', 'test5', '2020-07-19 06:04:49.322966', '', 1),
(14, '202007190805074538899_logo.png', 'test6', '2020-07-19 06:05:07.982089', '', 1),
(15, '202007190805256837940_logo.png', 'test7', '2020-07-19 06:05:25.392649', '', 1),
(16, '202007190805467868508_logo.png', 'test8', '2020-07-19 06:05:46.642880', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_mail`
--

CREATE TABLE `contact_mail` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_mail`
--

INSERT INTO `contact_mail` (`id`, `name`, `email`, `mobile_number`, `message`, `created_date`, `updated_date`, `status`) VALUES
(2, 'test', 'test@gmail.com', '9865321456', 'test', '2020-07-17 09:30:39', '0000-00-00 00:00:00', 1),
(3, 'ok', 'ok@gmail.com', '98562314785', 'fsgjyiloqw5uio', '2020-07-21 08:22:46', '2020-07-21 08:22:46', 1),
(4, 'best', 'best@gmail.com', '8523697410', 'besytcsgdyufnsdugifhdkjrngruidghrvnbsdjzfghruhgrauiewgfasfaewgfuaewgh', '2020-07-21 08:23:35', '2020-07-21 08:23:35', 1),
(5, 'bodakunti pavan kumar', 'rajkumarramineni19@gmail.com', '9848604561', 'wertyu', '2020-07-24 04:24:41', '2020-07-24 04:24:41', 1),
(6, 'wrwet', 'rajkumarramineni19@gmail.com', '9848604561', 'erwrw', '2020-07-24 04:24:52', '2020-07-24 04:24:52', 1),
(7, 'rajkumar', 'rajkumarramineni19@gmail.com', '9542346230', 'weagregre', '2020-07-24 04:27:05', '2020-07-24 04:27:05', 1),
(9, 'Rajkumar', 'rajkumarramineni19@gmail.com', '9542346230', 'test', '2020-07-25 06:06:37', '2020-07-25 06:06:37', 1),
(10, 'rajkumar', 'rajkumar@thecolourmoon.com', '9848604561', 'test', '2020-07-25 06:09:15', '2020-07-25 06:09:15', 1),
(11, 'pavan ', 'rajkumar@thecolourmoon.com', '962587412', 'colourmoon', '2020-07-25 06:11:52', '2020-07-25 06:11:52', 1),
(12, 'Rajkumar', 'rajkumar@thecolourmoon.com', '8523697410', '\nGet In Touch', '2020-07-25 06:14:48', '2020-07-25 06:14:48', 1),
(13, 'test', 'test@gmail.com', '9542346230', 'test', '2020-07-25 06:26:54', '2020-07-25 06:26:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `company` varchar(150) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `address` varchar(150) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin_code` int(10) NOT NULL,
  `country` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `company`, `mobile_number`, `email`, `address`, `state`, `pin_code`, `country`, `image`, `created_date`, `updated_date`) VALUES
(3, 'Intelligence Systems Corporation', '(703) 801-5334', ' info@intelsysinc.com', '8609 Westwood Center Drive Suite 110', 'Tysons Corner VA', 22182, 'United States', '202007211447501092266_office.png', '2020-07-21 09:17:50.696939', '2020-07-21 09:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `join_us`
--

CREATE TABLE `join_us` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `image` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `join_us`
--

INSERT INTO `join_us` (`id`, `name`, `email`, `mobile_number`, `image`, `message`, `created_date`, `updated_date`, `status`) VALUES
(1, 'rajkumar', 'rajkumarramineni19@gmail.com', '9848604561', '202007170915063952637_user__3_.csv', 'wfewfergvresgrteg', '2020-07-17 07:15:06', '0000-00-00 00:00:00', 1),
(3, 'werywe', 'tgnj@gmail.com', '962587412', '202007211541141737949_imgnew2.png', 'efewfgregre', '2020-07-21 10:11:14', '2020-07-21 10:11:14', 1),
(4, 'rajkumar', 'rajkumarramineni19@gmail.com', '9865321456', '202007251241146085734__blank.png', 'efrsdgfdsg', '2020-07-25 07:11:14', '2020-07-25 07:11:14', 1),
(5, 'bodakunta pavan ', 'superadmin@gmail.com', '9856231478', '202007251243511064657_invoice.docx', 'dsfsdfsd', '2020-07-25 07:13:51', '2020-07-25 07:13:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pm_content`
--

CREATE TABLE `pm_content` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `discription` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pm_content`
--

INSERT INTO `pm_content` (`id`, `name`, `image`, `discription`, `created_date`, `updated_date`, `status`) VALUES
(1, 'Program Management', '202007160744075543892_img7.png', '<p>The&nbsp;program&nbsp;management&nbsp;covers&nbsp;the&nbsp;entire&nbsp;gamut&nbsp;of&nbsp;the&nbsp;organization</p>\r\n\r\n<p>Project&nbsp;plan&nbsp;covers&nbsp;analysis,&nbsp;scope&nbsp;cost,&nbsp;schedule,&nbsp;quality,&nbsp;resourcing,&nbsp;risk&nbsp;identification&nbsp;and&nbsp;mitigating</p>\r\n\r\n<p>Design&nbsp;and&nbsp;development&nbsp;of&nbsp;software&nbsp;test&nbsp;plans&nbsp;(STP),&nbsp;test&nbsp;procedures&nbsp;(TPROC)&nbsp;and&nbsp;software&nbsp;test&nbsp;reports&nbsp;(STR)&nbsp;and&nbsp;test&nbsp;evaluation&nbsp;programs</p>\r\n\r\n<p>Deploy&nbsp;agile&nbsp;methodologies&nbsp;for&nbsp;sprint&nbsp;planning,&nbsp;build&nbsp;transparency,&nbsp;increase&nbsp;stakeholder&rsquo;s&nbsp;engagement,&nbsp;and&nbsp;create&nbsp;a&nbsp;coherent&nbsp;approach</p>\r\n\r\n<p>We&nbsp;ensure&nbsp;the&nbsp;processes&nbsp;are&nbsp;streamlined&nbsp;and&nbsp;the&nbsp;resources&nbsp;are&nbsp;aligned&nbsp;to&nbsp;achieve&nbsp;organizational&nbsp;goals&nbsp;and&nbsp;objectives</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pm_enquiry`
--

CREATE TABLE `pm_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pm_enquiry`
--

INSERT INTO `pm_enquiry` (`id`, `name`, `email`, `message`, `created_date`, `updated_date`, `status`) VALUES
(1, 'Rajkumar', 'rajkumarramineni19@gmail.com', 'sdfghjk', '2020-07-16 06:14:05.756705', '0000-00-00 00:00:00', 0),
(4, 'logio', 'terst@gmail.com', 'sdvdfgfdi', '2020-07-19 13:44:55.977984', '0000-00-00 00:00:00', 1),
(5, 'dasfds', 'sdgdzrf@gmail.com', 'ewafrshgdth', '2020-07-19 13:47:08.006803', '0000-00-00 00:00:00', 1),
(6, 'abc', 'abc@gmail.com', 'abcqwertyui', '2020-07-21 08:20:19.011343', '2020-07-21 08:20:19', 1),
(7, 'ok', 'ok@gmail.com', 'sfusdjfknbrukiefgh', '2020-07-21 08:21:29.663815', '2020-07-21 08:21:29', 1),
(8, 'rajkumar', 'admin@admin.com', 'rtyhrtdytr', '2020-07-21 10:13:52.311220', '2020-07-21 10:13:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `professionalservices`
--

CREATE TABLE `professionalservices` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `first_title` varchar(255) NOT NULL,
  `images` varchar(100) NOT NULL,
  `descriptions` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professionalservices`
--

INSERT INTO `professionalservices` (`id`, `title`, `first_title`, `images`, `descriptions`, `created_date`, `updated_date`, `status`) VALUES
(2, 'Management And Technology', 'Intelligence Systems is uniquely positioned to offer modern business management expertise and cutting-edge technologies, both under one roof. This, one-of-a-kind professional services empower enterprises to stay focused on their core business goals and ob', '202007192215122466490_program_management_2.png', '<p>How Do We Help Our Customers With?</p>\r\n\r\n<ul>\r\n	<li>We possess deep expertise in offering management and technology solutions in niche sectors such as Banking, Healthcare, and Telecom</li>\r\n	<li>On the management front, we help with -- Strategic planning, Business line management, federal program management, and Process improvement and Business Systems Planning (BSP)</li>\r\n	<li>And technologically we help with &ndash; Process engineering, Enterprise architecture, Cloud transformation, Cybersecurity, IV&amp;V, and Change &amp; Configuration management</li>\r\n	<li>And technologically we help with &ndash; Process engineering, Enterprise architecture, Cloud transformation, Cybersecurity, IV&amp;V, and Change &amp; Configuration management</li>\r\n	<li>The demonstrated and proven track record coupled with deep domain expertise enables us to deliver robust solutions within time and budget</li>\r\n</ul>\r\n\r\n<p>How Does It Benefit Our Customers?</p>\r\n\r\n<ul>\r\n	<li>Increased Return on Investment (ROI) on management and technology solutions</li>\r\n	<li>Process improvement practice significantly increase productivity levels</li>\r\n	<li>Strategic planning and management help in achieving short and long term goals</li>\r\n	<li>Cybersecurity protection, cloud transformation enhances user experience</li>\r\n	<li>Business systems planning (BSP) makes enterprise future-ready, while fueling growth</li>\r\n</ul>\r\n', '2020-07-19 16:45:12', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `professional_services`
--

CREATE TABLE `professional_services` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professional_services`
--

INSERT INTO `professional_services` (`id`, `name`, `email`, `message`, `created_date`, `updated_date`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', 'We possess deep expertise in offering management and technology solutions in niche sectors such as Banking, Healthcare, and Telecom', '2020-07-17 08:26:45', '0000-00-00 00:00:00', 1),
(2, 'rtret', 'superadmin@gmail.com', 'weratwargttesrgsg', '2020-07-21 10:12:11', '2020-07-21 10:12:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_title` text NOT NULL,
  `forgot_pass_email` varchar(255) NOT NULL,
  `image` varchar(150) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `title`, `description`, `meta_keywords`, `meta_description`, `meta_title`, `forgot_pass_email`, `image`, `created_date`) VALUES
(1, 'Intelligence Systems', 'Intelligence Systems as the very name define – we’ve been consistently ideating, conceptualizing, planning, building, and implementing cutting-edge, emerging technologies driven solutions for US Federal Government and Fortune 500 companies.', 'Intelligence Systems, Best Intelligence Systems', 'Intelligence Systems  Works on different services', 'Intelligence Systems', 'admin@intelligence.com', '202007211706261176523_logo.png', '2020-07-25 06:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `services_categories_id` int(50) NOT NULL,
  `image` varchar(150) NOT NULL,
  `first_title` varchar(255) DEFAULT NULL,
  `tittle` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `services_categories_id`, `image`, `first_title`, `tittle`, `description`, `created_date`, `updated_date`, `status`) VALUES
(1, 1, '202007191614511436762_img7.png', 'Intelligence Systems program management is complete, comprehensive that addresses the challenges of large enterprises.', 'Program Managements', '<p>How Do We Help Our Customers With Program Management?</p>\r\n\r\n<ul>\r\n	<li>The program management covers the entire gamut of the organization</li>\r\n	<li>Project plan covers analysis, scope cost, schedule, quality, resourcing, risk identification and mitigating</li>\r\n	<li>Design and development of software test plans (STP), test procedures (TPROC) and software test reports (STR) and test evaluation programs</li>\r\n	<li>Deploy agile methodologies for sprint planning, build transparency, increase stakeholder&rsquo;s engagement, and create a coherent approach</li>\r\n	<li>We ensure the processes are streamlined and the resources are aligned to achieve organizational goals and objectives</li>\r\n</ul>\r\n\r\n<p>How Does It Benefit Our Customers?</p>\r\n\r\n<ul>\r\n	<li>Ensures all applications running coherently and consistently</li>\r\n	<li>Improved user experience enabling operational efficiency</li>\r\n	<li>Minimizes costs, risks, maximize productivity</li>\r\n	<li>Enhanced speed, scale, agility that empowers accelerate time to market</li>\r\n	<li>Achieve intended business goals and objectives</li>\r\n</ul>\r\n', '2020-07-19 10:52:40', '0000-00-00 00:00:00', 1),
(2, 2, '202007180749413229866_img9.png', 'The basic premise on which DevSecOps is implemented is to protect the applications from security risks and threats. Our team comprising of practice heads, architects come with deep expertise in DevSecOps implementation at enterprise level.', 'DevSecOps', '<p>How Do We Help Our Customers With DevSecOps?</p>\r\n\r\n<p>Intelligence Systems has built robust systems and processes for the implementation of DevSecOps</p>\r\n\r\n<p>Security is at the heart of all our applications development and implementations</p>\r\n\r\n<p>Some advanced tools we use are threat modeler, contact security, Kibana and Grafana</p>\r\n\r\n<p>A strong team is built with all the tools and processes to meet the growing application security demands</p>\r\n\r\n<p>Change management protocols, version controlling, identifying the security gaps, and creating a new production environment to address any security threat and mitigate it.</p>\r\n\r\n<p>Our team provides the ability, speed, and agility to accelerate time to market</p>\r\n\r\n<p>How Does It Benefit Our Customers?</p>\r\n\r\n<p>Significant reduction in costs and time in detecting and eliminating security threats at the right time</p>\r\n\r\n<p>Early identification of vulnerabilities and their elimination ensures speedy deployments</p>\r\n\r\n<p>Enhanced collaboration and communication between team enables eliminating vulnerabilities on time and improving efficiency levels</p>\r\n\r\n<p>Elimination of all security threats at the development stage propels productivity with no downtime</p>\r\n\r\n<p>Business continuity ensured even in a pandemic situation</p>\r\n', '2020-07-18 05:49:41', '0000-00-00 00:00:00', 1),
(3, 3, '202007180750388110793_img11.png', 'Cyber security has never been so prevalent as it is today. Recent stats show that 60% of businesses are forced to suspend operations after a cyber-attack. Enterprise of all sizes are ramping up the security for all their digital assets to protect their IT', 'Cyber Security', '<p>How Do We Help Our Customers With Cyber Security?</p>\r\n\r\n<p>Intelligence Systems, over time has built robust cybersecurity capabilities</p>\r\n\r\n<p>We possess deep expertise in data breach, phishing and ransomware detections and preventions</p>\r\n\r\n<p>A methodical approach and meticulous planning are adopted to keep our customers business safe</p>\r\n\r\n<p>Internal and external vulnerabilities are analyzed threadbare</p>\r\n\r\n<p>We create a comprehensive audit of internal and external vulnerabilities an analyze them threadbare</p>\r\n\r\n<p>Our proactive strategy of threat detection, prevention and response and continuous monitoring keeps our customers&rsquo; business safe</p>\r\n\r\n<p>How Does It Benefit Our Customers?</p>\r\n\r\n<p>We help with protection of networks and data from unauthorized access enabling data security</p>\r\n\r\n<p>Business continuity with no downtime ensures all processes running smoothly enhances productivity</p>\r\n\r\n<p>Strong and robust security protocols in place enhanced organization&rsquo;s credibility in the market</p>\r\n\r\n<p>Enhances reputation and corporate governance</p>\r\n\r\n<p>Significantly reduced operational costs, risks fueling growth</p>\r\n', '2020-07-18 06:12:52', '0000-00-00 00:00:00', 1),
(4, 4, '202007180751427016082_img12.png', 'We are living in uncertain times and this is being called the new normal. Businesses all over the world are trying to adjust to it by automating the processes to ensure business continuity and Cloud Transformation is at the top of the list.Cloud Transform', 'Cloud Services', '<p>How Do We Help Our Customers With Cloud Services?</p>\r\n\r\n<p>We help our customers with end to end cloud migration and transformation</p>\r\n\r\n<p>We excel in on-premise to cloud for Azure, AWS, and Salesforce</p>\r\n\r\n<p>Formulate Analytics of Alternates (AoA) for cloud migration detailing specific requirements, efficiency, and cost-savings</p>\r\n\r\n<p>We go methodically by establishing goals, formulating the security strategy, data migration planning, switch production and business continuity</p>\r\n\r\n<p>We help with across all applications such as IaaS, PaaS, SaaS</p>\r\n\r\n<p>Single or multi-cloud environment options are explored based on specific customer requirements</p>\r\n\r\n<p>How Does It Benefit Our Customers?</p>\r\n\r\n<p>Enhanced operational efficiency</p>\r\n\r\n<p>Fewer infrastructure requirements reduced operational costs</p>\r\n\r\n<p>Enhanced data security, auto data backups with log metrics</p>\r\n\r\n<p>Applications run at greater speed enriching customers&rsquo; digital experience</p>\r\n\r\n<p>Speed, scale, and agility in customer services with less downtime</p>\r\n\r\n<p>Greater collaboration among employees and all stakeholders</p>\r\n\r\n<p>Significant increase in efficiency and productivity</p>\r\n', '2020-07-18 06:13:01', '0000-00-00 00:00:00', 1),
(5, 5, '202007180752487936438_s1.png', 'The challenges of having integrated systems for interoperability bring IV&V and test automation to the forefront. There is a high demand within Federal programs to deliver high quality software solutions to End Users and the business customers. At Intelli', 'Independent Verification And Validation (IV&V)', '<ul>\r\n	<li>\r\n	<p>How Do We Help Our Customers With IV&amp;V?</p>\r\n	</li>\r\n	<li>We possess deep experience in reviewing, verifying, and validating a web application, software product or mobile apps</li>\r\n	<li>We leverage state-of-the-art tools, technologies, and frameworks in ensuring the verification is done in consonance with global standards</li>\r\n	<li>The systematic process such as unit testing, integration testing, functional testing, UI, UX testing, and system testing is carried out in line with the specifications</li>\r\n	<li>The entire process is segregated in phases with planning, reviewing, assessing, and reporting for greater transparency and flexibility</li>\r\n	<li>&nbsp;</li>\r\n	<li>\r\n	<p>How Does It Benefit Our Customers?</p>\r\n	</li>\r\n	<li>\r\n	<p>&nbsp;</p>\r\n	</li>\r\n	<li>The application IV&amp;V comes with zero defects hence performs at peak level</li>\r\n	<li>Ensures 24/7 uptime, meaning increased productivity levels</li>\r\n	<li>Reduced managed services results in minimizing costs and maximizing revenue</li>\r\n	<li>Faster time to market enables market competitive edge</li>\r\n	<li>Significant improvement in employee engagement and collaboration</li>\r\n	<li>llaboration</li>\r\n</ul>\r\n', '2020-07-21 05:59:11', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services_categories`
--

CREATE TABLE `services_categories` (
  `id` int(11) NOT NULL,
  `service_category` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_title` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_date` varchar(6) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `p_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_categories`
--

INSERT INTO `services_categories` (`id`, `service_category`, `image`, `short_description`, `meta_keywords`, `meta_description`, `meta_title`, `created_date`, `updated_date`, `status`, `p_link`) VALUES
(1, 'Program Management', '202007201222363697139_program_management_banner.png', 'Turnkey, End-to-end Program Management that enables you to automate processes, improve efficiency, increase productivity, and fuels growth', 'Intelligence Systems, Best Intelligence Systems', 'Intelligence Systems  Works on different services', 'Intelligence Systems', '2020-07-24 06:21:32', '2020-0', 1, 'program-management'),
(2, 'DevSecOps', '202007201223149132330_devops_banner.png', 'Accelerated solutions from development to deployment, leveraging automation and enhanced security features for operational efficiency, we offer all. Industry standards project delivery at scale and speed.', 'Intelligence Systems, Best Intelligence Systems', 'Intelligence Systems  Works on different services', 'Intelligence Systems', '2020-07-24 06:05:53', '2020-0', 1, 'devsecops'),
(3, 'Cyber Security', '202007180755243194766_cyber_banner.png', 'Our security experts leverage cutting-edge technologies and empower you to protect your digital assets from all threats ensuring unhindered business continuity.', 'Intelligence Systems, Best Intelligence Systems', 'Intelligence Systems  Works on different services', 'Intelligence Systems', '2020-07-24 06:06:02', '2020-0', 1, 'cyber-security'),
(4, 'Cloud Services', '202007180755404578967_cloud_banner.png', 'We excel in offering Cloud Transformation. Our expertise on Azure, AWS will help you with on-prem to cloud migration enabling business processes automation', 'Intelligence Systems, Best Intelligence Systems', 'Intelligence Systems  Works on different services', 'Intelligence Systems', '2020-07-24 06:06:12', '2020-0', 1, 'cloud-services'),
(5, 'IV&V', '202007180756213454032_iv_and_v.png', 'Our core expertise lies in Independent Verification and Validation (IV&V). Our end-to-end systems assessments, quality assurance, and audit ensured a zero-defect solution', 'Intelligence Systems, Best Intelligence Systems', 'Intelligence Systems  Works on different services', 'Intelligence Systems', '2020-07-24 06:06:20', '2020-0', 1, 'iv-v');

-- --------------------------------------------------------

--
-- Table structure for table `servies_1`
--

CREATE TABLE `servies_1` (
  `id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servies_1`
--

INSERT INTO `servies_1` (`id`, `image`, `content`, `created_date`, `updated_date`, `status`) VALUES
(1, '202007160637512894513_service_banner.png', 'text', '2020-07-16 04:37:51.147573', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(11) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `technology` varchar(250) NOT NULL,
  `caption` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `slider_image`, `technology`, `caption`, `status`, `created_date`, `updated_date`) VALUES
(1, '202007191525417444364_banner1.png', 'Intelligence Systems', 'Since our establishment, we have been delivering high-quality and sustainable software solutions for corporate purposes of worldwide bussinesses.', 1, '2020-07-19 09:55:41.746738', '0000-00-00 00:00:00'),
(2, '202007191525067018101_banner6.png', 'DevSecOps', 'ccelerated solutions from development to deployment, leveraging automation and enhanced security features for operational efficiency', 1, '2020-07-19 09:55:06.799002', '0000-00-00 00:00:00'),
(3, '202007191526108494513_banner2.png', 'Cyber Security', 'Our security experts leverage cutting-edge technologies and empower you to protect your digital assets from all threats ensuring unhindered business continuity.', 1, '2020-07-19 09:56:10.556162', '0000-00-00 00:00:00'),
(4, '202007191527229947569_banner3.png', 'Cloud Services', 'We excel in offering Cloud Transformation. Our expertise on Azure, AWS will help you with on-prem to cloud migration enabling business processes automation', 1, '2020-07-19 09:57:22.094202', '0000-00-00 00:00:00'),
(7, '202007191533203047361_banner5.png', 'IV&V', 'Our core expertise lies in Independent Verification and Validation (IV&V). Our end-to-end systems assessments, quality assurance, and audit ensured a zero-defect solution', 1, '2020-07-24 09:59:32.554128', '2020-07-24 09:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `social_media_links`
--

CREATE TABLE `social_media_links` (
  `id` int(11) NOT NULL,
  `linkden_links` varchar(150) NOT NULL,
  `facebook_links` varchar(150) NOT NULL,
  `twitter_links` varchar(150) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media_links`
--

INSERT INTO `social_media_links` (`id`, `linkden_links`, `facebook_links`, `twitter_links`, `status`, `created_date`, `updated_date`) VALUES
(1, 'https://www.linkedin.com/', 'https://www.facebook.com/', 'https://www.twitter.com/', 1, '2020-07-21 05:24:03.614036', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `designation` varchar(150) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `fullname`, `image`, `designation`, `createdate`, `updated_date`, `status`) VALUES
(1, 'janweek', '202007211356303851947_team_8_270x248.jpg', 'UI developer', '2020-07-21 08:26:30', '2020-07-21 08:26:30', 1),
(2, 'camaroon', '202007151245573440197_team_10_270x248.jpg', 'php developer', '2020-07-15 10:45:57', '0000-00-00 00:00:00', 1),
(3, 'chinchong', '202007151247261311120_team_7_270x248.jpg', 'java developer', '2020-07-15 10:47:26', '0000-00-00 00:00:00', 1),
(4, 'rich dotcom', '202007151248251505985_team_13_420x424.jpg', 'hacker', '2020-07-15 10:48:25', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_level` varchar(3) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'inactive',
  `verification_key` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `created_date`, `updated_date`, `user_level`, `status`, `verification_key`) VALUES
(2, 'admin', 'admin', 'admin@intelligence.com', '25a41cec631264f04815eda23dc6edd9', '2020-07-25 07:23:21', '2020-07-22 05:17:20', '1', '1', '69c0e08aa3d1c02d028a82d177d1b394');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutcontent`
--
ALTER TABLE `aboutcontent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_core_competencies`
--
ALTER TABLE `about_core_competencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_key_differentiators`
--
ALTER TABLE `about_key_differentiators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_leadership`
--
ALTER TABLE `about_leadership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_servies`
--
ALTER TABLE `about_servies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_mail`
--
ALTER TABLE `contact_mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join_us`
--
ALTER TABLE `join_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pm_content`
--
ALTER TABLE `pm_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pm_enquiry`
--
ALTER TABLE `pm_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professionalservices`
--
ALTER TABLE `professionalservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional_services`
--
ALTER TABLE `professional_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_categories`
--
ALTER TABLE `services_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servies_1`
--
ALTER TABLE `servies_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media_links`
--
ALTER TABLE `social_media_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutcontent`
--
ALTER TABLE `aboutcontent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `about_core_competencies`
--
ALTER TABLE `about_core_competencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_key_differentiators`
--
ALTER TABLE `about_key_differentiators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_leadership`
--
ALTER TABLE `about_leadership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_servies`
--
ALTER TABLE `about_servies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact_mail`
--
ALTER TABLE `contact_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `join_us`
--
ALTER TABLE `join_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pm_content`
--
ALTER TABLE `pm_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pm_enquiry`
--
ALTER TABLE `pm_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `professionalservices`
--
ALTER TABLE `professionalservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `professional_services`
--
ALTER TABLE `professional_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services_categories`
--
ALTER TABLE `services_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `servies_1`
--
ALTER TABLE `servies_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `social_media_links`
--
ALTER TABLE `social_media_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
