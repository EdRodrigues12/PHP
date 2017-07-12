-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: Set 09, 2013 as 11:33 AM
-- Versão do Servidor: 5.1.54
-- Versão do PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bd_cadastro`
--
CREATE DATABASE `bd_cadastro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_cadastro`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_senha`
--

CREATE TABLE IF NOT EXISTS `tb_senha` (
  `Nome` text NOT NULL,
  `Senha` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_senha`
--

