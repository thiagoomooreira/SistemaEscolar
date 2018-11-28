-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 28-Nov-2018 às 15:59
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemaescolar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `serie` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `serie`) VALUES
(1, 'Thiago Moreira', '2'),
(2, 'Aline', '3'),
(6, 'Teste', '3'),
(7, 'Rosimeire', '1'),
(8, 'Eli Gabilon', '1 Ano');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
