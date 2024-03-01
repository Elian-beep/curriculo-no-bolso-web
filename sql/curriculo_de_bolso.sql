-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/03/2024 às 22:14
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `curriculo_de_bolso`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `certificacoes`
--

CREATE TABLE `certificacoes` (
  `id` int(11) NOT NULL,
  `instituicao` varchar(255) DEFAULT NULL,
  `curso` varchar(255) DEFAULT NULL,
  `termino` year(4) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `curriculos`
--

CREATE TABLE `curriculos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `numero_celular` varchar(14) NOT NULL,
  `link_linkedin` varchar(255) DEFAULT NULL,
  `link_portfolio` varchar(255) DEFAULT NULL,
  `resumo_profissional` text DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `curriculos_certificacoes`
--

CREATE TABLE `curriculos_certificacoes` (
  `id` int(11) NOT NULL,
  `id_curriculos` int(11) NOT NULL,
  `id_certificacoes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `curriculos_experiencias`
--

CREATE TABLE `curriculos_experiencias` (
  `id` int(11) NOT NULL,
  `id_curriculos` int(11) NOT NULL,
  `id_experiencias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `curriculos_formacoes`
--

CREATE TABLE `curriculos_formacoes` (
  `id` int(11) NOT NULL,
  `id_curriculos` int(11) NOT NULL,
  `id_formacoes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `curriculos_premiacoes`
--

CREATE TABLE `curriculos_premiacoes` (
  `id` int(11) NOT NULL,
  `id_curriculos` int(11) NOT NULL,
  `id_premiacoes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `experiencias`
--

CREATE TABLE `experiencias` (
  `id` int(11) NOT NULL,
  `empresa` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `inicio` year(4) DEFAULT NULL,
  `termino` year(4) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `formacoes`
--

CREATE TABLE `formacoes` (
  `id` int(11) NOT NULL,
  `instituicao` varchar(255) DEFAULT NULL,
  `curso` varchar(255) DEFAULT NULL,
  `inicio` year(4) DEFAULT NULL,
  `termino` year(4) DEFAULT NULL,
  `id_tipo` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `premiacoes`
--

CREATE TABLE `premiacoes` (
  `id` int(11) NOT NULL,
  `instituicao` varchar(255) DEFAULT NULL,
  `premiacao` varchar(255) DEFAULT NULL,
  `ano_premiacao` year(4) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_formacao`
--

CREATE TABLE `tipo_formacao` (
  `id` int(11) NOT NULL,
  `descricao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `certificacoes`
--
ALTER TABLE `certificacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `curriculos`
--
ALTER TABLE `curriculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curriculos_ibfk_1` (`id_usuario`);

--
-- Índices de tabela `curriculos_certificacoes`
--
ALTER TABLE `curriculos_certificacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_curriculos` (`id_curriculos`),
  ADD KEY `id_certificacoes` (`id_certificacoes`);

--
-- Índices de tabela `curriculos_experiencias`
--
ALTER TABLE `curriculos_experiencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_curriculos` (`id_curriculos`),
  ADD KEY `id_experiencias` (`id_experiencias`);

--
-- Índices de tabela `curriculos_formacoes`
--
ALTER TABLE `curriculos_formacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_curriculos` (`id_curriculos`),
  ADD KEY `id_formacoes` (`id_formacoes`);

--
-- Índices de tabela `curriculos_premiacoes`
--
ALTER TABLE `curriculos_premiacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_curriculos` (`id_curriculos`),
  ADD KEY `id_premiacoes` (`id_premiacoes`);

--
-- Índices de tabela `experiencias`
--
ALTER TABLE `experiencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `formacoes`
--
ALTER TABLE `formacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `premiacoes`
--
ALTER TABLE `premiacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `tipo_formacao`
--
ALTER TABLE `tipo_formacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `certificacoes`
--
ALTER TABLE `certificacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curriculos`
--
ALTER TABLE `curriculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curriculos_certificacoes`
--
ALTER TABLE `curriculos_certificacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curriculos_experiencias`
--
ALTER TABLE `curriculos_experiencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curriculos_formacoes`
--
ALTER TABLE `curriculos_formacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curriculos_premiacoes`
--
ALTER TABLE `curriculos_premiacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `experiencias`
--
ALTER TABLE `experiencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `formacoes`
--
ALTER TABLE `formacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `premiacoes`
--
ALTER TABLE `premiacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_formacao`
--
ALTER TABLE `tipo_formacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `certificacoes`
--
ALTER TABLE `certificacoes`
  ADD CONSTRAINT `certificacoes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `curriculos`
--
ALTER TABLE `curriculos`
  ADD CONSTRAINT `curriculos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `curriculos_certificacoes`
--
ALTER TABLE `curriculos_certificacoes`
  ADD CONSTRAINT `curriculos_certificacoes_ibfk_1` FOREIGN KEY (`id_curriculos`) REFERENCES `curriculos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `curriculos_certificacoes_ibfk_2` FOREIGN KEY (`id_certificacoes`) REFERENCES `certificacoes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `curriculos_experiencias`
--
ALTER TABLE `curriculos_experiencias`
  ADD CONSTRAINT `curriculos_experiencias_ibfk_1` FOREIGN KEY (`id_curriculos`) REFERENCES `curriculos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `curriculos_experiencias_ibfk_2` FOREIGN KEY (`id_experiencias`) REFERENCES `experiencias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `curriculos_formacoes`
--
ALTER TABLE `curriculos_formacoes`
  ADD CONSTRAINT `curriculos_formacoes_ibfk_1` FOREIGN KEY (`id_curriculos`) REFERENCES `curriculos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `curriculos_formacoes_ibfk_2` FOREIGN KEY (`id_formacoes`) REFERENCES `formacoes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `curriculos_premiacoes`
--
ALTER TABLE `curriculos_premiacoes`
  ADD CONSTRAINT `curriculos_premiacoes_ibfk_1` FOREIGN KEY (`id_curriculos`) REFERENCES `curriculos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `curriculos_premiacoes_ibfk_2` FOREIGN KEY (`id_premiacoes`) REFERENCES `premiacoes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `experiencias`
--
ALTER TABLE `experiencias`
  ADD CONSTRAINT `experiencias_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `formacoes`
--
ALTER TABLE `formacoes`
  ADD CONSTRAINT `formacoes_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_formacao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formacoes_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `premiacoes`
--
ALTER TABLE `premiacoes`
  ADD CONSTRAINT `premiacoes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
