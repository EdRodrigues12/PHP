-- phpMyAdmin SQL Dump
-- version 3.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: Set 05, 2013 as 02:45 AM
-- Versão do Servidor: 5.1.52
-- Versão do PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bd_form`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Endereco` varchar(50) NOT NULL,
  `Bairro` varchar(50) NOT NULL,
  `CEP` int(50) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Estado` enum('AC','AL','AM','BA','CE','DF','ES','GO','MA','MG','MT',' MS',' PA',' PB',' PE',' PI',' PR',' RJ',' RN','RO','RR','RS','SC','SE','SP','TO') NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`Codigo`, `Nome`, `Endereco`, `Bairro`, `CEP`, `Cidade`, `Estado`) VALUES
(13, 'Mogli', 'Rua Sao Bento', 'Penha', 101212, 'Sao Paulo', 'SP'),
(14, 'Ana Beatriz', 'Rua Sao Francisco', 'Jardins', 1010101, 'São Paulo', 'SP'),
(15, 'Alice Santos ', 'Rua Sonho Gaucho  ', 'AE.Carvalho ', 102145, 'São Paulo', 'SP'),
(16, 'Joao Ferreira', 'Rua Sao Francisco', 'Centro', 5050132, 'Sao gonçalo', ''),
(17, 'Teste1', 'Teste1', 'Teste1', 5645892, 'Teste1', 'AC'),
(18, 'Teste1', 'Teste1', 'Teste1', 5645892, 'Teste1', 'BA'),
(19, 'Teste55', 'Teste55', 'Teste55', 100000, 'Teste55', 'AC'),
(20, 'Ozzy Osbourne', 'Teste', 'Jardins', 5050132, 'São Paulo', 'SP');
