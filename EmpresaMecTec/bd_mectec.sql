-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jun-2023 às 20:05
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_mectec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_equipamento`
--

CREATE TABLE `tb_equipamento` (
  `id_equip` int(11) NOT NULL,
  `id_cli` int(7) DEFAULT NULL,
  `nome` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `cor` varchar(40) NOT NULL,
  `observacao` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_equipamento`
--

INSERT INTO `tb_equipamento` (`id_equip`, `id_cli`, `nome`, `marca`, `modelo`, `cor`, `observacao`) VALUES
(1, 5, 'Ruan Pablo', 'multilaser', 'g5', 'azul', ''),
(2, 6, 'jen', 'celular samsung', 'j8', 'rosa', ''),
(3, 6, 'jen', 'notebook', 'samsung', 'rosa', ''),
(4, 6, 'jen', 'mouse', 'pichau', 'vermelho', ''),
(5, 5, 'Ruan Pablo', 'Notebook', 'samsung', 'preto', ''),
(6, 6, 'jen', 'celular', 'a8', 'azul', ''),
(7, 7, 'Ana Ellen', 'Mouse ', 'Pichau p701', 'preto', ''),
(8, 8, 'Marcos Vinicius', 'PC Gamer pichau', 'i9 12K', 'Vermelho', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_os`
--

CREATE TABLE `tb_os` (
  `id_os` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_equip` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `orcamento` double DEFAULT NULL,
  `diagnostico` varchar(300) DEFAULT NULL,
  `observacao` varchar(300) DEFAULT NULL,
  `dataentrada` varchar(12) DEFAULT NULL,
  `datasaida` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_os`
--

INSERT INTO `tb_os` (`id_os`, `id_user`, `id_equip`, `status`, `orcamento`, `diagnostico`, `observacao`, `dataentrada`, `datasaida`) VALUES
(2, 7, 1, 'Pendente', 200, 'bugado', '', 'Jun 23, 2023', 'Jun 30, 2023'),
(3, 7, 7, 'Cadastrada', 150, 'quebradasso', '', 'Jun 28, 2023', 'Jun 30, 2023'),
(4, 8, 8, 'Pendente', 1200, 'SSD quase voltando', '', 'Jun 28, 2023', 'Jun 29, 2023'),
(5, 8, 8, 'Cadastrada', 250, 'Processador foi de comes', '', 'Jun 28, 2023', 'Jun 29, 2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `niv_perm` varchar(10) NOT NULL,
  `nome_user` varchar(100) NOT NULL,
  `login_user` varchar(100) NOT NULL,
  `senha_user` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `telefone2` varchar(14) DEFAULT NULL,
  `cpf` char(14) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `cep` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `niv_perm`, `nome_user`, `login_user`, `senha_user`, `email`, `telefone`, `telefone2`, `cpf`, `rg`, `rua`, `bairro`, `cidade`, `numero`, `complemento`, `cep`) VALUES
(1, '2', 'admin', 'admin', 'admin', 'admin@gmail.com', '341324234', '', '123.123.123-32', '453453545', 'fdgdfgdfg', 'fdsgdfgdf', 'gdfgdfg', '54', 'gfdfgdfg', '36546456'),
(5, '1', 'Ruan Pablo', 'ruan', 'ruan', 'ruanff@gmail.com', '7355608', '', '123.789.654-66', '123456789', 'rua santa marta ', 'pedrinhas', 'Sobral', '1321', '', '32134-87'),
(6, '1', 'jen', 'jen', 'jen', 'jen@gmail.com', '4234234', '', '123.123.123-87', '45325435', 'sim', 'g', 'sobral', '3', '', '12332-32'),
(7, '1', 'Ana Ellen', 'ellen', 'ellen', 'ellen@hotmail.com', '88994482624', '', '62555416305', '0102010201', 'Rua Vitória', 'Sinhá Saboia', 'Sobral', '72', 'casa', '62050400'),
(8, '1', 'Marcos Vinicius', 'marquin', 'marquin', 'marquin@gmail.com', '88993541715', '', '123.123.123-32', '23123123123', 'Rua nova', 'Cohab 7', 'Catapimbas', '232', '', '32786-544');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_equipamento`
--
ALTER TABLE `tb_equipamento`
  ADD PRIMARY KEY (`id_equip`),
  ADD KEY `id_cli` (`id_cli`);

--
-- Índices para tabela `tb_os`
--
ALTER TABLE `tb_os`
  ADD PRIMARY KEY (`id_os`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_equip` (`id_equip`);

--
-- Índices para tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_equipamento`
--
ALTER TABLE `tb_equipamento`
  MODIFY `id_equip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_os`
--
ALTER TABLE `tb_os`
  MODIFY `id_os` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_equipamento`
--
ALTER TABLE `tb_equipamento`
  ADD CONSTRAINT `id_cli` FOREIGN KEY (`id_cli`) REFERENCES `tb_user` (`id_user`);

--
-- Limitadores para a tabela `tb_os`
--
ALTER TABLE `tb_os`
  ADD CONSTRAINT `id_equip` FOREIGN KEY (`id_equip`) REFERENCES `tb_equipamento` (`id_equip`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
