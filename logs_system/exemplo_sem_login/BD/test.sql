CREATE IF NOT EXISTS `test`;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Nov-2019 às 01:58
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
  `user` varchar(50) DEFAULT NOT NULL,
  `dtAcess` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `logs`
--

INSERT INTO `logs` (`id`, `ip`, `pageAcess`, `user`, `dtAcess`) VALUES
(205, '::1', '/exemplo-sessao/dashboard.php', 'Elder', '2019-11-23 22:56:05'),
(206, '::1', '/exemplo-sessao/posts.php', 'Elder', '2019-11-23 22:56:10'),
(207, '::1', '/exemplo-sessao/dashboard.php', 'samuel', '2019-11-23 22:56:40'),
(208, '::1', '/exemplo-sessao/posts.php', 'samuel', '2019-11-23 22:56:45'),
(209, '::1', '/exemplo-sessao/friends.php', 'samuel', '2019-11-23 22:56:47'),
(210, '::1', '/exemplo-sessao/groups.php', 'samuel', '2019-11-23 22:56:48');


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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
