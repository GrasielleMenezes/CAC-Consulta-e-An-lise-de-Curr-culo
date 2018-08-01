-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 17-Jun-2015 às 18:22
-- Versão do servidor: 5.5.43-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `analise`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `nome_aluno` varchar(100) NOT NULL,
  `matricula_aluno` varchar(50) NOT NULL,
  `senha` varchar(150) NOT NULL,
  PRIMARY KEY (`matricula_aluno`),
  UNIQUE KEY `nome_aluno` (`nome_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`nome_aluno`, `matricula_aluno`, `senha`) VALUES
('jose', 'abc123', '5b53cad999b409898a88133ca9851b097abb500d'),
('teste2', 'abc456', '456abc'),
('admin', 'cba123', '9d3cc7d3874249876e96b9b68865cb8b02c50b33'),
('pedro', 'cba456', '55a1b02046146d34402fe09cb93b568de962bcde');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE IF NOT EXISTS `disciplinas` (
  `periodo` varchar(11) NOT NULL,
  `id_disciplina` varchar(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `nome_disciplina` varchar(75) NOT NULL,
  `carga` int(11) NOT NULL,
  `credito` int(11) NOT NULL,
  `pre_requisito` varchar(11) NOT NULL,
  PRIMARY KEY (`id_disciplina`),
  UNIQUE KEY `nome_disciplina` (`nome_disciplina`),
  UNIQUE KEY `codigo` (`codigo`),
  UNIQUE KEY `id_disciplina` (`id_disciplina`),
  KEY `carga` (`carga`),
  KEY `periodo` (`periodo`),
  KEY `pre_requisito` (`pre_requisito`),
  KEY `credito` (`credito`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`periodo`, `id_disciplina`, `codigo`, `nome_disciplina`, `carga`, `credito`, `pre_requisito`) VALUES
('5', 'ADM1110', 'EMP', 'Empreendedorismo', 40, 2, ''),
('5', 'ADM1120', 'PEA', 'Planejamento Estratégico Aplicado a TIC', 40, 2, ''),
('5', 'DIR1110', 'LEI', 'Legislação em Informática', 40, 2, ''),
('1', 'INF1110', 'PRC', 'Programação e Estrutura de Dados em C', 120, 6, ''),
('2', 'INF1120', 'POO', 'Programação Orientada a Objetos e Algoritmos em C+', 120, 6, 'PRC'),
('3', 'INF1130', 'PRJ', 'Programação em Java', 120, 6, 'POO'),
('4', 'INF1140', 'PAV', 'Programação em Ambiente Visual', 80, 4, 'POO'),
('4', 'INF1150', 'ICG', 'Introdução Computação Gráfica', 100, 5, 'PRC'),
('1', 'INF1210', 'OC1', 'Organização de Computadores I', 120, 6, ''),
('1', 'INF1220', 'LFT', 'Laboratório de Fundamentos de TIC', 80, 4, ''),
('2', 'INF1230', 'OC2', 'Organização de Computadores II', 120, 6, 'OC1'),
('3', 'INF1240', 'SO1', 'Sistemas Operacionais I', 100, 5, 'OC2'),
('4', 'INF1250', 'SO2', 'Sistemas Operacionais II', 80, 4, 'SO1'),
('2', 'INF1310', 'BD1', 'Banco de Dados I', 60, 3, ''),
('3', 'INF1320', 'BD2', 'Banco de Dados II', 80, 4, 'BD1'),
('3', 'INF1410', 'RD1', 'Redes de Computadores I', 100, 5, ''),
('4', 'INF1420', 'RD2', 'Redes de Computadores II', 80, 4, 'RD1'),
('4', 'INF1440', 'TCD', 'Tecnologias de Comunicação de Dados', 80, 4, 'PCD'),
('4', 'INF1510', 'SIN', 'Segurança da Informação', 80, 4, ''),
('5', 'INF1520', 'MQA', 'Métodos Quantitativos Aplicados a TIC', 80, 4, ''),
('5', 'INF1530', 'SAS', 'Segurança e Auditoria de Sistemas', 80, 4, ''),
('5', 'INF1540', 'SMH', 'Sistemas Multimídia e Hipermídia', 40, 2, ''),
('5', 'INF1550', 'SAD', 'Sistemas de Apoio à Decisão', 40, 2, 'BD2'),
('5', 'INF1610', 'CEL', 'Comércio Eletrônico', 40, 2, ''),
('2', 'LET1110', 'POI', 'Português Instrumental', 40, 2, ''),
('1', 'LET1120', 'IT1', 'Inglês Técnico I', 80, 4, ''),
('2', 'LET1130', 'IT2', 'Inglês Técnico II', 60, 3, ''),
('1', 'MAT1110', 'MAD', 'Matemática Discreta', 80, 4, ''),
('2', 'MAT1120', 'MAT', 'Matemática', 100, 5, 'MAD'),
('3', 'NF1430', 'PCD', 'Princípios de Comunicação de Dados', 100, 5, 'MAT'),
('5', 'PSI1110', 'PAI', 'Psicologia Aplicada a Informática', 40, 2, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horas_complementares`
--

CREATE TABLE IF NOT EXISTS `horas_complementares` (
  `descricao` varchar(125) NOT NULL,
  `quant_horas` int(11) NOT NULL,
  `id_matricula` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horas_complementares`
--

INSERT INTO `horas_complementares` (`descricao`, `quant_horas`, `id_matricula`) VALUES
('Curso', 20, ''),
('Curso', 20, 'abc123'),
('Palestra', 2, 'abc123'),
('teste', 40, 'abc123'),
('teste', 40, 'abc123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horas_estagio`
--

CREATE TABLE IF NOT EXISTS `horas_estagio` (
  `descricao_estagio` text NOT NULL,
  `horas_estagio` int(11) NOT NULL,
  `id_matricula` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horas_estagio`
--

INSERT INTO `horas_estagio` (`descricao_estagio`, `horas_estagio`, `id_matricula`) VALUES
('teste', 20, 'abc123'),
('teste', 20, 'abc123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pendencias`
--

CREATE TABLE IF NOT EXISTS `pendencias` (
  `matricula_aluno` varchar(11) NOT NULL,
  `codigo_disciplinas` varchar(11) NOT NULL,
  `situacao` varchar(11) NOT NULL,
  KEY `codigo_disciplinas` (`codigo_disciplinas`,`situacao`),
  KEY `matricula_aluno` (`matricula_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pendencias`
--

INSERT INTO `pendencias` (`matricula_aluno`, `codigo_disciplinas`, `situacao`) VALUES
('abc123', 'LFT', 'cursando'),
('abc123', 'PRC', 'concluido'),
('abc123', 'MAD', 'cursando'),
('abc456', 'IT1', 'concluido'),
('abc123', 'IT2', 'concluido'),
('abc456', 'PRC', 'cursando');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tcc`
--

CREATE TABLE IF NOT EXISTS `tcc` (
  `situacao` varchar(25) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `prazo_conclusao` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `id_matricula` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tcc`
--

INSERT INTO `tcc` (`situacao`, `titulo`, `prazo_conclusao`, `data_inicio`, `id_matricula`) VALUES
('Avaliando', 'Engenharia de Software', 30, '2015-06-12', 'abc123'),
('aberta', 'Engenharia de Software', 30, '0000-00-00', 'abc123'),
('concluida', 'Engenharia de Software', 30, '0000-00-00', 'abc123'),
('aberta', 'Redes', 60, '0000-00-00', 'abc123'),
('em analise', 'Inteligencia Artificial', 60, '2015-06-10', 'abc123'),
('concluida', 'Inteligencia Artificial', 60, '2015-06-18', 'abc123'),
('concluida', 'Engenharia de Software', 30, '2015-06-15', 'abc123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
