-- phpMyAdmin SQL Dump
-- version 3.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: Set 05, 2013 as 02:47 AM
-- Versão do Servidor: 5.1.52
-- Versão do PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bd_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_senha`
--

CREATE TABLE IF NOT EXISTS `tb_senha` (
  `Nome` varchar(50) NOT NULL,
  `Senha` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_senha`
--

INSERT INTO `tb_senha` (`Nome`, `Senha`) VALUES
('teste', 'teste'),
('teste', '8e6f6f815b50f474cf0dc22d4f400725'),
('testando', '25f9e794323b453885f5181f1b624d0b');
