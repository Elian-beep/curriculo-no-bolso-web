-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/03/2024 às 18:17
-- Versão do servidor: 8.0.31
-- Versão do PHP: 8.2.12

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
  `id` int NOT NULL,
  `instituicao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `curso` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termino` year DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_usuario` int NOT NULL,
  `id_curriculo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `certificacoes`
--

INSERT INTO `certificacoes` (`id`, `instituicao`, `curso`, `termino`, `descricao`, `id_usuario`, `id_curriculo`) VALUES
(10, 'ifam', 'informática', '2018', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa vel officia iusto corporis quasi debitis cumque fuga sunt. Necessitatibus facilis libero possimus voluptates perspiciatis totam laudantium error animi adipisci voluptatem!', 8, 33);

-- --------------------------------------------------------

--
-- Estrutura para tabela `curriculos`
--

CREATE TABLE `curriculos` (
  `id` int NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_celular` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_portfolio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resumo_profissional` text COLLATE utf8mb4_unicode_ci,
  `id_usuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `curriculos`
--

INSERT INTO `curriculos` (`id`, `titulo`, `numero_celular`, `link_linkedin`, `link_portfolio`, `resumo_profissional`, `id_usuario`) VALUES
(33, 'Dev PHP', '92 985878449', 'https://www.linkedin.com/in/elian-batista/', 'https://codeport.vercel.app', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam quasi earum unde libero exercitationem mollitia expedita est beatae, excepturi in. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam cupiditate excepturi odit, ullam earum impedit alias unde modi ex optio fugiat animi molestias rem mollitia voluptate hic nostrum atque iure dignissimos illo cumque! Dolore molestiae molestias unde commodi, quidem voluptate dolorum corrupti doloribus corporis, eligendi repudiandae quisquam nam, consequatur at.', 8),
(34, 'a', 'a', '', '', 'a', 8);

-- --------------------------------------------------------

--
-- Estrutura para tabela `curriculos_certificacoes`
--

CREATE TABLE `curriculos_certificacoes` (
  `id` int NOT NULL,
  `id_curriculos` int NOT NULL,
  `id_certificacoes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `curriculos_experiencias`
--

CREATE TABLE `curriculos_experiencias` (
  `id` int NOT NULL,
  `id_curriculos` int NOT NULL,
  `id_experiencias` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `curriculos_formacoes`
--

CREATE TABLE `curriculos_formacoes` (
  `id` int NOT NULL,
  `id_curriculos` int NOT NULL,
  `id_formacoes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `curriculos_premiacoes`
--

CREATE TABLE `curriculos_premiacoes` (
  `id` int NOT NULL,
  `id_curriculos` int NOT NULL,
  `id_premiacoes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `experiencias`
--

CREATE TABLE `experiencias` (
  `id` int NOT NULL,
  `empresa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inicio` year DEFAULT NULL,
  `termino` year DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_usuario` int NOT NULL,
  `id_curriculo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `experiencias`
--

INSERT INTO `experiencias` (`id`, `empresa`, `cargo`, `inicio`, `termino`, `descricao`, `id_usuario`, `id_curriculo`) VALUES
(5, 'Bemol Digital', 'Estagiário', '2023', '2024', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, sequi aliquam repellendus tenetur ducimus ullam voluptatem!', 8, 33);

-- --------------------------------------------------------

--
-- Estrutura para tabela `formacoes`
--

CREATE TABLE `formacoes` (
  `id` int NOT NULL,
  `instituicao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `curso` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inicio` year DEFAULT NULL,
  `termino` year DEFAULT NULL,
  `id_tipo` int DEFAULT NULL,
  `id_usuario` int NOT NULL,
  `id_curriculo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `formacoes`
--

INSERT INTO `formacoes` (`id`, `instituicao`, `curso`, `inicio`, `termino`, `id_tipo`, `id_usuario`, `id_curriculo`) VALUES
(16, 'ifam', 'informática', '2016', '2018', 2, 8, 33),
(17, 'uea', 'ciência da computação', '2019', '2024', 5, 8, 33);

-- --------------------------------------------------------

--
-- Estrutura para tabela `premiacoes`
--

CREATE TABLE `premiacoes` (
  `id` int NOT NULL,
  `instituicao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `premiacao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ano_premiacao` year DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_usuario` int NOT NULL,
  `id_curriculo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `premiacoes`
--

INSERT INTO `premiacoes` (`id`, `instituicao`, `premiacao`, `ano_premiacao`, `descricao`, `id_usuario`, `id_curriculo`) VALUES
(4, 'ifam', 'robótica', '2018', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A atque est, consequatur provident doloribus eveniet qui maxime! Mollitia, culpa consequuntur sunt error reprehenderit sequi, dolorum doloremque quos, eius aliquam vero?', 8, 33);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_formacao`
--

CREATE TABLE `tipo_formacao` (
  `id` int NOT NULL,
  `descricao` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tipo_formacao`
--

INSERT INTO `tipo_formacao` (`id`, `descricao`) VALUES
(1, 'Fundamental'),
(2, 'Médio'),
(3, 'Técnico'),
(4, 'Tecnólogo'),
(5, 'Graduação'),
(6, 'Pós Graduação'),
(7, 'Mestrado'),
(8, 'Doutorado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nome_completo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_completo`, `email`, `senha`) VALUES
(8, 'Elian Oliveria Batista', 'elian.19batista@gmail.com', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `certificacoes`
--
ALTER TABLE `certificacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `certificacoes_ibfk_1` (`id_curriculo`);

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
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_curriculo` (`id_curriculo`);

--
-- Índices de tabela `formacoes`
--
ALTER TABLE `formacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_curriculo` (`id_curriculo`);

--
-- Índices de tabela `premiacoes`
--
ALTER TABLE `premiacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_curriculo` (`id_curriculo`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `curriculos`
--
ALTER TABLE `curriculos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `curriculos_certificacoes`
--
ALTER TABLE `curriculos_certificacoes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `curriculos_experiencias`
--
ALTER TABLE `curriculos_experiencias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `curriculos_formacoes`
--
ALTER TABLE `curriculos_formacoes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `curriculos_premiacoes`
--
ALTER TABLE `curriculos_premiacoes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `experiencias`
--
ALTER TABLE `experiencias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `formacoes`
--
ALTER TABLE `formacoes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `premiacoes`
--
ALTER TABLE `premiacoes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tipo_formacao`
--
ALTER TABLE `tipo_formacao`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `certificacoes`
--
ALTER TABLE `certificacoes`
  ADD CONSTRAINT `certificacoes_ibfk_1` FOREIGN KEY (`id_curriculo`) REFERENCES `curriculos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `experiencias_ibfk_1` FOREIGN KEY (`id_curriculo`) REFERENCES `curriculos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `formacoes`
--
ALTER TABLE `formacoes`
  ADD CONSTRAINT `formacoes_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_formacao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formacoes_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formacoes_ibfk_3` FOREIGN KEY (`id_curriculo`) REFERENCES `curriculos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `premiacoes`
--
ALTER TABLE `premiacoes`
  ADD CONSTRAINT `premiacoes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `premiacoes_ibfk_2` FOREIGN KEY (`id_curriculo`) REFERENCES `curriculos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
