-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 17-Dez-2018 às 14:02
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
  `turmaAluno` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `turma` (`turmaAluno`)
) ENGINE=MyISAM AUTO_INCREMENT=6748 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `turmaAluno`) VALUES
(6739, 'Edivaldo Moreira da Silva', '2'),
(2, 'Aline Moreira', '1'),
(6737, 'Eli Gabilon', '1'),
(6723, 'Thiago Moreira Santos', '1'),
(6740, 'Frata', '1'),
(6746, 'Frutinha', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE IF NOT EXISTS `professor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `turmaProfessor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `turma` (`turmaProfessor`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `turmaProfessor`) VALUES
(3, 'CÃ¡tia', '2'),
(2, 'Carolina', '1'),
(4, 'Irineu Perreira', '1'),
(9, 'TT', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

DROP TABLE IF EXISTS `sala`;
CREATE TABLE IF NOT EXISTS `sala` (
  `idSala` int(20) NOT NULL AUTO_INCREMENT,
  `nomeSala` varchar(100) NOT NULL,
  `capacidade` int(10) NOT NULL,
  PRIMARY KEY (`idSala`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sala`
--

INSERT INTO `sala` (`idSala`, `nomeSala`, `capacidade`) VALUES
(1, 'Turma A', 5),
(2, 'Turma B', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
