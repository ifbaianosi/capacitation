-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 04-Ago-2017 às 21:47
-- Versão do servidor: 5.5.44-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `capacitation`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `idemployee` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `siape` varchar(45) NOT NULL,
  `classification` char(4) NOT NULL,
  `office` varchar(45) NOT NULL,
  `email` text CHARACTER SET ascii NOT NULL,
  `phone` varchar(16) NOT NULL,
  `birth` date NOT NULL,
  `entry_service` date NOT NULL,
  `out_service` date NOT NULL,
  `annotation` varchar(160) NOT NULL,
  PRIMARY KEY (`idemployee`),
  UNIQUE KEY `siape_UNIQUE` (`siape`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `employee`
--

INSERT INTO `employee` (`idemployee`, `name`, `surname`, `siape`, `classification`, `office`, `email`, `phone`, `birth`, `entry_service`, `out_service`, `annotation`) VALUES
(1, 'Maria', 'das Graças', '2526348', 'TAE', 'Odontóloga', 'maria@teste.com.br', '', '1991-11-20', '2010-02-07', '0000-00-00', 'Efetiva');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
