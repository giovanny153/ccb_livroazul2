-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Set-2018 às 02:50
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ccb_movimentacao`
--

CREATE TABLE `ccb_movimentacao` (
  `id` int(11) NOT NULL,
  `igreja` varchar(99) NOT NULL,
  `tipoRelatorio` varchar(99) NOT NULL,
  `data` date NOT NULL,
  `destacador` varchar(99) NOT NULL,
  `obs` varchar(999) NOT NULL,
  `assinatura` varchar(5) NOT NULL,
  `preenchimento` varchar(5) NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ccb_movimentacao`
--

INSERT INTO `ccb_movimentacao` (`id`, `igreja`, `tipoRelatorio`, `data`, `destacador`, `obs`, `assinatura`, `preenchimento`, `log`) VALUES
(1, '22-1163', 'MAN', '2018-08-17', '', '', '0', '0', '0000-00-00 00:00:00'),
(2, '22-1243', 'ATA', '2018-08-09', 'rafael', 'hymhmh', '0', '0', '0000-00-00 00:00:00'),
(3, '22-1232', 'VSEG', '2018-08-15', 'giovanny', 'Teste de obs', '0', '0', '0000-00-00 00:00:00'),
(4, '22-1232', 'CH-ELE', '0000-00-00', '', '', '0', '0', '0000-00-00 00:00:00'),
(5, '', '', '0000-00-00', '', '', 'on', 'on', '0000-00-00 00:00:00'),
(6, '', '', '0000-00-00', '', '', '', 'on', '0000-00-00 00:00:00'),
(7, '', '', '0000-00-00', '', '', 'on', '', '0000-00-00 00:00:00'),
(8, '', '', '0000-00-00', '', '', 'on', '', '2018-09-01 00:49:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ccb_movimentacao`
--
ALTER TABLE `ccb_movimentacao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ccb_movimentacao`
--
ALTER TABLE `ccb_movimentacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
