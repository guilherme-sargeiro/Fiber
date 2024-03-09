-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Mar-2024 às 15:52
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bind_cad`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `nascimento` varchar(10) DEFAULT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `identidade` varchar(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `endereco` varchar(1000) DEFAULT NULL,
  `referencia` varchar(500) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `planos` varchar(500) DEFAULT NULL,
  `vencimento` varchar(2) DEFAULT NULL,
  `pagamento` varchar(200) DEFAULT NULL,
  `indicacao` varchar(100) DEFAULT NULL,
  `id_func` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastros`
--

INSERT INTO `cadastros` (`id`, `nome`, `nascimento`, `CPF`, `identidade`, `email`, `endereco`, `referencia`, `cep`, `telefone`, `planos`, `vencimento`, `pagamento`, `indicacao`, `id_func`) VALUES
(14, 'zé', '10', '12', '12', 'as@we', 'dw', 'gh', '51', '21', 'PLANO GLOBOPLAY-400MB', '20', 'CARTÃO', 'LOJA FILIAL', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id_func` int(11) NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_func`, `user`, `pass`) VALUES
(1, 'gui', '12345678910');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_func`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastros`
--
ALTER TABLE `cadastros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id_func` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
