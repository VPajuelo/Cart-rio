-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Abr-2022 às 00:10
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
-- Banco de dados: `noticias_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios_tb`
--

CREATE TABLE `comentarios_tb` (
  `id_comentario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `comentario` tinytext NOT NULL,
  `status` enum('in','ap','rp') NOT NULL,
  `id_not` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comentarios_tb`
--

INSERT INTO `comentarios_tb` (`id_comentario`, `nome`, `email`, `data`, `comentario`, `status`, `id_not`) VALUES
(1, 'Fernando', 'email@email.com', '2022-04-11', 'É fake news!!!', 'in', 9),
(2, 'Xau Xau', 'xauxau@xauxau.com', '2022-04-11', 'Xau Xau', 'in', 9),
(3, 'Xau Xau', 'email@email.com', '2022-04-11', 'xaaaau', 'in', 9),
(4, 'Fernando', 'email@email.com', '2022-04-11', 'teste', 'in', 16),
(6, 'Testador', 'teste@teste.com', '2022-04-11', 'Teste', 'in', 15),
(7, 'Testador', 'teste@teste.com', '2022-04-11', 'Teste ', 'in', 15),
(8, 'Xau Xau', 'email@email.com', '2022-04-11', 'xau xau', 'in', 15),
(9, 'Xau Xau', 'xauxau@xauxau.com', '2022-04-11', 'Xau xau', 'in', 15),
(10, 'Teste 2', 'teste@teste.com', '2022-04-11', 'Teste 2', 'in', 15),
(11, 'Testador', 'teste@teste.com', '2022-04-11', 'asdasd', 'in', 15),
(12, 'Testador', 'teste@teste.com', '2022-04-11', 'asdasdasdsa', 'in', 15),
(13, 'asdasdasdasd', 'asdas@asdasd.asdas', '2022-04-11', 'asdasd', 'in', 15);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios_tb`
--
ALTER TABLE `comentarios_tb`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_not` (`id_not`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios_tb`
--
ALTER TABLE `comentarios_tb`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comentarios_tb`
--
ALTER TABLE `comentarios_tb`
  ADD CONSTRAINT `comentarios_tb_ibfk_1` FOREIGN KEY (`id_not`) REFERENCES `noticias_tb` (`id_noticia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
