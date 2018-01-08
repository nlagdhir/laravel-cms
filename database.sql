-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2018 at 12:26 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_learn_larasites`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_11_120323_create_roles_table', 2),
('2016_03_12_065818_create_sliders_table', 3),
('2016_03_12_092003_create_posts_table', 4),
('2016_03_14_093255_create_pages_table', 5),
('2016_03_15_090022_create_settings_table', 6),
('2016_03_16_090751_create_portfolios_table', 7),
('2016_03_17_090522_add_layout_field_in_page_table', 8),
('2016_03_17_122352_create_teams_table', 9),
('2016_04_14_092740_create_videos_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_layout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_content` text COLLATE utf8_unicode_ci,
  `page_short_content` text COLLATE utf8_unicode_ci,
  `page_thumbnail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_slug`, `page_layout`, `page_content`, `page_short_content`, `page_thumbnail`, `page_status`, `parent_id`, `user_id`, `created_at`, `updated_at`) VALUES
(10, 'Home', 'home', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>\r\n\r\n<blockquote>\r\n<p><em>&quot;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.&quot;</em></p>\r\n\r\n<p><small>&nbsp;Someone famous in&nbsp;<cite>Source Title</cite></small></p>\r\n</blockquote>\r\n\r\n<p>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><tt>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non sit amet, consectetur adipiscing elit. Ut adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet.</tt></p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>thisi s page&nbsp;</p>\r\n', NULL, '', 0, 1, '2016-03-14 06:49:51', '2016-03-17 05:26:43'),
(11, 'Full Width', 'full-width', 'full-width', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>\r\n\r\n<blockquote>\r\n<p><em>&quot;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.&quot;</em></p>\r\n\r\n<p><small>&nbsp;Someone famous in&nbsp;<cite>Source Title</cite></small></p>\r\n</blockquote>\r\n\r\n<p>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non sit amet, consectetur adipiscing elit. Ut adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet.</p>\r\n\r\n<blockquote>\r\n<p><em>&quot;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.&quot;</em></p>\r\n\r\n<p><small>&nbsp;Someone famous in&nbsp;<cite>Source Title</cite></small></p>\r\n</blockquote>\r\n\r\n<p>Iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non sit amet, consectetur adipiscing elit. Ut adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque lorem ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat consectetur adipiscing elit.</p>\r\n', '', NULL, '', 0, 1, '2016-03-14 08:19:56', '2016-04-05 07:34:44'),
(12, 'Portfolio', 'portfolio', '', '<p>[portfolio_page]</p>\r\n', '', NULL, '', 0, 1, '2016-03-16 00:24:08', '2016-03-17 06:39:31'),
(13, 'Left Sidebar', 'left-sidebar', 'left-sidebar', '<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>\r\n\r\n<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>\r\n\r\n<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>\r\n\r\n<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>\r\n\r\n<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>\r\n\r\n<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>\r\n\r\n<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>\r\n\r\n<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>\r\n\r\n<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>\r\n', '', NULL, '', 0, 1, '2016-03-17 03:48:33', '2016-03-17 05:22:36'),
(14, 'Right Sidebar', 'right-sidebar', 'right-sidebar', '<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>\r\n\r\n<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>\r\n\r\n<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>\r\n\r\n<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>\r\n\r\n<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>\r\n', '', NULL, '', 0, 1, '2016-03-17 05:07:16', '2016-03-17 05:07:16'),
(15, 'About us', 'about-us', 'about-us', '<div class="row">\r\n<div class="col-md-6">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, laboriosam, quod odit quo quos itaque repellat quaerat a ad alias. Vel, nostrum id ab velit veritatis consequatur fugit sequi esse.</p>\r\n\r\n\r\n<div class="row">\r\n<div class="col-sm-3"><span class="fa-stack fa-2x margin-vert-30 margin-horiz-40"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-flag fa-stack-1x fa-inverse"></i> </span></div>\r\n\r\n<div class="col-sm-9">\r\n<h3 class="margin-vert-10">Responsive Layout</h3>\r\n\r\n<p>Lorem Ipsum is simply dummy text of Lorem the printing and typesettings. Aliquam dictum nulla eu varius porta. Maecenas congue dui id posuere fermentum.</p>\r\n</div>\r\n</div>\r\n\r\n<div class="row">\r\n<div class="col-sm-3"><span class="fa-stack fa-2x margin-vert-30 margin-horiz-40"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-flag fa-stack-1x fa-inverse"></i> </span></div>\r\n\r\n<div class="col-sm-9">\r\n<h3 class="margin-vert-10">Responsive Layout</h3>\r\n\r\n<p>Lorem Ipsum is simply dummy text of Lorem the printing and typesettings. Aliquam dictum nulla eu varius porta. Maecenas congue dui id posuere fermentum.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="col-md-6"><!-- Carousel -->\r\n<div class="carousel slide" data-ride="carousel" id="carousel-example-1"><!-- Indicators -->\r\n<ol class="carousel-indicators">\r\n	<li class="active" data-slide-to="0" data-target="#carousel-example-1">&nbsp;</li>\r\n	<li data-slide-to="1" data-target="#carousel-example-1">&nbsp;</li>\r\n	<li data-slide-to="2" data-target="#carousel-example-1">&nbsp;</li>\r\n</ol>\r\n<!-- Wrapper for slides -->\r\n\r\n<div class="carousel-inner">\r\n<div class="item active"><img src="http://wp.nilesh.cs/laravel/laraDemo/laraSite/public/front/assets/img/portfolio/image12.jpg" /></div>\r\n\r\n<div class="item"><img src="http://wp.nilesh.cs/laravel/laraDemo/laraSite/public/front/assets/img/portfolio/image12.jpg" /></div>\r\n\r\n<div class="item"><img src="http://wp.nilesh.cs/laravel/laraDemo/laraSite/public/front/assets/img/portfolio/image12.jpg" /></div>\r\n</div>\r\n<!-- Controls --><a class="left carousel-control" data-slide="prev" href="#carousel-example-1"><span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" data-slide="next" href="#carousel-example-1"> <span class="glyphicon glyphicon-chevron-right"></span> </a></div>\r\n<!-- End Carousel --></div>\r\n</div>\r\n\r\n<hr class="margin-vert-40" />', '', NULL, '', 0, 1, '2016-03-17 06:08:24', '2016-04-05 07:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'dashboard_access', 'Dashboard Access', '2016-03-11 06:43:19', '2016-03-11 06:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_content` text COLLATE utf8_unicode_ci NOT NULL,
  `project_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `project_name`, `project_slug`, `project_thumb`, `project_content`, `project_url`, `created_at`, `updated_at`) VALUES
(4, 'Quam nunc putamus ', 'quam-nunc-putamus-2', 'portfolio1458123910.jpg', '<p>this is demo content</p>\r\n', 'http://google.com', '2016-03-16 04:55:10', '2016-03-17 01:59:19'),
(5, 'Velit esse molestie', 'velit-esse-molestie', 'portfolio1458125234.jpg', '<p>Velit esse molestie Velit esse molestie</p>\r\n', 'http://google.com', '2016-03-16 05:17:14', '2016-03-16 05:17:14'),
(6, 'Placerat facer possim  ', 'placerat-facer-possim-1', 'portfolio1458125285.jpg', '<p>Sed ut perspiciatis unde omnis iste natus</p>\r\n', 'http://google.com', '2016-03-16 05:18:05', '2016-03-17 01:58:00'),
(7, 'Nam liber tempor', 'nam-liber-tempor', 'portfolio1458125303.jpg', '<h3>Nam liber tempor Nam liber tempor</h3>\r\n', '', '2016-03-16 05:18:23', '2016-03-16 05:18:23'),
(8, 'Quam nunc putamus', 'quam-nunc-putamus', 'portfolio1458125324.jpg', '<h3>Quam nunc putamus Quam nunc putamus</h3>\r\n', '', '2016-03-16 05:18:44', '2016-03-16 05:18:44'),
(9, 'Velit esse molestie', 'velit-esse-molestie-1', 'portfolio1458125357.jpg', '<h3>Velit esse molestie Velit esse molestie</h3>\r\n', '', '2016-03-16 05:19:17', '2016-03-16 05:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
(2, 'A Sample Blog Title ', 'post1457777267.jpeg', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p><a href="http://complitech.net">http://complitech.net</a></p>\r\n\r\n<blockquote>\r\n<p>we provide laravel development.</p>\r\n</blockquote>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>head</td>\r\n			<td>content</td>\r\n		</tr>\r\n		<tr>\r\n			<td>head</td>\r\n			<td>content</td>\r\n		</tr>\r\n		<tr>\r\n			<td>head&nbsp;</td>\r\n			<td>content</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2016-03-12 04:25:19', '2016-03-14 02:50:45'),
(6, 'Yet Another Sample Blog Title ', 'post1457777714.jpeg', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p><a href="http://complitech.net">http://complitech.net</a></p>\r\n\r\n<blockquote>\r\n<p>we provide laravel development.</p>\r\n</blockquote>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>head</td>\r\n			<td>content</td>\r\n		</tr>\r\n		<tr>\r\n			<td>head</td>\r\n			<td>content</td>\r\n		</tr>\r\n		<tr>\r\n			<td>head&nbsp;</td>\r\n			<td>content</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2016-03-12 04:44:06', '2016-03-14 02:51:17'),
(8, 'A Sample Blog Title 2', 'post1457935886.jpeg', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p><a href="http://complitech.net">http://complitech.net</a></p>\r\n\r\n<blockquote>\r\n<p>we provide laravel development.</p>\r\n</blockquote>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>head</td>\r\n			<td>content</td>\r\n		</tr>\r\n		<tr>\r\n			<td>head</td>\r\n			<td>content</td>\r\n		</tr>\r\n		<tr>\r\n			<td>head&nbsp;</td>\r\n			<td>content</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2016-03-14 00:41:26', '2016-03-14 02:51:38'),
(9, 'Yet Another Sample Blog Title 2', 'post1457935910.jpeg', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p><a href="http://complitech.net">http://complitech.net</a></p>\r\n\r\n<blockquote>\r\n<p>we provide laravel development.</p>\r\n</blockquote>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>head</td>\r\n			<td>content</td>\r\n		</tr>\r\n		<tr>\r\n			<td>head</td>\r\n			<td>content</td>\r\n		</tr>\r\n		<tr>\r\n			<td>head&nbsp;</td>\r\n			<td>content</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2016-03-14 00:41:50', '2016-03-14 02:52:35'),
(10, 'Another Sample Blog 3', 'post1457935930.jpeg', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p><a href="http://complitech.net">http://complitech.net</a></p>\r\n\r\n<blockquote>\r\n<p>we provide laravel development.</p>\r\n</blockquote>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>head</td>\r\n			<td>content</td>\r\n		</tr>\r\n		<tr>\r\n			<td>head</td>\r\n			<td>content</td>\r\n		</tr>\r\n		<tr>\r\n			<td>head&nbsp;</td>\r\n			<td>content</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2016-03-14 00:42:10', '2016-03-14 02:52:49'),
(11, 'A Sample Blog Title With Ckeditor', 'post1457939531.jpeg', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>\r\n\r\n<p><a href="http://complitech.net">http://complitech.net</a></p>\r\n\r\n<blockquote>\r\n<p>we provide laravel development.</p>\r\n</blockquote>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>head</td>\r\n			<td>content</td>\r\n		</tr>\r\n		<tr>\r\n			<td>head</td>\r\n			<td>content</td>\r\n		</tr>\r\n		<tr>\r\n			<td>head&nbsp;</td>\r\n			<td>content</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2016-03-14 01:42:11', '2016-03-14 02:53:01'),
(12, 'Homepage', 'post1458035990.jpeg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec suscipit magna. Suspendisse lacinia interdum felis eu consectetur. Vivamus sit amet ante est, sit amet rutrum augue. Cras non sem sem, at eleifend mi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Aenean venenatis egestas iaculis. Nullam consectetur condimentum dolor at bibendum.Nulla in enim quis ipsum pulvinar imperdiet vitae nec velit. Donec non urna quam.</p>\r\n', '2016-03-15 04:29:50', '2016-03-15 04:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Site Admin', '2016-03-11 06:41:41', '2016-03-11 06:41:41'),
(2, 'user', 'Site User', '2016-03-11 06:48:43', '2016-03-11 06:48:43');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `obj_id` int(11) NOT NULL,
  `obj_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `obj_id`, `obj_type`, `key`, `value`, `created_at`, `updated_at`) VALUES
(7, 10, 'page', 'home_setting', '{"_token":"3rNJBLaRNVpB4roiNL80vmxpROjQ8I0ztAG4cBqp","type":"page","is_home":"10","header_title":"Bring something special to your site with this fresh & clean design","header_content":"Aenean venenatis egestas iaculis. Nullam consectetur condimentum dolor at bibendum. Nulla in enim quis ipsum pulvinar imperdiet.","sidebar_links":"Aenean venenatis egestas|https:\\/\\/google.com,Nullam consectetur|https:\\/\\/facebook.com,condimentum dolor|https:\\/\\/gmail.com,pulvinar imperdiet|https:\\/\\/complitech.net,Aenean venenatis egestas|https:\\/\\/google.com,Nullam consectetur|https:\\/\\/complitech.net,condimentum dolor|https:\\/\\/google.com,pulvinar imperdiet|https:\\/\\/google.com,Aenean venenatis egestas|https:\\/\\/google.com,Nullam consectetur|https:\\/\\/google.com,condimentum dolor|https:\\/\\/complitech.net,pulvinar imperdiet|https:\\/\\/facebook.com","shortcode":"shortcode","bottom_header":"Nulla in enim quis ipsum pulvinar imperdiet vitae nec velit..","bottom_content":"Aenean venenatis egestas iaculis. Donec non urna quam. Nullam consectetur condimentum dolor at bibendum."}', '2016-03-15 05:50:21', '2016-03-16 07:53:16'),
(8, 0, 'global', 'global_settings', '{"_token":"obIc6pv2xmScMywPRk6dsYbaKJZR1b0gs0ouBOLd","type":"global","menu_items":["12","15"],"footer_menu_items":["11","13","14"],"fc_title":"Portfolio Highlights","fc_content":"<h3>[Portfolio_Highlights]<\\/h3>\\r\\n","sc_title":"Contact Details","sc_content":"<p>Quay View,<br \\/>\\r\\nMullaghmore,<br \\/>\\r\\nCo. Sligo,<br \\/>\\r\\nIndia<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>Email: <a href=\\"http:\\/\\/wp.nilesh.cs\\/laravel\\/laraDemo\\/laraSite\\/public\\/#\\">info@website.com<\\/a><\\/p>\\r\\n\\r\\n<p>Website: <a href=\\"http:\\/\\/wp.nilesh.cs\\/laravel\\/laraDemo\\/laraSite\\/public\\/#\\">www.website.com<\\/a><\\/p>\\r\\n","tc_title":"Sample Menu","tc_content":"<ul class=\\"menu\\">\\r\\n\\t<li><a class=\\"fa-tasks\\" href=\\"#\\">Placerat facer possim<\\/a><\\/li>\\r\\n\\t<li><a class=\\"fa-users\\" href=\\"#\\">Quam nunc putamus<\\/a><\\/li>\\r\\n\\t<li><a class=\\"fa-signal\\" href=\\"#\\">Velit esse molestie<\\/a><\\/li>\\r\\n\\t<li><a class=\\"fa-coffee\\" href=\\"#\\">Nam liber tempor<\\/a><\\/li>\\r\\n<\\/ul>\\r\\n","fthc_title":"Disclaimer","fthc_content":"<p>All stock images on this template demo are for presentation purposes only, intended to represent a live site and are not included with this template. Links are provided if you wish to purchase them from their copyright owners.<\\/p>\\r\\n"}', '2016-03-16 02:37:29', '2016-04-05 07:33:17'),
(9, 0, 'experts', 'experts_setting', '{"_token":"INRaqFhU1tu4FA3muo2B2mSSoMVMB4KA7ZhbRsVt","type":"experts","content":"<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.<\\/p>\\r\\n\\r\\n<p class=\\"margin-bottom-30\\">Sed fringilla sem sed massa ullamcorper, vitae rutrum justo sodales. Cras sed iaculis enim. Sed aliquet viverra nisl a tristique. Curabitur vitae mauris sem. Pellentesque iaculis nibh leo, mattis aliquet arcu tincidunt at.<\\/p>\\r\\n","skills":{"skill_label_!":"Graphic Design","skill_value_1":"92","skill_label_2":"Marketing","skill_value_2":"82","skill_label_3":"SEO","skill_value_3":"74","skill_label_4":"Programming","skill_value_4":"78","skill_label_5":"PHP","skill_value_5":"88"}}', '2016-03-18 01:00:29', '2016-03-18 02:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `content`, `url`, `created_at`, `updated_at`) VALUES
(5, 'Slider 1', 'slider1457772737.jpg', 'Caption for slider 1', 'http://google.com', '2016-03-12 02:35:03', '2016-03-12 03:22:17'),
(6, 'Slider 2', 'slider1457772999.jpg', 'Caption slide 2', 'http://google.com', '2016-03-12 03:26:39', '2016-03-12 03:26:39'),
(7, 'Slide 3', 'slider1457773026.jpg', 'Caption for slide 3', 'http://facebook.com', '2016-03-12 03:27:06', '2016-03-12 03:27:06'),
(8, 'Slide 4', 'slider1457773061.jpg', 'Caption for slide 4', 'http://complitech.net', '2016-03-12 03:27:41', '2016-03-12 03:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `social` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `thumb`, `designation`, `about`, `social`, `created_at`, `updated_at`) VALUES
(7, 'April', 'team1458220593.jpg', 'Programmer', 'Nullam id dolor id nibh ultricies vehicula ut id elit.', '{"\'facebook_url\'":"http:\\/\\/facebook.com","\'linkedin_url\'":"http:\\/\\/linkedin.com","\'twitter_url\'":"http:\\/\\/twitter.com","\'google_url\'":"http:\\/\\/google.com"}', '2016-03-17 07:46:33', '2016-03-17 07:53:42'),
(8, 'Simon', 'team1458221068.jpg', 'Sales Assistant', 'Nullam id dolor id nibh ultricies vehicula ut id elit.', '{"\'facebook_url\'":"http:\\/\\/facebook.com","\'linkedin_url\'":"http:\\/\\/linkedin.com","\'twitter_url\'":"http:\\/\\/twitter.com","\'google_url\'":"http:\\/\\/google.com"}', '2016-03-17 07:54:28', '2016-03-17 07:54:28'),
(9, 'Victoria', 'team1458221106.jpg', 'Support', 'Nullam id dolor id nibh ultricies vehicula ut id elit.', '{"\'facebook_url\'":"http:\\/\\/facebook.com","\'linkedin_url\'":"http:\\/\\/linkedin.com","\'twitter_url\'":"http:\\/\\/twitter.com","\'google_url\'":"http:\\/\\/google.com"}', '2016-03-17 07:55:06', '2016-03-17 07:55:06'),
(10, 'Chris', 'team1458221139.jpg', 'Graphic Design', 'Nullam id dolor id nibh ultricies vehicula ut id elit.', '{"\'facebook_url\'":"http:\\/\\/facebook.com","\'linkedin_url\'":"http:\\/\\/linkedin.com","\'twitter_url\'":"http:\\/\\/twitter.com","\'google_url\'":"http:\\/\\/google.com"}', '2016-03-17 07:55:39', '2016-03-17 07:55:39'),
(11, 'John', 'team1458221185.jpg', 'Public Relations', 'Nullam id dolor id nibh ultricies vehicula ut id elit.', '{"\'facebook_url\'":"http:\\/\\/facebook.com","\'linkedin_url\'":"http:\\/\\/linkedin.com","\'twitter_url\'":"http:\\/\\/twitter.com","\'google_url\'":"http:\\/\\/google.com"}', '2016-03-17 07:56:25', '2016-03-17 07:56:25'),
(12, 'Grace', 'team1458221223.jpg', 'Accounting', 'Nullam id dolor id nibh ultricies vehicula ut id elit.', '{"\'facebook_url\'":"http:\\/\\/facebook.com","\'linkedin_url\'":"http:\\/\\/linkedin.com","\'twitter_url\'":"http:\\/\\/twitter.com","\'google_url\'":"http:\\/\\/google.com"}', '2016-03-17 07:57:03', '2016-03-17 07:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$CcY86chIf9Dl.chTpJrvoecSpu.e3NwAgqX4K0aOTNR8x.fH7EMwW', 'HoRVgfxp4v8Swf1xlmeua9ipzIcQmk6yzwawWR88thE73dhEKoy8xtIzETxC', '2016-03-11 06:44:25', '2018-01-08 01:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `video`, `created_at`, `updated_at`) VALUES
(1, 'this is first video ', 'video description Updated', 'video1460629410.mp4', '2016-04-14 04:29:27', '2016-04-14 04:53:30'),
(2, 'This is second Video', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'video1460632333.mp4', '2016-04-14 05:42:13', '2016-04-14 05:42:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
