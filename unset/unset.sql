-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 12:14 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unset`
--
CREATE DATABASE IF NOT EXISTS `unset` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `unset`;

-- --------------------------------------------------------

--
-- Table structure for table `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) unsigned NOT NULL,
  `biografia` varchar(220) NOT NULL,
  `contacto` varchar(30) NOT NULL,
  `endereco` varchar(220) NOT NULL,
  `trabalho` varchar(220) NOT NULL,
  `id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perfil`
--

INSERT INTO `perfil` (`id`, `biografia`, `contacto`, `endereco`, `trabalho`, `id_usuarios`) VALUES
(1, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, omnis.', 'ex. 999-999-999', 'ex. Angola,Luanda-Cacuaco', 'Não editado.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) unsigned NOT NULL,
  `mensagem` varchar(220) NOT NULL,
  `titulo` varchar(220) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `solicitacao`
--

CREATE TABLE `solicitacao` (
  `id` int(11) unsigned NOT NULL,
  `atendido` varchar(11) NOT NULL DEFAULT 'nao',
  `grau` int(11) NOT NULL,
  `localidade` varchar(220) NOT NULL,
  `numero` int(11) NOT NULL,
  `pedido_em` timestamp NOT NULL DEFAULT current_timestamp(),
  `preco` varchar(220) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) unsigned NOT NULL,
  `path` varchar(220) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `path`, `id_usuario`) VALUES
(1, 'public/img/undraw_profile_2.svg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) unsigned NOT NULL,
  `email` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `nivel` int(11) NOT NULL DEFAULT 0,
  `data_nascimento` date NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`, `nivel`, `data_nascimento`, `criado_em`) VALUES
(1, 'vectorclever00@gmail.com', '$2y$10$Q0NHOGcVL74Si5GamJHcAO/AXSmVyI5Y7baV8I7lHMkemmBSN5Iva', 'VictorClever', 1, '0001-01-01', '2022-11-16 23:13:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solicitacao`
--
ALTER TABLE `solicitacao`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
