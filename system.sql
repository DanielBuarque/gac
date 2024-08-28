-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/05/2023 às 00:09
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `system`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco1` varchar(100) NOT NULL,
  `fone` varchar(50) NOT NULL,
  `carro` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `ano` int(4) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `km` int(20) NOT NULL,
  `datacliente` date NOT NULL,
  `obs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `endereco1`, `fone`, `carro`, `modelo`, `ano`, `placa`, `km`, `datacliente`, `obs`) VALUES
(80, 'Daniel', 'Acesso Terra Nova, 601. Casa, 157. Terra Nova. Alvorada.', '(51) 99156-3661', 'Voyage', 'City', 2009, 'IPS5B20', 1000, '2023-05-29', 'Adicionado hoje.'),
(81, 'Ruleni Aragon', 'Acesso Terra Nova, 601. Casa, 157. Terra Nova. Alvorada.', '(51) 99999-9999', 'Polo', 'Track', 2023, 'xyz1234', 0, '2023-05-29', 'Adicionado hoje.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `notaservico`
--

CREATE TABLE `notaservico` (
  `id` int(11) NOT NULL,
  `data_nota` date NOT NULL,
  `descricao` text NOT NULL,
  `qntde1` int(11) NOT NULL,
  `descr1` text NOT NULL,
  `val1` int(11) NOT NULL,
  `qntde2` int(11) NOT NULL,
  `descr2` text NOT NULL,
  `val2` int(11) NOT NULL,
  `qntde3` int(11) NOT NULL,
  `descr3` text NOT NULL,
  `val3` int(11) NOT NULL,
  `qntde4` int(11) NOT NULL,
  `descr4` text NOT NULL,
  `val4` int(11) NOT NULL,
  `qntde5` int(11) NOT NULL,
  `descr5` text NOT NULL,
  `val5` int(11) NOT NULL,
  `qntde6` int(11) NOT NULL,
  `descr6` text NOT NULL,
  `val6` int(11) NOT NULL,
  `qntde7` int(11) NOT NULL,
  `descr7` text NOT NULL,
  `val7` int(11) NOT NULL,
  `qntde8` int(11) NOT NULL,
  `descr8` text NOT NULL,
  `val8` int(11) NOT NULL,
  `maodeobra` int(11) NOT NULL,
  `totalvalores` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Despejando dados para a tabela `notaservico`
--

INSERT INTO `notaservico` (`id`, `data_nota`, `descricao`, `qntde1`, `descr1`, `val1`, `qntde2`, `descr2`, `val2`, `qntde3`, `descr3`, `val3`, `qntde4`, `descr4`, `val4`, `qntde5`, `descr5`, `val5`, `qntde6`, `descr6`, `val6`, `qntde7`, `descr7`, `val7`, `qntde8`, `descr8`, `val8`, `maodeobra`, `totalvalores`, `id_client`) VALUES
(75, '2023-05-29', 'Troca de óleo', 4, 'Óleo', 99, 1, 'Filtro', 50, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 100, 546, 80),
(76, '2023-05-29', 'Revisão', 1, 'revisão', 300, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 300, 600, 81);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES
(1, 'admin', '240248'),
(2, 'dbuarque', '240248'),
(3, 'guilherme', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `notaservico`
--
ALTER TABLE `notaservico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `notaservico`
--
ALTER TABLE `notaservico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `notaservico`
--
ALTER TABLE `notaservico`
  ADD CONSTRAINT `id_client` FOREIGN KEY (`id_client`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
