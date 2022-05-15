-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 01:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msmnorth`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter_table`
--

CREATE TABLE `counter_table` (
  `id` int(11) NOT NULL,
  `ip_address` text NOT NULL,
  `visit_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter_table`
--

INSERT INTO `counter_table` (`id`, `ip_address`, `visit_date`) VALUES
(1, '', '2021-05-03 11:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(14, 21, 2, 'You have to believe that things will get better', '1574521288_image_5.png', '&lt;p&gt;Many times I have come across instances where some people scorn the practice of setting New Year Resolutions.&lt;/p&gt;&lt;p&gt;Their reason for this goes something like this:&lt;/p&gt;&lt;p&gt;The very word resolution is an indication of some form of internal conflict springing from an ineffectual self-governance in a person. It means the individual is waging a fight against something undesirable in their life; or is making a conscious decision to pursue certain ideals that before were absent in their life.&lt;/p&gt;&lt;p&gt;Aren&rsquo;t you supposed to be pursuing these ideals every day of your life? Isn&rsquo;t it supposed to be the default state of your life? Why would you wait for a new year before you make a resolution to better your life?&lt;/p&gt;&lt;p&gt;Such people also avoid new year resolutions or scorn the practice thereof because for them, experience has proven it to be ineffective.&lt;/p&gt;&lt;p&gt;I don&rsquo;t entirely agree with such people. I am not advocating the practice of new year resolutions either. But I&rsquo;d sooner advise a person to set new year resolutions they will end up abandoning by the end of January than advise them to sleepwalk through their life the entire year.&lt;/p&gt;&lt;p&gt;At the very least, setting new year resolutions means that you still have an interest in making your life better, and that is a good place to start. You just need a better strategy than new year resolutions, which is what I bring to the table today.&lt;/p&gt;&lt;p&gt;I call it The &lt;i&gt;12 months challenge.&lt;/i&gt;&lt;/p&gt;&lt;p&gt;This challenge is simple: At the end of the year, write and publish an article in which you list 12 of your proudest, most fulfilling accomplishments from each of the 12 months of that year. Be very strict with the rules of the challenge: Pick only one accomplishment per month.&lt;/p&gt;&lt;p&gt;You are free to accomplish as many things in a month as you can but pick only one to be added to the list for any particular month.&lt;/p&gt;&lt;p&gt;Publish this article on your blog (if you have one), on your linkedIn profile, and on any of the social media platforms; share it with your close network of trusted family members, friends, colleagues and mentors.&lt;/p&gt;&lt;p&gt;It is very important that you share the article to as wide an audience as possible if the contents are not too private. Sharing such an article can help you connect with other individuals with shared interests, dreams, and plans for the future. And such connections can open doors for you and a lot of other people that you never knew existed.&lt;/p&gt;&lt;p&gt;Most importantly, if you know you are preparing the article to share it with other people, you are more likely to take it very seriously.&lt;/p&gt;&lt;p&gt;One thing I almost avoided mentioning is the nature of these accomplishments. I&rsquo;m avoiding this aspect of the challenge because I can&rsquo;t really tell you what you should aim at accomplishing in your life in order to feel fulfilled. You are going to have to do that yourself because only you can do it best. It is your purpose. You may think you don&rsquo;t know it yet but at some deeper level you do.&lt;/p&gt;&lt;p&gt;I can only tell you what works for me: I have a few questions I usually ask myself when I feel that I am not living a fulfilling life at any time in my life. At such times I ask myself:&lt;/p&gt;&lt;p&gt;If I were to be diagnosed with terminal cancer and given only 6 months to live, how would I spend that time? What things would I value most? What would I regret not doing?&lt;/p&gt;&lt;p&gt;For me, the answers to such questions immediately and unmistakably stand out clear in my mind:&lt;/p&gt;&lt;p&gt;I would regret not taking better care of my parents than what I am doing. They have toiled and soiled far too much for me to be ordinary.&lt;br&gt;I would grieve in my spirit at all those years I felt timid and settled for far far less than I am worth.&lt;/p&gt;&lt;p&gt;I would regret my passivity in relationships with all those amazing people who have once featured in my life and left because of my apparent disinterest. I could have swallowed my pride and risked exposing my insecurities, my quirks and my shortcomings in general. Hiding them only made me look uninterested.&lt;/p&gt;&lt;p&gt;I would regret all those hours I wasted feeling bored when I could have set up a blog to explore my passion for writing.&lt;/p&gt;&lt;p&gt;I could have read more and more books.&lt;/p&gt;&lt;p&gt;I would regret never having taken any steps towards realizing all those side projects I kept conceiving day after day in my mind.&lt;/p&gt;&lt;p&gt;And many more...&lt;/p&gt;&lt;p&gt;When you ask yourself the above questions, the answers will pop up almost immediately and they will fill you with a new vitality and enthusiasm towards your life goals.&lt;/p&gt;&lt;p&gt;Now assume your time from now on is as limited and valuable as it could be if the above assumption about cancer were real. Then start working on these projects one month at a time. Start living your unlived life one month at a time.&lt;/p&gt;', 0, '2019-11-23 16:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(2, 'Life', '<p>test change</p>'),
(3, 'Quotes', ''),
(4, 'Fiction', ''),
(5, 'Biography', ''),
(6, ' Motivation', ''),
(7, 'Inspiration', ''),
(8, 'Test', '<p>test</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `age` text NOT NULL,
  `gender` varchar(191) NOT NULL,
  `optionbox` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `name`, `email`, `phone`, `age`, `gender`, `optionbox`, `created_at`, `password`) VALUES
(100, 0, 'user', '', 'user@g.c', '1234', '', '', '', '2021-06-11 05:11:21', '$2y$10$zeQAWyp3uw3/hF3PUIbU3ekOqW9HoQjwMBpB0pbRZ5XnMIn5uwndG'),
(101, 1, 'admin', '', 'admin@gmail.com', '321', '', '', '', '2021-06-11 05:11:59', '$2y$10$gd5ey3Kbk8rIhTtFD/6HHOvNW/LA9B5A4BoxOlXHazH14GTsBWwGO');

-- --------------------------------------------------------

--
-- Table structure for table `usersreg`
--

CREATE TABLE `usersreg` (
  `id` int(11) NOT NULL,
  `admin` tinyint(5) NOT NULL,
  `username` text NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `yesno` varchar(255) NOT NULL,
  `gender` text NOT NULL,
  `optionbox` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersreg`
--

INSERT INTO `usersreg` (`id`, `admin`, `username`, `name`, `email`, `phone`, `yesno`, `gender`, `optionbox`, `created_at`, `password`) VALUES
(4, 1, 'adminmsmnorth3055', '', 'admin@admin.com', '9747008380', '20', 'MALE', 'balussery', '2021-06-11 06:28:00', '$2y$10$7jvhHQnN2MC2YLnueNlv6OtjglhjwZPipDDi7NQm0/J3ZCxh3Skma'),
(8, 0, 'Mishab', '', 'msb1@gmail.com', '9747008380', '20', 'MALE', 'balussery', '2021-06-11 07:07:29', '$2y$10$gEnugZnWOC1IpvNFzceJ5eUz3jaxHHT2G5xar9EK8wmf9Yc0d7sWC'),
(9, 0, 'dsfsfsdf', '', '', 'sdfdfsd', '', 'MALE', '', '2021-06-11 10:34:55', '$2y$10$Lk3fG0IsyS/r7UyEpnxyKeiwf2vDgkw3OkaCpilp6wQ9GQZajbCn.'),
(10, 0, 'fgdfg', '', '', 'gdgfdgdfg', '', 'MALE', '', '2021-06-11 10:36:23', '$2y$10$YdEF.46KWVjtLXjeztIHoOU8ErV2VhqX/kpfOyAk8nvp4zsGvkkm2'),
(11, 0, 'dsadsdsada', '', '', 'dsadsadsadsadsda', '', 'MALE', '', '2021-06-11 10:42:53', '$2y$10$LVmKzXuxGWlv87hGqcnakOJmz9P0UDfRpJuoUBAjkLcJxuW4QIXwm'),
(12, 0, 'habbab', '', '', '123', '', 'MALE', '', '2021-06-11 10:55:46', '$2y$10$tdazT30sGWGdsdIjNoobZedvvj.jXR3Bu3o4T2GXBysWeehbDRKo.'),
(13, 0, 'Mishab1', '', '', '9747008380', 'yesno', 'MALE', 'kuttiyadi', '2021-06-11 11:32:17', '$2y$10$/eudi7B.XgV2SyfkmnBNqOdjsHczALfrPc3J8N2qu2zrRUAKS8aN.'),
(14, 0, 'sana', '', '', '9747008380', '', 'MALE', 'kuttiyadi', '2021-06-11 11:33:54', '$2y$10$UUtyuupAdhit3feNcBhLV.cN7qplAA.mxMkYOUhFgXQV5RuPrIbNa'),
(15, 0, 'qwerty123', '', '', '9747008380', '', 'FEMALE', 'kuttiyadi', '2021-06-11 11:36:09', '$2y$10$7x7QZvraNAdzeP5upfUDRe/m8KzpI8wJznNt2Ci0cxSkyoAiUi3MO'),
(16, 0, 'sanabb', '', '', 'bb', 'YES', 'FEMALE', '', '2021-06-11 11:41:34', '$2y$10$s77QKV4LNMVwB7pu0n8r.eQwMOke7HbVY7THQV6ZDh/rY3osvCA/a'),
(17, 0, 'sanabb', '', '', '987654321', 'NO', 'FEMALE', '', '2021-06-11 11:44:52', '$2y$10$oQlpGex2N0lrx3u3Ea0Nn.FP/qiILP.5cXgC8QMsCspysEY.FvvMq'),
(18, 0, 'sana', '', '', '9747008380', '', 'MALE', 'kuttiyadi', '2021-06-11 11:46:14', '$2y$10$yO70yg6P0vXQXemxZ/SeoOvjwbQ51f08PRXM9vxF3ttQQk10mAMcm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counter_table`
--
ALTER TABLE `counter_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersreg`
--
ALTER TABLE `usersreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counter_table`
--
ALTER TABLE `counter_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `usersreg`
--
ALTER TABLE `usersreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
