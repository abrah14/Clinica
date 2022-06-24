-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Maio-2022 às 22:28
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdclinica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbagenda`
--

CREATE TABLE `tbagenda` (
  `idAgenda` int(11) NOT NULL,
  `dtAgenda` date DEFAULT NULL,
  `horaAgenda` time DEFAULT NULL,
  `idPaciente` int(11) DEFAULT NULL,
  `idProfissional` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpaciente`
--

CREATE TABLE `tbpaciente` (
  `idPaciente` int(11) NOT NULL,
  `nomePaciente` varchar(100) NOT NULL,
  `cpfPaciente` char(14) NOT NULL,
  `rgPaciente` char(14) NOT NULL,
  `dataNascPaciente` date NOT NULL,
  `emailPaciente` varchar(70) NOT NULL,
  `telefonePaciente` varchar(11) NOT NULL,
  `celularPaciente` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprofissional`
--

CREATE TABLE `tbprofissional` (
  `idProfissional` int(11) NOT NULL,
  `nomeProfissional` varchar(100) NOT NULL,
  `cpfProfissional` char(14) NOT NULL,
  `rgProfissional` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbagenda`
--
ALTER TABLE `tbagenda`
  ADD PRIMARY KEY (`idAgenda`),
  ADD KEY `idPaciente` (`idPaciente`),
  ADD KEY `idProfissional` (`idProfissional`);

--
-- Índices para tabela `tbpaciente`
--
ALTER TABLE `tbpaciente`
  ADD PRIMARY KEY (`idPaciente`);

--
-- Índices para tabela `tbprofissional`
--
ALTER TABLE `tbprofissional`
  ADD PRIMARY KEY (`idProfissional`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbagenda`
--
ALTER TABLE `tbagenda`
  MODIFY `idAgenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbpaciente`
--
ALTER TABLE `tbpaciente`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbprofissional`
--
ALTER TABLE `tbprofissional`
  MODIFY `idProfissional` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbagenda`
--
ALTER TABLE `tbagenda`
  ADD CONSTRAINT `tbagenda_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `tbpaciente` (`idPaciente`),
  ADD CONSTRAINT `tbagenda_ibfk_2` FOREIGN KEY (`idProfissional`) REFERENCES `tbprofissional` (`idProfissional`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
