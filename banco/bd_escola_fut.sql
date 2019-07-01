-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 01-Jul-2019 às 21:46
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bd_escola_fut`
--
CREATE DATABASE IF NOT EXISTS `bd_escola_fut` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bd_escola_fut`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `matricula` int(11) NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(30) COLLATE utf8_bin NOT NULL,
  `data_nasc` date NOT NULL,
  `responsavel` varchar(30) COLLATE utf8_bin NOT NULL,
  `nome_pai` varchar(30) COLLATE utf8_bin NOT NULL,
  `nome_mae` varchar(30) COLLATE utf8_bin NOT NULL,
  `serie` varchar(10) COLLATE utf8_bin NOT NULL,
  `escola` varchar(20) COLLATE utf8_bin NOT NULL,
  `foto` varchar(100) COLLATE utf8_bin NOT NULL,
  `cod_turma` int(11) NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `celular`
--

CREATE TABLE IF NOT EXISTS `celular` (
  `cod_celular` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` int(11) NOT NULL,
  `ddd` int(11) NOT NULL,
  `celular` int(11) NOT NULL,
  PRIMARY KEY (`cod_celular`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE IF NOT EXISTS `endereco` (
  `cod_end` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` int(11) NOT NULL,
  `logradouro` varchar(30) COLLATE utf8_bin NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(30) COLLATE utf8_bin NOT NULL,
  `cidade` varchar(20) COLLATE utf8_bin NOT NULL,
  `cep` int(11) NOT NULL,
  `UF` varchar(2) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`cod_end`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `id_professor` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(10) COLLATE utf8_bin NOT NULL,
  `senha` varchar(20) COLLATE utf8_bin NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(15) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_professor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_professor`, `login`, `senha`, `nome`, `telefone`, `email`) VALUES
(1, 'gabriel', '7809', 'Gabriel Félix de Melo Cruz', '19996523603', 'gabrielfm20101@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE IF NOT EXISTS `telefone` (
  `cod_telefone` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` int(11) NOT NULL,
  `ddd` int(11) NOT NULL,
  `telefone` int(11) NOT NULL,
  PRIMARY KEY (`cod_telefone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `cod_turma` int(11) NOT NULL AUTO_INCREMENT,
  `nome_turma` varchar(20) COLLATE utf8_bin NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `hora_inicial` time DEFAULT NULL,
  `hora_final` time NOT NULL,
  `id_atividade` int(11) NOT NULL,
  `cod_professor` int(11) NOT NULL,
  PRIMARY KEY (`cod_turma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`cod_turma`, `nome_turma`, `data_inicio`, `data_fim`, `hora_inicial`, `hora_final`, `id_atividade`, `cod_professor`) VALUES
(4, '', '2019-04-03', '0000-00-00', NULL, '00:00:00', 0, 0),
(5, 'Turma1', '2019-04-03', '2019-07-10', '11:00:00', '11:00:00', 0, 0),
(6, 'Turma 2', '2019-04-17', '2019-05-20', '19:00:00', '23:00:00', 0, 0),
(7, 'Turma 4', '2019-08-30', '2020-02-03', '10:20:00', '11:30:00', 0, 0),
(8, 'Turma 3', '2018-02-23', '2019-05-10', '20:19:00', '21:20:00', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
