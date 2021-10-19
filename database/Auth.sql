-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 04, 2018 at 09:22 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `cat_name`, `slug`, `created_at`, `updated_at`) VALUES
(6, 'Wordpress', 'wordpress', '2018-06-12 10:00:20', '0000-00-00 00:00:00'),
(7, 'Web Design', 'web-design', '2018-06-21 10:02:16', '0000-00-00 00:00:00'),
(8, 'PhotoShop', 'photoshop', '2018-06-23 09:14:19', '0000-00-00 00:00:00'),
(9, 'Sports', 'sports', '2018-06-23 09:14:37', '0000-00-00 00:00:00'),
(10, 'Programming', 'programming', '2018-06-23 09:16:35', '0000-00-00 00:00:00'),
(11, 'News', 'news', '2018-07-16 08:36:58', '2018-07-16 05:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_desc` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `featured_img` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `content` text NOT NULL,
  `deleted_at` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `allow_comments` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `title`, `category_id`, `user_id`, `slug`, `meta_desc`, `meta_keywords`, `featured_img`, `status`, `content`, `deleted_at`, `created_at`, `updated_at`, `allow_comments`) VALUES
(3, 'Our Security Policy has been Update', 7, 1, 'our-security-policy-has-been-update', 'dummy description', 'one,two', 'http://localhost/login/uploads/blog_images/ps4.jpg', 1, '<p>some content</p>', 'Null', '2018-06-23 02:52:59', '2018-06-23 06:12:56', 1),
(4, 'Laravel and Vue.js in action', 10, 1, 'laravel-and-vuejs-in-action', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Laravel, Php, Vue.js', 'http://localhost/login/uploads/blog_images/vue-spa-with-laravel.png', 1, '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;"><span style="font-family: Helvetica;">L</span><span style="font-family: Helvetica;">?</span><span style="font-family: Helvetica;">orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero. Mauris varius nisl bibendum porta tincidunt. Suspendisse vitae dui efficitur, ullamcorper ligula eu, sagittis arcu. Curabitur euismod neque nec suscipit consectetur. Donec rutrum nec magna vel auctor. Duis sapien velit, pharetra sit amet urna et, consequat elementum velit. Integer eros eros, condimentum eget enim vel, consectetur euismod est. Nam sodales congue convallis. Donec nunc magna, suscipit eget posuere in, viverra a lorem.</span></p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;"><span style="font-family: Helvetica;">Donec vel placerat massa. Integer nisi libero, venenatis vitae vulputate in, cursus ut magna. Suspendisse potenti. Sed sit amet venenatis turpis, vitae consequat est. Mauris vitae sem id erat gravida vestibulum. Nullam venenatis at quam eget pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc sit amet eleifend metus, non elementum enim. Nulla rhoncus, orci in commodo hendrerit, ipsum massa vulputate tellus, vitae tempor nibh nunc nec velit. Nullam viverra, turpis eu gravida rutrum, mi orci viverra lorem, id facilisis est turpis varius diam. Nunc sed tincidunt ligula, quis convallis lacus. Fusce facilisis faucibus lectus, a laoreet nunc facilisis eu. Mauris faucibus, purus ut facilisis ultrices, nibh diam luctus ex, et interdum eros mauris eget nulla. Mauris volutpat nibh at lectus ullamcorper aliquet. Fusce consectetur commodo eros, ut fringilla dolor tempor non. Etiam ac libero vel turpis commodo aliquet a quis est.</span></p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;"><span style="font-family: Helvetica;">Donec ut odio pharetra, ullamcorper tellus non, luctus mi. Nulla imperdiet lorem tellus, vitae scelerisque lacus porta eget. Mauris vel odio dolor. Quisque fringilla at nulla id auctor. Nam molestie finibus tortor, ut dapibus nisi feugiat sed. Vestibulum gravida eros sed arcu consectetur, dictum interdum tortor condimentum. Aliquam consectetur elit a mi faucibus, a consectetur arcu vestibulum. Cras vel dui et mi pretium condimentum sed nec sapien. Vestibulum finibus volutpat massa.</span></p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;"><span style="font-family: Helvetica;">Quisque porta massa id elementum facilisis. Vestibulum a imperdiet orci. Proin gravida odio a maximus fermentum. Mauris molestie eget nisl in ultrices. Phasellus quis risus velit. Donec finibus mi gravida mi gravida sagittis. Duis nec ullamcorper felis, eu posuere lectus. Ut tincidunt, quam eget aliquet egestas, erat enim pulvinar nisi, ac ultrices tellus nunc nec tellus. Sed vitae lacus vitae dui facilisis volutpat. Ut congue ex vitae purus dictum, nec elementum mi aliquam. Mauris elit diam, tempus quis feugiat sit amet, mattis et sapien. Sed eu dolor commodo, volutpat odio ac, viverra odio.</span></p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;"><span style="font-family: Helvetica;">Integer mauris dolor, scelerisque quis lorem vitae, euismod convallis massa. Nulla consequat ligula at justo efficitur, in porta massa porta. Vivamus interdum sagittis diam, vitae ultricies diam sagittis ut. Quisque fringilla nunc id libero mollis facilisis. Nam eu scelerisque sapien, sed varius velit. Curabitur purus magna, finibus vitae suscipit eu, bibendum nec mi. Quisque neque neque, pulvinar at ullamcorper in, aliquet eu libero. Maecenas sed dapibus diam. Phasellus pretium scelerisque lectus, a molestie erat sodales in. Suspendisse euismod mollis neque, non lacinia eros viverra sit amet. Ut venenatis diam mollis sem interdum, id luctus dui pretium.</span></p>', 'Null', '2018-06-23 06:20:42', '2018-06-23 06:20:42', 1),
(5, 'Create Restfull API with Laravel 5.3', 7, 1, 'create-restfull-api-with-laravel-53', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et,', 'Restful API, Laravel, Larave 5.3,API', 'http://localhost/login/uploads/blog_images/Laravel-51.png', 1, '<hr style="margin: 0px; padding: 0px; border-top: 0px; clear: both; height: 1px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); font-family: " open="" sans",="" arial,="" sans-serif;="" text-align:="" center;"=""><div id="Content" style="margin: 0px; padding: 0px; position: relative; font-family: " open="" sans",="" arial,="" sans-serif;="" text-align:="" center;"=""><div class="boxed" style="margin: 10px 28.7969px; padding: 0px; clear: both;"><div id="lipsum" style="margin: 0px; padding: 0px; text-align: justify;"><p style="margin-bottom: 15px; padding: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero. Mauris varius nisl bibendum porta tincidunt. Suspendisse vitae dui efficitur, ullamcorper ligula eu, sagittis arcu. Curabitur euismod neque nec suscipit consectetur. Donec rutrum nec magna vel auctor. Duis sapien velit, pharetra sit amet urna et, consequat elementum velit. Integer eros eros, condimentum eget enim vel, consectetur euismod est. Nam sodales congue convallis. Donec nunc magna, suscipit eget posuere in, viverra a lorem.</p><p style="margin-bottom: 15px; padding: 0px;"><br></p></div></div></div>', 'Null', '2018-06-23 06:24:44', '2018-08-04 02:34:18', 1),
(6, 'laravel vs codeigniter', 10, 1, 'laravel-vs-codeigniter', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero.', 'Laravel, Codeigniter', 'http://localhost/login/uploads/blog_images/laravel-vs-codeigniter-2.jpg', 1, '<div id="Content" style="margin: 0px; padding: 0px; position: relative; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: center;"><div class="boxed" style="margin: 10px 28.7969px; padding: 0px; clear: both;"><div id="lipsum" style="margin: 0px; padding: 0px; text-align: justify;"><p style="margin-bottom: 15px; padding: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero. Mauris varius nisl bibendum porta tincidunt. Suspendisse vitae dui efficitur, ullamcorper ligula eu, sagittis arcu. Curabitur euismod neque nec suscipit consectetur. Donec rutrum nec magna vel auctor. Duis sapien velit, pharetra sit amet urna et, consequat elementum velit. Integer eros eros, condimentum eget enim vel, consectetur euismod est. Nam sodales congue convallis. Donec nunc magna, suscipit eget posuere in, viverra a lorem.</p><p style="margin-bottom: 15px; padding: 0px;">Donec vel placerat massa. Integer nisi libero, venenatis vitae vulputate in, cursus ut magna. Suspendisse potenti. Sed sit amet venenatis turpis, vitae consequat est. Mauris vitae sem id erat gravida vestibulum. Nullam venenatis at quam eget pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc sit amet eleifend metus, non elementum enim. Nulla rhoncus, orci in commodo hendrerit, ipsum massa vulputate tellus, vitae tempor nibh nunc nec velit. Nullam viverra, turpis eu gravida rutrum, mi orci viverra lorem, id facilisis est turpis varius diam. Nunc sed tincidunt ligula, quis convallis lacus. Fusce facilisis faucibus lectus, a laoreet nunc facilisis eu. Mauris faucibus, purus ut facilisis ultrices, nibh diam luctus ex, et interdum eros mauris eget nulla. Mauris volutpat nibh at lectus ullamcorper aliquet. Fusce consectetur commodo eros, ut fringilla dolor tempor non. Etiam ac libero vel turpis commodo aliquet a quis est.</p><p style="margin-bottom: 15px; padding: 0px;">Donec ut odio pharetra, ullamcorper tellus non, luctus mi. Nulla imperdiet lorem tellus, vitae scelerisque lacus porta eget. Mauris vel odio dolor. Quisque fringilla at nulla id auctor. Nam molestie finibus tortor, ut dapibus nisi feugiat sed. Vestibulum gravida eros sed arcu consectetur, dictum interdum tortor condimentum. Aliquam consectetur elit a mi faucibus, a consectetur arcu vestibulum. Cras vel dui et mi pretium condimentum sed nec sapien. Vestibulum finibus volutpat massa.</p><p style="margin-bottom: 15px; padding: 0px;">Quisque porta massa id elementum facilisis. Vestibulum a imperdiet orci. Proin gravida odio a maximus fermentum. Mauris molestie eget nisl in ultrices. Phasellus quis risus velit. Donec finibus mi gravida mi gravida sagittis. Duis nec ullamcorper felis, eu posuere lectus. Ut tincidunt, quam eget aliquet egestas, erat enim pulvinar nisi, ac ultrices tellus nunc nec tellus. Sed vitae lacus vitae dui facilisis volutpat. Ut congue ex vitae purus dictum, nec elementum mi aliquam. Mauris elit diam, tempus quis feugiat sit amet, mattis et sapien. Sed eu dolor commodo, volutpat odio ac, viverra odio.</p><p style="margin-bottom: 15px; padding: 0px;">Integer mauris dolor, scelerisque quis lorem vitae, euismod convallis massa. Nulla consequat ligula at justo efficitur, in porta massa porta. Vivamus interdum sagittis diam, vitae ultricies diam sagittis ut. Quisque fringilla nunc id libero mollis facilisis. Nam eu scelerisque sapien, sed varius velit. Curabitur purus magna, finibus vitae suscipit eu, bibendum nec mi. Quisque neque neque, pulvinar at ullamcorper in, aliquet eu libero. Maecenas sed dapibus diam. Phasellus pretium scelerisque lectus, a molestie erat sodales in. Suspendisse euismod mollis neque, non lacinia eros viverra sit amet. Ut venenatis diam mollis sem interdum, id luctus dui pretium.</p></div></div></div>', 'Null', '2018-06-23 06:27:28', '2018-06-23 06:27:28', 1),
(7, 'Photoshop new version', 8, 1, 'photoshop-new-version', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero.', 'photoshop, new-version,designing', 'http://localhost/login/uploads/blog_images/Photoshop.jpg', 1, '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero. Mauris varius nisl bibendum porta tincidunt. Suspendisse vitae dui efficitur, ullamcorper ligula eu, sagittis arcu. Curabitur euismod neque nec suscipit consectetur. Donec rutrum nec magna vel auctor. Duis sapien velit, pharetra sit amet urna et, consequat elementum velit. Integer eros eros, condimentum eget enim vel, consectetur euismod est. Nam sodales congue convallis. Donec nunc magna, suscipit eget posuere in, viverra a lorem.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Donec vel placerat massa. Integer nisi libero, venenatis vitae vulputate in, cursus ut magna. Suspendisse potenti. Sed sit amet venenatis turpis, vitae consequat est. Mauris vitae sem id erat gravida vestibulum. Nullam venenatis at quam eget pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc sit amet eleifend metus, non elementum enim. Nulla rhoncus, orci in commodo hendrerit, ipsum massa vulputate tellus, vitae tempor nibh nunc nec velit. Nullam viverra, turpis eu gravida rutrum, mi orci viverra lorem, id facilisis est turpis varius diam. Nunc sed tincidunt ligula, quis convallis lacus. Fusce facilisis faucibus lectus, a laoreet nunc facilisis eu. Mauris faucibus, purus ut facilisis ultrices, nibh diam luctus ex, et interdum eros mauris eget nulla. Mauris volutpat nibh at lectus ullamcorper aliquet. Fusce consectetur commodo eros, ut fringilla dolor tempor non. Etiam ac libero vel turpis commodo aliquet a quis est.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Donec ut odio pharetra, ullamcorper tellus non, luctus mi. Nulla imperdiet lorem tellus, vitae scelerisque lacus porta eget. Mauris vel odio dolor. Quisque fringilla at nulla id auctor. Nam molestie finibus tortor, ut dapibus nisi feugiat sed. Vestibulum gravida eros sed arcu consectetur, dictum interdum tortor condimentum. Aliquam consectetur elit a mi faucibus, a consectetur arcu vestibulum. Cras vel dui et mi pretium condimentum sed nec sapien. Vestibulum finibus volutpat massa.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Quisque porta massa id elementum facilisis. Vestibulum a imperdiet orci. Proin gravida odio a maximus fermentum. Mauris molestie eget nisl in ultrices. Phasellus quis risus velit. Donec finibus mi gravida mi gravida sagittis. Duis nec ullamcorper felis, eu posuere lectus. Ut tincidunt, quam eget aliquet egestas, erat enim pulvinar nisi, ac ultrices tellus nunc nec tellus. Sed vitae lacus vitae dui facilisis volutpat. Ut congue ex vitae purus dictum, nec elementum mi aliquam. Mauris elit diam, tempus quis feugiat sit amet, mattis et sapien. Sed eu dolor commodo, volutpat odio ac, viverra odio.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Integer mauris dolor, scelerisque quis lorem vitae, euismod convallis massa. Nulla consequat ligula at justo efficitur, in porta massa porta. Vivamus interdum sagittis diam, vitae ultricies diam sagittis ut. Quisque fringilla nunc id libero mollis facilisis. Nam eu scelerisque sapien, sed varius velit. Curabitur purus magna, finibus vitae suscipit eu, bibendum nec mi. Quisque neque neque, pulvinar at ullamcorper in, aliquet eu libero. Maecenas sed dapibus diam. Phasellus pretium scelerisque lectus, a molestie erat sodales in. Suspendisse euismod mollis neque, non lacinia eros viverra sit amet. Ut venenatis diam mollis sem interdum, id luctus dui pretium.</p>', 'Null', '2018-06-23 06:30:29', '2018-06-23 06:30:29', 1),
(8, 'England made highest runs score in world cricket', 9, 1, 'england-made-highest-runs-score-in-world-cricket', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero. Mauris varius nisl bibendum porta tincidunt.', 'england, cricket, sports,England -cricket', 'http://localhost/login/uploads/blog_images/skysports-jason-roy-roy-england_4340099.jpg', 1, '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero. Mauris varius nisl bibendum porta tincidunt. Suspendisse vitae dui efficitur, ullamcorper ligula eu, sagittis arcu. Curabitur euismod neque nec suscipit consectetur. Donec rutrum nec magna vel auctor. Duis sapien velit, pharetra sit amet urna et, consequat elementum velit. Integer eros eros, condimentum eget enim vel, consectetur euismod est. Nam sodales congue convallis. Donec nunc magna, suscipit eget posuere in, viverra a lorem.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Donec vel placerat massa. Integer nisi libero, venenatis vitae vulputate in, cursus ut magna. Suspendisse potenti. Sed sit amet venenatis turpis, vitae consequat est. Mauris vitae sem id erat gravida vestibulum. Nullam venenatis at quam eget pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc sit amet eleifend metus, non elementum enim. Nulla rhoncus, orci in commodo hendrerit, ipsum massa vulputate tellus, vitae tempor nibh nunc nec velit. Nullam viverra, turpis eu gravida rutrum, mi orci viverra lorem, id facilisis est turpis varius diam. Nunc sed tincidunt ligula, quis convallis lacus. Fusce facilisis faucibus lectus, a laoreet nunc facilisis eu. Mauris faucibus, purus ut facilisis ultrices, nibh diam luctus ex, et interdum eros mauris eget nulla. Mauris volutpat nibh at lectus ullamcorper aliquet. Fusce consectetur commodo eros, ut fringilla dolor tempor non. Etiam ac libero vel turpis commodo aliquet a quis est.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Donec ut odio pharetra, ullamcorper tellus non, luctus mi. Nulla imperdiet lorem tellus, vitae scelerisque lacus porta eget. Mauris vel odio dolor. Quisque fringilla at nulla id auctor. Nam molestie finibus tortor, ut dapibus nisi feugiat sed. Vestibulum gravida eros sed arcu consectetur, dictum interdum tortor condimentum. Aliquam consectetur elit a mi faucibus, a consectetur arcu vestibulum. Cras vel dui et mi pretium condimentum sed nec sapien. Vestibulum finibus volutpat massa.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Quisque porta massa id elementum facilisis. Vestibulum a imperdiet orci. Proin gravida odio a maximus fermentum. Mauris molestie eget nisl in ultrices. Phasellus quis risus velit. Donec finibus mi gravida mi gravida sagittis. Duis nec ullamcorper felis, eu posuere lectus. Ut tincidunt, quam eget aliquet egestas, erat enim pulvinar nisi, ac ultrices tellus nunc nec tellus. Sed vitae lacus vitae dui facilisis volutpat. Ut congue ex vitae purus dictum, nec elementum mi aliquam. Mauris elit diam, tempus quis feugiat sit amet, mattis et sapien. Sed eu dolor commodo, volutpat odio ac, viverra odio.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Integer mauris dolor, scelerisque quis lorem vitae, euismod convallis massa. Nulla consequat ligula at justo efficitur, in porta massa porta. Vivamus interdum sagittis diam, vitae ultricies diam sagittis ut. Quisque fringilla nunc id libero mollis facilisis. Nam eu scelerisque sapien, sed varius velit. Curabitur purus magna, finibus vitae suscipit eu, bibendum nec mi. Quisque neque neque, pulvinar at ullamcorper in, aliquet eu libero. Maecenas sed dapibus diam. Phasellus pretium scelerisque lectus, a molestie erat sodales in. Suspendisse euismod mollis neque, non lacinia eros viverra sit amet. Ut venenatis diam mollis sem interdum, id luctus dui pretium.</p>', 'Null', '2018-06-23 06:35:36', '2018-06-23 06:35:36', 1),
(10, 'Ronalod Best Goals', 9, 1, 'ronalod-best-goals', 'Ronaldo Best Goals', 'football, Ronaldo,cr7', 'http://localhost/login/uploads/blog_images/skynews-ronaldo-portugal-football_4338029.jpg', 1, '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero. Mauris varius nisl bibendum porta tincidunt. Suspendisse vitae dui efficitur, ullamcorper ligula eu, sagittis arcu. Curabitur euismod neque nec suscipit consectetur. Donec rutrum nec magna vel auctor. Duis sapien velit, pharetra sit amet urna et, consequat elementum velit. Integer eros eros, condimentum eget enim vel, consectetur euismod est. Nam sodales congue convallis. Donec nunc magna, suscipit eget posuere in, viverra a lorem.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Donec vel placerat massa. Integer nisi libero, venenatis vitae vulputate in, cursus ut magna. Suspendisse potenti. Sed sit amet venenatis turpis, vitae consequat est. Mauris vitae sem id erat gravida vestibulum. Nullam venenatis at quam eget pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc sit amet eleifend metus, non elementum enim. Nulla rhoncus, orci in commodo hendrerit, ipsum massa vulputate tellus, vitae tempor nibh nunc nec velit. Nullam viverra, turpis eu gravida rutrum, mi orci viverra lorem, id facilisis est turpis varius diam. Nunc sed tincidunt ligula, quis convallis lacus. Fusce facilisis faucibus lectus, a laoreet nunc facilisis eu. Mauris faucibus, purus ut facilisis ultrices, nibh diam luctus ex, et interdum eros mauris eget nulla. Mauris volutpat nibh at lectus ullamcorper aliquet. Fusce consectetur commodo eros, ut fringilla dolor tempor non. Etiam ac libero vel turpis commodo aliquet a quis est.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Donec ut odio pharetra, ullamcorper tellus non, luctus mi. Nulla imperdiet lorem tellus, vitae scelerisque lacus porta eget. Mauris vel odio dolor. Quisque fringilla at nulla id auctor. Nam molestie finibus tortor, ut dapibus nisi feugiat sed. Vestibulum gravida eros sed arcu consectetur, dictum interdum tortor condimentum. Aliquam consectetur elit a mi faucibus, a consectetur arcu vestibulum. Cras vel dui et mi pretium condimentum sed nec sapien. Vestibulum finibus volutpat massa.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Quisque porta massa id elementum facilisis. Vestibulum a imperdiet orci. Proin gravida odio a maximus fermentum. Mauris molestie eget nisl in ultrices. Phasellus quis risus velit. Donec finibus mi gravida mi gravida sagittis. Duis nec ullamcorper felis, eu posuere lectus. Ut tincidunt, quam eget aliquet egestas, erat enim pulvinar nisi, ac ultrices tellus nunc nec tellus. Sed vitae lacus vitae dui facilisis volutpat. Ut congue ex vitae purus dictum, nec elementum mi aliquam. Mauris elit diam, tempus quis feugiat sit amet, mattis et sapien. Sed eu dolor commodo, volutpat odio ac, viverra odio.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Integer mauris dolor, scelerisque quis lorem vitae, euismod convallis massa. Nulla consequat ligula at justo efficitur, in porta massa porta. Vivamus interdum sagittis diam, vitae ultricies diam sagittis ut. Quisque fringilla nunc id libero mollis facilisis. Nam eu scelerisque sapien, sed varius velit. Curabitur purus magna, finibus vitae suscipit eu, bibendum nec mi. Quisque neque neque, pulvinar at ullamcorper in, aliquet eu libero. Maecenas sed dapibus diam. Phasellus pretium scelerisque lectus, a molestie erat sodales in. Suspendisse euismod mollis neque, non lacinia eros viverra sit amet. Ut venenatis diam mollis sem interdum, id luctus dui pretium.</p>', 'Null', '2018-06-23 07:09:52', '2018-06-23 07:09:52', 1),
(11, 'About President of pakistan', 9, 1, 'about-president-of-pakistan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'kjhk,khkjh', 'http://localhost/login/uploads/blog_images/33868369_190291285125095_8752566590974722048_n_(1).jpg', 0, '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: "Open Sans", Arial, sans-serif;"><b><u>Lorem ipsum dolor sit amet, consectetur adipiscing elit:</u></b></p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: "Open Sans", Arial, sans-serif;">Praesent porta est at sapien ultrices, sit amet semper justo tempus. Nam convallis sapien nec tortor dignissim fermentum. Nunc dignissim tempor tortor, nec porttitor risus volutpat sit amet. Suspendisse luctus ullamcorper mi. Maecenas ultrices mi a ex congue, at dictum leo eleifend. In nisl nisl, ultricies ut metus a, ornare scelerisque nisl. Quisque dolor dui, suscipit sed rhoncus nec, accumsan et lorem. Donec eu bibendum nibh. Sed id elit urna. Curabitur pulvinar tristique lacus vel molestie. Praesent sit amet erat sed diam imperdiet lacinia ut ac magna. Aliquam ultricies, sem semper dictum placerat, nisl nunc iaculis felis, vel tincidunt tortor massa quis est. Integer finibus at risus id feugiat.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: "Open Sans", Arial, sans-serif;"><b><u>Curabitur in velit vitae eros rutrum vulputate id quis velit:</u></b></p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: "Open Sans", Arial, sans-serif;">Proin nunc massa, commodo vitae nisi eget, egestas efficitur mi. Morbi sit amet imperdiet sem. Suspendisse fermentum sem non nunc mattis, hendrerit convallis orci pellentesque. Integer tempus vel est sit amet rhoncus. Integer sed pretium libero, sed posuere elit. Donec vel varius mauris, ut sollicitudin dolor. Maecenas bibendum elit sit amet blandit scelerisque.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: "Open Sans", Arial, sans-serif;"><b><u>Quisque nec nunc quam:</u></b></p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: "Open Sans", Arial, sans-serif;">Cras condimentum pharetra mi et imperdiet. Duis consectetur mi sit amet ex sodales, ut interdum orci ornare. Mauris venenatis erat et nisl tincidunt dignissim. In hac habitasse platea dictumst. Nam suscipit nisi interdum faucibus dignissim. Aliquam porttitor lectus sit amet libero posuere finibus quis sit amet sapien. Nullam varius neque lectus, in aliquam neque sodales eleifend.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: "Open Sans", Arial, sans-serif;"><b><u>Proin id justo eget justo venenatis tempus a sed leo.</u></b></p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: "Open Sans", Arial, sans-serif;">Nam ut congue lorem. Vivamus enim justo, congue nec justo et, maximus elementum eros. Sed et tincidunt tellus. Nunc ultrices maximus massa sed ultricies. Donec faucibus hendrerit nulla. Mauris gravida orci eget nisi sodales, nec elementum libero dapibus. Cras lacus ante, ullamcorper eu tempor ut, dictum at mi. Aenean id vehicula tellus, sed varius diam. Etiam egestas convallis vulputate. Nullam nisi tellus, blandit ut nisl in, tincidunt placerat arcu. Morbi sed ultrices justo, eget mollis magna.</p>', '2018-08-04 07:30:49', '2018-07-14 12:37:37', '2018-07-30 12:09:25', 0),
(12, 'Nawaz Sharif''s audio message from Adiala jail', 11, 1, 'nawaz-sharifs-audio-message-from-adiala-jail', 'LAHORE: Ousted prime minister Nawaz Sharif and Pakistan Muslim League-N (PML-N) Quaid Nawaz Sharif and his daughter Maryam Nawaz', 'nawaz,Maryam,maryam-nawaz', 'http://localhost/login/uploads/blog_images/l_342150_102047_updates.jpg', 1, '<p class="" style="margin-top: 20px; margin-bottom: 20px; font-size: 18px; line-height: 27px; font-family: Merriweather;">LAHORE: Ousted prime minister Nawaz Sharif and Pakistan Muslim League-N (PML-N) Quaid Nawaz Sharif and his daughter Maryam Nawaz, currently lodged in Rawalpindi''s Adiala jail in a corruption case, have issued audio messages for the people of Pakistan.<br></p><p style="margin-top: 20px; margin-bottom: 20px; font-size: 18px; line-height: 27px; font-family: Merriweather;">Addressing his party workers and leaders in his recorded message, Nawaz said he had been put in jail to keep him away from them. “My daughter, who’s a daughter of the nation, has also been lodged in jail,” he said adding that the opponents did not know that the prison and imprisonment could not sever his relationship with his people.</p><p style="margin-top: 20px; margin-bottom: 20px; font-size: 18px; line-height: 27px; font-family: Merriweather;">“Neither any dictator could break off that relationship in the past nor those pulling the strings would be able to do so today,” asserted Nawaz Sharif. He requested the people to pray for recovery of his critically ill wife, whom he left behind, in a London hospital, to return to his country. He said the entire country had been turned into a jail. He said now was the time to stand up and break all shackles. He said the time had reached that people would have to free themselves from the (illegal) restrictions and to do away with the games being played with them for the last 70 years.</p><p style="margin-top: 20px; margin-bottom: 20px; font-size: 18px; line-height: 27px; font-family: Merriweather;">He said such games with masses have turned the Quaid-e-Azam’s Pakistan into a laughing stock. “That’s why I have raised the slogan of ‘Vote Ko Izzat Do’ (Give Respect to Vote. Now it’s your turn to carry this flag (movement) forward.</p>', 'Null', '2018-07-16 05:44:44', '2018-07-16 05:44:44', 1),
(13, 'we are adding some new post', 6, 1, 'we-are-adding-some-new-post', 'i am adding new post', 'keyword1, keyword2', 'http://localhost/login/uploads/blog_images/Photoshop1.jpg', 1, '<p open="" sans",="" arial,="" sans-serif;"="" style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: &quot;Open Sans&quot;; vertical-align: baseline; color: rgb(50, 50, 50); text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;"><u style="margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;">Lorem ipsum dolor sit amet, consectetur adipiscing elit:</u></span></p><p open="" sans",="" arial,="" sans-serif;"="" style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: &quot;Open Sans&quot;; vertical-align: baseline; color: rgb(50, 50, 50); text-align: justify;">Praesent porta est at sapien ultrices, sit amet semper justo tempus. Nam convallis sapien nec tortor dignissim fermentum. Nunc dignissim tempor tortor, nec porttitor risus volutpat sit amet. Suspendisse luctus ullamcorper mi. Maecenas ultrices mi a ex congue, at dictum leo eleifend. In nisl nisl, ultricies ut metus a, ornare scelerisque nisl. Quisque dolor dui, suscipit sed rhoncus nec, accumsan et lorem. Donec eu bibendum nibh. Sed id elit urna. Curabitur pulvinar tristique lacus vel molestie. Praesent sit amet erat sed diam imperdiet lacinia ut ac magna. Aliquam ultricies, sem semper dictum placerat, nisl nunc iaculis felis, vel tincidunt tortor massa quis est. Integer finibus at risus id feugiat.</p><p open="" sans",="" arial,="" sans-serif;"="" style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: &quot;Open Sans&quot;; vertical-align: baseline; color: rgb(50, 50, 50); text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;"><u style="margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;">Curabitur in velit vitae eros rutrum vulputate id quis velit:</u></span></p><p open="" sans",="" arial,="" sans-serif;"="" style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: &quot;Open Sans&quot;; vertical-align: baseline; color: rgb(50, 50, 50); text-align: justify;">Proin nunc massa, commodo vitae nisi eget, egestas efficitur mi. Morbi sit amet imperdiet sem. Suspendisse fermentum sem non nunc mattis, hendrerit convallis orci pellentesque. Integer tempus vel est sit amet rhoncus. Integer sed pretium libero, sed posuere elit. Donec vel varius mauris, ut sollicitudin dolor. Maecenas bibendum elit sit amet blandit scelerisque.</p><p open="" sans",="" arial,="" sans-serif;"="" style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: &quot;Open Sans&quot;; vertical-align: baseline; color: rgb(50, 50, 50); text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;"><u style="margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;">Quisque nec nunc quam:</u></span></p><p open="" sans",="" arial,="" sans-serif;"="" style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: &quot;Open Sans&quot;; vertical-align: baseline; color: rgb(50, 50, 50); text-align: justify;">Cras condimentum pharetra mi et imperdiet. Duis consectetur mi sit amet ex sodales, ut interdum orci ornare. Mauris venenatis erat et nisl tincidunt dignissim. In hac habitasse platea dictumst. Nam suscipit nisi interdum faucibus dignissim. Aliquam porttitor lectus sit amet libero posuere finibus quis sit amet sapien. Nullam varius neque lectus, in aliquam neque sodales eleifend.</p>', 'Null', '2018-07-23 19:14:06', '2018-07-23 19:14:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_tags`
--

CREATE TABLE `blog_post_tags` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_post_tags`
--

INSERT INTO `blog_post_tags` (`id`, `post_id`, `tag_id`) VALUES
(10, 1, 1),
(11, 1, 4),
(12, 1, 5),
(13, 2, 2),
(14, 2, 4),
(15, 2, 6),
(18, 3, 1),
(19, 3, 2),
(20, 4, 10),
(21, 4, 11),
(24, 6, 12),
(25, 6, 14),
(26, 7, 10),
(27, 7, 11),
(28, 8, 8),
(29, 9, 14),
(30, 10, 4),
(31, 10, 7),
(35, 12, 11),
(36, 12, 12),
(37, 12, 13),
(44, 13, 4),
(45, 13, 7),
(46, 13, 8),
(47, 11, 4),
(48, 11, 7),
(49, 11, 8),
(53, 5, 12),
(54, 5, 13),
(55, 5, 14);

-- --------------------------------------------------------

--
-- Table structure for table `blog_settings`
--

CREATE TABLE `blog_settings` (
  `id` int(11) NOT NULL,
  `enable_comments` tinyint(4) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_kewords` text NOT NULL,
  `per_page_posts` int(10) NOT NULL,
  `default_img` text NOT NULL,
  `enable_category_posts` tinyint(4) NOT NULL,
  `enable_recent_post` tinyint(4) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `Linkedin` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_settings`
--

INSERT INTO `blog_settings` (`id`, `enable_comments`, `meta_description`, `meta_kewords`, `per_page_posts`, `default_img`, `enable_category_posts`, `enable_recent_post`, `youtube`, `Linkedin`, `facebook`) VALUES
(1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'sports,news,cricket,football', 8, 'http://localhost/login/uploads/blogging-SMB2.png', 1, 1, 'http://youtube.com/', 'https://linkedin.com/', 'http://facebook.com/');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `tag`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Articles', 'articles', '2018-06-12 09:59:38', '0000-00-00 00:00:00'),
(4, 'ronaldo', 'ronaldo', '2018-06-12 10:28:48', '0000-00-00 00:00:00'),
(7, 'football', 'football', '2018-06-23 09:15:15', '0000-00-00 00:00:00'),
(8, 'cricket', 'cricket', '2018-06-23 09:15:21', '0000-00-00 00:00:00'),
(9, 'messi', 'messi', '2018-06-23 09:15:25', '0000-00-00 00:00:00'),
(10, 'css', 'css', '2018-06-23 09:15:48', '0000-00-00 00:00:00'),
(11, 'bootstrap', 'bootstrap', '2018-06-23 09:15:54', '0000-00-00 00:00:00'),
(12, 'laravel', 'laravel', '2018-06-23 09:22:18', '0000-00-00 00:00:00'),
(13, 'laravel restfull api''s', 'laravel-restfull-apis', '2018-06-23 09:22:34', '0000-00-00 00:00:00'),
(14, 'codeigniter', 'codeigniter', '2018-06-23 09:22:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `word` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(95, NULL, '::1', NULL),
(94, NULL, '::1', NULL),
(93, NULL, '::1', NULL),
(92, NULL, '::1', NULL),
(91, NULL, '::1', NULL),
(90, NULL, '::1', NULL),
(89, NULL, '::1', NULL),
(88, NULL, '::1', NULL),
(155, 1506493472, '::1', 'LZCV6ISP'),
(143, 1506492915, '::1', '7WxjqlFC'),
(144, 1506492932, '::1', 'Mr2fRDem'),
(145, 1506492959, '::1', 'lZdK1Yzg'),
(146, 1506492988, '::1', 'm8ezTko7'),
(147, 1506492992, '::1', 'fcJsHOil'),
(148, 1506493027, '::1', '9W1qhZzr'),
(149, 1506493090, '::1', 'oCm3xKTp'),
(150, 1506493112, '::1', 'ast0VMcS'),
(151, 1506493175, '::1', 'QT7vqdVC'),
(152, 1506493194, '::1', 'OPyn5qkH'),
(153, 1506493353, '::1', 'mc2WCAs3'),
(154, 1506493370, '::1', 'IJzTfuqg');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'Member', 'genrale user');

-- --------------------------------------------------------

--
-- Table structure for table `group_perm`
--

CREATE TABLE `group_perm` (
  `id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `perm_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_perm`
--

INSERT INTO `group_perm` (`id`, `group_id`, `perm_id`) VALUES
(487, 31, 10),
(488, 31, 11),
(489, 31, 12),
(542, 32, 10),
(543, 32, 11),
(544, 32, 14),
(545, 33, 13),
(546, 33, 14),
(547, 33, 15),
(548, 33, 16),
(549, 0, 10),
(550, 0, 11),
(551, 0, 13),
(568, 0, 10),
(569, 0, 11),
(575, 35, 10),
(590, 38, 10),
(591, 38, 11),
(592, 38, 12),
(593, 41, 12),
(594, 41, 13),
(595, 41, 14),
(596, 43, 10),
(597, 43, 11),
(598, 43, 12),
(599, 44, 16),
(611, 45, 17),
(622, 46, 10),
(623, 46, 11),
(624, 47, 10),
(625, 47, 11),
(626, 48, 10),
(627, 48, 11),
(628, 48, 12),
(629, 48, 14),
(630, 49, 11),
(631, 49, 12),
(635, 50, 10),
(636, 50, 13),
(660, 51, 12),
(661, 51, 13),
(662, 51, 16),
(663, 51, 17),
(702, 52, 10),
(703, 52, 11),
(704, 52, 17),
(725, 53, 10),
(726, 53, 11),
(727, 53, 14),
(752, 54, 10),
(753, 54, 16),
(754, 54, 17),
(783, 55, 12),
(882, 2, 10),
(883, 2, 11),
(884, 2, 17),
(916, 1, 10),
(917, 1, 11),
(918, 1, 12),
(919, 1, 13),
(920, 1, 14),
(921, 1, 15),
(922, 1, 16),
(923, 1, 17),
(924, 1, 18),
(925, 1, 19),
(926, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `perm_id` int(10) UNSIGNED NOT NULL,
  `perm_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`perm_id`, `perm_name`) VALUES
(10, 'View Groups'),
(11, 'View Users'),
(12, 'Add Users'),
(13, 'Create Groups'),
(14, 'Permissions'),
(15, 'Setup'),
(16, 'Backup & Export Users'),
(17, 'Profile'),
(18, 'Social Login Setup'),
(19, 'email members'),
(20, 'blog');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `registration_status` tinyint(4) NOT NULL,
  `forgot_pass_status` tinyint(4) NOT NULL,
  `socail_login_status` tinyint(4) NOT NULL,
  `two_factor_auth` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `registration_status`, `forgot_pass_status`, `socail_login_status`, `two_factor_auth`) VALUES
(1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `oauth_provider` varchar(255) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` varchar(255) DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `bio` text NOT NULL,
  `user_img` text NOT NULL,
  `verification_code` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `date`, `bio`, `user_img`, `verification_code`) VALUES
(1, '', '', 'Salman Iqbal', '$2y$08$jd7OenN3a/yXG8pmnO62cu3x/unTfwJXeZlmMXQIS56M8GfxoR/ii', '', 'admin@admin.com', NULL, 'kobWIo4ZMXUf5HXc4yKcKu65c0ea29fa2200854c', 1517328190, '3knx1nqHTrNksJ.Fup4SHe', 1268889823, '1533359896', 1, 'Salman', 'Iqbal', 'ADMIN', '0323-9047937', '2017-01-26', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'img1.jpg', 0),
(153, 'Instagram', '::1', 'iqbal6455', '$2y$08$B7TdQuV6h3oKypEa4eVoR.YB6Zc4ZCBDWlkwtp8dNyf6nZXctpZ/e', NULL, 'iqbal6455@instagram.com', NULL, NULL, NULL, '8T.qCrTZ9CiVs6/.HLDya.', 1531726511, '1531726511', 1, 'Salman', 'Iqbal', NULL, NULL, '2018-07-16', '', '', 0),
(130, 'facebook', '::1', 'Salman Iqbal', '$2y$08$sFJMo4bWe8Un47QpxlG/veCA2MFL1M66dy6aZMj08tJSlBJ4b0vxe', NULL, 'Salman Iqbal@facebook.com', NULL, NULL, NULL, 'qnZSK3AHIKy/Fk1YfZJiLe', 1512236835, '1512236835', 1, 'Salman', 'Iqbal', NULL, NULL, NULL, '', '', 0),
(131, 'twitter', '::1', 'Salman_iqbal937', '$2y$08$igJ6l7CzmvKpE1AQ2gvePOCXr8E13DEPYNpzWi/DUHo/bnKNCMa0K', NULL, 'Salman_iqbal937@twitter.com', NULL, NULL, NULL, '9NnIIb/GyX97LTTnTtOQ.O', 1512236862, '1512236862', 1, 'Salman', 'iqbal', NULL, NULL, '2017-12-02', '', '', 0),
(132, 'google', '::1', 'salman iqbal', '$2y$08$QBr5RQ/M8z5KG5Prt45VR.OHNRaaJZrbb5prNcC4mGIfolpHxnP92', NULL, 'si87841@gmail.com', NULL, NULL, NULL, 'KeQUiSdFvJY4PScbgOJWKO', 1512236892, '1512236892', 1, 'salman', 'iqbal', NULL, NULL, '2017-12-02', '', '', 0),
(151, '', '::1', 'kashoo', '$2y$08$h.yDEQ.n1UvCkf6M0uEgheB1vJZmEXStkv0dDo8qdwtdyI5qdRtGe', NULL, 'kashif@gmail.com', NULL, NULL, NULL, NULL, 1519042076, NULL, 1, 'kashif', 'khan', 'parexons', '080980809', '2018-02-19', '', '', 0),
(136, 'local', '::1', 'lskjfklsdj', '$2y$08$SsQHWwtjPNHrx69F0h1iR.ApTO03mC6gIXKPZdBZiP6o25D6sG2Fi', NULL, 'salmaniqbal937@gmail.com', NULL, NULL, NULL, NULL, 1516431570, NULL, 1, 'sdjflkdsj', 'lsjflsdj', NULL, NULL, '2018-01-20', '', '', 0),
(137, 'local', '::1', 'jlskfjlskj', '$2y$08$mylBiFKyUuw7eGZS.Tttl.rc7eFuFd7Nwxi1717c8ErHd5swKOYTe', NULL, 'sklfjlk@gmail.com', '6121702a97e218c948db9e34df881716ab8534ef', NULL, NULL, NULL, 1516432045, NULL, 0, 'slkfjklj', 'lkjslkdfj', NULL, NULL, '2018-01-20', '', '', 0),
(138, 'local', '::1', 'salman_iqbal889', '$2y$08$k1BxvjgPvunFsbLCgEouLeqsSqiG.0OKb5bw86PFvvxnxKApr2PIa', NULL, 'sklfjsdflk@gmail.com', '0b463f919f1cdc3a61a117d648dc77c14e657fbe', NULL, NULL, NULL, 1516432233, NULL, 0, 'skdjfklj', 'kjslfj', NULL, NULL, '2018-01-20', '', '', 0),
(139, 'local', '::1', 'kjsdkfljskl', '$2y$08$87o1ka3s./bzhSF7yE/ck.ijfk8ExZ6h3y3kYzeaDHyCKSL1BiaJG', NULL, 'si8782341@gmail.com', 'b9496dff542251c51f67553612ab8486a07dca0e', NULL, NULL, NULL, 1516432260, NULL, 0, 'sdjflskj', 'jklsjdflkj', NULL, NULL, '2018-01-20', '', '', 0),
(140, 'local', '::1', 'slkfdjsdklj', '$2y$08$QOlQ.06yWN6aT/tX2s5zO.D/fPVA7ekVZIcJUdBjMyjAhrD3FPP7i', NULL, 'shahzad@yahoo.com', 'd628a67228871eee793935cb9ce1b97e86a7d71b', NULL, NULL, NULL, 1516432317, NULL, 0, 'slkjflk', 'jlksjfkl', NULL, NULL, '2018-01-20', '', '', 0),
(152, 'local', '::1', 'code_master11', '$2y$08$OAhko2MVG0lrCjCCKpq4iOwpruNIuCA2DQbVeHuSfudEJCy3NJ0GW', NULL, 'codemaster@gmail.com', NULL, NULL, NULL, NULL, 1520154240, '1533322684', 1, 'code', 'master', NULL, NULL, '2018-03-04', '', '', 829197),
(142, 'local', '::1', 'jklsfjklj', '$2y$08$rJjd5.OJRlC8.LtFpm6ALeasv956jiFzMZJd70pdR/i0qbUvdgPo.', NULL, 'shasdfhzad@yahoo.com', NULL, NULL, NULL, NULL, 1516432845, NULL, 1, 'skdjfklj', 'kjsklfj', NULL, NULL, '2018-01-20', '', '', 0),
(143, 'local', '::1', 'slkfjsdlkj', '$2y$08$DK.deATo/t5mf.s4PoWtJ.3CoDqz1p/9sYVQYW82ByVvaR/9WKKDu', NULL, 'si8237841@gmail.com', '91631c909bf8e38d2fbcae3a35464cd9eb867e2c', NULL, NULL, NULL, 1516433786, NULL, 0, 'sdjflkj', 'lkjsldfjlk', NULL, NULL, '2018-01-20', '', '', 0),
(145, 'local', '::1', 'slfjdslkj', '$2y$08$GC5mqnVISo2ylxNT42.Q1umGu6o4dx0MWzSJcJqk5YnC79MGaAiAa', NULL, 'shahzddad@yahoo.com', 'fc58eca4c712b8ad315fa67c1868660a50ad2604', NULL, NULL, NULL, 1517244103, NULL, 0, 'llsdfjlj', 'lskfjlsj', NULL, NULL, '2018-01-29', '', '', 907879),
(146, 'local', '::1', 'mubi', '$2y$08$1dH3X/opa1srQxq1DqyON.7W4xiwTwENlkfal/4eyo0dIjht8mFdS', NULL, 'mubassirhayat@gmail.com', 'a13c26ffb9c5ed7c8092ea6ccffe64a5eafe09ac', NULL, NULL, NULL, 1517244167, NULL, 0, 'lsdjfl', 'jsjfsjf', NULL, NULL, '2018-01-29', '', '', 139214),
(147, 'local', '::1', 'mubi33', '$2y$08$qg2b02v0BUO6U/o.xuQUSe3KnPqLmKVbxVISP5VJeIE8qsILKqHw.', NULL, 'mubassirdfhayat@gmail.com', '29c4805e83c7a8cc72b6ffc39127325e04e78755', NULL, NULL, NULL, 1517244228, NULL, 0, 'Salman', 'mubi', NULL, NULL, '2018-01-29', '', '', 243180),
(148, 'facebook', '::1', 'Salman Iqbal', '$2y$08$N8p884v4/63e00EiNciUk.0WtFZxqvMsHt9RSkD6NcVi8kcQt1GvS', NULL, 'SalmanIqbal@facebook.com', NULL, NULL, NULL, 'Oy6b6OwAX5Y.TV3tdrItxe', 1519037955, '1519037955', 1, 'Salman', 'Iqbal', NULL, NULL, NULL, '', '', 0),
(150, 'local', '::1', 'sdfdsfds', '$2y$08$MmNWk7J2n2VBS15nAn.Q.uvzI3YpUQZDTFWLWQEForUK1jPf6IT/a', NULL, 'shahzad12@yahoo.com', NULL, NULL, NULL, NULL, 1519041908, '1519041932', 1, 'dfdsf', 'sdfds', NULL, NULL, '2018-02-19', '', '', 624131);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(306, 122, 2),
(240, 83, 2),
(288, 102, 2),
(239, 1, 1),
(274, 105, 2),
(305, 121, 2),
(285, 109, 2),
(303, 119, 2),
(322, 132, 2),
(321, 131, 2),
(304, 120, 2),
(270, 101, 2),
(272, 103, 2),
(293, 112, 2),
(297, 116, 2),
(302, 118, 2),
(320, 130, 2),
(329, 136, 2),
(330, 137, 2),
(331, 138, 2),
(332, 139, 2),
(333, 140, 2),
(349, 152, 2),
(335, 142, 2),
(336, 143, 2),
(348, 151, 1),
(338, 145, 2),
(339, 146, 2),
(340, 147, 2),
(341, 148, 2),
(350, 153, 2),
(343, 150, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post_tags`
--
ALTER TABLE `blog_post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_settings`
--
ALTER TABLE `blog_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_perm`
--
ALTER TABLE `group_perm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`perm_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `blog_post_tags`
--
ALTER TABLE `blog_post_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `blog_settings`
--
ALTER TABLE `blog_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `group_perm`
--
ALTER TABLE `group_perm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=927;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `perm_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
