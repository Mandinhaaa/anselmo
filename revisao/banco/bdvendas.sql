-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Ago-2024 às 23:30
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdvendas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbamigos`
--

CREATE TABLE `tbamigos` (
  `codigo` int(11) NOT NULL,
  `amigo` varchar(90) DEFAULT NULL,
  `apelido` varchar(90) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbamigos`
--

INSERT INTO `tbamigos` (`codigo`, `amigo`, `apelido`, `email`) VALUES
(1, 'vi', 'vi', ''),
(2, 'ju', 'ju', 'ju');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprodutos`
--

CREATE TABLE `tbprodutos` (
  `codigo` int(11) NOT NULL,
  `produto` varchar(90) NOT NULL,
  `fabricante` varchar(50) NOT NULL,
  `valor` decimal(8,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbprodutos`
--

INSERT INTO `tbprodutos` (`codigo`, `produto`, `fabricante`, `valor`) VALUES
(7, 'Leite', 'Parmalat', '22'),
(9, 'Arroz', 'Camil', '6'),
(10, 'Feijão', 'Máximo', '7');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbamigos`
--
ALTER TABLE `tbamigos`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbamigos`
--
ALTER TABLE `tbamigos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
