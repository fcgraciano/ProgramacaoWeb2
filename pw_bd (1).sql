-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/10/2024 às 22:13
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pw_bd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `Id` int(11) NOT NULL,
  `Descricao` varchar(80) NOT NULL,
  `Valor` decimal(10,2) NOT NULL,
  `Imagem` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`Id`, `Descricao`, `Valor`, `Imagem`) VALUES
(1, 'Mesa Gamer', 999.00, NULL),
(2, 'Mouse RedDragon', 250.00, NULL),
(3, 'Teclado Mecanico', 510.00, NULL),
(4, 'Tablet', 10.50, NULL),
(5, 'Tablet', 10.50, NULL),
(6, 'Tablet', 10.50, NULL),
(7, 'Tablet', 10.50, NULL),
(8, 'Tablet', 10.50, NULL),
(9, 'Tablet', 10.50, NULL),
(10, 'Tablet', 10.50, NULL),
(11, 'Tablet', 10.50, NULL),
(12, 'Tablet', 10.50, NULL),
(13, 'Tablet', 10.50, NULL),
(14, 'Tablet', 10.50, NULL),
(15, 'Tablet', 10.50, NULL),
(16, 'Tablet', 10.50, NULL),
(17, 'Tablet', 10.50, NULL),
(18, 'Tablet', 10.50, NULL),
(19, 'Tablet', 10.50, NULL),
(20, 'Tablet', 10.50, NULL),
(21, 'Tablet', 10.50, NULL),
(22, 'Tablet', 10.50, NULL),
(23, 'Tablet', 10.50, NULL),
(24, 'Tablet', 10.50, NULL),
(25, 'Tablet', 10.50, NULL),
(26, 'Tablet', 10.50, NULL),
(27, 'Tablet', 10.50, NULL),
(28, 'Tablet', 10.50, NULL),
(29, 'Tablet', 10.50, NULL),
(30, 'Tablet', 10.50, NULL),
(31, 'Tablet', 10.50, NULL),
(32, 'Memoria RAM DDR5', 150.00, NULL),
(33, 'Memoria RAM DDR5', 150.00, NULL),
(34, 'Memoria RAM DDR5', 125.30, NULL),
(35, 'Memoria RAM DDR5', 136.78, NULL),
(36, 'MOnitor', 120.00, NULL),
(37, 'Fone de ouvido', 199.00, NULL),
(38, 'fafafaf', 251.36, NULL),
(39, 'Memoria RAM DDR5', 45.00, 'notebook.jpeg'),
(40, 'Memoria RAM DDR5', 234.00, 'notebook.jpeg'),
(41, 'MOnitor', 234.00, 'placa-video.jpeg'),
(42, 'Memoria RAM DDR5', 234.00, 'memoria.jpg'),
(43, 'MEsa gamer', 125.00, 'memoria.jpg'),
(44, 'Tablet', 4444.00, 'memoria.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
