-- phpMyAdmin SQL Dump
-- version 3.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: Nov 08, 2013 as 12:37 AM
-- Versão do Servidor: 5.1.52
-- Versão do PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bdcadastroetec`
--
CREATE DATABASE `bdcadastroetec` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdcadastroetec`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbalunos`
--

CREATE TABLE IF NOT EXISTS `tbalunos` (
  `Matricula` int(11) NOT NULL AUTO_INCREMENT,
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
  `Nacionalidade` varchar(100) NOT NULL,
  `Raca` enum('Negro','Pardo','Indígena','Asiático') NOT NULL,
  `Sexo` enum('Masculino','Feminino') NOT NULL,
  `Turma` varchar(10) NOT NULL,
  `Turno` enum('Manhã','Tarde','Noite') NOT NULL,
  `Curso` varchar(100) NOT NULL,
  PRIMARY KEY (`Matricula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tbalunos`
--

INSERT INTO `tbalunos` (`Matricula`, `Nome`, `CEP`, `Endereco`, `Numero`, `Bairro`, `Estado`, `Cidade`, `Telefone`, `Celular`, `CPF`, `RG`, `UF`, `OrgaoExp`, `Email`, `Estadonasc`, `Cidnasc`, `dianasc`, `Idade`, `Nacionalidade`, `Raca`, `Sexo`, `Turma`, `Turno`, `Curso`) VALUES
(1, 'Matheus Itaqua', 8077129, 'Rua Itaqua', 69, 'Itaqua', 'SP', 'São Paulo', 1122222222, 2147483647, 2147483647, 49512365, 'Sp', 'ssp', 'itaqua@itaqua.com.br', 'sp', 'São Paulo', '1994-10-24', 18, 'Brasileiro', 'Pardo', 'Masculino', '3IB', 'Manhã', 'Técnico em Informática'),
(2, 'Lucio Menezes', 8070130, 'Teste', 10, 'Teste', 'SP', 'Teste', 1234567891, 2147483647, 2147483647, 45213478, 'Teste', 'Teste', 'Teste', 'Teste', 'Teste', '2013-11-13', 22, 'Teste', 'Negro', 'Masculino', '3IB', 'Manhã', 'Técnico Informatica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcadastrosenha`
--

CREATE TABLE IF NOT EXISTS `tbcadastrosenha` (
  `Nome` varchar(150) NOT NULL,
  `Senha` varchar(250) NOT NULL,
  `Nivel` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcadastrosenha`
--

INSERT INTO `tbcadastrosenha` (`Nome`, `Senha`, `Nivel`) VALUES
('Teste1', '202cb962ac59075b964b07152d234b70', 1),
('Teste2', 'caf1a3dfb505ffed0d024130f58c5cfa', 2),
('Teste4', '81dc9bdb52d04dc20036dbd8313ed055', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcadastroturma`
--

CREATE TABLE IF NOT EXISTS `tbcadastroturma` (
  `codturma` int(2) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Curso` varchar(100) NOT NULL,
  `Ano` int(4) NOT NULL,
  `Turno` enum('Manhã','Tarde','Noite') NOT NULL,
  PRIMARY KEY (`codturma`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcadastroturma`
--

INSERT INTO `tbcadastroturma` (`codturma`, `Nome`, `Curso`, `Ano`, `Turno`) VALUES
(1, '3°IB', 'Técnico em Informática', 2012, 'Noite');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcurso`
--

CREATE TABLE IF NOT EXISTS `tbcurso` (
  `codcurso` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(150) NOT NULL,
  `Descricao` varchar(250) NOT NULL,
  `Periodo` enum('Manhã','Tarde','Noite') NOT NULL,
  `Escola` varchar(150) NOT NULL,
  `Cidade` varchar(100) NOT NULL,
  `Ano` int(4) NOT NULL,
  PRIMARY KEY (`codcurso`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tbcurso`
--

INSERT INTO `tbcurso` (`codcurso`, `Nome`, `Descricao`, `Periodo`, `Escola`, `Cidade`, `Ano`) VALUES
(2, 'Técnico em Infomática', 'Curso voltado para área da computação', 'Manhã', 'Etec Zona Leste', 'São Paulo', 2012);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdisciplinas`
--

CREATE TABLE IF NOT EXISTS `tbdisciplinas` (
  `coddisciplina` int(2) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Descricao` varchar(250) NOT NULL,
  `Sigla` varchar(10) NOT NULL,
  PRIMARY KEY (`coddisciplina`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbdisciplinas`
--

INSERT INTO `tbdisciplinas` (`coddisciplina`, `Nome`, `Descricao`, `Sigla`) VALUES
(2, 'Visual Basic', 'Programação', 'V.B');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionario`
--

CREATE TABLE IF NOT EXISTS `tbfuncionario` (
  `codfuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(150) NOT NULL,
  `CEP` int(10) NOT NULL,
  `Endereco` varchar(150) NOT NULL,
  `Numero` int(5) NOT NULL,
  `Bairro` varchar(150) NOT NULL,
  `Estado` enum('AC','AL','AM','BA','CE','DF','ES','GO','MA','MG','MT',' MS',' PA',' PB',' PE',' PI',' PR',' RJ',' RN','RO','RR','RS','SC','SE','SP','TO') NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Telefone` int(15) NOT NULL,
  `Celular` int(15) NOT NULL,
  `CPF` int(15) NOT NULL,
  `RG` int(15) NOT NULL,
  `UF` varchar(5) NOT NULL,
  `Orgaoexpeditor` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Estadonasc` enum('AC','AL','AM','BA','CE','DF','ES','GO','MA','MG','MT',' MS',' PA',' PB',' PE',' PI',' PR',' RJ',' RN','RO','RR','RS','SC','SE','SP','TO') NOT NULL,
  `Cidnasc` varchar(25) NOT NULL,
  `Dianasc` date NOT NULL,
  `Idade` int(2) NOT NULL,
  `Nacionalidade` varchar(100) NOT NULL,
  `Raça` enum('Negro','Pardo','Indígena','Asiático') NOT NULL,
  `Sexo` enum('Masculino','Feminino') NOT NULL,
  `Funcao` varchar(100) NOT NULL,
  `Turno` enum('Manhã','Tarde','Noite') NOT NULL,
  `estcivil` enum('Casado','Solteiro','Viúvo','Separado') NOT NULL,
  PRIMARY KEY (`codfuncionario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tbfuncionario`
--

INSERT INTO `tbfuncionario` (`codfuncionario`, `Nome`, `CEP`, `Endereco`, `Numero`, `Bairro`, `Estado`, `Cidade`, `Telefone`, `Celular`, `CPF`, `RG`, `UF`, `Orgaoexpeditor`, `Email`, `Estadonasc`, `Cidnasc`, `Dianasc`, `Idade`, `Nacionalidade`, `Raça`, `Sexo`, `Funcao`, `Turno`, `estcivil`) VALUES
(2, 'Marcos Vinicio', 8077129, 'Rua frei Fideles mota', 111, 'Pq Cruzeiro do sul', 'SP', 'São Paulo', 1122222222, 2147483647, 2147483647, 2147483647, 'Sp', 'SSP', 'itaqua@itaqua.com.br', 'SP', 'São Paulo', '1978-12-31', 35, '', 'Negro', 'Masculino', 'Professor', 'Manhã', 'Casado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmencao`
--

CREATE TABLE IF NOT EXISTS `tbmencao` (
  `Mencaoparcial` enum('MB','B','R','I') NOT NULL,
  `Nome` varchar(250) NOT NULL,
  `Turma` varchar(10) NOT NULL,
  `Turno` enum('Manhã','Tarde','Noite') NOT NULL,
  `Disciplina` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbmencao`
--

INSERT INTO `tbmencao` (`Mencaoparcial`, `Nome`, `Turma`, `Turno`, `Disciplina`) VALUES
('MB', 'Lucio Menezes', '3IB', 'Manhã', 'PI');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmencaodefinitiva`
--

CREATE TABLE IF NOT EXISTS `tbmencaodefinitiva` (
  `Nome` varchar(150) NOT NULL,
  `Turma` varchar(10) NOT NULL,
  `Turno` enum('Manhã','Tarde','Noite') NOT NULL,
  `Disciplina` varchar(100) NOT NULL,
  `Mencaodefin` enum('MB','B','R','I') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbmencaodefinitiva`
--

INSERT INTO `tbmencaodefinitiva` (`Nome`, `Turma`, `Turno`, `Disciplina`, `Mencaodefin`) VALUES
('Lucio Menezes', '3IB', 'Manhã', 'PI', 'B');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprofessores`
--

CREATE TABLE IF NOT EXISTS `tbprofessores` (
  `Codigo` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `CEP` int(10) NOT NULL,
  `Dtnasc` date NOT NULL,
  `Endereco` varchar(150) NOT NULL,
  `Bairro` varchar(100) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Estado` enum('AC','AL','AM','BA','CE','DF','ES','GO','MA','MG','MT',' MS',' PA',' PB',' PE',' PI',' PR',' RJ',' RN','RO','RR','RS','SC','SE','SP','TO') NOT NULL,
  `Telefone` int(15) NOT NULL,
  `Celular` int(15) NOT NULL,
  `Nacionalidade` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Estcivil` enum('Casado','Solteiro','Viúvo','Separado') NOT NULL,
  `Sexo` enum('Masculino','Feminino') NOT NULL,
  `Materia` varchar(100) NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbprofessores`
--

INSERT INTO `tbprofessores` (`Codigo`, `Nome`, `CEP`, `Dtnasc`, `Endereco`, `Bairro`, `Cidade`, `Estado`, `Telefone`, `Celular`, `Nacionalidade`, `Email`, `Estcivil`, `Sexo`, `Materia`) VALUES
(1, 'Francisco', 8070130, '2013-10-08', 'Rua Frei Fideles Mota', 'Pq. Cruzeiro do Sul', 'São Paulo', '', 2147483647, 2147483647, '', 'edirodrigues97@gmail.com', 'Solteiro', 'Masculino', 'Redes');

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
  `Nacionalidade` varchar(100) NOT NULL,
  `Raça` enum('Negro','Indígena','Branco','Asiático') NOT NULL,
  `Cor` enum('Negro','Pardo','Branco','Amarelo','Outros') NOT NULL,
  `Profissao` varchar(150) NOT NULL,
  `Sexo` enum('Masculino','Feminino') NOT NULL,
  PRIMARY KEY (`CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbresponsaveis`
--

INSERT INTO `tbresponsaveis` (`Nome`, `CEP`, `Endereco`, `Numero`, `Bairro`, `Estado`, `Cidade`, `Telefonecasa`, `Telefonetrab`, `Celular`, `CPF`, `RG`, `Email`, `Datanasc`, `Idade`, `Nacionalidade`, `Raça`, `Cor`, `Profissao`, `Sexo`) VALUES
('Alice', 5050132, 'Rua frei Fideles mota', 69, 'Jardins', 'SP', 'São Paulo', 1122222222, 2147483647, 2147483647, 2147483647, 44585869, 'itaqua@itaqua.com.br', '1990-12-15', 18, '', 'Indígena', '', 'teste', 'Feminino');
