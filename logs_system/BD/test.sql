CREATE DATABASE IF NOT EXISTS `test`;
-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Nov-2019 às 22:17
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `pageAcess` varchar(100) NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  `dtAcess` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sessionID` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `logs`
--

INSERT INTO `logs` (`id`, `ip`, `pageAcess`, `user`, `dtAcess`, `sessionID`) VALUES
(237, '::1', '/logs_system/exemplo_sem_login/groups.php', NULL, '2019-11-23 23:29:27', 'a85v7pnf0dqh829dsd91ieemo5'),
(243, '::1', '/logs_system/INDEX.php', 'Oliver K.', '2019-11-23 23:36:55', 'a85v7pnf0dqh829dsd91ieemo5'),
(244, '::1', '/logs_system/dashboard.php', 'Oliver K.', '2019-11-23 23:36:55', 'a85v7pnf0dqh829dsd91ieemo5'),
(245, '::1', '/logs_system/posts.php', 'Oliver K.', '2019-11-23 23:36:59', 'a85v7pnf0dqh829dsd91ieemo5'),
(246, '::1', '/logs_system/friends.php', 'Oliver K.', '2019-11-23 23:37:00', 'a85v7pnf0dqh829dsd91ieemo5'),
(247, '::1', '/logs_system/groups.php', 'Oliver K.', '2019-11-23 23:37:01', 'a85v7pnf0dqh829dsd91ieemo5'),
(248, '::1', '/logs_system/index.php', 'Oliver K.', '2019-11-23 23:40:10', 'a85v7pnf0dqh829dsd91ieemo5'),
(249, '::1', '/logs_system/dashboard.php', 'Oliver K.', '2019-11-23 23:40:10', 'a85v7pnf0dqh829dsd91ieemo5'),
(250, '::1', '/logs_system/index.php', 'Oliver K.', '2019-11-23 23:40:17', 'a85v7pnf0dqh829dsd91ieemo5'),
(251, '::1', '/logs_system/dashboard.php', 'Oliver K.', '2019-11-23 23:40:17', 'a85v7pnf0dqh829dsd91ieemo5'),
(252, '::1', '/logs_system/exemplo_sem_login/index.php', NULL, '2019-11-23 23:40:48', 'fspm2orn11bppvdjvr802shh50'),
(253, '::1', '/logs_system/exemplo_sem_login/posts.php', NULL, '2019-11-23 23:40:50', 'fspm2orn11bppvdjvr802shh50'),
(254, '::1', '/logs_system/exemplo_sem_login/friends.php', NULL, '2019-11-23 23:40:51', 'fspm2orn11bppvdjvr802shh50'),
(255, '::1', '/logs_system/exemplo_sem_login/groups.php', NULL, '2019-11-23 23:40:51', 'fspm2orn11bppvdjvr802shh50'),
(256, '::1', '/logs_system/dashboard.php', 'Samuel', '2019-11-23 23:41:09', 'a85v7pnf0dqh829dsd91ieemo5'),
(257, '::1', '/logs_system/posts.php', 'Samuel', '2019-11-23 23:41:11', 'a85v7pnf0dqh829dsd91ieemo5'),
(258, '::1', '/logs_system/friends.php', 'Samuel', '2019-11-23 23:41:12', 'a85v7pnf0dqh829dsd91ieemo5'),
(259, '::1', '/logs_system/exemplo_sem_login/index.php', NULL, '2019-11-23 23:41:30', 'okjn7j44c1s39e4khil3o3qfae'),
(260, '::1', '/logs_system/exemplo_sem_login/posts.php', NULL, '2019-11-23 23:41:32', 'okjn7j44c1s39e4khil3o3qfae'),
(261, '::1', '/logs_system/exemplo_sem_login/friends.php', NULL, '2019-11-23 23:41:33', 'okjn7j44c1s39e4khil3o3qfae'),
(262, '::1', '/logs_system/exemplo_sem_login/groups.php', NULL, '2019-11-23 23:41:34', 'okjn7j44c1s39e4khil3o3qfae');

-- --------------------------------------------------------

--
-- Indexes for dumped tables
--


--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
