-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Ago-2018 às 17:21
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

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
-- Estrutura da tabela `fin_mov`
--

CREATE TABLE `fin_mov` (
  `id` int(11) NOT NULL,
  `descricao` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `data` varchar(50) DEFAULT NULL,
  `conta` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `categoria` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `pagamento` varchar(8) CHARACTER SET utf8 DEFAULT NULL,
  `valor` decimal(5,2) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fin_mov`
--

INSERT INTO `fin_mov` (`id`, `descricao`, `data`, `conta`, `categoria`, `pagamento`, `valor`, `timestamp`) VALUES
(1, 'Burguer King', '2018-05-01 00:00:00', '', '', 'Débito', '30.00', '2018-08-20 15:20:17'),
(2, 'Subway', '2018-05-01 00:00:00', '', '', 'Dinheiro', '35.74', '2018-08-20 15:20:19'),
(3, 'Mc Donalds', '2018-05-01 00:00:00', '', '', 'Débito', '25.13', '2018-08-20 15:20:20'),
(4, 'Burguer King', '2018-05-03 00:00:00', 'Bradesco', 'Subway', 'Crédito', '25.10', '2018-08-20 15:20:25'),
(5, 'Shopping', '2018-05-03 00:00:00', 'Bradesco', 'Subway', 'Crédito', '352.69', '2018-08-20 15:20:44'),
(6, 'Outback', '25/08', '', '', 'Débito', '143.25', '2018-08-20 15:20:30'),
(7, 'Dafiti', '2018-05-08 00:00:00', 'Santander', 'Roupa', 'Débito', '95.14', '0000-00-00 00:00:00'),
(8, 'Aramis', '2018-05-08 00:00:00', 'Bradesco', 'Subway', 'Crédito', '154.25', '2018-08-20 15:20:37'),
(9, 'Torra torra', '2018-05-08 00:00:00', 'Nubank', 'Roupa', 'Dinheiro', '10.35', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fin_mov`
--
ALTER TABLE `fin_mov`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
