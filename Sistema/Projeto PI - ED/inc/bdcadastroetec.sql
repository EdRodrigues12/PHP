-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Out 18, 2013 as 10:12 PM
-- Versão do Servidor: 5.5.8
-- Versão do PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bdcadastroetec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbalunos`
--

CREATE TABLE IF NOT EXISTS `tbalunos` (
  `Nome` varchar(150) NOT NULL,
  `CEP` int(10) NOT NULL,
  `Endereco` varchar(150) NOT NULL,
  `Numero` int(5) NOT NULL,
  `Bairro` varchar(50) NOT NULL,
  `Estado` enum('AC','AL','AM','BA','CE','DF','ES','GO','MA','MG','MT',' MS',' PA',' PB',' PE',' PI',' PR',' RJ',' RN','RO','RR','RS','SC','SE','SP','TO') NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Telefone` int(15) NOT NULL,
  `Celular` int(15) NOT NULL,
  `CPF` int(15) NOT NULL,
  `RG` int(15) NOT NULL,
  `UF` varchar(5) NOT NULL,
  `OrgaoExp` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Estadonasc` varchar(50) NOT NULL,
  `Cidnasc` varchar(50) NOT NULL,
  `dianasc` date NOT NULL,
  `Idade` int(2) NOT NULL,
  `Nacionalidade` varchar(50) NOT NULL,
  `Raca` enum('Negro'',''Pardo'',''Indígena'',''Asiático') NOT NULL,
  `Sexo` enum('Masculino','Feminino') NOT NULL,
  PRIMARY KEY (`CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbalunos`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprofessores`
--

CREATE TABLE IF NOT EXISTS `tbprofessores` (
  `Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Apelido` varchar(100) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `CEP` int(10) NOT NULL,
  `Dtnasc` date NOT NULL,
  `Endereco` varchar(150) NOT NULL,
  `Bairro` varchar(100) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Estado` enum('AC','AL','AM','BA','CE','DF','ES','GO','MA','MG','MT',' MS',' PA',' PB',' PE',' PI',' PR',' RJ',' RN','RO','RR','RS','SC','SE','SP','TO') NOT NULL,
  `Telefone` int(15) NOT NULL,
  `Celular` int(15) NOT NULL,
  `Nacionalidade` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Estcivil` enum('Casado','Solteiro','Viúvo','Separado') NOT NULL,
  `Sexo` enum('Masculino','Feminino') NOT NULL,
  `Materia` varchar(100) NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `tbprofessores`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tbresponsaveis`
--

CREATE TABLE IF NOT EXISTS `tbresponsaveis` (
  `Nome` varchar(150) NOT NULL,
  `CEP` int(10) NOT NULL,
  `Endereco` varchar(150) NOT NULL,
  `Numero` int(5) NOT NULL,
  `Bairro` varchar(50) NOT NULL,
  `Estado` enum('AC','AL','AM','BA','CE','DF','ES','GO','MA','MG','MT',' MS',' PA',' PB',' PE',' PI',' PR',' RJ',' RN','RO','RR','RS','SC','SE','SP','TO') NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Telefonecasa` int(15) NOT NULL,
  `Telefonetrab` int(15) NOT NULL,
  `Celular` int(15) NOT NULL,
  `CPF` int(10) NOT NULL,
  `RG` int(10) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Datanasc` date NOT NULL,
  `Idade` int(2) NOT NULL,
  `Nacionalidade` enum('Brasileiro','Americano','Asiatico','Europeia') NOT NULL,
  `Raça` enum('Negro','Indigena','Branco','Asiatico') NOT NULL,
  `Cor` enum('Negro','Pardo','Branco','Amarelo','Outros') NOT NULL,
  `Profissa` varchar(150) NOT NULL,
  PRIMARY KEY (`CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbresponsaveis`
--

